<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

use App\Mail\TicketNotify;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index(){
        $this-> mail();
    }

    public function mail()
    {
        $ticket_code = ["RA230MDFNJDKANj", "RA230MDFNJDKDFSD"];
        $ticket_code_packed = '';
        
        // for each ticket code on ticket_code, give staging.umnradioactive.com/show-qr/{{ $ticket_code }}
        foreach($ticket_code as $ticket){
            $ticket_code_packed = $ticket_code_packed . "staging.umnradioactive.com/show-qr/" . $ticket . ', ';
        }

        $data = [
            'subject' => '[UMN RadioActive 2023 - Your Ticket Order is Confirmed]',
            'receiver' => "Gerald Imanuel",
            'ticket_type' => 'Early Bird',
            'quantity' => 1,
            'ticket_code' => "RA230MDFNJDKANj" ,
            'ticket_code_packed' => $ticket_code_packed ,
        ];

        // dd($ticket_code_packed);   
        try {
            Mail::to('geraldimanuelwijaya@gmail.com')->send(new TicketNotify($data));
            // return response()->json([
            //     'status' => 'success',
            //     'message' => 'Email sent successfully'
            // ]);

         
        } catch (\Throwable $th) {
           return response()->json([
               'status' => 'error',
               'message' => 'Email failed to send'
           ]);
        }
    }
}
