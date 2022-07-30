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