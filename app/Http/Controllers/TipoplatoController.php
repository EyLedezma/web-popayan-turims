<?php

namespace App\Http\Controllers;

use App\Models\Tipoplato;
use Illuminate\Http\Request;

/**
 * Class TipoplatoController
 * @package App\Http\Controllers
 */
class TipoplatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoplatos = Tipoplato::paginate();

        return view('tipoplato.index', compact('tipoplatos'))
            ->with('i', (request()->input('page', 1) - 1) * $tipoplatos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoplato = new Tipoplato();
        return view('tipoplato.create', compact('tipoplato'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tipoplato::$rules);

        $tipoplato = Tipoplato::create($request->all());

        return redirect()->route('tipoplatos.index')
            ->with('success', 'Tipoplato created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoplato = Tipoplato::find($id);

        return view('tipoplato.show', compact('tipoplato'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoplato = Tipoplato::find($id);

        return view('tipoplato.edit', compact('tipoplato'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tipoplato $tipoplato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipoplato $tipoplato)
    {
        request()->validate(Tipoplato::$rules);

        $tipoplato->update($request->all());

        return redirect()->route('tipoplatos.index')
            ->with('success', 'Tipoplato updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipoplato = Tipoplato::find($id)->delete();

        return redirect()->route('tipoplatos.index')
            ->with('success', 'Tipoplato deleted successfully');
    }
}
