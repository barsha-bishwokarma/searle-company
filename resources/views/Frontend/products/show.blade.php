<x-frontend-layout>
    <div class="max-w-7xl mx-auto bg-white px-6 py-10">
        <div class="flex gap-10">

            <div class="w-80 flex-shrink-0">
                <h2 class="text-3xl font-light text-gray-700 mb-6">Categories</h2>
                <ul>
                    @foreach ($categories as $category)
                        <li x-data="{ open: false }" class="border-b border-gray-200">

                            <div class="flex items-center justify-between py-4">
                                <a href="{{ route('products.index', ['cat' => $category->slug]) }}"
                                    class="text-base font-semibold text-gray-500 hover:text-blue-900 transition">
                                    {{ $category->name }}
                                </a>
                                @if ($category->children->count() > 0)
                                    <button @click="open = !open"
                                        class="w-7 h-7 rounded-full border border-gray-300 flex items-center justify-center
                                   text-gray-400 hover:border-blue-900 hover:text-blue-900 transition flex-shrink-0">
                                        <span x-text="open ? '−' : '+'" class="text-sm font-bold leading-none"></span>
                                    </button>
                                @endif
                            </div>

                            @if ($category->children->count() > 0)
                                <ul x-show="open" x-transition class="pb-2 pl-2">
                                    @foreach ($category->children as $sub)
                                        <li>
                                            <a href="{{ route('products.index', ['cat' => $sub->slug]) }}"
                                                class="block py-2 text-sm text-gray-400 hover:text-blue-900 transition">
                                                {{ $sub->name }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif

                        </li>
                    @endforeach
                </ul>
            </div>

        
            <div class="flex-1">
                <div class="flex flex-col md:flex-row gap-10">

                    {{-- Product Image --}}
                    <div class="w-full md:w-64 flex-shrink-0">
                        <div
                            class="bg-gray-50 border border-gray-100 rounded p-6 flex items-center justify-center h-64">
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                                class="h-full object-contain">
                        </div>

                        @if ($product->pdf)
                            <a href="{{ asset('storage/' . $product->pdf) }}" target="_blank"
                                class="mt-4 w-full flex items-center justify-center gap-2
                               bg-blue-900 text-white px-4 py-3 rounded
                               hover:bg-blue-800 transition text-sm font-semibold">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                </svg>
                                Download SPC
                            </a>
                        @endif
                    </div>

                    
                    <div class="flex-1">

                        {{-- Title --}}
                        <div class="flex items-center gap-4 mb-8">
                            <h1 class="text-3xl font-light text-gray-700">{{ $product->name }}</h1>
                            <div class="flex-1 h-px bg-gray-300"></div>
                        </div>

        
                        <table class="w-full text-sm">

                            @if ($product->generic)
                                <tr class="border-b border-gray-100">
                                    <td class="py-3 pr-6 font-semibold text-gray-500 w-36">Generic</td>
                                    <td class="py-3 text-gray-700">{{ $product->generic }}</td>
                                </tr>
                            @endif

                            @if ($product->ingredients)
                                <tr class="border-b border-gray-100">
                                    <td class="py-3 pr-6 font-semibold text-gray-500 w-36">Ingredients</td>
                                    <td class="py-3 text-gray-700">{{ $product->ingredients }}</td>
                                </tr>
                            @endif

                            @if ($product->form)
                                <tr class="border-b border-gray-100">
                                    <td class="py-3 pr-6 font-semibold text-gray-500 w-36">Form</td>
                                    <td class="py-3 text-gray-700">{{ $product->form }}</td>
                                </tr>
                            @endif

                            @if ($product->strength)
                                <tr class="border-b border-gray-100">
                                    <td class="py-3 pr-6 font-semibold text-gray-500 w-36">Strength</td>
                                    <td class="py-3 text-gray-700">{{ $product->strength }}</td>
                                </tr>
                            @endif

                            @if ($product->presentation)
                                <tr class="border-b border-gray-100">
                                    <td class="py-3 pr-6 font-semibold text-gray-500 w-36">Presentation</td>
                                    <td class="py-3 text-gray-700">{{ $product->presentation }}</td>
                                </tr>
                            @endif

                            @if ($product->indication)
                                <tr class="border-b border-gray-100">
                                    <td class="py-3 pr-6 font-semibold text-gray-500 w-36">Indication</td>
                                    <td class="py-3 text-gray-700">{{ $product->indication }}</td>
                                </tr>
                            @endif

                            @if ($product->uses)
                                <tr class="border-b border-gray-100">
                                    <td class="py-3 pr-6 font-semibold text-gray-500 w-36">Uses</td>
                                    <td class="py-3 text-gray-700">{{ $product->uses }}</td>
                                </tr>
                            @endif

                            <tr class="border-b border-gray-100">
                                <td class="py-3 pr-6 font-semibold text-gray-500 w-36">Category</td>
                                <td class="py-3 text-gray-700">{{ $product->category->name }}</td>
                            </tr>

                        </table>

                    </div>
                </div>
            </div>

        </div>
    </div>

</x-frontend-layout>
