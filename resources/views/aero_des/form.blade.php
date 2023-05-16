<x-select-id etiqueta="Selecciona un destino" nombre="destination_id" :list="$registro" definition="destinations" :value="(isset($selec)) ? $selec->destination_id : null" />

<x-select-id etiqueta="Selecciona un aeropuerto" nombre="airport_id" :list="$registro" definition="airports" :value="(isset($selec)) ? $selec->airport_id : null"/>
        
<x-select-id etiqueta="Selecciona una aerolinea" nombre="airline_id" :list="$registro" definition="airlines" :value="(isset($selec)) ? $selec->airline_id : null"/>