<x-layout title="Dashboard">
<x-Navbar>
</x-Navbar>

 <x-menu-nav>

    <x-container1>
    <h1>Crear direccion</h1>
        <h2 class="text-2xl font-semibold px-4 py-2">Agregar direccion</h2>
<div class="card-body rounded-lg bg-white ">
  <form action="/addresses" method="POST">
    {!! csrf_field() !!}
    
    <label for="" class="block">Calle:</label>
    <input class="form-input w-full mb-4 rounded-lg px-4 py-2" type="text" name="street" id="street">
    <label for="" class="block">Numero:</label>
    <input class="form-input w-full mb-4 rounded-lg px-4 py-2" type="number" name="number" id="number">
    <label for="" class="block">Codigo postal:</label>
    <input class="form-input w-full mb-4 rounded-lg px-4 py-2" type="number" name="cp" id="cp">
    <label for="" class="block">Estado:</label>
    <input class="form-input w-full mb-4 rounded-lg px-4 py-2" type="text" name="state" id="state">
    <label for="" class="block">Telefono:</label>
    <input class="form-input w-full mb-4 rounded-lg px-4 py-2" type="number" name="phone" id="phone">
    <div class="flex justify-start">
      <a class="bg-red-500 m-3" href="/addresses">Cancelar</a>
      <button class="bg-green-500 m-3" >Guardar</button>
    </div>
  </form>
</div>
        

            
    </x-container1>

 </x-menu-nav>
 <x-footer></x-footer>
</x-layout>
