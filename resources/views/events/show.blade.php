@extends('adminlte::page')

@section('title', 'To Do List')

@section('content_header')
    <h1>Event</h1>
@stop

@section('content')
    <h2>{{ $eventsfeed->title;}}</h2>
    <div><p>{{ $eventsfeed->start_at;}}% Start</p></div>
    <div><p>{{ $eventsfeed->end_at;}}% End</p></div>

@stop