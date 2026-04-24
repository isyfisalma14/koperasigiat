<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Order Status - Koperasi Giat</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@700;800&amp;family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
                        "2xl": "1rem",
                        "3xl": "1.5rem",
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
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #faf9f6;
        }
        h1, h2, h3 {
            font-family: 'Manrope', sans-serif;
        }
    </style>
</head>
<body class="bg-background text-on-surface min-h-screen pb-32">
<!-- Top Navigation Bar -->
<nav class="bg-[#faf9f6]/80 dark:bg-stone-900/80 backdrop-blur-md sticky top-0 z-50 flex justify-between items-center px-6 py-4 w-full flat no-shadows">
<div class="text-2xl font-bold tracking-tight text-[#570000] dark:text-[#f4f3f1] font-headline">Koperasi Giat</div>
<div class="flex items-center gap-4">
<button class="p-2 hover:bg-[#f4f3f1]/50 transition-colors rounded-full text-[#800000]">
<span class="material-symbols-outlined" data-icon="shopping_cart">shopping_cart</span>
</button>
<button class="p-2 hover:bg-[#f4f3f1]/50 transition-colors rounded-full text-[#800000]">
<span class="material-symbols-outlined" data-icon="notifications">notifications</span>
</button>
<img alt="Student profile" class="w-10 h-10 rounded-full border-2 border-surface-container-high" data-alt="Close-up portrait of a cheerful university student wearing a casual sweater in a sunlit modern campus library background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCxS_d242fPpgjgvOySEf-ktKnFjMwsjuPvr-YkO5c9B4t0z1vX-rxfkR36nAZB_g-X62Gon-3720_ebdMUCYyU66G8lAXHjy1nH5X4QWBsCs-xYl101HHMvWBOOMHBJP-VzQAI_KxXvjbMNnISSIQjjNEXFcWLDDWk8CBnh_aTjG6hd_ml8SusHCAgCnhVzNqMlmUZgBKJ7zvkd8_ATuAqh_q3l-eex2t5A5aFFzVVx4A-IkZVKsz4IddAAsldbtQgtEcQd47gwqbF"/>
</div>
</nav>
<main class="max-w-4xl mx-auto px-6 pt-8 space-y-10">
<!-- Header Section -->
<header class="flex flex-col md:flex-row md:items-end justify-between gap-6">
<div class="space-y-1">
<div class="flex items-center gap-2 text-on-surface-variant font-medium">
<span class="material-symbols-outlined text-sm" data-icon="arrow_back">arrow_back</span>
<span class="text-sm tracking-wide font-label uppercase">Kembali ke Pesanan</span>
</div>
<h1 class="text-4xl font-extrabold tracking-tight text-primary">Pesanan #KG-8821</h1>
<p class="text-on-surface-variant">Estimasi pengambilan: 12:45 PM • Kantin Pusat</p>
</div>
<!-- Pickup QR Code Card -->
<div class="bg-surface-container-lowest p-6 rounded-3xl flex flex-col items-center gap-4 shadow-[0_12px_32px_rgba(128,0,0,0.06)] border border-outline-variant/10">
<div class="w-32 h-32 bg-surface-container-low flex items-center justify-center rounded-2xl relative overflow-hidden">
<!-- Stylized QR placeholder using grid -->
<div class="grid grid-cols-4 grid-rows-4 gap-1 p-2 w-full h-full opacity-80">
<div class="bg-primary"></div><div class="bg-transparent"></div><div class="bg-primary"></div><div class="bg-primary"></div>
<div class="bg-primary"></div><div class="bg-primary"></div><div class="bg-transparent"></div><div class="bg-transparent"></div>
<div class="bg-transparent"></div><div class="bg-primary"></div><div class="bg-primary"></div><div class="bg-primary"></div>
<div class="bg-primary"></div><div class="bg-transparent"></div><div class="bg-primary"></div><div class="bg-primary"></div>
</div>
</div>
<div class="text-center">
<span class="text-xs font-bold uppercase tracking-widest text-on-surface-variant block mb-1">Kode Pickup</span>
<span class="text-2xl font-headline font-black text-primary tracking-widest">GIAT-X29</span>
</div>
</div>
</header>
<!-- Status Timeline (Bento Style) -->
<section class="grid grid-cols-1 md:grid-cols-3 gap-1">
<div class="bg-surface-container-high/40 p-8 rounded-t-3xl md:rounded-l-3xl md:rounded-tr-none flex flex-col items-center text-center space-y-4">
<div class="w-12 h-12 bg-primary text-on-primary rounded-full flex items-center justify-center">
<span class="material-symbols-outlined" data-icon="check_circle" style="font-variation-settings: 'FILL' 1;">check_circle</span>
</div>
<div>
<h3 class="font-bold text-lg text-primary">Diproses</h3>
<p class="text-sm text-on-surface-variant">Pesanan telah diterima oleh sistem</p>
</div>
</div>
<div class="bg-surface-container-lowest p-8 flex flex-col items-center text-center space-y-4 border-y md:border-y-0 md:border-x border-surface-container-high relative">
<div class="w-12 h-12 bg-primary-container text-on-primary-container rounded-full flex items-center justify-center animate-pulse">
<span class="material-symbols-outlined" data-icon="restaurant" style="font-variation-settings: 'FILL' 1;">restaurant</span>
</div>
<div>
<h3 class="font-bold text-lg text-primary">Dimasak</h3>
<p class="text-sm text-on-surface-variant">Chef sedang menyiapkan hidangan Anda</p>
</div>
<!-- Progress Line Indicator -->
<div class="absolute bottom-0 left-0 w-full h-1 bg-surface-container-low overflow-hidden">
<div class="h-full bg-primary-container w-2/3"></div>
</div>
</div>
<div class="bg-surface-container-high/20 p-8 rounded-b-3xl md:rounded-r-3xl md:rounded-bl-none flex flex-col items-center text-center space-y-4 opacity-50">
<div class="w-12 h-12 bg-surface-container-highest text-on-surface-variant rounded-full flex items-center justify-center">
<span class="material-symbols-outlined" data-icon="shopping_basket">shopping_basket</span>
</div>
<div>
<h3 class="font-bold text-lg text-on-surface-variant">Siap diambil</h3>
<p class="text-sm text-on-surface-variant">Menunggu verifikasi di counter</p>
</div>
</div>
</section>
<!-- Order Summary Section -->
<section class="space-y-6">
<div class="flex items-center justify-between">
<h2 class="text-2xl font-bold tracking-tight text-primary">Detail Pesanan</h2>
<div class="text-secondary font-semibold flex items-center gap-2">
<span class="material-symbols-outlined text-base" data-icon="sunny">sunny</span>
<span class="text-sm">Ideal untuk makan siang di luar</span>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-8">
<!-- Items List -->
<div class="space-y-4">
<div class="bg-surface-container-lowest p-4 rounded-3xl flex gap-4 items-center transition-all hover:scale-[1.02]">
<img alt="Nasi Goreng" class="w-20 h-20 rounded-2xl object-cover" data-alt="Authentic Indonesian Nasi Goreng with fried egg on top, garnished with fresh cucumber and tomato slices, warm natural lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCqhILRJiEZoyN_-Pr6FuYQtaUau8007kDZUU_O1A0WalkHRg9vMyyaANNIhqfvNTLC29D7z0jo2ACrQsrmlWMlt-Jz2upoZD1vDppc7_d_pUFSnkjzSXUvjuPvfCs8P4NVwgJ0YA446ZpRCDOf0bMvkt4Rd29-_0Panpyr89l3wQWM3OrCDaJuXt2LHdaJdyRzrjuP8uFfodCSw81Kj8CAis_AtExxO2xvaEHLKssh5NP0vW6s7SteIuyWvbCzkyp6PJgvZTSt8H0t"/>
<div class="flex-1">
<div class="flex justify-between items-start">
<h4 class="font-bold text-on-surface">Nasi Goreng Spesial</h4>
<span class="text-primary font-bold text-sm">Rp 18.000</span>
</div>
<p class="text-xs text-on-surface-variant mt-1">Level 3 • Telur Mata Sapi</p>
<p class="text-xs font-bold text-secondary mt-2">1x Unit</p>
</div>
</div>
<div class="bg-surface-container-lowest p-4 rounded-3xl flex gap-4 items-center transition-all hover:scale-[1.02]">
<img alt="Es Teh Manis" class="w-20 h-20 rounded-2xl object-cover" data-alt="Iced tea in a tall glass with lemon slice and mint leaves, condensation on glass, bright airy cafe setting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCFH0D5Uo6xhCPqruG_EXdYoax0KARpzbmVj1o0vk6jwga85bN8IWH8FpHnuiKoqmIageMtMPdszQS6vrPXr_Qiv2tLluJ7h47b2OP2DNTe1i5uzfPVSkoYpGLg7zC2IbDoCIqa9vbSbfjPGdDDAJzZMMJfcbKfGZfra-E9H1W3AazvgEhRq6cpn401oKE6govc2vyrB9-czDmZ0412wb2LbCkoC3im6HgJyVY_IhJbSVAiuE5ZO5kPuw_q6KxA2dLQhuWuTHvrHDJ5"/>
<div class="flex-1">
<div class="flex justify-between items-start">
<h4 class="font-bold text-on-surface">Es Teh Manis Gede</h4>
<span class="text-primary font-bold text-sm">Rp 5.000</span>
</div>
<p class="text-xs text-on-surface-variant mt-1">Less Sugar</p>
<p class="text-xs font-bold text-secondary mt-2">1x Unit</p>
</div>
</div>
</div>
<!-- Receipt & Logistics -->
<div class="bg-surface-container-low p-8 rounded-3xl flex flex-col justify-between">
<div class="space-y-4">
<div class="flex justify-between text-sm">
<span class="text-on-surface-variant">Subtotal</span>
<span class="font-semibold">Rp 23.000</span>
</div>
<div class="flex justify-between text-sm">
<span class="text-on-surface-variant">Service Fee</span>
<span class="font-semibold">Rp 1.000</span>
</div>
<div class="border-t border-outline-variant/30 pt-4 flex justify-between items-center">
<span class="text-lg font-bold text-primary">Total Bayar</span>
<span class="text-lg font-black text-primary">Rp 24.000</span>
</div>
</div>
<div class="mt-8 p-4 bg-surface-container-lowest rounded-2xl flex items-center gap-3">
<span class="material-symbols-outlined text-primary" data-icon="receipt_long">receipt_long</span>
<div>
<p class="text-xs font-bold uppercase tracking-wider text-on-surface-variant">Metode Pembayaran</p>
<p class="text-sm font-semibold text-on-surface">GiatPay E-Wallet</p>
</div>
</div>
</div>
</div>
</section>
<!-- Dynamic Action -->
<section class="bg-[#800000] rounded-3xl p-8 flex flex-col md:flex-row items-center justify-between gap-6 overflow-hidden relative">
<!-- Background Decoration -->
<div class="absolute -right-10 -top-10 w-40 h-40 bg-[#570000] rounded-full blur-3xl opacity-50"></div>
<div class="relative z-10">
<h3 class="text-xl font-bold text-white mb-2 font-headline">Butuh Bantuan dengan Pesanan?</h3>
<p class="text-primary-fixed-dim max-w-sm">Hubungi merchant langsung jika ada permintaan khusus atau perubahan mendadak.</p>
</div>
<div class="flex gap-3 relative z-10">
<button class="bg-white text-primary px-6 py-3 rounded-full font-bold transition-transform hover:scale-105 active:scale-95 text-sm">
                    Hubungi Kantin
                </button>
