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
    @if ($amount == 1)
        <form action="/teams" class="" enctype="multipart/form-data" method="post">
            <div class="w-full max-w-xs bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @csrf
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
                                value="{{ old('tim1_penyiar1') }}">
                            @error('tim1_penyiar1')
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
                                class="block @error('tim1_penyiar2') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="text" placeholder="Nama Lengkap Penyiar 2" name="tim1_penyiar2"
                                value="{{ old('tim1_penyiar2') }}">
                            @error('tim1_penyiar2')
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
                                class="block @error('tim1_operator') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="text" placeholder="Nama Lengkap Operator" name="tim1_operator"
                                value="{{ old('tim1_operator') }}">
                            @error('tim1_operator')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="mb-0.5">
                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-0.5" for="">Institusi/Organisasi
                            Asal</label>
                    </div>
                    <div>
                        <input
                            class="block @error('tim1_institusi') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            type="text" placeholder="Institusi/Organisasi Asal" name="tim1_institusi"
                            value="{{ old('tim1_institusi') }}">
                        @error('tim1_institusi')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div>
                    <div class="mb-0.5">
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-0.5" for="">NIM Penyiar
                                1</label>
                        </div>
                        <div>
                            <input
                                class="block @error('tim1_nims1') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="text" placeholder="'-' untuk luar UMN" name="tim1_nims1"
                                value="{{ old('tim1_nims1') }}">
                            @error('tim1_nims1')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-0.5">
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-0.5" for="">NIM Penyiar
                                2</label>
                        </div>
                        <div>
                            <input
                                class="block @error('tim1_nims2') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"class="block @error('tim1_penyiar2') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="text" placeholder="'-' untuk luar UMN" name="tim1_nims2"
                                value="{{ old('tim1_nims2') }}">
                            @error('tim1_nims2')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-0.5">
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-0.5" for="">NIM
                                Operator</label>
                        </div>
                        <div>
                            <input
                                class="block @error('tim1_nimop') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="text" placeholder="'-' untuk luar UMN" name="tim1_nimop"
                                value="{{ old('tim1_nimop') }}">
                            @error('tim1_nimop')
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
                                class="block @error('tim1_contact_wa') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="text" placeholder="" name="tim1_contact_wa"
                                value="{{ old('tim1_contact_wa') }}">
                            @error('tim1_contact_wa')
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
                                class="block @error('tim1_contact_line') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="text" placeholder="" name="tim1_contact_line"
                                value="{{ old('tim1_contact_line') }}">
                            @error('tim1_contact_line')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="mb-0.5">
                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-0.5" for="">Bukti
                            Pembayaran</label>
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
                    <button class="text-white bg-blue-600 rounded text-sm px-5 py-2.5 m-1" type="submit"
                        onclick="return confirm('Pastikan data yang dimasukkan benar adanya')">
                        Daftar
                    </button>
                </div>
            </div>
        </form>
    @elseif($amount == 2)
        <form action="/teams" class="" enctype="multipart/form-data" method="post">
            <div class="w-full max-w-md bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @csrf
                @if (session()->has('success'))
                    <div class="text-sm text-green-500" role="alert">{{ session('success') }}</div>
                @endif

                <div>
                    <h3>TIM 1</h3>
                    <div>
                        <div class="mb-0.5">
                            <label class="block text-gray-700 text-sm font-bold mb-0.5" for="">
                                <span class="text-black">Penyiar 1</span>
                            </label>
                            <div>
                                <input
                                    class="block @error('tim1_penyiar1') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="Nama Lengkap Penyiar 1" name="tim1_penyiar1"
                                    value="{{ old('tim1_penyiar1') }}">
                                @error('tim1_penyiar1')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-0.5">
                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-0.5" for="">Penyiar
                                    2</label>
                            </div>
                            <div>
                                <input
                                    class="block @error('tim1_penyiar2') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="Nama Lengkap Penyiar 2" name="tim1_penyiar2"
                                    value="{{ old('tim1_penyiar2') }}">
                                @error('tim1_penyiar2')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-0.5">
                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-0.5"
                                    for="">Operator</label>
                            </div>
                            <div>
                                <input
                                    class="block @error('tim1_operator') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="Nama Lengkap Operator" name="tim1_operator"
                                    value="{{ old('tim1_operator') }}">
                                @error('tim1_operator')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="mb-0.5">
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-0.5" for="">Institusi/Organisasi
                                Asal</label>
                        </div>
                        <div>
                            <input
                                class="block @error('tim1_institusi') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="text" placeholder="Institusi/Organisasi Asal" name="tim1_institusi"
                                value="{{ old('tim1_institusi') }}">
                            @error('tim1_institusi')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <div class="mb-0.5">
                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-0.5" for="">NIM Penyiar
                                    1</label>
                            </div>
                            <div>
                                <input
                                    class="block @error('tim1_nims1') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="'-' untuk luar UMN" name="tim1_nims1"
                                    value="{{ old('tim1_nims1') }}">
                                @error('tim1_nims1')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-0.5">
                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-0.5" for="">NIM Penyiar
                                    2</label>
                            </div>
                            <div>
                                <input
                                    class="block @error('tim1_nims2') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"class="block @error('tim1_penyiar2') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="'-' untuk luar UMN" name="tim1_nims2"
                                    value="{{ old('tim1_nims2') }}">
                                @error('tim1_nims2')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-0.5">
                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-0.5" for="">NIM
                                    Operator</label>
                            </div>
                            <div>
                                <input
                                    class="block @error('tim1_nimop') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="'-' untuk luar UMN" name="tim1_nimop"
                                    value="{{ old('tim1_nimop') }}">
                                @error('tim1_nimop')
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
                                    class="block @error('tim1_contact_wa') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="" name="tim1_contact_wa"
                                    value="{{ old('tim1_contact_wa') }}">
                                @error('tim1_contact_wa')
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
                                    class="block @error('tim1_contact_line') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="" name="tim1_contact_line"
                                    value="{{ old('tim1_contact_line') }}">
                                @error('tim1_contact_line')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <h3>TIM 2</h3>
                    <div>
                        <div class="mb-0.5">
                            <label class="block text-gray-700 text-sm font-bold mb-0.5" for="">
                                <span class="text-black">Penyiar 1</span>
                            </label>
                            <div>
                                <input
                                    class="block @error('tim2_penyiar1') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="Nama Lengkap Penyiar 1" name="tim2_penyiar1"
                                    value="{{ old('tim2_penyiar1') }}">
                                @error('tim2_penyiar1')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-0.5">
                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-0.5" for="">Penyiar
                                    2</label>
                            </div>
                            <div>
                                <input
                                    class="block @error('tim2_penyiar2') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="Nama Lengkap Penyiar 2" name="tim2_penyiar2"
                                    value="{{ old('tim2_penyiar2') }}">
                                @error('tim2_penyiar2')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-0.5">
                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-0.5"
                                    for="">Operator</label>
                            </div>
                            <div>
                                <input
                                    class="block @error('tim2_operator') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="Nama Lengkap Operator" name="tim2_operator"
                                    value="{{ old('tim2_operator') }}">
                                @error('tim2_operator')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="mb-0.5">
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-0.5" for="">Institusi/Organisasi
                                Asal</label>
                        </div>
                        <div>
                            <input
                                class="block @error('tim2_institusi') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="text" placeholder="Institusi/Organisasi Asal" name="tim2_institusi"
                                value="{{ old('tim2_institusi') }}">
                            @error('tim2_institusi')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <div class="mb-0.5">
                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-0.5" for="">NIM Penyiar
                                    1</label>
                            </div>
                            <div>
                                <input
                                    class="block @error('tim2_nims1') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="'-' untuk luar UMN" name="tim2_nims1"
                                    value="{{ old('tim2_nims1') }}">
                                @error('tim2_nims1')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-0.5">
                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-0.5" for="">NIM Penyiar
                                    2</label>
                            </div>
                            <div>
                                <input
                                    class="block @error('tim2_nims2') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"class="block @error('tim2_penyiar2') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="'-' untuk luar UMN" name="tim2_nims2"
                                    value="{{ old('tim2_nims2') }}">
                                @error('tim2_nims2')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-0.5">
                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-0.5" for="">NIM
                                    Operator</label>
                            </div>
                            <div>
                                <input
                                    class="block @error('tim2_nimop') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="'-' untuk luar UMN" name="tim2_nimop"
                                    value="{{ old('tim2_nimop') }}">
                                @error('tim2_nimop')
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
                                    class="block @error('tim2_contact_wa') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="" name="tim2_contact_wa"
                                    value="{{ old('tim2_contact_wa') }}">
                                @error('tim2_contact_wa')
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
                                    class="block @error('tim2_contact_line') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="" name="tim2_contact_line"
                                    value="{{ old('tim2_contact_line') }}">
                                @error('tim2_contact_line')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-0.5">
                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-0.5" for="">Bukti
                            Pembayaran</label>
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
                    <button class="text-white bg-blue-600 rounded text-sm px-5 py-2.5 m-1" type="submit"
                        onclick="return confirm('Pastikan data yang dimasukkan benar adanya')">
                        Daftar
                    </button>
                </div>
            </div>
        </form>
    @elseif($amount == 3)
        <form action="/teams" class="" enctype="multipart/form-data" method="post">
            <div class="w-full max-w-md bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @csrf
                @if (session()->has('success'))
                    <div class="text-sm text-green-500" role="alert">{{ session('success') }}</div>
                @endif

                <div>
                    <h3>TIM 1</h3>
                    <div>
                        <div class="mb-0.5">
                            <label class="block text-gray-700 text-sm font-bold mb-0.5" for="">
                                <span class="text-black">Penyiar 1</span>
                            </label>
                            <div>
                                <input
                                    class="block @error('tim1_penyiar1') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="Nama Lengkap Penyiar 1" name="tim1_penyiar1"
                                    value="{{ old('tim1_penyiar1') }}">
                                @error('tim1_penyiar1')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-0.5">
                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-0.5" for="">Penyiar
                                    2</label>
                            </div>
                            <div>
                                <input
                                    class="block @error('tim1_penyiar2') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="Nama Lengkap Penyiar 2" name="tim1_penyiar2"
                                    value="{{ old('tim1_penyiar2') }}">
                                @error('tim1_penyiar2')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-0.5">
                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-0.5"
                                    for="">Operator</label>
                            </div>
                            <div>
                                <input
                                    class="block @error('tim1_operator') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="Nama Lengkap Operator" name="tim1_operator"
                                    value="{{ old('tim1_operator') }}">
                                @error('tim1_operator')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="mb-0.5">
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-0.5" for="">Institusi/Organisasi
                                Asal</label>
                        </div>
                        <div>
                            <input
                                class="block @error('tim1_institusi') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="text" placeholder="Institusi/Organisasi Asal" name="tim1_institusi"
                                value="{{ old('tim1_institusi') }}">
                            @error('tim1_institusi')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <div class="mb-0.5">
                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-0.5" for="">NIM Penyiar
                                    1</label>
                            </div>
                            <div>
                                <input
                                    class="block @error('tim1_nims1') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="'-' untuk luar UMN" name="tim1_nims1"
                                    value="{{ old('tim1_nims1') }}">
                                @error('tim1_nims1')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-0.5">
                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-0.5" for="">NIM Penyiar
                                    2</label>
                            </div>
                            <div>
                                <input
                                    class="block @error('tim1_nims2') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"class="block @error('tim1_penyiar2') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="'-' untuk luar UMN" name="tim1_nims2"
                                    value="{{ old('tim1_nims2') }}">
                                @error('tim1_nims2')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-0.5">
                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-0.5" for="">NIM
                                    Operator</label>
                            </div>
                            <div>
                                <input
                                    class="block @error('tim1_nimop') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="'-' untuk luar UMN" name="tim1_nimop"
                                    value="{{ old('tim1_nimop') }}">
                                @error('tim1_nimop')
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
                                    class="block @error('tim1_contact_wa') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="" name="tim1_contact_wa"
                                    value="{{ old('tim1_contact_wa') }}">
                                @error('tim1_contact_wa')
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
                                    class="block @error('tim1_contact_line') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="" name="tim1_contact_line"
                                    value="{{ old('tim1_contact_line') }}">
                                @error('tim1_contact_line')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <h3>TIM 2</h3>
                    <div>
                        <div class="mb-0.5">
                            <label class="block text-gray-700 text-sm font-bold mb-0.5" for="">
                                <span class="text-black">Penyiar 1</span>
                            </label>
                            <div>
                                <input
                                    class="block @error('tim2_penyiar1') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="Nama Lengkap Penyiar 1" name="tim2_penyiar1"
                                    value="{{ old('tim2_penyiar1') }}">
                                @error('tim2_penyiar1')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-0.5">
                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-0.5" for="">Penyiar
                                    2</label>
                            </div>
                            <div>
                                <input
                                    class="block @error('tim2_penyiar2') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="Nama Lengkap Penyiar 2" name="tim2_penyiar2"
                                    value="{{ old('tim2_penyiar2') }}">
                                @error('tim2_penyiar2')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-0.5">
                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-0.5"
                                    for="">Operator</label>
                            </div>
                            <div>
                                <input
                                    class="block @error('tim2_operator') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="Nama Lengkap Operator" name="tim2_operator"
                                    value="{{ old('tim2_operator') }}">
                                @error('tim2_operator')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="mb-0.5">
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-0.5" for="">Institusi/Organisasi
                                Asal</label>
                        </div>
                        <div>
                            <input
                                class="block @error('tim2_institusi') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="text" placeholder="Institusi/Organisasi Asal" name="tim2_institusi"
                                value="{{ old('tim2_institusi') }}">
                            @error('tim2_institusi')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <div class="mb-0.5">
                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-0.5" for="">NIM Penyiar
                                    1</label>
                            </div>
                            <div>
                                <input
                                    class="block @error('tim2_nims1') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="'-' untuk luar UMN" name="tim2_nims1"
                                    value="{{ old('tim2_nims1') }}">
                                @error('tim2_nims1')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-0.5">
                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-0.5" for="">NIM Penyiar
                                    2</label>
                            </div>
                            <div>
                                <input
                                    class="block @error('tim2_nims2') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"class="block @error('tim2_penyiar2') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="'-' untuk luar UMN" name="tim2_nims2"
                                    value="{{ old('tim2_nims2') }}">
                                @error('tim2_nims2')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-0.5">
                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-0.5" for="">NIM
                                    Operator</label>
                            </div>
                            <div>
                                <input
                                    class="block @error('tim2_nimop') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="'-' untuk luar UMN" name="tim2_nimop"
                                    value="{{ old('tim2_nimop') }}">
                                @error('tim2_nimop')
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
                                    class="block @error('tim2_contact_wa') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="" name="tim2_contact_wa"
                                    value="{{ old('tim2_contact_wa') }}">
                                @error('tim2_contact_wa')
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
                                    class="block @error('tim2_contact_line') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="" name="tim2_contact_line"
                                    value="{{ old('tim2_contact_line') }}">
                                @error('tim2_contact_line')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <h3>TIM 3</h3>
                    <div>
                        <div class="mb-0.5">
                            <label class="block text-gray-700 text-sm font-bold mb-0.5" for="">
                                <span class="text-black">Penyiar 1</span>
                            </label>
                            <div>
                                <input
                                    class="block @error('tim3_penyiar1') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="Nama Lengkap Penyiar 1" name="tim3_penyiar1"
                                    value="{{ old('tim3_penyiar1') }}">
                                @error('tim3_penyiar1')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-0.5">
                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-0.5" for="">Penyiar
                                    2</label>
                            </div>
                            <div>
                                <input
                                    class="block @error('tim3_penyiar2') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="Nama Lengkap Penyiar 2" name="tim3_penyiar2"
                                    value="{{ old('tim3_penyiar2') }}">
                                @error('tim3_penyiar2')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-0.5">
                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-0.5"
                                    for="">Operator</label>
                            </div>
                            <div>
                                <input
                                    class="block @error('tim3_operator') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="Nama Lengkap Operator" name="tim3_operator"
                                    value="{{ old('tim3_operator') }}">
                                @error('tim3_operator')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="mb-0.5">
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-0.5" for="">Institusi/Organisasi
                                Asal</label>
                        </div>
                        <div>
                            <input
                                class="block @error('tim3_institusi') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="text" placeholder="Institusi/Organisasi Asal" name="tim3_institusi"
                                value="{{ old('tim3_institusi') }}">
                            @error('tim3_institusi')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <div class="mb-0.5">
                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-0.5" for="">NIM Penyiar
                                    1</label>
                            </div>
                            <div>
                                <input
                                    class="block @error('tim3_nims1') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="'-' untuk luar UMN" name="tim3_nims1"
                                    value="{{ old('tim3_nims1') }}">
                                @error('tim3_nims1')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-0.5">
                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-0.5" for="">NIM Penyiar
                                    2</label>
                            </div>
                            <div>
                                <input
                                    class="block @error('tim3_nims2') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"class="block @error('tim3_penyiar2') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="'-' untuk luar UMN" name="tim3_nims2"
                                    value="{{ old('tim3_nims2') }}">
                                @error('tim3_nims2')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-0.5">
                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-0.5" for="">NIM
                                    Operator</label>
                            </div>
                            <div>
                                <input
                                    class="block @error('tim3_nimop') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="'-' untuk luar UMN" name="tim3_nimop"
                                    value="{{ old('tim3_nimop') }}">
                                @error('tim3_nimop')
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
                                    class="block @error('tim3_contact_wa') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="" name="tim3_contact_wa"
                                    value="{{ old('tim3_contact_wa') }}">
                                @error('tim3_contact_wa')
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
                                    class="block @error('tim3_contact_line') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    type="text" placeholder="" name="tim3_contact_line"
                                    value="{{ old('tim3_contact_line') }}">
                                @error('tim3_contact_line')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-0.5">
                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-0.5" for="">Bukti
                            Pembayaran</label>
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
                    <button class="text-white bg-blue-600 rounded text-sm px-5 py-2.5 m-1" type="submit"
                        onclick="return confirm('Pastikan data yang dimasukkan benar adanya')">
                        Daftar
                    </button>
                </div>
            </div>
        </form>
    @endif
</body>

</html>
