@props([
    'price' => '',
    'leavedate' => '',
    'arrivedate' => '',
    'duration' => '',
    'countclients' => '',
    'planeid' => '',
])

    <!-- hola, deves de ponesta parte de codigo dentro de tu vista ;3 -->
    <div class="px-4 shadow-md rounded-lg bg-white my-1">
        <div class="flex">
            <div class="p-4">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        Fecha de salida: {{$leavedate}}
                    </div>
                    <div>
                        Fecha de llegada: {{$arrivedate}}
                    </div>
                </div>
                <p class="text-gray-500">Precio: ${{ $price }}</p>
                <p class="text-cyan-500">Duracion:  {{$duration}}</p>
                
                <p class="text-gray-500">Avión: model-{{$planeid}}</p>
            </div>
         </div>
    </div>
