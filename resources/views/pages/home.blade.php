@extends('layouts.frontend.home')
@section('title', 'Partner Digital Anda')

@section('title', "Uremen Simaeruk")

@section('content')
<!-- Jumbotron -->
<section
    class="h-screen w-full bg-white flex items-center justify-center relative overflow-hidden px-4 py-16 md:py-20 lg:py-0">
    <canvas id="galaxy-canvas" class="absolute inset-0 z-0 pointer-events-none"></canvas>
    <div class="max-w-6xl w-full mx-auto text-center flex flex-col justify-center items-center relative z-10">
        <div
            class="inline-flex flex-col sm:flex-row items-center md:border md:border-gray-200 px-1 py-1 md:rounded-full justify-center space-y-2 sm:space-y-0 sm:space-x-3 mb-5 animate__animated animate__fadeInLeft animate__delay-1s">
            <button
                class="px-4 py-2 text-sm font-medium bg-gray-100 rounded-full hover:bg-gray-200 transition w-full sm:w-auto">
                Mengapa harus di Uremen Simaeruk?
            </button>
            <a href="#"
                class="text-sm text-gray-700 font-medium hover:text-cyan-600 transition inline-flex items-center pr-3 w-full sm:w-auto justify-center animate__animated animate__fadeInRight animate__delay-1s">
                Dapatkan Penawaran Eksklusif Kami &nbsp;&rarr;
            </a>
        </div>

        <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold leading-snug md:leading-tight lg:leading-snug mb-4 animate__animated animate__fadeInDown animate__delay-2s"
            data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100">
            <span class="gradient-text block">Transformasi Digital</span>
            <span class="text-gray-800">Kunci Pertumbuhan Bisnis Modern<span class="gradient-text">.</span></span>
        </h1>

        <p class="text-base md:text-lg text-gray-600 max-w-3xl mx-auto mb-8 px-4 animate__animated animate__fadeInDown animate__delay-3s"
            data-aos="fade-down" data-aos-duration="1000" data-aos-delay="300">
            Di Uremen Simaeruk, kami tidak hanya membuat solusi digital. Kami <strong>merancang masa depan bisnis
                Anda</strong> dengan inovasi yang skalabel dan berkinerja tinggi. Kami hadir untuk <strong>mendorong
                pertumbuhan, dan membawa bisnis Anda ke level selanjutnya.</strong>
        </p>

        <div
            class="inline-flex items-center px-1 py-1 rounded-full justify-center space-x-3 mb-5 animate__animated animate__fadeInUp animate__delay-4s">
            <a href="{{ route('service') }}"
                class="px-6 py-3 text-sm font-semibold rounded bg-cyan-500 text-white hover:bg-cyan-600 transition-shadow shadow-md hover:shadow-lg inline-flex items-center"
                data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                <i class="fas fa-compass mr-2"></i> Jelajahi Layanan Kami
            </a>
        </div>
    </div>
</section>

<!-- About Us Section -->
<section class="bg-white py-20 px-6 md:px-12 lg:px-24">
    <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center lg:items-start gap-12">
        <!-- Image -->
        <div class="lg:w-1/2 rounded-lg overflow-hidden shadow-lg animate__animated animate__fadeInLeft">
            <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=800&q=80"
                alt="About Us Image" class="w-full h-auto object-cover" />
        </div>

        <!-- Text Content -->
        <div class="lg:w-1/2 text-center lg:text-left">
            <h2 class="text-4xl font-extrabold text-gray-900 mb-6 animate__animated animate__fadeInUp">Tentang Kami
            </h2>
            <p class="text-gray-700 text-lg mb-6 leading-relaxed animate__animated animate__fadeInUp animate__delay-1s">
                Di Uremen Simaeruk, kami percaya bahwa teknologi adalah jembatan menuju masa depan yang lebih cerah.
                Dengan pengalaman bertahun-tahun, tim kami berdedikasi untuk membantu bisnis Anda berkembang melalui
                solusi digital yang inovatif dan personal.
            </p>
            <p
                class="text-gray-600 text-base mb-8 leading-relaxed animate__animated animate__fadeInUp animate__delay-2s">
                Kami bukan hanya penyedia jasa, tapi mitra strategis Anda dalam transformasi digital. Visi kami
                adalah menciptakan solusi yang tidak hanya memenuhi kebutuhan Anda hari ini, tapi juga mendukung
                pertumbuhan jangka panjang.
            </p>
            <a href="{{ route('service') }}"
                class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold px-8 py-3 rounded shadow-md transition duration-300 animate__animated animate__fadeInUp animate__delay-3s">
                Pelajari Lebih Lanjut
            </a>
        </div>
    </div>
</section>

