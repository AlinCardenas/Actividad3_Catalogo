<x-layout>
    <h1 class="text-3xl text-center mt-8 mb-8">Destinos recomendados ⭐</h1>
    <div class="flex items-center justify-center">
        <div class="w-10/12 ">
            @foreach ($registros as $item)
                <x-card-destination :nombre="$item->name" :descripcion="$item->description" :puntuacion="$item->ranking" :id="$item->id"  />
            @endforeach
        </div>
    </div>
</x-layout>