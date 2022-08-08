<?php

namespace App\Http\Controllers;

use App\Models\Gastronomia;
use App\Models\Tipoplato;
use Illuminate\Http\Request;

/**
 * Class GastronomiaController
 * @package App\Http\Controllers
 */
class GastronomiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gastronomias = Gastronomia::paginate();
        return view('gastronomia.index', compact('gastronomias'))
            ->with('i', (request()->input('page', 1) - 1) * $gastronomias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $gastronomia = new Gastronomia();
         $tipoplato = Tipoplato::pluck('nombre','id');
        return view('gastronomia.create', compact('gastronomia','tipoplato'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Gastronomia::$rules);

        $gastronomia = Gastronomia::create($request->all());

        return redirect()->route('gastronomias.index')
            ->with('success', 'creado conexito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gastronomia = Gastronomia::find($id);

        return view('gastronomia.show', compact('gastronomia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gastronomia = Gastronomia::find($id);

        return view('gastronomia.edit', compact('gastronomia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Gastronomia $gastronomia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gastronomia $gastronomia)
    {
        request()->validate(Gastronomia::$rules);

        $gastronomia->update($request->all());

        return redirect()->route('gastronomias.index')
            ->with('success', 'Gastronomia updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $gastronomia = Gastronomia::find($id)->delete();

        return redirect()->route('gastronomias.index')
            ->with('success', 'Gastronomia deleted successfully');
    }
}
