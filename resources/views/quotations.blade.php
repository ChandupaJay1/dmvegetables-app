@extends('layouts.master')

@section('title', 'Quotations & Plans | DM Vegetables')

@section('content')
    <!-- Page Header -->
    <section class="relative py-20 bg-primary overflow-hidden">
        <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/leaf.png')]"></div>
        <div class="container mx-auto px-4 relative z-10 text-center">
            <h1 class="text-4xl lg:text-6xl font-heading font-black text-white mb-4">Pricing Plans</h1>
            <nav class="flex justify-center space-x-2 text-white/80 text-sm font-medium">
                <a href="{{ url('/') }}" class="hover:text-white transition-colors">Home</a>
                <span>/</span>
                <span class="text-white">Quotations</span>
            </nav>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="py-24 bg-surface">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Local Weekly -->
                <div class="bg-white rounded-[40px] p-10 shadow-xl shadow-gray-200/50 flex flex-col items-center text-center border border-gray-100 hover:-translate-y-2 transition-all group">
                    <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-primary transition-colors text-primary group-hover:text-white">
                        <i class="fas fa-calendar-week text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Local Rates</h3>
                    <span class="text-gray-400 font-medium uppercase text-xs tracking-widest mb-6">Weekly Plan</span>
                    <div class="text-4xl font-heading font-black text-secondary mb-8">
                        <span class="text-lg">Rs</span>00<span class="text-sm font-medium text-gray-400">/wk</span>
                    </div>
                    <ul class="space-y-4 mb-10 text-gray-500 w-full text-left">
                        <li class="flex items-center gap-3"><i class="fas fa-check text-primary text-xs"></i> 5 Item Minimum</li>
                        <li class="flex items-center gap-3"><i class="fas fa-check text-primary text-xs"></i> Free Delivery</li>
                        <li class="flex items-center gap-3"><i class="fas fa-check text-primary text-xs"></i> Daily Freshness</li>
                        <li class="flex items-center gap-3"><i class="fas fa-check text-primary text-xs"></i> Quality Tested</li>
                    </ul>
                    <a href="{{ url('/contact') }}" class="w-full py-4 bg-secondary text-white rounded-full font-bold hover:bg-primary transition-all shadow-lg shadow-black/10">
                        Contact Now
                    </a>
                </div>

                <!-- Local Monthly (Featured) -->
                <div class="bg-primary rounded-[40px] p-10 shadow-2xl shadow-primary/30 flex flex-col items-center text-center relative overflow-hidden group hover:-translate-y-2 transition-all">
                    <div class="absolute top-0 right-0 p-8 opacity-10 rotate-12">
                        <i class="fas fa-leaf text-9xl text-white"></i>
                    </div>
                    <div class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center mb-6 text-white backdrop-blur-md">
                        <i class="fas fa-calendar-alt text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-white">Local Rates</h3>
                    <span class="text-white/60 font-medium uppercase text-xs tracking-widest mb-6 border-b border-white/20 pb-1">Monthly Plan</span>
                    <div class="text-4xl font-heading font-black text-white mb-8 leading-none">
                        <span class="text-lg">Rs</span>00<span class="text-sm font-medium text-white/50 block">/month</span>
                    </div>
                    <ul class="space-y-4 mb-10 text-white/80 w-full text-left">
                        <li class="flex items-center gap-3"><i class="fas fa-check text-accent text-xs"></i> Fixed Monthly Rate</li>
                        <li class="flex items-center gap-3"><i class="fas fa-check text-accent text-xs"></i> Priority Support</li>
                        <li class="flex items-center gap-3"><i class="fas fa-check text-accent text-xs"></i> 24/7 Order Access</li>
                        <li class="flex items-center gap-3"><i class="fas fa-check text-accent text-xs"></i> Zero Hidden Costs</li>
                    </ul>
                    <a href="{{ url('/contact') }}" class="w-full py-4 bg-white text-primary rounded-full font-bold hover:bg-accent hover:text-secondary transition-all shadow-xl">
                        Subscribe Now
                    </a>
                </div>

                <!-- Foreign Weekly -->
                <div class="bg-white rounded-[40px] p-10 shadow-xl shadow-gray-200/50 flex flex-col items-center text-center border border-gray-100 hover:-translate-y-2 transition-all group">
                    <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-primary transition-colors text-primary group-hover:text-white">
                        <i class="fas fa-globe-americas text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Foreign Export</h3>
                    <span class="text-gray-400 font-medium uppercase text-xs tracking-widest mb-6">Weekly Rates</span>
                    <div class="text-4xl font-heading font-black text-secondary mb-8">
                        <span class="text-lg">$</span>00<span class="text-sm font-medium text-gray-400">/wk</span>
                    </div>
                    <ul class="space-y-4 mb-10 text-gray-500 w-full text-left">
                        <li class="flex items-center gap-3"><i class="fas fa-check text-primary text-xs"></i> International Shipping</li>
                        <li class="flex items-center gap-3"><i class="fas fa-check text-primary text-xs"></i> Export Certification</li>
                        <li class="flex items-center gap-3"><i class="fas fa-check text-primary text-xs"></i> Cold Chain Logistics</li>
                        <li class="flex items-center gap-3"><i class="fas fa-check text-primary text-xs"></i> Tracking Provided</li>
                    </ul>
                    <a href="{{ url('/contact') }}" class="w-full py-4 bg-secondary text-white rounded-full font-bold hover:bg-primary transition-all shadow-lg shadow-black/10">
                        Contact Now
                    </a>
                </div>

                <!-- Foreign Monthly -->
                <div class="bg-white rounded-[40px] p-10 shadow-xl shadow-gray-200/50 flex flex-col items-center text-center border border-gray-100 hover:-translate-y-2 transition-all group">
                    <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-primary transition-colors text-primary group-hover:text-white">
                        <i class="fas fa-ship text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Foreign Export</h3>
                    <span class="text-gray-400 font-medium uppercase text-xs tracking-widest mb-6">Monthly Rates</span>
                    <div class="text-4xl font-heading font-black text-secondary mb-8">
                        <span class="text-lg">$</span>00<span class="text-sm font-medium text-gray-400">/mo</span>
                    </div>
                    <ul class="space-y-4 mb-10 text-gray-500 w-full text-left">
                        <li class="flex items-center gap-3"><i class="fas fa-check text-primary text-xs"></i> Bulk Order Pricing</li>
                        <li class="flex items-center gap-3"><i class="fas fa-check text-primary text-xs"></i> Customs Clearance</li>
                        <li class="flex items-center gap-3"><i class="fas fa-check text-primary text-xs"></i> Premium Packaging</li>
                        <li class="flex items-center gap-3"><i class="fas fa-check text-primary text-xs"></i> Dedicated Agent</li>
                    </ul>
                    <a href="{{ url('/contact') }}" class="w-full py-4 bg-secondary text-white rounded-full font-bold hover:bg-primary transition-all shadow-lg shadow-black/10">
                        Contact Now
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Terms & Conditions Modernized -->
    <section class="py-24 bg-white relative overflow-hidden">
        <div class="container mx-auto px-4 max-w-5xl">
            <div class="bg-secondary rounded-[60px] p-8 lg:p-20 shadow-2xl relative">
                <!-- Background Decoration -->
                <div class="absolute top-0 right-0 w-64 h-64 bg-primary/10 rounded-full -mr-32 -mt-32 blur-3xl"></div>
                <div class="absolute bottom-0 left-0 w-64 h-64 bg-accent/10 rounded-full -ml-32 -mb-32 blur-3xl"></div>

                <div class="text-center mb-16 relative z-10">
                    <span class="text-primary font-bold tracking-widest uppercase text-sm">Agreement</span>
                    <h2 class="text-4xl lg:text-6xl font-heading font-black text-white mt-4">Terms and Conditions</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-8 relative z-10">
                    @php
                        $terms = [
                            "A constant price is directed to each item for the followed month. (Monthly plan)",
                            "A constant price is directed to each item for the followed week. (Weekly plan)",
                            "Return of any item accepted each day of vegetable and fruits supply.",
                            "Free delivery for the entire period.",
                            "Altering methods to favor freshness of veggies and fruits throughout transportation.",
                            "Vegetables and fruits from 200+ farms across the island (Certified Organic).",
                            "We ensure ongoing quality tests throughout the whole processing sessions.",
                            "Acceptance of order receipts 24/7.",
                            "Provide excellence customer service at all stages."
                        ];
                    @endphp

                    @foreach($terms as $index => $term)
                    <div class="flex gap-6 group hover:translate-x-2 transition-transform">
                        <div class="w-12 h-12 rounded-full bg-white/5 border border-white/10 flex items-center justify-center flex-shrink-0 text-primary font-bold text-sm">
                            {{ $index + 1 }}
                        </div>
                        <p class="text-gray-400 text-lg leading-relaxed group-hover:text-white transition-colors pt-2">
                            {{ $term }}
                        </p>
                    </div>
                    @endforeach
                </div>

                <div class="mt-20 text-center">
                    <p class="text-gray-500 italic mb-8 italic">By subscribing to our plans, you agree to the terms mentioned above.</p>
                    <a href="{{ url('/contact') }}" class="inline-block px-12 py-5 bg-primary text-white rounded-full font-bold text-xl hover:bg-primary-dark transition-all shadow-xl shadow-primary/20">
                        I Understand, Let's Begin
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
