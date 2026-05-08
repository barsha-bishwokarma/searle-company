<x-frontend.layout>
    <div class="bg-white">
        <div class=" border-b border-gray-100">
            <div class="max-w-6xl mx-auto px-6 py-4">
                <ul class="flex items-center gap-2 text-sm">
                    <li><a class="text-gray-400" href="{{ route('home') }}">Home</a></li>
                    <li class="text-gray-400">/</li>
                    <li class="text-[var(--secondary-color)]">Partners</li>
                </ul>
            </div>
        </div>

        <div class="max-w-6xl mx-auto py-12 px-4 sm:px-6 lg:px-8">

            <div class="flex flex-col md:flex-row gap-16 items-start">
                <!-- Left Side: Static Globe Image -->
                <div class="w-full md:w-1/2">
                    <img src="{{ asset('images/partner.jpg') }}" alt="Global Presence"
                        class="max-w-[95%] h-auto border border-gray-100">
                </div>

                <!-- Right Side: Vertical List with Blue Indicators -->
                <div class="w-full md:w-1/2">
                    <div class="space-y-1">
                        @foreach ($partners as $partner)
                            <div class="flex items-center border-b border-gray-100 py-2 group hover:bg-gray-50">
                                <!-- The exact blue line from Screenshot 2026-05-05 133824.jpg -->
                                <div class="w-[6px] h-6 bg-[#003399] mr-4"></div>

                                <span class="text-[#4a5568] font-light text-lg tracking-normal">
                                    {{ $partner->partner_name }}
                                </span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 2: Logo Cloud (As seen in Screenshot 2026-05-05 133915.jpg) -->
        <div class="max-w-6xl mx-auto py-20 px-4 sm:px-6 lg:px-8 border-t border-gray-100 mt-10">
            <div class="">
                <img src="{{ asset('images/partnerspng.png') }}" alt="logo" class="w-full h-auto">
            </div>
        </div>
    </div>
</x-frontend.layout>
