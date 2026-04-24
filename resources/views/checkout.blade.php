<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@700;800&amp;family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
                }
            }
        }
    </script>
<style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #faf9f6; }
        .font-headline { font-family: 'Manrope', sans-serif; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        .glass-nav { background: rgba(250, 249, 246, 0.8); backdrop-filter: blur(12px); }
        .btn-gradient { background: linear-gradient(135deg, #570000 0%, #800000 100%); }
    </style>
</head>
<body class="bg-surface text-on-surface">
<!-- Top Navigation Bar -->
<header class="fixed top-0 w-full z-50 glass-nav flex justify-between items-center px-6 py-4">
<div class="flex items-center gap-4">
<button class="p-2 hover:bg-surface-container-low rounded-full transition-colors">
<span class="material-symbols-outlined text-primary">arrow_back</span>
</button>
<h1 class="text-2xl font-bold tracking-tight text-primary font-headline">Koperasi Giat</h1>
</div>
<div class="flex items-center gap-4">
<div class="hidden md:flex gap-6 mr-6">
<a class="text-on-surface-variant font-semibold hover:text-primary transition-colors" href="#">Menu</a>
<a class="text-primary border-b-2 border-primary font-semibold" href="#">Checkout</a>
<a class="text-on-surface-variant font-semibold hover:text-primary transition-colors" href="#">Orders</a>
</div>
<button class="p-2 hover:bg-surface-container-low rounded-full transition-colors relative">
<span class="material-symbols-outlined text-on-surface-variant">shopping_cart</span>
<span class="absolute top-1 right-1 w-2 h-2 bg-primary rounded-full"></span>
</button>
<img alt="Student profile" class="w-10 h-10 rounded-full object-cover border-2 border-white shadow-sm" data-alt="Close up portrait of a smiling university student with clean lighting and soft academic office background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCcdt4MY2HLEu7O-om9RTmeE7aF9vWR2sLifQab62B5pxLRtWCqS38Yp8gcZ4HCycIGN9Df6rYKkICl9HWEOY8sYG6ZUVfHFXiVZ9Pb3fZbZYVwVu50Xjfwoug73aSOwaVmcTUA6n1_39_kBNr6FqUw0Vz42j_asVz2gx-G2CSF-hiJ6O3m9rOdpUG8iR6EqurF8JwXUruypOb-qkqzYio_Sdf-1Oy49e8exCd5cvEO1WzvjzlAUEWbi59_UfOHQS0lW-CT55mcpA55"/>
</div>
</header>
<main class="pt-24 pb-32 px-6 max-w-6xl mx-auto">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
<!-- Left Column: Order Summary & Details -->
<div class="lg:col-span-7 space-y-8">
<section>
<h2 class="text-3xl font-extrabold font-headline tracking-tight text-primary mb-6">Konfirmasi Pesanan</h2>
<!-- Bento-style Order List -->
<div class="space-y-4">
<div class="bg-surface-container-lowest p-6 rounded-xl flex gap-6 items-center shadow-[0_12px_32px_rgba(128,0,0,0.06)]">
<img alt="Nasi Goreng" class="w-24 h-24 rounded-xl object-cover" data-alt="Overhead shot of gourmet Indonesian fried rice with sunny side up egg and fresh garnish on a ceramic plate" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBF9exyX2TqWYhvFgoIZVoCKZ267Um2tYTz5wlXZAkuxF5dz1vH2Mv1bGlFpB2_q55XAeGo5pncqAf-uOO3D3pzGnAxDjQ7gkxs-RZe7FkVnEPeQNxpttkjdRLzI4HIPayNIj6K4S3g_8YS2gFd9T8FUFejDnebGovlA_EyZ8wSF1xV1RAGPlznuUe3V_BHcj7LcE_EYVNPxhoPE-LNQcoH9pmQT-1bVPP1_ca7Acg2c7XeZfb-hRp0_aPJ2FSNta8Fg1RrzSYvOYdK"/>
<div class="flex-grow">
<div class="flex justify-between items-start">
<h3 class="font-bold text-lg text-on-surface">Nasi Goreng Spesial Kampus</h3>
<span class="text-primary font-bold">Rp 25.000</span>
</div>
<p class="text-on-surface-variant text-sm mt-1">Ekstra Telur, Pedas Sedang</p>
<div class="mt-4 flex items-center gap-3">
<button class="w-8 h-8 rounded-full bg-surface-container-low flex items-center justify-center hover:bg-surface-container-high transition-colors">
<span class="material-symbols-outlined text-sm">remove</span>
</button>
<span class="font-semibold px-2">1</span>
<button class="w-8 h-8 rounded-full bg-surface-container-low flex items-center justify-center hover:bg-surface-container-high transition-colors text-primary">
<span class="material-symbols-outlined text-sm">add</span>
</button>
</div>
</div>
</div>
<div class="bg-surface-container-lowest p-6 rounded-xl flex gap-6 items-center shadow-[0_12px_32px_rgba(128,0,0,0.06)]">
<img alt="Es Teh Manis" class="w-24 h-24 rounded-xl object-cover" data-alt="Iced jasmine tea in a tall condensation-covered glass with fresh mint sprig and lemon slice, soft morning light" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB9qDl3OHx7eieKMFiC2NjR_ILnOqoT5S9bg1U2q2ILqAlNuJUzIwW2IGwEWVwCYipT7lrj9Fn201Lp4aRounO4W4PY2InYsFJsusPgyNaFepUUJMkxfpzMCSrgOjrY1fGixy5qaeTeQMzVs-th237O-Cv3RVpPDvPCt9B--VMa-D9JeFeE8GuzV23rEMoM6k7-SpoQV0eF3ugJd9Kw9l6Go50GW3pfs80tbCqiB3PeTKvMzlQeQPtTuODvGTv6hzkW-xu6QfxT2Bng"/>
<div class="flex-grow">
<div class="flex justify-between items-start">
<h3 class="font-bold text-lg text-on-surface">Es Teh Manis Selasih</h3>
<span class="text-primary font-bold">Rp 8.000</span>
</div>
<p class="text-on-surface-variant text-sm mt-1">Less Sugar, Cold</p>
<div class="mt-4 flex items-center gap-3">
<button class="w-8 h-8 rounded-full bg-surface-container-low flex items-center justify-center hover:bg-surface-container-high transition-colors">
<span class="material-symbols-outlined text-sm">remove</span>
</button>
<span class="font-semibold px-2">2</span>
<button class="w-8 h-8 rounded-full bg-surface-container-low flex items-center justify-center hover:bg-surface-container-high transition-colors text-primary">
<span class="material-symbols-outlined text-sm">add</span>
</button>
</div>
</div>
</div>
</div>
</section>
<!-- Weather/Campus Note Section -->
<div class="bg-secondary-container/10 p-6 rounded-xl flex items-center gap-4">
<span class="material-symbols-outlined text-secondary text-3xl">light_mode</span>
<div>
<p class="font-bold text-secondary">Cerah di Kampus</p>
<p class="text-sm text-on-surface-variant">Nikmati pesananmu di kantin ternyaman.</p>
</div>
</div>
</div>
<!-- Right Column: Payment & Total -->
<div class="lg:col-span-5">
<div class="bg-surface-container-low p-8 rounded-3xl sticky top-28">
<h2 class="text-xl font-bold font-headline text-on-surface mb-6">Detail Pembayaran</h2>
<!-- Payment Methods -->
<div class="space-y-3 mb-8">
<label class="relative block group cursor-pointer">
<input checked="" class="peer sr-only" name="payment" type="radio" value="campus_card"/>
<div class="flex items-center justify-between p-4 bg-surface-container-lowest rounded-xl border-2 border-transparent peer-checked:border-primary transition-all">
<div class="flex items-center gap-4">
<span class="material-symbols-outlined text-primary">badge</span>
<span class="font-semibold">Cash</span>
</div>
<div class="w-5 h-5 rounded-full border-2 border-primary-fixed-dim peer-checked:bg-primary flex items-center justify-center">
<div class="w-2 h-2 bg-white rounded-full"></div>
</div>
</div>
</label>
<label class="relative block group cursor-pointer">
<input class="peer sr-only" name="payment" type="radio" value="e_wallet"/>
<div class="flex items-center justify-between p-4 bg-surface-container-lowest rounded-xl border-2 border-transparent peer-checked:border-primary transition-all">
<div class="flex items-center gap-4">
<span class="material-symbols-outlined text-primary">account_balance_wallet</span>
<span class="font-semibold">Qris / E-Wallet</span>
</div>
<div class="w-5 h-5 rounded-full border-2 border-primary-fixed-dim peer-checked:bg-primary flex items-center justify-center"></div>
</div>
</label>
</div>
<!-- Price Breakdown -->
<div class="space-y-4 pt-6 border-t border-outline-variant/30">
<div class="flex justify-between text-on-surface-variant">
<span>Subtotal</span>
<span>Rp 41.000</span>
</div>
<div class="flex justify-between text-on-surface-variant">
<span>Biaya Layanan</span>
<span>Rp 2.000</span>
</div>
<div class="flex justify-between items-center pt-4">
<span class="text-lg font-bold text-on-surface">Total Pembayaran</span>
<span class="text-2xl font-black text-primary font-headline tracking-tighter">Rp 43.000</span>
</div>
</div>
<!-- Action Button -->
<button class="w-full mt-10 py-5 btn-gradient text-white rounded-full font-bold text-lg shadow-xl hover:scale-[1.02] active:scale-95 transition-transform flex items-center justify-center gap-2">
<span>Bayar Sekarang</span>
<span class="material-symbols-outlined">payments</span>
</button>
<p class="text-center text-xs text-on-surface-variant mt-6 px-4">
                        Dengan membayar, Anda menyetujui syarat dan ketentuan Koperasi Giat Mahasiswa.
                    </p>
</div>
</div>
</div>
</main>
<!-- Bottom Navigation Bar (Mobile only) -->
<nav class="md:hidden fixed bottom-0 left-0 w-full z-50 glass-nav flex justify-around items-center px-4 pb-8 pt-4 rounded-t-3xl shadow-[0_-8px_24px_rgba(128,0,0,0.04)]">
<div class="flex flex-col items-center justify-center text-on-surface-variant">
<span class="material-symbols-outlined">restaurant_menu</span>
<span class="text-[10px] font-bold uppercase tracking-widest mt-1">Menu</span>
</div>
<div class="flex flex-col items-center justify-center text-on-surface-variant">
<span class="material-symbols-outlined">assignment</span>
<span class="text-[10px] font-bold uppercase tracking-widest mt-1">Orders</span>
</div>
<div class="flex flex-col items-center justify-center text-primary after:content-[''] after:w-1 after:h-1 after:bg-primary after:rounded-full after:mt-1">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">shopping_bag</span>
<span class="text-[10px] font-bold uppercase tracking-widest mt-1">Cart</span>
</div>
<div class="flex flex-col items-center justify-center text-on-surface-variant">
<span class="material-symbols-outlined">person</span>
<span class="text-[10px] font-bold uppercase tracking-widest mt-1">Profile</span>
</div>
</nav>
</body></html>