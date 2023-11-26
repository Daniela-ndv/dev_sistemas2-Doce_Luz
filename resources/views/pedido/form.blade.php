@extends('base.app')
@section("titulo", 'Formulário Pedidos')
@section('content')

    @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error )
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

    @php
        if(!empty($pedido->id)){
            $route = route('pedido.update', $pedido->id);
        } else{
            $route = route('pedido.store');
        }
    @endphp

    <div class="mx-auto py-12 divide-y md:max-w-4xl">
        <div class="py-12">
        <h3 class="pt-4 text-2xl font-medium py-4">Formulário de Pedidos</h3>

        <form action="{{ $route }}" method="post" enctype="multipart/form-data" class="bg-white shadow-md rounded px-8 pt-6 pb-6 mb-4">
            @csrf <!-- cria um hash de segurança -->

            @if (!empty($pedido->id))
                @method('PUT')
            @endif

            <input type="hidden" name="id" value="@if (!empty($pedido->id)){{$pedido->id}}@elseif(!empty(old('id'))){{old('id')}}@else{{''}}@endif">

            <div class="flex">
                <div class="w-1/2 mr-2">
                    <label class="block">
                        <span>Usuário</span>
                        <select name="usuario_id" id="" class="mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black">
                            @foreach ($usuario as $item)
                                <option value="{{ $item->id }}"
                                    @if(!empty($pedido->id)){{ ( $item->id == $pedido->usuario_id) ? 'selected' : '' }} @else{{ '' }}@endif >{{$item->name}}
                                </option>
                            @endforeach
                        </select>
                    </label>
                </div>
            </div><br><br>

            <div class="flex">
                <div class="w-1/2 mr-2">
                    <label class="block">
                        <span>N° cartão</span>
                        <select name="cartao_id" id="" class="mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black">
                            @foreach ($cartao as $item)
                                <option value="{{ $item->id }}"
                                    @if(!empty($pedido->id)){{ ( $item->id == $pedido->cartao_id) ? 'selected' : '' }}@else{{ '' }}@endif >{{$item->numeroCartao}}
                                </option>
                            @endforeach
                        </select>
                    </label>
                </div>
                <div class="w-1/2 mr-2">
                    <label class="block">
                        <span>Forma de pagamento</span>
                        <select name="forma_pagamento_id" id="" class="mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black">
                            @foreach ($pagamento as $item)
                                <option value="{{ $item->id }}"
                                    @if(!empty($pedido->id)){{ ( $item->id == $pedido->forma_pagamento_id) ? 'selected' : '' }}
                                    @else{{ '' }}@endif >{{$item->nome}}
                                </option>
                            @endforeach
                        </select>
                </div>
            </div><br><br>

            <label class="block">
                <span class="text-gray-700">Observação</span>
                <input type="text" name="observacao" placeholder="Mais informações..." class="mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black"
                value="@if(!empty($pedido->observacao)){{$pedido->observacao}}@elseif(!empty(old('observacao'))){{old('observacao')}}@else{{''}}@endif">
            </label><br><br>

            <label class="block">
                <span>Status</span>
                    <select name="status_id" id="" class="mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black">
                        @foreach ($status as $item)
                            <option value="{{ $item->id }}"
                                @if(!empty($pedido->id)){{ ( $item->id == $pedido->status_id) ? 'selected' : '' }}
                                @else{{ '' }}@endif >{{$item->nome}}
                            </option>
                        @endforeach
                    </select>
            </label><br><br>

            <button class="rounded-2xl bg-blue-300 px-4 py-2 w-32 font-bold hover:bg-blue-400" type="submit">Salvar</button>
            <a href="{{ route('pedido.index') }}"><button type="button" class="rounded-2xl bg-gray-300 px-4 py-2 w-32 font-bold hover:bg-gray-400">Voltar</button></a>
        </form>
    </div>
    </div>
@endsection

