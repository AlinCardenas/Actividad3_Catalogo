 <div class="flex h-screen">
    {{-- <div class="bg-white shadow-sm p-2 flex">
        <h1 class="font-bold">Contenido</h1>
        <a href="#" class="ml-auto">Cerrar sesión</a>
        <a href="#" class="ml-2">Inicio</a>
    </div> --}}
    <div class="flex h-screen">
        <div class=" border-gray-400 shadow-lg p-7 w-64">
            
            <div class="flex flex-col space-y-4">
                <h1 class="font-bold mt-6 mb-2">Vistas </h1>
                <x-link href="{{ route('airlines.index') }}" mensaje="Aerolineas"/>
                <x-link href="{{ route('destinations.index') }}" mensaje="Destinos"/>
                <x-link href="{{ route('hotels.index') }}" mensaje="Hoteles"/>
            </div>

            <div class="flex flex-col space-y-4">
                <h1 class="font-bold mt-6 mb-2">Crear</h1>
                <x-link href="{{ route('airlines.index') }}" mensaje="Dirección"/>
                <x-link href="{{ route('destinations.index') }}" mensaje="Aviones"/>
                <x-link href="{{ route('hotels.index') }}" mensaje="Aeropuertos"/>
                <x-link href="{{ route('hotels.index') }}" mensaje="Vuelos"/>
                <x-link href="{{ route('hotels.index') }}" mensaje="Destinos"/>
                <x-link href="{{ route('hotels.index') }}" mensaje="Servicios"/>
                <x-link href="{{ route('hotels.index') }}" mensaje="Aerolineas"/>
            </div>
        </div>
    </div>
    <div class="flex-grow">
        {{$slot}}
    </div>

</div> 




