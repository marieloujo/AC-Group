<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SimpleMailBuilder extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $file;
    public $email;
    public $message;

        /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $message, $file)
    {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
        $this->file = $file;
    }



    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $email = $this->from(['address' => $this->email, 'name' => $this->name])
            ->to(env('CONTACT_EMAIL'));

            if($this->file != null) {
                $email->attach($this->file, [
                    'as' => $this->file,
                ]);
            }

            $email->view('emails.mail-vue-simple', 
                ['name'=>$this->message,
                'contenu'=>$this->message]); 
    }


}
