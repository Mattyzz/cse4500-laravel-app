@extends('adminlte::page')

@section('title', 'Error')

@section('content_header')
    <h1>Error</h1>
@stop

@section('content')
    <p>404, Your not supposed to be here please go back.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop