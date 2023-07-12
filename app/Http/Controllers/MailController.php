<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

use App\Mail\TicketNotify;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {
        $data = [
            'subject' => '[UMN RadioActive 2023 - Your Ticket Order is Confirmed]',
            'receiver' => "Gerald Imanuel",
            'ticket_type' => 'Early Bird',
            'quantity' => 1,
            'ticket_code' => "RA230MDFNJDKANj   ",
        ];

        try {
            Mail::to('geraldimanuelwijaya@gmail.com')->send(new TicketNotify($data));
            return response()->json([
                'status' => 'success',
                'message' => 'Email sent successfully'
            ]);

         
        } catch (\Throwable $th) {
           return response()->json([
               'status' => 'error',
               'message' => 'Email failed to send'
           ]);
        }
    }
}
