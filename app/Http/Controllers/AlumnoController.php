<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Hamcrest\Core\AllOf;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Devuelve un array de los alumnos:
        $alumnos = Alumno::all();
        return view("alumno.listado",["alumnos"=>$alumnos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("alumno.nuevo");
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
        $alumno = new Alumno($request->input());
        $alumno->saveOrFail();
        $alumnos = Alumno::All();
        return view("alumno.listado",["alumnos"=>$alumnos,"msj"=>"El alumno $alumno->nombre ha sido insertado."]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function show(Alumno $alumno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumno $alumno)
    {
        //
        return view("alumno.edit",["alumno"=>$alumno]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumno $alumno)
    {
        //
        $alumno->fill($request->input())->saveOrFail();
        $alumnos = Alumno::All();
        return view("alumno.listado",["alumnos"=>$alumnos,
            "msj"=>"El alumno $alumno->nombre ha sido modificado."]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumno $alumno)
    {
        //Lo borramos:
        $alumno->delete();
        $alumnos = Alumno::All();
        return view("alumno.listado",["alumnos"=>$alumnos,"msj"=>"El alumno $alumno->nombre ha sido borrado."]);
    }
}
