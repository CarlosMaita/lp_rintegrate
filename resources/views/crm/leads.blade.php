<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Productos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="w-full table-auto"  id="dt-table">
                        <thead>
                          <tr class="text-left">
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Telefono</th>
                            <th>Fuente</th>
                            <th>Estatus</th>
                            {{-- <th class="text-right">...</th> --}}
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($leads as $l)
                                <tr>
                                    <td>{{$l->name}}</td>
                                    <td>{{$l->email}}</td>
                                    <td>{{$l->phone}}</td>
                                    <td><a class="text-blue-700 hover:text-blue-900" href="{{url($l->source)}}">
                                        {{$l->source}}
                                        </a>
                                    </td>
                                    <td>
                                        @if($l->status == 'new')
                                            <span class="bg-green-500 text-white rounded-xl text-xs px-2">Nuevo</span>
                                        @else
                                            <span class="bg-red-500 text-white rounded-xl text-xs  px-2">No Disponible</span>
                                        @endif
                                    </td>
                                    {{-- <td class="text-right">
                                        <div class="flex justify-end space-x-3">
                                            <a href="{{route('products.lp',[ $p->interest->slug, $p->slug] )}}" target="_blank">
                                                <div class="px-3 bg-green-500 text-white rounded-md opacity-50 hover:opacity-100">
                                                    ver
                                                </div>
                                            </a>
                                            <a href="{{route('products.edit', $p)}}">
                                                <div class="px-3 bg-blue-500 text-white rounded-md opacity-50 hover:opacity-100">
                                                    Editar
                                                </div>
                                            </a>
                                            <form action="{{route('products.destroy', $p)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="px-3 bg-red-500 text-white rounded-md opacity-50 hover:opacity-100">
                                                    Eliminar
                                                </button>
                                            </form>
                                        </div> 
                                    </td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
