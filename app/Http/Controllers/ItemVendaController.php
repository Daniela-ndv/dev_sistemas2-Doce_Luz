<?php

namespace App\Http\Controllers;

use App\Http\Requests\ItemVendaStoreRequest;
use App\Http\Requests\ItemVendaUpdateRequest;
use App\Models\ItemVenda;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ItemVendaController extends Controller
{
    public function index(Request $request): View
    {
        $itemVendas = ItemVenda::all();

        return view('itemVenda.list', compact('itemVendas'));
    }

    public function create(Request $request): View
    {
        return view('itemVenda.form');
    }

    public function store(ItemVendaStoreRequest $request): RedirectResponse
    {
        $itemVenda = ItemVenda::create($request->validated());

        $request->session()->flash('itemVenda.id', $itemVenda->id);

        return redirect()->route('item-venda.index');
    }

    public function show(Request $request, ItemVenda $itemVenda): View
    {
        $itemVendas = ItemVenda::all();
        return view('itemVenda.list', compact('itemVendas'));
    }

    public function edit(Request $request, ItemVenda $itemVenda): View
    {
        return view('itemVenda.form', compact('itemVenda'));
    }

    public function update(ItemVendaUpdateRequest $request, ItemVenda $itemVenda): RedirectResponse
    {
        $itemVenda->update($request->validated());

        $request->session()->flash('itemVenda.id', $itemVenda->id);

        return redirect()->route('item-venda.index');
    }

    public function destroy(Request $request, ItemVenda $itemVenda): RedirectResponse
    {
        $itemVenda->delete();

        return redirect()->route('item-venda.index');
    }

    public function search(Request $request)
    {
        if (!empty($request->valor)) {
            $itemVendas = ItemVenda::where(
                $request->tipo,
                'like',
                "%" . $request->valor . "%"
            )->get();
        } else {
            $itemVendas = ItemVenda::all();
        }

        return view('itemVenda.list')->with(['itemVendas' => $itemVendas]);
    }
}
