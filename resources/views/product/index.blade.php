@extends('main.master')

@section('content')
	<div class="container mt-3">
		{{-- Slider Component Disini --}}
		<div class="jumbotron">
			<h1 class="display-4">Hello, {{ Illuminate\Foundation\Inspiring::quote() }}!</h1>
			<p class="lead">
				This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.
				{{ Illuminate\Foundation\Inspiring::quote() }}
			</p>
				<hr class="my-4">
		</div>
		<div class="product-selection mt-2">
			<div class="btn-group btn-group-toggle" data-toggle="buttons">
				<label class="btn btn-warning active">
					<input type="radio" name="options" id="option1" autocomplete="off" checked> The Most Searched Products!
				</label>
				<label class="btn btn-success">
					<input type="radio" name="options" id="option2" autocomplete="off"> New Products!
				</label>
				<label class="btn btn-primary">
					<input type="radio" name="options" id="option3" autocomplete="off"> On Discount!
				</label>
				<label class="btn btn-info">
					<input type="radio" name="options" id="option4" autocomplete="off"> Free Ongkir!
				</label>
			</div>
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