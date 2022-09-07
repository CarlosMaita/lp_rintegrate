<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inventario') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pb-2 flex justify-end">
            <div class="new bg-blue-500 opacity-70 hover:opacity-100 text-white shadow-sm sm:rounded-lg">
                <a href="{{route('products.create')}}">
                    <div class="px-3 py-2">
                        Crear
                    </div>
                </a>
            </div>
         
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="w-full table-auto "  id="dt-table">
                        <thead>
                          <tr class="text-left">
                            <th>Producto</th>
                            <th>Nombre</th>
                            <th>Precio de Venta</th>
                            <th>Stock</th>
                            <th>Diponibilidad</th>
                            <th class="text-right">...</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $p)
                                <tr class="">
                                    <td  >
                                        <img class="w-10 h-10" src="{{Storage::url($p->image_main)}}" alt="Foto">
                                    </td>
                                    <td>{{$p->name}}</td>
                                    <td>{{$p->price}} USD</td>
                                    <td>{{$p->stock}}</td>
                                    <td>
                                        @if($p->stock > $p->min_stock)
                                            <span class="bg-green-500 text-white rounded-xl text-xs px-2">Disponible</span>
                                        @elseif($p->stock == 0)
                                            <span class="bg-red-500 text-white rounded-xl text-xs  px-2">Sin stock</span>
                                        @else
                                            <span class="bg-yellow-500 text-white rounded-xl text-xs  px-2">Poco Stock</span>
                                        @endif
                                    </td>
                                    <td class="text-right">
                                        <div class="flex justify-end space-x-3">
                                            <a href="{{route('stock.edit', $p)}}">
                                                <div class="px-3 bg-blue-500 text-white rounded-md opacity-50 hover:opacity-100">
                                                    Editar
                                                </div>
                                            </a>
                                        </div> 
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
