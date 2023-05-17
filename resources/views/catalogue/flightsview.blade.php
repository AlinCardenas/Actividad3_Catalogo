<x-layout title="Dashboard">
    <x-Navbar>

    </x-Navbar>

    <x-menu-nav>
        <x-container1>
            <h1 class="text-4xl font-bold text-center text-blue-600  py-4 px-8">
                Vuelos
            </h1>

            <div class="flex flex-wrap -mx-4">
                @foreach ($registros as $item)
                <x-card1 :price="$item->price" :leavedate="$item->leave_date" :arrivedate="$item->arrive_date" :duration="$item->duration" :countclients="$item->count_clients" :planeid="$item->plane_id" />
                @endforeach
            </div>

            <span class="m-8">
                {{ $registros->links() }}
            </span>


        </x-container1>

    </x-menu-nav>
    <x-footer></x-footer>
</x-layout>