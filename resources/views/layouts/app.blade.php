<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark scroll-smooth">
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

    <!-- Google Fonts & Material Symbols -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">

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
        'telephone' => '+91-98765-43210',
        'priceRange' => '₹₹₹',
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => 'Plot No. 42, Industrial Area, Phase-2, Near Mayapuri',
            'addressLocality' => 'New Delhi',
            'addressRegion' => 'Delhi',
            'postalCode' => '110064',
            'addressCountry' => 'IN',
        ],
        'description' => 'Direct manufacturer and turnkey supplier of industrial CNC router machines, fiber laser cutters, and genuine spare parts across India.',
    ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>

    @stack('schema')
    @stack('styles')
</head>
<body class="bg-surface-dim text-on-surface min-h-screen flex flex-col font-sans selection:bg-primary selection:text-on-primary antialiased"
      x-data="{ mobileMenuOpen: false, quoteModalOpen: false, activeQuoteProduct: null }">

    @php
        $phone = \App\Models\SiteSetting::get('primary_phone', '+91 98765 43210');
        $supportPhone = \App\Models\SiteSetting::get('support_phone', '+91 98123 45678');
        $waNum = \App\Models\SiteSetting::get('whatsapp_number', '+91 98765 43210');
        $salesEmail = \App\Models\SiteSetting::get('sales_email', 'sales@zrimpex.com');
        $address = \App\Models\SiteSetting::get('address', 'Plot No. 42, Industrial Area, Phase-2, Near Mayapuri, New Delhi, Delhi 110064, India');
        $generalWaUrl = \App\Services\WhatsAppUrlBuilder::build();
    @endphp

    <!-- FIXED TOP INDUSTRIAL HEADER -->
    <header class="fixed top-0 left-0 right-0 z-50 bg-surface-dim/95 backdrop-blur-md shadow-[0_1px_8px_rgba(0,0,0,0.6)] border-b border-surface-container-high">
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
                    <button type="button" 
                            @click="quoteModalOpen = true; activeQuoteProduct = null"
                            class="hidden sm:inline-flex items-center gap-space-xs bg-primary hover:bg-primary-fixed-dim text-on-primary font-headline-sm text-headline-sm px-space-lg py-space-sm rounded font-bold shadow-[0_0_16px_rgba(229,169,16,0.3)] transition-all hover:scale-[1.01] active:translate-y-[1px]">
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
    <main class="flex-grow pt-20">
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
    <footer class="w-full bg-surface-container-lowest text-on-surface-variant border-t border-surface-container-high mt-space-4xl">
        <div class="max-w-max-width-content mx-auto px-gutter-mobile sm:px-gutter-tablet lg:px-gutter-desktop py-space-3xl">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-space-xl mb-space-2xl">
                <!-- Company Bio & Contact Details -->
                <div class="lg:col-span-2 flex flex-col gap-space-md">
                    <div class="flex items-center gap-space-md">
                        <span class="font-headline-md text-headline-md text-on-surface font-bold tracking-tight uppercase">ZR IMPEX</span>
                        <span class="font-label-caps text-label-caps text-primary bg-surface-container px-space-xs py-space-2xs rounded">CNC &amp; LASER</span>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant max-w-md leading-relaxed">
                        Precision heavy-machinery manufacturing and direct plant integration. Delivering high-rigidity CNC gantry routers, industrial fiber laser cutters, high-power plasma tables, and genuine European-spec spindles for demanding manufacturing sectors worldwide.
                    </p>
                    <div class="flex flex-col gap-space-xs mt-space-sm font-tech-spec text-tech-spec">
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
                            <span>{{ $salesEmail }} | support@zrimpex.com</span>
                        </div>
                    </div>
                    <div class="inline-flex items-center gap-space-sm bg-surface-container px-space-md py-space-sm rounded w-fit mt-space-xs border border-surface-container-highest">
                        <span class="material-symbols-outlined text-primary text-[20px]">verified_user</span>
                        <div class="flex flex-col">
                            <span class="font-headline-sm text-headline-sm text-on-surface">ISO 9001:2015</span>
                            <span class="font-label-badge text-label-badge uppercase text-outline">Certified Quality Management System</span>
                        </div>
                    </div>
                </div>

                <!-- CNC Machines Links -->
                <div class="flex flex-col gap-space-sm">
                    <span class="font-headline-sm text-headline-sm text-on-surface font-semibold uppercase tracking-wider mb-space-xs">CNC Machines</span>
                    <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="{{ route('machines.index') }}">Heavy Duty ATC Routers</a>
                    <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="{{ route('machines.index') }}">Multi-Axis 4D &amp; 5D Systems</a>
                    <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="{{ route('machines.index') }}">Stone &amp; Granite Carving CNC</a>
                    <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="{{ route('machines.index') }}">Woodworking Vacuum Table CNC</a>
                    <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="{{ route('machines.index') }}">Advertising Acrylic Engravers</a>
                </div>

                <!-- Fiber & Laser Systems Links -->
                <div class="flex flex-col gap-space-sm">
                    <span class="font-headline-sm text-headline-sm text-on-surface font-semibold uppercase tracking-wider mb-space-xs">Fiber &amp; Laser</span>
                    <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="{{ route('machines.index', ['type' => 'laser']) }}">Sheet Metal Fiber Cutters (12kW)</a>
                    <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="{{ route('machines.index', ['type' => 'laser']) }}">Dual Exchange Platform Laser</a>
                    <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="{{ route('machines.index', ['type' => 'laser']) }}">Tube &amp; Pipe Fiber Cutting Systems</a>
                    <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="{{ route('machines.index', ['type' => 'laser']) }}">Handheld Laser Welding &amp; Cleaning</a>
                    <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="{{ route('machines.index', ['type' => 'laser']) }}">CO2 Precision Laser Engravers</a>
                </div>

                <!-- Spares & Support Links -->
                <div class="flex flex-col gap-space-sm">
                    <span class="font-headline-sm text-headline-sm text-on-surface font-semibold uppercase tracking-wider mb-space-xs">Spares &amp; Support</span>
                    <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="{{ route('spare-parts.index') }}">Electrospindles (HSD &amp; HQD)</a>
                    <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="{{ route('spare-parts.index') }}">Yaskawa Servo Drivers &amp; Motors</a>
                    <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="{{ route('spare-parts.index') }}">Hiwin Linear Motion Rails &amp; Blocks</a>
                    <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="{{ route('spare-parts.index') }}">Raytools Cutting Optics &amp; Nozzles</a>
                    <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="{{ route('contact') }}">Schedule On-Site Calibration</a>
                </div>
            </div>

            <!-- Bottom Legal & Attribution Bar -->
            <div class="pt-space-lg border-t border-surface-container-high flex flex-col md:flex-row items-center justify-between gap-space-md text-body-sm">
                <div class="flex items-center gap-space-xs text-outline">
                    <span class="font-tech-spec text-tech-spec">&copy; {{ date('Y') }} ZR IMPEX Industrial Systems Inc. All rights reserved.</span>
                </div>
                <div class="flex flex-wrap items-center gap-space-lg">
                    <a class="font-body-sm text-body-sm text-outline hover:text-on-surface transition-colors" href="{{ route('about') }}">Company Profile</a>
                    <a class="font-body-sm text-body-sm text-outline hover:text-on-surface transition-colors" href="{{ route('contact') }}">Factory Visits &amp; Demos</a>
                    <button type="button" 
                            onclick="window.openWhatsApp('{{ $generalWaUrl }}')"
                            class="font-body-sm text-body-sm text-primary hover:text-primary-fixed transition-colors">
                        Instant WhatsApp RFQ
                    </button>
                    <a class="font-body-sm text-body-sm text-outline hover:text-on-surface transition-colors" href="/admin" rel="nofollow">Staff Portal</a>
                </div>
            </div>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>
