<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@700;800&amp;family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        h1, h2, h3 { font-family: 'Manrope', sans-serif; }
    </style>
</head>
<body class="bg-background text-on-surface min-h-screen">
<!-- Top Navigation Bar -->
<header class="bg-[#faf9f6]/80 backdrop-blur-md sticky top-0 z-50 flex justify-between items-center px-6 py-4 w-full">
<div class="text-2xl font-bold tracking-tight text-[#570000]">Koperasi Giat</div>
<div class="hidden md:flex items-center space-x-8">
<nav class="flex space-x-6">
<a class="text-[#5a413d] hover:bg-[#f4f3f1]/50 transition-colors px-2 py-1" href="#">Menu</a>
<a class="text-[#5a413d] hover:bg-[#f4f3f1]/50 transition-colors px-2 py-1" href="#">Orders</a>
<a class="text-[#5a413d] hover:bg-[#f4f3f1]/50 transition-colors px-2 py-1" href="#">Cart</a>
<a class="text-[#570000] border-b-2 border-[#800000] px-2 py-1" href="#">Profile</a>
</nav>
</div>
<div class="flex items-center space-x-4">
<button class="material-symbols-outlined text-[#570000] p-2 rounded-full hover:bg-[#f4f3f1]/50 transition-colors" data-icon="shopping_cart">shopping_cart</button>
<button class="material-symbols-outlined text-[#570000] p-2 rounded-full hover:bg-[#f4f3f1]/50 transition-colors" data-icon="notifications">notifications</button>
</div>
</header>
<main class="max-w-5xl mx-auto px-6 py-12 md:py-20">
<!-- Profile Header Section -->
<section class="flex flex-col md:flex-row items-start md:items-center gap-8 mb-16">
<div class="relative">
<div class="w-32 h-32 md:w-40 md:h-40 rounded-full overflow-hidden border-4 border-surface-container-low shadow-xl">
<img alt="Student profile" class="w-full h-full object-cover" data-alt="Close-up portrait of a young student with a friendly expression in a sunlit university library setting, soft bokeh background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB_r086fcarwLhx-KHZCTxMVuEWAQ0GwxL7hJ6tecb4uUkmTpmwp-zl6_S9qDgoy061-v2YxroMsmsg2q8vzDOhVNm4dt4imUwEws6Rs42NL-24H-P0XSiYibXSf51wI5frjGl91BmA6qWM2HiqxCgt9AsUpi1SX0tKlDK1NTdNepyO8LEEg4WntX40B4SClXZFZ9a_DYhvsTK3EW9JTDdjCTCLewHAs9Dqkz1wh__FXNOLnYQKMMylWs4HXo0b0fw7O37vSRANeG0L"/>
</div>
<button class="absolute bottom-1 right-1 bg-primary text-on-primary p-2 rounded-full shadow-lg border-2 border-surface-container-lowest">
<span class="material-symbols-outlined text-sm" data-icon="edit">edit</span>
</button>
</div>
<div class="space-y-2">
<div class="inline-block px-3 py-1 bg-secondary-container/20 text-on-secondary-container text-xs font-bold uppercase tracking-widest rounded-full">
                    Student
                </div>
<h1 class="text-4xl md:text-5xl font-extrabold text-primary tracking-tight">Arianta Dakaza</h1>
<p class="text-on-surface-variant text-lg">ariantadakaza@telkomuniversity.ac.id</p>
<div class="pt-4 flex gap-3">
<button class="px-6 py-2.5 bg-gradient-to-br from-primary to-primary-container text-on-primary rounded-xl font-bold text-sm transition-transform active:scale-95">
                        Edit Profile
                    </button>
</div>
</div>
</section>
<!-- Profile Bento Grid -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<!-- Account Settings -->
<div class="md:col-span-2 bg-surface-container-low rounded-xl p-8 space-y-8">
<h2 class="text-2xl font-bold text-primary flex items-center gap-2">
<span class="material-symbols-outlined" data-icon="settings">settings</span>
                    Account Settings
                </h2>
