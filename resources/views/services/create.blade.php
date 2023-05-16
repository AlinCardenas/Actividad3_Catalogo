<x-guest-layout>
    <div class="container max-w-6xl mx-auto mt-4">
        <h1 class="text-3xl text-center font-bold  text-gray-700" >Registrar servicios</h1>
        <form action="{{route('services.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('services.form')
            <x-butt>Registrar</x-butt>
        </form>
        
    </div>
    
</x-guest-layout>