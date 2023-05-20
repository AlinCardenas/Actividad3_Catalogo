<div>
    <x-enlace href="{{ route('flights.index') }}" mensaje="Ir a los vuelos" />

    <x-input-g nombre="Fecha de salida" name="leave_date" type="date"
        :value="isset($flight) ? $flight->leave_date : null" />
    @error('leave_date')
    <span class="text-red-600 font-semibold">{{ $message }}</span>
    @enderror

    <x-input-g nombre="Fecha de llegada" name="arrive_date" type="date"
        :value="isset($flight) ? $flight->arrive_date : null" />
    @error('arrive_date')
    <span class="text-red-600 font-semibold">{{ $message }}</span>
    @enderror
    <x-input-g nombre="Cantidad de pasajeros" name="count_clients" type="number"
        :value="isset($flight) ? $flight->count_clients : null" />
    @error('arrive_date')
    <span class="text-red-600 font-semibold">{{ $message }}</span>
    @enderror
    <x-input-g nombre="Duración del vuelo" name="duration" type="time"
        :value="isset($flight) ? $flight->duration : null" />
    @error('duration')
    <span class="text-red-600 font-semibold">{{ $message }}</span>
    @enderror
    <x-input-g nombre="Precio $:" name="price" type="number" :value="isset($flight) ? $flight->price : null" />
    @error('price')
    <span class="text-red-600 font-semibold">{{ $message }}</span>
    @enderror

    <x-select-simple nombre="plane_id" etiqueta="Elije un avion" :valor="$aviones" my_campo="model" :objeto="(isset($flight)) ? $flight->plane_id : null"  />

    <hr>
    <label for="" class="text-lg block mb-2 font-bold">Genere un enlace</label>

    <x-select-simple nombre="destination_id" etiqueta="Elije un destino" :valor="$destinos" my_campo="name" :objeto="(isset($flight)) ? $flight->airline__destinations->destination_id : null"  />

    <x-select-simple nombre="airport_id" etiqueta="Elije un aeropuerto" :valor="$aeropuertos" my_campo="name" :objeto="(isset($flight)) ? $flight->airline__destinations->airport_id : null"  />
    
    <x-select-simple nombre="airline_id" etiqueta="Elije una aerolinea" :valor="$aerolineas" my_campo="name" :objeto="(isset($flight)) ? $flight->airline__destinations->airline_id : null"  />
        
    <x-butt mensaje="Enviar" />

</div>