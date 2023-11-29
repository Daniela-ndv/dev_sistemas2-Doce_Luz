<header class="bg-white">
  <nav class="mx-auto flex max-w-7xl items-center justify-between p-7 lg:px-8" aria-label="Global">
    <div class="flex lg:flex-1">
      <a href="" class="-m-1.5 p-1.5">
        <span class="sr-only">Doce Luz</span>
        <img class="h-8 w-auto" src="{{asset('storage/imagem/doce_luz.png')}}" alt="logo Doce Luz">
      </a>
    </div>
    <div class="hidden lg:flex lg:gap-x-12 items-center justify-between">
      <a href="{{ route('index') }}" class="font-semibold leading-6 text-pink-600 hover:text-pink-300">Index</a>
      <a href="{{ route('pedido.index') }}" class="font-semibold leading-6 text-pink-600 hover:text-pink-300">Pedidos</a>
      <a href="{{ route('cartao.index') }}" class="font-semibold leading-6 text-pink-600 hover:text-pink-300">Cartões</a>
      <a href="{{ route('produto.index') }}" class="font-semibold leading-6 text-pink-600 hover:text-pink-300">Produto</a>
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
        <button id="dropdown-button" class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium text-pink-600 bg-white border border-pink-600 hover:bg-pink-600 hover:bg-opacity-20 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-pink-100 focus:ring-pink-600 focus:ring-opacity-30">
          {{ Auth::user()->name }}
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2 -mr-1" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M6.293 9.293a1 1 0 011.414 0L10 11.586l2.293-2.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </button>
        <div id="dropdown-menu" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 ">
          <div class="py-2 p-2" role="menu" aria-orientation="vertical" aria-labelledby="dropdown-button">
            <a class="flex block rounded-md px-4 py-2 text-sm text-pink-600 hover:bg-pink-600 hover:bg-opacity-20 active:bg-pink-100 cursor-pointer" role="menuitem" href="{{url('profile')}}">
              <!--<i class="fa-regular fa-user pr-2 pt-1"></i>--> Perfil
            </a>
            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <a class="flex block rounded-md px-4 py-2 text-sm text-pink-600 hover:bg-pink-600 hover:bg-opacity-20 active:bg-pink-100 cursor-pointer" role="menuitem" href="route('logout')" onclick="event.preventDefault();
                                  this.closest('form').submit();">
                <!--<i class="fa-solid fa-arrow-right-from-bracket pr-2 pt-1"></i>-->
                {{ __('Sair') }}
              </a>
            </form>
          </div>
        </div>
        @else
        <a href="{{ route('login') }}">
          <button type="button" class="inline-block rounded bg-primary-100 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200">
            Log in</button>
        </a>
        @if (Route::has('register'))
        <a href="{{ route('register') }}">
          <button type="button" class="inline-block rounded bg-primary-100 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200">
            Registre-se</button>
        </a>
        @endif
        @endauth
        @endif
      </div>
      <script>
        const dropdownButton = document.getElementById('dropdown-button');
        const dropdownMenu = document.getElementById('dropdown-menu');
        let isDropdownOpen = true; // Set to true to open the dropdown by default, false to close it by default

        // Function to toggle the dropdown
        function toggleDropdown() {
          isDropdownOpen = !isDropdownOpen;
          if (isDropdownOpen) {
            dropdownMenu.classList.remove('hidden');
          } else {
            dropdownMenu.classList.add('hidden');
          }
        }

        // Initialize the dropdown state
        toggleDropdown();

        // Toggle the dropdown when the button is clicked
        dropdownButton.addEventListener('click', toggleDropdown);

        // Close the dropdown when clicking outside of it
        window.addEventListener('click', (event) => {
          if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
            dropdownMenu.classList.add('hidden');
            isDropdownOpen = false;
          }
        });
      </script>
    </div>
  </nav>
</header>