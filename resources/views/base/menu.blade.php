@if (Route::has('login'))
      <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
        @auth
          <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
          @else
            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

          @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
          @endif
        @endauth
      </div>
  @endif


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
      </div>
    </nav>
  </header>
