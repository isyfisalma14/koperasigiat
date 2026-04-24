<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@700;800&amp;family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "primary-fixed-dim": "#ffb4a8",
                        "surface-container-lowest": "#ffffff",
                        "surface-container-high": "#e9e8e5",
                        "on-primary-fixed": "#410000",
                        "primary-fixed": "#ffdad4",
                        "surface-dim": "#dbdad7",
                        "secondary": "#96473b",
                        "secondary-container": "#ff9b8c",
                        "on-primary": "#ffffff",
                        "inverse-primary": "#ffb4a8",
                        "on-error-container": "#93000a",
                        "background": "#faf9f6",
                        "on-error": "#ffffff",
                        "surface": "#faf9f6",
                        "surface-container-highest": "#e3e2e0",
                        "tertiary-container": "#0021b9",
                        "on-tertiary-container": "#94a0ff",
                        "on-tertiary-fixed-variant": "#1830c2",
                        "tertiary-fixed-dim": "#bcc2ff",
                        "inverse-surface": "#2f312f",
                        "on-surface": "#1a1c1a",
                        "on-secondary-container": "#783126",
                        "surface-variant": "#e3e2e0",
                        "on-tertiary": "#ffffff",
                        "secondary-fixed": "#ffdad4",
                        "on-secondary-fixed": "#3e0502",
                        "on-secondary": "#ffffff",
                        "on-surface-variant": "#5a413d",
                        "error": "#ba1a1a",
                        "inverse-on-surface": "#f2f1ee",
                        "primary": "#570000",
                        "surface-bright": "#faf9f6",
                        "surface-tint": "#b22b1d",
                        "tertiary-fixed": "#dfe0ff",
                        "on-primary-container": "#ff8371",
                        "surface-container-low": "#f4f3f1",
                        "tertiary": "#00137f",
                        "on-background": "#1a1c1a",
                        "primary-container": "#800000",
                        "outline": "#8e706c",
                        "secondary-fixed-dim": "#ffb4a8",
                        "outline-variant": "#e2bfb9",
                        "surface-container": "#efeeeb",
                        "on-secondary-fixed-variant": "#783026",
                        "on-primary-fixed-variant": "#8f0f07",
                        "on-tertiary-fixed": "#000c61",
                        "error-container": "#ffdad6"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "fontFamily": {
                        "headline": ["Manrope"],
                        "body": ["Plus Jakarta Sans"],
                        "label": ["Plus Jakarta Sans"]
                    }
                },
            },
        }
    </script>
