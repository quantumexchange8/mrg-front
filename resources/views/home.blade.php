@extends('layouts.master')
@section('content')
    @cookieconsentview
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
                                        class="bg-gradient-to-l from-red-600 to-primary text-transparent bg-clip-text">{!! __('public.heroText-1') !!}
                                </h4>
                                <p class="text-lg max-w-xl text-default-200 mb-6">{!! __('public.heroText-2') !!}</p>

                                <div>
                                    <a href="#services"
                                        class="inline-flex items-center justify-center gap-2 bg-primary text-white py-2 px-6 rounded-lg hover:bg-primary-hover transition-all duration-300 me-2 mt-2">
                                        {{ __('public.heroBtn-1') }}</a>
                                    <a href="#contact"
                                        class="inline-flex items-center justify-center gap-2 py-2 px-6 transition-all duration-300 border bg-transparent border-white/20 text-white rounded-lg mt-2 hover:bg-primary hover:border-primary">
                                        <i class="mdi mdi-arrow-top-right-thin text-xl leading-[0]"></i>
                                        {{ __('public.heroBtn-2') }}</a>
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


    @if (session('contactSent'))
        <div id="success-message"
            class="fixed top-20 left-1/2 transform z-10 -translate-x-1/2 bg-green-500 text-white text-lg px-6 py-4 rounded-lg shadow-lg flex items-center space-x-2 transition-opacity duration-500 opacity-90">
            <p>{{ session('contactSent') }}</p>
        </div>
    @elseif(session('success'))
        <div id="success-message"
            class="fixed top-20 left-1/2 transform z-10 -translate-x-1/2 bg-green-500 text-white text-lg px-6 py-4 rounded-lg shadow-lg flex items-center space-x-2 transition-opacity duration-500 opacity-90">
            <p>{{ session('success') }}</p>
        </div>
    @endif


    <script>
        setTimeout(function() {
            const successMessage = document.getElementById('success-message');
            if (successMessage) {
                successMessage.style.display = 'none';
            }
        }, 3000);
    </script>

    <!-- Start features -->
    <section id="features" class="py-10 md:py-20">
        <div class="container mx-auto px-30">
            <div class="flex items-end justify-between mb-10">
                <div class="max-w-2xl mx-auto text-center">
                    <h2 class="text-2xl md:text-3xl font-medium capitalize text-white mb-4">{{ __('public.featureTitle') }}
                    </h2>
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
                                <h3 class="text-xl md:text-2xl font-medium text-white">{{ __('public.featureSubtitle-1') }}
                                </h3>
                                <p class="text-sm md:text-md text-default-200 font-medium">
                                    {{ __('public.featureSubtext-1') }}</p>
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
                                <h3 class="text-xl md:text-2xl font-medium text-white">{{ __('public.featureSubtitle-2') }}
                                </h3>
                                <p class="text-sm md:text-md text-default-200 font-medium">
                                    {{ __('public.featureSubtext-2') }}</p>
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
                                <h3 class="text-xl md:text-2xl font-medium text-white">{{ __('public.featureSubtitle-3') }}
                                </h3>
                                <p class="text-sm md:text-md text-default-200 font-medium">
                                    {{ __('public.featureSubtext-3') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end container -->
    </section>
    <!-- end Features -->

    <!-- About Section Start -->
    <section id="about" class="relative overflow-hidden pt-[72px] sm:pb-8" data-aos="zoom-out" data-aos-easing="ease"
        data-aos-duration="1000">
        <div>
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
                                <div class="container">
                                    <div class="grid md:grid-cols-1 gap-6 items-center">
                                        <div data-aos="fade-right" data-aos-easing="ease" data-aos-duration="1000"
                                            class=" mx-8">
                                            <h2
                                                class=" text-4xl sm:text-5xl font-medium capitalize text-white mt-4 text-center">
                                                {{ __('public.aboutTitle') }}
                                            </h2>
                                            <div class="text-center lg:mx-32 xl:mx-60 pt-6">
                                                <p
                                                    class="text-base sm:text-lg font-medium text-default-200 mt-2 text-center">
                                                    {{ __('public.aboutText') }}
                                                </p>
                                            </div>
                                        </div><!-- end grid-col -->
                                    </div><!-- end grid -->
                                </div><!-- end container -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div><!-- Container End -->
    </section>
    <!-- Hero end  -->

    <section class="sm:py-12" data-aos="zoom-out" data-aos-easing="ease" data-aos-duration="1000">
        <div class="container p-4 sm:p-10 lg:p-12">

            <div class="grid md:grid-cols-2 gap-6 items-center mt-12">
                <div data-aos="fade-right" data-aos-easing="ease" data-aos-duration="1000">
                    <div class="max-w-md p-3">
                        <span
                            class="py-1 px-3 rounded-md text-sm font-extrabold uppercase tracking-wider text-indigo-400 bg-white/5">{{ __('public.ourTeamTag') }}</span>
                        <h2 class="text-3xl font-medium text-justify capitalize text-default-200 mt-4">
                            {{ __('public.ourTeamTitle') }}
                        </h2>
                        <p class="text-lg font-medium text-default-300 mt-5 mb-8 ">{!! __('public.ourTeamText') !!}</p>
                    </div>
                </div><!-- ebd grid-cols -->

                <div class="relative" data-aos="fade-left" data-aos-easing="ease" data-aos-duration="1000">
                    <img src="assets/images/team/team.jpg" class="rounded-xl" alt="">
                    <div class="absolute inset-0 bg-default-950/50 rounded-xl"></div>
                </div><!-- ebd grid-cols -->
            </div><!-- end grid -->
        </div><!-- end container -->
    </section>

    <!-- Start Core Value -->
    <section class="sm:py-12" data-aos="zoom-out" data-aos-easing="ease" data-aos-duration="1000">
        <div class="container p-0 sm:p-10 lg:p-20">
            <div class="flex hidden items-end justify-between mb-10 md:block">
                <div class="max-w-2xl mx-auto text-center">
                    <h2 class="text-4xl font-medium capitalize text-white mb-2">{{ __('public.coreValueTitle') }}</h2>
                </div>
            </div><!-- end flex -->

            <div class="flex items-center flex-wrap sm:rounded-3xl bg-default-950/40 backdrop-blur-3xl"
                data-aos="zoom-out" data-aos-easing="ease" data-aos-duration="1000">

                <div class="max-w-2xl mx-auto text-center pt-10 md:hidden">
                    <h2 class="text-4xl font-medium capitalize text-white mb-2">{{ __('public.coreValueTitle') }}</h2>
                </div>

                <div class="md:w-1/2 w-auto grow p-4 text-center md:h-80 md:border-e border-b border-white/10">
                    <div>
                        <div
                            class="inline-flex items-center justify-center h-16 w-16 bg-violet-900/40 text-violet-500 rounded-xl mb-10">
                            <i data-lucide="framer" class="h-10 w-10"></i>
                        </div>
                    </div>
                    <h2 class="text-2xl text-white font-medium">{{ __('public.coreValueSubTitle-1') }}</h2>
                    <p class="text-base text-default-200 mb-6 pt-6">
                        {{ __('public.coreValueSubText-1') }}
                    </p>
                </div><!-- end card -->

                <div class="md:w-1/2 w-auto grow p-4 text-center md:h-80 border-b border-white/10">
                    <div>
                        <div class="inline-flex items-center justify-center h-16 bg-cyan-400/30 w-16 rounded-xl mb-10">
                            <i data-lucide="users-round" class="h-10 w-10 text-cyan-400"></i>
                        </div>

                    </div>
                    <h2 class="text-2xl text-white font-medium">{{ __('public.coreValueSubTitle-2') }}</h2>
                    <p class="text-base text-default-200 mb-6 pt-6">
                        {{ __('public.coreValueSubText-2') }}
                    </p>
                </div><!-- end card -->

                <div class="md:w-1/2 w-auto grow p-4 text-center md:h-80 md:border-e border-b border-white/10">
                    <div>
                        <div class="inline-flex items-center justify-center h-16 w-16 bg-teal-500/30 rounded-xl mb-10">
                            <i data-lucide="cog" class="h-10 w-10 text-teal-500 "></i>
                        </div>

                    </div>
                    <h2 class="text-2xl text-white font-medium">{{ __('public.coreValueSubTitle-3') }}</h2>
                    <p class="text-base text-default-200 mb-6 pt-6">
                        {{ __('public.coreValueSubText-3') }}
                    </p>
                </div><!-- end card -->

                <div class="md:w-1/2 w-auto grow p-4 text-center md:h-80 border-b border-white/10">
                    <div>
                        <div class="inline-flex items-center justify-center h-16 w-16 bg-yellow-600/30 rounded-xl mb-10">
                            <i data-lucide="building-2" class="h-10 w-10 text-yellow-500"></i>
                        </div>

                    </div>
                    <h2 class="text-2xl text-white font-medium">{{ __('public.coreValueSubTitle-4') }}</h2>
                    <div class="h-24">
                        <p class="text-base text-default-200 mb-6 pt-6">
                            {{ __('public.coreValueSubText-4') }}
                        </p>
                    </div>

                </div><!-- end card -->


                <div
                    class="md:w-1/3 w-auto grow p-4 text-center md:h-80 border-b md:border-b-0 md:border-e border-white/10">
                    <div>
                        <div class="inline-flex items-center justify-center h-16 w-16 bg-purple-700/30 rounded-xl mb-10">
                            <i data-lucide="blend" class="h-10 w-10 text-purple-700"></i>
                        </div>

                    </div>
                    <h2 class="text-2xl text-white font-medium">{{ __('public.coreValueSubTitle-5') }}</h2>
                    <p class="text-base text-default-200 mb-6 pt-6">
                        {{ __('public.coreValueSubText-5') }}
                    </p>
                </div><!-- end card -->

                <div
                    class="md:w-1/3 w-auto grow p-4 text-center md:h-80 border-b md:border-b-0 md:border-e border-white/10">
                    <div>
                        <div class="inline-flex items-center justify-center h-16 w-16 bg-lime-500/30 rounded-xl mb-10">
                            <i data-lucide="leaf" class="h-10 w-10 text-lime-500"></i>
                        </div>

                    </div>
                    <h2 class="text-2xl text-white font-medium">{{ __('public.coreValueSubTitle-6') }}</h2>
                    <p class="text-base text-default-200 mb-6 pt-6">
                        {{ __('public.coreValueSubText-6') }}
                    </p>
                </div><!-- end card -->

                <div class="md:w-1/3 w-auto grow p-4 text-center md:h-80 border-b md:border-b-0 border-white/10">
                    <div>
                        <div class="inline-flex items-center justify-center h-16 w-16 bg-rose-500/30 rounded-xl mb-10">
                            <i data-lucide="chart-no-axes-gantt" class="h-10 w-10 text-rose-500"></i>
                        </div>
                    </div>
                    <h2 class="text-2xl text-white font-medium">{{ __('public.coreValueSubTitle-7') }}</h2>
                    <p class="text-base text-default-200 mb-6 pt-6">
                        {{ __('public.coreValueSubText-7') }}
                    </p>
                </div><!-- end card -->
            </div><!-- end Core Value -->
        </div><!-- end container -->
    </section>

    <!-- Solutions & Services -->
    <section id="services" class="py-20">
        <div class="container mx-auto px-2">
            <div class="flex items-end justify-between mb-10">
                <div class="max-w-2xl mx-auto text-center">
                    <h2 class="text-3xl font-medium capitalize text-white mb-4">{{ __('public.snsTitle') }}</h2>
                    <p class="text-base text-default-200 font-medium">{{ __('public.snsText') }}</p>
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
                                    <h4 class="text-3xl font-medium text-white">{{ __('public.sns-1-title') }}</h4>
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
                                                            <h3 class="text-lg sm:text-xl font-medium text-default-200">
                                                                {{ __('public.sns-1-subTitle-1') }}</h3>
                                                            <i data-lucide="chevron-down" class="h-6 w-6"></i>
                                                        </div>

                                                        <div
                                                            class="collapsible-content overflow-hidden max-h-0 transition-all duration-500 ease-in-out">
                                                            <p class="text-default-100 text-justify	mt-3">
                                                                {{ __('public.sns-1-subText-1') }}
                                                            </p>
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
                                                                {{ __('public.sns-1-subTitle-2') }}</h3>
                                                            <i data-lucide="chevron-down" class="h-6 w-6"></i>
                                                        </div>

                                                        <div
                                                            class="collapsible-content overflow-hidden max-h-0 transition-all duration-500 ease-in-out">
                                                            <p class="text-default-100 text-justify mt-3">
                                                                {{ __('public.sns-1-subText-2') }}
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
                                    <h4 class="text-3xl font-medium text-white">{{ __('public.sns-2-title') }}</h4>
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
                                                            <h3 class="text-lg sm:text-xl font-medium text-default-200">
                                                                {{ __('public.sns-2-subTitle-1') }}</h3>
                                                            <i data-lucide="chevron-down" class="h-6 w-6"></i>
                                                        </div>

                                                        <div
                                                            class="collapsible-content overflow-hidden max-h-0 transition-all duration-500 ease-in-out">
                                                            <p class="text-default-100 text-justify mt-3">
                                                                {{ __('public.sns-2-subText-1') }}</p>
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
                                                            <h3 class="text-lg sm:text-xl text-default-200">
                                                                {{ __('public.sns-2-subTitle-2') }}</h3>
                                                            <i data-lucide="chevron-down" class="h-6 w-6"></i>
                                                        </div>

                                                        <div
                                                            class="collapsible-content overflow-hidden max-h-0 transition-all duration-500 ease-in-out">
                                                            <p class="text-default-100 text-justify mt-3">
                                                                {{ __('public.sns-2-subText-2') }}</p>
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
                                    <h4 class="text-3xl font-medium text-white">{{ __('public.sns-3-title') }}</h4>
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
                                                                {{ __('public.sns-3-subTitle-1') }}</h3>
                                                            <i data-lucide="chevron-down" class="h-6 w-6"></i>
                                                        </div>

                                                        <div
                                                            class="collapsible-content overflow-hidden max-h-0 transition-all duration-500 ease-in-out">
                                                            <p class="text-default-100 text-justify mt-3">
                                                                {{ __('public.sns-3-subText-1') }}</p>
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
                                    <h4 class="text-2xl font-medium text-white">{{ __('public.sns-4-title') }}
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
                                                                {{ __('public.sns-4-subTitle-1') }}</h3>
                                                            <i data-lucide="chevron-down" class="h-6 w-6"></i>
                                                        </div>

                                                        <div
                                                            class="collapsible-content overflow-hidden max-h-0 transition-all duration-500 ease-in-out">
                                                            <p class="text-default-100 text-justify mt-3">
                                                                {{ __('public.sns-4-subText-1') }}</p>
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
                                    <h4 class="text-3xl font-medium text-white">{{ __('public.sns-5-title') }}
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
                                                            <h3 class="text-lg sm:text-xl font-medium text-default-200">
                                                                {{ __('public.sns-5-subTitle-1') }}</h3>
                                                            <i data-lucide="chevron-down" class="h-6 w-6"></i>
                                                        </div>
                                                        <div
                                                            class="collapsible-content overflow-hidden max-h-0 transition-all duration-500 ease-in-out">
                                                            <p class="text-default-100 text-justify mt-3">
                                                                {{ __('public.sns-5-subText-1') }}
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
                    <h2 class="text-3xl font-medium capitalize text-white mb-4">{{ __('public.industryTitle') }}</h2>
                </div>
            </div><!-- end flex -->

            <div class="grid grid-cols-1 sm:grid-cols-4 md:grid-cols-6 gap-6">
                <div style="background-image: url('assets/images/industry-served/1.webp');"
                    class="sm:col-start-1 sm:col-span-2 md:col-start-1 md:col-span-2 relative flex items-center bg-cover bg-center bg-default-600/40 p-2 rounded-lg h-28 sm:h-72"
                    data-aos="fade-up" data-aos-easing="ease" data-aos-duration="1000">

                    <div class="absolute inset-0 flex items-center text-center justify-center bg-black/40 rounded-lg">
                        <h2 class="text-xl font-medium text-default-200 p-4">{{ __('public.industrySubTitle-1') }}</h2>
                    </div>
                </div><!-- end grid-col -->

                <div style="background-image: url('assets/images/industry-served/2.png');"
                    class="sm:col-start-3 sm:col-span-2 md:col-start-3 md:col-span-2 relative flex items-center bg-cover bg-center bg-default-600/40 p-2 rounded-lg h-28 sm:h-72"
                    data-aos="fade-up" data-aos-easing="ease" data-aos-duration="1000">

                    <div class="absolute inset-0 flex items-center text-center justify-center bg-black/40 rounded-lg">
                        <h2 class="text-xl font-medium text-default-200 p-8">{{ __('public.industrySubTitle-2') }}</h2>
                    </div>
                </div><!-- end grid-col -->

                <div style="background-image: url('assets/images/industry-served/3.jpg');"
                    class="sm:col-start-1 sm:col-span-2 md:col-start-5 md:col-span-2 relative flex items-center bg-cover bg-center bg-default-600/40 p-2 rounded-lg h-28 sm:h-72"
                    data-aos="fade-up" data-aos-easing="ease" data-aos-duration="1000">

                    <div class="absolute inset-0 flex items-center text-center justify-center bg-black/40 rounded-lg">
                        <h2 class="text-xl font-medium text-default-200 p-8">{{ __('public.industrySubTitle-3') }}</h2>
                    </div>
                </div><!-- end grid-col -->

                <div style="background-image: url('assets/images/industry-served/finance.jpg');"
                    class="sm:col-start-3 sm:col-span-2 md:col-start-2 md:col-span-2 relative flex items-center bg-cover bg-left-bottom bg-default-600/40 p-2 rounded-lg h-28 sm:h-72"
                    data-aos="fade-up" data-aos-easing="ease" data-aos-duration="1000">

                    <div class="absolute inset-0 flex items-center text-center justify-center bg-black/40 rounded-lg">
                        <h2 class="text-xl font-medium text-default-200 p-8">{{ __('public.industrySubTitle-4') }}</h2>
                    </div>
                </div><!-- end grid-col -->

                <div style="background-image: url('assets/images/industry-served/healthcare.jpg');"
                    class="sm:col-start-2 sm:col-span-2 md:col-start-4 md:col-span-2 relative flex items-center bg-cover bg-center bg-default-600/40 p-2 rounded-lg h-28 sm:h-72"
                    data-aos="fade-up" data-aos-easing="ease" data-aos-duration="1000">

                    <div class="absolute inset-0 flex items-center text-center justify-center bg-black/35 rounded-lg">
                        <h2 class="text-xl font-medium text-default-200 p-8">{{ __('public.industrySubTitle-5') }}</h2>
                    </div>
                </div><!-- end grid-col -->
            </div><!-- end grid -->
        </div><!-- end container -->
    </section>
    <!-- End Industry Served -->

    <!-- Start Contact -->
    <section class="" id="contact" data-aos="zoom-in" data-aos-easing="ease" data-aos-duration="1000">
        <div class="container px-0 sm:px-16 md:px-20">
            <div class="sm:rounded-2xl bg-slate-950/40 bg-cover bg-center"
                style="background-image: url(assets/images/contact/1.jpg);">
                <div class="p-6 bg-default-950/80 sm:rounded-2xl">
                    <div>
                        <div class="flex justify-center mt-6">
                            <div class="max-w-3xl text-center">
                                <h1 class="text-4xl md:text-4xl text-default-100 font-medium mb-2">
                                    {{ __('public.contactTitle') }}
                                </h1>
                                <p class="text-sm md:text-base text-default-300 font-medium lg:max-w-md mx-auto">
                                    {{ __('public.contactText') }} </p>
                            </div>
                        </div>

                        <div class="flex justify-center mt-10">
                            <div class="max-w-3xl flex-col justify-center items-center">
                                <div class="sm:inline-flex sm:justify-center sm:items-center sm:mr-8 text-center mb-6">
                                    <div class="inline-flex justify-center items-center">
                                        <i data-lucide="mail" class="h-8 w-8 text-white"></i>
                                    </div>
                                    <p class="text-base text-default-300 font-medium lg:max-w-md mx-auto pl-2">
                                        <a href="mailto:mehdi@mrgtech.ma">{{ __('public.email') }}</a>
                                    </p>
                                </div>

                                <div class="sm:inline-flex sm:justify-center sm:items-center text-center mb-6">
                                    <div class="inline-flex justify-center items-center">
                                        <i data-lucide="phone" class="h-8 w-8 text-white"></i>
                                    </div>
                                    <p class="text-base text-default-300 font-medium lg:max-w-md mx-auto pl-2">
                                        <a href="tel:0668105106 " class="hover:underline">{{ __('public.phone-1') }}
                                        </a><br />
                                        <a href="tel:0653632244 " class="hover:underline">{{ __('public.phone-2') }} </a>
                                    </p>
                                </div>

                                <div class="sm:inline-flex sm:justify-center sm:items-center text-center sm:hidden mt-8">
                                    <p class="text-sm text-default-300 text-center font-medium lg:max-w-md mx-auto pl-2">
                                        {!! __('public.techphone') !!}
                                    </p>
                                </div>
                            </div>
                        </div>



                        <div class="flex justify-center mt-12">
                            <div class="max-w-3xl flex-col justify-center items-center hidden sm:block">
                                <div class="sm:inline-flex sm:justify-center sm:items-center text-center mr-8">
                                    <p class="text-sm text-default-300 text-center font-medium lg:max-w-md mx-auto pl-2">
                                        {!! __('public.techphone') !!}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="lg:col-span-6 col-span-2 mt-10">
                            <div class="bg-neutral-500/40 rounded-xl lg:w-3/4 xl:w-1/2 lg:mx-auto">
                                <div class="p-10">
                                    <form class="space-y-2 mb-6" action="{{ route('sendContact') }}" method="POST">
                                        @csrf
                                        <label for="name"
                                            class="text-base text-white">{{ __('public.nameLabel') }}</label>
                                        <div class="relative pb-4">
                                            <input type="text" id="name"
                                                class="w-full h-12 text-white rounded-lg bg-default-950/60 backdrop-blur-3xl border-white/10 focus:ring-0 focus:border-white/10"
                                                placeholder="{{ __('public.namePlaceholder') }}" name="name" required>
                                        </div>

                                        <label for="email"
                                            class="text-base text-white">{{ __('public.emailLabel') }}</label>
                                        <div class="relative pb-4">
                                            <input type="email" id="email"
                                                class="w-full h-12 text-white rounded-lg bg-default-950/60 backdrop-blur-3xl border-white/10 focus:ring-0 focus:border-white/10"
                                                placeholder="{{ __('public.emailPlaceholder') }}" name="email"
                                                required>
                                        </div>

                                        <label for="message"
                                            class="text-base text-white">{{ __('public.messageLabel') }}</label>
                                        <div class="relative pb-4">
                                            <textarea
                                                class="w-full min-h-36 text-white rounded-lg bg-default-950/60 backdrop-blur-3xl border-white/10 focus:ring-0 focus:border-white/10 overflow-hidden"
                                                placeholder="{{ __('public.messagePlaceholder') }}" name="message" required></textarea>
                                        </div>
                                        <button type="submit"
                                            class="inline-flex items-center justify-center gap-2 px-6 top-[6px] end-[6px] h-9 transition-all bg-primary hover:bg-primary-hover border-primary hover:border-primary-hover text-white rounded-md">
                                            {{ __('public.submitLabel') }}<i data-lucide="move-right"
                                                class="h-6 w-6"></i>
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
                    <h2 class="text-4xl font-medium capitalize text-white mb-2">{{__('public.faqTitle')}}</h2>
                    <p class="text-sm text-default-200 font-medium">{{__('public.faqText')}}
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
                                {{ __('public.faq-1-question') }}</p>
                            </h5>
                            <i data-lucide="chevron-up"
                                class="h-4 w-4 transition-all duration-500 hs-accordion-active:-rotate-180"></i>
                        </button>
                        <div id="faq-1"
                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                            aria-labelledby="faq-1">
                            <div class="px-6 pb-4 pt-0">
                                <p class="text-default-300 text-sm font-medium">
                                    {{ __('public.faq-1-answer') }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="hs-accordion border border-white/10 bg-default-950/40 backdrop-blur-3xl rounded-lg overflow-hidden min-h-8"
                        id="faq-2">
                        <button
                            class="hs-accordion-toggle capitalize px-6 py-4 inline-flex items-center justify-between gap-x-3 w-full text-left text-white transition-all"
                            aria-controls="faq-2">
                            <h5 class="text-base font-semibold flex">
                                {{ __('public.faq-2-question') }}</p>
                            </h5>
                            <i data-lucide="chevron-up"
                                class="h-4 w-4 transition-all duration-500 hs-accordion-active:-rotate-180"></i>
                        </button>
                        <div id="faq-2"
                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                            aria-labelledby="faq-2">
                            <div class="px-6 pb-4 pt-0">
                                <ul class="list-[upper-roman] pl-4">
                                    {!! __('public.faq-2-answer') !!}
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
                                {{ __('public.faq-3-question') }}</p>
                            </h5>
                            <i data-lucide="chevron-up"
                                class="h-4 w-4 transition-all duration-500 hs-accordion-active:-rotate-180"></i>
                        </button>
                        <div id="faq-3"
                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                            aria-labelledby="faq-3">
                            <div class="px-6 pb-4 pt-0">
                                <ul class="list-[upper-roman] pl-4">
                                    {!! __('public.faq-3-answer') !!}
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
                                {{ __('public.faq-4-question') }}</p>
                            </h5>
                            <i data-lucide="chevron-up"
                                class="h-4 w-4 transition-all duration-500 hs-accordion-active:-rotate-180"></i>
                        </button>
                        <div id="faq-4"
                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                            aria-labelledby="faq-4">
                            <div class="px-6 pb-4 pt-0">
                                <ul class="list-[upper-roman] pl-4">
                                    {!! __('public.faq-4-answer') !!}
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
                                {{ __('public.faq-5-question') }}</p>
                            </h5>
                            <i data-lucide="chevron-up"
                                class="h-4 w-4 transition-all duration-500 hs-accordion-active:-rotate-180"></i>
                        </button>
                        <div id="faq-5"
                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                            aria-labelledby="faq-5">
                            <div class="px-6 pb-4 pt-0">
                                <p class="text-default-300 text-sm font-medium">
                                    {{ __('public.faq-5-answer') }}</p>
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
                                {{ __('public.faq-6-question') }}
                            </h5>
                            <i data-lucide="chevron-up"
                                class="h-4 w-4 transition-all duration-500 hs-accordion-active:-rotate-180"></i>
                        </button>
                        <div id="faq-6"
                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                            aria-labelledby="faq-6">
                            <div class="px-6 pb-4 pt-0">
                                <p class="text-default-300 text-sm font-medium">
                                    {{ __('public.faq-6-answer') }}
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
                                {{ __('public.faq-7-question') }}
                            </h5>
                            <i data-lucide="chevron-up"
                                class="h-4 w-4 transition-all duration-500 hs-accordion-active:-rotate-180"></i>
                        </button>
                        <div id="faq-7"
                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                            aria-labelledby="faq-7">
                            <div class="px-6 pb-4 pt-0">
                                <p class="text-default-300 text-sm font-medium">
                                    {!! __('public.faq-7-answer') !!}
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
                                {{ __('public.faq-8-question') }}
                            </h5>
                            <i data-lucide="chevron-up"
                                class="h-4 w-4 transition-all duration-500 hs-accordion-active:-rotate-180"></i>
                        </button>
                        <div id="faq-8"
                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                            aria-labelledby="faq-8">
                            <div class="px-6 pb-4 pt-0">
                                <p class="text-default-300 text-sm font-medium">
                                    {{ __('public.faq-8-answer') }}
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
                                {{ __('public.faq-9-question') }}
                            </h5>
                            <i data-lucide="chevron-up"
                                class="h-4 w-4 transition-all duration-500 hs-accordion-active:-rotate-180"></i>
                        </button>
                        <div id="faq-9"
                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                            aria-labelledby="faq-9">
                            <div class="px-6 pb-4 pt-0">
                                <ul class="list-[upper-roman] pl-4">
                                    {!! __('public.faq-9-answer') !!}
                                    <li><p class="text-default-300 text-sm font-medium">{{__('public.faq-9-text')}}<a href="{{ route('home') }}" class="underline decoration-solid">www.MRGtech.ma</a></p></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- end grid-col -->
            </div><!-- end grid -->
        </div><!-- end container -->
    </section>
    <!-- End FAQ -->

    <!-- Start -->
    <section id="blog" class="py-24">
        <div class="container">
            <div class="flex flex-wrap items-center justify-between mb-10">
                <div>
                    <h2 class="text-4xl font-medium capitalize text-white mb-2">{{ __('public.blogTitle') }}</h2>
                    <p class="text-sm text-default-200 font-medium">{{ __('public.blogText') }}</p>
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
                                                class="text-white border-b border-dashed border-default-200 pb-1 hidden sm:inline-block">
                                                {{ __('public.blogBtn') }}
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
                                                class="text-white border-b border-dashed border-default-200 pb-1 hidden sm:inline-block">{{ __('public.blogBtn') }}<i
                                                    data-lucide="move-right" class="inline h-4 w-4 ms-2"></i>
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
