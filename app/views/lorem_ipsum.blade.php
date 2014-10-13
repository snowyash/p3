@extends('_master')

@section('title')
	Developer's best friend: Lorem Ipsum generator
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
      <form role="form" method="GET">

        <div class="form-group col-lg-12">
          <label for="parCount">How many paragraphs do you want to use:</label>
          <select class="form-control" id="parCount" name="parCount">
            <option value="1">1 paragraph</option>
            <option value="2">2 paragraphs</option>
            <option value="3">3 paragraphs</option>
            <option value="4">4 paragraphs</option>
            <option value="5">5 paragraphs</option>
          </select>          
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary col-lg-4 col-lg-offset-4" id="submitBtn">Submit</button>
        </div>

        <div class="col-lg-10 col-lg-offset-1">
		    <h3 class="text-justify" id="password">
		       	<?php
		        	$generator = new Badcow\LoremIpsum\Generator();
					$paragraphs = $generator->getParagraphs(1);
					echo implode('<p>', $paragraphs);
		        ?>
		    </h3>
  		</div>
    </form>

    </div> 
@stop