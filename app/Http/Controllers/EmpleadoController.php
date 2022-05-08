<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Empleado;

class EmpleadoController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-empleados|crear-empleados|editar-empleados|borrar-empleados')->only('index');
         $this->middleware('permission:crear-empleados', ['only' => ['create','store']]);
         $this->middleware('permission:editar-empleados', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-empleados', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {       
         //Con paginación
         $empleados = Empleado::paginate(100);
         return view('empleados.index',compact('empleados'));
         //al usar esta paginacion, recordar poner en el el index.blade.php este codigo  {!! $empleados->links() !!}    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleados.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'ci' => 'required',
            'nombre' => 'required',
            'correo' => 'required',
            'numero' => 'required',
            'ruta' => 'required',
            'nombrebanco' => 'required',
            'numero_cuenta' => 'required',
            't_cuenta' => 'required',
            'area' => 'required',
            'cargo' => 'required',

        ]);
    
        Empleado::create($request->all());
    
        return redirect()->route('empleados.index');
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
    public function edit(Empleado $empleado)
    {
        
        return view('empleados.editar', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleado $empleado)
    {
         request()->validate([
            'ci' => 'required',
            'nombre' => 'required',
            'correo' => 'required',
            'numero' => 'required',
            'ruta' => 'required',
            'nombrebanco' => 'required',
            'numero_cuenta' => 'required',
            't_cuenta' => 'required',
            'area' => 'required',
            'cargo' => 'required',
        ]);
        
        $empleado->update($request->all());
    
        return redirect()->route('empleados.index')->with('mensaje','Actualización del Empleado Exitosa!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleado $empleado)
    {
        $empleado->delete();
        return redirect()->route('empleados.index');
    }
}
