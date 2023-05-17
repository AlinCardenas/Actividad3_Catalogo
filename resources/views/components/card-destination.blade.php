@props(['ruta'=>'', 'nombre', 'descripcion', 'puntuacion', 'id'])

<div class="flex flex-wrap border-4 border-slate-200 rounded-xl my-8">
    <div class="w-5/12">
        <img src="{{asset('storage/images/' . $ruta)}}" alt="..." class="h-60 w-10/12">
    </div>
    <div class="flex flex-col items-start justify-evenly w-4/12">
        <p class="">Nombre: {{$nombre}}</p>
        <p class="">Descripción: {{$descripcion}}</p>
    </div>
    <div class="flex flex-col items-start justify-evenly w-3/12 bg-slate-200 pl-4 ">
        <p>Bit Technologies</p>
        <p>Puntuación: {{$puntuacion}}</p>
        {{-- <a href="{{route('', $id)}}" class="inline-block bg-black text-white font-bold py-2 px-4 rounded-full">Ver detalles > </a> --}}
    </div>
</div>