@extends('base.app')
@section("titulo", 'Formulário Cartões')
@section('content')


    @php
        if(!empty($cartao->id)){
            $route = route('cartao.update', $cartao->id);
        } else{
            $route = route('cartao.store');
        }
    @endphp

    <div class="mx-auto py-12 divide-y md:max-w-4xl">
        <div class="">
        <h3 class="text-2xl font-medium pb-4 text-pink-600">Formulário de Cartões</h3>

        <form action="{{ $route }}" method="post" enctype="multipart/form-data" class="bg-white shadow-md rounded px-8 pt-6 pb-6 mb-4">
            @csrf <!-- cria um hash de segurança -->

            @if (!empty($cartao->id))
                @method('PUT')
            @endif

            <input type="hidden" name="id" value="@if (!empty($cartao->id)){{$cartao->id}}@elseif(!empty(old('id'))){{old('id')}}@else{{''}}@endif">

            <label class="block">
                <span class="text-pink-700">Nome do titular</span>
                <input type="text" name="nomeTitular" placeholder=" " class="mt-0 block w-full px-0.5 border-0 border-b-2 border-pink-200 focus:ring-0 focus:border-black"
                value="@if(!empty($cartao->nomeTitular)){{$cartao->nomeTitular}}@elseif(!empty(old('nomeTitular'))){{old('nomeTitular')}}@else{{''}}@endif">
            </label><br><br>

            @php
                $nome_imagem = !empty($cartao->imagem) ? $cartao->imagem : 'imagem/sem_imagem.jpg';
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

            <div class="flex">
                <div class="w-1/2 mr-2">
                    <label class="block">
                        <span class="text-pink-700">N° cartão</span>
                        <input type="number" name="numeroCartao" placeholder=" " class="mt-0 block w-full px-0.5 border-0 border-b-2 border-pink-200 focus:ring-0 focus:border-black"
                        value="@if(!empty($cartao->numeroCartao)){{$cartao->numeroCartao}}@elseif(!empty(old('numeroCartao'))){{old('numeroCartao')}}@else{{''}}@endif">
                    </label><br><br>
                </div>
                <div class="w-1/2 mr-2">
                    <label class="block">
                        <span class="text-pink-700">Data de validade</span>
                        <input type="date" name="dataValidade" placeholder=" " class="mt-0 block w-full px-0.5 border-0 border-b-2 border-pink-200 focus:ring-0 focus:border-black"
                        value="@if(!empty($cartao->dataValidade)){{$cartao->dataValidade}}@elseif(!empty(old('dataValidade'))){{old('dataValidade')}}@else{{''}}@endif">
                    </label><br><br>
                </div>
                <div class="w-1/2 mr-2">
                    <label class="block">
                        <span class="text-pink-700">Código segurança</span>
                        <input type="number" name="codigoSeguranca" placeholder=" " class="mt-0 block w-full px-0.5 border-0 border-b-2 border-pink-200 focus:ring-0 focus:border-black"
                        value="@if(!empty($cartao->codigoSeguranca)){{$cartao->codigoSeguranca}}@elseif(!empty(old('codigoSeguranca'))){{old('codigoSeguranca')}}@else{{''}}@endif">
                    </label><br><br>
                </div>
            </div><br><br>

            <div class="flex">
                <div class="w-1/2 mr-2">
                    <label class="block">
                        <span>Tipo cartão</span>
                        <select name="tipo_id" id="" class="mt-0 block w-full px-0.5 border-0 border-b-2 border-pink-200 focus:ring-0 focus:border-black">
                            @foreach ($pagamento as $item)
                                <option value="{{ $item->id }}"
                                    @if(!empty($cartao->id)){{ ( $item->id == $cartao->tipo_id) ? 'selected' : '' }}
                                    @else{{ '' }}@endif >{{$item->nome}}
                                </option>
                            @endforeach
                        </select>
                    </label>
                </div>
            </div><br><br>

            <button class="rounded-2xl text-pink-100 bg-pink-600 px-4 py-2 w-32 font-bold hover:bg-pink-700 hover:text-pink-100 hover:scale-105" type="submit">Salvar</button>
            <a href="{{ route('cartao.index') }}"><button type="button" class="rounded-2xl text-pink-600 bg-pink-200 px-4 py-2 w-32 font-bold hover:bg-pink-700 hover:text-pink-100 hover:scale-105">Voltar</button></a>
        </form>
    </div>
    </div>
@endsection

