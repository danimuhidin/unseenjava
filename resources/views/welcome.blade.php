<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Unseen Java | Karmawibhangga</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    {{-- favicon public/unseenjava.svg  --}}
    <link rel="icon" href="{{ asset('unseenjava.svg') }}" type="image/svg+xml">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        amber: {
                            200: '#fde68a',
                            400: '#fbbf24',
                            500: '#f59e0b',
                            600: '#d97706',
                        }
                    },
                    fontFamily: {
                        headline: ['Cinzel', 'serif'],
                        body: ['Helvetica Neue', 'Helvetica', 'Arial', 'sans-serif'],
                    }
                }
            }
        };
    </script>
    <style>
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 1s ease-out, transform 1s ease-out;
        }

        .fade-in.is-visible {
            opacity: 1;
            transform: translateY(0);
        }

        .slide-right {
            opacity: 0;
            transform: translateX(-30px);
            transition: opacity 1s ease-out, transform 1s ease-out;
        }

        .slide-right.is-visible {
            opacity: 1;
            transform: translateX(0);
        }

        .slide-left {
            opacity: 0;
            transform: translateX(30px);
            transition: opacity 1s ease-out, transform 1s ease-out;
        }

        .slide-left.is-visible {
            opacity: 1;
            transform: translateX(0);
        }
    </style>
</head>

