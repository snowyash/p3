@extends('_master')

@section('title')
	Welcome to Developer's Best Friend web application!
@stop

@section('content')
	<!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1 class="text-center">Welcome Welcome Welcome!!!</h1>
        <p>Us developers always have to use different things for testing isn't it? It's so hard to come up with different usernames, passwords, and text. I mean, who can be so creative all the time? Well, here you are in luck. Click and use anyone of these tools below for FREE! Enjoy.</p>
      </div>
    </div>

    <div class="container">
      <div class="col-lg-4 text-center">
      	<a href="/xkcd">XKCD Password Generator</a>
      	<div>
      		<iframe src="/xkcd" width = "95%" height = "500"></iframe>
      	</div>
      </div>
      <div class="col-lg-4 text-center">
      	<a href="/lorem_ipsum">Lorem Ipsum Generator</a>
		<div>
      		<iframe src="/lorem_ipsum" width = "95%" height = "500"></iframe>
      	</div>
      </div>
      <div class="col-lg-4 text-center">
      	<a href="/fake_user">Fake User Generator</a>
      	<div>
      		<iframe src="/fake_user" width = "95%" height = "500"></iframe>
      	</div>
      </div>
    </div> 
@stop