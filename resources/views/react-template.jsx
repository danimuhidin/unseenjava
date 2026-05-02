react
import React, { useState, useEffect, useRef } from 'react';
import { motion, AnimatePresence } from 'framer-motion';
import { 
  Menu, X, Play, 
  ChevronRight, Info, Eye, Leaf, Compass,
  Instagram, Facebook, Twitter, Mail, ArrowUpRight,
  User, Globe, ChevronDown
} from 'lucide-react';

// --- Aset & Data ---
const IMAGES = {
  hero: "https://images.unsplash.com/photo-1588668214407-6ea9a6d8c272?auto=format&fit=crop&q=80&w=2000",
  borobudurClose: "https://images.unsplash.com/photo-1510074377623-8cf13fb86c08?auto=format&fit=crop&q=80&w=1000",
  immersive: "https://images.unsplash.com/photo-1492684223066-81342ee5ff30?auto=format&fit=crop&q=80&w=1200",
  maestro: "Gemini_Generated_Image_8e3wf28e3wf28e3w.jpg",
  gal1: "https://images.unsplash.com/photo-1518998053574-53ee796d9ecb?auto=format&fit=crop&q=80&w=800",
  gal2: "https://images.unsplash.com/photo-1550684848-fac1c5b4e853?auto=format&fit=crop&q=80&w=800",
  gal3: "https://images.unsplash.com/photo-1550745165-9bc0b252726f?auto=format&fit=crop&q=80&w=800",
  gal4: "https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&q=80&w=800",
  gal5: "https://images.unsplash.com/photo-1533134486753-c833f0ed4866?auto=format&fit=crop&q=80&w=1000",
};

const FEATURES = [
  {
    icon: <Compass className="w-6 h-6 text-amber-400" />,
    title: "Dimensi Spiritual",
    desc: "Menjelajahi makna tersembunyi di balik relief Karmawibhangga sebagai panduan moral dan spiritual."
  },
  {
    icon: <Leaf className="w-6 h-6 text-amber-400" />,
    title: "Kesadaran Ekologis",
    desc: "Harmonisasi antara pelestarian budaya dan keberlanjutan lingkungan masa depan."
  },
  {
    icon: <Eye className="w-6 h-6 text-amber-400" />,
    title: "Imersi Visual",
    desc: "Teknologi digital yang menghidupkan kembali relief yang tertutup di kaki Candi Borobudur."
  },
  {
    icon: <Info className="w-6 h-6 text-amber-400" />,
    title: "Pedagogi O-C-E",
    desc: "Metode pembelajaran terstruktur yang menggabungkan Observasi, Kontemplasi, dan Edukasi."
  }
];

const GALLERY_ITEMS = [
  { title: "Pameran Galeri Relik Karmawibhangga", img: IMAGES.gal1, type: "image" },
  { title: "Menjelajahi titik kecil penglihatan nexus", img: IMAGES.gal2, type: "image" },
  { title: "Elemen Kehidupan", img: IMAGES.gal4, type: "image" },
  { title: "Titik Kecil Yang Sangat Luas", img: IMAGES.gal3, type: "video" },
  { title: "Pancaran Cahaya Abadi", img: IMAGES.gal5, type: "image", isLarge: true }
];

// --- Komponen ---

