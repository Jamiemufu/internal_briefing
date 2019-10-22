<?php

namespace App\Mail;

use App\Brief;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Autoreply extends Mailable
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
        return $this->view('emails.autoreply')->with([
            'ref' => $this->brief->id,
        ]);
    }
}
