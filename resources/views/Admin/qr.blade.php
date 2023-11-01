<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UMN Radioactive 2023</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    {{-- <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}

    <!-- Styles -->
    @vite('resources/css/app.css')
</head>

<body class="min-h-screen bg-black">
    <div class="w-full flex text-center justify-center">
        <div class="m-10 md:m-20 border w-11/12 md:w-96 border-white border-">
            <h2 class="text-white text-center font-bold 
            font-taruno mb-2 mt-5">YOU'RE ALL SET!</h2>
            <p class="text-white font-pathway">We emailed your receipt.</p>
            <p class="text-white font-pathway">See you at RADIOACTIVE 2023</p>
            <p class="text-white font-pathway mb-5 ">Closing Night: <strong><em>"NEO WORLD"</em></strong> !</p>
            <hr class="mx-auto w-3/4">
            <div class="flex flex-row justify-center mt-5">
                <img src="/images/ICON-CALENDAR_1.webp" class="inline h-5 mx-2" alt="">
                <p class="text-white font-pathway text-left">18 November 2023</p>
            </div>

            <div class="flex flex-row justify-center my-3">
                <img src="/images/ICON-LOCATION_1.webp" class="inline translate-y-2 h-6 mx-2" alt="">
                <div>
                    <p class="text-white font-pathway text-left">Parkiran Function Hall UMN</p>
                    <p class="text-white font-pathway text-left">Gading Serpong, Tangerang</p>
                </div>
            </div>

            <div class="flex bg-white py-2 px-2 max-w-fit mx-auto">
                {!! $qr_code !!}
            </div>
            <br>
            <p class="text-white mb-6 font-pathway">Here's your QR code to redeem your ticket.</p>
        </div>
    </div>
</body>

</html>
