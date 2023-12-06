@extends('base.app')
@section('titulo', 'Listagem Produtos')

@section('content')
<div class="block p-6 bg-pink-600 border border-pink-200 rounded-lg shadow shadow-pink-200">
    <h3 class="text-2xl font-medium text-white">Produtos</h3>
</div><br>
<div class="flex">
    <div class="w-5/6">
        <form action="{{ route('produto.search') }}" method="post">
            @csrf
            <p>Filtrar por: </p>
            <select name="tipo" class="data-te-select-init rounded-md w-40 border-pink-600">
                <option value="nome">Nome</option>
                <option value="codigo">Código</option>
            </select>
            <input type="text" name="valor" class="data-te-select-init rounded-md w-80 border-pink-600">
            <button type="submit" class="inline-block rounded border-2 border-pink-600 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-pink-600 transition duration-150 ease-in-out hover:border-pink-600 hover:bg-pink-600 hover:text-white focus:border-primary-600 focus:text-primary-600 focus:outline-none focus:ring-0 active:border-primary-700 active:text-primary-700 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10 hover:scale-105">
                Buscar
            </button>
            <a href="{{ route('produto.index') }}">
                <button type="button" class="inline-block rounded border-2 border-pink-600 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-pink-600 transition duration-150 ease-in-out hover:border-pink-600 hover:bg-pink-600 hover:text-white focus:border-primary-600 focus:text-primary-600 focus:outline-none focus:ring-0 active:border-primary-700 active:text-primary-700 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10 hover:scale-105">
                    Limpar
                </button>
            </a>
        </form>
    </div>
    <div class="w-1/6 flex grid content-center float-right">
        <div>
            <br>
            <a href="{{ route('produto.create') }}">
                <button class="inline-block rounded border-2 border-pink-600 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-pink-600 transition duration-150 ease-in-out hover:border-pink-600 hover:bg-pink-600 hover:text-white focus:border-primary-600 focus:text-primary-600 focus:outline-none focus:ring-0 active:border-primary-700 active:text-primary-700 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10 hover:scale-105">
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
                            <th scope="col" class="px-6 py-4 text-pink-600">Nome</th>
                            <th scope="col" class="px-6 py-4 text-pink-600">Tipo</th>
                            <th scope="col" class="px-6 py-4 text-pink-600">Código</th>
                            <th scope="col" class="px-6 py-4 text-pink-600">Valor Custo</th>
                            <th scope="col" class="px-6 py-4 text-pink-600">Valor Venda</th>
                            <th scope="col" class="px-6 py-4 text-pink-600">Descrição</th>
                            <th scope="col" class="px-6 py-4 text-pink-600">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produtos as $item)
                        @php
                        $nome_imagem = !empty($item->imagem) ? $item->imagem : 'imagem/sem_imagem.jpg';
                        if(File::exists($nome_imagem)) {
                        $nome_imagem = "/public/storage/".$nome_imagem;
                        }else{
                        $nome_imagem = "/storage/".$nome_imagem;
                        }
                        //var_dump($nome_imagem);
                        @endphp
                        <tr class="border-b border-pink-600 transition duration-300 ease-in-out hover:bg-pink-50 dark:border-pink-500 dark:hover:bg-pink-600">
                            <td class="whitespace-nowrap px-6 py-4 font-medium text-pink-600">{{ $item->id }}</td>
                            <td class="h-32 w-32 object-cover"><img src="{{ $nome_imagem }}" width="100px" alt="imagem"></td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $item->nome }}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $item->tipo_produto->nome ?? "" }}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $item->codigo }}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $item->valorCusto }}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $item->valorVenda }}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $item->descricao }}</td>
                            <td class="whitespace-nowrap px-6 py-4">
                                <a href="{{ route('produto.edit', $item->id) }}">
                                    <button type="button" class="inline-block rounded border-2 border-pink-600 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-pink-600 transition duration-150 ease-in-out hover:border-pink-600 hover:bg-pink-600 hover:text-white focus:border-primary-600 focus:text-primary-600 focus:outline-none focus:ring-0 active:border-primary-700 active:text-primary-700 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10 hover:scale-105">
                                        Editar
                                    </button>
                                </a>
                                <a href="{{ route('produto.destroy', $item->id) }}">
                                    <button onclick="return confirm('Deseja excluir o registro?')" class="inline-block text-white bg-pink-600 rounded border-2 border-pink-600 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-pink-600 transition duration-150 ease-in-out hover:border-pink-600 hover:bg-pink-50 hover:text-rose-600 focus:border-primary-600 focus:text-primary-600 focus:outline-none focus:ring-0 active:border-primary-700 active:text-primary-700 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10 hover:scale-105">
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