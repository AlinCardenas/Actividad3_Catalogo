<x-layout>
    <div class="m-8">
        <p class="text-xl font-semibold m-4">Nombre:</p>
        <p class="text-xl font-bold m-4"> {{ $destination->name }}</p>
        <br>
        <p class="text-xl font-semibold m-4">Dirección:</p>
        <p class="text-xl font-bold m-4"> {{ $destination->address }}</p>
        <br>
        <p class="text-xl font-semibold m-4">Valoración:</p>
        <p class="text-xl font-bold m-4"> {{ $destination->ranking }}</p>
        <br>
        <p class="text-xl font-semibold m-4">Descripción:</p>
        <p class="text-xl font-bold m-4"> {{ $destination->description }}</p>
        <br>
        <p class="text-xl font-semibold m-4">Idiomas:</p>
        <p class="text-xl font-bold m-4"> {{ $destination->languages }}</p>
    </div>
</x-layout>