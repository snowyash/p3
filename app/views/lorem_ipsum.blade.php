@extends('_master')

@section('title')
  Developer's best friend: Lorem Ipsum generator
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

            <div class="navbar-brand"><a href="/lorem_ipsum">Lorem Ipsum generator</a></div>
        </div>

        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="/">Welcome Page</a></li>
            <li><a href="/xkcd">xkcd password generator</a></li>
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
        <h1>Lorem Ipsum generator</h1>
        <p>Tired of trying to be creative for your sample paragraphs? Grab an Lorem Ipsum Generated Paragraph on the go now! These paragraphs are so unreadable your users will not say they don't like it, ever :)</p>
      </div>
    </div>

    <div class="container">
      {{ Form::open( array(
          'route' => 'LIController.create',
          'method' => 'post',
          'id' => 'form-add-lorem_ipsum',
          'role' => 'form',
          ) ) }}
      
      <div class="col-lg-10 col-lg-offset-1">
        <p class="text-justify"  id="lorem_ipsum"></p>
      </div>

      <div class="form-group col-lg-12">
        {{ Form::label( 'parCount', 'How many paragraphs do you want to use:' ) }}
        {{ Form::select('parCount', 
        [
           '1' => '1 paragraph',
           '2' => '2 paragraphs',
           '3' => '3 paragraphs',
           '4' => '4 paragraphs',
           '5' => '5 paragraphs',
           '6' => '6 paragraphs',
        ], '1', 
          array(
            'id' => 'parCount',
            'placeholder' => 'Enter Paragraph Count',
            'maxlength' => 20,
            'class' => 'form-control',
          )
        ) }}
      </div>
      <div class="form-group text-center">
        {{ Form::submit( 'Submit', array(
            'id' => 'submitBtn_lorem_ipsum',
            'class' => 'btn btn-primary col-lg-4 col-lg-offset-4',
        ) ) }}
      </div>
                     
      {{ Form::close() }}

    </div>
    
@stop