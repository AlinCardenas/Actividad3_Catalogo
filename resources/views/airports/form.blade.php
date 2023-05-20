<div>
    <x-enlace href="{{ route('airports.index') }}" mensaje="Ir al Aeropuertos" />
 
    <x-input-g nombre="Nombre" name="name" type="text" :value="(isset($airport)) ? $airport->name : null">
        @error('name')
            <span class="text-red-600 font-semibold">{{$message}}</span>
        @enderror
    </x-input-g>
    <x-input-g nombre="Cantidad de pasajeros" name="cant" type="number" :value="(isset($airport)) ? $airport->cant : null" >
        @error('cant')
            <span class="text-red-600 font-semibold">{{$message}}</span>
        @enderror   
    </x-input-g>

    <x-select :list="$list" :object="(isset($object)) ? $object : $airport" campo="address_id" etiqueta="Elije un servicio"/>

    <x-butt mensaje="Enviar" />


</div>