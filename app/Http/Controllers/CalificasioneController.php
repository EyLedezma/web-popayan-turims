<?php

namespace App\Http\Controllers;

use App\Models\Calificasione;
use Illuminate\Http\Request;

/**
 * Class CalificasioneController
 * @package App\Http\Controllers
 */
class CalificasioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calificasiones = Calificasione::paginate();

        return view('calificasione.index', compact('calificasiones'))
            ->with('i', (request()->input('page', 1) - 1) * $calificasiones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $calificasione = new Calificasione();
        return view('calificasione.create', compact('calificasione'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Calificasione::$rules);

        $calificasione = Calificasione::create($request->all());

        return redirect()->route('calificasiones.index')
            ->with('success', 'Calificasione created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $calificasione = Calificasione::find($id);

        return view('calificasione.show', compact('calificasione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $calificasione = Calificasione::find($id);

        return view('calificasione.edit', compact('calificasione'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Calificasione $calificasione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Calificasione $calificasione)
    {
        request()->validate(Calificasione::$rules);

        $calificasione->update($request->all());

        return redirect()->route('calificasiones.index')
            ->with('success', 'Calificasione updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $calificasione = Calificasione::find($id)->delete();

        return redirect()->route('calificasiones.index')
            ->with('success', 'Calificasione deleted successfully');
    }
}
