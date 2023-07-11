<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Order</title>
</head>

<body>
    <div class="container max-w-5xl mx-auto">
        <p class="text-3xl py-8">Buyer Details</p>

        @if ($quantity == 1)
            <form action="/{{ $quantity }}/checkout" method="POST">
            @else
                <form action="/order/{{ $quantity }}/ticket-information" method="POST">
        @endif
        @csrf
        <input type="hidden" name="qty" id="qty" value="{{ $quantity }}">
        <div class="mb-3 flex flex-col">
            <label for="name" class="">Nama</label>
            <input type="text" name="name" id="name" placeholder="Geri Geri Geri">
        </div>
        <div class="mb-3 flex flex-col">
            <label for="email" class="">Email</label>
            <input type="email" name="email" id="email" placeholder="geri@gmail.com">
        </div>
        <div class="mb-3 flex flex-col">
            <label for="phone" class="">Phone</label>
            <input type="number" name="phone" id="phone" placeholder="081221468932">
        </div>

        <button type="submit" class="text-red-800">GAS!</button>
        </form>

    </div>

</body>

</html>
