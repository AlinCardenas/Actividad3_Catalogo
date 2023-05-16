@props(['hotel'])
<div class="col-span-1">
    <div class="bg-white rounded-lg shadow-2xl p-[10px] h-[500px]">
        @php
            // 1.Rempazar nombre imagen
            $ruta_logo = str_replace('public/img/', '', $hotel->logo);
        @endphp
        <img class="mx-auto mt-3" src="{{asset('storage/img/'.$ruta_logo)}}" width="250" height="250">
        <div class="p-4">
            <a class="text-xl font-bold mb-4 hover:text-purple-500" href="{{route('hotels.show', $hotel->id)}}">Hotel {{$hotel->name}} </a>
            <p class="text-gray-600 mb-2">Puntuación: {{ $hotel->ranking }}</p>
            <p class="text-gray-600 mb-2 text-justify">Dirección: {{ $hotel->description }}</p>
            <p class="text-green-500 font-semibold">Precio: ${{ $hotel->price }}</p>
        </div>
    </div>
</div>