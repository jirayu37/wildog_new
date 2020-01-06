<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;


use Illuminate\Http\Request;

use App\User;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
          $this->$user=$user;
        //$this->user=$user;
         
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {   
         return $this->view('emails.newuser')->with([
            'id'=>$this->$user->id]);

         // return $this->markdown('emails.newuser');




//          return $this->markdown('emails.newuser');
    }
}
