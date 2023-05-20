<div>
    <x-enlace href="{{route('services.index')}}" mensaje="Ir a inicio" />

    <x-input-g nombre="Nombre" name="name" type="text" :value="(isset($service)) ? $service->name : null" >
        @error('name')
            <span class="text-red-600 font-semibold">{{$message}}</span>
        @enderror
    </x-input-g>
    <x-input-g nombre="Precio" name="price" type="number" :value="(isset($service)) ? $service->price : null" >
        @error('price')
            <span class="text-red-600 font-semibold">{{$message}}</span>
        @enderror
    </x-input-g>

    <x-textarea-g nombre="Descripcion" name="description">
        {{ isset($service) ? $service->description : null }}
    </x-textarea-g>
    @error('description')
    <span class="text-red-600 font-semibold">{{$message}}</span>
    @enderror
</div>