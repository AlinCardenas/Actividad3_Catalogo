<div>
    <x-enlace href="{{ route('airports.index') }}" mensaje="Ir al Aeropuertos" />
 
    <div class="grid grid-cols-4 gap-3 mt-6">
        <div>
            <x-input-g nombre="Nombre" name="name" type="text" :value="(isset($airport)) ? $airport->name : null" />
                @error('name')
                    <span class="text-red-600 font-semibold">{{$message}}</span>
                @enderror
        </div>
        <div class="col-span-3">
            <x-input-g nombre="Direccion" name="direccion" type="text" :value="(isset($airport)) ? $airport->address :  null" />
            @error('direccion')
                <span class="text-red-600 font-semibold">{{$message}}</span>
            @enderror
        </div>
        <div>
            <x-input-g nombre="Cantidad de pasajeros" name="cant" type="number" :value="(isset($airport)) ? $airport->cant : null" />
            @error('cant')
                <span class="text-red-600 font-semibold">{{$message}}</span>
            @enderror
        </div>
    </div>
   
    <div class="flex justify-center my-8">
        <x-butt mensaje="Enviar" />
    </div>
</div>