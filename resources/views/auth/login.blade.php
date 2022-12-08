<x-guest-layout>

    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif
    
    <section class="h-full sm:h-screen ">
        <div class="container sm:px-4 mx-auto" >
          <div class="flex justify-center text-gray-800">
            <div class="lg:w-10/12 py-16 min-h-screen flex  items-center">
              <div class="block bg-white shadow-lg rounded-lg w-full">
                <div class="lg:flex lg:flex-wrap">
                  <div class="lg:w-6/12 p-4 md:px-0">
                    <div class="p-3 xl:p-7 md:mx-6">
                      <div class="text-left">
                        <div class="text-3xl font-bold">
                            <a href="{{ url('/welcome') }}" class="nav-title flex items-center">
                              <img
                                src="assets/img/Checkapp logo 2.0.png"
                                alt="logo"
                                class="w-14"
                              />
                              <span class="text-black">Check</span>
                              <span class="text-green-500">App</span>
                            </a>
                        </div>
                        <h5 class="text-xl font-semibold mt-1 mb-4 pb-1 text-gray-600">Your number one online clinic.</h5>
                      </div>
                      <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <x-jet-validation-errors class="mb-4" />
                        <p class="mb-4">Please login to your account</p>
                        <div class="mb-4">
                            <x-jet-label for="email" value="{{ __('Email *') }}" />
                            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                        </div>
                        
                        <div class="mb-4">
                            <x-jet-label for="password" value="{{ __('Password *') }}" />
                            <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                        </div>
                        <div class="text-center pt-1 mb-4 pb-1">
                            <div class="lg:flex lg:flex-wrap">
                                <div class="flex items-center lg:w-6/12 mb-4">
                                    <label for="remember_me" class="">
                                        <x-jet-checkbox id="remember_me" name="remember" />
                                        <span class="ml-2 text-sm text-gray-600 hover:cursor-pointer ">{{ __('Remember me') }}</span>
                                    </label>
                                </div>
                                <div class="flex lg:w-6/12 items-center lg:justify-end mb-4">
                                    @if (Route::has('password.request'))
                                        <a class="text-sm text-gray-600 hover:text-gray-900 " href="{{ route('password.request') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
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
                        {{-- <p style="font-size: 10px">
                            By continuing, you agree to CheckApp’s
                            <a href="#" class="text-emerald-600">Terms of Servce</a> ,
                            <a href="#" class="text-emerald-600">Privacy Policy</a>
                        </p> --}}
                        <div class="flex justify-center mt-4">
                            <a href="{{ route('register') }}" class="text-sm font-semibold  text-emerald-600">Not yet on CheckApp? Register here!</a>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div
                    class="lg:w-6/12 flex items-center lg:rounded-r-lg rounded-b-lg lg:rounded-bl-none bg-cover
                    " style="background-image: url('assets/img/Insurance-amico.jpg')">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

    {{-- <x-jet-authentication-card>
        <x-slot name="logo">
        </x-slot>

        
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="flex">
                <div class="flex-1">
                    <div class="my-5">Your number one online clinic.</div>
                    <div class="mt-4">
                        <x-jet-label for="email" value="{{ __('Email') }}" />
                        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    </div>
        
                    <div class="mt-4">
                        <x-jet-label for="password" value="{{ __('Password') }}" />
                        <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                    </div>
        
                    <div class="block mt-4">
                        <label for="remember_me" class="flex items-center">
                            <x-jet-checkbox id="remember_me" name="remember" />
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>
        
                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
        
                        <x-jet-button class="ml-4">
                            {{ __('Log in') }}
                        </x-jet-button>
                    </div>
                </div>
                <div class="flex-1">
                    <div class="mt-4">
                        <x-jet-label for="email" value="{{ __('Email') }}" />
                        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    </div>
                </div>
            </div>
        </form>
    </x-jet-authentication-card> --}}
</x-guest-layout>
