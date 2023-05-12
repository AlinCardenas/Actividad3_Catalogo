<x-guest-layout>
    <h1>Pagina hoteles</h1>

    <ul>
        
        @foreach ($hotels as $hotel)
            
            <li>
                <a href="{{route('hotels.show', $hotel->id)}}">{{$hotel->name}} </a>
            </li>
        @endforeach
    </ul>
    {{$hotels->links()}}

</x-guest-layout>