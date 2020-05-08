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
    public $telephone;
    public $email;
    public $object;
    public $message;

        /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $telephone, $object, $message)
    {
        $this->name = $name;
        $this->telephone = $telephone;
        $this->email = $email;
        $this->object = $object;
        $this->message = $message;
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
            ->subject($this->object)
            ->view('emails.mail-vue', 
                ['name'=>$this->message,
                'telephone'=>$this->telephone,
                'contenu'=>$this->message]); 
    }
}
