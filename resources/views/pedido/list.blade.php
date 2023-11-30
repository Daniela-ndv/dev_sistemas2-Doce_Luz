@extends('base.app')
@section("titulo", 'Listagem Pedidos')
@section('content')

<div class="block p-6 bg-pink-600 border border-pink-200 rounded-lg shadow shadow-pink-200">
    <h3 class="text-2xl font-medium text-white">Pedidos</h3>
</div><br>
    <div class="flex">
        <div class="w-5/6">
            <form action="{{ route('pedido.search') }}" method="post">
                @csrf
                <p>Filtrar por: </p>
                <select name="tipo" class="data-te-select-init rounded-md w-40 border-pink-600">
                    <!--<option value="usuario_id">Usuário</option>
                    <option value="status_id">Status</option>
                    <option value="cartao_id">Cartão</option>-->
                    <option value="observacao">Observação</option>
                </select>
                <input type="text" name="valor" class="data-te-select-init rounded-md w-80 border-pink-600">
                <button
                    type="submit"
                    class="inline-block rounded border-2 border-pink-600 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-pink-600 transition duration-150 ease-in-out hover:border-pink-600 hover:bg-pink-600 hover:text-white focus:border-primary-600 focus:text-primary-600 focus:outline-none focus:ring-0 active:border-primary-700 active:text-primary-700 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10 hover:scale-105">
                    Buscar
                </button>
                <a href="{{route('pedido.index')}}">
                    <button
                    type="button"
                    class="inline-block rounded border-2 border-pink-600 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-pink-600 transition duration-150 ease-in-out hover:border-pink-600 hover:bg-pink-600 hover:text-white focus:border-primary-600 focus:text-primary-600 focus:outline-none focus:ring-0 active:border-primary-700 active:text-primary-700 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10 hover:scale-105">
                    Limpar
                    </button>
                </a>
            </form>
        </div>
        <div class="w-2/6 flex grid content-center float-right">
            <div> <br>
                <a href="{{route('pedido.report')}}">
                    <button
                    type="button"
                    class="inline-block rounded border-2 border-pink-600 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-pink-600 transition duration-150 ease-in-out hover:border-pink-600 hover:bg-pink-600 hover:text-white focus:border-primary-600 focus:text-primary-600 focus:outline-none focus:ring-0 active:border-primary-700 active:text-primary-700 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10 hover:scale-105">
                    Relatório
                    </button>
                </a>
                <a href="{{route('pedido.chart')}}">
                    <button
                    type="button"
                    class="inline-block rounded border-2 border-pink-600 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-pink-600 transition duration-150 ease-in-out hover:border-pink-600 hover:bg-pink-600 hover:text-white focus:border-primary-600 focus:text-primary-600 focus:outline-none focus:ring-0 active:border-primary-700 active:text-primary-700 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10 hover:scale-105">
                    Gráfico
                    </button>
                </a>
            </div>
        </div>

        <div class="flex grid content-left float-right"><br>
            <a href="{{route('pedido.create')}}">
                <button 
                class="inline-block rounded border-2 border-pink-600 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-pink-600 transition duration-150 ease-in-out hover:border-pink-600 hover:bg-pink-600 hover:text-white focus:border-primary-600 focus:text-primary-600 focus:outline-none focus:ring-0 active:border-primary-700 active:text-primary-700 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10 hover:scale-105">
                Cadastrar Novo
                </button>
            </a>
        </div>
    </div>


    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
            <div class="overflow-hidden">
              <table class="min-w-full text-left text-sm font-light">
                <thead class="border-b border-pink-600 font-medium dark:border-neutral-500">
                  <tr>
                    <th scope="col" class="px-6 py-4 text-pink-600">ID</th>
                    <th scope="col" class="px-6 py-4 text-pink-600">Usuário</th>
                    <th scope="col" class="px-6 py-4 text-pink-600">Produto</th>
                    <th scope="col" class="px-6 py-4 text-pink-600">Quantidade</th>
                    <th scope="col" class="px-6 py-4 text-pink-600">Forma de pagamento</th>
                    <th scope="col" class="px-6 py-4 text-pink-600">Cartão</th>
                    <th scope="col" class="px-6 py-4 text-pink-600">Status</th>
                    <th scope="col" class="px-6 py-4 text-pink-600">Observação</th>
                    <th scope="col" class="px-6 py-4 text-pink-600">Ações</th>
                  </tr>
                </thead>
                @foreach ($pedidos as $item)
                <tbody>
                  <tr class="border-b border-pink-600 transition duration-300 ease-in-out hover:bg-pink-50 dark:border-neutral-500 dark:hover:bg-neutral-600">
                    <td class="whitespace-nowrap px-6 py-4 font-medium text-pink-600">{{$item->id}}</td>
                    <td class="whitespace-nowrap px-6 py-4">{{$item->usuario->name ?? ""}}</td>
                    <td class="whitespace-nowrap px-6 py-4">{{$item->produto->nome ?? ""}}</td>
                    <td class="whitespace-nowrap px-6 py-4">{{$item->quantidade}}</td>
                    <td class="whitespace-nowrap px-6 py-4">{{$item->formaPagamento->nome ?? ""}}</td>
                    <td class="whitespace-nowrap px-6 py-4">{{$item->cartao->numeroCartao ?? ""}}</td>
                    <td class="whitespace-nowrap px-6 py-4">{{$item->status->nome ?? ""}}</td>
                    <td class="whitespace-nowrap px-6 py-4">{{$item->observacao}}</td>
                    <td class="whitespace-nowrap px-6 py-4">
                        <a href="{{route('pedido.edit', $item->id)}}">
                            <button
                            type="button"
                            class="inline-block rounded border-2 border-pink-600 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-pink-600 transition duration-150 ease-in-out hover:border-pink-600 hover:bg-pink-600 hover:text-white focus:border-primary-600 focus:text-primary-600 focus:outline-none focus:ring-0 active:border-primary-700 active:text-primary-700 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10 hover:scale-105">
                            Editar
                            </button>
                        </a>
                        <a href="{{route('pedido.destroy', $item->id)}}">
                            <button
                            onclick="return confirm('Deseja excluir o registro?')"
                            class="inline-block text-white bg-pink-600 rounded border-2 border-pink-600 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-pink-600 transition duration-150 ease-in-out hover:border-pink-600 hover:bg-pink-50 hover:text-rose-600 focus:border-primary-600 focus:text-primary-600 focus:outline-none focus:ring-0 active:border-primary-700 active:text-primary-700 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10 hover:scale-105">
                            Deletar
                            </button>
                        </a>
                    </td>
                  </tr>
                </tbody>
                @endforeach
              </table>
            </div>
          </div>
        </div>
      </div>
 @endsection
