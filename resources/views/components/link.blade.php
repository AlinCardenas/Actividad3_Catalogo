@props(['mensaje', 'route'])

<a  {{$attributes->merge(['class' => " hover:text-purple-600"])}}>{{$mensaje}}</a>
