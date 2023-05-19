<x-guest-layout>
    <div class="container max-w-6xl mx-auto mt-4">

        <h1 class="text-3xl text-center font-bold  text-gray-700" >Registro de Aeropuertos</h1>
        <form action="{{route('airports.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('airports.form')
            
        </form>
       
    </div>
</x-guest-layout>