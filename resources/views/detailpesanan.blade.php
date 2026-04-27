<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Order Details - Koperasi Giat</title>
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
                        "surface": "#faf9f6",
                        "inverse-primary": "#ffb4a8",
                        "surface-container-lowest": "#ffffff",
                        "secondary-fixed": "#ffdad4",
                        "secondary-fixed-dim": "#ffb4a8",
                        "background": "#faf9f6",
                        "surface-tint": "#b22b1d",
                        "surface-container": "#efeeeb",
                        "tertiary": "#00137f",
                        "outline-variant": "#e2bfb9",
                        "on-surface-variant": "#5a413d",
                        "on-error": "#ffffff",
                        "surface-bright": "#faf9f6",
                        "surface-dim": "#dbdad7",
                        "on-primary-fixed-variant": "#8f0f07",
                        "surface-container-high": "#e9e8e5",
                        "on-secondary-fixed-variant": "#783026",
                        "on-error-container": "#93000a",
                        "outline": "#8e706c",
                        "error": "#ba1a1a",
                        "on-background": "#1a1c1a",
                        "surface-container-low": "#f4f3f1",
                        "on-tertiary": "#ffffff",
                        "on-primary-fixed": "#410000",
                        "primary-fixed-dim": "#ffb4a8",
                        "on-primary-container": "#ff8371",
                        "surface-variant": "#e3e2e0",
                        "error-container": "#ffdad6",
                        "surface-container-highest": "#e3e2e0",
                        "inverse-on-surface": "#f2f1ee",
                        "on-tertiary-container": "#94a0ff",
                        "on-secondary-fixed": "#3e0502",
                        "on-surface": "#1a1c1a",
                        "on-primary": "#ffffff",
                        "tertiary-fixed": "#dfe0ff",
                        "tertiary-fixed-dim": "#bcc2ff",
                        "tertiary-container": "#0021b9",
                        "primary-fixed": "#ffdad4",
                        "on-tertiary-fixed-variant": "#1830c2",
                        "on-secondary": "#ffffff",
                        "on-secondary-container": "#783126",
                        "primary-container": "#800000",
                        "on-tertiary-fixed": "#000c61",
                        "secondary": "#96473b",
                        "inverse-surface": "#2f312f",
                        "secondary-container": "#ff9b8c",
                        "primary": "#570000"
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
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        h1, h2, h3 { font-family: 'Manrope', sans-serif; }
    </style>
