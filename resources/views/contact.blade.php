@extends('layouts.master')

@section('title', 'Get in Touch | DM Vegetables')

@section('content')
    <!-- Page Header -->
    <section class="relative py-20 bg-primary overflow-hidden">
        <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/leaf.png')]"></div>
        <div class="container mx-auto px-4 relative z-10 text-center">
            <h1 class="text-4xl lg:text-3xl font-heading font-black text-white mb-2">Contact Us</h1>
            <nav class="flex justify-center space-x-2 text-white/80 text-sm font-medium">
                <a href="{{ url('/') }}" class="hover:text-white transition-colors">Home</a>
                <span>/</span>
                <span class="text-white">Contact</span>
            </nav>
        </div>
    </section>

    <section class="py-24 bg-surface relative overflow-hidden">
        <!-- Decoration -->
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-primary/5 rounded-full blur-3xl -mr-300 -mt-300"></div>
        
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row gap-16">
                <!-- Contact Info Cards -->
                <div class="lg:w-1/3 flex flex-col gap-6">
                    <div class="bg-white p-10 rounded-[40px] shadow-xl border border-gray-100 transform hover:-rotate-1 transition-transform">
                        <div class="w-14 h-14 bg-primary rounded-2xl flex items-center justify-center text-white mb-6 shadow-lg shadow-primary/30">
                            <i class="fas fa-phone-alt text-xl"></i>
                        </div>
                        <h4 class="text-2xl font-bold mb-2 text-secondary">Call Any Time</h4>
                        <p class="text-primary font-bold text-xl mb-1">+94 76 999 3503</p>
                        <p class="text-gray-400 text-sm">Available Mon - Sat (8am to 6pm)</p>
                    </div>

                    <div class="bg-white p-10 rounded-[40px] shadow-xl border border-gray-100 transform hover:rotate-1 transition-transform">
                        <div class="w-14 h-14 bg-primary rounded-2xl flex items-center justify-center text-white mb-6 shadow-lg shadow-primary/30">
                            <i class="fas fa-envelope text-xl"></i>
                        </div>
                        <h4 class="text-2xl font-bold mb-2 text-secondary">Write Email</h4>
                        <p class="text-primary font-bold text-xl mb-1">dmvegetables1@gmail.com</p>
                        <p class="text-gray-400 text-sm">Always responding within 24h</p>
                    </div>

                    <div class="bg-white p-10 rounded-[40px] shadow-xl border border-gray-100 transform hover:-rotate-1 transition-transform">
                        <div class="w-14 h-14 bg-primary rounded-2xl flex items-center justify-center text-white mb-6 shadow-lg shadow-primary/30">
                            <i class="fas fa-map-marker-alt text-xl"></i>
                        </div>
                        <h4 class="text-2xl font-bold mb-2 text-secondary">Visit Office</h4>
                        <p class="text-primary font-bold text-lg mb-1 leading-tight">DM Vegetable Center, Negombo Road, Pannala, Sri Lanka</p>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="lg:w-2/3">
                    <div class="bg-white p-10 lg:p-20 rounded-[60px] shadow-2xl border border-gray-100">
                        <div class="mb-12">
                            <span class="text-primary font-bold tracking-widest uppercase text-sm">Get in Touch</span>
                            <h2 class="text-4xl lg:text-5xl font-heading font-black text-secondary mt-4">Do You Have Any Questions? Write Us a Message</h2>
                        </div>

                        <form method="post" class="space-y-6">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label class="text-sm font-bold text-gray-400 ml-4 uppercase tracking-wider">Your Name</label>
                                    <input type="text" name="name" 
                                           class="w-full bg-surface border-none rounded-3xl py-5 px-8 focus:ring-2 focus:ring-primary transition-all text-secondary font-medium" 
                                           placeholder="Enter your name">
                                </div>
                                <div class="space-y-2">
                                    <label class="text-sm font-bold text-gray-400 ml-4 uppercase tracking-wider">Email Address</label>
                                    <input type="email" name="email" 
                                           class="w-full bg-surface border-none rounded-3xl py-5 px-8 focus:ring-2 focus:ring-primary transition-all text-secondary font-medium" 
                                           placeholder="Enter your email">
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label class="text-sm font-bold text-gray-400 ml-4 uppercase tracking-wider">Phone Number</label>
                                    <input type="text" name="phone" 
                                           class="w-full bg-surface border-none rounded-3xl py-5 px-8 focus:ring-2 focus:ring-primary transition-all text-secondary font-medium" 
                                           placeholder="Enter your phone">
                                </div>
                                <div class="space-y-2">
                                    <label class="text-sm font-bold text-gray-400 ml-4 uppercase tracking-wider">Subject</label>
                                    <input type="text" name="subject" 
                                           class="w-full bg-surface border-none rounded-3xl py-5 px-8 focus:ring-2 focus:ring-primary transition-all text-secondary font-medium" 
                                           placeholder="Enter subject">
                                </div>
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-bold text-gray-400 ml-4 uppercase tracking-wider">Your Message</label>
                                <textarea name="message" rows="6" 
                                          class="w-full bg-surface border-none rounded-3xl py-5 px-8 focus:ring-2 focus:ring-primary transition-all text-secondary font-medium" 
                                          placeholder="Write your message here..."></textarea>
                            </div>
                            <div class="pt-6">
                                <button type="submit" class="group relative px-12 py-5 bg-primary text-white rounded-full font-bold text-xl hover:bg-primary-dark transition-all shadow-xl shadow-primary/30 flex items-center justify-center gap-3 overflow-hidden">
                                    <span class="relative z-10">Send Message</span>
                                    <i class="fas fa-paper-plane relative z-10 text-sm group-hover:translate-x-2 group-hover:-translate-y-2 transition-transform"></i>
                                    <div class="absolute inset-0 bg-white/20 translate-y-full group-hover:translate-y-0 transition-transform duration-300"></div>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <div class="h-[500px] w-full bg-gray-200 relative overflow-hidden">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15822.42841445749!2d79.9926868!3d7.508544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2e79601d3656d%3A0xc3f17d8d8d8d8d8d!2sPannala!5e0!3m2!1sen!2slk!4v1680000000000!5m2!1sen!2slk" 
                class="w-full h-full border-none grayscale hover:grayscale-0 transition-all duration-700" 
                allowfullscreen="" loading="lazy"></iframe>
    </div>
@endsection
