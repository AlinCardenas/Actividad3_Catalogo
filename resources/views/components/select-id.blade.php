@props(['etiqueta', 'nombre', 'list', 'definition', 'value'=>'0'])

<div class="my-8">
    <label for="{{$nombre}}" class="text-lg block mb-2 font-bold">{{$etiqueta}}</label>
    <select name="{{$nombre}}" class="w-full">
        @foreach ($list as $campo)
            <option value="{{ $campo->$definition->id }}" {{($campo->$definition->id == $value) ? 'selected' : null}} >{{ $campo->$definition->name }}</option>
        @endforeach
    </select>
</div>