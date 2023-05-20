<x-layout>
    <form class="w-5/12 mx-auto mt-9" method="POST" action="{{route('flights.store')}}" enctype="multipart/form-data">
        @csrf
        <h1 class="font-bold text-4xl text-center " >Registro de vuelos</h1>
        @include('flights.form')
    </form>
</x-layout> 