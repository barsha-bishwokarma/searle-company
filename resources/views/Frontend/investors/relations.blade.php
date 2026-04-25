<x-frontend-layout>
<div class="max-w-7xl mx-auto px-6 py-12">
    <div class="flex gap-8">

        {{-- LEFT SIDEBAR --}}
        @include('Frontend.investors.partials.sidebar')

        {{-- RIGHT CONTENT --}}
        <div class="flex-1">

            {{-- Page Title --}}
            <div class="flex items-center gap-4 mb-8">
                <h1 class="text-3xl font-medium text-black border border-black py-2 px-4 tracking-wide">Investor's Relations</h1>
                <div class="flex-1 h-px bg-gray-300"></div>
            </div>

            {{-- NOTICE OF AGM --}}
            @if($agm->count() > 0)
            <div class="mb-8" x-data="{ open: true }">
                <button @click="open = !open"
                    class="flex items-center gap-3 text-gray-400 mb-6">
                    <span x-text="open ? '−' : '+'" class="text-xl font-bold"></span>
                    <span class="text-xl font-semibold">Notice of Annual General Meeting</span>
                </button>
                <div x-show="open" x-transition class="space-y-2 pl-4">
                    @foreach($agm as $doc)
                        @if($doc->file)
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

            {{-- NOTICE OF EOGM --}}
            @if($eogm->count() > 0)
            <div class="mb-8" x-data="{ open: true }">
                <button @click="open = !open"
                    class="flex items-center gap-3 text-gray-400 mb-6 ">
                    <span x-text="open ? '−' : '+'" class="text-xl font-bold"></span>
                    <span class="text-xl font-semibold">Notice of Extraordinary General Meeting</span>
                </button>
                <div x-show="open" x-transition class="space-y-2 pl-4">
                    @foreach($eogm as $doc)
                        @if($doc->file)
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

            {{-- WEBSITE COMPLIANCE --}}
            @if($compliance->count() > 0)
            <div class="mb-8" x-data="{ open: true }">
                <button @click="open = !open"
                    class="flex items-center gap-3 text-gray-400 mb-6">
                    <span x-text="open ? '−' : '+'" class="text-xl font-bold"></span>
                    <span class="text-xl font-semibold">Website Compliance Certificate</span>
                </button>
                <div x-show="open" x-transition class="space-y-2 pl-4">
                    @foreach($compliance as $doc)
                        @if($doc->file)
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

            {{-- CORPORATE BRIEFING --}}
            @if($briefing->count() > 0)
            <div class="mb-8" x-data="{ open: true }">
                <button @click="open = !open"
                    class="flex items-center gap-3 text-gray-400 mb-6">
                    <span x-text="open ? '−' : '+'" class="text-xl font-bold"></span>
                    <span class="text-xl font-semibold">Corporate Briefing Session</span>
                </button>
                <div x-show="open" x-transition class="space-y-2 pl-4">
                    @foreach($briefing as $doc)
                        @if($doc->file)
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
