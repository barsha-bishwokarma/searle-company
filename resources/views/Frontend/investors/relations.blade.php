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
                <div class="flex items-center gap-4 mb-4 sm:mb-6">
                    <h1
                        class="text-lg sm:text-2xl lg:text-3xl font-medium text-black border border-black py-2 px-3 sm:px-4 tracking-wide whitespace-nowrap">
                        Investor's Relations
                    </h1>
                    <div class="flex-1 h-px bg-gray-300 hidden sm:block"></div>
                </div>

                {{-- INVESTOR QUERIES FORM --}}
                <div class="mb-3 sm:mb-4 border-b border-gray-100 pb-3 sm:pb-4" x-data="{ open: true }">
                    <button @click="open = !open"
                        class="flex items-center gap-3 text-gray-400 mb-2 sm:mb-3 w-full text-left hover:text-blue-900 transition">
                        <span x-text="open ? '−' : '+'" class="text-xl font-bold shrink-0"></span>
                        <span class="text-base sm:text-xl font-semibold">Investor queries</span>
                    </button>
                    <div x-show="open" x-transition>
                        <form action="{{ route('investors.query.submit') }}" method="POST" class="space-y-3">
                            @csrf
                            <input type="text" name="name" placeholder="Names*"
                                class="w-full border border-gray-400 px-3 py-2 text-sm focus:outline-none focus:border-blue-500" />
                            <input type="text" name="organization" placeholder="Organization"
                                class="w-full border border-gray-400 px-3 py-2 text-sm focus:outline-none focus:border-blue-500" />
                            <input type="text" name="postal_address" placeholder="Postal Address"
                                class="w-full border border-gray-400 px-3 py-2 text-sm focus:outline-none focus:border-blue-500" />
                            <input type="text" name="city" placeholder="City*"
                                class="w-full border border-gray-400 px-3 py-2 text-sm focus:outline-none focus:border-blue-500" />
                            <input type="text" name="postal_zip" placeholder="Postal / Zip Code"
                                class="w-full border border-gray-400 px-3 py-2 text-sm focus:outline-none focus:border-blue-500" />
                            <input type="text" name="country" placeholder="Country"
                                class="w-full border border-gray-400 px-3 py-2 text-sm focus:outline-none focus:border-blue-500" />
                            <input type="email" name="email" placeholder="Email*"
                                class="w-full border border-gray-400 px-3 py-2 text-sm focus:outline-none focus:border-blue-500" />
                            <input type="text" name="telephone" placeholder="Telephone*"
                                class="w-full border border-gray-400 px-3 py-2 text-sm focus:outline-none focus:border-blue-500" />
                            <input type="text" name="fax" placeholder="Fax"
                                class="w-full border border-gray-400 px-3 py-2 text-sm focus:outline-none focus:border-blue-500" />
                            <input type="text" name="url" placeholder="Url"
                                class="w-full border border-gray-400 px-3 py-2 text-sm focus:outline-none focus:border-blue-500" />
                            <input type="text" name="interest" placeholder="Interest"
                                class="w-full border border-gray-400 px-3 py-2 text-sm focus:outline-none focus:border-blue-500" />
                            <textarea name="message" placeholder="Message" rows="6"
                                class="w-full border border-gray-400 px-3 py-2 text-sm focus:outline-none focus:border-blue-500 resize-y"></textarea>
                            <div>
                                <button type="submit"
                                    class="bg-white border border-gray-400 px-6 py-2 text-sm text-gray-700 hover:bg-gray-100 transition">
                                    Submit
                                </button>
                            </div>
                        </form>

                        {{-- SECP Notice --}}
                        <div class="mt-4 text-xs text-gray-500 leading-relaxed">
                            <p>In case your complaint has not been properly redressed by us, you may lodge your
                                complaint with Securities and Exchange Commission of Pakistan ( the "SECP"). However,
                                please note that SECP will entertain only those complaints which were at first directly
                                requested to be redressed by the company and the company has failed to redress the same.
                                Further, the complaints that are not relevant to SECP's regulatory domain/competence
                                shall not be entertained by the SECP.</p>
                        </div>

                        {{-- SECP Banner --}}
                        <div class="mt-3">
                            <img src="https://searlecompany.com/wp-content/uploads/2022/03/sdmslogo.png"
                                alt="SECP - Securities and Exchange Commission of Pakistan" class="w-full max-w-sm" />
                        </div>
                    </div>
                </div>

                {{-- NOTICE OF AGM --}}
                @if ($agm->count() > 0)
                    <div class="mb-3 sm:mb-4 border-b border-gray-100 pb-3 sm:pb-4" x-data="{ open: true }">
                        <button @click="open = !open"
                            class="flex items-center gap-3 text-gray-400 mb-2 sm:mb-3 w-full text-left hover:text-blue-900 transition">
                            <span x-text="open ? '−' : '+'" class="text-xl font-bold shrink-0"></span>
                            <span class="text-base sm:text-xl font-semibold">Notice of Annual General Meeting</span>
                        </button>
                        <div x-show="open" x-transition class="space-y-3 pl-4">
                            @foreach ($agm as $doc)
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

                {{-- NOTICE OF EOGM --}}
                @if ($eogm->count() > 0)
                    <div class="mb-3 sm:mb-4 border-b border-gray-100 pb-3 sm:pb-4" x-data="{ open: true }">
                        <button @click="open = !open"
                            class="flex items-center gap-3 text-gray-400 mb-2 sm:mb-3 w-full text-left hover:text-blue-900 transition">
                            <span x-text="open ? '−' : '+'" class="text-xl font-bold shrink-0"></span>
                            <span class="text-base sm:text-xl font-semibold">Notice of Extraordinary General
                                Meeting</span>
                        </button>
                        <div x-show="open" x-transition class="space-y-3 pl-4">
                            @foreach ($eogm as $doc)
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
                                                d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 002 2z" />
                                        </svg>
                                        {{ $doc->title }} ({{ $doc->language == 'en' ? 'English' : 'Urdu' }})
                                    </span>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endif

                {{-- WEBSITE COMPLIANCE --}}
                @if ($compliance->count() > 0)
                    <div class="mb-3 sm:mb-4 border-b border-gray-100 pb-3 sm:pb-4" x-data="{ open: true }">
                        <button @click="open = !open"
                            class="flex items-center gap-3 text-gray-400 mb-2 sm:mb-3 w-full text-left hover:text-blue-900 transition">
                            <span x-text="open ? '−' : '+'" class="text-xl font-bold shrink-0"></span>
                            <span class="text-base sm:text-xl font-semibold">Website Compliance Certificate</span>
                        </button>
                        <div x-show="open" x-transition class="space-y-3 pl-4">
                            @foreach ($compliance as $doc)
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
                                                d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 002 2z" />
                                        </svg>
                                        {{ $doc->title }} ({{ $doc->language == 'en' ? 'English' : 'Urdu' }})
                                    </span>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endif

                {{-- CORPORATE BRIEFING --}}
                @if ($briefing->count() > 0)
                    <div class="mb-3 sm:mb-4" x-data="{ open: true }">
                        <button @click="open = !open"
                            class="flex items-center gap-3 text-gray-400 mb-2 sm:mb-3 w-full text-left hover:text-blue-900 transition">
                            <span x-text="open ? '−' : '+'" class="text-xl font-bold shrink-0"></span>
                            <span class="text-base sm:text-xl font-semibold">Corporate Briefing Session</span>
                        </button>
                        <div x-show="open" x-transition class="space-y-3 pl-4">
                            @foreach ($briefing as $doc)
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
                                                d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 002 2z" />
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
