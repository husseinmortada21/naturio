@extends('layouts.admin')

@section('title', 'All Services')

@section('content')
<div class="p-6">
  <div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold text-green-700">All Services</h1>
    <a href="{{ route('admin.services.create') }}" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
      + Add Service
    </a>
  </div>

  @if ($services->count())
    <table class="w-full bg-white rounded shadow overflow-hidden">
      <thead>
        <tr class="bg-gray-100 text-left text-sm text-gray-700">
          <th class="p-4">Image</th>
          <th class="p-4">Name</th>
          <th class="p-4">Price</th>
          <th class="p-4">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($services as $service)
          <tr class="border-b hover:bg-gray-50 transition">
            <td class="p-4">
              <img src="{{ asset('storage/' . $service->image) }}" class="w-16 h-16 object-cover rounded" />
            </td>
            <td class="p-4 font-medium text-gray-800">{{ $service->name }}</td>
            <td class="p-4 text-green-600 font-semibold">${{ number_format($service->price, 2) }}</td>
            <td class="p-4">
              <a href="{{ route('admin.services.edit', $service) }}" class="text-blue-600 hover:underline">Edit</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  @else
    <p class="text-gray-500">No services found. <a href="{{ route('admin.services.create') }}" class="text-green-600 underline">Add one now</a>.</p>
  @endif
</div>
@endsection
