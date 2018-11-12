<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Gato;
use Illuminate\http\Request;

Route::get('/', function () {
    return view('welcome');
});
Route::get('usuarios', function () {
    return DB::table('users')->get();
});
//carpeta animals
Route::get('animals', function (){
    $table=App\Gato::all();
    $table2=App\Dingo::all();
    $table3=App\impala::all();
    $table4=App\Orangutan::all();
    $table5=App\Ciervo::all();
    $table6=App\Pez::all();
    return $table . $table2 . $table3 . $table4 . $table5 . $table6;
})->middleware('group1');

Route::get('animals/id/{id}', function ($id){
    $table=App\Animals::find($id)->gato;
    $table2=App\Animals::find($id)->dingo;
    $table3=App\Animals::find($id)->impala;
    $table4=App\Animals::find($id)->orangutan;
    $table5=App\Animals::find($id)->ciervo;
    $table6=App\Animals::find($id)->pez;
    return $table . $table2 . $table3 . $table4 . $table5 . $table6;
})->where(['id' => '[\d]+'])->middleware('group1');
//gato
Route::get('gatos',function (){
   return App\Gato::all();
})->middleware('grupo 1');

Route::get('gatos/id/{id}', function ($id){
    $lista = App\Gato::find($id);
    return $lista;
})->where(['id' => '[\d]+'])->middleware('group1');


Route::post('gatos/add', function (Request $request){
    $Gato= new Gato;
    $Gato->animal_id =$request->input('animal_id');
    $Gato->nombre= $request->input('nombre');
    $Gato->raza= $request->input('raza');
    $Gato->color= $request->input('color');
    $Gato->edad= $request->input('edad');
    $Gato->peso= $request->input('peso');
    $Gato->save();
    echo 'ID:'.$Gato;

})->middleware('group2');

Route::put('gatos/update/{id}', function (Request $request,$id){
    $Gato= Gato::find($id);
    $Gato->animal_id =$request->input('animal_id');
    $Gato->nombre= $request->input('nombre');
    $Gato->raza= $request->input('raza');
    $Gato->color= $request->input('color');
    $Gato->edad= $request->input('edad');
    $Gato->peso= $request->input('peso');
    $Gato->save();
    echo 'ID:'.$id;

})->middleware('group3');

Route::get('gatos/delete/{id}', function ($id){
    Gato::destroy($id);
    return 'gatos'.$id.'deleted';
})->middleware('group1');

//Dingo
Route::get('dingos',function (){
    return App\Dingo::all();
})->middleware('grupo 1');

Route::get('dingos/id/{id}', function ($id){
    $lista = App\Dingo::find($id);
    return $lista;
})->where(['id' => '[\d]+'])->middleware('group1');


Route::post('dingos/add', function (Request $request){
    $D= new Dingo;
    $D->animal_id =$request->input('animal_id');
    $D->nombre= $request->input('nombre');
    $D->color= $request->input('color');
    $D->edad= $request->input('edad');
    $D->peso= $request->input('peso');
    $D->save();
    echo 'ID:'.$D;

})->middleware('group2');

Route::put('dingos/update/{id}', function (Request $request,$id){
    $D= Dingo::find($id);
    $D->animal_id =$request->input('animal_id');
    $D->nombre= $request->input('nombre');
    $D->color= $request->input('color');
    $D->edad= $request->input('edad');
    $D->peso= $request->input('peso');
    $D->save();
    echo 'ID:'.$id;

})->middleware('group3');

Route::get('dingos/delete/{id}', function ($id){
    Dingo::destroy($id);
    return 'dingos'.$id.'deleted';
})->middleware('group1');

//impala
Route::get('impalas',function (){
    return App\impala::all();
})->middleware('grupo 1');

Route::get('impalas/id/{id}', function ($id){
    $lista = App\impala::find($id);
    return $lista;
})->where(['id' => '[\d]+'])->middleware('group1');


Route::post('impalas/add', function (Request $request){
    $i= new impala;
    $i->animal_id =$request->input('animal_id');
    $i->nombre= $request->input('nombre');
    $i->color= $request->input('color');
    $i->edad= $request->input('edad');
    $i->peso= $request->input('peso');
    $i->save();
    echo 'ID:'.$i;

})->middleware('group2');

