<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Order History - Koperasi Giat</title>
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
<body class="bg-background text-on-surface min-h-screen pb-24 md:pb-0">
<!-- Top Navigation Bar -->
<nav class="bg-[#faf9f6]/80 dark:bg-stone-900/80 backdrop-blur-md flex justify-between items-center px-6 py-4 w-full z-50 docked full-width top-0 sticky">
<div class="text-2xl font-bold tracking-tight text-[#570000] dark:text-[#f4f3f1]">
            Koperasi Giat
        </div>
<!-- Desktop Nav Items -->
<div class="hidden md:flex items-center space-x-8">
<a class="text-[#5a413d] dark:text-stone-400 font-semibold hover:bg-[#f4f3f1]/50 dark:hover:bg-stone-800 transition-colors px-3 py-1 rounded-lg" href="#">Menu</a>
<a class="text-[#570000] dark:text-white border-b-2 border-[#800000] font-semibold px-3 py-1" href="#">Orders</a>
<a class="text-[#5a413d] dark:text-stone-400 font-semibold hover:bg-[#f4f3f1]/50 dark:hover:bg-stone-800 transition-colors px-3 py-1 rounded-lg" href="#">Cart</a>
<a class="text-[#5a413d] dark:text-stone-400 font-semibold hover:bg-[#f4f3f1]/50 dark:hover:bg-stone-800 transition-colors px-3 py-1 rounded-lg" href="#">Profile</a>
</div>
<div class="flex items-center space-x-4">
<button class="p-2 rounded-full hover:bg-[#f4f3f1]/50 transition-colors">
<span class="material-symbols-outlined text-primary" data-icon="shopping_cart">shopping_cart</span>
</button>
<button class="p-2 rounded-full hover:bg-[#f4f3f1]/50 transition-colors">
<span class="material-symbols-outlined text-primary" data-icon="notifications">notifications</span>
</button>
<div class="w-10 h-10 rounded-full bg-surface-container-high flex items-center justify-center overflow-hidden border-2 border-outline-variant/20">
<img alt="Student profile" data-alt="Close-up portrait of a university student with a friendly expression in a sunlit campus setting, professional photography style" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBOth0epCFtLlh1KS1Chw0cutp0NoDfQIFonI46c0aLYG2ekA5oAk1M7mUSvGAjaZN5zM2O4YlNCyWieAIvBzKPi7nRoQWEozxU1jSZMMIFo8oBau5eBDtFmYUhhCyaCbHJ1KOoOcaMweN9G4Yj_v0K4F20p_tZwAtckq7qQ07zA81W5YohLEHNOoaRBMyWgy_RhaBAhCk7hJZIDqn4jRnOIOCThXXpi0CJQbQC3Lk5PKPQALieYnNNGP8ns49_eg_fNA2mDxCgXde7"/>
</div>
</div>
</nav>
<!-- Main Content -->
<main class="max-w-5xl mx-auto px-6 py-12">
<!-- Header Section -->
<header class="mb-12">
<h1 class="text-4xl md:text-5xl font-extrabold text-primary tracking-tight mb-2">Order History</h1>
<p class="text-on-surface-variant font-medium">Revisit your campus favorites and academic fuel.</p>
</header>
<!-- Stats Bento Section -->
<section class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
<div class="md:col-span-2 bg-surface-container-low rounded-3xl p-8 flex flex-col justify-between relative overflow-hidden">
<div class="relative z-10">
<span class="text-secondary font-bold text-xs uppercase tracking-widest mb-4 block">Frequent Order</span>
<h2 class="text-3xl font-bold text-primary max-w-xs leading-tight mb-6">Signature Maroon Latte &amp; Butter Croissant</h2>
<button class="bg-gradient-to-br from-primary to-primary-container text-on-primary px-8 py-3 rounded-full font-bold text-sm hover:scale-105 transition-transform">Quick Reorder</button>
</div>
<div class="absolute right-0 bottom-0 w-1/2 h-full opacity-20 pointer-events-none">
<img class="object-cover h-full w-full" data-alt="Artistic overhead shot of a steaming coffee cup next to a golden flaky croissant on a minimalist surface" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC-zcU-_HmuFIg9bOtWgBTZzIVvurBALj3fVWnRk9KrewVHhsjjd3b5QOXM2Gjywpd_pXuEiPm-zuQWISy7Fsh7HVI0GyXAB3sSY4aYhwhPHgS3rq7i6hswsY5m06IeehD9hMF8VrsKLOMr5CsXuZEmsZNRqpvYSEcv5Sjmd8t3_lvwXwkFvoRyT9px3SgStrwnKDBI_tcd40DAWBCC9kZ6JMRu3GynTk6Ma1BKa2edhwyk0ObDPP5atOc1fUGro9gVe5zkp_0LRh9q"/>
</div>
</div>
<div class="bg-surface-container-lowest border border-outline-variant/10 rounded-3xl p-8 flex flex-col justify-center items-center text-center shadow-[0_12px_32px_rgba(128,0,0,0.04)]">
<div class="w-16 h-16 bg-surface-container-high rounded-full flex items-center justify-center mb-4">
<span class="material-symbols-outlined text-primary text-3xl" data-icon="restaurant">restaurant</span>
</div>
<div class="text-4xl font-extrabold text-primary mb-1">24</div>
<div class="text-on-surface-variant font-semibold text-sm">Total Orders this Semester</div>
</div>
</section>
<!-- Orders List -->
<div class="space-y-8">
<!-- Order Item 1 (Recent) -->
<div class="group">
<div class="flex items-center justify-between mb-4">
<div class="flex items-center space-x-3">
<div class="w-2 h-2 bg-secondary rounded-full"></div>
<span class="font-bold text-on-surface tracking-wide">OCTOBER 24, 2023</span>
</div>
<span class="px-4 py-1 bg-surface-container-high text-on-surface-variant rounded-full text-xs font-bold uppercase tracking-wider">Delivered</span>
</div>
<div class="bg-surface-container-lowest rounded-[2rem] p-6 md:p-8 shadow-[0_12px_32px_rgba(128,0,0,0.06)] flex flex-col md:flex-row md:items-center gap-8 border border-transparent hover:border-outline-variant/20 transition-all">
<div class="w-24 h-24 rounded-2xl overflow-hidden flex-shrink-0">
<img class="object-cover w-full h-full" data-alt="Close-up of a healthy grain bowl with salmon, avocado, and fresh greens, vibrant colors, warm lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAdeZfBRO7UcBVo5UAZXGOboiRERxlEZAXsUCuAWafuNZ7MePzPqyKSpwsUtzv5Au9wWj4zNRKweTkaGWwx3Y2cTuDCNH9GXkPiAukqUnUecxzGhYs0kU4kj5TGuCDyHKW1S0ehtnhfYonDMY9J2BsoZa96datKVxjBkuxhWuqXjMYAIRFTuIgdP4B5l0HPJzJ7qb0Wf14GHBcyP0UTn1gTKlw1n4xvD1zbGLPatTVTxnHEtFD-XWbdE6i3X8MMoXmqQF9IKUbXhzH1"/>
</div>
<div class="flex-grow">
<h3 class="text-xl font-bold text-primary mb-1">Healthy Harvest Bowl</h3>
<p class="text-on-surface-variant text-sm mb-4">Extra Avocado, No Onions • 1 Item</p>
<div class="text-2xl font-extrabold text-on-surface">Rp 45.000</div>
</div>
<div class="flex flex-col sm:flex-row gap-3">
<button class="px-6 py-3 rounded-full text-on-primary-fixed-variant font-bold text-sm hover:bg-surface-container-low transition-colors">View Details</button>
<button class="bg-gradient-to-br from-primary to-primary-container text-on-primary px-8 py-3 rounded-full font-bold text-sm flex items-center justify-center space-x-2 shadow-sm hover:scale-105 transition-transform active:scale-95">
<span class="material-symbols-outlined text-sm" data-icon="refresh">refresh</span>
<span>Order Again</span>
</button>
</div>
</div>
</div>
<!-- Order Item 2 -->
<div class="group opacity-90">
<div class="flex items-center justify-between mb-4">
<div class="flex items-center space-x-3">
<div class="w-2 h-2 bg-outline-variant rounded-full"></div>
<span class="font-bold text-on-surface-variant tracking-wide uppercase">OCTOBER 21, 2023</span>
</div>
<span class="px-4 py-1 bg-surface-container-high text-on-surface-variant rounded-full text-xs font-bold uppercase tracking-wider">Delivered</span>
</div>
<div class="bg-surface-container-lowest rounded-[2rem] p-6 md:p-8 shadow-[0_8px_24px_rgba(128,0,0,0.04)] flex flex-col md:flex-row md:items-center gap-8 border border-transparent">
<div class="w-24 h-24 rounded-2xl overflow-hidden flex-shrink-0">
<img class="object-cover w-full h-full" data-alt="Classic gourmet beef burger with melted cheese and fresh lettuce on a brioche bun, studio lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD7yvuloW6sriNaNjBpaa6XcHdOY1WJ4aQc9zHfkkE8q8oc-BEvjG8NBmCEO5PlqDE7kWE9KtUny0vzsou408EI6NVumNMNHTaGIYFaOp32QQWeRBs3io7aahWzT-e3qRnC6JNNtgy9fJyJ0eabeW1qSOP_mCG9zqmZODZXdvoB7wX2vQatysJxGPj9RemOi5PvbGM_4DjMWrJ8Kx0lv3_Eeqvsuh2O88sKdeLGmJhLGAJrxHDLObKXMi4-w5_cC5MmquH-TENg_cLk"/>
</div>
<div class="flex-grow">
<h3 class="text-xl font-bold text-primary mb-1">Campus Classic Burger</h3>
<p class="text-on-surface-variant text-sm mb-4">Combo with Fries &amp; Iced Tea • 3 Items</p>
<div class="text-2xl font-extrabold text-on-surface">Rp 62.500</div>
</div>
<div class="flex flex-col sm:flex-row gap-3">
<button class="px-6 py-3 rounded-full text-on-primary-fixed-variant font-bold text-sm hover:bg-surface-container-low transition-colors">View Details</button>
<button class="bg-gradient-to-br from-primary to-primary-container text-on-primary px-8 py-3 rounded-full font-bold text-sm flex items-center justify-center space-x-2 shadow-sm hover:scale-105 transition-transform active:scale-95">
<span class="material-symbols-outlined text-sm" data-icon="refresh">refresh</span>
<span>Order Again</span>
</button>
</div>
</div>
</div>
<!-- Order Item 3 (Canceled State) -->
<div class="group opacity-70">
<div class="flex items-center justify-between mb-4">
<div class="flex items-center space-x-3">
<div class="w-2 h-2 bg-error rounded-full"></div>
<span class="font-bold text-on-surface-variant tracking-wide uppercase">OCTOBER 15, 2023</span>
</div>
<span class="px-4 py-1 bg-error-container text-on-error-container rounded-full text-xs font-bold uppercase tracking-wider">Canceled</span>
</div>
<div class="bg-surface-container-low rounded-[2rem] p-6 md:p-8 flex flex-col md:flex-row md:items-center gap-8 border border-transparent">
<div class="w-24 h-24 rounded-2xl overflow-hidden flex-shrink-0 grayscale">
<img class="object-cover w-full h-full" data-alt="Artisan thin-crust pizza with basil leaves and mozzarella, rustic Italian style photography" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBPuXG5boYguGLLAVJCl6PCCyOY-krUjmxKBcRqTAgJbMzEtOhxQZr53R58PIGkv69G7kj0ZJON-XYWWDjfQXaf_0XOIiqYB7nHIfWqTz_DvY_oxHF3NcJni2ES9lKwcM1vbQd2GnbvbWpWTQE1t4EoTFMfdvw9oX9rukiV_497SRvl039KFrYlF0wAGT5uqxck1tCd4MCOP7HiyixaMU-kctx-y_zSYKEhYIs20uHa6-RiD7Y9HNsxsxkLqjOV98frwSXuJe2ovyGm"/>
</div>
<div class="flex-grow">
<h3 class="text-xl font-bold text-on-surface-variant mb-1">Margherita Flatbread</h3>
<p class="text-on-surface-variant text-sm mb-4">No Special Requests • 1 Item</p>
<div class="text-2xl font-extrabold text-on-surface-variant">Rp 38.000</div>
</div>
<div class="flex flex-col sm:flex-row gap-3">
<button class="bg-surface-container-highest text-on-surface-variant px-8 py-3 rounded-full font-bold text-sm flex items-center justify-center space-x-2 transition-all">
<span class="material-symbols-outlined text-sm" data-icon="refresh">refresh</span>
<span>Order Again</span>
</button>
</div>
</div>
</div>
</div>
<!-- Load More Section -->
<div class="mt-16 flex justify-center">
<button class="flex flex-col items-center group">
<div class="w-12 h-12 rounded-full border-2 border-outline-variant/30 flex items-center justify-center mb-2 group-hover:bg-surface-container-low transition-colors">
<span class="material-symbols-outlined text-on-surface-variant" data-icon="expand_more">expand_more</span>
</div>
<span class="text-xs font-bold text-on-surface-variant uppercase tracking-widest">Archive 2022</span>
</button>
</div>
</main>
<!-- Mobile Bottom Navigation Bar -->
<nav class="md:hidden fixed bottom-0 left-0 w-full z-50 flex justify-around items-center px-4 pb-6 pt-3 bg-[#faf9f6]/80 dark:bg-stone-900/80 backdrop-blur-md rounded-t-3xl shadow-[0_-8px_24px_rgba(128,0,0,0.04)]">
<button class="flex flex-col items-center justify-center text-[#5a413d] dark:text-stone-500 tap-highlight-none active:scale-90 hover:scale-110 transition-transform">
<span class="material-symbols-outlined" data-icon="restaurant_menu">restaurant_menu</span>
<span class="text-[10px] font-bold uppercase tracking-widest mt-1">Menu</span>
</button>
<button class="flex flex-col items-center justify-center text-[#570000] dark:text-white after:content-[''] after:w-1 after:h-1 after:bg-[#800000] after:rounded-full after:mt-1 tap-highlight-none active:scale-90 hover:scale-110 transition-transform">
<span class="material-symbols-outlined" data-icon="assignment">assignment</span>
<span class="text-[10px] font-bold uppercase tracking-widest mt-1">Orders</span>
</button>
<button class="flex flex-col items-center justify-center text-[#5a413d] dark:text-stone-500 tap-highlight-none active:scale-90 hover:scale-110 transition-transform">
<span class="material-symbols-outlined" data-icon="shopping_bag">shopping_bag</span>
<span class="text-[10px] font-bold uppercase tracking-widest mt-1">Cart</span>
</button>
<button class="flex flex-col items-center justify-center text-[#5a413d] dark:text-stone-500 tap-highlight-none active:scale-90 hover:scale-110 transition-transform">
<span class="material-symbols-outlined" data-icon="person">person</span>
<span class="text-[10px] font-bold uppercase tracking-widest mt-1">Profile</span>
</button>
</nav>
</body></html>