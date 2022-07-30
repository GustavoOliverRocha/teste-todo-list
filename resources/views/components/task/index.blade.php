@extends('main')

@section('content')
	@include('components.task.createForm.index')
	@include('components.task.showTasks.index')
@endsection

@push('scripts')
	@include('components.task.createForm.scriptsJs')
@endpush