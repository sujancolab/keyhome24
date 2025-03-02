@extends('layouts.layout')
@section('content')

<section class="comman_tb_padding">
  <div class="container">
    <div class="login_form_area mt-3">
      <h1 class="lgn_title">Reset Password</h1>
      <p>Enter the OTP sent to your email</p>

      @if (session('error'))
          <div class="alert alert-danger">{{ session('error') }}</div>
      @endif

      <form class="comman_form" action="{{ route('password.reset') }}" method="POST">@csrf
          <input type="hidden" name="email" value="{{ $email }}">

          <div class="mb-3 mt-3">
              <label for="otp">OTP Code:</label>
              <input type="text" class="form-control" id="otp" name="otp" placeholder="Enter OTP" required>
          </div>

          <div class="mb-3 mt-3">
              <label for="password">New Password:</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Enter new password" required>
          </div>

          <div class="mb-3 mt-3">
              <label for="password_confirmation">Confirm Password:</label>
              <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm new password" required>
          </div>

          <div class="mb-3">
              <button type="submit" class="btn btn_comman w-100">Reset Password</button>
          </div>
      </form>
  </div>
  </div>
</section>

@endsection
