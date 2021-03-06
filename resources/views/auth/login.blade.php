@extends('layouts.app')

@section('content')
@section('content')
<<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">


  <!-- Custom fonts for this template-->
  <link href="{{ asset('backend/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('backend/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body style="background-color: #eeee;">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block">
                  <img src="{{ asset('backend/wopo 1.svg') }}" alt="" style="width: 22rem; padding-top: 50px; margin-left: 60px;">
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4" style="font-size: 14px; font-family: Poppins; font-weight: 600;">Login Your Account!</h1>
                  </div>
                  <form class="user" action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="form-group">
                      <input type="email" class="form-control @error('email') is-invalid @enderror  form-control-user" name="email" placeholder="Enter Email Address...">
                      @error('email')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control @error('password') is-invalid @enderror form-control-user" name="password" placeholder="Password">
                      @error('password')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>

                    <button class="btn btn-block btn-primary" style="font-family: Poppins; font-size: 18px;">
                        Login <i class="fas fa-sign-in-alt mt-1" style="margin-left: 5px;"></i>
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('backend/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('backend/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('backend/js/sb-admin-2.min.js') }}"></script>

</body>

</html>
@endsection
