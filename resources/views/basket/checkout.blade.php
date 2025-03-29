@extends('layouts.app')

@section('title', 'Checkout')

@section('content')
<div class="max-w-3xl mx-auto py-10 px-4">
  <h1 class="text-3xl font-bold mb-6">Checkout</h1>

  <!-- Success Alert -->
  @if(session('success'))
    <div 
      x-data="{ show: true }"
      x-show="show"
      x-init="setTimeout(() => show = false, 3000)"
      class="mb-6 bg-green-100 border border-green-400 text-green-800 px-4 py-3 rounded relative"
      role="alert"
    >
      <strong class="font-bold">Success!</strong>
      <span class="block sm:inline">{{ session('success') }}</span>
    </div>
  @endif

  @if (session('basket') && count(session('basket')) > 0)
    <!-- Basket Summary -->
    <div class="mb-6 bg-white rounded shadow p-4">
      <h2 class="text-xl font-semibold mb-3">Your Items:</h2>
      <ul class="divide-y">
        @foreach ($basket as $item)
          <li class="py-2 flex justify-between items-center">
            <span>{{ $item['name'] }}</span>
            <span class="text-green-700 font-bold">${{ number_format($item['price'], 2) }}</span>
          </li>
        @endforeach
      </ul>
    </div>

    <!-- Checkout Form -->
    <form action="{{ route('basket.confirm') }}" method="POST" class="bg-white rounded shadow p-6">
      @csrf

      <div class="mb-4">
        <label class="block font-medium mb-1">Name</label>
        <input type="text" name="name" class="w-full border rounded px-4 py-2" placeholder="Your full name" required>
      </div>

      <div class="mb-4">
        <label class="block font-medium mb-1">Phone</label>
        <input type="text" name="phone" class="w-full border rounded px-4 py-2" placeholder="Phone number" required>
      </div>

      <div class="mb-6">
        <label class="block font-medium mb-1">Address</label>
        <textarea name="address" class="w-full border rounded px-4 py-2" rows="4" placeholder="Delivery address" required></textarea>
      </div>

      <div class="text-right">
        <button type="submit" class="bg-green-700 text-white px-6 py-2 rounded hover:bg-green-800 transition">
          Confirm Order
        </button>
      </div>
    </form>
  @else
    <div class="text-gray-600 text-lg">Your basket is empty.</div>
  @endif
</div>
@endsection
