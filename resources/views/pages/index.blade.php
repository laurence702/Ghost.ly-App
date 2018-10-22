@extends('layouts.app')

@section('content')
<main role="main">
	<div class="container-fluid">
		{{-- <div class='header-bg'>
				<img src='{{asset('img/wp2302847.jpg')}}' width="1300" height="500" alt='no image'>
			</div> --}}
	</div>
		<!-- Main jumbotron for a primary marketing message or call to action -->
		<div class="container">
			<div class="jumbotron col-md-12 text-center">
				<h1 class="display-3">{{$title}}</h1>
				<p class='text-dark'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum voluptatem impedit iste eveniet, rerum distinctio perferendis nostrum nemo. Neque voluptatem itaque dicta nostrum odio similique ut repellendus consectetur eius fuga.</p>
				<p><a class="btn btn-primary btn-lg" href="/login" role="button">Login &raquo;</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register &raquo;</a></p>
			</div>
			<div class='float-right'>
				<h2>A test</h2>
			</div>
		</div>
		<p>watch a video of LeighJs and how he became a super code in 3 months</p>
		<iframe width="350" height="270"
			src="https://www.youtube.com/embed/tgbNymZ7vqY">
			</iframe>	<br>			
  
		<div class="container">
		  <!-- Example row of columns -->
		  <div class="row">
			<div class="col-md-4">
			  <h2>what our students say</h2>
			  <img class='rounded-circle' src="{{asset('img/894853_514935925214242_1350363745_o.jpg')}}"/><br>
			  <p>I had a couple of months of experience trading without consistent returns.
					After taking this course I'm pretty confident that I'll be a better trader and know better when to enter a trade, how to put my stop loss and take profit, how many lots to trade and much more.</p>
			  <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
			</div>
			<div class="col-md-4">
			  <h2>what our students say</h2>
			  <img class='rounded-circle' src="{{asset('img/894853_514935925214242_1350363745_o.jpg')}}"/><br>
			  <p>I had a couple of months of experience trading without consistent returns.
					After taking this course I'm pretty confident that I'll be a better trader and know better when to enter a trade, how to put my stop loss and take profit, how many lots to trade and much more.</p>
			  <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
			</div>
			<div class="col-md-4">
			  <h2>what our students say</h2>
			  <img class='rounded-circle' src="{{asset('img/894853_514935925214242_1350363745_o.jpg')}}"/><br>
			  <p>I had a couple of months of experience trading without consistent returns.
					After taking this course I'm pretty confident that I'll be a better trader and know better when to enter a trade, how to put my stop loss and take profit, how many lots to trade and much more.</p>
			  <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
			</div>
		  </div>
  
		  <hr>
  
		</div>
@endsection
