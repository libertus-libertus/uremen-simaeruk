@extends('layouts.frontend.home')
@section('title', 'Produk Kami')

@section('content')

<section class="bg-white py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="md:text-5xl font-extrabold text-gray-800 mb-4 text-center">Template Website Premium</h1>
        <p class="text-lg text-gray-600 mb-10 text-center">
            Solusi cepat dan profesional untuk kehadiran digital Anda. Pilih dari berbagai desain siap pakai yang modern dan responsif.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            <div class="bg-gray-50 rounded-lg shadow-lg overflow-hidden animate__animated animate__fadeInUp portfolio-item">
                <img src="assets/images/portfolios/embedsocial.jpg" alt="Corporate Pro Template"
                    class="w-full h-56 object-cover">
                <div class="p-6">
                    <h3 class="text-base font-bold text-gray-800 mb-2">Corporate Pro Template</h3>
                    <p class="text-gray-600 text-sm mb-4">Template profesional untuk perusahaan modern, cocok untuk profil bisnis, layanan, dan tim.</p>
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

            <div class="bg-gray-50 rounded-lg shadow-lg overflow-hidden animate__animated animate__fadeInUp portfolio-item">
                <img src="assets/images/portfolios/jexo.jpg" alt="Toko Online ABC" class="w-full h-56 object-cover">
                <div class="p-6">
                    <h3 class="text-base font-bold text-gray-800 mb-2">Creative Portfolio</h3>
                    <p class="text-gray-600 text-sm mb-4">Template elegan untuk personal branding, seniman, desainer, dan freelancer.</p>
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

            <div class="bg-gray-50 rounded-lg shadow-lg overflow-hidden animate__animated animate__fadeInUp portfolio-item">
                <img src="assets/images/portfolios/media-profile-.jpg" alt="Desain Aplikasi Mobile"
                    class="w-full h-56 object-cover">
                <div class="p-6">
                    <h3 class="text-base font-bold text-gray-800 mb-2">Mini Store Template</h3>
                    <p class="text-gray-600 text-sm mb-4">Template e-commerce ringan untuk UMKM, cocok untuk toko fashion, makanan, dan aksesoris.</p>
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
        </div>
        
    </div>
</section>
@endsection
