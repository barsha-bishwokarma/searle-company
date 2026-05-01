<x-frontend-layout>
    <div class="max-w-5xl mx-auto px-6 py-16">

        @php
            $history = [
                [
                    'year' => '1887',
                    'text' =>
                        'Distributors since late 19th Century. Distributors for WD & HO Wills Cigarettes for the Indian Subcontinent based out of Delhi',
                    'side' => 'left',
                    'color' => 'bg-amber-400',
                    'dot' => 'border-amber-400',
                ],
                [
                    'year' => '1947',
                    'text' => 'Family moved its business headquarters to Karachi after partition',
                    'side' => 'right',
                    'color' => 'bg-orange-400',
                    'dot' => 'border-orange-400',
                ],
                [
                    'year' => '1962',
                    'text' =>
                        'Major Business Growth & Development under the name of United Distributors (Pvt) Limited (UDL); Distributors for companies like Unilever Pakistan, British American Tobacco, Bristol Myers Squibb, GlaxoSmithKline, Novartis, RJR Nabisco, Dow Chemicals, and New Zealand Dairy Board',
                    'side' => 'left',
                    'color' => 'bg-orange-600',
                    'dot' => 'border-orange-600',
                ],
                [
                    'year' => '1965',
                    'text' => 'Inception of Searle as G.D. Searle Co. USA',
                    'side' => 'right',
                    'color' => 'bg-red-600',
                    'dot' => 'border-red-600',
                ],
                [
                    'year' => '1991',
                    'text' =>
                        'Business name changed to International Brands (Pvt). Limited (IBL). IBL grew its network of distribution and extended its reach throughout the country, growing its sales from 8 million dollars to 363 million dollars. Established joint-ventures with Gillette, P&G, Unisys, Dow, FMC, Pioneer, and RJ Reynolds',
                    'side' => 'left',
                    'color' => 'bg-pink-600',
                    'dot' => 'border-pink-600',
                ],
                [
                    'year' => '1993',
                    'text' => 'IBL acquired G. D. Searle (Pakistan), under the control of the IBL Group',
                    'side' => 'right',
                    'color' => 'bg-purple-500',
                    'dot' => 'border-purple-500',
                ],
                [
                    'year' => '2019',
                    'text' => 'Acquisition of MSD, Vifor and Santen Business',
                    'side' => 'right',
                    'color' => 'bg-teal-500',
                    'dot' => 'border-teal-500',
                ],
                [
                    'year' => '2020',
                    'text' => 'Established Health & OTC Plant at SITE Area, Karachi',
                    'side' => 'left',
                    'color' => 'bg-teal-600',
                    'dot' => 'border-teal-600',
                ],
                [
                    'year' => '2021',
                    'text' => 'Successful launch of Markitt. Licensing agreement with Livzon for COVID-19 Vaccine',
                    'side' => 'right',
                    'color' => 'bg-blue-500',
                    'dot' => 'border-blue-500',
                ],
            ];
        @endphp

        <div class="relative">
            @foreach ($history as $index => $item)
                <div class="flex items-center justify-center mb-[-55px] relative"
                    style="z-index: {{ count($history) - $index }}">

                    @if ($item['side'] === 'left')
                        {{-- Left text --}}
                        <div class="w-80 text-right pr-6">
                            <p class="text-gray-500 text-sm leading-7">{{ $item['text'] }}</p>
                        </div>
                        {{-- Line + dot --}}
                        <div class="flex items-center flex-shrink-0">
                            <div class="w-16 h-px {{ str_replace('bg-', 'bg-', $item['color']) }} opacity-50"></div>
                            <div class="w-3 h-3 rounded-full border-2 {{ $item['dot'] }} bg-white flex-shrink-0"></div>
                        </div>
                        {{-- Diamond --}}
                        <div
                            class="w-44 h-44 {{ $item['color'] }} rotate-45 flex items-center justify-center flex-shrink-0 ml-2 rounded-lg">
                            <span class="-rotate-45 text-white text-2xl font-bold">{{ $item['year'] }}</span>
                        </div>
                        {{-- Right empty --}}
                        <div class="w-80"></div>
                    @else
                        {{-- Left empty --}}
                        <div class="w-80"></div>
                        {{-- Diamond --}}
                        <div
                            class="w-44 h-44 {{ $item['color'] }} rotate-45 flex items-center justify-center flex-shrink-0 mr-2 rounded-lg">
                            <span class="-rotate-45 text-white text-2xl font-bold">{{ $item['year'] }}</span>
                        </div>
                        {{-- Dot + line --}}
                        <div class="flex items-center flex-shrink-0">
                            <div class="w-3 h-3 rounded-full border-2 {{ $item['dot'] }} bg-white flex-shrink-0"></div>
                            <div class="w-16 h-px {{ $item['color'] }} opacity-50"></div>
                        </div>
                        {{-- Right text --}}
                        <div class="w-80 pl-6">
                            <p class="text-gray-500 text-sm leading-7">{{ $item['text'] }}</p>
                        </div>
                    @endif

                </div>
            @endforeach
        </div>

    </div>
</x-frontend-layout>
