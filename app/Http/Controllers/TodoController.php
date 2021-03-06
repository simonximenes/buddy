<?php

namespace App\Http\Controllers;

use App\Models\Todo;
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
        return view('todo.index',[
            'todos' => Todo::paginate(10),
            'name' => 'Simon Anak Malinah',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('todo.create');
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
        $validated = $request->validate([
            'name' => 'required|string|min:2'
        ]);
        // dd($request->all());
        $todo = new Todo();
        $todo->name = $validated['name'];
        $todo->save();

        return redirect('/todos')->with('status', 'Item Baru ( '. $validated['name'] .' ) Telah Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function show(Todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function edit(Todo $todo)
    {
        //
        return view('todo.edit',[
            'todo' => $todo,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Todo $todo)
    {
        $validated = $request->validate([
            'name' => 'required|string|min:2'
        ]);
        //dd($request->all(), $todo)
        $todo->name = $validated['name'];
        $todo->save();

        return redirect('/todos')->with('status', 'Item ( '. $validated['name'] .' ) Telah Dikemaskini');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todo $todo)
    {
        //
        $todo->delete();

        return redirect('/todos')->with('status', 'Item ( '. $todo->name .' ) Telah Dihapus');
    }
}
