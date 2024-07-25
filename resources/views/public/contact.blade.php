@extends('components.public.matrix', ['pagina' => 'contacto'])

@section('css_importados')

@stop


@section('content')


    <main>
       <section class="flex flex-col lg:flex-row gap-0 lg:gap-12 relative w-full pl-[3%] lg:pl-[5%] bg-cover bg-no-repeat bg-[40%] min-h-[500px]"
            style="background-image: url('{{ asset('images/img/jl_banner9.png') }}');">
            <div class="flex flex-col items-start justify-center py-7 lg:py-24 w-[100%] lg:w-[40%] gap-7">
                <div class="flex flex-col lg:flex-row gap-6">
                    <h3 class="font-poppins font-bold text-white text-4xl">Contacto</h3>
                </div>
                <p class="font-poppins font-normal text-white text-xl">Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit. Vivamus eu fermentum justo, ac fermentum nulla.
                    Sed sed scelerisque urna, vitae ultrices libero. Pellentesque vehicula et urna in venenatis.</p>
            </div>
            <div class="flex flex-col items-start lg:items-end justify-end w-[100%] lg:w-[60%] p-0">
                <img class="bg-cover bg-bottom object-right-bottom " src="{{ asset('/images/img/jl_banner8.png') }}" />
            </div>
        </section>

        <section class="w-11/12 mx-auto py-16">

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-44">
                <div class="flex flex-col gap-5" data-aos="fade-up" data-aos-offset="150">
                    <h2 class="font-poppins font-bold text-4xl  leading-none text-colorJL">Escríbenos para
                        ayudarte</h2>
                    <p class="text-[#565656] font-poppins font-normal text-base">Si deseas contactarte con
                        nosotros, puedes comunicarte con alguno de nuestros representantes, los cuales solucionarán
                        cualquier duda</p>

                    <form action="" id="formContactos" class="flex flex-col gap-5" data-aos="fade-up"
                        data-aos-offset="150">
                        @csrf
                        <div class="w-full">
                            <input required type="text" id="full_name" name="full_name" placeholder="Nombre completo"
                                class="border-b-[1.5px] border-[#082252] border-t-0 border-l-0 border-r-0 w-full focus:outline-none focus:border-border-b-[1.5px] focus:border-[#082252] font-poppins text-text16  py-3 focus:ring-transparent">
                        </div>

                        <div class="w-full">
                            <input  type="tel" id="telefonoContacto" name="phone" placeholder="Teléfono"
                                maxlength="9"
                                class="border-b-[1.5px] border-[#082252] border-t-0 border-l-0 border-r-0 w-full focus:outline-none focus:border-border-b-[1.5px] focus:border-[#082252] font-poppins text-text16  py-3 focus:ring-transparent">
                        </div>

                        <div class="w-full">
                            <input  type="email" id="emailContacto" name="email" placeholder="E-mail"
                                class="border-b-[1.5px] border-[#082252] border-t-0 border-l-0 border-r-0 w-full focus:outline-none focus:border-border-b-[1.5px] focus:border-[#082252] font-poppins text-text16  py-3 focus:ring-transparent">
                        </div>

                        <div class="w-full">
                            <textarea  type="text" id="message" name="message" placeholder="Mensaje"
                                class="border-b-[1.5px] border-[#082252] border-t-0 border-l-0 border-r-0 w-full focus:outline-none focus:border-border-b-[1.5px] focus:border-[#082252] font-poppins text-text16  py-3 focus:ring-transparent"></textarea>
                        </div>

                        <input  type="hidden" id="source" name="source" value="Contacto">

                        <div class="flex justify-center items-center pt-3">
                            <button type="submit"
                                class="font-poppins text-text16 md:text-text18 text-white py-4 px-10 bg-coloBkprimJl w-full text-center rounded-3xl hover:bg-red-600 md:duration-300">
                                Enviar Solicitud
                            </button>
                        </div>

                    </form>
                </div>
                @foreach ($datosgenerales as $dato) 
                    <div class="flex flex-col gap-5">
                        <div class="flex flex-col gap-5" data-aos="fade-up" data-aos-offset="150">
                            <h2 class="font-poppins font-bold text-3xl  leading-none text-colorJL">Datos de contacto</h2>
                            <p class="text-[#565656] font-poppins font-normal text-base">Si deseas contactarte con
                                nosotros, puedes comunicarte con alguno de nuestros representantes, los cuales solucionarán
                                cualquier duda</p>
                        </div>

                        <div class="flex flex-col gap-5">
                            <div class="flex justify-start items-start gap-3" data-aos="fade-up" data-aos-offset="150">
                                <div>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.0004 14.4004L11.3442 15.155C11.7205 15.4822 12.2803 15.4822 12.6566 15.155L12.0004 14.4004ZM6.87357 15.2547C7.40485 15.1038 7.71323 14.5508 7.56235 14.0196C7.41148 13.4883 6.85849 13.1799 6.32721 13.3308L6.87357 15.2547ZM17.6736 13.3308C17.1423 13.1799 16.5893 13.4883 16.4384 14.0196C16.2876 14.5508 16.5959 15.1038 17.1272 15.2547L17.6736 13.3308ZM15.8004 7.09604C15.8004 7.64061 15.5851 8.31679 15.1709 9.08205C14.764 9.83392 14.2089 10.5924 13.6333 11.2806C13.0605 11.9654 12.4849 12.5601 12.0511 12.9845C11.8348 13.196 11.6553 13.3638 11.5311 13.4776C11.469 13.5345 11.4209 13.5778 11.3889 13.6062C11.373 13.6205 11.361 13.631 11.3535 13.6376C11.3497 13.641 11.347 13.6433 11.3455 13.6447C11.3447 13.6454 11.3442 13.6458 11.344 13.646C11.3439 13.6461 11.3438 13.6461 11.3439 13.6461C11.3439 13.6461 11.344 13.646 11.344 13.646C11.3441 13.6459 11.3442 13.6458 12.0004 14.4004C12.6566 15.155 12.6567 15.1549 12.6569 15.1547C12.657 15.1546 12.6572 15.1545 12.6573 15.1543C12.6577 15.154 12.6581 15.1537 12.6585 15.1533C12.6595 15.1524 12.6607 15.1514 12.6623 15.15C12.6653 15.1474 12.6695 15.1437 12.6748 15.139C12.6854 15.1297 12.7005 15.1164 12.7197 15.0993C12.758 15.0651 12.813 15.0156 12.8822 14.9523C13.0204 14.8256 13.216 14.6428 13.4497 14.4141C13.9159 13.958 14.5403 13.3136 15.1675 12.5637C15.7919 11.8171 16.4368 10.9451 16.9299 10.0339C17.4157 9.13616 17.8004 8.11669 17.8004 7.09604H15.8004ZM12.0004 14.4004C12.6566 13.6458 12.6567 13.6459 12.6568 13.646C12.6568 13.646 12.6569 13.6461 12.6569 13.6461C12.6569 13.6461 12.6569 13.6461 12.6568 13.646C12.6566 13.6458 12.6561 13.6454 12.6553 13.6447C12.6537 13.6433 12.6511 13.641 12.6473 13.6376C12.6397 13.631 12.6278 13.6205 12.6119 13.6062C12.5799 13.5778 12.5317 13.5345 12.4697 13.4776C12.3454 13.3638 12.166 13.196 11.9497 12.9845C11.5159 12.5601 10.9403 11.9654 10.3675 11.2806C9.7919 10.5924 9.23676 9.83392 8.82986 9.08205C8.41573 8.31679 8.20039 7.64061 8.20039 7.09604H6.20039C6.20039 8.11669 6.58506 9.13616 7.07092 10.0339C7.56403 10.9451 8.20888 11.8171 8.83331 12.5637C9.46052 13.3136 10.0849 13.958 10.5511 14.4141C10.7848 14.6428 10.9803 14.8256 11.1186 14.9523C11.1878 15.0156 11.2428 15.0651 11.2811 15.0993C11.3003 15.1164 11.3153 15.1297 11.326 15.139C11.3313 15.1437 11.3355 15.1474 11.3385 15.15C11.34 15.1514 11.3413 15.1524 11.3422 15.1533C11.3427 15.1537 11.3431 15.154 11.3434 15.1543C11.3436 15.1545 11.3438 15.1546 11.3439 15.1547C11.3441 15.1549 11.3442 15.155 12.0004 14.4004ZM8.20039 7.09604C8.20039 5.0756 9.88088 3.40039 12.0004 3.40039V1.40039C8.81797 1.40039 6.20039 3.92981 6.20039 7.09604H8.20039ZM12.0004 3.40039C14.1199 3.40039 15.8004 5.0756 15.8004 7.09604H17.8004C17.8004 3.92981 15.1828 1.40039 12.0004 1.40039V3.40039ZM20.6004 17.6004C20.6004 17.8043 20.5054 18.0891 20.1442 18.445C19.7794 18.8043 19.2003 19.1739 18.404 19.5057C16.8158 20.1675 14.5523 20.6004 12.0004 20.6004V22.6004C14.7504 22.6004 17.2869 22.1378 19.1732 21.3519C20.1142 20.9598 20.9409 20.4675 21.5478 19.8698C22.1581 19.2685 22.6004 18.501 22.6004 17.6004H20.6004ZM12.0004 20.6004C9.44845 20.6004 7.18502 20.1675 5.59678 19.5057C4.80048 19.1739 4.22135 18.8043 3.85659 18.445C3.49535 18.0891 3.40039 17.8043 3.40039 17.6004H1.40039C1.40039 18.501 1.84269 19.2685 2.45302 19.8698C3.05983 20.4675 3.88659 20.9598 4.82755 21.3519C6.71383 22.1378 9.25039 22.6004 12.0004 22.6004V20.6004ZM3.40039 17.6004C3.40039 17.3494 3.55143 16.9622 4.16014 16.493C4.75881 16.0316 5.67899 15.5939 6.87357 15.2547L6.32721 13.3308C4.98646 13.7115 3.80664 14.2403 2.93915 14.909C2.08169 15.5699 1.40039 16.4765 1.40039 17.6004H3.40039ZM17.1272 15.2547C18.3218 15.5939 19.242 16.0316 19.8406 16.493C20.4493 16.9622 20.6004 17.3494 20.6004 17.6004H22.6004C22.6004 16.4765 21.9191 15.5699 21.0616 14.909C20.1941 14.2403 19.0143 13.7115 17.6736 13.3308L17.1272 15.2547Z"
                                            fill="#00BF63" />
                                    </svg>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <p class="font-poppins font-semibold text-lg  leading-none text-colorJL">Dirección
                                    </p>
                                    <p class="text-[#565656] font-poppins font-normal text-base">
                                        @if (!empty($dato->address) || !empty($dato->district)  || !empty($dato->country) )  
                                                {{ $dato->address }} - {{ $dato->district }} - {{ $dato->country }}
                                        @endif
                                    </p>
                                </div>
                            </div>

                            
                            <div class="flex justify-start items-start gap-3" data-aos="fade-up" data-aos-offset="150">
                                <div>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M19.9333 19.4021L20.6341 20.1155C20.7159 20.0351 20.7833 19.9412 20.8333 19.838L19.9333 19.4021ZM18.4907 20.8737L19.2204 21.5575C19.2313 21.5459 19.2419 21.534 19.2523 21.5218L18.4907 20.8737ZM16.5581 21.5958L16.6245 20.598L16.6218 20.5978L16.5581 21.5958ZM12.9859 20.5264L12.5509 21.4268L12.5552 21.4288L12.9859 20.5264ZM6.22631 15.243L5.45734 15.8823L5.4604 15.886L6.22631 15.243ZM2.92893 9.76321L3.86653 9.41549L3.86549 9.41269L2.92893 9.76321ZM2.416 6.90217L1.41964 6.81684L1.41936 6.82031L2.416 6.90217ZM3.048 5.54478L3.75438 6.25261H3.75438L3.048 5.54478ZM4.60968 3.9863L3.92599 3.25652C3.91831 3.26372 3.91074 3.27103 3.90329 3.27847L4.60968 3.9863ZM5.97443 3.98173L5.26804 4.68956L5.97443 3.98173ZM5.98817 3.99544L5.28178 4.70327C5.28978 4.71124 5.29791 4.71909 5.30617 4.72679L5.98817 3.99544ZM6.81251 4.81353L6.0948 5.50987L6.09498 5.51006L6.81251 4.81353ZM7.24758 5.25685L6.53039 5.95373C6.53397 5.95741 6.53757 5.96106 6.5412 5.96468L7.24758 5.25685ZM8.49784 6.50455L7.79146 7.21238L8.49784 6.50455ZM8.10399 8.31441L7.41013 7.5943C7.40309 7.60107 7.39616 7.60795 7.38932 7.61494L8.10399 8.31441ZM7.62306 8.76236L6.95627 8.01711C6.94273 8.02922 6.92953 8.0417 6.91667 8.05453L7.62306 8.76236ZM7.60016 8.78521L8.30654 9.49304C8.38267 9.41707 8.44604 9.32931 8.49422 9.23316L7.60016 8.78521ZM7.36201 9.82268L6.40861 10.1244C6.41021 10.1294 6.41185 10.1345 6.41353 10.1395L7.36201 9.82268ZM7.37575 9.86381L6.42726 10.1806C6.43464 10.2027 6.44279 10.2245 6.45169 10.246L7.37575 9.86381ZM8.855 12.2724L8.07 12.8919C8.09444 12.9228 8.12069 12.9523 8.14861 12.9802L8.855 12.2724ZM8.85958 12.277L9.63534 11.6459C9.61355 11.6191 9.5904 11.5935 9.56596 11.5691L8.85958 12.277ZM12.9263 15.9698L13.4611 15.1248L13.4601 15.1241L12.9263 15.9698ZM13.943 16.5182L13.4165 17.3683C13.4425 17.3845 13.4692 17.3994 13.4966 17.413L13.943 16.5182ZM13.998 16.5502L14.4445 15.6554L13.998 16.5502ZM16.0452 15.4533L15.3388 14.7454L16.0452 15.4533ZM17.3962 15.4441L16.6579 16.1186C16.6683 16.13 16.6789 16.1411 16.6898 16.152L17.3962 15.4441ZM17.4054 15.4533L18.1117 14.7454L18.1117 14.7454L17.4054 15.4533ZM19.9288 17.9715L19.2224 18.6794L19.2258 18.6828L19.9288 17.9715ZM13.0368 5.34008C12.4921 5.24879 11.9765 5.61634 11.8852 6.16103C11.7939 6.70572 12.1615 7.22128 12.7062 7.31257L13.0368 5.34008ZM16.6855 11.2857C16.7792 11.8299 17.2963 12.1952 17.8406 12.1016C18.3849 12.0079 18.7502 11.4907 18.6565 10.9464L16.6855 11.2857ZM13.2215 1.4144C12.6769 1.32227 12.1608 1.68903 12.0687 2.23358C11.9766 2.77813 12.3433 3.29425 12.8879 3.38638L13.2215 1.4144ZM18.6831 5.3117L19.3895 4.60387L19.3885 4.60282L18.6831 5.3117ZM20.6145 11.0961C20.707 11.6406 21.2234 12.007 21.7679 11.9145C22.3123 11.822 22.6788 11.3057 22.5863 10.7612L20.6145 11.0961ZM19.9333 19.4021C19.2326 18.6886 19.2326 18.6886 19.2326 18.6886C19.2326 18.6887 19.2326 18.6887 19.2325 18.6887C19.2325 18.6887 19.2324 18.6888 19.2323 18.6889C19.2322 18.6891 19.2319 18.6893 19.2316 18.6896C19.231 18.6902 19.2302 18.691 19.229 18.6922C19.2267 18.6944 19.2234 18.6977 19.219 18.702C19.2102 18.7106 19.1974 18.7232 19.1811 18.7393C19.1484 18.7716 19.1015 18.8178 19.0444 18.8743C18.9303 18.9873 18.7749 19.1416 18.6103 19.3068C18.2964 19.6216 17.9027 20.0218 17.7292 20.2256L19.2523 21.5218C19.3627 21.392 19.6903 21.0563 20.0268 20.7187C20.1873 20.5577 20.3393 20.4067 20.4513 20.2958C20.5073 20.2404 20.5531 20.1952 20.5849 20.1639C20.6008 20.1482 20.6132 20.136 20.6215 20.1278C20.6257 20.1237 20.6289 20.1206 20.631 20.1185C20.6321 20.1175 20.6328 20.1167 20.6334 20.1162C20.6336 20.1159 20.6338 20.1157 20.6339 20.1156C20.634 20.1156 20.634 20.1155 20.634 20.1155C20.6341 20.1155 20.6341 20.1155 20.6341 20.1155C20.6341 20.1155 20.6341 20.1155 19.9333 19.4021ZM17.7611 20.1899C17.4959 20.4729 17.2191 20.6004 16.7688 20.6004V22.6004C17.7473 22.6004 18.5605 22.2617 19.2204 21.5575L17.7611 20.1899ZM16.7688 20.6004C16.6935 20.6004 16.6542 20.6 16.6245 20.598L16.4917 22.5936C16.5994 22.6008 16.7066 22.6004 16.7688 22.6004V20.6004ZM16.6218 20.5978C15.4621 20.5238 14.3424 20.0657 13.4167 19.6239L12.5552 21.4288C13.5255 21.8919 14.9338 22.4941 16.4944 22.5938L16.6218 20.5978ZM13.4209 19.6259C10.9586 18.4364 8.79461 16.7472 6.99223 14.6001L5.4604 15.886C7.44084 18.2452 9.82902 20.1118 12.5509 21.4268L13.4209 19.6259ZM6.99527 14.6037C5.49023 12.7935 4.51104 11.1534 3.86653 9.41549L1.99133 10.1109C2.72988 12.1024 3.83904 13.9358 5.45735 15.8823L6.99527 14.6037ZM3.86549 9.41269C3.4712 8.35917 3.35994 7.62575 3.41265 6.98403L1.41936 6.82031C1.33467 7.85134 1.53484 8.89121 1.99237 10.1137L3.86549 9.41269ZM3.41235 6.9875C3.43805 6.68753 3.5417 6.46486 3.75438 6.25261L2.34162 4.83695C1.79407 5.38338 1.48555 6.04735 1.41965 6.81684L3.41235 6.9875ZM3.75438 6.25261L5.31606 4.69413L3.90329 3.27847L2.34162 4.83695L3.75438 6.25261ZM5.29337 4.71607C5.34439 4.66827 5.37474 4.65255 5.37938 4.65036C5.38185 4.64921 5.35528 4.6618 5.30579 4.6618V2.6618C4.73564 2.6618 4.26501 2.93891 3.92599 3.25652L5.29337 4.71607ZM5.30579 4.6618C5.27654 4.6618 5.25244 4.65727 5.23577 4.6525C5.21991 4.64795 5.21241 4.64367 5.21338 4.64421C5.21449 4.64481 5.22086 4.64851 5.23182 4.65709C5.24265 4.66559 5.25497 4.67651 5.26804 4.68956L6.68081 3.2739C6.47181 3.06532 5.99483 2.6618 5.30579 2.6618V4.6618ZM5.26804 4.68956C5.27032 4.69183 5.27261 4.69411 5.2749 4.69639C5.27718 4.69868 5.27948 4.70097 5.28178 4.70327L6.69455 3.28761C6.69227 3.28533 6.68999 3.28305 6.6877 3.28077C6.68541 3.27848 6.68311 3.27619 6.68081 3.2739L5.26804 4.68956ZM5.30617 4.72679C5.56621 4.96929 5.81734 5.2239 6.0948 5.50987L7.53022 4.11718C7.24896 3.82729 6.96884 3.54261 6.67016 3.26408L5.30617 4.72679ZM6.09498 5.51006C6.16924 5.58655 6.24419 5.66253 6.31644 5.73577C6.38961 5.80993 6.46021 5.88149 6.53039 5.95373L7.96477 4.55997C7.88841 4.48138 7.81246 4.40441 7.74022 4.33118C7.66707 4.25703 7.59776 4.18676 7.53004 4.117L6.09498 5.51006ZM6.5412 5.96468L7.79146 7.21238L9.20422 5.79672L7.95397 4.54902L6.5412 5.96468ZM7.79146 7.21238C7.82522 7.24608 7.84791 7.27266 7.86256 7.29183C7.87717 7.31094 7.88214 7.32055 7.8821 7.32047C7.88187 7.32002 7.87649 7.30943 7.87128 7.28936C7.86869 7.27941 7.86631 7.26773 7.86459 7.25453C7.86287 7.24131 7.86193 7.22736 7.86193 7.21296C7.86193 7.19855 7.86287 7.1846 7.86459 7.17138C7.86631 7.15818 7.86869 7.1465 7.87128 7.13655C7.87649 7.11649 7.88187 7.10589 7.8821 7.10545C7.88214 7.10536 7.87717 7.11497 7.86256 7.13409C7.84791 7.15325 7.82522 7.17983 7.79146 7.21353L9.20422 8.62919C9.54192 8.29218 9.86193 7.81914 9.86193 7.21296C9.86193 6.60677 9.54192 6.13373 9.20422 5.79672L7.79146 7.21238ZM7.79146 7.21353C7.64111 7.36357 7.53556 7.47344 7.41013 7.5943L8.79784 9.03452C8.93804 8.89944 9.08895 8.74423 9.20422 8.62919L7.79146 7.21353ZM7.38932 7.61494C7.28792 7.71855 7.2417 7.76622 7.20918 7.79933C7.17137 7.83781 7.1976 7.80912 7.23508 7.77843C7.24122 7.7734 7.25958 7.75901 7.23345 7.77941C7.21739 7.79195 7.19821 7.80726 7.17325 7.82799C7.12609 7.86717 7.06003 7.92428 6.95627 8.01711L8.28984 9.50761C8.3853 9.4222 8.43088 9.38332 8.45114 9.3665C8.45988 9.35924 8.46336 9.35654 8.46432 9.35579C8.46819 9.35277 8.46497 9.3553 8.47339 9.34876C8.4786 9.34471 8.48944 9.33627 8.50227 9.32576C8.56209 9.27677 8.6098 9.2275 8.63598 9.20084C8.66744 9.16881 8.72771 9.10679 8.81865 9.01388L7.38932 7.61494ZM6.91667 8.05453C6.9435 8.02776 6.96586 8.00882 6.97443 8.00166C6.97776 7.99887 6.98154 7.99577 6.97807 7.99862C6.97664 7.9998 6.96899 8.00607 6.95988 8.01386C6.92767 8.04141 6.79985 8.15015 6.7061 8.33727L8.49422 9.23316C8.40505 9.41114 8.2841 9.51302 8.2599 9.53371C8.25601 9.53704 8.25288 9.53965 8.25098 9.54124C8.25 9.54205 8.24922 9.5427 8.24873 9.5431C8.24825 9.5435 8.24792 9.54377 8.24791 9.54378C8.24657 9.54488 8.25254 9.53999 8.25809 9.53535C8.27109 9.52447 8.29803 9.50153 8.32944 9.47019L6.91667 8.05453ZM6.89377 8.07738C6.54616 8.42429 6.35721 8.82402 6.30914 9.23843C6.26422 9.62569 6.35267 9.94759 6.40861 10.1244L8.31542 9.52099C8.30927 9.50155 8.30508 9.48685 8.3021 9.47501C8.29914 9.4633 8.29773 9.45577 8.29707 9.45156C8.2958 9.44339 8.29789 9.45104 8.29582 9.46887C8.29479 9.47773 8.29291 9.4875 8.29002 9.4974C8.28712 9.50737 8.28386 9.51519 8.28127 9.52041C8.27872 9.52556 8.27789 9.52603 8.28088 9.52193C8.28396 9.51772 8.29167 9.50789 8.30654 9.49304L6.89377 8.07738ZM6.41353 10.1395C6.41582 10.1463 6.41811 10.1532 6.4204 10.1601C6.42269 10.1669 6.42498 10.1738 6.42726 10.1806L8.32424 9.547C8.32195 9.54014 8.31966 9.53328 8.31737 9.52643C8.31508 9.51957 8.31279 9.51272 8.3105 9.50587L6.41353 10.1395ZM6.45169 10.246C6.8222 11.1418 7.336 11.9618 8.07 12.8919L9.63999 11.6529C8.98176 10.8188 8.57963 10.158 8.29982 9.48158L6.45169 10.246ZM8.14861 12.9802L8.15319 12.9848L9.56596 11.5691L9.56138 11.5646L8.14861 12.9802ZM8.08381 12.908C9.4058 14.5332 10.8177 15.8215 12.3926 16.8155L13.4601 15.1241C12.0949 14.2625 10.8413 13.1285 9.63534 11.6459L8.08381 12.908ZM12.3916 16.8148C12.6288 16.9649 12.8659 17.0823 13.0432 17.1708L13.9361 15.3812C13.747 15.2868 13.5994 15.2123 13.4611 15.1248L12.3916 16.8148ZM13.0432 17.1708C13.2188 17.2584 13.3303 17.315 13.4165 17.3683L14.4696 15.6681C14.2901 15.5569 14.0903 15.4581 13.9361 15.3812L13.0432 17.1708ZM13.4966 17.413C13.4724 17.401 13.4547 17.3907 13.447 17.3861C13.4401 17.382 13.435 17.3788 13.4413 17.3827C13.4442 17.3845 13.4585 17.3935 13.4745 17.403C13.4914 17.413 13.5182 17.4284 13.5515 17.445L14.4445 15.6554C14.4686 15.6675 14.4863 15.6778 14.494 15.6823C14.5009 15.6864 14.506 15.6897 14.4997 15.6857C14.4969 15.6839 14.4826 15.675 14.4665 15.6655C14.4497 15.6555 14.4228 15.6401 14.3895 15.6234L13.4966 17.413ZM13.5515 17.445C13.8271 17.5825 14.1255 17.6645 14.4514 17.6645V15.6645C14.4542 15.6645 14.4578 15.6647 14.4618 15.6652C14.4658 15.6656 14.4687 15.6663 14.4702 15.6667C14.4737 15.6675 14.4659 15.6661 14.4445 15.6554L13.5515 17.445ZM14.4514 17.6645C15.2657 17.6645 15.7583 17.1523 15.8539 17.057L14.4411 15.6413C14.4315 15.6509 14.4274 15.655 14.423 15.6591C14.4191 15.6628 14.4159 15.6657 14.4131 15.668C14.4072 15.673 14.4039 15.6751 14.4034 15.6754C14.4031 15.6756 14.408 15.6726 14.4177 15.6697C14.4226 15.6682 14.4283 15.6668 14.4345 15.6658C14.4408 15.6649 14.4466 15.6645 14.4514 15.6645V17.6645ZM15.8539 17.057L16.7516 16.1611L15.3388 14.7454L14.4411 15.6413L15.8539 17.057ZM16.7516 16.1611C16.7684 16.1443 16.785 16.1294 16.8006 16.117C16.8164 16.1044 16.8274 16.0974 16.8329 16.0944C16.8383 16.0913 16.8334 16.0948 16.818 16.0995C16.8018 16.1044 16.7738 16.1105 16.7367 16.1105V14.1105C16.0338 14.1105 15.5395 14.5451 15.3388 14.7454L16.7516 16.1611ZM16.7367 16.1105C16.665 16.1105 16.624 16.0876 16.6224 16.0866C16.6211 16.0859 16.6251 16.0881 16.6332 16.0948C16.6412 16.1015 16.6498 16.1098 16.6579 16.1186L18.1345 14.7696C17.9186 14.5334 17.4363 14.1105 16.7367 14.1105V16.1105ZM16.6898 16.152C16.6921 16.1543 16.6933 16.1555 16.6945 16.1566C16.6956 16.1578 16.6967 16.1589 16.699 16.1611L18.1117 14.7454C18.1094 14.7431 18.1082 14.7419 18.1071 14.7408C18.1059 14.7397 18.1048 14.7386 18.1026 14.7363L16.6898 16.152ZM16.699 16.1611L19.2224 18.6794L20.6351 17.2637L18.1117 14.7454L16.699 16.1611ZM19.2258 18.6828C19.1516 18.6094 19.139 18.5361 19.1388 18.5348C19.1387 18.5346 19.1392 18.5379 19.1395 18.5449C19.1397 18.5519 19.1397 18.5617 19.139 18.5744C19.1376 18.6004 19.1336 18.6332 19.1261 18.672C19.1107 18.7516 19.0856 18.8315 19.062 18.8947C19.0507 18.9249 19.0411 18.9479 19.0353 18.9612C19.0325 18.9678 19.0307 18.9717 19.0302 18.9727C19.03 18.9732 19.0301 18.9729 19.0306 18.9718C19.0309 18.9713 19.0312 18.9705 19.0317 18.9696C19.0319 18.9691 19.0322 18.9686 19.0325 18.968C19.0326 18.9677 19.0327 18.9674 19.0329 18.9671C19.033 18.9669 19.0331 18.9667 19.0331 18.9666C19.0332 18.9664 19.0334 18.9661 19.9333 19.4021C20.8333 19.838 20.8334 19.8377 20.8336 19.8375C20.8336 19.8374 20.8337 19.8371 20.8338 19.8369C20.834 19.8365 20.8342 19.8362 20.8344 19.8357C20.8348 19.8349 20.8352 19.8341 20.8357 19.8331C20.8366 19.8312 20.8376 19.8291 20.8387 19.8267C20.841 19.822 20.8436 19.8162 20.8467 19.8095C20.8529 19.7961 20.8607 19.7789 20.8697 19.7582C20.8876 19.7169 20.9108 19.6609 20.936 19.5934C20.9852 19.4613 21.0474 19.271 21.0898 19.0512C21.1597 18.6896 21.2484 17.8697 20.6317 17.2603L19.2258 18.6828ZM12.7062 7.31257C13.697 7.47863 14.599 7.94576 15.3251 8.67033L16.7378 7.25467C15.7236 6.24252 14.4457 5.5762 13.0368 5.34008L12.7062 7.31257ZM15.3251 8.67033C16.0493 9.3931 16.5146 10.293 16.6855 11.2857L18.6565 10.9464C18.4152 9.5442 17.7539 8.26864 16.7378 7.25467L15.3251 8.67033ZM12.8879 3.38638C14.8148 3.71238 16.574 4.62376 17.9778 6.02057L19.3885 4.60282C17.6964 2.91923 15.5628 1.81051 13.2215 1.4144L12.8879 3.38638ZM17.9767 6.01953C19.3792 7.41911 20.2879 9.17324 20.6145 11.0961L22.5863 10.7612C22.1893 8.42449 21.0829 6.29383 19.3895 4.60387L17.9767 6.01953Z"
                                            fill="#00BF63" />
                                    </svg>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <p class="font-poppins font-semibold text-lg  leading-none text-colorJL">Número
                                        de Teléfono</p>
                                    <p class="text-[#565656] font-poppins font-normal text-base">
                                        @if (!empty($dato->cellphone)) 
                                            {{ $dato->cellphone }}
                                        @endif
                                        <br> 
                                        @if (!empty($dato->office_phone)) 
                                            {{ $dato->office_phone }}
                                        @endif
                                    </p>
                                </div>
                            </div>
                            

                            @if (!empty($dato->email))
                            <div class="flex justify-start items-start gap-3" data-aos="fade-up" data-aos-offset="150">
                                <div>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4.66576 5.28382C4.20119 4.98517 3.58247 5.11967 3.28382 5.58424C2.98517 6.04881 3.11967 6.66753 3.58424 6.96618L4.66576 5.28382ZM12 11.1875L11.4592 12.0287C11.7793 12.2344 12.1883 12.2407 12.5145 12.045L12 11.1875ZM20.952 6.98249C21.4256 6.69834 21.5791 6.08408 21.295 5.6105C21.0108 5.13692 20.3966 4.98336 19.923 5.26751L20.952 6.98249ZM4 16.0543V7.25H2V16.0543H4ZM5.25 6H18.75V4H5.25V6ZM20 7.25V16.0543H22V7.25H20ZM20 16.0543C20 16.7447 19.4404 17.3044 18.75 17.3044V19.3044C20.5449 19.3044 22 17.8493 22 16.0543H20ZM18.75 6C19.4404 6 20 6.55964 20 7.25H22C22 5.45508 20.5449 4 18.75 4V6ZM4 7.25C4 6.55964 4.55965 6 5.25 6V4C3.45507 4 2 5.45508 2 7.25H4ZM5.25 17.3044C4.55964 17.3044 4 16.7447 4 16.0543H2C2 17.8493 3.45507 19.3044 5.25 19.3044V17.3044ZM3.58424 6.96618L11.4592 12.0287L12.5408 10.3463L4.66576 5.28382L3.58424 6.96618ZM12.5145 12.045L20.952 6.98249L19.923 5.26751L11.4855 10.33L12.5145 12.045ZM18.75 17.3044H5.25V19.3044H18.75V17.3044Z"
                                            fill="#00BF63" />
                                    </svg>

                                </div>
                                <div class="flex flex-col gap-2">
                                    <p class="font-poppins font-semibold text-lg  leading-none text-colorJL">Correo
                                        Electrónico</p>
                                    <p class="text-[#565656] font-poppins font-normal text-base">
                                        
                                                {{ $dato->email }}
                                        
                                     </p>
                                </div>
                            </div>
                            @endif

                            <div class="flex justify-start items-start gap-3" data-aos="fade-up" data-aos-offset="150">
                                <div>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M14.3088 15.1987C14.8327 15.3733 15.399 15.0902 15.5737 14.5662C15.7483 14.0423 15.4652 13.476 14.9412 13.3013L14.3088 15.1987ZM11.25 13.125H10.25C10.25 13.5554 10.5254 13.9376 10.9338 14.0737L11.25 13.125ZM12.25 8.42087C12.25 7.86858 11.8023 7.42087 11.25 7.42087C10.6977 7.42087 10.25 7.86858 10.25 8.42087H12.25ZM19.25 12C19.25 12.5523 19.6977 13 20.25 13C20.8023 13 21.25 12.5523 21.25 12H19.25ZM19.9116 17.0007C20.1881 16.5227 20.0247 15.9109 19.5467 15.6344C19.0686 15.3579 18.4569 15.5212 18.1804 15.9993L19.9116 17.0007ZM18.4882 10.3052C18.0976 9.91471 17.4645 9.91471 17.0739 10.3052C16.6834 10.6958 16.6834 11.3289 17.0739 11.7195L18.4882 10.3052ZM20.0311 13.2623L19.3239 13.9695C19.7145 14.36 20.3476 14.36 20.7382 13.9695L20.0311 13.2623ZM22.9882 11.7195C23.3787 11.3289 23.3787 10.6958 22.9882 10.3052C22.5976 9.91471 21.9645 9.91471 21.5739 10.3052L22.9882 11.7195ZM14.9412 13.3013L11.5662 12.1763L10.9338 14.0737L14.3088 15.1987L14.9412 13.3013ZM12.25 13.125V8.42087H10.25V13.125H12.25ZM11.25 20C6.83172 20 3.25 16.4183 3.25 12H1.25C1.25 17.5228 5.72715 22 11.25 22V20ZM3.25 12C3.25 7.58172 6.83172 4 11.25 4V2C5.72715 2 1.25 6.47715 1.25 12H3.25ZM11.25 4C15.6683 4 19.25 7.58172 19.25 12H21.25C21.25 6.47715 16.7728 2 11.25 2V4ZM18.1804 15.9993C16.7956 18.3931 14.2099 20 11.25 20V22C14.9527 22 18.184 19.9871 19.9116 17.0007L18.1804 15.9993ZM17.0739 11.7195L19.3239 13.9695L20.7382 12.5552L18.4882 10.3052L17.0739 11.7195ZM20.7382 13.9695L22.9882 11.7195L21.5739 10.3052L19.3239 12.5552L20.7382 13.9695Z"
                                            fill="#00BF63" />
                                    </svg>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <p class="font-poppins font-semibold text-lg  leading-none text-colorJL">Horario
                                        de Atención</p>
                                    {{-- <p class="font-moderat_Regular text-text14 md:text-text18 text-[#565656] leading-[20px]">
                                        Lunes a viernes: 8:00 am - 6:00 pm 
                                    </p>
                                    <p class="font-moderat_Regular text-text14 md:text-text18 text-[#565656] leading-[20px]">
                                        Sábados: 8:00 am - 01:30 pm
                                    </p>  --}}

                                    <p class="text-[#565656] font-poppins font-normal text-base">
                                        {{$dato->schedule}}
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </section>

        <section class="w-11/12 mx-auto bg-cover rounded-3xl md:bg-right bg-no-repeat bg-[45%] mt-0 lg:mt-20" style="background-image: url('{{ asset('images/img/jl_banner11.png') }}');">
            <div 
                class="flex flex-col md:flex-row justify-between items-end lg:items-center gap-5 pt-10  pl-7 md:pl-10 pr-7 md:pr-10 mb-20">
                <div class="flex flex-col gap-6" data-aos="fade-up" data-aos-offset="150">
                    <div class="flex flex-col gap-3">
                        <p class="font-poppins font-bold text-3xl  leading-none text-colorJL">¿Aún tienes alguna consulta?</h2>
                        <p class="text-color4JL font-poppins font-normal text-base">Vestibulum ante ipsum primis in faucibus
                            orci luctus et ultrices posuere.</p>
                    </div>

                    <div class="flex justify-start items-center pb-8">
                        <a href="#"
                            class="text-white font-bold font-poppins text-base py-4 bg-[#00BF63] rounded-3xl px-5 w-full text-center md:inline-flex md:w-auto">Ponerse
                            en contacto</a>
                    </div>
                </div>

                <div class="flex flex-col justify-center items-end">
                    <img src="{{ asset('images/img/jl_banner10.png') }}" alt="contacto" class="w-full lg:-mt-32 lg:h-96 lg:object-cover">
                </div>
            </div>

        </section>


        <section class="w-11/12 mx-auto pb-16">

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-44">
                <div class="flex flex-col gap-5" data-aos="fade-up" data-aos-offset="150">
                    <h2 class="font-poppins font-bold text-4xl  leading-none text-colorJL">Registrate como proveedor</h2>
                    <p class="text-[#565656] font-poppins font-normal text-base">"Únete a nuestra red de proveedores y lleva 
                        tu negocio al siguiente nivel. Descubre oportunidades, mejores precios, expande tu mercado y crece con nosotros. 
                        ¡Conviértete en un proveedor de confianza hoy mismo!"
                    </p>

                    <form action="" id="formProveedor" class="flex flex-col gap-5" data-aos="fade-up"
                        data-aos-offset="150">
                        @csrf
                        <div class="w-full">
                            <input required type="text" id="full_name" name="full_name" placeholder="Nombre completo"
                                class="border-b-[1.5px] border-[#082252] border-t-0 border-l-0 border-r-0 w-full focus:outline-none focus:border-border-b-[1.5px] focus:border-[#082252] font-poppins text-text16  py-3 focus:ring-transparent">
                        </div>

                        <div class="w-full">
                            <input type="tel" id="telefonoContactoProveedor" name="phone" placeholder="Teléfono"
                                maxlength="9"
                                class="border-b-[1.5px] border-[#082252] border-t-0 border-l-0 border-r-0 w-full focus:outline-none focus:border-border-b-[1.5px] focus:border-[#082252] font-poppins text-text16  py-3 focus:ring-transparent">
                        </div>

                        <div class="w-full">
                            <input type="email" id="emailContactoProveedor" name="email" placeholder="E-mail"
                                class="border-b-[1.5px] border-[#082252] border-t-0 border-l-0 border-r-0 w-full focus:outline-none focus:border-border-b-[1.5px] focus:border-[#082252] font-poppins text-text16  py-3 focus:ring-transparent">
                        </div>

                        <div class="w-full">
                            <textarea  type="text" id="message" name="message" placeholder="Mensaje"
                                class="border-b-[1.5px] border-[#082252] border-t-0 border-l-0 border-r-0 w-full focus:outline-none focus:border-border-b-[1.5px] focus:border-[#082252] font-poppins text-text16  py-3 focus:ring-transparent"></textarea>
                        </div>

                        <div class="flex justify-center items-center pt-3">
                            <button type="submit"
                                class="font-poppins text-text16 md:text-text18 text-white py-4 px-10 bg-coloBkprimJl w-full text-center rounded-3xl hover:bg-red-600 md:duration-300">
                                Enviar Solicitud
                            </button>
                        </div>

                    </form>
                </div>
             
                    <div class="flex flex-col gap-5">
                        <div class="flex flex-col gap-5" data-aos="fade-up" data-aos-offset="150">
                            <h2 class="font-poppins font-bold text-3xl  leading-none text-colorJL">Conviértete en proveedor</h2>
                        </div>
                        <div>
                            <img src="{{ asset('images/img/jl_proveedor.jpg') }}"/>
                        </div>
                    </div>
                
            </div>
        </section>

    </main>



