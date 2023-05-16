<x-layout>
    <div class="w-10/12">
        <h1>Destinos recomendados ⭐</h1>
        @foreach ($registros as $item)
            <x-card-destination :nombre="$item->name" :descripcion="$item->description" :puntuacion="$item->ranking" :id="$item->id"  />
        @endforeach
    </div>
</x-layout>