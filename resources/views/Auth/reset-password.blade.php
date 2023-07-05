<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>UMN Radio | Reset Passowrd</title>
</head>
<body>
<img src="{{ url('/images/backgroundLogin.jpg') }}" alt="Image"
        class="absolute inset-0 z-0 h-full w-full object-cover" />
    <div class="absolute inset-0 z-0 h-full w-full bg-black/50" />
    <div class="container relative z-40 mx-auto p-8 flex items-center justify-center">
        <img src="{{ url('/images/logoRadio-putih.png') }}" alt="Image" class="h-20" />
    </div>
    <div class="class=container mx-auto p-4">
        <form action="{{ route('password.update') }}" method="post">
            <div
                class="class=flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md absolute top-2/4 left-2/4 mt-5 w-full max-w-[24rem] -translate-y-2/4 -translate-x-2/4">
                <div
                    class="relative bg-clip-border mx-4 rounded-xl overflow-hidden shadow-lg -mt-6 mb-4 grid h-28 place-items-center bg-gradient-to-r from-[#011F39] to-[#629FD4]">
                    <h3 class="block antialiased tracking-normal font-sans text-xl font-bold leading-snug text-white">
                    Forgot Your Password?</h3>
                </div>
                @if ($errors->any())
                    <ul class="text-red-500 text-center">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @elseif (session()->has('status'))
                    <div class="text-green-500 text-center">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="p-6 flex flex-col gap-4">
                    @csrf
                    <input type="hidden" name="token" value="{{ request()->token }}">
                    <input type="hidden" name="email" value="{{ request()->email }}">
                    <div class="relative w-full min-w-[200px] h-11">
                        <input name="password" type="password" placeholder="New Password"
                            class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1">
                    </div>
                    <div class="relative w-full min-w-[200px] h-11">
                        <input name="password_confirmation" type="password" placeholder="Confirm Password"
                            class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1">
                    </div>
                    <div class="relative w-full min-w-[200px] h-11 mb-3">
                        <button type="submit" value="Update Password"
                            class="bg-gradient-to-r from-[#011F39] to-[#629FD4] hover:shadow-lg hover:shadow-blue-500/40 text-white font-bold py-2 px-4 rounded-lg block w-full">
                            Reset Password
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    </div>
</body>

</html>