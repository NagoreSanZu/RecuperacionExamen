<?php
 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\manzanas;
use Illuminate\Http\Request;
 
class ManzanasController extends Controller
{
    //MOSTRAR TABLA MANZANAS
    public function index()
    {
        $manzanas = manzanas::all();


        return view('index', ['manzanas' => $manzanas]);
    }

   
    public function create()
{
    return view('create');
}



//FUNCION EDITAR
public function edit(manzanas $manzanas)
{
    return view('modificar', compact('manzanas'));
}


//ACTUALIZAR TABLA
public function update(Request $request, manzanas $manzanas)
{

    $request->validate([
        'tipoManzana' => 'required|string|max:255',
        'precioKilo' => 'required|int'
    ]);

    $manzanas->update([
        'tipoManzana'=> $request->input('tipoManzana'),
        'precioKilo'=> $request->input('precioKilo'),
       
    ]);

    return redirect()->route('index');
}


//FUNCION PARA ELIMINAR 
    public function destroy(manzanas $manzanas)
    {
        $manzanas->delete();

        return redirect()->route('index');
    }


//FUNCION PARA INSERTAR
    public function insertarManzana(Request $request)
{
  
    $request->validate([
        'tipoManzana' => 'required|string|max:255',
        'precioKilo' => 'required|int'
      
    ]);



    $manzanas = new manzanas;

    $manzanas->tipoManzana = $request->input('tipoManzana');
    $manzanas->precioKilo = $request->input('precioKilo');
  

    $manzanas->save();



    return redirect('/index'); 
}


}
