@extends('_master')

@section('title')
	Developer's best friend: Fake user generator
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

            <div class="navbar-brand"><a href="/fake_user">Fake user generator</a></div>
        </div>

        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="/">Welcome Page</a></li>
            <li><a href="/xkcd">xkcd password generator</a></li>
            <li><a href="/lorem_ipsum">Lorem Ipsum generator</a></li>
          </ul>
        </div>

      </div>
    </div>
@stop

@section('content')
	<!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Fake user generator</h1>
        <p>The days of sweating to imagine test users are over! Choose the number of users you want below and get those unfamiliar names, addresses, and descriptions for use right away. What are you waiting for???</p>
      </div>
    </div>

    <div class="container">
      {{ Form::open( array(
          'route' => 'FUController.create',
          'method' => 'post',
          'id' => 'form-add-fake_user',
          'role' => 'form',
          ) ) }}

      <div class="col-lg-12" id="fake_user">
      </div>

        <div class="form-group col-lg-12">
          {{ Form::label( 'userCount', 'How many users do you want to create:' ) }}
          {{ Form::select('userCount', 
          [
             '1' => '1 User',
             '2' => '2 Users',
             '3' => '3 Users',
             '4' => '4 Users',
             '5' => '5 Users',
             '6' => '6 Users',
          ], '1', 
            array(
              'id' => 'userCount',
              'placeholder' => 'Enter User Count',
              'maxlength' => 20,
              'required' => true,
              'class' => 'form-control',
            )
          ) }}  
        </div>
        <div class="form-group  text-center">
          {{ Form::submit( 'Submit', array(
              'id' => 'submitBtn_fake_user',
              'class' => 'btn btn-primary col-lg-4 col-lg-offset-4',
          ) ) }}      
        </div>
	
    </form>

    </div> 
@stop