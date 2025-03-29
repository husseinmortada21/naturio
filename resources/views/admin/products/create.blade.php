@extends('layouts.admin')

@section('title', 'Add Product')

@section('content')
<div class="max-w-xl mx-auto mt-8 bg-white p-6 rounded shadow">
  <h1 class="text-2xl font-bold mb-6">Add New Product</h1>

  <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-4">
      <label class="block mb-1 font-semibold">Name</label>
      <input type="text" name="name" class="w-full border rounded px-3 py-2" required>
    </div>

    <div class="mb-4">
      <label class="block mb-1 font-semibold">Description</label>
      <textarea name="description" class="w-full border rounded px-3 py-2" required></textarea>
    </div>

    <div class="mb-4">
      <label class="block mb-1 font-semibold">Price</label>
      <input type="number" name="price" step="0.01" class="w-full border rounded px-3 py-2" required>
    </div>

    <div class="mb-6">
      <label class="block mb-1 font-semibold">Image</label>
      <input type="file" name="image" class="w-full border rounded px-3 py-2" required>
    </div>

    <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700">Save</button>
  </form>
</div>
@endsection
