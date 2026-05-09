<x-frontend.layout>
    <div class="max-w-6xl mx-auto bg-white px-4 sm:px-6 py-6 sm:py-10">

        {{-- Mobile Categories --}}
        <div class="lg:hidden mb-6">

            <h2 class="text-2xl font-bold text-gray-700 mb-4">Categories</h2>

            <div class="space-y-3">

                @foreach ($categories as $category)
                    <div x-data="{ open: {{ $selectedCat == $category->slug ? 'true' : 'false' }} }"
                        class="border border-gray-200 rounded-xl overflow-hidden bg-white shadow-sm">

                        {{-- Parent Category --}}
                        <div class="flex items-center justify-between px-4 py-3">

                            <a href="{{ route('products.index', ['cat' => $category->slug]) }}"
                                class="text-sm font-semibold transition
                            {{ $selectedCat == $category->slug ? 'text-blue-900' : 'text-gray-700 hover:text-blue-900' }}">
                                {{ $category->name }}
                            </a>

                            @if ($category->children->count() > 0)
                                <button @click="open = !open"
                                    class="w-7 h-7 rounded-full border border-gray-300 flex items-center justify-center text-gray-500">
                                    <span x-text="open ? '−' : '+'" class="text-sm font-bold leading-none"></span>
                                </button>
                            @endif

                        </div>

                        {{-- Sub Categories --}}
                        @if ($category->children->count() > 0)
                            <div x-show="open" x-transition class="border-t border-gray-100 bg-gray-50 px-4 py-2">

                                <div class="flex flex-col">

                                    @foreach ($category->children as $sub)
                                        <a href="{{ route('products.index', ['cat' => $sub->slug]) }}"
                                            class="py-2 text-sm transition
                                        {{ $selectedCat == $sub->slug ? 'text-blue-900 font-semibold' : 'text-gray-500 hover:text-blue-900' }}">
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

        <div class="flex gap-10">

            {{-- Desktop Sidebar --}}
            <div class="hidden lg:block w-72 xl:w-80 flex-shrink-0">
                <h2 class="text-3xl font-bold text-gray-700 mb-6">Categories</h2>

                <ul>
                    @foreach ($categories as $category)
                        <li x-data="{ open: {{ $selectedCat == $category->slug ? 'true' : 'false' }} }" class="border-b border-gray-200">

                            <div class="flex items-center justify-between py-4">

                                <a href="{{ route('products.index', ['cat' => $category->slug]) }}"
                                    class="text-base font-semibold transition
                                {{ $selectedCat == $category->slug ? 'text-blue-900' : 'text-gray-500 hover:text-blue-900' }}">
                                    {{ $category->name }}
                                </a>

                                @if ($category->children->count() > 0)
                                    <button @click="open = !open"
                                        class="w-7 h-7 rounded-full border border-gray-300 flex items-center
                                    justify-center text-gray-400 hover:border-blue-900
                                    hover:text-blue-900 transition flex-shrink-0">
                                        <span x-text="open ? '−' : '+'" class="text-sm font-bold leading-none"></span>
                                    </button>
                                @endif

                            </div>

                            @if ($category->children->count() > 0)
                                <ul x-show="open" x-transition class="pb-2 pl-2">

                                    @foreach ($category->children as $sub)
                                        <li>
                                            <a href="{{ route('products.index', ['cat' => $sub->slug]) }}"
                                                class="block py-2 text-sm transition
                                            {{ $selectedCat == $sub->slug ? 'text-blue-900 font-semibold' : 'text-gray-400 hover:text-blue-900' }}">
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

            {{-- Products --}}
            <div class="flex-1 min-w-0">

                @if ($products->count() > 0)

                    <div class="grid grid-cols-2 lg:grid-cols-3 gap-4">

                        @foreach ($products as $product)
                            <a href="{{ route('products.show', $product->slug) }}"
                                class="group block rounded overflow-hidden hover:shadow-xl transition duration-300">

                                <div class="bg-gray-50 h-40 sm:h-48 flex items-center justify-center overflow-hidden">

                                    <img src="{{ asset(Storage::url($product->image)) }}" alt="{{ $product->name }}"
                                        class="h-full w-full object-contain p-4
                                    group-hover:scale-105 transition duration-300">

                                </div>

                                <div class="bg-blue-900 px-5 py-4 h-12 flex items-center">
                                    <h3 class="text-white font-semibold text-sm leading-tight line-clamp-2">
                                        {{ $product->name }}
                                    </h3>
                                </div>

                            </a>
                        @endforeach

                    </div>
                @else
                    <div class="flex items-center justify-center h-48 sm:h-64 text-gray-400">
                        <p class="text-lg sm:text-xl">
                            No products found in this category.
                        </p>
                    </div>

                @endif

            </div>

        </div>
    </div>
</x-frontend.layout>