Route::put('impalas/update/{id}', function (Request $request,$id){
    $i= impala::find($id);
    $i->animal_id =$request->input('animal_id');
    $i->nombre= $request->input('nombre');
    $i->color= $request->input('color');
    $i->edad= $request->input('edad');
    $i->peso= $request->input('peso');
    $i->save();
    echo 'ID:'.$id;

})->middleware('group3');

Route::get('impalas/delete/{id}', function ($id){
    impala::destroy($id);
    return 'impalas'.$id.'deleted';
})->middleware('group1');

//ciervo
Route::get('ciervos',function (){
    return App\Ciervo::all();
})->middleware('grupo 1');

Route::get('ciervos/id/{id}', function ($id){
    $lista = App\Ciervo::find($id);
    return $lista;
})->where(['id' => '[\d]+'])->middleware('group1');


Route::post('ciervos/add', function (Request $request){
    $c= new Ciervo;
    $c->animal_id =$request->input('animal_id');
    $c->nombre= $request->input('nombre');
    $c->color= $request->input('color');
    $c->edad= $request->input('edad');
    $c->peso= $request->input('peso');
    $c->save();
    echo 'ID:'.$c;

})->middleware('group2');

Route::put('ciervos/update/{id}', function (Request $request,$id){
    $c= Ciervo::find($id);
    $c->animal_id =$request->input('animal_id');
    $c->nombre= $request->input('nombre');
    $c->color= $request->input('color');
    $c->edad= $request->input('edad');
    $c->peso= $request->input('peso');
    $c->save();
    echo 'ID:'.$id;

})->middleware('group3');

Route::get('ciervos/delete/{id}', function ($id){
    Ciervo::destroy($id);
    return 'ciervos'.$id.'deleted';
})->middleware('group1');

//orangutan
Route::get('orangutans',function (){
    return App\Orangutan::all();
})->middleware('grupo 1');

Route::get('orangutans/id/{id}', function ($id){
    $lista = \App\Orangutan::find($id);
    return $lista;
})->where(['id' => '[\d]+'])->middleware('group1');


Route::post('orangutans/add', function (Request $request){
    $o= new Orangutan;
    $o->animal_id =$request->input('animal_id');
    $o->nombre= $request->input('nombre');
    $o->color= $request->input('color');
    $o->edad= $request->input('edad');
    $o->peso= $request->input('peso');
    $o->save();
    echo 'ID:'.$o;

})->middleware('group2');

Route::put('orangutans/update/{id}', function (Request $request,$id){
    $o= Orangutan::find($id);
    $o->animal_id =$request->input('animal_id');
    $o->nombre= $request->input('nombre');
    $o->color= $request->input('color');
    $o->edad= $request->input('edad');
    $o->peso= $request->input('peso');
    $o->save();
    echo 'ID:'.$id;

})->middleware('group3');

Route::get('orangutans/delete/{id}', function ($id){
    Orangutan::destroy($id);
    return 'orangutans'.$id.'deleted';
})->middleware('group1');

//pez
Route::get('pezs',function (){
    return App\Pez::all();
})->middleware('grupo 1');

Route::get('pezs/id/{id}', function ($id){
    $lista = App\Pez::find($id);
    return $lista;
})->where(['id' => '[\d]+'])->middleware('group1');


Route::post('pezs/add', function (Request $request){
    $P= new Pez;
    $P->animal_id =$request->input('animal_id');
    $P->nombre= $request->input('nombre');
    $P->raza= $request->input('raza');
    $P->color= $request->input('color');
    $P->edad= $request->input('edad');
    $P->peso= $request->input('peso');
    $P->save();
    echo 'ID:'.$P;

})->middleware('group2');

Route::put('pezs/update/{id}', function (Request $request,$id){
    $P= Pez::find($id);
    $P->animal_id =$request->input('animal_id');
    $P->nombre= $request->input('nombre');
    $P->raza= $request->input('raza');
    $P->color= $request->input('color');
    $P->edad= $request->input('edad');
    $P->peso= $request->input('peso');
    $P->save();
    echo 'ID:'.$id;

})->middleware('group3');

Route::get('pezs/delete/{id}', function ($id){
    Pez::destroy($id);
    return 'pezs'.$id.'deleted';
})->middleware('group1');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

