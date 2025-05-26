@extends('layouts.frontend.home')
@section('title', 'Portfolio Projek')

@section('content')
<section
    class="h-screen w-full bg-white flex items-center justify-center relative overflow-hidden px-4 py-16 md:py-20 lg:py-0">
    <canvas id="galaxy-canvas" class="absolute inset-0 z-0 pointer-events-none"></canvas>
    <div class="max-w-6xl w-full mx-auto text-center flex flex-col justify-center items-center relative z-10">
        <h1
            class="text-3xl md:text-4xl lg:text-5xl font-extrabold leading-snug md:leading-tight lg:leading-snug mb-4 animate__animated animate__fadeInDown animate__delay-1s">
            <span class="gradient-text block">Portfolio Kami</span>
            <span class="text-gray-800">Lihat Karya Terbaik Kami<span class="gradient-text">.</span></span>
        </h1>

        <p
            class="text-base md:text-lg text-gray-600 max-w-3xl mx-auto mb-8 px-4 animate__animated animate__fadeInDown animate__delay-2s">
            Jelajahi beragam proyek yang telah kami selesaikan dengan sukses, mencerminkan komitmen kami terhadap
            kualitas dan inovasi.
        </p>

        <div class="flex flex-col sm:flex-row gap-6 animate__animated animate__fadeInUp animate__delay-3s">
            <a href="#portfolio-grid"
                class="px-6 py-3 text-sm font-semibold rounded bg-cyan-500 text-white hover:bg-cyan-600 transition-shadow shadow-md hover:shadow-lg flex items-center justify-center">
                <i class="fas fa-eye mr-2"></i> Lihat Portfolio
            </a>
            <a href="{{ route('contact') }}"
                class="px-6 py-3 text-sm font-semibold rounded border border-cyan-500 text-cyan-500 hover:bg-cyan-50 hover:text-cyan-600 transition-shadow shadow-md hover:shadow-lg flex items-center justify-center">
                <i class="fas fa-handshake mr-2"></i> Mulai Proyek Anda
            </a>
        </div>
    </div>
</section>