<!-- Services -->
<section class="bg-white py-16 md:py-20">
    <div class="max-w-6xl mx-auto px-4 md:px-6">
        <div class="text-center mb-10 md:mb-12 animate__animated animate__fadeInDown animate__delay-1s">
            <h2 class="text-3xl md:text-3xl font-bold text-gray-800 mb-4">
                Solusi Digital Berkelanjutan
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto text-base md:text-lg px-4">
                Layanan pengembangan perangkat lunak yang disesuaikan untuk melesatkan bisnis Anda ke depan.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 px-4">
            <div
                class="bg-gray-50 p-6 rounded-xl shadow-sm border border-transparent text-center hover:shadow-md hover:border-teal-300 transition service-card animate__animated animate__fadeInUp animate__delay-1s">
                <div class="text-emerald-600 text-3xl mb-4">
                    <i class="fa fa-code"></i>
                </div>
                <h4 class="font-semibold text-lg mb-2">
                    Software Development
                </h4>
                <p class="text-base text-gray-600 text-justify mb-2">
                    Dari ide awal hingga implementasi, kami membangun aplikasi khusus yang dirancang
                    <strong>presisi</strong> sesuai dengan proses bisnis dan tantangan <strong>unik</strong> Anda.
                </p>
                <ul class="text-gray-400 space-y-2 mb-6">
                    <li class="flex items-start">
                        <i class="fa fa-check text-cyan-600 mr-2 mt-1"></i>
                        <span class="text-base text-gray-600">Web & Mobile Applications</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fa fa-check text-cyan-600 mr-2 mt-1"></i>
                        <span class="text-base text-gray-600">Enterprise Systems (ERP, CRM)</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fa fa-check text-cyan-600 mr-2 mt-1"></i>
                        <span class="text-base text-gray-600">Database Design & Integration</span>
                    </li>
                </ul>
                <a href="{{ route('contact') }}"
                    class="inline-block text-cyan-500 font-semibold hover:text-cyan-600 transition text-base">
                    Dapatkan Penawaran <i class="fa fa-arrow-right ml-1"></i>
                </a>
            </div>

            <div
                class="bg-gray-50 p-6 rounded-xl shadow-sm border border-transparent text-center hover:shadow-md hover:border-blue-300 transition service-card animate__animated animate__fadeInUp animate__delay-2s">
                <div class="text-blue-600 text-3xl mb-4">
                    <i class="fa fa-link"></i>
                </div>
                <h4 class="font-semibold text-lg mb-2">
                    System Integration
                </h4>
                <p class="text-base text-gray-600 text-justify mb-2">
                    Hubungkan berbagai sistem dan aplikasi Anda secara <strong>mulus</strong>untuk meningkatkan
                    aliran data dan efisiensi operasional secara <strong>signifikan</strong>.
                </p>
                <ul class="text-gray-400 space-y-2 mb-6">
                    <li class="flex items-start">
                        <i class="fa fa-check text-cyan-600 mr-2 mt-1"></i>
                        <span class="text-base text-gray-600">API Development & Integration</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fa fa-check text-cyan-600 mr-2 mt-1"></i>
                        <span class="text-base text-gray-600">Data Migration Services</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fa fa-check text-cyan-600 mr-2 mt-1"></i>
                        <span class="text-base text-gray-600">Cloud System Connectivity</span>
                    </li>
                </ul>
                <a href="{{ route('contact') }}"
                    class="inline-block text-cyan-500 font-semibold hover:text-cyan-600 transition text-base">
                    Dapatkan Penawaran <i class="fa fa-arrow-right ml-1"></i>
                </a>
            </div>

            <div
                class="bg-gray-50 p-6 rounded-xl shadow-sm border border-transparent text-center hover:shadow-md hover:border-yellow-300 transition service-card animate__animated animate__fadeInUp animate__delay-3s">
                <div class="text-yellow-600 text-3xl mb-4">
                    <i class="fa fa-life-ring"></i>
                </div>
                <h4 class="font-semibold text-lg mb-2">Consulting & Support</h4>
                <p class="text-base text-gray-600 text-justify mb-2">
                    Panduan ahli mulai dari ide awal hingga pemeliharaan berkelanjutan, memastikan solusi digital
                    Anda <strong>berkembang</strong> dan selalu <strong>optimal</strong>.
                </p>
                <ul class="text-gray-400 space-y-2 mb-6">
                    <li class="flex items-start">
                        <i class="fa fa-check text-cyan-600 mr-2 mt-1"></i>
                        <span class="text-base text-gray-600">Feasibility Studies & Planning</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fa fa-check text-cyan-600 mr-2 mt-1"></i>
                        <span class="text-base text-gray-600">Technical Advisory</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fa fa-check text-cyan-600 mr-2 mt-1"></i>
                        <span class="text-base text-gray-600">Ongoing Maintenance & Upgrades</span>
                    </li>
                </ul>
                <a href="{{ route('contact') }}"
                    class="inline-block text-cyan-500 font-semibold hover:text-cyan-600 transition text-base">
                    Dapatkan Penawaran <i class="fa fa-arrow-right ml-1"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Fasilities -->
