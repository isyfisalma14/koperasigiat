<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&amp;family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "outline": "#8e706c",
                    "on-secondary-container": "#783126",
                    "inverse-on-surface": "#f2f1ee",
                    "on-primary-fixed-variant": "#8f0f07",
                    "on-tertiary-fixed-variant": "#1830c2",
                    "on-tertiary-fixed": "#000c61",
                    "tertiary-fixed-dim": "#bcc2ff",
                    "on-surface": "#1a1c1a",
                    "tertiary-fixed": "#dfe0ff",
                    "surface-container-high": "#e9e8e5",
                    "secondary-fixed": "#ffdad4",
                    "tertiary": "#00137f",
                    "surface-dim": "#dbdad7",
                    "on-primary-container": "#ff8371",
                    "on-primary": "#ffffff",
                    "outline-variant": "#e2bfb9",
                    "primary-fixed": "#ffdad4",
                    "on-surface-variant": "#5a413d",
                    "surface-tint": "#b22b1d",
                    "surface-container-highest": "#e3e2e0",
                    "inverse-primary": "#ffb4a8",
                    "surface-bright": "#faf9f6",
                    "on-secondary": "#ffffff",
                    "background": "#faf9f6",
                    "surface-container-lowest": "#ffffff",
                    "surface-container-low": "#f4f3f1",
                    "error": "#ba1a1a",
                    "on-secondary-fixed": "#3e0502",
                    "on-error": "#ffffff",
                    "surface-variant": "#e3e2e0",
                    "tertiary-container": "#0021b9",
                    "secondary-fixed-dim": "#ffb4a8",
                    "secondary": "#96473b",
                    "on-tertiary-container": "#94a0ff",
                    "on-background": "#1a1c1a",
                    "inverse-surface": "#2f312f",
                    "on-primary-fixed": "#410000",
                    "on-error-container": "#93000a",
                    "on-secondary-fixed-variant": "#783026",
                    "surface-container": "#efeeeb",
                    "primary": "#570000",
                    "secondary-container": "#ff9b8c",
                    "error-container": "#ffdad6",
                    "surface": "#faf9f6",
                    "primary-fixed-dim": "#ffb4a8",
                    "primary-container": "#800000",
                    "on-tertiary": "#ffffff"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "1.5rem",
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
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
</head>
<body class="bg-background font-body text-on-surface antialiased">
<!-- Header / TopAppBar -->
<header class="sticky top-0 w-full z-40 bg-stone-50/80 dark:bg-stone-950/80 backdrop-blur-md shadow-sm dark:shadow-none">
<div class="flex justify-between items-center px-6 py-4 max-w-7xl mx-auto">
<div class="flex items-center gap-4">
<button class="w-10 h-10 flex items-center justify-center rounded-full bg-surface-container-low text-primary hover:bg-surface-container-high transition-colors">
<span class="material-symbols-outlined" data-icon="arrow_back">arrow_back</span>
</button>
<h1 class="text-xl font-bold text-red-900 dark:text-red-500 font-headline tracking-tight">Checkout</h1>
</div>
<div class="hidden md:flex gap-8 items-center">
<span class="text-stone-500 dark:text-stone-400 font-semibold border-b-2 border-red-900">Summary</span>
<span class="text-stone-400 dark:text-stone-600">Payment</span>
<span class="text-stone-400 dark:text-stone-600">Complete</span>
</div>
<div class="w-10 h-10 flex items-center justify-center text-primary">
<span class="material-symbols-outlined" data-icon="help_outline">help_outline</span>
</div>
</div>
</header>
<main class="max-w-xl mx-auto px-6 py-8 pb-32">
<!-- Order Identification Card -->
<section class="mb-8 p-6 bg-surface-container-low rounded-xl">
<p class="text-xs font-label uppercase tracking-widest text-on-surface-variant mb-1">Campus Canteen</p>
<h2 class="text-2xl font-headline font-extrabold text-primary mb-2">Koperasi Giat</h2>
<div class="flex items-center gap-2 text-on-surface-variant text-sm">
<span class="material-symbols-outlined text-sm" data-icon="calendar_today">calendar_today</span>
<span>Today, 12:45 PM</span>
<span class="mx-2">•</span>
<span class="material-symbols-outlined text-sm" data-icon="tag">tag</span>
<span>ORD-28491</span>
</div>
</section>
<!-- Order Summary Section -->
<section class="mb-10">
<h3 class="text-lg font-headline font-bold text-primary mb-4 flex items-center gap-2">
<span class="material-symbols-outlined text-xl" data-icon="restaurant_menu">restaurant_menu</span>
                Order Summary
            </h3>
