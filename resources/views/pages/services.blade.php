@extends('layouts.frontend.home')
@section('title', 'Layanan kami')

@section('content')
<section
    class="h-screen w-full bg-white flex items-center justify-center relative overflow-hidden px-4 py-16 md:py-20 lg:py-0">
    <canvas id="galaxy-canvas" class="absolute inset-0 z-0 pointer-events-none"></canvas>
    <div class="max-w-6xl w-full mx-auto text-center flex flex-col justify-center items-center relative z-10">
        <h1
            class="text-3xl md:text-4xl lg:text-5xl font-extrabold leading-snug md:leading-tight lg:leading-snug mb-4 animate__animated animate__fadeInDown animate__delay-1s">
            <span class="gradient-text block">Layanan Digital</span>
            <span class="text-gray-800">Solusi Lengkap untuk Bisnis Anda<span class="gradient-text">.</span></span>
        </h1>

        <p
            class="text-base md:text-lg text-gray-600 max-w-3xl mx-auto mb-8 px-4 animate__animated animate__fadeInDown animate__delay-2s">
            Uremen Simaeruk menawarkan berbagai layanan digital yang disesuaikan untuk memenuhi kebutuhan unik bisnis
            Anda. Dari pengembangan web hingga strategi digital, kami siap membantu Anda mencapai potensi penuh di ranah
            online.
        </p>

        <div class="flex flex-col sm:flex-row gap-6 animate__animated animate__fadeInUp animate__delay-3s">
            <a href="#our-services"
                class="px-6 py-3 text-sm font-semibold rounded bg-cyan-500 text-white hover:bg-cyan-600 transition-shadow shadow-md hover:shadow-lg flex items-center justify-center">
                <i class="fas fa-th-list mr-2"></i> Lihat Semua Layanan
            </a>
            <a href="{{ route('contact') }}"
                class="px-6 py-3 text-sm font-semibold rounded border border-cyan-500 text-cyan-500 hover:bg-cyan-50 hover:text-cyan-600 transition-shadow shadow-md hover:shadow-lg flex items-center justify-center">
                <i class="fas fa-comments mr-2"></i> Konsultasi Gratis
            </a>
        </div>
    </div>
</section>

<section id="our-services" class="bg-gray-50 py-20 px-4 md:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4 animate__animated animate__fadeInUp">
            Layanan Utama Kami
        </h2>
        <div class="w-20 h-1 mx-auto mb-10"></div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="p-6 bg-white rounded-lg shadow-md animate__animated animate__fadeInUp animate__delay-1s">
                <div class="text-5xl text-cyan-500 mb-6"><i class="fas fa-code"></i></div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Web Development</h3>
                <p class="text-gray-700 text-sm leading-relaxed">Membangun website responsif dan berkinerja tinggi, dari
                    situs bisnis hingga platform e-commerce.</p>
            </div>
            <div class="p-6 bg-white rounded-lg shadow-md animate__animated animate__fadeInUp animate__delay-1-5s">
                <div class="text-5xl text-cyan-500 mb-6"><i class="fas fa-paint-brush"></i></div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">UI/UX Design</h3>
                <p class="text-gray-700 text-sm leading-relaxed">Menciptakan pengalaman pengguna yang intuitif dan
                    antarmuka yang menarik secara visual.</p>
            </div>
            <div class="p-6 bg-white rounded-lg shadow-md animate__animated animate__fadeInUp animate__delay-2s">
                <div class="text-5xl text-cyan-500 mb-6"><i class="fas fa-graduation-cap"></i></div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Jasa Pembuatan Skripsi</h3>
                <p class="text-gray-700 text-sm leading-relaxed">Bantuan profesional untuk mahasiswa dalam menyelesaikan
                    tugas akhir dan skripsi.</p>
            </div>
            <div class="p-6 bg-white rounded-lg shadow-md animate__animated animate__fadeInUp animate__delay-2-5s">
                <div class="text-5xl text-cyan-500 mb-6"><i class="fas fa-bullhorn"></i></div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Creative Digital Agency</h3>
                <p class="text-gray-700 text-sm leading-relaxed">Strategi pemasaran digital terpadu untuk meningkatkan
                    visibilitas dan pertumbuhan bisnis.</p>
            </div>
        </div>
    </div>
</section>

