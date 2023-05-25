<div>

    <div class="flex justify-end  mt-4">
        <a href="{{ route('addresses.index') }}" class="font-bold text-purple-500 hover:text-purple-600 px-4"> Ir a
            inicio</a>
    </div>

    <x-input-g nombre="Calle" name="street" type="text" value="{{ $addresses -> street ?? old('street') }}">
        @error('street')
        <span class="text-red-600 font-semibold">{{$message}}</span>
        @enderror
    </x-input-g>

    <x-input-g nombre="Numero" name="number" type="number" value="{{ $addresses -> number ?? old('number') }}">
        @error('number')
        <span class="text-red-600 font-semibold">{{$message}}</span>
        @enderror
    </x-input-g>

    <x-input-g nombre="Codigo postal" name="cp" type="number" value="{{ $addresses -> cp ?? old('cp') }}">
        @error('cp')
        <span class="text-red-600 font-semibold">{{$message}}</span>
        @enderror
    </x-input-g>

    <x-input-g nombre="Estado" name="state" type="text" value="{{ $addresses -> state ?? old('state') }}">
        @error('state')
        <span class="text-red-600 font-semibold">{{$message}}</span>
        @enderror
    </x-input-g>

    <x-input-g nombre="Telefono" name="phone" type="number" value="{{ $addresses -> phone ?? old('phone') }}">
        @error('phone')
        <span class="text-red-600 font-semibold">{{$message}}</span>
        @enderror
    </x-input-g>

    <x-input-g nombre="País" name="country" type="text" value="{{ $addresses -> country ?? old('country') }}">
        @error('country')
        <span class="text-red-600 font-semibold">{{$message}}</span>
        @enderror
    </x-input-g>


    <div>
        <x-butt mensaje="Registrar"></x-butt>

    </div>
</div>