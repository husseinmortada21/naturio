@extends('layouts.app')

@section('title', 'Customer Feedbacks')

@section('content')
<div class="bg-green-100 py-16 text-center">
  <h1 class="text-5xl font-newsreader font-bold text-green-800">Customer Feedbacks</h1>
  <p class="text-gray-700 mt-2">Hear what our lovely customers say!</p>
</div>

<div class="max-w-4xl mx-auto px-6 py-10">
  @if (session('success'))
    <div class="bg-green-100 text-green-800 p-4 rounded mb-4 shadow text-center">
      {{ session('success') }}
    </div>
  @endif

  <!-- Feedback Form -->
  <div class="mb-10 bg-white shadow rounded-lg p-6">
    <h2 class="text-xl font-semibold mb-4">Leave your feedback</h2>
    <form action="{{ route('feedbacks.store') }}" method="POST">
      @csrf
      <div class="mb-4">
        <input type="text" name="name" placeholder="Your name" required
               class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-green-600">
      </div>
      <div class="mb-4">
        <textarea name="comment" rows="4" placeholder="Your comment..." required
                  class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-green-600"></textarea>
      </div>
      <button type="submit"
              class="bg-green-700 text-white px-6 py-2 rounded hover:bg-green-800 transition">
        Submit
      </button>
    </form>
  </div>

  <!-- Feedback List -->
  <div class="space-y-6">
    @forelse ($feedbacks as $feedback)
      <div class="bg-[#f9f9f0] border-l-4 border-green-600 p-4 rounded shadow">
        <p class="text-gray-700 italic">"{{ $feedback->comment }}"</p>
        <p class="text-sm text-green-800 mt-2 font-semibold">- {{ $feedback->name }}</p>
      </div>
    @empty
      <p class="text-gray-500 text-center">No feedbacks yet. Be the first!</p>
    @endforelse
  </div>
</div>
@endsection
