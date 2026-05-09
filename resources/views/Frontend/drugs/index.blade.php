<x-frontend.layout>

    <div class="bg-gray-50 border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-6 py-4">
            <ul class="flex items-center gap-2 text-sm">
                <li><a class="text-gray-400 hover:underline" href="{{ route('home') }}">Home</a></li>
                <li class="text-gray-400">/</li>
                <li class="text-[var(--secondary-color)] font-medium">Drug Safety</li>
            </ul>
        </div>
    </div>

    <div class="max-w-6xl mx-auto px-6 py-10">
        <div class="grid lg:grid-cols-12 gap-10">

            <div class="lg:col-span-5">
                <div class="">
                    <img src="https://searlecompany.com/wp-content/uploads/2022/02/Brochure-Output-1-rv.jpg"
                        alt="Searle" class="h-full w-auto">
                </div>
            </div>


            <div class="lg:col-span-7 space-y-10">

                <div>
                    <h1 class="text-4xl font-bold text-gray-900">Drug Safety</h1>
                    <div class="h-px bg-gradient-to-r from-blue-600 to-transparent mt-2"></div>
                </div>

                <!-- Pharmacovigilance Logo -->
                <div class="flex items-center gap-3">
                    <img src="https://searlecompany.com/wp-content/uploads/2022/01/SPCV-Logo1.png"
                        alt="Searle Pharmacovigilance" class="h-16">
                </div>

                <div class="prose prose-lg max-w-none text-gray-700">
                    <h2 class="text-2xl font-semibold text-gray-800">PHARMACOVIGILANCE – SCIENCE OF PATIENT SAFETY</h2>
                    <p>
                        The Searle Company Limited is committed to improving patient care and safety, ensuring
                        public health and safety concerning the use of medicines, and promoting understanding,
                        training, and effective communication to healthcare professionals and the public.
                    </p>
                    <p>
                        Any medicine, no matter how safe and effective, can sometimes cause side effects.
                        We take our obligation to report product safety information to health authorities very
                        seriously and all of us at Searle share responsibility for improving the lives of patients
                        and meeting regulatory obligations to forward safety information concerning Searle products.
                    </p>
                </div>

                <!-- What needs to be reported -->
                <div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">What needs to be reported?</h3>
                    <p class="mb-4">All medicines have risks as well as benefits and the Pharmacovigilance department
                        plays an important role by continuously evaluating information received from patients,
                        healthcare professionals, and members of the public in balancing benefits against risk.</p>
                    <ul class="list-disc pl-6 space-y-2 text-gray-700">
                        <li>Side effects to medicines</li>
                        <li>Use of medicines during pregnancy and breastfeeding</li>
                        <li>Overdose, misuse, abuse of medicine</li>
                        <li>Product complaints</li>
                        <li>Lack of effectiveness</li>
                        <li>Medication errors</li>
                    </ul>
                </div>

                <!-- How to report -->
                <div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">How to report</h3>
                    <p class="text-gray-700">
                        If you think you have experienced a side effect or unexpected reaction from a Searle medicine,
                        speak to the healthcare professional who prescribed the medicine or contact your pharmacist
                        as soon as you can. To enable us to continuously monitor the safety of Searle products,
                        report immediately or within 24 hours to Searle Pharmacovigilance Department at
                        <span class="font-medium">+92 21 371 70 200-201</span> or by email
                        <a href="mailto:pv@searlecompany.com"
                            class="text-blue-600 hover:underline">pv@searlecompany.com</a>.
                    </p>
                </div>

                <!-- Department Info -->
                <div class="bg-gray-50 p-6 rounded-2xl">
                    <h3 class="font-semibold text-gray-800 mb-4">Searle Pharmacovigilance Department</h3>
                    <div class="text-gray-600 space-y-2 text-sm">
                        <p>The Searle Company Ltd, Pakistan, One IBL Centre, 2nd Floor, Plot# 1, Block 7 & 8, DMCS, Tipu
                            Sultan Road, Off. Shahrah-e-Faisal, Karachi, Pakistan.</p>
                        <p><span class="font-medium">Phone:</span> +92 21 371 70 200-201</p>
                        <p><span class="font-medium">Fax:</span> +92 21 371 70 224-225</p>
                        <p><span class="font-medium">Email:</span> <a href="mailto:info@searlecompany.com"
                                class="text-blue-600 hover:underline">info@searlecompany.com</a></p>
                    </div>
                </div>

                <!-- Disclaimer -->
                <div class="text-xs text-gray-500 border-l-4 border-gray-300 pl-4">
                    <strong>Disclaimer:</strong> We treat all your “personal data” under the local data protection rule.
                    Any personal data provided here related to adverse events or other activities related to
                    pharmacovigilance will be used solely for this purpose.
                </div>

            </div>
        </div>
    </div>

</x-frontend.layout>
