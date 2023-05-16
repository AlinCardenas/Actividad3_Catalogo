<x-layout>
    <form class="w-5/12 mx-auto mt-9" method="POST" action="{{route('aero_des.store')}}" enctype="multipart/form-data">
        @csrf
        <h1 class="font-bold text-4xl text-center " >Registro de destinos</h1>

        <x-select-id etiqueta="Selecciona un destino" nombre="destination_id" :list="$registro" definition="destinations" />
        <x-select-id etiqueta="Selecciona un aeropuerto" nombre="airport_id" :list="$registro" definition="airports"/>
        <x-select-id etiqueta="Selecciona una aerolinea" nombre="airline_id" :list="$registro" definition="airlines"/>
    
        <div class="grid justify-items-center">
            <button type="submit" class="w-3/12 py-2 text-white bg-purple-600 rounded-md mb-4">Crear registro</button>
        </div>
    </form>
</x-layout> 