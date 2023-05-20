<div>
    <x-enlace href="{{ route('flights.index') }}" mensaje="Ir a los vuelos" />

    <x-input-g nombre="Fecha de salida" name="leave_date" type="date" :value="isset($flight) ? $flight->leave_date : null" />
    @error('leave_date')
        <span class="text-red-600 font-semibold">{{ $message }}</span>
    @enderror

    <div class="grid grid-cols-4 gap-3 mt-6">
        <div class="col-span-3">
            <x-input-g nombre="Fecha de llegada" name="arrive_date" type="date" :value="isset($flight) ? $flight->arrive_date : null" />
            @error('arrive_date')
                <span class="text-red-600 font-semibold">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <x-input-g nombre="Cantidad de pasajeros" name="count_clients" type="number" :value="isset($flight) ? $flight->count_clients : null" />
            @error('arrive_date')
                <span class="text-red-600 font-semibold">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <x-input-g nombre="Duración del vuelo" name="duration" type="number" :value="isset($flight) ? $flight->count_clients : null" />
            @error('duration')
                <span class="text-red-600 font-semibold">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <x-input-g nombre="Precio $:" name="price" type="number" :value="isset($flight) ? $flight->count_clients : null" />
            @error('price')
                <span class="text-red-600 font-semibold">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <x-input-g nombre="Precio $:" name="price" type="number" :value="isset($flight) ? $flight->count_clients : null" />
            @error('price')
                <span class="text-red-600 font-semibold">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <x-select-id-norm nombre="plane_id" etiqueta="Selecciona un avión" valor="model" :registro="$registro"
                :eleccion="isset($flight) ? $flight->plane_id : ''" />
            @error('plane_id')
                <span class="text-red-600 font-semibold">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <label for="" class="block mb-2 font-bold text-xl">Elija una opción para cada registro</label>
    <div>
        <x-select-id etiqueta="Selecciona un destino" nombre="destination_id" :list="$registro1"
            definition="destinations" :value="isset($select) ? $select->destination_id : ''" />
        @error('destination_id')
            <span class="text-red-600 font-semibold">{{ $message }}</span>
        @enderror
        <x-select-id etiqueta="Selecciona un aeropuerto" nombre="airport_id" :list="$registro1" definition="airports"
            :value="isset($select) ? $select->airport_id : ''" />
        @error('airport_id')
            <span class="text-red-600 font-semibold">{{ $message }}</span>
        @enderror
    </div>

    <div class="flex justify-center my-8">
        <x-butt mensaje="Enviar" />
    </div>

    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>


</div>
