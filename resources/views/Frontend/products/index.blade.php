<x-frontend-layout>
    <div class="max-w-7xl mx-auto bg-white px-6 py-10">
        <div class="flex gap-10">

            {{-- LEFT SIDEBAR --}}
            <div class="w-80 flex-shrink-0">

                <h2 class="text-3xl font-light text-gray-700 mb-6">Categories</h2>

                <ul>
                    @foreach ($categories as $category)
                        <li x-data="{ open: {{ $selectedCat == $category->slug ? 'true' : 'false' }} }" class="border-b border-gray-200">

                            {{-- Main Category Row --}}
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

                            {{-- Sub Categories --}}
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
 
            <div class="flex-1">

                @if ($products->count() > 0)
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach ($products as $product)
                            <a href="{{ route('products.show', $product->slug) }}"
                                class="group block rounded overflow-hidden hover:shadow-xl transition duration-300">

                                {{-- Product Image --}}
                                <div class="bg-gray-50 h-56 flex items-center justify-center overflow-hidden">
                                    <img src="{{ asset(Storage::url($product->image)) }}" alt="{{ $product->name }}"
                                        class="h-full w-full object-contain p-4
                                   group-hover:scale-105 transition duration-300">
                                </div>

                                {{-- Product Name --}}
                                <div class="bg-blue-900 px-5 py-4">
                                    <h3 class="text-white font-semibold text-base">
                                        {{ $product->name }}
                                    </h3>
                                </div>

                            </a>
                        @endforeach
                    </div>
                @else
                    <div class="flex items-center justify-center h-64 text-gray-400">
                        <p class="text-xl">No products found in this category.</p>
                    </div>
                @endif

            </div>

        </div>
    </div>
</x-frontend-layout>
