@extends('layout.template')


@section('title')
    lp de Producto
@endsection

@section('metas')
    <!-- sin metas -->
@endsection

@section('content')
    <!-- banda rintegrate  -->
    <section class="bg-black pt-5 pb-10 md:pt-10 md:pb-20 md:placeholder-amber-200">
        <img class="w-48 mx-auto xl:mx-10"  src="{{asset('img/logo-white-full.svg')}}" alt="Logo white rintegrate">
    </section>
    <div class="xl:flex bg-[#FF3659] xl:justify-start xl:px-28 xl:h-auto xl:min-h-[80%]">
        {{-- imgen de producto --}}
        <section class="bg-[#FF3659] h-96">
            <div class="bg-white h-72 w-72 xl:w-[24rem]  mx-auto pt-5 -translate-y-10 xl:absolute  md:h-auto xl:h-96 xl:right-20 xl:-mt-20 ">
                <img class="object-cover object-center h-72 w-72   mx-auto xl:hidden transition hover:scale-125 ease-in-out delay-150" src="{{ asset('img/producto01/mobile-linterna.png') }}" alt="">
                <img class="hidden xl:block w-[24rem] relative z-50 transition hover:scale-125 ease-in-out delay-150" src="{{ asset('img/producto01/desktop-linterna.png') }}" alt="">
            </div>
        </section>

        {{-- producto --}}
        <section class="bg-[#FF3659]  py-5 md:py-5 h-auto">
            <div class="space-y-2 xl:space-y-4">
                <img  class="h-20 mx-auto" src="{{asset('img/logo-white.svg')}}" alt="">
                <h1 class="text-3xl md:text-5xl xl:text-5xl font-bold text-center  text-white">
                    MUCHAS GRACIAS
                </h1>
                <h2 class="text-2xl md:text-3xl xl:text-2xl text-center  text-white">
                    Para contactarnos puedes hacer <br>clic en el siguiente botón.
                </h2>
                <div class="text-center animate-bounce hover:animate-none ">
                    <a  href="https://wa.me/584129045146" class="bg-white font-bold text-center rounded-full px-5 py-2 mx-auto text-[#FF3659] hover:opacity-90">
                        Ir al Whatsapp
                    </a>
                </div>
                <p class="text-base md:text-xl xl:text-xl text-center  text-white">
                    O esperar a ser contactado por <br>uno de nuestros vendores.     
                </p>  
                <div class="text-center pt-3">
                    <p class="text-base font-bold text-white">Redes sociales</p>
                    <p class="text-base text-white">Conoce más de nosotros</p>

                    <div class="flex items-center justify-center pt-2 space-x-5">
                        <div class="transition ease-in-out hover:opacity-80">
                            <a class=""  href="https://www.facebook.com/rintegrate" target="_blank">
                                <img class="" src="{{asset('img/rrss/fb.svg')}}" alt="">
                            </a>
                        </div>
                        <div class="transition ease-in-out hover:opacity-80">
                            <a class="" href="https://www.instagram.com/rintegrate_/" target="_blank">
                                <img src="{{asset('img/rrss/ig.svg')}}" alt="">
                            </a>
                        </div>
                    </div>

                </div>
                

            </div>
        </section>
    </div>

@endsection

@section('footer')
<footer class="py-3 bg-black">
    <p class="text-base text-white text-center">
        Rintegrate -Todos los derechos reservados. 2022
    </p>    
</footer>
@endsection