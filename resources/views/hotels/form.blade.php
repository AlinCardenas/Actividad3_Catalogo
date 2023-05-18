<div>
    <x-enlace href="{{ route('hotels.index') }}" mensaje="Ir al catalogo" />

    <x-input-g nombre="Nombre" name="name" type="text" :value="(isset($hotel)) ? $hotel->name : null" />
    @error('name')
    <span class="text-red-600 font-semibold">{{$message}}</span>
    @enderror

    <div class="grid grid-cols-4 gap-3 mt-6">
        <div class="col-span-3">
            <x-input-g nombre="Precio" name="price" type="number" :value="isset($hotel) ? $hotel->price : null" />
            @error('price')
            <span class="text-red-600 font-semibold">{{$message}}</span>
            @enderror
        </div>
        <div>
            <x-input-g nombre="Puntuación" name="ranking" type="number" :value="isset($hotel) ? $hotel->ranking : null" />
            @error('ranking')
            <span class="text-red-600 font-semibold">{{$message}}</span>
            @enderror
        </div>
    </div>
    <x-textarea-g nombre="Descripcion" name="description">{{(isset($hotel)) ? $hotel->description : ""}}</x-textarea-g>
    @error('description')
        <span class="text-red-600 font-semibold">{{ $message }}</span>
    @enderror

    <div class="grid grid-cols-4 gap-3">
        <div class="col-span-2">
            <x-input-g nombre="Logo" name="logo" type="file" class="w-full shadow-2xl appearance-none rounded-lg bg-white border border-gray-300 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
        </div>
        <div class="col-span-2">
            <x-input-g nombre="Imagen" name="image[]" type="file" class="w-full shadow-2xl appearance-none rounded-lg bg-white border border-gray-300 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" multiple />
        </div>
    </div>
    <x-select :list="$list" :object="(isset($object)) ? $object : $hotel" campo="service_id" />
    <x-select :list="$listados" :object="(isset($object)) ? $object : $hotel" campo="address_id" />
    <x-butt mensaje="Enviar" />
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
