@extends('layouts.master')

@section('content')

<section class="jumbotron text-center">
  <div class="container">
    <h1 class="jumbotron-heading">My Laravel Test Blog</h1>
    <h1>Hello, <?php echo $name; ?></h1>
    <p>
      <a href="about" class="btn btn-primary">About Me</a>
      <a href="extrapage" class="btn btn-primary">Extra</a>
      <a href="/tasks" class="btn btn-secondary">List of tasks</a>
    </p>
  </div>
</section>

@endsection