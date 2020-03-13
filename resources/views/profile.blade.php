<style>
.flip-card {
  background-color: transparent;
  width: 300px;
  height: 200px;
  border: 1px solid #f1f1f1;
  perspective: 1000px; /* Remove this if you don't want the 3D effect */
}

/* This container is needed to position the front and back side */
.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

/* Do an horizontal flip when you move the mouse over the flip box container */
.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

/* Position the front and back side */
.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden; /* Safari */
  backface-visibility: hidden;
}

/* Style the front side (fallback if image is missing) */
.flip-card-front {
  background-color: #bbb;
  color: black;
}

/* Style the back side */
.flip-card-back {
  background-color: dodgerblue;
  color: white;
  transform: rotateY(180deg);
}
</style>





@extends('layout')

@section('content')

<h1 class="text-center">
Profile works
</h1>

<div class="container">
  <div class="row">
    <div class="col">

    <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="https://images.pexels.com/photos/3823424/pexels-photo-3823424.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h1>John Doe</h1>
      <p>Architect & Engineer</p>
      <p>We love that guy</p>
    </div>
  </div>
</div>

    </div>
    <div class="col">

    <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="https://images.pexels.com/photos/2025870/pexels-photo-2025870.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h1>John Doe</h1>
      <p>Site Engineer</p>
      <p>Good man</p>
    </div>
  </div>
</div>

    </div>
  </div>

  <div class="row">
    <div class="col">
    
    <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="https://images.pexels.com/photos/2929287/pexels-photo-2929287.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h1>John Doe</h1>
      <p>Architect & Engineer</p>
      <p>We love that guy</p>
    </div>
  </div>
</div>
    
    </div>
    <div class="col">

    <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="https://images.pexels.com/photos/3117157/pexels-photo-3117157.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h1>John Doe</h1>
      <p>Architect & Engineer</p>
      <p>We love that guy</p>
    </div>
  </div>
</div>

    </div>
     
  </div>
</div>


@endsection