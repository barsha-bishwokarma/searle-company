<x-frontend.layout>
    <div class="max-w-6xl mx-auto bg-white px-4 sm:px-6 py-6 sm:py-10">
        <div class="flex flex-col lg:flex-row gap-8 lg:gap-10">

            <div class="lg:hidden mb-6">
                 <h2 class="text-2xl font-bold text-gray-700 mb-4">Categories</h2>

                <div class="space-y-3">

                    @foreach ($categories as $category)
                        <div x-data="{ open: false }"
                            class="border border-gray-200 rounded-xl overflow-hidden bg-white shadow-sm">

                            {{-- Parent Category --}}
                            <div class="flex items-center justify-between px-4 py-3">

                                <a href="{{ route('products.index', ['cat' => $category->slug]) }}"
                                    class="text-sm font-semibold transition
                        text-gray-700 hover:text-blue-900">
                                    {{ $category->name }}
                                </a>

                                @if ($category->children->count() > 0)
                                    <button @click="open = !open"
                                        class="w-7 h-7 rounded-full border border-gray-300
                            flex items-center justify-center text-gray-500">

                                        <span x-text="open ? '−' : '+'" class="text-sm font-bold leading-none">
                                        </span>

                                    </button>
                                @endif

                            </div>

                            {{-- Sub Categories --}}
                            @if ($category->children->count() > 0)
                                <div x-show="open" x-transition class="border-t border-gray-100 bg-gray-50 px-4 py-2">

                                    <div class="flex flex-col">

                                        @foreach ($category->children as $sub)
                                            <a href="{{ route('products.index', ['cat' => $sub->slug]) }}"
                                                class="py-2 text-sm text-gray-500
                                    hover:text-blue-900 transition">

                                                • {{ $sub->name }}

                                            </a>
                                        @endforeach

                                    </div>

                                </div>
                            @endif

                        </div>
                    @endforeach

                </div>

            </div>


            <div class="hidden lg:block w-72 xl:w-80 flex-shrink-0">
                <h2 class="text-3xl font-bold text-gray-700 mb-6">Categories</h2>
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


            <div class="flex-1 min-w-0">
                <div class="flex flex-col sm:flex-row gap-6 sm:gap-10">

                    <div class="w-full sm:w-56 md:w-64 flex-shrink-0">
                        <div
                            class="bg-gray-50 border border-gray-100 rounded p-6 flex items-center justify-center h-56 sm:h-64">
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                                class="h-full object-contain">
                        </div>

                        @if ($product->pdf)
                            <a href="{{ asset('storage/' . $product->pdf) }}" target="_blank"
                                class="mt-4 w-full flex items-center justify-center gap-2
                            bg-blue-900 text-white px-4 py-3 rounded
                            hover:bg-blue-800 transition text-sm font-semibold">
                                <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                </svg>
                                Download SPC
                            </a>
                        @endif
                    </div>


                    <div class="flex-1 min-w-0">


                        <div class="flex items-center gap-4 mb-6 sm:mb-8">
                            <h1 class="text-2xl sm:text-3xl font-light text-gray-700 leading-tight">
                                {{ $product->name }}
                            </h1>
                            <div class="flex-1 h-px bg-gray-300 hidden sm:block"></div>
                        </div>


                        <div
                            class="sm:hidden flex flex-col divide-y divide-gray-100 border border-gray-100 rounded-lg overflow-hidden">
                            @if ($product->generic)
                                <div class="px-4 py-3">
                                    <p class="text-xs font-semibold text-gray-400 uppercase tracking-wide mb-1">Generic
                                    </p>
                                    <p class="text-sm text-gray-700">{{ $product->generic }}</p>
                                </div>
                            @endif
                            @if ($product->ingredients)
                                <div class="px-4 py-3">
                                    <p class="text-xs font-semibold text-gray-400 uppercase tracking-wide mb-1">
                                        Ingredients</p>
                                    <p class="text-sm text-gray-700">{{ $product->ingredients }}</p>
                                </div>
                            @endif
                            @if ($product->form)
                                <div class="px-4 py-3">
                                    <p class="text-xs font-semibold text-gray-400 uppercase tracking-wide mb-1">Form</p>
                                    <p class="text-sm text-gray-700">{{ $product->form }}</p>
                                </div>
                            @endif
                            @if ($product->strength)
                                <div class="px-4 py-3">
                                    <p class="text-xs font-semibold text-gray-400 uppercase tracking-wide mb-1">Strength
                                    </p>
                                    <p class="text-sm text-gray-700">{{ $product->strength }}</p>
                                </div>
                            @endif
                            @if ($product->presentation)
                                <div class="px-4 py-3">
                                    <p class="text-xs font-semibold text-gray-400 uppercase tracking-wide mb-1">
                                        Presentation</p>
                                    <p class="text-sm text-gray-700">{{ $product->presentation }}</p>
                                </div>
                            @endif
                            @if ($product->indication)
                                <div class="px-4 py-3">
                                    <p class="text-xs font-semibold text-gray-400 uppercase tracking-wide mb-1">
                                        Indication</p>
                                    <p class="text-sm text-gray-700">{{ $product->indication }}</p>
                                </div>
                            @endif
                            @if ($product->uses)
                                <div class="px-4 py-3">
                                    <p class="text-xs font-semibold text-gray-400 uppercase tracking-wide mb-1">Uses</p>
                                    <p class="text-sm text-gray-700">{{ $product->uses }}</p>
                                </div>
                            @endif
                            <div class="px-4 py-3">
                                <p class="text-xs font-semibold text-gray-400 uppercase tracking-wide mb-1">Category</p>
                                <p class="text-sm text-gray-700">{{ $product->category->name }}</p>
                            </div>
                        </div>


                        <table class="hidden sm:table w-full text-sm">
                            @if ($product->generic)
                                <tr class="border-b border-gray-100">
                                    <td class="py-3 pr-6 font-semibold text-gray-500 w-36 align-top">Generic</td>
                                    <td class="py-3 text-gray-700">{{ $product->generic }}</td>
                                </tr>
                            @endif
                            @if ($product->ingredients)
                                <tr class="border-b border-gray-100">
                                    <td class="py-3 pr-6 font-semibold text-gray-500 w-36 align-top">Ingredients</td>
                                    <td class="py-3 text-gray-700">{{ $product->ingredients }}</td>
                                </tr>
                            @endif
                            @if ($product->form)
                                <tr class="border-b border-gray-100">
                                    <td class="py-3 pr-6 font-semibold text-gray-500 w-36 align-top">Form</td>
                                    <td class="py-3 text-gray-700">{{ $product->form }}</td>
                                </tr>
                            @endif
                            @if ($product->strength)
                                <tr class="border-b border-gray-100">
                                    <td class="py-3 pr-6 font-semibold text-gray-500 w-36 align-top">Strength</td>
                                    <td class="py-3 text-gray-700">{{ $product->strength }}</td>
                                </tr>
                            @endif
                            @if ($product->presentation)
                                <tr class="border-b border-gray-100">
                                    <td class="py-3 pr-6 font-semibold text-gray-500 w-36 align-top">Presentation</td>
                                    <td class="py-3 text-gray-700">{{ $product->presentation }}</td>
                                </tr>
                            @endif
                            @if ($product->indication)
                                <tr class="border-b border-gray-100">
                                    <td class="py-3 pr-6 font-semibold text-gray-500 w-36 align-top">Indication</td>
                                    <td class="py-3 text-gray-700">{{ $product->indication }}</td>
                                </tr>
                            @endif
                            @if ($product->uses)
                                <tr class="border-b border-gray-100">
                                    <td class="py-3 pr-6 font-semibold text-gray-500 w-36 align-top">Uses</td>
                                    <td class="py-3 text-gray-700">{{ $product->uses }}</td>
                                </tr>
                            @endif
                            <tr class="border-b border-gray-100">
                                <td class="py-3 pr-6 font-semibold text-gray-500 w-36 align-top">Category</td>
                                <td class="py-3 text-gray-700">{{ $product->category->name }}</td>
                            </tr>
                        </table>

                    </div>
                </div>
            </div>

        </div>
    </div>

</x-frontend.layout>
