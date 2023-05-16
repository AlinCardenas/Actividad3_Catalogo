@props(['valor'=>''])

<div class="col-span-1">
    <div class="bg-white rounded-lg shadow-2xl p-[10px] h-[500px]">
        <img class="mx-auto mt-3 h-[200px]" src="https://picsum.photos/200/300">
        <div class="p-4">
            <a class="text-xl font-bold mb-4 hover:text-purple-500" href="">Aerolinea: {{$valor->name}}</a>
            <p class="text-gray-600 mb-2">Puntuación: {{$valor->ranking}}</p>
            <p class="text-gray-600 mb-2 text-justify">Descripcion: {{ Str::limit($valor->description, 150) }}</p>
        </div>
    </div>
</div>