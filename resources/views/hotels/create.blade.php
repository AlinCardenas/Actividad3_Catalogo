<x-guest-layout>
    <div class="container max-w-6xl mx-auto mt-4">
        <h1 class="text-3xl text-center font-bold  text-gray-700" >Registro de hotel</h1>
        
        <form class="" action="{{route('hotels.store')}}" method="POST" enctype="multipart/form-data" >
            @include('hotels.form') 
        </form>
    
    </div>

</x-guest-layout>