@extends('layouts.frontend.home')
@section('title', 'Tentang Kami')

@section('content')
<section
    class="h-screen w-full bg-white flex items-center justify-center relative overflow-hidden px-4 py-16 md:py-20 lg:py-0">
    <canvas id="galaxy-canvas" class="absolute inset-0 z-0 pointer-events-none"></canvas>
    <div class="max-w-6xl w-full mx-auto text-center flex flex-col justify-center items-center relative z-10">
        <h1
            class="text-3xl md:text-4xl lg:text-5xl font-extrabold leading-snug md:leading-tight lg:leading-snug mb-4 animate__animated animate__fadeInDown animate__delay-1s">
            <span class="gradient-text block">Tentang Kami</span>
            <span class="text-gray-800">Mengenal Uremen Simaeruk Lebih Dekat<span class="gradient-text">.</span></span>
        </h1>

        <p
            class="text-base md:text-lg text-gray-600 max-w-3xl mx-auto mb-8 px-4 animate__animated animate__fadeInDown animate__delay-2s">
            Kami adalah tim profesional yang berdedikasi untuk menciptakan solusi digital inovatif. Pelajari misi, visi,
            dan nilai-nilai yang mendorong kami setiap hari.
        </p>

        <div class="flex flex-col sm:flex-row gap-6 animate__animated animate__fadeInUp animate__delay-3s">
            <a href="#our-story"
                class="px-6 py-3 text-sm font-semibold rounded bg-cyan-500 text-white hover:bg-cyan-600 transition-shadow shadow-md hover:shadow-lg flex items-center justify-center">
                <i class="fas fa-book-open mr-2"></i> Kisah Kami
            </a>
            <a href="#our-values"
                class="px-6 py-3 text-sm font-semibold rounded border border-cyan-500 text-cyan-500 hover:bg-cyan-50 hover:text-cyan-600 transition-shadow shadow-md hover:shadow-lg flex items-center justify-center">
                <i class="fas fa-lightbulb mr-2"></i> Nilai-nilai Kami
            </a>
        </div>
    </div>
</section>

<section id="our-story" class="bg-white py-20 px-4 md:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center lg:items-start gap-12">
        <div class="lg:w-1/2 rounded-lg overflow-hidden shadow-lg animate__animated animate__fadeInLeft">
            <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=800&q=80"
                alt="Our Story Image" class="w-full h-auto object-cover" />
        </div>

        <div class="lg:w-1/2 text-center lg:text-left">
            <h2 class="text-4xl font-extrabold text-gray-900 mb-6 animate__animated animate__fadeInUp">Kisah Kami</h2>
            <p class="text-gray-700 text-lg mb-6 leading-relaxed animate__animated animate__fadeInUp animate__delay-1s">
                Uremen Simaeruk didirikan dengan semangat untuk menjembatani kesenjangan antara potensi bisnis dan
                kekuatan teknologi digital. Berawal dari sekelompok kecil individu yang memiliki visi bersama di
                **Padang, Sumatera Barat**, kami memulai perjalanan dengan keyakinan bahwa setiap bisnis, besar maupun
                kecil, berhak memiliki kehadiran digital yang kuat dan efektif.
            </p>
            <p
                class="text-gray-600 text-base mb-8 leading-relaxed animate__animated animate__fadeInUp animate__delay-2s">
                Sejak awal, kami berfokus pada **inovasi, kualitas, dan kemitraan jangka panjang**. Kami tidak hanya
                membangun website atau aplikasi, tetapi kami membangun solusi yang dirancang khusus untuk memenuhi
                kebutuhan unik setiap klien. Kami bangga menjadi bagian dari pertumbuhan dan kesuksesan digital mereka,
                dan kami terus beradaptasi dengan tren teknologi terbaru untuk memastikan layanan kami selalu relevan
                dan unggul.
            </p>
            <a href="{{ route('contact') }}"
                class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold px-8 py-3 rounded shadow-md transition duration-300 animate__animated animate__fadeInUp animate__delay-3s">
                Mari Bekerja Sama
            </a>
        </div>
    </div>
</section>

