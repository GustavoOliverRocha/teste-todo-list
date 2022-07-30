<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\TodoList;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Inserção da Tarefa
     */
    public function store(Request $request,TodoList $list_id)
    {
        $list_id->tasks()->create([
                'name' => $request->taskName,
                'status' => 'To do'
            ]);
        return redirect()->back();
    }


    /**
     * Update da Tarefa
     */
    public function update(Request $request, Task $task_id)
    {
        $task_id->name = $request->taskName;
        $task_id->save();
        return redirect()->back();
    }

    /**
     * Remoção da Tarefa
     */
    public function destroy(Task $task_id)
    {
        if(isset($task_id->id))
            $task_id->delete();
        return redirect()->back();
    }


    /**
     * Alterando o estado da tarefa quando o
     * usuario clicar
     * */
    public function putStatus(Request $request)
    {
        $obj_task = Task::find($request->task_id);

        if($obj_task->status === "finished")
            $obj_task->status = 'To do';
        else
            $obj_task->status = 'finished';
        //dd($obj_task->taskStatus);
        $obj_task->save();

        return redirect()->back();
    }
}
