<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public  function show(Request $request){
        return view('list',['data'=>Todo::all()]);
    }
    public  function edit(Request $request,$todo){
        return view('edit',['todo'=>Todo::find($todo)]);
    }
    public  function update(Request $request , $todo){
        try {
           $Todo = Todo::findOrFail($todo);

        }catch (ModelNotFoundException  $exception){
            return "Bạn đã cố ý chỉnh sửa , Update không thành công  <a href='/list'><button>Quay lại list</button></a>";
        }
        $Todo->name = $request->name ;
        $Todo->save();
        return  redirect('list');
    }
    public  function delete(Request $request,$todo){
        try {
            $Todo = Todo::findOrFail($todo);

        }catch (ModelNotFoundException  $exception){
            return "Bạn đã cố ý chỉnh sửa , Update không thành công  <a href='/list'><button>Quay lại list</button></a>";
        }
        $Todo->delete();
        return  redirect('list');

    }
    public  function  create(){
        return view('create');
    }
    public  function store(Request $request){
       $Todo = Todo::where('name','=',$request->name)->first();
       if (!empty($Todo)){
           return "Bạn đã thêm công việc đó vào rồi  <a href='/create'><button>Tạo lại</button></a>";
       }
       else{
           $Todo  = new  Todo();
           $Todo->name = $request->name;
           $Todo->save();
           return  redirect('list');

       }
    }



}
