
@extends('adminlte::page')

@section('title', 'Panel principal')

@section('content_header')
    <h3>Panel principal</h3>
@stop

@section('content')

    <div class="row">

        <div class="col-lg-3 col-6">
            <div class="small-box text-bg-primary">
                <div class="inner">
                    <h3>120</h3>
                    <p>Estudiantes</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box text-bg-success">
                <div class="inner">
                    <h3>25</h3>
                    <p>Docentes</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box text-bg-warning">
                <div class="inner">
                    <h3>18</h3>
                    <p>Asignaturas</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box text-bg-danger">
                <div class="inner">
                    <h3>75</h3>
                    <p>Matrículas</p>
                </div>
            </div>
        </div>

    </div>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Bienvenido al Sistema Académico</h3>
        </div>

        <div class="card-body">
            <p>Has iniciado sesión correctamente.</p>

            <p>Usuario:
                <strong>{{ auth()->user()->name }}</strong>
            </p>

            <p>Correo:
                <strong>{{ auth()->user()->email }}</strong>
            </p>
        </div>
    </div>

    <form action="{{ route('logout') }}" method="POST">
        @csrf

        <button type="submit" class="btn btn-danger">
            Cerrar sesión
        </button>
    </form>

@stop
