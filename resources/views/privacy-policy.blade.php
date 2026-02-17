@extends('layouts.master')

@section('title', 'Privacy Policy | DM Vegetables')

@section('content')
    <!-- Page Header -->
    <section class="relative py-20 bg-primary overflow-hidden">
        <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/leaf.png')]"></div>
        <div class="container mx-auto px-4 relative z-10 text-center">
            <h1 class="text-4xl lg:text-3xl font-heading font-black text-white mb-2">Privacy Policy</h1>
            <nav class="flex justify-center space-x-2 text-white/80 text-sm font-medium">
                <a href="{{ url('/') }}" class="hover:text-white transition-colors">Home</a>
                <span>/</span>
                <span class="text-white">Privacy Policy</span>
            </nav>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-4 max-w-4xl">
            <div class="prose prose-lg prose-primary max-w-none space-y-12">
                <div>
                    <h2 class="text-3xl font-bold text-secondary mb-6 border-l-4 border-primary pl-6">Information We Collect</h2>
                    <p class="text-gray-500 leading-relaxed">
                        We collect information from you when you register on our site, place an order, subscribe to our newsletter or fill out a form. When ordering or registering on our site, as appropriate, you may be asked to enter your: name, e-mail address, mailing address or phone number.
                    </p>
                </div>

                <div>
                    <h2 class="text-3xl font-bold text-secondary mb-6 border-l-4 border-primary pl-6">How We Use Your Information</h2>
                    <p class="text-gray-500 leading-relaxed mb-4">Any of the information we collect from you may be used in one of the following ways:</p>
                    <ul class="space-y-4 text-gray-500 list-none pl-0">
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-primary mt-1"></i>
                            <span>To personalize your experience (your information helps us to better respond to your individual needs).</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-primary mt-1"></i>
                            <span>To improve our website (we continually strive to improve our website offerings based on the information and feedback we receive from you).</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-primary mt-1"></i>
                            <span>To improve customer service (your information helps us to more effectively respond to your customer service requests and support needs).</span>
                        </li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-3xl font-bold text-secondary mb-6 border-l-4 border-primary pl-6">Information Protection</h2>
                    <p class="text-gray-500 leading-relaxed">
                        We implement a variety of security measures to maintain the safety of your personal information when you place an order or enter, submit, or access your personal information.
                    </p>
                </div>

                <div>
                    <h2 class="text-3xl font-bold text-secondary mb-6 border-l-4 border-primary pl-6">Cookies</h2>
                    <p class="text-gray-500 leading-relaxed">
                        Yes (Cookies are small files that a site or its service provider transfers to your computers hard drive through your Web browser (if you allow) that enables the sites or service providers systems to recognize your browser and capture and remember certain information).
                    </p>
                </div>

                <div class="bg-surface p-12 rounded-[40px] border border-gray-100 italic text-gray-400 text-center">
                    "We are committed to protecting your privacy and ensuring your data is handled with care."
                </div>
            </div>
        </div>
    </section>
@endsection
