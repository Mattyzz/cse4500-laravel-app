@extends('adminlte::page')

@section('title', 'To Do List')

@section('content_header')
    <h1>Calendar</h1>
@stop

@section('content')
<form method="post" action="{{ route('eventsfeed.store') }}">
    @csrf
    <x-adminlte-input name="title" label="Title" />
    
    <label for="start_at">Choose a start date and start time for your Event:</label>

    <input type="datetime-local" id="start_at"
       name="start_at" value="2022-03-01T19:30"
       min="2018-06-07T00:00" max="2023-06-14T00:00">

       <label for="end_at">Choose a end date and end time for your Event:</label>

    <input type="datetime-local" id="end_at"
     name="end_at" value="2022-03-01T19:30"
     min="2018-06-07T00:00" max="2023-06-14T00:00">


    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Look the create todos page.'); </script>
@stop