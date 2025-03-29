@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<div class="max-w-5xl mx-auto px-4 py-12">
  <h1 class="text-4xl font-bold text-center text-green-800 mb-8">Contact Us</h1>

  @if (session('success'))
    <div class="bg-green-100 text-green-700 p-4 rounded shadow mb-6 text-center">
      {{ session('success') }}
    </div>
  @endif

  {{-- Contact Info --}}
  <div class="grid md:grid-cols-2 gap-8 mb-12">
    <div>
      <h2 class="text-xl font-semibold mb-2 text-green-700">Salon Information</h2>
      <p class="text-gray-700 mb-2"><i class="fas fa-map-marker-alt mr-2 text-green-600"></i> Beirut, Lebanon</p>
      <p class="text-gray-700 mb-2"><i class="fas fa-phone-alt mr-2 text-green-600"></i> +961 70 123 456</p>
      <p class="text-gray-700 mb-2"><i class="fas fa-envelope mr-2 text-green-600"></i> contact@naturio.com</p>
      <p class="text-gray-700"><i class="fas fa-clock mr-2 text-green-600"></i> Mon - Sat: 10am - 7pm</p>
    </div>
    <div>
      <iframe
        src="https://maps.google.com/maps?q=beirut&t=&z=13&ie=UTF8&iwloc=&output=embed"
        class="w-full h-64 rounded shadow"
        frameborder="0"
        allowfullscreen
        loading="lazy">
      </iframe>
    </div>
  </div>

  {{-- Appointment Form --}}
  <div class="bg-white rounded-lg shadow p-6">
    <h2 class="text-2xl font-semibold text-green-800 mb-4">Book an Appointment</h2>
    <form action="{{ route('appointments.store') }}" method="POST">
      @csrf

      <div class="grid sm:grid-cols-2 gap-4 mb-4">
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
          <input type="text" name="name" required class="w-full border rounded px-4 py-2" />
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
          <input type="text" name="phone" required class="w-full border rounded px-4 py-2" />
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
          <input type="email" name="email" required class="w-full border rounded px-4 py-2" />
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Appointment Date</label>
          <input type="date" name="appointment_date" required class="w-full border rounded px-4 py-2" />
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Appointment Time</label>
          <input type="time" name="appointment_time" required class="w-full border rounded px-4 py-2" />
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Service(s) Requested</label>
          <select name="services[]" multiple required class="w-full border rounded px-4 py-2">
            @foreach ($services as $service)
              <option value="{{ $service->name }}">{{ $service->name }}</option>
            @endforeach
          </select>
          <p class="text-xs text-gray-500 mt-1">Hold Ctrl (Windows) or ⌘ (Mac) to select multiple.</p>
        </div>
      </div>

      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700 mb-1">Additional Message</label>
        <textarea name="message" rows="4" class="w-full border rounded px-4 py-2" placeholder="Let us know your concerns or special requests..."></textarea>
      </div>

      <div class="text-right">
        <button type="submit" class="bg-green-700 hover:bg-green-800 text-white px-6 py-2 rounded">
          Send Request
        </button>
      </div>
    </form>
  </div>
</div>
@endsection
