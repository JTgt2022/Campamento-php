<?php

namespace App\Http\Controllers;

use App\Models\reviews;
use Illuminate\Http\Request;

class reviewscontroler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     //return Bootcamp::all();
     return Response()->json(["success"=>true,
     "data"=> reviews::all()], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //verificar los datos del payload;
        //return Bootcamp::create ($request->all());
        return Response()->json(["success"=>true,
                                 "data"=> reviews::create($request->all())], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return Bootcamp::Find($id);
        return Response()->json(["success"=>true,
        "data"=> reviews::find($id)], 200);
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
         //1.seleccionar el bootcamp a actualizar
       $b= reviews::find($id);
       //2.Actualizar ese bootcamp
       $b->update($request->all());
       //3.Enviar el bootcampa para apreciar los cambios
      // return $b;
      return Response()->json(["success"=>true,
                                 "data"=> $b], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         //1.seleccionar el bootcamp a eliminar 
       $b= reviews::find($id);
       //2.eliminar ese bootcamp
       $b->delete();
       //3.Enviar el bootcampa para apreciar los cambios
       //return $b;
       return Response()->json(["success"=>true,
                                 "data"=> $b] , 200);
    }
}
