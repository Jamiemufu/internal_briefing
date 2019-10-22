<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class BriefController extends Controller
{
    /**
     * view/download pdf
     *
     * @param  mixed $id
     *
     * @return void
     */
    public function pdf($id)
    {
        // get brief with all relations
        $briefs = \App\Brief::where('id', $id)->with('social')->with('ppc')->get();

        // use pdf package to convert view to pdf
        $pdf = PDF::loadView('briefs.pdf', compact('briefs'));  
       
        return $pdf->download($briefs[0]->job_number . '.pdf');
    }

    /**
     * Update acknowledged through custom action
     *
     * @param  mixed $id
     *
     * @return void
     */
    public function acknowledge($id)
    {
        $brief = \App\Brief::find($id);
        
        $brief->acknowledged = 'yes';
        $brief->save();

        return redirect('/admin/briefs');
    }

    /**
     * Update questionthrough custom action
     *
     * @param  mixed $id
     *
     * @return void
     */
    public function questions($id)
    {
        $brief = \App\Brief::find($id);
        
        $brief->questions_sent = 'yes';
        $brief->save();

        return redirect('/admin/briefs');
    }

    /**
     * Update estimate_sent through custom action
     *
     * @param  mixed $id
     *
     * @return void
     */
    public function estimateSent($id)
    {
        $brief = \App\Brief::find($id);
        
        $brief->estimate_sent = 'yes';
        $brief->save();

        return redirect('/admin/briefs');
    }

    /**
     * Update estimate_approved through custom action
     *
     * @param  mixed $id
     *
     * @return void
     */
    public function estimateApproved($id)
    {
        $brief = \App\Brief::find($id);
        
        $brief->estimate_approved = 'yes';
        $brief->save();

        return redirect('/admin/briefs');
    }

    /**
     * download all approved briefs as CSV
     *
     * @return void
     */
    public function downloadAllApproved()
    {
        $approved = \App\Brief::where('estimate_approved', 'yes')->get();
        
        // use csv package and generate and return csv
        $csvExporter = new \Laracsv\Export();
        $csvExporter->build($approved, [
            'id',
            'client_name',
            'brief_date',
            'brief_in_by',
            'job_number',
            'campaign_name',
            'budget',
            'budget_type',
            'start_date',
            'end_date',
            'estimate_approved',
            'value'
            ])->download('approved_briefs.csv');
    }

    /**
     * download all not approved briefs as CSV
     *
     * @return void
     */
    public function downloadNotApproved()
    {
        $notApproved = \App\Brief::where('estimate_approved', 'no')->get();
        
        // use csv package and generate and return csv
        $csvExporter = new \Laracsv\Export();
        $csvExporter->build($notApproved, [
            'id',
            'client_name',
            'brief_date',
            'brief_in_by',
            'job_number',
            'campaign_name',
            'budget',
            'budget_type',
            'start_date',
            'end_date',
            'estimate_approved',
            'value'
            ])->download('not_approved_briefs.csv');
    }
    
}
