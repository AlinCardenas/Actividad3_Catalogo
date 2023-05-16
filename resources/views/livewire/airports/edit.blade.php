<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Aeropuertos
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <x-form-section submit="update">
                <x-slot name="title">
                    Registro de Aeropuertos
                </x-slot>
            
                <x-slot name="description">
                    Formulario para el registro de un nuevo Aeropuerto
                </x-slot>
            
                <x-slot name="form">
                    <!-- Name -->
                    <div class="col-span-6 ">
                        <x-label for="nombre" value="Nombre" />
                        <x-input id="nombre" type="text" class="mt-1 block w-full" wire:model.defer="nombre" autocomplete="nombre" />
                        <x-input-error for="nombre" class="mt-2" />
                    </div>
                    <div class="col-span-6 ">
                        <x-label for="direccion" value="Direccion" />
                        <x-input id="direccion" type="text" class="mt-1 block w-full" wire:model.defer="direccion" autocomplete="direccion" />
                        <x-input-error for="direccion" class="mt-2" />
                    </div>
                    <div class="col-span-6 ">
                        <x-label for="cant" value="Cantidad de pasajeros" />
                        <x-input id="cant" type="text" class="mt-1 block w-full" wire:model.defer="cant" autocomplete="cant" />
                        <x-input-error for="cant" class="mt-2" />
                    </div>
                </x-slot>
            
                <x-slot name="actions">
                    <x-action-message class="mr-3" on="saved">
                        Actualizado Correctamente
                    </x-action-message>
                    <x-action-message class="mr-3" on="error">
                        Ha ocurrido un error
                    </x-action-message>
            
                    <x-button wire:loading.attr="disabled" class="mr-3" wire:target="photo">
                        Actualizar
                    </x-button>
                    <a href="{{route('airports.index')}}" type="button">
                        Cancelar
                    </a>
                </x-slot>
            </x-form-section>
            
        </div>
    </div>
</div>

