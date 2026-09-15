<div x-show="quoteModalOpen" 
     class="fixed inset-0 z-50 overflow-y-auto"
     aria-labelledby="modal-title" 
     role="dialog" 
     aria-modal="true"
     style="display: none;">
    
    <!-- Backdrop overlay -->
    <div x-show="quoteModalOpen"
         x-transition:enter="ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         @click="quoteModalOpen = false"
         class="fixed inset-0 bg-surface-container-lowest/85 backdrop-blur-md transition-opacity"></div>

    <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">
        <div x-show="quoteModalOpen"
             x-transition:enter="ease-out duration-300"
             x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
             x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
             x-transition:leave="ease-in duration-200"
             x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
             x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
             @click.away="quoteModalOpen = false"
             class="relative transform overflow-hidden rounded bg-surface-container border border-surface-container-highest text-left shadow-[0_20px_50px_rgba(0,0,0,0.8)] transition-all sm:my-8 sm:w-full sm:max-w-lg p-6 sm:p-8">
            
            <div class="flex items-center justify-between pb-4 border-b border-surface-container-high">
                <div>
                    <h3 class="font-headline-sm text-headline-sm font-bold text-on-surface flex items-center gap-2">
                        <span class="w-2.5 h-2.5 rounded-full bg-primary animate-pulse"></span>
                        Request Commercial Quotation
                    </h3>
                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Get factory-direct pricing, cycle time analysis, and technical datasheets from ZR IMPEX engineering sales.</p>
                </div>
                <button type="button" 
                        @click="quoteModalOpen = false" 
                        class="text-outline hover:text-on-surface p-1 rounded-sm transition-colors">
                    <span class="material-symbols-outlined text-[22px]">close</span>
                </button>
            </div>

            <!-- Lead Form -->
            <form action="{{ route('enquiry.store') }}" method="POST" class="mt-6 space-y-4">
                @csrf
                <input type="hidden" name="source" value="quote_form">

                <!-- Honeypot Anti-Spam (Must stay empty) -->
                <div class="hidden" aria-hidden="true">
                    <input type="text" name="b_name" tabindex="-1" autocomplete="off">
                </div>

                <!-- Product Selection -->
                <div>
                    <label class="block font-label-caps text-label-caps uppercase text-outline mb-1.5">Machine / Spare Part</label>
                    <select name="product_id" 
                            class="w-full bg-surface-container-lowest border border-surface-container-high focus:border-primary focus:ring-1 focus:ring-primary rounded px-3 py-2 text-sm text-on-surface font-tech-spec">
                        <option value="">-- Select Product (or General Industrial Enquiry) --</option>
                        @foreach(\App\Models\Product::published()->orderBy('type')->orderBy('name')->get() as $p)
                            <option value="{{ $p->id }}" 
                                    x-bind:selected="activeQuoteProduct == {{ $p->id }}">
                                [{{ strtoupper($p->type) }}] {{ $p->name }} {{ $p->model_number ? "({$p->model_number})" : '' }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block font-label-caps text-label-caps uppercase text-outline mb-1.5">Full Name *</label>
                        <input type="text" 
                               name="name" 
                               required
                               placeholder="Enter your full name"
                               class="w-full bg-surface-container-lowest border border-surface-container-high focus:border-primary focus:ring-1 focus:ring-primary rounded px-3 py-2 text-sm text-on-surface placeholder-outline/60 font-body-md">
                    </div>

                    <div>
                        <label class="block font-label-caps text-label-caps uppercase text-outline mb-1.5">Phone Number *</label>
                        <input type="tel" 
                               name="phone" 
                               required
                               placeholder="Enter your phone number"
                               class="w-full bg-surface-container-lowest border border-surface-container-high focus:border-primary focus:ring-1 focus:ring-primary rounded px-3 py-2 text-sm text-on-surface placeholder-outline/60 font-tech-spec">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block font-label-caps text-label-caps uppercase text-outline mb-1.5">Email Address</label>
                        <input type="email" 
                               name="email" 
                               placeholder="Enter your email address"
                               class="w-full bg-surface-container-lowest border border-surface-container-high focus:border-primary focus:ring-1 focus:ring-primary rounded px-3 py-2 text-sm text-on-surface placeholder-outline/60 font-body-md">
                    </div>

                    <div>
                        <label class="block font-label-caps text-label-caps uppercase text-outline mb-1.5">City / State</label>
                        <input type="text" 
                               name="city" 
                               placeholder="Enter your city/state"
                               class="w-full bg-surface-container-lowest border border-surface-container-high focus:border-primary focus:ring-1 focus:ring-primary rounded px-3 py-2 text-sm text-on-surface placeholder-outline/60 font-body-md">
                    </div>
                </div>

                <div>
                    <label class="block font-label-caps text-label-caps uppercase text-outline mb-1.5">Company / Workshop Name</label>
                    <input type="text" 
                           name="company_name" 
                           placeholder="Enter your company name"
                           class="w-full bg-surface-container-lowest border border-surface-container-high focus:border-primary focus:ring-1 focus:ring-primary rounded px-3 py-2 text-sm text-on-surface placeholder-outline/60 font-body-md">
                </div>

                <div>
                    <label class="block font-label-caps text-label-caps uppercase text-outline mb-1.5">Cutting Application / Substrate Details</label>
                    <textarea name="message" 
                              rows="3" 
                              placeholder="Describe your material and cutting requirements"
                              class="w-full bg-surface-container-lowest border border-surface-container-high focus:border-primary focus:ring-1 focus:ring-primary rounded px-3 py-2 text-sm text-on-surface placeholder-outline/60 font-body-md"></textarea>
                </div>

                <div class="pt-2">
                    <button type="submit" 
                            class="w-full bg-primary hover:bg-primary-fixed-dim text-on-primary font-bold text-sm py-3 rounded uppercase tracking-wider font-tech-spec transition-all duration-200 shadow-md hover:shadow-primary/20 active:translate-y-[1px]">
                        Submit Quote Request
                    </button>
                    <p class="font-label-badge text-label-badge text-center text-outline mt-2.5">
                        Direct Factory Quotation • Zero Spam • Technical Support via WhatsApp / Phone
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>
