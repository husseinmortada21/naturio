@extends('layouts.app')

@section('title', 'Shop')

@section('content')

{{-- Alert Message --}}
@if (session('success'))
  <div 
    x-data="{ show: true }" 
    x-show="show" 
    x-init="setTimeout(() => show = false, 3000)" 
    class="max-w-md mx-auto mt-6 bg-green-100 border border-green-400 text-green-800 px-4 py-3 rounded relative" 
    role="alert"
  >
    <strong class="font-bold">Success!</strong>
    <span class="block sm:inline">{{ session('success') }}</span>
  </div>
@endif

{{-- Banner --}}
<div class="banner text-center py-16 bg-green-100">
  <h1 class="text-5xl font-bold font-newsreader">Our Products</h1>
  <span class="text-lg text-gray-600">100% Natural</span>
</div>

{{-- Products Section --}}
<div class="products-section px-8 py-12 flex flex-wrap gap-8 justify-center bg-[#fefefe]">
  @foreach ($products as $product)
    <div class="product-card w-[300px] bg-[#f9f9f0] rounded-[20px] overflow-hidden shadow-md flex flex-col">
      <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-[220px] object-cover" />
      <div class="details p-5 flex flex-col justify-between h-full">
        <div>
          <h2 class="text-lg font-semibold mb-2">{{ $product->name }}</h2>
          <div class="price text-green-800 font-bold mb-1">${{ $product->price }} / pc</div>
          <div class="text-sm text-gray-600 mb-3">{{ $product->description }}</div>
        </div>
        <form method="POST" action="{{ route('basket.add', $product->id) }}">
          @csrf
          <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">
            Add to Basket
          </button>
        </form>
      </div>
    </div>
  @endforeach
</div>

@endsection
