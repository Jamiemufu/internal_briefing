<?php

namespace App\Mail;

use App\Brief;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Briefs extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The brief instance.
     *
     * @var Brief
     */
    protected $brief;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Brief $brief)
    {
        $this->brief = $brief;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.briefs')->with([
            'ref' => $this->brief->id,
            'name' => $this->brief->client_name,
            'email' => $this->brief->client_email,
        ]);
    }
}
