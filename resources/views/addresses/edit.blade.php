<x-guest-layout>
    <div class="container max-w-6xl mx-auto mt-4">

        <form action="{{ url('addresses/' . $addresses->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            @include('addresses.form')
            
        </form>

    </div>

</x-guest-layout>