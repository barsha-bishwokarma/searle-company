<x-frontend.layout>

    <div class="bg-gray-50 border-b border-gray-100">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 py-4">
            <ul class="flex items-center gap-2 text-sm flex-wrap">
                <li>
                    <a class="text-gray-400" href="{{ route('home') }}">Home</a>
                </li>
                <li class="text-gray-400">/</li>
                <li class="text-[var(--secondary-color)]">NEWS</li>
            </ul>
        </div>
    </div>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 py-10 mt-4">

        {{-- News List --}}
        <div class="space-y-12">
            @foreach ($news as $item)
                <div
                    class="flex flex-col lg:flex-row gap-8 lg:gap-10 items-start border border-gray-200 py-6 sm:py-10 px-4 sm:px-8 rounded">

                    {{-- Image --}}
                    <div class="w-full lg:w-80 flex-shrink-0">
                        <img src="{{ Storage::url($item->image) }}" alt="{{ $item->title }}"
                            class="w-full object-cover rounded">
                    </div>

                    {{-- Content --}}
                    <div class="w-full text-gray-100">

                        <h2
                            class="text-lg sm:text-xl font-bold text-[var(--secondary-color)] mb-3 leading-7 sm:leading-8">
                            {{ $item->title }}
                        </h2>

                        <div class="flex flex-wrap items-center gap-2 text-gray-400 text-sm mb-4">
                            <span>|</span>
                            <span>{{ $item->published_at->format('F j, Y') }}</span>
                            <span>|</span>
                        </div>

                        <p class="text-gray-600 text-sm leading-7 text-justify mb-6">
                            {{ $item->meta_description }}
                        </p>

                        <a href="{{ route('news.show', $item->slug) }}"
                            class="text-[var(--secondary-color)] text-sm hover:underline">
                            Read More
                        </a>

                    </div>

                </div>
            @endforeach
        </div>

    </div>
</x-frontend.layout>