</head>
<body class="bg-surface text-on-surface min-h-screen pb-24">
<!-- TopAppBar -->
<header class="bg-[#faf9f6]/80 backdrop-blur-xl fixed top-0 w-full z-50 shadow-[0_1px_0_0_rgba(128,0,0,0.05)]">
<div class="flex justify-between items-center px-6 h-16 w-full">
<div class="flex items-center gap-4">
<button class="p-2 hover:bg-stone-100/50 rounded-full transition-colors active:opacity-80">
<span class="material-symbols-outlined text-red-950">arrow_back</span>
</button>
<h1 class="text-xl font-extrabold text-red-950 uppercase tracking-widest font-['Manrope']">The Canteen</h1>
</div>
<div class="flex items-center gap-3">
<button class="p-2 hover:bg-stone-100/50 rounded-full transition-colors active:opacity-80">
<span class="material-symbols-outlined text-red-950" data-icon="notifications">notifications</span>
</button>
</div>
</div>
</header>
<main class="pt-24 px-6 max-w-2xl mx-auto">
<!-- Success State Header -->
<div class="flex flex-col items-center text-center mb-8">
<div class="bg-primary/5 p-4 rounded-full mb-4">
<span class="material-symbols-outlined text-primary text-4xl" style="font-variation-settings: 'FILL' 1;">check_circle</span>
</div>
<h2 class="text-3xl font-extrabold text-primary tracking-tight mb-2">Order Siap Diambil</h2>
<p class="text-on-surface-variant font-medium">Tunjukkan kode di bawah kepada petugas kasir.</p>
</div>
<!-- Pickup Card (Asymmetric Bento Style) -->
<div class="grid grid-cols-1 md:grid-cols-12 gap-4 mb-8">
<div class="md:col-span-7 bg-surface-container-lowest rounded-xl p-8 shadow-[0_12px_32px_rgba(128,0,0,0.06)] flex flex-col justify-center border-l-4 border-primary">
<span class="text-xs font-bold uppercase tracking-widest text-on-surface-variant mb-2">Order ID</span>
<div class="text-4xl font-extrabold text-primary tracking-tighter mb-4">#KG-88219</div>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-secondary text-sm">schedule</span>
<span class="text-sm font-semibold text-secondary">Ordered at 12:45 PM</span>
</div>
</div>
<div class="md:col-span-5 bg-surface-container-lowest rounded-xl p-6 shadow-[0_12px_32px_rgba(128,0,0,0.06)] flex flex-col items-center justify-center">
<div class="w-32 h-32 mb-3 bg-white p-2 border border-outline-variant/20 rounded-lg">
<img alt="QR Code for Pickup" class="w-full h-full object-contain" data-alt="minimal black and white QR code on a clean white background for digital order scanning" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBV77m7p2fSNpe-5QkYJJVwF7eVk_QUibfsQCoEiT1rHf6HLX6UunMpzN1ZcpOCnasegq04wVYxYpymCrvL70QDQKoOqijcCpDkey0PHNyyzZwfO2sstgwrmlFLafyLiL9IP9WqKe3tkX_0-X6oE6iM5NUxR2-c6m6y8uH8BF0U6atdklSpUtImGN22Lrfcdp1v3Vns6ThFu717KMuAxlLIHcLoHVDVoTt89AT1aMwnSmIkfGiWFgseY69lUoICQuPmTIXuzXH32ecs"/>
</div>
<span class="text-[10px] font-bold text-on-surface-variant uppercase tracking-widest">Pickup Code</span>
<span class="text-xl font-bold text-on-surface">GIAT-21</span>
</div>
</div>
<!-- Order Items Section -->
<div class="bg-surface-container-low rounded-xl p-6 mb-8">
<h3 class="text-lg font-bold text-primary mb-6 flex items-center gap-2">
<span class="material-symbols-outlined text-primary">restaurant_menu</span>
                Rincian Pesanan
            </h3>
