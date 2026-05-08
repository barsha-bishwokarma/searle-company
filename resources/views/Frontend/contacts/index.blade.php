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
    <div class="max-w-6xl mx-auto py-20">
        <div class="flex gap-18">
            <img class="h-[600px] w-auto rounded-xl"
                src="https://searlecompany.com/wp-content/uploads/2022/06/Contact-Us.jpg" alt="contact-image">

            <div class="max-w-5xl mx-auto grid grid-cols-2 gap-12">
                <div class="text-center">
                    <div
                        class="flex items-center justify-center bg-gray-100 rounded-full h-18 w-18 border border-[var(--secondary-color)]">
                        <i class="fa-regular fa-house text-[var(--secondary-color)] text-2xl"></i></div>
                    <h1>Office Address</h1>
                    <p>One IBL Centre, 2nd Floor,
                        Plot # 1, Block 7 & 8, D.M.C.H.S,
                        Tipu Sultan Road. Off Shahra-e-Faisal, Karachi - Pakistan.</p>
                </div>

                <div>
                    <div
                        class="flex items-center justify-center bg-gray-100 rounded-full h-18 w-18 border border-[var(--secondary-color)] text-2xl">
                        <i class="fa-solid fa-phone text-[var(--secondary-color)]"></i></div>
                    <h1>Phone</h1>
                    <p>Tel: +92 21 371 70 200-201
                        Fax: +92 21 371 70 225.</p>
                </div>

                <div>
                    <div
                        class="flex items-center justify-center bg-gray-100 rounded-full h-18 w-18 border border-[var(--secondary-color)] text-2xl">
                        <i class="fa-regular fa-envelope text-[var(--secondary-color)]"></i></div>
                    <h1>Email</h1>
                    <p>info@searlecompany.com</p>
                </div>

                <div>
                    <div
                        class="flex items-center justify-center bg-gray-100 rounded-full h-18 w-18 border border-[var(--secondary-color)] text-2xl">
                        <i class="fa-regular fa-building text-[var(--secondary-color)]"></i></div>
                    <h1>For Business Development email at:</h1>
                    <p>bd@searlecompany.com</p>
                </div>
            </div>
        </div>
    </div>
</x-frontend.layout>
