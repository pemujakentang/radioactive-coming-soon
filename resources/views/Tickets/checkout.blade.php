<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.client_key') }}"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
    @vite('resources/css/app.css')
    <title>RadioActive 2023 | Checkout</title>
</head>

<body>
    <div class="container max-w-5xl mx-auto">
        <p class="text-3xl py-8">Order Details</p>
        <div class="grid grid-cols-3 gap-2">
            <div class="flex flex-col bg-slate-100 rounded-sm p-3 gap-2">
                <p class="text-lg font-medium">Receipt</p>
                <p>Name: {{ $order->name }}</p>
                <p>Email: {{ $order->email }}</p>
                <p>Phone: {{ $order->phone }}</p>
                <p>Quantity: {{ $order->qty }}</p>
                <div id="pay-button"
                    class="bg-green-300 rounded-md font-bold flex justify-center items-center py-1 cursor-pointer">Pay
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function() {
            // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
            window.snap.pay('{{ $snapToken }}', {
                onSuccess: function(result) {
                    /* You may add your own implementation here */
                    // alert("payment success!");
                    window.location.href = '/invoice/{{ $order->id }}';
                    console.log(result);
                },
                onPending: function(result) {
                    /* You may add your own implementation here */
                    alert("wating your payment!");
                    console.log(result);
                },
                onError: function(result) {
                    /* You may add your own implementation here */
                    alert("payment failed!");
                    console.log(result);
                },
                onClose: function() {
                    /* You may add your own implementation here */
                    alert('you closed the popup without finishing the payment');
                }
            })
        });
    </script>

</body>

</html>
