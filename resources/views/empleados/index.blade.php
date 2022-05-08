@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Empleados</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                
            
                        @can('crear-empleados')
                        <a class="btn btn-warning" href="{{ route('empleados.create') }}">Registrar Nuevo Empleado</a>
                        @endcan
            
                        <table class="table table-striped mt-2">
                                <thead style="background-color:#6777ef">                                     
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff;">CI</th>
                                    <th style="color:#fff;">Nombres y Apellidos</th>
                                    <th style="color:#fff;">Número</th>
                                    <th style="color:#fff;">Area</th>                                    
                                    <th style="color:#fff;">Acciones</th>                                                                   
                              </thead>
                              <tbody>
                            @foreach ($empleados as $empleado)
                            <tr>
                                <td style="display: none;">{{ $empleado->id }}</td>                                
                                <td>{{ $empleado->ci }}</td>
                                <td>{{ $empleado->nombre }}</td>
                                <td>{{ $empleado->numero }}</td>
                                <td>{{ $empleado->area }}</td>
                                <td>
                                    <form action="{{ route('empleados.destroy',$empleado->id) }}" method="POST">                                        
                        @can('editar-empleados')
                            <a class="btn btn-info" href="{{ route('empleados.edit',$empleado->id) }}">Modificar</a>
                        @endcan

                        @csrf
                        @method('DELETE')
                        @can('borrar-empleados')
                        
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                             
                        @endcan
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <!-- Ubicamos la paginacion a la derecha -->
                        <div class="pagination justify-content-end">
                            {!! $empleados->links() !!}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
