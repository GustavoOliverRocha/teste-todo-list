<a href="{{route('list.showAll')}}"><<- Voltar para as listas</a>
	
<h1 class="title">{{$todoList->name}}</h1>

<form method="POST" action="" name="taskForm">
	@csrf
	<input type="text" name="taskName" placeholder="task name...">
	<button type="submit" class="btn btn-green">Create Task</button>
</form>
<h3 class="title">Finished 1 of 6</h3>
<button type="submit">Limpar todas as tarefas</button> 