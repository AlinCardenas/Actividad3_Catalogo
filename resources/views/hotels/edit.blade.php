<x-guest-layout>
    <div class="container max-w-6xl mx-auto mt-4">
        <form action="{{route('hotels.update', $hotel)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            @include('hotels.form')            
        </form>
    </div>
</x-guest-layout>