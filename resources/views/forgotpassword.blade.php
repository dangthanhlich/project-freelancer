@extends('master')
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">
    
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Reset your password</li>
        </ol>
        <h2>Reset your password</h2>
    
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
                      <h3 class="sidebar-title">Reset your password</h3>
                      <div class="social-bar text-center">
                      </div>
                      <fieldset class="push-top-xs">
                          <p class="text-center email-registered">Enter your email</p>
                          <form method="POST" action="https://emoseeker.com/sign-in-submit" accept-charset="UTF-8" id="userLogin" class="form-horizontal"><input name="_token" type="hidden" value="iM7SSrRm7pVuE3RLvFjIoikTnAAjmot09jEKPdMN">
                          
                          <div class="row form-group" style="margin-bottom: 30px;">
                              <div class="col-lg-1"></div>
                              <div class="col-lg-10">
                                  <input tabindex="1" type="email" id="TxtEmail" name="TxtEmail" placeholder="Email ..." class="form-control" required="required" value="">
                                                              </div>
                              <div class="col-lg-1"></div>
                          </div>
                          
                          <div class="row form-group">
                              <div class="col-lg-1"></div>
                              <div class="col-lg-10 center">
                                  <button style="padding: 8px 80px;" type="submit" id="sign_in" tabindex="4" class="btn btn-theme btn-theme2">Reset Password</button>
                              </div>
                              <div class="col-md-1"></div>
                          </div>
                          </form>
                          <br>
                          <hr><br>
                          <p class="text-center">
                            <a tabindex="4" style="float: left;margin-left: 42px;margin-top: -12px;" class="register" href="signup.php">Create New Account</a> 
                            <a tabindex="5" style="float: right;margin-right: 40px;margin-top: -14px;" href="sign-in.php">Sign In</a></p>
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