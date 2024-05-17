<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled Table</title>
    <!-- Include Tailwind CSS from CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="mt-20 mx-auto max-w-4xl">
        <table class="min-w-full divide-y divide-gray-200 table-auto">
            <thead class="bg-red-500">
                <tr>
                    <th class="px-3 py-2 text-left text-xs font-medium text-white uppercase tracking-wider">No</th>
                    <th class="px-3 py-2 text-left text-xs font-medium text-white uppercase tracking-wider">Nama produk</th>
                    <th class="px-3 py-2 text-left text-xs font-medium text-white uppercase tracking-wider">Deskripsi produk</th>
                    <th class="px-3 py-2 text-left text-xs font-medium text-white uppercase tracking-wider">Harga produk</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($nama as $index => $item)
                <tr class="hover:bg-gray-100">
                    <td class="px-3 py-2 whitespace-nowrap text-xs font-medium text-gray-900">{{ $index + 1 }}</td>
                    <td class="px-3 py-2 whitespace-nowrap text-xs text-gray-500">{{ $item }}</td>
                    <td class="px-3 py-2 whitespace-nowrap text-xs text-gray-500">{{$desc[$index]}}</td>
                    <td class="px-3 py-2 whitespace-nowrap text-xs text-gray-500">{{$harga[$index]}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>









