@extends('layout.template')


@section('title')
    {{$p->name}} 
@endsection

@section('metas')
    <!-- sin metas -->
@endsection

@section('content')
    <!-- banda rintegrate  -->
    <section class="bg-black pt-5 pb-10">
        <img class="w-48 mx-auto xl:mx-10"  src="{{asset('img/logo-white-full.svg')}}" alt="Logo white rintegrate">
    </section>
    <div class="xl:flex bg-[#FF3659] xl:justify-start xl:px-28 xl:h-4/5 ">
        {{-- imgen de producto --}}
        <section class="bg-[#FF3659] h-72 ">
            <div class="bg-white h-72 w-72 xl:w-[26rem]  mx-auto pt-5 -translate-y-10 xl:absolute z-50 md:h-auto xl:h-96 xl:right-20 ">
                <img class="object-cover object-center h-72 w-72   mx-auto xl:hidden transition hover:scale-125 ease-in-out delay-150" src="{{ asset('img/producto01/mobile-linterna.png') }}" alt="">
                <img class="hidden xl:block w-[26rem] relative z-50 transition hover:scale-110 ease-in-out delay-150" src="{{ asset('img/producto01/desktop-linterna.png') }}" alt="">
            </div>
        </section>

        {{-- producto --}}
        <section class="bg-[#FF3659]  py-5 md:py-10 xl:w-1/2">
            <div class="space-y-2 xl:space-y-8">
                <h1 class="text-3xl md:text-5xl xl:text-7xl font-bold text-center xl:text-left text-white uppercase">
                    {{$p->name}}
                </h1>
                <h2 class="text-2xl md:text-3xl xl:text-4xl text-center xl:text-left text-white">
                    {{$p->description}}
                </h2>
                <p class="text-center xl:text-left">
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
                    <span class="text-sm text-white font-thin">
                        Solo para Venezuela
                    </span> 
                </p>
               
                <div class="flex justify-center xl:justify-start space-x-3">
                    <span class="price text-white font-extrabold text-8xl md:text-9xl w-1/2 xl:w-1/3 text-center xl:text-left">
                        {{$p->price}}
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
    <section class="bg-[url('/public/img/producto01/bg-section2.png')]  bg-cover bg-[right_-15rem_top_0rem]  pb-20 xl:h-screen">
        <div class="backdrop-blur-sm bg-black/10 xl:h-screen pt-10 relative">
            <div class="text-center py-10  ">
                <p class="text-[#FF3659] text-medium md:text-xl">Asegurese de estar seguro</p>
                <h2 class="text-white text-2xl md:text-5xl font-bold">Conducción Nocturna<br>
                    por las calles 
                </h2>
            </div>
            <div class="block space-y-5 xl:flex">
                <div class="w-full text-center transition hover:-translate-y-10 ease-in-out ">
                    <img class="w-1/3 mx-auto " src="{{asset('img/producto01/icono-1.png')}}" alt="">
                    <div class="texto px-14 md:w-1/2 xl:w-full md:mx-auto text-center">
                        <p class="text-[#FF3659] font-bold text-xl md:text-3xl xl:text-2xl">Iluminación</p>
                        <p class="text-white text-base md:text-xl xl:text-base">Cuatro modos de iluminacion para diferentes condiciones de carretera</p>
                    </div>
                </div> 
                <div class="w-full text-center transition hover:-translate-y-10 ease-in-out">
                    <img class="w-1/3 mx-auto " src="{{asset('img/producto01/icono-2.png')}}" alt="">
                    <div class="texto px-14 md:w-1/2 xl:w-full md:mx-auto text-center">
                        <p class="text-[#FF3659] font-bold text-xl md:text-3xl xl:text-2xl">Batería</p>
                        <p class="text-white text-base md:text-xl xl:text-base">Batería  de Litio de 1500mAh Incoporada</p>
                    </div>
                </div> 
                <div class="w-full text-center transition hover:-translate-y-10 ease-in-out">
                    <img class="w-1/3 mx-auto " src="{{asset('img/producto01/icono-3.png')}}" alt="">
                    <div class="texto px-14 md:w-1/2 xl:w-full md:mx-auto text-center">
                        <p class="text-[#FF3659] font-bold text-xl md:text-3xl xl:text-2xl">Pantalla</p>
                        <p class="text-white text-base md:text-xl xl:text-base">Pantalla de potencia con altavoz de 120 db</p>
                    </div>
                </div> 
                <div class="w-full text-center transition hover:-translate-y-10 ease-in-out">
                    <img class="w-1/3 mx-auto " src="{{asset('img/producto01/icono-4.png')}}" alt="">
                    <div class="texto px-14 md:w-1/2 xl:w-full md:mx-auto text-center">
                        <p class="text-[#FF3659] font-bold text-xl md:text-3xl xl:text-2xl">Modo de carga</p>
                        <p class="text-white text-base md:text-xl xl:text-base">Intefaz USB para una variedad de formas de carga</p>
                    </div>
                </div> 
            </div>
        </div>
    </section>

    <div class="xl:flex xl:justify-start bg-[#FF3659] py-5">
        {{-- imgen de producto --}}
     <section class="bg-[#FF3659]  h-72 xl:w-1/2 -mt-10 xl:-mt-5">
          <div class="bg-white  h-72 w-72 xl:w-[28rem] mx-auto pt-5 -translate-y-10 transition hover:scale-110 ease-in-out delay-150">
              <img class="md:w-2/3 mx-auto xl:block xl:w-[28rem] xl:h-[28rem] object-cover " src="{{ asset('img/producto01/mobile-linterna-2.png') }}" alt="">
          </div>
      </section>
      <div class="xl:w-1/2">
          <section class="bg-[#FF3659] space-y-2 py-0 xl:flex justify-between  xl:items-center xl:space-x-5">
            <div class="textos xl:w-1/2 space-y-5">
                <h1 class="text-2xl md:text-5xl xl:text-4xl font-bold text-center xl:text-left text-white uppercase">
                    {{$p->name}}
                </h1>
                <h2 class="text-xl md:text-3xl xl:text-2xl text-center xl:text-left text-white">
                   {{$p->description}}
                </h2>
                <p class="text-center xl:text-left">
                    <button disabled class="bg-green-500 rounded-sm border-2 text-white font-bold px-4 py-1 flex items-center mx-auto xl:mx-0">
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
                    <span class="text-sm text-white font-thin">
                        Solo para Venezuela
                    </span> 
                </p>
            </div>
            <div class="flex xl:block justify-center  space-x-3 md:pt-5 xl:pt-0 xl:w-1/3">
                  <span class="price text-white font-extrabold text-9xl w-1/2 text-center xl:text-left">
                        {{$p->price}}
                  </span>
                  <div class="block text-center w-1/2" >
                      <p class="text-white font-bold text-6xl font-serif  w-32">
                          USD
                      </p>
                      <p class="text-white font-light text-5xl font-serif  w-32">Precio</p>
                      <p class="text-white font-bold text-medium border-2 w-32 rounded-md xl:hidden">
                          Envio Incluido
                      </p>
                  </div>
              </div>
          </section>
      
          {{-- formulario --}}
          <section class="bg-[#FF3659] py-10" id="form" >
             <p class="text-white md:text-xl px-4 xl:px-0 md:px-20 text-center md:text-left pb-5">Dejanos tus datos y le contactaremos</p>
             <form class="px-4 space-y-2 md:px-20 xl:px-0 xl:pr-20" method="POST" action="{{route('lead.store')}}">
                @csrf
                  <input class="bg-white w-full py-2 px-3" name="name" type="text" placeholder="Nombre" required>        
                  <input class="bg-white w-full py-2 px-3" name="email" type="email" placeholder="Email" required>        
                  <input class="bg-white w-full py-2 px-3" name="phone" type="tel" placeholder="Teléfono" required>      
                  <input class="text-white w-full bg-black text-center py-2 hover:opacity-80 cursor-pointer font-bold" type="submit" value="Quiero Comprar">  
                  <input type="hidden" name="interest_slug" value="{{$i->slug}}">
                  <input type="hidden" name="product_slug" value="{{$p->slug}}">
             </form>
          </section>
      </div>
    </div>
@endsection

@section('footer')
<footer class="py-3 bg-black">
    <p class="text-base text-white text-center">
        Rintegrate -Todos los derechos reservados. 2022
    </p>    
</footer>
@endsection