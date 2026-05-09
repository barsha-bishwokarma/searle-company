<x-frontend.layout>
    <div class="bg-gray-50 border-b border-gray-100 mt-1">
        <div class="max-w-6xl mx-auto px-4 py-4">
            <ul class="flex items-center gap-2 text-sm">
                <li><a class="text-gray-400 hover:underline decoration-gray-400" href="{{ route('home') }}">Home</a></li>
                <li class="text-gray-400">/</li>
                <li class="text-[var(--secondary-color)]">Careers</li>
            </ul>
        </div>
    </div>

    <div class="relative min-h-[85vh] md:min-h-[650px] flex items-center justify-center bg-cover bg-center bg-no-repeat"
        style="background-image: url('{{ asset('images/lahore.png') }}');">

        <div class="absolute inset-0 bg-gradient-to-b from-black/40 via-black/60 to-black/70"></div>

        <div class="relative z-10 text-center px-6 max-w-3xl mx-auto">
            <p class="text-white text-sm tracking-[3px] uppercase font-medium mb-4">Join Our Team</p>
            <h1 class="text-3xl sm:text-4xl md:text-6xl font-bold text-white tracking-tight leading-tight mb-6">CRAFT YOUR CAREER
            </h1>
            <p class="text-white/90 text-lg sm:text-xl md:text-2xl font-light mb-8">We are more than just a workplace</p>
            <div class="max-w-2xl mx-auto text-gray-200 text-base md:text-lg leading-relaxed mb-10">
                We create an environment that is satisfying and challenging yet we take care of your well-being.
                A workplace where employees look forward to coming every day.
            </div>
            <a href="#apply"
                class="inline-flex items-center px-12 py-4 bg-[var(--secondary-color)] hover:bg-[var(--secondary-color)]/90 text-white font-semibold tracking-widest uppercase text-sm transition-all duration-300 rounded-lg">
                Apply Now
            </a>
        </div>
    </div>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 py-16 text-justify">

        <div class="flex flex-col lg:flex-row gap-12">

            {{-- Sidebar --}}
            <div class="lg:w-64 lg:flex-shrink-0">
                <div class="lg:sticky lg:top-8">
                    <div class="border-l-4 border-[var(--secondary-color)] pl-6 space-y-1">
                        <a href="#our-culture"
                            class="block py-3 text-gray-600 hover:text-[var(--secondary-color)] font-medium transition-colors">Our
                            Culture</a>
                        <a href="#learning"
                            class="block py-3 text-gray-600 hover:text-[var(--secondary-color)] font-medium transition-colors">Learning
                            & Development</a>
                        <a href="#opportunities"
                            class="block py-3 text-gray-600 hover:text-[var(--secondary-color)] font-medium transition-colors">Career
                            Opportunities</a>
                    </div>
                </div>
            </div>

            
            <div class="flex-1 space-y-20">

                <div>
                    <p class="text-gray-600 leading-relaxed text-[17px] max-w-3xl">
                        We take pride to be one of the most diversified healthcare companies in Pakistan
                        with global reach of quality products, which means greater opportunities for people
                        to learn more, explore more and do more.
                    </p>


                    <div class="mt-16">
                        <div class="flex items-center gap-4 mb-8">
                            <div class="flex-1 h-px bg-gray-200"></div>
                            <h2 class="text-lg font-semibold text-gray-800 uppercase tracking-wider">Life at Searle</h2>
                            <div class="flex-1 h-px bg-gray-200"></div>
                        </div>
                        <img src="https://searlecompany.com/wp-content/uploads/2022/05/Life-at-Searle-01.jpg"
                            class="w-full max-w-3xl rounded shadow-lg" alt="Life at Searle">
                    </div>
                </div>

                
                <div id="our-culture">
                    <div class="flex items-center gap-4 mb-10">
                        <div class="flex-1 h-px bg-gray-200"></div>
                        <h2 class="text-lg font-semibold text-gray-800 uppercase tracking-wider">Our Culture</h2>
                        <div class="flex-1 h-px bg-gray-200"></div>
                    </div>

                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Culture Cards -->
                        <div
                            class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all group">
                            <div class="overflow-hidden">
                                <img src="https://searlecompany.com/wp-content/uploads/2022/05/Shared-Value-System-01.jpg"
                                    class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-500"
                                    alt="">
                            </div>
                            <div class="p-6">
                                <h3 class="font-semibold text-[var(--secondary-color)] mb-2">Shared Value System</h3>
                                <p class="text-gray-500 text-sm">We can't truly be successful unless our people live our
                                    shared values every day.</p>
                            </div>
                        </div>

                        <div
                            class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all group">
                            <div class="overflow-hidden">
                                <img src="https://searlecompany.com/wp-content/uploads/2022/05/transparency.jpg"
                                    class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-500"
                                    alt="">
                            </div>
                            <div class="p-6">
                                <h3 class="font-semibold text-[var(--secondary-color)] mb-2">Transparency</h3>
                                <p class="text-gray-500 text-sm">We value performance and consider transparency as the
                                    foundation of trust.</p>
                            </div>
                        </div>

                        <div
                            class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all group">
                            <div class="overflow-hidden">
                                <img src="https://searlecompany.com/wp-content/uploads/2022/05/open-communication-2-1.png"
                                    class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-500"
                                    alt="">
                            </div>
                            <div class="p-6">
                                <h3 class="font-semibold text-[var(--secondary-color)] mb-2">Open Communication</h3>
                                <p class="text-gray-500 text-sm">We believe in Open Communication across all levels of
                                    the organization.</p>
                            </div>
                        </div>

                        <div
                            class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all group">
                            <div class="overflow-hidden">
                                <img src="https://searlecompany.com/wp-content/uploads/2022/05/Open-Door-Policy.jpg"
                                    class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-500"
                                    alt="">
                            </div>
                            <div class="p-6">
                                <h3 class="font-semibold text-[var(--secondary-color)] mb-2">Open-door Policy</h3>
                                <p class="text-gray-500 text-sm">We have an open-door policy with close-knit teams that
                                    collaborate daily.</p>
                            </div>
                        </div>

                        <div
                            class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all group">
                            <div class="overflow-hidden">
                                <img src="https://searlecompany.com/wp-content/uploads/2022/05/Teamwork.jpg"
                                    class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-500"
                                    alt="">
                            </div>
                            <div class="p-6">
                                <h3 class="font-semibold text-[var(--secondary-color)] mb-2">Teamwork</h3>
                                <p class="text-gray-500 text-sm">Our Company moves at a fast pace, grown ten-fold
                                    through the power of teamwork.</p>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div id="learning">
                    <div class="flex items-center gap-4 mb-10">
                        <div class="flex-1 h-px bg-gray-200"></div>
                        <h2 class="text-lg font-semibold text-gray-800 uppercase tracking-wider">Learning & Development
                        </h2>
                        <div class="flex-1 h-px bg-gray-200"></div>
                    </div>
                    <div class="text-gray-600 leading-relaxed space-y-5 text-[17px]">
                        <p>Searle focuses on employee's growth and learning, where we start career pathing for our
                            employees right from joining and continue throughout the employee's time at the company. We
                            understand the importance of up-skilling on a consistent roll, hence offer multiple avenues
                            for employees' personal and professional development.</p>
                        <p>Our development initiatives are offered across levels, which aim to make our people more
                            engaged and motivated at work and life in general.</p>
                        <p>Our Learning & Development programs cater to building and up-scaling technical and soft
                            skills, aligning with Organizational needs and industry trends.</p>
                        <p>Besides skill-based learning programs, our leaders offer career coaching and guidance to help
                            team members explore their interest within and outside their job roles, that allow them to
                            learn and utilize their unique skills.</p>
                    </div>
                </div>


                <div id="opportunities" class="bg-gray-50 -mx-4 sm:-mx-6 px-4 sm:px-6 py-16 rounded-3xl">
                    <div class="flex items-center gap-4 mb-10">
                        <div class="flex-1 h-px bg-gray-200"></div>
                        <h2 class="text-lg font-semibold text-gray-800 uppercase tracking-wider">Career Opportunities
                        </h2>
                        <div class="flex-1 h-px bg-gray-200"></div>
                    </div>

                    <div class="flex flex-wrap justify-center gap-4 sm:gap-8 mb-8 text-[var(--secondary-color)] font-medium">
                        <span>Collaborative</span>
                        <span>Innovative</span>
                        <span>Inclusive</span>
                    </div>

                    <h3 class="text-center text-2xl font-bold text-gray-800 mb-8">We Offer Careers Not Simply Jobs</h3>

                    <div class="text-gray-600 leading-relaxed space-y-5 text-[17px] max-w-4xl mx-auto">
                        <p>We have a formal recruitment and selection process, with equal employment opportunities and
                            encourage gender diversity and inclusion, where the candidates reflect to fulfill company's
                            present and future needs.</p>
                        <p>We hire people who are hungry for knowledge and experience, and they will continuously feed
                            that hunger with seeking opportunities or take on challenges to learn and grow.</p>
                        <p>As our business expands, so does our workforce. We regularly hire experienced and fresh
                            individuals based on their competence and available job role. Selected employees are offered
                            challenging assignments backed by competitive remuneration package.</p>
                    </div>

    
                    <h3 class="text-center text-xl font-bold text-gray-800 mt-16 mb-6">How We Hire</h3>
                    <div class="flex flex-wrap justify-center gap-4 sm:gap-8 mb-8 text-[var(--secondary-color)] font-medium">
                        <span>Sales</span>
                        <span>Technical</span>
                        <span>Corporate</span>
                    </div>

                    <div class="text-gray-600 leading-relaxed space-y-5 text-[17px] max-w-4xl mx-auto mb-12">
                        <p>The application process is simple and user friendly. Feel free to learn more about our
                            organisation and open positions. If you are interested in any position, read through the
                            requirements. If you match the specifications, complete our application form, and submit
                            your resume.</p>
                        <p>A member of our talent acquisition team will review your submission and if aligned with our
                            requirements, will reach out to you via email or phone call for an interview.</p>
                        <p>Next stage will have a formal interview process where you will be invited physically or
                            through a video call. There may be more than one interview for all positions.</p>
                        <p>Interview process at any stage will have few behavioral and situational questions, and always
                            time for you to ask questions.</p>
                    </div>

                    <div class="grid md:grid-cols-3 gap-6">
                        <div class="bg-white p-6 rounded-2xl shadow-sm">
                            <h4 class="font-bold text-lg mb-3">Sales</h4>
                            <p class="text-gray-500 text-sm">For a sales position, you can expect a typical "Day in the
                                Life" interview with a team member in that role...</p>
                        </div>
                        <div class="bg-white p-6 rounded-2xl shadow-sm">
                            <h4 class="font-bold text-lg mb-3">Technical</h4>
                            <p class="text-gray-500 text-sm">For a technical position, you can expect a complete
                                technical assessment, in relation to your knowledge and skills...</p>
                        </div>
                        <div class="bg-white p-6 rounded-2xl shadow-sm">
                            <h4 class="font-bold text-lg mb-3">Corporate</h4>
                            <p class="text-gray-500 text-sm">For a corporate position, you may expect assessment of
                                your knowledge, experience, Innovation and skills...</p>
                        </div>
                    </div>

                    <div id="apply" class="text-center mt-12">
                        <a href="#"
                            class="inline-block px-16 py-5 bg-[var(--secondary-color)] text-white font-semibold tracking-widest uppercase rounded-2xl hover:scale-105 transition-transform">
                            Apply Now
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

</x-frontend.layout>
