@extends('frontend.layouts.master')
<!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('New/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('New/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('New/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('New/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('New/css/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('New/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('New/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('New/css/style.css') }}" type="text/css"> 

@section('content')
  <!-- Start Sidebar + Content -->
  <div class="our-slider">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">

            @foreach ($sliders as $slider)
             <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index}}" class="{{ $loop->index == 0 ? 'active' : '' }}"></li>
            @endforeach

          </ol>
          <div class="carousel-inner">

            @foreach ($sliders as $slider)
              <div class="carousel-item {{ $loop->index == 0 ? 'active' : '' }}">
                <img class="d-block w-100" src="{{ asset('images/sliders/'.$slider->image) }}" alt="{{ $slider->title }}" style="height: 550px;" />

                <div class="carousel-caption d-none d-md-block">
                  <h5>{{ $slider->title }}</h5>
                  
                  @if ($slider->button_text)
                    <p>
                      <a href="{{ $slider->button_link }}" target="_blank" class="btn btn-danger">{{ $slider->button_text }}</a>
                    </p>
                  @endif

                </div>
            </div>
            @endforeach
            

          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </div>
<!-- Categories Section End -->
    <section class="categories">
        <div class="container margin-top-20">
          <div>
            <h3> OUR CATEGORY</h3>
          </div>
            <div class="row"><br><br>
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{ asset('New/img/categories/cat-1.jpg') }}">
                            <h5><a href="http://127.0.0.1:8000/products/new/search?search=orange">ORANGE</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{ asset('New/img/categories/cat-2.jpg') }}">
                            <h5><a href="http://127.0.0.1:8000/products/new/search?search=apple">APPLE</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{ asset('New/img/categories/cat-3.jpg') }}">
                            <h5><a href="http://127.0.0.1:8000/products/new/search?search=carrot">Carrot</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{ asset('New/img/categories/cat-4.png') }}">
                            <h5><a href="http://127.0.0.1:8000/products/cow-milk">MILK</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{ asset('New/img/categories/cat-5.png') }}">
                            <h5><a href="http://127.0.0.1:8000/products/new/search?search=mango">MANGO</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->
  <div class='container margin-top-20'>
    <div class="row">
      <div class="col-md-4" style="margin-top: 40px;">
        @include('frontend.partials.product-sidebar')
      </div>

      <div class="col-md-8">
        <div class="widget">
          <h3>All Products</h3>
          @include('frontend.pages.product.partials.all_products')
        </div>
        <div class="widget">
        </div>
      </div>
    </div>
  </div>


  <div>
  
    <!--Start of Tawk.to Script-->
          <script type="text/javascript">
          var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
          (function(){
          var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
          s1.async=true;
          s1.src='https://embed.tawk.to/601a76b7c31c9117cb755a6a/1etjlvg6u';
          s1.charset='UTF-8';
          s1.setAttribute('crossorigin','*');
          s0.parentNode.insertBefore(s1,s0);
          })();
          </script>
          <!--End of Tawk.to Script-->
  
  </div>
    <script src="{{ asset('New/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('New/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('New/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('New/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('New/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('New/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('New/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('New/js/main.js') }}"></script>
  <!-- End Sidebar + Content -->
@endsection
