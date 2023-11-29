
@section("titulo", 'Index')
@section('content')

    <main>
      <div
        class="relative pt-16 pb-32 flex content-center items-center justify-center"
        style="min-height: 85vh;">
        <div
          class="absolute top-0 w-full h-full bg-center bg-cover"
          style='background-image: url("https://www.santos.sp.gov.br/static/files_www/styles/newspagesimples/public/field/image/brigadeiro_0.jpg?itok=hO6FM2aS");'
        >
          <span
            id="blackOverlay"
            class="w-full h-full absolute opacity-75 bg-black"
          ></span>
        </div>
        <div class="container relative mx-auto">
          <div class="items-center flex flex-wrap">
            <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
              <div class="pr-12">
                <h1 class="text-white font-semibold text-8xl">
                  Doce Luz
                </h1>
                <p class="mt-4 text-lg text-gray-300">
                  Adoce sua vida conosco!
                </p>
              </div>
            </div>
          </div>
        </div>
        <div
          class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
          style="height: 70px;"
        >
          <svg
            class="absolute bottom-0 overflow-hidden"
            xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="none"
            version="1.1"
            viewBox="0 0 2560 100"
            x="0"
            y="0"
          >
          </svg>
        </div>
      </div>

      <section class="pb-20 bg-pink-100">
        <div class="container mx-auto px-4">
          <div class="flex flex-wrap">
            <div class="pt-6 w-full md:w-4/12 px-4 text-center">
                <div
                  class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                  <div class="px-4 py-5 flex-auto">
                    <div
                      class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-pink-400">
                      <i>
                        <img src="{{asset('storage/imagem/brigadeiro.png')}}" >
                      </i>
                    </div>
                    <h6 class="text-xl font-semibold">Brigadeiros</h6>
                    <p class="mt-2 mb-4 text-gray-600">
                      Orgânicos e veganos, com massa feita de inhame. Opção simples sem recheio ou recheado com morangos.
                    </p>
                  </div>
                </div>
            </div>

            <div class="pt-6 w-full md:w-4/12 px-4 text-center">
                <div
                  class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                  <div class="px-4 py-5 flex-auto">
                    <div
                      class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-pink-400">
                      <i>
                        <img src="{{asset('storage/imagem/vela.png')}}">
                      </i>
                    </div>
                    <h6 class="text-xl font-semibold">Velas</h6>
                    <p class="mt-2 mb-4 text-gray-600">
                        Velas aromáticas de diversos tipos e tamanhos. Personalizadas com adesivos impermeáveis exclusivos.
                    </p>
                  </div>
                </div>
            </div>

            <div class="pt-6 w-full md:w-4/12 px-4 text-center">
                <div
                  class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                  <div class="px-4 py-5 flex-auto">
                    <div
                      class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-pink-400">
                      <i>
                        <img src="{{asset('storage/imagem/dinheiro.png')}}">
                      </i>
                    </div>
                    <h6 class="text-xl font-semibold">Custo</h6>
                    <p class="mt-2 mb-4 text-gray-600">
                      Produtos orgânicos, veganos e personalizados com <b>ótimo custo-benefício</b>! <br>Frete grátis para Chapecó-SC.
                    </p>
                  </div>
                </div>
            </div>
          </div><br>

        <div
          class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
          style="height: 80px;"
        >
          <svg
            class="absolute bottom-0 overflow-hidden"
            xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="none"
            version="1.1"
            viewBox="0 0 2560 100"
            x="0"
            y="0"
          >
          </svg>
        </div><br>

        <div class="container mx-auto px-4">
          <div class="items-center flex flex-wrap">
            <div class="w-full md:w-4/12 ml-auto mr-auto px-4">
                <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3551.549467868581!2d-52.65430982544732!3d-27.10749820136889!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94e4b45b08c31ea7%3A0xa8ed3b0ef341697a!2sEstr.%20p%2F%20O%20Ctg%2C%202499%20-%20Chapec%C3%B3%2C%20SC!5e0!3m2!1spt-BR!2sbr!4v1701140563569!5m2!1spt-BR!2sbr"
                width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
              <div class="md:pr-12">
                <h3 class="text-3xl font-semibold">Nos encontre:</h3>
                <p class="mt-4 text-lg leading-relaxed text-gray-600">
                  Conheça nosso endereço físico - rua Nilso Braun, bairro Parque das Palmeiras, linha Vitório Rosa, Chapecó-SC, CEP 89803-604.
                </p>
                <ul class="list-none mt-6">
                  <li class="py-2">
                    <div class="flex items-center">
                      <div>
                        <span
                          class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"
                          ><i class="fas fa-fingerprint"></i
                        ></span>
                      </div>
                      <div>
                        <h4 class="text-gray-600">
                          Exclusividade
                        </h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="flex items-center">
                      <div>
                        <span
                          class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"
                          ><i class="fab fa-html5"></i
                        ></span>
                      </div>
                      <div>
                        <h4 class="text-gray-600">Qualidade</h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="flex items-center">
                      <div>
                        <span
                          class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"
                          ><i class="far fa-paper-plane"></i
                        ></span>
                      </div>
                      <div>
                        <h4 class="text-gray-600">Envio rápido</h4>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div><br><br><br>

        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-center text-center mb-24">
              <div class="w-full lg:w-6/12 px-4">
                <h2 class="text-4xl font-semibold">Conheça nossa equipe</h2>
                <p class="text-lg leading-relaxed m-4 text-gray-600">
                  Proporcionando um Doce Luz!
                </p>
              </div>
            </div>
            <div class="flex flex-wrap">
              <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                <div class="px-6">
                  <img
                    alt="Camila"
                    src="{{asset('storage/imagem/camila.png')}}"
                    class="shadow-lg rounded-full max-w-full mx-auto"
                    style="max-width: 120px;"
                  />
                  <div class="pt-6 text-center">
                    <h5 class="text-xl font-bold">Camila</h5>
                    <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                      TIC
                    </p>
                    <div class="mt-6">
                      <button
                        class="bg-green-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                        type="button">
                        <i class="fab fa-whatsapp"></i></button>
                      <button
                        class="bg-orange-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                        type="button">
                        <i class="fab fa-instagram"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                <div class="px-6">
                  <img
                    alt="Daniela"
                    src="{{asset('storage/imagem/daniela.png')}}"
                    class="shadow-lg rounded-full max-w-full mx-auto"
                    style="max-width: 120px;"
                  />
                  <div class="pt-6 text-center">
                    <h5 class="text-xl font-bold">Daniela</h5>
                    <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                      Vendas
                    </p>
                    <div class="mt-6">
                      <button
                        class="bg-green-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                        type="button">
                        <i class="fab fa-whatsapp"></i></button>
                    <button
                        class="bg-orange-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                        type="button">
                        <i class="fab fa-instagram"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                <div class="px-6">
                  <img
                    alt="Danieli"
                    src="{{asset('storage/imagem/danieli.png')}}"
                    class="shadow-lg rounded-full max-w-full mx-auto"
                    style="max-width: 120px;"
                  />
                  <div class="pt-6 text-center">
                    <h5 class="text-xl font-bold">Danieli</h5>
                    <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                      Financeiro
                    </p>
                    <div class="mt-6">
                      <button
                        class="bg-green-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                        type="button">
                        <i class="fab fa-whatsapp"></i></button>
                    <button
                        class="bg-orange-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                        type="button">
                        <i class="fab fa-instagram"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                <div class="px-6">
                  <img
                    alt="Danieli"
                    src="{{asset('storage/imagem/ravi.png')}}"
                    class="shadow-lg rounded-full max-w-full mx-auto"
                    style="max-width: 120px;"
                  />
                  <div class="pt-6 text-center">
                    <h5 class="text-xl font-bold">Ravi</h5>
                    <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                      Merketing
                    </p>
                    <div class="mt-6">
                      <button
                        class="bg-green-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                        type="button">
                        <i class="fab fa-whatsapp"></i></button>
                    <button
                        class="bg-orange-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                        type="button">
                        <i class="fab fa-instagram"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </section>
