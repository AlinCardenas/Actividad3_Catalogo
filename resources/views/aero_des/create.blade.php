<x-layout>
    <form class="w-5/12 mx-auto mt-9" method="POST" action="{{route('aero_des.store')}}" enctype="multipart/form-data">
        @csrf
        <h1 class="font-bold text-3xl text-center ">Aerolineas, Destinos y Aeropuertos</h1>

        @include('aero_des.form')
    
        <div class="grid justify-items-center">
            <button type="submit" class="w-3/12 py-2 text-white bg-purple-600 rounded-md mb-4">Crear registro</button>
        </div>
    </form>
</x-layout> 