const Navbar = ({ activeSection }) => {
  const [scrolled, setScrolled] = useState(false);
  const [isOpen, setIsOpen] = useState(false);
  const [lang, setLang] = useState('ID');

  useEffect(() => {
    const handleScroll = () => setScrolled(window.scrollY > 50);
    window.addEventListener('scroll', handleScroll);
    return () => window.removeEventListener('scroll', handleScroll);
  }, []);

  const menuItems = [
    { 
      id: 'konsep-section', 
      label: 'Konsep',
      dropdown: ['Tentang']
    },
    { 
      id: 'gallery-section', 
      label: 'Gallery',
      dropdown: ['Event', 'Exibision']
    },
    { 
      id: 'immersive-section', 
      label: 'Now Event' 
    }
  ];

  return (
    <nav className={`fixed w-full z-50 transition-all duration-500 ${scrolled ? 'bg-black/80 backdrop-blur-md py-4' : 'bg-transparent py-6'}`}>
      <div className="max-w-7xl mx-auto px-6 flex justify-between items-center">
        <div className="flex items-center">
          <a href="#hero-section" className="relative group">
            <span className={`text-xl font-headline font-bold tracking-[0.1em] transition-colors duration-500 ${activeSection === 'hero-section' ? 'text-amber-400' : 'text-white'}`}>
              Unseen Java
            </span>
            <span className={`absolute -bottom-1 left-0 w-full h-[1px] bg-amber-400 transition-transform duration-500 origin-left ${activeSection === 'hero-section' ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100'}`}></span>
          </a>
        </div>
        
        <div className="hidden md:flex items-center gap-10 text-sm font-medium tracking-widest text-white/70 font-body">
          {menuItems.map((item) => (
            <div key={item.id} className="relative group">
              <a 
                href={`#${item.id}`} 
                className={`flex items-center gap-1 transition-all duration-300 uppercase relative ${activeSection === item.id ? 'text-amber-400' : 'hover:text-amber-400'}`}
              >
                {item.label}
                {item.dropdown && <ChevronDown size={14} className="group-hover:rotate-180 transition-transform duration-300" />}
                <span className={`absolute -bottom-1 left-0 w-full h-[1px] bg-amber-400 transition-transform duration-300 origin-left ${activeSection === item.id ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100'}`}></span>
              </a>

              {/* Dropdown Menu */}
              {item.dropdown && (
                <div className="absolute top-full left-0 mt-4 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">
                  <div className="bg-zinc-900/95 border border-white/10 p-2 min-w-[160px] shadow-2xl backdrop-blur-md rounded-none">
                    {item.dropdown.map((sub, idx) => (
                      <a 
                        key={idx} 
                        href="#" 
                        className="block px-4 py-2 text-xs font-bold text-white/60 hover:text-amber-400 hover:bg-white/5 transition-all uppercase tracking-widest"
                      >
                        {sub}
                      </a>
                    ))}
                  </div>
                </div>
              )}
            </div>
          ))}
          
          <div className="flex items-center gap-6 ml-4 border-l border-white/10 pl-8 font-body">
            <div className="flex items-center gap-2 text-[10px] font-bold tracking-widest text-white/30">
              <button onClick={() => setLang('EN')} className={`hover:text-amber-400 transition-colors ${lang === 'EN' ? 'text-amber-400' : ''}`}>EN</button>
              <span className="text-white/10">|</span>
              <button onClick={() => setLang('ID')} className={`hover:text-amber-400 transition-colors ${lang === 'ID' ? 'text-amber-400' : ''}`}>ID</button>
            </div>
            <button className="flex items-center gap-2 px-5 py-2 border border-amber-500/30 rounded-none text-amber-400 hover:bg-amber-500 hover:text-black transition-all duration-300 text-xs font-bold uppercase">
              <User size={14} />
              Login
            </button>
          </div>
        </div>

        <button className="md:hidden text-white" onClick={() => setIsOpen(!isOpen)}>
          {isOpen ? <X /> : <Menu />}
        </button>
      </div>

      {/* Mobile Menu */}
      <AnimatePresence>
        {isOpen && (
          <motion.div initial={{ opacity: 0, y: -20 }} animate={{ opacity: 1, y: 0 }} exit={{ opacity: 0, y: -20 }} className="absolute top-full left-0 w-full bg-black border-t border-white/10 p-6 md:hidden">
            <div className="flex flex-col gap-4 text-center items-center font-body">
              {menuItems.map((item) => (
                <div key={item.id} className="w-full">
                  <a key={item.id} href={`#${item.id}`} onClick={() => setIsOpen(false)} className={`py-2 block tracking-widest uppercase font-medium transition-colors ${activeSection === item.id ? 'text-amber-400' : 'text-white'}`}>{item.label}</a>
                  {item.dropdown && (
                    <div className="flex flex-wrap justify-center gap-4 mt-1 mb-4 opacity-60">
                      {item.dropdown.map((sub, idx) => (
                        <a key={idx} href="#" onClick={() => setIsOpen(false)} className="text-[10px] font-bold tracking-[0.2em] uppercase text-white hover:text-amber-400">{sub}</a>
                      ))}
                    </div>
                  )}
                </div>
              ))}
              <div className="flex items-center gap-4 py-4 border-t border-white/5 w-full justify-center">
                <button onClick={() => setLang('EN')} className={`text-xs font-bold tracking-widest ${lang === 'EN' ? 'text-amber-400' : 'text-white/40'}`}>ENGLISH</button>
                <span className="text-white/10">|</span>
                <button onClick={() => setLang('ID')} className={`text-xs font-bold tracking-widest ${lang === 'ID' ? 'text-amber-400' : 'text-white/40'}`}>INDONESIA</button>
              </div>
              <button className="w-full max-w-[200px] mt-2 flex items-center justify-center gap-2 px-5 py-3 border border-amber-500 text-amber-400 rounded-none text-xs font-bold tracking-widest uppercase"><User size={16} /> Login</button>
            </div>
          </motion.div>
        )}
      </AnimatePresence>
    </nav>
  );
};

