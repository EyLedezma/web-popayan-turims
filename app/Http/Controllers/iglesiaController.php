<?php

namespace App\Http\Controllers;
use App\Models\Lugar;
use Illuminate\Http\Request;

class iglesiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $lugar = \DB::table('lugars')->select('nombre','direccion','foto_url','horarios','descripcion','tipolugar_id','rutas_id','gastronomia_id','evento_id','calificasiones_id','servicios_id')->get();
     return view('iglesias', compact('lugar'));

     #$lugar = lugar::all();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        Storage::put('public', $request->file('foto_url'));
        $fotos = $request->file('foto_url')->store('public/fotos_lugar');
        $url = Storage::url( $fotos);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
