<?php

namespace App\Http\Controllers;

use App\Models\Convenio;
use Illuminate\Http\Request;

/**
 * Class ConvenioController
 * @package App\Http\Controllers
 */
class ConvenioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $convenios = Convenio::paginate();

        return view('convenio.index', compact('convenios'))
            ->with('i', (request()->input('page', 1) - 1) * $convenios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $convenio = new Convenio();
        return view('convenio.create', compact('convenio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Convenio::$rules);

        $convenio = Convenio::create($request->all());

        return redirect()->route('convenios.index')
            ->with('success', 'Convenio created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $convenio = Convenio::find($id);

        return view('convenio.show', compact('convenio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $convenio = Convenio::find($id);

        return view('convenio.edit', compact('convenio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Convenio $convenio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Convenio $convenio)
    {
        request()->validate(Convenio::$rules);

        $convenio->update($request->all());

        return redirect()->route('convenios.index')
            ->with('success', 'Convenio updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $convenio = Convenio::find($id)->delete();

        return redirect()->route('convenios.index')
            ->with('success', 'Convenio deleted successfully');
    }
}
