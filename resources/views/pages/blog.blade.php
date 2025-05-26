@extends('layouts.frontend.home')
@section('content')
<section id="latest-posts" class="py-32 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-5">
            <h2 class="md:text-4xl font-bold text-gray-800 mb-4">
                Artikel Terbaru
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <div class="md:col-span-2">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden animate__animated animate__fadeInUp">
                        <img src="assets/images/portfolios/daria-nepriakhina.jpg" alt="Artikel Pengembangan Web"
                            class="w-full blog-card-img">
                        <div class="p-6">
                            <span
                                class="text-xs font-semibold text-cyan-600 bg-cyan-50 px-3 py-1 rounded-full mb-2 inline-block">Web
                                Development</span>
                            <h3 class="text-base font-bold text-gray-800 mb-2 mt-2">10 Tren Teratas dalam Pengembangan
                                Web di 2025</h3>
                            <p class="text-gray-600 text-sm mb-4">Pelajari tentang teknologi dan metodologi terbaru yang
                                akan membentuk masa depan pengembangan web.</p>
                            <div class="flex items-center text-gray-500 text-xs mb-4">
                                <i class="far fa-calendar-alt mr-2"></i> 20 Mei 2025
                                <span class="mx-2">•</span>
                                <i class="far fa-user mr-2"></i> Admin
                            </div>
                            <a href="{{ route('singleblog') }}"
                                class="inline-block text-cyan-600 hover:text-cyan-800 font-semibold text-sm transition">Baca
                                Selengkapnya <i class="fas fa-arrow-right ml-1 text-xs"></i></a>
                        </div>
                    </div>

                    <div
                        class="bg-white rounded-lg shadow-lg overflow-hidden animate__animated animate__fadeInUp animate__delay-0-2s">
                        <img src="assets/images/portfolios/david-schultz.jpg" alt="Artikel SEO"
                            class="w-full blog-card-img">
                        <div class="p-6">
                            <span
                                class="text-xs font-semibold text-orange-600 bg-orange-50 px-3 py-1 rounded-full mb-2 inline-block">SEO
                                & Marketing</span>
                            <h3 class="text-base font-bold text-gray-800 mb-2 mt-2">Strategi SEO untuk Meningkatkan
                                Visibilitas Website Anda</h3>
                            <p class="text-gray-600 text-sm mb-4">Tips dan trik praktis untuk mengoptimalkan website
                                Anda agar muncul di halaman pertama Google.</p>
                            <div class="flex items-center text-gray-500 text-xs mb-4">
                                <i class="far fa-calendar-alt mr-2"></i> 15 Mei 2025
                                <span class="mx-2">•</span>
                                <i class="far fa-user mr-2"></i> Marketing Tim
                            </div>
                            <a href="{{ route('singleblog') }}"
                                class="inline-block text-cyan-600 hover:text-cyan-800 font-semibold text-sm transition">Baca
                                Selengkapnya <i class="fas fa-arrow-right ml-1 text-xs"></i></a>
                        </div>
                    </div>

                    <div
                        class="bg-white rounded-lg shadow-lg overflow-hidden animate__animated animate__fadeInUp animate__delay-0-4s">
                        <img src="assets/images/portfolios/embedsocial.jpg" alt="Artikel UI/UX"
                            class="w-full blog-card-img">
                        <div class="p-6">
                            <span
                                class="text-xs font-semibold text-purple-600 bg-purple-50 px-3 py-1 rounded-full mb-2 inline-block">UI/UX
                                Design</span>
                            <h3 class="text-base font-bold text-gray-800 mb-2 mt-2">Pentingnya Desain UI/UX dalam
                                Menciptakan Pengalaman Pengguna Terbaik</h3>
                            <p class="text-gray-600 text-sm mb-4">Bagaimana desain yang baik dapat meningkatkan kepuasan
                                pengguna dan kesuksesan bisnis.</p>
                            <div class="flex items-center text-gray-500 text-xs mb-4">
                                <i class="far fa-calendar-alt mr-2"></i> 10 Mei 2025
                                <span class="mx-2">•</span>
                                <i class="far fa-user mr-2"></i> Desain Tim
                            </div>
                            <a href="{{ route('singleblog') }}"
                                class="inline-block text-cyan-600 hover:text-cyan-800 font-semibold text-sm transition">Baca
                                Selengkapnya <i class="fas fa-arrow-right ml-1 text-xs"></i></a>
                        </div>
                    </div>

                    <div
                        class="bg-white rounded-lg shadow-lg overflow-hidden animate__animated animate__fadeInUp animate__delay-0-6s">
                        <img src="assets/images/portfolios/jexo.jpg" alt="Artikel E-commerce"
                            class="w-full blog-card-img">
                        <div class="p-6">
                            <span
                                class="text-xs font-semibold text-green-600 bg-green-50 px-3 py-1 rounded-full mb-2 inline-block">E-commerce</span>
                            <h3 class="text-base font-bold text-gray-800 mb-2 mt-2">Memulai Bisnis E-commerce Anda:
                                Panduan Lengkap</h3>
                            <p class="text-gray-600 text-sm mb-4">Langkah-langkah penting untuk membangun dan
                                meluncurkan toko online yang sukses.</p>
                            <div class="flex items-center text-gray-500 text-xs mb-4">
                                <i class="far fa-calendar-alt mr-2"></i> 05 Mei 2025
                                <span class="mx-2">•</span>
                                <i class="far fa-user mr-2"></i> Bisnis Tim
                            </div>
                            <a href="{{ route('singleblog') }}"
                                class="inline-block text-cyan-600 hover:text-cyan-800 font-semibold text-sm transition">Baca
                                Selengkapnya <i class="fas fa-arrow-right ml-1 text-xs"></i></a>
                        </div>
                    </div>

                    <div class="md:col-span-2 flex justify-center mt-8">
                        <nav class="flex space-x-2" aria-label="Pagination">
                            <a href="#"
                                class="px-4 py-2 rounded-lg bg-white text-gray-600 hover:bg-gray-100 transition"><i
                                    class="fas fa-chevron-left"></i></a>
                            <a href="#" class="px-4 py-2 rounded-lg bg-cyan-500 text-white font-semibold">1</a>
                            <a href="#"
                                class="px-4 py-2 rounded-lg bg-white text-gray-600 hover:bg-gray-100 transition">2</a>
                            <a href="#"
                                class="px-4 py-2 rounded-lg bg-white text-gray-600 hover:bg-gray-100 transition">3</a>
                            <span class="px-4 py-2 text-gray-600">...</span>
                            <a href="#"
                                class="px-4 py-2 rounded-lg bg-white text-gray-600 hover:bg-gray-100 transition">10</a>
                            <a href="#"
                                class="px-4 py-2 rounded-lg bg-white text-gray-600 hover:bg-gray-100 transition"><i
                                    class="fas fa-chevron-right"></i></a>
                        </nav>
                    </div>

                </div>
            </div>

            <div class="md:col-span-1">
                <div class="bg-white rounded-lg shadow-lg p-6 mb-8 animate__animated animate__fadeInRight">
                    <h3 class="text-base font-bold text-gray-800 mb-4">Cari Artikel</h3>
                    <form class="flex">
                        <input type="text" placeholder="Cari..."
                            class="w-full bg-gray-100 border border-gray-200 rounded-l-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-500 text-sm">
                        <button type="submit"
                            class="bg-cyan-600 hover:bg-cyan-700 text-white px-4 py-2 rounded-r-lg transition">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>
                </div>

                <div
                    class="bg-white rounded-lg shadow-lg p-6 mb-8 animate__animated animate__fadeInRight animate__delay-0-2s">
                    <h3 class="text-base font-bold text-gray-800 mb-4">Kategori</h3>
                    <ul class="space-y-2">
                        <li><a href="#"
                                class="text-gray-700 hover:text-cyan-600 transition flex justify-between items-center text-sm">Web
                                Development <span class="text-gray-400 text-xs">(12)</span></a></li>
                        <li><a href="#"
                                class="text-gray-700 hover:text-cyan-600 transition flex justify-between items-center text-sm">SEO
                                & Marketing <span class="text-gray-400 text-xs">(8)</span></a></li>
                        <li><a href="#"
                                class="text-gray-700 hover:text-cyan-600 transition flex justify-between items-center text-sm">UI/UX
                                Design <span class="text-gray-400 text-xs">(5)</span></a></li>
                        <li><a href="#"
                                class="text-gray-700 hover:text-cyan-600 transition flex justify-between items-center text-sm">E-commerce
                                <span class="text-gray-400 text-xs">(7)</span></a></li>
                        <li><a href="#"
                                class="text-gray-700 hover:text-cyan-600 transition flex justify-between items-center text-sm">Tips
                                & Trik <span class="text-gray-400 text-xs">(15)</span></a></li>
                    </ul>
                </div>

                <div
                    class="bg-white rounded-lg shadow-lg p-6 mb-8 animate__animated animate__fadeInRight animate__delay-0-4s">
                    <h3 class="text-base font-bold text-gray-800 mb-4">Artikel Populer</h3>
                    <ul class="space-y-4">
                        <li>
                            <a href="{{ route('singleblog') }}" class="flex items-center hover:text-cyan-600 transition">
                                <img src="assets/images/portfolios/media-profile-.jpg" alt="Thumbnail Artikel Populer"
                                    class="w-20 h-16 object-cover rounded-md mr-3">
                                <div>
                                    <p class="text-gray-700 text-sm font-semibold leading-tight">Membangun Website Cepat
                                        dan Aman dengan Teknologi Modern</p>
                                    <span class="text-gray-500 text-xs"><i class="far fa-calendar-alt mr-1"></i> 18 Mei
                                        2025</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('singleblog') }}" class="flex items-center hover:text-cyan-600 transition">
                                <img src="assets/images/portfolios/moein-ghezelbash.jpg" alt="Thumbnail Artikel Populer"
                                    class="w-20 h-16 object-cover rounded-md mr-3">
                                <div>
                                    <p class="text-gray-700 text-sm font-semibold leading-tight">Dampak AI pada Masa
                                        Depan Pengembangan Web</p>
                                    <span class="text-gray-500 text-xs"><i class="far fa-calendar-alt mr-1"></i> 12 Mei
                                        2025</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('singleblog') }}" class="flex items-center hover:text-cyan-600 transition">
                                <img src="assets/images/portfolios/slidebean.jpg" alt="Thumbnail Artikel Populer"
                                    class="w-20 h-16 object-cover rounded-md mr-3">
                                <div>
                                    <p class="text-gray-700 text-sm font-semibold leading-tight">Cara Optimasi Gambar
                                        untuk Performa Website Maksimal</p>
                                    <span class="text-gray-500 text-xs"><i class="far fa-calendar-alt mr-1"></i> 08 Mei
                                        2025</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>

                <div
                    class="bg-white rounded-lg shadow-lg p-6 animate__animated animate__fadeInRight animate__delay-0-6s">
                    <h3 class="text-base font-bold text-gray-800 mb-4">Tag Populer</h3>
                    <div class="flex flex-wrap gap-2">
                        <a href="#"
                            class="px-4 py-2 rounded-full bg-gray-100 text-gray-700 text-xs hover:bg-cyan-500 hover:text-white transition">#webdev</a>
                        <a href="#"
                            class="px-4 py-2 rounded-full bg-gray-100 text-gray-700 text-xs hover:bg-cyan-500 hover:text-white transition">#seo</a>
                        <a href="#"
                            class="px-4 py-2 rounded-full bg-gray-100 text-gray-700 text-xs hover:bg-cyan-500 hover:text-white transition">#uiux</a>
                        <a href="#"
                            class="px-4 py-2 rounded-full bg-gray-100 text-gray-700 text-xs hover:bg-cyan-500 hover:text-white transition">#ecommerce</a>
                        <a href="#"
                            class="px-4 py-2 rounded-full bg-gray-100 text-gray-700 text-xs hover:bg-cyan-500 hover:text-white transition">#digitalmarketing</a>
                        <a href="#"
                            class="px-4 py-2 rounded-full bg-gray-100 text-gray-700 text-xs hover:bg-cyan-500 hover:text-white transition">#responsivedesign</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection