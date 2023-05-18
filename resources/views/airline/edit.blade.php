<x-guest-layout>
    <div class="container max-w-6xl mx-auto mt-4">

        <form action="{{route('airline.update',$airline->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            @include('airline.form')
            
        </form>

    </div>

</x-guest-layout>