<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    @vite('resources/css/app.css')
    <title>UMN Radioactive 2023</title>
</head>

<body class="overflow-x-hidden bg-black h-full">

    <div id="header" x-data="{ isOpen: false }"
        class="fixed navbar bg-[#0E0EC0] justify-center gap-16 z-40 transition-all duration-700">
        <div class="flex items-center justify-between">
            <button @click="isOpen = !isOpen" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white lg:hidden" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            <div class="pr-4 hidden space-x-6 lg:inline-block">
                <a class="font-taruno text-white text-xs no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer"
                    href="/">HOME</a>
                <a class="font-taruno text-white text-xs underline underline-offset-4 decoration-[#FFF000] cursor-pointer"
                    href="/voc">VO
                    CHALLENGE</a>
                <a class="font-taruno text-white text-xs no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer"
                    href="/rac">RAC</a>
                <a class="font-taruno text-white text-xs no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer"
                    href="/ticket">CLOSING
                    NIGHT</a>
                <a class="font-taruno text-white text-xs no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer"
                    href="merch.umnradioactive.com">merchandise</a>
            </div>

            <div class="mobile-navbar">
                <div class="fixed left-0 w-full h-52 p-5 bg-white rounded-lg shadow-xl top-16" x-show="isOpen"
                    @click.away=" isOpen = false">
                    <div class="flex flex-col space-y-6">
                        <a class="font-taruno text-black text-xs no-underline hover:underline hover:underline-offset-4 hover:decoration-[#0E0EC0] cursor-pointer"
                            href="/">HOME</a>
                        <a class="font-taruno text-black text-xs underline underline-offset-4 decoration-[#0E0EC0] cursor-pointer"
                            href="/voc">VO
                            CHALLENGE</a>
                        <a class="font-taruno text-black text-xs no-underline hover:underline hover:underline-offset-4 hover:decoration-[#0E0EC0] cursor-pointer"
                            href="/rac">RAC</a>
                        <a class="font-taruno text-black text-xs no-underline hover:underline hover:underline-offset-4 hover:decoration-[#0E0EC0] cursor-pointer"
                            href="/ticket">CLOSING
                            NIGHT</a>
                        <a class="font-taruno text-black text-xs no-underline hover:underline hover:underline-offset-4 hover:decoration-[#0E0EC0] cursor-pointer"
                            href="merch.umnradioactive.com">merchandise</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="pt-16">
        <img class="w-full h-48 md:h-80 object-cover object-center" src="/images/FOTO VO CHALLENGE.webp"
            alt="" />
    </div>

    <div class=" lg:-mb-0 lg:my-16">
        <h2 id="title" class="font-taruno2 text-white text-center my-12">VOICEOVER CHALLENGE</h2>
        <div id="description" class="px-8 md:px-20 lg:px-80">
            <p class="font-pathway text-sm text-white text-justify md:text-center md:pb-0">Voice Over Challenge
                merupakan salah satu rangkaian acara RADIOACTIVE 2023. Voice Over Challenge bertujuan untuk mengasah
                skill para peserta dalam bidang tarik suara. Dalam challenge ini, peserta tidak dibatasi untuk
                berkreasi. Teknis dari Voice Over Challenge ini adalah peserta dapat melakukan duet melalui media sosial
                RADIOACTIVE. Disisi lain, challenge ini juga dapat meningkatkan awareness untuk rangkaian acara
                berikutnya.</p>
            <br>
            <p class="font-pathway text-sm text-white text-justify md:text-center"></p>
        </div>
    </div>

    <div class="mt-6">
        <blockquote class="tiktok-embed mx-16" cite="https://www.tiktok.com/@umnradioactive/video/7255628935868845317"
            data-video-id="7255628935868845317" style="max-width: 325px;min-width: 325px;">
            <section> <a target="_blank" title="@umnradioactive"
                    href="https://www.tiktok.com/@umnradioactive?refer=embed">@umnradioactive</a><a
                    title="contentcreator" target="_blank"
                    href="https://www.tiktok.com/tag/contentcreator?refer=embed">#contentcreator</a> <a target="_blank"
                    title="♬ original sound  - dpr saii"
                    href="https://www.tiktok.com/music/original-sound-dpr-saii-7237729173648378629?refer=embed">♬
                    original sound - dpr saii</a> </section>
        </blockquote>
        <script async src="https://www.tiktok.com/embed.js"></script>
    </div>

    <div id="mainGS" class="flex flex-col justify-center items-center my-24">
        <img class="hidden md:block h-36 px-2" src="/images/TIMELINE-VOC.webp" alt="" />
        <img class="md:hidden w-5/6" src="/images/TIMELINE-VOC-HP.webp" alt="">
    </div>

    <div id="button1" class="flex justify-center md:py-0 items-center mt-8 gap-4">
        <a href="#ticket" class="no-underline">
            <button
                class="bg-[#0E0EC0] text-white border-white w-80 md:h-16 p-6 font-taruno text-2xs md:text-sm font-bold border-2 hover:bg-[#FFF000] hover:text-[#0E0EC0]">
                DOWNLOAD HANDBOOK
            </button>
        </a>
        <a href="/voc/submission" class="no-underline">
            <button
                class="bg-[#0E0EC0] text-white border-white w-80 md:h-16 p-6 font-taruno text-2xs md:text-sm font-bold border-2 hover:bg-[#FFF000] hover:text-[#0E0EC0]">
                SUBMISSION
            </button>
        </a>
    </div>

    <footer class="bg-gradient-to-b from-transparent to-[#0E0EC0] pt-56 pb-16">
        <div class="flex flex-col w-full justify-center md:items-center md:flex-row">
            <div class="flex justify-center lg:container w-full">
                <img src="/images/LOGO RA.webp" alt="" class="h-40 object-contain">
            </div>

            <div class="lg:container flex flex-col justify-evenly py-3 my-10 gap-4 text-center md:text-left">
                <a href="/"
                    class="no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer">
                    <h5 class="text-xs font-taruno font-medium text-white">
                        <b>HOME</b>
                    </h5>
                </a>
                <a href="#"
                    class="no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer">
                    <h5 class="text-xs font-taruno font-medium text-white">
                        <b>VO CHALLENGE</b>
                    </h5>
                </a>
                <a href="#"
                    class="no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer">
                    <h5 class="text-xs font-taruno font-medium text-white">
                        <b>RAC</b>
                    </h5>
                </a>
                <a href="#"
                    class="no-underline hover:underline hover:underline-offset-4 hover:decoration-[#FFF000] cursor-pointer">
                    <h5 class="text-xs font-taruno font-medium text-white">
                        <b>CLOSING NIGHT</b>
                    </h5>
                </a>
            </div>

            <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
            <script>
                AOS.init();
            </script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
</body>

</html>
