<x-app-layout>
    <h1>Hotel {{$hotel->name}} </h1>
    
    <p>
        <strong>Descripcion: </strong>{{$hotel->description}}
    </p>
    <p>
        <strong>Precio: </strong>{{$hotel->price}}
    </p>

</x-app-layout>