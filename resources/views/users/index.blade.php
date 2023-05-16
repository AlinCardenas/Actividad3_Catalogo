<x-guest-layout>

    <div class="bg-gray-200 pb-4">
        <header>
            <div class="image-container">
                <img src="{{ asset('images/fondo.jpg') }}" alt=""
                    class="w-screen h-screen inset-0 bg-black bg-opacity-5">
            </div>
        </header>
        <div>
            <div class="mb-8 mt-[100px]">
                <h1 class="text-5xl text-center">Hoteles 🏨</h1>
            </div>
            <div class="grid grid-cols-3 gap-4 mb-6 mx-auto mt-5 w-10/12">
                @foreach ($hoteles as $hotel)
                <x-cardhotel :valor="$hotel" />
                @endforeach
            </div>
        </div>
        <div>
            <div class="mb-8 mt-[100px]">
                <h1 class="text-5xl text-center">Vuelos 🛫</h1>
            </div>
            <div class="grid grid-cols-3 gap-4 mb-6 mx-auto mt-5 w-10/12">
                @foreach ($aerolineas as $aeroline)
                <x-cardaerolinea :valor="$aeroline" />
            
                @endforeach
            </div>
        </div>
        <div>
            <div class="mb-8 mt-[100px]">
                <h1 class="text-5xl text-center">Destinos 🏖️</h1>
            </div>
            <div class="grid grid-cols-3 gap-4 mb-6 mx-auto mt-5 w-10/12">
                @foreach ($destinos as $destino)
                <x-carddestinos :valor="$destino" />
            
                @endforeach
            </div>
        </div>
    </div>


</x-guest-layout>