<style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        h1, h2, h3 { font-family: 'Manrope', sans-serif; }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .cta-gradient {
            background: linear-gradient(135deg, #570000 0%, #800000 100%);
        }
    </style>
</head>
<body class="bg-surface text-on-surface min-h-screen">
<!-- TopNavBar (Shared Component) -->
<nav class="bg-[#faf9f6]/80 dark:bg-stone-900/80 backdrop-blur-md sticky top-0 z-50 flex justify-between items-center px-6 py-4 w-full">
<div class="flex items-center gap-8">
<span class="text-2xl font-bold tracking-tight text-[#570000] dark:text-[#f4f3f1]">Koperasi Giat</span>
<div class="hidden md:flex items-center space-gap-6 gap-6">
<a class="text-[#5a413d] dark:text-stone-400 font-semibold hover:text-[#800000] transition-colors" href="#">Menu Jajan</a>
<a class="text-[#5a413d] dark:text-stone-400 font-semibold hover:text-[#800000] transition-colors" href="#">Pesananmu</a>
<a class="text-[#570000] dark:text-white border-b-2 border-[#800000] font-semibold" href="#">Keranjang</a>
<a class="text-[#5a413d] dark:text-stone-400 font-semibold hover:text-[#800000] transition-colors" href="#">Profil</a>
</div>
</div>
<div class="flex items-center gap-4">
<button class="p-2 hover:bg-[#f4f3f1]/50 dark:hover:bg-stone-800 transition-colors rounded-full relative">
<span class="material-symbols-outlined" data-icon="shopping_cart">shopping_cart</span>
<span class="absolute top-1 right-1 w-2 h-2 bg-primary rounded-full"></span>
</button>
<button class="p-2 hover:bg-[#f4f3f1]/50 dark:hover:bg-stone-800 transition-colors rounded-full">
<span class="material-symbols-outlined" data-icon="notifications">notifications</span>
</button>
<img alt="Student profile" class="w-10 h-10 rounded-full object-cover border-2 border-surface-container-high" data-alt="Close-up portrait of a student wearing a modern university sweatshirt, warm lighting, natural skin textures" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBDcBbJ_3gPMebU_LrFOLz6j1AKzGJ_b9JIIg7T5s0i1JNl3pU1HMssgKsq4s1nfzs4ukyUYURNdZVBlZc4LbD_IQ8DlQBUEdev0-C0jDyjTjdV0JncYfW0RAmnruq3ZHnAraeQZKS2EyX1DAqUMpFUCWtijzK70ROcafpKSH7em5hI98NRvnySCnSA2rJS_tM-NbmS-PD3vw_RH9aO-d9QIRMUBbFEuzZ3O4lJ65KFp-LlVWThqr5QcWCgOMNEjeZY9Q4TntyJmYyU"/>
</div>
</nav>
<main class="max-w-7xl mx-auto px-6 py-12 pb-32">
<div class="flex flex-col lg:flex-row gap-12">
<!-- Left: Cart Items (Bento Style Layout) -->
<div class="flex-1 space-y-8">
<header class="mb-10">
<h1 class="text-4xl font-extrabold tracking-tight text-primary mb-2">Keranjang Belanja Kamu</h1>
<p class="text-on-surface-variant font-medium">Laper ya? Ada 3 item enak yang siap kamu checkout nih.</p>
</header>
<div class="space-y-6">
<!-- Item 1: Batagor -->
<div class="bg-surface-container-lowest rounded-xl p-6 flex flex-col md:flex-row items-center gap-6 group transition-all duration-300 shadow-[0_12px_32px_rgba(128,0,0,0.04)]">
<div class="w-full md:w-32 h-32 rounded-xl overflow-hidden flex-shrink-0">
<img alt="Batagor Spesial" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="Delicious Indonesian fried fish dumplings (batagor) served with thick peanut sauce and lime on a plate, warm student cafe lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAn9_pUfE47a2Sg0qUvX9_5Oq9u5e1p1D-k_Qj6QpE-G-6x9_7gX7p7n9g6_X5"/>
</div>
<div class="flex-1 w-full">
<div class="flex justify-between items-start mb-2">
<div>
<h3 class="text-xl font-bold text-on-surface">Batagor Spesial Kantin</h3>
<p class="text-sm text-on-surface-variant">Bumbu kacang kental + perasan jeruk nipis</p>
</div>
<button class="text-on-surface-variant hover:text-error transition-colors p-2">
<span class="material-symbols-outlined" data-icon="delete">delete</span>
</button>
</div>
<div class="flex flex-wrap justify-between items-center mt-6">
<div class="flex items-center bg-surface-container-low rounded-full px-2 py-1 border border-outline-variant/30">
<button class="w-10 h-10 flex items-center justify-center hover:bg-surface-container-lowest rounded-full transition-colors">
<span class="material-symbols-outlined text-sm" data-icon="remove">remove</span>
</button>
<span class="px-4 font-bold text-on-surface">1</span>
<button class="w-10 h-10 flex items-center justify-center hover:bg-surface-container-lowest rounded-full transition-colors">
<span class="material-symbols-outlined text-sm" data-icon="add">add</span>
</button>
</div>
<span class="text-lg font-bold text-primary">Rp 15.000</span>
</div>
</div>
</div>
<!-- Item 2: Es Teh Manis -->
<div class="bg-surface-container-lowest rounded-xl p-6 flex flex-col md:flex-row items-center gap-6 group transition-all duration-300 shadow-[0_12px_32px_rgba(128,0,0,0.04)]">
<div class="w-full md:w-32 h-32 rounded-xl overflow-hidden flex-shrink-0">
<img alt="Es Teh Manis" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="Classic tall glass of Indonesian iced sweet tea with condensation and ice cubes, bright refreshing student lounge vibe" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAy8_pUfE47a2Sg0qUvX9_5Oq9u5e1p1D-k_Qj6QpE-G-6x9_7gX7p7n9g6_X6"/>
</div>
<div class="flex-1 w-full">
<div class="flex justify-between items-start mb-2">
<div>
<h3 class="text-xl font-bold text-on-surface">Es Teh Manis Gede</h3>
<p class="text-sm text-on-surface-variant">Penolong haus habis kelas</p>
</div>
<button class="text-on-surface-variant hover:text-error transition-colors p-2">
<span class="material-symbols-outlined" data-icon="delete">delete</span>
</button>
</div>
<div class="flex flex-wrap justify-between items-center mt-6">
<div class="flex items-center bg-surface-container-low rounded-full px-2 py-1 border border-outline-variant/30">
<button class="w-10 h-10 flex items-center justify-center hover:bg-surface-container-lowest rounded-full transition-colors">
<span class="material-symbols-outlined text-sm" data-icon="remove">remove</span>
</button>
<span class="px-4 font-bold text-on-surface">2</span>
<button class="w-10 h-10 flex items-center justify-center hover:bg-surface-container-lowest rounded-full transition-colors">
<span class="material-symbols-outlined text-sm" data-icon="add">add</span>
</button>
</div>
<span class="text-lg font-bold text-primary">Rp 10.000</span>
</div>
</div>
</div>
<!-- Item 3: Mie Instan -->
<div class="bg-surface-container-lowest rounded-xl p-6 flex flex-col md:flex-row items-center gap-6 group transition-all duration-300 shadow-[0_12px_32px_rgba(128,0,0,0.04)]">
<div class="w-full md:w-32 h-32 rounded-xl overflow-hidden flex-shrink-0">
<img alt="Mie Goreng" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="Plate of classic Indonesian fried instant noodles with a sunny side up egg and chili flakes on top, cozy dormitory food vibe" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAz8_pUfE47a2Sg0qUvX9_5Oq9u5e1p1D-k_Qj6QpE-G-6x9_7gX7p7n9g6_X7"/>
</div>
<div class="flex-1 w-full">
<div class="flex justify-between items-start mb-2">
<div>
<h3 class="text-xl font-bold text-on-surface">Mie Goreng + Telur</h3>
<p class="text-sm text-on-surface-variant">Comfort food paling mantap</p>
</div>
<button class="text-on-surface-variant hover:text-error transition-colors p-2">
<span class="material-symbols-outlined" data-icon="delete">delete</span>
</button>
</div>
<div class="flex flex-wrap justify-between items-center mt-6">
<div class="flex items-center bg-surface-container-low rounded-full px-2 py-1 border border-outline-variant/30">
<button class="w-10 h-10 flex items-center justify-center hover:bg-surface-container-lowest rounded-full transition-colors">
<span class="material-symbols-outlined text-sm" data-icon="remove">remove</span>
</button>
<span class="px-4 font-bold text-on-surface">1</span>
<button class="w-10 h-10 flex items-center justify-center hover:bg-surface-container-lowest rounded-full transition-colors">
<span class="material-symbols-outlined text-sm" data-icon="add">add</span>
</button>
</div>
<span class="text-lg font-bold text-primary">Rp 12.000</span>
</div>
</div>
</div>
</div>
</div>
<!-- Right: Order Summary (Sticky Sidebar) -->
<div class="lg:w-96">
<div class="bg-surface-container-low rounded-3xl p-8 sticky top-28 border border-outline-variant/20 shadow-xl">
<h2 class="text-2xl font-bold text-primary mb-8 tracking-tight">Rincian Bayar</h2>
<div class="space-y-4 mb-8">
<div class="flex justify-between text-on-surface-variant font-medium">
<span>Total Jajanan</span>
<span>Rp 37.000</span>
</div>
<div class="flex justify-between text-on-surface-variant font-medium">
<span>Biaya Admin</span>
<span>Rp 1.000</span>
</div>
<div class="flex justify-between text-on-surface-variant font-medium">
<span>Diskon Mahasiswa</span>
<span class="text-green-600">- Rp 2.000</span>
</div>
</div>
<div class="pt-6 mb-10 border-t border-outline-variant/30">
<div class="flex justify-between items-baseline">
<span class="text-lg font-bold text-on-surface">Total Akhir</span>
<span class="text-3xl font-extrabold text-primary">Rp 36.000</span>
</div>
</div>
<div class="space-y-4">
<button class="w-full cta-gradient text-on-primary font-bold py-4 rounded-full text-lg shadow-lg hover:brightness-110 active:scale-95 transition-all flex items-center justify-center gap-2">
<span>Lanjut Bayar, yuk!</span>
<span class="material-symbols-outlined text-xl">arrow_forward</span>
</button>
<button class="w-full bg-surface-container-lowest text-primary font-bold py-4 rounded-full text-lg hover:bg-white transition-all border border-primary/10">
                            Cari Jajanan Lain
                        </button>
</div>
<div class="mt-8 flex items-center gap-3 p-4 bg-white/60 rounded-2xl border border-outline-variant/30">
<span class="material-symbols-outlined text-secondary" data-icon="local_mall">local_mall</span>
<p class="text-xs text-on-surface-variant font-medium leading-relaxed">Pesananmu bakal langsung diproses sama tim kantin Koperasi Giat!</p>
</div>
</div>
</div>
</div>
</main>
<!-- BottomNavBar (Shared Component - Mobile Only) -->
<div class="md:hidden fixed bottom-0 left-0 w-full z-50 bg-[#faf9f6]/90 backdrop-blur-md flex justify-around items-center px-4 pb-6 pt-3 rounded-t-3xl shadow-[0_-8px_24px_rgba(128,0,0,0.08)]">
<div class="flex flex-col items-center justify-center text-[#5a413d] hover:scale-110 transition-transform active:scale-90">
<span class="material-symbols-outlined" data-icon="restaurant">restaurant</span>
<span class="text-[10px] font-bold uppercase tracking-widest mt-1">Menu</span>
</div>
<div class="flex flex-col items-center justify-center text-[#5a413d] hover:scale-110 transition-transform active:scale-90">
<span class="material-symbols-outlined" data-icon="history">history</span>
<span class="text-[10px] font-bold uppercase tracking-widest mt-1">Pesanan</span>
</div>
<div class="flex flex-col items-center justify-center text-[#570000] after:content-[''] after:w-1 after:h-1 after:bg-[#800000] after:rounded-full after:mt-1 hover:scale-110 transition-transform active:scale-90">
<span class="material-symbols-outlined" data-icon="shopping_bag">shopping_bag</span>
<span class="text-[10px] font-bold uppercase tracking-widest mt-1">Keranjang</span>
</div>
<div class="flex flex-col items-center justify-center text-[#5a413d] hover:scale-110 transition-transform active:scale-90">
<span class="material-symbols-outlined" data-icon="account_circle">account_circle</span>
<span class="text-[10px] font-bold uppercase tracking-widest mt-1">Profil</span>
</div>
</div>
</body></html>