const Hero = () => (
  <section id="hero-section" className="relative h-screen flex items-center justify-center overflow-hidden">
    <div className="absolute inset-0 z-0">
      <img src={IMAGES.hero} className="w-full h-full object-cover opacity-70 scale-100" alt="Candi Borobudur" />
      <div className="absolute inset-0 bg-gradient-to-b from-black/70 via-black/30 to-black"></div>
    </div>
    <div className="relative z-10 text-center px-6 max-w-4xl">
      <motion.p initial={{ opacity: 0, y: 20 }} animate={{ opacity: 1, y: 0 }} className="text-amber-400 font-medium tracking-[0.5em] text-xs md:text-sm mb-4 uppercase font-body">Spiritual - Ekologis - Masa Depan</motion.p>
      <motion.h1 initial={{ opacity: 0, y: 20 }} animate={{ opacity: 1, y: 0 }} transition={{ delay: 0.2 }} className="text-5xl md:text-8xl font-headline text-white mb-8 leading-tight lowercase">unseen java <br /><span className="text-transparent bg-clip-text bg-gradient-to-r from-amber-200 to-amber-600 uppercase">KARMAWIBHANGGA</span></motion.h1>
      <motion.div initial={{ opacity: 0 }} animate={{ opacity: 1 }} transition={{ delay: 0.5 }}>
        <a href="#immersive-section" className="inline-block px-8 py-4 bg-amber-500 text-black font-bold tracking-widest text-xs hover:bg-amber-400 transition-all rounded-none uppercase font-body shadow-lg">Now Event</a>
      </motion.div>
    </div>
    <div className="absolute bottom-10 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 font-body">
      <div className="w-[1px] h-12 bg-gradient-to-b from-transparent to-amber-400"></div>
      <span className="text-[10px] text-amber-400 tracking-widest uppercase font-medium" style={{ writingMode: 'vertical-rl' }}>GULIR</span>
    </div>
  </section>
);

const MaestroSection = () => (
  <section id="maestro-section" className="py-24 px-6 bg-black border-y border-white/5 overflow-hidden scroll-mt-20">
    <div className="max-w-7xl mx-auto grid md:grid-cols-2 gap-16 items-stretch">
      <motion.div className="relative order-2 md:order-1 h-full" initial={{ opacity: 0, scale: 0.9 }} whileInView={{ opacity: 1, scale: 1 }} viewport={{ once: true }}>
        <div className="h-full overflow-hidden border border-white/10 grayscale hover:grayscale-0 transition-all duration-1000">
          <img src={IMAGES.maestro} className="w-full h-full object-cover" alt="Kreativitas Modern Maestro" onError={(e) => { e.target.src = "https://images.unsplash.com/photo-1558591710-4b4a1ae0f04d?auto=format&fit=crop&q=80&w=1000"; }} />
        </div>
        <div className="absolute -top-4 -left-4 w-12 h-12 border-t-2 border-l-2 border-amber-500"></div>
      </motion.div>
      <motion.div className="order-1 md:order-2 flex flex-col justify-center" initial={{ opacity: 0, x: 50 }} whileInView={{ opacity: 1, x: 0 }} viewport={{ once: true }}>
        <h2 className="text-3xl md:text-5xl font-headline text-amber-500 mb-8 leading-tight italic uppercase">Apa yang akan diciptakan para maestro besar jika mereka memiliki akses ke peralatan modern?</h2>
        <div className="space-y-6">
          <p className="text-white/70 leading-relaxed font-body font-light text-lg">Sosok kreatif di balik proyek ini Hendy Hertiasa (Selaku Dosen dari Desain Komunikasi Visual FSRDITB) sebagai konseptor.</p>
          <p className="text-white/70 leading-relaxed font-body font-light text-lg">Serta dukungan dan inisiator Dewi Gontha (Presiden Direktur Java Festival Production), lahirlah sebuah gagasan <span className="text-amber-400 font-headline">“Unseen Java: Karmawibhangga”</span>, paviliun imersif kontemplatif di Java Jazz Festival 2026, yang menampilkan tontonan film animasi & Motion graphic AI dikolaborasikan dengan pertunjukan musik, dance dan yoga.</p>
        </div>
        <motion.button className="mt-12 group self-start flex items-center gap-4 px-8 py-4 border border-amber-500 text-amber-500 font-bold tracking-widest text-xs hover:bg-amber-500 hover:text-black transition-all rounded-none uppercase font-body" whileHover={{ x: 10 }}>Temukan Eksibisi Kami <ArrowUpRight size={16} className="group-hover:rotate-45 transition-transform" /></motion.button>
      </motion.div>
    </div>
  </section>
);

