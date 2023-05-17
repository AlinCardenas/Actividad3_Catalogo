 <div class="flex h-screen">

    <div class="flex h-screen">
        <div class=" border-gray-400 shadow-lg p-7 w-64">

            <div class="flex flex-col space-y-4">
                <h1 class="font-bold mt-6 mb-2">Vistas </h1>
                <x-link href="{{route('flights.list')}}" mensaje="Vuelos"/>
                <x-link href="{{route('destinos.list')}}" mensaje="Destinos"/>
                <x-link href="{{route('hotel.showAll')}}" mensaje="Hoteles"/>
            </div>
            @if (Auth::check())
                <div class="flex flex-col space-y-4">
                    <h1 class="font-bold mt-6 mb-2">Crear</h1>
                    <x-link href="{{ route('addresses.index') }}" mensaje="Direcciones"/>
                    <x-link href="{{ route('flights.index') }}" mensaje="Aviones"/>
                    <x-link href="{{ route('airports.index') }}" mensaje="Aeropuertos"/>
                    <x-link href="{{ route('airlines.index') }}" mensaje="Vuelos"/>
                    <x-link href="{{ route('destinations.index') }}" mensaje="Destinos"/>
                    <x-link href="{{ route('services.index') }}" mensaje="Servicios"/>
                    <x-link href="{{ route('airlines.index') }}" mensaje="Aerolineas"/>
                    <x-link href="{{ route('hotels.index') }}" mensaje="Hoteles"/>
                </div>
            @endif
        </div>
    </div>
    <div class="flex-grow">
        {{$slot}}
    </div>

</div> 




