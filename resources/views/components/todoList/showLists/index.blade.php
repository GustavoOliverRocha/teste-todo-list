<table>
	<thead class="table-head-lists"> 

		<th>id</th>
		<th>Name</th>
		<th colspan="2">Action</th>
		
	</thead>

	<tbody>

		@foreach($todoLists as $t)
		<tr>
			<td>{{$t->id}}</td>

			<td>
				<!--Formulário responsavel pela edição da lista-->
				<!--É oculto por padrão-->
				<form method="POST" id="formEdit{{$t->id}}" class="formEdit" action="{{route('list.edit',['list_id' => $t->id])}}" style="display: none;">

					@csrf
					@method('PUT')

					<input type="text" class="inputEdit" name="listName" value="{{$t->name}}">
					<button type="submit">
						->
					</button>
				</form>

				<a href="{{route('list.showTasks',['list_id' => $t->id])}}">
					{{$t->name}}
				</a>

			</td>

			<td>
				<button class="editButton" value="{{$t->id}}">
					Edit
				</button>
			</td>

			<td>
				<!--Formulário responsavel por deletar a lista-->
				<form method="POST" action="{{route('list.delete',['list_id' => $t->id])}}" name="deleteList">
					@method('DELETE')
					@csrf
					<input type="hidden" name="todoList" value="{{$t->id}}">
					<button type="submit">Delete</button>
				</form>
			</td>
		</tr>
		@endforeach

	</tbody>
</table> 