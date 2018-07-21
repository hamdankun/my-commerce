@extends('main.master')

@section('content')
	<div class="container mt-3">
		{{-- Slider Component Disini --}}
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="http://lorempixel.com/1290/300/technics" alt="First slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="http://lorempixel.com/1290/300/technics" alt="Second slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="http://lorempixel.com/1290/300/technics" alt="Third slide">
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
		<div class="alert alert-success mt-2 alert-dismissible fade show" role="alert">
		  	The Most Searched Products!
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    	<span aria-hidden="true">&times;</span>
		  	</button>
		</div>
		{{-- Ubah Disini berdasarkan database --}}
		<div class="product-list">
				@for($j = 0; $j < 3; $j++)
					<div class="row mt-4">
						@for($i = 0; $i < 4; $i++)
						    <div class="col-sm-3">
								<div class="card">
									  <img class="card-img-top" src="http://lorempixel.com/640/480/technics" alt="Card image cap">
									  <div class="card-body">
										    <h5 class="card-title">Card title</h5>
										    <p class="card-text">
										    	Some quick example text to build on the card title and make up the bulk of the card's content
										    </p>
										    <a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add To Cart</a>
									  </div>
								</div>
						    </div>
					    @endfor
					</div>
			    @endfor
		</div>
	</div>
@endsection