<body class="bg-black text-white selection:bg-amber-500 selection:text-black">

    <!-- Navbar -->
    <nav id="navbar" class="fixed w-full z-50 transition-all duration-500 bg-transparent py-6">
        <div class="max-w-7xl mx-auto px-6 flex justify-between items-center">
            <div class="flex items-center">
                <a href="#hero-section" class="relative group">
                    <span
                        class="text-xl font-headline font-bold tracking-[0.1em] text-white transition-colors duration-500 hover:text-amber-400">
                        Unseen Java
                    </span>
                </a>
            </div>

            <div class="hidden md:flex items-center gap-10 text-sm font-medium tracking-widest text-white/70 font-body">
                <div class="relative group">
                    <a href="#konsep-section"
                        class="flex items-center gap-1 transition-all duration-300 uppercase relative hover:text-amber-400">
                        KONSEP
                    </a>
                </div>
                <div class="relative group">
                    <a href="#gallery-section"
                        class="flex items-center gap-1 transition-all duration-300 uppercase relative hover:text-amber-400">
                        GALLERY
                    </a>
                </div>
                <div class="relative group">
                    <a href="#immersive-section"
                        class="flex items-center gap-1 transition-all duration-300 uppercase relative hover:text-amber-400">
                        NOW EVENT
                    </a>
                </div>

                <div class="flex items-center gap-6 ml-4 border-l border-white/10 pl-8 font-body">
                    <div class="flex items-center gap-2 text-[10px] font-bold tracking-widest text-white/30">
                        <button class="hover:text-amber-400 transition-colors">EN</button>
                        <span class="text-white/10">|</span>
                        <button class="hover:text-amber-400 transition-colors text-amber-400">ID</button>
                    </div>
                    <button
                        class="flex items-center gap-2 px-5 py-2 border border-amber-500/30 rounded-none text-amber-400 hover:bg-amber-500 hover:text-black transition-all duration-300 text-xs font-bold uppercase">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                            <circle cx="12" cy="7" r="4" />
                        </svg>
                        Login
                    </button>
                </div>
            </div>

            <button id="mobile-menu-btn" class="md:hidden text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="4" x2="20" y1="12" y2="12" />
                    <line x1="4" x2="20" y1="6" y2="6" />
                    <line x1="4" x2="20" y1="18" y2="18" />
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu"
            class="hidden absolute top-full left-0 w-full bg-black border-t border-white/10 p-6 md:hidden">
            <div class="flex flex-col gap-4 text-center items-center font-body">
                <a href="#konsep-section"
                    class="py-2 block tracking-widest uppercase font-medium text-white hover:text-amber-400">KONSEP</a>
                <a href="#gallery-section"
                    class="py-2 block tracking-widest uppercase font-medium text-white hover:text-amber-400">GALLERY</a>
                <a href="#immersive-section"
                    class="py-2 block tracking-widest uppercase font-medium text-white hover:text-amber-400">NOW
                    EVENT</a>
            </div>
        </div>
    </nav>

    <main>
        <!-- Hero Section -->
        <section id="hero-section" class="relative h-screen flex items-center justify-center overflow-hidden">
            <div class="absolute inset-0 z-0">
                <img src="{{ asset('img/camera.png') }}"
                    class="w-full h-full object-cover opacity-70" alt="Candi Borobudur" />
                <div class="absolute inset-0 bg-gradient-to-b from-black/70 via-black/30 to-black"></div>
            </div>
            <div class="relative z-10 text-center px-6 max-w-4xl fade-in">
                <p class="text-amber-400 font-medium tracking-[0.5em] text-xs md:text-sm mb-4 uppercase font-body">
                    Spiritual - Ekologis - Masa Depan</p>
                <h1 class="text-5xl md:text-8xl font-headline text-white mb-8 leading-tight lowercase">unseen java
                    <br /><span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-amber-200 to-amber-600 uppercase">KARMAWIBHANGGA</span>
                </h1>
                <div>
                    <a href="#immersive-section"
                        class="inline-block px-8 py-4 bg-amber-500 text-black font-bold tracking-widest text-xs hover:bg-amber-400 transition-all rounded-none uppercase font-body shadow-lg">Now
                        Event</a>
                </div>
            </div>
            <div class="absolute bottom-10 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 font-body">
                <div class="w-[1px] h-12 bg-gradient-to-b from-transparent to-amber-400"></div>
                <span class="text-[10px] text-amber-400 tracking-widest uppercase font-medium"
                    style="writing-mode: vertical-rl">GULIR</span>
            </div>
        </section>

        <!-- Maestro Section -->
        <section id="maestro-section" class="py-24 px-6 bg-black border-y border-white/5 overflow-hidden scroll-mt-20">
            <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-16 items-stretch">
                <div class="relative order-2 md:order-1 h-full fade-in">
                    <div
                        class="h-full overflow-hidden border border-white/10 grayscale hover:grayscale-0 transition-all duration-1000">
                        <img src="{{ asset('img/maestro.png') }}"
                            class="w-full h-full object-cover" alt="Kreativitas Modern Maestro" />
                    </div>
                    <div class="absolute -top-4 -left-4 w-12 h-12 border-t-2 border-l-2 border-amber-500"></div>
                </div>
                <div class="order-1 md:order-2 flex flex-col justify-center slide-left">
                    <h2 class="text-3xl md:text-5xl font-headline text-amber-500 mb-8 leading-tight italic uppercase">
                        Apa yang akan diciptakan para maestro besar jika mereka memiliki akses ke peralatan modern?</h2>
                    <div class="space-y-6">
                        <p class="text-white/70 leading-relaxed font-body font-light text-lg">Sosok kreatif di balik
                            proyek ini Hendy Hertiasa (Selaku Dosen dari Desain Komunikasi Visual FSRDITB) sebagai
                            konseptor.</p>
                        <p class="text-white/70 leading-relaxed font-body font-light text-lg">Serta dukungan dan
                            inisiator Dewi Gontha (Presiden Direktur Java Festival Production), lahirlah sebuah gagasan
                            <span class="text-amber-400 font-headline">“Unseen Java: Karmawibhangga”</span>, paviliun
                            imersif kontemplatif di Java Jazz Festival 2026, yang menampilkan tontonan film animasi &
                            Motion graphic AI dikolaborasikan dengan pertunjukan musik, dance dan yoga.</p>
                    </div>
                    <button
                        class="mt-12 group self-start flex items-center gap-4 px-8 py-4 border border-amber-500 text-amber-500 font-bold tracking-widest text-xs hover:bg-amber-500 hover:text-black transition-all rounded-none uppercase font-body">Temukan
                        Eksibisi Kami</button>
                </div>
            </div>
        </section>

        <!-- Introduction Section -->
        <section id="konsep-section" class="py-24 px-6 bg-black scroll-mt-20">
            <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-16 items-center">
                <div class="slide-right">
                    <h2 class="text-3xl md:text-5xl font-headline text-white mb-8 leading-tight italic uppercase">
                        Trilogi Pedagogis <br /><span class="text-amber-500 not-italic">dalam kerangka O-C-E</span>
                    </h2>
                    <p class="text-white/60 leading-relaxed mb-8 text-lg font-light font-body">"Bertahan abad lamanya,
                        160 relief Karmawibhangga tersembunyi di kaki candi Borobudur hingga kini."</p>
                    <div class="grid grid-cols-2 gap-6 font-body">
                        <div
                            class="p-6 border border-white/5 bg-white/5 hover:bg-white/10 transition-all group rounded-none">
                            <h3
                                class="text-white font-bold mb-2 text-sm uppercase tracking-wider font-headline text-amber-400">
                                Dimensi Spiritual</h3>
                            <p class="text-white/40 text-xs leading-relaxed">Menjelajahi makna tersembunyi di balik
                                relief Karmawibhangga sebagai panduan moral dan spiritual.</p>
                        </div>
                        <div
                            class="p-6 border border-white/5 bg-white/5 hover:bg-white/10 transition-all group rounded-none">
                            <h3
                                class="text-white font-bold mb-2 text-sm uppercase tracking-wider font-headline text-amber-400">
                                Kesadaran Ekologis</h3>
                            <p class="text-white/40 text-xs leading-relaxed">Harmonisasi antara pelestarian budaya dan
                                keberlanjutan lingkungan masa depan.</p>
                        </div>
                        <div
                            class="p-6 border border-white/5 bg-white/5 hover:bg-white/10 transition-all group rounded-none">
                            <h3
                                class="text-white font-bold mb-2 text-sm uppercase tracking-wider font-headline text-amber-400">
                                Imersi Visual</h3>
                            <p class="text-white/40 text-xs leading-relaxed">Teknologi digital yang menghidupkan
                                kembali relief yang tertutup di kaki Candi Borobudur.</p>
                        </div>
                        <div
                            class="p-6 border border-white/5 bg-white/5 hover:bg-white/10 transition-all group rounded-none">
                            <h3
                                class="text-white font-bold mb-2 text-sm uppercase tracking-wider font-headline text-amber-400">
                                Pedagogi O-C-E</h3>
                            <p class="text-white/40 text-xs leading-relaxed">Metode pembelajaran terstruktur yang
                                menggabungkan Observasi, Kontemplasi, dan Edukasi.</p>
                        </div>
                    </div>
                </div>
                <div class="relative slide-left">
                    <div class="aspect-[4/5] overflow-hidden rounded-none border border-white/10 shadow-2xl">
                        <img src="{{ asset('img/glow-borobudur.jpg')}}"
                            class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-1000"
                            alt="Detail Relief" />
                    </div>
                    <div
                        class="absolute -bottom-8 -left-8 p-8 bg-amber-500 text-black max-w-xs rounded-none shadow-2xl hidden lg:block font-body">
                        <p class="text-sm font-medium italic font-body">"Seni adalah jendela menuju pemahaman ekologis
                            masa lalu untuk masa depan."</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Gallery Section -->
        <section id="gallery-section" class="bg-black py-24 scroll-mt-20">
            <div class="max-w-[1400px] mx-auto px-6 mb-12 fade-in">
                <div class="text-center md:text-left">
                    <h2 class="text-5xl md:text-7xl font-headline text-amber-500 uppercase tracking-tight mb-4 italic">
                        Gallery</h2>
                    <div class="w-20 h-[2px] bg-amber-500 mx-auto md:mx-0"></div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 w-full border-y border-white/10">
                <div class="md:col-span-2 grid grid-cols-1 sm:grid-cols-2 border-r border-white/10">
                    <div
                        class="relative aspect-square group overflow-hidden cursor-pointer border-b border-white/10 sm:border-r fade-in">
                        <img src="{{ asset('img/gal3.png') }}"
                            class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110 opacity-70 group-hover:opacity-100"
                            alt="Galeri" />
                        <div class="absolute inset-x-0 bottom-0 p-6 bg-gradient-to-t from-black/80 to-transparent">
                            <p class="text-white text-xs font-body font-medium leading-relaxed max-w-[200px]">Pameran
                                Galeri Relik Karmawibhangga</p>
                        </div>
                    </div>
                    <div
                        class="relative aspect-square group overflow-hidden cursor-pointer border-b border-white/10 sm:border-r fade-in">
                        <img src="{{ asset('img/gal2.jpg') }}"
                            class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110 opacity-70 group-hover:opacity-100"
                            alt="Galeri" />
                        <div class="absolute inset-x-0 bottom-0 p-6 bg-gradient-to-t from-black/80 to-transparent">
                            <p class="text-white text-xs font-body font-medium leading-relaxed max-w-[200px]">
                                Menjelajahi titik kecil penglihatan nexus</p>
                        </div>
                    </div>
                    <div
                        class="relative aspect-square group overflow-hidden cursor-pointer border-b border-white/10 sm:border-r fade-in">
                        <img src="{{ asset('img/gal1.jpg') }}"
                            class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110 opacity-70 group-hover:opacity-100"
                            alt="Galeri" />
                        <div class="absolute inset-x-0 bottom-0 p-6 bg-gradient-to-t from-black/80 to-transparent">
                            <p class="text-white text-xs font-body font-medium leading-relaxed max-w-[200px]">Elemen
                                Kehidupan</p>
                        </div>
                    </div>
                    <div
                        class="relative aspect-square group overflow-hidden cursor-pointer border-b border-white/10 sm:border-r fade-in">
                        {{-- <img src="https://images.unsplash.com/photo-1550745165-9bc0b252726f?auto=format&fit=crop&q=80&w=800"
                            class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110 opacity-70 group-hover:opacity-100"
                            alt="Galeri" /> --}}
                            {{-- video  --}}
                        <video src="{{ asset('video/gal4.mp4') }}"
                            class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110 opacity-70 group-hover:opacity-100"
                            autoplay loop muted playsinline></video>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div
                                class="w-16 h-16 bg-white/20 backdrop-blur-md rounded-none flex items-center justify-center text-white border border-white/30 group-hover:scale-110 transition-transform">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="currentColor" stroke="none">
                                    <polygon points="5 3 19 12 5 21 5 3" />
                                </svg>
                            </div>
                        </div>
                        <div class="absolute inset-x-0 bottom-0 p-6 bg-gradient-to-t from-black/80 to-transparent">
                            <p class="text-white text-xs font-body font-medium leading-relaxed max-w-[200px]">Titik
                                Kecil Yang Sangat Luas</p>
                        </div>
                    </div>
                </div>
                <div class="md:col-span-1 h-full fade-in">
                    <div class="relative h-full min-h-[500px] group overflow-hidden cursor-pointer">
                        <img src="{{ asset('img/gal5.png') }}"
                            class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110 opacity-80 group-hover:opacity-100"
                            alt="Galeri" />
                        <div class="absolute inset-x-0 bottom-0 p-8 bg-gradient-to-t from-black/80 to-transparent">
                            <p class="text-white text-sm font-headline font-bold uppercase tracking-widest mb-2">Fokus
                                Utama</p>
                            <p class="text-white text-lg font-body font-medium leading-relaxed italic">Pancaran Cahaya
                                Abadi</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Immersive Room Section -->
        <section id="immersive-section" class="py-24 px-6 bg-zinc-950 scroll-mt-20 font-body">
            <div class="max-w-7xl mx-auto text-center mb-16 fade-in">
                <h2 class="text-4xl md:text-6xl font-headline text-white mb-6 uppercase tracking-tight italic">Ruang
                    Imersif Kontemplatif</h2>
                <p class="text-white/50 max-w-2xl mx-auto font-light font-body">Masuki ruang di mana batas antara masa
                    lalu dan masa depan memudar melalui visualisasi digital interaktif relief Karmawibhangga.</p>
            </div>
            <div class="max-w-6xl mx-auto relative group fade-in">
                <div
                    class="aspect-video overflow-hidden rounded-none border border-white/10 relative shadow-[0_0_50px_rgba(245,158,11,0.1)]">
                    <video src="{{ asset('video/kondemplatif.mp4') }}"
                        class="w-full h-full object-cover opacity-80 group-hover:scale-105 transition-transform duration-1000"
                        autoplay loop muted playsinline></video>
                    <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
                        <button
                            class="w-20 h-20 bg-amber-500 rounded-none flex items-center justify-center text-black hover:scale-110 transition-transform shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                viewBox="0 0 24 24" fill="currentColor" stroke="none">
                                <polygon points="5 3 19 12 5 21 5 3" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-24 px-6 bg-amber-500 text-black text-center relative overflow-hidden font-body fade-in">
            <div class="max-w-4xl mx-auto relative z-10">
                <h2 class="text-4xl md:text-6xl font-headline mb-8 leading-tight italic uppercase">"Temukan apa yang
                    tersembunyi, <br /> rasakan apa yang tak terlihat."</h2>
                <button
                    class="px-10 py-4 bg-black text-white font-bold tracking-widest hover:bg-zinc-800 transition-all rounded-none uppercase shadow-2xl font-body">Daftar
                    Presale Tiket</button>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-zinc-950 pt-24 pb-12 px-6 border-t border-white/5 font-body">
        <div class="max-w-7xl mx-auto grid md:grid-cols-4 gap-12 mb-16 fade-in">
            <div class="col-span-2">
                <div class="flex items-center mb-6"><span
                        class="text-2xl font-headline font-bold tracking-[0.1em] text-white">Unseen Java</span></div>
                <p class="text-white/50 max-w-sm mb-8 leading-relaxed font-light font-body">Mengungkap lapisan
                    tersembunyi warisan budaya Jawa melalui perpaduan seni, spiritualitas, dan teknologi masa depan.</p>
            </div>
            <div>
                <h4 class="text-white font-bold mb-6 tracking-widest text-sm uppercase font-body">Tautan Cepat</h4>
                <ul class="space-y-4 text-white/40 text-sm font-light font-body">
                    <li><a href="#" class="hover:text-amber-400 transition-colors font-body">Tentang Kami</a>
                    </li>
                    <li><a href="#" class="hover:text-amber-400 transition-colors font-body">Arsip Relief</a>
                    </li>
                    <li><a href="#" class="hover:text-amber-400 transition-colors font-body">Tiket Online</a>
                    </li>
                    <li><a href="#" class="hover:text-amber-400 transition-colors font-body">Kebijakan
                            Privasi</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-bold mb-6 tracking-widest text-sm uppercase font-body">Buletin</h4>
                <div class="flex gap-2">
                    <input type="email" placeholder="Email anda"
                        class="bg-white/5 border border-white/10 px-4 py-2 text-white text-sm focus:outline-none focus:border-amber-500 w-full rounded-none font-light font-body" />
                    <button
                        class="bg-amber-500 text-black px-4 py-2 text-xs font-bold hover:bg-amber-400 transition-colors rounded-none uppercase shadow-md font-body">Kirim</button>
                </div>
            </div>
        </div>
        <div
            class="max-w-7xl mx-auto pt-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-4 text-[10px] tracking-widest uppercase font-medium text-white/20 font-body">
            <p>© 2026 UNSEEN JAVA. HAK CIPTA DILINDUNGI.</p>
            <p>DIBUAT DENGAN JIWA DI INDONESIA</p>
        </div>
    </footer>

    <script>
        // Navbar Scroll Effect
        window.addEventListener('scroll', () => {
            const nav = document.getElementById('navbar');
            if (window.scrollY > 50) {
                nav.classList.replace('bg-transparent', 'bg-black/80');
                nav.classList.add('backdrop-blur-md');
            } else {
                nav.classList.replace('bg-black/80', 'bg-transparent');
                nav.classList.remove('backdrop-blur-md');
            }
        });

        // Mobile Menu Toggle
        const menuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Intersection Observer for Animations
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-in, .slide-left, .slide-right').forEach(el => {
            observer.observe(el);
        });
    </script>
</body>

</html>
