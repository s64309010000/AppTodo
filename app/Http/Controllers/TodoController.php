<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{

    public function index(){
        $todo = Todo::orderBy('completed')->get();
        return view('todo.index')->with(['todo' => $todo]);
    }

    public function create(){
        return view('todo.create');
    }

    public function upload(Request $request){
        $request->validate([
            'title' => 'required|max:255'
        ]);
        $todo = $request->title;
        Todo::create(['title' => $todo]);
        return redirect()->back()->with('success', "ส่งข้อมูลสำเร็จแล้ว");
    }

    public function edit($id){
        $todo = Todo::find($id);
        return view('todo.edit')->with(['id' => $id, 'todo' => $todo]);
    }

    public function update(Request $request){
        $request->validate([
            'title' => 'required|max:255'
        ]);
        $updateTodo = Todo::find($request->id);
        $updateTodo->update(['title' => $request->title]);
        return redirect('/index')->with('success', "ปรับปรุงข้อมูลแล้ว");
    }

    public function delete($id){
        $todo = Todo::find($id);
        $todo->delete();
        return redirect()->back()->with('success', "ลบข้อมูลเรียบร้อยแล้ว");
    }

    public function completed($id){
        $todo = Todo::find($id);
        if($todo->completed){
            $todo->update(['completed' => false]);
            return redirect()->back()->with('success', "ข้อมูลเรียบร้อยแล้ว");
        }else{
            $todo->update(['completed' => true]);
            return redirect()->back()->with('success', "ข้อมูลเรียบร้อยแล้ว");
        }
    }





}
