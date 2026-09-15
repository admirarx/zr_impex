<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'ZR IMPEX — Industrial CNC Router Machines & Laser Systems')</title>
    <meta name="description" content="@yield('meta_description', 'ZR IMPEX manufactures and supplies heavy-duty industrial CNC router machines, fiber laser cutting systems, and genuine spare parts across India. High-precision fabrication, rapid spares delivery, and factory support.')">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'ZR IMPEX — Industrial CNC Router Machines & Laser Systems')">
    <meta property="og:description" content="@yield('meta_description', 'High-performance CNC router machines, fiber laser cutters, and genuine spare parts for Indian manufacturing.')">
    <meta property="og:image" content="@yield('og_image', asset('images/brand/logo.jpeg'))">

    <!-- Local & Google Fonts -->
    <link rel="preload" href="{{ asset('fonts/material-symbols-outlined.woff2') }}" as="font" type="font/woff2" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&display=block" rel="stylesheet">

    <!-- Critical CSS for Material Symbols to prevent Ligature FOUT & Layout Shifts -->
    <style>
        @font-face {
            font-family: 'Material Symbols Outlined';
            font-style: normal;
            font-weight: 100 700;
            font-display: block;
            src: url('{{ asset('fonts/material-symbols-outlined.woff2') }}') format('woff2');
        }

        .material-symbols-outlined {
            font-family: 'Material Symbols Outlined' !important;
            font-weight: normal;
            font-style: normal;
            font-size: 24px;
            width: 1em;
            height: 1em;
            line-height: 1;
            letter-spacing: normal;
            text-transform: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            vertical-align: middle;
            white-space: nowrap;
            word-wrap: normal;
            direction: ltr;
            flex-shrink: 0;
            overflow: hidden;
            font-feature-settings: 'liga';
            -webkit-font-feature-settings: 'liga';
            -webkit-font-smoothing: antialiased;
        }

        html:not(.material-symbols-loaded) .material-symbols-outlined {
            color: transparent !important;
            text-shadow: none !important;
            user-select: none;
        }
    </style>

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Structured Data (Schema.org Organization) -->
    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'LocalBusiness',
        'name' => 'ZR IMPEX Machinery',
        'image' => asset('images/brand/logo.jpeg'),
        'url' => url('/'),
        'telephone' => \App\Models\SiteSetting::get('primary_phone', '+91 9899639380'),
        'priceRange' => '₹₹₹',
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => \App\Models\SiteSetting::get('address', 'W-116, S-Block, PVC Market, Paschim Vihar, New Delhi, Delhi 110087, India'),
            'addressCountry' => 'IN',
        ],
        'description' => \App\Models\SiteSetting::get('tagline', 'Direct manufacturer and turnkey supplier of industrial CNC router machines, fiber laser cutters, and genuine spare parts across India.'),
    ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>

    @php
        $ga4Id = \App\Models\SiteSetting::get('ga4_measurement_id');
    @endphp
    @if(!empty($ga4Id) && $ga4Id !== 'G-XXXXXXXXXX')
        <!-- Google Analytics 4 (GA4) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ $ga4Id }}"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', '{{ $ga4Id }}', {
                'anonymize_ip': true
            });
        </script>
    @endif

    <!-- Synchronous Theme Setup & Font Readiness Script -->
    <script>
        (function() {
            var savedTheme = localStorage.getItem('zr_theme');
            if (savedTheme !== 'light' && savedTheme !== 'dark') {
                savedTheme = 'dark';
            }
            document.documentElement.setAttribute('data-theme', savedTheme);
            if (savedTheme === 'dark') {
                document.documentElement.classList.add('dark');
                document.documentElement.classList.remove('light');
            } else {
                document.documentElement.classList.add('light');
                document.documentElement.classList.remove('dark');
            }

            // Material Symbols Font Load Detector
            if ('fonts' in document) {
                document.fonts.load('24px "Material Symbols Outlined"').then(function() {
                    document.documentElement.classList.add('material-symbols-loaded');
                }).catch(function() {
                    document.documentElement.classList.add('material-symbols-loaded');
                });
            } else {
                document.documentElement.classList.add('material-symbols-loaded');
            }
        })();
    </script>

    @stack('schema')
    @stack('styles')
