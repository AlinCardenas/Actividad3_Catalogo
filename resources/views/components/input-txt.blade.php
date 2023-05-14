{{-- @props(['nombre', 'tipo', 'etiqueta']) --}}

<div class="mb-4 mt-6">
    <label for="{{$nombre}}" class="block mb-2 font-bold">{{$etiqueta}}</label>
    <input type="{{$tipo}}" name="{{$nombre}}" {{$attributes->merge(['class' => 'w-full px-3 py-2 border-2 border-black rounded-md'])}}  >
</div>

{{-- <div class="mb-4 mt-6">
    <label for="name" class="block mb-2 font-bold">Nombre:</label>
    <input type="text" name="name" class="w-full px-3 py-2 border rounded-md"  >
</div> --}}