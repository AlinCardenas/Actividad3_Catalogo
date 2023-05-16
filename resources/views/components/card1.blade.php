@props([
    'airline_destination' => '',
    'price' => '',
    'leave_date' => '',
    'arrive_date' => '',
    'duration' => '',
    'count_clients' => '',
    'plane_id' => '',
    'img' => 'https://www.smashbros.com/images/og/kirby.jpg',
    'airline'
])

    <!-- hola, deves de ponesta parte de codigo dentro de tu vista ;3 -->
    <div class="w-1/2 px-4 shadow-md rounded-lg bg-white my-1">
        <div class="flex">
            <img src='{{$img}}' alt="Imagen" class="w-1/3">
            <div class="p-4">
                <h2 class="text-xl font-bold mb-2">{{ $airline_destination }}</h2>
                <p class="text-gray-500">{{ $price }}</p>
                <p class="text-red-500">
                Fecha de salida: {{$leave_date}} <span class="text-green-500">Fecha de llegada: {{$arrive_date}}</span>
                </p>
                <p class="text-cyan-500">Duracion:  {{$duration}}</p>
                <p class="text-yellow-500">Pasajeros:  {{$count_clients}}</p>
                
                <p class="text-gray-500">Avion {{$plane_id}}</p>
                <p class="text-orange-500">Areolinea {{$airline}}</p>
            </div>
         </div>
    </div>
