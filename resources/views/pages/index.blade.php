@extends('layouts.app')

@section('content')
<main role="main">
	<div class="container-fluid">
		{{-- <div class='header-bg'>
				<img src='{{asset('img/wp2302847.jpg')}}' width="1300" height="500" alt='no image'>
			</div> --}}
	</div>
		<!-- Main jumbotron for a primary marketing message or call to action -->
		
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
						<img class="first-slide" src="{{asset('img/wp2302829.jpg')}}" alt="First slide">
						<div class="centered-text" style="position:absolute; top: 50%;left: 50%;transform: translate(-50%, -50%)">
							<h1 class="text-white">Your learning at your fingertips</h1>
						</div>
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>Example headline.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
						<img class="second-slide" src="{{asset('img/wp2302829.jpg')}}" alt="Second slide">
						<div class="centered-text" style="position:absolute; top: 50%;left: 50%;transform: translate(-50%, -50%)">
								<h1 class="text-white">Your learning at your fingertips</h1>
							</div>
            <div class="container">
              <div class="carousel-caption">
                <h1>Another example headline.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
						<img class="third-slide" src="{{asset('img/wp2302847(1).jpg')}}" alt="Third slide">
						<div class="centered-text" style="position:absolute; top: 50%;left: 50%;transform: translate(-50%, -50%)">
								<h1 class="text-white text-lg">Your learning at your fingertips</h1>
							</div>
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>One more for good measure.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
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
