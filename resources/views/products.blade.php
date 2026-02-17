@extends('layouts.master')

@section('title', 'Organic Boutique | DM Vegetables')

@section('content')
    <!-- Page Header -->
    <section class="relative py-16 lg:py-28 bg-primary overflow-hidden">
        <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/leaf.png')] animate-pulse"></div>
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-white/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-black/10 rounded-full blur-3xl"></div>
        
        <div class="container mx-auto px-4 relative z-10 text-center">
            <span class="inline-block py-1 px-4 bg-white/20 backdrop-blur-md text-white text-xs font-bold uppercase tracking-widest rounded-full mb-4">Fresh from the Farm</span>
            <h1 class="text-4xl sm:text-5xl lg:text-7xl font-heading font-black text-white mb-6 leading-tight">Our <span class="text-secondary italic">Boutique</span></h1>
            <nav class="flex justify-center space-x-2 text-white/80 text-sm font-medium">
                <a href="{{ url('/') }}" class="hover:text-white transition-colors">Home</a>
                <span class="opacity-50">/</span>
                <span class="text-white">Shop</span>
            </nav>
        </div>
    </section>

    <!-- Products Grid -->
    <section class="py-16 lg:py-24 bg-[#F9FBFA] relative">
        <!-- Floating Leaves Decoration -->
        <div class="absolute top-20 left-10 opacity-10 animate-floating hidden lg:block">
            <img src="{{ asset('assets/icon/test2n.svg') }}" class="w-20 rotate-45" alt="">
        </div>
        
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row gap-16">
                <!-- Sidebar -->
                <aside class="lg:w-1/4 space-y-12">
                    <!-- Search Widget -->
                    <div class="bg-white p-10 rounded-[40px] shadow-2xl shadow-gray-200/50 border border-white/50 relative overflow-hidden group">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-primary/5 rounded-full -mr-16 -mt-16 group-hover:scale-110 transition-transform"></div>
                        <h4 class="text-2xl font-bold mb-8 relative">Search Harvest</h4>
                        <div class="relative">
                            <input type="text" class="w-full bg-surface border-none rounded-2xl py-5 px-6 focus:ring-2 focus:ring-primary transition-all text-secondary font-medium" placeholder="Ex: Pumpkin...">
                            <button class="absolute right-4 top-1/2 -translate-y-1/2 text-primary hover:scale-110 transition-transform">
                                <i class="fas fa-search text-xl"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Categories Widget -->
                    <div class="bg-white p-10 rounded-[40px] shadow-2xl shadow-gray-200/50 border border-white/50">
                        <h4 class="text-2xl font-bold mb-8">Categories</h4>
                        <ul class="space-y-6">
                            <li>
                                <a href="#" class="flex justify-between items-center group">
                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 rounded-full bg-primary group-hover:scale-150 transition-transform"></div>
                                        <span class="text-gray-500 group-hover:text-secondary group-hover:font-bold transition-all font-medium">Vegetables</span>
                                    </div>
                                    <span class="bg-surface py-1 px-3 rounded-xl text-xs font-bold text-gray-400 group-hover:bg-primary group-hover:text-white transition-all">24</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex justify-between items-center group">
                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 rounded-full bg-gray-200 group-hover:bg-primary group-hover:scale-150 transition-transform"></div>
                                        <span class="text-gray-500 group-hover:text-secondary group-hover:font-bold transition-all font-medium">Fruits</span>
                                    </div>
                                    <span class="bg-surface py-1 px-3 rounded-xl text-xs font-bold text-gray-400 group-hover:bg-primary group-hover:text-white transition-all">12</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex justify-between items-center group">
                                    <div class="flex items-center gap-4">
                                        <div class="w-2 h-2 rounded-full bg-gray-200 group-hover:bg-primary group-hover:scale-150 transition-transform"></div>
                                        <span class="text-gray-500 group-hover:text-secondary group-hover:font-bold transition-all font-medium">Organic Packs</span>
                                    </div>
                                    <span class="bg-primary/10 py-1.5 px-3 rounded-xl text-[10px] font-black uppercase text-primary">New</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </aside>

                <!-- Product Listing -->
                <div class="lg:w-3/4">
                    <div class="flex flex-col md:flex-row justify-between items-center mb-12 bg-white p-6 rounded-[30px] shadow-sm border border-white">
                        <p class="text-gray-400 font-medium mb-4 md:mb-0">Showing result <span class="text-secondary font-black">{{ $showingStart }}–{{ $showingEnd }}</span> of {{ $totalResults }} items</p>
                        <div class="flex items-center gap-4">
                            <span class="text-xs font-bold text-gray-300 uppercase tracking-widest leading-none">Sort By</span>
                            <select class="border-none bg-surface py-2 px-6 rounded-full font-bold text-sm focus:ring-2 focus:ring-primary cursor-pointer transition-all">
                                <option>Latest Products</option>
                                <option>Price: Low to High</option>
                                <option>Price: High to Low</option>
                            </select>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-10">
                        @foreach ($products as $product)
                            <div class="bg-white rounded-[48px] overflow-hidden shadow-2xl shadow-gray-200/40 hover:-translate-y-4 transition-all duration-500 border border-white group relative">
                                <!-- Image Wrapper -->
                                <div class="aspect-square relative overflow-hidden bg-[#F4F7F6] flex items-center justify-center p-8 lg:p-12">
                                    <img src="{{ Str::startsWith($product['img'], 'http') ? $product['img'] : asset($product['img']) }}" 
                                         class="w-full h-full object-contain drop-shadow-2xl group-hover:scale-110 transition-transform duration-700" 
                                         alt="{{ $product['name'] }}"
                                         onerror="this.src='https://images.unsplash.com/photo-1610832958506-aa56368176cf?auto=format&fit=crop&q=80&w=400';">
                                    
                                    <!-- Badges -->
                                    <div class="absolute top-6 left-6">
                                        <span class="bg-primary text-white text-[10px] font-black uppercase tracking-[0.2em] px-4 py-2 rounded-full shadow-lg shadow-primary/20">Organic</span>
                                    </div>
                                    
                                    <!-- Dynamic Action Icons -->
                                    <div class="absolute inset-x-0 bottom-6 flex justify-center gap-3 opacity-0 group-hover:opacity-100 translate-y-8 group-hover:translate-y-0 transition-all duration-500">
                                        <button class="w-14 h-14 bg-white text-secondary rounded-2xl shadow-xl flex items-center justify-center hover:bg-primary hover:text-white transition-all scale-100 hover:scale-110">
                                            <i class="fas fa-shopping-basket text-lg"></i>
                                        </button>
                                        <button class="w-14 h-14 bg-white text-red-400 rounded-2xl shadow-xl flex items-center justify-center hover:bg-red-500 hover:text-white transition-all scale-100 hover:scale-110">
                                            <i class="far fa-heart text-lg"></i>
                                        </button>
                                    </div>
                                </div>
                                
                                <!-- Content Wrapper -->
                                <div class="p-10 text-center">
                                    <span class="text-[10px] font-black text-primary/50 uppercase tracking-widest block mb-2">Category: Fresh</span>
                                    <h3 class="text-2xl font-heading font-black mb-3 group-hover:text-primary transition-colors">{{ $product['name'] }}</h3>
                                    
                                    <div class="flex items-center justify-center gap-3 mb-6">
                                        <div class="flex text-accent text-[10px] gap-0.5">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="text-gray-300 text-[10px] font-bold">(4.9)</span>
                                    </div>
                                    
                                    <div class="text-3xl font-heading font-black text-secondary leading-none">
                                        <span class="text-sm font-bold text-primary mr-0.5 align-top mt-1 inline-block">Rs</span>{{ number_format($product['price']) }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Pagination Modernized -->
                    <div class="mt-24 flex justify-center items-center gap-4">
                        @if ($currentPage > 1)
                            <a href="{{ route('products', ['page' => $currentPage - 1]) }}" class="w-14 h-14 rounded-2xl bg-white shadow-xl flex items-center justify-center border border-white hover:bg-primary hover:text-white transition-all group">
                                <i class="fas fa-arrow-left text-sm group-hover:-translate-x-1 transition-transform"></i>
                            </a>
                        @endif
                        
                        <div class="flex gap-3">
                            @for ($p = 1; $p <= $totalPages; $p++)
                                <a href="{{ route('products', ['page' => $p]) }}" 
                                   class="w-14 h-14 rounded-2xl flex items-center justify-center font-black transition-all {{ $p == $currentPage ? 'bg-primary text-white shadow-2xl scale-110' : 'bg-white text-gray-400 shadow-xl border border-white hover:text-primary' }}">
                                    {{ $p }}
                                </a>
                            @endfor
                        </div>

                        @if ($currentPage < $totalPages)
                            <a href="{{ route('products', ['page' => $currentPage + 1]) }}" class="w-14 h-14 rounded-2xl bg-white shadow-xl flex items-center justify-center border border-white hover:bg-primary hover:text-white transition-all group">
                                <i class="fas fa-arrow-right text-sm group-hover:translate-x-1 transition-transform"></i>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Organic Guarantee Section -->
    <section class="py-24 bg-secondary text-white overflow-hidden relative">
        <div class="absolute right-0 top-1/2 -translate-y-1/2 opacity-5 rotate-12">
            <i class="fas fa-leaf text-[500px]"></i>
        </div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-12 text-center lg:text-left">
                <div class="lg:col-span-1">
                    <img src="{{ asset('assets/icon/test2nnn.png') }}" class="w-32 mb-8 mx-auto lg:mx-0 filter grayscale invert opacity-50" alt="">
                    <h3 class="text-3xl font-heading font-black">Organic <span class="text-primary">Guarantee</span></h3>
                </div>
                <div class="flex flex-col gap-4">
                    <div class="w-12 h-12 bg-primary/20 rounded-xl flex items-center justify-center text-primary mb-2">
                        <i class="fas fa-certificate text-xl"></i>
                    </div>
                    <h4 class="text-xl font-bold">100% Certified</h4>
                    <p class="text-gray-400 text-sm leading-relaxed">Directly from 200+ certified farms across the island.</p>
                </div>
                <div class="flex flex-col gap-4">
                    <div class="w-12 h-12 bg-primary/20 rounded-xl flex items-center justify-center text-primary mb-2">
                        <i class="fas fa-truck-loading text-xl"></i>
                    </div>
                    <h4 class="text-xl font-bold">Cold Chain Deliver</h4>
                    <p class="text-gray-400 text-sm leading-relaxed">Freshness locked in from farm storage to your doorstep.</p>
                </div>
                <div class="flex flex-col gap-4">
                    <div class="w-12 h-12 bg-primary/20 rounded-xl flex items-center justify-center text-primary mb-2">
                        <i class="fas fa-undo text-xl"></i>
                    </div>
                    <h4 class="text-xl font-bold">Risk-Free Shop</h4>
                    <p class="text-gray-400 text-sm leading-relaxed">Not fresh? We replace it immediately, no questions asked.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
