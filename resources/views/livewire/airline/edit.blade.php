<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Aerolineas
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <x-form-section submit="update">
                <x-slot name="title">
                    Edicion de Aerolineas
                </x-slot>
            
                <x-slot name="description">
                    Formulario para la edicion de una Aerolinea
                </x-slot>
            
                <x-slot name="form">
                    <!-- Name -->
                    <div class="col-span-6 ">
                        <x-label for="nombre" value="Nombre" />
                        <x-input id="nombre" type="text" class="mt-1 block w-full" wire:model.defer="nombre" autocomplete="nombre" />
                        <x-input-error for="nombre" class="mt-2" />
                    </div>
                    <div class="col-span-6 ">
                        <x-label for="descripcion" value="Descripcion" />
                        <x-input id="descripcion" type="text" class="mt-1 block w-full" wire:model.defer="descripcion" autocomplete="descripcion" />
                        <x-input-error for="descripcion" class="mt-2" />
                    </div>
                    <div class="col-span-6 ">
                        <x-label for="valoracion" value="Valoracion" />
                        <x-input id="valoracion" type="text" class="mt-1 block w-full" wire:model.defer="valoracion" autocomplete="valoracion" />
                        <x-input-error for="valoracion" class="mt-2" />
                    </div>
                    {{-- <div class="col-span-6 ">
                        <x-label for="logo" value="Logo" />
                        <x-input id="logo" type="file" class="mt-1 block w-full" wire:model.defer="logo" autocomplete="logo" />
                        <x-input-error for="logo" class="mt-2" />
                    </div> --}}
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
                    <a href="{{route('airlines.index')}}" type="button">
                        Cancelar
                    </a>
                </x-slot>
            </x-form-section>
            
        </div>
    </div>
</div>
