<x-input-txt nombre="leave_date" tipo="date" etiqueta="Fecha de salida:"
    :value="(isset($flight)) ? $flight->leave_date : '' " />
@error('leave_date')
<span class="text-red-600 font-semibold">{{$message}}</span>
@enderror

<x-input-txt nombre="arrive_date" tipo="date" etiqueta="Fecha de llegada: "
    :value="(isset($flight)) ? $flight->arrive_date : '' " />
@error('arrive_date')
<span class="text-red-600 font-semibold">{{$message}}</span>
@enderror

<x-input-txt nombre="count_clients" tipo="number" etiqueta="Cantidad de pasajeros: "
    :value="(isset($flight)) ? $flight->count_clients : '' " />
@error('count_clients')
<span class="text-red-600 font-semibold">{{$message}}</span>
@enderror

<x-input-txt nombre="duration" tipo="time" etiqueta="Duración del vuelo: "
    :value="(isset($flight)) ? $flight->duration : '' " />
@error('duration')
<span class="text-red-600 font-semibold">{{$message}}</span>
@enderror

<x-input-txt nombre="price" tipo="number" etiqueta="Precio $: " :value="(isset($flight)) ? $flight->price : '' " />
@error('price')
<span class="text-red-600 font-semibold">{{$message}}</span>
@enderror

{{-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! --}}
{{-- Aviones --}}
<x-select-id-norm nombre="plane_id" etiqueta="Selecciona un avión" valor="model" :registro="$registro" :eleccion="(isset($flight)) ? $flight->plane_id : '' "/>
@error('plane_id')
    <span class="text-red-600 font-semibold">{{$message}}</span>
@enderror

<hr>
{{-- Destino... --}}
<label for="" class="block mb-2 font-bold text-xl">Elija una opción para cada registro</label>
<x-select-id etiqueta="Selecciona un destino" nombre="destination_id" :list="$registro1" definition="destinations"
    :value="(isset($select)) ? $select->destination_id : '' " />
@error('destination_id')
<span class="text-red-600 font-semibold">{{$message}}</span>
@enderror
<x-select-id etiqueta="Selecciona un aeropuerto" nombre="airport_id" :list="$registro1" definition="airports"
    :value="(isset($select)) ? $select->airport_id : '' " />
@error('airport_id')
<span class="text-red-600 font-semibold">{{$message}}</span>
@enderror
{{-- <x-select-id etiqueta="Selecciona una aerolinea" nombre="airline_id" :list="$registro1" definition="airlines"
    :value="(isset($select)) ? $select->airline_id : null" />
@error('airline_id')
<span class="text-red-600 font-semibold">{{$message}}</span>
@enderror --}}
