<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'DM Vegetables | Fresh & Organic')</title>
    
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/icon/test4n.svg') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/icon/test4n.svg') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/icon/test4n.svg') }}" />
    <meta name="description" content="@yield('meta_description', 'Delivering the highest-quality organic produce in Sri Lanka.')" />

    <!-- Fonts handled by Tailwind @import in app.css -->
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Scripts & Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    @stack('styles')
</head>

<body class="bg-surface font-sans text-secondary overflow-x-hidden">
    <!-- Preloader -->
    <div id="preloader" class="fixed inset-0 z-[9999] flex items-center justify-center bg-white transition-opacity duration-500">
        <div class="relative group">
            <img class="w-24 h-24 animate-pulse" src="{{ asset('assets/icon/test4n.svg') }}" alt="Loading..." />
            <div class="absolute -inset-4 border-2 border-primary border-t-transparent rounded-full animate-spin"></div>
        </div>
    </div>


    <div class="flex flex-col min-h-screen">
        <!-- Topbar -->
        <div class="bg-primary text-white py-2 text-sm hidden lg:block">
            <div class="container mx-auto px-4 flex justify-between items-center">
                <div class="flex items-center space-x-6">
                    <a href="mailto:dmvegetables1@gmail.com" class="flex items-center hover:text-accent transition-colors">
                        <i class="far fa-envelope mr-2"></i>
                        dmvegetables1@gmail.com
                    </a>
                    <a href="tel:+94769993503" class="flex items-center hover:text-accent transition-colors">
                        <i class="fas fa-phone-alt mr-2"></i>
                        +94 76 999 3503
                    </a>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="https://www.facebook.com/nerdtechlabs" target="_blank" class="hover:text-accent transition-colors"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="hover:text-accent transition-colors"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="hover:text-accent transition-colors"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>

        <!-- Header / Navbar -->
        <header id="main-header" class="sticky top-0 z-50 transition-all duration-300">
            <nav class="bg-glass backdrop-blur-md border-b border-white/20">
                <div class="container mx-auto px-4">
                    <div class="flex justify-between items-center h-20">
                        <!-- Logo -->
                        <a href="{{ url('/') }}" class="flex-shrink-0 flex items-center group">
                            <img src="{{ asset('assets/icon/test4n.svg') }}" class="h-12 w-auto transition-transform group-hover:scale-110" alt="DM Vegetables">
                            <span class="ml-3 text-2xl font-heading font-bold text-secondary tracking-tight">DM <span class="text-primary">Vegetables</span></span>
                        </a>

                        <!-- Desktop Menu -->
                        <div class="hidden lg:flex items-center space-x-8">
                            <a href="{{ url('/') }}" class="font-medium hover:text-primary transition-colors py-2 {{ Request::is('/') ? 'text-primary border-b-2 border-primary' : '' }}">Home</a>
                            <a href="{{ url('/about') }}" class="font-medium hover:text-primary transition-colors py-2 {{ Request::is('about') ? 'text-primary border-b-2 border-primary' : '' }}">About</a>
                            <a href="{{ url('/products') }}" class="font-medium hover:text-primary transition-colors py-2 {{ Request::is('products*') ? 'text-primary border-b-2 border-primary' : '' }}">Shop</a>
                            <a href="{{ url('/contact') }}" class="font-medium hover:text-primary transition-colors py-2 {{ Request::is('contact') ? 'text-primary border-b-2 border-primary' : '' }}">Contact</a>
                            
                            <a href="{{ url('/quotations') }}" class="bg-primary text-white px-6 py-2.5 rounded-full font-semibold hover:bg-primary-dark transition-all shadow-lg shadow-primary/20 scale-100 hover:scale-105 active:scale-95">
                                Get Quotation
                            </a>
                        </div>

                        <!-- Mobile Menu Button -->
                        <button id="mobile-menu-btn" class="lg:hidden text-secondary p-2 focus:outline-none" aria-label="Toggle menu">
                            <i class="fas fa-bars text-2xl"></i>
                        </button>
                    </div>
                </div>
            </nav>

            <!-- Mobile Menu Overlay -->
            <div id="mobile-menu" class="fixed inset-0 z-40 lg:hidden transform translate-x-full transition-transform duration-300 ease-in-out">
                <div class="absolute inset-0 bg-black/50 backdrop-blur-sm" id="mobile-menu-close"></div>
                <div class="absolute right-0 top-0 h-full w-4/5 max-w-sm bg-white shadow-2xl flex flex-col p-8">
                    <button id="mobile-menu-close-btn" class="self-end text-secondary p-2 mb-8">
                        <i class="fas fa-times text-2xl"></i>
                    </button>
                    
                    <div class="flex flex-col space-y-6">
                        <a href="{{ url('/') }}" class="text-xl font-medium hover:text-primary border-b border-gray-100 pb-2">Home</a>
                        <a href="{{ url('/about') }}" class="text-xl font-medium hover:text-primary border-b border-gray-100 pb-2">About</a>
                        <a href="{{ url('/products') }}" class="text-xl font-medium hover:text-primary border-b border-gray-100 pb-2">Shop</a>
                        <a href="{{ url('/contact') }}" class="text-xl font-medium hover:text-primary border-b border-gray-100 pb-2">Contact</a>
                        <a href="{{ url('/quotations') }}" class="text-xl font-semibold text-primary">Get Quotation</a>
                    </div>

                    <div class="mt-auto pt-8 border-t border-gray-100 italic text-sm text-gray-500">
                        Delivering freshness to your doorstep.
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="flex-grow">
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="bg-secondary text-white pt-20 pb-10 overflow-hidden relative">
            <!-- Decorative Elements -->
            <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-primary to-transparent opacity-50"></div>
            
            <div class="container mx-auto px-4 relative">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
                    <!-- About Widget -->
                    <div class="flex flex-col space-y-6">
                        <a href="{{ url('/') }}" class="flex items-center">
                            <img src="{{ asset('assets/icon/test4n.svg') }}" class="h-10 w-auto" alt="DM Vegetables">
                            <span class="ml-3 text-xl font-heading font-bold text-white tracking-tight">DM <span class="text-primary">Vegetables</span></span>
                        </a>
                        <p class="text-gray-400 leading-relaxed">
                            Enthusiastic about delivering the highest-quality organic produce. We work directly with over 200 farms to ensure excellence.
                        </p>
                        <div class="flex space-x-4">
                            <a href="#" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-primary transition-all group">
                                <i class="fab fa-twitter group-hover:scale-110"></i>
                            </a>
                            <a href="https://www.facebook.com/nerdtechlabs" target="_blank" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-primary transition-all group">
                                <i class="fab fa-facebook-f group-hover:scale-110"></i>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-primary transition-all group">
                                <i class="fab fa-instagram group-hover:scale-110"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Contact Widget -->
                    <div>
                        <h4 class="text-lg font-bold mb-8 relative inline-block">
                            Contact Info
                            <span class="absolute -bottom-2 left-0 w-12 h-1 bg-primary"></span>
                        </h4>
                        <ul class="space-y-4 text-gray-400">
                            <li class="flex items-start">
                                <i class="fas fa-phone-alt text-primary mt-1 mr-4"></i>
                                <a href="tel:+94769993503" class="hover:text-white transition-colors">+94 76 999 3503</a>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-envelope text-primary mt-1 mr-4"></i>
                                <a href="mailto:dmvegetables1@gmail.com" class="hover:text-white transition-colors">dmvegetables1@gmail.com</a>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-map-marker-alt text-primary mt-1 mr-4"></i>
                                <span>DM Vegetable Center,<br>Negombo Road, Pannala, Sri Lanka</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Links Widget -->
                    <div>
                        <h4 class="text-lg font-bold mb-8 relative inline-block">
                            Quick Links
                            <span class="absolute -bottom-2 left-0 w-12 h-1 bg-primary"></span>
                        </h4>
                        <ul class="space-y-3 text-gray-400">
                            <li><a href="{{ url('/products') }}" class="hover:text-primary transition-colors flex items-center"><i class="fas fa-chevron-right text-[10px] mr-2 opacity-50"></i> Shop Online</a></li>
                            <li><a href="{{ url('/about') }}" class="hover:text-primary transition-colors flex items-center"><i class="fas fa-chevron-right text-[10px] mr-2 opacity-50"></i> About Store</a></li>
                            <li><a href="{{ url('/quotations') }}" class="hover:text-primary transition-colors flex items-center"><i class="fas fa-chevron-right text-[10px] mr-2 opacity-50"></i> Get Quotation</a></li>
                            <li><a href="{{ url('/privacy-policy') }}" class="hover:text-primary transition-colors flex items-center"><i class="fas fa-chevron-right text-[10px] mr-2 opacity-50"></i> Privacy Policy</a></li>
                        </ul>
                    </div>

                    <!-- Newsletter or Image -->
                    <div class="flex flex-col items-center lg:items-end">
                        <img src="{{ asset('assets/icon/test2nnn.png') }}" class="max-w-[200px] mb-6 opacity-30 grayscale hover:grayscale-0 transition-all duration-700" alt="">
                        <p class="text-[10px] uppercase tracking-widest text-gray-500 font-bold">Premium Quality Guaranteed</p>
                    </div>
                </div>

                <div class="pt-8 border-t border-white/10 text-center text-sm text-gray-500">
                    <p>© <span id="year"></span> Nerd Tech Labs. Developed and Publication. All Rights Reserved.</p>
                </div>
            </div>
        </footer>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        // Swiper Initialization
        const initSwiper = () => {
            const sliders = document.querySelectorAll('.thm-swiper__slider');
            sliders.forEach(slider => {
                const options = slider.dataset.swiperOptions ? JSON.parse(slider.dataset.swiperOptions) : {};
                new Swiper(slider, options);
            });
        };

        // Preloader with visibility delay
        window.addEventListener('load', () => {
            const preloader = document.getElementById('preloader');
            if (preloader) {
                // Ensure preloader is seen for at least 800ms
                setTimeout(() => {
                    preloader.classList.add('opacity-0');
                    setTimeout(() => preloader.classList.add('hidden'), 500);
                }, 800);
            }
            initSwiper();
        });

        // Mobile Menu Toggle
        const menuBtn = document.getElementById('mobile-menu-btn');
        const menuCloseBtn = document.getElementById('mobile-menu-close-btn');
        const menuCloseOverlay = document.getElementById('mobile-menu-close');
        const menu = document.getElementById('mobile-menu');

        const toggleMenu = (show) => {
            if (show) {
                menu.classList.remove('translate-x-full');
            } else {
                menu.classList.add('translate-x-full');
            }
        };

        menuBtn.addEventListener('click', () => toggleMenu(true));
        menuCloseBtn.addEventListener('click', () => toggleMenu(false));
        menuCloseOverlay.addEventListener('click', () => toggleMenu(false));

        // Header Scroll Effect
        window.addEventListener('scroll', () => {
            const header = document.getElementById('main-header');
            if (window.scrollY > 20) {
                header.classList.add('shadow-xl');
            } else {
                header.classList.remove('shadow-xl');
            }
        });

        // Current Year
        document.getElementById('year').textContent = new Date().getFullYear();
    </script>
    @stack('scripts')
</body>

</html>
