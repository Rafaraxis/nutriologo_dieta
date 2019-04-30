<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paciente;
use App\Dieta;
use App\ComidaDieta;


class DietaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dietas = Dieta::leftJoin('pacientes', 'dietas.id_paciente', '=', 'pacientes.id')
        ->select('dietas.id','dietas.inicio_semana','pacientes.nombre','pacientes.apellidos','pacientes.id as id_paciente')
        ->get();
        $argumentos = array();
        $argumentos['dietas'] = $dietas;

        return view('dietas.index',$argumentos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pacientes = Paciente::all();
        $argumentos = array();
        $argumentos['pacientes'] = $pacientes;
        return view('dietas.create', $argumentos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nuevaDieta = new Dieta();
        $nuevaDieta->id_paciente = 
            $request->input('paciente');
        $nuevaDieta->inicio_semana = 
            $request->input('semana');
        if($nuevaDieta->save()) {

            // ºº Lunes ºº
            // -Desayuno
            $desayunoLunes = new ComidaDieta();
            $desayunoLunes->id_dieta = 
                $nuevaDieta->id;
            $desayunoLunes->id_dia_semana = 1;
            $desayunoLunes->id_tiempo_alimentacion = 1;
            $desayunoLunes->titulo=
                $request->input('desayuno_lunes');
            $desayunoLunes->descripcion = 
                $request->input('descripcion_desayuno_lunes');
            $desayunoLunes->save();
            // -Comida
            $comidaLunes = new ComidaDieta();
            $comidaLunes->id_dieta = 
                $nuevaDieta->id;
            $comidaLunes->id_dia_semana = 1;
            $comidaLunes->id_tiempo_alimentacion = 2;
            $comidaLunes->titulo=
                $request->input('comida_lunes');
            $comidaLunes->descripcion = 
                $request->input('descripcion_comida_lunes');
            $comidaLunes->save();
            // -Cena
            $cenaLunes = new ComidaDieta();
            $cenaLunes->id_dieta = 
                $nuevaDieta->id;
            $cenaLunes->id_dia_semana = 1;
            $cenaLunes->id_tiempo_alimentacion = 3;
            $cenaLunes->titulo=
                $request->input('desayuno_lunes');
            $cenaLunes->descripcion = 
                $request->input('descripcion_desayuno_lunes');
            $cenaLunes->save();

            // ºº Martes ºº
            // -Desayuno
            $desayunoMartes = new ComidaDieta();
            $desayunoMartes->id_dieta = 
                $nuevaDieta->id;
            $desayunoMartes->id_dia_semana = 2;
            $desayunoMartes->id_tiempo_alimentacion = 1;
            $desayunoMartes->titulo=
                $request->input('desayuno_martes');
            $desayunoMartes->descripcion = 
                $request->input('descripcion_desayuno_lunes');
            $desayunoMartes->save();
            // -Comida
            $comidaLunes = new ComidaDieta();
            $comidaLunes->id_dieta = 
                $nuevaDieta->id;
            $comidaLunes->id_dia_semana = 2;
            $comidaLunes->id_tiempo_alimentacion = 2;
            $comidaLunes->titulo=
                $request->input('comida_martes');
            $comidaLunes->descripcion = 
                $request->input('descripcion_comida_lunes');
            $comidaMartes->save();
            // -Cena
            $cenaLunes = new ComidaDieta();
            $cenaLunes->id_dieta = 
                $nuevaDieta->id;
            $cenaLunes->id_dia_semana = ;
            $cenaLunes->id_tiempo_alimentacion = 3;
            $cenaLunes->titulo=
                $request->input('desayuno_martes');
            $cenaLunes->descripcion = 
                $request->input('descripcion_desayuno_lunes');
            $cenaLunes->save();

            // ºº Miercoles ºº
            // -Desayuno
            $desayunoLunes = new ComidaDieta();
            $desayunoLunes->id_dieta = 
                $nuevaDieta->id;
            $desayunoLunes->id_dia_semana = 3;
            $desayunoLunes->id_tiempo_alimentacion = 1;
            $desayunoLunes->titulo=
                $request->input('desayuno_miercoles');
            $desayunoLunes->descripcion = 
                $request->input('descripcion_desayuno_miercoles');
            $desayunoLunes->save();
            // -Comida
            $comidaMartes = new ComidaDieta();
            $comidaMartes->id_dieta = 
                $nuevaDieta->id;
            $comidaMartes->id_dia_semana = 3;
            $comidaMartes->id_tiempo_alimentacion = 2;
            $comidaMartes->titulo=
                $request->input('comida_lunes');
            $comidaMartes->descripcion = 
                $request->input('descripcion_comida_lunes');
            $comidaMartes->save();
            // -Cena
            $cenaMartes = new ComidaDieta();
            $cenaMartes->id_dieta = 
                $nuevaDieta->id;
            $cenaMartes->id_dia_semana = 3;
            $cenaMartes->id_tiempo_alimentacion = 3;
            $cenaMartes->titulo=
                $request->input('desayuno_lunes');
            $cenaMartes->descripcion = 
                $request->input('descripcion_desayuno_lunes');
            $cenaMartes->save();
            
            // ºº Jueves ºº
            // -Desayuno
            $desayunoViernes = new ComidaDieta();
            $desayunoViernes->id_dieta = 
                $nuevaDieta->id;
            $desayunoViernes->id_dia_semana = 4;
            $desayunoViernes->id_tiempo_alimentacion = 1;
            $desayunoViernes->titulo=
                $request->input('desayuno_jueves');
            $desayunoViernes->descripcion = 
                $request->input('descripcion_desayuno_jueves');
            $desayunoLunes->save();
            // -Comida
            $comidaLunes = new ComidaDieta();
            $comidaLunes->id_dieta = 
                $nuevaDieta->id;
            $comidaLunes->id_dia_semana = 4;
            $comidaLunes->id_tiempo_alimentacion = 2;
            $comidaLunes->titulo=
                $request->input('comida_jueves');
            $comidaLunes->descripcion = 
                $request->input('descripcion_comida_jueves');
            $comidaLunes->save();
            // -Cena
            $cenaLunes = new ComidaDieta();
            $cenaLunes->id_dieta = 
                $nuevaDieta->id;
            $cenaLunes->id_dia_semana = 4;
            $cenaLunes->id_tiempo_alimentacion = 3;
            $cenaLunes->titulo=
                $request->input('desayuno_lunes');
            $cenaLunes->descripcion = 
                $request->input('descripcion_desayuno_jueves');
            $cenaLunes->save();

            // ºº Viernes ºº
            // -Desayuno
            $desayunoViernes = new ComidaDieta();
            $desayunoViernes->id_dieta = 
                $nuevaDieta->id;
            $desayunoViernes->id_dia_semana = 5;
            $desayunoViernes->id_tiempo_alimentacion = 1;
            $desayunoViernes->titulo=
                $request->input('desayuno_viernes');
            $desayunoViernes->descripcion = 
                $request->input('descripcion_desayuno_lunes');
            $desayunoViernes->save();
            // -Comida
            $comidaViernes = new ComidaDieta();
            $comidaViernes->id_dieta = 
                $nuevaDieta->id;
            $comidaViernes->id_dia_semana = 5;
            $comidaViernes->id_tiempo_alimentacion = 2;
            $comidaViernes->titulo=
                $request->input('comida_viernes');
            $comidaViernes->descripcion = 
                $request->input('descripcion_comida_viernes');
            $comidaViernes->save();
            // -Cena
            $cenaViernes = new ComidaDieta();
            $cenaViernes->id_dieta = 
                $nuevaDieta->id;
            $cenaViernes->id_dia_semana = 5;
            $cenaViernes->id_tiempo_alimentacion = 3;
            $cenaViernes->titulo=
                $request->input('desayuno_lunes');
            $cenaViernes->descripcion = 
                $request->input('descripcion_desayuno_lunes');
            $cenaViernes->save();
        }

        // ºº Sàbado ºº
            // -Desayuno
            $desayunoSabado = new ComidaDieta();
            $desayunoSabado->id_dieta = 
                $nuevaDieta->id;
            $desayunoSabado->id_dia_semana = 6;
            $desayunoSabado->id_tiempo_alimentacion = 1;
            $desayunoSabado->titulo=
                $request->input('desayuno_lunes');
            $desayunoSabado->descripcion = 
                $request->input('descripcion_desayuno_lunes');
            $desayunoLunes->save();
            // -Comida
            $comidaSabado = new ComidaDieta();
            $comidaSabado->id_dieta = 
                $nuevaDieta->id;
            $comidaSabado->id_dia_semana = 6;
            $comidaSabado->id_tiempo_alimentacion = 2;
            $comidaSabado->titulo=
                $request->input('comida_lunes');
            $comidaSabado->descripcion = 
                $request->input('descripcion_comida_lunes');
            $comidaSabado->save();
            // -Cena
            $cenaSabado = new ComidaDieta();
            $cenaSabado->id_dieta = 
                $nuevaDieta->id;
            $cenaSabado->id_dia_semana = 6;
            $cenaSabado->id_tiempo_alimentacion = 3;
            $cenaSabado->titulo=
                $request->input('desayuno_lunes');
            $cenaSabado->descripcion = 
                $request->input('descripcion_desayuno_lunes');
            $cenaSabado->save();

            // ºº Domingo ºº
            // -Desayuno
            $desayunoDomingo = new ComidaDieta();
            $desayunoDomingo->id_dieta = 
                $nuevaDieta->id;
            $desayunoDomingo->id_dia_semana = 7;
            $desayunoDomingo->id_tiempo_alimentacion = 1;
            $desayunoDomingo->titulo=
                $request->input('desayuno_lunes');
            $desayunoDomingo->descripcion = 
                $request->input('descripcion_desayuno_lunes');
            $desayunoDomingo->save();
            // -Comida
            $comidaDomingo = new ComidaDieta();
            $comidaDomingo->id_dieta = 
                $nuevaDieta->id;
            $comidaDomingo->id_dia_semana = 7;
            $comidaDomingo->id_tiempo_alimentacion = 2;
            $comidaDomingo->titulo=
                $request->input('comida_lunes');
            $comidaDomingo->descripcion = 
                $request->input('descripcion_comida_lunes');
            $comidaDomingo->save();
            // -Cena
            $cenaDomingo = new ComidaDieta();
            $cenaDomingo->id_dieta = 
                $nuevaDieta->id;
            $cenaDomingo->id_dia_semana = 7;
            $cenaDomingo->id_tiempo_alimentacion = 3;
            $cenaDomingo->titulo=
                $request->input('desayuno_lunes');
            $cenaDomingo->descripcion = 
                $request->input('descripcion_desayuno_lunes');
            $cenaDomingo->save();

            return redirect()->route('dietas.index')->
                with('exito','Diesta guardada');
    }
    return redirect()->route('dietas.index')->
    with('exito','Diesta guardada');
}-

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
