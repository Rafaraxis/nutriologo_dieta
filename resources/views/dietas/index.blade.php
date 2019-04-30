@extends('layouts.default')
@section('titulo_pagina','Nutriólogo | Dietas')
@section('titulo','Nutriólogo')
@section('subtitulo','Lista de dietas')
@section('contenido')
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Lista de dietas</h3>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Paciente</th>
                            <th>Nacimiento</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dietas as $dieta)
                            <tr>
                                <td>
                                    {{$dieta->nombre . " " . $dieta->apellidos}}
                                </td>
                                <td>
                                    {{$dieta->nacimiento}}
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