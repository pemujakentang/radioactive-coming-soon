<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>UMN RadioActive 2023 | Receipt</title>
</head>

<body>
    <div class="container max-w-5xl mx-auto">
        <p class="text-3xl py-8">Receipt</p>

        <div class="grid grid-cols-3 gap-2">
            <div class="flex flex-col bg-slate-100 rounded-sm p-3 gap-2">
                <p class="text-lg font-medium">Receipt</p>
                <p>Name: {{ $order->name }}</p>
                <p>Email: {{ $order->email }}</p>
                <p>Phone: {{ $order->phone }}</p>
                <p>Quantity: {{ $order->qty }}</p>
                <p class="text-red-700">Status: {{ $order->status }}</p>
            </div>
        </div>



    </div>

</body>

</html>
