<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\TipoProduto;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProdutoController extends Controller
{
    public function index(Request $request): View
    {
        $produtos = Produto::all();

        return view('produto.list', compact('produtos'));
    }

    public function create(Request $request): View
    {
        $tipo = TipoProduto::orderBy('nome')->get();

        return view('produto.form')->with(['tipo'=>$tipo]);
    }

    public function store(ProdutoStoreRequest $request): RedirectResponse
    {
        $produto = Produto::create($request->validated());

        $request->session()->flash('produto.id', $produto->id);

        return redirect()->route('produto.index');
    }

    public function show(Request $request, Produto $produto): View
    {
        return view('produto.show', compact('produto'));
    }

    public function edit(Request $request, Produto $produto): View
    {
        $produto = Produto::find($request->id);

        $tipo = TipoProduto::orderBy('nome')->get();

        return view('produto.form')->with([
        'produto'=> $produto,
        'tipo'=> $tipo]);
    }

    public function update(ProdutoUpdateRequest $request, Produto $produto): RedirectResponse
    {$request->validated();

    Produto::UpdateOrCreate(
        ['id'=>$request->id],
        $produto);

    return redirect('produto')->with('success', "Atualizado com sucesso!");

    }

    public function destroy(Request $request, Produto $produto): RedirectResponse
    {
        $produto = Produto::findOrFail($request->id);

        $produto->delete();

        return redirect('produto')->with('success', "Deletado com sucesso!");

    }

    public function search(Request $request)
    {
        if (!empty($request->valor)) {
            $produtos = Produto::where(
                $request->tipo,
                'like',
                "%" . $request->valor . "%"
            )->get();
        } else {
            $produtos = Produto::all();
        }

        return view('produto.list')->with(['produtos' => $produtos]);
    }
}