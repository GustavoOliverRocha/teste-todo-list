<script type="text/javascript">
	$('[name= listForm]').submit(function(event){
		event.preventDefault();
		$.ajax({
			url:"{{route('list.save')}}",
			type: "POST",
			data: $(this).serialize(),
			success:(response)=>{
				$('#listsTable').html(response);
			}
		});
	});
</script>