<section id="portfolio-grid" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="md:text-4xl font-bold text-gray-800 mb-4">
                Karya-karya Kami
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Dari desain web yang memukau hingga solusi e-commerce yang tangguh, kami menghadirkan inovasi digital
                untuk klien kami.
            </p>
        </div>

        <div class="flex justify-center flex-wrap gap-3 mb-12">
            <button
                class="px-5 py-2 rounded-full text-sm font-medium bg-cyan-500 text-white hover:bg-cyan-600 transition filter-button active"
                data-filter="all">Semua</button>
            <button
                class="px-5 py-2 rounded-full text-sm font-medium border border-gray-300 text-gray-700 hover:bg-gray-100 transition filter-button"
                data-filter="website">Website Development</button>
            <button
                class="px-5 py-2 rounded-full text-sm font-medium border border-gray-300 text-gray-700 hover:bg-gray-100 transition filter-button"
                data-filter="ecommerce">E-commerce</button>
            <button
                class="px-5 py-2 rounded-full text-sm font-medium border border-gray-300 text-gray-700 hover:bg-gray-100 transition filter-button"
                data-filter="uiux">UI/UX Design</button>
            <button
                class="px-5 py-2 rounded-full text-sm font-medium border border-gray-300 text-gray-700 hover:bg-gray-100 transition filter-button"
                data-filter="branding">Branding</button>
        </div>

        <div id="portfolio-items-container" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

            <div class="bg-gray-50 rounded-lg shadow-lg overflow-hidden animate__animated animate__fadeInUp portfolio-item"
                data-category="website">
                <img src="assets/images/portfolios/embedsocial.jpg" alt="Website Bisnis XYZ"
                    class="w-full h-56 object-cover">
                <div class="p-6">
                    <h3 class="text-base font-bold text-gray-800 mb-2">Website Perusahaan XYZ</h3>
                    <p class="text-gray-600 text-sm mb-4">Pengembangan situs web korporat dengan fokus pada pengalaman
                        pengguna dan performa SEO.</p>
                    <div class="flex flex-wrap gap-2 text-xs">
                        <span class="bg-teal-100 text-teal-800 px-3 py-1 rounded-full">Website Development</span>
                        <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full">SEO</span>
                        <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full">Responsif</span>
                    </div>
                    <a href="{{ route('singleportfolio') }}"
                        class="mt-4 inline-block text-cyan-600 hover:text-cyan-800 font-semibold text-sm transition">Lihat
                        Detail <i class="fas fa-arrow-right ml-1 text-xs"></i></a>
                </div>
            </div>

            <div class="bg-gray-50 rounded-lg shadow-lg overflow-hidden animate__animated animate__fadeInUp portfolio-item"
                data-category="ecommerce">
                <img src="assets/images/portfolios/jexo.jpg" alt="Toko Online ABC" class="w-full h-56 object-cover">
                <div class="p-6">
                    <h3 class="text-base font-bold text-gray-800 mb-2">Platform E-commerce ABC Fashion</h3>
                    <p class="text-gray-600 text-sm mb-4">Membangun toko online lengkap dengan sistem pembayaran dan
                        manajemen inventori.</p>
                    <div class="flex flex-wrap gap-2 text-xs">
                        <span class="bg-teal-100 text-teal-800 px-3 py-1 rounded-full">E-commerce</span>
                        <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full">Pembayaran Online</span>
                        <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full">Mobile-First</span>
                    </div>
                    <a href="{{ route('singleportfolio') }}"
                        class="mt-4 inline-block text-cyan-600 hover:text-cyan-800 font-semibold text-sm transition">Lihat
                        Detail <i class="fas fa-arrow-right ml-1 text-xs"></i></a>
                </div>
            </div>

            <div class="bg-gray-50 rounded-lg shadow-lg overflow-hidden animate__animated animate__fadeInUp portfolio-item"
                data-category="uiux">
                <img src="assets/images/portfolios/media-profile-.jpg" alt="Desain Aplikasi Mobile"
                    class="w-full h-56 object-cover">
                <div class="p-6">
                    <h3 class="text-base font-bold text-gray-800 mb-2">Desain UI/UX Aplikasi Mobile XYZ</h3>
                    <p class="text-gray-600 text-sm mb-4">Desain antarmuka pengguna yang intuitif dan pengalaman
                        pengguna yang mulus untuk aplikasi mobile.</p>
                    <div class="flex flex-wrap gap-2 text-xs">
                        <span class="bg-teal-100 text-teal-800 px-3 py-1 rounded-full">UI/UX Design</span>
                        <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full">User Research</span>
                        <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full">Prototyping</span>
                    </div>
                    <a href="{{ route('singleportfolio') }}"
                        class="mt-4 inline-block text-cyan-600 hover:text-cyan-800 font-semibold text-sm transition">Lihat
                        Detail <i class="fas fa-arrow-right ml-1 text-xs"></i></a>
                </div>
            </div>

            <div class="bg-gray-50 rounded-lg shadow-lg overflow-hidden animate__animated animate__fadeInUp portfolio-item"
                data-category="website">
                <img src="assets/images/portfolios/moein-ghezelbash.jpg" alt="Landing Page Produk"
                    class="w-full h-56 object-cover">
                <div class="p-6">
                    <h3 class="text-base font-bold text-gray-800 mb-2">Landing Page Promosi Produk Baru</h3>
                    <p class="text-gray-600 text-sm mb-4">Pembuatan *landing page* yang dioptimalkan untuk konversi
                        tinggi.</p>
                    <div class="flex flex-wrap gap-2 text-xs">
                        <span class="bg-teal-100 text-teal-800 px-3 py-1 rounded-full">Website Development</span>
                        <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full">Marketing</span>
                    </div>
                    <a href="{{ route('singleportfolio') }}"
                        class="mt-4 inline-block text-cyan-600 hover:text-cyan-800 font-semibold text-sm transition">Lihat
                        Detail <i class="fas fa-arrow-right ml-1 text-xs"></i></a>
                </div>
            </div>

            <div class="bg-gray-50 rounded-lg shadow-lg overflow-hidden animate__animated animate__fadeInUp portfolio-item"
                data-category="branding">
                <img src="assets/images/portfolios/shridhar-gupta.jpg" alt="Identitas Brand Cafe"
                    class="w-full h-56 object-cover">
                <div class="p-6">
                    <h3 class="text-base font-bold text-gray-800 mb-2">Pengembangan Identitas Brand Cafe X</h3>
                    <p class="text-gray-600 text-sm mb-4">Desain logo, palet warna, dan panduan visual untuk *branding*
                        yang kuat.</p>
                    <div class="flex flex-wrap gap-2 text-xs">
                        <span class="bg-teal-100 text-teal-800 px-3 py-1 rounded-full">Branding</span>
                        <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full">Desain Grafis</span>
                    </div>
                    <a href="{{ route('singleportfolio') }}"
                        class="mt-4 inline-block text-cyan-600 hover:text-cyan-800 font-semibold text-sm transition">Lihat
                        Detail <i class="fas fa-arrow-right ml-1 text-xs"></i></a>
                </div>
            </div>

            <div class="bg-gray-50 rounded-lg shadow-lg overflow-hidden animate__animated animate__fadeInUp portfolio-item"
                data-category="ecommerce">
                <img src="assets/images/portfolios/slidebean.jpg" alt="Sistem Pemesanan Online"
                    class="w-full h-56 object-cover">
                <div class="p-6">
                    <h3 class="text-base font-bold text-gray-800 mb-2">Sistem Pemesanan Online Restoran</h3>
                    <p class="text-gray-600 text-sm mb-4">Sistem pemesanan makanan online yang terintegrasi untuk
                        restoran.</p>
                    <div class="flex flex-wrap gap-2 text-xs">
                        <span class="bg-teal-100 text-teal-800 px-3 py-1 rounded-full">E-commerce</span>
                        <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full">Web App</span>
                    </div>
                    <a href="{{ route('singleportfolio') }}"
                        class="mt-4 inline-block text-cyan-600 hover:text-cyan-800 font-semibold text-sm transition">Lihat
                        Detail <i class="fas fa-arrow-right ml-1 text-xs"></i></a>
                </div>
            </div>

        </div>
        <div class="text-center mt-16">
            <a href="{{ route('contact') }}"
                class="px-8 py-4 text-lg font-semibold rounded-full bg-cyan-500 text-white hover:bg-cyan-600 transition-shadow shadow-md hover:shadow-lg inline-flex items-center">
                <i class="fas fa-paper-plane mr-2"></i> Punya Proyek? Hubungi Kami!
            </a>
        </div>
    </div>
</section>
@endsection

@push('js')
<script src="{{ asset('assets/js/portfolio.js') }}"></script>
@endpush