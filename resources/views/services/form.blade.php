<div>
    <x-enlace route="{{ route('services.index') }}">Ir a inicio </x-enlace>
    <x-input-hotels nombre="Nombre" name="name" type="text" :value="(isset($service)) ? $service->name : null"  />
    @error('name')
        <span class="text-red-600 font-semibold">{{$message}}</span>
    @enderror
    <x-input-hotels nombre="Precio" name="price" type="number" :value="(isset($service)) ? $service->price : null"  />
    @error('price')
        <span class="text-red-600 font-semibold">{{$message}}</span>
    @enderror
    <x-input-hotels nombre="Descripcion" name="description" type="text" :value="(isset($service)) ? $service->description : null"  />
    @error('description')
        <span class="text-red-600 font-semibold">{{$message}}</span>
    @enderror
</div>
