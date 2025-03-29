@extends('layouts.app')

@section('title', 'Our Services')

@section('content')
<section class="bg-green-100 py-16 text-center">
  <h1 class="text-5xl font-bold font-newsreader text-green-800 mb-3">Our Services</h1>
  <p class="text-gray-700 text-lg">Glow with confidence using our personalized treatments</p>
</section>

<section class="px-6 sm:px-12 py-12 bg-[#fefefe]">
  <div class="flex justify-between items-center flex-wrap gap-4 mb-10">
    <h2 class="text-2xl font-semibold text-green-800">All Services</h2>
    <div>
      <label class="mr-2 font-medium text-sm">Sort by:</label>
      <select class="border border-gray-300 rounded px-3 py-1 text-sm focus:outline-none">
        <option value="latest">Latest</option>
        <option value="price_low_high">Price: Low to High</option>
        <option value="price_high_low">Price: High to Low</option>
        <option value="name_az">Name: A-Z</option>
        <option value="name_za">Name: Z-A</option>
      </select>
    </div>
  </div>

  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
    @forelse ($services as $service)
      <div class="bg-white rounded-2xl shadow-md hover:shadow-lg transition duration-300 overflow-hidden">
        <div class="h-[200px] w-full overflow-hidden">
          <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->name }}"
               class="w-full h-full object-cover rounded-t-2xl" />
        </div>
        <div class="p-5 flex flex-col justify-between h-[200px]">
          <div>
            <h3 class="text-lg font-semibold text-green-800 mb-2">{{ $service->name }}</h3>
            <p class="text-sm text-gray-600 mb-3">{{ Str::limit($service->description, 90) }}</p>
          </div>
          <span class="inline-block bg-green-700 text-white text-sm font-semibold px-4 py-1 rounded-full self-start">
            ${{ $service->price }}
          </span>
        </div>
      </div>
    @empty
      <p class="text-gray-600 col-span-full text-center">No services available right now.</p>
    @endforelse
  </div>
</section>
@endsection
