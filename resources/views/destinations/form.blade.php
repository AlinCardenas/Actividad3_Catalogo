<x-input-txt nombre="name" tipo="text" etiqueta="Nombre:" :value="(isset($destination)) ? $destination->name : null" />
@error('name')
<span class="text-red-600 font-semibold">{{$message}}</span>
@enderror

<x-input-txt nombre="ranking" tipo="number" etiqueta="Calificación: "
    :value="(isset($destination)) ? $destination->ranking : null" />
@error('ranking')
<span class="text-red-600 font-semibold">{{$message}}</span>
@enderror

<x-input-txt nombre="languages" tipo="text" etiqueta="Idiomas: "
    :value="(isset($destination)) ? $destination->languages : null" />
@error('languages')
<span class="text-red-600 font-semibold">{{$message}}</span>
@enderror

<x-text-area nombre="description" etiqueta="Descrición">
    {{(isset($destination)) ? $destination->description : null}}
</x-text-area>
@error('description')
<span class="text-red-600 font-semibold">{{$message}}</span>
@enderror

<x-input-txt nombre="images[]" tipo="file" etiqueta="Imagenes: " multiple class="border-none px-0" />
@error('images')
<span class="text-red-600 font-semibold">{{$message}}</span>
@enderror