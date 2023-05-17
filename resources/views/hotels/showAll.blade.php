<x-guest-layout>
    
    <div class="container max-w-[7xl] mx-auto mt-4">
        <h1 class="text-3xl text-center font-bold ">Lista de hoteles</h1>

        <div class="grid grid-cols-4 gap-4 mb-6 mx-auto mt-5">
            @foreach ($hotels as $hotel)
                <x-card :hotel="$hotel" />
            @endforeach
        </div> 
        
        {{$hotels->links()}}

    </div>
</x-guest-layout>