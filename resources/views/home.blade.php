@extends('layouts.master')
@section('content')
    <section id="home" class="relative pt-[74px] overflow-hidden">
        <div class="container-fluid lg:px-10 md:px-3 relative overflow-hidden">
            <div class="lg:py-24 py-[74px] md:rounded-lg shadow bg-default-950/40 backdrop-blur-3xl">
                <div class="container relative">
                    <div class="absolute top-0">
                        <i data-lucide="badge"
                            class="animate-[spin_10s_linear_infinite] h-12 w-12 fill-primary/20 text-transparent"></i>
                    </div>
                    <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                        <div class="md:col-span-7" data-aos="fade-right" data-aos-easing="ease" data-aos-duration="1000">
                            <div class="md:me-6">
                                <h4 class="font-semibold text-4xl/tight lg:text-6xl/tight capitalize text-white mb-4"><span
                                        class="bg-gradient-to-l from-red-600 to-primary text-transparent bg-clip-text">Redefining
                                    </span> Tech Solutions for Modern
                                    Businesses</h4>
                                <p class="text-lg max-w-xl text-default-200 mb-6">We drive innovation and deliver tailored
                                    technology solutions to help modern businesses thrive in the digital era.</p>

                                <div>
                                    <a href="#services"
                                        class="inline-flex items-center justify-center gap-2 bg-primary text-white py-2 px-6 rounded-lg hover:bg-primary-hover transition-all duration-300 me-2 mt-2">Explore
                                        Solutions</a>
                                    <a href="#contact"
                                        class="inline-flex items-center justify-center gap-2 py-2 px-6 transition-all duration-300 border bg-transparent border-white/20 text-white rounded-lg mt-2 hover:bg-primary hover:border-primary">Contact
                                        Us <i class="mdi mdi-arrow-top-right-thin text-xl leading-[0]"></i></a>
                                </div>
                            </div>
                        </div><!--end col-->

                        <div class="md:col-span-5" data-aos="fade-left" data-aos-easing="ease" data-aos-duration="1000">
                            <div class="flex gap-4 md:gap-6 tilt">
                                <div class="flex flex-col gap-4 md:gap-6 pt-10 md:pt-16 w-full">
                                    <img src="assets/images/hero-section/1.jpg"
                                        class="w-full h-40 md:h-[278px] rounded-lg object-cover" alt="">
                                    <img src="assets/images/hero-section/2.webp"
                                        class="w-full h-40 md:h-[278px] rounded-lg object-cover" alt="">
                                </div>
                                <div class="flex flex-col gap-4 md:gap-6 pb-10 md:pb-16 w-full relative">
                                    <div class="absolute bottom-0 end-0 -z-10">
                                        <i data-lucide="triangle"
                                            class="animate-[spin_10s_linear_infinite] h-12 w-12 fill-primary/20 text-transparent"></i>
                                    </div>
                                    <img src="assets/images/hero-section/4.webp"
                                        class="w-full h-40 md:h-[278px] rounded-lg object-cover" alt="">
                                    <img src="assets/images/hero-section/3.jpg"
                                        class="w-full h-40 md:h-[278px] rounded-lg object-cover" alt="">
                                </div>
                            </div>
                        </div>
                    </div><!--end grid-->
                </div><!--end container-->
            </div><!--end -->
        </div><!--end container fluid-->
    </section>

    <!-- Start features -->
    <section id="features" class="py-10 md:py-20">
        <div class="container mx-auto px-30">
            <div class="flex items-end justify-between mb-10">
                <div class="max-w-2xl mx-auto text-center">
                    <h2 class="text-2xl md:text-3xl font-medium capitalize text-white mb-4">Key Features</h2>
                </div>
            </div><!-- end flex -->

            <div class="grid grid-cols-1 mx-2.5 sm:grid-cols-4 gap-6 lg:grid-cols-3">

                <div class="space-y-6 h-72 sm:col-start-1 sm:col-span-2 lg:col-span-1" data-aos="fade-up"
                    data-aos-easing="ease" data-aos-duration="1000">
                    <div style="background-image: url('assets/images/key-features/2.jpg');"
                        class="relative bg-cover bg-center bg-default-950/40 rounded-xl backdrop-blur-3xl border-s-2 border-primary text-center hover:-translate-y-2 transition-all duration-500 h-full">
                        <div
                            class="inset-0 bg-black bg-opacity-50 rounded-xl h-full flex items-center justify-center backdrop-blur-sm">
                            <div class="p-6 sm:p-10 grid grid-cols-1 gap-3">
                                <h3 class="text-xl md:text-2xl font-medium text-white">Automation Solutions</h3>
                                <p class="text-sm md:text-md text-default-200 font-medium">Streamline operations with our
                                    ERP, optimizing resources, enhancing decisions, and providing real-time insights.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="space-y-6 h-72 sm:col-start-3 sm:col-span-2 lg:col-span-1" data-aos="fade-up"
                    data-aos-easing="ease" data-aos-duration="1000">
                    <div style="background-image: url('assets/images/key-features/3.webp');"
                        class="relative bg-cover bg-center bg-default-950/40 rounded-xl backdrop-blur-3xl border-s-2 border-primary text-center hover:-translate-y-2 transition-all duration-500 h-full">
                        <div
                            class="bg-black bg-opacity-50 rounded-xl h-full flex items-center justify-center backdrop-blur-sm">
                            <div class="p-6 sm:p-10 grid grid-cols-1 gap-3">
                                <h3 class="text-xl md:text-2xl font-medium text-white">Enterprise Resource Planning (ERP)
                                </h3>
                                <p class="text-sm md:text-md text-default-200 font-medium">Unify your business processes
                                    with MRG's tailored ERP solutions. Our ERP services consolidate resource management,
                                    enhance decision-making, and deliver real-time information.</p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="space-y-6 h-72 sm:col-start-2 sm:col-span-2 lg:col-span-1" data-aos="fade-up"
                    data-aos-easing="ease" data-aos-duration="1000">
                    <div style="background-image: url('assets/images/key-features/3.jpeg');"
                        class="relative bg-cover bg-center bg-default-950/40 rounded-xl backdrop-blur-3xl border-s-2 border-primary text-center hover:-translate-y-2 transition-all duration-500 h-full">
                        <div
                            class="inset-0 bg-black bg-opacity-50 rounded-xl h-full flex items-center justify-center backdrop-blur-sm">
                            <div class="p-6 sm:p-10 grid grid-cols-1 gap-3">
                                <h3 class="text-xl md:text-2xl font-medium text-white">3D Online Integration</h3>
                                <p class="text-sm md:text-md text-default-200 font-medium">Streamline
                                    business processes and improve efficiency with MRG's advanced automation solutions. We
                                    help businesses reduce manual effort and focus on what truly matters—growth and
                                    innovation.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end container -->
    </section>
    <!-- end Features -->


    <!-- Solutions & Services -->
    <section id="services" class="py-20">
        <div class="container mx-auto px-2">
            <div class="flex items-end justify-between mb-10">
                <div class="max-w-2xl mx-auto text-center">
                    <h2 class="text-3xl font-medium capitalize text-white mb-4">Solutions & Services</h2>
                    <p class="text-base text-default-200 font-medium">We provide innovative solutions like business
                        automation, custom software, and 3D digital experiences to help businesses streamline operations and
                        stay competitive in the digital age.</p>
                </div>
            </div><!-- end flex -->

            <div class="lg:grid lg:grid-cols-4 gap-6">
                <div class="lg:col-start-1 lg:col-span-2 border border-white/10 bg-default-950/40 mb-8 mx-4 overflow-hidden rounded-3xl p-6"
                    data-aos="fade-up" data-aos-easing="ease" data-aos-duration="1000">
                    <div class="group transition-all duration-700">
                        <div>
                            <div class="flex flex-col">
                                <div class="relative">
                                    <div class="opacity-100">
                                        <div
                                            class="group-hover:w-10 pb-12 group-hover:pb-8 transition-all duration-700 p-2">
                                            <i data-lucide="workflow"
                                                class="h-12 w-12 group-hover:h-8 group-hover:w-8 text-primary transition-all duration-700"></i>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-3xl font-medium text-white">Business Automation</h4>
                                    <div class="mt-6">
                                        <div class="grid sm:grid-cols-1 gap-3">

                                            <div class="bg-default-950/40 rounded-xl backdrop-blur-3xl">
                                                <button class="toggleButton text-default-100 ml-auto">
                                                    <div class="p-4">
                                                        <div class="flex items-center gap-3">
                                                            <div
                                                                class="inline-flex items-center justify-center h-10 w-10 bg-teal-500/20 text-teal-500 rounded-lg">
                                                                <i data-lucide="monitor-cog" class="h-6 w-6"></i>
                                                            </div>
                                                            <h3 class="text-lg sm:text-xl font-medium text-default-200">ERP
                                                                Integration</h3>
                                                            <i data-lucide="chevron-down" class="h-6 w-6"></i>
                                                        </div>

                                                        <div
                                                            class="collapsible-content overflow-hidden max-h-0 transition-all duration-500 ease-in-out">
                                                            <p class="text-default-100 text-justify	mt-3">Simplify
                                                                workflow,
                                                                resource
                                                                allocation, and data analysis for better decision-making and
                                                                efficiency by integrating Enterprise Resource Planning (ERP)
                                                                systems into your company's operations.</p>
                                                        </div>
                                                    </div>
                                                </button>
                                            </div><!-- end grid-cols -->

                                            <div class="bg-default-950/40 rounded-xl backdrop-blur-3xl">
                                                <button class="toggleButton text-default-100 ml-auto">
                                                    <div class="p-4">
                                                        <div class="flex items-center gap-3">
                                                            <div
                                                                class="inline-flex items-center justify-center h-10 w-10 bg-sky-500/20 text-sky-500 rounded-lg">
                                                                <i data-lucide="component" class="h-6 w-6"></i>
                                                            </div>
                                                            <h3 class="text-lg sm:text-xl font-medium text-default-200">
                                                                Workflow
                                                                Automation</h3>
                                                            <i data-lucide="chevron-down" class="h-6 w-6"></i>
                                                        </div>

                                                        <div
                                                            class="collapsible-content overflow-hidden max-h-0 transition-all duration-500 ease-in-out">
                                                            <p class="text-default-100 text-justify mt-3">
                                                                Automate repetitive
                                                                processes and
                                                                tasks
                                                                in your organization to enhance productivity, eliminate
                                                                human
                                                                error, and release valuable time for more strategic
                                                                higher-level
                                                                work</p>
                                                        </div>
                                                    </div>
                                                </button>
                                            </div><!-- end grid-cols -->

                                        </div><!-- end grid -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end grid-col -->


                <div class="lg:col-start-3 lg:col-span-2 border border-white/10 bg-default-950/40 mb-8 mx-4 overflow-hidden rounded-3xl p-6"
                    data-aos="fade-up" data-aos-easing="ease" data-aos-duration="1000">
                    <div class="group transition-all duration-700">
                        <div>
                            <div class="flex flex-col">
                                <div class="relative">
                                    <div class="opacity-100">
                                        <div
                                            class="group-hover:w-10 pb-12 group-hover:pb-8 transition-all duration-700 p-2">
                                            <i data-lucide="cuboid"
                                                class="h-12 w-12 group-hover:h-8 group-hover:w-8 text-primary transition-all duration-700"></i>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-3xl font-medium text-white">3D Digital Store Solutions</h4>
                                    <div class="mt-6">
                                        <div class="grid sm:grid-cols-1 gap-3">

                                            <div class="bg-default-950/40 rounded-xl backdrop-blur-3xl">
                                                <button class="toggleButton text-default-100 ml-auto">
                                                    <div class="p-4">
                                                        <div class="flex items-center gap-3">
                                                            <div
                                                                class="inline-flex items-center justify-center h-10 w-10 bg-violet-300/20 text-violet-300 rounded-lg">
                                                                <i data-lucide="scale-3d" class="h-6 w-6"></i>
                                                            </div>
                                                            <h3 class="text-lg sm:text-xl font-medium text-default-200">3D
                                                                Modeling
                                                                for
                                                                Retail</h3>
                                                            <i data-lucide="chevron-down" class="h-6 w-6"></i>
                                                        </div>

                                                        <div
                                                            class="collapsible-content overflow-hidden max-h-0 transition-all duration-500 ease-in-out">
                                                            <p class="text-default-100 text-justify mt-3">
                                                                Make your products come alive through
                                                                outstanding 3D models that enhance the online shopping
                                                                experience, allowing customers to visualize and interact
                                                                with
                                                                products from all angles</p>
                                                        </div>
                                                    </div>
                                                </button>
                                            </div><!-- end grid-cols -->

                                            <div class="bg-default-950/40 rounded-xl backdrop-blur-3xl">
                                                <button class="toggleButton text-default-100 ml-auto">
                                                    <div class="p-4">
                                                        <div class="flex items-center gap-3">
                                                            <div
                                                                class="inline-flex items-center justify-center h-10 w-10 bg-green-500/20 text-green-500 rounded-lg">
                                                                <i data-lucide="shopping-bag" class="h-6 w-6"></i>
                                                            </div>
                                                            <h3 class="text-lg sm:text-xl text-default-200">Immersive
                                                                Shopping
                                                                Experience</h3>
                                                            <i data-lucide="chevron-down" class="h-6 w-6"></i>
                                                        </div>

                                                        <div
                                                            class="collapsible-content overflow-hidden max-h-0 transition-all duration-500 ease-in-out">
                                                            <p class="text-default-100 text-justify mt-3">
                                                                Transform your online store into an interactive, immersive
                                                                space where customers can explore products in 3D
                                                                environments, providing a more realistic and captivating
                                                                purchasing experience</p>
                                                        </div>
                                                    </div>
                                                </button>
                                            </div><!-- end grid-cols -->
                                        </div><!-- end grid -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end grid-col -->

                <div class="lg:col-start-1 lg:col-span-2 border border-white/10 bg-default-950/40 mb-8 mx-4 overflow-hidden rounded-3xl p-6"
                    data-aos="fade-up" data-aos-easing="ease" data-aos-duration="1000">
                    <div class="group transition-all duration-700">
                        <div>
                            <div class="flex flex-col">
                                <div class="relative">
                                    <div class="opacity-100">
                                        <div
                                            class="group-hover:w-10 pb-12 group-hover:pb-8 transition-all duration-700 p-2">
                                            <i data-lucide="laptop-minimal"
                                                class="h-12 w-12 group-hover:h-8 group-hover:w-8 text-primary transition-all duration-700"></i>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-3xl font-medium text-white">Custom Software Development</h4>
                                    <div class="mt-6">
                                        <div class="grid sm:grid-cols-1 gap-3">

                                            <div class="bg-default-950/40 rounded-xl backdrop-blur-3xl">
                                                <button class="toggleButton text-default-100 ml-auto">
                                                    <div class="p-4">
                                                        <div class="flex items-center gap-3">
                                                            <div
                                                                class="inline-flex items-center justify-center h-10 w-10 bg-fuchsia-500/20 text-fuchsia-300 rounded-lg">
                                                                <i data-lucide="layout-panel-top" class="h-6 w-6"></i>
                                                            </div>
                                                            <h3 class="text-lg sm:text-xl font-medium text-default-200">
                                                                Tailored Tech
                                                                Solutions for Businesses</h3>
                                                            <i data-lucide="chevron-down" class="h-6 w-6"></i>
                                                        </div>

                                                        <div
                                                            class="collapsible-content overflow-hidden max-h-0 transition-all duration-500 ease-in-out">
                                                            <p class="text-default-100 text-justify mt-3">
                                                                Build custom software applications to
                                                                address the specific requirements of the business, from web
                                                                applications to mobile platforms, ensuring seamless
                                                                integration
                                                                with your current processes and tools</p>
                                                        </div>
                                                    </div>
                                                </button>
                                            </div><!-- end grid-cols -->



                                        </div><!-- end grid -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end grid-col -->

                <div class="lg:col-start-3 lg:col-span-2 border border-white/10 bg-default-950/40 mb-8 mx-4 overflow-hidden rounded-3xl p-6"
                    data-aos="fade-up" data-aos-easing="ease" data-aos-duration="1000">
                    <div class="group transition-all duration-700">
                        <div>
                            <div class="flex flex-col">
                                <div class="relative">
                                    <div class="opacity-100">
                                        <div
                                            class="group-hover:w-10 pb-12 group-hover:pb-8 transition-all duration-700 p-2">
                                            <i data-lucide="database"
                                                class="h-12 w-12 group-hover:h-8 group-hover:w-8 text-primary transition-all duration-700"></i>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-2xl font-medium text-white">Data & Analytics
                                    </h4>
                                    <div class="mt-6">
                                        <div class="grid sm:grid-cols-1 gap-3">

                                            <div class="bg-default-950/40 rounded-xl backdrop-blur-3xl">
                                                <button class="toggleButton text-default-100 ml-auto">
                                                    <div class="p-4">
                                                        <div class="flex items-center gap-4">
                                                            <div
                                                                class="inline-flex items-center justify-center h-10 w-10 bg-cyan-500/20 text-cyan-300 rounded-lg">
                                                                <i data-lucide="briefcase-business" class="h-6 w-6"></i>
                                                            </div>
                                                            <h3 class="text-lg sm:text-xl font-medium text-default-200">
                                                                Business
                                                                Intelligence Solutions</h3>
                                                            <i data-lucide="chevron-down" class="h-6 w-6"></i>
                                                        </div>

                                                        <div
                                                            class="collapsible-content overflow-hidden max-h-0 transition-all duration-500 ease-in-out">
                                                            <p class="text-default-100 text-justify mt-3">
                                                                Gain competitive advantage, maximize performance, and make
                                                                better decisions with data-driven insights. With our
                                                                business intelligence solutions, you can gather, analyze,
                                                                and act upon data in real time.</p>
                                                        </div>
                                                    </div>
                                                </button>
                                            </div><!-- end grid-cols -->
                                        </div><!-- end grid -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end grid-col -->

                <div class="lg:col-start-2 lg:col-span-2 border border-white/10 bg-default-950/40 mb-8 mx-4 overflow-hidden rounded-3xl p-6 col-span-2"
                    data-aos="fade-up" data-aos-easing="ease" data-aos-duration="1000">
                    <div class="group transition-all duration-700">
                        <div>
                            <div class="flex flex-col">
                                <div class="relative">
                                    <div class="opacity-100">
                                        <div
                                            class="group-hover:w-10 pb-12 group-hover:pb-8 transition-all duration-700 p-2">
                                            <i data-lucide="message-circle-more"
                                                class="h-12 w-12 group-hover:h-8 group-hover:w-8 text-primary transition-all duration-700"></i>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-3xl font-medium text-white">Technical Consulting
                                    </h4>
                                    <div class="mt-6">
                                        <div class="grid sm:grid-cols-1 gap-3">

                                            <div class="bg-default-950/40 rounded-xl backdrop-blur-3xl">
                                                <button class="toggleButton text-default-100 ml-auto">
                                                    <div class="p-4">
                                                        <div class="flex items-center gap-3">
                                                            <div
                                                                class="inline-flex items-center justify-center h-10 w-10 bg-amber-400/20 text-amber-300 rounded-lg">
                                                                <i data-lucide="grid-2x2-check" class="h-6 w-6"></i>
                                                            </div>
                                                            <h3 class="text-lg sm:text-xl font-medium text-default-200">IT
                                                                Strategy &
                                                                Implementation</h3>
                                                            <i data-lucide="chevron-down" class="h-6 w-6"></i>
                                                        </div>
                                                        <div
                                                            class="collapsible-content overflow-hidden max-h-0 transition-all duration-500 ease-in-out">
                                                            <p class="text-default-100 text-justify mt-3">
                                                                Receive professional advice on mapping technology to
                                                                business objectives. We provide consulting services to
                                                                define IT strategies, onboard new technologies, and ensure
                                                                the systems are optimized for performance and scalability.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </button>
                                            </div><!-- end grid-cols -->
                                        </div><!-- end grid -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end grid-col -->
            </div><!-- grid end -->
        </div>
    </section>
    <!-- End Solution & Services-->

    <!-- Start Industry Served -->
    <section id="features" class="pb-24">
        <div class="container px-8">
            <div class="flex items-end justify-between mb-10">
                <div class="max-w-2xl mx-auto text-center">
                    <h2 class="text-3xl font-medium capitalize text-white mb-4">Industry We Served</h2>
                </div>
            </div><!-- end flex -->

            <div class="grid grid-cols-1 sm:grid-cols-4 md:grid-cols-6 gap-6">
                <div style="background-image: url('assets/images/industry-served/1.webp');"
                    class="sm:col-start-1 sm:col-span-2 md:col-start-1 md:col-span-2 relative flex items-center bg-cover bg-center bg-default-600/40 p-2 rounded-lg h-28 sm:h-72"
                    data-aos="fade-up" data-aos-easing="ease" data-aos-duration="1000">

                    <div class="absolute inset-0 flex items-center text-center justify-center bg-black/40 rounded-lg">
                        <h2 class="text-xl font-medium text-default-200 p-4">Retail & E-commerce</h2>
                    </div>
                </div><!-- end grid-col -->

                <div style="background-image: url('assets/images/industry-served/2.png');"
                    class="sm:col-start-3 sm:col-span-2 md:col-start-3 md:col-span-2 relative flex items-center bg-cover bg-center bg-default-600/40 p-2 rounded-lg h-28 sm:h-72"
                    data-aos="fade-up" data-aos-easing="ease" data-aos-duration="1000">

                    <div class="absolute inset-0 flex items-center text-center justify-center bg-black/40 rounded-lg">
                        <h2 class="text-xl font-medium text-default-200 p-8">Logistics & Supply Chain </h2>
                    </div>
                </div><!-- end grid-col -->

                <div style="background-image: url('assets/images/industry-served/3.jpg');"
                    class="sm:col-start-1 sm:col-span-2 md:col-start-5 md:col-span-2 relative flex items-center bg-cover bg-center bg-default-600/40 p-2 rounded-lg h-28 sm:h-72"
                    data-aos="fade-up" data-aos-easing="ease" data-aos-duration="1000">

                    <div class="absolute inset-0 flex items-center text-center justify-center bg-black/40 rounded-lg">
                        <h2 class="text-xl font-medium text-default-200 p-8">Manufacturing</h2>
                    </div>
                </div><!-- end grid-col -->

                <div style="background-image: url('assets/images/industry-served/4.jpg');"
                    class="sm:col-start-3 sm:col-span-2 md:col-start-2 md:col-span-2 relative flex items-center bg-cover bg-left-bottom bg-default-600/40 p-2 rounded-lg h-28 sm:h-72"
                    data-aos="fade-up" data-aos-easing="ease" data-aos-duration="1000">

                    <div class="absolute inset-0 flex items-center text-center justify-center bg-black/40 rounded-lg">
                        <h2 class="text-xl font-medium text-default-200 p-8">Finance</h2>
                    </div>
                </div><!-- end grid-col -->

                <div style="background-image: url('assets/images/industry-served/5.jpg');"
                    class="sm:col-start-2 sm:col-span-2 md:col-start-4 md:col-span-2 relative flex items-center bg-cover bg-center bg-default-600/40 p-2 rounded-lg h-28 sm:h-72"
                    data-aos="fade-up" data-aos-easing="ease" data-aos-duration="1000">

                    <div class="absolute inset-0 flex items-center text-center justify-center bg-black/35 rounded-lg">
                        <h2 class="text-xl font-medium text-default-200 p-8">Healthcare</h2>
                    </div>
                </div><!-- end grid-col -->
            </div><!-- end grid -->
        </div><!-- end container -->
    </section>
    <!-- End Industry Served -->

    <!-- Start -->
    <section id="blog" class="py-24">
        <div class="container">
            <div class="flex flex-wrap items-center justify-between mb-10">
                <div>
                    <h2 class="text-4xl font-medium capitalize text-white mb-2">Blog & Insights</h2>
                    <p class="text-sm text-default-200 font-medium">Unlocking Tomorrow's Technology Today: Expert Insights
                        and Industry Trends</p>
                </div>
            </div><!-- end flex -->

            <div class="grid gap-4 px-4 sm:px-0 lg:grid-cols-2">
                <div class="bg-default-950/40 backdrop-blur-3xl group rounded-lg space-y-6 overflow-hidden p-3"
                    data-aos="fade-right" data-aos-easing="ease" data-aos-duration="1000">
                    <div class="relative rounded-lg overflow-hidden">
                        <a href="https://sea.mashable.com/tech/36191/what-ai-experts-are-saying-about-deepseek-r1"
                            target=”_blank”>
                            <img class="mx-auto h-full max-w-full object-cover object-top ransition duration-500 group-hover:scale-105"
                                src="assets/images/blog/1.jpg">
                            <div class="absolute inset-0">
                                <div class="bg-black/60 h-full w-full rounded">
                                    <div class="flex items-center sm:items-end h-full p-4">
                                        <div>
                                            <p class="mb-2 text-white font-semibold">29 Jan 2025</p>
                                            <h5 class="text-md sm:text-3xl font-bold text-white mb-4">What AI experts are
                                                saying about
                                                DeepSeek R1</h5>
                                            <p>By <strong class="text-blue-500">Cecily Mauran </strong></p>
                                            <a href="https://sea.mashable.com/tech/36191/what-ai-experts-are-saying-about-deepseek-r1"
                                                target=”_blank”
                                                class="text-white border-b border-dashed border-default-200 pb-1 hidden sm:inline-block">Read
                                                More
                                                <i data-lucide="move-right" class="inline h-4 w-4 ms-2"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div><!-- end grid-col -->

                <div class="bg-default-950/40 backdrop-blur-3xl group rounded-lg space-y-6 overflow-hidden p-3"
                    data-aos="fade-left" data-aos-easing="ease" data-aos-duration="1000">
                    <div class="relative rounded-lg overflow-hidden">
                        <a href="https://edition.cnn.com/2025/02/13/tech/china-apple-alibaba-ai-hnk-intl/index.html"
                            target=”_blank”>
                            <img class="mx-auto h-full max-w-full object-cover object-top ransition duration-500 group-hover:scale-105"
                                src="assets/images/blog/2.jpg">
                            <div class="absolute inset-0">
                                <div class="bg-black/60 h-full w-full rounded">
                                    <div class="flex items-center sm:items-end h-full p-4">
                                        <div>
                                            <p class="mb-2 text-white font-semibold">13 Feb 2025</p>
                                            <h5 class="text-md sm:text-3xl font-bold text-white mb-2">Apple picks Alibaba
                                                to
                                                launch AI
                                                features in China</h5>
                                            <p>By <strong class="text-blue-500">John Liu, CNN</strong></p>
                                            <a href="https://edition.cnn.com/2025/02/13/tech/china-apple-alibaba-ai-hnk-intl/index.html"
                                                target=”_blank”
                                                class="text-white border-b border-dashed border-default-200 pb-1 hidden sm:inline-bloc">Read
                                                More <i data-lucide="move-right" class="inline h-4 w-4 ms-2"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div><!-- end grid-col -->
            </div><!-- end grid -->
        </div><!-- end container -->
    </section>
    <!-- End -->

    <!-- Start -->
    <section class="py-24" id="contact" data-aos="zoom-in" data-aos-easing="ease" data-aos-duration="1000">
        <div class="container px-0 sm:px-16 md:px-20">
            <div class="sm:border sm:rounded-2xl bg-slate-950/40 bg-cover bg-center"
                style="background-image: url(assets/images/contact/1.jpg);">
                <div class="p-6 bg-default-950/80 sm:rounded-2xl">
                    <div>
                        <div class="flex justify-center mt-6">
                            <div class="max-w-3xl text-center">
                                <h1 class="text-4xl md:text-4xl text-default-100 font-medium mb-2">Keep In Touch With Us
                                </h1>
                                <p class="text-sm md:text-base text-default-300 font-medium lg:max-w-md mx-auto">
                                    Please drop your message in the contact form to approach us. </p>
                            </div>
                        </div>

                        <div class="flex justify-center mt-10">
                            <div class="max-w-3xl flex-col justify-center items-center">
                                <div class="sm:inline-flex sm:justify-center sm:items-center sm:mr-8 text-center mb-6">
                                    <div class="inline-flex justify-center items-center">
                                        <i data-lucide="mail" class="h-8 w-8 text-white"></i>
                                    </div>
                                    <p class="text-base text-default-300 font-medium lg:max-w-md mx-auto pl-2">
                                        <a href="mailto:mrgtech@gmail.com">mrgtech@gmail.com</a>
                                    </p>
                                </div>

                                <div class="sm:inline-flex sm:justify-center sm:items-center text-center mb-6">
                                    <div class="inline-flex justify-center items-center">
                                        <i data-lucide="phone" class="h-8 w-8 text-white"></i>
                                    </div>
                                    <p class="text-base text-default-300 font-medium lg:max-w-md mx-auto pl-2">
                                        <a href="tel:+212123456789">+212123456789</a>
                                    </p>
                                </div>

                                <div class="sm:inline-flex sm:justify-center sm:items-center text-center sm:hidden">
                                    <div class="inline-flex justify-center items-center">
                                        <i data-lucide="map-pin" class="h-8 w-8 text-white"></i>
                                    </div>
                                    <p class="text-base text-default-300 text-center font-medium lg:max-w-md mx-auto pl-2">
                                        test location
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-center mt-4">
                            <div class="max-w-3xl flex-col justify-center items-center hidden sm:block">
                                <div class="sm:inline-flex sm:justify-center sm:items-center text-center mr-8">
                                    <div class="inline-flex justify-center items-center">
                                        <i data-lucide="map-pin" class="h-8 w-8 text-white"></i>
                                    </div>
                                    <p class="text-base text-default-300 text-center font-medium lg:max-w-md mx-auto pl-2">
                                        test location
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="lg:col-span-6 col-span-2 mt-10">
                            <div class="bg-neutral-500/40 rounded-xl lg:w-3/4 xl:w-1/2 lg:mx-auto">
                                <div class="p-10">
                                    <form class="space-y-2 mb-6">
                                        <label for="name" class="text-base text-white">Name: </label>
                                        <div class="relative pb-4">
                                            <input type="text" id="name"
                                                class="w-full h-12 text-white rounded-lg bg-default-950/60 backdrop-blur-3xl border-white/10 focus:ring-0 focus:border-white/10"
                                                placeholder="Your name" name="name" required>
                                        </div>

                                        <label for="email" class="text-base text-white">Email: </label>
                                        <div class="relative pb-4">
                                            <input type="email" id="email"
                                                class="w-full h-12 text-white rounded-lg bg-default-950/60 backdrop-blur-3xl border-white/10 focus:ring-0 focus:border-white/10"
                                                placeholder="Your email" name="email" required>
                                        </div>

                                        <label for="message" class="text-base text-white">Message: </label>
                                        <div class="relative pb-4">
                                            <textarea
                                                class="w-full min-h-36 text-white rounded-lg bg-default-950/60 backdrop-blur-3xl border-white/10 focus:ring-0 focus:border-white/10 overflow-hidden"
                                                placeholder="Message" name="message" required></textarea>
                                        </div>
                                        <button type="submit"
                                            class="inline-flex items-center justify-center gap-2 px-6 top-[6px] end-[6px] h-9 transition-all bg-primary hover:bg-primary-hover border-primary hover:border-primary-hover text-white rounded-md">
                                            Send<i data-lucide="move-right" class="h-6 w-6"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> <!-- tab-end -->
                </div>
            </div>
        </div>
    </section>
    <!-- End -->

    <!-- Start FAQ -->
    <section id="faq" class="py-20">
        <div class="container">
            <div class="flex flex-wrap items-center justify-between mb-10">
                <div>
                    <h2 class="text-4xl font-medium capitalize text-white mb-2">FAQs</h2>
                    <p class="text-sm text-default-200 font-medium">The followings are the Frquently Ask Questions (FAQs):
                    </p>
                </div>
            </div><!-- end flex -->

            <div class="grid lg:grid-cols-3 gap-6">
                <div class="hs-accordion-group space-y-4" data-aos="fade-left" data-aos-easing="ease"
                    data-aos-duration="1000">
                    <div class="hs-accordion border border-white/10 bg-default-950/40 backdrop-blur-3xl rounded-lg overflow-hidden max-h-96"
                        id="faq-1">
                        <button
                            class="hs-accordion-toggle capitalize px-6 py-4 inline-flex items-center justify-between gap-x-3 w-full text-left text-white transition-all"
                            aria-controls="faq-1">
                            <h5 class="text-base font-semibold flex">
                                1. What is MRG Tech?
                            </h5>
                            <i data-lucide="chevron-up"
                                class="h-4 w-4 transition-all duration-500 hs-accordion-active:-rotate-180"></i>
                        </button>
                        <div id="faq-1"
                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                            aria-labelledby="faq-1">
                            <div class="px-6 pb-4 pt-0">
                                <p class="text-default-300 text-sm font-medium">
                                    MRG Tech is a forward-thinking technology company dedicated to creating innovative
                                    software solutions. We specialize in business automation, ERP systems, 3D digital
                                    experiences, and tailored tech solutions designed to help companies optimize their
                                    operations and enhance user experiences. </p>
                            </div>
                        </div>
                    </div>

                    <div class="hs-accordion border border-white/10 bg-default-950/40 backdrop-blur-3xl rounded-lg overflow-hidden min-h-8"
                        id="faq-2">
                        <button
                            class="hs-accordion-toggle capitalize px-6 py-4 inline-flex items-center justify-between gap-x-3 w-full text-left text-white transition-all"
                            aria-controls="faq-2">
                            <h5 class="text-base font-semibold flex">
                                2. What services does MRG Tech offer?
                            </h5>
                            <i data-lucide="chevron-up"
                                class="h-4 w-4 transition-all duration-500 hs-accordion-active:-rotate-180"></i>
                        </button>
                        <div id="faq-2"
                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                            aria-labelledby="faq-2">
                            <div class="px-6 pb-4 pt-0">
                                <ul class="list-[upper-roman] pl-4">
                                    <strong class="text-default-200 text-base font-medium">Our services include:</strong>
                                    <li>
                                        <p class="text-default-300 text-sm font-medium">Business Automation</p>
                                    </li>
                                    <li>
                                        <p class="text-default-300 text-sm font-medium">ERP Integration</p>
                                    </li>
                                    <li>
                                        <p class="text-default-300 text-sm font-medium">3D Digital Store Solutions</p>
                                    </li>
                                    <li>
                                        <p class="text-default-300 text-sm font-medium">Custom Software Development</p>
                                    </li>
                                    <li>
                                        <p class="text-default-300 text-sm font-medium">Data & Analytics</p>
                                    </li>
                                    <li>
                                        <p class="text-default-300 text-sm font-medium">Technical Consulting</p>
                                    </li>
                                </ul>


                            </div>
                        </div>
                    </div>

                    <div class="hs-accordion border border-white/10 bg-default-950/40 backdrop-blur-3xl rounded-lg overflow-hidden"
                        id="faq-3">
                        <button
                            class="hs-accordion-toggle capitalize px-6 py-4 inline-flex items-center justify-between gap-x-3 w-full text-left text-white transition-all"
                            aria-controls="faq-3">
                            <h5 class="text-base font-semibold flex">
                                3. Which industries does MRG Tech serve?
                            </h5>
                            <i data-lucide="chevron-up"
                                class="h-4 w-4 transition-all duration-500 hs-accordion-active:-rotate-180"></i>
                        </button>
                        <div id="faq-3"
                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                            aria-labelledby="faq-3">
                            <div class="px-6 pb-4 pt-0">
                                <ul class="list-[upper-roman] pl-4">
                                    <strong class="text-default-200 text-base font-medium">Our core values are centered
                                        around:</strong>
                                    <li>
                                        <p class="text-default-300 text-sm font-medium">Retail & E-commerce</p>
                                    </li>
                                    <li>
                                        <p class="text-default-300 text-sm font-medium">Logistics & Supply Chain</p>
                                    </li>
                                    <li>
                                        <p class="text-default-300 text-sm font-medium">Manufacturing</p>
                                    </li>
                                    <li>
                                        <p class="text-default-300 text-sm font-medium">Finance</p>
                                    </li>
                                    <li>
                                        <p class="text-default-300 text-sm font-medium">Healthcare</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- end grid-col -->


                <div class="hs-accordion-group space-y-4" data-aos="fade-left" data-aos-easing="ease"
                    data-aos-duration="1000">
                    <div class="hs-accordion border border-white/10 bg-default-950/40 backdrop-blur-3xl rounded-lg overflow-hidden"
                        id="faq-4">
                        <button
                            class="hs-accordion-toggle capitalize px-6 py-4 inline-flex items-center justify-between gap-x-3 w-full text-left text-white transition-all"
                            aria-controls="faq-4">
                            <h5 class="text-base font-semibold flex">
                                4. What are MRG Tech's core values?
                            </h5>
                            <i data-lucide="chevron-up"
                                class="h-4 w-4 transition-all duration-500 hs-accordion-active:-rotate-180"></i>
                        </button>
                        <div id="faq-4"
                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                            aria-labelledby="faq-4">
                            <div class="px-6 pb-4 pt-0">
                                <ul class="list-[upper-roman] pl-4">
                                    <strong class="text-default-200 text-base font-medium">Our core values are centered
                                        around:</strong>
                                    <li>
                                        <p class="text-default-300 text-sm font-medium">Innovation: Constantly pushing
                                            technological boundaries.</p>
                                    </li>
                                    <li>
                                        <p class="text-default-300 text-sm font-medium">Client-Centric Approach:
                                            Prioritizing the needs of our clients.</p>
                                    </li>
                                    <li>
                                        <p class="text-default-300 text-sm font-medium">Automation & Efficiency:
                                            Streamlining business processes.</p>
                                    </li>
                                    <li>
                                        <p class="text-default-300 text-sm font-medium">Integrity & Transparency: Building
                                            trust through honest communication.</p>
                                    </li>
                                    <li>
                                        <p class="text-default-300 text-sm font-medium">Empowerment Through Technology:
                                            Helping businesses achieve growth.</p>
                                    </li>
                                    <li>
                                        <p class="text-default-300 text-sm font-medium">Adaptability & Agility: Staying
                                            responsive to market changes.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="hs-accordion border border-white/10 bg-default-950/40 backdrop-blur-3xl rounded-lg overflow-hidden"
                        id="faq-5">
                        <button
                            class="hs-accordion-toggle capitalize px-6 py-4 inline-flex items-center justify-between gap-x-3 w-full text-left text-white transition-all"
                            aria-controls="faq-5">
                            <h5 class="text-base font-semibold flex">
                                5. How does MRG Tech help with business automation?
                            </h5>
                            <i data-lucide="chevron-up"
                                class="h-4 w-4 transition-all duration-500 hs-accordion-active:-rotate-180"></i>
                        </button>
                        <div id="faq-5"
                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                            aria-labelledby="faq-5">
                            <div class="px-6 pb-4 pt-0">
                                <p class="text-default-300 text-sm font-medium">
                                    We provide ERP integrations and workflow automation to eliminate repetitive tasks,
                                    optimize
                                    processes, and improve operational efficiency, allowing businesses to focus on growth.

                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="hs-accordion border border-white/10 bg-default-950/40 backdrop-blur-3xl rounded-lg overflow-hidden"
                        id="faq-6">
                        <button
                            class="hs-accordion-toggle capitalize px-6 py-4 inline-flex items-center justify-between gap-x-3 w-full text-left text-white transition-all"
                            aria-controls="faq-6">
                            <h5 class="text-base font-semibold flex">
                                6. What makes MRG Tech's 3D digital solutions unique?
                            </h5>
                            <i data-lucide="chevron-up"
                                class="h-4 w-4 transition-all duration-500 hs-accordion-active:-rotate-180"></i>
                        </button>
                        <div id="faq-6"
                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                            aria-labelledby="faq-6">
                            <div class="px-6 pb-4 pt-0">
                                <p class="text-default-300 text-sm font-medium">
                                    Our 3D digital store solutions offer immersive experiences that allow users to interact
                                    with
                                    products in a virtual environment, enhancing engagement and replicating in-store
                                    experiences online.

                                </p>
                            </div>
                        </div>
                    </div>
                </div><!-- end grid-col -->

                <div class="hs-accordion-group space-y-4" data-aos="fade-left" data-aos-easing="ease"
                    data-aos-duration="1000">
                    <div class="hs-accordion border border-white/10 bg-default-950/40 backdrop-blur-3xl rounded-lg overflow-hidden"
                        id="faq-7">
                        <button
                            class="hs-accordion-toggle capitalize px-6 py-4 inline-flex items-center justify-between gap-x-3 w-full text-left text-white transition-all"
                            aria-controls="faq-7">
                            <h5 class="text-base font-semibold flex">
                                7. How can we collaborate with MRG Tech?
                            </h5>
                            <i data-lucide="chevron-up"
                                class="h-4 w-4 transition-all duration-500 hs-accordion-active:-rotate-180"></i>
                        </button>
                        <div id="faq-7"
                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                            aria-labelledby="faq-7">
                            <div class="px-6 pb-4 pt-0">
                                <p class="text-default-300 text-sm font-medium">
                                    We welcome partnerships and collaborations. If you're interested in working with us,
                                    please
                                    contact us via our website or email us at <a href= "mailto:name@email.com"
                                        class="underline decoration-solid">mrgtech@email.com</a>.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="hs-accordion border border-white/10 bg-default-950/40 backdrop-blur-3xl rounded-lg overflow-hidden"
                        id="faq-8">
                        <button
                            class="hs-accordion-toggle capitalize px-6 py-4 inline-flex items-center justify-between gap-x-3 w-full text-left text-white transition-all"
                            aria-controls="faq-8">
                            <h5 class="text-base font-semibold flex">
                                8. Is MRG Tech suitable for small businesses?
                            </h5>
                            <i data-lucide="chevron-up"
                                class="h-4 w-4 transition-all duration-500 hs-accordion-active:-rotate-180"></i>
                        </button>
                        <div id="faq-8"
                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                            aria-labelledby="faq-8">
                            <div class="px-6 pb-4 pt-0">
                                <p class="text-default-300 text-sm font-medium">
                                    Absolutely! We tailor our solutions to meet the needs of businesses of all sizes, from
                                    startups to large enterprises.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="hs-accordion border border-white/10 bg-default-950/40 backdrop-blur-3xl rounded-lg overflow-hidden"
                        id="faq-9">
                        <button
                            class="hs-accordion-toggle capitalize px-6 py-4 inline-flex items-center justify-between gap-x-3 w-full text-left text-white transition-all"
                            aria-controls="faq-9">
                            <h5 class="text-base font-semibold flex">
                                9. How can I contact MRG Tech?
                            </h5>
                            <i data-lucide="chevron-up"
                                class="h-4 w-4 transition-all duration-500 hs-accordion-active:-rotate-180"></i>
                        </button>
                        <div id="faq-9"
                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                            aria-labelledby="faq-9">
                            <div class="px-6 pb-4 pt-0">
                                <ul class="list-[upper-roman] pl-4">
                                    <strong class="text-default-200 text-base font-medium">You can reach us via:</strong>
                                    <li>
                                        <p class="text-default-300 text-sm font-medium">Email: <a
                                                href= "mailto:name@email.com"
                                                class="underline decoration-solid">mrgtech@email.com</a>
                                        </p>
                                    </li>
                                    <li>
                                        <p class="text-default-300 text-sm font-medium">Phone Number: <a
                                                href="tel:+212123456789"
                                                class="underline decoration-solid">+212123456789</a></p>
                                    </li>
                                    <li>
                                        <p class="text-default-300 text-sm font-medium">Website: <a
                                                href="https://www.mrgtech.com"
                                                class="underline decoration-solid">www.mrgtech.com</a></p>
                                    </li>
                            </div>
                        </div>
                    </div>
                </div><!-- end grid-col -->
            </div><!-- end grid -->
        </div><!-- end container -->
    </section>
    <!-- End FAQ -->

    <script>
        const currentUrl = window.location.href;
        console.log(currentUrl);
        const navItem = document.querySelectorAll('.toggleButton');

        if (currentUrl == "http://mrg-landingnew.test/About") {

        }
        // Select all toggle buttons
        const toggleButtons = document.querySelectorAll('.toggleButton');
        const collapsibleContents = document.querySelectorAll('.collapsible-content');

        toggleButtons.forEach((button, index) => {
            button.addEventListener('click', () => {
                const content = collapsibleContents[index];

                // Toggle between max-height 0 and max-height of content's scrollHeight
                if (content.style.maxHeight) {
                    content.style.maxHeight = null; // Collapse
                } else {
                    content.style.maxHeight = content.scrollHeight + "px"; // Expand
                }

                // Optionally toggle the chevron rotation for visual feedback
                button.querySelector('i').classList.toggle('rotate-180');
            });
        });
    </script>
@endsection
