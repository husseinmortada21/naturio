@extends('layouts.admin')

@section('title', 'All Products')

@section('content')
<div class="p-6">
  <div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold">All Products</h1>
    <a href="{{ route('admin.products.create') }}" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
      + Add Product
    </a>
  </div>

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
      @foreach ($products as $product)
        <tr class="border-b">
          <td class="p-4">
            <img src="{{ asset('storage/' . $product->image) }}" class="w-16 h-16 object-cover rounded" />
          </td>
          <td class="p-4">{{ $product->name }}</td>
          <td class="p-4">${{ $product->price }}</td>
          <td class="p-4 flex gap-2">
            <a href="{{ route('admin.products.edit', $product) }}" class="text-blue-600 hover:underline">Edit</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
