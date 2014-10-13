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
      <form role="form" method="GET">

        <div class="form-group col-lg-12">
          <label for="userCount">How many fake users do you want to use:</label>
          <select class="form-control" id="userCount" name="userCount">
            <option value="1">1 user</option>
            <option value="2">2 users</option>
            <option value="3">3 users</option>
            <option value="4">4 users</option>
            <option value="5">5 users</option>
          </select>          
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary col-lg-4 col-lg-offset-4" id="submitBtn">Submit</button>
        </div>

        <div class="col-lg-10 col-lg-offset-1">
		    <h3 class="text-justify" id="password">
		       	<?php
		       		for($i = 0; $i < 5; $i++){
			        	$faker = Faker\Factory::create();
			        	echo ($i+1).') '.$faker->name.'<br />';
			        	echo $faker->address.'<br />';
			        	echo $faker->text.'<br />'.'<br />';
		        	}
		        ?>
		    </h3>
  		</div>
    </form>

    </div> 
@stop