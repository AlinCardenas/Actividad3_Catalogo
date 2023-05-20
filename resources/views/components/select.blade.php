@props(['list', 'object'=>'', 'campo'=>'', 'etiqueta' => ''])

<div class="mt-4 mb-5 ">
    {{-- @dump($object) --}}
    <label for="" class="form-label">{{$etiqueta}}</label>
    <select name="{{$campo}}" id="" {{$attributes->merge(['class'=>'shadow-2xl rounded-lg p-2 w-full border-slate-300'])}}>
        @foreach ($list as $id => $name)
            <option value="{{ $id }}" {{ $id == $object->$campo ? 'selected' : '' }}>{{ $name }}</option>
        @endforeach
    </select>
</div>