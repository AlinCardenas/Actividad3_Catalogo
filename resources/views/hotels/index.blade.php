<x-guest-layout>
    <h1 class="text-xl font-bold mb-4">Lista de hoteles</h1>

    <ul>
        
        @foreach ($hotels as $hotel)
            
            <li>
                <a href="{{route('hotels.edit', $hotel->id)}}">{{$hotel->name}} </a>
            </li>
        @endforeach
    </ul>
    {{$hotels->links()}}

</x-guest-layout>