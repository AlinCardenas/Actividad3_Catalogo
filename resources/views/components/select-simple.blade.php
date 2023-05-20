@props(['nombre', 'etiqueta', 'valor'=>'', 'my_campo'=>'', 'objeto'=>''])

<div class="my-8">
    <label for="{{$nombre}}" class="text-lg block mb-2 font-bold">{{$etiqueta}}</label>
    <select name="{{$nombre}}" {{$attributes->merge(['class'=>'shadow-2xl rounded-lg p-2 w-full border-slate-300'])}}>
        @foreach ($valor as $campo)
            <option value="{{ $campo->id }}" {{ ($objeto == $campo->id) ? 'selected' : null}} >{{ $campo->$my_campo }}</option>
        @endforeach
    </select>
</div>