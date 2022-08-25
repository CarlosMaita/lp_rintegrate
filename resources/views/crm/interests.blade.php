<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Interest') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pb-2 flex justify-end">
            <div class="new bg-blue-500 opacity-70 hover:opacity-100 text-white shadow-sm sm:rounded-lg">
                <a href="{{route('interests.create')}}">
                    <div class="px-3 py-2">
                        Crear
                    </div>
                </a>
            </div>
         
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="w-full table-auto" id="dt-table">
                        <thead>
                          <tr class="text-left">
                            <th>Interes</th>
                            <th>Slug</th>
                            <th class="text-right">...</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($interests as $i)
                                <tr>
                                    <td>{{$i->name}}</td>
                                    <td>{{$i->slug}}</td>
                                    <td class="text-right">
                                        <div class="flex justify-end space-x-3">
                                            <a href="{{route('interests.edit', $i)}}">
                                                <div class="px-3 bg-blue-500 text-white rounded-md opacity-50 hover:opacity-100">
                                                    Editar
                                                </div>
                                            </a>
                                            <form action="{{route('interests.destroy', $i)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="px-3 bg-red-500 text-white rounded-md opacity-50 hover:opacity-100">
                                                    Eliminar
                                                </button>
                                            </form>
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
