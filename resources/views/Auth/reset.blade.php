@extends('layouts.master')
@section('content')
    <div>
        <div class="fixed top-0 -z-10">
            <div class="blur-[200px] w-[500px] h-[500px] rounded-full bg-gradient-to-tl from-red-600/40 to-pink-600/40">
            </div>
        </div>
        <div class="fixed top-0 end-0 -z-10">
            <div class="blur-[200px] w-[500px] h-[500px] rounded-full bg-gradient-to-tl from-red-600/40 to-pink-600/40">
            </div>
        </div>
        <div class="fixed inset-0 flex items-center justify-center -z-10">
            <div class="blur-[200px] w-[500px] h-[500px] rounded-full bg-gradient-to-tl from-red-600/40 to-pink-600/40">
            </div>
        </div>
        <div class="fixed bottom-0 start-0 -z-10">
            <div class="blur-[200px] w-[500px] h-[500px] rounded-full bg-gradient-to-tl from-red-600/40 to-pink-600/40">
            </div>
        </div>
        <div class="fixed bottom-0 end-0 -z-10">
            <div class="blur-[200px] w-[500px] h-[500px] rounded-full bg-gradient-to-tl from-red-600/40 to-pink-600/40">
            </div>
        </div>
    </div><!-- end body bg gradient -->

    <section class="flex items-center py-36 lg:px-0 px-0 lg:p-10 w-full lg:h-screen">
        <div class="container">
            <div class="backdrop-blur-2xl bg-default-950/40 rounded-2xl overflow-hidden max-w-5xl mx-auto">
                <div class="grid lg:grid-cols-2 gap-10">
                    <div class="hidden lg:block ps-4 py-4">
                        <div class="relative rounded-xl overflow-hidden h-full w-full">
                            <img src="assets/images/auth/auth-img.jpg" alt=""
                                class="w-full h-full transform -scale-x-100">
                            <div class="absolute inset-0 bg-default-950/40">
                            </div>
                        </div>
                    </div><!-- end gri-cols -->

                    <div class="flex flex-col h-full p-10 lg:ps-0">
                        <div class="pb-10">
                            <a href="{{ route('home') }}" class="flex">
                                <img src="assets/images/logo/mrglogo-white.png" alt="dark logo" class="h-10">
                            </a>
                        </div>
                        @if (session('error'))
                            <div id="error-message">
                                <div class="bg-red-400 opacity-85 p-4 rounded">
                                    <p class="text-white bold text-lg">{{ session('error') }}</p>
                                </div>
                            </div>
                        @endif
                        <div class="my-auto">
                            <h4 class="text-2xl font-bold text-white mb-3">Reset Password</h4>
                            <p class="text-default-300 mb-8 max-w-sm">Please enter new password to reset your previous
                                password</p>

                            <!-- form -->
                            <form action="{{ route('handleReset', ['token' => $user->remember_token]) }}" method="POST"
                                class="text-start">
                                @csrf
                                <div class="mb-4">
                                    <label for="emailaddress"
                                        class="block text-base/normal font-semibold text-default-200 mb-2">Password</label>
                                    <input
                                        class="block w-full rounded py-1.5 px-3 bg-transparent border-white/10 border-default-200 text-white/80 focus:border-white/25 focus:ring-transparent"
                                        type="password" id="newpassword" name="password" placeholder="Enter new password"
                                        required>
                                </div>
                                <div class="mb-4">
                                    <label for="emailaddress"
                                        class="block text-base/normal font-semibold text-default-200 mb-2">Confirm
                                        Password</label>
                                    <input
                                        class="block w-full rounded py-1.5 px-3 bg-transparent border-white/10 border-default-200 text-white/80 focus:border-white/25 focus:ring-transparent"
                                        type="password" id="newpassword" name="cfmPassword"
                                        placeholder="Enter new password again" required>
                                </div>
                                <!-- end email input -->
                                <div class="text-center">
                                    <button
                                        class="w-full inline-flex items-center justify-center px-6 py-2 backdrop-blur-2xl bg-primary-600/90 text-white rounded-lg transition-all duration-500 group hover:bg-primary-600 mt-5"
                                        type="submit"><span class="fw-bold">Reset</span> </button>
                                </div>
                            </form><!-- end form-->
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end grid -->
            </div><!-- end container -->
    </section><!-- end section -->
@endsection
