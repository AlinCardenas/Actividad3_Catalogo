<x-layout>
    <x-table title="Registros">
        <x-slot name="btn">
            <x-link-id href="{{route('aero_des.create')}}" mensaje="Crear destino"
                class="bg-slate-950 rounded-sm w-[165px] text-center" />
        </x-slot>

        <table class="border-collapse border-4 border-cyan-500 w-full mt-5">
            <thead>
                <tr>
                    <x-table-head mensaje="Destino" />
                    <x-table-head mensaje="Aeropuerto" />
                    <x-table-head mensaje="Aerolinea" />
                    <x-table-head mensaje="Mostrar" />
                    <x-table-head mensaje="Editar" />
                    <x-table-head mensaje="Eliminar" />
                </tr>
            </thead>
            <tbody>
                @foreach ($registers as $item)
                <tr>
                    <x-table-row :item="$item->destinations->name" />
                    <x-table-row :item="$item->airports->name" />
                    <x-table-row :item="$item->airlines->name" />

                    <x-table-row-link>
                        <x-link-id href="{{route('aero_des.show', $item->id)}}" mensaje="Mostrar" />
                    </x-table-row-link>
                    <x-table-row-link>
                        <x-link-id href="{{route('aero_des.edit', $item->id)}}" mensaje="Editar" class="bg-green-600" />
                    </x-table-row-link>
                    <x-table-row-link>
                        <x-table-row-delete action="{{route('aero_des.destroy', $item->id)}}" />
                    </x-table-row-link>
                </tr>
                @endforeach

            </tbody>
        </table>
        <span class="m-8">
            {{ $registers->links() }}
        </span>
    </x-table>
</x-layout>