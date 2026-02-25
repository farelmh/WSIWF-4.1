<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kosan</title>
</head>
<body>
    <script src="https://cdn.tailwindcss.com"></script>
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Edit Kosan</h1>
    
    <form action="{{ route('boarding.update', $boarding->id) }}" method="POST" class="max-w-md">
        @csrf
        @method('PUT') <div class="mb-4">
            <label class="block">Nama Kosan</label>
            <input type="text" name="name" value="{{ $boarding->name }}" class="w-full border p-2 rounded">
        </div>
        <div class="mb-4">
            <label class="block">Alamat</label>
            <input type="text" name="address" value="{{ $boarding->address }}" class="w-full border p-2 rounded">
        </div>
        <div class="mb-4">
            <label class="block">Fasilitas</label>
            <input type="text" name="facilities" value="{{ $boarding->facilities }}" class="w-full border p-2 rounded">
        </div>
        <div class="mb-4">
            <label class="block">Harga</label>
            <input type="number" name="price" value="{{ $boarding->price }}" class="w-full border p-2 rounded">
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
    </form>
</div>
</body>
</html>