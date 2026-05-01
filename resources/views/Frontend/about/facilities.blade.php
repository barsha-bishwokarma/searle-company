<x-frontend-layout>
    <div class="max-w-6xl mx-auto px-6 py-10">

        {{-- Breadcrumb --}}
        <ul class="flex items-center gap-2 text-sm mb-8">
            <li><a class="text-gray-400 hover:text-blue-900" href="{{ route('home') }}">Home</a></li>
            <li class="text-gray-400">/</li>
            <li class="text-[var(--secondary-color)]">Manufacturing Facilities</li>
        </ul>

        {{-- Title --}}
        <div class="flex items-center gap-4 mb-8">
            <h1 class="text-3xl font-light text-gray-700">Manufacturing Facilities</h1>
            <div class="flex-1 h-px bg-gray-300"></div>
        </div>

        {{-- Facilities Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            
        </div>

    </div>
</x-frontend-layout>
