@extends('master')
@section('content')
    

@foreach ($detail as $detail)
@endforeach
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Browse Jobs
          </li>
        </ol>
        <h2>Browse Jobs
        </h2>

      </div>
    </section><!-- End Breadcrumbs -->
    {{-- @foreach($detail as $dtail) --}}
    
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry">

              <h2 class="entry-title">
                <a href="blog-single.php">{{$detail->title}}</a>
              </h2>
              <div class="o-tag-skill">
                <a href="#"><span class="o-tag-skill m-sm-top m-0-bottom get-started-btn tag-skill">{{$detail->name}}</span></a>
              </div>
              <hr/>

              <div class="entry-content">
                <p>
                  {{$detail->description}}
                </p>
              </div><hr/>

              <div class="box">
                <header class="job-summary">
                  <h2 class="tr-title term-h2">Terms 
                            <span class="fright">Client's budget: ${{$detail->price}} USD</span>
                          </h2>
                </header>
                <div class="form-group">          	
                  <section>
                    <h3 class="text-pre-line">How much price you'd like to bid for this job? </h3>
                    <div class="row">
                      <div class="col-md-12">
                          <div class="up-rate-widget-wrapper">
                            <div class="up-rate-widget">
                              <div class="form-group m-0">
                                <div class="row">
                                  <div class="col-md-9">
                                    <!-- <strong class="m-0 ng-binding">Bid</strong> -->
                                    <div class="m-sm-bottom">
                                    <span class="rate-help-text">Total amount the client will see <span> on your proposal</span>
                                    </span>
                                    </div>
                                  </div>
                                <div class="col-md-3 col-sm-7 col-xs-8">
                                <div class="d-flex align-items-center">
                                  <div class="form-group has-feedback fe-currency">
                                    <input class="form-control text-right p-sm-right validate[required, number, min[5],max[1000000]]" id="chargedAmount" name="chargedAmount"
                                    type="number" placeholder="0" value="{{$detail->price}}" autocomplete="off" required="required" min="5">
                                    <span class="dollar-input text-primary"><i class="fas fa-dollar-sign"></i></span>
                                  </div>
                                </div>
                                </div>
                                </div>
                              </div>
                            </div>
                        </div>
                      </div>
                    </div>
                  </section>
                  <hr/>
                  <button style="padding: 8px 80px;" type="submit"  class="btn btn-theme btn-theme2">
                    <a  href="{{ asset('themcontactapply') }}" style="color:white;">submit</a>
                    </button>
  
              </div>
            </div>

            </article><!-- End blog entry -->

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">
              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a  class="a-name-time-comment" href="blog-single.php">{{$detail->name}}</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a class="a-name-time-comment" href="blog-single.php"><time datetime="2020-01-01">{{$detail->created_at}}</time></a></li>
                </ul>
              </div>

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>





      




    </section><!-- End Blog Single Section -->
    {{-- @endforeach --}}
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->





@endsection