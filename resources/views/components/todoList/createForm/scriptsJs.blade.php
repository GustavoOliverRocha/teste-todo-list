<script type="text/javascript">

	/**
	 * Submitando o form de inserção de listas com Ajax;
	 * Ao executar o metodo no controller ele
	   retornará uma nova view com as novas informações
	   sem precisar atualizar
	 * */

	$('[name=listForm]').submit(function(event){
		event.preventDefault();
		$.ajax({
			url:"{{route('list.save')}}",
			type: "POST",
			data: $(this).serialize(),
			success:(response)=>{
				$('main').html(response);
			}
		});
	});

	/**
	 * Função responsavel por exibir o input de edição
	 * da lista, exibirá o form que por padrão está oculto
	 * e aumentará a linha em especifico
	 * */
	 
	$('.editButton').click(function(){
		$('#formEdit'+$(this).val()).css({
			display: 'block'
		});

		$('#formEdit'+$(this).val()).closest('tr').css({
			height: '80px'
		});
	})
</script>