<div class="space-y-6">
<!-- Item 1 -->
<div class="flex items-center gap-4 bg-surface-container-lowest p-4 rounded-xl shadow-[0_12px_32px_rgba(128,0,0,0.06)]">
<div class="w-20 h-20 rounded-xl overflow-hidden shrink-0">
<img class="w-full h-full object-cover" data-alt="close-up of traditional Indonesian Nasi Goreng with a fried egg on top and fresh cucumber slices on a rustic plate" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBZ0yXmHQvHRv42iAAUnQ786XE3PFpvt_3F3MNF1K7gbgPdInQmcW6HEdOLndqYbYde14847Mbo9zIf_BjQLYO9uFZaIX-LWk52BrIrJMyaPt1v-QaHGJ6lCZQJhZPsO306DYr0Er-3Zjw7aE9s9tuPZbd_q0awOHcLnS1FzgJ2MXXul5Pm5zKStjc3ZzRVRYNqWhrFW6Y7AwM3anKktbv14CiAcIn8gFY-2-jkRYH9zZBqAmwh6hO9NxLIWkxZmXZNRht8NQEou2xm"/>
</div>
<div class="flex-grow">
<div class="flex justify-between items-start">
<h4 class="font-bold text-on-surface">Nasi Goreng Spesial</h4>
<span class="font-bold text-primary">Rp 18.000</span>
</div>
<p class="text-sm text-on-surface-variant mt-1 italic">Extra Egg, Medium Spicy</p>
<div class="mt-2 flex items-center text-xs text-on-surface-variant">
<span class="px-2 py-1 bg-surface-container-high rounded-full font-semibold">1x</span>
</div>
</div>
</div>
<!-- Item 2 -->
<div class="flex items-center gap-4 bg-surface-container-lowest p-4 rounded-xl shadow-[0_12px_32px_rgba(128,0,0,0.06)]">
<div class="w-20 h-20 rounded-xl overflow-hidden shrink-0">
<img class="w-full h-full object-cover" data-alt="refreshing tall glass of iced tea with condensation and lemon slice in a bright sunlit setting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAAOu67SalRJpEuGS7s5oiV6_NEzlEgIdXLKzOG8WoWgAl7INpTw3z6eg9X1T7eBYyilQPoiJ9d-S-38fuVXICxAxZIlVpXMIs6FPFRyIQP3Mu2t26rzvTwAiL7ld_UlYKXdJO_1UwOvdyYMDO1mPT4oEi-QK9cQdrEk9YS9kkzhnLpff2YgCo_1bMeUn7kthQgTJyfZ1vfpKXMCZQuTtk9_VjMZXmDcavSjbK-3l6iHfdhLKPG2qyV2h6gXxxvn1oZ6xhw88tcSItu"/>
</div>
<div class="flex-grow">
<div class="flex justify-between items-start">
<h4 class="font-bold text-on-surface">Es Teh Manis</h4>
<span class="font-bold text-primary">Rp 5.000</span>
</div>
<p class="text-sm text-on-surface-variant mt-1 italic">Less Sugar</p>
<div class="mt-2 flex items-center text-xs text-on-surface-variant">
<span class="px-2 py-1 bg-surface-container-high rounded-full font-semibold">1x</span>
</div>
</div>
</div>
</div>
</section>
<!-- Payment Method Section -->
<section class="mb-10">
<h3 class="text-lg font-headline font-bold text-primary mb-4">Payment Method</h3>
<div class="grid grid-cols-2 gap-4">
<!-- Cash Option (Inactive) -->
<div class="relative group cursor-pointer p-6 rounded-xl bg-surface-container-low transition-all duration-200 hover:scale-[1.02] border-2 border-transparent">
<div class="flex flex-col items-center gap-3">
<span class="material-symbols-outlined text-3xl text-secondary" data-icon="payments">payments</span>
<span class="font-bold text-on-surface-variant">Cash</span>
</div>
</div>
<!-- QRIS Option (Active) -->
<div class="relative group cursor-pointer p-6 rounded-xl bg-surface-container-lowest shadow-[0_12px_32px_rgba(128,0,0,0.1)] transition-all duration-200 border-2 border-primary scale-[1.05]">
<div class="absolute -top-3 left-1/2 -translate-x-1/2 bg-primary text-on-primary text-[10px] px-3 py-1 rounded-full font-bold uppercase tracking-widest">Selected</div>
<div class="flex flex-col items-center gap-3">
<span class="material-symbols-outlined text-3xl text-primary" data-icon="qr_code_scanner">qr_code_scanner</span>
<span class="font-bold text-primary">QRIS</span>
</div>
</div>
</div>
</section>
<!-- Detailed Billing -->
<section class="mb-12 bg-surface-container-low p-6 rounded-xl">
<div class="space-y-4">
<div class="flex justify-between text-on-surface-variant">
<span class="font-medium">Subtotal</span>
<span class="font-semibold">Rp 23.000</span>
</div>
<div class="flex justify-between text-on-surface-variant">
<div class="flex items-center gap-1">
<span class="font-medium">Admin Fee</span>
<span class="material-symbols-outlined text-xs" data-icon="info">info</span>
</div>
<span class="font-semibold">Rp 1.000</span>
</div>
<div class="pt-4 mt-4 border-t border-outline-variant/30 flex justify-between items-center">
<span class="text-lg font-headline font-bold text-on-surface">Total Amount</span>
<span class="text-2xl font-headline font-extrabold text-primary">Rp 24.000</span>
</div>
</div>
</section>
<!-- Confirm Button -->
<button class="w-full py-5 rounded-xl bg-gradient-to-br from-primary to-primary-container text-on-primary font-headline font-bold text-lg shadow-[0_16px_32px_rgba(128,0,0,0.15)] active:scale-[0.98] transition-transform flex items-center justify-center gap-3" onclick="document.getElementById('confirmation-modal').classList.remove('hidden')">
<span class="material-symbols-outlined" data-icon="lock" data-weight="fill" style="font-variation-settings: 'FILL' 1;">lock</span>
            Konfirmasi Pembayaran
        </button>
