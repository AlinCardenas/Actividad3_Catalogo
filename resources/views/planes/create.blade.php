<x-layout title="Vuelos">
<x-Navbar></x-Navbar>
    <x-Container1>
        <h1>Crear vuelos</h1>
        <h2 class="text-2xl font-semibold px-4 py-2">Agregar usuario</h2>
<div class="card-body rounded-lg bg-white ">
  <form action="/planes" method="POST">
    {!! csrf_field() !!}
    
    <label for="" class="block">Capacidad:</label>
    <input class="form-input w-full mb-4 rounded-lg px-4 py-2" type="text" name="cant" id="cant">
    <label for="" class="block">Modelo:</label>
    <input class="form-input w-full mb-4 rounded-lg px-4 py-2" type="text" name="model" id="model">
    <label for="" class="block">Tipo de vuelo:</label>
    <input class="form-input w-full mb-4 rounded-lg px-4 py-2" type="text" name="type" id="type">
    <label for="" class="block">Clase:</label>
    <input class="form-input w-full mb-4 rounded-lg px-4 py-2" type="text" name="class" id="class">
    <div class="flex justify-start">
      <a class="bg-red-500 m-3" href="/planes">Cancelar</a>
      <button class="bg-green-500 m-3" >Guardar</button>
    </div>
  </form>
</div>


    
    </x-Container1>
    
</x-layout>