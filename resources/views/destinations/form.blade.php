<x-input-g name="name" type="text" nombre="Nombre:" :value="(isset($destination)) ? $destination->name : null">
    @error('name')
        <span class="text-red-600 font-semibold mb-8">{{$message}}</span>
    @enderror
</x-input-g>

<x-input-g name="ranking" type="number" nombre="Calificación: " :value="(isset($destination)) ? $destination->ranking : null">
    @error('ranking')
    <span class="text-red-600 font-semibold">{{$message}}</span>
    @enderror   
</x-input-g>

<x-input-g name="languages" type="text" nombre="Idiomas: " :value="(isset($destination)) ? $destination->languages : null" >
    @error('languages')
    <span class="text-red-600 font-semibold">{{$message}}</span>
    @enderror
</x-input-g>

<x-textarea-g name="description" nombre="Descripción" >
    {{(isset($destination)) ? $destination->description : null}}
</x-textarea-g>
@error('description')
<span class="text-red-600 font-semibold">{{$message}}</span>
@enderror
<br><br>
<x-input-g name="images[]" type="file" nombre="Imagenes: " multiple class="border-none px-0" >
    @error('images')
    <span class="text-red-600 font-semibold">{{$message}}</span>
    @enderror
</x-input-g>

<x-select :list="$listados" :object="(isset($object)) ? $object : $destination" campo="address_id" />
@error('address_id')
    <span class="text-red-600 font-semibold">{{$message}}</span>
@enderror