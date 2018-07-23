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
		</div>
	</div>
@endsection