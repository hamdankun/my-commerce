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
		<div class="product-list">
				@foreach($products as $key => $chunks)
					<div class="row mt-4">
						@foreach($chunks as $key => $product)
						    <div class="col-sm-3">
								<div class="card fixed-card">
									  <img class="card-img-top" src="{{ $product->image_path }}" alt="Card image cap">
									  <div class="card-body">
										    <h5 class="card-title">{{$product->name}}</h5>
										    <p class="card-text">
										    	{{$product->brand}}
										    </p>
									  </div>
									  <div class="card-footer d-flex flex-row">
									  		<input type="number" name="qty" class="form-control form-control-sm text-center" value="1">
									  		&nbsp;
										    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart"></i> Add To Cart</a>
									  </div>
								</div>
						    </div>
					    @endforeach
					</div>
			    @endforeach
		</div>
	</div>
@endsection