const Introduction = () => (
  <section id="konsep-section" className="py-24 px-6 bg-black scroll-mt-20">
    <div className="max-w-7xl mx-auto grid md:grid-cols-2 gap-16 items-center">
      <motion.div initial={{ opacity: 0, x: -30 }} whileInView={{ opacity: 1, x: 0 }} viewport={{ once: true }}>
        <h2 className="text-3xl md:text-5xl font-headline text-white mb-8 leading-tight italic uppercase font-headline italic">Trilogi Pedagogis <br /><span className="text-amber-500 not-italic">dalam kerangka O-C-E</span></h2>
        <p className="text-white/60 leading-relaxed mb-8 text-lg font-light font-body">"Bertahan abad lamanya, 160 relief Karmawibhangga tersembunyi di kaki candi Borobudur hingga kini."</p>
        <div className="grid grid-cols-2 gap-6 font-body">
          {FEATURES.map((f, i) => (
            <div key={i} className="p-6 border border-white/5 bg-white/5 hover:bg-white/10 transition-all group rounded-none">
              <div className="mb-4">{f.icon}</div>
              <h3 className="text-white font-bold mb-2 text-sm uppercase tracking-wider font-headline">{f.title}</h3>
              <p className="text-white/40 text-xs leading-relaxed">{f.desc}</p>
            </div>
          ))}
        </div>
      </motion.div>
      <motion.div className="relative" initial={{ opacity: 0, x: 30 }} whileInView={{ opacity: 1, x: 0 }} viewport={{ once: true }}>
        <div className="aspect-[4/5] overflow-hidden rounded-none border border-white/10 shadow-2xl">
          <img src={IMAGES.borobudurClose} className="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-1000" alt="Detail Relief" />
        </div>
        <div className="absolute -bottom-8 -left-8 p-8 bg-amber-500 text-black max-w-xs rounded-none shadow-2xl hidden lg:block font-body">
          <p className="text-sm font-medium italic font-body">"Seni adalah jendela menuju pemahaman ekologis masa lalu untuk masa depan."</p>
        </div>
      </motion.div>
    </div>
  </section>
);

