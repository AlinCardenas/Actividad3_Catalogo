<div>

    <div class="flex justify-end  mt-4">
        <a href="{{ route('planes.index') }}" class="font-bold text-purple-500 hover:text-purple-600 px-4"> Ir a
            inicio</a>
    </div>

    <x-input-g
    nombre="Capacidad" 
    name="cant" 
    type="text" 
    ></x-input-g>
    @error('cant')
      <span class="text-red-600 font-semibold">{{$message}}</span>
    @enderror
    <x-input-g
    nombre="Modelo" 
    name="model" 
    type="text" 
    ></x-input-g>
    @error('model')
      <span class="text-red-600 font-semibold">{{$message}}</span>
    @enderror
    <x-input-g
    nombre="Tipo" 
    name="type" 
    type="text" 
    ></x-input-g>
    @error('type')
      <span class="text-red-600 font-semibold">{{$message}}</span>
    @enderror
    <x-input-g
    nombre="Clase" 
    name="class" 
    type="text" 
    ></x-input-g>
    @error('class')
      <span class="text-red-600 font-semibold">{{$message}}</span>
    @enderror
    <div>
    <x-butt mensaje="Registrar"></x-butt>

    </div>


</div>