<section class="bg-white py-20 px-4 md:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto space-y-16">

        <div id="web-development"
            class="flex flex-col lg:flex-row items-center lg:items-start gap-12 py-8 border-b border-gray-200">
            <div class="lg:w-1/2 rounded-lg overflow-hidden shadow-lg animate__animated animate__fadeInLeft">
                <img src="https://images.unsplash.com/photo-1542831371-29b0f74f9713?auto=format&fit=crop&w=800&q=80"
                    alt="Web Development Image" class="w-full h-auto object-cover" />
            </div>
            <div class="lg:w-1/2 text-center lg:text-left animate__animated animate__fadeInRight">
                <h3 class="text-3xl font-extrabold text-gray-900 mb-4 gradient-text">Web Development</h3>
                <p class="text-gray-700 mb-5 leading-relaxed">
                    Kami membangun website yang tidak hanya menarik secara visual tetapi juga fungsional, responsif, dan
                    berkinerja tinggi. Tim developer kami menguasai berbagai teknologi terbaru untuk menciptakan solusi
                    web yang skalabel dan aman, sesuai dengan kebutuhan spesifik bisnis Anda.
                </p>
                <ul class="list-disc list-inside text-gray-600 mb-8">
                    <li class="text-base">
                        <strong>Website Perusahaan:</strong> Profil profesional yang mencerminkan brand Anda.
                    </li>
                    <li class="text-base">
                        <strong>E-commerce & Toko Online:</strong> Solusi lengkap untuk penjualan produk secara digital.
                    </li>
                    <li class="text-base"><strong>Landing Page:</strong> Halaman khusus untuk kampanye pemasaran yang
                        efektif.</li>
                    <li class="text-base"><strong>Sistem Informasi Kustom:</strong> Aplikasi web khusus untuk mengelola
                        proses bisnis.</li>
                    <li class="text-base"><strong>Maintenance & Support:</strong> Dukungan berkelanjutan untuk
                        memastikan website Anda selalu optimal.</li>
                </ul>
                <a href="{{ route('contact') }}"
                    class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold px-8 py-3 rounded shadow-md transition duration-300">
                    Mulai Proyek Web Anda
                </a>
            </div>
        </div>

        <div id="uiux-design"
            class="flex flex-col lg:flex-row-reverse items-center lg:items-start gap-12 py-8 border-b border-gray-200">
            <div class="lg:w-1/2 rounded-lg overflow-hidden shadow-lg animate__animated animate__fadeInRight">
                <img src="https://images.unsplash.com/photo-1586717799252-bd134ad00e26?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dWklMjB1eHxlbnwwfHwwfHx8MA%3D%3D"
                    alt="UI/UX Design Image" class="w-full h-auto object-cover" />
            </div>
            <div class="lg:w-1/2 text-center lg:text-left animate__animated animate__fadeInLeft">
                <h3 class="text-3xl font-extrabold text-gray-900 mb-4 gradient-text">UI/UX Design</h3>
                <p class="text-gray-700 mb-5 leading-relaxed">
                    Desain yang baik adalah kunci untuk menarik perhatian dan mempertahankan pengguna. Tim desainer
                    UI/UX kami berfokus pada menciptakan antarmuka yang indah dan pengalaman pengguna yang lancar,
                    memastikan setiap interaksi menjadi intuitif dan menyenangkan.
                </p>
                <ul class="list-disc list-inside text-gray-600 mb-8">
                    <li><strong>Riset Pengguna:</strong> Memahami audiens target Anda secara mendalam.</li>
                    <li><strong>Wireframing & Prototyping:</strong> Merancang alur pengguna dan struktur awal.</li>
                    <li><strong>Desain Antarmuka (UI):</strong> Menciptakan tampilan visual yang menarik dan konsisten.
                    </li>
                    <li><strong>Desain Pengalaman Pengguna (UX):</strong> Memastikan kemudahan penggunaan dan kepuasan
                        pengguna.</li>
                    <li><strong>Pengujian Usabilitas:</strong> Mengidentifikasi dan memecahkan masalah dalam penggunaan.
                    </li>
                </ul>
                <a href="{{ route('contact') }}"
                    class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold px-8 py-3 rounded shadow-md transition duration-300">
                    Konsultasi Desain Anda
                </a>
            </div>
        </div>

        <div id="skripsi-service"
            class="flex flex-col lg:flex-row items-center lg:items-start gap-12 py-8 border-b border-gray-200">
            <div class="lg:w-1/2 rounded-lg overflow-hidden shadow-lg animate__animated animate__fadeInLeft">
                <img src="https://images.unsplash.com/photo-1602576666092-bf6447a729fc?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8dWklMjB1eHxlbnwwfHwwfHx8MA%3D%3D"
                    alt="Skripsi Service Image" class="w-full h-auto object-cover" />
            </div>
            <div class="lg:w-1/2 text-center lg:text-left animate__animated animate__fadeInRight">
                <h3 class="text-3xl font-extrabold text-gray-900 mb-4 gradient-text">Jasa Pembuatan Skripsi</h3>
                <p class="text-gray-700 mb-5 leading-relaxed">
                    Kami memahami tantangan dalam menyelesaikan tugas akhir dan skripsi. Uremen Simaeruk hadir untuk
                    memberikan bantuan profesional dalam penyusunan, analisis, dan pengembangan aplikasi untuk kebutuhan
                    akademik Anda, memastikan hasil yang berkualitas dan orisinal.
                </p>
                <ul class="list-disc list-inside text-gray-600 mb-8">
                    <li class="text-base"><strong>Konsultasi Topik & Metodologi:</strong> Membantu penentuan arah
                        penelitian yang tepat.</li>
                    <li class="text-base"><strong>Pengembangan Aplikasi/Sistem:</strong> Membangun prototype atau sistem
                        yang dibutuhkan untuk penelitian.</li>
                    <li class="text-base"><strong>Analisis Data:</strong> Bantuan dalam pengolahan dan interpretasi
                        data.</li>
                    <li class="text-base"><strong>Penyusunan Laporan:</strong> Dukungan dalam penulisan laporan akhir
                        yang komprehensif.</li>
                    <li class="text-base"><strong>Revisi & Bimbingan:</strong> Bantuan dalam proses revisi hingga
                        selesai.</li>
                </ul>
                <a href="{{ route('contact') }}"
                    class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold px-8 py-3 rounded shadow-md transition duration-300">
                    Dapatkan Bantuan Skripsi Anda
                </a>
            </div>
        </div>

        <div id="digital-agency" class="flex flex-col lg:flex-row-reverse items-center lg:items-start gap-12 py-8">
            <div class="lg:w-1/2 rounded-lg overflow-hidden shadow-lg animate__animated animate__fadeInRight">
                <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&w=800&q=80"
                    alt="Digital Agency Image" class="w-full h-auto object-cover" />
            </div>
            <div class="lg:w-1/2 text-center lg:text-left animate__animated animate__fadeInLeft">
                <h3 class="text-3xl font-extrabold text-gray-900 mb-4 gradient-text">Creative Digital Agency</h3>
                <p class="text-gray-700 mb-5 leading-relaxed">
                    Selain pengembangan dan desain, kami juga adalah mitra strategis Anda dalam membangun kehadiran
                    digital yang kuat. Layanan agensi digital kami mencakup berbagai aspek untuk meningkatkan
                    visibilitas dan pertumbuhan bisnis Anda di dunia maya.
                </p>
                <ul class="list-disc list-inside text-gray-600 mb-8">
                    <li class="text-base"><strong>Pemasaran Digital:</strong> Strategi SEO, SEM, dan iklan media sosial.
                    </li>
                    <li class="text-base"><strong>Manajemen Media Sosial:</strong> Membangun dan mengelola kehadiran
                        brand Anda.</li>
                    <li class="text-base"><strong>Content Creation:</strong> Pembuatan konten menarik dan relevan untuk
                        audiens Anda.</li>
                    <li class="text-base"><strong>Branding & Identitas Visual:</strong> Menciptakan identitas brand yang
                        kuat.</li>
                    <li class="text-base"><strong>Analisis Performa:</strong> Memantau dan mengoptimalkan kampanye Anda.
                    </li>
                </ul>
                <a href="{{ route('contact') }}"
                    class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold px-8 py-3 rounded shadow-md transition duration-300">
                    Kembangkan Brand Anda
                </a>
            </div>
        </div>

    </div>
</section>

<section class="bg-gradient-to-r from-cyan-500 to-teal-500 py-16 text-white text-center">
    <div class="max-w-3xl mx-auto px-4">
        <h2 class="md:text-4xl font-extrabold mb-4 animate__animated animate__fadeInUp">
            Siap Memulai Proyek Digital Anda?
        </h2>
        <p class="md:text-xl mb-8 animate__animated animate__fadeInUp animate__delay-1s">
            Mari diskusikan kebutuhan Anda dan temukan solusi digital terbaik untuk mencapai tujuan bisnis Anda.
        </p>
        <a href="{{ route('contact') }}"
            class="inline-block bg-white text-cyan-600 font-semibold px-8 py-4 rounded-full shadow-lg hover:bg-gray-100 transform hover:scale-105 transition duration-300 animate__animated animate__fadeInUp animate__delay-2s">
            <i class="fas fa-paper-plane mr-2"></i> Hubungi Kami Sekarang
        </a>
    </div>
</section>
@endsection