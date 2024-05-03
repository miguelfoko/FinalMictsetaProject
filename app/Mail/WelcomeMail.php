<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;


class WelcomeMail extends Mailable{
    use Queueable, SerializesModels;
    
    
    public $title;
    public $body;
    /** 
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(string $title, string  $body)    {
        
        $this->title=$title;
        $this->body=$body;
    }

    
    
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(){
        //return $this->content();
        $title=$this->title;
        $body=$this->body;
        //return $this->view('emails.welcome',compact('title','body'));
        return $this->from('fosimilan@gmail.com','TVET Colleges')
                    ->view('emails.welcome',['body' => $this->body])
                    ->subject($this->title);
    }

    
}
