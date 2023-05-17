<x-layout>
    <x-table title="Registros de vuelos">
        <x-slot name="btn">
            <x-link-id href="{{route('flights.create')}}" mensaje="Crear destino"
                class="bg-slate-950 rounded-sm w-[165px] text-center" />
        </x-slot>

        <table class="border-collapse border-4 border-cyan-500 w-full mt-5">
            <thead>
                <tr>
                    <x-table-head mensaje="Fecha de salida" />
                    <x-table-head mensaje="Fechaa de llegada" />
                    <x-table-head mensaje="Duración" />
                    <x-table-head mensaje="Precio" />
                    <x-table-head mensaje="Destino" />
                    <x-table-head mensaje="Aeroperto" />
                    {{-- <x-table-head mensaje="Aerolinea" /> --}}
                    <x-table-head mensaje="Mostrar" />
                    <x-table-head mensaje="Editar" />
                    <x-table-head mensaje="Eliminar" />
                </tr>
            </thead>
            <tbody>
                @foreach ($registers as $item)
                <tr>
                    <x-table-row :item="$item->leave_date" />
                    <x-table-row :item="$item->arrive_date" />
                    <x-table-row :item="$item->duration" />
                    <x-table-row :item="$item->price" />
                    {{-- !!!!!! --}}
                    {{-- <x-table-row :item="$item->planes->model" /> --}}
                    <x-table-row :item="$item->airline__destinations->destinations->name" />
                    <x-table-row :item="$item->airline__destinations->airports->name" />
                    {{-- <x-table-row :item="$item->airline__destinations->airlines->name" /> --}}
                    {{-- !!!!! --}}

                    <x-table-row-link>
                        <x-link-id href="{{route('flights.show', $item->id)}}" mensaje="Mostrar" />
                    </x-table-row-link>
                    <x-table-row-link>
                        <x-link-id href="{{route('flights.edit', $item->id)}}" mensaje="Editar"
                            class="bg-green-600" />
                    </x-table-row-link>
                    <x-table-row-link>
                        <x-table-row-delete action="{{route('flights.destroy', $item->id)}}" />
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