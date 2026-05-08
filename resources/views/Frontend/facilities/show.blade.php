<x-frontend.layout>

    <div class="max-w-6xl mx-auto px-6 py-4">
        <ul class="flex items-center gap-2 text-sm">
            <li><a class="text-gray-400" href="{{ route('home') }}">Home</a></li>
            <li class="text-gray-400">/</li>
            <li class="text-[var(--secondary-color)]">Facilities</li>
        </ul>
    </div>


    <div class="w-full h-[500px] overflow-hidden">
        <img src="{{ Storage::url($facility->image) }}" alt="{{ $facility->plant_name }}"
            class="w-full h-full object-cover">
    </div>


    <div class="max-w-6xl mx-auto px-6 py-10">
        <div class="flex items-center gap-4 mb-10">
            <div class="flex-1 h-px bg-gray-300"></div>
            <h1 class="text-2xl font-light text-gray-700 whitespace-nowrap">Manufacturing Facilities</h1>
            <div class="flex-1 h-px bg-gray-300"></div>
        </div>


        <div class="space-y-2" x-data="{ openIndex: null }">
            @foreach ($facilities as $index => $facility)
                <div class="border-b border-gray-200">

                    
                    <button @click="openIndex = openIndex === {{ $index }} ? null : {{ $index }}"
                        class="w-full flex items-center gap-4 py-5 text-left text-gray-400 uppercase text-sm font-bold tracking-widest hover:text-[var(--secondary-color)] transition-colors duration-300">
                        <span x-text="openIndex === {{ $index }} ? '−' : '+'"
                            class="text-xl w-4 -translate-y-0.5"></span>
                        {{ $facility->plant_name }}
                    </button>

                    
                    <div x-show="openIndex === {{ $index }}"
                        x-transition:enter="transition-all ease-out duration-500"
                        x-transition:enter-start="opacity-0 max-h-0" x-transition:enter-end="opacity-100 max-h-screen"
                        x-transition:leave="transition-all ease-in duration-300"
                        x-transition:leave-start="opacity-100 max-h-screen" x-transition:leave-end="opacity-0 max-h-0"
                        class="overflow-hidden">

                        <div class="flex gap-10 items-start pb-10 pt-4">

                            <div class="w-1/2 flex-shrink-0">
                                <img src="{{ Storage::url($facility->image) }}" alt="{{ $facility->plant_name }}"
                                    class="w-full object-cover rounded shadow-sm">
                            </div>

                            <div class="w-1/2 text-gray-600 leading-8 text-justify">
                                {{ $facility->description }}
                            </div>

                        </div>
                    </div>

                </div>
            @endforeach
        </div>

</x-frontend.layout>
