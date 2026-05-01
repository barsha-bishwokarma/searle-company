<x-frontend-layout>
    <div class="max-w-6xl mx-auto px-6 py-10">

        {{-- Breadcrumb --}}
        <ul class="flex items-center gap-2 text-sm mb-8">
            <li><a class="text-gray-400 hover:text-blue-900" href="{{ route('home') }}">Home</a></li>
            <li class="text-gray-400">/</li>
            <li class="text-[var(--secondary-color)]">Corporate Social Responsibility</li>
        </ul>

        {{-- Title --}}
        <div class="flex items-center gap-4 mb-8">
            <h1 class="text-3xl font-light text-gray-700">Corporate Social Responsibility</h1>
            <div class="flex-1 h-px bg-gray-300"></div>
        </div>

        <div class="text-gray-600 leading-8 space-y-4 text-justify">
            <p>At Searle, we believe in giving back to the communities we serve. Our CSR initiatives focus on healthcare
                access, education, environmental sustainability, and community development across Pakistan.</p>
        </div>

    </div>
</x-frontend-layout>
