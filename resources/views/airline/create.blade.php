<x-guest-layout>
    <div class="container max-w-6xl mx-auto mt-4">

        <h1 class="text-3xl text-center font-bold  text-gray-700" >Registro de Aerolineas</h1>
        <form action="{{route('airline.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('airline.form')
            
        </form>
       
    </div>
</x-guest-layout>