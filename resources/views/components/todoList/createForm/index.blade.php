{{-- Componente do Formulario de Inserção de uma Lista --}}

<h1 class="title">Lists</h1>

<form method="POST" action="{{route('list.save')}}" name="listForm">
	@csrf
	<input type="text" class="insertInput" name="listName" placeholder="List name...">
	<button type="submit" class="btn btn-green">Create List</button>
</form>

<br>
<br>