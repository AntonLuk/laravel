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
use App\Positions;
use App\Worker;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/work', function () {
    $worker=new Worker;
    $table=$worker->all();
    return $table;
});
Route::post('/createPositions', 'PositionsController@create') ;
Route::get('/addRecord/{{nameModel}}',function ()
{

});
Route::get('/deleteRecord/{nameModel}/{id}', 'PositionsController@delete') ;
Route::get('/viewRecord/{nameModel}/{id}', 'PositionsController@viewrecord') ;
Route::get('/viewRecord/{nameModel}', 'PositionsController@addrecord') ;
Route::post('/editPositions', 'PositionsController@editrecord') ;
Route::get('/Positions', 'PositionsController@viewTable') ;
Route::get('/constructors', 'constructorsController@viewTable') ;
//Route::get('/Positions', function () {
//    $model=Positions::first();
//    $records=Positions::all();
//    $title='Должности';
//    $nameModel='Positions';
//    $id=array();
//   for($i=0;$i<Count($records);$i++)
//   {
//       $id[$i]=$records[$i]->id;
//   }
//    return view('view',compact('model','records','title','id','nameModel'));
//   });
//Route::get('/constructors', function () {
//    $model=\App\constructors::first();
//    $records=\App\constructors::all();
//    $title="Застройщики";
//   $nameModel='constructors';
//   //$nameModel='App\\Http\\Providers\\constructors';
//    for($i=0;$i<Count($records);$i++)
//    {
//        $id[$i]=$records[$i]->id;
//    }
//    return view('view',compact('model','records','title','id','nameModel'));
//});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
