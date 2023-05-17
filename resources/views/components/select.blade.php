@props(['list', 'object'=>'', 'campo'=>''])

<div class="mt-4 mb-5 ">
    {{-- @dump($object) --}}
    <label for="address" class="form-label">Selecciona un destino </label>
    <select name="address_id" id="address_id" {{$attributes->merge(['class'=>'shadow-2xl rounded-lg p-2 w-full border-slate-300'])}}>

        @foreach ($list as $id => $name)
            <option value="{{ $id }}" {{ $id == $object->$campo ? 'selected' : '' }}>{{ $name }}</option>
        @endforeach
    </select>
</div>