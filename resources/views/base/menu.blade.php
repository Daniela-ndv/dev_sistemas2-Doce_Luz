<header class="bg-white">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-7 lg:px-8" aria-label="Global">
      <div class="flex lg:flex-1">
        <a href="" class="-m-1.5 p-1.5">
          <span class="sr-only">Doce Luz</span>
          <img class="h-8 w-auto" src="doce_luz.PNG" alt="logo Doce Luz">
        </a>
      </div>
      <div class="hidden lg:flex lg:gap-x-12 items-center justify-between">
        <a href="{{ route('index') }}" class="hover:text-blue-600">Index</a>
        <a href="{{ route('pedido.index') }}" class="hover:text-blue-600">Pedidos</a>
        <a href="{{ route('cartao.index') }}" class="hover:text-blue-600">Cartões</a>
        <a href="{{ route('produto.index') }}" class="hover:text-blue-600">Produto</a>
      </div>
      <div class="hidden lg:flex lg:flex-1 lg:justify-end">

        <div class="relative" >
              @if (Route::has('login'))
                @auth
                <!--
                <div class="relative" data-te-dropdown-ref>
                <a href="{{ url('/dashboard') }}">
                  <button
                    class="flex items-center whitespace-nowrap rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] motion-reduce:transition-none dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                    type="button"
                    id="dropdownMenuButton1"
                    data-te-dropdown-toggle-ref
                    aria-expanded="false"
                    data-te-ripple-init
                    data-te-ripple-color="light">
                    {{ Auth::user()->name }}
                    <span class="ml-2 w-2">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                        class="h-5 w-5">
                        <path
                          fill-rule="evenodd"
                          d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                          clip-rule="evenodd" />
                      </svg>
                    </span>
                  </button>
                </a>
                  <ul
                    class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
                    aria-labelledby="dropdownMenuButton1"
                    data-te-dropdown-menu-ref>
                    <li>
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
                    </li>
                    <li>
                      <a
                        class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
                        href="{{ route('profile.edit') }}"
                        data-te-dropdown-item-ref
                        >Perfil</a>
                    </li>
                  </ul>
                </div>
          -->
              
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

      </div>
    </nav>
  </header>