const GallerySection = () => {
  const smallItems = GALLERY_ITEMS.filter(item => !item.isLarge);
  const largeItem = GALLERY_ITEMS.find(item => item.isLarge);
  return (
    <section id="gallery-section" className="bg-black py-24 scroll-mt-20">
      <div className="max-w-[1400px] mx-auto px-6 mb-12">
        <div className="text-center md:text-left">
          <h2 className="text-5xl md:text-7xl font-headline text-amber-500 uppercase tracking-tight mb-4 italic">Gallery</h2>
          <div className="w-20 h-[2px] bg-amber-500 mx-auto md:mx-0"></div>
        </div>
      </div>
      <div className="grid grid-cols-1 md:grid-cols-3 w-full border-y border-white/10">
        <div className="md:col-span-2 grid grid-cols-1 sm:grid-cols-2 border-r border-white/10">
          {smallItems.map((item, i) => (
            <motion.div key={i} className="relative aspect-square group overflow-hidden cursor-pointer border-b border-white/10 sm:border-r last:sm:border-r-0 even:sm:border-r-0 border-white/10" initial={{ opacity: 0 }} whileInView={{ opacity: 1 }} viewport={{ once: true }} transition={{ delay: i * 0.1 }}>
              <img src={item.img} className="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110 opacity-70 group-hover:opacity-100" alt={item.title} />
              {item.type === 'video' && (
                <div className="absolute inset-0 flex items-center justify-center">
                  <div className="w-16 h-16 bg-white/20 backdrop-blur-md rounded-none flex items-center justify-center text-white border border-white/30 group-hover:scale-110 transition-transform">
                    <Play fill="currentColor" size={24} className="ml-1" />
                  </div>
                </div>
              )}
              <div className="absolute inset-x-0 bottom-0 p-6 bg-gradient-to-t from-black/80 to-transparent">
                <p className="text-white text-xs font-body font-medium leading-relaxed max-w-[200px]">{item.title}</p>
              </div>
              <div className="absolute inset-0 border-2 border-amber-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
            </motion.div>
          ))}
        </div>
        <div className="md:col-span-1 h-full">
          {largeItem && (
            <motion.div className="relative h-full min-h-[500px] group overflow-hidden cursor-pointer" initial={{ opacity: 0 }} whileInView={{ opacity: 1 }} viewport={{ once: true }} transition={{ delay: 0.4 }}>
              <img src={largeItem.img} className="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110 opacity-80 group-hover:opacity-100" alt={largeItem.title} />
              <div className="absolute inset-x-0 bottom-0 p-8 bg-gradient-to-t from-black/80 to-transparent">
                <p className="text-white text-sm font-headline font-bold uppercase tracking-widest mb-2">Fokus Utama</p>
                <p className="text-white text-lg font-body font-medium leading-relaxed italic">{largeItem.title}</p>
              </div>
              <div className="absolute inset-0 border-4 border-amber-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
            </motion.div>
          )}
        </div>
      </div>
    </section>
  );
};

const ImmersiveRoom = () => (
  <section id="immersive-section" className="py-24 px-6 bg-zinc-950 scroll-mt-20 font-body">
    <div className="max-w-7xl mx-auto text-center mb-16">
      <h2 className="text-4xl md:text-6xl font-headline text-white mb-6 uppercase tracking-tight italic">Ruang Imersif Kontemplatif</h2>
      <p className="text-white/50 max-w-2xl mx-auto font-light font-body">Masuki ruang di mana batas antara masa lalu dan masa depan memudar melalui visualisasi digital interaktif relief Karmawibhangga.</p>
    </div>
    <motion.div className="max-w-6xl mx-auto relative group" initial={{ opacity: 0, scale: 0.95 }} whileInView={{ opacity: 1, scale: 1 }} viewport={{ once: true }}>
      <div className="aspect-video overflow-hidden rounded-none border border-white/10 relative shadow-[0_0_50px_rgba(245,158,11,0.1)]">
        <img src={IMAGES.immersive} className="w-full h-full object-cover opacity-80 group-hover:scale-105 transition-transform duration-1000" alt="Ruang Imersif" />
        <div className="absolute inset-0 bg-black/40 flex items-center justify-center">
          <button className="w-20 h-20 bg-amber-500 rounded-none flex items-center justify-center text-black hover:scale-110 transition-transform shadow-lg"><Play fill="currentColor" size={32} className="ml-1" /></button>
        </div>
      </div>
    </motion.div>
  </section>
);