<section id="our-values" class="bg-gray-50 py-20 px-4 md:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4 animate__animated animate__fadeInUp">
            Misi & Visi Kami
        </h2>
        <div class="w-20 h-1 bg-cyan-600 mx-auto mb-10"></div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <div class="bg-white p-8 rounded-lg shadow-md animate__animated animate__fadeInUp animate__delay-1s">
                <div class="text-5xl text-cyan-500 mb-6"><i class="fas fa-bullseye"></i></div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Misi Kami</h3>
                <p class="text-gray-700 leading-relaxed">
                    Memberdayakan bisnis melalui solusi digital inovatif dan terukur, memastikan mereka mencapai tujuan
                    dan beradaptasi di era digital yang terus berkembang. Kami berkomitmen untuk memberikan layanan
                    terbaik dengan fokus pada kualitas dan kepuasan klien.
                </p>
            </div>
            <div class="bg-white p-8 rounded-lg shadow-md animate__animated animate__fadeInUp animate__delay-2s">
                <div class="text-5xl text-cyan-500 mb-6"><i class="fas fa-eye"></i></div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Visi Kami</h3>
                <p class="text-gray-700 leading-relaxed">
                    Menjadi mitra digital terdepan di Indonesia, dikenal karena keunggulan inovasi, integritas, dan
                    kontribusi nyata terhadap pertumbuhan ekosistem digital nasional. Kami bercita-cita untuk membentuk
                    masa depan digital yang lebih cerah.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="bg-white py-20 px-4 md:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4 animate__animated animate__fadeInUp">
            Nilai-nilai Inti Kami
        </h2>
        <div class="w-20 h-1 bg-cyan-600 mx-auto mb-10"></div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="p-6 bg-gray-50 rounded-lg shadow-sm animate__animated animate__fadeInUp animate__delay-1s">
                <div class="text-4xl text-cyan-500 mb-4"><i class="fas fa-lightbulb"></i></div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Inovasi</h3>
                <p class="text-gray-700">Kami terus belajar dan berinovasi untuk memberikan solusi terkini dan relevan.
                </p>
            </div>
            <div class="p-6 bg-gray-50 rounded-lg shadow-sm animate__animated animate__fadeInUp animate__delay-1-5s">
                <div class="text-4xl text-cyan-500 mb-4"><i class="fas fa-handshake"></i></div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Kolaborasi</h3>
                <p class="text-gray-700">Kami percaya pada kekuatan bekerja sama, baik dengan klien maupun tim internal.
                </p>
            </div>
            <div class="p-6 bg-gray-50 rounded-lg shadow-sm animate__animated animate__fadeInUp animate__delay-2s">
                <div class="text-4xl text-cyan-500 mb-4"><i class="fas fa-shield-alt"></i></div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Integritas</h3>
                <p class="text-gray-700">Kami berkomitmen untuk beroperasi dengan kejujuran, transparansi, dan etika
                    tinggi.</p>
            </div>
            <div class="p-6 bg-gray-50 rounded-lg shadow-sm animate__animated animate__fadeInUp animate__delay-2-5s">
                <div class="text-4xl text-cyan-500 mb-4"><i class="fas fa-gem"></i></div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Kualitas</h3>
                <p class="text-gray-700">Setiap proyek adalah cerminan dedikasi kami terhadap hasil yang prima.</p>
            </div>
            <div class="p-6 bg-gray-50 rounded-lg shadow-sm animate__animated animate__fadeInUp animate__delay-3s">
                <div class="text-4xl text-cyan-500 mb-4"><i class="fas fa-users-cog"></i></div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Fokus Klien</h3>
                <p class="text-gray-700">Kesuksesan Anda adalah prioritas utama kami; kami mendengarkan dan beradaptasi.
                </p>
            </div>
            <div class="p-6 bg-gray-50 rounded-lg shadow-sm animate__animated animate__fadeInUp animate__delay-3-5s">
                <div class="text-4xl text-cyan-500 mb-4"><i class="fas fa-seedling"></i></div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Pertumbuhan</h3>
                <p class="text-gray-700">Kami mendorong pertumbuhan berkelanjutan, baik untuk klien maupun tim kami.</p>
            </div>
        </div>
    </div>
</section>
@endsection