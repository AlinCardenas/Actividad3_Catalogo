<x-layout title="Vuelos">
<x-Navbar></x-Navbar>
    <x-Container1>
        <h1>Editar vuelos</h1>
    
        <div class="card-body">
  <form action="{{ url('planes/' . $planes->id) }}" method="post">
    {!! csrf_field() !!}
    @method("PATCH")
    <label for="" class="block">Id:</label>
    <input class="form-input" type="text" value="{{ $planes->id }}" aria-label="Disabled input example" disabled> 
    <label for="" class="block">Cantidad:</label>
    <input class="form-input" type="text" id="cant" name="cant" value="{{ $planes->cant }}">
    <label for="" class="block">Modelo:</label>
    <input class="form-input" type="text" id="model" name="model" value="{{ $planes->model }}">
    <label for="" class="block">Tipo:</label>
    <input class="form-input" type="text" id="type" name="type" value="{{ $planes->type }}">
    <label for="" class="block">Clase:</label>
    <input class="form-input" type="text" id="class" name="class" value="{{ $planes->class }}">
    <div class="flex justify-between">
      <a class="btn btn-danger m-3" href="/planes">Cancelar</a>
      <button type="submit" class="btn btn-primary m-3" value="update">Guardar</button>
    </div>
  </form>
</div>

    
    </x-Container1>
    
</x-layout>