const Footer = () => (
  <footer className="bg-zinc-950 pt-24 pb-12 px-6 border-t border-white/5 font-body">
    <div className="max-w-7xl mx-auto grid md:grid-cols-4 gap-12 mb-16">
      <div className="col-span-2">
        <div className="flex items-center mb-6"><span className="text-2xl font-headline font-bold tracking-[0.1em] text-white">Unseen Java</span></div>
        <p className="text-white/50 max-w-sm mb-8 leading-relaxed font-light font-body">Mengungkap lapisan tersembunyi warisan budaya Jawa melalui perpaduan seni, spiritualitas, dan teknologi masa depan.</p>
        <div className="flex gap-4">
          {[Instagram, Facebook, Twitter, Mail].map((Icon, i) => (
            <a key={i} href="#" className="w-10 h-10 border border-white/10 rounded-none flex items-center justify-center text-white/50 hover:bg-amber-500 hover:text-black transition-all shadow-none"><Icon size={18} /></a>
          ))}
        </div>
      </div>
      <div>
        <h4 className="text-white font-bold mb-6 tracking-widest text-sm uppercase font-body">Tautan Cepat</h4>
        <ul className="space-y-4 text-white/40 text-sm font-light font-body">
          <li><a href="#" className="hover:text-amber-400 transition-colors font-body">Tentang Kami</a></li>
          <li><a href="#" className="hover:text-amber-400 transition-colors font-body">Arsip Relief</a></li>
          <li><a href="#" className="hover:text-amber-400 transition-colors font-body">Tiket Online</a></li>
          <li><a href="#" className="hover:text-amber-400 transition-colors font-body">Kebijakan Privasi</a></li>
        </ul>
      </div>
      <div>
        <h4 className="text-white font-bold mb-6 tracking-widest text-sm uppercase font-body">Buletin</h4>
        <div className="flex gap-2">
          <input type="email" placeholder="Email anda" className="bg-white/5 border border-white/10 px-4 py-2 text-white text-sm focus:outline-none focus:border-amber-500 w-full rounded-none font-light font-body" />
          <button className="bg-amber-500 text-black px-4 py-2 text-xs font-bold hover:bg-amber-400 transition-colors rounded-none uppercase shadow-md font-body">Kirim</button>
        </div>
      </div>
    </div>
    <div className="max-w-7xl mx-auto pt-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-4 text-[10px] tracking-widest uppercase font-medium text-white/20 font-body">
      <p>© 2024 UNSEEN JAVA. HAK CIPTA DILINDUNGI.</p>
      <p>DIBUAT DENGAN JIWA DI INDONESIA</p>
    </div>
  </footer>
);

export default function App() {
  const [activeSection, setActiveSection] = useState("");
  useEffect(() => {
    const observerOptions = { root: null, rootMargin: "-20% 0px -70% 0px", threshold: 0 };
    const handleIntersect = (entries) => {
      entries.forEach((entry) => { if (entry.isIntersecting) setActiveSection(entry.target.id); });
    };
    const observer = new IntersectionObserver(handleIntersect, observerOptions);
    ["hero-section", "maestro-section", "konsep-section", "gallery-section", "immersive-section"].forEach(id => {
      const el = document.getElementById(id);
      if (el) observer.observe(el);
    });
    return () => observer.disconnect();
  }, []);
  return (
    <div className="bg-black text-white selection:bg-amber-500 selection:text-black scroll-smooth">
      <style>
        {`
          @import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700;800;900&display=swap');
          :root { --font-headline: 'Cinzel', serif; --font-body: 'Helvetica Neue', Helvetica, Arial, sans-serif; }
          body { font-family: var(--font-body); -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; }
          .font-headline { font-family: var(--font-headline); }
          .font-body { font-family: var(--font-body); }
        `}
      </style>
      <Navbar activeSection={activeSection} />
      <main>
        <Hero />
        <MaestroSection />
        <Introduction />
        <GallerySection />
        <ImmersiveRoom />
        <section className="py-24 px-6 bg-amber-500 text-black text-center relative overflow-hidden font-body">
          <div className="absolute inset-0 opacity-10 pointer-events-none">
             <div className="w-full h-full flex flex-wrap opacity-20">
                {Array.from({length: 20}).map((_, i) => (
                  <div key={i} className="w-32 h-32 border border-black/20 transform rotate-45 m-4"></div>
                ))}
             </div>
          </div>
          <div className="max-w-4xl mx-auto relative z-10">
            <h2 className="text-4xl md:text-6xl font-headline mb-8 leading-tight italic uppercase italic">"Temukan apa yang tersembunyi, <br /> rasakan apa yang tak terlihat."</h2>
            <button className="px-10 py-4 bg-black text-white font-bold tracking-widest hover:bg-zinc-800 transition-all rounded-none uppercase shadow-2xl font-body">Daftar Presale Tiket</button>
          </div>
        </section>
      </main>
      <Footer />
    </div>
  );
}