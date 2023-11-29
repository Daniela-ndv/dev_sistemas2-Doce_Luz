@extends('base.app')
@section('titulo', 'Formulário Produtos')
@section('content')

    @php
        if (!empty($produto->id)) {
            $route = route('produto.update', $produto->id);
        } else {
            $route = route('produto.store');
        }
    @endphp

    <div class="mx-auto py-12 divide-y md:max-w-4xl">
        <div class="">
        <h3 class="text-2xl font-medium pb-4 text-pink-600">Formulário de Produtos</h3>

            <form action="{{ $route }}" method="post" enctype="multipart/form-data"
                class="bg-white shadow-md rounded px-8 pt-6 pb-6 mb-4">
                @csrf <!-- cria um hash de segurança -->

                @if (!empty($produto->id))
                    @method('PUT')
                @endif

                <input type="hidden" name="id"
                    value="@if(!empty($produto->id)){{ $produto->id }}@elseif(!empty(old('id'))){{ old('id')}}@else{{ '' }}@endif">

                <label class="block">
                    <span class="text-pink-600">Nome do produto</span>
                    <input type="text" name="nome" placeholder=" "
                        class="mt-0 block w-full px-0.5 border-0 border-b-2 border-pink-200 focus:ring-0 focus:border-black"
                        value="@if(!empty($produto->nome)){{$produto->nome}}@elseif(!empty(old('nome'))){{ old('nome') }}@else{{ '' }}@endif">
                </label><br><br>

                <div class="flex">
                    <div class="w-1/2 mr-2">
                    <label class="block">
                            <span class="text-pink-600">Tipo ID</span>
                            <select name="tipo_id" id="" class="mt-0 block w-full px-0.5 border-0 border-b-2 border-pink-200 focus:ring-0 focus:border-black">
                                @foreach ($tipo_id as $item)
                                    <option value="{{ $item->id }}"
                                        @if(!empty($produto->id)){{ ( $item->id == $produto->tipo_id) ? 'selected' : '' }}
                                        @else{{ '' }}@endif >{{$item->nome}}
                                    </option>
                                @endforeach
                            </select>
                        </label><br><br>
                    </div>
                    <div class="w-1/2 mr-2">
                        <label class="block">
                            <span class="text-pink-600">Código</span>
                            <input type="text" name="codigo" placeholder=" "
                                class="mt-0 block w-full px-0.5 border-0 border-b-2 border-pink-200 focus:ring-0 focus:border-black"
                                value="@if (!empty($produto->codigo)) {{ $produto->codigo }}@elseif(!empty(old('codigo'))){{ old('codigo') }}@else{{ '' }} @endif">
                        </label><br><br>
                    </div>
                    <div class="w-1/2 mr-2">
                        <label class="block">
                            <span class="text-pink-600">Valor Custo</span>
                            <input type="text" name="valorCusto" placeholder=" "
                                class="mt-0 block w-full px-0.5 border-0 border-b-2 border-pink-200 focus:ring-0 focus:border-black"
                                value="@if (!empty($produto->valorCusto)) {{ $produto->valorCusto }}@elseif(!empty(old('valorCusto'))){{ old('valorCusto') }}@else{{ '' }} @endif">
                        </label><br><br>
                    </div>
                    <div class="w-1/2 mr-2">
                        <label class="block">
                            <span class="text-pink-600">Valor Venda</span>
                            <input type="text" name="valorVenda" placeholder=" "
                                class="mt-0 block w-full px-0.5 border-0 border-b-2 border-pink-200 focus:ring-0 focus:border-black"
                                value="@if (!empty($produto->valorVenda)) {{ $produto->valorVenda }}@elseif(!empty(old('valorVenda'))){{ old('valorVenda') }}@else{{ '' }} @endif">
                        </label><br><br>
                    </div>
                </div><br><br>

                <label class="block">
                    <span class="text-pink-600">Descrição</span>
                    <input type="text" name="descricao" placeholder=" "
                        class="mt-0 block w-full px-0.5 border-0 border-b-2 border-pink-200 focus:ring-0 focus:border-black"
                        value="@if (!empty($produto->descricao)) {{ $produto->descricao }}@elseif(!empty(old('descricao'))){{ old('descricao') }}@else{{ '' }} @endif">
                </label><br><br>

                @php
                $nome_imagem = !empty($produto->imagem) ? $produto->imagem : 'imagem/sem_imagem.jpg';
                @endphp
                <div>
                    <img class="h-40 w-40 object-cover" src="/storage/{{ $nome_imagem }}" width="300px"
                        alt="imagem">
                    <br>
                    <input
                        class="block w-full text-sm text-slate-500
                                file:mr-4 file:py-2 file:px-4
                                file:border-0
                                file:text-sm file:font-semibold
                                file:bg-pink-50 file:text-pink-700
                                hover:file:bg-pink-100"
                        type="file" name="imagem"><br>
                </div>
                <br>

                <button class="rounded-2xl text-pink-100 bg-pink-600 px-4 py-2 w-32 font-bold hover:bg-pink-700 hover:text-pink-100 hover:scale-105"
                    type="submit">Salvar</button>
                <a href="{{ route('produto.index') }}"><button type="button"
                class="rounded-2xl text-pink-600 bg-pink-200 px-4 py-2 w-32 font-bold hover:bg-pink-700 hover:text-pink-100 hover:scale-105">Voltar</button></a>
            </form>
        </div>
    </div>
@endsection
