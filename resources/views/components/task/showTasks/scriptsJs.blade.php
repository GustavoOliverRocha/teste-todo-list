<script type="text/javascript">

/*$('.taskStatus').click(()=>{
	$('[name=formTaskStatus]').submit();
});
	/*$('[name=formTaskStatus]').submit(function(event){
		alert();
		event.preventDefault();
		$.ajax({
			url:"{{route('task.status.edit')}}",
			type: "POST",
			data: $(this).serialize(),
			success:(response)=>{
				$('main').html(response);
			}
		});
	});*/
</script>