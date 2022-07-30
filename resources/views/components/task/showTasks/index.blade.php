<table>
	<thead class="table-head-tasks">
		<th>id</th>
		<th>Task</th>
		<th>Status</th>
		<th colspan="3">Action</th>
	</thead>
	<tbody>
	@foreach($task as $t)
		<tr>
			<td>{{$t->id}}</td>
			<td>{{$t->name}}</td>
			<td hidden>

			</td>
		
			<td >
				<form method="POST" action="{{route('task.status.edit')}}" name="formTaskStatus">
					@csrf
					@method('PUT')
					<input type="hidden" name="task_id" value="{{$t->id}}">
				@if($t->status === 'To do')
					<button class="taskStatus" style="color: #474747;">...</button>
				@else
					<button class="taskStatus" style="color: #00e676;">&#10004;</button>
				@endif
				</form>
				
			</td>
		

		
			<td>
				<button class="btn btn-blue btn-small">Edit</button>
			</td>
			<td>
				<form method="POST" action="{{route('task.delete',['task_id' => $t->id])}}">
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-red btn-small">
					&#10008;
					</button>
				</form>
				
			</td>
		</tr>
	@endforeach
	</tbody>
</table>