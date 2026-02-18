@extends('layouts.master')

@section('title', 'DM Vegetables | Pure Organic Sri Lankan Harvest')

@section('content')
    <!-- [HERO] Version 2.0: Cinematic Immersive Slider -->
    <section class="relative h-screen min-h-[700px] overflow-hidden bg-secondary">
        <div class="swiper thm-swiper__slider h-full" data-swiper-options='{
            "slidesPerView": 1,
            "loop": true,
            "effect": "fade",
            "speed": 1500,
            "autoplay": { "delay": 7000, "disableOnInteraction": false },
            "pagination": { "el": ".hero-pagination", "clickable": true }
        }'>
            <div class="swiper-wrapper h-full">
                <!-- Slide 1: Pure Origin -->
                <div class="swiper-slide group relative h-full">
                    <div class="absolute inset-0 scale-110 transition-transform duration-[10000ms] group-[.swiper-slide-active]:scale-100">
                        <img src="https://images.unsplash.com/photo-1542838132-92c53300491e?auto=format&fit=crop&q=80&w=1920" 
                             class="w-full h-full object-cover" alt="Sri Lankan Farms">
                        <div class="absolute inset-0 bg-gradient-to-r from-secondary/80 via-secondary/40 to-transparent"></div>
                    </div>
                    <div class="container mx-auto px-4 h-full flex items-center relative z-10">
                        <div class="max-w-4xl opacity-0 translate-y-10 transition-all duration-1000 group-[.swiper-slide-active]:opacity-100 group-[.swiper-slide-active]:translate-y-0 delay-500">
                            <span class="inline-flex items-center gap-2 px-4 py-1.5 bg-primary/20 backdrop-blur-xl border border-white/10 text-white rounded-full text-xs font-black uppercase tracking-[0.2em] mb-8">
                                <span class="w-1.5 h-1.5 bg-primary rounded-full animate-ping"></span>
                                Direct from Sri Lanka
                            </span>
                            <h1 class="text-5xl sm:text-7xl lg:text-[100px] xl:text-[120px] font-heading font-black text-white leading-[0.9] mb-8">
                                Pure <br> <span class="text-primary italic">Organic</span> <br> Legacy
                            </h1>
                            <p class="text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-primary to-accent mb-12 drop-shadow-sm">
                                "Nurtured by Nature, Delivered by Trust."
                            </p>
                            <div class="flex items-center gap-6">
                                <a href="{{ url('/products') }}" class="group relative px-10 py-5 bg-primary text-white rounded-full font-black text-lg overflow-hidden transition-all shadow-2xl shadow-primary/40 flex items-center justify-center">
                                    <span class="relative z-10 transition-all duration-300 group-hover:-translate-y-12 group-hover:opacity-0">Explore Harvest</span>
                                    <div class="absolute inset-0 bg-white translate-y-full group-hover:translate-y-0 transition-transform duration-300"></div>
                                    <span class="absolute inset-0 flex items-center justify-center text-primary font-black translate-y-12 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-300">Discover Now</span>
                                </a>
                                <div class="hidden sm:flex items-center gap-4 text-white/60">
                                    <div class="w-12 h-px bg-white/20"></div>
                                    <span class="text-sm font-bold uppercase tracking-widest italic">Since 2008</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2: Global Reach -->
                <div class="swiper-slide group relative h-full">
                    <div class="absolute inset-0 scale-110 transition-transform duration-[10000ms] group-[.swiper-slide-active]:scale-100">
                        <img src="https://images.unsplash.com/photo-1610832958506-aa56368176cf?auto=format&fit=crop&q=80&w=1920" 
                             class="w-full h-full object-cover" alt="Global Logistics">
                        <div class="absolute inset-0 bg-gradient-to-r from-secondary/80 via-secondary/40 to-transparent"></div>
                    </div>
                    <div class="container mx-auto px-4 h-full flex items-center relative z-10">
                        <div class="max-w-4xl opacity-0 translate-y-10 transition-all duration-1000 group-[.swiper-slide-active]:opacity-100 group-[.swiper-slide-active]:translate-y-0 delay-500">
                            <span class="inline-flex items-center gap-2 px-4 py-1.5 bg-accent/20 backdrop-blur-xl border border-white/10 text-white rounded-full text-xs font-black uppercase tracking-[0.2em] mb-8">
                                <span class="w-1.5 h-1.5 bg-accent rounded-full animate-ping"></span>
                                Global Logistics
                            </span>
                            <h2 class="text-5xl sm:text-7xl lg:text-[100px] xl:text-[120px] font-heading font-black text-white leading-[0.9] mb-8">
                                Beyond <br> <span class="text-accent italic">Borders</span>
                            </h2>
                            <p class="text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-accent to-white mb-12 drop-shadow-sm italic">
                                "Freshness has no limit, Quality has no compromise."
                            </p>
                            <a href="{{ url('/contact') }}" class="px-10 py-5 border-2 border-white text-white rounded-full font-black text-lg hover:bg-white hover:text-secondary transition-all">
                                Request a Quote
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Slide 3: Sustainable Future -->
                <div class="swiper-slide group relative h-full">
                    <div class="absolute inset-0 scale-110 transition-transform duration-[10000ms] group-[.swiper-slide-active]:scale-100">
                        <img src="https://images.unsplash.com/photo-1557844352-761f2565b576?auto=format&fit=crop&q=80&w=1920" 
                             class="w-full h-full object-cover" alt="Sustainable Farming">
                        <div class="absolute inset-0 bg-gradient-to-r from-secondary/80 via-secondary/40 to-transparent"></div>
                    </div>
                    <div class="container mx-auto px-4 h-full flex items-center relative z-10">
                        <div class="max-w-4xl opacity-0 translate-y-10 transition-all duration-1000 group-[.swiper-slide-active]:opacity-100 group-[.swiper-slide-active]:translate-y-0 delay-500">
                            <span class="inline-flex items-center gap-2 px-4 py-1.5 bg-primary/20 backdrop-blur-xl border border-white/10 text-white rounded-full text-xs font-black uppercase tracking-[0.2em] mb-8">
                                <span class="w-1.5 h-1.5 bg-primary rounded-full animate-ping"></span>
                                Future of Food
                            </span>
                            <h2 class="text-5xl sm:text-7xl lg:text-[100px] xl:text-[120px] font-heading font-black text-white leading-[0.9] mb-8">
                                Green <br> <span class="text-primary italic">Innovation</span>
                            </h2>
                            <p class="text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-primary via-accent to-white mb-12 drop-shadow-sm">
                                "Growing a greener tomorrow, one organic seed at a time."
                            </p>
                            <a href="{{ url('/products') }}" class="px-10 py-5 bg-white text-secondary rounded-full font-black text-lg hover:bg-primary hover:text-white transition-all shadow-2xl">
                                Join the Movement
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Hero Extras -->
            <div class="absolute bottom-12 left-1/2 -translate-x-1/2 z-20 container mx-auto px-4 flex justify-between items-end pointer-events-none">
                <div class="hero-pagination flex gap-2 pointer-events-auto"></div>
                <div class="hidden lg:block animate-bounce opacity-40">
                    <div class="w-px h-24 bg-gradient-to-b from-white to-transparent"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- [BENTO GRID] Why Choose Us -->
    <section class="py-20 lg:py-40 bg-white relative">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-4 grid-rows-2 gap-6 h-full lg:h-[700px]">
                <!-- Main Promo Card -->
                <div class="lg:col-span-2 lg:row-span-2 bg-primary rounded-[60px] p-16 text-white relative overflow-hidden group reveal-section">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full translate-x-1/2 -translate-y-1/2 blur-3xl"></div>
                    <h3 class="text-4xl sm:text-5xl lg:text-7xl font-heading font-black mb-8 relative z-10 leading-tight">Harvested <br> with <span class="italic underline decoration-white/30">Love.</span></h3>
                    <p class="text-xl text-white/80 mb-12 max-w-md leading-relaxed">Direct partnerships with 300+ local families, ensuring ethical practices and the highest organic standards in every crate.</p>
                    <div class="flex items-center gap-4 relative z-10 transition-transform group-hover:translate-x-4">
                        <div class="w-20 h-20 bg-white/20 backdrop-blur-xl rounded-2xl flex items-center justify-center">
                            <i class="fas fa-certificate text-4xl"></i>
                        </div>
                        <span class="text-2xl font-black italic">Quality First</span>
                    </div>
                    <img src="{{ asset('assets/icon/test2nnn.png') }}" class="absolute bottom-[-10%] right-[-10%] w-80 opacity-10 rotate-12 group-hover:rotate-0 transition-transform duration-700" alt="">
                </div>

                <!-- Fast Delivery -->
                <div class="lg:col-span-2 bg-secondary rounded-[60px] p-12 text-white flex flex-col justify-between group hover:bg-black transition-colors duration-500 reveal-right">
                    <div class="flex justify-between items-start">
                        <div class="w-16 h-16 bg-white/10 rounded-2xl flex items-center justify-center text-primary text-3xl group-hover:scale-110 transition-transform">
                            <i class="fas fa-plane-departure"></i>
                        </div>
                        <span class="text-white/40 font-bold uppercase tracking-widest text-xs">Express Logistics</span>
                    </div>
                    <div>
                        <h4 class="text-3xl font-black mb-2">Air & Sea Exports</h4>
                        <p class="text-white/60">Optimized routes for maximum freshness.</p>
                    </div>
                </div>

                <!-- Return Policy -->
                <div class="bg-surface rounded-[60px] p-12 flex flex-col justify-between group hover:border-primary border border-transparent transition-all reveal-up">
                    <div class="w-16 h-16 bg-white shadow-xl rounded-2xl flex items-center justify-center text-primary text-3xl group-hover:rotate-12 transition-transform mb-8">
                        <i class="fas fa-undo"></i>
                    </div>
                    <div>
                        <h4 class="text-2xl font-black text-secondary leading-none mb-4">Zero Risk</h4>
                        <p class="text-gray-500 text-sm">Full satisfaction guarantee.</p>
                    </div>
                </div>

                <!-- Support -->
                <div class="bg-accent rounded-[60px] p-12 flex flex-col justify-between group bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] reveal-right">
                    <div class="w-16 h-16 bg-secondary rounded-2xl flex items-center justify-center text-white text-3xl mb-8">
                        <i class="fas fa-headset"></i>
                    </div>
                    <div>
                        <h4 class="text-2xl font-black text-secondary leading-none mb-4">Expert Care</h4>
                        <p class="text-secondary/60 text-sm">Personalized export consulting.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- [STORY & TIMELINE] The Organic Journey -->
    <section class="py-20 lg:py-40 bg-surface relative overflow-hidden">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row items-start gap-24">
                <!-- Visual Story -->
                <div class="lg:w-1/2 sticky top-40 reveal-left">
                    <span class="text-primary font-black uppercase tracking-[0.3em] text-xs mb-6 block">Our Brand Core</span>
                    <h2 class="text-5xl sm:text-6xl lg:text-8xl font-heading font-black text-secondary mb-12 leading-[0.9]">Beyond <br> Just <span class="text-primary italic">Exporting</span></h2>
                    <div class="relative group">
                        <div class="absolute -inset-4 bg-primary/20 rounded-[60px] blur-2xl group-hover:bg-primary/30 transition-all opacity-0 group-hover:opacity-100"></div>
                        <img src="https://images.unsplash.com/photo-1595855759920-86582396756a?auto=format&fit=crop&q=80&w=1200" 
                             class="rounded-[60px] shadow-2xl relative z-10 grayscale hover:grayscale-0 transition-all duration-700" alt="Farm Story">
                        
                        <div class="absolute -bottom-10 -right-10 bg-white p-8 rounded-[40px] shadow-2xl z-20 max-w-[240px] hidden xl:block animate-floating">
                            <p class="text-secondary font-bold italic leading-tight">"We don't just sell vegetables, we share the life force of Sri Lanka."</p>
                            <span class="text-primary text-[10px] font-black uppercase tracking-widest mt-4 block">- Founder's Note</span>
                        </div>
                    </div>
                </div>

                <!-- Timeline Journey -->
                <div class="lg:w-1/2 space-y-16 lg:space-y-32 py-10 lg:py-20">
                    <div class="relative pl-12 reveal-up mt-12 lg:mt-0">
                        <div class="absolute left-0 top-0 w-0.5 h-full bg-primary/20"></div>
                        <div class="absolute left-[-6px] top-0 w-4 h-4 rounded-full bg-primary shadow-[0_0_20px_rgba(95,189,115,0.6)]"></div>
                        <h4 class="text-3xl font-black text-secondary mb-6 mt-1 sm:mt-0">Seed of Trust</h4>
                        <p class="text-xl text-gray-500 leading-relaxed">It starts in the moist soil of Nuwara Eliya. We provide farmers with organic non-GMO seeds, ensuring the lineage of health starts from the very first sprout.</p>
                    </div>

                    <div class="relative pl-12 reveal-up">
                        <div class="absolute left-0 top-0 w-0.5 h-full bg-primary/20"></div>
                        <div class="absolute left-[-6px] top-0 w-4 h-4 rounded-full bg-primary animate-pulse"></div>
                        <h4 class="text-3xl font-black text-secondary mb-6">Nurtured by Nature</h4>
                        <p class="text-xl text-gray-500 leading-relaxed">No chemicals. No shortcuts. Our crops are nurtured using traditional composting and rain-fed irrigation, preserving the true essence of nature.</p>
                    </div>

                    <div class="relative pl-12 reveal-up">
                        <div class="absolute left-[-6px] top-0 w-4 h-4 rounded-full bg-secondary"></div>
                        <h4 class="text-3xl font-black text-secondary mb-6">The Global Table</h4>
                        <p class="text-xl text-gray-500 leading-relaxed">Within 24 hours of harvest, our produce is cooled, packed, and dispatched. Your global kitchen deserves nothing less than perfection.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- [QUOTE] Brand Philosophy Section -->
    <section class="py-20 lg:py-40 bg-surface relative overflow-hidden">
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1466692476868-aef1dfb1e835?auto=format&fit=crop&q=80&w=1920')] bg-fixed bg-cover opacity-5"></div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-5xl mx-auto text-center reveal-up">
                <i class="fas fa-quote-left text-primary/20 text-8xl mb-12"></i>
                <h2 class="text-3xl sm:text-4xl lg:text-7xl font-heading font-black text-secondary leading-tight italic mb-12 uppercase tracking-tighter">
                    "Health is a relationship between you and your body. <br> <span class="text-primary underline decoration-primary/20">Organic</span> is the language they speak."
                </h2>
                <div class="flex flex-col items-center gap-4">
                    <div class="w-20 h-px bg-primary/30"></div>
                    <span class="text-secondary font-black tracking-[0.4em] uppercase text-xs">DM Vegetables Manifesto</span>
                </div>
            </div>
        </div>
    </section>

    <!-- [STATS] Dynamic Impact -->
    <section class="py-24 bg-primary relative overflow-hidden">
        <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/leaf.png')]"></div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-16">
                @foreach([['3', 'Branches'], ['200', 'Eco-Farmers'], ['300', 'Premium Farms'], ['2870', 'Global Clients']] as [$count, $label])
                <div class="text-center group">
                    <div class="text-5xl sm:text-7xl font-heading font-black text-white mb-4 transition-transform group-hover:scale-110">
                        <span class="odometer" data-count="{{ $count }}">0</span><span class="text-3xl text-white/50 inline-block -ml-2">+</span>
                    </div>
                    <span class="text-white/70 font-black uppercase tracking-[0.2em] text-xs underline decoration-white/20 underline-offset-8">{{ $label }}</span>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- [PRICING] Harvesting Plans -->
    <section class="py-20 lg:py-40 bg-white overflow-hidden relative">
        <div class="container mx-auto px-4">
            <div class="text-center mb-20 lg:mb-32 max-w-3xl mx-auto">
                <span class="text-primary font-black uppercase tracking-[0.3em] text-xs mb-6 block italic">Tailored for You</span>
                <h2 class="text-4xl sm:text-5xl lg:text-[80px] font-heading font-black text-secondary leading-none">Choose Your <br> <span class="text-primary italic">Harvest Cycle</span></h2>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Weekly -->
                <div class="group relative bg-surface rounded-[80px] p-2 overflow-hidden hover:shadow-2xl hover:shadow-primary/20 transition-all duration-700 reveal-left">
                    <div class="aspect-[16/10] overflow-hidden rounded-[78px] relative">
                         <img src="https://images.unsplash.com/photo-1574323347407-f5e1ad6d020b?auto=format&fit=crop&q=80&w=1200" 
                              class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000" alt="Weekly Harvest">
                         <div class="absolute inset-0 bg-gradient-to-t from-secondary/80 via-transparent to-transparent"></div>
                         <div class="absolute top-10 right-10 px-8 py-3 bg-white/20 backdrop-blur-md rounded-full text-white font-black text-xs uppercase tracking-widest border border-white/20">Popular Choice</div>
                    </div>
                    <div class="p-16">
                        <h4 class="text-4xl font-heading font-black text-secondary mb-6">Weekly Renewal</h4>
                        <p class="text-lg text-gray-400 mb-12">Constant pricing refreshed every 7 days. Perfect for high-volume traders requiring weekly agility.</p>
                        <a href="{{ url('/quotations') }}" class="inline-flex items-center gap-4 text-primary font-black group-hover:gap-8 transition-all">
                            <span class="text-2xl italic">Check Quotation</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Monthly -->
                <div class="group relative bg-secondary rounded-[80px] p-2 overflow-hidden hover:shadow-2xl hover:shadow-primary/20 transition-all duration-700 reveal-right">
                    <div class="aspect-[16/10] overflow-hidden rounded-[78px] relative">
                         <img src="https://images.unsplash.com/photo-1542838132-92c53300491e?auto=format&fit=crop&q=80&w=1200" 
                              class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000" alt="Fresh Harvest">
                         <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
                         <div class="absolute top-10 right-10 px-8 py-3 bg-primary rounded-full text-white font-black text-xs uppercase tracking-widest">Steady Flow</div>
                    </div>
                    <div class="p-16 text-white">
                        <h4 class="text-4xl font-heading font-black mb-6">Monthly Commitment</h4>
                        <p class="text-lg text-white/40 mb-12">Fixed rates locked for 30 days. Designed for long-term consistency in organic supply chains.</p>
                        <a href="{{ url('/quotations') }}" class="inline-flex items-center gap-4 text-primary font-black group-hover:gap-8 transition-all">
                            <span class="text-2xl italic underline decoration-primary/30">Detailed Plans</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- [CTA] Global Invitation -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="bg-primary rounded-[80px] p-20 text-center relative overflow-hidden reveal-section">
                <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/leaf.png')] opacity-10"></div>
                <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-white/10 to-transparent"></div>
                
                <div class="relative z-10 max-w-3xl mx-auto">
                    <h2 class="text-4xl sm:text-5xl lg:text-7xl font-heading font-black text-white mb-10 leading-none">Ready to Taste the <span class="italic text-secondary">Isle of Spice?</span></h2>
                    <p class="text-lg sm:text-xl text-white/70 mb-12">Join our global network of premium organic importers. Secure your shipment of Sri Lankan greatness today.</p>
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                        <a href="{{ url('/contact') }}" class="w-full sm:w-auto px-12 py-6 bg-white text-secondary rounded-full font-black text-xl hover:bg-secondary hover:text-white transition-all shadow-2xl">
                            Start Partnership
                        </a>
                        <a href="tel:+9412345678" class="flex items-center gap-4 text-white font-black text-lg group">
                            <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center group-hover:bg-white/30 transition-all">
                                <i class="fas fa-phone"></i>
                            </div>
                            Call Our Concierge
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.7/themes/odometer-theme-minimal.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.7/odometer.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Odometer Logic
            const odometers = document.querySelectorAll('.odometer');
            const oObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const target = entry.target;
                        target.innerHTML = target.getAttribute('data-count');
                        oObserver.unobserve(target);
                    }
                });
            }, { threshold: 0.5 });
            odometers.forEach(o => oObserver.observe(o));

            // Reveal Anim Logic
            const reveals = document.querySelectorAll('.reveal-section, .reveal-left, .reveal-right, .reveal-up');
            const rObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-revealed');
                        rObserver.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1 });
            reveals.forEach(r => rObserver.observe(r));
        });
    </script>
@endpush