<button class="border border-white/30 text-white px-6 py-3 rounded-full font-bold transition-transform hover:scale-105 active:scale-95 text-sm">
                    Batalkan
                </button>
</div>
</section>
</main>
<!-- Bottom Navigation Bar -->
<footer class="fixed bottom-0 left-0 w-full z-50 flex justify-around items-center px-4 pb-6 pt-3 bg-[#faf9f6]/80 dark:bg-stone-900/80 backdrop-blur-md shadow-[0_-8px_24px_rgba(128,0,0,0.04)] rounded-t-3xl">
<div class="flex flex-col items-center justify-center text-[#5a413d] dark:text-stone-500 hover:scale-110 transition-transform tap-highlight-none active:scale-90">
<span class="material-symbols-outlined" data-icon="restaurant_menu">restaurant_menu</span>
<span class="text-[10px] font-bold uppercase tracking-widest mt-1">Menu</span>
</div>
<div class="flex flex-col items-center justify-center text-[#570000] dark:text-white after:content-[''] after:w-1 after:h-1 after:bg-[#800000] after:rounded-full after:mt-1 tap-highlight-none">
<span class="material-symbols-outlined" data-icon="assignment" style="font-variation-settings: 'FILL' 1;">assignment</span>
<span class="text-[10px] font-bold uppercase tracking-widest">Orders</span>
</div>
<div class="flex flex-col items-center justify-center text-[#5a413d] dark:text-stone-500 hover:scale-110 transition-transform tap-highlight-none active:scale-90">
<span class="material-symbols-outlined" data-icon="shopping_bag">shopping_bag</span>
<span class="text-[10px] font-bold uppercase tracking-widest mt-1">Cart</span>
</div>
<div class="flex flex-col items-center justify-center text-[#5a413d] dark:text-stone-500 hover:scale-110 transition-transform tap-highlight-none active:scale-90">
<span class="material-symbols-outlined" data-icon="person">person</span>
<span class="text-[10px] font-bold uppercase tracking-widest mt-1">Profile</span>
</div>
</footer>
</body></html>