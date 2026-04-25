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
                    manufacturing <span
                        class="bg-[var(--secondary-color)] py-1 px-3 rounded text-white font-bold">facilities</span>
                </h2>

                <div class="flex items-center justify-center gap-4 mt-4">
                    <div class="flex-grow border-t border-gray-300 max-w-[200px]"></div>

                    <span class="text-gray-400 text-xl">🍃</span>

                    <div class="flex-grow border-t border-gray-300 max-w-[200px]"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
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
</x-frontend-layout>
