@extends('main.master')

@section('content')
	@auth
		@include('components.member-area')
	@endauth
	@guest
		@include('components.login')
	@endguest
@endsection