<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;700;800&amp;family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
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
                    "xl": "1.5rem",
                    "full": "9999px"
            },
            "fontFamily": {
                    "headline": ["Manrope", "sans-serif"],
                    "body": ["Plus Jakarta Sans", "sans-serif"],
                    "label": ["Plus Jakarta Sans", "sans-serif"]
            }
          },
        },
      }
    </script>
<style>
      .material-symbols-outlined {
        font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
      }
      .glass-nav {
        background: rgba(250, 249, 246, 0.8);
        backdrop-filter: blur(12px);
      }
      .custom-scrollbar::-webkit-scrollbar {
        width: 4px;
      }
      .custom-scrollbar::-webkit-scrollbar-thumb {
        background: #e2bfb9;
        border-radius: 10px;
      }
    </style>
</head>
<body class="bg-background text-on-surface font-body min-h-screen">
<!-- TopNavBar -->
<nav class="bg-[#faf9f6]/80 dark:bg-stone-900/80 backdrop-blur-md sticky top-0 z-50 flex justify-between items-center px-6 py-4 w-full h-20">
<div class="flex items-center gap-8">
<span class="text-2xl font-bold tracking-tight text-[#570000] dark:text-[#f4f3f1] font-headline">Koperasi Giat</span>
<div class="hidden md:flex items-center gap-6">
<a class="text-[#570000] dark:text-white border-b-2 border-[#800000] font-semibold transition-colors py-1" href="#">Menu</a>
<a class="text-[#5a413d] dark:text-stone-400 hover:text-[#800000] transition-colors py-1" href="#">Orders</a>
<a class="text-[#5a413d] dark:text-stone-400 hover:text-[#800000] transition-colors py-1" href="#">Cart</a>
<a class="text-[#5a413d] dark:text-stone-400 hover:text-[#800000] transition-colors py-1" href="#">Profile</a>
</div>
</div>
<div class="flex items-center gap-4">
<div class="hidden md:flex items-center bg-surface-container-low px-4 py-2 rounded-full w-64 focus-within:bg-surface-container-lowest transition-all">
<span class="material-symbols-outlined text-on-surface-variant text-sm">search</span>
<input class="bg-transparent border-none focus:ring-0 text-sm font-medium w-full ml-2 text-on-surface" placeholder="Search canteen..." type="text"/>
</div>
<div class="flex items-center gap-2">
<button class="p-2 rounded-full hover:bg-[#f4f3f1]/50 transition-colors text-primary relative">
<span class="material-symbols-outlined">shopping_cart</span>
<span class="absolute top-1 right-1 w-2 h-2 bg-secondary rounded-full"></span>
</button>
<button class="p-2 rounded-full hover:bg-[#f4f3f1]/50 transition-colors text-primary">
<span class="material-symbols-outlined">notifications</span>
</button>
<div class="w-10 h-10 rounded-full bg-surface-container-high overflow-hidden border-2 border-primary-fixed ml-2">
<img alt="Student profile" class="w-full h-full object-cover" data-alt="Close-up portrait of a young college student with a friendly expression, natural campus lighting, high-end editorial photography style" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC4orMdaxFLhMr1DAhuQVhVqtzcKLOshwzXVSv0a9VSvHjc-SMbsLyLO2ZxmNsX6htRbDtr_P8663NYXdKF-chFLUIsCKle5_1dx1_IZ1OMKPGMfEmm-rfYjelSxKoT8UC9Jj9g5gOrx8nF5JFmh8LlEro6VTOev7Zt6Y_Ye_f6FaUjx6BpsIBaIAYqBc8vWxktgspusDdZHmIR-jtV2xn-9fV-p1c0jbLIVTtcR6e55Drv6p0eepIcrUldR8ao8_kPOJvvf0AVb3Yz"/>
</div>
</div>
</div>
</nav>
<main class="max-w-[1440px] mx-auto px-6 py-8 flex flex-col md:flex-row gap-10">
<!-- Sidebar Filters -->
<aside class="w-full md:w-64 flex-shrink-0 space-y-10">
<section>
<h3 class="font-headline font-bold text-lg mb-6 text-primary tracking-tight">Categories</h3>
<div class="flex flex-col gap-2">
<button class="flex items-center justify-between px-4 py-3 bg-primary text-on-primary rounded-full scale-[1.02] shadow-sm transition-transform">
<span class="font-semibold text-sm">All Delights</span>
<span class="text-xs opacity-80">24</span>
</button>
<button class="flex items-center justify-between px-4 py-3 text-on-surface-variant hover:bg-surface-container-low rounded-full transition-all group">
<span class="text-sm font-medium group-hover:text-primary">Indonesian Favorites</span>
<span class="text-xs text-outline-variant">12</span>
</button>
<button class="flex items-center justify-between px-4 py-3 text-on-surface-variant hover:bg-surface-container-low rounded-full transition-all group">
<span class="text-sm font-medium group-hover:text-primary">Pastry &amp; Sweets</span>
<span class="text-xs text-outline-variant">8</span>
</button>
<button class="flex items-center justify-between px-4 py-3 text-on-surface-variant hover:bg-surface-container-low rounded-full transition-all group">
<span class="text-sm font-medium group-hover:text-primary">Artisan Coffee</span>
<span class="text-xs text-outline-variant">6</span>
</button>
<button class="flex items-center justify-between px-4 py-3 text-on-surface-variant hover:bg-surface-container-low rounded-full transition-all group">
<span class="text-sm font-medium group-hover:text-primary">Healthy Bowls</span>
<span class="text-xs text-outline-variant">5</span>
</button>
</div>
</section>
<section>
<h3 class="font-headline font-bold text-lg mb-6 text-primary tracking-tight">Merchants</h3>
<div class="space-y-4">
<label class="flex items-center gap-3 cursor-pointer group">
<div class="w-5 h-5 rounded border-2 border-outline-variant group-hover:border-primary transition-colors flex items-center justify-center">
<div class="w-2.5 h-2.5 bg-primary rounded-sm opacity-0 group-has-[:checked]:opacity-100"></div>
</div>
<input checked="" class="hidden" type="checkbox"/>
<span class="text-sm font-medium text-on-surface-variant group-hover:text-primary transition-colors">Warung Ibu Siti</span>
</label>
<label class="flex items-center gap-3 cursor-pointer group">
<div class="w-5 h-5 rounded border-2 border-outline-variant group-hover:border-primary transition-colors flex items-center justify-center">
<div class="w-2.5 h-2.5 bg-primary rounded-sm opacity-0 group-has-[:checked]:opacity-100"></div>
</div>
<input class="hidden" type="checkbox"/>
<span class="text-sm font-medium text-on-surface-variant group-hover:text-primary transition-colors">Campus Brews</span>
</label>
<label class="flex items-center gap-3 cursor-pointer group">
<div class="w-5 h-5 rounded border-2 border-outline-variant group-hover:border-primary transition-colors flex items-center justify-center">
<div class="w-2.5 h-2.5 bg-primary rounded-sm opacity-0 group-has-[:checked]:opacity-100"></div>
</div>
<input class="hidden" type="checkbox"/>
<span class="text-sm font-medium text-on-surface-variant group-hover:text-primary transition-colors">Noodle House</span>
</label>
</div>
</section>
<!-- Weather Widget (Unique DS Component) -->
<section class="bg-surface-container-low p-6 rounded-xl">
<div class="flex items-center justify-between mb-4">
<span class="material-symbols-outlined text-secondary text-3xl" style="font-variation-settings: 'wght' 100;">light_mode</span>
<span class="text-2xl font-bold font-headline text-primary">31°C</span>
</div>
<p class="text-xs font-bold text-secondary uppercase tracking-widest">Ideal for Cold Drinks</p>
</section>
</aside>
<!-- Product Grid -->
<div class="flex-1">
<header class="flex justify-between items-end mb-10">
<div>
<h1 class="font-headline font-extrabold text-4xl text-primary tracking-tighter mb-2">Daily Specials</h1>
<p class="text-on-surface-variant">Curated campus culinary selections for today.</p>
</div>
<div class="flex items-center gap-2 bg-surface-container-high px-4 py-2 rounded-full">
<span class="text-xs font-bold text-primary uppercase tracking-widest">Sort by:</span>
<select class="bg-transparent border-none focus:ring-0 text-sm font-semibold text-primary py-0 pl-1 pr-8 cursor-pointer">
<option>Most Popular</option>
<option>Price: Low to High</option>
<option>Rating</option>
</select>
</div>
</header>
<div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-8">
<!-- Product Card 1 -->
<article class="bg-surface-container-lowest rounded-xl overflow-hidden group hover:translate-y-[-4px] transition-all duration-300 shadow-[0_12px_32px_rgba(128,0,0,0.06)]">
<div class="relative h-64 overflow-hidden">
<img alt="Nasi Goreng Special" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" data-alt="Traditional Indonesian fried rice with sunny side up egg and crispy shallots, elegant ceramic plate, professional studio lighting, warm tones" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBSlmux6uAlit4dJQPJEOeR7wgV1FQ47P9i_hfb0Fpjbgh_3wXpbecAmquo4gMqUJgiUZ5cmkhvyy3mXrg0W-UGpQbsAEdnb2ZKUvwj6x1s9ddecF1WfLucBV-9Or7D9228_UkNFngYFHK2LPkz4zYwe0tXClrhxazUnAjw3OqUsKFDklj9T_eDwn8Eb01wFgR4qykSi5mL8Rvi-8c7LBV06nH0W716wYPhzguQcmMI0nhXl7wIYaUk8YrkxNYAAYtdDx71MoSE4WX7"/>
<div class="absolute top-4 left-4 bg-primary text-on-primary text-[10px] font-bold uppercase tracking-widest px-3 py-1.5 rounded-full">Popular</div>
<button class="absolute bottom-4 right-4 w-12 h-12 bg-surface-container-lowest rounded-full flex items-center justify-center text-primary shadow-lg hover:bg-primary hover:text-on-primary transition-colors">
<span class="material-symbols-outlined">add_shopping_cart</span>
</button>
</div>
<div class="p-6">
<div class="flex justify-between items-start mb-4">
<h3 class="font-headline font-bold text-xl text-primary leading-tight">Nasi Goreng Kampus Special</h3>
<span class="text-sm font-bold text-secondary">Rp 25.000</span>
</div>
<div class="flex items-center gap-4">
<div class="flex items-center gap-1">
<span class="material-symbols-outlined text-secondary text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="text-xs font-bold text-on-surface">4.8</span>
</div>
<span class="text-xs text-on-surface-variant font-medium">• 15-20 min</span>
<span class="text-xs text-on-surface-variant font-medium">• Warung Ibu Siti</span>
</div>
</div>
</article>
<!-- Product Card 2 -->
<article class="bg-surface-container-lowest rounded-xl overflow-hidden group hover:translate-y-[-4px] transition-all duration-300 shadow-[0_12px_32px_rgba(128,0,0,0.06)]">
<div class="relative h-64 overflow-hidden">
<img alt="Ice Caramel Macchiato" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" data-alt="Iced layered coffee macchiato in a clear tall glass with condensation, golden caramel drizzle, moody cafe lighting, editorial style" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC8rOT1zwoePOwTgxPYFQx44bL0o9fgHRUr7kwTNmciuOaiOuDjwZq8LOv7aENHC2_Adt29NiJLhrHFI1Gk147choaBkgMPvWqgeMGe8I1FglqeHUg-DK-KljR0vOkQLYj_rxKDtt9Kz_7aM02MXfpJ1BxhzwOhyaxqfL1rhGZygc98BmGCJi-JoNRu1klN0aKhWdsnBgcAnug6NVVhbpIrm80RIvxd1sjxUpyJgTu23cCqJBATrMxOt8IabEbJKmyW6JQ7ndf74Urg"/>
<button class="absolute bottom-4 right-4 w-12 h-12 bg-surface-container-lowest rounded-full flex items-center justify-center text-primary shadow-lg hover:bg-primary hover:text-on-primary transition-colors">
<span class="material-symbols-outlined">add_shopping_cart</span>
</button>
</div>
<div class="p-6">
<div class="flex justify-between items-start mb-4">
<h3 class="font-headline font-bold text-xl text-primary leading-tight">Signature Caramel Macchiato</h3>
<span class="text-sm font-bold text-secondary">Rp 18.000</span>
</div>
<div class="flex items-center gap-4">
<div class="flex items-center gap-1">
<span class="material-symbols-outlined text-secondary text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="text-xs font-bold text-on-surface">4.9</span>
</div>
<span class="text-xs text-on-surface-variant font-medium">• 5-10 min</span>
<span class="text-xs text-on-surface-variant font-medium">• Campus Brews</span>
</div>
</div>
</article>
<!-- Product Card 3 -->
<article class="bg-surface-container-lowest rounded-xl overflow-hidden group hover:translate-y-[-4px] transition-all duration-300 shadow-[0_12px_32px_rgba(128,0,0,0.06)]">
<div class="relative h-64 overflow-hidden">
<img alt="Beef Noodle Soup" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" data-alt="Hot beef noodle soup in a dark ceramic bowl, bok choy and soft boiled egg toppings, steam rising, atmospheric dramatic lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDeooiLfTs9-fiiWxjBofo3UQb8hzZy49fBeaWKwB_-KzuzBQlM7z3t8igVZ4LhAAAePAUXtvCAZ_HdyaAv9wYezHl-MSpYaUUFBIg9J5iCrABzud8pFL1DNRg3b3xkYIrBO6LltsEA9Mo5TqZKzOvfOFKCEJW2gwZnPxAzwA5aGU2PL27xyMxIdHhPf5GPVCei9C-1qP4R9ob258GqN9yWKCsN9b10NQ-J5Y56NNBqZY6KDJu4bcO1V3GkC0BO9mjfoNiv_5v3tXv1"/>
<div class="absolute top-4 left-4 bg-primary text-on-primary text-[10px] font-bold uppercase tracking-widest px-3 py-1.5 rounded-full">Popular</div>
<button class="absolute bottom-4 right-4 w-12 h-12 bg-surface-container-lowest rounded-full flex items-center justify-center text-primary shadow-lg hover:bg-primary hover:text-on-primary transition-colors">
<span class="material-symbols-outlined">add_shopping_cart</span>
</button>
</div>
<div class="p-6">
<div class="flex justify-between items-start mb-4">
<h3 class="font-headline font-bold text-xl text-primary leading-tight">Spicy Beef Ramen Bowl</h3>
<span class="text-sm font-bold text-secondary">Rp 32.000</span>
</div>
<div class="flex items-center gap-4">
<div class="flex items-center gap-1">
<span class="material-symbols-outlined text-secondary text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="text-xs font-bold text-on-surface">4.7</span>
</div>
<span class="text-xs text-on-surface-variant font-medium">• 10-15 min</span>
<span class="text-xs text-on-surface-variant font-medium">• Noodle House</span>
</div>
</div>
</article>
<!-- Product Card 4 -->
<article class="bg-surface-container-lowest rounded-xl overflow-hidden group hover:translate-y-[-4px] transition-all duration-300 shadow-[0_12px_32px_rgba(128,0,0,0.06)]">
<div class="relative h-64 overflow-hidden">
<img alt="Salmon Salad" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" data-alt="Fresh salmon salad with avocado and mixed greens, minimalist plating on light marble, natural window lighting, clean editorial food photography" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDTuy1K3AAMI2dHZDPevFLjtxjyFI_YNIlU_IOB-D0uiG-Ty7kxA42saTrZMXcfJ1z0yu7MlwU645cTpZ7EeWVlum6ttEwwNKwbpX2D0no0Fw0Qd1amLDOjKlFM1zm6oDE1IPJrnICkKE8SIuIWAfQ08ME5Wd3mHooGP-dlxTGVFV-yjBOJxBaWIzhzyk0wfrSFgk2RyUofPe3UGc1ki-9ptLjdZ9o_bzbHPvNWeZ8Un1ec7_1632ClF09KJqEH31vWqYGB0BYPC4w2"/>
<button class="absolute bottom-4 right-4 w-12 h-12 bg-surface-container-lowest rounded-full flex items-center justify-center text-primary shadow-lg hover:bg-primary hover:text-on-primary transition-colors">
<span class="material-symbols-outlined">add_shopping_cart</span>
</button>
</div>
<div class="p-6">
<div class="flex justify-between items-start mb-4">
<h3 class="font-headline font-bold text-xl text-primary leading-tight">Atlantic Salmon Poké</h3>
<span class="text-sm font-bold text-secondary">Rp 45.000</span>
</div>
<div class="flex items-center gap-4">
<div class="flex items-center gap-1">
<span class="material-symbols-outlined text-secondary text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="text-xs font-bold text-on-surface">5.0</span>
</div>
<span class="text-xs text-on-surface-variant font-medium">• 10-12 min</span>
<span class="text-xs text-on-surface-variant font-medium">• Healthy Bowls</span>
</div>
</div>
</article>
<!-- Product Card 5 -->
<article class="bg-surface-container-lowest rounded-xl overflow-hidden group hover:translate-y-[-4px] transition-all duration-300 shadow-[0_12px_32px_rgba(128,0,0,0.06)]">
<div class="relative h-64 overflow-hidden">
<img alt="Glazed Donut" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" data-alt="Close-up of artisan glazed donuts with colorful toppings on a rustic tray, soft focus background, warm inviting morning light" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAKL-wxKeaoWKVQREoXXFN1Z_rZQyPk8vp4wNMKfp4XPqL6FuoSWeo8gKH41-QmVU3FXsQIPxb4K2U_mkrZoksCNdwB74FuvgMQ9GAnEIl1j4RJX2LeVS23a3OwzUGc7gvG8MQUk9iCgK4_tdRnVjSq8J1S10dBpttamYqJytdpl2_BYN-7R_WLX5f7hPFrbg7cytzUg0ATah6wi1LNHi55uwBLK460ejxwAECAFp1hlso5QvNziNqGROwa_AYgsBQNVMXshGEnGY2o"/>
<button class="absolute bottom-4 right-4 w-12 h-12 bg-surface-container-lowest rounded-full flex items-center justify-center text-primary shadow-lg hover:bg-primary hover:text-on-primary transition-colors">
<span class="material-symbols-outlined">add_shopping_cart</span>
</button>
</div>
<div class="p-6">
<div class="flex justify-between items-start mb-4">
<h3 class="font-headline font-bold text-xl text-primary leading-tight">Glazed Brioche Ring</h3>
<span class="text-sm font-bold text-secondary">Rp 12.000</span>
</div>
<div class="flex items-center gap-4">
<div class="flex items-center gap-1">
<span class="material-symbols-outlined text-secondary text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="text-xs font-bold text-on-surface">4.6</span>
</div>
<span class="text-xs text-on-surface-variant font-medium">• 5 min</span>
<span class="text-xs text-on-surface-variant font-medium">• Pastry &amp; Sweets</span>
</div>
</div>
</article>
<!-- Product Card 6 -->
<article class="bg-surface-container-lowest rounded-xl overflow-hidden group hover:translate-y-[-4px] transition-all duration-300 shadow-[0_12px_32px_rgba(128,0,0,0.06)]">
<div class="relative h-64 overflow-hidden">
<img alt="Chicken Satay" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" data-alt="Grilled chicken satay skewers with peanut sauce on a banana leaf, vibrant colors, authentic Indonesian presentation, soft warm side light" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCxCYXmUEkEhJOL9X1m9JtTS7wM_AAhCsLbXqu9PfNE9gSS_x0L_6bIGYdu5En4VKfe3isHrGakeK70uLqKM-CUOUYsR0jaKAl0I0xEPOpclVgHdl9-L7psFo7RAU3UBo9EEzMxXlE7N54-gX7ZHzdVjwRt1qZ7yk2iQM5mhfQR0aj_2pR2YQQpDO-R7jP9BaPTQtTQwY2RRhVE9TBsx45H7mLqZac0xYSttbqyts1VUtoXlP3yvSFU2n8u1iwfz6mqNbTieUdewBw3"/>
<div class="absolute top-4 left-4 bg-primary text-on-primary text-[10px] font-bold uppercase tracking-widest px-3 py-1.5 rounded-full">Popular</div>
<button class="absolute bottom-4 right-4 w-12 h-12 bg-surface-container-lowest rounded-full flex items-center justify-center text-primary shadow-lg hover:bg-primary hover:text-on-primary transition-colors">
<span class="material-symbols-outlined">add_shopping_cart</span>
</button>
</div>
<div class="p-6">
<div class="flex justify-between items-start mb-4">
<h3 class="font-headline font-bold text-xl text-primary leading-tight">Sate Ayam Madura</h3>
<span class="text-sm font-bold text-secondary">Rp 22.000</span>
</div>
<div class="flex items-center gap-4">
<div class="flex items-center gap-1">
<span class="material-symbols-outlined text-secondary text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="text-xs font-bold text-on-surface">4.9</span>
</div>
<span class="text-xs text-on-surface-variant font-medium">• 15 min</span>
<span class="text-xs text-on-surface-variant font-medium">• Warung Ibu Siti</span>
</div>
</div>
</article>
</div>
<!-- Pagination -->
<footer class="mt-16 flex items-center justify-center gap-4">
<button class="p-3 rounded-full bg-surface-container-low text-primary hover:bg-surface-container-high transition-colors">
<span class="material-symbols-outlined">chevron_left</span>
</button>
<div class="flex items-center gap-2">
<button class="w-10 h-10 rounded-full bg-primary text-on-primary font-bold text-sm">1</button>
<button class="w-10 h-10 rounded-full bg-surface-container-low text-on-surface-variant font-bold text-sm hover:bg-surface-container-high transition-colors">2</button>
<button class="w-10 h-10 rounded-full bg-surface-container-low text-on-surface-variant font-bold text-sm hover:bg-surface-container-high transition-colors">3</button>
</div>
<button class="p-3 rounded-full bg-surface-container-low text-primary hover:bg-surface-container-high transition-colors">
<span class="material-symbols-outlined">chevron_right</span>
</button>
</footer>
</div>
</main>
<!-- Mobile Navigation -->
<div class="md:hidden fixed bottom-0 left-0 w-full z-50 flex justify-around items-center px-4 pb-6 pt-3 bg-[#faf9f6]/80 dark:bg-stone-900/80 backdrop-blur-md rounded-t-3xl shadow-[0_-8px_24px_rgba(128,0,0,0.04)]">
<button class="flex flex-col items-center justify-center text-[#570000] dark:text-white after:content-[''] after:w-1 after:h-1 after:bg-[#800000] after:rounded-full after:mt-1">
<span class="material-symbols-outlined">restaurant_menu</span>
<span class="text-[10px] font-bold uppercase tracking-widest mt-1">Menu</span>
</button>
<button class="flex flex-col items-center justify-center text-[#5a413d] dark:text-stone-500 hover:scale-110 transition-transform">
<span class="material-symbols-outlined">assignment</span>
<span class="text-[10px] font-bold uppercase tracking-widest mt-1">Orders</span>
</button>
<button class="flex flex-col items-center justify-center text-[#5a413d] dark:text-stone-500 hover:scale-110 transition-transform">
<span class="material-symbols-outlined">shopping_bag</span>
<span class="text-[10px] font-bold uppercase tracking-widest mt-1">Cart</span>
</button>
<button class="flex flex-col items-center justify-center text-[#5a413d] dark:text-stone-500 hover:scale-110 transition-transform">
<span class="material-symbols-outlined">person</span>
<span class="text-[10px] font-bold uppercase tracking-widest mt-1">Profile</span>
</button>
</div>
</body></html>
