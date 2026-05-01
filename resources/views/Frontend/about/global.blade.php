<x-frontend-layout>
    <div class="max-w-6xl mx-auto px-6 py-10">

        {{-- Breadcrumb --}}
        <ul class="flex items-center gap-2 text-sm mb-8">
            <li><a class="text-gray-400 hover:text-blue-900" href="{{ route('home') }}">Home</a></li>
            <li class="text-gray-400">/</li>
            <li class="text-[var(--secondary-color)]">Global Business</li>
        </ul>

        {{-- Title --}}
        <div class="flex items-center gap-4 mb-8">
            <h1 class="text-3xl font-light text-gray-700">Global Business</h1>
            <div class="flex-1 h-px bg-gray-300"></div>
        </div>

        <div class="text-gray-600 leading-8 space-y-4 text-justify">
            <p>Searle has expanded its footprint globally, with operations and partnerships spanning across multiple
                continents. Our global business strategy focuses on bringing quality healthcare solutions to patients
                worldwide.</p>
        </div>

    </div>
</x-frontend-layout>
