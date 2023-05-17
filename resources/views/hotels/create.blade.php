<x-guest-layout>
    <div class="container max-w-6xl mx-auto mt-4">

        <h1 class="text-3xl text-center font-bold  text-gray-700" >Registro de hotel</h1>
        <form action="{{route('hotels.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('hotels.form')
            
        </form>
       
    </div>
</x-guest-layout>



{{-- 
    
@error('name')
    <span class="text-red-600 font-semibold">{{$message}}</span>
@enderror    

@error('price')
    <span class="text-red-600 font-semibold">{{$message}}</span>
@enderror    

@error('ranking')
    <span class="text-red-600 font-semibold">{{$message}}</span>
@enderror    

@error('description')
    <span class="text-red-600 font-semibold">{{$message}}</span>
@enderror    

@error('logo')
    <span class="text-red-600 font-semibold">{{$message}}</span>
@enderror   

@error('image')
    <span class="text-red-600 font-semibold">{{$message}}</span>
@enderror    

@error('address_id')
    <span class="text-red-600 font-semibold">{{$message}}</span>
@enderror    

@error('service_id')
    <span class="text-red-600 font-semibold">{{$message}}</span>
@enderror    
    
--}}