<div class="container mx-auto px-5 bg-cyan-50	">
    <h1 class="text-3xl">Información de: {{$name}}</h1>
    <div class="grid grid-cols-2 gap-2">
        <div class="m-8">
            <span class="font-semibold">Nombre: </span>
            <p class=""> {{$name}}</p>
        </div>
        <div class="m-8">
            <span class="font-semibold">Calle: </span>
            <p class=""> {{$street}}</p>
        </div>
        <div class="m-8">
            <span class="font-semibold">Código postal: </span>
            <p class=""> {{$code}}</p>
        </div>
        <div class="m-8">
            <span class="font-semibold">Número exterior: </span>
            <p class=""> {{$numext}}</p>
        </div>
        <div class="m-8">
            <span class="font-semibold">Número interior: </span>
            <p class=""> {{$numint}}</p>
        </div>
        <div class="m-8">
            <span class="font-semibold">País: </span>
            <p class=""> {{$country}}</p>
        </div>
        <div class="m-8">
            <span class="font-semibold">Descripción: </span>
            <p class=""> {{$description}}</p>
        </div>
        <div class="grid grid-cols-6 gap-6 mx-3">
        <div class="grid justify-items-center">
            @foreach ($images as $item)
                <img src="{{asset('storage/imgs/' . $item)}}" alt="..." width="100" height="100">
            @endforeach
        </div>  
    </div>
</div>