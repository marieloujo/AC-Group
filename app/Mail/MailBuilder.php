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
    public $budget;
    public $delai;

        /**
     * Create a new message instance.
     *
     * @return void
     */


    public function __construct($name, $email, $message, $societe, $file, $besoins, $budget, $delai)
    {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
        $this->societe = $societe;
        $this->file = $file;
        $this->besoins = $besoins;
        $this->delai = $delai;
        $this->budget = $budget;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        //dump($this->besoins).die();

        $mail = $this->from(['address' => $this->email, 'name' => $this->name])
            ->to(env('CONTACT_EMAIL'))
            ->subject('Contacter');

        if($this->file != null) {
            $mail->attach($this->file, [
                'as' => $this->file,
            ]);
        }

        return $mail->view('emails.mail-vue', 
            ['name'=>$this->message,
            'societe' => $this->societe,
            'besoins' => $this->besoins,
            'budget' => $this->budget,
            'delai' => $this->delai,
            'contenu'=>$this->message]); 

    
    }


}
