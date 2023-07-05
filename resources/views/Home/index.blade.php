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
    <div class="fixed navbar bg-[#0E0EC0] justify-center gap-16 z-40">
        <a class="font-taruno text-white text-xs underline underline-offset-4 decoration-[#FFF000] cursor-pointer" href="/home">HOME</a>
        <a class="font-taruno text-white text-xs no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer">VO CHALLENGE</a>
        <a class="font-taruno text-white text-xs no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer">RAC</a>
        <a class="font-taruno text-white text-xs no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer" href="ticket">CLOSING
            NIGHT</a>
    </div>

    <div id="section-1" class="pt-24 max-w-4xl mx-auto">
        <div class="flex items-center justify-center gap-4">
            <p class="font-taruno text-xs text-white z-20">THE MOST SPECTACULAR ANNUAL EVENT BY </p>
            <img class="w-24 z-10" src="img/LOGO UMN RADIO.png">
        </div>
        <div class="relative flex flex-col items-center">
            <img class="object-cover -mt-28 z-0" src="img/BACKGROUND LOGO.png" alt="background logo" />
            <img class="object-cover z-30 w-[640px] absolute" src="img/logo.gif" alt="logo" />
        </div>
    </div>

    <div id="section2" class="-mt-28 mb-16">
            <h2 class="font-taruno2 text-white text-center my-12">ABOUT US</h2>
            <p class="font-pathway text-sm text-white text-center">RADIOACTIVE merupakan acara off air tahunan yang diselenggarakan oleh UMN Radio,</p>
            <p class="font-pathway text-sm text-white text-center">radio komunitas dari Universitas Multimedia Nusantara.</p>
            <br>
            <p class="font-pathway text-sm text-white text-center">Dimulai sejak 2015, RADIOACTIVE tahun in menjadi kali ke-9 acara ini terselenggara. Hal tersebut menandakan bahwa RADIOACTIVE</p>
            <p class="font-pathway text-sm text-white text-center">berkembang dengan baik. Lebih lanjut, RADIOACTIVE diadakan sebagai brand activation untuk terus menjaga eksistensi dari UMN Radio.</p>
            <br>
            <p class="font-pathway text-sm text-white text-center">Pada tahun ini, acara kami mengangkat tema "RADIOACTIVE 2023: Revolution" dengan tagline "New Revolution Starts with You", yang ber-</p>
            <p class="font-pathway text-sm text-white text-center">fokus pada pengembangan diri individu dan mendorong mereka untuk berani bertindak demi suatu perubahan dalam diri. Acara kami</p>
            <p class="font-pathway text-sm text-white text-center">sebelumnya mengangkat tema "RADIOACTIVE 2022: Radiant" dengan tagline "Light Up Your Action” yang berfokus pada tindakan anak-anak</p>
            <p class="font-pathway text-sm text-white text-center">muda untuk bersinar dan memancarkan cahaya positif dari diri mereka kepada orang lain di sekitarnya.</p>
            <br>
    </div>

    <div id="section3" class="my-16">
            <h2 class="font-taruno2 text-white text-center my-12">UPCOMING EVENTS</h2>
            <div class="carousel carousel-center">
                <div class="carousel-item ml-32 border border-white">
                    <div
                    class="flex bg-[#0E0EC0] flex-row max-h-96">
                    <div class="flex flex-col justify-start p-6 w-56">
                        <h1
                        class="mb-2 text-4xl font-taruno font-medium text-white pt-4">
                        <b>18-30</b>
                        </h1>
                        <h3
                        class="mb-2 text-3xl font-taruno font-medium text-white">
                        <b>Sept</b>
                        </h3>
                    </div>
                        <div class="relative">
                            <img
                                class="h-96 w-auto object-cover"
                                src="/images/FOTO VO CHALLENGE.png"
                                alt="" />
                                <div class="absolute bottom-0 left-0 right-0 px-4 py-2 bg-gradient-to-t from-black">
                                    <div class="px-4">
                                        <h3 class="text-3xl font-taruno text-white font-bold">
                                            Voiceover</h3>
                                        <h3 class="text-3xl font-taruno text-white font-bold">
                                            Challenge</h3>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div> 
                <div class="carousel-item border border-white ml-16">
                    <div
                    class="flex bg-[#0E0EC0] max-h-96 flex-row">
                    <div class="flex flex-col justify-start p-6 w-56">
                        <h1
                        class="mb-2 text-4xl font-taruno font-medium text-white pt-4">
                        <b>28</b>
                        </h1>
                        <h3
                        class="mb-2 text-3xl font-taruno font-medium text-white">
                        <b>Oct</b>
                        </h3>
                    </div>
                        <div class="relative">
                            <img
                                class="h-96 w-auto object-cover"
                                src="/images/FOTO RAC.png"
                                alt="" />
                                <div class="absolute bottom-0 left-0 right-0 px-4 py-2 bg-gradient-to-t from-black">
                                    <div class="px-4">
                                        <h3 class="text-3xl font-taruno text-white font-bold">
                                            Announcing</h3>
                                        <h3 class="text-3xl font-taruno text-white font-bold">
                                            Competition</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="carousel-item border border-white ml-16 mr-32">
                    <div
                    class="flex bg-[#0E0EC0] max-h-96">
                    <div class="flex flex-col justify-start p-6 w-56">
                        <h1
                        class="mb-2 text-4xl font-taruno font-medium text-white pt-4">
                        <b>4</b>
                        </h1>
                        <h3
                        class="mb-2 text-3xl font-taruno font-medium text-white">
                        <b>Nov</b>
                        </h3>
                    </div>
                        <div class="relative">
                            <img
                                class="h-96 w-auto object-cover"
                                src="/images/FOTO CLOSING NIGHT.png"
                                alt="" />
                                <div class="absolute bottom-0 left-0 right-0 px-4 py-2 bg-gradient-to-t from-black">
                                    <div class="px-4">
                                        <h3 class="text-3xl font-taruno text-white font-bold">
                                            Closing</h3>
                                        <h3 class="text-3xl font-taruno text-white font-bold">
                                            Night</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer">
            Footer disini...
        </div>
</body>
</html>
