<?php

return [
    'merchant_id' => env('MIDTRANS_MERCHANT_ID'),
    'client_key' => env('MIDTRANS_CLIENT_KEY'),
    'server_key' => env('MIDTRANS_SERVER_KEY'),

    'normal_ticket' => env('NORMAL_TICKET_PRICE'),
    'bundle_ticket' => env('BUNDLE_TICKET_PRICE'),
];