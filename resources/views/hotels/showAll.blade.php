<x-guest-layout>
    <div class="container max-w-[7xl] mx-auto mt-4">
        <h1 class="text-3xl text-center font-bold ">Lista de hoteles</h1>
        <div class="grid grid-cols-4 gap-4 mb-6 mx-auto mt-5">
            @foreach ($hotels as $hotel)
            @php
            $ruta = str_replace('public/img/', '', $hotel->logo)
            @endphp
            <x-card :registro="$hotel" :ruta_img="$ruta">
                <p>
                    <span class="font-semibold">Nombre: </span> {{$hotel->name}}
                </p>
                <p>
                    <span class="font-semibold">Precio: $</span> {{$hotel->price}}
                </p>
                <p>
                    <span class="font-semibold">Descripción: </span> {{Str::limit($hotel->description, 140)}}
                </p>
            </x-card>
            @endforeach
        </div>
        {{$hotels->links()}}
    </div>
</x-guest-layout>