</head>
<body class="bg-surface-container-lowest text-on-surface min-h-screen flex flex-col font-sans selection:bg-primary selection:text-on-primary antialiased relative"
      x-data="{ 
          mobileMenuOpen: false, 
          quoteModalOpen: false, 
          activeQuoteProduct: null,
          currentTheme: (function() {
              var t = localStorage.getItem('zr_theme');
              return (t === 'light') ? 'light' : 'dark';
          })(),
          toggleTheme() {
              this.currentTheme = this.currentTheme === 'dark' ? 'light' : 'dark';
              localStorage.setItem('zr_theme', this.currentTheme);
              document.documentElement.setAttribute('data-theme', this.currentTheme);
              if (this.currentTheme === 'dark') {
                  document.documentElement.classList.add('dark');
                  document.documentElement.classList.remove('light');
              } else {
                  document.documentElement.classList.add('light');
                  document.documentElement.classList.remove('dark');
              }
          }
      }">

    <!-- GLOBAL INDUSTRIAL AMBIANCE (HOMEPAGE HERO THEME ACROSS ENTIRE WEBSITE) -->
    <div class="fixed inset-0 pointer-events-none bg-machined-grid z-0"></div>
    <div class="fixed -top-40 right-1/4 w-[650px] h-[650px] rounded-full bg-primary/10 blur-[140px] pointer-events-none z-0 dark:block hidden"></div>
    <div class="fixed top-1/2 -left-28 w-[500px] h-[500px] rounded-full bg-primary/5 blur-[160px] pointer-events-none z-0 dark:block hidden"></div>
    <div class="fixed -bottom-20 right-1/3 w-[600px] h-[600px] rounded-full bg-secondary/5 blur-[150px] pointer-events-none z-0 dark:block hidden"></div>

    @php
        $phone = \App\Models\SiteSetting::get('primary_phone', '+91 9899639380');
        $supportPhone = \App\Models\SiteSetting::get('support_phone', '+91 9899639380');
        $waNum = \App\Models\SiteSetting::get('whatsapp_number', '+919250630381');
        $salesEmail = \App\Models\SiteSetting::get('sales_email', 'sales@zrimpex.com');
        $supportEmail = \App\Models\SiteSetting::get('support_email', 'support@zrimpex.com');
        $address = \App\Models\SiteSetting::get('address', 'W-116, S-Block, PVC Market, Paschim Vihar, New Delhi, Delhi 110087, India');
        $generalWaUrl = \App\Services\WhatsAppUrlBuilder::build();

        $socialYoutube = \App\Models\SiteSetting::get('social_youtube', 'https://youtube.com/@zrimpex?si=YJQ-40xDaUAEeX0r');
        $socialInstagram = \App\Models\SiteSetting::get('social_instagram', 'https://www.instagram.com/zr.impex?stkn=b2Q2Nnd4NmdkdjFz');
        $socialFacebook = \App\Models\SiteSetting::get('social_facebook', 'https://www.facebook.com/share/1BimaQySE9/');
        $socialWhatsapp = \App\Models\SiteSetting::get('social_whatsapp', $generalWaUrl);
    @endphp

    <!-- FIXED TOP INDUSTRIAL HEADER -->
    <header class="fixed top-0 left-0 right-0 z-50 transform-gpu bg-surface-dim/95 backdrop-blur-md shadow-[0_1px_8px_rgba(0,0,0,0.6)] border-b border-surface-container-high">
        <!-- Main Nav Bar -->
        <div class="h-20 bg-surface/95">
            <div class="max-w-max-width-content mx-auto px-gutter-mobile sm:px-gutter-tablet lg:px-gutter-desktop h-full flex items-center justify-between gap-space-lg">
                <!-- Brand Logo -->
                <div class="flex items-center gap-space-md">
                    <a href="{{ route('home') }}" class="flex items-center gap-space-md group">
                        <div class="relative flex items-center justify-center">
                            <img src="{{ asset('images/brand/logo.jpeg') }}" 
                                 alt="ZR IMPEX" 
                                 class="w-10 h-10 rounded object-contain border border-surface-container-highest group-hover:border-primary/50 transition-colors shadow-sm">
                        </div>
                        <div class="flex flex-col">
                            <div class="flex items-center gap-space-xs">
                                <span class="font-headline-sm text-headline-sm font-bold tracking-tight text-on-surface uppercase group-hover:text-primary transition-colors">ZR IMPEX</span>
                                <span class="font-label-caps text-label-caps text-primary bg-surface-container-high px-space-xs py-space-2xs rounded uppercase tracking-wider">MACHINERY</span>
                            </div>
                            <span class="font-label-badge text-label-badge uppercase text-outline tracking-widest">CNC &amp; Laser Systems</span>
                        </div>
                    </a>
                </div>

                <!-- Desktop Navigation Links -->
                <nav class="hidden xl:flex items-center gap-space-sm">
                    <a href="{{ route('home') }}" 
                       class="px-space-md py-space-xs rounded font-body-md text-body-md transition-colors {{ request()->routeIs('home') ? 'bg-primary-container text-on-primary-container font-headline-sm font-semibold' : 'text-on-surface-variant hover:text-on-surface hover:bg-surface-container-low' }}">
                        Home
                    </a>
                    <a href="{{ route('machines.index') }}" 
                       class="px-space-md py-space-xs rounded font-body-md text-body-md transition-colors {{ request()->routeIs('machines.*') ? 'bg-primary-container text-on-primary-container font-headline-sm font-semibold' : 'text-on-surface-variant hover:text-on-surface hover:bg-surface-container-low' }}">
                        CNC Machines
                    </a>
                    <a href="{{ route('spare-parts.index') }}" 
                       class="px-space-md py-space-xs rounded font-body-md text-body-md transition-colors {{ request()->routeIs('spare-parts.*') ? 'bg-primary-container text-on-primary-container font-headline-sm font-semibold' : 'text-on-surface-variant hover:text-on-surface hover:bg-surface-container-low' }}">
                        Spare Parts
                    </a>
                    <a href="{{ route('about') }}" 
                       class="px-space-md py-space-xs rounded font-body-md text-body-md transition-colors {{ request()->routeIs('about') ? 'bg-primary-container text-on-primary-container font-headline-sm font-semibold' : 'text-on-surface-variant hover:text-on-surface hover:bg-surface-container-low' }}">
                        About Us
                    </a>
                    <a href="{{ route('contact') }}" 
                       class="px-space-md py-space-xs rounded font-body-md text-body-md transition-colors {{ request()->routeIs('contact') ? 'bg-primary-container text-on-primary-container font-headline-sm font-semibold' : 'text-on-surface-variant hover:text-on-surface hover:bg-surface-container-low' }}">
                        Contact
                    </a>
                </nav>

                <!-- Actions & CTAs -->
                <div class="flex items-center gap-space-sm sm:gap-space-md">
                    <!-- Single-Click Theme Toggle Button (Light / Dark) -->
                    <button type="button" 
                            id="theme-toggle-btn"
                            @click="toggleTheme()"
                            class="flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-surface-container border border-surface-container-highest text-on-surface-variant hover:text-primary hover:border-primary/40 transition-all font-tech-spec text-xs cursor-pointer shadow-sm"
                            :title="currentTheme === 'dark' ? 'Switch to Clean Light Mode' : 'Switch to Luxury Dark Mode'"
                            aria-label="Toggle website theme">
                        <span class="material-symbols-outlined text-[18px] text-primary" x-show="currentTheme === 'dark'">light_mode</span>
                        <span class="material-symbols-outlined text-[18px] text-primary" x-show="currentTheme === 'light'" style="display: none;">dark_mode</span>
                        <span class="hidden md:inline font-semibold" x-text="currentTheme === 'dark' ? 'Light' : 'Dark'"></span>
                    </button>

                    <button type="button" 
                            @click="quoteModalOpen = true; activeQuoteProduct = null"
                            class="hidden sm:inline-flex items-center gap-space-xs bg-primary hover:bg-primary-fixed-dim text-on-primary font-headline-sm text-headline-sm px-space-lg py-space-sm rounded font-bold shadow-[0_0_16px_rgba(212,175,55,0.3)] transition-all hover:scale-[1.01] active:translate-y-[1px]">
                        <span class="material-symbols-outlined text-[18px]">precision_manufacturing</span>
                        <span>Request Quote</span>
                    </button>

                    <!-- Mobile Menu Button -->
                    <button @click="mobileMenuOpen = !mobileMenuOpen" 
                            type="button" 
                            class="xl:hidden p-2 rounded bg-surface-container border border-surface-container-highest text-on-surface-variant hover:text-white"
                            aria-label="Toggle navigation menu">
                        <span class="material-symbols-outlined text-[24px]" x-show="!mobileMenuOpen">menu</span>
                        <span class="material-symbols-outlined text-[24px]" x-show="mobileMenuOpen" style="display: none;">close</span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Drawer Navigation -->
        <div x-show="mobileMenuOpen" 
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-4"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-4"
             class="xl:hidden bg-surface-container-lowest border-b border-surface-container-high px-gutter-mobile py-space-md space-y-space-xs shadow-2xl" 
             style="display: none;">
            <a href="{{ route('home') }}" 
               class="block px-space-md py-space-sm rounded font-body-md {{ request()->routeIs('home') ? 'bg-primary text-on-primary font-bold' : 'text-on-surface hover:bg-surface-container' }}">
                Home
            </a>
            <a href="{{ route('machines.index') }}" 
               class="block px-space-md py-space-sm rounded font-body-md {{ request()->routeIs('machines.*') ? 'bg-primary text-on-primary font-bold' : 'text-on-surface hover:bg-surface-container' }}">
                CNC Machines
            </a>
            <a href="{{ route('spare-parts.index') }}" 
               class="block px-space-md py-space-sm rounded font-body-md {{ request()->routeIs('spare-parts.*') ? 'bg-primary text-on-primary font-bold' : 'text-on-surface hover:bg-surface-container' }}">
                Spare Parts
            </a>
            <a href="{{ route('about') }}" 
               class="block px-space-md py-space-sm rounded font-body-md {{ request()->routeIs('about') ? 'bg-primary text-on-primary font-bold' : 'text-on-surface hover:bg-surface-container' }}">
                About Us
            </a>
            <a href="{{ route('contact') }}" 
               class="block px-space-md py-space-sm rounded font-body-md {{ request()->routeIs('contact') ? 'bg-primary text-on-primary font-bold' : 'text-on-surface hover:bg-surface-container' }}">
                Contact Us
            </a>

            <div class="pt-space-sm border-t border-surface-container flex flex-col gap-space-xs">
                <!-- Mobile Theme Toggle -->
                <div class="flex items-center justify-between bg-surface-container p-2.5 rounded-lg border border-surface-container-highest mb-1">
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary text-[18px]" x-show="currentTheme === 'dark'">dark_mode</span>
                        <span class="material-symbols-outlined text-primary text-[18px]" x-show="currentTheme === 'light'" style="display: none;">light_mode</span>
                        <span class="text-xs font-semibold text-on-surface" x-text="currentTheme === 'dark' ? 'Dark Industrial' : 'Clean Light Mode'"></span>
                    </div>
                    <button type="button" 
                            id="mobile-theme-toggle-btn"
                            @click="toggleTheme()"
                            class="px-2.5 py-1 rounded bg-surface-container-high border border-surface-container-highest text-xs font-bold text-primary hover:text-on-surface transition-colors cursor-pointer flex items-center gap-1">
                        <span class="material-symbols-outlined text-[14px]">swap_horiz</span>
                        <span x-text="currentTheme === 'dark' ? 'Switch to Light' : 'Switch to Dark'"></span>
                    </button>
                </div>

                <button type="button" 
                        @click="mobileMenuOpen = false; quoteModalOpen = true;"
                        class="w-full bg-primary hover:bg-primary-fixed-dim text-on-primary font-bold py-space-sm rounded text-center uppercase tracking-wider font-tech-spec text-tech-spec flex items-center justify-center gap-space-xs shadow-md">
                    <span class="material-symbols-outlined text-[18px]">precision_manufacturing</span>
                    <span>Request Quotation</span>
                </button>
                <button type="button" 
                        onclick="window.openWhatsApp('{{ $generalWaUrl }}')"
                        class="w-full bg-surface-container hover:bg-surface-container-high text-primary border border-primary/30 font-medium py-space-sm rounded text-center uppercase tracking-wider font-tech-spec text-tech-spec flex items-center justify-center gap-space-xs">
                    <span class="material-symbols-outlined text-[18px]">chat</span>
                    <span>Direct WhatsApp Chat</span>
                </button>
            </div>
        </div>
    </header>

    <!-- Main Content Area with Header Offset -->
    <main class="flex-grow pt-20 relative z-10 bg-transparent">
        <!-- Flash Notifications -->
        @if(session('success'))
            <div class="max-w-max-width-content mx-auto px-gutter-desktop pt-space-md">
                <div class="bg-emerald-950/90 border border-emerald-500/40 text-emerald-200 px-space-md py-space-sm rounded flex items-center gap-space-sm shadow-lg font-tech-spec text-tech-spec">
                    <span class="material-symbols-outlined text-emerald-400 text-[20px]">check_circle</span>
                    <span>{{ session('success') }}</span>
                </div>
            </div>
        @endif

        @if(session('error'))
            <div class="max-w-max-width-content mx-auto px-gutter-desktop pt-space-md">
                <div class="bg-rose-950/90 border border-rose-500/40 text-rose-200 px-space-md py-space-sm rounded flex items-center gap-space-sm shadow-lg font-tech-spec text-tech-spec">
                    <span class="material-symbols-outlined text-rose-400 text-[20px]">error</span>
                    <span>{{ session('error') }}</span>
                </div>
            </div>
        @endif

        @yield('content')
    </main>

    <!-- Global Quote Modal Component -->
    <x-quote-modal />

    <!-- FLOATING WHATSAPP ACTION BUTTON -->
    <div class="fixed bottom-6 right-6 z-50 flex items-center gap-3">
        <span class="hidden sm:inline-block bg-surface-container-high border border-surface-container-highest px-3 py-1.5 rounded-full text-xs font-medium text-primary shadow-xl font-tech-spec">
            Quick Enquiry
        </span>
        <button type="button" 
                onclick="window.openWhatsApp('{{ $generalWaUrl }}')"
                class="group relative flex items-center justify-center w-14 h-14 rounded-full bg-[#25D366] hover:bg-[#20ba59] text-white shadow-2xl transition-all duration-300 hover:scale-105"
                title="Chat on WhatsApp with ZR IMPEX"
                aria-label="Direct WhatsApp Chat">
            <span class="absolute -top-1 -right-1 w-3.5 h-3.5 bg-primary rounded-full border-2 border-surface-container-lowest animate-ping"></span>
            <span class="absolute -top-1 -right-1 w-3.5 h-3.5 bg-primary rounded-full border-2 border-surface-container-lowest"></span>
            <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24">
                <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
            </svg>
        </button>
    </div>

    <!-- STITCH INDUSTRIAL FOOTER -->
    <footer class="w-full bg-surface-container-lowest/90 backdrop-blur-md text-on-surface-variant border-t border-surface-container-high mt-space-4xl relative z-10">
        <div class="max-w-max-width-content mx-auto px-gutter-mobile sm:px-gutter-tablet lg:px-gutter-desktop py-space-3xl">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-space-xl mb-space-2xl">
                <!-- Company Bio & Contact Details (4 cols on lg) -->
                <div class="lg:col-span-4 flex flex-col gap-space-md">
                    <div class="flex items-center gap-space-md">
                        <span class="font-headline-md text-headline-md text-on-surface font-bold tracking-tight uppercase">ZR IMPEX</span>
                        <span class="font-label-caps text-label-caps text-primary bg-surface-container px-space-xs py-space-2xs rounded">CNC &amp; LASER</span>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant max-w-md leading-relaxed">
                        Precision heavy-machinery manufacturing and direct plant integration. Delivering high-rigidity CNC gantry routers, industrial fiber laser cutters, high-power plasma tables, and genuine European-spec spindles for demanding manufacturing sectors worldwide.
                    </p>
                    <div class="flex flex-col gap-space-xs mt-space-xs font-tech-spec text-tech-spec">
                        <div class="flex items-start gap-space-xs">
                            <span class="material-symbols-outlined text-primary text-[18px] shrink-0">factory</span>
                            <span>{{ $address }}</span>
                        </div>
                        <div class="flex items-center gap-space-xs">
                            <span class="material-symbols-outlined text-primary text-[18px] shrink-0">support_agent</span>
                            <span>Plant Engineering Desk: {{ $phone }}</span>
                        </div>
                        <div class="flex items-center gap-space-xs">
                            <span class="material-symbols-outlined text-primary text-[18px] shrink-0">mail</span>
                            <span>{{ $salesEmail }} | {{ $supportEmail }}</span>
                        </div>
                    </div>

                    <!-- Dynamic Social Media Icons -->
                    <div class="flex flex-col gap-space-xs mt-space-sm">
                        <span class="font-label-caps text-label-caps uppercase text-outline tracking-wider">Connect With Us</span>
                        <div class="flex items-center gap-space-xs flex-wrap">
                            @if(!empty($socialYoutube))
                                <a href="{{ $socialYoutube }}" target="_blank" rel="noopener noreferrer" 
                                   class="w-9 h-9 rounded-lg bg-surface-container border border-surface-container-highest flex items-center justify-center text-on-surface-variant hover:text-primary hover:border-primary/50 hover:bg-primary/10 transition-all duration-200"
                                   title="YouTube" aria-label="ZR IMPEX YouTube Channel">
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                        <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                                    </svg>
                                </a>
                            @endif

                            @if(!empty($socialInstagram))
                                <a href="{{ $socialInstagram }}" target="_blank" rel="noopener noreferrer" 
                                   class="w-9 h-9 rounded-lg bg-surface-container border border-surface-container-highest flex items-center justify-center text-on-surface-variant hover:text-primary hover:border-primary/50 hover:bg-primary/10 transition-all duration-200"
                                   title="Instagram" aria-label="ZR IMPEX Instagram">
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zm0 10.162a3.999 3.999 0 1 1 0-7.998 3.999 3.999 0 0 1 0 7.998zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z"/>
                                    </svg>
                                </a>
                            @endif

                            @if(!empty($socialFacebook))
                                <a href="{{ $socialFacebook }}" target="_blank" rel="noopener noreferrer" 
                                   class="w-9 h-9 rounded-lg bg-surface-container border border-surface-container-highest flex items-center justify-center text-on-surface-variant hover:text-primary hover:border-primary/50 hover:bg-primary/10 transition-all duration-200"
                                   title="Facebook" aria-label="ZR IMPEX Facebook">
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                    </svg>
                                </a>
                            @endif

                            @if(!empty($socialWhatsapp))
                                <a href="{{ $socialWhatsapp }}" target="_blank" rel="noopener noreferrer" 
                                   class="w-9 h-9 rounded-lg bg-surface-container border border-surface-container-highest flex items-center justify-center text-on-surface-variant hover:text-[#25D366] hover:border-[#25D366]/50 hover:bg-[#25D366]/10 transition-all duration-200"
                                   title="WhatsApp" aria-label="ZR IMPEX WhatsApp Channel">
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                        <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                                    </svg>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Navigation Menu Links (like in navbar) -->
                <div class="lg:col-span-2 flex flex-col gap-space-sm">
                    <span class="font-headline-sm text-headline-sm text-on-surface font-semibold uppercase tracking-wider mb-space-xs">Menu</span>
                    <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="{{ route('home') }}">Home</a>
                    <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="{{ route('machines.index') }}">CNC Machines</a>
                    <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="{{ route('spare-parts.index') }}">Spare Parts</a>
                    <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="{{ route('about') }}">About Us</a>
                    <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="{{ route('contact') }}">Contact Us</a>
                </div>

                <!-- Commercial & Help Guides Links -->
                <div class="lg:col-span-2 flex flex-col gap-space-sm">
                    <span class="font-headline-sm text-headline-sm text-on-surface font-semibold uppercase tracking-wider mb-space-xs">Commercial &amp; Guides</span>
                    <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="{{ route('how-to-buy') }}">How to Buy Guide</a>
                    <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="{{ route('shipping.policy') }}">Shipping &amp; Delivery</a>
                    <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="{{ route('warranty') }}">Warranty &amp; Disclaimers</a>
                    <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="{{ route('return.policy') }}">Return &amp; Refund Policy</a>
                    <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="{{ route('contact') }}">Factory Visits &amp; Demos</a>
                </div>

                <!-- Right Side: Newsletter Section -->
                <div class="lg:col-span-4 flex flex-col gap-space-sm" x-data="{ email: '', subscribed: false, submitting: false }">
                    <span class="font-headline-sm text-headline-sm text-on-surface font-semibold uppercase tracking-wider mb-space-xs">Newsletter</span>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                        Subscribe for technical machinery updates, factory clearance alerts, and CNC operational guides.
                    </p>
                    <form @submit.prevent="if(email) { submitting = true; setTimeout(() => { submitting = false; subscribed = true; }, 500); }" class="flex flex-col gap-space-xs mt-space-xs">
                        <div x-show="!subscribed" class="flex flex-col sm:flex-row items-stretch sm:items-center gap-space-xs">
                            <div class="relative flex-1">
                                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-[18px]">mail</span>
                                <input type="email" 
                                       x-model="email" 
                                       required 
                                       placeholder="Enter your email" 
                                       class="w-full bg-surface-container text-on-surface font-body-md text-body-md pl-10 pr-space-sm py-2.5 rounded border border-surface-container-highest focus:outline-none focus:border-primary text-sm">
                            </div>
                            <button type="submit" 
                                    :disabled="submitting"
                                    class="px-space-md py-2.5 bg-primary hover:bg-primary-fixed-dim text-on-primary font-headline-sm text-headline-sm font-bold rounded transition-colors shrink-0 flex items-center justify-center gap-1.5 shadow-sm text-sm">
                                <span x-show="!submitting">Subscribe</span>
                                <span x-show="submitting" style="display:none;" class="material-symbols-outlined text-[16px] animate-spin">progress_activity</span>
                            </button>
                        </div>
                        <div x-show="subscribed" style="display: none;" class="p-space-sm bg-emerald-950/70 border border-emerald-500/40 text-emerald-300 text-body-sm rounded flex items-center gap-space-xs">
                            <span class="material-symbols-outlined text-emerald-400 text-[18px]">check_circle</span>
                            <span>Thank you for subscribing to our industrial newsletter!</span>
                        </div>
                        <span class="text-[11px] text-outline">We respect your privacy. No spam, unsubscribe anytime.</span>
                    </form>
                </div>
            </div>

            <!-- Bottom Legal Bar (No admin link, No WhatsApp RFQ button) -->
            <div class="pt-space-lg border-t border-surface-container-high flex flex-col md:flex-row items-center justify-between gap-space-md text-body-sm">
                <div class="flex items-center gap-space-xs text-outline">
                    <span class="font-tech-spec text-tech-spec">&copy; {{ date('Y') }} ZR IMPEX Industrial Systems. All rights reserved.</span>
                </div>
                <div class="flex flex-wrap items-center gap-space-md sm:gap-space-lg">
                    <a class="font-body-sm text-body-sm text-outline hover:text-primary transition-colors" href="{{ route('privacy') }}">Privacy Policy</a>
                    <a class="font-body-sm text-body-sm text-outline hover:text-primary transition-colors" href="{{ route('terms') }}">Terms &amp; Conditions</a>
                    <a class="font-body-sm text-body-sm text-outline hover:text-primary transition-colors" href="{{ route('cookie.policy') }}">Cookie Policy</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Cookie Consent Popup -->
    <x-cookie-consent />

    @stack('modals')
    @stack('scripts')
</body>
</html>
