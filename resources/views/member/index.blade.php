@extends('main.master')

@section('content')
	<div class="container mt-5">
		<div class="row">
			{{-- Data Diri --}}
			<div class="col-sm-3">
				<div class="card">
				  <img class="card-img-top" src="https://previews.123rf.com/images/triken/triken1608/triken160800028/61320729-male-avatar-profile-picture-default-user-avatar-guest-avatar-simply-human-head-vector-illustration-i.jpg" alt="Card image cap">
				  <div class="card-body align-center d-flex flex-column">
				    <h5 class="card-title">Hanafikun</h5>
				    <a href="#" class="btn btn-primary btn-sm"> <i class="fa fa-edit"></i> Edit Profile</a>
				  </div>
				</div>
				<div class="card mt-2">
				  <div class="card-body d-flex align-center flex-row">
				    <span>Saldo : <b>Rp. 1000,000</b></span>
				  </div>
				  <div class="card-footer d-flex align-center-full">
				  	<button class="btn btn-success btn-sm">Top Up</button>
				  </div>
				</div>
			</div>
			<div class="col-sm-9">
				{{-- Bagian Transaksi --}}
				<div class="card">
					<div class="card-header">
						<h4>My Transaction</h4>
					</div>
					<div class="panel-body container mt-3">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
						  <li class="nav-item">
						    <a class="nav-link active" data-toggle="tab" href="#waiting-payment" role="tab" aria-controls="home" aria-selected="true">
						  	<i class="fa fa-money"></i>&nbsp;Waiting For Payment</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" data-toggle="tab" href="#on-progress" role="tab" aria-controls="profile" aria-selected="false">
						    <i class="fa fa-retweet"></i>&nbsp;On Progress</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" data-toggle="tab" href="#done" role="tab" aria-controls="contact" aria-selected="false">
						    <i class="fa fa-check-square"></i>&nbsp;Done</a>
						  </li>
						</ul>
						<div class="tab-content" id="myTabContent">
						  <div class="tab-pane fade show active" id="waiting-payment" role="tabpanel" aria-labelledby="home-tab">
						  	<table class="table table-striped table-bordered">
							  <thead>
							    <tr>
							      <th scope="col">No</th>
							      <th scope="col">Invoice</th>
							      <th scope="col">Date</th>
							      <th scope="col">Grand Total</th>
							      <th scope="col">Action</th>
							    </tr>
							  </thead>
							  <tbody>
							    @for($i = 0; $i < 10; $i++)
								    <tr>
								      <th scope="row">1</th>
								      <td>INV/2017010120/000{{$i}}</td>
								      <td>01/09/2018</td>
								      <td>1000,0000</td>
								      <td>
								      	<button class="btn btn-primary btn-sm">
								      		<i class="fa fa-credit-card""></i> Pay
								      	</button>
								      </td>
								    </tr>
							    @endfor
							  </tbody>
							</table>
						  </div>
						  <div class="tab-pane fade" id="on-progress" role="tabpanel" aria-labelledby="profile-tab">
						  	<table class="table table-striped table-bordered">
							  <thead>
							    <tr>
							      <th scope="col">No</th>
							      <th scope="col">Invoice</th>
							      <th scope="col">Date</th>
							      <th scope="col">Grand Total</th>
							      <th scope="col">Action</th>
							    </tr>
							  </thead>
							  <tbody>
							  	@for($i = 0; $i < 10; $i++)
								    <tr>
								      <th scope="row">1</th>
								      <td>INV/2017010120/000{{$i}}</td>
								      <td>01/09/2018</td>
								      <td>1000,0000</td>
								      <td>
								      	<button class="btn btn-primary btn-sm">
								      		<i class="fa fa-map""></i> Tracking
								      	</button>
								      </td>
								    </tr>
							    @endfor
							  </tbody>
							</table>
						  </div>
						  <div class="tab-pane fade" id="done" role="tabpanel" aria-labelledby="contact-tab">
						  	<table class="table table-striped table-bordered">
							  <thead>
							    <tr>
							      <th scope="col">No</th>
							      <th scope="col">Invoice</th>
							      <th scope="col">Date</th>
							      <th scope="col">Grand Total</th>
							      <th scope="col">Action</th>
							    </tr>
							  </thead>
							  <tbody>
							  	@for($i = 0; $i < 10; $i++)
								    <tr>
								      <th scope="row">1</th>
								      <td>INV/2017010120/000{{$i}}</td>
								      <td>01/09/2018</td>
								      <td>1000,0000</td>
								      <td>
								      	<button class="btn btn-primary btn-sm">
								      		<i class="fa fa-eye""></i> View
								      	</button>
								      </td>
								    </tr>
							    @endfor
							  </tbody>
							</table>
						  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection