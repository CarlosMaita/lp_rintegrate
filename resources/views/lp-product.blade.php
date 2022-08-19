@extends('layouts.template')


@section('title'){{$p->name}}@endsection

@section('metas')
   <!-- Primary Meta Tags -->
    <meta name="title" content="{{$p->name}}">
    <meta name="description" content="{{$p->description}}. Encuentra 🕵️ productos Increíbles 😎. Las mejores 🏷️promociones 🏷️. Envio Incluido en todas las compras 📦🛍️ Nuevo Centro de Compras Digital. ">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="og:product">
    <meta property="og:url" content="https://rintegrate.com/{{$p->interest->slug}}/{{$p->slug}}">
    <meta property="og:title" content="{{ucfirst($p->name)}}">
    <meta property="og:description" content="{{$p->description}}. Encuentra 🕵️ productos Increíbles 😎. Las mejores 🏷️promociones 🏷️. Envio Incluido en todas las compras 📦🛍️ Nuevo Centro de Compras Digital. ">
    <meta property="og:image" content="{{Storage::url($p->image_main)}}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://rintegrate.com/{{$p->interest->slug}}/{{$p->slug}}">
    <meta property="twitter:title" content="{{$p->name}}">
    <meta property="twitter:description" content="{{$p->description}}. Encuentra 🕵️ productos Increíbles 😎. Las mejores 🏷️promociones 🏷️. Envio Incluido en todas las compras 📦🛍️ Nuevo Centro de Compras Digital. ">
    <meta property="twitter:image" content="{{Storage::url($p->image_main)}}">

    {{-- metas de producto --}}
    <meta property="product:price:amount" content="{{$p->price}}">
    <meta property="product:price:currency" content="USD">
    <meta property="product:condition" content="new">
    <meta property="product:availability" content="in stock">
    <meta property="product:retailer_item_id" content="{{$p->slug}}_000{{$p->id}}">
    <meta property="product:item_group_id" content="fb_tshirts">

@endsection
@php
$color = $p->color_main;
@endphp
@section('content')
    <style>
        .bg-main-color{
            background-color: {{$color}};
        }
        .text-main-color{
            color: {{$color}};
        }
        .bg-imagen-background{
            background-image: url('{{ Storage::url($p->image_background)  }}');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }
    </style>
    <!-- banda rintegrate  -->
    <section class="bg-black pt-5 pb-16">
        <a href="{{route('home')}}">
            <img class="w-48 mx-auto xl:mx-10"  src="{{asset('img/logo-white-full.svg')}}" alt="Logo white rintegrate">
        </a>
    </section>
    <div class="xl:flex bg-main-color xl:justify-start xl:px-28 xl:h-4/5 ">
        {{-- imgen de producto --}}
        <section class="bg-main-color h-72 ">
            <div class="bg-white h-72 w-72 xl:w-[28rem] xl:h-[28rem] mx-auto pt-5 -translate-y-10 xl:absolute z-50 md:h-auto xl:h-96 xl:right-20 transition hover:scale-125 ease-in-out delay-150 ">
                <img class="object-cover object-center h-72 w-72  xl:w-full xl:h-full  mx-auto   xl:block xl:relative xl:z-50  " src="{{Storage::url($p->image_main)}}" alt="Imagen principal">
            </div>
        </section>

        {{-- producto --}}
        <section class="bg-main-color  py-5 md:py-10 xl:w-1/2">
            <div class="space-y-2 xl:space-y-8">
                <h1 class="text-3xl md:text-5xl xl:text-7xl font-bold text-center xl:text-left text-white uppercase">
                    {{$p->name}}
                </h1>
                <h2 class="text-2xl md:text-3xl xl:text-4xl text-center xl:text-left text-white">
                    {{$p->description}}
                </h2>
                <p class="text-center xl:text-left">
                
                @if($p->status == "disponible")
                <button onclick="document.getElementById('form').scrollIntoView({behavior: 'smooth' });"  class="bg-green-500 rounded-sm border-2 text-white font-bold px-4 py-1 flex items-center mx-auto xl:mx-0">
                    <span class="pr-2">
                        <svg class="w-5 h-5 animate-ping" width="51" height="51" viewBox="0 0 51 51" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M25.4743 2.18726C12.818 2.18726 2.55762 12.4477 2.55762 25.1039C2.55762 37.7602 12.818 48.0206 25.4743 48.0206C38.1305 48.0206 48.3909 37.7602 48.3909 25.1039C48.3909 12.4477 38.1305 2.18726 25.4743 2.18726ZM35.4076 21.2289C35.5905 21.0198 35.7298 20.7763 35.8172 20.5126C35.9046 20.2489 35.9383 19.9704 35.9165 19.6935C35.8947 19.4165 35.8177 19.1468 35.6901 18.9C35.5624 18.6533 35.3867 18.4346 35.1733 18.2567C34.9599 18.0789 34.7131 17.9455 34.4474 17.8645C34.1817 17.7834 33.9025 17.7563 33.6261 17.7848C33.3498 17.8133 33.0819 17.8967 32.8383 18.0302C32.5947 18.1638 32.3803 18.3446 32.2076 18.5623L23.2493 29.3102L18.6139 24.6727C18.2209 24.2932 17.6947 24.0832 17.1484 24.0879C16.6022 24.0927 16.0797 24.3118 15.6934 24.698C15.3071 25.0843 15.088 25.6068 15.0833 26.1531C15.0785 26.6993 15.2885 27.2256 15.668 27.6185L21.918 33.8685C22.1227 34.0731 22.3678 34.2328 22.6376 34.3374C22.9075 34.442 23.1962 34.4892 23.4853 34.4761C23.7744 34.463 24.0576 34.3898 24.3168 34.2611C24.576 34.1325 24.8056 33.9512 24.9909 33.7289L35.4076 21.2289Z"
                                fill="#51FF8C" />
                        </svg>
                    </span>
                    Producto disponible
                </button>
                @else
                <button onclick="document.getElementById('form').scrollIntoView({behavior: 'smooth' });"  class="bg-red-500 rounded-sm border-2 text-white font-bold px-4 py-1 flex items-center mx-auto xl:mx-0">
                    <span class="pr-2">
                        <svg  class="w-5 h-5 animate-ping" width="50" height="51" viewBox="0 0 50 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                             <path fill-rule="evenodd" clip-rule="evenodd" d="M25.0002 2.58325C12.3439 2.58325 2.0835 12.8437 2.0835 25.4999C2.0835 38.1562 12.3439 48.4166 25.0002 48.4166C37.6564 48.4166 47.9168 38.1562 47.9168 25.4999C47.9168 12.8437 37.6564 2.58325 25.0002 2.58325ZM34.9335 21.6249C35.1164 21.4158 35.2557 21.1723 35.343 20.9086C35.4304 20.6449 35.4642 20.3664 35.4424 20.0895C35.4206 19.8125 35.3436 19.5428 35.2159 19.296C35.0883 19.0493 34.9126 18.8306 34.6992 18.6527C34.4858 18.4749 34.239 18.3415 33.9733 18.2605C33.7076 18.1794 33.4283 18.1523 33.152 18.1808C32.8757 18.2093 32.6078 18.2927 32.3642 18.4262C32.1206 18.5598 31.9062 18.7406 31.7335 18.9583L22.7752 29.7062L18.1397 25.0687C17.7468 24.6892 17.2206 24.4792 16.6743 24.4839C16.1281 24.4887 15.6056 24.7078 15.2193 25.094C14.833 25.4803 14.6139 26.0028 14.6092 26.5491C14.6044 27.0953 14.8144 27.6216 15.1939 28.0145L21.4439 34.2645C21.6486 34.4691 21.8937 34.6288 22.1635 34.7334C22.4334 34.838 22.722 34.8852 23.0111 34.8721C23.3002 34.859 23.5834 34.7857 23.8427 34.6571C24.1019 34.5285 24.3315 34.3472 24.5168 34.1249L34.9335 21.6249Z" fill="#FF8787"/>
                        </svg>
                    </span>
                    Producto No disponible
                </button>
                @endif

                    <span class="text-sm text-white font-thin">
                        Solo para Venezuela.
                    </span> 
                    <span class="text-xs text-white font-thin underline">
                        Bolivares a Tasa de BCV 
                    </span> 
                </p>
               
                <div class="flex justify-center xl:justify-start space-x-3 items-center">
                    <span class="price text-white font-extrabold  @if($p->price > 999) text-5xl md:text-7xl @else text-8xl md:text-9xl @endif w-1/2 xl:w-1/3 text-center xl:text-left">
                        {{$p->priceWithoutDecimals();}}
                    </span>
                    <div class="block text-center w-1/2 "  >
                        <p class="text-white font-bold text-6xl font-serif  w-32">
                            USD
                        </p>
                        <p class="text-white font-light text-5xl font-serif  w-32">Precio</p>
                        <p class="text-white font-bold text-medium border-2 w-32 rounded-md">
                            Envio Incluido
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{-- beneficios --}}
    <section class=" bg-cover bg-imagen-background bg-[right_-15rem_top_0rem]  xl:pb-20 xl:h-screen"
        >
        <div class="backdrop-blur-sm bg-black/10 h-screen xl:h-screen pt-10 pb-20 relative">
                <div class="text-center py-10  ">
                    <p class="text-main-color text-medium font-semibold md:text-xl">{{$p->subtitle_features}}</p>
                    <h2 class="text-white text-2xl md:text-5xl font-bold">{{$p->title_features}}
                    </h2>
                </div>
            <div class="block space-y-5 xl:flex">
                @foreach(json_decode($p->features) as $feature)
                    <div class="w-full text-center transition hover:-translate-y-10 ease-in-out ">
                        <img class="w-28 xl:w-44 mx-auto " src="{{asset('img/producto01/icon.svg')}}" alt="">
                        <div class="texto px-14 md:w-1/2 xl:w-full md:mx-auto text-center">
                            <p class="text-main-color font-bold text-xl md:text-3xl xl:text-2xl">{{$feature->title}}</p>
                            <p class="text-white text-base md:text-xl xl:text-base">{{$feature->subtitle}}</p>
                        </div>
                    </div> 
                @endforeach
                 
            </div>
        </div>
    </section>

    <div class="xl:flex xl:justify-start bg-main-color py-5 ">
        {{-- imgen de producto --}}
     <section class="bg-main-color  h-72 xl:w-1/2 -mt-10 xl:-mt-5">
          <div class="bg-white  h-72 w-72 xl:w-[28rem] mx-auto pt-5 -translate-y-10 transition hover:scale-110 ease-in-out delay-150">
              <img class="md:w-2/3 mx-auto xl:block xl:w-[28rem] xl:h-[28rem] object-cover " src="{{ Storage::url($p->image_second) }}" alt="">
          </div>
      </section>
      <div class="xl:w-1/2">
          <section class="bg-main-color space-y-2 py-0 xl:flex justify-between  xl:items-center xl:space-x-5">
            <div class="textos xl:w-1/2 space-y-5">
                <h1 class="text-2xl md:text-5xl xl:text-4xl font-bold text-center xl:text-left text-white uppercase">
                    {{$p->name}}
                </h1>
                <h2 class="text-xl md:text-3xl xl:text-2xl text-center xl:text-left text-white">
                   {{$p->description}}
                </h2>
                <p class="text-center xl:text-left">
                    @if($p->status == "disponible")
                    <button disabled onclick="document.getElementById('form').scrollIntoView({behavior: 'smooth' });"  class="bg-green-500 rounded-sm border-2 text-white font-bold px-4 py-1 flex items-center mx-auto xl:mx-0">
                        <span class="pr-2">
                            <svg class="w-5 h-5 animate-ping" width="51" height="51" viewBox="0 0 51 51" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M25.4743 2.18726C12.818 2.18726 2.55762 12.4477 2.55762 25.1039C2.55762 37.7602 12.818 48.0206 25.4743 48.0206C38.1305 48.0206 48.3909 37.7602 48.3909 25.1039C48.3909 12.4477 38.1305 2.18726 25.4743 2.18726ZM35.4076 21.2289C35.5905 21.0198 35.7298 20.7763 35.8172 20.5126C35.9046 20.2489 35.9383 19.9704 35.9165 19.6935C35.8947 19.4165 35.8177 19.1468 35.6901 18.9C35.5624 18.6533 35.3867 18.4346 35.1733 18.2567C34.9599 18.0789 34.7131 17.9455 34.4474 17.8645C34.1817 17.7834 33.9025 17.7563 33.6261 17.7848C33.3498 17.8133 33.0819 17.8967 32.8383 18.0302C32.5947 18.1638 32.3803 18.3446 32.2076 18.5623L23.2493 29.3102L18.6139 24.6727C18.2209 24.2932 17.6947 24.0832 17.1484 24.0879C16.6022 24.0927 16.0797 24.3118 15.6934 24.698C15.3071 25.0843 15.088 25.6068 15.0833 26.1531C15.0785 26.6993 15.2885 27.2256 15.668 27.6185L21.918 33.8685C22.1227 34.0731 22.3678 34.2328 22.6376 34.3374C22.9075 34.442 23.1962 34.4892 23.4853 34.4761C23.7744 34.463 24.0576 34.3898 24.3168 34.2611C24.576 34.1325 24.8056 33.9512 24.9909 33.7289L35.4076 21.2289Z"
                                    fill="#51FF8C" />
                            </svg>
                        </span>
                        Producto disponible
                    </button>
                    @else
                    <button disabled onclick="document.getElementById('form').scrollIntoView({behavior: 'smooth' });"  class="bg-red-500 rounded-sm border-2 text-white font-bold px-4 py-1 flex items-center mx-auto xl:mx-0">
                        <span class="pr-2">
                            <svg  class="w-5 h-5 animate-ping" width="50" height="51" viewBox="0 0 50 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M25.0002 2.58325C12.3439 2.58325 2.0835 12.8437 2.0835 25.4999C2.0835 38.1562 12.3439 48.4166 25.0002 48.4166C37.6564 48.4166 47.9168 38.1562 47.9168 25.4999C47.9168 12.8437 37.6564 2.58325 25.0002 2.58325ZM34.9335 21.6249C35.1164 21.4158 35.2557 21.1723 35.343 20.9086C35.4304 20.6449 35.4642 20.3664 35.4424 20.0895C35.4206 19.8125 35.3436 19.5428 35.2159 19.296C35.0883 19.0493 34.9126 18.8306 34.6992 18.6527C34.4858 18.4749 34.239 18.3415 33.9733 18.2605C33.7076 18.1794 33.4283 18.1523 33.152 18.1808C32.8757 18.2093 32.6078 18.2927 32.3642 18.4262C32.1206 18.5598 31.9062 18.7406 31.7335 18.9583L22.7752 29.7062L18.1397 25.0687C17.7468 24.6892 17.2206 24.4792 16.6743 24.4839C16.1281 24.4887 15.6056 24.7078 15.2193 25.094C14.833 25.4803 14.6139 26.0028 14.6092 26.5491C14.6044 27.0953 14.8144 27.6216 15.1939 28.0145L21.4439 34.2645C21.6486 34.4691 21.8937 34.6288 22.1635 34.7334C22.4334 34.838 22.722 34.8852 23.0111 34.8721C23.3002 34.859 23.5834 34.7857 23.8427 34.6571C24.1019 34.5285 24.3315 34.3472 24.5168 34.1249L34.9335 21.6249Z" fill="#FF8787"/>
                            </svg>
                        </span>
                        Producto No disponible
                    </button>
                    @endif
                    <span class="text-sm text-white font-thin">
                        Solo para Venezuela
                    </span> 
                </p>
            </div>
            <div class="flex xl:block justify-center  space-x-3 md:pt-5 xl:pt-0 xl:w-1/3 items-center">
                  <span class="price text-white font-extrabold  @if($p->price > 999) text-5xl md:text-7xl @else text-8xl md:text-9xl @endif  w-1/2 text-center xl:text-left">
                    {{$p->priceWithoutDecimals();}}
                  </span>
                  <div class="block text-center w-1/2" >
                      <p class="text-white font-bold text-6xl font-serif  w-32">
                          USD
                      </p>
                      <p class="text-white font-light text-5xl font-serif  w-32">Precio</p>
                      <p class="text-white font-bold text-medium border-2 w-32 rounded-md xl:hidden">
                          Envio Incluido
                      </p>
                      <p class="text-xs text-white font-thin w-32">
                            Bolivares a Tasa de BCV
                      </p>
                  </div>
                </div>
          </section>
      
          {{-- formulario --}}
          <section class="bg-main-color py-10" id="form" >
             <p class="text-white md:text-xl px-4 xl:px-0 md:px-20 text-left md:text-left pb-5"><b>Compartenos</b> tus datos para comprar o solicitar información</p>
             <form class="px-4 space-y-2 md:px-20 xl:px-0 xl:pr-20" method="POST" action="{{route('lead.store')}}">
                @csrf
                  <input class="bg-white w-full py-2 px-3" name="name" type="text" placeholder="Nombre" required>        
                  <input class="bg-white w-full py-2 px-3" name="email" type="email" placeholder="Email" required>        
                  <input class="bg-white w-full py-2 px-3" name="phone" type="tel" placeholder="Teléfono" required>      
                  <input class="text-white w-full bg-black text-center py-2 hover:opacity-80 cursor-pointer font-bold" type="submit" value="Quiero Comprar"> 
                  <input class="text-white w-full bg-transparent border-white border xl:border-none text-center py-2 hover:underline cursor-pointer font-bold" type="submit" value="Más información"> 
                  <input type="hidden" name="interest_slug" value="{{$i->slug}}">
                  <input type="hidden" name="product_slug" value="{{$p->slug}}">
             </form>
          </section>
      </div>
    </div>
    <script>

    </script>
@endsection

@section('footer')

<footer class="py-3 bg-[#1E1F1D]">
    <div class="flex justify-evenly text-white pb-5">
    <a class="hover:opacity-70" target="_blank" href="https://rintegrate.com/politica-privacidad/">Politicas de Privacidad</a>
    <a class="hover:opacity-70" target="_blank" href="https://rintegrate.com/aviso-legal/">Aviso Legal</a>
    </div>
    <p class="text-base text-white text-center">
        Rintegrate -Todos los derechos reservados. 2022
    </p>    
</footer>
@endsection