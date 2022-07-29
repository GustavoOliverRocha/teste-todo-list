@extends('main')
@section('content')
	@include('components.todoList.createForm.index')
	@include('components.todoList.showLists.index')
@endsection
@push('scripts')
	@include('components.todoList.createForm.scriptsJs')
@endpush