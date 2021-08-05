<?php

namespace App\Mail;
use App\User;
use DB;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class EmailVerification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $user;

    public function __construct(User $user)
    {
    
  $this->user=$user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)

    {

$data= DB::table('users')->where('email',$request->email)->first();
    //dd($data);    
        return $this->view('Verification',compact('data'));
    }
}
