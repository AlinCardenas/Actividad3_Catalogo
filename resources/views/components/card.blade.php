@props(['registro', 'ruta_img'=>''])

<div class="col-span-1">
    <div class="bg-white rounded-lg shadow-2xl p-[10px] h-[500px]">
        <img class="mx-auto mt-3" src="{{asset('storage/img/'. $ruta_img)}}" width="250" height="250">
        <div class="p-4">
            {{$slot}}
        </div>
    </div>
</div>

