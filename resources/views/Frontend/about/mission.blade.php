<x-frontend.layout>
    <div class="max-w-6xl mx-auto py-10">

        
        <ul class="flex items-center gap-2 text-sm mb-8">
            <li><a class="text-gray-400" href="{{ route('home') }}">Home</a></li>
            <li class="text-gray-400">/</li>
            <li class="text-[var(--secondary-color)]">Mission, Vision & Values</li>
        </ul>

    
        <div class="flex gap-10">

            {{-- Left image --}}
            <div class="w-1/2 flex-shrink-0">
                <img src="{{ asset('images/vision.jpg') }}" alt="Vision" class="w-full h-full object-cover">
            </div>


            <div class="w-1/2">

                <div class="mb-10">
                    <div class="flex items-center gap-3 mb-4">
                        <h2 class="text-xl font-bold text-gray-700 border border-gray-400 px-4 py-2 whitespace-nowrap">
                            OUR VISION</h2>
                        <div class="flex-1 h-px bg-gray-400"></div>
                    </div>
                    <p class="text-gray-600 leading-8">To lead in improving the quality of human life</p>
                </div>

                
                <div class="mb-10">
                    <div class="flex items-center gap-3 mb-4">
                        <h2 class="text-xl font-bold text-gray-700 border border-gray-400 px-4 py-2 whitespace-nowrap">
                            OUR MISSION</h2>
                        <div class="flex-1 h-px bg-gray-400"></div>
                    </div>
                    <ul class="text-gray-600 leading-8 space-y-3 text-justify">
                        <li>Provide its customers with the best possible products and services in healthcare and
                            consumer industry.</li>
                        <li>Corporate social responsibility towards society and protection of the environment.</li>
                        <li>Progressively evolve with the changing marketplace to maintain its leadership position.</li>
                        <li>Cultivate an organization that would grow and lives beyond each one of us.</li>
                        <li>Promote team spirit amongst its employees whilst maintaining their individuality.</li>
                        <li>Work today for a better tomorrow for all its stakeholders, through innovation and new
                            product development.</li>
                    </ul>
                </div>

            </div>
        </div>

        
        <div class="mt-10">
            <div class="flex items-center gap-3 mb-6">
                <h2 class="text-xl font-bold text-gray-700 border border-gray-400 px-4 py-2 whitespace-nowrap">OUR
                    VALUES</h2>
                <div class="flex-1 h-px bg-gray-400"></div>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <img src="https://searlecompany.com/wp-content/uploads/2022/05/searle-tag-4.png" alt="Value"
                    class="w-full">
                <img src="https://searlecompany.com/wp-content/uploads/2022/05/searle-tag-1-2.png" alt="Value"
                    class="w-full">
                <img src="https://searlecompany.com/wp-content/uploads/2022/05/searle-tag-2-2.png" alt="Value"
                    class="w-full">
                <img src="https://searlecompany.com/wp-content/uploads/2022/05/searle-tag-3-2.png" alt="Value"
                    class="w-full">
            </div>
        </div>

    </div>
</x-frontend.layout>
