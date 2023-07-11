{{-- isi form2 pas mau checkout --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Merch</title>
</head>
<body>
        <h1>Order Merch</h1>

        <h2>List Produk</h2>
        @foreach ($cart as $obj)
            <li>{{$obj->name}}</li>
        @endforeach

        <br/>

        <form action="/checkout" method="POST">
            @csrf
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
</body>

</html>
