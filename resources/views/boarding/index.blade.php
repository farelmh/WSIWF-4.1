<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kos</title>
</head>
<body>
    <script src="https://cdn.tailwindcss.com"></script>

<div class="container mx-auto p-6">
    <div class="flex justify-between mb-4">
        <h1 class="text-2xl font-bold">Daftar Kosan</h1>
        <a href="{{ route('boarding.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Kosan</a>
    </div>

    <table class="min-w-full bg-white border border-gray-300">
        <thead>
            <tr class="bg-gray-100">
                <th class="border px-4 py-2">Nama Kos</th>
                <th class="border px-4 py-2">Alamat</th>
                <th class="border px-4 py-2">Fasilitas</th>
                <th class="border px-4 py-2">Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $b)
            <tr>
                <td class="border px-4 py-2">{{ $b->name }}</td>
                <td class="border px-4 py-2">{{ $b->address }}</td>
                <td class="border px-4 py-2">{{ $b->facilities }}</td>
                <td class="border px-4 py-2">{{ $b->price }}</td>
                <td class="border px-4 py-2 flex gap-2">
                    <a href="{{ route('boarding.edit', $b->id) }}" class="bg-yellow-400 px-3 py-1 rounded">Edit</a>

                    <form action="{{ route('boarding.destroy', $b->id) }}" method="POST" onsubmit="return confirm('Yakin hapus?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>