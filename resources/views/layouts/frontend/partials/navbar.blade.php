<!-- Navbar -->
<header id="main-header" class="w-full bg-white fixed top-0 left-0 z-50 shadow-sm">
    <div
        class="max-w-7xl mx-auto px-4 md:px-6 py-3 flex justify-between items-center relative z-50 animate__animated animate__fadeInDown">
        <div class="text-xl font-extrabold gradient-text">
            <a href="{{ route('home') }}">
                <img src="assets/images/logo/logo.png" alt="logo" class="w-20">
            </a>
        </div>

        <nav class="hidden xl:flex items-center space-x-8 text-sm font-medium relative">
            <a href="{{ route('home') }}" class="text-teal-600 font-semibold">Beranda</a>
            <a href="{{ route('about') }}" class="hover:text-teal-600 transition">Tentang Kami</a>
            <a href="{{ route('service') }}" class="hover:text-teal-600 transition">Layanan</a>
            <a href="{{ route('portfolio') }}" class="hover:text-teal-600 transition">Portfolio</a>
            <a href="{{ route('faq') }}" class="hover:text-teal-600 transition">F.A.Q</a>
            <a href="{{ route('contact') }}" class="hover:text-teal-600 transition">Kontak Kami</a>
        </nav>

        <div class="hidden xl:flex items-center gap-3 text-sm space-x-4">
            <a href="{{ route('blog') }}" class="block hover:text-teal-600 transition py-2">Blog</a>
            @auth
                <a href="{{ route('dashboard') }}"
                    class="border border-teal-600 text-teal-600 px-4 py-1 rounded-full hover:bg-teal-600 hover:text-white font-semibold transition">
                    Dashboard
                </a>
            @endauth
            @guest
                <a href="{{ route('login') }}"
                    class="border border-teal-600 text-teal-600 px-4 py-1 rounded-full hover:bg-teal-600 hover:text-white font-semibold transition">
                    Login Here
                </a>
            @endguest
        </div>

        <div class="xl:hidden flex items-center">
            <button id="menu-toggle" class="text-gray-700 focus:outline-none">
                <i class="fa fa-bars text-xl"></i>
            </button>
        </div>
    </div>

    <div id="mobile-menu"
        class="fixed inset-0 w-full bg-white z-40 transform translate-x-full xl:hidden shadow-lg transition-transform duration-300 ease-in-out">
        <nav class="flex flex-col p-4 space-y-4 text-gray-800 text-base font-medium pt-20">
            <a href="{{ route('home') }}" class="block hover:text-teal-600 transition py-2">Beranda</a>
            <a href="{{ route('about') }}" class="block hover:text-teal-600 transition py-2">Tentang Kami</a>
            <a href="{{ route('service') }}" class="block hover:text-teal-600 transition py-2">Layanan</a>
            <a href="{{ route('portfolio') }}" class="block hover:text-teal-600 transition py-2">Portfolio</a>
            <a href="{{ route('faq') }}" class="block hover:text-teal-600 transition py-2">F.A.Q</a>
            <a href="{{ route('contact') }}" class="block hover:text-teal-600 transition py-2">Kontak Kami</a>
            <div class="pt-4 border-t border-gray-200">
                <a href="{{ route('blog') }}" class="block hover:text-teal-600 transition py-2">Blog</a>
                @auth
                    <a href="{{ route('dashboard') }}"
                    class="block border border-teal-600 text-teal-600 px-4 py-2 rounded-full text-center mt-3 hover:bg-teal-600 hover:text-white transition">Dashboard</a>
                @endauth
                @guest
                    <a href="{{ route('login') }}"
                    class="block border border-teal-600 text-teal-600 px-4 py-2 rounded-full text-center mt-3 hover:bg-teal-600 hover:text-white transition">Login Here</a>
                @endguest
            </div>
        </nav>
    </div>

    <div id="menu-backdrop"
        class="fixed inset-0 bg-black opacity-0 pointer-events-none z-30 xl:hidden transition-opacity duration-300 ease-in-out">
    </div>
</header>