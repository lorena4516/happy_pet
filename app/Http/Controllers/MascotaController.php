<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mascota;
use App\Raza;
class MascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mascotas = Mascota::all();
        return view('mascota.index')->with('mascotas', $mascotas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $razas = Raza::all();
        return view('mascota.create', compact('razas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $mascota = new Mascota();
        $mascota->nombre_mascota = $request->get('nombre_mascota');
        $mascota->id_raza = $request->get('raza');
        $mascota->fecha_nacimiento = $request->get('fecha');
        $mascota->nombre_humano = $request->get('nombre_humano');
        $mascota->descripcion = $request->get('descripcion');
        $mascota->save();

        return redirect('/mascotas');

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
        $razas = Raza::all();
        $mascota = Mascota::find($id);
        return view('mascota.edit', compact('razas'))->with('mascota', $mascota);
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
        $mascota = Mascota::find($id);
        $mascota->nombre_mascota = $request->get('nombre_mascota');
        $mascota->id_raza = $request->get('raza');
        $mascota->fecha_nacimiento = $request->get('fecha');
        $mascota->nombre_humano = $request->get('nombre_humano');
        $mascota->descripcion = $request->get('descripcion');
        $mascota->save();

        return redirect('/mascotas');
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
        $mascota = Mascota::find($id);
        $mascota->delete();
        return redirect('/mascotas');
    }
}
