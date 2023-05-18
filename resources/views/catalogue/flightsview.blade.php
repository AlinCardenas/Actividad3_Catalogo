<x-guest-layout>
    <div class="container max-w-[7xl] mx-auto mt-4">
        <h1 class="text-3xl text-center font-bold mt-4">Lista de vuelos</h1>
        <div class="grid grid-cols-2 gap-4 mb-6 mx-auto mt-5">
            @foreach ($registros as $item)
                <x-card1 :price="$item->price" :leavedate="$item->leave_date" :arrivedate="$item->arrive_date" :duration="$item->duration" :countclients="$item->count_clients" :planeid="$item->plane_id" />
            @endforeach
        </div>
        <span class="m-8">
            {{ $registros->links() }}
        </span>
    </div>
</x-guest-layout>