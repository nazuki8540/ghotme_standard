<x-guest-layout>
    <div class="auth-box h-full flex flex-col justify-center">
        <div class="mobile-logo text-center mb-6 lg:hidden flex justify-center">
            <div class="mb-10 inline-flex items-center justify-center">
                <x-application-logo />
                <span class="ltr:ml-3 rtl:mr-3 text-xl font-Inter font-bold text-slate-900 dark:text-white">Ghotme</span>
            </div>
        </div>
        <div class="text-center 2xl:mb-10 mb-4">
            <h4 class="font-medium"> {{ __('Sign in') }}</h4>
            <div class="text-slate-500 text-base">
                {{ __('Sign in to your account to start using Ghotme') }}
            </div>
        </div>

        <!-- START::LOGIN FORM -->
        <x-login-form></x-login-form>
        <!-- END::LOGIN FORM -->

        {{-- <div class="relative border-b-[#9AA2AF] border-opacity-[16%] border-b pt-6">
            <div class="absolute inline-block bg-white dark:bg-slate-800 dark:text-slate-400 left-1/2 top-1/2 transform -translate-x-1/2
                    px-4 min-w-max text-sm text-slate-500 font-normal">
                {{ __('Or continue with') }}
            </div>
        </div> --}}
        {{-- <div class="max-w-[242px] mx-auto mt-8 w-full">
            <x-social-login></x-social-login>
        </div> --}}

        <div class="md:max-w-[345px] mx-auto font-normal text-slate-500 dark:text-slate-400 mt-12 uppercase text-sm">
            {{ __('Don\'t have an account?') }}
            <a href="{{ route('register') }}" class="text-slate-900 dark:text-white font-medium hover:underline">
                {{ __('Sign Up') }}
            </a>
        </div>
    </div>
</x-guest-layout>