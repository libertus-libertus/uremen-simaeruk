@extends('layouts.frontend.home')
@section('title', 'F.A.Q')

@section('content')
<section
    class="h-screen w-full bg-white flex items-center justify-center relative overflow-hidden px-4 py-16 md:py-20 lg:py-0">
    <canvas id="galaxy-canvas" class="absolute inset-0 z-0 pointer-events-none"></canvas>
    <div class="max-w-6xl w-full mx-auto text-center flex flex-col justify-center items-center relative z-10">
        <h1
            class="text-3xl md:text-4xl lg:text-5xl font-extrabold leading-snug md:leading-tight lg:leading-snug mb-4 animate__animated animate__fadeInDown animate__delay-1s">
            <span class="gradient-text block">Pertanyaan Umum</span>
            <span class="text-gray-800">Kami Siap Menjawab Keraguan Anda<span class="gradient-text">.</span></span>
        </h1>

        <p
            class="text-base md:text-lg text-gray-600 max-w-3xl mx-auto mb-8 px-4 animate__animated animate__fadeInDown animate__delay-2s">
            Temukan jawaban atas pertanyaan paling sering diajukan mengenai layanan kami, proses kerja, dan hal-hal lain
            yang mungkin ingin Anda ketahui.
        </p>

        <div class="flex flex-col sm:flex-row gap-6 animate__animated animate__fadeInUp animate__delay-3s">
            <a href="#faq-section"
                class="px-6 py-3 text-sm font-semibold rounded bg-cyan-500 text-white hover:bg-cyan-600 transition-shadow shadow-md hover:shadow-lg flex items-center justify-center">
                <i class="fas fa-question-circle mr-2"></i> Lihat F.A.Q
            </a>
            <a href="{{ route('contact') }}"
                class="px-6 py-3 text-sm font-semibold rounded border border-cyan-500 text-cyan-500 hover:bg-cyan-50 hover:text-cyan-600 transition-shadow shadow-md hover:shadow-lg flex items-center justify-center">
                <i class="fas fa-headset mr-2"></i> Ajukan Pertanyaan
            </a>
        </div>
    </div>
</section>

<section id="faq-section" class="bg-white py-16 md:py-20">
    <div class="max-w-6xl mx-auto px-4 md:px-6">
        <div class="text-center mb-10 md:mb-12 animate__animated animate__fadeInUp">
            <h2 class="md:text-4xl font-bold text-gray-800 mb-4">
                F.A.Q (Frequently Asked Questions)
            </h2>
            <p class="text-gray-600 max-w-3xl mx-auto text-base md:text-lg px-4">
                Kami telah mengumpulkan beberapa pertanyaan umum untuk membantu Anda memahami lebih lanjut tentang
                proses dan layanan pengembangan website dan aplikasi kami.
            </p>
        </div>

        <div class="space-y-6 w-full px-4" x-data="{ activeAccordion: null }">

            <div
                class="border border-gray-200 rounded-lg overflow-hidden shadow-sm animate__animated animate__fadeInUp animate__delay-1s">
                <button @click="activeAccordion === 'faq1' ? activeAccordion = null : activeAccordion = 'faq1'"
                    class="flex items-center justify-between w-full text-left py-4 px-6 bg-gray-50 hover:bg-gray-100 focus:outline-none transition">
                    <span class="font-bold text-gray-800">
                        Bagaimana proses konsultasi awal untuk proyek website saya?
                    </span>
                    <span
                        class="flex items-center justify-center w-8 h-8 bg-cyan-600 text-white rounded-full transition-transform duration-300"
                        :class="{ 'rotate-90': activeAccordion === 'faq1' }">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </span>
                </button>
                <div x-show="activeAccordion === 'faq1'" x-transition:enter="transition ease-out duration-300"
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