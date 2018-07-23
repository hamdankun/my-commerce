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
			@foreach($products->chunk(4) as $key => $chunks)
				<div class="row mt-4">
					@foreach($chunks as $key => $product)
					    <div class="col-sm-3">
							@include('components.card', ['product' => $product])
					    </div>
				    @endforeach
				</div>
		    @endforeach
		    <div class="d-flex align-center-full mt-3">
		    	{{ $products->links() }}
		    </div>
		</div>
	</div>
@endsection