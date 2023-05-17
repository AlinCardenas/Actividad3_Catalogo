@props(['route'])
<div class="flex justify-end mt-4">
    <a  href="{{ $route }}" class="font-bold text-purple-500 hover:text-purple-600 px-4"> {{$slot}}</a>
</div>