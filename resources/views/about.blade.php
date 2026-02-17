@extends('layouts.master')

@section('title', 'Our Story | DM Vegetables')

@section('content')
    <!-- Page Header -->
    <section class="relative py-20 bg-primary overflow-hidden">
        <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/leaf.png')]"></div>
        <div class="container mx-auto px-4 relative z-10 text-center">
            <h1 class="text-4xl lg:text-3xl font-heading font-black text-white mb-2">Our Story</h1>
            <nav class="flex justify-center space-x-2 text-white/80 text-sm font-medium">
                <a href="{{ url('/') }}" class="hover:text-white transition-colors">Home</a>
                <span>/</span>
                <span class="text-white">About</span>
            </nav>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-24 bg-white overflow-hidden">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-24">
                <div class="lg:w-1/2 relative space-y-4">
                    <div class="rounded-[40px] overflow-hidden shadow-2xl skew-y-1">
                        <img src="https://images.unsplash.com/photo-1592417817098-8fd3d9eb14a5?auto=format&fit=crop&q=80&w=800" class="w-full" alt="About DM Vegetables">
                    </div>
                    <div class="absolute -top-10 -left-10 w-32 h-32 bg-accent rounded-full opacity-20 blur-2xl"></div>
                </div>
                <div class="lg:w-1/2">
                    <span class="text-primary font-bold tracking-widest uppercase text-sm">Get to Know Us</span>
                    <h2 class="text-4xl lg:text-7xl font-heading font-black mt-4 mb-8 leading-tight">We’re Selling Quality Organic Products</h2>
                    <p class="text-lg text-gray-500 mb-6 leading-relaxed">
                        We are happy to announce that some of the freshest and tastiest organic fruits and vegetables are grown on our fields. By now exporting our produce to customers around the world, we are further demonstrating our dedication to quality and sustainability.
                    </p>
                    <p class="text-lg text-gray-500 mb-6 leading-relaxed">
                        Our produce, ranging from crisp cucumbers to juicy tomatoes, is raised without the use of any harmful chemicals. Join us in promoting sustainable agriculture and organic farming!
                    </p>
                    
                    <div class="grid grid-cols-2 gap-8 mt-12">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center text-primary">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <span class="font-bold text-secondary">100% Organic</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center text-primary">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <span class="font-bold text-secondary">Export Quality</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Section -->
    <section class="py-32 relative text-white">
        <div class="absolute inset-0 bg-cover bg-fixed bg-center" style="background-image: url(https://images.unsplash.com/photo-1464226184884-fa280b87c399?auto=format&fit=crop&q=80&w=1920);"></div>
        <div class="absolute inset-0 bg-primary/60 backdrop-blur-[2px]"></div>
        <div class="container mx-auto px-4 relative z-10 text-center">
            <a href="https://www.youtube.com/watch?v=u5l4cdUjau4" class="w-24 h-24 bg-white text-primary rounded-full flex items-center justify-center mx-auto mb-10 shadow-2xl hover:scale-110 transition-transform group">
                <i class="fa fa-play text-2xl ml-1"></i>
            </a>
            <h2 class="text-4xl lg:text-6xl font-heading font-black mb-6">Always Fresh & Organic</h2>
            <p class="text-xl text-white/80 max-w-2xl mx-auto">Discover the journey of our produce from the fertile lands of Sri Lanka to your table.</p>
        </div>
    </section>

    {{-- 
    <!-- Team Section -->
    <section class="py-24 bg-surface">
        <div class="container mx-auto px-4">
            <div class="text-center mb-20">
                <span class="text-primary font-bold tracking-widest uppercase text-sm">Our Team</span>
                <h2 class="text-4xl lg:text-6xl font-heading font-black mt-4">Professional Farmers</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Team Member -->
                @for ($i = 0; $i < 3; $i++)
                <div class="bg-white rounded-[40px] overflow-hidden shadow-xl hover:-translate-y-2 transition-all group">
                    <div class="aspect-[4/5] overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1595973334547-d54b3874313f?auto=format&fit=crop&q=80&w=800" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="">
                        <div class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    </div>
                    <div class="p-8 text-center">
                        <h4 class="text-2xl font-bold mb-1">Farmer {{ $i+1 }}</h4>
                        <p class="text-primary font-semibold mb-4 text-sm uppercase tracking-widest">Organic Specialist</p>
                        <div class="flex justify-center space-x-4 text-gray-300">
                            <a href="#" class="hover:text-primary transition-colors"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="hover:text-primary transition-colors"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="hover:text-primary transition-colors"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </section>
    --}}

    <!-- Client Carousel -->
    <div class="py-20 bg-white border-b border-gray-100">
        <div class="container mx-auto px-4">
            <div class="swiper thm-swiper__slider" data-swiper-options='{
                "spaceBetween": 100, 
                "slidesPerView": 3, 
                "autoplay": { "delay": 3000 }, 
                "breakpoints": {
                    "1024": { "slidesPerView": 5 }
                }
            }'>
                <div class="swiper-wrapper flex items-center">
                    @for ($i = 0; $i < 10; $i++)
                    <div class="swiper-slide transition-all duration-500 opacity-60 hover:opacity-100 hover:scale-110">
                        <img src="{{ asset('assets/icon/test2n.svg') }}" class="h-24 w-auto mx-auto" alt="Client Logo">
                    </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
@endsection
