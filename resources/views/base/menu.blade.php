<header class="bg-white">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-7 lg:px-8" aria-label="Global">
      <div class="flex lg:flex-1">
        <a href="" class="-m-1.5 p-1.5">
          <span class="sr-only">Doce Luz</span>
          <img class="h-8 w-auto" src="doce_luz.PNG" alt="logo Doce Luz">
        </a>
      </div>
      <div class="hidden lg:flex lg:gap-x-12 items-center justify-between">
        <a href="{{ route('pedido.index') }}" class="hover:text-blue-600">Index</a>
        <a href="{{ route('pedido.index') }}" class="hover:text-blue-600">Pedidos</a>
        <a href="{{ route('cartao.index') }}" class="hover:text-blue-600">Cartões</a>
        <a href="{{ route('produto.index') }}" class="hover:text-blue-600">Produto</a>
      </div>
      <div class="hidden lg:flex lg:flex-1 lg:justify-end">
      </div>
    </nav>
  </header>
