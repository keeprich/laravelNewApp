<style>
.client_img {
    padding-top:50px;
    padding-bottom:50px;

    color:red;
    background-image:url(https://images.pexels.com/photos/3802666/pexels-photo-3802666.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500);
    background-repeat: no-repeat
    background-size: cover;

    }
</style>



@extends('layout')

@section('content')
<div class="client_img">
    <h1>Clients</h1>

    <ul>
    <li>client 1</li>
    <li>client 2</li>
    <li>client 3</li>
    <li>client 4</li>
    <li>client 5</li>

    @foreach ($client as $client)
    <li>{{ $client }}</li>
    @endforeach

    </ul>


@endsection

</div>