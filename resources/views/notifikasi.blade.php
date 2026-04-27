<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;700;800&amp;family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "inverse-surface": "#2f312f",
                    "on-secondary-fixed": "#3e0502",
                    "primary-container": "#800000",
                    "inverse-on-surface": "#f2f1ee",
                    "secondary-fixed": "#ffdad4",
                    "surface-container-high": "#e9e8e5",
                    "on-primary-fixed-variant": "#8f0f07",
                    "on-error": "#ffffff",
                    "on-primary-fixed": "#410000",
                    "background": "#faf9f6",
                    "tertiary-fixed-dim": "#bcc2ff",
                    "primary-fixed": "#ffdad4",
                    "surface-tint": "#b22b1d",
                    "on-secondary-fixed-variant": "#783026",
                    "on-error-container": "#93000a",
                    "on-tertiary": "#ffffff",
                    "on-background": "#1a1c1a",
                    "inverse-primary": "#ffb4a8",
                    "tertiary-container": "#0021b9",
                    "surface-dim": "#dbdad7",
                    "on-secondary-container": "#783126",
                    "error": "#ba1a1a",
                    "on-surface-variant": "#5a413d",
                    "secondary-fixed-dim": "#ffb4a8",
                    "outline": "#8e706c",
                    "on-surface": "#1a1c1a",
                    "surface-container": "#efeeeb",
                    "surface-container-low": "#f4f3f1",
                    "error-container": "#ffdad6",
                    "primary": "#570000",
                    "outline-variant": "#e2bfb9",
                    "secondary": "#96473b",
                    "surface-variant": "#e3e2e0",
                    "on-secondary": "#ffffff",
                    "on-primary": "#ffffff",
                    "tertiary-fixed": "#dfe0ff",
                    "primary-fixed-dim": "#ffb4a8",
                    "tertiary": "#00137f",
                    "on-tertiary-fixed": "#000c61",
                    "on-primary-container": "#ff8371",
                    "secondary-container": "#ff9b8c",
                    "surface-container-lowest": "#ffffff",
                    "surface": "#faf9f6",
                    "surface-bright": "#faf9f6",
                    "on-tertiary-container": "#94a0ff",
                    "surface-container-highest": "#e3e2e0",
                    "on-tertiary-fixed-variant": "#1830c2"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "fontFamily": {
                    "headline": ["Manrope"],
                    "display": ["Manrope"],
                    "body": ["Plus Jakarta Sans"],
                    "label": ["Plus Jakarta Sans"]
            }
          },
        },
      }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .active-dot::after {
            content: '';
            width: 4px;
            height: 4px;
            background-color: #800000;
            border-radius: 50%;
            margin-top: 4px;
        }
    </style>
