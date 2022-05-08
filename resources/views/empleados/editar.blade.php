@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar Empleados</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">                            
                   
                        @if ($errors->any())                                                
                            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                            <strong>¡Revise los campos!</strong>                        
                                @foreach ($errors->all() as $error)                                    
                                    <span class="badge badge-danger">{{ $error }}</span>
                                @endforeach                        
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        @endif


                    <form action="{{ route('empleados.update',$empleado->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <div class="form-group">
                                   <label for="ci">CÉDULA DE IDENTIDAD</label>
                                   <input type="text" name="ci" class="form-control" value="{{ $empleado->ci }}">
                                </div>
                            </div>
                            <div class="col-xs-5 col-sm-5 col-md-5">
                            <div class="form-group">
                                   <label for="nombre">NOMBRES Y APELLIDOS</label>
                                   <input type="text" name="nombre" class="form-control" value="{{ $empleado->nombre }}">
                                </div>
                            </div>                   
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                   <label for="correo">CORREO ELECTRONICO</label>
                                   <input type="text" name="correo" class="form-control" value="{{ $empleado->correo }}">
                                </div>
                            </div>
                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <div class="form-group">
                                   <label for="numero">NÚMERO TELEFÓNICO</label>
                                   <input type="text" name="numero" class="form-control" value="{{ $empleado->numero }}">
                                </div>
                            </div>
                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <div class="form-group">
                                   <label for="ruta">RUTA DE TRANSPORTE</label>
                                   <input type="text" name="ruta" class="form-control" value="{{ $empleado->ruta }}">
                                </div>
                            </div>
                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <div class="form-group">
                                   <label for="nombrebanco">NOMBRE DEL BANCO</label>
                                   <input type="text" name="nombrebanco" class="form-control" value="{{ $empleado->nombrebanco }}">
                                </div>
                            </div>
                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <div class="form-group">
                                   <label for="numero_cuenta">NÚMERO DE CUENTA</label>
                                   <input type="text" name="numero_cuenta" class="form-control" value="{{ $empleado->numero_cuenta }}">
                                </div>
                            </div>
                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <div class="form-group">
                                   <label for="t_cuenta">TIPO DE CUENTA</label>
                                   <input type="text" name="t_cuenta" class="form-control" value="{{ $empleado->t_cuenta }}">
                                </div>
                            </div>
                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <div class="form-group">
                                   <label for="area">ÁREA</label>
                                   <input type="text" name="area" class="form-control" value="{{ $empleado->area }}">
                                </div>
                            </div>
                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <div class="form-group">
                                   <label for="cargo">CARGO</label>
                                   <input type="text" name="cargo" class="form-control" value="{{ $empleado->cargo }}">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Modificar Empleado</button>                            
                        </div>
                    </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
