@props(['nombre', 'etiqueta', 'registro'=>'', 'valor'=>'', 'eleccion'=>''])

<div class="my-8">
    <label for="{{$nombre}}" class="text-lg block mb-2 font-bold">{{$etiqueta}}</label>
    <select name="{{$nombre}}" {{$attributes->merge(['class'=>'shadow-2xl rounded-lg p-2 w-full border-slate-300'])}}>
        @foreach ($registro as $campo)
            <option value="{{ $campo->id }}" {{ ($eleccion==$campo->id) ? 'selected' : null }}>{{ $campo->$valor }}</option>
        @endforeach
    </select>
</div>