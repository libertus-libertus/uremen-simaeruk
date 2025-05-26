@extends('layouts.auth.auth')
@section('title', 'Register')

@section('content')
<section id="register" class="py-24 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="md:text-4xl font-bold text-gray-800 mb-2">
                Daftarkan Akun Baru
            </h2>
            <p class="text-base text-gray-600 max-w-3xl mx-auto">
                Buat akun baru Anda dengan mudah untuk menikmati semua fitur kami.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="animate__animated animate__fadeInLeft">
                <img src="assets/images/11190420.jpg" alt="Register Illustration"
                    class="rounded-lg w-full h-auto object-cover">
            </div>

            <div class="animate__animated animate__fadeInRight">
                <form class="space-y-6" action="{{ route('register') }}" method="post">
                    @csrf

                    <!-- Username -->
                    <div>
                        <label for="name" class="block text-sm font-medium mb-1 text-gray-700">
                            Nama Lengkap
                            @error('name')
                                <span class="text-red-600 italic text-sm font-normal">*</span>
                            @enderror
                        </label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}"
                            class="w-full bg-white border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-cyan-500 transition" autofocus />
                    </div>

                    <!-- Alamat email -->
                    <div>
                        <label for="email" class="block text-sm font-medium mb-1 text-gray-700">
                            Alamat Email
                            @error('email')
                                <span class="text-red-600 italic text-sm font-normal">*</span>
                            @enderror
                        </label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}"
                            class="w-full bg-white border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-cyan-500 transition" />
                    </div>

                    <!-- Kata sandi -->
                    <div>
                        <label for="password" class="block text-sm font-medium mb-1 text-gray-700">
                            Kata Sandi
                            @error('password')
                                <span class="text-red-600 italic text-sm font-normal">({{ $message }})</span>
                            @enderror
                        </label>
                        <input type="password" id="password" name="password"
                            class="w-full bg-white border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-cyan-500 transition" />
                    </div>

                    <!-- Konfirmasi Kata sandi -->
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium mb-1 text-gray-700">
                            Konfirmasi Kata Sandi
                            @error('password_confirmation')
                                <span class="text-red-600 italic text-sm font-normal">({{ $message }})</span>
                            @enderror
                        </label>
                        <input type="password" id="password_confirmation" name="password_confirmation"
                            class="w-full bg-white border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-cyan-500 transition" />
                    </div>

                    <button type="submit"
                        class="text-base w-full bg-cyan-500 hover:bg-cyan-600 text-white font-bold py-3 px-6 rounded-lg transition duration-300 transform hover:scale-[1.02]">
                        Daftar Sekarang
                    </button>

                    <div class="text-sm text-center text-gray-600">
                        Atau daftar dengan
                    </div>

                    <div class="flex flex-col sm:flex-row gap-4">
                        <button type="button"
                            class="text-sm flex-1 bg-white hover:bg-gray-50 text-gray-800 font-bold py-3 px-6 rounded-lg transition duration-300 transform hover:scale-[1.02] flex items-center justify-center border border-gray-300">
                            <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path fill="#4285F4"
                                    d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" />
                                <path fill="#34A853"
                                    d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" />
                                <path fill="#FBBC05"
                                    d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" />
                                <path fill="#EA4335"
                                    d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" />
                            </svg>
                            Google
                        </button>
                        <button type="button"
                            class="text-sm flex-1 bg-[#1877F2] hover:bg-[#166FE5] text-white font-bold py-3 px-6 rounded-lg transition duration-300 transform hover:scale-[1.02] flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c5.05-.5 9-4.76 9-9.95z" />
                            </svg>
                            Facebook
                        </button>
                    </div>

                    <div class="text-center text-sm mt-4">
                        Sudah punya akun? <a href="{{ route('login') }}" class="text-cyan-600 hover:underline">Masuk di sini</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection