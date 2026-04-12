<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Unseen Java | Immersive Room</title>
    <meta name="description"
        content="Unseen Java adalah pengalaman Immersive Room audiovisual yang menempatkan pengunjung di pusat pertunjukan visual skala besar.">

    <link rel="icon" type="image/x-icon" href="{{ asset('unseenjava.svg') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;700;800&family=Manrope:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        gold: {
                            100: '#f7e8b1',
                            300: '#e4c76a',
                            500: '#d4af37',
                            700: '#9f7f20'
                        },
                        ink: '#0a0a0a',
                        ivory: '#fffdf7'
                    },
                    fontFamily: {
                        title: ['Cinzel', 'serif'],
                        body: ['Manrope', 'sans-serif']
                    }
                }
            }
        };
    </script>

    <style>
        html {
            scroll-behavior: smooth;
        }

        .reveal {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.9s ease, transform 0.9s ease;
        }

        .reveal.show {
            opacity: 1;
            transform: translateY(0);
        }

        .hero-overlay {
            background:
                radial-gradient(circle at 20% 20%, rgba(212, 175, 55, 0.28), transparent 45%),
                linear-gradient(180deg, rgba(0, 0, 0, 0.45) 0%, rgba(0, 0, 0, 0.72) 100%);
        }

        .parallax-layer {
            will-change: transform;
            transform: translate3d(0, 0, 0);
        }

        .hero-image {
            animation: heroPulse 12s ease-in-out infinite alternate;
            transform-origin: center center;
        }

        @keyframes heroPulse {
            from {
                transform: scale(1.02);
            }

            to {
                transform: scale(1.08);
            }
        }

        @media (prefers-reduced-motion: reduce) {

            .reveal,
            .parallax-layer,
            .hero-image {
                transition: none !important;
                animation: none !important;
                transform: none !important;
            }
        }
    </style>
</head>

<body class="font-body bg-ivory text-ink overflow-x-hidden">
    <header class="relative w-screen min-h-screen text-white">
        <img src="https://images.unsplash.com/photo-1609334761849-77e99a82557d?auto=format&fit=crop&w=2200&q=80"
            alt="Ruang immersive bertema candi"
            class="absolute inset-0 h-full w-full object-cover parallax-layer hero-image" data-parallax-speed="0.22">
        <div class="hero-overlay absolute inset-0 parallax-layer" data-parallax-speed="0.1"></div>

        <nav class="fixed top-0 left-0 right-0 z-50 bg-black/35 backdrop-blur-sm border-b border-gold-500/25">
            <div class="max-w-7xl mx-auto px-6 lg:px-10 py-5 flex items-center justify-between">
                <h1 class="font-title text-xl md:text-2xl tracking-wide text-gold-300">Unseen Java</h1>
                <div class="hidden md:flex items-center gap-6 text-sm">
                    <a href="#about" class="hover:text-gold-300 transition">About Us</a>
                    <a href="#incoming" class="hover:text-gold-300 transition">Incoming Event</a>
                    <a href="#galeri" class="hover:text-gold-300 transition">Galeri</a>
                    <a href="#social" class="hover:text-gold-300 transition">Sosial Media</a>
                </div>
            </div>
        </nav>

        <section class="relative z-10 min-h-screen w-screen px-6 lg:px-10 pt-28 pb-16 flex items-end">
            <div class="max-w-5xl reveal">
                <p class="uppercase tracking-[0.26em] text-xs md:text-sm text-gold-100 mb-4">Immersive Room Experience
                </p>
                <h2 class="font-title text-4xl md:text-7xl leading-tight text-gold-300">
                    Visual Spektakuler.
                    Ruang Total.
                    Sensasi Menyeluruh.
                </h2>
                <p class="mt-6 text-white/85 max-w-2xl text-base md:text-lg leading-relaxed">
                    Unseen Java dirancang untuk pengalaman imersif penuh: proyeksi dinding-ke-langit-langit,
                    sound system sinematik, serta transisi visual masif yang membuat pengunjung menjadi bagian dari
                    pertunjukan.
                </p>
                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="#incoming"
                        class="bg-gold-500 text-ink font-semibold px-7 py-3 rounded-full hover:bg-gold-300 transition">Pesan
                        Tiket Event</a>
                    <a href="#galeri"
                        class="border border-gold-300 text-gold-100 px-7 py-3 rounded-full hover:bg-gold-300/10 transition">Lihat
                        Visual Galeri</a>
                </div>
            </div>
        </section>
    </header>

    <main>
        <section id="about" class="py-16 md:py-24 bg-ink text-white">
            <div class="max-w-7xl mx-auto px-6 lg:px-10">
                <div class="reveal max-w-4xl">
                    <p class="text-sm font-semibold uppercase tracking-[0.22em] text-gold-300">About Us</p>
                    <h3 class="font-title text-3xl md:text-5xl mt-3">Fokus Kami: Pengalaman Immersive Room yang Intens
                    </h3>
                    <p class="mt-6 text-white/80 leading-relaxed text-base md:text-lg">
                        Unseen Java bukan sekadar pameran statis. Setiap event dibangun sebagai perjalanan visual
                        real-time,
                        dengan skala layar besar, tata cahaya dramatis, dan audio yang mengelilingi ruangan.
                        Seluruh desain ruang diarahkan untuk memaksimalkan rasa "masuk ke dalam dunia pertunjukan".
                    </p>
                </div>

                <div class="mt-12 grid md:grid-cols-2 gap-5">
                    <img src="https://images.unsplash.com/photo-1629712499847-57ce7a20f438?auto=format&fit=crop&w=1800&q=80"
                        alt="Proyeksi visual pada relief candi" class="reveal w-full h-[58vh] md:h-[70vh] object-cover">
                    <img src="https://images.unsplash.com/photo-1626594864260-34c95b3f8f28?auto=format&fit=crop&w=1800&q=80"
                        alt="Arca besar sebagai objek visual utama"
                        class="reveal w-full h-[58vh] md:h-[70vh] object-cover">
                </div>
            </div>
        </section>

        <section id="incoming" class="py-16 md:py-24 bg-ivory">
            <div class="max-w-7xl mx-auto px-6 lg:px-10">
                <div class="reveal mb-10">
                    <p class="text-sm font-semibold uppercase tracking-[0.22em] text-gold-700">Incoming Event</p>
                    <h3 class="font-title text-3xl md:text-5xl mt-2">Jadwal Event Berikutnya</h3>
                </div>

                <div class="space-y-8">
                    <article class="reveal relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1548013146-72479768bada?auto=format&fit=crop&w=2200&q=80"
                            alt="Visual event Mandala Pulse"
                            class="w-full h-[62vh] md:h-[74vh] object-cover parallax-layer" data-parallax-speed="0.06">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/30 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-6 md:p-10 text-white max-w-3xl">
                            <h4 class="font-title text-3xl md:text-5xl text-gold-300">Mandala Pulse 360</h4>
                            <p class="mt-3 text-white/85">Tempat: Taman Budaya Yogyakarta</p>
                            <p class="text-white/85">Waktu: 25 Mei 2026, 19:00 WIB</p>
                        </div>
                    </article>

                    <article class="reveal relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1592455095259-8f84e1801fb5?auto=format&fit=crop&w=2200&q=80"
                            alt="Visual event Echo Dome" class="w-full h-[62vh] md:h-[74vh] object-cover parallax-layer"
                            data-parallax-speed="0.06">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/30 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-6 md:p-10 text-white max-w-3xl">
                            <h4 class="font-title text-3xl md:text-5xl text-gold-300">Echo Dome: Prambanan Light</h4>
                            <p class="mt-3 text-white/85">Tempat: Balai Kota Semarang</p>
                            <p class="text-white/85">Waktu: 01 Juni 2026, 20:00 WIB</p>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section id="galeri" class="bg-ink text-white py-16 md:py-24">
            <div class="max-w-7xl mx-auto px-6 lg:px-10">
                <div class="reveal mb-10">
                    <p class="text-sm font-semibold uppercase tracking-[0.22em] text-gold-300">Galeri</p>
                    <h3 class="font-title text-3xl md:text-5xl mt-2">Visual Candi dan Arca Skala Besar</h3>
                </div>

                <div class="grid md:grid-cols-2 gap-5">
                    <img class="reveal w-full h-[72vh] object-cover"
                        src="https://images.unsplash.com/photo-1673701068833-78e8d3f6fbe0?auto=format&fit=crop&w=2000&q=80"
                        alt="Arca batu dengan pencahayaan artistik">
                    <img class="reveal w-full h-[72vh] object-cover"
                        src="https://images.unsplash.com/photo-1668563335681-ef9db1b83959?auto=format&fit=crop&w=2000&q=80"
                        alt="Dinding relief candi dalam pencahayaan dramatis">
                    <img class="reveal w-full h-[72vh] object-cover md:col-span-2"
                        src="https://images.unsplash.com/photo-1609334761849-77e99a82557d?auto=format&fit=crop&w=2500&q=80"
                        alt="Immersive room bertema candi dengan atmosfer sinematik">
                </div>

                <div class="reveal mt-16 mb-8">
                    <p class="text-sm font-semibold uppercase tracking-[0.22em] text-gold-300">Galeri Event Terdahulu
                    </p>
                    <h4 class="font-title text-3xl md:text-5xl mt-2">Event yang Sudah Terlaksana</h4>
                </div>

                <div class="space-y-10">
                    <article class="reveal grid lg:grid-cols-5 gap-0 border border-gold-500/30 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1545261053-8f0a74f0f8a2?auto=format&fit=crop&w=1900&q=80"
                            alt="Event Dawn of Light"
                            class="lg:col-span-3 w-full h-[52vh] md:h-[65vh] object-cover parallax-layer"
                            data-parallax-speed="0.05">
                        <div class="lg:col-span-2 p-6 md:p-10 bg-black/45">
                            <h5 class="font-title text-3xl text-gold-300">Dawn of Light</h5>
                            <p class="mt-5 text-white/80">Tempat: Gedung Kesenian Jakarta</p>
                            <p class="text-white/80">Waktu: 18 Januari 2026, 19:30 WIB</p>
                        </div>
                    </article>

                    <article class="reveal grid lg:grid-cols-5 gap-0 border border-gold-500/30 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1506973035872-a4ec16b8d4d9?auto=format&fit=crop&w=1900&q=80"
                            alt="Event Shadow of Java"
                            class="lg:col-span-3 w-full h-[52vh] md:h-[65vh] object-cover parallax-layer"
                            data-parallax-speed="0.05">
                        <div class="lg:col-span-2 p-6 md:p-10 bg-black/45">
                            <h5 class="font-title text-3xl text-gold-300">Shadow of Java</h5>
                            <p class="mt-5 text-white/80">Tempat: Creative Hub Bandung</p>
                            <p class="text-white/80">Waktu: 07 Februari 2026, 20:00 WIB</p>
                        </div>
                    </article>

                    <article class="reveal grid lg:grid-cols-5 gap-0 border border-gold-500/30 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1612866450401-cf2eb4f1761d?auto=format&fit=crop&w=1900&q=80"
                            alt="Event Temple Pulse"
                            class="lg:col-span-3 w-full h-[52vh] md:h-[65vh] object-cover parallax-layer"
                            data-parallax-speed="0.05">
                        <div class="lg:col-span-2 p-6 md:p-10 bg-black/45">
                            <h5 class="font-title text-3xl text-gold-300">Temple Pulse</h5>
                            <p class="mt-5 text-white/80">Tempat: Convention Hall Surabaya</p>
                            <p class="text-white/80">Waktu: 23 Maret 2026, 18:45 WIB</p>
                        </div>
                    </article>
                </div>
            </div>
        </section>
    </main>

    <footer id="social" class="bg-ivory py-14 md:py-16 border-t border-black/10">
        <div class="max-w-7xl mx-auto px-6 lg:px-10">
            <div class="reveal flex flex-col md:flex-row md:items-center md:justify-between gap-6">
                <div>
                    <h4 class="font-title text-2xl md:text-3xl text-gold-700">Sosial Media</h4>
                    <p class="mt-2 text-zinc-700">Ikuti update jadwal immersive room terbaru dari Unseen Java.</p>
                </div>
                <div class="flex flex-wrap gap-3 text-sm">
                    <a href="#"
                        class="px-5 py-2.5 rounded-full border border-gold-700 text-gold-700 hover:bg-gold-500 hover:text-ink transition">Instagram</a>
                    <a href="#"
                        class="px-5 py-2.5 rounded-full border border-gold-700 text-gold-700 hover:bg-gold-500 hover:text-ink transition">TikTok</a>
                    <a href="#"
                        class="px-5 py-2.5 rounded-full border border-gold-700 text-gold-700 hover:bg-gold-500 hover:text-ink transition">YouTube</a>
                    <a href="#"
                        class="px-5 py-2.5 rounded-full border border-gold-700 text-gold-700 hover:bg-gold-500 hover:text-ink transition">X
                        / Twitter</a>
                </div>
            </div>
            <p class="reveal text-xs text-zinc-500 mt-8">&copy; {{ date('Y') }} Unseen Java. All rights reserved.
            </p>
        </div>
    </footer>

    <script>
        const revealElements = document.querySelectorAll('.reveal');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('show');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.15
        });

        revealElements.forEach((element) => observer.observe(element));

        const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        if (!prefersReducedMotion) {
            const parallaxElements = document.querySelectorAll('[data-parallax-speed]');
            let ticking = false;

            const updateParallax = () => {
                const scrollY = window.scrollY;
                parallaxElements.forEach((element) => {
                    const speed = parseFloat(element.dataset.parallaxSpeed || '0');
                    const y = scrollY * speed;
                    element.style.transform = `translate3d(0, ${y}px, 0)`;
                });
                ticking = false;
            };

            window.addEventListener('scroll', () => {
                if (!ticking) {
                    window.requestAnimationFrame(updateParallax);
                    ticking = true;
                }
            }, {
                passive: true
            });

            updateParallax();
        }
    </script>
</body>

</html>
