<x-frontend.layout>
    {{-- ===================== HERO SECTION ===================== --}}
    <section class="bg-white">
        <div class="min-h-screen flex items-center justify-center bg-[var(--primary-color)]">
            <div class="max-w-5xl mx-auto text-center px-4">
                <div class="uppercase text-white">
                    <h1 class="tracking-normal text-2xl sm:text-3xl md:text-4xl font-medium leading-relaxed">
                        Welcome to <br>
                        <span class="tracking-tight text-4xl sm:text-5xl md:text-6xl">
                            the searle <br> company limited
                        </span>
                    </h1>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================== CEO MESSAGE SECTION ===================== --}}
    <section class="mt-8">
        <div class="bg-gray-50 border-t border-gray-100">
            <div class="max-w-6xl mx-auto px-4 py-12 md:py-20
                    grid grid-cols-1 md:grid-cols-3 gap-8">

                {{-- Image --}}
                <div class="md:col-span-1 flex justify-center">
                    <img src="https://searlecompany.com/wp-content/uploads/2025/08/Tahir_Ahmed_Updated_-_Background_50-scaled.jpg"
                        alt="CEO" class="w-full max-w-xs sm:max-w-sm md:max-w-full md:h-[500px] object-cover">
                </div>

                {{-- Content --}}
                <div class="md:col-span-2 text-base md:text-xl">
                    <div class="flex items-center gap-4">
                        <div
                            class="inline-block border border-black text-black rounded-full py-1 px-4
                                tracking-widest font-medium text-sm md:text-base whitespace-nowrap">
                            CEO Message
                        </div>
                        <div class="flex-grow border-t border-black"></div>
                    </div>

                    <div class="mt-6 md:mt-8">
                        <p class="text-justify text-sm sm:text-base md:text-xl">
                            It is an immense privilege to lead The Searle Company Limited, a company that has stood for
                            innovation, trust, and care for decades. As I step into this role, I am inspired by the
                            legacy
                            we have built and the responsibility we carry to improve the quality of human life through
                            our
                            products, our values, and our actions.

                            At Searle, our mission extends beyond producing medicines. We are creating solutions that
                            bring
                            hope to patients, empower healthcare providers, and uplift the communities we serve. We
                            remain
                            committed to elevating lives by advancing health and well-being for generations to come.
                            With
                            state-of-the-art Research & Development, global collaborations, and a relentless focus on
                            quality, we are building a future where advanced therapies are not just a promise but a
                            reality
                            for all.
                        </p>
                        <div class="mt-6 md:mt-8">
                            <a class="text-gray-400" href="{{ route('about.ceo') }}">Readmore..</a>
                        </div>
                        <div class="mt-6 md:mt-8">
                            <span class="font-medium text-xl md:text-2xl">Tahir Ahmed</span> <br>
                            CEO The Searle Company Limited
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ===================== MANUFACTURING FACILITIES SECTION ===================== --}}
    <section>
        <div class="bg-gray-100">
            <div class="max-w-6xl mx-auto py-12 md:py-20 px-4">

                <h2
                    class="text-center uppercase tracking-wider text-2xl md:text-3xl
                        text-[var(--secondary-color)] font-bold">
                    searle manufacturing
                    <span class="bg-[var(--secondary-color)] py-1 px-3 rounded text-white font-bold">facilities</span>
                </h2>

                <div class="flex items-center justify-center gap-4 mt-4">
                    <div class="flex-grow border-t-3 border-gray-300 max-w-[200px]"></div>
                    <span class="text-gray-400 text-xl">🍃</span>
                    <div class="flex-grow border-t-3 border-gray-300 max-w-[200px]"></div>
                </div>

                {{-- Slider --}}
                <div class="overflow-hidden mt-8" id="facilitySlider">
                    <div class="flex gap-4 md:gap-12 transition-transform duration-500 ease-in-out" id="sliderTrack">

                        @foreach ($facilities as $facility)
                            {{-- On mobile: full width card; md+: 50% width --}}
                            <div
                                class="w-full flex-shrink-0 md:w-[calc(50%-24px)] overflow-hidden shadow bg-white group">
                                <img src="{{ asset('storage/' . $facility->image) }}" alt="{{ $facility->plant_name }}"
                                    class="w-full h-48 md:h-56 object-cover transition-all duration-300 group-hover:scale-105">
                                <div
                                    class="p-4 bg-white group-hover:bg-[var(--secondary-color)] text-center transition-all duration-300">
                                    <h3
                                        class="text-sm md:text-base font-bold text-black group-hover:text-white
                                           uppercase tracking-wide transition-all duration-300">
                                        {{ $facility->plant_name }}
                                    </h3>
                                    <p
                                        class="text-gray-500 group-hover:text-white text-xs md:text-sm mt-1 transition-all duration-300">
                                        {{ $facility->location }}
                                        <a href="{{ route('facilities.show', $facility->id) }}"
                                            class="text-gray-600 ml-1 transition-all duration-300">View More</a>
                                    </p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>

                {{-- Navigation --}}
                <div class="flex justify-center items-center gap-4 mt-6">
                    <button id="prevBtn"
                        class="w-10 h-10 rounded-full border border-gray-300 bg-white flex items-center justify-center
                           hover:bg-[var(--secondary-color)] hover:border-[var(--secondary-color)] group transition">
                        <svg class="w-4 h-4 stroke-gray-700 group-hover:stroke-white transition" fill="none"
                            viewBox="0 0 24 24" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="15 18 9 12 15 6" />
                        </svg>
                    </button>

                    <div class="flex gap-2 items-center" id="dotsContainer"></div>

                    <button id="nextBtn"
                        class="w-10 h-10 rounded-full border border-gray-300 bg-white flex items-center justify-center
                           hover:bg-[var(--secondary-color)] hover:border-[var(--secondary-color)] group transition">
                        <svg class="w-4 h-4 stroke-gray-700 group-hover:stroke-white transition" fill="none"
                            viewBox="0 0 24 24" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="9 18 15 12 9 6" />
                        </svg>
                    </button>
                </div>

            </div>
        </div>
    </section>

    {{-- ===================== OUR LEADING BRANDS SECTION ===================== --}}
    <section class="py-10 md:py-15">
        <div class="max-w-6xl mx-auto px-4 py-10 md:py-20">
            <h3
                class="text-center uppercase tracking-wider text-2xl md:text-3xl
                    text-[var(--secondary-color)] font-bold">
                Our leading
                <span class="bg-[var(--secondary-color)] py-1 px-3 rounded text-white font-bold">Brands</span>
            </h3>

            <div class="flex items-center justify-center gap-4 mt-4">
                <div class="flex-grow border-t-2 border-gray-400 max-w-[130px]"></div>
                <span class="text-gray-300 text-5xl font-medium -translate-y-1">+</span>
                <div class="flex-grow border-t-2 border-gray-400 max-w-[130px]"></div>
            </div>
        </div>

        {{-- 2 cols on mobile, 4 cols on md+ --}}
        <div class="max-w-6xl mx-auto px-4 grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-10">
            <div
                class="brand-card p-4 border border-gray-100 rounded-xl hover:border-gray-300
                    transition-colors duration-500 flex items-center justify-center h-32 md:h-40 shadow-sm">
                <img src="{{ asset('images/hydryllin.png') }}" alt="Hydryllin"
                    class="max-h-full max-w-full object-contain">
            </div>
            <div
                class="brand-card p-4 border border-gray-100 rounded-xl hover:border-gray-300
                    transition-colors duration-500 flex items-center justify-center h-32 md:h-40 shadow-sm">
                <img src="{{ asset('images/nuberol-forte.png') }}" alt="Nuberol Forte"
                    class="max-h-full max-w-full object-contain">
            </div>
            <div
                class="brand-card p-4 border border-gray-100 rounded-xl hover:border-gray-300
                    transition-colors duration-500 flex items-center justify-center h-32 md:h-40 shadow-sm">
                <img src="{{ asset('images/metrozine.png') }}" alt="Metrozine"
                    class="max-h-full max-w-full object-contain">
            </div>
            <div
                class="brand-card p-4 border border-gray-100 rounded-xl hover:border-gray-300
                    transition-colors duration-500 flex items-center justify-center h-32 md:h-40 shadow-sm">
                <img src="{{ asset('images/xaraban.png') }}" alt="Xarob"
                    class="max-h-full max-w-full object-contain">
            </div>
        </div>
    </section>

    {{-- ===================== OUR PORTFOLIO SECTION ===================== --}}
    <section>
        <div class="relative py-16 md:py-24"
            style="background-color: #1b3981; clip-path: polygon(0 3%, 100% 0%, 100% 97%, 0% 100%);">
            <div class="max-w-6xl mx-auto px-4 sm:px-6">

                {{-- Title --}}
                <div class="text-center mb-8 md:mb-10">
                    <h2 class="text-xl md:text-2xl text-white font-bold tracking-widest">
                        OUR
                        <span
                            class="bg-white text-[var(--secondary-color)] font-bold rounded px-4 py-2">PORTFOLIO</span>
                    </h2>
                    <div class="flex items-center justify-center gap-4 mt-4">
                        <div class="flex-grow border-t-2 border-gray-400 max-w-[130px]"></div>
                        <span class="text-gray-300 text-5xl font-medium -translate-y-1">+</span>
                        <div class="flex-grow border-t-2 border-gray-400 max-w-[130px]"></div>
                    </div>
                </div>

                {{-- Grid: 2 cols mobile, 3 cols md+ --}}
                <div class="grid grid-cols-2 md:grid-cols-3 gap-3 md:gap-5">
                    @php
                        $portfolio = [
                            ['title' => 'Pharmaceutical', 'image' => 'pharmaceutical.png', 'cat' => 'pharmaceutical'],
                            [
                                'title' => 'Biopharmaceutical',
                                'image' => 'biopharmaceutical.png',
                                'cat' => 'biopharmaceutical',
                            ],
                            [
                                'title' => 'Nutraceutical',
                                'image' => 'otc-health-suppliments.png',
                                'cat' => 'nutraceutical',
                            ],
                            ['title' => 'Nutrition', 'image' => 'nutrition.png', 'cat' => 'nutrition'],
                            ['title' => 'Consumer', 'image' => 'Cunsumer-02.png', 'cat' => 'consumer'],
                            [
                                'title' => 'Medical Devices & Disposables',
                                'image' => 'medical-devices-disposals.png',
                                'cat' => 'medical-devices-disposables',
                            ],
                        ];
                    @endphp

                    @foreach ($portfolio as $item)
                        <a href="{{ route('products.index', ['cat' => $item['cat']]) }}"
                            class="flex flex-col items-center justify-center py-6 md:py-10 px-2 md:px-4
                              text-center transition-all duration-300 rounded-xl">
                            <img src="{{ asset('images/' . $item['image']) }}" alt="{{ $item['title'] }}"
                                class="w-14 h-14 md:w-20 md:h-20 object-contain transition-transform duration-300 group-hover:scale-110">
                            <h3 class="text-white font-bold text-sm md:text-lg mt-3 md:mt-4 leading-snug">
                                {{ $item['title'] }}
                            </h3>
                            <p class="text-white/60 text-xs md:text-sm mt-1 transition-colors duration-300">
                                View Products
                            </p>
                        </a>
                    @endforeach
                </div>

            </div>
        </div>
    </section>

    {{-- ===================== SEARLE UPDATES / NEWS SECTION ===================== --}}
    <section>
        <div class="bg-white">
            <div class="max-w-6xl mx-auto py-12 md:py-20 px-4">

                {{-- Title --}}
                <h2
                    class="text-center uppercase tracking-wider text-2xl md:text-3xl
                        text-[var(--secondary-color)] font-bold">
                    searle
                    <span class="bg-[var(--secondary-color)] py-1 px-3 rounded text-white font-bold">updates</span>
                </h2>

                {{-- Divider --}}
                <div class="flex items-center justify-center gap-4 mt-4 mb-8 md:mb-10">
                    <div class="flex-grow border-t border-gray-300 max-w-[200px]"></div>
                    <span class="text-gray-400 text-2xl">✚</span>
                    <div class="flex-grow border-t border-gray-300 max-w-[200px]"></div>
                </div>

                {{-- News Grid: 1 col mobile, 2 cols md+ --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
                    @foreach ($news as $item)
                        <div
                            class="flex bg-white border border-gray-200 group
                                transition-all duration-300 rounded-lg overflow-hidden">

                            {{-- Left: Image — narrower on mobile --}}
                            <div class="w-28 sm:w-36 md:w-48 flex-shrink-0 overflow-hidden">
                                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}"
                                    class="w-full h-full object-cover transition-all duration-300 group-hover:scale-105">
                            </div>

                            {{-- Right: Content --}}
                            <div class="flex flex-col justify-between p-3 md:p-4 flex-1">
                                <h3
                                    class="text-sm md:text-base font-bold text-gray-800 leading-snug mb-2
                                       transition-colors duration-300">
                                    {{ $item->title }}
                                </h3>
                                <p class="text-gray-500 text-xs md:text-sm leading-relaxed line-clamp-3">
                                    {{ Str::limit($item->meta_description, 120) }}
                                </p>
                                <div class="mt-3 md:mt-4">
                                    <a href="{{ route('news.show', $item->slug) }}"
                                        class="inline-block px-4 md:px-6 py-1.5 md:py-2
                                          bg-[var(--secondary-color)] hover:text-[var(--secondary-color)]
                                          hover:bg-white border border-[var(--secondary-color)]
                                          text-white text-xs md:text-sm rounded font-semibold
                                          transition-all duration-300">
                                        Read more
                                    </a>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>

                {{-- View All --}}
                <div class="text-center mt-10 md:mt-14">
                    <a href="{{ route('news.index') }}"
                        class="inline-block px-4 py-2
                          bg-[var(--secondary-color)] hover:text-[var(--secondary-color)]
                          border border-[var(--secondary-color)] hover:bg-white
                          text-white rounded uppercase tracking-wider text-sm font-semibold
                          transition-all duration-300">
                        View All News
                    </a>
                </div>

            </div>
        </div>
    </section>
</x-frontend.layout>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const track = document.getElementById('sliderTrack');
        const slider = document.getElementById('facilitySlider');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const dotsContainer = document.getElementById('dotsContainer');

        const cards = Array.from(track.querySelectorAll('.flex-shrink-0'));
        const total = cards.length;
        let current = 0;

        function isMobile() {
            return window.innerWidth < 768;
        }

        function perView() {
            return isMobile() ? 1 : 2;
        }

        function getMaxIndex() {
            return Math.ceil(total / perView()) - 1;
        }

        function setCardWidths() {
            const pv = perView();
            const gap = isMobile() ? 16 : 48;
            const sliderWidth = slider.offsetWidth;
            const cardWidth = (sliderWidth - gap * (pv - 1)) / pv;
            cards.forEach(card => {
                card.style.width = cardWidth + 'px';
                card.style.flexShrink = '0';
            });
            track.style.gap = gap + 'px';
        }

        function buildDots() {
            dotsContainer.innerHTML = '';
            for (let i = 0; i < 3; i++) {
                const dot = document.createElement('div');
                dot.className = 'w-2 h-2 rounded-full cursor-pointer transition-all duration-200 bg-gray-300';
                dotsContainer.appendChild(dot);
            }
            updateDots();
        }

        function updateDots() {
            const dots = dotsContainer.querySelectorAll('div');
            const max = getMaxIndex();

            let activeDot;
            if (current === 0) activeDot = 0;
            else if (current === max) activeDot = 2;
            else activeDot = 1;

            dots.forEach((d, i) => {
                d.className = `w-2 h-2 rounded-full cursor-pointer transition-all duration-200 ${
                    i === activeDot ? 'bg-[#1a3a6b] scale-125' : 'bg-gray-300'
                }`;
            });
        }

        function goTo(index) {
            current = Math.max(0, Math.min(index, getMaxIndex()));
            const gap = isMobile() ? 16 : 48;
            const cardWidth = cards[0].offsetWidth;
            track.style.transform = `translateX(-${current * perView() * (cardWidth + gap)}px)`;
            updateDots();
        }

        function init() {
            if (current > getMaxIndex()) current = 0;
            setCardWidths();
            buildDots();
            goTo(current);
        }

        prevBtn.addEventListener('click', () => goTo(current - 1));
        nextBtn.addEventListener('click', () => goTo(current + 1));

        window.addEventListener('resize', init);

        setTimeout(init, 50);
    });
</script>