</main>
<!-- BottomNavBar -->
<nav class="fixed bottom-0 w-full z-40 rounded-t-3xl bg-stone-50/80 dark:bg-stone-950/80 backdrop-blur-md shadow-[0_-4px_20px_rgba(128,0,0,0.08)]">
<div class="fixed bottom-0 left-0 w-full flex justify-around items-center px-4 pt-3 pb-6">
<div class="flex flex-col items-center gap-1 text-stone-400 dark:text-stone-600 hover:text-red-800 dark:hover:text-red-200 transition-colors active:scale-95 duration-200">
<span class="material-symbols-outlined" data-icon="restaurant">restaurant</span>
<span class="font-manrope text-[11px] font-semibold uppercase tracking-wider">Menu</span>
</div>
<div class="flex flex-col items-center gap-1 text-red-900 dark:text-red-400 after:content-[''] after:w-1 after:h-1 after:bg-red-900 after:rounded-full active:scale-95 transition-transform duration-200">
<span class="material-symbols-outlined" data-icon="receipt_long">receipt_long</span>
<span class="font-manrope text-[11px] font-semibold uppercase tracking-wider">Orders</span>
</div>
<div class="flex flex-col items-center gap-1 text-stone-400 dark:text-stone-600 hover:text-red-800 dark:hover:text-red-200 transition-colors active:scale-95 duration-200">
<span class="material-symbols-outlined" data-icon="account_balance_wallet">account_balance_wallet</span>
<span class="font-manrope text-[11px] font-semibold uppercase tracking-wider">Wallet</span>
</div>
<div class="flex flex-col items-center gap-1 text-stone-400 dark:text-stone-600 hover:text-red-800 dark:hover:text-red-200 transition-colors active:scale-95 duration-200">
<span class="material-symbols-outlined" data-icon="person">person</span>
<span class="font-manrope text-[11px] font-semibold uppercase tracking-wider">Account</span>
</div>
</div>
</nav>
<!-- Confirmation Modal -->
<div class="fixed inset-0 z-[100] flex items-center justify-center p-6" id="confirmation-modal">
<!-- Backdrop -->
<div class="absolute inset-0 bg-stone-900/60 backdrop-blur-md" onclick="document.getElementById('confirmation-modal').classList.add('hidden')"></div>
<!-- Modal Card -->
<div class="relative bg-surface-container-lowest w-full max-w-sm rounded-xl p-8 shadow-2xl transform transition-all animate-in fade-in zoom-in duration-200 border border-outline-variant/20"><div class="flex flex-col items-center text-center">
<div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mb-6">
<span class="material-symbols-outlined text-primary text-3xl">help_outline</span>
</div>
<h3 class="text-xl font-headline font-bold text-on-surface mb-3">
        Konfirmasi Pesanan
    </h3>
<p class="text-on-surface-variant font-body mb-8">Apakah Anda yakin memesan pesanan tersebut?</p>
<div class="w-full flex flex-row gap-4">
<button class="flex-1 py-3 bg-[#800000] text-white font-headline font-bold rounded-lg shadow-lg hover:brightness-110 active:scale-[0.98] transition-all">Ya</button>
<button class="flex-1 py-3 bg-stone-200 text-stone-800 font-headline font-semibold rounded-lg hover:bg-stone-300 transition-colors" onclick="document.getElementById('confirmation-modal').classList.add('hidden')">Tidak</button>
</div>
</div></div>
</div>
</body></html>