<div class="space-y-6">
<!-- Item 1 -->
<div class="flex justify-between items-start">
<div class="flex gap-4">
<div class="w-16 h-16 rounded-xl overflow-hidden bg-surface-container-high">
<img class="w-full h-full object-cover" data-alt="steaming bowl of indonesian mie tek-tek with egg and vegetables, warm cinematic lighting, editorial food photography" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB51T1TEPNy7P5gcnxYiRUV3fN-k0uVpGLf4dUmj0PfpNfbRXX3s5I4pr9M4JolJ8e5g79e4Jn7Gydb9k8IVgyKOtoUuqyWJ53usgNRnuV5zqP0Nl3CiJlGkhcPnN1y-EGS2XYrJDXKzdJAffPkN9sNw05XX0fY_-BoXvF0Kb0_ZuugyuZ5ICE6HUbrmAFzHPXSMABzspHLKYG9E8Zt3HLKvf36_g-GWClqy4Y98Oa2uem9KwoHGOXEWuFNshkPUjLqG3dXpddLvwre"/>
</div>
<div>
<p class="font-bold text-on-surface">Mie Tek-tek</p>
<p class="text-sm text-on-surface-variant">Level 3 • Ekstra Telur</p>
<p class="text-xs font-semibold text-primary mt-1">1x</p>
</div>
</div>
<p class="font-bold text-on-surface">Rp 18.000</p>
</div>
<!-- Item 2 -->
<div class="flex justify-between items-start">
<div class="flex gap-4">
<div class="w-16 h-16 rounded-xl overflow-hidden bg-surface-container-high">
<img class="w-full h-full object-cover" data-alt="cold glasses of iced jasmine tea with condensation and fresh mint, bright natural lighting on ivory surface" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD_4bWaiFChyZ8QlleYptygl-EHQEaH51GDuXHrCSyetTG10U0LcdIC9QjDz8d6m2-c-6H6ACndyO4spYReNVNMutoV-W9Fml9P0rKoFjiMzB2xRXGLKbzkrcWAB_m--YsKO3JD2WvfVezz9oq2jtEED_aAXASBqxIoi3updCCaKea5TClUQS4CL96UB9KSC_NB-3oexGjyCdl0JG_Hrs7o1TmF7tXarpH2TbFXJ2FQXz051iM4pr5C9k1X5ekBrS3c3x9Q0BsM5NlD"/>
</div>
<div>
<p class="font-bold text-on-surface">Es Teh Manis</p>
<p class="text-sm text-on-surface-variant">Less Sugar</p>
<p class="text-xs font-semibold text-primary mt-1">2x</p>
</div>
</div>
<p class="font-bold text-on-surface">Rp 10.000</p>
</div>
</div>
</div>
<!-- Payment Details -->
<div class="bg-surface-container-lowest rounded-xl p-8 shadow-[0_12px_32px_rgba(128,0,0,0.06)] mb-8">
<div class="flex justify-between mb-3">
<span class="text-on-surface-variant font-medium">Subtotal</span>
<span class="text-on-surface font-semibold">Rp 28.000</span>
</div>
<div class="flex justify-between mb-3">
</div>
<div class="h-px bg-surface-container-high my-4"></div>
<div class="flex justify-between items-center mb-6">
<span class="text-lg font-extrabold text-on-surface">Total Pembayaran</span>
<span class="text-2xl font-extrabold text-primary tracking-tight">Rp 28.800</span>
</div>
<!-- Payment Method Meta -->
<div class="flex items-center justify-between p-4 bg-surface-container rounded-xl">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-secondary">account_balance_wallet</span>
<div>
<p class="text-xs font-bold uppercase tracking-wider text-on-surface-variant">Metode Pembayaran</p>
<p class="font-bold text-on-surface">QRIS - Dana</p>
</div>
</div>
<span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">verified</span>
</div>
</div>
<!-- Action Buttons -->
<div class="flex flex-col gap-3 pb-8">
<button class="w-full py-4 bg-gradient-to-br from-primary to-primary-container text-white rounded-full font-bold text-lg flex items-center justify-center gap-2 transition-all active:scale-95 shadow-lg shadow-primary/10">
<span class="material-symbols-outlined">receipt_long</span>
                Download Receipt
            </button>
<button class="w-full py-4 text-primary font-bold hover:bg-primary/5 rounded-full transition-colors flex items-center justify-center gap-2">
<span class="material-symbols-outlined text-[20px]">home</span>
                Kembali ke Beranda
            </button>
</div>
</main>
<!-- BottomNavBar -->
<nav class="fixed bottom-0 left-0 w-full bg-[#faf9f6] z-50 shadow-[0_-4px_20px_rgba(0,0,0,0.05)] border-t border-surface-container-high"><div class="flex justify-around items-center px-4 pt-3 pb-6">
<div class="flex flex-col items-center text-stone-400 opacity-60 hover:opacity-100 transition-opacity">
<span class="material-symbols-outlined" data-icon="restaurant">restaurant</span>
<span class="font-['Plus_Jakarta_Sans'] text-[11px] font-semibold">Menu</span>
</div>
<div class="flex flex-col items-center text-red-950 relative after:content-[''] after:absolute after:-bottom-1 after:w-1 after:h-1 after:bg-red-900 after:rounded-full">
<span class="material-symbols-outlined" data-icon="receipt_long" style="font-variation-settings: 'FILL' 1;">receipt_long</span>
<span class="font-['Plus_Jakarta_Sans'] text-[11px] font-bold">Orders</span>
</div>
<div class="flex flex-col items-center text-stone-400 opacity-60 hover:opacity-100 transition-opacity">
<span class="material-symbols-outlined" data-icon="shopping_bag">shopping_bag</span>
<span class="font-['Plus_Jakarta_Sans'] text-[11px] font-semibold">Bag</span>
</div>
<div class="flex flex-col items-center text-stone-400 opacity-60 hover:opacity-100 transition-opacity">
<span class="material-symbols-outlined" data-icon="person">person</span>
<span class="font-['Plus_Jakarta_Sans'] text-[11px] font-semibold">Profile</span>
</div>
</div></nav>
</body></html>