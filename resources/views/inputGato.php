<?php
/**
 * Created by PhpStorm.
 * User: Cruz_Elena
 * Date: 06/11/2018
 * Time: 09:24 AM
 */

use App\Gato;
use Illuminate\http\Request;

Route::get('/', function (){
   return view('welcome');
});

Route::post('Gato/add', function (\http\Env\Request $request){
    $Gato= new Gato;
    $Gato->animal_id =$request->input('animal_id');
    $Gato->nombre= $request->input('nombre');
    $Gato->raza= $request->input('raza');
    $Gato->color= $request->input('color');
    $Gato->edad= $request->input('edad');
    $Gato->save();
    echo 'ID:'.$Gato;

});
Route::put('Gato/update/{id}', function (\http\Env\Request $request,$id){
    $Gato= Gato::find($id);
    $Gato->animal_id =$request->input('animal_id');
    $Gato->nombre= $request->input('nombre');
    $Gato->raza= $request->input('raza');
    $Gato->color= $request->input('color');
    $Gato->edad= $request->input('edad');
    $Gato->save();
    echo 'ID:'.$id;

});

Auth::routes();
Route::get('/home','HomeController@index')->name('home');
Route::resource('gatos', 'gatosController');
