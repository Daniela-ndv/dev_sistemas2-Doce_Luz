<header class="bg-white">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-7 lg:px-8" aria-label="Global">
      <div class="flex lg:flex-1">
        <a href="" class="-m-1.5 p-1.5">
          <span class="sr-only">Doce Luz</span>
          <img class="h-8 w-auto" src="{{asset('storage/imagem/doce_luz.png')}}" alt="logo Doce Luz">
        </a>
      </div>
      <div class="hidden lg:flex lg:gap-x-12 items-center justify-between">
        <a href="{{ route('index') }}" class="hover:text-blue-600">Index</a>
        <a href="{{ route('pedido.index') }}" class="hover:text-blue-600">Pedidos</a>
        <a href="{{ route('cartao.index') }}" class="hover:text-blue-600">Cartões</a>
        <a href="{{ route('produto.index') }}" class="hover:text-blue-600">Produto</a>
      </div>

      <div class="hidden lg:flex lg:flex-1 lg:justify-end">

        <!--
            <div class="relative" >
            @if (Route::has('login'))
              @auth

                <a href="{{ url('/dashboard') }}">
                    <button
                    type="button"
                    class="inline-block rounded bg-primary-100 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200">
                    {{ Auth::user()->name }}</button>
                </a>

                <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="{{ route('logout') }}">
                    <button
                    type="button"
                    onclick="event.preventDefault();
                    this.closest('form').submit();"
                    class="inline-block rounded bg-primary-100 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200">
                    Log Out</button>
                </a>
                </form>

                <a href="{{ route('profile.edit') }}">
                    <button
                    type="button"
                    class="inline-block rounded bg-primary-100 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200">
                    Perfil</button>
                </a>

                @else
                    <a href="{{ route('login') }}">
                    <button
                    type="button"
                    class="inline-block rounded bg-primary-100 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200">
                    Log in</button>
                    </a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}">
                    <button
                    type="button"
                    class="inline-block rounded bg-primary-100 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200">
                    Registre-se</button>
                    </a>
                @endif
                @endauth
            @endif
        </div>
    -->

        <div class="relative inline-block text-left">
            @if (Route::has('login'))
              @auth


            <div>
              <button id="dropdownDefaultButton" type="button" class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50" id="menu-button" aria-expanded="true" aria-haspopup="true">
                Menu
                <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                </svg>
              </button>
            </div>

            <div class="absolute right-0 z-10 mt-2 w-56 rounded-md bg-white shadow-lg focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1" >
              <div class="py-1" role="none">

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ route('logout') }}" class="block hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        <button
                        type="button"
                        role="menuitem"
                        onclick="event.preventDefault();
                        this.closest('form').submit();"
                        class="text-gray-700 block px-4 py-2 text-sm">
                        Log Out</button>
                    </a>
                </form>

                <a href="{{ route('profile.edit') }}" class="block hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                    <button
                    type="button"
                    role="menuitem"
                    class="text-gray-700 block px-4 py-2 text-sm">
                    Perfil</button>
                </a>

              </div>
            </div>
            @else
                    <a href="{{ route('login') }}">
                    <button
                    type="button"
                    class="inline-block rounded bg-primary-100 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200">
                    Log in</button>
                    </a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}">
                    <button
                    type="button"
                    class="inline-block rounded bg-primary-100 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200">
                    Registre-se</button>
                    </a>
                @endif
                @endauth
            @endif
          </div>

      </div>
    </nav>
  </header>
