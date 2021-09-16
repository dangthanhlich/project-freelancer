
@extends('master')
@section('content')
    
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Sign Up</li>
        </ol>
        <h2>Sign Up</h2>

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
                      <h3 class="sidebar-title">Sign in/Sign up by your account social</h3>
                      <fieldset class="push-top-xs">
                          <p class="text-center email-registered">Information register</p>
                          <form action="register" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="row form-group" style="margin-bottom: 30px;">
                              <div class="col-lg-1"></div>
                              <div class="col-lg-10">
                                <input style="width: 100%;" type="text" pattern=".{3,}" title="Enter at least 3 character" class="form-control" name="name" required="required" placeholder="Display name" tabindex="1">
                              </div>
                              <div class="col-lg-1"></div>
                            </div>
                            <div class="row form-group" style="margin-bottom: 30px;">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-10">
                                    <input tabindex="1" type="email"  name="email" placeholder="Email" class="form-control" required="required" value="">
                                                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-10">
                                    <input type="password" id="TxtPassword" autocomplete="off" name="password" placeholder="Password" tabindex="2" class="form-control" required="required">
                                                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-10 center">
                                    <button style="padding: 8px 80px;" type="submit" id="sign_in" tabindex="4" class="btn btn-theme btn-theme2">Sign Up</button>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                          </form>
                          <br>
                          <hr><br>
                          <p class="text-center">
                              <p class="text-center">You have an account ?
                              <a tabindex="7" href="{{ asset('login') }}"> <strong>Sign In</strong> </a>
                          </p>
                          </p>
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
