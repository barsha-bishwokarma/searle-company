<x-frontend-layout>
    <div class="max-w-6xl mx-auto px-6 py-12">
        <div class="flex gap-8">

            {{-- LEFT SIDEBAR --}}
            @include('Frontend.investors.partials.sidebar')

            {{-- RIGHT CONTENT --}}
            <div class="flex-1">

                {{-- Page Title --}}
                <div class="flex items-center gap-4 mb-8">
                    <h1 class="text-3xl font-light text-gray-700">Investor Information</h1>
                    <div class="flex-1 h-px bg-gray-300"></div>
                </div>

                {{-- FINANCIAL REPORTS --}}
                @if ($reports->count() > 0)
                    <div class="mb-8" x-data="{ open: true }">
                        <button @click="open = !open"
                            class="flex items-center gap-3 text-gray-400 mb-6 hover:text-blue-900 transition">
                            <span x-text="open ? '−' : '+'" class="text-xl font-bold"></span>
                            <span class="text-lg">Financial Reports</span>
                        </button>
                        <div x-show="open" x-transition class="space-y-5 pl-4">
                            @foreach ($reports as $doc)
                                @if ($doc->file)
                                    <a href="{{ asset('storage/' . $doc->file) }}" target="_blank"
                                        class="block text-blue-500 hover:text-blue-800 transition">
                                        {{ $doc->title }} ({{ $doc->language == 'en' ? 'English' : 'Urdu' }})
                                    </a>
                                @else
                                    <span class="block text-blue-500 cursor-not-allowed">
                                        {{ $doc->title }} ({{ $doc->language == 'en' ? 'English' : 'Urdu' }})
                                    </span>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endif

                {{-- FINANCIAL HIGHLIGHTS --}}
                @if ($highlights->count() > 0)
                    <div class="mb-8" x-data="{ open: true }">
                        <button @click="open = !open"
                            class="flex items-center gap-3 text-gray-400 mb-6 hover:text-blue-900 transition">
                            <span x-text="open ? '−' : '+'" class="text-xl font-bold"></span>
                            <span class="text-lg">Financial Highlights</span>
                        </button>
                        <div x-show="open" x-transition class="space-y-5 pl-4">
                            @foreach ($highlights as $doc)
                                @if ($doc->file)
                                    <a href="{{ asset('storage/' . $doc->file) }}" target="_blank"
                                        class="block text-blue-500 hover:text-blue-800 transition">
                                        {{ $doc->title }} ({{ $doc->language == 'en' ? 'English' : 'Urdu' }})
                                    </a>
                                @else
                                    <span class="block text-blue-500 cursor-not-allowed">
                                        {{ $doc->title }} ({{ $doc->language == 'en' ? 'English' : 'Urdu' }})
                                    </span>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endif

                {{-- RATIO ANALYSIS --}}
                @if ($ratio->count() > 0)
                    <div class="mb-8" x-data="{ open: true }">
                        <button @click="open = !open"
                            class="flex items-center gap-3 text-gray-400 mb-6 hover:text-blue-900 transition">
                            <span x-text="open ? '−' : '+'" class="text-xl font-bold"></span>
                            <span class="text-lg">Ratio Analysis</span>
                        </button>
                        <div x-show="open" x-transition class="space-y-5 pl-4">
                            @foreach ($ratio as $doc)
                                @if ($doc->file)
                                    <a href="{{ asset('storage/' . $doc->file) }}" target="_blank"
                                        class="block text-blue-500 hover:text-blue-800 transition">
                                        {{ $doc->title }} ({{ $doc->language == 'en' ? 'English' : 'Urdu' }})
                                    </a>
                                @else
                                    <span class="block text-blue-500 cursor-not-allowed">
                                        {{ $doc->title }} ({{ $doc->language == 'en' ? 'English' : 'Urdu' }})
                                    </span>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endif

                {{-- UNCLAIMED DIVIDEND --}}
                @if ($dividend->count() > 0)
                    <div class="mb-8" x-data="{ open: true }">
                        <button @click="open = !open"
                            class="flex items-center gap-3 text-gray-400 mb-6 hover:text-blue-900 transition">
                            <span x-text="open ? '−' : '+'" class="text-xl font-bold"></span>
                            <span class="text-lg">Unclaimed Dividend</span>
                        </button>
                        <div x-show="open" x-transition class="space-y-5 pl-4">
                            @foreach ($dividend as $doc)
                                @if ($doc->file)
                                    <a href="{{ asset('storage/' . $doc->file) }}" target="_blank"
                                        class="block text-blue-500 hover:text-blue-800 transition">
                                        {{ $doc->title }} ({{ $doc->language == 'en' ? 'English' : 'Urdu' }})
                                    </a>
                                @else
                                    <span class="block text-blue-500 cursor-not-allowed">
                                        {{ $doc->title }} ({{ $doc->language == 'en' ? 'English' : 'Urdu' }})
                                    </span>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endif

                {{-- SHAREHOLDER INFORMATION --}}
                @if ($shareholder->count() > 0)
                    <div class="mb-8" x-data="{ open: true }">
                        <button @click="open = !open"
                            class="flex items-center gap-3 text-gray-400 mb-6 hover:text-blue-900 transition">
                            <span x-text="open ? '−' : '+'" class="text-xl font-bold"></span>
                            <span class="text-lg">Shareholder Information</span>
                        </button>
                        <div x-show="open" x-transition class="space-y-5 pl-4">
                            @foreach ($shareholder as $doc)
                                @if ($doc->file)
                                    <a href="{{ asset('storage/' . $doc->file) }}" target="_blank"
                                        class="block text-blue-500 hover:text-blue-800 transition">
                                        {{ $doc->title }} ({{ $doc->language == 'en' ? 'English' : 'Urdu' }})
                                    </a>
                                @else
                                    <span class="block text-blue-500 cursor-not-allowed">
                                        {{ $doc->title }} ({{ $doc->language == 'en' ? 'English' : 'Urdu' }})
                                    </span>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endif

                {{-- PATTERN OF SHAREHOLDING --}}
                @if ($shareholding->count() > 0)
                    <div class="mb-8" x-data="{ open: true }">
                        <button @click="open = !open"
                            class="flex items-center gap-3 text-gray-400 mb-6 hover:text-blue-900 transition">
                            <span x-text="open ? '−' : '+'" class="text-xl font-bold"></span>
                            <span class="text-lg">Pattern of Shareholding</span>
                        </button>
                        <div x-show="open" x-transition class="space-y-5 pl-4">
                            @foreach ($shareholding as $doc)
                                @if ($doc->file)
                                    <a href="{{ asset('storage/' . $doc->file) }}" target="_blank"
                                        class="block text-blue-500 hover:text-blue-800 transition">
                                        {{ $doc->title }} ({{ $doc->language == 'en' ? 'English' : 'Urdu' }})
                                    </a>
                                @else
                                    <span class="block text-blue-500 cursor-not-allowed">
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
</x-frontend-layout>
