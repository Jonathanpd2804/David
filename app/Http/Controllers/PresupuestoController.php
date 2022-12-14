<?php

namespace App\Http\Controllers;

use App\Models\Precio;
use App\Http\Requests\StorePrecioRequest;
use App\Http\Requests\UpdatePrecioRequest;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PresupuestoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function download()
    {
        $precios = Precio::all();

        view()->share('users.pdf', $precios);

        $pdf = PDF::loadview('presupuesto.presupuesto', ['precios' => $precios]);

        return $pdf->download('presupuesto.pdf');
    }
    
    public function presupuesto()
    {
        return view("presupuesto.presupuesto");

    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $precios = Precio::all();
        return view("presupuesto.create",compact("precios"));
    }

    public function ver()
    {
        $precios = Precio::all();
        return view("presupuesto.ver",compact("precios"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePrecioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Precio  $precio
     * @return \Illuminate\Http\Response
     */
    public function show(Precio $precio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Precio  $precio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePrecioRequest  $request
     * @param  \App\Models\Precio  $precio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Precio  $precio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Precio $precio)
    {
        //
    }

    public function borrar($id)
    {
        //
    }
}
