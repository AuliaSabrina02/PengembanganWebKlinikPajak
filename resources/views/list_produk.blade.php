<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled Table and Form</title>
    <!-- Include Tailwind CSS from CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="mt-20 mx-auto max-w-4xl p-6 bg-white shadow-md rounded-lg">
        <table class="min-w-full divide-y divide-gray-200 table-auto mb-8">
            <thead class="bg-red-500">
                <tr>
                    <th class="px-3 py-2 text-left text-xs font-medium text-white uppercase tracking-wider">No</th>
                    <th class="px-3 py-2 text-left text-xs font-medium text-white uppercase tracking-wider">Nama produk</th>
                    <th class="px-3 py-2 text-left text-xs font-medium text-white uppercase tracking-wider">Deskripsi produk</th>
                    <th class="px-3 py-2 text-left text-xs font-medium text-white uppercase tracking-wider">Harga produk</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($produk as $index => $item)
                <tr class="hover:bg-gray-100">
                    <td class="px-3 py-2 whitespace-nowrap text-xs font-medium text-gray-900">{{ $index + 1 }}</td>
                    <td class="px-3 py-2 whitespace-nowrap text-xs text-gray-500">{{ $item->nama }}</td>
                    <td class="px-3 py-2 whitespace-nowrap text-xs text-gray-500">{{ $item->deskripsi }}</td>
                    <td class="px-3 py-2 whitespace-nowrap text-xs text-gray-500">{{ $item->harga }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-8 mx-auto max-w-lg p-6 bg-white shadow-md rounded-lg">
        <h1 class="text-2xl font-semibold mb-6 text-center text-gray-700">Input Produk</h1>
        <form method="POST" action="{{ route('produk.simpan') }}">
            @csrf
            <div class="mb-6">
                <label for="nama" class="block text-sm font-medium text-gray-700">Nama:</label>
                <input type="text" id="nama" name="nama" class="mt-1 p-3 border border-gray-300 rounded-md w-full focus:outline-none focus:ring focus:border-red-500" placeholder="Masukkan nama produk">
            </div>
            <div class="mb-6">
                <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi:</label>
                <textarea id="deskripsi" name="deskripsi" rows="3" class="mt-1 p-3 border border-gray-300 rounded-md w-full focus:outline-none focus:ring focus:border-red-500" placeholder="Masukkan deskripsi produk"></textarea>
            </div>
            <div class="mb-6">
                <label for="harga" class="block text-sm font-medium text-gray-700">Harga:</label>
                <input type="number" id="harga" name="harga" class="mt-1 p-3 border border-gray-300 rounded-md w-full focus:outline-none focus:ring focus:border-red-500" placeholder="Masukkan harga produk">
            </div>
            <div class="text-center">
                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-3 px-6 rounded-full transition duration-300">Simpan</button>
            </div>
        </form>
    </div>
</body>
</html>


