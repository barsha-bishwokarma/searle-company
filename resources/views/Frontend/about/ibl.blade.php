<x-frontend-layout>
    <div class="bg-gray-50 border-b border-gray-100 mt-1">
        <div class="max-w-6xl mx-auto px-6 py-4">
            <ul class="flex items-center gap-2 text-sm">
                <li><a class="text-gray-400 hover:underline decoration-gray-400" href="{{ route('home') }}">Home</a></li>
                <li class="text-gray-400">/</li>
                <li class="text-[var(--secondary-color)]">IBL Group Companies</li>
            </ul>
        </div>
    </div>

    <div class="max-w-6xl mx-auto bg-white px-6 py-10 mt-4">

        <div class="flex items-center gap-4 mb-6">
            <h1 class="text-3xl font-light text-gray-700 whitespace-nowrap">IBL Group Companies</h1>
            <div class="flex-1 h-px bg-gray-300"></div>
        </div>

        <p class="text-gray-600 leading-8 text-justify mb-15">
            IBL Group is one of Pakistan's most trusted and diversified conglomerates with businesses spanning across
            healthcare, consumer goods, logistics, and more. Searle is a proud member of the IBL Group family.
        </p>

        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6">
            @foreach ([['ibl-int.png', 'IBL International'], ['Untitled-5.png', 'Searle Company'], ['Untitled-12.png', 'Medi-Urge'], ['ibl-logo (2).png', 'IBL Group'], ['nexture.png', 'Nexture'], ['Untitled-7.png', 'IBL Health'], ['ibl-logo.png', 'IBL Logistics'], ['Untitled-4.png', 'IBL Consumer']] as [$file, $label])
                <div
                    class="flex items-center justify-center p-5 border border-gray-100 rounded-xl hover:border-gray-300 transition-colors">
                    <img src="{{ asset('images/' . $file) }}" alt="{{ $label }}"
                        class="max-h-16 w-full object-contain">
                </div>
            @endforeach
        </div>

    </div>
</x-frontend-layout>
