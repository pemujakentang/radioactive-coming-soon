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
        <form action="/rac/{{ $team->id }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4"
            enctype="multipart/form-data" method="post">
            @method('put')
            @csrf
            Confirm Payment for Team ID: {{ $team->id }}
            @if (session()->has('success'))
                <div class="text-sm text-green-500" role="alert">{{ session('success') }}</div>
            @endif
            <div>
                <div class="mb-0.5">
                    <label class="block text-gray-700 text-sm font-bold mb-0.5" for="">
                        <span class="text-black">Penyiar 1</span>
                    </label>
                    <div>
                        <input
                            class="block @error('tim1_penyiar1') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            type="text" placeholder="Nama Lengkap Penyiar 1" name="tim1_penyiar1"
                            value="{{ old('tim1_penyiar1', $team->tim1_penyiar1) }}" readonly>

                    </div>
                </div>
                <div class="mb-0.5">
                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-0.5" for="">Penyiar 2</label>
                    </div>
                    <div>
                        <input
                            class="block @error('tim1_penyiar2') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            type="text" placeholder="Nama Lengkap Penyiar 2" name="tim1_penyiar2"
                            value="{{ old('tim1_penyiar2', $team->tim1_penyiar2) }}" readonly>

                    </div>
                </div>
                <div class="mb-0.5">
                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-0.5" for="">Operator</label>
                    </div>
                    <div>
                        <input
                            class="block @error('tim1_operator') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            type="text" placeholder="Nama Lengkap Operator" name="tim1_operator"
                            value="{{ old('tim1_operator', $team->tim1_operator) }}" readonly>

                    </div>
                </div>
            </div>

            <div class="mb-0.5">
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-0.5" for="">Institusi Asal</label>
                </div>
                <div>
                    <input
                        class="block @error('tim1_institusi') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        type="text" placeholder="Institusi Asal" name="tim1_institusi"
                        value="{{ old('tim1_institusi', $team->tim1_institusi) }}" readonly>
                    @error('tim1_institusi')
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
                            class="block @error('tim1_nims1') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            type="text" placeholder="'-' untuk luar UMN" name="tim1_nims1"
                            value="{{ old('tim1_nims1', $team->tim1_nims1) }}" readonly>

                    </div>
                </div>
                <div class="mb-0.5">
                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-0.5" for="">NIM Penyiar 2</label>
                    </div>
                    <div>
                        <input
                            class="block @error('tim1_nims2') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"class="block @error('tim1_penyiar2') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            type="text" placeholder="'-' untuk luar UMN" name="tim1_nims2"
                            value="{{ old('tim1_nims2', $team->tim1_nims2) }}" readonly>

                    </div>
                </div>
                <div class="mb-0.5">
                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-0.5" for="">NIM Operator</label>
                    </div>
                    <div>
                        <input
                            class="block @error('tim1_nimop') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            type="text" placeholder="'-' untuk luar UMN" name="tim1_nimop"
                            value="{{ old('tim1_nimop', $team->tim1_nimop) }}" readonly>

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
                            class="block @error('tim1_contact_wa') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            type="text" placeholder="" name="tim1_contact_wa"
                            value="{{ old('tim1_contact_wa', $team->tim1_contact_wa) }}" readonly>

                    </div>
                </div>
                <div class="mb-0.5">
                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-0.5" for="">ID Line
                            Perwakilan</label>
                    </div>
                    <div>
                        <input
                            class="block @error('tim1_contact_line') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            type="text" placeholder="" name="tim1_contact_line"
                            value="{{ old('tim1_contact_line', $team->tim1_contact_line) }}" readonly>

                    </div>
                </div>
            </div>
            <div class="mb-0.5">
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-0.5" for="">Bukti
                        Pembayaran</label>
                </div>
                <div>
                    <a target="_blank" href={{ asset('storage/' . $team->payment_proof) }}>
                        <img src={{ asset('storage/' . $team->payment_proof) }}
                            style="width:100%;height:100%;object-fit:contain;" alt="">
                    </a>
                </div>
            </div>

            <div class="mb-0.5">
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-0.5" for="">Status</label>
                </div>
                <div>
                    <select name="status" class="@error('status') border-red-500 @enderror border border-spacing-10 border-opacity-100 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                        <option disabled selected>Status</option>
                        <option value="Pending">Pending</option>
                        <option value="Approved">Approved</option>
                    </select>
                    @error('status')
                        <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="">
                <button class="text-white bg-green-600 rounded text-sm px-5 py-2.5 m-1" type="submit"
                    onclick="return confirm('Confirm Payment?')">
                    Confirm payment
                </button>
            </div>
        </form>
    </div>
</body>

</html>
