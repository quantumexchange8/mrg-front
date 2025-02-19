@extends('layouts.master')
@section('content')
    <!-- Hero Section Start -->
    <section id="home" class="relative overflow-hidden pt-[72px] pb-8" data-aos="zoom-out" data-aos-easing="ease"
        data-aos-duration="1000">
        <div class="">
            <div class="overflow-hidden bg-no-repeat bg-cover bg-center"
                style="background-image: url(assets/images/about/1.webp);">
                <div class="bg-default-950/70">
                    <div class="container">
                        <div class="relative">
                            <div class="absolute top-20 start-80 -z-1 animate-[spin_10s_linear_infinite]">
                                <img src="assets/images/ai/star.svg" alt="">
                            </div>
                            <div class="absolute tot-auto  bottom-40 end-60 -z-1 animate-[spin_10s_linear_infinite]">
                                <img src="assets/images/ai/star.svg" alt="">
                            </div>
                            <div class="absolute tot-auto  bottom-96 end-36 -z-1 animate-[spin_10s_linear_infinite]">
                                <img src="assets/images/ai/star.svg" alt="">
                            </div>

                            <div class="flex h-full items-center justify-center py-24 md:py-36">
                                <div class="text-center max-w-3xl mx-auto relative">
                                    <h1 class="md:text-4xl/snug text-3xl font-semibold text-white mt-10">About Us</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Container End -->
    </section>
    <!-- Hero end  -->

    <!-- start -->
    <section class="pt-20 pb-24 md:py-12 px-2">
        <div class="container">
            <div class="grid md:grid-cols-1 gap-6 items-center">
                <div data-aos="fade-right" data-aos-easing="ease" data-aos-duration="1000" class=" mx-8">
                    <h2 class=" text-4xl sm:text-5xl font-medium capitalize text-white mt-4 text-center">Company Overview
                    </h2>
                    <div class="text-center lg:mx-32 xl:mx-60 pt-6">
                        <p class="text-base sm:text-lg font-medium text-default-200 mt-2 text-center">"To revolutionize the
                            way
                            businesses
                            operate by
                            providing innovative,
                            automated, and immersive technology solutions that simplify processes,
                            enhance user experiences, and set the standard for the future of digital
                            interactions."
                        </p>
                    </div>
                </div><!-- end grid-col -->
            </div><!-- end grid -->
        </div><!-- end container -->
    </section>
    <!-- end -->

    <!-- Start Core Value -->
    <section class="py-12" data-aos="zoom-out" data-aos-easing="ease" data-aos-duration="1000">
        <div class="container p-0 lg:p-20">
            <div class="flex hidden items-end justify-between mb-10 md:block">
                <div class="max-w-2xl mx-auto text-center">
                    <h2 class="text-4xl font-medium capitalize text-white mb-2">Our Core Values</h2>
                </div>
            </div><!-- end flex -->

            <div class="flex items-center flex-wrap sm:rounded-3xl bg-default-950/40 backdrop-blur-3xl" data-aos="zoom-out"
                data-aos-easing="ease" data-aos-duration="1000">

                <div class="max-w-2xl mx-auto text-center pt-10 md:hidden">
                    <h2 class="text-4xl font-medium capitalize text-white mb-2">Our Core Values</h2>
                </div>

                <div class="md:w-1/2 w-auto grow p-4 text-center md:h-80 md:border-e border-b border-white/10">
                    <div>
                        <div
                            class="inline-flex items-center justify-center h-16 w-16 bg-violet-900/40 text-violet-500 rounded-xl mb-10">
                            <i data-lucide="framer" class="h-10 w-10"></i>
                        </div>
                    </div>
                    <h2 class="text-2xl text-white font-medium">Innovation at the Core</h2>
                    <p class="text-base text-default-200 mb-6 pt-6">Constantly pushing technological boundaries to deliver
                        creative and futuristic
                        solutions.
                    </p>
                </div><!-- end card -->

                <div class="md:w-1/2 w-auto grow p-4 text-center md:h-80 border-b border-white/10">
                    <div>
                        <div
                            class="inline-flex items-center justify-center h-16 bg-cyan-400/30 text-cyan-400 w-16 bg-primary/10 text-primary rounded-xl mb-10">
                            <i data-lucide="users-round" class="h-10 w-10"></i>
                        </div>

                    </div>
                    <h2 class="text-2xl text-white font-medium">Client-Centric Approach</h2>
                    <p class="text-base text-default-200 mb-6 pt-6">Prioritizing the needs and goals of clients by offering
                        tailored and scalable
                        technology solutions.
                    </p>
                </div><!-- end card -->

                <div class="md:w-1/2 w-auto grow p-4 text-center md:h-80 md:border-e border-b border-white/10">
                    <div>
                        <div
                            class="inline-flex items-center justify-center h-16 w-16 bg-teal-500/30 text-teal-500 bg-primary/10 text-primary rounded-xl mb-10">
                            <i data-lucide="cog" class="h-10 w-10"></i>
                        </div>

                    </div>
                    <h2 class="text-2xl text-white font-medium">Automation & Efficiency</h2>
                    <p class="text-base text-default-200 mb-6 pt-6">Streamlining business processes by automating operations
                        to enhance
                        productivity and reduce manual workloads.
                    </p>
                </div><!-- end card -->

                <div class="md:w-1/2 w-auto grow p-4 text-center md:h-80 border-b border-white/10">
                    <div>
                        <div
                            class="inline-flex items-center justify-center h-16 w-16 bg-yellow-600/30 text-yellow-500 bg-primary/10 text-primary rounded-xl mb-10">
                            <i data-lucide="building-2" class="h-10 w-10"></i>
                        </div>

                    </div>
                    <h2 class="text-2xl text-white font-medium">Empowerment Through Technology</h2>
                    <div class="h-24">
                        <p class="text-base text-default-200 mb-6 pt-6">
                            Enabling businesses to achieve growth and success
                            through smart,
                            integrated digital solutions.
                        </p>
                    </div>

                </div><!-- end card -->


                <div class="md:w-1/3 w-auto grow p-4 text-center md:h-80 border-b md:border-b-0 md:border-e border-white/10">
                    <div>
                        <div
                            class="inline-flex items-center justify-center h-16 w-16 bg-purple-700/30 text-purple-700 bg-primary/10 text-primary rounded-xl mb-10">
                            <i data-lucide="blend" class="h-10 w-10"></i>
                        </div>

                    </div>
                    <h2 class="text-2xl text-white font-medium">Integrity & Transparency</h2>
                    <p class="text-base text-default-200 mb-6 pt-6">Building trust with partners and clients through honest
                        communication and
                        ethical business practices.
                    </p>
                </div><!-- end card -->

                <div class="md:w-1/3 w-auto grow p-4 text-center md:h-80 border-b md:border-b-0 md:border-e border-white/10">
                    <div>
                        <div
                            class="inline-flex items-center justify-center h-16 w-16 bg-lime-500/30 text-lime-500 rounded-xl mb-10">
                            <i data-lucide="leaf" class="h-10 w-10"></i>
                        </div>

                    </div>
                    <h2 class="text-2xl text-white font-medium">Sustainability & Impact</h2>
                    <p class="text-base text-default-200 mb-6 pt-6">Designing technology that supports long-term growth
                        while being mindful of
                        environmental and economic sustainability.

                    </p>
                </div><!-- end card -->

                <div class="md:w-1/3 w-auto grow p-4 text-center md:h-80 border-b md:border-b-0 border-white/10">
                    <div>
                        <div
                            class="inline-flex items-center justify-center h-16 w-16 bg-rose-500/30 text-rose-500 bg-primary/10 text-primary rounded-xl mb-10">
                            <i data-lucide="chart-no-axes-gantt" class="h-10 w-10"></i>
                        </div>
                    </div>
                    <h2 class="text-2xl text-white font-medium">Adaptability & Agility</h2>
                    <p class="text-base text-default-200 mb-6 pt-6">Staying flexible and responsive to the evolving needs of
                        the market and
                        technological advancements.
                    </p>
                </div><!-- end card -->
            </div><!-- end Core Value -->
        </div><!-- end container -->
    </section>
@endsection
