<footer class="bg-default-950/40 backdrop-blur-3xl">
    <div class="container lg:px-4">
        <div class="flex flex-col lg:flex-row justify-between gap-14 py-24">
            <div class="lg:w-3/12">
                <a href="#" class="flex items-center gap-2 logo">
                    <img src="assets/images/logo/mrglogo-white@3x.png" class="w-36" alt="">
                </a>

                <p class="text-default-200 text-sm font-medium max-w-xs mt-6">
                    {{__('public.footerText')}}
                </p>
            </div>

            <div class="lg:w-5/12">
                <div>
                    <h5 class="xl:text-xl lg:text-lg font-semibold text-default-200 mb-2">{{__('public.locationLabel')}}</h5>
                    <div style="padding-bottom: 50%; position: relative;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3473115.940082111!2d-9.790845258558623!3d31.778264163271064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0b88619651c58d%3A0xd9d39381c42cffc3!2sMorocco!5e0!3m2!1sen!2smy!4v1740361065445!5m2!1sen!2smy"
                            width="1200" height="750" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            class="w-full h-full left-0 top-0 absolute"></iframe>
                    </div>
                </div>
            </div>

            <div class="lg:w-4/12">
                <div class="grid md:grid-cols-2 sm:grid-cols-2 gap-6">
                    <div>
                        <ul class="flex flex-col gap-3">
                            <h5 class="xl:text-xl lg:text-lg font-semibold text-default-200 mb-2">{{__('public.resourcesLabel')}}</h5>
                                {!! __('public.resourcesList')!!}
                                
                        </ul>
                    </div>

                    <div>
                        <ul class="flex flex-col gap-3">
                            <h5 class="xl:text-xl lg:text-lg font-semibold text-default-200 mb-2">{{__('public.quickLinkLabel')}}</h5>
                            {!! __('public.quickLinkList')!!}
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- Grid End -->
    </div><!-- Container End -->

    <div class="border-t border-white/10 py-6">
        <div
            class="container lg:px-20 flex flex-wrap justify-center items-center gap-4 h-full md:justify-between text-center md:text-start">
            {!! __('public.tncText')!!}
        </div><!-- Flex End -->
    </div><!-- Container End -->
</footer>
