@props(['nombre','name','type'])

<div>
    <label for="{{$name}}" class="mb-2 font-bold">{{$nombre}}</label>
    <input type="{{$type}}" name="{{$name}}"  {{$attributes->merge(['class'=>'shadow-2xl rounded-lg p-2 w-full border-slate-300'])}}  >
</div>