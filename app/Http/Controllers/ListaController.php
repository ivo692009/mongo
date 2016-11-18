<?php

namespace App\Http\Controllers;
use App\Lista;
use Illuminate\Http\Request;

class ListaController extends Controller
{
    public function index()
   {
      $listado = DB::collection('personas')
                    ->get();
      return view('personas.index',compact('listado'));
   }
   /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
   
   public function create()
   {
      return view('personas.nuevo');
   }
   /**
    * Store a newly created resource in storage.
    *
    * @return Response
    */
   public function store()
   {
        $persona=Request::all();
        Lista::create($persona);
        return redirect('inicio');

   }
   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
   public function show($id)
   {
       
   }
   

   /**
    * 
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
   public function edit($id)
   {
     $persona=  DB::collection('personas')
                    ->where('id' , $id) 
                    ->first();
       return view('personas.editar',compact('persona'));
   }
   /**
    * Update the specified resource in storage.
    *
    * @param  int  $id
    * @return Response
    */
   public function update($id)
   {
        $bookUpdate=Request::all();
        $persona=  DB::collection('personas')
                    ->where('id' , $id) 
                    ->first();
        $persona->update($bookUpdate);
        return redirect('inicio');
   }
   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return Response
    */
   public function destroy($id)
   {
      Lista::find($id)->delete();
      return redirect('inicio');
   }
}
