<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>

             <!-- Product Table -->
             <div class="mt-6">
                <div class="bg-white shadow-md rounded-lg p-4">
                    <h3 class="text-lg font-semibold mb-4">Product List</h3>
                    <table class="min-w-full border-collapse border border-gray-300">
                        <thead>
                            <tr>
                                <th class="border border-gray-300 px-4 py-2">Name</th>
                                <th class="border border-gray-300 px-4 py-2">Category</th>
                                <th class="border border-gray-300 px-4 py-2">Price</th>
                                <th class="border border-gray-300 px-4 py-2">Availability</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($products as $product)
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">{{ $product->name }}</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ $product->category->name ?? 'Uncategorized' }}</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ $product->price }}</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ $product->quantity > 0 ? 'Available' : 'Out of Stock' }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="border border-gray-300 px-4 py-2 text-center">
                                        No products found.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>


            <div class="mt-6">
                <a href="{{ route('products.create') }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">
                    Add Product
                </a>
            </div>
        </div>
    </div>
 
</x-app-layout>
