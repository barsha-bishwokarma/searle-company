<x-frontend.layout>
    <div class="max-w-6xl mx-auto px-6 py-10">
        <div class="flex gap-16 items-start">

            {{-- Sticky Sidebar --}}
            <div class="sticky top-10 self-start w-64 shrink-0">
                @include('Frontend.investors.partials.sidebar')
            </div>

            {{-- Main Content --}}
            <div class="flex-1" x-data="{ openIndex: null }">

                <h2 class="text-2xl font-bold text-gray-800 mb-6 pb-3 border-b-2 border-[var(--secondary-color)]">
                    Profile of Company
                </h2>

                @foreach ($profiles as $index => $profile)
                    <div class="border-b border-gray-200">

                        <button @click="openIndex = openIndex === {{ $index }} ? null : {{ $index }}"
                            class="w-full flex items-center gap-4 py-5 text-left text-gray-400 uppercase text-sm font-bold tracking-widest hover:text-[var(--secondary-color)] transition-colors duration-300">
                            <span x-text="openIndex === {{ $index }} ? '−' : '+'"
                                class="text-xl w-4 -translate-y-0.5 text-[var(--secondary-color)]">
                            </span>
                            {{ $profile->title }}
                        </button>

                        <div x-show="openIndex === {{ $index }}"
                            x-transition:enter="transition-all ease-out duration-500"
                            x-transition:enter-start="opacity-0 -translate-y-2"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition-all ease-in duration-300"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 -translate-y-2" class="overflow-hidden">

                            <div class="pb-8 pt-2 pl-8 border-l-2 border-[var(--secondary-color)] ml-2 mb-4">
                                <div class="description text-gray-600 leading-8 text-justify text-sm">
                                    {!! $profile->description !!}
                                </div>
                            </div>

                        </div>

                    </div>
                @endforeach

            </div>
        </div>
    </div>
</x-frontend.layout>