<div class="grid grid-cols-1 gap-4">
<!-- Setting Item -->
<div class="group bg-surface-container-lowest p-5 rounded-xl flex items-center justify-between transition-all hover:translate-x-1 cursor-pointer">
<div class="flex items-center gap-4">
<div class="w-10 h-10 rounded-full bg-surface-container-low flex items-center justify-center text-primary">
<span class="material-symbols-outlined" data-icon="notifications_active">notifications_active</span>
</div>
<div>
<h3 class="font-bold text-on-surface">Order Notifications</h3>
<p class="text-sm text-on-surface-variant">Get alerts for meal status and pickups</p>
</div>
</div>
<div class="w-12 h-6 bg-primary rounded-full relative flex items-center px-1">
<div class="w-4 h-4 bg-on-primary rounded-full translate-x-6"></div>
</div>
</div>
<!-- Setting Item -->
<div class="group bg-surface-container-lowest p-5 rounded-xl flex items-center justify-between transition-all hover:translate-x-1 cursor-pointer">
<div class="flex items-center gap-4">
<div class="w-10 h-10 rounded-full bg-surface-container-low flex items-center justify-center text-primary">
<span class="material-symbols-outlined" data-icon="payments">payments</span>
</div>
<div>
<h3 class="font-bold text-on-surface">Payment Methods</h3>
<p class="text-sm text-on-surface-variant">Manage your linked university card</p>
</div>
</div>
<span class="material-symbols-outlined text-on-surface-variant group-hover:text-primary" data-icon="chevron_right">chevron_right</span>
</div>
<!-- Setting Item -->
<div class="group bg-surface-container-lowest p-5 rounded-xl flex items-center justify-between transition-all hover:translate-x-1 cursor-pointer">
<div class="flex items-center gap-4">
<div class="w-10 h-10 rounded-full bg-surface-container-low flex items-center justify-center text-primary">
<span class="material-symbols-outlined" data-icon="security">security</span>
</div>
<div>
<h3 class="font-bold text-on-surface">Privacy &amp; Security</h3>
<p class="text-sm text-on-surface-variant">Password and two-factor authentication</p>
</div>
</div>
<span class="material-symbols-outlined text-on-surface-variant group-hover:text-primary" data-icon="chevron_right">chevron_right</span>
</div>
</div>
</div>
<!-- Stats & Logout Column -->
<div class="space-y-6">
<!-- Loyalty Card -->
<div class="bg-gradient-to-br from-primary to-primary-container rounded-xl p-8 text-on-primary relative overflow-hidden">
<div class="absolute -top-12 -right-12 w-32 h-32 bg-on-primary/10 rounded-full blur-2xl"></div>
<p class="text-xs font-bold uppercase tracking-widest opacity-80 mb-6">Giat Loyalty Points</p>
<div class="text-5xl font-black mb-2">1,240</div>
<p class="text-sm opacity-90">Points earned this semester</p>
<div class="mt-8 pt-6 border-t border-on-primary/20 flex justify-between items-center">
<span class="text-sm font-bold">Redeem Rewards</span>
<span class="material-symbols-outlined" data-icon="arrow_forward">arrow_forward</span>
</div>
</div>
<!-- App Support -->
<div class="bg-surface-container-high rounded-xl p-6">
<h3 class="font-bold text-primary mb-4">Support</h3>
<ul class="space-y-4">
<li class="flex items-center gap-3 text-sm font-semibold text-on-surface-variant hover:text-primary cursor-pointer transition-colors">
<span class="material-symbols-outlined text-lg" data-icon="help_center">help_center</span>
                            Help Center
                        </li>
<li class="flex items-center gap-3 text-sm font-semibold text-on-surface-variant hover:text-primary cursor-pointer transition-colors">
<span class="material-symbols-outlined text-lg" data-icon="description">description</span>
                            Terms of Service
                        </li>
</ul>
</div>
<!-- Logout -->
<button class="w-full py-4 px-6 bg-surface-container-lowest text-on-surface-variant hover:text-error hover:bg-error-container/20 rounded-xl font-bold flex items-center justify-center gap-3 transition-all">
<span class="material-symbols-outlined" data-icon="logout">logout</span>
                    Logout
                </button>
</div>
</div>
</main>
<!-- Bottom Navigation Bar (Mobile) -->
<nav class="md:hidden fixed bottom-0 left-0 w-full z-50 flex justify-around items-center px-4 pb-6 pt-3 bg-[#faf9f6]/80 backdrop-blur-md rounded-t-3xl shadow-[0_-8px_24px_rgba(128,0,0,0.04)]">
<a class="flex flex-col items-center justify-center text-[#5a413d] hover:scale-110 transition-transform active:scale-90" href="#">
<span class="material-symbols-outlined" data-icon="restaurant_menu">restaurant_menu</span>
<span class="text-[10px] font-bold uppercase tracking-widest mt-1">Menu</span>
</a>
<a class="flex flex-col items-center justify-center text-[#5a413d] hover:scale-110 transition-transform active:scale-90" href="#">
<span class="material-symbols-outlined" data-icon="assignment">assignment</span>
<span class="text-[10px] font-bold uppercase tracking-widest mt-1">Orders</span>
</a>
<a class="flex flex-col items-center justify-center text-[#5a413d] hover:scale-110 transition-transform active:scale-90" href="#">
<span class="material-symbols-outlined" data-icon="shopping_bag">shopping_bag</span>
<span class="text-[10px] font-bold uppercase tracking-widest mt-1">Cart</span>
</a>
<a class="flex flex-col items-center justify-center text-[#570000] after:content-[''] after:w-1 after:h-1 after:bg-[#800000] after:rounded-full after:mt-1 hover:scale-110 transition-transform active:scale-90" href="#">
<span class="material-symbols-outlined" data-icon="person">person</span>
<span class="text-[10px] font-bold uppercase tracking-widest mt-1">Profile</span>
</a>
</nav>
<!-- Spacer for mobile nav -->
<div class="h-24 md:hidden"></div>
</body></html>