@props(['etiqueta', 'nombre', 'list', 'value'=>''])

<div class="my-8">
    <label for="{{$nombre}}" class="text-lg block mb-2 font-bold">{{$etiqueta}}</label>
    <select name="{{$nombre}}" {{$attributes->merge(['class'=>'shadow-2xl rounded-lg p-2 w-full border-slate-300'])}}>

        @foreach ($list as $campo)
            <option value="{{ $campo->id }}" {{($campo->id == $value) ? 'selected' : null}} >{{ $campo->name }}</option>
        @endforeach
    </select>
</div>
