@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class=" row justify-content-between px-3">
                        <span>Agregar Nota para {{ auth()->user()->name }}</span>
                        <a href="/notas" class="btn btn-primary btn-sm">Volver a lista de Notas</a>
                    </div>                    
                </div>

                <div class="card-body">
                    @if (session('mensaje'))
                        <div class="alert alert-success">
                            {{session('mensaje')}}
                        </div>
                    @endif
                    <form action="/notas" method="post">
                        @csrf

                        @error('nombre')
                            <div class="alert alert-danger">
                                Flta rellenar campos
                            </div>
                        @enderror

                        <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-3">
                        <input type="text" name="descripcion" placeholder="Descripcion" class="form-control mb-3">

                        <button type="submit" class="btn btn-primary btn-block" >Guardar Nota</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection