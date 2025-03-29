<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>@yield('title', 'Naturio SkinCare')</title>
  <!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />


  {{-- Tailwind / Vite --}}
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  {{-- Fonts & Icons --}}
  <link href="https://fonts.googleapis.com/css2?family=Inter&family=Newsreader&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>
<body class="bg-[#f7f6f2] text-gray-800 font-inter">

  <!-- Header -->
  <header class="sticky top-0 z-50 bg-white shadow-md">
    <div class="container mx-auto flex justify-between items-center px-6 py-4">
      <div class="logo">
        <a href="{{ route('home') }}" >
        <img src="{{ asset('images/v702_38.png') }}" alt="Naturio Logo" class="h-14"></a>
      </div>

      <nav class="flex-1 flex justify-center gap-6 text-[1.1rem] font-medium">
        <a href="{{ route('home') }}" class="hover:text-green-700">Home</a>
        <a href="{{ route('products') }}" class="hover:text-green-700">Shop</a>
        <a href="{{ route('services') }}" class="hover:text-green-700">Services</a>
        <a href="{{ route('feedbacks') }}" class="hover:text-green-700">Feedbacks</a>
        <a href="{{ route('contact') }}" class="hover:text-green-700">Contact</a>
        <a href="{{ route('about') }}" class="hover:text-green-700">About Us</a>
        <a href="{{ route('login') }}" class="hover:text-green-700">Log In</a>
      </nav>

      <div class="relative">
        <a href="{{ route('basket') }}" class="text-green-700 text-xl relative hover:text-green-900">
          <i class="fas fa-shopping-cart"></i>
          @php
            $count = is_array(session('basket')) ? count(session('basket')) : 0;
          @endphp
          @if($count > 0)
            <span class="absolute -top-2 -right-3 bg-red-500 text-white text-xs font-bold w-5 h-5 rounded-full flex items-center justify-center">
              {{ $count }}
            </span>
          @endif
        </a>
      </div>
    </div>
  </header>

  <!-- Alert -->
  @if(session('success'))
    <div class="bg-green-100 text-green-700 p-4 rounded mx-6 mt-4 shadow text-center">
      {{ session('success') }}
    </div>
  @endif

  <!-- Page Content -->
  <main class="min-h-[70vh]">
    @yield('content')
  </main>

  <!-- Footer -->
  <footer class="bg-[#4c8531] text-white pt-10 pb-6 mt-12">
    <div class="container mx-auto px-6 grid md:grid-cols-4 gap-10 text-sm">
      <div>
        <h3 class="text-lg font-semibold mb-3">Naturio SkinCare</h3>
        <p>Your natural glow, our commitment.</p>
      </div>
      <div>
        <h4 class="font-semibold mb-2">Quick Links</h4>
        <ul class="space-y-1">
          <li><a href="{{ route('home') }}" class="hover:underline">Home</a></li>
          <li><a href="{{ route('products') }}" class="hover:underline">Shop</a></li>
          <li><a href="{{ route('services') }}" class="hover:underline">Services</a></li>
        </ul>
      </div>
      <div>
        <h4 class="font-semibold mb-2">Support</h4>
        <ul class="space-y-1">
          <li><a href="{{ route('contact') }}" class="hover:underline">Contact Us</a></li>
          <li><a href="{{ route('feedbacks') }}" class="hover:underline">Feedback</a></li>
        </ul>
      </div>
      <div>
        <h4 class="font-semibold mb-2">Follow Us</h4>
        <div class="flex gap-4 text-lg">
          <a href="#" class="hover:text-gray-300"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="hover:text-gray-300"><i class="fab fa-instagram"></i></a>
          <a href="#" class="hover:text-gray-300"><i class="fab fa-twitter"></i></a>
        </div>
      </div>
    </div>

    <div class="mt-6 border-t border-white/20 text-center text-sm pt-4">
      &copy; {{ date('Y') }} Naturio SkinCare. All rights reserved.
    </div>
  </footer>

</body>
</html>
