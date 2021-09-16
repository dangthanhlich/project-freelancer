@extends('master')
@section('content')
    
<main id="main">

    <section class="breadcrumbs">
      <div class="container">
    
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Sign In</li>
        </ol>
        <h2>Sign In</h2>
    
      </div>
    </section><!-- End Breadcrumbs -->
    
    <section class="sign-in">
      <div class="container">
        <div class="row">
              <div class="col-lg-3">
              </div>
              <div class="col-lg-6">
                <div class="inner-page">
                  <div>
                      <br>
                      <h3 class="sidebar-title">Login</h3>
                      <fieldset class="push-top-xs">
                          {{-- <p class="text-center email-registered">Or Use your email registered</p> --}}
                          <form {{route('login')}} method="post">
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
                                    <input tabindex="1"  name="name" placeholder="Username" class="form-control" required="required" value="">
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
                          </form>
                          <br>
                          <hr><br>
                          <p class="text-center">
                              {{-- <a tabindex="4" style="float: left;margin-left: 40px;margin-top: -12px;" class="register" href="{{ asset('register') }}">Create New Account</a> &nbsp;&nbsp;
                              <a tabindex="5" style="float: right; margin-right: 30px; margin-top: -12px;" href="user-forget-pass.php">Forget your password?</a></p> --}}
                              {{-- <a href="{{ route('login') }}" class="text-sm text-gray-700 underline"  style="color:red;">Log in</a>

                              @if (Route::has('register'))
                                  <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline"  style="color:red;">Register</a>
                              @endif --}}

                              @if (Route::has('login'))
                              <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                  @auth
                                      <a href="{{ url('/loginb') }}" class="text-sm text-gray-700 underline" style="color:red;">Home</a>
                                  @else
                                      <a href="{{ route('login') }}" class="text-sm text-gray-700 underline"  style="color:red;">Log in</a>

                                      @if (Route::has('register'))
                                          <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline"  style="color:red;">Register</a>
                                      @endif
                                  @endauth
                              </div>
                              @endif
                      </fieldset>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
              </div>
        </div>
      </div>
    </section>
    
    </main><!-- End #main -->


@endsection
{{-- 
@if (Route::has('login'))
<div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
    @auth
        <a href="{{ url('/loginb') }}" class="text-sm text-gray-700 underline" style="color:red;">Home</a>
    @else
        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline"  style="color:red;">Log in</a>

        @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline"  style="color:red;">Register</a>
        @endif
    @endauth
</div>
@endif --}}
