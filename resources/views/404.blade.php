@extends('template.error')

@section('title', '404')

@section('content')
	<div class="mR-60"><img alt="#" src="assets/static/images/404.png"></div>
    <div class="d-f jc-c fxd-c">
        <h1 class="mB-30 fw-900 lh-1 c-red-500" style="font-size:60px">404</h1>
        <h3 class="mB-10 fsz-lg c-grey-900 tt-c">Oops Page Not Found</h3>
        <p class="mB-30 fsz-def c-grey-700">The page you are looking for does not exist or has been moved.</p>
        <div><a href="/" type="primary" class="btn btn-primary">Go to Home</a></div>
    </div>
@endsection