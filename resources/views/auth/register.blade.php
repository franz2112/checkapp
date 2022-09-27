<x-guest-layout>

    <x-jet-validation-errors class="mb-4" />
        
    <section class="h-full sm:h-screen ">
        <div class="container px-6 mx-auto">
          <div class="flex justify-center items-center text-gray-800">
            <div class="lg:w-10/12 py-8">
              <div class="block bg-white shadow-lg rounded-lg">
                <div class="flex flex-wrap items-center justify-center p-4">
                    <div class="text-center">
                        <div class="text-3xl font-bold">
                            <div class="flex justify-center items-center">
                              <img
                                src="assets/img/Checkapp logo 2.0.png"
                                alt="logo"
                                class="w-14"
                              />
                              <span class="text-black">Check</span>
                              <span class="text-green-500">App</span>
                            </div>
                        </div>
                        <h5 class="text-xl font-semibold mt-1 text-gray-600">Welcome to CheckApp</h5>
                    </div>
                </div>

                <form method="POST" action="{{ route('register') }}">
                    <div class="lg:flex lg:flex-wrap">
                        <div class="lg:w-6/12 p-4 md:px-0">
                            <div class="lg:pl-6 md:mx-6">
 
                                @csrf
                                <div class="mb-3">User's Information</div>
                                <div class="mb-3">
                                    <x-jet-label for="fname" value="{{ __('First Name *') }}" />
                                    <x-jet-input id="fname" class="block mt-1 w-full" type="text" name="fname" :value="old('fname')" required autofocus autocomplete="fname" />
                                </div>
                                <div class="mb-3">
                                    <x-jet-label for="mname" value="{{ __('Middle Name *') }}" />
                                    <x-jet-input id="mname" class="block mt-1 w-full" type="text" name="mname" :value="old('mname')" required autofocus autocomplete="mname" />
                                </div>
                                <div class="mb-3">
                                    <x-jet-label for="lname" value="{{ __('Last Name *') }}" />
                                    <x-jet-input id="lname" class="block mt-1 w-full" type="text" name="lname" :value="old('lname')" required autofocus autocomplete="lname" />
                                </div>
                                <div class="mb-3">
                                    <x-jet-label for="adress" value="{{ __('Address *') }}" />
                                    <x-jet-input id="adress" class="block mt-1 w-full" type="text" name="adress" :value="old('adress')" required autofocus autocomplete="adress" />
                                </div>
                            </div>
                        </div>

                        {{-- 2nd row --}}
                        <div class="lg:w-6/12 p-4 md:px-0">
                            <div class="xl:px-6 md:mx-6">

                                @csrf
                                <div class="mb-3">Account Details</div>
                                <div class="mb-3">
                                    <x-jet-label for="email" value="{{ __('Email *') }}" />
                                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                                </div>
                                
                                <div class="mb-3">
                                    <x-jet-label for="phone" value="{{ __('Phone *') }}" />
                                    <x-jet-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="phone" />
                                </div>

                                <div class="mb-3">
                                    <x-jet-label for="password" value="{{ __('Password *') }}" />
                                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                                </div>

                                <div class="mb-3">
                                    <x-jet-label for="password_confirmation" value="{{ __('Confirm Password *') }}" />
                                    <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                                </div>

                                <div class="text-center mb-3">
                                    <p class="text-[10px] mb-3">
                                        By continuing, you agree to CheckApp’s
                                        <a href="#" class="text-emerald-600">Terms of Servce</a> ,
                                        <a href="#" class="text-emerald-600">Privacy Policy</a>
                                    </p>
                                    <div class="lg:flex lg:flex-wrap">
                                        <div class="lg:w-1/2 lg:pr-2">
                                            <div class="flex items-center justify-center mt-5 mb-3">
                                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                                    {{ __('Already registered?') }}
                                                </a>
                                            </div>
                                        </div>
                                        <div class="lg:w-1/2 lg:pr-2">
                                            <button
                                            class="
                                            inline-block px-6 py-2.5 
                                            text-white font-bold 
                                            text-md 
                                            leading-tight 
                                            uppercase 
                                            rounded shadow-md 
                                            bg-green-500
                                            hover:bg-green-600
                                            hover:shadow-lg 
                                            focus:shadow-lg focus:outline-none focus:ring-0 
                                            active:shadow-lg 
                                            transition duration-150 
                                            ease-in-out w-full"
                                            type="submit"
                                            data-mdb-ripple="true"
                                            data-mdb-ripple-color="light"
                                            >
                                            {{ __('Log in') }}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
    </section>

</x-guest-layout>



{{-- 
 <x-jet-authentication-card >
        <x-slot name="logo">
            <x-jet-authentication-card-logo  />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mt-4">
                <x-jet-label for="fname" value="{{ __('First Name') }}" />
                <x-jet-input id="fname" class="block mt-1 w-full" type="text" name="fname" :value="old('fname')" required autofocus autocomplete="fname" />
            </div>

            <div class="mt-4">
                <x-jet-label for="lname" value="{{ __('Last Name') }}" />
                <x-jet-input id="lname" class="block mt-1 w-full" type="text" name="lname" :value="old('lname')" required autofocus autocomplete="lname" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="phone" value="{{ __('Phone') }}" />
                <x-jet-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="phone" />
            </div>

            <div class="mt-4">
                <x-jet-label for="adress" value="{{ __('Adress') }}" />
                <x-jet-input id="adress" class="block mt-1 w-full" type="text" name="adress" :value="old('adress')" required autofocus autocomplete="adress" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card> --}}