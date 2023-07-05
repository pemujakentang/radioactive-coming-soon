{{-- shopping cart dri session --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
</head>
<body>
    <h1>Cart</h1>
    <a href="{{url('/merch')}}">Back to Merch</a>

    @if (empty($cart))
        <p>Cart is empty</p>
    @else
        <table border="1" cellpadding="10">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Price</th>
            </tr>
            <?php $no = 1; ?>
            @foreach($cart as $obj)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$obj->name}}</td>
                    <td>{{$obj->price}}</td>
                    <td>
                        <a href="{{url('/cart/'.$obj->id)}}">Remove</a>
                    </td>
                </tr>
            @endforeach
            <tr>
                <td colspan="3"></td>
                <td>
                    <a href="{{url('/merch-checkout')}}">Checkout</a>
                </td>
            </tr>
        </table>
    @endif
</body>
</html>