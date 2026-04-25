<x-frontend-layout>

<div class="max-w-7xl mx-auto px-6 py-12">
    <div class="flex gap-8">

        {{-- LEFT SIDEBAR --}}
        <div class="w-72 flex-shrink-0">
            <ul class="border border-gray-200">

                <li>
                    <a href="{{ route('investors.profile') }}"
                        class="flex items-center gap-3 px-4 py-3 bg-blue-900 text-white font-semibold">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                        Profile of Company
                    </a>
                </li>

                <li>
                    <a href="{{ route('investors.governance') }}"
                        class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-blue-50 hover:text-blue-900 border-t border-gray-100 transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 10h18M3 6h18M3 14h18M3 18h18"/>
                        </svg>
                        Governance
                    </a>
                </li>

                <li>
                    <a href="{{ route('investors.relations') }}"
                        class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-blue-50 hover:text-blue-900 border-t border-gray-100 transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101"/>
                        </svg>
                        Investor Relations
                    </a>
                </li>

                <li>
                    <a href="{{ route('investors.media') }}"
                        class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-blue-50 hover:text-blue-900 border-t border-gray-100 transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        </svg>
                        Media
                    </a>
                </li>

                <li>
                    <a href="{{ route('investors.information') }}"
                        class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-blue-50 hover:text-blue-900 border-t border-gray-100 transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                        Investor Information
                    </a>
                </li>

            </ul>
        </div>

        {{-- RIGHT CONTENT --}}
        <div class="flex-1">

            {{-- Page Title --}}
            <div class="flex items-center gap-4 mb-8">
                <h1 class="text-3xl font-light text-gray-700">Profile of Company</h1>
                <div class="flex-1 h-px bg-gray-300"></div>
            </div>

            {{-- Accordion --}}
            <div x-data="{ open: true }">

                {{-- Accordion Header --}}
                <button @click="open = !open"
                    class="flex items-center gap-3 text-gray-400 mb-4 hover:text-blue-900 transition">
                    <span x-text="open ? '−' : '+'" class="text-xl font-bold"></span>
                    <span class="text-lg">Details of permissible business activities</span>
                </button>

                {{-- Accordion Content --}}
                <div x-show="open" x-transition class="text-gray-600 leading-8 space-y-4 text-justify">
                    <p>The main objective of the Company is to manufacture, process, refine, sell buy and deal in drugs,
                        drug sundries, chemical, gynecic, therapeutical, antibiotic, pharmaceutical, herbal,
                        bacteriological and biological products and presentations of all kinds and household, industrial,
                        patent and proprietary articles or every description.</p>

                    <p>To carry on business as manufacturing, dispensing and analytical chemists and druggists together
                        with all or any of the trades or business usually carried on in connection herewith and to
                        manufacture, import, export, produce, prepare, refine, buy, sell, manipulate and deal in all
                        kinds of contraceptive, sedatives, sanitary towels, rubber goods, baby products, salts, acids,
                        alkalies, medicines, medicame herbs, oils, detergents, disinfectants, insecticides, fungicides,
                        pub health products, plastics, textile and other related fabrics and mater synthetic fiber and
                        cotton fiber and the products made there from, perfumes, scents, powders, face powders, face
                        cream.</p>

                    <p>Public Listed Company Pakistan Stock Exchange (PSX: SEARL)</p>
                </div>

            </div>

        </div>

    </div>
</div>
</x-frontend-layout>