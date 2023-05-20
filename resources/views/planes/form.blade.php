<div>

    <div class="flex justify-end  mt-4">
        <a href="{{ route('planes.index') }}" class="font-bold text-purple-500 hover:text-purple-600 px-4"> Ir a
            inicio</a>
    </div>

    <x-input-g
    nombre="Capacidad" 
    name="cant" 
    type="text" 
    value="{{ $planes -> cant ?? old('cant') }}"
    >
      @error('cant')
        <span class="text-red-600 font-semibold">{{$message}}</span>
      @enderror
    </x-input-g>
    <x-input-g
    nombre="Modelo" 
    name="model" 
    type="text" 
    value="{{ $planes -> model ?? old('model') }}"
    >
      @error('model')
        <span class="text-red-600 font-semibold">{{$message}}</span>
      @enderror
    </x-input-g>
    <x-input-g
    nombre="Tipo" 
    name="type" 
    type="text" 
    value="{{ $planes -> type ?? old('type') }}"
    >
      @error('type')
        <span class="text-red-600 font-semibold">{{$message}}</span>
      @enderror
    </x-input-g>
    <x-input-g
    nombre="Clase" 
    name="class" 
    type="text" 
    value="{{ $planes -> class ?? old('class') }}"
    >
      @error('class')
        <span class="text-red-600 font-semibold">{{$message}}</span>
      @enderror
    </x-input-g>
    <div>
    <x-butt mensaje="Registrar"></x-butt>

    </div>


</div>
