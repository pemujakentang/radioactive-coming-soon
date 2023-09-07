<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>UMN Radioactive</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    {{-- <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}

    <!-- Styles -->
    @vite('resources/css/app.css')

</head>

<body class="antialiased bg-black min-h-screen">
    <div class="font-taruno2 text-lg md:text-3xl text-white flex justify-center text-center pt-8 mb-6">RAC Registration
    </div>
    <div class="flex justify-center align-middle form-container">
        <div class="content-container px-4 py-4 flex flex-col w-[400px] max-w-[95vw]">
            @if ($rac_teams->count() > 0)

                @php
                    $count = $rac_teams->count();
                @endphp

                @foreach ($rac_teams as $team)
                    @if (
                        $team->tim3_institusi &&
                            $team->tim3_penyiar1 &&
                            $team->tim3_penyiar2 &&
                            $team->tim3_operator &&
                            $team->tim3_contact_wa)
                        @php
                            $count += 2;
                        @endphp
                    @elseif(
                        $team->tim2_institusi &&
                            $team->tim2_penyiar1 &&
                            $team->tim2_penyiar2 &&
                            $team->tim2_operator &&
                            $team->tim2_contact_wa)
                        @php
                            $count++;
                        @endphp
                    @endif
                @endforeach

                <h2 class="w-full text-center font-taruno text-white">Remaining Slots: {{ 20 - $count }}</h2>

                @if ($count >= 20)
                    <h2 class="w-full text-center font-taruno">Kuota Tim Habis</h2>
                @elseif ($count >= 19)
                    <a href="/form/1">
                        <button class="button-submit font-taruno text-white bg-[#0E0EC0] w-full text-sm px-5 py-1 my-1"
                            type="submit" onclick="return confirm('Pastikan data yang dimasukkan benar adanya')">
                            Satu Tim
                        </button>
                    </a>
                @elseif($count >= 18)
                    <a href="/form/1">
                        <button class="button-submit font-taruno text-white bg-[#0E0EC0] w-full text-sm px-5 py-1 my-1"
                            type="submit" onclick="return confirm('Pastikan data yang dimasukkan benar adanya')">
                            Satu Tim
                        </button>
                    </a>
                    <a href="/form/2">
                        <button class="button-submit font-taruno text-white bg-[#0E0EC0] w-full text-sm px-5 py-1 my-1"
                            type="submit" onclick="return confirm('Pastikan data yang dimasukkan benar adanya')">
                            Dua Tim
                        </button>
                    </a>
                @else
                    <a href="/form/1">
                        <button class="button-submit font-taruno text-white bg-[#0E0EC0] w-full text-sm px-5 py-1 my-1"
                            type="submit" onclick="return confirm('Pastikan data yang dimasukkan benar adanya')">
                            Satu Tim
                        </button>
                    </a>
                    <a href="/form/2">
                        <button class="button-submit font-taruno text-white bg-[#0E0EC0] w-full text-sm px-5 py-1 my-1"
                            type="submit" onclick="return confirm('Pastikan data yang dimasukkan benar adanya')">
                            Dua Tim
                        </button>
                    </a>
                    <a href="/form/3">
                        <button class="button-submit font-taruno text-white bg-[#0E0EC0] w-full text-sm px-5 py-1 my-1"
                            type="submit" onclick="return confirm('Pastikan data yang dimasukkan benar adanya')">
                            Tiga Tim
                        </button>
                    </a>
                @endif
            @else
                <a href="/form/1">
                    <button class="button-submit font-taruno text-white bg-[#0E0EC0] w-full text-sm px-5 py-1 my-1"
                        type="submit" onclick="return confirm('Pastikan data yang dimasukkan benar adanya')">
                        Satu Tim
                    </button>
                </a>
                <a href="/form/2">
                    <button class="button-submit font-taruno text-white bg-[#0E0EC0] w-full text-sm px-5 py-1 my-1"
                        type="submit" onclick="return confirm('Pastikan data yang dimasukkan benar adanya')">
                        Dua Tim
                    </button>
                </a>
                <a href="/form/3">
                    <button class="button-submit font-taruno text-white bg-[#0E0EC0] w-full text-sm px-5 py-1 my-1"
                        type="submit" onclick="return confirm('Pastikan data yang dimasukkan benar adanya')">
                        Tiga Tim
                    </button>
                </a>
            @endif
        </div>
    </div>
    <div class="w-full flex justify-center">
        <div class="w-[90%]">

            <div class="w-full flex justify-center">

            </div>
        </div>

        {{-- <h2>{{ $rac_teams->count() }}</h2> --}}

    </div>
</body>

<style>
    .button-submit {
        transition: background-color 0.25s, transform 0.25s;
        border: 2px solid white;
    }

    .button-submit:hover {
        background-color: #FFF000;
        color: black;
        transform: scale(1.05);
    }

    .button-submit:active {
        background-color: white;
        color: black;
    }

    .content-container{
        background-color: rgb(45, 45, 45);
        color: white;
        border-radius: 3px;
        border: solid 3px white;
    }
</style>

</html>
