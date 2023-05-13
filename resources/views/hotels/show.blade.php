<x-guest-layout>
   

    <div class="max-w-md mx-auto mt-10">
        @php
            // 1.Rempazar nombre imagen

            $ruta_image = str_replace('public/img/', '', $hotel->image);
            $ruta_logo = str_replace('public/img/', '', $hotel->logo);
             
        @endphp
        <div class="bg-white shadow-md rounded px-8 py-6 mb-4">
        
            

            <p>
                {{-- Llamar imagen --}}
                <img src="{{asset('storage/img/'.$ruta_image)}}" width="400" height="200">
            </p>
            <h1  class="text-xl font-bold mb-4">Hotel {{$hotel->name}}</h1>
        
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
                <strong>Logo: </strong>
                <img src="{{asset('storage/img/'.$ruta_logo)}}" width="100" height="200">
            </p>
            
            <p>
                <strong>Destino: </strong>{{$hotel->destino_id}}
            </p>
        
        </div>
    </div>

</x-guest-layout>