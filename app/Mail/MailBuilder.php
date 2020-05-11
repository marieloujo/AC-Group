<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailBuilder extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $file;
    public $email;
    public $societe;
    public $message;
    public $besoins;

        /**
     * Create a new message instance.
     *
     * @return void
     */


    public function __construct($name, $email, $message, $societe, $file, $besoins)
    {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
        $this->societe = $societe;
        $this->file = $file;
        $this->besoins = $besoins;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(['address' => $this->email, 'name' => $this->name])
            ->to(env('CONTACT_EMAIL'))
            ->attach($file)
            ->view('emails.mail-vue', 
                ['name'=>$this->message,
                'societe' => $this->societe,
                'besoins' => $this->besoins,
                'contenu'=>$this->message]); 
    }


}
