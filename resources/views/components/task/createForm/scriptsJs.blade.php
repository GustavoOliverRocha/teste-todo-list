<script type="text/javascript">
	$('[name=taskForm]').submit(function(event){
		event.preventDefault();
		$.ajax({
			url:"{{route('task.save',['list_id' => $todoList->id])}}",
			type: "POST",
			data: $(this).serialize(),
			success:(response)=>{
				$('main').html(response);
			}
		});
	});
</script>