<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;

class SubscribersMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        $from = $request->fromName;
        $subject = $request->subject;
        $body = $request->message;
        return $this
                ->from('laravel.example.test@gmail.com', $from)
                ->subject($subject)
                ->markdown('mails.messages')
                ->with([
                    'message'=>$body,
                    'link'=>'https://brainster.co/',
                    'from'=>$from
                ]);
    }
}
