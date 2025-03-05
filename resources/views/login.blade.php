@extends('layouts.layout')
@section('content')
<!--  -->
<section class="comman_tb_padding">
  <div class="container">
    <div class="login_form_area mt-3">
      <h1 class="lgn_title">Login</h1>
      <p>Access your personal space</p>
      <form class="comman_form" action="{{route('login')}}" method="POST">@csrf
          <div class="mb-3 mt-3">
              <label for="email">Email:</label>
              <div class="inp_relative">
                  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                  <div class="inp_icon"><img src="assets/images/mail_icon.svg" alt="i"></div>
              </div>
          </div>
          <div class="mb-3">
              <label for="pwd">Password:</label>
              <div class="inp_relative">
                  <input type="password" class="form-control" id="password-field" placeholder="Enter password"
                      name="password">
                  <div class="inp_icon"><img src="assets/images/lock_icon.svg" alt="i"></div>
                  <span toggle="#password-field" class="field-icon toggle-password">Display</span>
              </div>
          </div>

          <div class="form-check mb-3 text-end">
              <a href="{{url('/forgot-password')}}" class="forgot_link">Forgot Password?</a>
          </div>
          <div class="mb-3">
              <button type="submit" class="btn btn_comman w-100">Login</button>
          </div>

          <div>
              <a class="border_btn w-100 text-center" href="{{route('register')}}">Create Account</a>
          </div>
      </form>
  </div>
  </div>
</section>

@endsection
@section('scripts')
<script type="text/javascript">
  $(".toggle-password").click(function () {
      // Toggle between "Display" and "Hide" text
      if ($(this).text() === "Display") {
          $(this).text("Hide");
      } else {
          $(this).text("Display");
      }

      var input = $($(this).attr("toggle"));
      if (input.attr("type") == "password") {
          input.attr("type", "text");
      } else {
          input.attr("type", "password");
      }
  });
</script>
@endsection
