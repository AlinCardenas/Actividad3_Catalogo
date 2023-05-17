<x-guest-layout>
    <div class="container max-w-6xl mx-auto mt-4">
        <h1 class="text-3xl text-center font-bold  text-gray-700">Actualizar registro</h1>
        <form action="{{route('hotels.update', $hotel)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            @include('hotels.form')            
        </form>
    </div>
</x-guest-layout>