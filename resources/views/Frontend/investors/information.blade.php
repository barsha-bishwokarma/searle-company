<x-frontend.layout>
    <div class="max-w-6xl mx-auto px-4 sm:px-6 py-8 sm:py-12">
        <div class="flex flex-col lg:flex-row gap-8">

            {{-- Sidebar: inline on mobile, sticky on desktop --}}
            <div class="w-full lg:w-auto lg:shrink-0 lg:sticky lg:top-10 lg:self-start">
                @include('Frontend.investors.partials.sidebar')
            </div>

            {{-- Main Content --}}
            <div class="flex-1 min-w-0">

                {{-- Page Title --}}
                <div class="flex items-center gap-4 mb-6 sm:mb-8">
                    <h1 class="text-2xl sm:text-3xl font-light text-gray-700 whitespace-nowrap">Investor Information</h1>
                    <div class="flex-1 h-px bg-gray-300 hidden sm:block"></div>
                </div>

                {{-- Reusable section macro pattern --}}

                {{-- FINANCIAL REPORTS --}}
                @if ($reports->count() > 0)
                    <div class="mb-3 sm:mb-4 border-b border-gray-100 pb-3 sm:pb-4" x-data="{ open: true }">
                        <button @click="open = !open"
                            class="flex items-center gap-3 text-gray-400 mb-4 sm:mb-6 hover:text-blue-900 transition w-full text-left">
                            <span x-text="open ? '−' : '+'" class="text-xl font-bold shrink-0"></span>
                            <span class="text-base sm:text-lg">Financial Reports</span>
                        </button>
                        <div x-show="open" x-transition class="space-y-4 pl-4">
                            @foreach ($reports as $doc)
                                @if ($doc->file)
                                    <a href="{{ asset('storage/' . $doc->file) }}" target="_blank"
                                        class="flex items-start gap-2 text-blue-500 hover:text-blue-800 transition text-sm sm:text-base">
                                        <svg class="w-4 h-4 mt-0.5 shrink-0" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                        </svg>
                                        {{ $doc->title }} ({{ $doc->language == 'en' ? 'English' : 'Urdu' }})
                                    </a>
                                @else
                                    <span
                                        class="flex items-start gap-2 text-blue-300 cursor-not-allowed text-sm sm:text-base">
                                        <svg class="w-4 h-4 mt-0.5 shrink-0" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                        </svg>
                                        {{ $doc->title }} ({{ $doc->language == 'en' ? 'English' : 'Urdu' }})
                                    </span>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endif

                {{-- FINANCIAL HIGHLIGHTS --}}
                @if ($highlights->count() > 0)
                    <div class="mb-3 sm:mb-4 border-b border-gray-100 pb-3 sm:pb-4" x-data="{ open: true }">
                        <button @click="open = !open"
                            class="flex items-center gap-3 text-gray-400 mb-4 sm:mb-6 hover:text-blue-900 transition w-full text-left">
                            <span x-text="open ? '−' : '+'" class="text-xl font-bold shrink-0"></span>
                            <span class="text-base sm:text-lg">Financial Highlights</span>
                        </button>
                        <div x-show="open" x-transition class="space-y-4 pl-4">
                            @foreach ($highlights as $doc)
                                @if ($doc->file)
                                    <a href="{{ asset('storage/' . $doc->file) }}" target="_blank"
                                        class="flex items-start gap-2 text-blue-500 hover:text-blue-800 transition text-sm sm:text-base">
                                        <svg class="w-4 h-4 mt-0.5 shrink-0" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                        </svg>
                                        {{ $doc->title }} ({{ $doc->language == 'en' ? 'English' : 'Urdu' }})
                                    </a>
                                @else
                                    <span
                                        class="flex items-start gap-2 text-blue-300 cursor-not-allowed text-sm sm:text-base">
                                        <svg class="w-4 h-4 mt-0.5 shrink-0" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                        </svg>
                                        {{ $doc->title }} ({{ $doc->language == 'en' ? 'English' : 'Urdu' }})
                                    </span>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endif

                {{-- RATIO ANALYSIS --}}
                @if ($ratio->count() > 0)
                    <div class="mb-3 sm:mb-4 border-b border-gray-100 pb-3 sm:pb-4" x-data="{ open: true }">
                        <button @click="open = !open"
                            class="flex items-center gap-3 text-gray-400 mb-4 sm:mb-6 hover:text-blue-900 transition w-full text-left">
                            <span x-text="open ? '−' : '+'" class="text-xl font-bold shrink-0"></span>
                            <span class="text-base sm:text-lg">Ratio Analysis</span>
                        </button>
                        <div x-show="open" x-transition class="space-y-4 pl-4">
                            @foreach ($ratio as $doc)
                                @if ($doc->file)
                                    <a href="{{ asset('storage/' . $doc->file) }}" target="_blank"
                                        class="flex items-start gap-2 text-blue-500 hover:text-blue-800 transition text-sm sm:text-base">
                                        <svg class="w-4 h-4 mt-0.5 shrink-0" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                        </svg>
                                        {{ $doc->title }} ({{ $doc->language == 'en' ? 'English' : 'Urdu' }})
                                    </a>
                                @else
                                    <span
                                        class="flex items-start gap-2 text-blue-300 cursor-not-allowed text-sm sm:text-base">
                                        <svg class="w-4 h-4 mt-0.5 shrink-0" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                        </svg>
                                        {{ $doc->title }} ({{ $doc->language == 'en' ? 'English' : 'Urdu' }})
                                    </span>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endif

                {{-- UNCLAIMED DIVIDEND --}}
                @if ($dividend->count() > 0)
                    <div class="mb-3 sm:mb-4 border-b border-gray-100 pb-3 sm:pb-4" x-data="{ open: true }">
                        <button @click="open = !open"
                            class="flex items-center gap-3 text-gray-400 mb-4 sm:mb-6 hover:text-blue-900 transition w-full text-left">
                            <span x-text="open ? '−' : '+'" class="text-xl font-bold shrink-0"></span>
                            <span class="text-base sm:text-lg">Unclaimed Dividend</span>
                        </button>
                        <div x-show="open" x-transition class="space-y-4 pl-4">
                            @foreach ($dividend as $doc)
                                @if ($doc->file)
                                    <a href="{{ asset('storage/' . $doc->file) }}" target="_blank"
                                        class="flex items-start gap-2 text-blue-500 hover:text-blue-800 transition text-sm sm:text-base">
                                        <svg class="w-4 h-4 mt-0.5 shrink-0" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                        </svg>
                                        {{ $doc->title }} ({{ $doc->language == 'en' ? 'English' : 'Urdu' }})
                                    </a>
                                @else
                                    <span
                                        class="flex items-start gap-2 text-blue-300 cursor-not-allowed text-sm sm:text-base">
                                        <svg class="w-4 h-4 mt-0.5 shrink-0" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                        </svg>
                                        {{ $doc->title }} ({{ $doc->language == 'en' ? 'English' : 'Urdu' }})
                                    </span>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endif

                {{-- SHAREHOLDER INFORMATION --}}
                @if ($shareholder->count() > 0)
                    <div class="mb-3 sm:mb-4 border-b border-gray-100 pb-3 sm:pb-4" x-data="{ open: true }">
                        <button @click="open = !open"
                            class="flex items-center gap-3 text-gray-400 mb-4 sm:mb-6 hover:text-blue-900 transition w-full text-left">
                            <span x-text="open ? '−' : '+'" class="text-xl font-bold shrink-0"></span>
                            <span class="text-base sm:text-lg">Shareholder Information</span>
                        </button>
                        <div x-show="open" x-transition class="space-y-4 pl-4">
                            @foreach ($shareholder as $doc)
                                @if ($doc->file)
                                    <a href="{{ asset('storage/' . $doc->file) }}" target="_blank"
                                        class="flex items-start gap-2 text-blue-500 hover:text-blue-800 transition text-sm sm:text-base">
                                        <svg class="w-4 h-4 mt-0.5 shrink-0" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                        </svg>
                                        {{ $doc->title }} ({{ $doc->language == 'en' ? 'English' : 'Urdu' }})
                                    </a>
                                @else
                                    <span
                                        class="flex items-start gap-2 text-blue-300 cursor-not-allowed text-sm sm:text-base">
                                        <svg class="w-4 h-4 mt-0.5 shrink-0" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                        </svg>
                                        {{ $doc->title }} ({{ $doc->language == 'en' ? 'English' : 'Urdu' }})
                                    </span>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endif

                {{-- PATTERN OF SHAREHOLDING --}}
                @if ($shareholding->count() > 0)
                    <div class="mb-3 sm:mb-4" x-data="{ open: true }">
                        <button @click="open = !open"
                            class="flex items-center gap-3 text-gray-400 mb-4 sm:mb-6 hover:text-blue-900 transition w-full text-left">
                            <span x-text="open ? '−' : '+'" class="text-xl font-bold shrink-0"></span>
                            <span class="text-base sm:text-lg">Pattern of Shareholding</span>
                        </button>
                        <div x-show="open" x-transition class="space-y-4 pl-4">
                            @foreach ($shareholding as $doc)
                                @if ($doc->file)
                                    <a href="{{ asset('storage/' . $doc->file) }}" target="_blank"
                                        class="flex items-start gap-2 text-blue-500 hover:text-blue-800 transition text-sm sm:text-base">
                                        <svg class="w-4 h-4 mt-0.5 shrink-0" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                        </svg>
                                        {{ $doc->title }} ({{ $doc->language == 'en' ? 'English' : 'Urdu' }})
                                    </a>
                                @else
                                    <span
                                        class="flex items-start gap-2 text-blue-300 cursor-not-allowed text-sm sm:text-base">
                                        <svg class="w-4 h-4 mt-0.5 shrink-0" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                        </svg>
                                        {{ $doc->title }} ({{ $doc->language == 'en' ? 'English' : 'Urdu' }})
                                    </span>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </div>
</x-frontend.layout>
