@extends('layouts.template')


@section('title')Tienda @endsection

@section('metas')
    <!-- sin metas -->
    <meta name="facebook-domain-verification" content="xkh94qof51py4kkjif9iikzysyi320" />

    <!-- Primary Meta Tags -->
<meta name="title" content="Rintegrate - Tienda">
<meta name="description" content="Encuentra 🕵️ productos Increíbles 😎. Las mejores 🏷️promociones 🏷️. Envio Incluido en todas las compras 📦🛍️ Nuevo Centro de Compras Digital. ">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://rintegrate.com/">
<meta property="og:title" content="Rintegrate - Tienda">
<meta property="og:description" content="Encuentra 🕵️ productos Increíbles 😎. Las mejores 🏷️promociones 🏷️. Envio Incluido en todas las compras 📦🛍️ Nuevo Centro de Compras Digital. ">
<meta property="og:image" content="https://rintegrate.com/assets/img/banner-principal.png">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://rintegrate.com/">
<meta property="twitter:title" content="Rintegrate - Tienda">
<meta property="twitter:description" content="Encuentra 🕵️ productos Increíbles 😎. Las mejores 🏷️promociones 🏷️. Envio Incluido en todas las compras 📦🛍️ Nuevo Centro de Compras Digital. ">
<meta property="twitter:image" content="https://rintegrate.com/assets/img/banner-principal.png">

@endsection

