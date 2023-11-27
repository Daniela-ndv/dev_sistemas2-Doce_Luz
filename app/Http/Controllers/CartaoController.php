<?php

namespace App\Http\Controllers;

use App\Models\Cartao;
use App\Models\FormaPagamentoTipoCartao;
use Illuminate\Http\Request;

class CartaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cartaos = Cartao::all();
        return view('cartao.list')->with(['cartaos'=> $cartaos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pagamento = FormaPagamentoTipoCartao::orderBy('nome')->get();

        return view('cartao.form')->with(['pagamento'=> $pagamento]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tipo_id'=>'required|max:10',
            'nomeTitular'=>'required|max:100',
            'numeroCartao'=>'required|max:10',
            'dataValidade'=>'required|max:10',
            'codigoSeguranca'=>'required|max:60',
        ],[
            'tipo_id.required'=>"O :attribute é obrigatório!",
            'nomeTitular.required'=>"O :attribute é obrigatório!",
            'nomeTitular.max'=>" Só é permitido 100 caracteres em :attribute !",
            'numeroCartao.required'=>"O :attribute é obrigatório!",
            'numeroCartao.max'=>" Só é permitido 10 caracteres em :attribute !",
            'codigoSeguranca.required'=>"O :attribute é obrigatório!",
            'codigoSeguranca.max'=>" Só é permitido 60 caracteres em :attribute !",
            'codigoSeguranca.max'=>" Só é permitido 60 caracteres em :attribute !",
        ]);

        $dados = ['tipo_id'=> $request->tipo_id,
            'nomeTitular'=> $request->nomeTitular,
            'numeroCartao'=> $request->numeroCartao,
            'dataValidade'=> $request->dataValidade,
            'codigoSeguranca'=>$request->codigoSeguranca,
        ];

        $imagem = $request->file('imagem');
        //verifica se existe imagem no formulário
        if($imagem){
            $nome_arquivo =
            date('YmdHis').'.'.$imagem->getClientOriginalExtension();

            $diretorio = "imagem/cartao/";
            //salva imagem em uma pasta do sistema
            $imagem->storeAs($diretorio,$nome_arquivo,'public');

            $dados['imagem'] = $diretorio.$nome_arquivo;
        }

        Cartao::create($dados);

        return redirect('cartao')->with('success', "Cadastrado com sucesso!");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cartao = Cartao::find($id);
        //dd($cartao);

        $pagamento = FormaPagamentoTipoCartao::orderBy('nome')->get();

        return view('cartao.form')->with([
        'cartao'=> $cartao,
        'pagamento'=> $pagamento]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cartao $cartao)
    {
        $request->validate([
            'tipo_id'=>'required|max:10',
            'nomeTitular'=>'required|max:100',
            'numeroCartao'=>'required|max:10',
            'dataValidade'=>'required|max:10',
            'codigoSeguranca'=>'required|max:60',
        ],[
            'tipo_id.required'=>"O :attribute é obrigatório!",
            'nomeTitular.required'=>"O :attribute é obrigatório!",
            'nomeTitular.max'=>" Só é permitido 100 caracteres em :attribute !",
            'numeroCartao.required'=>"O :attribute é obrigatório!",
            'numeroCartao.max'=>" Só é permitido 10 caracteres em :attribute !",
            'codigoSeguranca.required'=>"O :attribute é obrigatório!",
            'codigoSeguranca.max'=>" Só é permitido 60 caracteres em :attribute !",
        ]);

        $dados = ['tipo_id'=> $request->tipo_id,
            'nomeTitular'=> $request->nomeTitular,
            'numeroCartao'=> $request->numeroCartao,
            'dataValidade'=> $request->dataValidade,
            'codigoSeguranca'=>$request->codigoSeguranca,
        ];

        $imagem = $request->file('imagem');
        //verifica se existe imagem no formulário
        if($imagem){
            $nome_arquivo =
            date('YmdHis').'.'.$imagem->getClientOriginalExtension();

            $diretorio = "imagem/cartao/";
            //salva imagem em uma pasta do sistema
            $imagem->storeAs($diretorio,$nome_arquivo,'public');

            $dados['imagem'] = $diretorio.$nome_arquivo;
        }

        Cartao::UpdateOrCreate(
            ['id'=>$request->id],
            $dados);

        return redirect('cartao')->with('success', "Atualizado com sucesso!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cartao = Cartao::findOrFail($id);

        $cartao->delete();

        return redirect('cartao')->with('success', "Deletado com sucesso!");
    }

    public function search(Request $request)
    {
        if(!empty($request->valor)){
            $cartaos = Cartao::where($request->tipo, 'like', "%". $request->valor."%")->get();
        }
        else {
            $cartaos = Cartao::all();
        }

        return view('cartao.list')->with(['cartaos'=> $cartaos]);
    }

}