@section('scripts_importados')
    <script>
        function alerta(message) {
            Swal.fire({
                title: message,
                icon: "error",
            });
        }

        function validarEmail(value) {
            console.log(value)
            const regex =
                /^(([^<>()\[\]\\.,;:\s@”]+(\.[^<>()\[\]\\.,;:\s@”]+)*)|(“.+”))@((\[[0–9]{1,3}\.[0–9]{1,3}\.[0–9]{1,3}\.[0–9]{1,3}])|(([a-zA-Z\-0–9]+\.)+[a-zA-Z]{2,}))$/

            if (!regex.test(value)) {
                alerta("El campo email no es válido");
                return false;
            }
            return true;
        }

        $('#formContactos').submit(function(event) {
            // Evita que se envíe el formulario automáticamente
            //console.log('evcnto')

            event.preventDefault();
            let formDataArray = $(this).serializeArray();

            if (!validarEmail($('#email').val())) {
                return;
            };

            /* console.log(formDataArray); */
            $.ajax({
                url: '{{ route('guardarContactos') }}',
                method: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    $('#formContactos')[0].reset();
                    Swal.fire({
                        title: response.message,
                        icon: "success",
                    });

                },
                error: function(error) {
                    const obj = error.responseJSON.message;
                    const keys = Object.keys(error.responseJSON.message);
                    let flag = false;
                    keys.forEach(key => {
                        if (!flag) {
                            const e = obj[key][0];
                            Swal.fire({
                                title: error.message,
                                text: e,
                                icon: "error",
                            });
                            flag = true; // Marcar como mostrado
                        }
                    });
                }
            });
        })
    </script>

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
    <script>
        let articulosCarrito = [];


        function deleteOnCarBtn(id, operacion) {
            console.log('Elimino un elemento del carrito');
            console.log(id, operacion)
            const prodRepetido = articulosCarrito.map(item => {
                if (item.id === id && item.cantidad > 0) {
                    item.cantidad -= Number(1);
                    return item; // retorna el objeto actualizado 
                } else {
                    return item; // retorna los objetos que no son duplicados 
                }

            });
            Local.set('carrito', articulosCarrito)
            limpiarHTML()
            PintarCarrito()


        }

        function calcularTotal() {
            let articulos = Local.get('carrito')
            console.log(articulos)
            let total = articulos.map(item => {
                let monto
                if (Number(item.descuento) !== 0) {
                    monto = item.cantidad * Number(item.descuento)
                } else {
                    monto = item.cantidad * Number(item.precio)

                }
                return monto

            })
            const suma = total.reduce((total, elemento) => total + elemento, 0);

            $('#itemsTotal').text(`S/. ${suma} `)

        }

        function addOnCarBtn(id, operacion) {
            console.log('agrego un elemento del cvarrio');
            console.log(id, operacion)

            const prodRepetido = articulosCarrito.map(item => {
                if (item.id === id) {
                    item.cantidad += Number(1);
                    return item; // retorna el objeto actualizado 
                } else {
                    return item; // retorna los objetos que no son duplicados 
                }

            });
            console.log(articulosCarrito)
            Local.set('carrito', articulosCarrito)
            // localStorage.setItem('carrito', JSON.stringify(articulosCarrito));
            limpiarHTML()
            PintarCarrito()


        }

        function deleteItem(id) {
            console.log('borrando elemento')
            articulosCarrito = articulosCarrito.filter(objeto => objeto.id !== id);

            Local.set('carrito', articulosCarrito)
            limpiarHTML()
            PintarCarrito()
        }

        var appUrl = <?php echo json_encode($url_env); ?>;
        console.log(appUrl);
        $(document).ready(function() {
            articulosCarrito = Local.get('carrito') || [];

            PintarCarrito();
        });

        function limpiarHTML() {
            //forma lenta 
            /* contenedorCarrito.innerHTML=''; */
            $('#itemsCarrito').html('')


        }



        // function PintarCarrito() {
        //   console.log('pintando carrito ')

        //   let itemsCarrito = $('#itemsCarrito')

        //   articulosCarrito.forEach(element => {
        //     let plantilla = `<div class="flex justify-between bg-white font-poppins border-b-[1px] border-[#E8ECEF] pb-5">
    //         <div class="flex justify-center items-center gap-5">
    //           <div class="bg-[#F3F5F7] rounded-md p-4">
    //             <img src="${appUrl}/${element.imagen}" alt="producto" class="w-24" />
    //           </div>
    //           <div class="flex flex-col gap-3 py-2">
    //             <h3 class="font-semibold text-[14px] text-[#151515]">
    //               ${element.producto}
    //             </h3>
    //             <p class="font-normal text-[12px] text-[#6C7275]">

    //             </p>
    //             <div class="flex w-20 justify-center text-[#151515] border-[1px] border-[#6C7275] rounded-md">
    //               <button type="button" onClick="(deleteOnCarBtn(${element.id}, '-'))" class="  w-8 h-8 flex justify-center items-center ">
    //                 <span  class="text-[20px]">-</span>
    //               </button>
    //               <div class="w-8 h-8 flex justify-center items-center">
    //                 <span  class="font-semibold text-[12px]">${element.cantidad }</span>
    //               </div>
    //               <button type="button" onClick="(addOnCarBtn(${element.id}, '+'))" class="  w-8 h-8 flex justify-center items-center ">
    //                 <span class="text-[20px]">+</span>
    //               </button>
    //             </div>
    //           </div>
    //         </div>
    //         <div class="flex flex-col justify-start py-2 gap-5 items-center pr-2">
    //           <p class="font-semibold text-[14px] text-[#151515]">
    //             S/ ${Number(element.descuento) !== 0 ? element.descuento : element.precio}
    //           </p>
    //           <div class="flex items-center">
    //             <button type="button" onClick="(deleteItem(${element.id}))" class="  w-8 h-8 flex justify-center items-center ">
    //             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
    //               <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
    //             </svg>
    //             </button>

    //           </div>
    //         </div>
    //       </div>`

        //     itemsCarrito.append(plantilla)

        //   });

        //   calcularTotal()
        // }






        $('#btnAgregarCarrito').on('click', function() {
            let url = window.location.href;
            let partesURl = url.split('/')
            let item = partesURl[partesURl.length - 1]
            let cantidad = Number($('#cantidadSpan span').text())
            item = item.replace('#', '')



            // id='nodescuento'


            $.ajax({

                url: `{{ route('carrito.buscarProducto') }}`,
                method: 'POST',
                data: {
                    _token: $('input[name="_token"]').val(),
                    id: item,
                    cantidad

                },
                success: function(success) {
                    console.log(success)
                    let {
                        producto,
                        id,
                        descuento,
                        precio,
                        imagen,
                        color
                    } = success.data
                    let cantidad = Number(success.cantidad)
                    let detalleProducto = {
                        id,
                        producto,
                        descuento,
                        precio,
                        imagen,
                        cantidad,
                        color

                    }
                    let existeArticulo = articulosCarrito.some(item => item.id === detalleProducto.id)
                    if (existeArticulo) {
                        //sumar al articulo actual 
                        const prodRepetido = articulosCarrito.map(item => {
                            if (item.id === detalleProducto.id) {
                                item.cantidad += Number(detalleProducto.cantidad);
                                return item; // retorna el objeto actualizado 
                            } else {
                                return item; // retorna los objetos que no son duplicados 
                            }

                        });
                    } else {
                        articulosCarrito = [...articulosCarrito, detalleProducto]

                    }

                    Local.set('carrito', articulosCarrito)
                    let itemsCarrito = $('#itemsCarrito')
                    let ItemssubTotal = $('#ItemssubTotal')
                    let itemsTotal = $('#itemsTotal')
                    limpiarHTML()
                    PintarCarrito()

                },
                error: function(error) {
                    console.log(error)
                }

            })



            // articulosCarrito = {...articulosCarrito , detalleProducto }
        })
        // $('#openCarrito').on('click', function() {
        //   console.log('abriendo carrito ');
        //   $('.main').addClass('blur')
        // })
        // $('#closeCarrito').on('click', function() {
        //   console.log('cerrando  carrito ');

        //   $('.cartContainer').addClass('hidden')
        //   $('#check').prop('checked', false);
        //   $('.main').removeClass('blur')


        // })
    </script>

    <script src="{{ asset('js/storage.extend.js') }}"></script>
@stop

@stop
