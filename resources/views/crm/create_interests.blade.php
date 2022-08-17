<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Interest') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <h1 class="text-2xl">
                       Create Nuevo Interes</b> 
                   </h1>
                    <form action="{{route('interests.store')}}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                    Nombre
                                </label>
                                <input name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Nombre" value="">
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block text-gray-700 text-base font-bold mb-2" for="slug">
                                    Slug <span class="text-gray-500 text-sm font-">(Se modifica al cambiar el nombre)</span>
                                </label>
                                <input disabled name="slug" class="shadow bg-slate-100 text-gray-600 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="slug" type="text" placeholder="Slug" value="">
                            </div>
                        </div>
                        {{-- button submit --}}
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3 space-x-1">
                                <a class="bg-gray-200 hover:bg-gray-500 text-black font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" href="{{route('interests.index')}}">
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
