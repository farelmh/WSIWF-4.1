<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kos</title>
</head>
<body>
    <script src="https://cdn.tailwindcss.com"></script>
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Tambah Kos Baru</h1>
    
    <form action="{{ route('boarding.store') }}" method="POST" class="max-w-md">
        @csrf
        <div class="mb-4">
            <label class="block">Nama Kos</label>
            <input type="text" name="name" class="w-full border p-2 rounded" required>
        </div>
        <div class="mb-4">
            <label class="block">Alamat</label>
            <input type="text" name="address" class="w-full border p-2 rounded" required>
        </div>
        <div class="mb-4">
            <label class="block">Fasilitas</label>
            <input type="text" name="facilities" class="w-full border p-2 rounded" required>
        </div>
        <div class="mb-4">
            <label class="block">Harga</label>
            <input type="number" name="price" class="w-full border p-2 rounded" required>
        </div>
        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Simpan</button>
        <a href="{{ route('boarding.index') }}" class="text-gray-500 ml-2">Batal</a>
    </form>
</div>
</body>
</html>