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

<body class="antialiased">
    <div class="w-full max-w-xs">
        <form action="/teams" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" enctype="multipart/form-data"
            method="post">
            @csrf
            <div>
                <div class="mb-0.5">
                    <label class="block text-gray-700 text-sm font-bold mb-0.5" for="">
                        <span class="text-black">Penyiar 1</span>
                    </label>
                    <div>
                        <input
                            class="block @error('penyiar1') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            type="text" placeholder="Nama Lengkap Penyiar 1" name="penyiar1"
                            value="{{ old('penyiar1') }}">
                        @error('penyiar1')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-0.5">
                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-0.5" for="">Penyiar 2</label>
                    </div>
                    <div>
                        <input
                            class="block @error('penyiar2') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            type="text" placeholder="Nama Lengkap Penyiar 2" name="penyiar2"
                            value="{{ old('penyiar2') }}">
                        @error('penyiar2')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-0.5">
                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-0.5" for="">Operator</label>
                    </div>
                    <div>
                        <input
                            class="block @error('operator') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            type="text" placeholder="Nama Lengkap Operator" name="operator"
                            value="{{ old('operator') }}">
                        @error('operator')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="mb-0.5">
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-0.5" for="">Institusi Asal</label>
                </div>
                <div>
                    <input
                        class="block @error('institusi') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        type="text" placeholder="Institusi Asal" name="institusi" value="{{ old('institusi') }}">
                    @error('institusi')
                        <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div>
                <div class="mb-0.5">
                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-0.5" for="">NIM Penyiar 1</label>
                    </div>
                    <div>
                        <input
                            class="block @error('nims1') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            type="text" placeholder="'-' untuk luar UMN" name="nims1" value="{{ old('nims1') }}">
                        @error('nims1')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-0.5">
                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-0.5" for="">NIM Penyiar 2</label>
                    </div>
                    <div>
                        <input
                            class="block @error('nims2') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"class="block @error('penyiar2') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            type="text" placeholder="'-' untuk luar UMN" name="nims2" value="{{ old('nims2') }}">
                        @error('nims2')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-0.5">
                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-0.5" for="">NIM Operator</label>
                    </div>
                    <div>
                        <input
                            class="block @error('nimop') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            type="text" placeholder="'-' untuk luar UMN" name="nimop" value="{{ old('nimop') }}">
                        @error('nimop')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div>
                <div class="mb-0.5">
                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-0.5" for="">Nomor WA
                            Perwakilan</label>
                    </div>
                    <div>
                        <input
                            class="block @error('contact_wa') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            type="text" placeholder="" name="contact_wa" value="{{ old('contact_wa') }}">
                        @error('contact_wa')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-0.5">
                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-0.5" for="">ID Line
                            Perwakilan</label>
                    </div>
                    <div>
                        <input
                            class="block @error('contact_line') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            type="text" placeholder="" name="contact_line" value="{{ old('contact_line') }}">
                        @error('contact_line')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="mb-0.5">
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-0.5" for="">Bukti Pembayaran</label>
                </div>
                <div>
                    <input
                        class="block @error('payment_proof') border-red-500 @enderror w-full mb-5 text-xs text-gray-900 border rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        type="file" accept="image/*" name="payment_proof">
                    @error('payment_proof')
                        <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="">
                <button class="text-white bg-blue-600 rounded text-sm px-5 py-2.5 m-1" type="submit">
                    Daftar
                </button>
            </div>

        </form>
    </div>
</body>

</html>