<main>

    <footer class="relative bg-pink-100 pt-8 pb-6">
        <div
          class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
          style="height: 80px;"
        >
          <svg
            class="absolute bottom-0 overflow-hidden"
            xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="none"
            version="1.1"
            viewBox="0 0 2560 100"
            x="0"
            y="0"
          >
          </svg>
        </div>
        <div class="container mx-auto px-4">
            <hr class="my-6 border-gray-400" />
          <div class="flex flex-wrap">
            <div class="w-full lg:w-6/12 px-4">
              <h4 class="text-3xl font-semibold">Mantenha-nos juntos!</h4>
              <h5 class="text-lg mt-0 mb-2 text-gray-700">
                Nos encontre em todas as plataformas!
              </h5>
              <div class="mt-6">
                <button
                  class="bg-white text-blue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                  type="button"
                >
                  <i class="flex fab fa-twitter"></i></button
                ><button
                  class="bg-white text-blue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                  type="button"
                >
                  <i class="flex fab fa-facebook-square"></i></button
                ><button
                  class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                  type="button"
                >
                  <i class="flex fab fa-dribbble"></i></button
                ><button
                  class="bg-white text-gray-900 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                  type="button"
                >
                  <i class="flex fab fa-github"></i>
                </button>
              </div>
            </div>
            <div class="w-full lg:w-6/12 px-4">
              <div class="flex flex-wrap items-top mb-6">
                <div class="w-full lg:w-4/12 px-4 ml-auto">
                  <span
                    class="block uppercase text-gray-600 text-sm font-semibold mb-2"
                    >Whatsapp</span
                  >
                  <ul class="list-unstyled">
                    <li>
                      <a
                        class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                        href="https://www.creative-tim.com/presentation"
                        >Vendas</a
                      >
                    </li>
                    <li>
                      <a
                        class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                        href="https://blog.creative-tim.com"
                        >Financeiro</a
                      >
                    </li>
                    <li>
                      <a
                        class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                        href="https://www.github.com/creativetimofficial"
                        >Parcerias</a
                      >
                    </li>
                  </ul>
                </div>
                <div class="w-full lg:w-4/12 px-4">
                  <span
                    class="block uppercase text-gray-600 text-sm font-semibold mb-2"
                    >Outros links</span
                  >
                  <ul class="list-unstyled">
                    <li>
                      <a
                        class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                        href="https://github.com/creativetimofficial/argon-design-system/blob/master/LICENSE.md"
                        >Licença comercial</a
                      >
                    </li>
                    <li>
                      <a
                        class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                        href="https://creative-tim.com/terms"
                        >Termos e condições</a
                      >
                    </li>
                    <li>
                      <a
                        class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                        href="https://creative-tim.com/privacy"
                        >Política de privacidade</a
                      >
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <hr class="my-6 border-gray-400" />
          <div
            class="flex flex-wrap items-center md:justify-between justify-center">
            <div class="w-full md:w-4/12 px-4 mx-auto text-center">
              <div class="text-sm text-gray-600 font-semibold py-1">
                Copyright © 2023 Tailwind.<br>Desenvolvimento de Sistemas 2 - IFSC 2023/2
              </div>
            </div>
          </div>
        </div>
      </footer>

 @endsection


 <!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

  <link rel="shortcut icon" href="./assets/img/favicon.ico" />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="./assets/img/apple-icon.png"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css"
    />

  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: '#da373d',
          }
        }
      }
    }
  </script>
  <title>@yield('titulo') - Doce Luz</title>
</head>

<body>
    @include('base.menu')
    <div class="md:container md:mx-auto px-4">
        @yield('content')
    </div>
</body>
</html>
