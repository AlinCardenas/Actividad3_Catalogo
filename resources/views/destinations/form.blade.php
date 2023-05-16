
<x-input-txt nombre="name" tipo="text" etiqueta="Nombre:" :value="(isset($destination)) ? $destination->name : null" />

<x-input-txt nombre="ranking" tipo="number" etiqueta="Calificación: "  :value="(isset($destination)) ? $destination->ranking : null" />

<x-input-txt nombre="languages" tipo="text" etiqueta="Idiomas: "  :value="(isset($destination)) ? $destination->languages : null" />

<x-text-area nombre="description" etiqueta="Descrición">
    {{(isset($destination)) ? $destination->description : null}}
</x-text-area>

<x-input-txt nombre="images[]" tipo="file" etiqueta="Imagenes: " multiple  class="border-none px-0"  />