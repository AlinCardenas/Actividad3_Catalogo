<x-guest-layout>
    <!-- borramos la card y no paso nada -->
        <x-slot name="logo">
            <!-- borramos esta parte y no paso nada  -->
        </x-slot>

        <!-- <x-validation-errors class="mb-4" /> -->

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <div class="flex">
            <div class="w-1/2 p-8 " >
                <div class="flex justify-center items-center mt-12">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/4/47/Monstercat_logo_with_text.png" alt="Imagen de ejemplo" class="object-cover" width="200" height="150" />
                </div>
            <div class="ml-32">
                <h2 class="mb-4 text-4xl font-bold mt-6">¡Hola, bienvenido!</h2>
                <br>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                        <div>
                            <x-label for="email" value="{{ __('Correo electrónico') }}" />
                            <x-input id="email" class="border border-gray-300 !rounded-full p-2 w-96" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                            <x-validation-errors class="mb-4" />
                        </div>

                    <div class="mt-4">
                        <x-label for="password" value="{{ __('Contraseña') }}" />
                        <x-input id="password"  class="border border-gray-300 !rounded-full p-2 w-96" type="password" name="password" required autocomplete="current-password" />
                        <x-validation-errors class="mb-4" />
                    </div>

                <!-- <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <x-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div> -->
            </div>
            <div class="ml-32 mt-4">

                <x-button class="bg-violet-500 hover:bg-violet-600 active:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-300 text-white !rounded-full border-8 border-violet-500 px-32">
                    {{ __('INICIAR SECIÓN') }}
                    
                </x-button>
            </div>
            <div class="flex justify-between mr-32 ml-28 mt-4">  
                
                @if (Route::has('password.request'))
                    <a class=" ml-4 font-normal  text-violet-500 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('OLVIDE MI CONTRASEÑA') }}
                    </a>
                @endif

                @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-normal  text-violet-500 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">CREAR MI CUENTA</a>
                        @endif
            </div>
        </form>

        </div>
        <div class="m-8 w-1/2">
    <img src="https://i0.wp.com/gamerstyle.com.mx/wp-content/uploads/2018/03/kirby-star-allies-gs.jpg?fit=1145%2C720&ssl=1" alt="Imagen de ejemplo" class="w-full object-cover" />
  </div>
        </div>
</x-guest-layout>