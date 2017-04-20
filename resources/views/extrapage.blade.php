@extends('layouts.master')

@section('content')
  <h1>About Me:</h1>
  <ul>
    <li>Name: <?php echo $name; ?></li>
    <li>Age: <?php echo $age; ?></li>
  </ul>
  <ul>
    <?php foreach ($tasks as $task) : ?>
      <li><?php echo $task; ?></li>
    <?php endforeach; ?>
  </ul>
  <p>this is a demonstration that with blade you can create more DRY code using the @ symbol</p>
  <ul>
    @foreach ($tasks as $task)
      <li>{{ $task }}</li>
    @endforeach
  </ul>
@endsection
