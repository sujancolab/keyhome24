@extends('layouts.layout')
@section('content')
<!--  -->
<section class="comman_tb_padding">
  <div class="container">
    <div class="login_form_area mt-3">
      <h1 class="lgn_title">Login</h1>
      <p>Access your personal space</p>
      <form class="comman_form" action="{{ route('password.email') }}" method="POST">@csrf
          <div class="mb-3 mt-3">
              <label for="email">Email:</label>
              <div class="inp_relative">
                  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                  <div class="inp_icon"><img src="assets/images/mail_icon.svg" alt="i"></div>
              </div>
          </div>

          <div class="mb-3">
              <button type="submit" class="btn btn_comman w-100">Send Email Password Reset Link</button>
          </div>
      </form>
  </div>
  </div>
</section>

@endsection
@section('scripts')
<script type="text/javascript">

</script>
@endsection
