
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-xl-10 d-flex align-items-center">
          <h1 class="logo mr-auto"><a href="{{ asset('main') }}">Freelancer</a></h1>

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li class="active"><a href="{{ asset('main') }}">How It Works</a></li>
              <li><a href="{{ asset('browse-jobs') }}">Browse Jobs</a></li>
              
              <li>
                {{-- @if (Route::has('login'))
                  <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                      @auth
                          <a href="{{ url('/main') }}" class="text-sm text-gray-700 underline">Home</a>
                      @else
                          <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                          @if (Route::has('register'))
                              <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                          @endif
                      @endauth
                  </div>
              @endif --}}
              </li>
            </ul>
          </nav><!-- .nav-menu -->
          
          {{-- <a href="{{ asset('post-a-job') }}" class="get-started-btn scrollto">Post a Project</a> --}}
          <a href="{{ asset('login') }}" class="get-started-btn scrollto">Post a Project</a>
        </div>
      </div>

    </div>
  </header><!-- End Header -->



  <body class="antialiased">
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
</body>
