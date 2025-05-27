<!-- resources/views/landingpage/index.blade.php -->
<!doctype html>
<html lang="id">
  <head>
      <title>Mengajar Ngaji</title>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <!-- Menggunakan direktif Vite untuk memuat file CSS yang sudah dikompilasi -->
      @vite(["resources/css/app.css", "resources/js/app.js"])

      <link rel="preconnect" href="https://fonts.bunny.net">
      <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
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

    <section class="bg-black">
        <div class="text-white px-6 py-10 sm:py-14 md:py-20">
            <div class="max-w-7xl mx-auto flex flex-col md:flex-row md:items-center md:justify-between gap-10 md:gap-0">
                <div class="flex flex-col gap-6 md:gap-4 max-w-md">
                    <button class="bg-[#0c0eff] text-white text-sm font-semibold rounded-full px-4 py-1 w-max">
                        Start here
                    </button>
                    <h1 class="text-3xl sm:text-4xl font-bold leading-snug">
                        Mulai perjalanan<br />kamu disini
                    </h1>
                </div>
                <div class="flex gap-10 md:gap-20">
                    <div class="flex flex-col items-center">
                        <span class="text-4xl sm:text-5xl font-light">200+</span>
                        <span class="text-xs sm:text-sm text-gray-300 mt-1">Pengajar tersertifikasi</span>
                    </div>

                    <div class="border-l border-gray-600 h-auto"></div>

                    <div class="flex flex-col items-center">
                        <span class="text-4xl sm:text-5xl font-light">4500+</span>
                        <span class="text-xs sm:text-sm text-gray-300 mt-1">Pengguna aktif setiap bulannya</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-gray-50 flex flex-col justify-center py-10 sm:py-16 md:py-20 px-8 rounded-t-[40px] sm:rounded-t-[60px] md:rounded-t-[80px] gap-10">
            <div class="flex flex-col md:flex-row justify-between gap-6 md:gap-10 mb-6 max-w-7xl mx-auto">
                <h2 class="text-5xl font-bold text-black flex-1">
                    Program di Mengaji
                </h2>
                <p class="text-md text-gray-600 flex-1 text-left md:text-right ">
                    Platform belajar mengaji online terbaik yang memberikan kemudahan dan kualitas dalam pembelajaran Al-Qur’an.
                </p>
            </div>
            <div class="flex justify-center ">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 max-w-7xl w-full">
                    <div class=" md:col-span-2 h-68 bg-gray-100 rounded-lg"></div>
                    <div class="h-68 bg-gray-100 rounded-lg"></div>
                    <div class="h-68 bg-gray-100 rounded-lg"></div>
                    <div class="h-68 bg-gray-100 rounded-lg"></div>
                    <div class="h-68 bg-gray-100 rounded-lg"></div>
                    <div class=" md:col-span-2 h-68 bg-gray-100 rounded-lg"></div>
                </div>
            </div>
        </div>
    </section>
    <div class="border-b-6 border-[#0c0eff]">
    </div>
    <div class="bg-white">
        <section class="flex justify-center bg-white py-10 sm:py-16 md:py-20 px-8 ">
            <div class="grid grid-cols-1 md:grid-cols-8 gap-5 max-w-7xl w-full">
                <div class="md:col-span-2">
                    Aplikasi belajar mengaji online untuk membantu memahami dan membaca Al-Qur'an dengan lebih baik.
                </div>
                <div class="md:col-span-6">
                    <h2 class="font-bold text-4xl md:text-5xl md:font-normal leading-tight mb-10 ml-auto text-left md:w-max">
                        Bagaimana Cara Menggunakan  Mengaji?
                        </h2>
                </div>
                <div class="md:col-span-4">
                    <div id="feature" class=" select-none">
                        <div >
                            <button type="button" id="accordion-item-1" class="w-full flex flex-col px-5 py-5 text-black text-base font-normal accordion-button active">
                                <span class="flex items-center justify-between space-x-2">
                                    <span class="text-2xl font-normal leading-none gap-5 flex items-center space-x-2">
                                        <span>01</span>
                                        <span>Daftar Gratis</span>
                                    </span>
                                    <i class="fas fa-chevron-up"></i>
                                </span>
                                <span class="mt-2 text-sm font-normal leading-tight text-left accordion-content">
                                    Temukan ustaz atau ustazah sesuai preferensi Anda
                                </span>
                            </button>
                        </div>
                        <div >
                            <button type="button" id="accordion-item-2" class="w-full flex flex-col px-5 py-5 text-black text-base font-normal accordion-button">
                                <span class="flex items-center justify-between space-x-2">
                                    <span class="text-2xl font-normal leading-none gap-5 flex items-center space-x-2">
                                        <span>02</span>
                                        <span>Pilih Guru</span>
                                    </span>
                                    <i class="fas fa-chevron-down"></i>
                                </span>
                                <span class="mt-2 text-sm font-normal leading-tight text-left hidden accordion-content">
                                    Temukan ustaz atau ustazah sesuai preferensi Anda
                                </span>
                            </button>
                        </div>
                        <div >
                            <button type="button" id="accordion-item-3" class="w-full flex flex-col px-5 py-5 text-black text-base font-normal accordion-button">
                                <span class="flex items-center justify-between space-x-2">
                                    <span class="text-2xl font-normal leading-none gap-5 flex items-center space-x-2">
                                        <span>03</span>
                                        <span>Pilih Kelas</span>
                                    </span>
                                    <i class="fas fa-chevron-down"></i>
                                </span>
                                <span class="mt-2 text-sm font-normal leading-tight text-left hidden accordion-content">
                                    Temukan ustaz atau ustazah sesuai preferensi Anda
                                </span>
                            </button>
                        </div>
                        <div >
                            <button type="button" id="accordion-item-4" class="w-full flex flex-col px-5 py-5 text-black text-base font-normal accordion-button">
                                <span class="flex items-center justify-between space-x-2">
                                    <span class="text-2xl font-normal leading-none gap-5 flex items-center space-x-2">
                                        <span>04</span>
                                        <span>Mulai Belajar</span>
                                    </span>
                                    <i class="fas fa-chevron-down"></i>
                                </span>
                                <span class="mt-2 text-sm font-normal leading-tight text-left hidden accordion-content">
                                    Temukan ustaz atau ustazah sesuai preferensi Anda
                                </span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="md:col-span-4">
                    <div class="h-full bg-gray-100 rounded-lg"></div>
                </div>
            </div>
        </section>
        <section class="flex flex-col gap-4 px-4 py-12 sm:py-16 bg-[#E9EFFB] rounded-t-[40px] sm:rounded-t-[60px] md:rounded-t-[80px] ">
            <div class="flex justify-center mb-4 ">
             <span class="bg-[#0c0eff] text-white text-md font-medium rounded-full px-3 py-1 leading-none select-none">
              Testimoni
             </span>
            </div>
            <h2 class="text-center text-black text-5xl font-normal leading-[60px] mb-10">
                Apa Kata Mereka?
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 max-w-7xl mx-auto">
                <div class="bg-white rounded-lg p-6 shadow-sm">
                    <div class="flex items-center mb-3">
                        <img alt="Portrait of Ahmad Rahman, a young man with short hair and a light shirt" class="w-10 h-10 rounded-full object-cover mr-3" height="40" src="https://storage.googleapis.com/a1aa/image/45d5beb9-9bcd-49c9-5186-9bc1699a0362.jpg" width="40"/>
                        <div>
                            <p class="text-[14px] font-semibold text-black leading-tight">
                                Ahmad Rahman
                            </p>
                            <p class="text-[12px] font-normal text-[#6B7280] leading-tight">
                                Mahasiswa
                            </p>
                        </div>
                    </div>
                    <p class="text-[14px] font-normal text-black leading-relaxed">
                        "NgajiKuy membantu saya memperbaiki bacaan Al-Qur'an dengan fleksibilitas waktu yang pas untuk jadwal kuliah saya."
                    </p>
                </div>
                <div class="bg-white rounded-lg p-6 shadow-sm">
                    <div class="flex items-center mb-3">
                        <img alt="Portrait of Siti Aisyah, a woman with long hair wearing a light top" class="w-10 h-10 rounded-full object-cover mr-3" height="40" src="https://storage.googleapis.com/a1aa/image/4051ad42-d755-4202-d840-f5175eef329e.jpg" width="40"/>
                        <div>
                            <p class="text-[14px] font-semibold text-black leading-tight">
                                Siti Aisyah
                            </p>
                            <p class="text-[12px] font-normal text-[#6B7280] leading-tight">
                                Ibu Rumah Tangga
                            </p>
                        </div>
                    </div>
                    <p class="text-[14px] font-normal text-black leading-relaxed">
                        "Dengan NgajiKuy, saya bisa belajar bersama anak-anak tanpa harus keluar rumah. Sangat praktis dan menyenangkan!"
                    </p>
                </div>
                <div class="bg-white rounded-lg p-6 shadow-sm">
                    <div class="flex items-center mb-3">
                        <img alt="Portrait of Dimas Pratama, a man with short hair wearing a dark shirt" class="w-10 h-10 rounded-full object-cover mr-3" height="40" src="https://storage.googleapis.com/a1aa/image/cff05bc7-742a-4f32-c5d0-818eeb505980.jpg" width="40"/>
                        <div>
                            <p class="text-[14px] font-semibold text-black leading-tight">
                                Dimas Pratama
                            </p>
                            <p class="text-[12px] font-normal text-[#6B7280] leading-tight">
                                Pegawai Swasta
                            </p>
                        </div>
                    </div>
                    <p class="text-[14px] font-normal text-black leading-relaxed">
                        "Pilihan guru di NgajiKuy sangat beragam, saya bisa memilih yang cocok dengan gaya belajar saya”
                    </p>
                </div>
            </div>
        </section>
    </div>
    <section class="flex flex-col gap-4 px-4 py-12 sm:py-16 bg-white ">
        <div class="flex flex-col justify-center gap-4">
            <h2 class="text-center text-black font-bold text-5xl  leading-[60px]">
                Frequently Asked Question
            </h2>
            <p class="text-center text-md font-normal mb-10 max-w-2xl mx-auto text-gray-500">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum laudantium reprehenderit, obcaecati ratione facere nesciunt tempore. Aliquid minus incidunt sint placeat! Obcaecati ea quasi enim, quos possimus ipsa? Enim, nam!
            </p>
        </div><div class="w-full flex justify-center">
            <div id="faq" class=" max-w-7xl w-full">
                <div >
                    <button type="button" id="accordion-item-1" class="w-full flex flex-col px-5 py-5 text-black text-base font-normal accordion-button active">
                        <span class="flex items-center justify-between space-x-2">
                            <span class="text-2xl font-normal leading-none gap-5 flex items-center space-x-2">
                                <span>Apakah bisa belajar di luar jadwal?</span>
                            </span>
                            <i class="fas fa-chevron-up"></i>
                        </span>
                        <span class="mt-2 text-sm font-normal leading-tight text-left accordion-content">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore dignissimos eaque, quaerat ullam temporibus quibusdam quia nisi nam doloremque impedit ex nemo sed? Distinctio dicta ipsam veniam provident repellendus recusandae!
                        </span>
                    </button>
                </div>
                <div >
                    <button type="button" id="accordion-item-2" class="w-full flex flex-col px-5 py-5 text-black text-base font-normal accordion-button">
                        <span class="flex items-center justify-between space-x-2">
                            <span class="text-2xl font-normal leading-none gap-5 flex items-center space-x-2">

                                <span>Siapa yang bisa menggunakan aplikasi ini?</span>
                            </span>
                            <i class="fas fa-chevron-down"></i>
                        </span>
                        <span class="mt-2 text-sm font-normal leading-tight text-left hidden accordion-content">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam iusto veniam labore necessitatibus, soluta deserunt nostrum accusantium ipsum porro ullam laudantium placeat vero esse voluptatibus at! Laudantium, sit? Maiores, numquam?
                        </span>
                    </button>
                </div>
                <div >
                    <button type="button" id="accordion-item-3" class="w-full flex flex-col px-5 py-5 text-black text-base font-normal accordion-button">
                        <span class="flex items-center justify-between space-x-2">
                            <span class="text-2xl font-normal leading-none gap-5 flex items-center space-x-2">
                                <span>Apakah ada uji coba gratis?</span>
                            </span>
                            <i class="fas fa-chevron-down"></i>
                        </span>
                        <span class="mt-2 text-sm font-normal leading-tight text-left hidden accordion-content">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. In pariatur magnam aliquid culpa corporis nesciunt id ipsa, unde nemo nam, facilis saepe ipsam quidem blanditiis reiciendis eligendi vitae, officia libero.
                        </span>
                    </button>
                </div>
                <div >
                    <button type="button" id="accordion-item-4" class="w-full flex flex-col px-5 py-5 text-black text-base font-normal accordion-button">
                        <span class="flex items-center justify-between space-x-2">
                            <span class="text-2xl font-normal leading-none gap-5 flex items-center space-x-2">
                                <span>Bagaimana cara memilih guru?</span>
                            </span>
                            <i class="fas fa-chevron-down"></i>
                        </span>
                        <span class="mt-2 text-sm font-normal leading-tight text-left hidden accordion-content">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro ut ab doloribus, ad eaque ipsa modi itaque labore sit accusantium quidem voluptates recusandae atque dolores distinctio officiis? Ipsam, unde aliquam.
                        </span>
                    </button>
                </div><div >
                    <button type="button" id="accordion-item-4" class="w-full flex flex-col px-5 py-5 text-black text-base font-normal accordion-button">
                        <span class="flex items-center justify-between space-x-2">
                            <span class="text-2xl font-normal leading-none gap-5 flex items-center space-x-2">
                                <span>Bagaimana cara memilih guru?</span>
                            </span>
                            <i class="fas fa-chevron-down"></i>
                        </span>
                        <span class="mt-2 text-sm font-normal leading-tight text-left hidden accordion-content">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro ut ab doloribus, ad eaque ipsa modi itaque labore sit accusantium quidem voluptates recusandae atque dolores distinctio officiis? Ipsam, unde aliquam.
                        </span>
                    </button>
                </div><div >
                    <button type="button" id="accordion-item-4" class="w-full flex flex-col px-5 py-5 text-black text-base font-normal accordion-button">
                        <span class="flex items-center justify-between space-x-2">
                            <span class="text-2xl font-normal leading-none gap-5 flex items-center space-x-2">
                                <span>Bagaimana cara memilih guru?</span>
                            </span>
                            <i class="fas fa-chevron-down"></i>
                        </span>
                        <span class="mt-2 text-sm font-normal leading-tight text-left hidden accordion-content">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro ut ab doloribus, ad eaque ipsa modi itaque labore sit accusantium quidem voluptates recusandae atque dolores distinctio officiis? Ipsam, unde aliquam.
                        </span>
                    </button>
                </div><div >
                    <button type="button" id="accordion-item-4" class="w-full flex flex-col px-5 py-5 text-black text-base font-normal accordion-button">
                        <span class="flex items-center justify-between space-x-2">
                            <span class="text-2xl font-normal leading-none gap-5 flex items-center space-x-2">
                                <span>Bagaimana cara memilih guru?</span>
                            </span>
                            <i class="fas fa-chevron-down"></i>
                        </span>
                        <span class="mt-2 text-sm font-normal leading-tight text-left hidden accordion-content">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro ut ab doloribus, ad eaque ipsa modi itaque labore sit accusantium quidem voluptates recusandae atque dolores distinctio officiis? Ipsam, unde aliquam.
                        </span>
                    </button>
                </div><div >
                    <button type="button" id="accordion-item-4" class="w-full flex flex-col px-5 py-5 text-black text-base font-normal accordion-button">
                        <span class="flex items-center justify-between space-x-2">
                            <span class="text-2xl font-normal leading-none gap-5 flex items-center space-x-2">
                                <span>Bagaimana cara memilih guru?</span>
                            </span>
                            <i class="fas fa-chevron-down"></i>
                        </span>
                        <span class="mt-2 text-sm font-normal leading-tight text-left hidden accordion-content">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro ut ab doloribus, ad eaque ipsa modi itaque labore sit accusantium quidem voluptates recusandae atque dolores distinctio officiis? Ipsam, unde aliquam.
                        </span>
                    </button>
                </div><div >
                    <button type="button" id="accordion-item-4" class="w-full flex flex-col px-5 py-5 text-black text-base font-normal accordion-button">
                        <span class="flex items-center justify-between space-x-2">
                            <span class="text-2xl font-normal leading-none gap-5 flex items-center space-x-2">
                                <span>Bagaimana cara memilih guru?</span>
                            </span>
                            <i class="fas fa-chevron-down"></i>
                        </span>
                        <span class="mt-2 text-sm font-normal leading-tight text-left hidden accordion-content">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro ut ab doloribus, ad eaque ipsa modi itaque labore sit accusantium quidem voluptates recusandae atque dolores distinctio officiis? Ipsam, unde aliquam.
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- Bagian Footer -->
    <div class="bg-black">
        <footer class="max-w-7xl mx-auto px-6 py-12 flex flex-col sm:flex-row sm:justify-between sm:items-start gap-12 sm:gap-0">
            <div class="flex flex-col space-y-6 sm:w-1/4">
                <div class="flex items-center space-x-2">
                    <div class="w-5 h-5 rounded-md bg-white"></div>
                    <span class="font-semibold text-white text-base leading-5">Mengaji</span>
                </div>
                <div class="flex space-x-6 text-gray-400 text-lg">
                    <a href="#" aria-label="LinkedIn" class="hover:text-white transition-colors duration-200">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#" aria-label="Twitter" class="hover:text-white transition-colors duration-200">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" aria-label="Facebook" class="hover:text-white transition-colors duration-200">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </div>
            </div>

            <div class="flex flex-col sm:w-1/5 space-y-2">
                <h3 class="text-white font-semibold text-sm leading-5 mb-3">Links</h3>
                <a href="#" class="text-gray-400 text-sm leading-5 hover:text-white transition-colors duration-200">Home</a>
                <a href="#" class="text-gray-400 text-sm leading-5 hover:text-white transition-colors duration-200">Features</a>
                <a href="#" class="text-gray-400 text-sm leading-5 hover:text-white transition-colors duration-200">Testimonials</a>
                <a href="#" class="text-gray-400 text-sm leading-5 hover:text-white transition-colors duration-200">Pricing</a>
            </div>

            <div class="flex flex-col sm:w-1/5 space-y-2">
                <h3 class="text-white font-semibold text-sm leading-5 mb-3">Help and Support</h3>
                <a href="#" class="text-gray-400 text-sm leading-5 hover:text-white transition-colors duration-200">FAQ</a>
                <a href="#" class="text-gray-400 text-sm leading-5 hover:text-white transition-colors duration-200">Contact Us</a>
                <a href="#" class="text-gray-400 text-sm leading-5 hover:text-white transition-colors duration-200">Support</a>
            </div>

            <div class="flex flex-col sm:w-1/4 space-y-2">
                <h3 class="text-white font-semibold text-sm leading-5 mb-3">Our Address</h3>
                <p class="text-gray-400 text-sm leading-5">
                    Gayungan, Surabaya 60231<br />
                    Indonesia
                </p>
            </div>
        </footer>

        <div class="max-w-7xl mx-auto px-6 pb-8 flex flex-col sm:flex-row justify-between text-gray-400 text-xs leading-4">
            <div class="mb-4 sm:mb-0 flex items-center space-x-1">
                <i class="far fa-copyright text-xs"></i>
                <span>2025 Mengaji. All right reserved</span>
            </div>
            <div class="flex space-x-6">
                <a href="#" class="hover:text-white transition-colors duration-200">Privacy Policy</a>
                <a href="#" class="hover:text-white transition-colors duration-200">Terms Of Use</a>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  </body>
</html>
