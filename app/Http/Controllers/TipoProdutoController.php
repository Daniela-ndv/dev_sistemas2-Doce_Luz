<?php

namespace App\Http\Controllers;

use App\Http\Requests\TipoProdutoStoreRequest;
use App\Http\Requests\TipoProdutoUpdateRequest;
use App\Models\TipoProduto;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TipoProdutoController extends Controller
{
    public function index(Request $request): View
    {
        $tipoProdutos = TipoProduto::all();

        return view('tipoProduto.list', compact('tipoProdutos'));
    }

    public function create(Request $request): View
    {
        return view('tipoProduto.form');
    }

    public function store(TipoProdutoStoreRequest $request): RedirectResponse
    {
        $tipoProduto = TipoProduto::create($request->validated());

        $request->session()->flash('tipoProduto.id', $tipoProduto->id);

        return redirect()->route('tipoProduto.index');
    }

    public function show(Request $request, TipoProduto $tipoProduto): View
    {
        return view('tipoProduto.show', compact('tipoProduto'));
    }

    public function edit(Request $request, TipoProduto $tipoProduto): View
    {
        return view('tipoProduto.form', compact('tipoProduto'));
    }

    public function update(TipoProdutoUpdateRequest $request, TipoProduto $tipoProduto): RedirectResponse
    {
        $tipoProduto->update($request->validated());

        $request->session()->flash('tipoProduto.id', $tipoProduto->id);

        return redirect()->route('tipoProduto.index');
    }

    public function destroy(Request $request, TipoProduto $tipoProduto): RedirectResponse
    {
        $tipoProduto->delete();

        return redirect()->route('tipoProduto.index');
    }

    public function search(Request $request)
    {
        if (!empty($request->valor)) {
            $tipoProdutos = TipoProduto::where(
                $request->tipo,
                'like',
                "%" . $request->valor . "%"
            )->get();
        } else {
            $tipoProdutos = TipoProduto::all();
        }

        return view('tipoProduto.list')->with(['tipoProdutos' => $tipoProdutos]);
    }
}
