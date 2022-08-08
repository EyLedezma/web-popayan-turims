<?php

namespace App\Http\Controllers;

use App\Models\Tipoevento;
use Illuminate\Http\Request;

/**
 * Class TipoeventoController
 * @package App\Http\Controllers
 */
class TipoeventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoeventos = Tipoevento::paginate();

        return view('tipoevento.index', compact('tipoeventos'))
            ->with('i', (request()->input('page', 1) - 1) * $tipoeventos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoevento = new Tipoevento();
        return view('tipoevento.create', compact('tipoevento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tipoevento::$rules);

        $tipoevento = Tipoevento::create($request->all());

        return redirect()->route('tipoeventos.index')
            ->with('success', 'Tipoevento created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoevento = Tipoevento::find($id);

        return view('tipoevento.show', compact('tipoevento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoevento = Tipoevento::find($id);

        return view('tipoevento.edit', compact('tipoevento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tipoevento $tipoevento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipoevento $tipoevento)
    {
        request()->validate(Tipoevento::$rules);

        $tipoevento->update($request->all());

        return redirect()->route('tipoeventos.index')
            ->with('success', 'Tipoevento updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipoevento = Tipoevento::find($id)->delete();

        return redirect()->route('tipoeventos.index')
            ->with('success', 'Tipoevento deleted successfully');
    }
}
