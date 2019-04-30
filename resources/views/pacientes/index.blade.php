@extends('layouts.default')
@section('titulo_pagina','Nutriólogo | Pacientes')
@section('titulo','Nutriólogo')
@section('subtitulo','Lista de pacientes')
@section('contenido')
<div class="row">
@csrf
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Lista de pacientes</h3>
                @if(Session::has('exito'))
                <p>{{Session::get('exito')}}</p>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Paciente </th>
                            <th>Nacimiento</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pacientes as $dieta)
                            <tr>
                                <td>
                                    {{$paciente->nombre . " " . $paciente->apellidos}}
                                </td>
                                <td>
                                    {{$dieta->inicio_semana}}
                                </td>
                                <td>
                                    <button class="btn btn-primary"><i class="fa fa-edit"></i></button>
                                    <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection