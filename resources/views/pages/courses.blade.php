@extends('layouts.app')

@section('content')
		<h1>{{$title}}</h1>
		@if(count($services) > 0)
		<ul class="list-group col-md-5">
			@foreach ($services as $service)
				<li class="list-group-item">{{$service}}</li>
			@endforeach
		</ul>
		@endif
		{{-- diffrent bootstrap card for use --}}
		<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
			<div class="card-header">Header</div>
				<div class="card-body">
				  <h5 class="card-title">Primary Video Title here</h5>
				  <p class="card-text">Some quick example text to build on the Video Title here and make up the bulk of the card's content.</p>
			</div>
			  </div>
			  <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
				<div class="card-header">Header</div>
				<div class="card-body">
				  <h5 class="card-title">Secondary Video Title here</h5>
				  <p class="card-text">Some quick example text to build on the Video Title here and make up the bulk of the card's content.</p>
				</div>
			  </div>
			  <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
				<div class="card-header">Header</div>
				<div class="card-body">
				  <h5 class="card-title">Success Video Title here</h5>
				  <p class="card-text">Some quick example text to build on the Video Title here and make up the bulk of the card's content.</p>
				</div>
			  </div>
			  <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
				<div class="card-header">Header</div>
				<div class="card-body">
				  <h5 class="card-title">Danger Video Title here</h5>
				  <p class="card-text">Some quick example text to build on the Video Title here and make up the bulk of the card's content.</p>
				</div>
			  </div>
			  <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
				<div class="card-header">Header</div>
				<div class="card-body">
				  <h5 class="card-title">Warning Video Title here</h5>
				  <p class="card-text">Some quick example text to build on the Video Title here and make up the bulk of the card's content.</p>
				</div>
			  </div>
			  <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
				<div class="card-header">Header</div>
				<div class="card-body">
				  <h5 class="card-title">Info Video Title here</h5>
				  <p class="card-text">Some quick example text to build on the Video Title here and make up the bulk of the card's content.</p>
				</div>
			  </div>
			  <div class="card bg-light mb-3" style="max-width: 18rem;">
				<div class="card-header">Header</div>
				<div class="card-body">
				  <h5 class="card-title">Light Video Title here</h5>
				  <p class="card-text">Some quick example text to build on the Video Title here and make up the bulk of the card's content.</p>
				</div>
			  </div>
			  <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
				<div class="card-header">Header</div>
				<div class="card-body">
				  <h5 class="card-title">Dark Video Title here</h5>
				  <p class="card-text">Some quick example text to build on the Video Title here and make up the bulk of the card's content.</p>
				</div>
			  </div>	
			  {{-- End of bootstrap cards 	 --}}
@endsection