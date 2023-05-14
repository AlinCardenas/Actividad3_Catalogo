<x-guest-layout>
    
    <div class="container max-w-[7xl] mx-auto mt-2">
        
        <div class="bg-white shadow-md rounded px-8 py-6 mb-4 ">
            
            @php
                // 1.Rempazar nombre imagen
                $ruta_logo = str_replace('public/img/', '', $hotel->logo);
                $imgs = json_decode($hotel->image);
            @endphp

            <div class="grid grid-cols-3 gap-4 mb-6 mx-auto mt-5">
                <div class="col-span-1 flex items-center">
                    <img src="{{ asset('storage/img/'.$ruta_logo) }}" width="100" height="200">
                    <h1 class="text-3xl font-bold mb-4 ml-4 text-center">Hotel {{ $hotel->name }}</h1>
                </div>
            </div>

            <div class="grid grid-cols-3 gap-4 mb-6 mx-auto mt-5">
                @foreach ($imgs as $path)
                    @php
                        $ruta_multi = str_replace('public/img/', '', $path)
                    @endphp
                    {{-- Llamar imagen --}}
                    <div class="col-span-1">
                        <img src="{{asset('storage/img/'.$ruta_multi)}}" width="400" height="200">
                    </div>
                @endforeach
            </div>
            <div>
                <strong>Descripcion: </strong>{{$hotel->description}}
            </div>
            <div>
                <strong>Precio: </strong>{{$hotel->price}}
            </div>
            <div>
                <strong>Puntuación: </strong>{{$hotel->ranking}}
            </div>

            <div>
                <strong>Destino: </strong>{{$hotel->destino_id}}
            </div>
            <div class="flex justify-end ">
                <a href="{{ route('hotels.index') }}" class="font-bold text-purple-500 hover:text-purple-600 px-4"> Ir a inicio</a>
            </div>
        </div>
    </div>
</x-guest-layout>