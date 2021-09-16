<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DA</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="./assets/css/style.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-xl-10 d-flex align-items-center">
          <h1 class="logo mr-auto"><a href="index.php">Freelancer</a></h1>
          {{-- @foreach($user_freelancer as $user_freelancer)
          <li>{{$user_freelancer->name}}</li>
          @endforeach --}}
          <nav class="nav-menu d-none d-lg-block">
            <ul>
             
            </ul>
          </nav><!-- .nav-menu -->
          <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif
          
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
          
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
          
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
          </ul>
          
          
          
          {{-- <a href="{{url('logout')}}" class="get-started-btn scrollto">logout</a> --}}
        </div>
      </div>

    </div>
  </header><!-- End Header -->

    
  <main id="main">

<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
  <div class="container">

    <ol>
      <li><a href="index.php">Home</a></li>
      <li>Post a ProJect</li>
    </ol>
    <h2>Post a ProJect</h2>

  </div>
</section><!-- End Breadcrumbs -->

<section class="post-a-job">
  <div class="container">
    <div class="row">
          <div class="col-lg-2">
          </div>
          <div class="col-lg-8">
            <div class="inner-page">
              <div>
                <h2 class="sidebar-title tell-us">Tell us what you need done</h2>
                <p class="center"> 
                  Contact skilled freelancers within minutes. View profiles, ratings,
                  portfolios and chat with them. Pay the freelancer only when you are
                  100% satisfied with their work.
                </p>
              </div>
              <form action="themuserfreelancer" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <div class="name-project">
                    <h3 class="h3-name-project">Choose a name for your project</h3>
                    <input  placeholder="name" class="form-control" name="name">
                  </div>
                  <div class="title-project">
                    <h3 class="h3-name-project">Choose a title for your project</h3>
                    <input  placeholder="title" class="form-control" name="title">
                  </div>
                  <div class="tell-us-project">
                    <h3 class="h3-name-project">Tell us more about your project</h3>
                    <p> 
                      Start with a bit about yourself or your business, and include an overview of what you need done.
                    </p>
                    <textarea _ngcontent-webapp-c191="" flcontrolvalueaccessor="" class="TextArea ng-dirty ng-touched Error ng-invalid" data-borderless="false" 
                    placeholder="Describe your project here..." rows="4" data-margin-bottom="xxxsmall" name="description"></textarea><br>
                    <p> 
                      text summary
                    </p>
                    <textarea _ngcontent-webapp-c191="" flcontrolvalueaccessor="" class="TextArea ng-dirty ng-touched Error ng-invalid" data-borderless="false" 
                    placeholder="text summary..." rows="4" data-margin-bottom="xxxsmall" name="TomTat"></textarea> 


                  </div>
                  <div class="name-project skill-project">
                    <h3 class="h3-name-project">What skills are required?</h3>
                    <p>Enter up to 5 skills that best describe your project. Freelancers will use these skills to find projects they are most interested and experienced in.</p>
                    <input name="ten"   placeholder="Enter skills here..." class="form-control" >
                  </div>
                  <div class="name-project price-project">
                    <h3 class="h3-name-project">What is your estimated budget?</h3>
                    <input   placeholder="price" class="form-control" name="price">
                  </div>
                  <button style="padding: 8px 80px;" type="submit" id="sign_in"  class="btn btn-theme btn-theme2 post-a-job-button">Post a Project</button>
              </form>
            </div>
          </div>
          <div class="col-lg-2">
          </div>
    </div>
  </div>
</section>
</main><!-- End #main -->
<footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact footer-links">
            <h4>ABOUT US</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Contact Us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms & Conditions</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy Policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>JOB SEEKERS</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Create Account</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">FAQ</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>EMPLOYERS</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Create Account</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Freelancer Talents</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">FAQ</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>NEWSLETTER</h4>
            <p>Regiser your email to get latest update of system and latest jobs</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright © 2020 freelancer, All rights reserved :: Privacy Policy:: Contact Us
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


    
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>