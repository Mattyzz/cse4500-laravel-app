@extends('adminlte::page')

@section('title', 'To Do List')

@section('content_header')
    <h1>Event</h1>
@stop

@section('content')
    <h2>{{ $events->title;}}</h2>
    <div><p>{{ $events->start_at;}}% Start</p></div>
    <div><p>{{ $events->end_at;}}% End</p></div>

@stop