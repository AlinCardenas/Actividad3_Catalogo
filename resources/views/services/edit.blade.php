<x-guest-layout>
    <div class="container max-w-6xl mx-auto mt-4">
        <h1 class="text-3xl text-center font-bold  text-gray-700" >Actualizar registros</h1>
        <form action="{{route('services.update', $service)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            @include('services.form')
            <x-butt>Registrar</x-butt>
        </form>
        
    </div>
    
</x-guest-layout>