</head>
<body class="bg-background text-on-surface font-body min-h-screen">
<!-- TopNavBar -->
<header class="fixed top-0 w-full z-50 bg-[#faf9f6]/80 dark:bg-[#1a1c1a]/80 backdrop-blur-md">
<div class="flex justify-between items-center px-6 py-4 w-full">
<h1 class="text-xl font-bold text-[#570000] dark:text-[#f4f3f1] font-headline tracking-tight">Canteen Hub</h1>
<div class="flex items-center gap-4">
<button class="text-[#5a413d] hover:opacity-80 transition-opacity active:scale-95 duration-200">
<span class="material-symbols-outlined" data-icon="account_circle">account_circle</span>
</button>
</div>
</div>
</header>
<main class="pt-24 pb-24 px-6 max-w-2xl mx-auto">
<!-- Screen Header -->
<div class="mb-8 flex items-start gap-2">
<button class="-ml-2 p-1 text-primary hover:bg-primary/5 rounded-full transition-all active:scale-90">
<span class="material-symbols-outlined text-3xl" data-icon="chevron_left">chevron_left</span>
</button>
<div>
<h2 class="text-3xl font-extrabold text-primary font-display tracking-tight">Notifikasi</h2>
<p class="text-on-surface-variant text-sm mt-1">Pantau aktivitas kantin terbaru kamu</p>
</div>
</div>
<!-- Hari Ini Section -->
<section class="mb-10">
<div class="flex items-center justify-between mb-6">
<h3 class="text-sm font-bold uppercase tracking-widest text-on-surface-variant">Hari Ini</h3>
<span class="w-2 h-2 bg-secondary rounded-full"></span>
</div>
<div class="space-y-4">
<!-- Order Status Card -->
<div class="bg-surface-container-lowest p-5 rounded-xl shadow-[0_12px_32px_rgba(128,0,0,0.06)] group transition-all hover:translate-y-[-2px]">
<div class="flex gap-4">
<div class="flex-shrink-0 w-12 h-12 rounded-full bg-primary/5 flex items-center justify-center text-primary">
<span class="material-symbols-outlined" data-icon="store" data-weight="fill" style="font-variation-settings: 'FILL' 1;">store</span>
</div>
<div class="flex-1">
<div class="flex justify-between items-start mb-1">
<p class="font-bold text-on-surface leading-tight">Pesanan #KG-88219 Siap Diambil!</p>
<span class="text-[10px] text-on-surface-variant font-medium">BARU</span>
</div>
<p class="text-sm text-on-surface-variant">Silakan ke kasir untuk pengambilan pesanan Anda.</p>
</div>
</div>
</div>
<!-- Recommendation Card -->
<div class="bg-surface-container-lowest p-5 rounded-xl shadow-[0_12px_32px_rgba(128,0,0,0.06)] transition-all hover:translate-y-[-2px]">
<div class="flex gap-4">
<div class="flex-shrink-0 w-12 h-12 rounded-full bg-secondary/5 flex items-center justify-center text-secondary">
<span class="material-symbols-outlined" data-icon="umbrella">umbrella</span>
</div>
<div class="flex-1">
<p class="font-bold text-on-surface leading-tight mb-1">Hujan turun nih, yuk hangatkan badan!</p>
<p class="text-sm text-on-surface-variant">Nikmati semangkuk Mie Tek-tek favorit kamu yang pas banget saat cuaca dingin.</p>
</div>
</div>
</div>
</div>
</section>
<!-- Kemarin Section -->
<section>
<div class="flex items-center mb-6">
<h3 class="text-sm font-bold uppercase tracking-widest text-on-surface-variant">Kemarin</h3>
<div class="ml-4 flex-1 h-[1px] bg-outline-variant/20"></div>
</div>
<div class="space-y-4">
<!-- Promotion Card -->
<div class="bg-surface-container-low/50 p-5 rounded-xl transition-all hover:bg-surface-container-lowest hover:shadow-[0_12px_32px_rgba(128,0,0,0.06)]">
<div class="flex gap-4">
<div class="flex-shrink-0 w-12 h-12 rounded-full bg-on-surface-variant/5 flex items-center justify-center text-on-surface-variant">
<span class="material-symbols-outlined" data-icon="local_offer">local_offer</span>
</div>
<div class="flex-1">
<p class="font-bold text-on-surface leading-tight mb-1">Promo Spesial Mahasiswa</p>
<p class="text-sm text-on-surface-variant">Diskon 20% untuk semua menu snack setiap jam 3 sore! Jangan sampai kehabisan.</p>
</div>
</div>
</div>
<!-- Info Card -->
<div class="bg-surface-container-low/50 p-5 rounded-xl transition-all hover:bg-surface-container-lowest hover:shadow-[0_12px_32px_rgba(128,0,0,0.06)]">
<div class="flex gap-4">
<div class="flex-shrink-0 w-12 h-12 rounded-full bg-on-surface-variant/5 flex items-center justify-center text-on-surface-variant">
<span class="material-symbols-outlined" data-icon="info">info</span>
</div>
<div class="flex-1">
<p class="font-bold text-on-surface leading-tight mb-1">Canteen Update</p>
<p class="text-sm text-on-surface-variant">Jam operasional Koperasi Giat kini lebih lama sampai jam 8 malam untuk melayani aktivitas malam kamu.</p>
</div>
</div>
</div>
</div>
</section>
<!-- Empty State Logic Buffer -->
<div class="py-12 flex flex-col items-center justify-center text-center opacity-40 grayscale">
<span class="material-symbols-outlined text-4xl mb-2" data-icon="history">history</span>
<p class="text-xs font-medium">Menampilkan notifikasi 2 hari terakhir</p>
</div>
</main>
<!-- BottomNavBar -->
<nav class="fixed bottom-0 inset-x-0 h-16 bg-background/95 backdrop-blur-md flex justify-around items-center px-4 z-50 shadow-[0_-4px_20px_rgba(128,0,0,0.08)] pb-safe">
<!-- Menu -->
<a class="flex flex-col items-center justify-center text-[#5a413d] dark:text-[#a08d8a] hover:text-[#570000] dark:hover:text-[#ffffff] transition-colors active:scale-90 duration-150" href="#">
<span class="material-symbols-outlined" data-icon="restaurant">restaurant</span>
<span class="font-['Plus_Jakarta_Sans'] text-[11px] font-semibold">Menu</span>
</a>
<!-- Orders -->
<a class="flex flex-col items-center justify-center text-[#5a413d] dark:text-[#a08d8a] hover:text-[#570000] dark:hover:text-[#ffffff] transition-colors active:scale-90 duration-150" href="#">
<span class="material-symbols-outlined" data-icon="receipt_long">receipt_long</span>
<span class="font-['Plus_Jakarta_Sans'] text-[11px] font-semibold">Orders</span>
</a>
<!-- Inbox (Active) -->
<a class="flex flex-col items-center justify-center text-[#800000] dark:text-[#e2bfb9] after:content-[''] after:w-1 after:h-1 after:bg-[#800000] after:rounded-full after:mt-1 active:scale-90 duration-150" href="#">
<span class="material-symbols-outlined" data-icon="notifications" data-weight="fill" style="font-variation-settings: 'FILL' 1;">notifications</span>
<span class="font-['Plus_Jakarta_Sans'] text-[11px] font-semibold">Inbox</span>
</a>
<!-- Profile -->
<a class="flex flex-col items-center justify-center text-[#5a413d] dark:text-[#a08d8a] hover:text-[#570000] dark:hover:text-[#ffffff] transition-colors active:scale-90 duration-150" href="#">
<span class="material-symbols-outlined" data-icon="person">person</span>
<span class="font-['Plus_Jakarta_Sans'] text-[11px] font-semibold">Profile</span>
</a>
</nav>
</body></html>