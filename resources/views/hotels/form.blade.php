<div>
    <div class="flex justify-end  mt-4">
        <a href="{{ route('hotels.index') }}" class="font-bold text-purple-500 hover:text-purple-600 px-4"> Ir a
            inicio</a>
    </div>

    <x-input-hotels nombre="Nombre" name="name" type="text" :value="(isset($hotel)) ? $hotel->name : null" />
        @error('name')

         <span class="text-red-600 font-semibold">{{$message}}</span>
        @enderror
    <div class="grid grid-cols-4 gap-3 mt-6">
        <div class="col-span-3">
            <x-input-hotels nombre="Precio" name="price" type="number"
                :value="(isset($hotel)) ? $hotel->price : null" />
            @error('price')
            <span class="text-red-600 font-semibold">{{$message}}</span>
            @enderror
        </div>

        <div>
            <x-input-hotels nombre="Puntuación" name="ranking" type="number"
                :value="(isset($hotel)) ? $hotel->ranking : null" />
            @error('ranking')
            <span class="text-red-600 font-semibold">{{$message}}</span>
            @enderror
        </div>

    </div>
    <label for="description" class="mb-2 font-bold">Descripcion</label>
    <textarea name="description" class="shadow-2xl rounded-lg p-2 w-full border-slate-300"></textarea>

    @error('description')
    <span class="text-red-600 font-semibold">{{$message}}</span>
    @enderror


    <div class="grid grid-cols-4 gap-3">
        <div class="col-span-2">
            <x-input-hotels nombre="Logo" name="logo" type="file"
                class="w-full shadow-2xl appearance-none rounded-lg bg-white border border-gray-300 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
        </div>
        <div class="col-span-2">
            <x-input-hotels nombre="Imagen" name="image[]" type="file"
                class="w-full shadow-2xl appearance-none rounded-lg bg-white border border-gray-300 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                multiple />
        </div>
    </div>

    <div class="mt-4 mb-5">
        <label for="service" class="form-label">Selecciona un destino </label>
        <select name="service_id" id="service_id">
            @foreach ($list as $id => $name)
            <option value="{{ $id }}" {{ $id == $object->destino_id ? 'selected' : '' }}>{{ $name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mt-4 mb-5">
        <label for="address" class="form-label">Selecciona un destino </label>
        <select name="address_id" id="address_id">
            @foreach ($list as $id => $name)
            <option value="{{ $id }}" {{ $id == $object->destino_id ? 'selected' : '' }}>{{ $name }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="px-4 py-2 text-white bg-purple-600 hover:bg-purple-700 rounded-md">Registrar</button>

</div>