<?php

namespace App\Http\Controllers;

use App\Models\todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $res=new todo;
        $res->uname=$request->input('uname');
        $res->uemail=$request->input('uemail');
        $res->uphone=$request->input('uphone');
        $res->upin=$request->input('upin');
        $res->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function show(todo $todo)
    {
        //
        return view('view')->with('todoArr',todo::all());

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function edit(todo $todo ,$id)
    {
        //
        return view('edit')->with('todoArr',todo::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, todo $todo)
    {
        //
        
        $res=todo::find($request->id);
        $res->uname=$request->input('uname');
        $res->uemail=$request->input('uemail');
        $res->uphone=$request->input('uphone');
        $res->upin=$request->input('upin');
        $res->save();
        return redirect('view');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy(todo $todo,$id)
    {
     
        
        todo::destroy(array('id',$id));
        return redirect('view');  

    }
}


