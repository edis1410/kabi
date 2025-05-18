@extends('layouts.app')

@section('content')
    <div class="min-h-screen">
        <div class="max-w-7xl mx-auto py-10 px-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($products as $product)
                <div class="bg-white rounded-md shadow-md overflow-hidden flex flex-col">
                    <div class="flex items-center justify-center">
                        <img src="{{ asset('storage/img.png') }}" alt="Product Image" class="object-contain w-full">
                    </div>
                    <div class="p-7 flex flex-col flex-1">
                        <p class="font-bold text-2xl uppercase">{{ $product['name'] }}</p>
                        <p class="text-gray-600 text-xl mb-5">{{ $product['subtitle'] }}</p>
                        <p class="text-gray-600 text-sm mb-2">{!! $product['description'] !!}</p>
                        <div class="mt-auto pt-4">
                            <a href="{{ route('products.show', $product['id']) }}"
                               class="inline-block border-2 border-blue-400 text-blue-400 font-bold text-sm px-6 py-3 rounded-md hover:bg-blue-50 transition">
                                <i class="fas fa-plus"></i> VEČ O {{ strtoupper($product['name']) }}
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
