@extends('base.app')
@section("titulo", 'Listagem Cartões')
@section('content')

<div class="block p-6 bg-pink-600 border border-pink-200 rounded-lg shadow shadow-pink-200">
    <h3 class="text-2xl font-medium text-white">Cartões</h3> 
</div><br>
    <div class="flex">
        <div class="w-5/6">
            <form action="{{ route('cartao.search') }}" method="post">
                @csrf
                <p>Filtrar por: </p>
                <select name="tipo" class="data-te-select-init rounded-md w-40 border-pink-600">
                    <option value="nomeTitular">Titular</option>
                    <option value="numeroCartao">N° cartão</option>
                </select>
                <input type="text" name="valor" class="data-te-select-init rounded-md w-80 border-pink-600">
                <button
                    type="submit"
                    class="inline-block rounded border-2 border-pink-600 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-pink-600 transition duration-150 ease-in-out hover:border-pink-600 hover:bg-pink-600 hover:text-white focus:border-primary-600 focus:text-primary-600 focus:outline-none focus:ring-0 active:border-primary-700 active:text-primary-700 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10 hover:scale-105">
                    Buscar
                </button>
                <a href="{{route('cartao.index')}}">
                    <button
                    type="button"
                    class="inline-block rounded border-2 border-pink-600 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-pink-600 transition duration-150 ease-in-out hover:border-pink-600 hover:bg-pink-600 hover:text-white focus:border-primary-600 focus:text-primary-600 focus:outline-none focus:ring-0 active:border-primary-700 active:text-primary-700 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10 hover:scale-105">
                    Limpar
                    </button>
                </a>
            </form>
        </div>
        <div class="w-1/6 flex grid content-center float-right">
            <div>
                <br>
                <a href="{{route('cartao.create')}}">
                    <button
                    class="inline-block rounded border-2 border-pink-600 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-pink-600 transition duration-150 ease-in-out hover:border-pink-600 hover:bg-pink-600 hover:text-white focus:border-primary-600 focus:text-primary-600 focus:outline-none focus:ring-0 active:border-primary-700 active:text-primary-700 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10 hover:scale-105">
                    Cadastrar Novo
                    </button>
                </a>
            </div>
        </div>
    </div>

    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
            <div class="overflow-hidden">
              <table class="min-w-full text-left text-sm font-light">
                <thead class="border-b border-pink-600 font-medium dark:border-pink-500">
                  <tr>
                    <th scope="col" class="px-6 py-4 text-pink-600">ID</th>
                    <th scope="col" class="px-6 py-4 text-pink-600">Imagem</th>
                    <th scope="col" class="px-6 py-4 text-pink-600">Tipo</th>
                    <th scope="col" class="px-6 py-4 text-pink-600">Usuário ID</th>
                    <th scope="col" class="px-6 py-4 text-pink-600">Nome titular</th>
                    <th scope="col" class="px-6 py-4 text-pink-600">N° cartão</th>
                    <th scope="col" class="px-6 py-4 text-pink-600">Data validade</th>
                    <th scope="col" class="px-6 py-4 text-pink-600">Código segurança</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($cartaos as $item)
                @php
                    $nome_imagem = !empty($item->imagem) ? $item->imagem : 'sem_imagem.jpg';
                @endphp
                  <tr class="border-b border-pink-600 transition duration-300 ease-in-out hover:bg-pink-50 dark:border-pink-500 dark:hover:bg-pink-600">
                    <td class="whitespace-nowrap px-6 py-4 font-medium text-pink-600">{{$item->id}}</td>
                    <td class="whitespace-nowrap h-32 w-32 object-cover"><img src="/storage/{{ $nome_imagem }}"
                        width="120px" alt="imagem"></td>
                    <td class="whitespace-nowrap px-6 py-4">{{$item->tipo_cartao->nome ?? ""}}</td>
                    <td class="whitespace-nowrap px-6 py-4">{{$item->usuario->name ?? ""}}</td>
                    <td class="whitespace-nowrap px-6 py-4">{{$item->nomeTitular}}</td>
                    <td class="whitespace-nowrap px-6 py-4">{{$item->numeroCartao}}</td>
                    <td class="whitespace-nowrap px-6 py-4">{{$item->dataValidade}}</td>
                    <td class="whitespace-nowrap px-6 py-4">{{$item->codigoSeguranca}}</td>
                    <td class="whitespace-nowrap px-6 py-4">
                        <a href="{{route('cartao.edit', $item->id)}}">
                            <button
                            type="button"
                            class="inline-block rounded border-2 border-pink-600 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-pink-600 transition duration-150 ease-in-out hover:border-pink-600 hover:bg-pink-600 hover:text-white focus:border-primary-600 focus:text-primary-600 focus:outline-none focus:ring-0 active:border-primary-700 active:text-primary-700 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10 hover:scale-105">
                            Editar
                            </button>
                        </a>
                        <a href="{{route('cartao.destroy', $item->id)}}">
                            <button
                            onclick="return confirm('Deseja excluir o registro?')"
                            class="inline-block text-white bg-pink-600 rounded border-2 border-pink-600 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-pink-600 transition duration-150 ease-in-out hover:border-pink-600 hover:bg-pink-50 hover:text-rose-600 focus:border-primary-600 focus:text-primary-600 focus:outline-none focus:ring-0 active:border-primary-700 active:text-primary-700 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10 hover:scale-105">
                            Deletar
                            </button>
                        </a>
                    </td>
                  </tr>
                @endforeach
            </tbody>

              </table>
            </div>
          </div>
        </div>
      </div>
 @endsection
