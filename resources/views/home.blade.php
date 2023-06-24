@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h1>Admin</h1>
@stop

@section('content')
<div class="card">
   <div class="card-header">
    <h1 class="card-title">El admin</h1>
   </div>
   <div class="card-body">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab quia, earum sit quisquam et temporibus nam minus voluptatem suscipit fugit modi iusto placeat vel ratione inventore velit repellat, eos fugiat!</p>
   </div>
   </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
