@props(['mensaje'])

<div class="flex justify-end mt-4">
    <a  {{$attributes->merge(['class' => "font-bold text-purple-500 hover:text-purple-600 px-4"])}}>{{$mensaje}}</a>
</div>