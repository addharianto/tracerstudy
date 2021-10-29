@extends('layouts.frontend.app',[
    'title' => 'Home',
])
@section('content')
<section class="contact-area">
    <div class="container">
        <div class="row">
            <!-- Contact Info -->
			<div class="col-12 col-lg-3">
			</div>
            <div class="col-12 col-lg-6">
                <div class="contact--info mt-50">
							<center><h4 class="card-title">Daftar Akun Tracer Study</h4></center>
							<form method="POST" class="my-login-validation" autocomplete="off" action="{{ route('register') }}">

								@if ( Session::get('success'))
									 <div class="alert alert-success">
										 {{ Session::get('success') }}
									 </div>
								@endif
								@if ( Session::get('error'))
									 <div class="alert alert-danger">
										 {{ Session::get('error') }}
									 </div>
								@endif
                                @csrf
								<div class="form-group">
									<label for="name">Nama</label>
									<input id="name" type="text" class="form-control" name="name"  autofocus placeholder="Enter name" value="{{ old('name') }}">
									<span class="text-danger">@error('name'){{ $message }}@enderror</span>
								</div>

								<div class="form-group">
									<label for="email">E-Mail</label>
									<input id="email" type="email" class="form-control" name="email"  placeholder="Enter email" value="{{ old('email') }}">
									<span class="text-danger">@error('email'){{ $message }}@enderror</span>
								</div>
                                <div class="form-group">
									<label for="favoriteColor">Warna Pavorite</label>
									<input id="favoriteColor" type="text" class="form-control" name="favoriteColor"  placeholder="Enter favorite color">
									<span class="text-danger">@error('favoriteColor'){{ $message }}@enderror</span>
								</div>

								<div class="form-group">
									<label for="password">Kata Sandi</label>
									<input id="password" type="password" class="form-control" name="password"  data-eye placeholder="Enter password">
									<span class="text-danger">@error('password'){{ $message }}@enderror</span>
								</div>
                                <div class="form-group">
									<label for="password-confirm">Konfirmasi Kata Sandi</label>
									<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required data-eye placeholder="Enter confirm password">
									<span class="text-danger">@error('password_confirmation'){{ $message }}@enderror</span>
                                    
								</div>


								<div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="agree" id="agree" class="custom-control-input">
										<label for="agree" class="custom-control-label">I agree to the <a href="#">Terms and Conditions</a></label>
										<div class="invalid-feedback">
											You must agree with our Terms and Conditions
										</div>
									</div>
								</div>

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										Daftar
									</button>
								</div>
								<div class="mt-4 text-center">
									Sudah punya akun ? <a href="{{route('login')}}">Login</a>
								</div>
							</form>
						</div>
					</div>
				<div class="col-12 col-lg-3">
				</div>
			</div>
		</div>
	</section>


@stop