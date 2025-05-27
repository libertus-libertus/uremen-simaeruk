@extends('layouts.frontend.home')
@section('title', 'Judul Artikel')
@push('css')
<link rel="stylesheet" href="{{ asset('assets/css/singlepost.css') }}">
@endpush
@section('content')
<section class="py-20 bg-gray-50 pt-32">
        <canvas id="galaxy-canvas" class="absolute inset-0 z-0 pointer-events-none"></canvas>
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-8 animate__animated animate__fadeInDown">
                <a href="{{ route('blog') }}" class="inline-flex items-center text-gray-700 hover:text-cyan-600 transition font-medium">
                    <i class="fas fa-arrow-left mr-2"></i> Kembali ke Blog
                </a>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <article
                    class="md:col-span-2 bg-white rounded-lg shadow-lg p-6 lg:p-8 animate__animated animate__fadeInUp">
                    <img src="assets/images/portfolios/jexo.jpg"
                        alt="Gambar Utama Artikel" class="w-full h-auto rounded-lg mb-8">

                    <div class="flex items-center text-gray-500 text-sm mb-4">
                        <span class="text-xs font-semibold text-cyan-600 bg-cyan-50 px-3 py-1 rounded-full mr-3">Web
                            Development</span>
                        <i class="far fa-calendar-alt mr-2"></i> <time datetime="2025-05-20">20 Mei 2025</time>
                        <span class="mx-2">•</span>
                        <i class="far fa-user mr-2"></i> <span class="text-gray-700">Uremen Simaeruk Team</span>
                    </div>

                    <h1 class="md:text-4xl font-extrabold text-gray-800 leading-tight mb-6">
                        10 Tren Teratas dalam Pengembangan Web di 2025 yang Perlu Anda Tahu
                    </h1>

                    <div class="article-content text-base text-gray-700 leading-relaxed">
                        <p>Dunia pengembangan web terus berevolusi dengan kecepatan yang menakjubkan. Setiap tahun
                            membawa inovasi baru, alat-alat yang lebih canggih, dan metodologi yang lebih efisien.
                            Sebagai seorang profesional di bidang ini, sangat penting untuk tetap <a href="#">up-to-date
                                dengan tren terbaru</a> agar tetap relevan dan kompetitif.</p>

                        <p>Di artikel ini, kami akan membahas <strong>10 tren teratas dalam pengembangan web yang
                                diprediksi akan mendominasi di tahun 2025</strong>. Dari teknologi frontend yang
                            imersif hingga praktik backend yang aman, mari kita selami apa yang akan membentuk masa
                            depan web.</p>

                        <h2>1. Web3 dan Teknologi Blockchain</h2>
                        <p>Web3 bukan lagi sekadar hype. Konsep desentralisasi, kepemilikan data oleh pengguna, dan
                            integrasi blockchain akan mengubah cara kita berinteraksi dengan aplikasi web. Pengembang
                            perlu memahami dasar-dasar smart contracts, dApps (aplikasi terdesentralisasi), dan NFT
                            untuk mempersiapkan diri menghadapi era baru ini.</p>
                        <p>Meskipun masih dalam tahap awal adopsi massal, Web3 menawarkan potensi besar untuk keamanan,
                            transparansi, dan inovasi yang belum pernah ada sebelumnya.</p>

                        <h3>2. AI-Powered Development Tools</h3>
                        <p>Kecerdasan buatan (AI) tidak hanya akan membantu kita menulis kode, tetapi juga
                            mengotomatiskan tugas-tugas berulang, mengoptimalkan kinerja, dan bahkan menghasilkan
                            boilerplate code. Alat seperti GitHub Copilot dan ChatGPT untuk pengembangan akan menjadi
                            bagian integral dari workflow pengembang.</p>

                        <blockquote>
                            "AI tidak akan menggantikan pengembang, tetapi pengembang yang menggunakan AI akan
                            menggantikan mereka yang tidak."
                        </blockquote>

                        <h4>3. Serverless Architecture (FaaS)</h4>
                        <p>Arsitektur serverless memungkinkan pengembang untuk membangun dan menjalankan aplikasi
                            tanpa harus mengelola server. Layanan seperti AWS Lambda, Google Cloud Functions, dan
                            Azure Functions semakin populer karena skalabilitas, efisiensi biaya, dan kemudahan
                            deployment.</p>

                        <h2>4. Progressive Web Apps (PWAs) yang Lebih Canggih</h2>
                        <p>PWAs terus menjembatani kesenjangan antara aplikasi web dan aplikasi native. Dengan kemampuan
                            offline, notifikasi push, dan akses ke fitur perangkat keras, PWAs menawarkan pengalaman
                            pengguna yang cepat, andal, dan menarik.</p>
                    </div>

                    <div class="mt-8 pt-6 border-t border-gray-200 flex items-center justify-between flex-wrap gap-4">
                        <div class="flex items-center gap-2">
                            <span class="text-gray-700 font-semibold">Bagikan Artikel Ini:</span>
                            <a href="#"
                                class="w-10 h-10 flex items-center justify-center rounded-full bg-blue-600 text-white hover:bg-blue-700 transition"
                                title="Bagikan ke Facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"
                                class="w-10 h-10 flex items-center justify-center rounded-full bg-blue-400 text-white hover:bg-blue-500 transition"
                                title="Bagikan ke Twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#"
                                class="w-10 h-10 flex items-center justify-center rounded-full bg-red-600 text-white hover:bg-red-700 transition"
                                title="Bagikan ke Pinterest"><i class="fab fa-pinterest"></i></a>
                            <a href="#"
                                class="w-10 h-10 flex items-center justify-center rounded-full bg-green-600 text-white hover:bg-green-700 transition"
                                title="Bagikan ke WhatsApp"><i class="fab fa-whatsapp"></i></a>
                            <a href="#"
                                class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-700 text-white hover:bg-gray-800 transition"
                                title="Salin Tautan"><i class="fas fa-copy"></i></a>
                        </div>
                    </div>
                </article>

                <div class="md:col-span-1">
                    <div class="bg-white rounded-lg shadow-lg p-6 mb-8 animate__animated animate__fadeInRight">
                        <h3 class="text-xl font-bold text-gray-800 mb-4">Cari Artikel</h3>
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
                        <h3 class="text-xl font-bold text-gray-800 mb-4">Kategori</h3>
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
                        <h3 class="text-xl font-bold text-gray-800 mb-4">Artikel Populer</h3>
                        <ul class="space-y-4">
                            <li>
                                <a href="#" class="flex items-center hover:text-cyan-600 transition">
                                    <img src="assets/images/portfolios/daria-nepriakhina.jpg"
                                        alt="Thumbnail Artikel Populer" class="w-20 h-16 object-cover rounded-md mr-3">
                                    <div>
                                        <p class="text-gray-700 text-sm font-semibold leading-tight">Membangun Website
                                            Cepat dan Aman dengan Teknologi Modern</p>
                                        <span class="text-gray-500 text-xs"><i class="far fa-calendar-alt mr-1"></i> 18
                                            Mei 2025</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center hover:text-cyan-600 transition">
                                    <img src="assets/images/portfolios/embedsocial.jpg"
                                        alt="Thumbnail Artikel Populer" class="w-20 h-16 object-cover rounded-md mr-3">
                                    <div>
                                        <p class="text-gray-700 text-sm font-semibold leading-tight">Dampak AI pada Masa
                                            Depan Pengembangan Web</p>
                                        <span class="text-gray-500 text-xs"><i class="far fa-calendar-alt mr-1"></i> 12
                                            Mei 2025</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center hover:text-cyan-600 transition">
                                    <img src="assets/images/portfolios/media-profile-.jpg"
                                        alt="Thumbnail Artikel Populer" class="w-20 h-16 object-cover rounded-md mr-3">
                                    <div>
                                        <p class="text-gray-700 text-sm font-semibold leading-tight">Cara Optimasi
                                            Gambar untuk Performa Website Maksimal</p>
                                        <span class="text-gray-500 text-xs"><i class="far fa-calendar-alt mr-1"></i> 08
                                            Mei 2025</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div
                        class="bg-white rounded-lg shadow-lg p-6 animate__animated animate__fadeInRight animate__delay-0-6s">
                        <h3 class="text-xl font-bold text-gray-800 mb-4">Tag Populer</h3>
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