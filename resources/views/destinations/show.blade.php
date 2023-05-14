{{-- <x-layout>
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
</x-layout> --}}

<x-layout>
    <div class="bg-white rounded-lg shadow-lg p-6">
        <img class="w-full rounded-lg mb-4" src="https://via.placeholder.com/500x250" alt="Card Image">
        <h2 class="text-xl font-bold mb-2">Título de la Card</h2>
        <p class="text-gray-700 text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec blandit lacus, vel fringilla felis. Proin blandit, orci quis eleifend laoreet, tellus est cursus massa, sit amet eleifend felis urna eu metus.</p>
        <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 inline-block" href="#">Leer más</a>
      </div>      
</x-layout>