<section class="bg-white py-16 md:py-20">
    <div class="max-w-6xl mx-auto px-4 md:px-6">
        <div class="text-center mb-10 md:mb-12 animate__animated animate__fadeInUp">
            <h2 class="md:text-4xl font-bold text-gray-800 mb-4">
                Pilih Paket Layanan Digital yang Paling Cocok untuk Anda
            </h2>
            <p class="text-gray-600 max-w-3xl mx-auto text-base md:text-lg px-4">
                Kami menyediakan berbagai opsi paket untuk skripsi, landing page, dan sistem kompleks dengan
                database. Sesuaikan dengan kebutuhan dan anggaran Anda.
            </p>
        </div>

        <div class="space-y-6 w-full px-4" x-data="{ activeAccordion: null }" data-aos="fade-right"
            data-aos-duration="1000">

            <div
                class="border border-gray-200 rounded-lg overflow-hidden shadow-sm animate__animated animate__fadeInUp animate__delay-1s">
                <button
                    @click="activeAccordion === 'skripsi-ti-si' ? activeAccordion = null : activeAccordion = 'skripsi-ti-si'"
                    class="flex items-center justify-between w-full text-left py-4 px-6 bg-gray-50 hover:bg-gray-100 focus:outline-none transition">
                    <span class="font-bold text-gray-800">
                        Jasa Pembuatan Skripsi SI & TI
                        <span class="block text-sm font-normal text-gray-600">SI & TI (Teori / Aplikasi)</span>
                    </span>
                    <span
                        class="flex items-center justify-center w-8 h-8 bg-cyan-600 text-white rounded-full transition-transform duration-300"
                        :class="{ 'rotate-90': activeAccordion === 'skripsi-ti-si' }">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </span>
                </button>
                <div x-show="activeAccordion === 'skripsi-ti-si'" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform -translate-y-2"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100 transform translate-y-0"
                    x-transition:leave-end="opacity-0 transform -translate-y-2"
                    class="p-4 md:p-6 bg-white overflow-x-auto">
                    <table
                        class="w-full min-w-[600px] text-xs sm:text-sm md:text-base text-gray-700 border border-gray-200">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="p-3 font-semibold text-gray-800 text-left whitespace-nowrap">Fitur</th>
                                <th class="p-3 font-semibold text-gray-800 text-center whitespace-nowrap">Paket
                                    Basic Skripsi TI/SI</th>
                                <th class="p-3 font-semibold text-gray-800 text-center whitespace-nowrap">Paket
                                    Standar Skripsi TI/SI</th>
                                <th class="p-3 font-semibold text-gray-800 text-center whitespace-nowrap">Paket
                                    Premium Skripsi TI/SI</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <tr>
                                <td class="p-3">Analisis Kebutuhan & Topik</td>
                                <td class="p-3 text-green-600 text-center"><i class="fas fa-check"></i></td>
                                <td class="p-3 text-green-600 text-center"><i class="fas fa-check"></i></td>
                                <td class="p-3 text-green-600 text-center"><i class="fas fa-check"></i></td>
                            </tr>
                            <tr>
                                <td class="p-3">Penyusunan Bab 1-3 (Proposal)</td>
                                <td class="p-3 text-green-600 text-center"><i class="fas fa-check"></i></td>
                                <td class="p-3 text-green-600 text-center"><i class="fas fa-check"></i></td>
                                <td class="p-3 text-green-600 text-center"><i class="fas fa-check"></i></td>
                            </tr>
                            <tr>
                                <td class="p-3">Penyusunan Bab 4 (Pembahasan)</td>
                                <td class="p-3 text-red-600 text-center"><i class="fas fa-times"></i></td>
                                <td class="p-3 text-green-600 text-center"><i class="fas fa-check"></i></td>
                                <td class="p-3 text-green-600 text-center"><i class="fas fa-check"></i></td>
                            </tr>
                            <tr>
                                <td class="p-3">Penyusunan Bab 5 (Kesimpulan)</td>
                                <td class="p-3 text-red-600 text-center"><i class="fas fa-times"></i></td>
                                <td class="p-3 text-green-600 text-center"><i class="fas fa-check"></i></td>
                                <td class="p-3 text-green-600 text-center"><i class="fas fa-check"></i></td>
                            </tr>
                            <tr>
                                <td class="p-3">Revisi Minor (Jumlah)</td>
                                <td class="p-3 text-center">1x Revisi</td>
                                <td class="p-3 text-center">3x Revisi</td>
                                <td class="p-3 text-center">Revisi Tanpa Batas</td>
                            </tr>
                            <tr>
                                <td class="p-3">Bantuan Uji Coba Aplikasi/Sistem</td>
                                <td class="p-3 text-red-600 text-center"><i class="fas fa-times"></i></td>
                                <td class="p-3 text-green-600 text-center">(Terbatas) <i class="fas fa-check"></i>
                                </td>
                                <td class="p-3 text-green-600 text-center">(Penuh) <i class="fas fa-check"></i></td>
                            </tr>
                            <tr>
                                <td class="p-3">Pendampingan Sidang (Simulasi & QnA)</td>
                                <td class="p-3 text-red-600 text-center"><i class="fas fa-times"></i></td>
                                <td class="p-3 text-red-600 text-center"><i class="fas fa-times"></i></td>
                                <td class="p-3 text-green-600 text-center"><i class="fas fa-check"></i></td>
                            </tr>
                            <tr class="bg-gray-100 border-t border-gray-200">
                                <td class="p-4 font-semibold text-gray-900 text-right">Harga Mulai Dari</td>
                                <td class="p-4 font-bold text-gray-800 text-center whitespace-nowrap">Rp 3.000.000
                                </td>
                                <td class="p-4 font-bold text-gray-800 text-center whitespace-nowrap">Rp 6.000.000
                                </td>
                                <td class="p-4 font-bold text-gray-800 text-center whitespace-nowrap">Rp 9.000.000+
                                </td>
                            </tr>
                            <tr>
                                <td class="p-4"></td>
                                <td class="p-4 text-center">
                                    <button
                                        class="px-5 py-2 bg-cyan-600 text-white rounded-md hover:bg-cyan-700 transition">Pilih
                                        Paket</button>
                                </td>
                                <td class="p-4 text-center">
                                    <button
                                        class="px-5 py-2 bg-cyan-600 text-white rounded-md hover:bg-cyan-700 transition">Pilih
                                        Paket</button>
                                </td>
                                <td class="p-4 text-center">
                                    <button
                                        class="px-5 py-2 bg-cyan-600 text-white rounded-md hover:bg-cyan-700 transition">Hubungi
                                        Kami</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div
                class="border border-gray-200 rounded-lg overflow-hidden shadow-sm animate__animated animate__fadeInUp animate__delay-1-5s">
                <button
                    @click="activeAccordion === 'skripsi-manajemen' ? activeAccordion = null : activeAccordion = 'skripsi-manajemen'"
                    class="flex items-center justify-between w-full text-left py-4 px-6 bg-gray-50 hover:bg-gray-100 focus:outline-none transition">
                    <span class="font-bold text-gray-800">
                        Jasa Pembuatan Skripsi
                        <span class="block text-sm font-normal text-gray-600">Manajemen</span>
                    </span>
                    <span
                        class="flex items-center justify-center w-8 h-8 bg-cyan-600 text-white rounded-full transition-transform duration-300"
                        :class="{ 'rotate-90': activeAccordion === 'skripsi-manajemen' }">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </span>
                </button>
                <div x-show="activeAccordion === 'skripsi-manajemen'"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform -translate-y-2"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100 transform translate-y-0"
                    x-transition:leave-end="opacity-0 transform -translate-y-2"
                    class="p-4 md:p-6 bg-white overflow-x-auto">
                    <table
                        class="w-full min-w-[600px] text-xs sm:text-sm md:text-base text-gray-700 border border-gray-200">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="p-3 font-semibold text-gray-800 text-left whitespace-nowrap">Fitur</th>
                                <th class="p-3 font-semibold text-gray-800 text-center whitespace-nowrap">Paket
                                    Standar Manajemen</th>
                                <th class="p-3 font-semibold text-gray-800 text-center whitespace-nowrap">Paket
                                    Premium Manajemen</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <tr>
                                <td class="p-3">Analisis Kebutuhan & Topik</td>
                                <td class="p-3 text-green-600 text-center"><i class="fas fa-check"></i></td>
                                <td class="p-3 text-green-600 text-center"><i class="fas fa-check"></i></td>
                            </tr>
                            <tr>
                                <td class="p-3">Penyusunan Bab 1-3 (Proposal)</td>
                                <td class="p-3 text-green-600 text-center"><i class="fas fa-check"></i></td>
                                <td class="p-3 text-green-600 text-center"><i class="fas fa-check"></i></td>
                            </tr>
                            <tr>
                                <td class="p-3">Penyusunan Bab 4 (Pembahasan)</td>
                                <td class="p-3 text-red-600 text-center"><i class="fas fa-times"></i></td>
                                <td class="p-3 text-green-600 text-center"><i class="fas fa-check"></i></td>
                            </tr>
                            <tr>
                                <td class="p-3">Penyusunan Bab 5 (Kesimpulan)</td>
                                <td class="p-3 text-red-600 text-center"><i class="fas fa-times"></i></td>
                                <td class="p-3 text-green-600 text-center"><i class="fas fa-check"></i></td>
                            </tr>
                            <tr>
                                <td class="p-3">Revisi Minor (Jumlah)</td>
                                <td class="p-3 text-center">Revisi Tanpa Batas</td>
                                <td class="p-3 text-center">Revisi Tanpa Batas</td>
                            </tr>
                            <tr>
                                <td class="p-3">Pendampingan Sidang (Simulasi & QnA)</td>
                                <td class="p-3 text-red-600 text-center"><i class="fas fa-times"></i></td>
                                <td class="p-3 text-green-600 text-center"><i class="fas fa-check"></i></td>
                            </tr>
                            <tr class="bg-gray-100 border-t border-gray-200">
                                <td class="p-4 font-semibold text-gray-900 text-right">Harga Mulai Dari</td>
                                <td class="p-4 font-bold text-gray-800 text-center whitespace-nowrap">Rp 2.000.000
                                </td>
                                <td class="p-4 font-bold text-gray-800 text-center whitespace-nowrap">Rp 5.000.000
                                </td>
                            </tr>
                            <tr>
                                <td class="p-4"></td>
                                <td class="p-4 text-center">
                                    <button
                                        class="px-5 py-2 bg-cyan-600 text-white rounded-md hover:bg-cyan-700 transition">Pilih
                                        Paket</button>
                                </td>
                                <td class="p-4 text-center">
                                    <button
                                        class="px-5 py-2 bg-cyan-600 text-white rounded-md hover:bg-cyan-700 transition">Pilih
                                        Paket</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div
                class="border border-gray-200 rounded-lg overflow-hidden shadow-sm animate__animated animate__fadeInUp animate__delay-2s">
                <button
                    @click="activeAccordion === 'landingpage' ? activeAccordion = null : activeAccordion = 'landingpage'"
                    class="flex items-center justify-between w-full text-left py-4 px-6 bg-gray-50 hover:bg-gray-100 focus:outline-none transition">
                    <span class="font-bold text-gray-800">
                        Jasa Pembuatan Landing Page
                        <span class="block text-sm font-normal text-gray-600">Company Profile, Travel Agency</span>
                    </span>
                    <span
                        class="flex items-center justify-center w-8 h-8 bg-cyan-600 text-white rounded-full transition-transform duration-300"
                        :class="{ 'rotate-90': activeAccordion === 'landingpage' }">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </span>
                </button>
                <div x-show="activeAccordion === 'landingpage'" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform -translate-y-2"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100 transform translate-y-0"
                    x-transition:leave-end="opacity-0 transform -translate-y-2"
                    class="p-4 md:p-6 bg-white overflow-x-auto">
                    <table
                        class="w-full min-w-[600px] text-xs sm:text-sm md:text-base text-gray-700 border border-gray-200">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="p-3 font-semibold text-gray-800 text-left whitespace-nowrap">Fitur</th>
                                <th class="p-3 font-semibold text-gray-800 text-center whitespace-nowrap">Landing
                                    Basic</th>
                                <th class="p-3 font-semibold text-gray-800 text-center whitespace-nowrap">Landing
                                    Pro</th>
                                <th class="p-3 font-semibold text-gray-800 text-center whitespace-nowrap">Landing
                                    Premium</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <tr>
                                <td class="p-3">Desain Responsif (Mobile Friendly)</td>
                                <td class="p-3 text-green-600 text-center"><i class="fas fa-check"></i></td>
                                <td class="p-3 text-green-600 text-center"><i class="fas fa-check"></i></td>
                                <td class="p-3 text-green-600 text-center"><i class="fas fa-check"></i></td>
                            </tr>
                            <tr>
                                <td class="p-3">Optimasi Kecepatan (Basic)</td>
                                <td class="p-3 text-green-600 text-center"><i class="fas fa-check"></i></td>
                                <td class="p-3 text-green-600 text-center"><i class="fas fa-check"></i></td>
                                <td class="p-3 text-green-600 text-center"><i class="fas fa-check"></i></td>
                            </tr>
                            <tr>
                                <td class="p-3">Formulir Kontak/Lead Generation</td>
                                <td class="p-3 text-green-600 text-center"><i class="fas fa-check"></i></td>
                                <td class="p-3 text-green-600 text-center"><i class="fas fa-check"></i></td>
                                <td class="p-3 text-green-600 text-center"><i class="fas fa-check"></i></td>
                            </tr>
                            <tr>
                                <td class="p-3">Integrasi Google Analytics</td>
                                <td class="p-3 text-red-600 text-center"><i class="fas fa-times"></i></td>
                                <td class="p-3 text-green-600 text-center"><i class="fas fa-check"></i></td>
                                <td class="p-3 text-green-600 text-center"><i class="fas fa-check"></i></td>
                            </tr>
                            <tr>
                                <td class="p-3">Optimasi SEO (Dasar)</td>
                                <td class="p-3 text-red-600 text-center"><i class="fas fa-times"></i></td>
                                <td class="p-3 text-green-600 text-center"><i class="fas fa-check"></i></td>
                                <td class="p-3 text-green-600 text-center"><i class="fas fa-check"></i></td>
                            </tr>
                            <tr>
                                <td class="p-3">A/B Testing Support</td>
                                <td class="p-3 text-red-600 text-center"><i class="fas fa-times"></i></td>
                                <td class="p-3 text-red-600 text-center"><i class="fas fa-times"></i></td>
                                <td class="p-3 text-green-600 text-center"><i class="fas fa-check"></i></td>
                            </tr>
                            <tr>
                                <td class="p-3">Garansi Perbaikan Bug</td>
                                <td class="p-3 text-green-600 text-center">(1 Bulan) <i class="fas fa-check"></i>
                                </td>
                                <td class="p-3 text-green-600 text-center">(3 Bulan) <i class="fas fa-check"></i>
                                </td>
                                <td class="p-3 text-green-600 text-center">(6 Bulan) <i class="fas fa-check"></i>
                                </td>
                            </tr>
                            <tr class="bg-gray-100 border-t border-gray-200">
                                <td class="p-4 font-semibold text-gray-900 text-right">Harga Mulai Dari</td>
                                <td class="p-4 font-bold text-gray-800 text-center whitespace-nowrap">Rp 1.500.000
                                </td>
                                <td class="p-4 font-bold text-gray-800 text-center whitespace-nowrap">Rp 3.500.000
                                </td>
                                <td class="p-4 font-bold text-gray-800 text-center whitespace-nowrap">Rp 6.000.000+
                                </td>
                            </tr>
                            <tr>
                                <td class="p-4"></td>
                                <td class="p-4 text-center">
                                    <button
                                        class="px-5 py-2 bg-cyan-600 text-white rounded-md hover:bg-cyan-700 transition">Pilih
                                        Paket</button>
                                </td>
                                <td class="p-4 text-center">
                                    <button
                                        class="px-5 py-2 bg-cyan-600 text-white rounded-md hover:bg-cyan-700 transition">Pilih
                                        Paket</button>
                                </td>
                                <td class="p-4 text-center">
                                    <button
                                        class="px-5 py-2 bg-cyan-600 text-white rounded-md hover:bg-cyan-700 transition">Hubungi
                                        Kami</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- F.A.Q -->
