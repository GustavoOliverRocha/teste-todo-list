<?php

namespace App\Http\Controllers;

use App\Models\TodoList;
use Illuminate\Http\Request;

class TodoListController extends Controller
{
    /**
     * Exibição de todas as Listas
     */
    public function show()
    {
        $lists = (new TodoList())::all();
        return view('components.todoList.index',[
            'todoLists' => $lists
        ]);
    }


   /**
     * Inserção de uma lista
     */
    public function store(Request $request)
    {
        $obj_list = new TodoList();
        $obj_list->name = $request->listName;
        $obj_list->save();
       /* return view('components.todoList.index',[
            'todoLists' => $obj_list::all()
        ]);*/
        return redirect()->back();
    }

    /**
     * Exibição das tarefas referente a um lista
     * em especifico.
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
     * Atualização de uma Lista
     */
    public function update(Request $request, TodoList $list_id)
    {
        $list_id->name = $request->listName;
        $list_id->save();
        return redirect()->back();
    }

    /**
     * Remoção de uma lista
     * 
     * */
    public function destroy(TodoList $list_id)
    {
        if(isset($list_id->id))
            $list_id->delete();
        return redirect()->route('list.showAll');
    }
}
