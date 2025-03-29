@extends('layouts.app')

@section('title', 'Naturio SkinCare')

@section('content')

<!-- Image Scroller Banner Section using Swiper.js -->
<section class="py-28 text-center text-white">
    <div class="swiper-container">
        <!-- Swiper Wrapper -->
        <div class="swiper-wrapper">
            <!-- Banner 1 -->
            <div class="swiper-slide bg-cover bg-center" style="background-image: url('{{ asset('images/hero-slider-01.jpg') }}'); height: 70vh;">
                <div class="absolute top-0 left-0 w-full h-full bg-black opacity-40"></div>
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center z-10 px-6 sm:px-12">
                    <h1 class="text-5xl sm:text-6xl font-extrabold mb-6 drop-shadow-lg">Naturio SkinCare</h1>
                    <p class="mb-6 text-xl sm:text-2xl">Glow with our all-natural skincare products made for every skin type.</p>
                    <a href="{{ route('contact') }}" class="inline-block bg-green-700 hover:bg-green-800 transition px-8 py-3 text-lg rounded-lg font-semibold shadow-md">
                        Book your appointment
                    </a>
                </div>
            </div>

            <!-- Banner 2 -->
            <div class="swiper-slide bg-cover bg-center" style="background-image: url('{{ asset('images/hero-slider-02.jpg') }}'); height: 70vh;">
                <div class="absolute top-0 left-0 w-full h-full bg-black opacity-40"></div>
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center z-10 px-6 sm:px-12">
                    <h1 class="text-5xl sm:text-6xl font-extrabold mb-6 drop-shadow-lg">Get The Perfectly Hydrated Skin</h1>
                    <p class="mb-6 text-xl sm:text-2xl">Made using clean, non-toxic ingredients, our products are designed for everyone.</p>
                    <a href="{{ route('contact') }}" class="inline-block bg-green-700 hover:bg-green-800 transition px-8 py-3 text-lg rounded-lg font-semibold shadow-md">
                        Shop Now
                    </a>
                </div>
            </div>

            <!-- Banner 3 -->
            <div class="swiper-slide bg-cover bg-center" style="background-image: url('{{ asset('images/hero-slider-03.jpg') }}'); height: 70vh;">
                <div class="absolute top-0 left-0 w-full h-full bg-black opacity-40"></div>
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center z-10 px-6 sm:px-12">
                    <h1 class="text-5xl sm:text-6xl font-extrabold mb-6 drop-shadow-lg">Your Skin's Best Friend</h1>
                    <p class="mb-6 text-xl sm:text-2xl">Experience nature’s finest ingredients for glowing, healthy skin.</p>
                    <a href="{{ route('contact') }}" class="inline-block bg-green-700 hover:bg-green-800 transition px-8 py-3 text-lg rounded-lg font-semibold shadow-md">
                        Discover More
                    </a>
                </div>
            </div>
        </div>
        <!-- Swiper Pagination & Navigation -->
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>

<!-- Main Services Section -->
<section class="py-20 bg-[#f7f6f2]">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            @php
                $sections = [
                    ['image' => 'v702_42.png', 'route' => 'services', 'title' => 'Our Services', 'desc' => 'Glow With Confidence: Premier Skin Care Services For Your Best Self!'],
                    ['image' => 'v702_43.png', 'route' => 'products', 'title' => 'Shop Our Products', 'desc' => 'Include Our 100% Natural Products In Your Skin Care Routine!'],
                    ['image' => 'v702_44.png', 'route' => 'consultation', 'title' => 'Free Consultation', 'desc' => 'Send a request with your concerns to get a free consultation from Hanan Mansour!'],
                ];
            @endphp

            @foreach ($sections as $section)
                <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition">
                    <img src="{{ asset('images/' . $section['image']) }}" class="w-full h-60 object-cover" alt="{{ $section['title'] }}">
                    <div class="p-6 text-center">
                        <a href="{{ route($section['route']) }}" class="text-xl font-semibold text-green-700 hover:underline block mb-2">{{ $section['title'] }}</a>
                        <p class="text-gray-600">{{ $section['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-4xl font-bold text-green-700 mb-6">Why Choose Naturio?</h2>
        <p class="text-lg text-gray-700 mb-10 max-w-3xl mx-auto">
            At Naturio SkinCare, we focus on offering 100% natural, effective skincare solutions tailored to your skin's specific needs. Here's why you should choose us:
        </p>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-12">
            <div class="bg-[#f7f6f2] p-8 rounded-lg shadow-lg text-left hover:shadow-xl transition">
                <h3 class="text-lg font-semibold text-green-700 mb-2">🌿 100% Natural Products</h3>
                <p class="text-gray-600">All of our products are made with natural ingredients that nourish your skin.</p>
            </div>
            <div class="bg-[#f7f6f2] p-8 rounded-lg shadow-lg text-left hover:shadow-xl transition">
                <h3 class="text-lg font-semibold text-green-700 mb-2">👩‍⚕️ Expert Consultations</h3>
                <p class="text-gray-600">Get personalized consultations with an internationally certified skin therapist.</p>
            </div>
            <div class="bg-[#f7f6f2] p-8 rounded-lg shadow-lg text-left hover:shadow-xl transition">
                <h3 class="text-lg font-semibold text-green-700 mb-2">✨ Proven Results</h3>
                <p class="text-gray-600">Thousands of happy clients who have seen dramatic improvements in their skin.</p>
            </div>
        </div>
    </div>
</section>

<!-- Featured Products Carousel -->
<section class="py-20 bg-[#f0fdf4]">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold text-green-700 mb-10">Featured Products</h2>
        
        <!-- Horizontal Scroll (Centered) -->
        <div class="flex overflow-x-auto gap-8 pb-6 justify-center">
            @foreach ($products as $product)
                <div class="w-60 flex-shrink-0 bg-white shadow-lg rounded-lg p-6 hover:shadow-2xl transition transform hover:scale-105">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-52 object-cover rounded mb-4">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">{{ $product->name }}</h3>
                    <p class="text-gray-600 mb-3">${{ $product->price }} / 50ml</p>
                    <a href="{{ route('basket.add', $product->id) }}" class="bg-green-700 hover:bg-green-800 text-white px-4 py-2 rounded-lg transition">Add to Basket</a>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Newsletter -->
<section class="bg-green-700 text-white py-16">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-2xl font-semibold mb-4">Subscribe to our newsletter</h2>
        <p class="mb-6 text-gray-100">Get skincare tips, product updates, and exclusive offers!</p>
        <form action="#" method="POST" class="flex flex-col sm:flex-row justify-center items-center gap-4 max-w-lg mx-auto">
            <input type="email" placeholder="Enter your email" class="px-4 py-3 rounded w-full sm:w-auto text-black focus:outline-none focus:ring-2 focus:ring-white" required>
            <button type="submit" class="bg-white text-green-700 font-bold px-6 py-3 rounded hover:bg-gray-100 transition">
                Subscribe
            </button>
        </form>
    </div>
</section>

@endsection

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper('.swiper-container', {
        loop: true, // Allow infinite looping
        autoplay: {
            delay: 3000, // Change slide every 3 seconds
            disableOnInteraction: false, // Keep autoplay after user interaction
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true, // Make pagination clickable
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>
