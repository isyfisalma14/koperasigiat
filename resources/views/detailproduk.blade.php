<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Detail Produk | Koperasi Giat</title>
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
    </style>
</head>
<body class="bg-background text-on-surface">
<!-- TopNavBar -->
<nav class="bg-[#faf9f6]/80 backdrop-blur-md sticky top-0 z-50 flex justify-between items-center px-6 py-4 w-full">
<div class="text-2xl font-bold tracking-tight text-[#570000]">Koperasi Giat</div>
<!-- Desktop Nav -->
<div class="hidden md:flex items-center space-y-0 space-x-8">
<a class="text-[#5a413d] hover:bg-[#f4f3f1]/50 transition-colors px-3 py-1 rounded-lg" href="#">Menu</a>
<a class="text-[#5a413d] hover:bg-[#f4f3f1]/50 transition-colors px-3 py-1 rounded-lg" href="#">Orders</a>
<a class="text-[#5a413d] hover:bg-[#f4f3f1]/50 transition-colors px-3 py-1 rounded-lg" href="#">Cart</a>
<a class="text-[#5a413d] hover:bg-[#f4f3f1]/50 transition-colors px-3 py-1 rounded-lg" href="#">Profile</a>
</div>
<div class="flex items-center space-x-4">
<button class="p-2 hover:bg-[#f4f3f1]/50 rounded-full transition-colors">
<span class="material-symbols-outlined text-[#800000]">shopping_cart</span>
</button>
<button class="p-2 hover:bg-[#f4f3f1]/50 rounded-full transition-colors">
<span class="material-symbols-outlined text-[#800000]">notifications</span>
</button>
<img alt="Student profile" class="w-10 h-10 rounded-full object-cover border-2 border-surface-container-high" data-alt="Close-up portrait of a student smiling, clean corporate photography style with soft natural lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDMWfK60cHtb68zBIIjk-ENY1S9jaF91VHnI0CsEOFbenNL_KaFEjB-IDK81a1kYRMiHvLvlxL1dgzJDqnKZZT7IaQNL1AjXdwsK3bhVYhckz7H6OwWv4uCRSzXEWzL9G08iucGqmZMkgRXK1Vg_KlMxKVpn3mb6a8Hy125zwBQwg3fzZUJ8VDSRv39sf1ONGvD-YcXhR_jFdDW4YtjrLCkaqX8pJErQG4GKrZTigwlmZ0We5KYD3Ee4eAwKGci17fp9Sldue68dtTP"/>
</div>
</nav>
<!-- Main Content Canvas -->
<main class="max-w-7xl mx-auto px-6 py-12">
<!-- Back Action -->
<div class="mb-8">
<button class="flex items-center text-on-surface-variant hover:text-primary transition-colors group">
<span class="material-symbols-outlined mr-2 group-hover:-translate-x-1 transition-transform">arrow_back</span>
<span class="font-semibold">Kembali ke Menu</span>
</button>
</div>
<!-- Product Detail Section: Asymmetric Layout -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
<!-- Product Image Cluster -->
<div class="lg:col-span-7">
<div class="relative bg-surface-container-lowest rounded-3xl overflow-hidden shadow-[0_12px_32px_rgba(128,0,0,0.06)]">
<img alt="Nasi Lemak Spesial" class="w-full aspect-[4/3] object-cover" data-alt="Gourmet nasi lemak on a white plate with coconut rice, sambal, crispy anchovies, and a hard-boiled egg, editorial food photography" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDWcWmh71vQZprcu1vaHM6Bo20FIVrVXyPGsRcslZqT-6RdKn28XhB4k7QjUwWDKTJ-m3n7Nwf5aPD06BskEiuvngDjuw2N28XNxHULQZWot_gnTkbzwVOzMnvQsUwlrnEXabsU5Qvg5XQfQ3xUE3VuS4omi2MEmzCSFes2nv4l8V0vSVWTOCKufpXN3Mj1ENCHL2NKCXVm2Nz5uzsCZ_a6gd86GJft2n0rdLgvU5O_7g41ZzjKuM8LDrkEGzh1ON8UwZ-dNqfsEplM"/>
<!-- Weather Contextual Badge -->
<div class="absolute top-6 left-6 bg-white/80 backdrop-blur-md px-4 py-2 rounded-full flex items-center gap-2 border border-outline-variant/20">
<span class="material-symbols-outlined text-secondary text-sm">wb_sunny</span>
<span class="text-xs font-bold text-on-surface-variant tracking-wider uppercase">Ideal untuk cuaca cerah</span>
</div>
</div>
<!-- Secondary Images / Detail Views -->
<div class="mt-6 flex gap-4">
<div class="w-24 h-24 rounded-2xl overflow-hidden bg-surface-container-lowest border-2 border-primary/10">
<img alt="Detail 1" class="w-full h-full object-cover" data-alt="Close up of steaming hot fragrant coconut rice in a bowl, soft natural morning light" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDkDHxV5IJ_9HXsWbs5iAl7KDY2RcMzywIGJ3Z-KaYaM9BJjHt1_X1pObFuZbJrSMz6omR4GIdK9aADUZlrduW3VlKpFYzRRaQ3fVxW99UCT6cI7EUm937Ef-9VGDEUXfmwnGzfcfwjC9CnXfYJgymDIaBNzx6tvA9IzSeO16NTjcK-XedM-yNKVP1rAAdgsNL0KIUUWy7V78LpnvICLqJ5N22CnyYvScMziGL4jAhI8oJf6u-6iBTsm5K8SBKK0d2ECNqRPOPn6g38"/>
</div>
<div class="w-24 h-24 rounded-2xl overflow-hidden bg-surface-container-low hover:bg-surface-container-lowest transition-colors cursor-pointer">
<img alt="Detail 2" class="w-full h-full object-cover" data-alt="Macro shot of spicy red sambal sauce with golden fried shallots, dramatic side lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBVkQeWiQ4n6h8oGhU47ggfteeKoBqnx6cnW75hbzj2eQ3cZPT_5dq6YuzX1R41uGk8wejPP0VwhoTVMqnXF36Hhc3rTJUfiSVShjXAjPSxidxyu319clu6tsnGm6rxxQ7JfJZ85Iw4_21_cPxnKSAdosPxG0B7BUiLBsX9f5xhNcvu2mxqlDWckfvsT5FCTIiLlp3KgbFeE7mnA26M8BJZc2CLxzo3OoOYYGgJ04ktSgqLxX5Yy1ReEi1OL49-aPdsV-VixToIOhC7"/>
</div>
</div>
</div>
<!-- Product Info Column -->
<div class="lg:col-span-5 sticky top-32">
<div class="flex flex-col space-y-8">
<header>
<span class="text-secondary font-bold tracking-widest text-xs uppercase mb-3 block">Makanan Utama</span>
<h1 class="text-4xl md:text-5xl font-extrabold text-primary leading-tight tracking-tight mb-4">Nasi Lemak Spesial Koperasi</h1>
<div class="flex items-center gap-4">
<span class="text-3xl font-bold text-on-surface">Rp 25.000</span>
<div class="px-3 py-1 bg-surface-container-high rounded-full flex items-center">
<span class="material-symbols-outlined text-sm text-secondary mr-1" data-weight="fill">star</span>
<span class="text-xs font-bold">4.8</span>
</div>
</div>
</header>
<div class="bg-surface-container-low p-6 rounded-2xl">
<p class="text-on-surface-variant leading-relaxed mb-6">
                            Nikmati hidangan autentik kampus yang memadukan nasi santan harum, sambal rahasia khas Koperasi Giat, kacang tanah renyah, teri goreng, dan ayam rempah yang juicy. Pilihan favorit mahasiswa sejak 1995.
                        </p>
