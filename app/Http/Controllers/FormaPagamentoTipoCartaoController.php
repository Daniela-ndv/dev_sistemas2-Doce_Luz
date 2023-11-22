<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormaPagamentoTipoCartaoStoreRequest;
use App\Http\Requests\FormaPagamentoTipoCartaoUpdateRequest;
use App\Models\FormaPagamentoTipoCartao;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FormaPagamentoTipoCartaoController extends Controller
{
    public function index(Request $request): View
    {
        $formaPagamentoTipoCartaos = FormaPagamentoTipoCartao::all();

        return view('formaPagamentoTipoCartao.list', compact('formaPagamentoTipoCartaos'));
    }

    public function create(Request $request): View
    {
        return view('formaPagamentoTipoCartao.form');
    }

    public function store(FormaPagamentoTipoCartaoStoreRequest $request): RedirectResponse
    {
        $formaPagamentoTipoCartao = FormaPagamentoTipoCartao::create($request->validated());

        $request->session()->flash('forma-pagamento-tipo-cartao.id', $formaPagamentoTipoCartao->id);

        return redirect()->route('forma-pagamento-tipo-cartao.index');
    }

    public function show(Request $request, FormaPagamentoTipoCartao $formaPagamentoTipoCartao): View
    {

        $formaPagamentoTipoCartaos = FormaPagamentoTipoCartao::all();

        return view('formaPagamentoTipoCartao.list', compact('formaPagamentoTipoCartaos'));
    }

    public function edit(Request $request, FormaPagamentoTipoCartao $formaPagamentoTipoCartao): View
    {
        $formaPagamentoTipoCartaos = FormaPagamentoTipoCartao::all();

        return view('formaPagamentoTipoCartao.form', compact('formaPagamentoTipoCartao'));
    }

    public function update(FormaPagamentoTipoCartaoUpdateRequest $request, FormaPagamentoTipoCartao $formaPagamentoTipoCartao): RedirectResponse
    {
        $formaPagamentoTipoCartao->update($request->validated());

        $request->session()->flash('forma-pagamento-tipo-cartao.id', $formaPagamentoTipoCartao->id);

        return redirect()->route('forma-pagamento-tipo-cartao.index');
    }

    public function destroy(Request $request, FormaPagamentoTipoCartao $formaPagamentoTipoCartao): RedirectResponse
    {
        $formaPagamentoTipoCartao = FormaPagamentoTipoCartao::findOrFail($request->id);

        $formaPagamentoTipoCartao->delete();

        return redirect('forma-pagamento-tipo-cartao');
    }

    public function search(Request $request)
    {
        if (!empty($request->valor)) {
            $formaPagamentoTipoCartaos = FormaPagamentoTipoCartao::where(
                $request->tipo,
                'like',
                "%" . $request->valor . "%"
            )->get();
        } else {
            $formaPagamentoTipoCartaos = FormaPagamentoTipoCartao::all();
        }

        return view('formaPagamentoTipoCartao.list')->with(['formaPagamentoTipoCartaos' => $formaPagamentoTipoCartaos]);
    }
}
