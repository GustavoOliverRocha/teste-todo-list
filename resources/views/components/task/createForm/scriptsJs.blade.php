<script type="text/javascript">
	
	/**
	 * Exibindo o formulario de edição de uma tarefas
	 * */
	$('.editTaskButton').click(function(){
		
		$('#taskFormEdit'+$(this).val()).css({
			display:'block'
		});

		$('#taskFormEdit'+$(this).val()).closest('tr').css({
			height: '80px'
		});
	});
</script> 