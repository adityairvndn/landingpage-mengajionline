<!-- resources/views/landingpage/index.blade.php -->
<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Menggunakan direktif Vite untuk memuat file CSS yang sudah dikompilasi -->
    @vite(["resources/css/app.css", "resources/js/app.js"])

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

  </head>
  <body class="bg-[#0c0eff] font-display">
    <!-- Navbar -->
    <nav class="fixed w-full top-0 z-50 backdrop-blur-sm">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center gap-2">
                    <img src="dist/img/logo.png" alt="Logo" class="w-[104px] h-[23px]">
                </div>

                <!-- Hamburger Icon (Visible on Mobile) -->
                <div class="md:hidden flex items-center">
                    <button id="hamburger-btn" class="text-white hover:text-[#AEFC01]">
                        <!-- Icon hamburger (3 horizontal lines) -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center gap-6">
                    <a href="#" class="text-white hover:text-[#AEFC01]">Beranda</a>
                    <a href="#" class="text-white hover:text-[#AEFC01]">Tentang Kami</a>
                    <a href="#" class="text-white hover:text-[#AEFC01]">Program</a>
                    <a href="#" class="text-white hover:text-[#AEFC01]">Cara Daftar</a>
                    <a href="#" class="text-white hover:text-[#AEFC01]">Testimonial</a>
                    <a href="#" class="text-white hover:text-[#AEFC01]">FAQ</a>
                    <a href="#" class="text-white hover:text-[#AEFC01]">Hubungi Kami</a>
                </div>

                <!-- Daftar / Masuk Button -->
                <a href="#" class="bg-[#aefc01] text-black px-4 py-2 rounded-full text-sm font-medium hover:bg-[#9ee001] transition-colors hidden md:inline-block">
                    Daftar / Masuk
                </a>
            </div>
        </div>

        <!-- Mobile Menu (Hidden initially) -->
        <div id="mobile-menu" class="md:hidden fixed inset-0 z-40 transform translate-x-full transition-all duration-300 ease-in-out">
            <div class="flex justify-end p-4 bg-[#222222]">
                <button id="close-menu-btn" class="text-white">
                    <!-- Close Icon (X) -->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <div class="flex flex-col items-center space-y-6 text-white bg-[#222222] p-5">
                <a href="#" class="hover:text-[#AEFC01]">Beranda</a>
                <a href="#" class="hover:text-[#AEFC01]">Tentang Kami</a>
                <a href="#" class="hover:text-[#AEFC01]">Program</a>
                <a href="#" class="hover:text-[#AEFC01]">Cara Daftar</a>
                <a href="#" class="hover:text-[#AEFC01]">Testimonial</a>
                <a href="#" class="hover:text-[#AEFC01]">FAQ</a>
                <a href="#" class="hover:text-[#AEFC01]">Hubungi Kami</a>

                <!-- Daftar / Masuk Button inside Mobile Menu -->
                <a href="#" class="bg-[#aefc01] text-black px-4 py-2 rounded-full text-sm font-medium hover:bg-[#9ee001]">
                    Daftar / Masuk
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="pt-32 pb-20 hero-section bg-[#0c0eff] relative overflow-hidden">
        <!-- SVG Pattern Garis dengan Stroke Putih Transparan -->
        <div class="absolute inset-0 z-1">
            <svg aria-hidden="true" class="w-full h-full">
                <defs>
                    <pattern id="grid-pattern" width="128" height="128" patternUnits="userSpaceOnUse" x="100%" y="100%" patternTransform="translate(112 64)">
                        <!-- Stroke putih transparan -->
                        <path d="M0 128V.5H128" fill="none" stroke="rgba(255, 255, 255, 0.3)"></path>
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#grid-pattern)"></rect>
            </svg>
        </div>

        <!-- Konten Section -->
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-20">
            <div class="max-w-4xl mx-auto text-center mb-16">
                <h1 class="text-4xl md:text-5xl lg:text-[80px] font-bold text-white leading-tight mb-8">
                    Belajar Mengaji Kapan Saja, Di Mana Saja
                </h1>
                <p class="text-base text-gray-200 mb-8">
                    NgajiKuy adalah aplikasi belajar mengaji online untuk semua usia, memudahkan Anda belajar Al-Qur'an, doa-doa, dan tajwid bersama ustaz dan ustazah terbaik
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <button class="bg-[#aefc01] text-black px-6 py-4 rounded-full font-bold hover:bg-[#9ee001] transition-colors">
                        Mengapa Memilih Kami?
                    </button>
                    <button class="bg-white text-[#0c0eff] px-6 py-4 rounded-full font-bold hover:bg-white/90 transition-colors">
                        Program Kami
                    </button>
                </div>
            </div>
        </div>

        <div class="swiper-container">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <img src="{{ asset('assets/img/image-1.png') }}" alt="Image 1" class="swiper-image">
                </div>
                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <img src="{{ asset('assets/img/image-2.png') }}" alt="Image 2" class="swiper-image">
                </div>
                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <img src="{{ asset('assets/img/image-3.png') }}" alt="Image 3" class="swiper-image">
                </div>
                <!-- Slide 4 -->
                <div class="swiper-slide">
                    <img src="{{ asset('assets/img/image-4.png') }}" alt="Image 4" class="swiper-image">
                </div>
                <!-- Slide 5 -->
                <div class="swiper-slide">
                    <img src="{{ asset('assets/img/image-5.png') }}" alt="Image 5" class="swiper-image">
                </div>
                <!-- Slide 6 -->
                <div class="swiper-slide">
                    <img src="{{ asset('assets/img/image-6.png') }}" alt="Image 6" class="swiper-image">
                </div>
                <!-- Slide 7 -->
                <div class="swiper-slide">
                    <img src="{{ asset('assets/img/image-7.png') }}" alt="Image 7" class="swiper-image">
                </div>
            </div>
        </div>
    </section>

    <section class="flex justify-center bg-white py-10 sm:py-16 md:py-20 rounded-t-[40px] sm:rounded-t-[60px] md:rounded-t-[80px]">
        <div class="max-w-[1280px] mx-auto px-4 sm:px-8 md:px-12 lg:px-0">
            <div class="mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-[67.03%_31.41%] gap-6 md:gap-10">
                    <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-medium mb-4 text-center md:text-left">
                        Kenapa Pilih <span class="text-blue-600">Mengaji?</span>
                    </h1>
                    <p class="text-base sm:text-lg text-[#525252] mb-8 text-center md:text-left">
                        Platform belajar mengaji online terbaik yang memberikan kemudahan dan kualitas dalam pembelajaran Al-Qur'an.
                    </p>
                </div>
            </div>


            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-[#FAFAFA] p-6 md:p-8 rounded-lg shadow-md border border-[#E5E5E5]">
                    <div class="flex flex-col gap-1 md:gap-3 mb-1 md:mb-2">
                        <img src="{{ asset('assets/icon/icon_jadwal.png') }}" alt="Icon" class="w-10 h-10 md:w-12 md:h-12">
                        <h2 class="text-base md:text-lg font-semibold">Bebas Pilih Jadwal Sesukamu</h2>
                    </div>
                    <p class="text-sm md:text-base text-[#737373]">
                        Belajar mengaji kapan saja dan dimana saja, sesuai dengan jadwal Anda
                    </p>
                </div>
                <div class="bg-[#FAFAFA] p-6 md:p-8 rounded-lg shadow-md border border-[#E5E5E5]">
                    <div class="flex flex-col gap-1 md:gap-3 mb-1 md:mb-2">
                        <img src="{{ asset('assets/icon/icon_kompeten.png') }}" alt="Icon" class="w-10 h-10 md:w-12 md:h-12">
                        <h2 class="text-base md:text-lg font-semibold">Ustadz dan Ustadzah Berkompeten</h2>
                    </div>
                    <p class="text-sm md:text-base text-[#737373]">
                        Temukan guru bersertifikasi dan berpengalaman untuk semua tingkatan.
                    </p>
                </div>
                <div class="bg-[#FAFAFA] p-6 md:p-8 rounded-lg shadow-md border border-[#E5E5E5]">
                    <div class="flex flex-col gap-1 md:gap-3 mb-1 md:mb-2">
                        <img src="{{ asset('assets/icon/icon_interaktif.png') }}" alt="Icon" class="w-10 h-10 md:w-12 md:h-12">
                        <h2 class="text-base md:text-lg font-semibold">Metode Pembelajaran Interaktif & Efektif</h2>
                    </div>
                    <p class="text-sm md:text-base text-[#737373]">
                        Pembelajaran dengan video conference dan latihan interaktif
                    </p>
                </div>
                <div class="bg-[#FAFAFA] p-6 md:p-8 rounded-lg shadow-md border border-[#E5E5E5]">
                    <div class="flex flex-col gap-1 md:gap-3 mb-1 md:mb-2">
                        <img src="{{ asset('assets/icon/icon_harga.png') }}" alt="Icon" class="w-10 h-10 md:w-12 md:h-12">
                        <h2 class="text-base md:text-lg font-semibold">Harga Terjangkau dan Bersaing</h2>
                    </div>
                    <p class="text-sm md:text-base text-[#737373]">
                        Paket pembelajaran berkualitas dengan harga terjangkau untuk semua kalangan
                    </p>
                </div>
            </div>

            <div class="flex justify-center">
                <a href="#" class="mt-8 inline-flex items-center gap-2 bg-[#0C0EFF] text-white py-4 px-6 rounded-full shadow-md hover:bg-blue-700">
                    <span>WhatsApp Kami</span>
                    <img src="{{ asset('assets/icon/whatsapp_icon.png') }}" alt="WhatsApp" class="w-6 h-6">
                </a>
            </div>
        </div>
    </section>

    <div class="container mx-auto p-4">
        <!-- Bagian Start Here -->
        <div class="flex justify-center items-center">
            <div class="w-90 h-32 p-[14px_8px] bg-[#0C0EFF] flex justify-center items-center">
                <span class="text-white text-14">Start Here</span>
            </div>
        </div>

        <!-- Teks Mulai Perjalanan -->
        <div class="text-center mt-8">
            <h1 class="text-64">Mulai Perjalanan Anda Disini</h1>
        </div>

        <!-- Bagian Angka dan Teks -->
        <div class="flex justify-center items-center mt-12">
            <div class="text-center">
                <span class="text-80">200+</span>
                <p class="text-16 text-[#787878]">Pengalat keventifikasi</p>
            </div>
            <div class="h-70 w-px bg-gray-300 mx-8"></div>
            <div class="text-center">
                <span class="text-80">4500+</span>
                <p class="text-16 text-[#787878]">Peningama alıf satışı tutarına</p>
            </div>
        </div>

        <!-- Teks Peringatan -->
        <div class="text-center mt-8">
            <p class="text-16 text-[#787878]">Düzdenen bulunan manavutlardan kullanılmasın.</p>
        </div>
    </div>

    <!-- Bagian Footer -->
    <footer class="bg-blue-600 text-white py-6">
        <div class="container mx-auto text-center">
            <p>&copy; 2025 Perusahaan Kami. Semua Hak Dilindungi.</p>
        </div>
    </footer>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  </body>
</html>
