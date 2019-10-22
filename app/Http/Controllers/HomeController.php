<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidateHomeForm;
use App\Http\Requests\ValidateBasicForm;
use App\Http\Requests\ValidateSocialForm;
use App\Http\Requests\ValidatePPCForm;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * show home form
     *
     * @return void
     */
    public function home()
    {
        return view('pages.home');
    }

    /**
     * Validate and set home form data to session
     *
     * @param  mixed $request
     *
     * @return void
     */
    public function setHome(ValidateHomeForm $request)
    {
        // store validated data in sesstion
        $data = $request->validated();
        $request->session()->put('home', $data);
        
        return redirect('/basic-info');
    }

   
    /**
     * show basic form
     *
     * @param  mixed $request
     *
     * @return void
     */
    public function showbasicForm(Request $request)
    {
        // check if home data in session and show basic form 
        $session = $request->session()->all();

        if(isset($session['home']))
        {
            return view('pages.basic');
        }
        else
        {
            redirect('/');
        }
       
    }
    
    /**
     * put data to session and show next form
     * 
     * @param  mixed $request
     *
     * @return void
     */
    public function setBasic(ValidateBasicForm $request) 
    {   
        // get validated data put to session and redirect to form
        $data = $request->validated();
        $request->session()->put('basic', $data);

        if($request->campaign_type === 'social')
        {
            return redirect('/social');
        }
        else
        {
            return redirect('/ppc');
        }
    }
    
    /**
     * social form
     *
     * @param  mixed $request
     *
     * @return void
     */
    public function social(Request $request) 
    {
        $session = $request->session()->all();
        
        if(isset($session['basic']))
        {
            return view('pages.social');
        }
        else
        {
            return redirect('/basic-info');
        }
    }

    /**
     * ppc form
     *
     * @param  mixed $request
     *
     * @return void
     */
    public function ppc(Request $request) 
    {
        $session = $request->session()->all();
        
        if(isset($session['basic']))
        {
            return view('pages.ppc');
        }
        else
        {
            return redirect('/basic-info');
        }
    }

    /**
     * store social form data
     *
     * @param  mixed $reqeuest
     *
     * @return void
     */
    public function storeSocial(ValidateSocialForm $request)
    {
        $session = $request->session()->all();
        $data = $request->validated();

        // loop through session data from forms and assign to new array for mass assignment
        foreach ($session['home'] as $key => $value) 
        {
            $brief_data[$key] = $value;
        }

        foreach ($session['basic'] as $key => $value)
        {
            $brief_data[$key] = $value;
        }

        //store brief data
        $brief = new \App\Brief;
        $brief->fill($brief_data);
        $brief->save();

        // store social form data
        $social = new \App\Social;
        $social->fill($data);
        $social->save();
        
        // store id in brief for FK
        $brief->social_id = $social->id;
        $brief->save();

        // flush session after store
        $request->session()->flush();

        // send emails
        Mail::to($brief->client_email)->send(new \App\Mail\Autoreply($brief));
        Mail::to('Briefs@itg.co.uk')->send(new \App\Mail\Briefs($brief));

        return redirect('/thanks'); 
    }

    /**
     * store all data
     *
     * @param  mixed $request
     *
     * @return void
     */
    public function storePPC(ValidatePPCForm $request)
    {   
        // get all session data
        $session = $request->session()->all();
        $data = $request->validated();
        
        // loop through session data from forms and assign to new array for mass assignment
        foreach ($session['home'] as $key => $value) 
        {
            $brief_data[$key] = $value;
        }

        foreach ($session['basic'] as $key => $value)
        {
            $brief_data[$key] = $value;
        }

        //store brief data
        $brief = new \App\Brief;
        $brief->fill($brief_data);
        $brief->save();
        
        // store ppc form data
        $ppc = new \App\PPC;
        $ppc->fill($data);
        $ppc->save();
        // store id in brief for FK 
        $brief->ppc_id = $ppc->id;
        $brief->save();

        // flush session after store
        $request->session()->flush();

        // send emails
        Mail::to($brief->client_email)->send(new \App\Mail\Autoreply($brief));
        Mail::to('Briefs@itg.co.uk')->send(new \App\Mail\Briefs($brief));

        return redirect('/thanks'); 
    }

    /**
     * thanks page
     *
     * @return void
     */
    public function thanks()
    {
        return view('pages.thanks');
    }
    
}