@section('content')
   <section class="min-h-full bg-white py-10">
        <h1 class="text-4xl xl:text-5xl font-bold text-center text-gray-800">Tienda Rintegrate</h1>
        <h2 class="text-center text-gray-500 text-base xl:text-2xl">Productos preferidos por nuestros clientes</h2>
        <p class="text-center">
            <span class="text-sm  font-thin">
                Solo para Venezuela.
            </span> 
            <span class="text-xs  font-thin underline">
                Bolivares a Tasa de BCV 
            </span> 
        </p>
        {{-- gallery of products --}}
        <div class="cards grid xl:grid-cols-6 grid-cols-2 gap-2  justify-center  pt-10 xl:px-10">
            @foreach ($products as $p)
                <div class="card w-40 xl:w-56 border border-gray-200 hover:border-gray-400 mx-auto">
                    <a href="{{route('products.lp',[ $p->interest->slug, $p->slug])}}"  class="">
                        <div class="img h-40 xl:h-56 flex overflow-hidden">
                            <img class="object-cover object-center transition ease-out hover:scale-110" 
                                src="{{Storage::url($p->image_main)}}" alt="{{$p->name}}">
                        </div>
                    </a>
                    <div class="card-body space-y-3 px-2 py-2 xl:px-5 xl:py-5">
                        <a href="{{route('products.lp',[ $p->interest->slug, $p->slug])}}"  class="">
                        <h5 class="card-title font-bold uppercase">{{$p->name}}</h5>
                        <p class="card-text text-gray-600 lowercase">{{$p->description}}</p>
                        @if($p->status == "disponible")
                        <span  class="bg-green-500 rounded-sm border-2 text-white font-bold px-2 text-xs py-1 flex items-center mx-auto xl:mx-0">
                            <span class="pr-2">
                                <svg class="w-5 h-5 animate-ping" width="51" height="51" viewBox="0 0 51 51" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M25.4743 2.18726C12.818 2.18726 2.55762 12.4477 2.55762 25.1039C2.55762 37.7602 12.818 48.0206 25.4743 48.0206C38.1305 48.0206 48.3909 37.7602 48.3909 25.1039C48.3909 12.4477 38.1305 2.18726 25.4743 2.18726ZM35.4076 21.2289C35.5905 21.0198 35.7298 20.7763 35.8172 20.5126C35.9046 20.2489 35.9383 19.9704 35.9165 19.6935C35.8947 19.4165 35.8177 19.1468 35.6901 18.9C35.5624 18.6533 35.3867 18.4346 35.1733 18.2567C34.9599 18.0789 34.7131 17.9455 34.4474 17.8645C34.1817 17.7834 33.9025 17.7563 33.6261 17.7848C33.3498 17.8133 33.0819 17.8967 32.8383 18.0302C32.5947 18.1638 32.3803 18.3446 32.2076 18.5623L23.2493 29.3102L18.6139 24.6727C18.2209 24.2932 17.6947 24.0832 17.1484 24.0879C16.6022 24.0927 16.0797 24.3118 15.6934 24.698C15.3071 25.0843 15.088 25.6068 15.0833 26.1531C15.0785 26.6993 15.2885 27.2256 15.668 27.6185L21.918 33.8685C22.1227 34.0731 22.3678 34.2328 22.6376 34.3374C22.9075 34.442 23.1962 34.4892 23.4853 34.4761C23.7744 34.463 24.0576 34.3898 24.3168 34.2611C24.576 34.1325 24.8056 33.9512 24.9909 33.7289L35.4076 21.2289Z"
                                        fill="#51FF8C" />
                                </svg>
                            </span>
                            Producto disponible
                        </span>
                        @else
                        <span  class="bg-red-500 rounded-sm border-2 text-white font-bold px-2 text-xs py-1 flex items-center mx-auto xl:mx-0">
                            <span class="pr-2">
                                <svg  class="w-5 h-5 animate-ping" width="50" height="51" viewBox="0 0 50 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M25.0002 2.58325C12.3439 2.58325 2.0835 12.8437 2.0835 25.4999C2.0835 38.1562 12.3439 48.4166 25.0002 48.4166C37.6564 48.4166 47.9168 38.1562 47.9168 25.4999C47.9168 12.8437 37.6564 2.58325 25.0002 2.58325ZM34.9335 21.6249C35.1164 21.4158 35.2557 21.1723 35.343 20.9086C35.4304 20.6449 35.4642 20.3664 35.4424 20.0895C35.4206 19.8125 35.3436 19.5428 35.2159 19.296C35.0883 19.0493 34.9126 18.8306 34.6992 18.6527C34.4858 18.4749 34.239 18.3415 33.9733 18.2605C33.7076 18.1794 33.4283 18.1523 33.152 18.1808C32.8757 18.2093 32.6078 18.2927 32.3642 18.4262C32.1206 18.5598 31.9062 18.7406 31.7335 18.9583L22.7752 29.7062L18.1397 25.0687C17.7468 24.6892 17.2206 24.4792 16.6743 24.4839C16.1281 24.4887 15.6056 24.7078 15.2193 25.094C14.833 25.4803 14.6139 26.0028 14.6092 26.5491C14.6044 27.0953 14.8144 27.6216 15.1939 28.0145L21.4439 34.2645C21.6486 34.4691 21.8937 34.6288 22.1635 34.7334C22.4334 34.838 22.722 34.8852 23.0111 34.8721C23.3002 34.859 23.5834 34.7857 23.8427 34.6571C24.1019 34.5285 24.3315 34.3472 24.5168 34.1249L34.9335 21.6249Z" fill="#FF8787"/>
                                </svg>
                            </span>
                            Producto No disponible
                        </span>
                        @endif
                    </a>
                    </div>
                </div>
            @endforeach
        </div>
        
        {{-- ver mas Productos --}}
        <div class="flex justify-center mt-4">
            <a href="#" class="text-black border-2 opacity-60 hover:opacity-100  py-2 px-4 rounded-md">
                Ver más productos
            </a>
        </div>

   </section>

   
@endsection

@section('footer')
<footer class="py-3 bg-[#1E1F1D]">
    <div class="block text-center text-xs xl:text-base xl:flex xl:justify-evenly text-white pb-5">
        <div>
            <a class="hover:opacity-70" target="_blank" href="https://rintegrate.com/politica-privacidad/">Politicas de Privacidad</a>
        </div>
        <div>
            <a class="hover:opacity-70" target="_blank" href="https://rintegrate.com/aviso-legal/">Aviso Legal</a>
        </div>
    </div>
    <p class="text-xs xl:text-base text-white text-center">
        Rintegrate -Todos los derechos reservados. 2022
    </p>    
</footer>
@endsection