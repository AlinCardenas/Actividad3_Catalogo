<x-layout>
    <div class="grid justify-items-center items-center h-screen">
        <div class="grid grid-cols-3 gap-[150px] justify-items-center">
            <div class="grid justify-items-center items-center hover:opacity-25">
                {{-- <a href="{{route('destinations.back', $destination->id)}}">
                    <img src="{{asset('images/flecha.png')}}" alt="" class="w-64 h-64 rotate-180">
                </a> --}}
            </div>
            <div>
                <div class="bg-white rounded-lg shadow-2xl p-6 w-full border-4">
                    <div class="grid justify-items-center items-center">
                        <h1 class="text-xl font-bold my-2">Nombre: {{$registro->destinations->name}}</h1>
                        <h2 class="font-semibold my-2">Dirección: {{$registro->airports->name}}</h3>
                        <h3 class="font-semibold my-2">Dirección: {{$registro->airlines->name}}</h3>
                    </div>   
                </div>
            </div>
            <div class="grid justify-items-center items-center hover:opacity-25">
                {{-- <a href="{{route('destinations.skip', $destination->id)}}">
                    <img src="{{asset('images/flecha.png')}}" alt="" class="w-64 h-64 ">
                </a> --}}
            </div>
        </div>
    </div>
</x-layout>