<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inventario') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <h1 class="text-2xl">
                       Editar Inventario
                   </h1>
                    <form action="{{route('stock.update', $product)}}" method="POST"  enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="flex space-x-4 items-center">
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-32 h-32">
                                    <img class="w-full px-3" src="{{Storage::url($product->image_main)}}" alt="Foto">
                                </div>
                            </div>
                            <div class="w-full flex flex-wrap -mx-3 mb-6">
                                <div class="w-full px-3">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                        Nombre de Producto
                                    </label>
                                    <input disabled  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Nombre" value="{{$product->name}}">
                                </div>
                            </div>
                        </div>
                        <div class="flex space-x-4 items-center">
                            <div class="w-1/2 flex flex-wrap -mx-3 mb-6">
                                <div class="w-full px-3">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                        Stock Actual
                                    </label>
                                    <input required name="stock" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                     id="name" type="number" step="1" placeholder="Ej: 200" value="{{$product->stock}}">
                                </div>
                            </div>
                            <div class="w-1/2 flex flex-wrap -mx-3 mb-6">
                                <div class="w-full px-3">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                        Stock Mínimo
                                    </label>
                                    <input required name="min_stock" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                     id="name" type="number" step="1" placeholder="Ej: 200" value="{{$product->min_stock}}">
                                </div>
                            </div>
                        </div>
                        
                        
                      
                        {{-- button submit --}}
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3 space-x-1">
                                <a class="bg-gray-200 hover:bg-gray-500 text-black font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" href="{{route('stock.index')}}">
                                    Volver
                                </a>
                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                                    Guardar
                                </button>
                            </div>
                        </div>
                    </form>                   
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
