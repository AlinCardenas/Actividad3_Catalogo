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
            <x-select-airport etiqueta="Selecciona un Aeropuerto" nombre="address" :list="$addresses" :value="(isset($selec)) ? $selec->destination_id : null" />
                @error('destination_id')
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