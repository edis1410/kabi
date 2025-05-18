@extends('layouts.app')

@section('content')
    <div class="min-h-screen">
        <div class="max-w-6xl mt-10 p-6 flex flex-col md:flex-row items-center md:items-start md:gap-x-5">
            <div class="min-w-fit shadow-xl mb-5 md:mb-0">
                <img src="{{ asset('storage/img.png') }}" alt="Product Image" class="object-contain w-full">
            </div>
            <div>
                <p class="font-bold text-2xl uppercase">{{ $product['name'] }}</p>
                <p class="text-gray-600 text-xl mb-5">{{ $product['subtitle'] }}</p>
                <p class="text-gray-600 text-sm mb-5">{!! $product['description'] !!}</p>
                <div class="mt-auto pt-4">
                    <a href="{{ route('products.index') }}"
                       class="inline-block border-2 border-blue-400 text-blue-400 font-bold text-sm px-6 py-3 rounded-md hover:bg-blue-50 transition">
                        <i class="fas fa-chevron-left"></i> NAZAJ NA SEZNAM
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
