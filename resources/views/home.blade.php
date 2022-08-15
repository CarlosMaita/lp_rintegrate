@extends('layout.template')


@section('title')
    Tienda Tendencia
@endsection

@section('metas')
    <!-- sin metas -->
    <meta name="facebook-domain-verification" content="xkh94qof51py4kkjif9iikzysyi320" />
@endsection

@section('content')
   <section class="h-full bg-white py-10">
        <h1 class="text-5xl font-bold text-center text-gray-800">Tienda Online Rintegrate</h1>
        <h2 class="text-center text-gray-500 text-2xl">Productos preferidos por nuestros clientes</h2>

        {{-- gallery of products --}}
        {{-- <div class="cards flex space-x-4">
            
            <div class="card w-56">
                <div class="img w-56 h-56 flex p-1">
                    <img class="object-cover object-center" src="https://media.tacdn.com/media/attractions-splice-spp-674x446/0b/34/18/5f.jpg" alt="product-1" >
                </div>
                <div class="card-body space-y-3 px-5 py-5">
                    <h5 class="card-title font-bold">Producto 1</h5>
                    <p class="card-text text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.</p>
                    <a href="#" class="">
                        <div class="text-center bg-blue-600 w-full py-2 mt-5 text-white">
                        Ver más
                        </div>
                    </a>
                </div>
            </div>

        </div> --}}

   </section>

   
@endsection

@section('footer')
<footer class="py-3 bg-black">
    <p class="text-base text-white text-center">
        Rintegrate -Todos los derechos reservados. 2022
    </p>    
</footer>
@endsection