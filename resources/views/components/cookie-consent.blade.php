<div x-data="{
        showConsent: false,
        init() {
            if (!localStorage.getItem('zr_cookie_consent')) {
                setTimeout(() => {
                    this.showConsent = true;
                }, 600);
            }
        },
        acceptAll() {
            localStorage.setItem('zr_cookie_consent', 'accepted');
            this.showConsent = false;
            if (typeof gtag === 'function') {
                gtag('consent', 'update', {
                    'analytics_storage': 'granted'
                });
            }
        },
        acceptNecessary() {
            localStorage.setItem('zr_cookie_consent', 'necessary');
            this.showConsent = false;
            if (typeof gtag === 'function') {
                gtag('consent', 'update', {
                    'analytics_storage': 'denied'
                });
            }
        }
    }"
    x-cloak
    x-show="showConsent"
    x-transition:enter="transition ease-out duration-300 transform"
    x-transition:enter-start="opacity-0 translate-y-8 scale-95"
    x-transition:enter-end="opacity-100 translate-y-0 scale-100"
    x-transition:leave="transition ease-in duration-200 transform"
    x-transition:leave-start="opacity-100 translate-y-0 scale-100"
    x-transition:leave-end="opacity-0 translate-y-8 scale-95"
    class="fixed bottom-4 left-4 right-4 sm:left-6 sm:right-auto sm:max-w-md z-50 pointer-events-auto"
    role="dialog"
    aria-live="polite"
    aria-label="Cookie and telemetry consent banner">

    <div class="relative bg-surface-dim/95 backdrop-blur-xl border border-primary/30 rounded-2xl p-space-lg shadow-[0_20px_50px_rgba(0,0,0,0.8)] text-on-surface overflow-hidden">
        <!-- Ambient subtle glow -->
        <div class="absolute -top-10 -right-10 w-28 h-28 bg-primary/10 rounded-full blur-2xl pointer-events-none"></div>

        <div class="relative z-10 flex items-start gap-space-md">
            <div class="w-10 h-10 rounded-xl bg-primary/15 border border-primary/30 flex items-center justify-center text-primary shrink-0">
                <span class="material-symbols-outlined text-[22px]">cookie</span>
            </div>

            <div class="flex-1">
                <div class="flex items-center justify-between gap-space-sm mb-1">
                    <span class="font-headline-sm text-headline-sm font-bold uppercase tracking-wider text-on-surface">
                        Industrial Cookie Notice
                    </span>
                    <span class="font-label-caps text-[10px] text-primary bg-primary/10 border border-primary/20 px-1.5 py-0.5 rounded">
                        GDPR &amp; ISO
                    </span>
                </div>

                <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed mb-space-md">
                    We use functional session cookies and anonymous telemetry (Google Analytics 4) to monitor popular CNC router and laser cutter specifications to optimize plant fabrication schedules.
                </p>

                <div class="flex flex-wrap items-center gap-space-xs sm:gap-space-sm">
                    <button type="button" 
                            @click="acceptAll()"
                            class="px-space-md py-1.5 rounded-lg bg-primary hover:bg-primary-hover text-on-primary font-tech-spec text-tech-spec font-bold transition-all shadow-md">
                        Accept All
                    </button>
                    <button type="button" 
                            @click="acceptNecessary()"
                            class="px-space-sm py-1.5 rounded-lg bg-surface-container-high hover:bg-surface-container-highest border border-surface-container-highest text-on-surface font-tech-spec text-tech-spec transition-colors">
                        Essential Only
                    </button>
                    <a href="{{ route('cookie.policy') }}" 
                       class="font-body-sm text-body-sm text-outline hover:text-primary transition-colors underline decoration-dotted ml-auto">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    window.resetCookieConsent = function() {
        localStorage.removeItem('zr_cookie_consent');
        window.location.reload();
    };
</script>
