<header class="sticky top-0 z-50">
    <div class="py-6 bg-white border-b border-gray-200">
        <div class="max-w-6xl mx-auto mt-2 flex justify-between items-center">
            <a href="">
                <img src="{{ asset('images/searle-logo-1.png') }}" alt="searle" class="h-8 w-auto object-contain">
            </a>

            <div class="flex items-center gap-8">
                <div class="flex items-center gap-2">
                    <div class="bg-gray-300 h-8 w-8 rounded-full flex justify-center items-center"><i
                            class="fa-solid fa-envelope"></i></div>
                    <div class="tracking-tight leading-3">
                        <p class="text-black text-[12px] font-bold">info@searlecompany.com</p>
                        <p class="text-gray-500 text-[10px]">Email</p>
                    </div>
                </div>

                <div class="flex items-center gap-2">
                    <div class="bg-gray-300 h-8 w-8 rounded-full flex items-center justify-center"><i
                            class="fa-solid fa-phone"></i></div>
                    <div class="tracking-tight leading-3">
                        <p class="text-black text-[12px] font-bold">+92 21 371 70 200-201</p>
                        <p class="text-gray-500 text-[10px]">Phone</p>
                    </div>
                </div>

                <div class="flex items-center gap-2">
                    <div class="bg-gray-300 h-8 w-8 rounded-full flex items-center justify-center"><i
                            class="fa-solid fa-location-dot"></i></div>
                    <div class="tracking-tight leading-3">
                        <p class="text-black text-[12px] font-bold">One IBL Centre - Karachi</p>
                        <p class="text-gray-500 text-[10px]">Address</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white border-t border-gray-200 shadow-2xl">
        <nav class="max-w-6xl mx-auto mt-2 ">
            <ul class="flex items-center gap-4">

                <li class="flex items-center">
                    <span class="h-4 border-l border-gray-300"></span>
                    <a class="px-4 py-3 text-sm text-gray-500 font-bold uppercase hover:text-[var(--secondary-color)]"
                        href="{{ route('home') }}">Home</a>
                </li>

                <!-- repeat pattern -->
                <li class="flex items-center">
                    <span class="h-4 border-l border-gray-300"></span>
                    <a class="px-4 py-3 text-sm text-gray-500 font-bold uppercase hover:text-[var(--secondary-color)]"
                        href="{{ route('about') }}">About us</a>
                </li>

                <li class="flex items-center relative group">
                    <span class="h-4 border-l border-gray-300"></span>
                    <button
                        class="px-4 py-3 text-sm text-gray-500 font-bold uppercase hover:text-[var(--secondary-color)] flex items-center gap-1">
                        Products
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <div
                        class="absolute top-full left-0 mt-0 w-64 bg-white border border-gray-200 shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                        <ul class="py-2 text-gray-700">
                            @foreach ($navCategories as $category)
                                <li>
                                    <a href="{{ route('products.show', $category->slug) }}"
                                        class="block px-4 py-2 text-sm hover:bg-gray-100">
                                        {{ $category->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                </li>

                <li class="flex items-center relative group">
                    <span class="h-4 border-l border-gray-300"></span>
                    <button
                        class="px-4 py-3 text-sm text-gray-500 font-bold uppercase hover:text-[var(--secondary-color)] flex items-center gap-1">
                        Investors
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <div
                        class="absolute top-full left-0 mt-0 w-64 bg-white border border-gray-200 shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                        <ul class="py-2 text-gray-700">
                            <li>
                                <a href="{{ route('investors.profile') }}"
                                    class="block px-4 py-2 text-sm hover:bg-gray-100">
                                    Profile Of Company
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('investors.governance') }}"
                                    class="block px-4 py-2 text-sm hover:bg-gray-100">
                                    Governance
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('investors.relations') }}"
                                    class="block px-4 py-2 text-sm hover:bg-gray-100">
                                    Investor's Relations
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('investors.media') }}"
                                    class="block px-4 py-2 text-sm hover:bg-gray-100">
                                    Media
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('investors.information') }}"
                                    class="block px-4 py-2 text-sm hover:bg-gray-100">
                                    Investor Information
                                </a>
                            </li>
                        </ul>
                    </div>

                </li>


                <li class="flex items-center">
                    <span class="h-4 border-l border-gray-300"></span>
                    <a class="px-4 py-3 text-sm text-gray-500 font-bold uppercase hover:text-[var(--secondary-color)]"
                        href="">Partners</a>
                </li>

                <li class="flex items-center">
                    <span class="h-4 border-l border-gray-300"></span>
                    <a class="px-4 py-3 text-sm text-gray-500 font-bold uppercase hover:text-[var(--secondary-color)]"
                        href="">News</a>
                </li>

                <li class="flex items-center">
                    <span class="h-4 border-l border-gray-300"></span>
                    <a class="px-4 py-3 text-sm text-gray-500 font-bold uppercase hover:text-[var(--secondary-color)]"
                        href="">Careers</a>
                </li>

                <li class="flex items-center">
                    <span class="h-4 border-l border-gray-300"></span>
                    <a class="px-4 py-3 text-sm text-gray-500 font-bold uppercase hover:text-[var(--secondary-color)]"
                        href="">Contact</a>
                </li>

                <li class="flex items-center">
                    <span class="h-4 border-l border-gray-300"></span>
                    <a class="px-4 py-3 text-sm text-gray-500 font-bold uppercase hover:text-[var(--secondary-color)]"
                        href="">Drug safety</a>
                </li>

                <!-- search -->
                <li class="flex items-center">
                    <span class="h-4 border-l border-gray-300"></span>
                    <i class="fa-solid fa-magnifying-glass px-4 py-3 text-gray-500"></i>
                </li>

            </ul>
        </nav>
    </div>
</header>
