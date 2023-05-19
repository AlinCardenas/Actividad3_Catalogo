<x-input-g name="name" type="text" nombre="Nombre:" :value="(isset($destination)) ? $destination->name : null" class="mb-8" />
@error('name')
<span class="text-red-600 font-semibold">{{$message}}</span>
@enderror

<x-input-g name="ranking" type="number" nombre="Calificación: " :value="(isset($destination)) ? $destination->ranking : null" class="mb-8" />
@error('ranking')
<span class="text-red-600 font-semibold">{{$message}}</span>
@enderror

<x-input-g name="languages" type="text" nombre="Idiomas: " :value="(isset($destination)) ? $destination->languages : null" class="mb-8" />
@error('languages')
<span class="text-red-600 font-semibold">{{$message}}</span>
@enderror

<x-textarea-g name="description" nombre="Descripción" class="mb-8">
    {{(isset($destination)) ? $destination->description : null}}
</x-textarea-g>
@error('description')
<span class="text-red-600 font-semibold">{{$message}}</span>
@enderror

<x-input-g name="images[]" type="file" nombre="Imagenes: " multiple class="border-none px-0" class="mb-8" />
@error('images')
<span class="text-red-600 font-semibold">{{$message}}</span>
@enderror

<x-select :list="$listados" :object="(isset($object)) ? $object : $destination" campo="address_id" />