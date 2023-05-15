<x-layout title="Dashboard">
<x-Navbar>
    
</x-Navbar>

 <x-menu-nav>

    <x-container1>

            <span><h1 class="text-4xl font-bold text-center text-[#ffffff]">Mostrar direcciones</h1></span>
            <br>
            <h1>Editar direcciones</h1>
    
        <div class="card-body">
  <form action="{{ url('addresses/' . $addresses->id) }}" method="post">
    {!! csrf_field() !!}
    @method("PATCH")
    <label for="" class="block">Id:</label>
    <input class="form-input" type="text" value="{{ $addresses->id }}" aria-label="Disabled input example" disabled> 
    <label for="" class="block">Calle:</label>
    <input class="form-input" type="text" id="street" name="street" value="{{ $addresses->street }}">
    <label for="" class="block">Numero:</label>
    <input class="form-input" type="text" id="number" name="number" value="{{ $addresses->number }}">
    <label for="" class="block">Codigo postal:</label>
    <input class="form-input" type="text" id="cp" name="cp" value="{{ $addresses->cp }}">
    <label for="" class="block">Estado:</label>
    <input class="form-input" type="text" id="state" name="state" value="{{ $addresses->state }}">
    <label for="" class="block">Telefono:</label>
    <input class="form-input" type="text" id="phone" name="phone" value="{{ $addresses->phone }}">
    
    <div class="flex justify-between">
      <a class="btn btn-danger m-3" href="/addresses">Cancelar</a>
      <button type="submit" class="btn btn-primary m-3" value="update">Guardar</button>
    </div>
  </form>
</div>

        

            
    </x-container1>

 </x-menu-nav>
 <x-footer></x-footer>
</x-layout>