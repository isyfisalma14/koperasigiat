<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Menu Segar - Koperasi Giat</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;700;800&amp;family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "tertiary-fixed-dim": "#bcc2ff",
                        "primary-fixed": "#ffdad4",
                        "primary-fixed-dim": "#ffb4a8",
                        "primary-container": "#800000",
                        "secondary-fixed-dim": "#ffb4a8",
                        "secondary-fixed": "#ffdad4",
                        "secondary-container": "#ff9b8c",
                        "outline-variant": "#e2bfb9",
                        "on-primary-fixed-variant": "#8f0f07",
                        "inverse-surface": "#2f312f",
                        "on-background": "#1a1c1a",
                        "on-error-container": "#93000a",
                        "on-surface-variant": "#5a413d",
                        "primary": "#570000",
                        "on-tertiary-fixed-variant": "#1830c2",
                        "surface-container-high": "#e9e8e5",
                        "on-secondary-container": "#783126",
                        "surface": "#faf9f6",
                        "secondary": "#96473b",
                        "background": "#faf9f6",
                        "surface-dim": "#dbdad7",
                        "surface-bright": "#faf9f6",
                        "tertiary-fixed": "#dfe0ff",
                        "tertiary-container": "#0021b9",
                        "tertiary": "#00137f",
                        "surface-variant": "#e3e2e0",
                        "on-error": "#ffffff",
                        "on-tertiary": "#ffffff",
                        "outline": "#8e706c",
                        "error": "#ba1a1a",
                        "surface-container-highest": "#e3e2e0",
                        "on-primary-fixed": "#410000",
                        "on-secondary-fixed-variant": "#783026",
                        "surface-container-lowest": "#ffffff",
                        "surface-container": "#efeeeb",
                        "on-secondary-fixed": "#3e0502",
                        "on-surface": "#1a1c1a",
                        "on-primary-container": "#ff8371",
                        "surface-tint": "#b22b1d",
                        "surface-container-low": "#f4f3f1",
                        "on-tertiary-container": "#94a0ff",
                        "on-secondary": "#ffffff",
                        "on-tertiary-fixed": "#000c61",
                        "inverse-primary": "#ffb4a8",
                        "inverse-on-surface": "#f2f1ee",
                        "error-container": "#ffdad6",
                        "on-primary": "#ffffff"
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
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #faf9f6; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        .glass-nav { backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px); }
        .primary-gradient { background: linear-gradient(135deg, #570000 0%, #800000 100%); }
        .product-shadow { box-shadow: 0 12px 32px rgba(128, 0, 0, 0.06); }
    </style>
</head>
<body class="text-on-surface selection:bg-primary-fixed selection:text-primary">
<!-- Top Navigation Bar -->
<nav class="fixed top-0 w-full z-50 bg-[#faf9f6]/80 dark:bg-[#1a1c1a]/80 backdrop-blur-xl">
<div class="flex justify-between items-center px-6 py-4 w-full max-w-7xl mx-auto">
<div class="flex items-center gap-4">
<span class="text-xl font-black text-[#800000] dark:text-[#faf9f6] font-['Manrope'] tracking-tight">Koperasi Giat</span>
</div>
<div class="hidden md:flex items-center gap-8">
<a class="text-[#800000] font-bold font-['Manrope'] hover:bg-[#f4f3f1] transition-colors px-3 py-1 rounded-lg" href="#">Beranda</a>
<a class="text-[#5a413d] dark:text-[#e9e8e5] font-['Manrope'] hover:bg-[#f4f3f1] transition-colors px-3 py-1 rounded-lg" href="#">Menu</a>
<a class="text-[#5a413d] dark:text-[#e9e8e5] font-['Manrope'] hover:bg-[#f4f3f1] transition-colors px-3 py-1 rounded-lg" href="#">Pesanan</a>
</div>
<div class="flex items-center gap-4">
<button class="p-2 text-[#5a413d] hover:bg-[#f4f3f1] rounded-full transition-colors active:scale-95">
<span class="material-symbols-outlined" data-icon="shopping_cart">shopping_cart</span>
</button>
<button class="p-2 text-[#5a413d] hover:bg-[#f4f3f1] rounded-full transition-colors active:scale-95">
<span class="material-symbols-outlined" data-icon="notifications">notifications</span>
</button>
<div class="w-8 h-8 rounded-full bg-surface-container-high overflow-hidden">
<img alt="User profile avatar" data-alt="close-up portrait of a smiling young male student with a neat haircut against a blurred campus background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAo0cINDj5qoRmCPdiEmkFlcVtDQc_3DCHGDAFLRbLCYqbO90rBa6E-rvyxILKueaULhalAH6xdD6BuozEYgkQ6QP9N1OkyUWaU5jk5c-ALOwkH61dwr8RUPLY6EfMkwURnr5r43XvHWYgNXuiHMT1oACVKNthNjhQ_EviUEryqLhfWb7ITr6xP_u2l9tICGtRhu1gxgnQm5rDAaJF4bLnwg1ckNicoZahgn7A123PQbzmeLfGBYiDhLU4H3Dw1TP4phs4LwM0jvhuq"/>
</div>
</div>
</div>
<div class="bg-[#f4f3f1] dark:bg-[#2a2c2a] h-[1px] w-full opacity-50"></div>
</nav>
<main class="pt-28 pb-32 px-6 max-w-7xl mx-auto">
<!-- Header Section -->
<header class="mb-12">
<h1 class="font-headline text-4xl md:text-5xl font-extrabold text-primary-container tracking-tight mb-3">Menu Segar Hari Ini</h1>
<p class="font-body text-on-surface-variant text-lg max-w-2xl leading-relaxed">Pilihan favorit untuk mendinginkan harimu di kampus.</p>
</header>
<!-- Category Pills (Design System Rule 5) -->
<div class="flex gap-3 mb-10 overflow-x-auto pb-2 no-scrollbar">
<button class="primary px-6 py-2.5 bg-primary text-on-primary rounded-full font-semibold scale-105 transition-transform whitespace-nowrap">Semua Segar</button>
<button class="px-6 py-2.5 bg-surface-container-high text-on-surface-variant rounded-full font-medium hover:opacity-80 transition-opacity whitespace-nowrap">Minuman Dingin</button>
<button class="px-6 py-2.5 bg-surface-container-high text-on-surface-variant rounded-full font-medium hover:opacity-80 transition-opacity whitespace-nowrap">Camilan Sehat</button>
<button class="px-6 py-2.5 bg-surface-container-high text-on-surface-variant rounded-full font-medium hover:opacity-80 transition-opacity whitespace-nowrap">Kopi Spesial</button>
</div>
<!-- Product Grid -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
<!-- Item 1: Es Teh Manis -->
<div class="bg-surface-container-lowest rounded-xl overflow-hidden product-shadow group flex flex-col">
<div class="relative aspect-[4/3] overflow-hidden">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="a tall glass of iced jasmine tea with condensation droplets, lemon slice, and fresh mint garnish on a minimalist stone surface" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCRtMpXHdk7sJrxO4-DhkLrC9zedfEB6kqh9IbKGXFJVCNVQ4ZXN5QZz9-oX854cHNmFjGJvO7Ydw3NBCanLvimll-BSyD-fBJbSnI3xr9SBjwXGLzrji6T7jGvOEdJYhLwN1VubgWamZ58D8XCp3L3qPYPf2MIj214MyTkaP4FzdXPh3vPQc_eGtk-ffeR3LXX8XEHrcM_N2JWYSOiWXbAQFOEadgP7_fcDELulwGmKZoo_F-5XNodMLJhiKz9YRs0Spz651SixNA5"/>
<div class="absolute top-4 left-4">
<span class="bg-secondary/90 text-white text-[10px] font-bold px-3 py-1 rounded-full tracking-wider uppercase backdrop-blur-sm">Ready Stock, Siap Ambil!</span>
</div>
</div>
<div class="p-6 flex flex-col flex-grow">
<div class="flex justify-between items-start mb-4">
<h3 class="font-headline text-xl font-bold text-on-surface">Es Teh Manis</h3>
<span class="font-bold text-secondary">Rp 5.000</span>
</div>
<p class="text-sm text-on-surface-variant mb-8 line-clamp-2">Teh melati pilihan dengan es kristal yang menyegarkan dahaga seketika.</p>
<button class="mt-auto primary-gradient text-on-primary py-3 rounded-xl font-bold flex items-center justify-center gap-2 active:scale-95 duration-200">
<span class="material-symbols-outlined text-lg" data-icon="add_shopping_cart">add_shopping_cart</span>
                        Add to Cart
                    </button>
</div>
</div>
<!-- Item 2: Es Jeruk Peras -->
<div class="bg-surface-container-lowest rounded-xl overflow-hidden product-shadow group flex flex-col">
<div class="relative aspect-[4/3] overflow-hidden">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="chilled glass of freshly squeezed orange juice with pulp and ice cubes, vibrant orange color, natural sunlight lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDHaFGRcaDvJ-E9kq4ObVweNsE3u1as_329cugooxNJFYPQSnCqKvqqRfa6kr3Gmu4JSkE421j2wcoS7dJb3_FJHlB6pkIB-5ZXOmKR07t7xzj77k-eMM9EDRJV_-cbkEXIcY2VZ7vaJ1Ir8sn5Ps-0To5AG4dcSvxdfDf3gM1GcxOxlJTqXcs_MHEHsVrFvV_HS7CNlOV2YXmrICjc5IsP0t2wirdXwNZCRvXZP9VFR05XYudRC83bAK-L9nd5YQVAQJOYvGEbed2L"/>
<div class="absolute top-4 left-4">
<span class="bg-secondary/90 text-white text-[10px] font-bold px-3 py-1 rounded-full tracking-wider uppercase backdrop-blur-sm">Ready Stock, Siap Ambil!</span>
</div>
</div>
<div class="p-6 flex flex-col flex-grow">
<div class="flex justify-between items-start mb-4">
<h3 class="font-headline text-xl font-bold text-on-surface">Es Jeruk Peras</h3>
<span class="font-bold text-secondary">Rp 10.000</span>
</div>
<p class="text-sm text-on-surface-variant mb-8 line-clamp-2">Jeruk peras murni tanpa pemanis buatan, kaya akan Vitamin C alami.</p>
<button class="mt-auto primary-gradient text-on-primary py-3 rounded-xl font-bold flex items-center justify-center gap-2 active:scale-95 duration-200">
<span class="material-symbols-outlined text-lg" data-icon="add_shopping_cart">add_shopping_cart</span>
                        Add to Cart
                    </button>
</div>
</div>
<!-- Item 3: Cold Brew Coffee -->
<div class="bg-surface-container-lowest rounded-xl overflow-hidden product-shadow group flex flex-col">
<div class="relative aspect-[4/3] overflow-hidden">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="sleek clear bottle of dark cold brew coffee with a minimalist label on a wooden table in a sunlit modern cafe" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAQCtAiFaAvePU0TAmEzP2rhtPZQBCdJAMWBkESNhxa9z5DJB0W8DEVfenF1McfFoHGyAisOghhJSgXIJ0X013CYlrlOcEkehkBZrZ6GBlwaiUlodLgapY4lhtWtN9xC0g9_nYOm2OkmRc01JwjOunpOh6K1JLBUXF1xTZsJmNtqS1rX6FE5Bhdf1dDY0H2AveeuEm1UY2FQq_HW6Edga1cnsS4K-EXHhocEgGWbJFJ04vo_e9eXNmfqrbetCHblhQmpwuwxSzha1SB"/>
<div class="absolute top-4 left-4">
<span class="bg-secondary/90 text-white text-[10px] font-bold px-3 py-1 rounded-full tracking-wider uppercase backdrop-blur-sm">Ready Stock, Siap Ambil!</span>
</div>
</div>
<div class="p-6 flex flex-col flex-grow">
<div class="flex justify-between items-start mb-4">
<h3 class="font-headline text-xl font-bold text-on-surface">Cold Brew Coffee</h3>
<span class="font-bold text-secondary">Rp 18.000</span>
</div>
<p class="text-sm text-on-surface-variant mb-8 line-clamp-2">Biji kopi arabika yang diseduh dingin selama 12 jam untuk rasa halus dan rendah asam.</p>
<button class="mt-auto primary-gradient text-on-primary py-3 rounded-xl font-bold flex items-center justify-center gap-2 active:scale-95 duration-200">
<span class="material-symbols-outlined text-lg" data-icon="add_shopping_cart">add_shopping_cart</span>
                        Add to Cart
                    </button>
</div>
</div>
<!-- Item 4: Es Kopi Susu Aren -->
<div class="bg-surface-container-lowest rounded-xl overflow-hidden product-shadow group flex flex-col">
<div class="relative aspect-[4/3] overflow-hidden">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="iced latte with distinct layers of dark espresso, white milk, and brown palm sugar syrup at the bottom in a plastic cup" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCpeY9k8qEZpWJcBOydeGTTUhfHFS4oVixJeG6peN3HdIUOdhxOUMTyKEedUwaICTRnwPGQSSem0q86Hrzk3q1Kd3Sj_pa8TsusHeCQOK1VRwBeCZUY8lodUs6muOnZC2UJUUy2jCvG02_rl_u_vyGNqk_5z_cEAYyI-n5_nKhPu1VHbb_alxE69kzkI7-pKFUC2zx6zLvp2QBp2rtU-ZlMWp1cMmf8AYrAZScvor4zzIdwgJa3rGYMydGldfEGo9t5VgcTMAMIzkpu"/>
<div class="absolute top-4 left-4">
<span class="bg-secondary/90 text-white text-[10px] font-bold px-3 py-1 rounded-full tracking-wider uppercase backdrop-blur-sm">Ready Stock, Siap Ambil!</span>
</div>
</div>
<div class="p-6 flex flex-col flex-grow">
<div class="flex justify-between items-start mb-4">
<h3 class="font-headline text-xl font-bold text-on-surface">Es Kopi Susu Aren</h3>
<span class="font-bold text-secondary">Rp 15.000</span>
</div>
<p class="text-sm text-on-surface-variant mb-8 line-clamp-2">Perpaduan espresso mantap, susu segar, dan manisnya gula aren yang otentik.</p>
<button class="mt-auto primary-gradient text-on-primary py-3 rounded-xl font-bold flex items-center justify-center gap-2 active:scale-95 duration-200">
<span class="material-symbols-outlined text-lg" data-icon="add_shopping_cart">add_shopping_cart</span>
                        Add to Cart
                    </button>
</div>
</div>
<!-- Item 5: Fruit Salad -->
<div class="bg-surface-container-lowest rounded-xl overflow-hidden product-shadow group flex flex-col">
<div class="relative aspect-[4/3] overflow-hidden">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="colorful bowl of mixed tropical fruits including dragon fruit, mango, and melon, beautifully arranged with a sprig of mint" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA-knI17H-4gHKKeatEo40BvnXjLJwGsy9c0W7lvjbiz-wUb8eLdjN70lhoqebC3zx6_EkA3EhJurKImFiv8gjfpaRDjUnkYR6R3FVVLnnx_O1nRIthe4nwI9RtzzvpXJ_Xcx4Fbgr3j-5oc2vljju264U3vn5dPCDtJVx7bnJvmtvZaO54qHYuvPeNMK6rDzOZ8AuPqFhN-x6LNiv7Sku-6HMEQ6loo4W09ToIpXOPZf0HM5jDcENdqVn-5_HwilKQTXCbOxQFVoWI"/>
<div class="absolute top-4 left-4">
<span class="bg-secondary/90 text-white text-[10px] font-bold px-3 py-1 rounded-full tracking-wider uppercase backdrop-blur-sm">Ready Stock, Siap Ambil!</span>
</div>
</div>
<div class="p-6 flex flex-col flex-grow">
<div class="flex justify-between items-start mb-4">
<h3 class="font-headline text-xl font-bold text-on-surface">Fruit Salad</h3>
<span class="font-bold text-secondary">Rp 12.000</span>
</div>
<p class="text-sm text-on-surface-variant mb-8 line-clamp-2">Potongan buah tropis segar harian dengan dressing yogurt madu yang ringan.</p>
<button class="mt-auto primary-gradient text-on-primary py-3 rounded-xl font-bold flex items-center justify-center gap-2 active:scale-95 duration-200">
<span class="material-symbols-outlined text-lg" data-icon="add_shopping_cart">add_shopping_cart</span>
                        Add to Cart
                    </button>
</div>
</div>
<!-- Item 6: Chilled Yogurt -->
<div class="bg-surface-container-lowest rounded-xl overflow-hidden product-shadow group flex flex-col">
<div class="relative aspect-[4/3] overflow-hidden">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="a small glass jar of creamy white yogurt topped with honey and granola, presented on a light marble surface" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAmv17d22Q71El6cGI-uUMrWUPUh9OyGBSb79LWbJwKXnAwb-NpfPOhH2tPXQa0-v6bED69B9F5NVh6NAi72xrY2AvcSwFLOpiaJ5XxSkHs-iNUMVBOzLOi5Q5ext0O7QzE7xyUowtqAck7csschLwvswmfN7JRQ5B7zYPgubP3Dxy5yMMoKeQw9LwPCde5jNM7MM1-eMZADvdUlUEU2PuemrhxuIHGFePzleclGmHUvBbwYvMihTv-XqTazbi6tUOUFFtRxWU7xttp"/>
<div class="absolute top-4 left-4">
<span class="bg-secondary/90 text-white text-[10px] font-bold px-3 py-1 rounded-full tracking-wider uppercase backdrop-blur-sm">Ready Stock, Siap Ambil!</span>
</div>
</div>
<div class="p-6 flex flex-col flex-grow">
<div class="flex justify-between items-start mb-4">
<h3 class="font-headline text-xl font-bold text-on-surface">Chilled Yogurt</h3>
<span class="font-bold text-secondary">Rp 14.000</span>
</div>
<p class="text-sm text-on-surface-variant mb-8 line-clamp-2">Greek yogurt kental yang didinginkan sempurna dengan topping granola renyah.</p>
<button class="mt-auto primary-gradient text-on-primary py-3 rounded-xl font-bold flex items-center justify-center gap-2 active:scale-95 duration-200">
<span class="material-symbols-outlined text-lg" data-icon="add_shopping_cart">add_shopping_cart</span>
                        Add to Cart
                    </button>
</div>
</div>
</div>
</main>
<!-- Bottom Navigation Bar (Mobile) -->
<nav class="md:hidden fixed bottom-0 left-0 w-full flex justify-around items-center px-4 pt-3 pb-6 bg-[#faf9f6]/80 dark:bg-[#1a1c1a]/80 backdrop-blur-xl z-50 rounded-t-[2rem] shadow-[0_-4px_20px_rgba(128,0,0,0.04)]">
<a class="flex flex-col items-center justify-center text-[#5a413d] dark:text-[#a18d8a] font-['Plus_Jakarta_Sans'] text-[10px] font-medium transition-opacity active:scale-90 duration-300" href="#">
<span class="material-symbols-outlined mb-1" data-icon="home">home</span>
            Beranda
        </a>
<a class="flex flex-col items-center justify-center text-[#800000] dark:text-[#faf9f6] font-['Plus_Jakarta_Sans'] text-[10px] font-medium after:content-[''] after:w-1 after:h-1 after:bg-[#800000] after:rounded-full after:mt-1 transition-opacity active:scale-90 duration-300" href="#">
<span class="material-symbols-outlined mb-1" data-icon="restaurant_menu">restaurant_menu</span>
            Menu
        </a>
<a class="flex flex-col items-center justify-center text-[#5a413d] dark:text-[#a18d8a] font-['Plus_Jakarta_Sans'] text-[10px] font-medium transition-opacity active:scale-90 duration-300" href="#">
<span class="material-symbols-outlined mb-1" data-icon="receipt_long">receipt_long</span>
            Pesanan
        </a>
<a class="flex flex-col items-center justify-center text-[#5a413d] dark:text-[#a18d8a] font-['Plus_Jakarta_Sans'] text-[10px] font-medium transition-opacity active:scale-90 duration-300" href="#">
<span class="material-symbols-outlined mb-1" data-icon="person">person</span>
            Profil
        </a>
</nav>
</body></html>