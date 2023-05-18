<x-guest-layout>
    <div class="container max-w-[7xl] mx-auto mt-4">
        <h1 class="text-3xl text-center font-bold ">Destinos recomendados ⭐</h1>
        <div class="grid grid-cols-4 gap-4 mb-6 mx-auto mt-5">
            @foreach ($registros as $item)
            <x-card :registro="$item">
                <p>
                    <span class="font-semibold">Nombre: </span> {{$item->name}}
                </p>
                <p>
                    <span class="font-semibold">Precio: $</span> {{$item->ranking}}
                </p>
                <p>
                    <span class="font-semibold">Descripción: </span> {{Str::limit($item->description, 140)}}
                </p>
            </x-card>
            @endforeach
        </div>
        {{$registros->links()}}
    </div>
</x-guest-layout>