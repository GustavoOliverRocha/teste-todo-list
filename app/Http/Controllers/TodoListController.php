<?php

namespace App\Http\Controllers;

use App\Models\TodoList;
use Illuminate\Http\Request;

class TodoListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $lists = (new TodoList())::all();
        return view('components.todoList.index',[
            'todoLists' => $lists
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createForm()
    {
        return view('todoList.pages.insertForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obj_list = new TodoList();
        $obj_list->name = $request->listName;
        $obj_list->save();
        return view('components.todoList.index',[
            'todoLists' => $obj_list::all()
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TodoList  $todoList
     * @return \Illuminate\Http\Response
     */
    public function showTasks(TodoList $list_id)
    {
        $listTasks = $list_id->tasks()
        ->select('task.id','task.name','task.status')
        ->get();
        return view('components.task.index',[
            'todoList' => $list_id,
            'task' => $listTasks
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TodoList  $todoList
     * @return \Illuminate\Http\Response
     */
    public function edit(TodoList $todoList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TodoList  $todoList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TodoList $todoList)
    {
        $todoList->name = $request->listName;
        $todoList->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TodoList  $todoList
     * @return \Illuminate\Http\Response
     */
    public function destroy(TodoList $list_id)
    {
        if(isset($list_id->id))
            $list_id->delete();
        return redirect()->route('list.showAll');
    }
}
