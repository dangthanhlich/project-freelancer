<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="index2.html" class="h1"><b>Admin</b></a>
    </div>
    <div class="card-body">

      <form role="form" {{route('dangnhap')}} method="POST">
            @if(count($errors) >0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $err)
                {{$err}}<br>
                @endforeach
            </div>
            @endif
            @if(session('thongbao'))
            <div class="alert alert-danger">
                {{session('thongbao')}}
            </div>
            @endif
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email" name=email style="width:100%;"><br /><br /><br />
            <input type="password" class="form-control" placeholder="Password" name=password  style="width:100%;">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          
        </form>
     </div>
      <!-- /.social-auth-links -->
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/dist/js/adminlte.min.js"></script>
</body>
</html>

{{-- 
<form action="dangnhap" method="post">
    @if(count($errors) >0)
    <div class="alert alert-danger">
        @foreach($errors->all() as $err)
        {{$err}}<br>
        @endforeach
    </div>
    @endif
    @if(session('thongbao'))
      <div class="alert alert-danger">
        {{session('thongbao')}}
      </div>
    @endif
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="row form-group" style="margin-bottom: 30px;">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
            <input tabindex="1"  name="email" placeholder="email" class="form-control" required="required" value="">
                                        </div>
        <div class="col-lg-1"></div>
    </div>
    <div class="row form-group">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
            <input type="password" i name="password" placeholder="Password" tabindex="2" class="form-control" required="required">
                                        </div>
        <div class="col-lg-1"></div>
    </div>
    
    <div class="row form-group">
        <div class="col-lg-1"></div>
        <div class="col-lg-10 center">
            <button style="padding: 8px 80px;" type="submit"  class="btn btn-theme btn-theme2">Sign In</button>
        </div>
        <div class="col-md-1"></div>
    </div>
  </form> --}}