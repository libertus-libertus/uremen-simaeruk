@extends('layouts.frontend.home')
@section('title', 'Kontak Kami')

@section('content')
<!-- Jumbotron -->
<section
    class="h-screen w-full bg-white flex items-center justify-center relative overflow-hidden px-4 py-16 md:py-20 lg:py-0">
    <canvas id="galaxy-canvas" class="absolute inset-0 z-0 pointer-events-none"></canvas>
    <div class="max-w-6xl w-full mx-auto text-center flex flex-col justify-center items-center relative z-10">
        <h1
            class="text-3xl md:text-4xl lg:text-5xl font-extrabold leading-snug md:leading-tight lg:leading-snug mb-4 animate__animated animate__fadeInDown animate__delay-1s">
            <span class="gradient-text block">Hubungi Kami</span>
            <span class="text-gray-800">Kami Siap Membantu Anda<span class="gradient-text">.</span></span>
        </h1>

        <p
            class="text-base md:text-lg text-gray-600 max-w-3xl mx-auto mb-8 px-4 animate__animated animate__fadeInDown animate__delay-2s">
            Jangan ragu untuk menghubungi kami melalui informasi di bawah ini atau isi formulir kontak. Kami akan dengan
            senang hati membantu mewujudkan ide digital Anda!
        </p>

        <div class="flex flex-col sm:flex-row gap-6 animate__animated animate__fadeInUp animate__delay-3s">
            <a href="mailto:info@uremensimaeruk.com"
                class="px-6 py-3 text-sm font-semibold rounded bg-cyan-500 text-white hover:bg-cyan-600 transition-shadow shadow-md hover:shadow-lg flex items-center justify-center">
                <i class="fas fa-envelope mr-2"></i> Email Kami
            </a>
            <a href="tel:+6281234567890"
                class="px-6 py-3 text-sm font-semibold rounded border border-cyan-500 text-cyan-500 hover:bg-cyan-50 hover:text-cyan-600 transition-shadow shadow-md hover:shadow-lg flex items-center justify-center">
                <i class="fas fa-phone mr-2"></i> Telepon Kami
            </a>
        </div>
    </div>
</section>

<!-- Contact Form -->
<section id="contact" class="py-24 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="md:text-4xl font-bold text-gray-800 mb-4">
                Informasi Kontak & Formulir
            </h2>
            <p class="text-gray-600 max-w-3xl mx-auto">
                Siap untuk mengembangkan bisnis Anda? Hubungi kami hari ini.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-12">
            <div class="animate__animated animate__fadeInLeft">
                <h3 class="text-2xl font-bold mb-6 text-gray-800">Informasi Kontak Kami</h3>

                <div class="space-y-6 text-gray-700">
                    <div class="flex items-start">
                        <div class="text-cyan-500 text-xl mr-4 mt-1">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div>
                            <h4 class="font-bold mb-1">Kantor Kami</h4>
                            <p>Jl. Banjir Kanal No. 14C, Kel. Alai Parak Kopi<br>Kota Padang, Sumatera Barat, 12345</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="text-cyan-500 text-xl mr-4 mt-1">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div>
                            <h4 class="font-bold mb-1">Email Kami</h4>
                            <p>info@uremensimaeruk.com<br>support@uremensimaeruk.com</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="text-cyan-500 text-xl mr-4 mt-1">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div>
                            <h4 class="font-bold mb-1">Telepon Kami</h4>
                            <p>+62 812-3456-7890<br>Senin-Jumat, 9 pagi - 5 sore</p>
                        </div>
                    </div>
                </div>

                <div class="mt-10">
                    <h4 class="font-bold mb-4 text-gray-800">Ikuti Kami</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-2xl transition">
                            <i class="fab fa-facebook-f text-gray-500 hover:text-[#1877F2]"></i> </a>
                        <a href="#" class="text-2xl transition">
                            <i class="fab fa-twitter text-gray-500 hover:text-[#1DA1F2]"></i> </a>
                        <a href="#" class="text-2xl transition">
                            <i class="fab fa-linkedin text-gray-500 hover:text-[#0A66C2]"></i> </a>
                        <a href="#" class="text-2xl transition">
                            <i
                                class="fab fa-instagram text-gray-500 hover:text-transparent hover:bg-gradient-to-tr hover:from-[#FFDC80] hover:via-[#FCAF45] hover:to-[#F56040] hover:bg-clip-text"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="animate__animated animate__fadeInRight">
                <form class="space-y-6" action="#" method="post">
                    @csrf
                    <div class="grid sm:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-medium mb-1 text-gray-700">Nama Lengkap</label>
                            <input type="text" id="name"
                                class="w-full bg-white border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-cyan-500 transition"
                                autofocus required />
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium mb-1 text-gray-700">Alamat Email</label>
                            <input type="email" id="email"
                                class="w-full bg-white border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-cyan-500 transition"
                                required />
                        </div>
                    </div>

                    <div>
                        <label for="subject" class="block text-sm font-medium mb-1 text-gray-700">Subjek</label>
                        <input type="text" id="subject"
                            class="w-full bg-white border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-cyan-500 transition"
                            required />
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium mb-1 text-gray-700">Pesan Anda</label>
                        <textarea id="message" rows="5"
                            class="w-full bg-white border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-cyan-500 transition"
                            required></textarea>
                    </div>

                    <button type="submit"
                        class="w-full bg-cyan-500 hover:bg-cyan-600 text-white font-bold py-3 px-6 rounded-lg transition duration-300 transform hover:scale-[1.02]">
                        Kirim Pesan
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Location -->
<section class="bg-gray-50 py-16 md:py-20">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="md:text-4xl font-bold text-gray-800 mb-4">
            Temukan Lokasi Kami
        </h2>
        <p class="text-gray-600 max-w-3xl mx-auto mb-10">
            Kunjungi kantor kami untuk diskusi lebih lanjut atau temukan kami di peta.
        </p>
        <div class="aspect-w-16 aspect-h-9 rounded-lg overflow-hidden shadow-lg border border-gray-200">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.309070868846!2d100.3547846!3d-0.9328229!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b8cf66a0d0d1%3A0x6b447844a49c69d8!2sJl.%20Banjir%20Kanal%20No.14C%2C%20Alai%20Parak%20Kopi%2C%20Kec.%20Padang%20Utara%2C%20Kota%20Padang%2C%20Sumatera%20Barat%2025139!5e0!3m2!1sen!2sid!4v1716579222409!5m2!1sen!2sid"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>
@endsection