<x-frontend.layout>
    <div class="max-w-6xl mx-auto px-4 sm:px-6 py-10">

        {{-- Breadcrumb --}}
        <ul class="flex flex-wrap items-center gap-2 text-sm mb-8">
            <li>
                <a class="text-gray-400" href="{{ route('home') }}">Home</a>
            </li>

            <li class="text-gray-400">/</li>

            <li>
                <a class="text-gray-400" href="{{ route('news.index') }}">News</a>
            </li>

            <li class="text-gray-400">/</li>

            <li class="text-[var(--secondary-color)] break-words">
                {{ $news->title }}
            </li>
        </ul>

        {{-- Title --}}
        <div class="flex flex-col sm:flex-row sm:items-center gap-4 mb-8">
            <h1 class="text-2xl sm:text-3xl font-light text-gray-700 break-words">
                {{ $news->title }}
            </h1>

            <div class="hidden sm:block flex-1 h-px bg-gray-300"></div>
        </div>

        {{-- Date --}}
        <div class="flex flex-wrap items-center gap-2 text-gray-400 text-sm mb-8">
            <span>|</span>
            <span>{{ $news->published_at->format('F j, Y') }}</span>
            <span>|</span>
        </div>

        {{-- Image --}}
        @if ($news->image)
            <div class="mb-8">
                <img src="{{ Storage::url($news->image) }}" alt="{{ $news->title }}"
                    class="w-full object-cover rounded-xl max-h-[500px]">
            </div>
        @endif

        {{-- Content --}}
        <div class="text-gray-600 leading-7 sm:leading-8 text-justify space-y-4">
            {!! $news->content !!}
        </div>

    </div>
</x-frontend.layout>
