<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\BundleOrder;
use App\Models\Ticket;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
        return view('Tickets.index');
    }

    public function order($quantity)
    {
        return view('Tickets.order', compact('quantity'));
    }

    public function ticket_information($quantity, Request $request)
    {
        // get buyer details data
        $buyer_detail = $request->all();

        // lempar data ke bundle.blade.php
        return view('Tickets.bundle', compact('quantity', 'buyer_detail'));
    }

    public function checkout(Request $request, $quantity)
    {
        // kalo cuma single buyer
        if ($quantity == 1) {
            $request->request->add(['total_price' => $request->qty * 75000, 'status' => 'Unpaid']);
            $order = Order::create($request->all());

            BundleOrder::create([
                    'name_1' => $request->name,
                    'email_1' => $request->email,
                    'phone_1' => $request->phone,
                ]);
    
            // Set your Merchant Server Key
            \Midtrans\Config::$serverKey = config('midtrans.server_key');
            // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
            \Midtrans\Config::$isProduction = false;
            // Set sanitization on (default)
            \Midtrans\Config::$isSanitized = true;
            // Set 3DS transaction for credit card to true
            \Midtrans\Config::$is3ds = true;
    
            $params = array(
                'transaction_details' => array(
                    'order_id' => $order->id,
                    'gross_amount' => $order->total_price,
                ),
                'customer_details' => array(
                    'first_name' => $request->name,
                    'last_name' => '',
                    'email' => $request->email,
                    'phone' => $request->phone,
                ),
            );
    
            $snapToken = \Midtrans\Snap::getSnapToken($params);
            return view('Tickets.checkout', compact('order', 'snapToken'));
        }

        // kalo bundle
        if ($request->qty ==2) {
            BundleOrder::create([
                'name_1' => $request->name_1,
                'email_1' => $request->email_1,
                'phone_1' => $request->phone_1,
                'name_2' => $request->name_2,
                'email_2' => $request->email_2,
                'phone_2' => $request->phone_2,
            ]);
        } elseif ($request->qty == 3) {
            BundleOrder::create([
                'name_1' => $request->name_1,
                'email_1' => $request->email_1,
                'phone_1' => $request->phone_1,
                'name_2' => $request->name_2,
                'email_2' => $request->email_2,
                'phone_2' => $request->phone_2,
                'name_3' => $request->name_3,
                'email_3' => $request->email_3,
                'phone_3' => $request->phone_3,
            ]);
        }


        $order = Order::create(
            [
                'name' => $request->name_1,
                'email' => $request->email_1,
                'phone' => $request->phone_1,
                'qty' => $request->qty,
                'total_price' => $request->qty * 75000,
                'status' => 'Unpaid'
            ]
        );

         // Set your Merchant Server Key
         \Midtrans\Config::$serverKey = config('midtrans.server_key');
         // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
         \Midtrans\Config::$isProduction = false;
         // Set sanitization on (default)
         \Midtrans\Config::$isSanitized = true;
         // Set 3DS transaction for credit card to true
         \Midtrans\Config::$is3ds = true;
 
         $params = array(
             'transaction_details' => array(
                 'order_id' => $order->id,
                 'gross_amount' => $order->total_price,
             ),
             'customer_details' => array(
                 'first_name' => $request->name,
                 'last_name' => '',
                 'email' => $request->email,
                 'phone' => $request->phone,
             ),
         );
 
         $snapToken = \Midtrans\Snap::getSnapToken($params);
         return view('Tickets.checkout', compact('order', 'snapToken'));


    }

    public function callback(Request $request)
    {
        $serverKey = config('midtrans.server_key');
        $hashed = hash("sha512", $request->order_id . $request->status_code . $request->gross_amount . $serverKey);

        if ($hashed == $request->signature_key) {
            if ($request -> transaction_status == 'capture' or $request -> transaction_status == 'settlement') {
               $order = Order::find($request->order_id);
               $order->update(['status' => 'Paid']);

               // update ticket
                $paid_buyer = $order->email;

                // find in bundle where email = paid_buyer
                $bundle = BundleOrder::where('email_1', $paid_buyer)->first();

                if($order->qty == 1){
                    Ticket::create([
                        'email' => $order->email,
                        'ticket_code' => "RA230" +  String::random(5),
                    ]);
                } elseif ($order->qty == 2) {
                    Ticket::create([
                        'email' => $bundle->email_1,
                        'ticket_code' => "RA230" +  String::random(5),
                    ]);
                    Ticket::create([
                        'email' => $bundle->email_2,
                        'ticket_code' => "RA230" +  String::random(5),
                    ]);
                } elseif ($order->qty == 3) {
                    Ticket::create([
                        'email' => $bundle->email_1,
                        'ticket_code' => "RA230" +  String::random(5),
                    ]);
                    Ticket::create([
                        'email' => $bundle->email_2,
                        'ticket_code' => "RA230" +  String::random(5),
                    ]);
                    Ticket::create([
                        'email' => $bundle->email_3,
                        'ticket_code' => "RA230" +  String::random(5),
                    ]);
                }
            }
        }
    }

    public function invoice($id)
    {
        $order = Order::find($id);
        return view('Tickets.invoice', compact('order'));
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
    public function store(StoreOrderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
