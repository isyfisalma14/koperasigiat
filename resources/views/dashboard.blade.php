<!DOCTYPE html><html lang="id"><head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Koperasi Giat - Dashboard</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@700;800&amp;family=Plus_Jakarta_Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #faf9f6;
        }
        h1, h2, h3, .display-font {
            font-family: 'Manrope', sans-serif;
        }
        .glass-nav {
            background-color: rgba(250, 249, 246, 0.8);
            backdrop-filter: blur(12px);
        }
        .cta-gradient {
            background: linear-gradient(135deg, #570000 0%, #800000 100%);
        }
    </style>
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
                        "xl": "1.5rem",
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
</head>
<body class="bg-background text-on-surface min-h-screen pb-24 md:pb-0">
<!-- TopNavBar -->
<nav class="sticky top-0 z-50 w-full glass-nav flex justify-between items-center px-6 py-4">
<div class="flex items-center gap-8">
<span class="text-2xl font-bold tracking-tight text-primary" style="">Koperasi Giat</span>
<div class="hidden md:flex items-center space-x-6">
<a class="text-primary border-b-2 border-primary font-bold" href="#" style="">Menu</a>
<a class="text-on-surface-variant hover:text-primary transition-colors" href="#" style="">Orders</a>
<a class="text-on-surface-variant hover:text-primary transition-colors" href="#" style="">Cart</a>
<a class="text-on-surface-variant hover:text-primary transition-colors" href="#" style="">Profile</a>
</div>
</div>
<div class="flex items-center gap-4">
<div class="hidden md:flex items-center bg-surface-container-low px-4 py-2 rounded-full w-64">
<span class="material-symbols-outlined text-on-surface-variant text-lg" style="">search</span>
<input class="bg-transparent border-none focus:ring-0 text-sm w-full placeholder:text-on-surface-variant" placeholder="Cari jajanan kampus..." type="text">
</div>
<div class="flex items-center gap-2">
<button class="p-2 text-on-surface-variant hover:bg-surface-container-high rounded-full transition-all" style="">
<span class="material-symbols-outlined" data-icon="shopping_cart" style="">shopping_cart</span>
</button>
<button class="p-2 text-on-surface-variant hover:bg-surface-container-high rounded-full transition-all" style="">
<span class="material-symbols-outlined" data-icon="notifications" style="">notifications</span>
</button>
<div class="w-10 h-10 rounded-full overflow-hidden ml-2 border border-outline-variant/20">
<img alt="Student profile" data-alt="Portrait of a friendly Indonesian university student wearing a campus organization polo shirt with soft natural lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCay-MPyaxZfsMrbqmQCZh5B38NStanm674Fy2yjpMEBL_0XILq1bH1cv6BHX7K_dMnXwILuhmA5HZF2xhTESFARPLG9uTwlmWHf7fVQBJ7k2IuHEWmtpIetaD0sjmIwgAESzdvC4tGPJGFcT228uwX2vgVUq1l6Ce7i2K22GDKqEDV19Y2wFpsmdEaAncbnPMVfcW6GgrNo0aL3235nJTjC8ezNAwJ3BqCa-qrvbizYtY5DKUvqLKfSpjt7Czg4G2setLTZ-YNf6-q" class="" style="">
</div>
</div>
</div>
</nav>
<main class="max-w-7xl mx-auto px-6 py-8 space-y-12">
<!-- Hero & Greeting -->
<header class="flex flex-col md:flex-row md:items-end justify-between gap-6">
<div class="space-y-2">
<p class="text-on-surface-variant font-medium tracking-wide" style="">Selamat datang kembali,</p>
<h1 class="text-4xl md:text-5xl font-extrabold tracking-tight text-primary" style="">Halo, Isyfi Salma!</h1>
</div>
<div class="md:hidden w-full">
<div class="flex items-center bg-surface-container-lowest px-5 py-4 rounded-xl shadow-[0_12px_32px_rgba(128,0,0,0.04)]">
<span class="material-symbols-outlined text-primary mr-3" style="">search</span>
<input class="bg-transparent border-none focus:ring-0 text-base w-full" placeholder="Lapar mau makan apa?" type="text">
</div>
</div>
</header>
<!-- Weather Based Recommendation (Editorial Bento Style) -->
<section class="grid grid-cols-1 md:grid-cols-12 gap-6">
<div class="md:col-span-8 relative overflow-hidden bg-surface-container-low rounded-xl p-8 flex flex-col justify-between min-h-[320px]">
<div class="z-10 max-w-md space-y-4">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-secondary text-4xl" style="font-variation-settings: &quot;FILL&quot; 1;">wb_sunny</span>
<span class="text-secondary font-bold uppercase tracking-widest text-sm" style="">Pas buat cuaca panas gini</span>
</div>
<h2 class="text-3xl font-bold text-on-surface leading-tight" style="">Kampus lagi terik banget nih, yuk ademin pake yang segar-segar!</h2>
<p class="text-on-surface-variant" style="">Suhu mencapai 32°C di sekitar kampus. Hilangkan dahaga dengan koleksi minuman dingin pilihan kami.</p>
<button class="cta-gradient text-on-primary px-8 py-3 rounded-full font-bold inline-flex items-center gap-2 mt-4 hover:scale-105 transition-transform" style="">
                        Lihat Menu Segar
                        <span class="material-symbols-outlined" style="">arrow_forward</span>
</button>
</div>
<div class="absolute right-[-40px] bottom-[-20px] w-1/2 h-full opacity-90">
<img alt="Iced tea glass" class="w-full h-full object-contain transform rotate-12" data-alt="Close-up of a frosted tall glass of iced fruit tea with condensation drops, fresh mint leaves, and citrus slices on a warm sunlit background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA-irJyLepG2118W29nDbnRNY4OuQCtruZHNYZhqUb1xl9KLLlO9DM_qJQzYmpB-sDTfTD5Al3PhcAbocKb8dIdLDmcfzbHc33DAUPovntJxuuwmIac5ujXmEXbxx2lT0RNzDebBnV7rzVFkTVxletS4ruzZZ6lG2Qy0-4p6FMjAdNT8B5ni1xB7KR3IXlZ7q2Auc3N8xXHcsEIDMUnefrls00p5sz3XEgRbrrOt6AynHTBVZ4AfnG9ZQbQvp4WEqtdvwYg3jRy-DvS" style="">
</div>
</div>
<div class="md:col-span-4 bg-surface-container-lowest rounded-xl p-6 shadow-[0_12px_32px_rgba(128,0,0,0.06)] flex flex-col items-center text-center justify-center space-y-4 border border-outline-variant/10">
<span class="text-sm font-bold text-on-surface-variant uppercase tracking-tighter" style="">Terlaris Saat Ini</span>
<div class="w-32 h-32 rounded-full overflow-hidden bg-surface-container-low p-2">
<img alt="Es Kopi Susu" class="w-full h-full object-cover rounded-full" data-alt="Top down view of an iced coffee with layered milk and espresso in a clear plastic cup on a light textured surface" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAenucty_ChILpDrB_Po2IaxtAJiF7fbMZJL8ThqPDmkDXYMs8dOOkF5neuXEFJSbpU2j5v0E8fQ9C-ECeagfy-pWJtWFOCaltLChTRnSHVou9RdnbOjFOmhhXQArMVZ2JBM_pWESiIVcgYwpAszZgLrKNDjYF_O3-XB9DJptZR8S51hVzxtVHKWxoYI43xtVOOgbNN75Je5y13WtWdl7Ym0K4a7CFCVnbJidXUm-fMD9-vjD4VXQmyfeAYsIo6s011VdqU-up4Ikju" style="">
</div>
<h3 class="font-bold text-xl" style="">Es Kopi Susu Giat</h3>
<p class="text-on-surface-variant text-sm" style="">Telah dipesan 120+ kali hari ini</p>
<span class="text-primary font-bold text-lg" style="">Rp 15.000</span>
</div>
</section>
<!-- Categories -->
<section class="space-y-6">
<div class="flex items-center justify-between">
<h2 class="text-2xl font-bold text-on-surface" style="">Kategori</h2>
<button class="text-primary font-bold text-sm" style="">Lihat Semua</button>
</div>
<div class="flex gap-4 overflow-x-auto pb-4 no-scrollbar">
<button class="bg-primary text-on-primary px-8 py-3 rounded-full font-bold scale-105 whitespace-nowrap shadow-lg" style="">Semua</button>
<button class="bg-surface-container-high text-on-surface-variant px-8 py-3 rounded-full font-bold whitespace-nowrap hover:bg-surface-container-highest transition-colors" style="">Minuman</button>
<button class="bg-surface-container-high text-on-surface-variant px-8 py-3 rounded-full font-bold whitespace-nowrap hover:bg-surface-container-highest transition-colors" style="">Makanan Berat</button>
<button class="bg-surface-container-high text-on-surface-variant px-8 py-3 rounded-full font-bold whitespace-nowrap hover:bg-surface-container-highest transition-colors" style="">Camilan</button>
<button class="bg-surface-container-high text-on-surface-variant px-8 py-3 rounded-full font-bold whitespace-nowrap hover:bg-surface-container-highest transition-colors" style="">Pastry</button>
<button class="bg-surface-container-high text-on-surface-variant px-8 py-3 rounded-full font-bold whitespace-nowrap hover:bg-surface-container-highest transition-colors" style="">Sehat</button>
</div>
</section>
<!-- Recommendations For You -->
<section class="space-y-6">
<div class="flex items-center justify-between">
<h2 class="text-2xl font-bold text-on-surface" style="">Rekomendasi untuk Kamu</h2>
<p class="text-sm text-on-surface-variant italic" style="">Berdasarkan pesanan terakhirmu</p>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
<!-- Card 1 -->
<div class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-[0_12px_32px_rgba(128,0,0,0.06)] group hover:-translate-y-1 transition-all duration-300">
<div class="h-40 overflow-hidden">
<img alt="Nasi Goreng" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="Gourmet Indonesian fried rice served on a ceramic plate with a sunny side up egg, cucumber slices, and crackers with warm side lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCx-2oPp-0H8hw1MHNf67FoOWyynBhABhdu8b0pL19ZyU8fEthJj3wK6NGOvRykILfBS7s2fMQ27qJE5pj4FJKUuioCm0FTc0RxCuC8d5OdfAZN4V6_6RHI6x83yXRPPZiHm4TZveDpyGeUDH1HclwGDqXQM4PZH5in4MqHXqneACL2kU2SNopk5f3L8FajhDNABw8U60nkFbHSVWcfW4vtsMJxZ_VD3puKhFzE8b50NrwmjP3w_CC-BiqUpDE1Sx-Z7BOOGu3rhmcs" style="">
</div>
<div class="p-6 space-y-4">
<div class="flex justify-between items-start">
<h3 class="font-bold text-lg leading-tight" style="">Nasi Goreng Spesial Kampus</h3>
<span class="bg-surface-container-low p-1 rounded-full"><span class="material-symbols-outlined text-sm text-primary" style="font-variation-settings: &quot;FILL&quot; 1;">star</span></span>
</div>
<div class="flex items-center gap-2 text-on-surface-variant text-sm">
<span class="material-symbols-outlined text-sm" style="">timer</span>
<span class="" style="">15-20 mnt</span>
<span class="mx-1 opacity-30" style="">•</span>
<span class="" style="">Kantinn Pusat</span>
</div>
<div class="flex justify-between items-center pt-2">
<span class="text-primary font-bold text-xl" style="">Rp 22.000</span>
<button class="p-2 bg-surface-container-low rounded-full text-primary hover:bg-primary hover:text-white transition-colors" style="">
<span class="material-symbols-outlined" style="">add</span>
</button>
</div>
</div>
</div>
<!-- Card 2 -->
<div class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-[0_12px_32px_rgba(128,0,0,0.06)] group hover:-translate-y-1 transition-all duration-300">
<div class="h-40 overflow-hidden">
<img alt="Donat Glazed" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="A variety of gourmet donuts with colorful glazes and toppings arranged on a clean white surface with bright airy lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDidqJA2J6FHoh5g3YtPomI_IwDv11T3YyMzmxnzs3N091lWfZ-Zw186Mqf-CRCMXagmWzctg-NUNlFSD5pRIM3d3NDQToKFyRTVBPwi_ddVIBWV3y4ps3p9z4jZFqWjtfOyMhVXsnOvosSoCtn92OtfwtxBayQ23H69OqVPNZw46UMzT_UwQeqPhIelnqLiSyBHSwgkkbVkfKJrmJWRfxrnmzK5s61nkHBANzvMuE-4zJGIB3_94tFxO6c7nuhYKhQq48FjqDrXM71" style="">
</div>
<div class="p-6 space-y-4">
<div class="flex justify-between items-start">
<h3 class="font-bold text-lg leading-tight" style="">Donat Artisan Cokelat</h3>
<span class="bg-surface-container-low p-1 rounded-full"><span class="material-symbols-outlined text-sm text-primary" style="font-variation-settings: &quot;FILL&quot; 1;">star</span></span>
</div>
<div class="flex items-center gap-2 text-on-surface-variant text-sm">
<span class="material-symbols-outlined text-sm" style="">timer</span>
<span class="" style="">5 mnt</span>
<span class="mx-1 opacity-30" style="">•</span>
<span class="" style="">Bakery Giat</span>
</div>
<div class="flex justify-between items-center pt-2">
<span class="text-primary font-bold text-xl" style="">Rp 12.500</span>
<button class="p-2 bg-surface-container-low rounded-full text-primary hover:bg-primary hover:text-white transition-colors" style="">
<span class="material-symbols-outlined" style="">add</span>
</button>
</div>
</div>
</div>
<!-- Card 3 -->
<div class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-[0_12px_32px_rgba(128,0,0,0.06)] group hover:-translate-y-1 transition-all duration-300">
<div class="h-40 overflow-hidden">
<img alt="Salad" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="Fresh vibrant salad bowl with grilled chicken, avocado, cherry tomatoes, and mixed greens in a minimalist bowl with natural daylight" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBoXdo4xeHJQSN8A5T9UhkB-dC2CAcT9Yg13FhyzDBFBX_rYHzKfr2CjZmiPwj66o1VwJgfjaqoHUMDlC8Y4qVNn3tXdH0BkHzcYCgkKrnMIPuDMO5zJ30a-Nq9kbcUGg-aFyCBbU9EEAsrW-EZCZVwh-JLZ6zpWr9IVmQISCEctk8Mj_wcU9fxxPIhMVZ4K9TZL0Bc0vivJV0DeNsCn-1RNTJYtxZl_oZ9hz0LkTQehyTYMm0m5Ezc62lpsnZ_7lVToOpkjPF8zqzn" style="">
</div>
<div class="p-6 space-y-4">
<div class="flex justify-between items-start">
<h3 class="font-bold text-lg leading-tight" style="">Green Bowl Chicken Salad</h3>
<span class="bg-surface-container-low p-1 rounded-full"><span class="material-symbols-outlined text-sm text-primary" style="font-variation-settings: &quot;FILL&quot; 1;">star</span></span>
</div>
<div class="flex items-center gap-2 text-on-surface-variant text-sm">
<span class="material-symbols-outlined text-sm" style="">timer</span>
<span class="" style="">10 mnt</span>
<span class="mx-1 opacity-30" style="">•</span>
<span class="" style="">Fit Kitchen</span>
</div>
<div class="flex justify-between items-center pt-2">
<span class="text-primary font-bold text-xl" style="">Rp 28.000</span>
<button class="p-2 bg-surface-container-low rounded-full text-primary hover:bg-primary hover:text-white transition-colors" style="">
<span class="material-symbols-outlined" style="">add</span>
</button>
</div>
</div>
</div>
<!-- Card 4 -->
<div class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-[0_12px_32px_rgba(128,0,0,0.06)] group hover:-translate-y-1 transition-all duration-300">
<div class="h-40 overflow-hidden">
<img alt="Matcha Latte" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="Close-up of a layered iced matcha latte in a glass with visible milk and green tea contrast and ice cubes" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCd219mvbGZhRt0eF-Qr-FzpRl99xOXF4VVKCZWQ1yRootLxyTQLuJP93q1cpEXbFSN2fTU_g_pUojlffXajboEzIL47hjdpd963LB5SA7OvQd_kDodkoGNqxJZmP7ueTZ5vSPjcsKxbu4brxs9TLQxUaM1E_1Rled86XF1tj7UmINTQaCGfujYXWHmhE0jjzhtyFqIxGBdVRJIYrQrfh_G8GVV188bVYe6RjAstsiD17mxDo-3d7g6DkPZb5bNMmaig3Gq1HxqF97o" style="">
</div>
<div class="p-6 space-y-4">
<div class="flex justify-between items-start">
<h3 class="font-bold text-lg leading-tight" style="">Premium Matcha Latte</h3>
<span class="bg-surface-container-low p-1 rounded-full"><span class="material-symbols-outlined text-sm text-primary" style="font-variation-settings: &quot;FILL&quot; 1;">star</span></span>
</div>
<div class="flex items-center gap-2 text-on-surface-variant text-sm">
<span class="material-symbols-outlined text-sm" style="">timer</span>
<span class="" style="">5-8 mnt</span>
<span class="mx-1 opacity-30" style="">•</span>
<span class="" style="">Brew Haven</span>
</div>
<div class="flex justify-between items-center pt-2">
<span class="text-primary font-bold text-xl" style="">Rp 18.000</span>
<button class="p-2 bg-surface-container-low rounded-full text-primary hover:bg-primary hover:text-white transition-colors" style="">
<span class="material-symbols-outlined" style="">add</span>
</button>
</div>
</div>
</div>
</div>
</section>
</main>
<!-- BottomNavBar (Mobile Only) -->
<nav class="md:hidden glass-nav fixed bottom-0 left-0 w-full z-50 flex justify-around items-center px-4 pb-6 pt-3 rounded-t-3xl shadow-[0_-8px_24px_rgba(128,0,0,0.04)]">
<a class="flex flex-col items-center justify-center text-primary after:content-[''] after:w-1 after:h-1 after:bg-primary after:rounded-full after:mt-1" href="#" style="">
<span class="material-symbols-outlined" data-icon="restaurant_menu" style="">restaurant_menu</span>
<span class="text-[10px] font-bold uppercase tracking-widest mt-1" style="">Menu</span>
</a>
<a class="flex flex-col items-center justify-center text-on-surface-variant" href="#" style="">
<span class="material-symbols-outlined" data-icon="assignment" style="">assignment</span>
<span class="text-[10px] font-bold uppercase tracking-widest mt-1" style="">Orders</span>
</a>
<a class="flex flex-col items-center justify-center text-on-surface-variant relative" href="#" style="">
<span class="material-symbols-outlined" data-icon="shopping_bag" style="">shopping_bag</span>
<span class="text-[10px] font-bold uppercase tracking-widest mt-1" style="">Cart</span>
<span class="absolute -top-1 -right-1 bg-primary text-white text-[8px] w-4 h-4 rounded-full flex items-center justify-center" style="">2</span>
</a>
<a class="flex flex-col items-center justify-center text-on-surface-variant" href="#" style="">
<span class="material-symbols-outlined" data-icon="person" style="">person</span>
<span class="text-[10px] font-bold uppercase tracking-widest mt-1" style="">Profile</span>
</a>
</nav>
</body></html>