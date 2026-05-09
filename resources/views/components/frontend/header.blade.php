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
                        <p class="text-black text-[12px] font-bold">info@searlecompany.com</p>
                        <p class="text-gray-500 text-[10px]">Email</p>
                    </div>
                </div>

                <div class="flex items-center gap-2">
                    <div class="bg-gray-300 h-8 w-8 rounded-full flex justify-center items-center">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="tracking-tight leading-3">
                        <p class="text-black text-[12px] font-bold">+92 21 371 70 200-201</p>
                        <p class="text-gray-500 text-[10px]">Phone</p>
                    </div>
                </div>

                <div class="flex items-center gap-2">
                    <div class="bg-gray-300 h-8 w-8 rounded-full flex justify-center items-center">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="tracking-tight leading-3">
                        <p class="text-black text-[12px] font-bold">One IBL Centre - Karachi</p>
                        <p class="text-gray-500 text-[10px]">Address</p>
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
        <nav class="max-w-6xl mx-auto">

            {{-- Desktop Menu --}}
            <ul class="hidden lg:flex items-center gap-2">

                {{-- Home --}}
                <li class="flex items-center">

                    <a href="{{ route('home') }}"
                        class="px-4 py-3 text-sm font-bold uppercase transition
                        {{ request()->routeIs('home') ? 'text-[var(--secondary-color)]' : 'text-gray-500 hover:text-[var(--secondary-color)]' }}">
                        Home
                    </a>
                </li>

                {{-- About --}}
                <li class="flex items-center relative group">

                    <a href="{{ route('about.ceo') }}"
                        class="px-4 py-3 text-sm font-bold uppercase flex items-center gap-1 transition
                        {{ request()->routeIs('about.*') ? 'text-[var(--secondary-color)]' : 'text-gray-500 hover:text-[var(--secondary-color)]' }}">
                        About Us
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </a>
                    <div
                        class="absolute top-full left-0 w-64 bg-white border border-gray-200 shadow-xl opacity-0 invisible translate-y-2 group-hover:translate-y-0 group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                        <ul class="py-2 text-gray-700">
                            <li><a href="{{ route('about.ceo') }}"
                                    class="block px-4 py-2 text-sm hover:bg-gray-100 {{ request()->routeIs('about.ceo') ? 'text-[var(--secondary-color)] font-semibold' : '' }}">CEO
                                    Message</a></li>
                            <li><a href="{{ route('about.ibl') }}"
                                    class="block px-4 py-2 text-sm hover:bg-gray-100 {{ request()->routeIs('about.ibl') ? 'text-[var(--secondary-color)] font-semibold' : '' }}">IBL
                                    Group Companies</a></li>
                            <li><a href="{{ route('about.history') }}"
                                    class="block px-4 py-2 text-sm hover:bg-gray-100 {{ request()->routeIs('about.history') ? 'text-[var(--secondary-color)] font-semibold' : '' }}">History</a>
                            </li>
                            <li><a href="{{ route('about.mission') }}"
                                    class="block px-4 py-2 text-sm hover:bg-gray-100 {{ request()->routeIs('about.mission') ? 'text-[var(--secondary-color)] font-semibold' : '' }}">Mission,
                                    Vision & Values</a></li>
                            <li><a href="{{ route('about.facilities') }}"
                                    class="block px-4 py-2 text-sm hover:bg-gray-100 {{ request()->routeIs('about.facilities') ? 'text-[var(--secondary-color)] font-semibold' : '' }}">Manufacturing
                                    Facilities</a></li>
                            <li><a href="{{ route('about.csr') }}"
                                    class="block px-4 py-2 text-sm hover:bg-gray-100 {{ request()->routeIs('about.csr') ? 'text-[var(--secondary-color)] font-semibold' : '' }}">Corporate
                                    Social Responsibility</a></li>
                            <li><a href="{{ route('about.global') }}"
                                    class="block px-4 py-2 text-sm hover:bg-gray-100 {{ request()->routeIs('about.global') ? 'text-[var(--secondary-color)] font-semibold' : '' }}">Global
                                    Business</a></li>
                            <li><a href="{{ route('about.policies') }}"
                                    class="block px-4 py-2 text-sm hover:bg-gray-100 {{ request()->routeIs('about.policies') ? 'text-[var(--secondary-color)] font-semibold' : '' }}">Policies
                                    / Certifications</a></li>
                        </ul>
                    </div>
                </li>

                {{-- Products --}}
                <li class="flex items-center relative group">

                    <a href="{{ route('products.index') }}"
                        class="px-4 py-3 text-sm font-bold uppercase flex items-center gap-1 transition
                        {{ request()->routeIs('products.*') ? 'text-[var(--secondary-color)]' : 'text-gray-500 hover:text-[var(--secondary-color)]' }}">
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
                                        class="block px-4 py-2 text-sm hover:bg-gray-100
                                        {{ request()->query('cat') === $category->slug ? 'text-[var(--secondary-color)] font-semibold' : '' }}">
                                        {{ $category->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </li>

                {{-- Investors --}}
                <li class="flex items-center relative group">

                    <a href="{{ route('investors.profile') }}"
                        class="px-4 py-3 text-sm font-bold uppercase flex items-center gap-1 transition
                        {{ request()->routeIs('investors.*') ? 'text-[var(--secondary-color)]' : 'text-gray-500 hover:text-[var(--secondary-color)]' }}">
                        Investors
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </a>
                    <div
                        class="absolute top-full left-0 w-64 bg-white border border-gray-200 shadow-xl opacity-0 invisible translate-y-2 group-hover:translate-y-0 group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                        <ul class="py-2 text-gray-700">
                            <li><a href="{{ route('investors.profile') }}"
                                    class="block px-4 py-2 text-sm hover:bg-gray-100 {{ request()->routeIs('investors.profile') ? 'text-[var(--secondary-color)] font-semibold' : '' }}">Profile
                                    Of Company</a></li>
                            <li><a href="{{ route('investors.governance') }}"
                                    class="block px-4 py-2 text-sm hover:bg-gray-100 {{ request()->routeIs('investors.governance') ? 'text-[var(--secondary-color)] font-semibold' : '' }}">Governance</a>
                            </li>
                            <li><a href="{{ route('investors.relations') }}"
                                    class="block px-4 py-2 text-sm hover:bg-gray-100 {{ request()->routeIs('investors.relations') ? 'text-[var(--secondary-color)] font-semibold' : '' }}">Investor's
                                    Relations</a></li>
                            <li><a href="{{ route('investors.media') }}"
                                    class="block px-4 py-2 text-sm hover:bg-gray-100 {{ request()->routeIs('investors.media') ? 'text-[var(--secondary-color)] font-semibold' : '' }}">Media</a>
                            </li>
                            <li><a href="{{ route('investors.information') }}"
                                    class="block px-4 py-2 text-sm hover:bg-gray-100 {{ request()->routeIs('investors.information') ? 'text-[var(--secondary-color)] font-semibold' : '' }}">Investor
                                    Information</a></li>
                        </ul>
                    </div>
                </li>

                {{-- Other Links --}}
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
                        <a href="{{ route($link['route']) }}"
                            class="px-4 py-3 text-sm font-bold uppercase transition
                            {{ request()->routeIs($link['route']) ? 'text-[var(--secondary-color)]' : 'text-gray-500 hover:text-[var(--secondary-color)]' }}">
                            {{ $link['label'] }}
                        </a>
                    </li>
                @endforeach

                <li class="relative flex items-center">

                    <form action="#" method="GET" class="relative">

                        <input type="text" name="search" placeholder="Search"
                            class="w-32 pl-7 pr-2 py-1 rounded-full border border-gray-300
            text-[11px] focus:outline-none focus:border-[var(--secondary-color)]
            transition">

                        <button type="submit"
                            class="absolute left-2 top-1/2 -translate-y-1/2 text-gray-400 hover:text-[var(--secondary-color)] transition">

                            <i class="fa-solid fa-magnifying-glass text-[10px]"></i>

                        </button>

                    </form>

                </li>


            </ul>

            {{-- Mobile Menu --}}
            <div id="mobile-menu" class="hidden lg:hidden py-4 border-t border-gray-200">
                <ul class="flex flex-col gap-2 px-4">

                    <li>
                        <a href="{{ route('home') }}"
                            class="block py-2 text-sm font-semibold uppercase
                            {{ request()->routeIs('home') ? 'text-[var(--secondary-color)]' : 'text-gray-600' }}">
                            Home
                        </a>
                    </li>

                    {{-- About --}}
                    <li>
                        <details {{ request()->routeIs('about.*') ? 'open' : '' }}>
                            <summary
                                class="flex justify-between items-center py-2 text-sm font-semibold uppercase cursor-pointer list-none
                                {{ request()->routeIs('about.*') ? 'text-[var(--secondary-color)]' : 'text-gray-600' }}">
                                About Us
                                <i class="fa-solid fa-chevron-down text-xs"></i>
                            </summary>
                            <ul class="pl-4 mt-2 space-y-2">
                                <li><a href="{{ route('about.ceo') }}"
                                        class="text-sm {{ request()->routeIs('about.ceo') ? 'text-[var(--secondary-color)] font-semibold' : 'text-gray-500' }}">CEO
                                        Message</a></li>
                                <li><a href="{{ route('about.ibl') }}"
                                        class="text-sm {{ request()->routeIs('about.ibl') ? 'text-[var(--secondary-color)] font-semibold' : 'text-gray-500' }}">IBL
                                        Group Companies</a></li>
                                <li><a href="{{ route('about.history') }}"
                                        class="text-sm {{ request()->routeIs('about.history') ? 'text-[var(--secondary-color)] font-semibold' : 'text-gray-500' }}">History</a>
                                </li>
                                <li><a href="{{ route('about.mission') }}"
                                        class="text-sm {{ request()->routeIs('about.mission') ? 'text-[var(--secondary-color)] font-semibold' : 'text-gray-500' }}">Mission,
                                        Vision & Values</a></li>
                                <li><a href="{{ route('about.facilities') }}"
                                        class="text-sm {{ request()->routeIs('about.facilities') ? 'text-[var(--secondary-color)] font-semibold' : 'text-gray-500' }}">Manufacturing
                                        Facilities</a></li>
                                <li><a href="{{ route('about.csr') }}"
                                        class="text-sm {{ request()->routeIs('about.csr') ? 'text-[var(--secondary-color)] font-semibold' : 'text-gray-500' }}">Corporate
                                        Social Responsibility</a></li>
                                <li><a href="{{ route('about.global') }}"
                                        class="text-sm {{ request()->routeIs('about.global') ? 'text-[var(--secondary-color)] font-semibold' : 'text-gray-500' }}">Global
                                        Business</a></li>
                                <li><a href="{{ route('about.policies') }}"
                                        class="text-sm {{ request()->routeIs('about.policies') ? 'text-[var(--secondary-color)] font-semibold' : 'text-gray-500' }}">Policies/Certifications</a>
                                </li>
                            </ul>
                        </details>
                    </li>

                    {{-- Products --}}
                    <li>
                        <details {{ request()->routeIs('products.*') ? 'open' : '' }}>
                            <summary
                                class="flex justify-between items-center py-2 text-sm font-semibold uppercase cursor-pointer list-none
                                {{ request()->routeIs('products.*') ? 'text-[var(--secondary-color)]' : 'text-gray-600' }}">
                                Products
                                <i class="fa-solid fa-chevron-down text-xs"></i>
                            </summary>
                            <ul class="pl-4 mt-2 space-y-2">
                                @foreach ($navCategories as $category)
                                    <li>
                                        <a href="{{ route('products.index', ['cat' => $category->slug]) }}"
                                            class="text-sm {{ request()->query('cat') === $category->slug ? 'text-[var(--secondary-color)] font-semibold' : 'text-gray-500' }}">
                                            {{ $category->name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </details>
                    </li>

                    {{-- Investors --}}
                    <li>
                        <details {{ request()->routeIs('investors.*') ? 'open' : '' }}>
                            <summary
                                class="flex justify-between items-center py-2 text-sm font-semibold uppercase cursor-pointer list-none
                                {{ request()->routeIs('investors.*') ? 'text-[var(--secondary-color)]' : 'text-gray-600' }}">
                                Investors
                                <i class="fa-solid fa-chevron-down text-xs"></i>
                            </summary>
                            <ul class="pl-4 mt-2 space-y-2">
                                <li><a href="{{ route('investors.profile') }}"
                                        class="text-sm {{ request()->routeIs('investors.profile') ? 'text-[var(--secondary-color)] font-semibold' : 'text-gray-500' }}">Profile
                                        Of Company</a></li>
                                <li><a href="{{ route('investors.governance') }}"
                                        class="text-sm {{ request()->routeIs('investors.governance') ? 'text-[var(--secondary-color)] font-semibold' : 'text-gray-500' }}">Governance</a>
                                </li>
                                <li><a href="{{ route('investors.relations') }}"
                                        class="text-sm {{ request()->routeIs('investors.relations') ? 'text-[var(--secondary-color)] font-semibold' : 'text-gray-500' }}">Investor's
                                        Relations</a></li>
                                <li><a href="{{ route('investors.media') }}"
                                        class="text-sm {{ request()->routeIs('investors.media') ? 'text-[var(--secondary-color)] font-semibold' : 'text-gray-500' }}">Media</a>
                                </li>
                                <li><a href="{{ route('investors.information') }}"
                                        class="text-sm {{ request()->routeIs('investors.information') ? 'text-[var(--secondary-color)] font-semibold' : 'text-gray-500' }}">Investor
                                        Information</a></li>
                            </ul>
                        </details>
                    </li>

                    {{-- Other Links --}}
                    @foreach ($links as $link)
                        <li>
                            <a href="{{ route($link['route']) }}"
                                class="block py-2 text-sm font-semibold uppercase
                                {{ request()->routeIs($link['route']) ? 'text-[var(--secondary-color)]' : 'text-gray-600' }}">
                                {{ $link['label'] }}
                            </a>
                        </li>
                    @endforeach

                    <li class="relative flex items-center">

                        <form action="#" method="GET" class="relative">

                            <input type="text" name="search" placeholder="Search"
                                class="w-32 pl-7 pr-2 py-1 rounded-full border border-gray-300
            text-[11px] focus:outline-none focus:border-[var(--secondary-color)]
            transition">

                            <button type="submit"
                                class="absolute left-2 top-1/2 -translate-y-1/2 text-gray-400 hover:text-[var(--secondary-color)] transition">

                                <i class="fa-solid fa-magnifying-glass text-[10px]"></i>

                            </button>

                        </form>

                    </li>

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
