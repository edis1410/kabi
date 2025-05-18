<div class="mb-5 flex justify-between items-center px-4">
    <img src="{{ asset('storage/logo.png') }}" alt="Logo">

    <div x-data="{ open: false }" class="md:hidden">
        <button @click="open = !open" class="text-blue-400 focus:outline-none text-2xl">
            <i x-show="!open" class="fas fa-bars"></i>
            <i x-show="open" class="fas fa-times"></i>
        </button>
        <div
            x-cloak
            x-show="open"
            @click.away="open = false"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            class="fixed inset-0 z-50 bg-blue-400 text-white flex flex-col items-center justify-center space-y-6"
        >
            <nav class="flex flex-col text-2xl font-bold items-center space-y-6">
                <a href="#" class="hover:underline" @click="open = false">Domov</a>
                <a href="#" class="hover:underline" @click="open = false">O nas</a>
                <a href="#" class="hover:underline" @click="open = false">Kontakt</a>
                <a href="#" class="hover:underline" @click="open = false">Pišite nam</a>
                <a href="/products" class="hover:underline" @click="open = false">IZDELKI</a>
            </nav>

        </div>
    </div>
</div>

<header class="bg-gradient-to-b from-[#48C6EF] to-[#6F86D6] shadow-md rounded-md">
    <div class="max-w-7xl mx-auto px-4 py-3 hidden md:flex items-center justify-between">
        <nav class="flex text-white text-base font-bold items-center">
            <a href="#"
               class="flex items-center space-x-2 opacity-25 hover:opacity-100 transition-opacity duration-300 ease-in-out">
                <i class="fas fa-home"></i>
            </a>
            <a href="#" class="px-5 border-r border-black/15 hover:underline">Domov</a>
            <a href="#" class="px-5 border-r border-black/15 hover:underline">O nas</a>
            <a href="#" class="px-5 border-r border-black/15 hover:underline">Kontakt</a>
            <a href="#" class="px-5 border-r border-black/15 hover:underline">Pišite nam</a>
            <a href="/products" class="px-5 border-r border-black/15 hover:underline">IZDELKI</a>
        </nav>
    </div>
</header>
