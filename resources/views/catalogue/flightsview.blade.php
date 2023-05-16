<x-layout title="Dashboard">
<x-Navbar>

</x-Navbar>

 <x-menu-nav>

    <x-container1>
    <h1 class="text-4xl font-bold text-center text-blue-600  py-4 px-8">
  Vuelos
</h1>


    <div class="flex flex-wrap -mx-4">
    
    @foreach ($registers  as $item)
    <x-card1 
                    :airline_destination="$item->airline__destinations->destinations->name" 
                    :price="$item->price"
                    :leave_date="$item->leave_date"
                    :arrive_date="$item->arrive_date"
                    :duration="$item->duration"
                    :count_clients="$item->count_clients"
                    :plane_id="$item->plane_id"
                    :img="$item->airline__destinations->destinations->images"
                    :airline="$item->airline__destinations->airlines->name" 
                    ></x-card1>
                    <br class="my-4">

    @endforeach
    </div>

        <span class="m-8">
            {{ $registers->links() }}
        </span>

            
    </x-container1>

 </x-menu-nav>
 <x-footer></x-footer>
</x-layout>
