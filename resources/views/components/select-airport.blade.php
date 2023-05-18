@props(['etiqueta', 'nombre', 'list', 'definition', 'value'=>'0'])

<div class="">
    <label for="{{$nombre}}" class="text-lg block mb-2 font-bold">{{$etiqueta}}</label>
    <select name="{{$nombre}}" {{$attributes->merge(['class'=>'shadow-2xl rounded-lg p-2 w-full border-slate-300'])}}>
        @foreach ($list as $campo)
            <option value="{{ $campo->id }}" {{($campo->id == $value) ? 'selected' : null}} >{{ $campo->street }} {{ $campo->number }} {{ $campo->cp }} {{ $campo->state }}</option>
        @endforeach
    </select>
</div>
