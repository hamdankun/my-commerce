<div class="card fixed-card">
	  <img class="card-img-top" src="{{ $product->image_path }}" alt="Card image cap">
	  <div class="card-body">
		    <h5 class="card-title">{{str_limit($product->name, 20)}}</h5>
		    <p class="card-text">
		    	{{str_limit($product->brand, 30)}}
		    </p>
	  </div>
	  <div class="card-footer d-flex flex-row">
	  		<input type="number" name="qty" class="form-control form-control-sm text-center" value="1">
	  		&nbsp;
		    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart"></i> Add To Cart</a>
	  </div>
</div>