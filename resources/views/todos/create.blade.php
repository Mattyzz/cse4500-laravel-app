@extends('adminlte::page')

@section('title', 'To Do List')

@section('content_header')
    <h1>To Do's</h1>
@stop

@section('content')
<form method="post" action="{{ route('todos.store') }}">
    @csrf
    <x-adminlte-input name="title" label="Title" />
    <x-adminlte-input name="progress" type="number" min=0 max=100 label="Progress" />
    <x-adminlte-input-button type="Submit" label="Submit" />
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Look the create todos page.'); </script>
@stop