<section class="bg-white py-16 md:py-20">
    <div class="max-w-6xl mx-auto px-4 md:px-6">
        <div class="text-center mb-10 md:mb-12 animate__animated animate__fadeInUp">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                F.A.Q (Frequently Asked Questions)
            </h2>
            <p class="text-gray-600 max-w-3xl mx-auto text-base md:text-lg px-4">
                Kami telah mengumpulkan beberapa pertanyaan umum untuk membantu Anda memahami lebih lanjut tentang
                proses dan layanan pengembangan website dan aplikasi kami.
            </p>
        </div>

        <div class="space-y-6 w-full px-4" x-data="{ activeAccordion: null }" data-aos="fade-right"
            data-aos-duration="1000">

            <div
                class="border border-gray-200 rounded-lg overflow-hidden shadow-sm animate__animated animate__fadeInUp animate__delay-1s">
                <button @click="activeAccordion === 'fa1' ? activeAccordion = null : activeAccordion = 'fa1'"
                    class="flex items-center justify-between w-full text-left py-4 px-6 bg-gray-50 hover:bg-gray-100 focus:outline-none transition">
                    <span class="font-bold text-gray-800">
                        Bagaimana proses konsultasi awal untuk proyek website saya?
                    </span>
                    <span
                        class="flex items-center justify-center w-8 h-8 bg-cyan-600 text-white rounded-full transition-transform duration-300"
                        :class="{ 'rotate-90': activeAccordion === 'fa1' }">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </span>
                </button>
                <div x-show="activeAccordion === 'fa1'" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform -translate-y-2"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100 transform translate-y-0"
                    x-transition:leave-end="opacity-0 transform -translate-y-2"
                    class="p-4 md:p-6 bg-white overflow-x-auto">
                    <span>
                        Proses dimulai dengan sesi konsultasi gratis di mana tim kami akan mendengarkan
                        <strong>visi, tujuan, dan kebutuhan spesifik</strong> Anda. Kami akan membahas target
                        audiens, fitur yang diinginkan, dan memberikan saran ahli untuk mengoptimalkan konsep Anda.
                        Ini adalah tahap penting untuk kami memahami ruang lingkup proyek Anda.
                    </span>
                </div>
            </div>

            <div
                class="border border-gray-200 rounded-lg overflow-hidden shadow-sm animate__animated animate__fadeInUp animate__delay-1-5s">
                <button @click="activeAccordion === 'faq2' ? activeAccordion = null : activeAccordion = 'faq2'"
                    class="flex items-center justify-between w-full text-left py-4 px-6 bg-gray-50 hover:bg-gray-100 focus:outline-none transition">
                    <span class="font-bold text-gray-800">
                        Berapa biaya rata-rata untuk pembuatan website/aplikasi?
                    </span>
                    <span
                        class="flex items-center justify-center w-8 h-8 bg-cyan-600 text-white rounded-full transition-transform duration-300"
                        :class="{ 'rotate-90': activeAccordion === 'faq2' }">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </span>
                </button>
                <div x-show="activeAccordion === 'faq2'" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform -translate-y-2"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100 transform translate-y-0"
                    x-transition:leave-end="opacity-0 transform -translate-y-2"
                    class="p-4 md:p-6 bg-white overflow-x-auto">
                    <span>
                        Biaya bervariasi tergantung pada <strong>kompleksitas, fitur, dan skala proyek</strong>
                        Anda. Setelah sesi konsultasi, kami akan menyusun proposal terperinci yang mencakup estimasi
                        biaya dan waktu pengerjaan yang transparan, tanpa biaya tersembunyi. Kami berkomitmen untuk
                        memberikan solusi yang sesuai dengan anggaran Anda.
                    </span>
                </div>
            </div>

            <div
                class="border border-gray-200 rounded-lg overflow-hidden shadow-sm animate__animated animate__fadeInUp animate__delay-2s">
                <button @click="activeAccordion === 'faq3' ? activeAccordion = null : activeAccordion = 'faq3'"
                    class="flex items-center justify-between w-full text-left py-4 px-6 bg-gray-50 hover:bg-gray-100 focus:outline-none transition">
                    <span class="font-bold text-gray-800">
                        Apakah Anda menyediakan layanan pemeliharaan setelah peluncuran?
                    </span>
                    <span
                        class="flex items-center justify-center w-8 h-8 bg-cyan-600 text-white rounded-full transition-transform duration-300"
                        :class="{ 'rotate-90': activeAccordion === 'faq3' }">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </span>
                </button>
                <div x-show="activeAccordion === 'faq3'" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform -translate-y-2"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100 transform translate-y-0"
                    x-transition:leave-end="opacity-0 transform -translate-y-2"
                    class="p-4 md:p-6 bg-white overflow-x-auto">
                    <span>
                        Ya, kami menawarkan <strong>paket pemeliharaan dan dukungan purna jual</strong> yang
                        komprehensif. Ini mencakup pembaruan keamanan, perbaikan bug, pembaruan konten, dan
                        peningkatan kinerja untuk memastikan website atau aplikasi Anda selalu berjalan optimal dan
                        aman. Kami adalah mitra jangka panjang Anda.
                    </span>
                </div>
            </div>

            <div
                class="border border-gray-200 rounded-lg overflow-hidden shadow-sm animate__animated animate__fadeInUp animate__delay-2-5s">
                <button @click="activeAccordion === 'faq4' ? activeAccordion = null : activeAccordion = 'faq4'"
                    class="flex items-center justify-between w-full text-left py-4 px-6 bg-gray-50 hover:bg-gray-100 focus:outline-none transition">
                    <span class="font-bold text-gray-800">
                        Berapa lama waktu yang dibutuhkan untuk menyelesaikan sebuah proyek?
                    </span>
                    <span
                        class="flex items-center justify-center w-8 h-8 bg-cyan-600 text-white rounded-full transition-transform duration-300"
                        :class="{ 'rotate-90': activeAccordion === 'faq4' }">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </span>
                </button>
                <div x-show="activeAccordion === 'faq4'" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform -translate-y-2"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100 transform translate-y-0"
                    x-transition:leave-end="opacity-0 transform -translate-y-2"
                    class="p-4 md:p-6 bg-white overflow-x-auto">
                    <span>
                        Durasi proyek sangat tergantung pada <strong>kompleksitas dan fitur yang diminta</strong>.
                        Website sederhana mungkin membutuhkan 4-6 minggu, sementara aplikasi yang lebih kompleks
                        bisa memakan waktu beberapa bulan. Setelah konsultasi, kami akan memberikan estimasi waktu
                        yang akurat dalam proposal.
                    </span>
                </div>
            </div>

            <div
                class="border border-gray-200 rounded-lg overflow-hidden shadow-sm animate__animated animate__fadeInUp animate__delay-3s">
                <button @click="activeAccordion === 'faq5' ? activeAccordion = null : activeAccordion = 'faq5'"
                    class="flex items-center justify-between w-full text-left py-4 px-6 bg-gray-50 hover:bg-gray-100 focus:outline-none transition">
                    <span class="font-bold text-gray-800">
                        Bagaimana cara memulai proyek dengan Anda?
                    </span>
                    <span
                        class="flex items-center justify-center w-8 h-8 bg-cyan-600 text-white rounded-full transition-transform duration-300"
                        :class="{ 'rotate-90': activeAccordion === 'faq5' }">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </span>
                </button>
                <div x-show="activeAccordion === 'faq5'" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform -translate-y-2"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100 transform translate-y-0"
                    x-transition:leave-end="opacity-0 transform -translate-y-2"
                    class="p-4 md:p-6 bg-white overflow-x-auto">
                    <span>
                        Cukup klik tombol "Hubungi Kami" atau isi formulir kontak di website kami. Tim kami akan
                        segera menghubungi Anda untuk menjadwalkan sesi konsultasi awal. Kami siap membantu
                        mewujudkan ide digital Anda!
                    </span>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="bg-gray-50 py-16 md:py-20">
    <div class="max-w-6xl mx-auto px-4 md:px-6">
        <div class="text-center mb-10 md:mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4">Apa Kata Klien Kami</h2>
            <p class="text-gray-600 max-w-2xl mx-auto text-base md:text-lg">
                Testimoni dari klien yang telah mempercayakan proyek mereka kepada kami.
            </p>
        </div>

        <div class="swiper testimonial-swiper">
            <div class="swiper-wrapper items-stretch">

                <!-- Slide 1 -->
                <div class="swiper-slide h-full">
                    <div
                        class="bg-white p-6 rounded-xl shadow-md h-full flex flex-col justify-between min-h-[200px] w-full">
                        <p class="text-gray-600 mb-4 italic">"Layanan yang sangat profesional dan hasil kerja yang
                            memuaskan! Komunikasinya juga enak, jadi ngerasa tenang selama prosesnya."</p>
                        <div>
                            <div class="font-semibold text-gray-800">Rizky H.</div>
                            <div class="text-sm text-gray-500">Founder, UMKM Lokal</div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide h-full">
                    <div
                        class="bg-white p-6 rounded-xl shadow-md h-full flex flex-col justify-between min-h-[200px] w-full">
                        <p class="text-gray-600 mb-4 italic">"Tim Uremen sangat responsif dan mudah diajak diskusi.
                            Setiap kali aku punya revisi atau ide tambahan, langsung ditanggepin dengan cepat."</p>
                        <div>
                            <div class="font-semibold text-gray-800">Dewi L.</div>
                            <div class="text-sm text-gray-500">CEO, Creative Studio</div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide h-full">
                    <div
                        class="bg-white p-6 rounded-xl shadow-md h-full flex flex-col justify-between min-h-[200px] w-full">
                        <p class="text-gray-600 mb-4 italic">"Timnya sabar banget bantuin revisi aplikasi skripsi
                            aku. Komunikasinya enak, dan cepet tanggap juga. Recommended deh"</p>
                        <div>
                            <div class="font-semibold text-gray-800">Beata Rianti Tini</div>
                            <div class="text-sm text-gray-500">Mahasiswa, UWD Pontianak</div>
                        </div>
                    </div>
                </div>

                <!-- Slide 4 -->
                <div class="swiper-slide h-full">
                    <div
                        class="bg-white p-6 rounded-xl shadow-md h-full flex flex-col justify-between min-h-[200px] w-full">
                        <p class="text-gray-600 mb-4 italic">"Pengerjaannya cepat dan sesuai ekspektasi! Nggak
                            ribet, tinggal tunggu hasil aja."</p>
                        <div>
                            <div class="font-semibold text-gray-800">Ayu P.</div>
                            <div class="text-sm text-gray-500">Digital Marketer</div>
                        </div>
                    </div>
                </div>

                <!-- Slide 5 -->
                <div class="swiper-slide h-full">
                    <div
                        class="bg-white p-6 rounded-xl shadow-md h-full flex flex-col justify-between min-h-[200px] w-full">
                        <p class="text-gray-600 mb-4 italic">"Ngebantu banget buat skripsi aku! Awalnya ngerasa
                            ribet bikin aplikasinya, tapi setelah dibantu, prosesnya jadi jauh lebih ringan"</p>
                        <div>
                            <div class="font-semibold text-gray-800">Fransiskus Agun</div>
                            <div class="text-sm text-gray-500">Mahasiswa, UGM Jogja</div>
                        </div>
                    </div>
                </div>

                <!-- Slide 6 -->
                <div class="swiper-slide h-full">
                    <div
                        class="bg-white p-6 rounded-xl shadow-md h-full flex flex-col justify-between min-h-[200px] w-full">
                        <p class="text-gray-600 mb-4 italic">"Kualitas desain dan user experience-nya luar biasa.
                            Jarang banget nemu tim yang ngerti kebutuhan user secepat ini."</p>
                        <div>
                            <div class="font-semibold text-gray-800">Melati S.</div>
                            <div class="text-sm text-gray-500">UI/UX Designer</div>
                        </div>
                    </div>
                </div>

                <!-- Slide 7 -->
                <div class="swiper-slide h-full">
                    <div
                        class="bg-white p-6 rounded-xl shadow-md h-full flex flex-col justify-between min-h-[200px] w-full">
                        <p class="text-gray-600 mb-4 italic">"Timnya sangat berdedikasi dan perhatian terhadap
                            detail. Setiap revisi dicek ulang dan gak asal-asalan. Salut!"</p>
                        <div>
                            <div class="font-semibold text-gray-800">Teguh R.</div>
                            <div class="text-sm text-gray-500">Konsultan IT</div>
                        </div>
                    </div>
                </div>

                <!-- Slide 8 -->
                <div class="swiper-slide h-full">
                    <div
                        class="bg-white p-6 rounded-xl shadow-md h-full flex flex-col justify-between min-h-[200px] w-full">
                        <p class="text-gray-600 mb-4 italic">"Awalnya bingung ngerjain aplikasi buat skripsi, untung
                            ada tim Uremen sehingga kelar dengan tepat waktu. Hasilnya juga rapi. Thanks kakak tim
                            Uremen!"</p>
                        <div>
                            <div class="font-semibold text-gray-800">Margareta Elsa A.</div>
                            <div class="text-sm text-gray-500">Mahasiswa, UWD Pontianak</div>
                        </div>
                    </div>
                </div>

                <!-- Slide 9 -->
                <div class="swiper-slide h-full">
                    <div
                        class="bg-white p-6 rounded-xl shadow-md h-full flex flex-col justify-between min-h-[200px] w-full">
                        <p class="text-gray-600 mb-4 italic">"Website bisnis saya jadi terlihat lebih profesional
                            dan modern. Customer juga jadi lebih percaya pas liat tampilan websitenya."</p>
                        <div>
                            <div class="font-semibold text-gray-800">Fajar W.</div>
                            <div class="text-sm text-gray-500">Pengusaha Ritel</div>
                        </div>
                    </div>
                </div>

                <!-- Slide 10 -->
                <div class="swiper-slide h-full">
                    <div
                        class="bg-white p-6 rounded-xl shadow-md h-full flex flex-col justify-between min-h-[200px] w-full">
                        <p class="text-gray-600 mb-4 italic">"Jujur terbantu banget, aplikasinya bener-bener sesuai
                            sama kebutuhan skripsi. Makasih bro Libert & tim Uremen"</p>
                        <div>
                            <div class="font-semibold text-gray-800">Harimas Sihotang</div>
                            <div class="text-sm text-gray-500">Mahasiswa, UWD Pontianak</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection