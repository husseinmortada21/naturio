@extends('layouts.admin')

@section('title', 'Edit Product')

@section('content')
<div class="max-w-xl mx-auto mt-8 bg-white p-6 rounded shadow">
  <h1 class="text-2xl font-bold mb-6">Edit Product</h1>

  <form action="{{ route('admin.products.update', $product) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-4">
      <label class="block mb-1 font-semibold">Name</label>
      <input type="text" name="name" value="{{ $product->name }}" class="w-full border rounded px-3 py-2" required>
    </div>

    <div class="mb-4">
      <label class="block mb-1 font-semibold">Description</label>
      <textarea name="description" class="w-full border rounded px-3 py-2" required>{{ $product->description }}</textarea>
    </div>

    <div class="mb-4">
      <label class="block mb-1 font-semibold">Price</label>
      <input type="number" name="price" value="{{ $product->price }}" step="0.01" class="w-full border rounded px-3 py-2" required>
    </div>

    <div class="mb-4">
      <label class="block mb-1 font-semibold">Image</label>
      <input type="file" name="image" class="w-full border rounded px-3 py-2">
      @if($product->image)
        <img src="{{ asset('storage/' . $product->image) }}" class="w-24 mt-2 rounded" />
      @endif
    </div>

    <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Update</button>
  </form>
</div>
@endsection
