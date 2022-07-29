<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="
	{{URL::asset('http://localhost/to-do-list/public')}}/css/mainStyle.css">
	<title>To Do List</title>
</head>
<body>
	<main>
		@include('components.todoList.createForm.index')
		@include('components.todoList.showLists.index')
		@@include('components.task.createForm.index')
		@@include('components.task.showTasks.index')
		
	</main>
</body>
</html>