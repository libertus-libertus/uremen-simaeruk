@extends('layouts.frontend.home')
@section('title', 'Detail Portofolio')

@section('content')
<section class="py-20 bg-gray-50 pt-32">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-8 animate__animated animate__fadeInDown">
            <a href="{{ route('portfolio') }}"
                class="inline-flex items-center text-gray-700 hover:text-cyan-600 transition font-medium">
                <i class="fas fa-arrow-left mr-2"></i> Kembali ke Portofolio
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <article class="md:col-span-2 bg-white rounded-lg shadow-lg p-6 lg:p-8 animate__animated animate__fadeInUp">
                <img src="{{ asset('assets/images/portfolios/jexo.jpg') }}" alt="Gambar Portofolio"
                    class="w-full h-auto rounded-lg mb-8">

                <div class="flex items-center text-gray-500 text-sm mb-4">
                    <span class="text-xs font-semibold text-cyan-600 bg-cyan-50 px-3 py-1 rounded-full mr-3">Web App</span>
                    <i class="far fa-calendar-alt mr-2"></i> <time datetime="2025-04-10">10 April 2025</time>
                    <span class="mx-2">•</span>
                    <i class="far fa-user mr-2"></i> <span class="text-gray-700">Klien: Jexo Corp</span>
                </div>

                <h1 class="md:text-4xl font-extrabold text-gray-800 leading-tight mb-6">
                    Proyek Pengembangan Platform Manajemen Proyek untuk Jexo
                </h1>

                <div class="article-content text-base text-gray-700 leading-relaxed">
                    <p>Proyek ini merupakan kolaborasi strategis dengan Jexo Corp untuk membangun platform manajemen proyek berbasis web yang intuitif dan responsif. Fokus kami adalah memberikan solusi yang memudahkan kolaborasi tim, pelacakan tugas, serta manajemen waktu dalam satu tempat.</p>

                    <h2 class="text-xl font-bold mt-8 mb-3">Teknologi yang Digunakan</h2>
                    <ul class="list-disc pl-5 space-y-1">
                        <li>Laravel 10</li>
                        <li>Vue.js 3</li>
                        <li>Tailwind CSS</li>
                        <li>MySQL Database</li>
                        <li>Docker & CI/CD (GitHub Actions)</li>
                    </ul>

                    <h2 class="text-xl font-bold mt-8 mb-3">Fitur Unggulan</h2>
                    <ul class="list-disc pl-5 space-y-1">
                        <li>Manajemen Proyek dan Tugas secara real-time</li>
                        <li>Integrasi dengan Google Calendar & Slack</li>
                        <li>Dashboard Analitik Kinerja Tim</li>
                        <li>Mode Gelap dan Responsif Mobile</li>
                    </ul>

                    <p class="mt-6">Proyek ini diselesaikan dalam waktu 3 bulan dan mendapatkan umpan balik positif dari klien karena desain antarmuka yang elegan dan performa sistem yang stabil.</p>

                    <div class="mt-6">
                        <a href="https://demo.jexo.com" target="_blank"
                            class="inline-flex items-center px-6 py-3 bg-cyan-600 text-white rounded-lg hover:bg-cyan-700 transition">
                            <i class="fas fa-external-link-alt mr-2"></i> Lihat Proyek Live
                        </a>
                    </div>
                </div>
            </article>

            <div class="md:col-span-1">
                <div class="bg-white rounded-lg shadow-lg p-6 animate__animated animate__fadeInRight">
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Info Proyek</h3>
                    <ul class="space-y-3 text-sm text-gray-700">
                        <li><strong>Klien:</strong> Jexo Corp</li>
                        <li><strong>Kategori:</strong> Web Application</li>
                        <li><strong>Durasi:</strong> Jan 2025 – Apr 2025</li>
                        <li><strong>Tim:</strong> 4 Developer, 1 Designer</li>
                        <li><strong>Status:</strong> Selesai</li>
                    </ul>
                </div>

                <div class="bg-white rounded-lg shadow-lg p-6 mt-8 animate__animated animate__fadeInRight animate__delay-0-2s">
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Proyek Lainnya</h3>
                    <ul class="space-y-4">
                        <li>
                            <a href="#" class="flex items-center hover:text-cyan-600 transition">
                                <img src="assets/images/portfolios/media-profile-.jpg" alt="Portofolio Lain"
                                    class="w-20 h-16 object-cover rounded-md mr-3">
                                <div>
                                    <p class="text-gray-700 text-sm font-semibold leading-tight">Sistem Profil Media Interaktif</p>
                                    <span class="text-gray-500 text-xs"><i class="far fa-calendar-alt mr-1"></i> 2025</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center hover:text-cyan-600 transition">
                                <img src="assets/images/portfolios/embedsocial.jpg" alt="Portofolio Lain"
                                    class="w-20 h-16 object-cover rounded-md mr-3">
                                <div>
                                    <p class="text-gray-700 text-sm font-semibold leading-tight">Integrasi Widget Sosial untuk Brand Lokal</p>
                                    <span class="text-gray-500 text-xs"><i class="far fa-calendar-alt mr-1"></i> 2024</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