<!-- Metadata Bento -->
<div class="grid grid-cols-2 gap-4">
<div class="flex items-center space-x-3">
<div class="w-10 h-10 rounded-full bg-white flex items-center justify-center text-secondary">
<span class="material-symbols-outlined">schedule</span>
</div>
<div>
<p class="text-[10px] uppercase tracking-widest font-bold text-on-surface-variant">Estimasi</p>
<p class="text-sm font-semibold text-on-surface">15-20 Menit</p>
</div>
</div>
<div class="flex items-center space-x-3">
<div class="w-10 h-10 rounded-full bg-white flex items-center justify-center text-secondary">
<span class="material-symbols-outlined">local_fire_department</span>
</div>
<div>
<p class="text-[10px] uppercase tracking-widest font-bold text-on-surface-variant">Energi</p>
<p class="text-sm font-semibold text-on-surface">540 Kcal</p>
</div>
</div>
</div>
</div>
<!-- Customization Inset -->
<div class="space-y-4">
<label class="text-sm font-bold text-primary block">Tingkat Kepedasan</label>
<div class="flex gap-3">
<button class="flex-1 py-3 rounded-xl bg-surface-container-high text-on-surface-variant font-bold text-xs uppercase tracking-widest border-2 border-transparent hover:border-primary/20 transition-all">Sedang</button>
<button class="flex-1 py-3 rounded-xl bg-primary text-white font-bold text-xs uppercase tracking-widest border-2 border-primary shadow-lg shadow-primary/20">Pedas</button>
<button class="flex-1 py-3 rounded-xl bg-surface-container-high text-on-surface-variant font-bold text-xs uppercase tracking-widest border-2 border-transparent hover:border-primary/20 transition-all">Extra</button>
</div>
</div>
<!-- CTA Section -->
<div class="pt-4 flex flex-col space-y-4">
<button class="w-full bg-gradient-to-br from-primary to-primary-container text-white py-5 rounded-full font-bold text-lg flex items-center justify-center gap-3 transition-transform active:scale-95 shadow-[0_12px_24px_rgba(87,0,0,0.2)]">
<span class="material-symbols-outlined">add_shopping_cart</span>
                            Tambah ke Keranjang
                        </button>
