@extends('layouts/main')

@section('content')

  <h2>Rooms</h2>
  <p>Ceci est ma page de mes rooms</p>
  
  <ul>
  <?php $rooms = \App\Models\Room::all(); //get all rooms ?>
  @for($i = 0; $i < 3; $i++)
  
  
  <li><a href="/rooms/{{$rooms[$i]->url}}">{{ $rooms[$i]->title }}</a></li>

@endfor
</ul>

@endsection





