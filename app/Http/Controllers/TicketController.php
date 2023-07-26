<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Http\Requests\StoreTicketRequest;
use App\Http\Requests\UpdateTicketRequest;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function ticket_redeem($ticket_code)
    {
        $inserted_ticket = Ticket::where('ticket_code', $ticket_code)->first();
        
        if ($inserted_ticket->status == 'used') {
            return response()->json([
                'message' => 'Ticket already redeemed',
                'status' => 'error'
            ]);
        } else {
            $inserted_ticket->update(['status' => 'used']);
            return response()->json([
                'message' => 'Ticket redeemed successfully',
                'status' => 'success'
            ]);
        }
        
    }

    public function show_qr($ticket_code)
    {
        $url = 'https://staging.umnradioactive.com/ticket-redeem/'.$ticket_code;
        $qr_code = QrCode::size(200)->generate($url);
        return view('Admin.qr', compact('qr_code'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTicketRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTicketRequest $request, Ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {
        //
    }
}
