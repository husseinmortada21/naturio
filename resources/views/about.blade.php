@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<!-- Hero Section -->
<section class="bg-green-100 py-20 text-center">
  <div class="max-w-4xl mx-auto px-6">
    <h1 class="text-5xl font-newsreader font-bold text-green-800 mb-4">Who We Are</h1>
    <p class="text-gray-700 text-lg">
      At Naturio SkinCare, we believe true beauty starts with natural care. Our mission is to empower every client to look and feel their best with clean, science-backed skincare solutions.
    </p>
  </div>
</section>

<!-- Story Section -->
<section class="py-20 bg-white">
  <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
    <div>
      <img src="{{ asset('images/about_us_salon.png') }}" alt="Naturio Experience" class="rounded-xl shadow-md w-full h-80 object-cover">
    </div>
    <div>
      <h2 class="text-3xl font-semibold text-green-800 mb-4">Our Journey</h2>
      <p class="text-gray-700 leading-relaxed mb-4">
        Founded by skin expert <strong>Hanan Mansour</strong>, Naturio started with one goal in mind: to bring pure, effective, and sustainable skincare to everyone. 
        We’re not just a salon — we’re a sanctuary of natural wellness, self-love, and transformation.
      </p>
      <p class="text-gray-700 leading-relaxed">
        Each treatment and product we offer is curated with purpose, passion, and deep respect for both your skin and the planet.
      </p>
    </div>
  </div>
</section>

<!-- Philosophy Section -->
<section class="bg-[#f9f9f0] py-20">
  <div class="max-w-4xl mx-auto px-6 text-center">
    <h2 class="text-3xl font-semibold text-green-800 mb-4">Our Philosophy</h2>
    <p class="text-gray-700 leading-relaxed text-lg">
      At Naturio, we believe beauty is personal, natural, and deeply rooted in care. Our philosophy blends holistic methods, natural ingredients, and the latest science to give your skin what it truly needs.
    </p>
  </div>
</section>

<!-- Why Choose Us -->
<section class="py-20 bg-white">
  <div class="max-w-6xl mx-auto px-6 text-center">
    <h2 class="text-3xl font-semibold text-green-800 mb-10">Why Choose Naturio?</h2>
    <div class="grid md:grid-cols-3 gap-8">
      <div class="bg-green-50 p-6 rounded-lg shadow hover:shadow-md transition">
        <i class="fas fa-leaf text-green-700 text-3xl mb-3"></i>
        <h3 class="text-lg font-semibold text-green-800 mb-2">100% Natural</h3>
        <p class="text-gray-600 text-sm">We only use clean, organic ingredients that nourish your skin from the inside out.</p>
      </div>
      <div class="bg-green-50 p-6 rounded-lg shadow hover:shadow-md transition">
        <i class="fas fa-hand-sparkles text-green-700 text-3xl mb-3"></i>
        <h3 class="text-lg font-semibold text-green-800 mb-2">Expert Touch</h3>
        <p class="text-gray-600 text-sm">Our certified specialists deliver personalized treatments with care and precision.</p>
      </div>
      <div class="bg-green-50 p-6 rounded-lg shadow hover:shadow-md transition">
        <i class="fas fa-spa text-green-700 text-3xl mb-3"></i>
        <h3 class="text-lg font-semibold text-green-800 mb-2">Peaceful Experience</h3>
        <p class="text-gray-600 text-sm">Step into our salon and feel instantly relaxed. This is your time, your moment.</p>
      </div>
    </div>
  </div>
</section>
@endsection
