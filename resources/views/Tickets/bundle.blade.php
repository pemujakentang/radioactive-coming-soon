<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Multiple Orders</title>
</head>

<body>
    <div class="container max-w-5xl mx-auto">
        <p class="text-3xl py-8">Bundle Orders</p>

        @if ($quantity == 2)
            <form action="/{{ $buyer_detail['qty'] }}/checkout" method="POST">
                @csrf
                <input type="hidden" name="qty" id="qty" value="{{ $buyer_detail['qty'] }}">
                <div class="mb-3 flex flex-col">
                    <label for="name_1" class="">Nama</label>
                    <input type="text" name="name_1" id="name_1" placeholder="Geri Geri Geri"
                        value="{{ $buyer_detail['name'] }}">
                </div>
                <div class="mb-3 flex flex-col">
                    <label for="email_1" class="">Email</label>
                    <input type="email_1" name="email_1" id="email_1" placeholder="geri@gmail.com"
                        value="{{ $buyer_detail['email'] }}">
                </div>
                <div class="mb-3 flex flex-col">
                    <label for="phone_1" class="">Phone</label>
                    <input type="number" name="phone_1" id="phone_1" placeholder="081221468932"
                        value="{{ $buyer_detail['phone'] }}">
                </div>

                <div class="mb-3 flex flex-col">
                    <label for="name_2" class="">Nama 2</label>
                    <input type="text" name="name_2" id="name_2" placeholder="Geri Geri Geri">
                </div>
                <div class="mb-3 flex flex-col">
                    <label for="email_2" class="">Email 2</label>
                    <input type="email_2" name="email_2" id="email_2" placeholder="geri@gmail.com">
                </div>
                <div class="mb-3 flex flex-col">
                    <label for="phone_2" class="">Phone 2</label>
                    <input type="number" name="phone_2" id="phone_2" placeholder="081221468932">
                </div>
                <button type="submit" class="text-red-800">GAS!</button>
            </form>
        @elseif($quantity == 3)
            <form action="/{{ $buyer_detail['qty'] }}/checkout" method="POST">
                @csrf
                <input type="hidden" name="qty" id="qty" value="{{ $buyer_detail['qty'] }}">
                <div class="mb-3 flex flex-col">
                    <label for="name_1" class="">Nama</label>
                    <input type="text" name="name_1" id="name_1" placeholder="Geri Geri Geri"
                        value="{{ $buyer_detail['name'] }}">
                </div>
                <div class="mb-3 flex flex-col">
                    <label for="email_1" class="">Email</label>
                    <input type="email_1" name="email_1" id="email_1" placeholder="geri@gmail.com"
                        value="{{ $buyer_detail['email'] }}">
                </div>
                <div class="mb-3 flex flex-col">
                    <label for="phone_1" class="">Phone</label>
                    <input type="number" name="phone_1" id="phone_1" placeholder="081221468932"
                        value="{{ $buyer_detail['phone'] }}">
                </div>

                <div class="mb-3 flex flex-col">
                    <label for="name_2" class="">Nama 2</label>
                    <input type="text" name="name_2" id="name_2" placeholder="Geri Geri Geri">
                </div>
                <div class="mb-3 flex flex-col">
                    <label for="email_2" class="">Email 2</label>
                    <input type="email_2" name="email_2" id="email_2" placeholder="geri@gmail.com">
                </div>
                <div class="mb-3 flex flex-col">
                    <label for="phone_3" class="">Phone 2</label>
                    <input type="number" name="phone_3" id="phone_3" placeholder="081221468932">
                </div>
                <div class="mb-3 flex flex-col">
                    <label for="name_3" class="">Nama 3</label>
                    <input type="text" name="name_3" id="name_3" placeholder="Geri Geri Geri">
                </div>
                <div class="mb-3 flex flex-col">
                    <label for="email_3" class="">Email 3</label>
                    <input type="email_3" name="email_3" id="email_3" placeholder="geri@gmail.com">
                </div>
                <div class="mb-3 flex flex-col">
                    <label for="phone_3" class="">Phone 3</label>
                    <input type="number" name="phone_3" id="phone_3" placeholder="081221468932">
                </div>
                <button type="submit" class="text-red-800">GAS!</button>
            </form>
        @endif
    </div>

</body>

</html>
