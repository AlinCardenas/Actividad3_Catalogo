<x-guest-layout>
    <x-sidebar>
        <div class="bg-gray-200 pb-4">
            <header>
                <div class="relative">
                    <img src="{{ asset('images/fondo.jpg') }}" alt=""
                        class="w-screen h-screen inset-0 bg-black bg-opacity-5">
                    <nav class="absolute top-0 left-0 w-full bg-transparent ">
                        <div class="container mx-auto px-4">
                            <div class="flex items-center justify-end py-4">
                                <div class="flex items-center">
                                    <a href="#" class="text-white hover:text-gray-300 ml-8">Inicio</a>
                                    @if (Auth::check())
                                        <form method="POST" action="{{ route('logout') }}" x-data>
                                            @csrf
                                            <button type="submit" class="text-white hover:text-gray-300 ml-8 flex items-center">Cerrar sesión</button>
                                        </form>
                                    @else
                                        <a href="{{route('login')}}" class="text-white hover:text-gray-300 ml-8 flex items-center">Iniciar sesión</a>    
                                    @endif
                                    
                                    <p class="text-white">
                                    </p>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>
            <div>

                <div class="mb-8 mt-[100px]">
                    <h1 class="text-5xl text-center"><a href="{{route('hotel.showAll')}}"
                            class="hover:text-blue-700">Hoteles 🏨</a></h1>
                </div>
                <div class="grid grid-cols-3 gap-4 mb-6 mx-auto mt-5 w-10/12">
                    @foreach ($hoteles as $hotel)
                    <x-cardhotel :valor="$hotel" />
                    @endforeach
                </div>
            </div>
            <div>
                <div class="mb-8 mt-[100px]">
                    <h1 class="text-5xl text-center"><a href="{{route('flights.list')}}"
                            class="hover:text-blue-700">Vuelos
                            🛫</a></h1>
                </div>
                <div class="grid grid-cols-3 gap-4 mb-6 mx-auto mt-5 w-10/12">
                    @foreach ($flights as $flight)
                    <x-cardaerolinea :valor="$flight" />
                    @endforeach
                </div>
            </div>
            <div>
                <div class="mb-8 mt-[100px]">
                    <h1 class="text-5xl text-center"><a href="{{route('destinos.list')}}"
                            class="hover:text-blue-700">Destinos 🏖️</a></h1>
                </div>
                <div class="grid grid-cols-3 gap-4 mb-6 mx-auto mt-5 w-10/12">
                    @foreach ($destinos as $destino)
                    <x-carddestinos :valor="$destino" />
                    @endforeach
                </div>
            </div>
        </div>
    </x-sidebar>
</x-guest-layout>