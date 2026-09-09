@extends('layouts.app')

@section('title', 'Cookie Policy — ZR IMPEX Industrial Machinery')
@section('meta_description', 'Information on how ZR IMPEX uses functional session cookies and Google Analytics 4 (GA4) to analyze equipment interest and optimize machinery inventories.')

@section('content')
<div class="relative z-10">
    <!-- Breadcrumb & Industrial Header -->
    <div class="border-b border-surface-container-high bg-surface-dim/80 backdrop-blur-sm">
        <div class="max-w-max-width-content mx-auto px-gutter-desktop py-space-3xl lg:py-space-4xl">
            <div class="flex items-center gap-space-xs text-outline font-tech-spec text-tech-spec mb-space-sm">
                <a href="{{ route('home') }}" class="hover:text-primary transition-colors">Home</a>
                <span class="text-surface-container-highest">/</span>
                <span class="text-primary">Legal &amp; Compliance</span>
                <span class="text-surface-container-highest">/</span>
                <span class="text-on-surface">Cookie Policy</span>
            </div>

            <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-lg">
                <div>
                    <div class="inline-flex items-center gap-space-xs bg-surface-container border border-surface-container-highest px-space-sm py-space-2xs rounded text-primary font-tech-spec text-tech-spec uppercase tracking-wider mb-space-sm">
                        <span class="material-symbols-outlined text-[16px]">cookie</span>
                        Browser Storage &amp; Telemetry
                    </div>
                    <h1 class="font-headline-xl text-headline-xl sm:text-display-md text-on-surface font-bold uppercase tracking-tight">
                        Cookie Policy
                    </h1>
                    <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl mt-space-xs">
                        Details on how our digital machinery catalog uses essential session tokens and anonymous analytics to improve catalogue speed and inventory readiness.
                    </p>
                </div>
                <div class="text-right font-tech-spec text-tech-spec text-outline shrink-0">
                    <div>Last Reviewed: {{ date('F Y') }}</div>
                    <div>Privacy Standard: Minimal Telemetry</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content Body -->
    <div class="max-w-max-width-content mx-auto px-gutter-desktop py-space-2xl">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-space-2xl">
            <!-- Sidebar Index Navigation -->
            <div class="lg:col-span-1">
                <div class="sticky top-28 bg-surface-container/50 border border-surface-container-high rounded-xl p-space-lg">
                    <span class="font-headline-sm text-headline-sm text-on-surface font-semibold uppercase tracking-wider block mb-space-md">Contents</span>
                    <nav class="flex flex-col gap-space-sm font-body-sm text-body-sm">
                        <a href="#what-are-cookies" class="text-on-surface-variant hover:text-primary transition-colors py-1 border-b border-surface-container-high/40">1. What Are Cookies?</a>
                        <a href="#cookies-we-use" class="text-on-surface-variant hover:text-primary transition-colors py-1 border-b border-surface-container-high/40">2. Cookies We Deploy</a>
                        <a href="#analytics-purpose" class="text-on-surface-variant hover:text-primary transition-colors py-1 border-b border-surface-container-high/40">3. Google Analytics 4 (GA4)</a>
                        <a href="#controlling-cookies" class="text-on-surface-variant hover:text-primary transition-colors py-1">4. Managing Preferences</a>
                    </nav>

                    <div class="mt-space-xl pt-space-lg border-t border-surface-container-high">
                        <button type="button" 
                                onclick="window.resetCookieConsent && window.resetCookieConsent()"
                                class="w-full text-center px-space-md py-space-sm rounded bg-surface-container-high border border-surface-container-highest text-primary font-tech-spec text-tech-spec hover:bg-surface-container transition-colors">
                            Reset Cookie Banner
                        </button>
                    </div>
                </div>
            </div>

            <!-- Content Details -->
            <div class="lg:col-span-3 space-y-space-xl">
                <!-- Section 1 -->
                <section id="what-are-cookies" class="bg-surface-container/40 border border-surface-container-high/80 rounded-xl p-space-xl">
                    <div class="flex items-center gap-space-sm mb-space-md">
                        <span class="w-8 h-8 rounded bg-primary/10 text-primary flex items-center justify-center font-tech-spec text-tech-spec font-bold border border-primary/20">01</span>
                        <h2 class="font-headline-md text-headline-md text-on-surface font-bold uppercase tracking-wide">What Are Cookies?</h2>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed mb-space-md">
                        Cookies are small text data files placed on your computer, tablet, or smartphone when you visit modern web applications. They allow the server to remember your device, keep security tokens intact during form submissions, and record anonymous performance metrics.
                    </p>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                        At ZR IMPEX, we maintain a strictly functional and respectful approach to web data. We do not use intrusive advertising ad-trackers or sell your browsing history.
                    </p>
                </section>

                <!-- Section 2 -->
                <section id="cookies-we-use" class="bg-surface-container/40 border border-surface-container-high/80 rounded-xl p-space-xl">
                    <div class="flex items-center gap-space-sm mb-space-md">
                        <span class="w-8 h-8 rounded bg-primary/10 text-primary flex items-center justify-center font-tech-spec text-tech-spec font-bold border border-primary/20">02</span>
                        <h2 class="font-headline-md text-headline-md text-on-surface font-bold uppercase tracking-wide">Cookies Deployed on ZR IMPEX</h2>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left font-body-sm text-body-sm border border-surface-container-high rounded-lg overflow-hidden">
                            <thead class="bg-surface-container-high text-on-surface font-tech-spec text-tech-spec uppercase">
                                <tr>
                                    <th class="p-space-md">Cookie Name</th>
                                    <th class="p-space-md">Category</th>
                                    <th class="p-space-md">Duration</th>
                                    <th class="p-space-md">Purpose</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-surface-container-high/60 font-tech-spec text-tech-spec">
                                <tr class="hover:bg-surface-container/30">
                                    <td class="p-space-md font-bold text-primary">XSRF-TOKEN</td>
                                    <td class="p-space-md text-emerald-400">Strictly Necessary</td>
                                    <td class="p-space-md text-outline">Session (2 Hours)</td>
                                    <td class="p-space-md text-on-surface-variant">Prevents Cross-Site Request Forgery (CSRF) during quote and contact form transmissions.</td>
                                </tr>
                                <tr class="hover:bg-surface-container/30">
                                    <td class="p-space-md font-bold text-primary">zrimpex_session</td>
                                    <td class="p-space-md text-emerald-400">Strictly Necessary</td>
                                    <td class="p-space-md text-outline">Session</td>
                                    <td class="p-space-md text-on-surface-variant">Maintains state between catalogue browsing, machine filters, and notification flash alerts.</td>
                                </tr>
                                <tr class="hover:bg-surface-container/30">
                                    <td class="p-space-md font-bold text-primary">zr_cookie_consent</td>
                                    <td class="p-space-md text-cyan-400">Preference</td>
                                    <td class="p-space-md text-outline">1 Year (Local)</td>
                                    <td class="p-space-md text-on-surface-variant">Stores your choice from our cookie consent banner so you are not prompted on every page load.</td>
                                </tr>
                                <tr class="hover:bg-surface-container/30">
                                    <td class="p-space-md font-bold text-primary">_ga, _ga_*</td>
                                    <td class="p-space-md text-amber-400">Analytics (GA4)</td>
                                    <td class="p-space-md text-outline">Up to 2 Years</td>
                                    <td class="p-space-md text-on-surface-variant">Distinguishes unique anonymous website visits to determine which CNC models generate the highest industry demand.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>

                <!-- Section 3 -->
                <section id="analytics-purpose" class="bg-surface-container/40 border border-surface-container-high/80 rounded-xl p-space-xl">
                    <div class="flex items-center gap-space-sm mb-space-md">
                        <span class="w-8 h-8 rounded bg-primary/10 text-primary flex items-center justify-center font-tech-spec text-tech-spec font-bold border border-primary/20">03</span>
                        <h2 class="font-headline-md text-headline-md text-on-surface font-bold uppercase tracking-wide">Google Analytics 4 (GA4) Usage</h2>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed mb-space-md">
                        We use Google Analytics 4 with IP anonymization enabled. This information is purely aggregate and statistical:
                    </p>
                    <ul class="space-y-space-sm font-body-md text-body-md text-on-surface-variant">
                        <li class="flex items-start gap-space-xs">
                            <span class="material-symbols-outlined text-primary text-[20px] shrink-0">insights</span>
                            <span>Assessing which CNC spindle speeds, fiber laser power outputs (e.g., 3kW vs 12kW), and spare parts are most frequently viewed.</span>
                        </li>
                        <li class="flex items-start gap-space-xs">
                            <span class="material-symbols-outlined text-primary text-[20px] shrink-0">insights</span>
                            <span>Aligning factory assembly schedules with high-demand models to minimize lead times for Indian workshops.</span>
                        </li>
                    </ul>
                </section>

                <!-- Section 4 -->
                <section id="controlling-cookies" class="bg-surface-container/40 border border-surface-container-high/80 rounded-xl p-space-xl">
                    <div class="flex items-center gap-space-sm mb-space-md">
                        <span class="w-8 h-8 rounded bg-primary/10 text-primary flex items-center justify-center font-tech-spec text-tech-spec font-bold border border-primary/20">04</span>
                        <h2 class="font-headline-md text-headline-md text-on-surface font-bold uppercase tracking-wide">Managing &amp; Disabling Cookies</h2>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed mb-space-md">
                        You can configure your web browser to block all cookies, accept only first-party cookies, or alert you before a cookie is stored. Instructions for major web browsers:
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-space-md font-body-sm text-body-sm">
                        <div class="bg-surface-container p-space-md rounded border border-surface-container-high">
                            <span class="text-on-surface font-bold block mb-1">Google Chrome</span>
                            <span class="text-on-surface-variant">Settings &gt; Privacy and security &gt; Third-party cookies.</span>
                        </div>
                        <div class="bg-surface-container p-space-md rounded border border-surface-container-high">
                            <span class="text-on-surface font-bold block mb-1">Mozilla Firefox</span>
                            <span class="text-on-surface-variant">Settings &gt; Privacy &amp; Security &gt; Enhanced Tracking Protection.</span>
                        </div>
                        <div class="bg-surface-container p-space-md rounded border border-surface-container-high">
                            <span class="text-on-surface font-bold block mb-1">Apple Safari</span>
                            <span class="text-on-surface-variant">Preferences &gt; Privacy &gt; Prevent cross-site tracking.</span>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
@endsection
