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

Route::get('/', function () {
    return view('welcome');
});
// this route uses the controller Todos.... with function index to return all get variables
Route::get('todos', 'TodosController@index' );
// controller to create new todo 
Route::post('/create/todo', [
    'uses'=>'TodosController@store',
]);
//controller to delete todo by id refer
Route::delete('/todos/{id}',[
    'as'=> 'todo.delete',
    'uses'=>'TodosController@destroy',
]);
//edit any available todo by id
Route::get('todo/{id}/edit', 'TodosController@edit');
//update edited todo
Route::post( 'todo/{id}/edit', [
 'uses'=> 'TodosController@update',
]);
// mark as complete todo
Route::get('/todos/completed/{id}', [
    'as'=>'todo.complete',
    'uses'=>'TodosController@completeTask'
]);


