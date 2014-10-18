@extends('_master')

@section('title')
	Developer's best friend: Fake user generator
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

      <div class="col-lg-10 col-lg-offset-1">
        <h4 class="text-left" id="fake_user">
        </h4>
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
          ], null, 
            array(
              'id' => 'userCount',
              'placeholder' => 'Enter User Count',
              'maxlength' => 20,
              'required' => true,
              'class' => 'form-control',
            )
          ) }}  

          {{ Form::submit( 'Submit', array(
              'id' => 'submitBtn_fake_user',
              'class' => 'btn btn-primary col-lg-4 col-lg-offset-4',
          ) ) }}      
        </div>
	
    </form>

    </div> 
@stop