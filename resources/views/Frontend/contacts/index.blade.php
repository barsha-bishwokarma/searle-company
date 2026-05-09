<x-frontend.layout>
    <div class="bg-white border-b border-gray-100">
        <div class="max-w-6xl mx-auto px-6 py-4">
            <ul class="flex items-center gap-2 text-sm">
                <li><a class="text-gray-400" href="{{ route('home') }}">Home</a></li>
                <li class="text-gray-400">/</li>
                <li class="text-[var(--secondary-color)]">Contacts</li>
            </ul>
        </div>
    </div>
    <div class="max-w-6xl mx-auto px-6 py-16">
        <div class="flex gap-16 items-start">

            {{-- Left: Image --}}
            <div class="w-[500px] flex-shrink-0">
                <img src="https://searlecompany.com/wp-content/uploads/2022/06/Contact-Us.jpg" alt="Contact"
                    class="w-full h-full object-cover rounded">
            </div>

            {{-- Right: Contact Info Grid --}}
            <div class="flex-1">
                <div class="grid grid-cols-2 gap-x-8 gap-y-12">

                    {{-- Office Address --}}
                    <div class="flex flex-col items-center text-center">
                        <div
                            class="flex items-center justify-center rounded-full h-16 w-16 border border-[var(--secondary-color)] mb-4">
                            <i class="fa-regular fa-building text-[var(--secondary-color)] text-xl"></i>
                        </div>
                        <h3 class="font-bold text-gray-700 text-xl mb-2">Office Address</h3>
                        <p class="text-gray-500 text-sm leading-6 text-center">
                            One IBL Centre, 2nd Floor,<br>
                            Plot # 1, Block 7 & 8, D.M.C.H.S,<br>
                            Tipu Sultan Road, Off Shahra-e-<br>
                            Faisal, Karachi – Pakistan.
                        </p>
                    </div>

                    {{-- Phone --}}
                    <div class="flex flex-col items-center text-center">
                        <div
                            class="flex items-center justify-center rounded-full h-16 w-16 border border-[var(--secondary-color)] mb-4">
                            <i class="fa-solid fa-phone text-[var(--secondary-color)] text-xl"></i>
                        </div>
                        <h3 class="font-bold text-gray-700 text-xl mb-2">Phone</h3>
                        <p class="text-gray-500 text-sm leading-6 text-center">
                            Tel: +92 21 371 70 200–201<br>
                            Fax: +92 21 371 70 225
                        </p>
                    </div>

                    {{-- Email --}}
                    <div class="flex flex-col items-center text-center">
                        <div
                            class="flex items-center justify-center rounded-full h-16 w-16 border border-[var(--secondary-color)] mb-4">
                            <i class="fa-regular fa-envelope text-[var(--secondary-color)] text-xl"></i>
                        </div>
                        <h3 class="font-bold text-gray-700 text-xl mb-2">Email</h3>
                        <p class="text-gray-500 text-sm leading-6 text-center">
                            info@searlecompany.com
                        </p>
                    </div>

                    {{-- Business Development --}}
                    <div class="flex flex-col items-center text-center">
                        <div
                            class="flex items-center justify-center rounded-full h-16 w-16 border border-[var(--secondary-color)] mb-4">
                            <i class="fa-regular fa-building text-[var(--secondary-color)] text-xl"></i>
                        </div>
                        <h3 class="font-bold text-gray-700 text-xl mb-2">For Business Development email at:</h3>
                        <p class="text-gray-500 text-sm leading-6 text-center">
                            bd@searlecompany.com
                        </p>
                    </div>

                </div>

                {{-- Social Icons --}}
                <div class="flex gap-4 mt-10 pl-2">
                    <a href="#"
                        class="text-gray-400 hover:text-[var(--secondary-color)] transition-colors duration-300">
                        <i class="fa-brands fa-facebook text-sm"></i>
                    </a>
                    <a href="#"
                        class="text-gray-400 hover:text-[var(--secondary-color)] transition-colors duration-300">
                        <i class="fa-brands fa-linkedin text-sm"></i>
                    </a>
                    <a href="#"
                        class="text-gray-400 hover:text-[var(--secondary-color)] transition-colors duration-300">
                        <i class="fa-brands fa-square-twitter text-sm"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
    <div class="relative min-h-screen flex items-center justify-center py-20"
        style="background-image: url('{{ asset('images/OIP.webp') }}'); background-size: cover; background-position: center;">

        {{-- Dark overlay --}}
        <div class="absolute inset-0 bg-[#1a2035] opacity-85"></div>

        {{-- Content --}}
        <div class="relative z-10 w-full max-w-3xl mx-auto px-6">

            {{-- Heading --}}
            <div class="text-center mb-10">
                <h1 class="text-4xl font-bold text-white tracking-[0.3em] uppercase mb-3">Contact</h1>
                <p class="text-xs text-gray-400 tracking-[0.4em] uppercase">You Know You Can Ask Us Everything</p>
            </div>

            {{-- Form --}}
            <form action="{{ route('contact.submit') }}" method="POST" class="space-y-4">
                @csrf

                <div class="grid grid-cols-2 gap-4">
                    <input type="text" name="first_name" placeholder="Your Name *" required
                        class="w-full bg-white/90 text-gray-700 placeholder-gray-400 text-sm px-4 py-3 focus:outline-none">
                    <input type="text" name="last_name" placeholder="Last Name *" required
                        class="w-full bg-white/90 text-gray-700 placeholder-gray-400 text-sm px-4 py-3 focus:outline-none">
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <input type="tel" name="phone" placeholder="Phone Number *" required
                        class="w-full bg-white/90 text-gray-700 placeholder-gray-400 text-sm px-4 py-3 focus:outline-none">
                    <input type="email" name="email" placeholder="Your Email *" required
                        class="w-full bg-white/90 text-gray-700 placeholder-gray-400 text-sm px-4 py-3 focus:outline-none">
                </div>

                <div>
                    <textarea name="message" placeholder="Your Message *" rows="8" required
                        class="w-full bg-white/90 text-gray-700 placeholder-gray-400 text-sm px-4 py-3 focus:outline-none resize-none"></textarea>
                </div>

                <div class="flex justify-center pt-2">
                    <button type="submit"
                        class="px-12 py-3 bg-white/90 text-gray-700 text-sm tracking-widest uppercase hover:bg-white transition-all duration-300">
                        Submit
                    </button>
                </div>

            </form>

        </div>
    </div>
</x-frontend.layout>
