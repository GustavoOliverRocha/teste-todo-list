
{{-- Formulario de Inserção de uma Tarefa --}}
<a href="{{route('list.showAll')}}"><<- Go Back to Lists</a>
	
<h1 class="title">{{$todoList->name}}</h1>

<form method="POST" action="{{route('task.save',['list_id' => $todoList->id])}}" name="taskForm">
	@csrf
	<input type="text" class="insertInput" name="taskName" placeholder="task name...">
	<button type="submit" class="btn btn-green">Create Task</button>
</form>
<br>
<br>