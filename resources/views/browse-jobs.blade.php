@extends('master')
@section('content')



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
    </section>   <!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4">
            <div class="sidebar">

              <h3 class="sidebar-title">Filter by price:</h3>
              <form role="search" method="get" action="{{asset('searchprice/')}}">
                <input type="text" name="resultb" placeholder="Price" style="width: 100%;">
              </form>

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->
          <div class="col-lg-8 entries">

            <article class="entry sidebar">
              <div class="sidebar-item search-form">
                <form role="search" method="get" action="{{asset('search/')}}">
                {{-- <form action="timkiem" method="post"> --}}
                  {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"> --}}
                  <input type="text" name="result" placeholder="Search Keyword" >
                  <button type="submit"><i class="icofont-search"></i></button>
                </form>
              </div>
              @foreach($detail as $dtail)
              <div class="main-area">
                <h2 class="entry-title">
                  <a href="blog-single.php">{{$dtail->title}}</a>
                </h2>

                <div class="entry-meta">
                  <ul>
                    <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.php">{{$dtail->name}}</a></li>
                    <li class="d-flex align-items-center"><i class="icofont-dollar"></i> <a href="blog-single.php">{{$dtail->price}}/h</a></li>
                    <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.php"><time datetime="2020-01-01">{{$dtail->updated_at}}</time></a></li>
                  </ul>
                </div>

                <div class="entry-content">
                  <p>
                    {{$dtail->TomTat}}
                  </p>
                  <div class="o-tag-skill">
                    <a href="#"><span class="o-tag-skill m-sm-top m-0-bottom get-started-btn tag-skill">{{$dtail->ten}}</span></a>
                  </div>

                  <div class="read-more">
                    <a href="{{ asset('browse-jobs-details') }}">View More</a>
                  </div>
                </div>
              </div><hr/>
              @endforeach
              {{-- {{$detail->links() }} --}}

            </article><!-- End blog entry -->



            <div class="blog-pagination">
              <ul class="justify-content-center">
                {!! $detail->links() !!}
              </ul>
            </div>

          </div><!-- End blog entries list -->



        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->


@endsection

<style>
  /* .blog-pagination {
    height: 200px;
} */
svg.w-5.h-5 {
    width: 20px;
}
p.text-sm.text-gray-700.leading-5 {
    margin-top: 10px;
}
</style>
