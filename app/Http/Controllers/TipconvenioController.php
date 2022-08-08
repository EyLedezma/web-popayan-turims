<?php

namespace App\Http\Controllers;

use App\Models\Tipconvenio;
use Illuminate\Http\Request;

/**
 * Class TipconvenioController
 * @package App\Http\Controllers
 */
class TipconvenioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipconvenios = Tipconvenio::paginate();

        return view('tipconvenio.index', compact('tipconvenios'))
            ->with('i', (request()->input('page', 1) - 1) * $tipconvenios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipconvenio = new Tipconvenio();
        return view('tipconvenio.create', compact('tipconvenio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tipconvenio::$rules);

        $tipconvenio = Tipconvenio::create($request->all());

        return redirect()->route('tipconvenios.index')
            ->with('success', 'Tipconvenio created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipconvenio = Tipconvenio::find($id);

        return view('tipconvenio.show', compact('tipconvenio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipconvenio = Tipconvenio::find($id);

        return view('tipconvenio.edit', compact('tipconvenio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tipconvenio $tipconvenio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipconvenio $tipconvenio)
    {
        request()->validate(Tipconvenio::$rules);

        $tipconvenio->update($request->all());

        return redirect()->route('tipconvenios.index')
            ->with('success', 'Tipconvenio updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipconvenio = Tipconvenio::find($id)->delete();

        return redirect()->route('tipconvenios.index')
            ->with('success', 'Tipconvenio deleted successfully');
    }
}
