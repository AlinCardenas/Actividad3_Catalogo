<div>
    <x-enlace href="{{ route('airline.index') }}" mensaje="Ir a Aerolineas" />

    <x-input-g nombre="Nombre" name="name" type="text" :value="(isset($airline)) ? $airline->name : null" >
        @error('name')
            <span class="text-red-600 font-semibold">{{$message}}</span>
        @enderror
    </x-input-g>
    <div class="grid grid-cols-4 gap-3 mt-6">
        <div class="col-span-3">
            <x-input-g nombre="Descripcion" name="description" type="text"
                :value="(isset($airline)) ? $airline->description :  null" >
                @error('description')
                    <span class="text-red-600 font-semibold">{{$message}}</span>
                @enderror
            </x-input-g>
        </div>
        <div>
            <x-input-g nombre="Valoracion" name="ranking" type="number"
                :value="(isset($airline)) ? $airline->ranking : null" >
                @error('ranking')
                    <span class="text-red-600 font-semibold">{{$message}}</span>
                @enderror
            </x-input-g>
        </div>
    </div>
    <x-input-g nombre="Logo" name="logo" type="file"
        class="w-full shadow-2xl appearance-none rounded-lg bg-white border border-gray-300 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" >
        @error('logo')
            <span class="text-red-600 font-semibold">{{$message}}</span>
        @enderror
    </x-input-g>
    <x-butt mensaje="Enviar" />
</div>