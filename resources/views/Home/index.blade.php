<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>UMN Radioactive 2023</title>
</head>

<body class="bg-black h-full">
    <div class="navbar bg-[#0E0EC0] justify-center gap-16">
        <a class="font-taruno text-white text-xs no-underline hover:underline cursor-pointer" href="/home">HOME</a>
        <a class="font-taruno text-white text-xs no-underline hover:underline cursor-pointer">VO CHALLENGE</a>
        <a class="font-taruno text-white text-xs no-underline hover:underline cursor-pointer">RAC</a>
        <a class="font-taruno text-white text-xs no-underline hover:underline cursor-pointer" href="ticket">CLOSING
            NIGHT</a>
        @auth
            <a class="font-taruno text-white text-xs no-underline hover:underline cursor-pointer" href="/logout">LOGOUT</a>
        @endauth
    </div>
    <div id="section-1" class="py-16 max-w-4xl mx-auto">
        <div class="flex items-center justify-center gap-4">
            <p class="font-taruno text-xs text-white z-20">THE MOST SPECTACULAR ANNUAL EVENT BY </p>
            <img class="w-24 z-10" src="img/LOGO UMN RADIO.png">
        </div>
        <div class="relative flex flex-col items-center">
            <img class="object-cover -mt-28 z-0" src="img/BACKGROUND LOGO.png" alt="background logo" />
            <img class="object-cover z-30 w-[640px] absolute" src="img/logo.gif" alt="logo" />
        </div>
    </div>
</body>

</html>