<div class="flex justify-between items-center px-4">
<span class="text-xs text-on-surface-variant font-medium">Stok tersedia: <span class="text-on-surface font-bold">24 porsi</span></span>
<button class="text-primary font-bold text-xs uppercase tracking-widest flex items-center gap-1">
<span class="material-symbols-outlined text-sm">favorite</span>
                                Simpan Favorit
                            </button>
</div>
</div>
</div>
</div>
</div>
</main>
<!-- BottomNavBar (Mobile Only) -->
<div class="md:hidden fixed bottom-0 left-0 w-full z-50 flex justify-around items-center px-4 pb-6 pt-3 bg-[#faf9f6]/80 backdrop-blur-md rounded-t-3xl shadow-[0_-8px_24px_rgba(128,0,0,0.04)]">
<button class="flex flex-col items-center justify-center text-[#5a413d]">
<span class="material-symbols-outlined">restaurant_menu</span>
<span class="text-[10px] font-bold uppercase tracking-widest mt-1">Menu</span>
</button>
<button class="flex flex-col items-center justify-center text-[#5a413d]">
<span class="material-symbols-outlined">assignment</span>
<span class="text-[10px] font-bold uppercase tracking-widest mt-1">Orders</span>
</button>
<button class="flex flex-col items-center justify-center text-[#570000] after:content-[''] after:w-1 after:h-1 after:bg-[#800000] after:rounded-full after:mt-1">
<span class="material-symbols-outlined">shopping_bag</span>
<span class="text-[10px] font-bold uppercase tracking-widest mt-1">Cart</span>
</button>
<button class="flex flex-col items-center justify-center text-[#5a413d]">
<span class="material-symbols-outlined">person</span>
<span class="text-[10px] font-bold uppercase tracking-widest mt-1">Profile</span>
</button>
</div>
</body></html>