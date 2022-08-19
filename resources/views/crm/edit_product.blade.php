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
                   <h1 class="text-2xl">
                       Editar Producto</b> 
                   </h1>
                    <form action="{{route('products.update', $product)}}" method="POST"  enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="flex space-x-4 items-center">
                            <div class="w-1/2 flex flex-wrap -mx-3 mb-6">
                                <div class="w-full px-3">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                        Nombre de Producto
                                    </label>
                                    <input required name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Nombre" value="{{$product->name}}">
                                </div>
                            </div>
                            <div class="w-1/2 flex flex-wrap -mx-3 mb-6">
                                <div class="w-full px-3">
                                    <label class="block text-gray-700 text-base font-bold mb-2" for="slug">
                                        Slug <span class="text-gray-500 text-sm font-normal">(Se asigna al crear el nombre)</span>
                                    </label>
                                    <input disabled name="slug" class="shadow bg-slate-100 text-gray-600 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="slug" type="text" placeholder="Slug" value="{{$product->slug}}">
                                </div>
                            </div>
                        </div>
                        <div class="flex space-x-4 items-center">
                            <div class="w-1/4 flex flex-wrap -mx-3 mb-6">
                                <div class="w-full px-3">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                        Precio (USD)
                                    </label>
                                    <input required name="price" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                     id="name" type="number" step="0.01" placeholder="Ej: 200" value="{{$product->price}}">
                                </div>
                            </div>
                            <div class="w-1/4 flex flex-wrap -mx-3 mb-6">
                                <div class="w-full px-3">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                        Estatus
                                    </label>
                                    <select name="status" id="status" 
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                        @if($product->status == 'disponible')
                                            <option selected value="disponible" selected>Disponible</option>
                                            <option value="no disponible">No Disponible</option>
                                        @else
                                            <option value="disponible" selected>Disponible</option>
                                            <option selected value="no disponible">No Disponible</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="w-1/4 flex flex-wrap -mx-3 mb-6">
                                <div class="w-full px-3">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                        Interés
                                    </label>
                                    <select name="interest_id" id="interest" 
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                        @foreach ($interests as $i)
                                            <option value="{{$i->id}}"  @if($product->interest_id == $i->id) selected @endif>{{$i->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="w-1/4 flex flex-wrap -mx-3 mb-6">
                                <div class="w-full px-3">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                        Color
                                    </label>
                                    <input required name="color_main" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="color_main" type="color" placeholder="Ej: #200000" value="{{$product->color_main}}">
                                </div>
                            </div>
                        </div>
                        <div class="flex space-x-4 items-center px-3">
                            <div class="w-full flex flex-wrap -mx-3 mb-6">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                    Google Product Category 
                                </label>
                                <select name="google_product_category" id="google_product_category"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                    @foreach ($google_product_categories as $c)
                                        <option value="{{$c->id}}" @if($product->google_product_category == $c->id ) selected @endif>{{$c->category}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="flex space-x-4 items-center">
                            <div class="w-full flex flex-wrap -mx-3 mb-6">
                                <div class="w-full px-3">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                        Descripción
                                    </label>
                                    <textarea required name="description" id="" cols="30" rows="3" maxlength="300" placeholder="Descripción"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    >{{$product->description}}</textarea>
                                </div>
                            </div>
                           
                        </div>
                        <hr class="pb-5">
                        <div >
                            <h2 class="text-xl">Imagenes de producto</h2>
                            <div class="flex  space-x-5">
                                <div class="flex flex-wrap -mx-3 mb-6">
                                    <div class="w-full px-3">
                                        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                            Imagen Principal
                                        </label>
                                        <input  name="image_main" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="img" type="file" placeholder="Imagen" value="">
                                    </div>
                                </div>
                                <div class="flex flex-wrap -mx-3 mb-6">
                                    <div class="w-full px-3">
                                        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                            Imagen Secundaria
                                        </label>
                                        <input  name="image_second" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="img" type="file" placeholder="Imagen" value="">
                                    </div>
                                </div>
                                <div class="flex flex-wrap -mx-3 mb-6">
                                    <div class="w-full px-3">
                                        <label  class="block text-gray-700 text-sm font-bold mb-2" for="image_background">
                                            Imagen de Fondo de Landing Page
                                        </label>
                                        <input  name="image_background" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="img" type="file" placeholder="Imagen" value="">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <hr class="pb-5">
                        <div>
                            <h2>Caracteristicas del producto</h2>
                            <div class="flex  space-x-5">
                                <div class="w-1/2 flex flex-wrap -mx-3 mb-6">
                                    <div class="w-full px-3">
                                        <label class="block text-gray-700 text-sm font-bold mb-2" for="image_background">
                                            Titulos de sección de carateristicas
                                        </label>
                                        <input name="title_features" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                        id="img" type="text" placeholder="Titulo" value="{{$product->title_features}}" required>
                                    </div>
                                </div>

                                <div class="w-1/2 flex flex-wrap -mx-3 mb-6">
                                    <div class="w-full px-3">
                                        <label class="block text-gray-700 text-sm font-bold mb-2" for="image_background">
                                            Subtitulo de sección de carateristicas
                                        </label>
                                        <input name="subtitle_features" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                        id="img" type="text" placeholder="subtitulo" value="{{$product->subtitle_features}}" required>
                                    </div>
                                </div>
                            </div>
                            <hr class="pb-5">
                            <div class="pb-5">
                                <h3>Listado de caracteristicas <span class="text-red-700">(Agrega maximo 4)</span></h3>
                                <div class="flex space-x-4">
                                    <input id="input-title-feature" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  
                                    placeholder="Titulo de la caracteristica">
                                    <input id="input-subtitle-feature" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  
                                    placeholder="Titulo de la caracteristica">
                                    <button id="btn-feature" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                                        Agregar
                                    </button>
                                </div>
                                <div class="space-y-2 pt-3">
                                    <h4>Caracteristicas agregadas</h4>
                                    <div id="list-features"></div>
                                </div>
                                <input id="input-features" name="features" type="hidden" value="">
                                <script>
                                    const init_feature = JSON.parse(@json($product->features));
                                    let features = [];
                                    if (init_feature != null){
                                       features = init_feature;
                                    }
                                    //conseguir  maximo index de features
                                    let pointer = 0;
                                    let max_index = 0;
                                    if (features.length > 0){
                                        max_index = features.reduce((max, feature) => {
                                            return Math.max(max, feature.index);
                                        }, 0);
                                        pointer = max_index;
                                    }
                                    console.log(pointer);
                                    const inputTitleFeature = document.getElementById("input-title-feature");
                                    const inputSubtitleFeature = document.getElementById("input-subtitle-feature");
                                    const btnFeature = document.getElementById("btn-feature");
                                    const listFeatures = document.getElementById("list-features");
                                    const inputFeatures = document.getElementById("input-features");
                                    

                                    btnFeature.addEventListener('click', function(){
                                        const {title, subtitle} = getFeatureFromInput();
                                        if (title && subtitle){
                                            addFeature(title, subtitle);
                                            printFeatureToList();
                                            addFeaturesToInputHidden();
                                        }else{
                                            console.log('sin valores')
                                        }
                                    });

                                    function getFeatureFromInput(){
                                            let title = inputTitleFeature.value
                                            let subtitle = inputSubtitleFeature.value
                                            inputTitleFeature.value ="";
                                            inputSubtitleFeature.value = "";
                                            return {title, subtitle};
                                    }
                                    function addFeature( title, subtitle){
                                        pointer++;
                                        let feature = {
                                            index: pointer,
                                            title: title,
                                            subtitle: subtitle
                                        }
                                        features.push(feature);
                                    }

                                    function deleteFeature(index){
                                       features = features.filter((feature) => index != feature.index);
                                       printFeatureToList();
                                       addFeaturesToInputHidden();
                                    }

                                    
                                    function printFeatureToList(){
                                        let items = "";
                                        if(features.length > 0 ){
                                            features.forEach( f => {
                                                items += `<p>+${f.index} <span class="title font-bold">${f.title}</span> - <span class="subtitulo">${f.subtitle}</span> <span class="text-red-500 cursor-pointer" onclick="deleteFeature(${f.index})">x</span></p>`;
                                            });
                                            if(features.length >= 4 ){
                                                btnFeature.disabled = true;
                                            }else{
                                                btnFeature.disabled = false;
                                            }
                                        }
                                        else{
                                            items = `<p class="text-xs text-gray-600 pl-4">sin caracteristicas</p>`;
                                        }
                                        listFeatures.innerHTML = items;
                                    }
                                    
                                    function addFeaturesToInputHidden(){
                                        if(features.length > 0){
                                            let featuresString = JSON.stringify(features);
                                            inputFeatures.value = featuresString;
                                        }else{
                                            inputFeatures.value ="";
                                        }
                                    }

                                    printFeatureToList();
                                    addFeaturesToInputHidden();
                                </script>
                            </div>
                        </div>
                        {{-- button submit --}}
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3 space-x-1">
                                <a class="bg-gray-200 hover:bg-gray-500 text-black font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" href="{{route('products.index')}}">
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
