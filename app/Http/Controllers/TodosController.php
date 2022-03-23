<?php

namespace App\Http\Controllers;

use App\TodoApp;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    //get all data and sent to the todos.blade.php
    public function index(){
        $todos = TodoApp::all();
        return view('todos')->with('todos', $todos);
    }
    //store data to databse 
    public function store(Request $request){
        $this->validate($request, [
            'todo'=>'required'
        ]);
        $todo = new TodoApp();
        $todo->todo = $request->todo;
        $todo->save();
        return redirect()->back()->with('success', "Todo Created Successfully");
    }
    //edit data for update purpose...
    public function edit($id){
        $todo = TodoApp::find($id);
        return view('update')->with('todo', $todo);
    }
    // update on databse when you click on update button in update.blade.php
    public function update(Request $req, $id){
        $this->validate( $req, [
            'todo' => 'required'
        ]);
        $todo = TodoApp::find($id);
        $todo->todo = $req->todo;
        $todo->save();
        return redirect('/todos')->with('success', "Todo Updated Successfully");
    }
    // destroy an todo
    public function destroy($id){
        $todo = TodoApp::find($id);
        if ($todo->delete()) {
            return redirect()->back()->with('success', "Todo Deleted Successfully");
        }else{
            return redirect()->back()->with('success', "Unable to Delete Todo");
        }
    }
    // complete mark on todo
    public function completeTask($id){
        $todo = TodoApp::find($id);
        $todo->completed = 1;
        $todo->save();
        return redirect('/todos')->with('success', "Task Completed");

    }
}
