@extends('layout')
@section('content')
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow">
        <h1 class="text-2xl font-bold mb-4 text-gray-800">Product Catalog</h1>
        
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-gray-200">
                    <th class="p-3 border-b">Product Name</th>
                    <th class="p-3 border-b">Category</th>
                    <th class="p-3 border-b">Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr class="hover:bg-gray-50">
                        <td class="p-3 border-b font-medium">{{ $product->name }}</td>
                        <td class="p-3 border-b">
                            <!-- Accessing the single category object safely -->
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-sm">
                                {{ $product->category->name ?? 'Uncategorized' }}
                            </span>
                        </td>
                        <td class="p-3 border-b">${{ number_format($product->price, 2) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection