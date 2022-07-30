<table>
	<thead class="table-head-lists"> 
		<th>id</th>
		<th>Name</th>
		<th colspan="2">Action</th>
	</thead>
	<tbody>
		@foreach($todoLists as $t)
		<tr>
			<td>{{$t->id}}</th>
			<td>
				<a href="{{route('list.showTasks',['list_id' => $t->id])}}">
					{{$t->name}}
				</a>
			</td>
			<td>
				<button>Edit</button>
			</td>
			<td>
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