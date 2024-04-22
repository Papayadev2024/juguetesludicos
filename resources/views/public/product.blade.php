@extends('components.public.matrix')

@section('css_importados')

@stop


@section('content')
  <?php
  // Definición de la función capitalizeFirstLetter()
  function capitalizeFirstLetter($string)
  {
      return ucfirst($string);
  }
  ?>

  <main class="my-10 font-poppins">
    <section class="w-11/12 mx-auto flex flex-col md:flex-row gap-10">
      <div class="basis-1/2">
        <!-- grilla de productos -->
        <div class="hidden md:block">
          <div class="grid grid-cols-2 gap-10">
            <div class="flex flex-col items-start bg-[#F3F5F7] gap-12 rounded-2xl">
              <div class="bg-[#38CB89] rounded-md px-5 py-1 mt-10 ml-10">
                <p class="text-white font-semibold text-[12px]">-30%</p>
              </div>

              <div class="flex justify-center w-full">
                <img src="{{ asset($productos[0]->imagen) }}" alt="piso_flotante_laminado_1" />
              </div>
            </div>
            @foreach ($productosConGalerias as $galeria)
              <div class="flex justify-center items-center">
                <img src="{{ asset($galeria->imagen) }}" alt="piso_flotante_laminado_2" />
              </div>
            @endforeach


          </div>
        </div>

        <!-- carrusel de productos -->
        <div class="block md:hidden">
          <div class="swiper producto-slider">
            <div class="swiper-wrapper swiper-wrapper-height">
              <div class="swiper-slide swiper-slide-flex rounded-2xl">
                <div class="flex flex-col items-start bg-[#F3F5F7] gap-12 relative">
                  <div class="bg-[#38CB89] rounded-md px-5 py-1 mt-10 ml-10 absolute">
                    <p class="text-white font-semibold text-[12px]">-30%</p>
                  </div>

                  <div class="flex justify-center w-full">
                    <img src="./images/img/piso_flotante_laminado_2.png" alt="piso_flotante_laminado_1" />
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="flex justify-center items-center">
                  <img src="./images/img/piso_flotante_laminado_2.png" alt="piso_flotante_laminado_2" />
                </div>
              </div>

              <div class="swiper-slide">
                <div class="flex justify-center items-center">
                  <img src="./images/img/piso_flotante_laminado_3.png" alt="piso_flotante_laminado_3" />
                </div>
              </div>

              <div class="swiper-slide">
                <div class="flex justify-center items-center">
                  <img src="./images/img/piso_flotante_laminado_4.png" alt="piso_flotante_laminado_4" />
                </div>
              </div>

              <div class="swiper-slide">
                <div class="flex justify-center items-center">
                  <img src="./images/img/piso_flotante_laminado_5.png" alt="piso_flotante_laminado_5" />
                </div>
              </div>

              <div class="swiper-slide">
                <div class="flex justify-center items-center">
                  <img src="./images/img/piso_flotante_laminado_6.png" alt="piso_flotante_laminado_6" />
                </div>
              </div>
            </div>
            <div class="swiper-pagination-productos mt-10"></div>
          </div>
        </div>
      </div>
      <div class="basis-1/2 font-poppins flex flex-col gap-5">
        <div class="border-b-[1px] border-gray-300 flex flex-col gap-5">
          <h2 class="font-medium text-[40px] leading-none md:leading-tight">
            {{ $productos[0]->producto }}
          </h2>
          <p class="font-normal text-[16px]">
            {{ $productos[0]->extract }}
          </p>
          @if ($productos[0]->descuento > 0)
            {{-- validamos si tiene descuento  --}}
            <p class="font-medium text-[28px] mb-5">
              s/ {{ $productos[0]->descuento }}
              <span class="line-through font-medium text-[20px] text-[#6C7275]">{{ $productos[0]->precio }}</span>
            </p>
          @else
            <p class="font-medium text-[28px] mb-5">
              s/ {{ $productos[0]->precio }}

            </p>
          @endif

        </div>
        <div class="border-b-[1px] border-gray-300 flex flex-col gap-5">
          <div class="flex flex-col gap-5">
            @foreach ($especificaciones as $item)
              <p class="font-semibold text-[16px] text-[#6C7275]">{{ capitalizeFirstLetter($item->tittle) }}</p>
              <p class="font-normal text-[20px]">{{ capitalizeFirstLetter($item->specifications) }}</p>
            @endforeach

            <div class="flex">
              <div class="w-14 h-14 flex justify-center items-center bg-[#F5F5F5] cursor-pointer">
                <button id=disminuir type="button"><span class="text-[30px]">-</span></button>
              </div>
              <div id=cantidadSpan class="w-14 h-14 flex justify-center items-center bg-[#F5F5F5]">
                <span class="text-[20px]">2</span>
              </div>
              <div class="w-14 h-14 flex justify-center items-center bg-[#F5F5F5] cursor-pointer">
                <button id=aumentar type="button"><span class="text-[30px]">+</span></button>
              </div>
            </div>
          </div>

          <div class="flex flex-col gap-5 mt-3">
            {{-- <p class="font-semibold text-[16px] text-[#6C7275]">
              Elige color >
            </p> --}}

            <div class="md:col-span-5">
              <p class="font-semibold text-[16px] text-[#6C7275]">Atributos</p>
              <div class="flex gap-2 mt-2 relative mb-2 ">
                @foreach ($atributos as $item)
                  <div href="#"
                    class="w-[300px] !important block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">


                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                      {{ $item->titulo }}
                    </h5>
                    {{-- <p class="font-normal text-gray-700 dark:text-gray-400">{{ $item->descripcion }}</p> --}}
                    @foreach ($valorAtributo as $value)
                      @if ($value->attribute_id == $item->id)
                        @php
                          $atributesArray = json_decode($productos[0]->atributes, true);
                          $titulo = strtolower($item->titulo);
                          $valor = strtolower($value->valor);
                        @endphp
                        <div class="flex items-center mb-2">
                          <input type="checkbox" id="{{ $titulo }}:{{ $valor }}"
                            name="{{ $titulo }}:{{ $valor }}"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 "
                            @if (is_array($atributesArray) &&
                                    isset($atributesArray[$titulo]) &&
                                    in_array(strtolower($valor), $atributesArray[$titulo])) checked @endif disabled>
                          <label for="{{ $titulo }}:{{ $valor }}"
                            class="ml-2">{{ $valor }}</label>
                        </div>
                      @endif
                    @endforeach


                  </div>
                @endforeach
              </div>
            </div>
            {{-- <p class="font-normal text-[20px] text-black">Madera</p>

             <div class="grid grid-cols-4 md:grid-cols-6">
              <div class="circle-container">
                <div class="circle bg-[#F9CCA7]"></div>
              </div>

              <div class="circle-container">
                <div class="circle bg-[#EEA752]"></div>
              </div>

              <div class="circle-container">
                <div class="circle bg-[#9C6E43]"></div>
              </div>

              <div class="circle-container">
                <div class="circle bg-[#9A5E37]"></div>
              </div>

              <div class="circle-container">
                <div class="circle bg-[#71452F]"></div>
              </div>

              <div class="circle-container">
                <div class="circle bg-[#D0834F]"></div>
              </div>

              <div class="circle-container">
                <div class="circle bg-[#A47A5A]"></div>
              </div>

              <div class="circle-container">
                <div class="circle bg-[#866A59]"></div>
              </div>

              <div class="circle-container">
                <div class="circle bg-[#8B7665]"></div>
              </div>

              <div class="circle-container">
                <div class="circle bg-[#795B4B]"></div>
              </div>
            </div> --}}
          </div>
        </div>
        <div class="my-5 flex flex-col gap-5 border-b-[1px] border-gray-300 pb-5">
          <div class="py-2 w-full">
            <a href="#"
              class="text-white bg-[#74A68D] w-full py-4 rounded-3xl cursor-pointer font-semibold text-[16px] inline-block text-center">Agregar
              al carrito</a>
          </div>

          <div class="py-2 w-full">
            <a href="#"
              class="text-[#74A68D] bg-white w-full py-4 rounded-3xl cursor-pointer border-[1px] border-black font-semibold text-[16px] inline-block text-center">Comprar</a>
          </div>
        </div>
        <div class="flex flex-col">
          <div class="flex">
            <p class="font-normal text-[12px] text-[#6C7275] flex-initial w-44">
              Sku
            </p>
            <p class="font-normal text-[12px] text-[#141718]">MD232344009</p>
          </div>

          <div class="flex">
            <p class="font-normal text-[12px] text-[#6C7275] flex-initial w-44">
              Categoría
            </p>
            <p class="font-normal text-[12px] text-[#141718]">
              Preasenet et libero
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="font-poppins flex w-11/12 mx-auto my-10">
      <div class="md:basis-1/2">
        <h2 class="font-medium text-[28px] my-5 leading-none md:leading-tight">
          Información adicional
        </h2>
        <div class="flex flex-col gap-5">
          {!! $productos[0]->description !!}
        </div>
      </div>
    </section>

    <section class="font-poppins">
      <div class="grid grid-cols-1 gap-12 md:gap-0 md:grid-cols-4 grid-rows-1 pt-12 w-11/12 mx-auto">
        <div class="col-span-1 md:col-span-3 order-1 md:order-1 flex flex-col gap-2">
          <h2 class="font-medium text-[36px] md:text-[40px] mt-2 leading-none md:leading-tight">
            Productos complementarios
          </h2>

          <p class="font-normal text-lg basis-3/6">
            Etiam cursus semper odio non consectetur. Pellentesque et molestie
            risus. Aliquam eu nibh pulvinar, sollicitudin sapien vel, aliquam
            orci.
          </p>
        </div>

        <div class="col-span-1 md:col-span-1 order-3 md:order-2 flex justify-center items-center w-full">
          <a href="catalogo.html"
            class="font-semibold text-[16px] bg-transparent md:duration-500 py-4 px-5 rounded-3xl border-[1px] border-colorBorder flex-initial w-full md:w-56 text-center inline-block">
            Ver todo
          </a>
        </div>

        <div class="col-span-1 md:col-span-4 order-2 md:order-3">
          <!-- ---- CARRUSEL --- -->
          <div class="hidden md:block">
            <div class="swiper productos-complementarios my-5">
              <div class="swiper-pagination-producto-complementario mb-80 md:mb-32"></div>
              <div class="swiper-wrapper mt-[80px]">
                @foreach ($ProdComplementarios as $item)
                  <div class="swiper-slide rounded-2xl">
                    <div class="flex flex-col relative">
                      <div
                        class="bg-colorBackgroundProducts rounded-2xl py-12 md:pb-8 px-5 product_container basis-4/5 flex flex-col justify-center relative">
                        <a
                          class="font-semibold text-[12px] bg-[#38CB89] py-2 px-2 flex-initial w-24 text-center text-[#151515] rounded-[5px] absolute top-[18px] z-10">
                          Nuevo1
                        </a>
                        <div class="z-0 h-48">
                          <div class="relative">
                            @if ($item->imagen)
                              <img src="{{ asset($item->imagen) }}" alt="producto_complementario_1" class="w-full" />
                            @else
                              <div class='h-32'>
                                <img src="{{ asset('storage/images/imagen/no_img.jpg') }}" alt="imagen_alternativa"
                                  class="h-30 object-contain" />
                              </div>
                            @endif
                          </div>

                          <!-- ------ -->
                          <div class="addProduct text-center flex justify-center">
                            <a href="#addProducto"
                              class="font-semibold text-[16px] bg-[#74A68D] py-3 px-5 flex-initial w-52 text-center text-white rounded-3xl">
                              Agregar al carrito
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="my-2 flex flex-col items-start gap-2 basis-1/5">
                        <div class="flex items-center gap-2">
                          {{-- <div class="flex gap-2 py-2">
                            <img src="./images/svg/start.svg" alt="estrella" />
                            <img src="./images/svg/start.svg" alt="estrella" />
                            <img src="./images/svg/start.svg" alt="estrella" />
                            <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                            <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                          </div> --}}
                          <p class="font-semibold text-[14px] text-[#6C7275]">
                            ({{ $item->stock }})
                          </p>
                        </div>
                        <h2 class="font-semibold text-[16px] text-[#141718]">
                          {{ $item->producto }}
                        </h2>
                        @if ($item->descuento > 0)
                          {{-- validamos si tiene descuento  --}}
                          <p class="font-medium text-[28px] mb-5">
                            s/ {{ $item->descuento }}
                            <span class="line-through font-medium text-[20px] text-[#6C7275]">{{ $item->precio }}</span>
                          </p>
                        @else
                          <p class="font-medium text-[28px] mb-5">
                            s/ {{ $item->precio }}

                          </p>
                        @endif
                      </div>
                    </div>
                  </div>
                @endforeach



              </div>

              <!-- <div class="swiper-pagination"></div> -->
            </div>
          </div>

          <!-- GRILLA DE PRODUCTOS -->
          <div class="grid grid-cols-2 md:hidden gap-5">
            <div class="flex flex-col relative">
              <div
                class="bg-colorBackgroundProducts rounded-2xl pt-12 pb-5 md:pb-8 product_container basis-4/5 flex flex-col justify-center relative">
                <div class="px-4">
                  <a
                    class="font-semibold text-[8px] md:text-[12px] bg-[#38CB89] py-2 px-2 flex-initial w-24 text-center text-white rounded-[5px] absolute top-[18px] z-10">
                    Nuevo
                  </a>
                </div>
                <div>
                  <div class="relative flex justify-center items-center">
                    <img src="./images/img/Ima01.png" class="" />
                  </div>

                  <!-- ------ -->
                  <div class="addProduct text-center flex justify-center">
                    <a href="#addProducto"
                      class="font-semibold text-[9px] md:text-[16px] bg-[#74A68D] py-3 px-5 flex-initial w-32 md:w-56 text-center text-white rounded-3xl">
                      Agregar al carrito
                    </a>
                  </div>
                </div>
              </div>
              <div class="my-2 flex flex-col items-start gap-2 basis-1/5">
                <div class="flex items-center gap-2">
                  <div class="flex md:gap-2 py-2">
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                    <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                  </div>
                  <p class="font-semibold text-[14px] text-[#6C7275]">(35)</p>
                </div>
                <h2 class="font-semibold text-[12px] md:text-[16px] text-[#141718]">
                  Fusce sagittis eleifend sem eget dictum
                </h2>
                <p class="font-semibold text-[8px] md:text-[14px] text-[#121212] flex gap-5">
                  <span>$595.00</span>

                  <span class="font-normal text-[8px] md:text-[14px] text-[#6C7275] line-through">$1000.00</span>
                </p>
              </div>
            </div>

            <div class="flex flex-col relative">
              <div
                class="bg-colorBackgroundProducts rounded-2xl pt-12 pb-5 md:pb-8 product_container basis-4/5 flex flex-col justify-center relative">
                <div class="px-4">
                  <a
                    class="font-semibold text-[8px] md:text-[12px] bg-[#38CB89] py-2 px-2 flex-initial w-24 text-center text-white rounded-[5px] absolute top-[18px] z-10">
                    Nuevo
                  </a>
                </div>
                <div>
                  <div class="relative flex justify-center items-center">
                    <img src="./images/img/Ima01.png" class="" />
                  </div>

                  <!-- ------ -->
                  <div class="addProduct text-center flex justify-center">
                    <a href="#addProducto"
                      class="font-semibold text-[9px] md:text-[16px] bg-[#74A68D] py-3 px-5 flex-initial w-32 md:w-56 text-center text-white rounded-3xl">
                      Agregar al carrito
                    </a>
                  </div>
                </div>
              </div>
              <div class="my-2 flex flex-col items-start gap-2 basis-1/5">
                <div class="flex items-center gap-2">
                  <div class="flex md:gap-2 py-2">
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                    <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                  </div>
                  <p class="font-semibold text-[14px] text-[#6C7275]">(35)</p>
                </div>
                <h2 class="font-semibold text-[12px] md:text-[16px] text-[#141718]">
                  Fusce sagittis eleifend sem eget dictum
                </h2>
                <p class="font-semibold text-[8px] md:text-[14px] text-[#121212] flex gap-5">
                  <span>$595.00</span>

                  <span class="font-normal text-[8px] md:text-[14px] text-[#6C7275] line-through">$1000.00</span>
                </p>
              </div>
            </div>

            <div class="flex flex-col relative">
              <div
                class="bg-colorBackgroundProducts rounded-2xl pt-12 pb-5 md:pb-8 product_container basis-4/5 flex flex-col justify-center relative">
                <div class="px-4">
                  <a
                    class="font-semibold text-[8px] md:text-[12px] bg-[#38CB89] py-2 px-2 flex-initial w-24 text-center text-white rounded-[5px] absolute top-[18px] z-10">
                    Nuevo
                  </a>
                </div>
                <div>
                  <div class="relative flex justify-center items-center">
                    <img src="./images/img/Ima01.png" class="" />
                  </div>

                  <!-- ------ -->
                  <div class="addProduct text-center flex justify-center">
                    <a href="#addProducto"
                      class="font-semibold text-[9px] md:text-[16px] bg-[#74A68D] py-3 px-5 flex-initial w-32 md:w-56 text-center text-white rounded-3xl">
                      Agregar al carrito
                    </a>
                  </div>
                </div>
              </div>
              <div class="my-2 flex flex-col items-start gap-2 basis-1/5">
                <div class="flex items-center gap-2">
                  <div class="flex md:gap-2 py-2">
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                    <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                  </div>
                  <p class="font-semibold text-[14px] text-[#6C7275]">(35)</p>
                </div>
                <h2 class="font-semibold text-[12px] md:text-[16px] text-[#141718]">
                  Fusce sagittis eleifend sem eget dictum
                </h2>
                <p class="font-semibold text-[8px] md:text-[14px] text-[#121212] flex gap-5">
                  <span>$595.00</span>

                  <span class="font-normal text-[8px] md:text-[14px] text-[#6C7275] line-through">$1000.00</span>
                </p>
              </div>
            </div>

            <div class="flex flex-col relative">
              <div
                class="bg-colorBackgroundProducts rounded-2xl pt-12 pb-5 md:pb-8 product_container basis-4/5 flex flex-col justify-center relative">
                <div class="px-4">
                  <a
                    class="font-semibold text-[8px] md:text-[12px] bg-[#38CB89] py-2 px-2 flex-initial w-24 text-center text-white rounded-[5px] absolute top-[18px] z-10">
                    Nuevo
                  </a>
                </div>
                <div>
                  <div class="relative flex justify-center items-center">
                    <img src="./images/img/Ima01.png" class="" />
                  </div>

                  <!-- ------ -->
                  <div class="addProduct text-center flex justify-center">
                    <a href="#addProducto"
                      class="font-semibold text-[9px] md:text-[16px] bg-[#74A68D] py-3 px-5 flex-initial w-32 md:w-56 text-center text-white rounded-3xl">
                      Agregar al carrito
                    </a>
                  </div>
                </div>
              </div>
              <div class="my-2 flex flex-col items-start gap-2 basis-1/5">
                <div class="flex items-center gap-2">
                  <div class="flex md:gap-2 py-2">
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                    <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                  </div>
                  <p class="font-semibold text-[14px] text-[#6C7275]">(35)</p>
                </div>
                <h2 class="font-semibold text-[12px] md:text-[16px] text-[#141718]">
                  Fusce sagittis eleifend sem eget dictum
                </h2>
                <p class="font-semibold text-[8px] md:text-[14px] text-[#121212] flex gap-5">
                  <span>$595.00</span>

                  <span class="font-normal text-[8px] md:text-[14px] text-[#6C7275] line-through">$1000.00</span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>




@section('scripts_importados')
  <script>
    $(document).ready(function() {
      function capitalizeFirstLetter(string) {
        string = string.toLowerCase()
        return string.charAt(0).toUpperCase() + string.slice(1);
      }
    })
    $('#disminuir').on('click', function() {
      console.log('disminuyendo')
      let cantidad = Number($('#cantidadSpan span').text())
      if (cantidad > 0) {
        cantidad--
        $('#cantidadSpan span').text(cantidad)
      }


    })
    // cantidadSpan
    $('#aumentar').on('click', function() {
      console.log('aumentando')
      let cantidad = Number($('#cantidadSpan span').text())
      cantidad++
      $('#cantidadSpan span').text(cantidad)

    })
  </script>
@stop

@stop