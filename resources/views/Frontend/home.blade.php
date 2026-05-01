<x-frontend-layout>
    <section class="bg-white">
        <div class="min-h-screen flex items-center justify-center bg-[var(--primary-color)]">
            <div class="max-w-5xl mx-auto text-center  ">
                <div class="uppercase text-white">
                    <h1 class="tracking-normal text-4xl font-medium leading-relaxed">Welcome to <br> <span
                            class="tracking-tight text-6xl">the searle <br> company
                            limited</span>
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-8">
        <div class="bg-gray-50 border-t border-gray-100">
            <div class="max-w-6xl mx-auto grid grid-cols-3 gap-8 py-20">
                <div class=" col-span-1">
                    <img src="https://searlecompany.com/wp-content/uploads/2025/08/Tahir_Ahmed_Updated_-_Background_50-scaled.jpg"
                        alt="img" class="h-[500px]">
                </div>

                <div class="col-span-2 text-xl">
                    <div class="flex items-center gap-4">
                        <div
                            class="inline-block border border-black text-black rounded-full py-1 px-4 tracking-widest font-medium">
                            CEO Message
                        </div>
                        <div class="flex-grow border-t border-black"></div>
                    </div>

                    <div class="mt-8">
                        <p class="text-justify">
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
                        <div class="mt-8">
                            <a class="text-gray-400" href="">Readmore..</a>
                        </div>

                        <div class="mt-8">
                            <span class="font-medium text-2xl">Tahir Ahmed </span> <br>
                            CEO The Searle Company Limited
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="bg-gray-100">
            <div class="max-w-6xl mx-auto py-20">
                <h2 class="text-center uppercase tracking-wider text-3xl text-[var(--secondary-color)] font-bold">searle
                    manufacturing
                    <span class="bg-[var(--secondary-color)] py-1 px-3 rounded text-white font-bold">facilities</span>
                </h2>

                <div class="flex items-center justify-center gap-4 mt-4">
                    <div class="flex-grow border-t-3 border-gray-300 max-w-[200px]"></div>

                    <span class="text-gray-400 text-xl">🍃</span>

                    <div class="flex-grow border-t-3 border-gray-300 max-w-[200px]"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-10 mt-5">
                    @foreach ($facilities as $facility)
                        <div class=" overflow-hidden shadow transition-transform">
                            <img src="{{ asset('storage/' . $facility->image) }}" alt="{{ $facility->plant_name }}"
                                class="w-full h-72 object-cover">

                            <div class="p-4 bg-white">
                                <h3 class="text-xl font-bold text-blue-900">{{ $facility->plant_name }}</h3>
                                <p class="text-gray-500 mt-1 flex items-center">
                                    {{ $facility->location }}
                                </p>

                                <a href="{{ route('facilities.show', $facility->id) }}">view more</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="py-15">
        <div class="max-w-6xl mx-auto py-15">
            <h3 class="text-center uppercase tracking-wider text-3xl text-[var(--secondary-color)] font-bold">
                Our leading
                <span class="bg-[var(--secondary-color)] py-1 px-3 rounded text-white font-bold">Brands</span>
            </h3>

            <div class="flex items-center justify-center gap-4 mt-4">
                <div class="flex-grow border-t-2 border-gray-400 max-w-[130px]"></div>

                <span class="text-gray-300 text-5xl font-medium -translate-y-1">+</span>

                <div class="flex-grow border-t-2 border-gray-400 max-w-[130px]"></div>
            </div>
        </div>

        <div class="max-w-6xl mx-auto grid grid-cols-4 gap-10 ">
            <div
                class="brand-card p-4 border border-gray-100 rounded-xl hover:border-gray-300 transition-colors duration-500 flex items-center justify-center h-40 shadow-sm">
                <img src="{{ asset('images/hydryllin.png') }}" alt="Hydryllin"
                    class="max-h-full max-w-full object-contain">
            </div>
            <div
                class="brand-card p-4 border border-gray-100 rounded-xl hover:border-gray-300 transition-colors duration-500 flex items-center justify-center h-40 shadow-sm">
                <img src="{{ asset('images/nuberol-forte.png') }}" alt="Nuberol Forte"
                    class="max-h-full max-w-full object-contain">
            </div>
            <div
                class="brand-card p-4 border border-gray-100 rounded-xl hover:border-gray-300 transition-colors duration-500 flex items-center justify-center h-40 shadow-sm">
                <img src="{{ asset('images/metrozine.png') }}" alt="Metrozine"
                    class="max-h-full max-w-full object-contain">
            </div>
            <div
                class="brand-card p-4 border border-gray-100 rounded-xl hover:border-gray-300 transition-colors duration-500 flex items-center justify-center h-40 shadow-sm">
                <img src="{{ asset('images/xaraban.png') }}" alt="Xarob"
                    class="max-h-full max-w-full object-contain">
            </div>
        </div>
    </section>

    
    <section>
        <div class="relative py-24"
            style="background-color: #1b3981; clip-path: polygon(0 6%, 100% 0%, 100% 94%, 0% 100%);">
            <div class="max-w-6xl mx-auto px-6">

                {{-- Title --}}
                <div class="text-center mb-10">
                    <p class="text-xs text-white/60 uppercase tracking-widest mb-1">OUR</p>
                    <h2 class="text-3xl font-light text-white tracking-widest">PORTFOLIO</h2>
                </div>

                {{-- Grid --}}
                <div class="grid grid-cols-2 md:grid-cols-3 gap-5">

                    @php
                        $portfolio = [
                            ['title' => 'Pharmaceutical', 'image' => 'pharmaceutical.png', 'cat' => 'pharmaceutical'],
                            [
                                'title' => 'Biopharmaceutical',
                                'image' => 'biopharmaceutical.png',
                                'cat' => 'biopharmaceutical',
                            ],
                            ['title' => 'Nutraceutical', 'image' => 'nutraceutical.png', 'cat' => 'nutraceutical'],
                            ['title' => 'Nutrition', 'image' => 'nutrition.png', 'cat' => 'nutrition'],
                            ['title' => 'Consumer', 'image' => 'consumer.png', 'cat' => 'consumer'],
                            [
                                'title' => 'Medical Devices & Disposables',
                                'image' => 'medical-devices.png',
                                'cat' => 'medical-devices-disposables',
                            ],
                        ];
                    @endphp

                    @foreach ($portfolio as $item)
                        <a href="{{ route('products.index', ['cat' => $item['cat']]) }}"
                            class="group relative overflow-hidden rounded-2xl h-44">

                            {{-- Image --}}
                            <img src="{{ asset('images/' . $item['image']) }}" alt="{{ $item['title'] }}"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">

                            {{-- Overlay --}}
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-[#1b3981]/90 via-[#1b3981]/20 to-transparent group-hover:from-[#1b3981]/95 transition-all duration-300">
                            </div>

                            {{-- Content --}}
                            <div class="absolute bottom-0 left-0 right-0 p-4">
                                <p class="text-white font-medium text-sm mb-1">{{ $item['title'] }}</p>
                                <p
                                    class="text-white/70 text-xs opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    View products →</p>
                            </div>

                        </a>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
</x-frontend-layout>
