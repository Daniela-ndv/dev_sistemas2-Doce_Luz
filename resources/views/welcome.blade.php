
@section("titulo", 'Index')
@section('content')

    <main>
      <div
        class="relative pt-16 pb-32 flex content-center items-center justify-center"
        style="min-height: 85vh;">
        <div
          class="absolute top-0 w-full h-full bg-center bg-cover"
          style='background-image: url("data:image/jpeg;base64,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");'
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
                        <img src="resources/views/brigadeiro.png">
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
                        <img src="resources/views/vela.png">
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
                        <img src="resources/views/dinheiro.png">
                      </i>
                    </div>
                    <h6 class="text-xl font-semibold">Custo</h6>
                    <p class="mt-2 mb-4 text-gray-600">
                      Produtos orgânicos, veganos e personalizados com <b>ótimo custo-benefício</b>! <br>Frete grátis para Chapecó-SC.
                    </p>
                  </div>
                </div>
            </div>
          </div>

          <div class="flex flex-wrap items-center mt-32">
            <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
              <div
                class="text-gray-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-gray-100"
              >
                <i class="fas fa-user-friends text-xl"></i>
              </div>
              <h3 class="text-3xl mb-2 font-semibold leading-normal">
                Working with us is a pleasure
              </h3>
              <p
                class="text-lg font-light leading-relaxed mt-4 mb-4 text-gray-700"
              >
                Don't let your uses guess by attaching tooltips and popoves to
                any element. Just make sure you enable them first via
                JavaScript.
              </p>
              <p
                class="text-lg font-light leading-relaxed mt-0 mb-4 text-gray-700"
              >
                The kit comes with three pre-built pages to help you get started
                faster. You can change the text and images and you're good to
                go. Just make sure you enable them first via JavaScript.
              </p>
              <a
                href="https://www.creative-tim.com/learning-lab/tailwind-starter-kit#/presentation"
                class="font-bold text-gray-800 mt-8"
                >Check Tailwind Starter Kit!</a
              >
            </div>
            <div class="w-full md:w-4/12 px-4 mr-auto ml-auto">
              <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-pink-600"
              >
                <img
                  alt="..."
                  src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1051&amp;q=80"
                  class="w-full align-middle rounded-t-lg"
                />
                <blockquote class="relative p-8 mb-4">
                  <svg
                    preserveAspectRatio="none"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 583 95"
                    class="absolute left-0 w-full block"
                    style="height: 95px; top: -94px;"
                  >
                  </svg>
                  <h4 class="text-xl font-bold text-white">
                    Top Notch Services
                  </h4>
                  <p class="text-md font-light mt-2 text-white">
                    The Arctic Ocean freezes every winter and much of the
                    sea-ice then thaws every summer, and that process will
                    continue whatever happens.
                  </p>
                </blockquote>
              </div>
            </div>
          </div>
        </div><br><br>

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
          <div class="items-center flex flex-wrap">
            <div class="w-full md:w-4/12 ml-auto mr-auto px-4">
              <img
                alt="..."
                class="max-w-full rounded-lg shadow-lg"
                src="https://images.unsplash.com/photo-1555212697-194d092e3b8f?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=634&amp;q=80"
              />
            </div>
            <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
              <div class="md:pr-12">
                <div
                  class="text-pink-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-pink-300"
                >
                  <i class="fas fa-rocket text-xl"></i>
                </div>
                <h3 class="text-3xl font-semibold">A growing company</h3>
                <p class="mt-4 text-lg leading-relaxed text-gray-600">
                  The extension comes with three pre-built pages to help you get
                  started faster. You can change the text and images and you're
                  good to go.
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
                          Carefully crafted components
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
                        <h4 class="text-gray-600">Amazing page examples</h4>
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
                        <h4 class="text-gray-600">Dynamic components</h4>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div><br><br>

        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-center text-center mb-24">
              <div class="w-full lg:w-6/12 px-4">
                <h2 class="text-4xl font-semibold">Here are our heroes</h2>
                <p class="text-lg leading-relaxed m-4 text-gray-600">
                  According to the National Oceanic and Atmospheric
                  Administration, Ted, Scambos, NSIDClead scentist, puts the
                  potentially record maximum.
                </p>
              </div>
            </div>
            <div class="flex flex-wrap">
              <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                <div class="px-6">
                  <img
                    alt="..."
                    src="./assets/img/team-1-800x800.jpg"
                    class="shadow-lg rounded-full max-w-full mx-auto"
                    style="max-width: 120px;"
                  />
                  <div class="pt-6 text-center">
                    <h5 class="text-xl font-bold">Ryan Tompson</h5>
                    <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                      Web Developer
                    </p>
                    <div class="mt-6">
                      <button
                        class="bg-blue-400 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                        type="button"
                      >
                        <i class="fab fa-twitter"></i></button
                      ><button
                        class="bg-blue-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                        type="button"
                      >
                        <i class="fab fa-facebook-f"></i></button
                      ><button
                        class="bg-pink-500 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                        type="button"
                      >
                        <i class="fab fa-dribbble"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                <div class="px-6">
                  <img
                    alt="..."
                    src="./assets/img/team-2-800x800.jpg"
                    class="shadow-lg rounded-full max-w-full mx-auto"
                    style="max-width: 120px;"
                  />
                  <div class="pt-6 text-center">
                    <h5 class="text-xl font-bold">Romina Hadid</h5>
                    <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                      Marketing Specialist
                    </p>
                    <div class="mt-6">
                      <button
                        class="bg-red-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                        type="button"
                      >
                        <i class="fab fa-google"></i></button
                      ><button
                        class="bg-blue-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                        type="button"
                      >
                        <i class="fab fa-facebook-f"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                <div class="px-6">
                  <img
                    alt="..."
                    src="./assets/img/team-3-800x800.jpg"
                    class="shadow-lg rounded-full max-w-full mx-auto"
                    style="max-width: 120px;"
                  />
                  <div class="pt-6 text-center">
                    <h5 class="text-xl font-bold">Alexa Smith</h5>
                    <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                      UI/UX Designer
                    </p>
                    <div class="mt-6">
                      <button
                        class="bg-red-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                        type="button"
                      >
                        <i class="fab fa-google"></i></button
                      ><button
                        class="bg-blue-400 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                        type="button"
                      >
                        <i class="fab fa-twitter"></i></button
                      ><button
                        class="bg-gray-800 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                        type="button"
                      >
                        <i class="fab fa-instagram"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                <div class="px-6">
                  <img
                    alt="..."
                    src="./assets/img/team-4-470x470.png"
                    class="shadow-lg rounded-full max-w-full mx-auto"
                    style="max-width: 120px;"
                  />
                  <div class="pt-6 text-center">
                    <h5 class="text-xl font-bold">Jenna Kardi</h5>
                    <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                      Founder and CEO
                    </p>
                    <div class="mt-6">
                      <button
                        class="bg-pink-500 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                        type="button"
                      >
                        <i class="fab fa-dribbble"></i></button
                      ><button
                        class="bg-red-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                        type="button"
                      >
                        <i class="fab fa-google"></i></button
                      ><button
                        class="bg-blue-400 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                        type="button"
                      >
                        <i class="fab fa-twitter"></i></button
                      ><button
                        class="bg-gray-800 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                        type="button"
                      >
                        <i class="fab fa-instagram"></i>
                      </button>
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
