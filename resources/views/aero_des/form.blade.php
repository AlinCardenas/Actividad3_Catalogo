<x-select-id etiqueta="Selecciona un destino" nombre="destination_id" :list="$destinos" :value="(isset($selec)) ? $selec->destination_id : null" />
@error('destination_id')
    <span class="text-red-600 font-semibold">{{$message}}</span>
@enderror

<x-select-id etiqueta="Selecciona un aeropuerto" nombre="airport_id" :list="$aeropuertos"  :value="(isset($selec)) ? $selec->airport_id : null"/>
@error('airport_id')
    <span class="text-red-600 font-semibold">{{$message}}</span>
@enderror

<x-select-id etiqueta="Selecciona una aerolinea" nombre="airline_id" :list="$aerolineas"  :value="(isset($selec)) ? $selec->airline_id : null"/>
@error('airline_id')
    <span class="text-red-600 font-semibold">{{$message}}</span>
@enderror
