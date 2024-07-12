<?php

namespace App\Http\Controllers;
use App\Models\todo ;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = todo::all(); 
        return view('welcome',[
            'todos' => $todos 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $attributes = $request->validate(
            [ 
                'title' => 'required',
                'description' => 'nullable',
            ]) ;
        todo::create($attributes);
        return redirect('/');
    } 

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(todo $todo)
    {
        $todo->update(['isDone'=> true]);
        return redirect('/');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(todo $todo)
    {
        $todo->delete();
        return redirect('/');
    }
}
