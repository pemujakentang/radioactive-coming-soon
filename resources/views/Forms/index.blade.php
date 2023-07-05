<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>UMN Radioactive</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    {{-- @vite('resources/css/app.css') --}}

</head>

<body class="antialiased">
    <form action="">
        <div>
            <div>
                <div>
                    <label for="">Penyiar 1</label>
                </div>
                <div>
                    <input type="text" placeholder="Nama Lengkap Penyiar 1" required>
                </div>
            </div>
            <div>
                <div>
                    <label for="">Penyiar 2</label>
                </div>
                <div>
                    <input type="text" placeholder="Nama Lengkap Penyiar 2" required>
                </div>
            </div>
            <div>
                <div>
                    <label for="">Operator</label>
                </div>
                <div>
                    <input type="text" placeholder="Nama Lengkap Operator" required>
                </div>
            </div>
        </div>

        <div>
            <div>
                <label for="">Institusi Asal</label>
            </div>
            <div>
                <input type="text" placeholder="Institusi Asal" required>
            </div>
        </div>

        <div>
            <div>
                <div>
                    <label for="">NIM Penyiar 1</label>
                </div>
                <div>
                    <input type="text" placeholder="'-' untuk luar UMN" required>
                </div>
            </div>
            <div>
                <div>
                    <label for="">NIM Penyiar 2</label>
                </div>
                <div>
                    <input type="text" placeholder="'-' untuk luar UMN" required>
                </div>
            </div>
            <div>
                <div>
                    <label for="">NIM Operator</label>
                </div>
                <div>
                    <input type="text" placeholder="'-' untuk luar UMN" required>
                </div>
            </div>
        </div>

        <div>
            <div>
                <div>
                    <label for="">Nomor WA Perwakilan</label>
                </div>
                <div>
                    <input type="text" placeholder="" required>
                </div>
            </div>
            <div>
                <div>
                    <label for="">ID Line Perwakilan</label>
                </div>
                <div>
                    <input type="text" placeholder="" required>
                </div>
            </div>
        </div>

        <div>
            <div>
                <label for="">Bukti Pembayaran</label>
            </div>
            <div>
                <input type="file" accept="image/*" required>
            </div>
        </div>

        <div class="md:w-2/3">
            <button
                type="submit">
                Sign Up
            </button>
        </div>

    </form>
</body>

</html>
