 
{{--Essa pagina é onde todos os componentes serão unidos--}}

{{--Extendendo o template principal--}}
@extends('main')

@section('content')

	@include('components.todoList.createForm.index')
	<div id="listsTable">
		@include('components.todoList.showLists.index')
	</div>
@endsection

@push('scripts')
	@include('components.todoList.createForm.scriptsJs')
@endpush