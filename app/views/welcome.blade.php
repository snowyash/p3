@extends('_master')

@section('title')
	Welcome to Developer's Best Friend web application!
@stop

@section('navbar')
  <div class="navbar navbar-inverse navbar-fixed-top other-color" role="navigation">
      <div class="container">
        <div class="navbar-header">

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>

            <div class="navbar-brand"><a href="/">P3 by Claire Yixie Li</a></div>
        </div>

        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="/xkcd">xkcd password generator</a></li>
            <li><a href="/lorem_ipsum">Lorem Ipsum generator</a></li>
            <li><a href="/fake_user">Fake user generator</a></li>
          </ul>
        </div>

      </div>
    </div>
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
      		<iframe src="/xkcd" width = "95%" height = "500"></iframe>
      </div>
      
      <div class="col-lg-4 text-center">
      		<iframe src="/lorem_ipsum" width = "95%" height = "500"></iframe>
      </div>

      <div class="col-lg-4 text-center">
      		<iframe src="/fake_user" width = "95%" height = "500"></iframe>
      </div>
    </div> 
@stop