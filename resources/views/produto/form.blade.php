@extends('base.app')
@section('titulo', 'Formulário Produtos')
@section('content')

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    @php
        if (!empty($produto->id)) {
            $route = route('produto.update', $produto->id);
        } else {
            $route = route('produto.store');
        }
    @endphp

    <div class="mx-auto py-12 divide-y md:max-w-4xl">
        <div class="py-12">
            <h3 class="pt-4 text-2xl font-medium py-4">Formulário de Produtos</h3>

            <form action="{{ $route }}" method="post" enctype="multipart/form-data"
                class="bg-white shadow-md rounded px-8 pt-6 pb-6 mb-4">
                @csrf <!-- cria um hash de segurança -->

                @if (!empty($produto->id))
                    @method('PUT')
                @endif

                <input type="hidden" name="id"
                    value="@if(!empty($produto->id)){{ $produto->id }}@elseif(!empty(old('id'))){{ old('id')}}@else{{ '' }}@endif">

                <label class="block">
                    <span class="text-gray-700">Nome do produto</span>
                    <input type="text" name="nome" placeholder=" "
                        class="mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black"
                        value="@if(!empty($produto->nome)){{$produto->nome}}@elseif(!empty(old('nome'))){{ old('nome') }}@else{{ '' }}@endif">
                </label><br><br>

                <div class="flex">
                    <div class="w-1/2 mr-2">
                    <label class="block">
                            <span>Tipo ID</span>
                            <select name="tipo_id" id="" class="mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black">
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
                            <span class="text-gray-700">Código</span>
                            <input type="text" name="codigo" placeholder=" "
                                class="mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black"
                                value="@if (!empty($produto->codigo)) {{ $produto->codigo }}@elseif(!empty(old('codigo'))){{ old('codigo') }}@else{{ '' }} @endif">
                        </label><br><br>
                    </div>
                    <div class="w-1/2 mr-2">
                        <label class="block">
                            <span class="text-gray-700">Valor Custo</span>
                            <input type="text" name="valorCusto" placeholder=" "
                                class="mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black"
                                value="@if (!empty($produto->valorCusto)) {{ $produto->valorCusto }}@elseif(!empty(old('valorCusto'))){{ old('valorCusto') }}@else{{ '' }} @endif">
                        </label><br><br>
                    </div>
                    <div class="w-1/2 mr-2">
                        <label class="block">
                            <span class="text-gray-700">Valor Venda</span>
                            <input type="text" name="valorVenda" placeholder=" "
                                class="mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black"
                                value="@if (!empty($produto->valorVenda)) {{ $produto->valorVenda }}@elseif(!empty(old('valorVenda'))){{ old('valorVenda') }}@else{{ '' }} @endif">
                        </label><br><br>
                    </div>
                </div><br><br>

                <label class="block">
                    <span class="text-gray-700">Descrição</span>
                    <input type="text" name="descricao" placeholder=" "
                        class="mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black"
                        value="@if (!empty($produto->descricao)) {{ $produto->descricao }}@elseif(!empty(old('descricao'))){{ old('descricao') }}@else{{ '' }} @endif">
                </label><br><br>

                <label class="block">
                    <span class="text-gray-700">Imagem</span>
                    <input type="file" name="imagem" accept="image/*">
                </label><br><br>

                <button class="rounded-2xl bg-blue-300 px-4 py-2 w-32 font-bold hover:bg-blue-400"
                    type="submit">Salvar</button>
                <a href="{{ route('produto.index') }}"><button type="button"
                        class="rounded-2xl bg-gray-300 px-4 py-2 w-32 font-bold hover:bg-gray-400">Voltar</button></a>
            </form>
        </div>
    </div>
@endsection
