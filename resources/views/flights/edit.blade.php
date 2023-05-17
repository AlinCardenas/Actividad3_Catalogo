<x-layout>
    <form class="w-5/12 mx-auto mt-9" method="POST" action="{{route('flights.update', $flight)}}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <h1 class="font-bold text-4xl text-center " >Registro de vuelos</h1>
        @include('flights.form')
        <div class="grid justify-items-center">
            <button type="submit" class="w-3/12 py-2 text-white bg-purple-600 rounded-md mb-4">Crear registro</button>
        </div>
    </form>
</x-layout> 