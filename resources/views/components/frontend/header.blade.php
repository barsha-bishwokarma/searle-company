<header class="sticky top-0 z-50 bg-white shadow">

    {{-- Top Header --}}
    <div class="py-4 lg:py-6 border-b border-gray-200">
        <div class="max-w-6xl mx-auto px-4 flex items-center justify-between">

            {{-- Logo --}}
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/searle-logo-1.png') }}" alt="searle_logo" class="h-8 w-auto object-contain">
            </a>

            {{-- Desktop Contact Info --}}
            <div class="hidden lg:flex items-center gap-8">

                <div class="flex items-center gap-2">
                    <div class="bg-gray-300 h-8 w-8 rounded-full flex justify-center items-center">
                        <i class="fa-solid fa-envelope"></i>
                    </div>

                    <div class="tracking-tight leading-3">
                        <p class="text-black text-[12px] font-bold">
                            info@searlecompany.com
                        </p>

                        <p class="text-gray-500 text-[10px]">
                            Email
                        </p>
                    </div>
                </div>

                <div class="flex items-center gap-2">
                    <div class="bg-gray-300 h-8 w-8 rounded-full flex justify-center items-center">
                        <i class="fa-solid fa-phone"></i>
                    </div>

                    <div class="tracking-tight leading-3">
                        <p class="text-black text-[12px] font-bold">
                            +92 21 371 70 200-201
                        </p>

                        <p class="text-gray-500 text-[10px]">
                            Phone
                        </p>
                    </div>
                </div>

                <div class="flex items-center gap-2">
                    <div class="bg-gray-300 h-8 w-8 rounded-full flex justify-center items-center">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>

                    <div class="tracking-tight leading-3">
                        <p class="text-black text-[12px] font-bold">
                            One IBL Centre - Karachi
                        </p>

                        <p class="text-gray-500 text-[10px]">
                            Address
                        </p>
                    </div>
                </div>

            </div>

            {{-- Mobile Hamburger --}}
            <button id="mobile-menu-btn" class="lg:hidden text-2xl text-gray-700">
                <i class="fa-solid fa-bars"></i>
            </button>

        </div>
    </div>

    {{-- Navbar --}}
    <div class="border-t border-gray-200 shadow-xl">
        <nav class="max-w-6xl mx-auto px-4">

            {{-- Desktop Menu --}}
            <ul class="hidden lg:flex items-center gap-4">

                {{-- Home --}}
                <li class="flex items-center">
                    <span class="h-4 border-l border-gray-300"></span>

                    <a href="{{ route('home') }}"
                        class="px-4 py-3 text-sm text-gray-500 font-bold uppercase hover:text-[var(--secondary-color)]">
                        Home
                    </a>
                </li>

                {{-- About --}}
                <li class="flex items-center relative group">
                    <span class="h-4 border-l border-gray-300"></span>

                    <a href="{{ route('about.ceo') }}"
                        class="px-4 py-3 text-sm text-gray-500 font-bold uppercase hover:text-[var(--secondary-color)] flex items-center gap-1">

                        About Us

                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </a>

                    <div
                        class="absolute top-full left-0 w-64 bg-white border border-gray-200 shadow-xl opacity-0 invisible translate-y-2 group-hover:translate-y-0 group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">

                        <ul class="py-2 text-gray-700">

                            <li><a href="{{ route('about.ceo') }}" class="block px-4 py-2 text-sm hover:bg-gray-100">CEO
                                    Message</a></li>

                            <li><a href="{{ route('about.ibl') }}" class="block px-4 py-2 text-sm hover:bg-gray-100">IBL
                                    Group Companies</a></li>

                            <li><a href="{{ route('about.history') }}"
                                    class="block px-4 py-2 text-sm hover:bg-gray-100">History</a></li>

                            <li><a href="{{ route('about.mission') }}"
                                    class="block px-4 py-2 text-sm hover:bg-gray-100">Mission, Vision &
                                    Values</a></li>

                            <li><a href="{{ route('about.facilities') }}"
                                    class="block px-4 py-2 text-sm hover:bg-gray-100">Manufacturing
                                    Facilities</a></li>

                            <li><a href="{{ route('about.csr') }}"
                                    class="block px-4 py-2 text-sm hover:bg-gray-100">Corporate Social
                                    Responsibility</a></li>

                            <li><a href="{{ route('about.global') }}"
                                    class="block px-4 py-2 text-sm hover:bg-gray-100">Global Business</a></li>

                            <li><a href="{{ route('about.policies') }}"
                                    class="block px-4 py-2 text-sm hover:bg-gray-100">Policies /
                                    Certifications</a></li>

                        </ul>
                    </div>
                </li>

                {{-- Products --}}
                <li class="flex items-center relative group">
                    <span class="h-4 border-l border-gray-300"></span>

                    <a href="{{ route('products.index') }}"
                        class="px-4 py-3 text-sm text-gray-500 font-bold uppercase hover:text-[var(--secondary-color)] flex items-center gap-1">

                        Products

                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </a>

                    <div
                        class="absolute top-full left-0 w-64 bg-white border border-gray-200 shadow-xl opacity-0 invisible translate-y-2 group-hover:translate-y-0 group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">

                        <ul class="py-2 text-gray-700">

                            @foreach ($navCategories as $category)
                                <li>
                                    <a href="{{ route('products.index', ['cat' => $category->slug]) }}"
                                        class="block px-4 py-2 text-sm hover:bg-gray-100">
                                        {{ $category->name }}
                                    </a>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </li>

                {{-- Investors --}}
                <li class="flex items-center relative group">
                    <span class="h-4 border-l border-gray-300"></span>

                    <a href="{{ route('investors.profile') }}"
                        class="px-4 py-3 text-sm text-gray-500 font-bold uppercase hover:text-[var(--secondary-color)] flex items-center gap-1">

                        Investors

                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </a>

                    <div
                        class="absolute top-full left-0 w-64 bg-white border border-gray-200 shadow-xl opacity-0 invisible translate-y-2 group-hover:translate-y-0 group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">

                        <ul class="py-2 text-gray-700">

                            <li><a href="{{ route('investors.profile') }}"
                                    class="block px-4 py-2 text-sm hover:bg-gray-100">Profile Of Company</a>
                            </li>

                            <li><a href="{{ route('investors.governance') }}"
                                    class="block px-4 py-2 text-sm hover:bg-gray-100">Governance</a></li>

                            <li><a href="{{ route('investors.relations') }}"
                                    class="block px-4 py-2 text-sm hover:bg-gray-100">Investor's
                                    Relations</a></li>

                            <li><a href="{{ route('investors.media') }}"
                                    class="block px-4 py-2 text-sm hover:bg-gray-100">Media</a></li>

                            <li><a href="{{ route('investors.information') }}"
                                    class="block px-4 py-2 text-sm hover:bg-gray-100">Investor
                                    Information</a></li>

                        </ul>
                    </div>
                </li>

                {{-- Links --}}
                @php
                    $links = [
                        ['route' => 'partners.index', 'label' => 'Partners'],
                        ['route' => 'news.index', 'label' => 'News'],
                        ['route' => 'careers.index', 'label' => 'Careers'],
                        ['route' => 'contact.index', 'label' => 'Contact'],
                        ['route' => 'drugs.index', 'label' => 'Drug safety'],
                    ];
                @endphp

                @foreach ($links as $link)
                    <li class="flex items-center">
                        <span class="h-4 border-l border-gray-300"></span>

                        <a href="{{ route($link['route']) }}"
                            class="px-4 py-3 text-sm text-gray-500 font-bold uppercase hover:text-[var(--secondary-color)]">
                            {{ $link['label'] }}
                        </a>
                    </li>
                @endforeach

            </ul>

            {{-- Mobile Menu --}}
            <div id="mobile-menu" class="hidden lg:hidden py-4 border-t border-gray-200">

                <ul class="flex flex-col gap-2">

                    <li>
                        <a href="{{ route('home') }}"
                            class="block py-2 text-sm font-semibold text-gray-600 uppercase">
                            Home
                        </a>
                    </li>

                    {{-- About --}}
                    <li>
                        <details>
                            <summary
                                class="flex justify-between items-center py-2 text-sm font-semibold text-gray-600 uppercase cursor-pointer list-none">
                                About Us
                                <i class="fa-solid fa-chevron-down text-xs"></i>
                            </summary>

                            <ul class="pl-4 mt-2 space-y-2">

                                <li><a href="{{ route('about.ceo') }}" class="text-sm text-gray-500">CEO Message</a>
                                </li>

                                <li><a href="{{ route('about.ibl') }}" class="text-sm text-gray-500">IBL Group
                                        Companies</a>
                                </li>

                                <li><a href="{{ route('about.history') }}" class="text-sm text-gray-500">
                                        History</a>
                                </li>

                                <li><a href="{{ route('about.mission') }}" class="text-sm text-gray-500">Mission,
                                        Vision & Values</a>
                                </li>

                                <li><a href="{{ route('about.facilities') }}"
                                        class="text-sm text-gray-500">Manufacturing Facilities</a>
                                </li>

                                <li><a href="{{ route('about.csr') }}" class="text-sm text-gray-500">Corporate Social
                                        Resposibility</a></li>

                                <li><a href="{{ route('about.global') }}" class="text-sm text-gray-500">Global
                                        Business</a>
                                </li>

                                <li><a href="{{ route('about.policies') }}"
                                        class="text-sm text-gray-500">Policies/Certifications</a>
                                </li>

                            </ul>
                        </details>
                    </li>

                    {{-- Products --}}
                    <li>
                        <details>
                            <summary
                                class="flex justify-between items-center py-2 text-sm font-semibold text-gray-600 uppercase cursor-pointer list-none">
                                Products
                                <i class="fa-solid fa-chevron-down text-xs"></i>
                            </summary>

                            <ul class="pl-4 mt-2 space-y-2">

                                @foreach ($navCategories as $category)
                                    <li>
                                        <a href="{{ route('products.index', ['cat' => $category->slug]) }}"
                                            class="text-sm text-gray-500">
                                            {{ $category->name }}
                                        </a>
                                    </li>
                                @endforeach

                            </ul>
                        </details>
                    </li>

                    {{-- Investors --}}
                    <li>
                        <details>
                            <summary
                                class="flex justify-between items-center py-2 text-sm font-semibold text-gray-600 uppercase cursor-pointer list-none">
                                Investors
                                <i class="fa-solid fa-chevron-down text-xs"></i>
                            </summary>

                            <ul class="pl-4 mt-2 space-y-2">

                                <li><a href="{{ route('investors.profile') }}" class="text-sm text-gray-500">Profile
                                        Of Company</a></li>

                                <li><a href="{{ route('investors.governance') }}"
                                        class="text-sm text-gray-500">Governance</a></li>

                                <li><a href="{{ route('investors.relations') }}"
                                        class="text-sm text-gray-500">Investor's Relations</a></li>

                                <li><a href="{{ route('investors.media') }}" class="text-sm text-gray-500">Media</a>
                                </li>

                                <li><a href="{{ route('investors.information') }}"
                                        class="text-sm text-gray-500">Investor Information</a></li>

                            </ul>
                        </details>
                    </li>

                    {{-- Other Links --}}
                    @foreach ($links as $link)
                        <li>
                            <a href="{{ route($link['route']) }}"
                                class="block py-2 text-sm font-semibold text-gray-600 uppercase">
                                {{ $link['label'] }}
                            </a>
                        </li>
                    @endforeach

                </ul>
            </div>

        </nav>
    </div>
</header>

<script>
    const menuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    menuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>
