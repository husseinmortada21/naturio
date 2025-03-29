@extends('layouts.app')

@section('title', 'Your Basket')

@section('content')
<div class="max-w-5xl mx-auto py-10 px-4">
  <h1 class="text-3xl font-bold mb-6">Your Basket</h1>

  @if (session('basket') && count(session('basket')) > 0)
    <div class="bg-white rounded shadow p-6 space-y-4">
      @php $total = 0; @endphp

      @foreach (session('basket') as $id => $item)
        @php $total += $item['price'] * $item['quantity']; @endphp
        <div class="flex items-center justify-between border-b pb-4">
          <div class="flex gap-4 items-center">
            <img src="{{ asset('storage/' . $item['image']) }}" class="w-20 h-20 rounded object-cover" />
            <div>
              <h2 class="font-semibold text-lg">{{ $item['name'] }}</h2>
              <p>Qty: {{ $item['quantity'] }} | ${{ number_format($item['price'], 2) }}</p>
            </div>
          </div>
          <form method="POST" action="{{ route('basket.remove', $id) }}">
            @csrf
            <button type="submit" class="text-red-500 hover:underline">Remove</button>
          </form>
        </div>
      @endforeach

      <div class="text-right mt-4 text-xl font-bold">
        Total: ${{ number_format($total, 2) }}
      </div>

      <div class="text-right mt-4">
        <a href="{{ route('basket.checkout') }}" class="bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700">
          Proceed to Checkout
        </a>
      </div>
    </div>
  @else
    <p>Your basket is empty.Return to <a href="{{ route('products') }}">Shop</a></p>
  @endif
</div>
@endsection
