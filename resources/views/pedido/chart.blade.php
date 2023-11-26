@extends('base.app')
@section("titulo", 'Gráfico')
@section('content')

    <div class="container px-4 mx-auto">
        <div class="p-6 m-20 bg-white rounded shadow">
            <!-- HTML do gráfico -->
            {!! $pedidos->container() !!}
        </div>
        
        <a href="{{route('pedido.index')}}">
                <button
                    type="button"
                    class="inline-block rounded border-2 border-slate-300 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-primary transition duration-150 ease-in-out hover:border-slate-300 hover:bg-neutral-300 hover:text-primary-600 focus:border-primary-600 focus:text-primary-600 focus:outline-none focus:ring-0 active:border-primary-700 active:text-primary-700 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10">
                    Retornar à listagem de pedidos
                </button>
         </a>
      
    </div>   
        
    <!-- faz o import da biblioteca ApexChart -->
    <script src="{{ $pedidos->cdn() }}"></script>
    <!-- adiciona os Scripts do JavaScript do ApexChart -->
    {{ $pedidos->script() }}

@endsection