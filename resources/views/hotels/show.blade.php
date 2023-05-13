<x-guest-layout>
   

    <div class="max-w-md mx-auto mt-10">
        <div class="bg-white shadow-md rounded px-8 py-6 mb-4">
        
            <h1  class="text-xl font-bold mb-4">Hotel {{$hotel->name}} </h1>
        
            <p>
                <strong>Descripcion: </strong>{{$hotel->description}}
            </p>
            <p>
                <strong>Precio: </strong>{{$hotel->price}}
            </p>
            <p>
                <strong>Puntuación: </strong>{{$hotel->ranking}}
            </p>
            <p>
                <strong>Logo: </strong>{{$hotel->logo}}
            </p>
            <p>
                <strong>Logo: </strong>{{$hotel->logo}}
            </p>
            <p>
                <strong>Imagen: </strong>{{$hotel->image}}
            </p>
        
        </div>
    </div>

</x-guest-layout>