<x-guest-layout>
    <div class="container max-w-6xl mx-auto mt-4">

        <form action="{{route('airports.update',$airport->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            @include('airports.form')
            
        </form>

    </div>

</x-guest-layout>