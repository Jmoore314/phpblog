@extends('layout')

@section('content')
  <h1>Hello, <?php echo $name; ?></h1>
  <a href="about">About Me</a>
  <a href="extrapage">Extra</a>
  <a href="/tasks">List of tasks</a>
@endsection