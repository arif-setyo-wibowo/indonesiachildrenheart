@extends('template.template')
@section('content')
    
<section class="wrapper bg-dark">
    <div class="swiper-container swiper-hero dots-over" data-margin="0" data-autoplay="true" data-autoplaytime="7000" data-nav="true" data-dots="true" data-items="1">
      <div class="swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image" data-image-src="{{ asset('assets/')}}/img/new/slider_1.jpg">
            <div class="container h-100">
              <div class="row h-100">
                <div class="col-md-10 offset-md-1 col-lg-7 offset-lg-5 col-xl-6 offset-xl-6 col-xxl-5 offset-xxl-6 text-center text-lg-start justify-content-center align-self-center align-items-start">
                  <h2 class="display-1 fs-56 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">We bring solutions to make life easier.</h2>
                  <p class="lead fs-23 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">We are a creative company that focuses on long term relationships with customers.</p>
                  <div class="animate__animated animate__slideInUp animate__delay-3s"><a href="#" class="btn btn-lg btn-outline-white rounded-pill">Read More</a></div>
                </div>
                <!--/column -->
              </div>
              <!--/.row -->
            </div>
            <!--/.container -->
          </div>
          <!--/.swiper-slide -->
          <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image" data-image-src="{{ asset('assets/')}}/img/new/slider_2.jpg">
            <div class="container h-100">
              <div class="row h-100">
                <div class="col-md-11 col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center justify-content-center align-self-center">
                  <h2 class="display-1 fs-56 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">We are trusted by over a million customers.</h2>
                  <p class="lead fs-23 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">Here a few reasons why our customers choose us.</p>
                  <div class="animate__animated animate__slideInUp animate__delay-3s"><a href="{{ asset('assets/')}}/media/movie.mp4" class="btn btn-circle btn-white btn-play ripple mx-auto mb-5" data-glightbox><i class="icn-caret-right"></i></a></div>
                </div>
                <!--/column -->
              </div>
              <!--/.row -->
            </div>
            <!--/.container -->
          </div>
          <!--/.swiper-slide -->
          <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image" data-image-src="{{ asset('assets/')}}/img/new/slider_3.jpg">
            <div class="container h-100">
              <div class="row h-100">
                <div class="col-md-10 offset-md-1 col-lg-7 offset-lg-5 col-xl-6 offset-xl-6 col-xxl-5 offset-xxl-6 text-center text-lg-start justify-content-center align-self-center align-items-start">
                  <h2 class="display-1 fs-56 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">Just sit and relax.</h2>
                  <p class="lead fs-23 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">We make sure your spending is stress free so that you can have the perfect control.</p>
                  <div class="animate__animated animate__slideInUp animate__delay-3s"><a href="#" class="btn btn-lg btn-outline-white rounded-pill">Contact Us</a></div>
                </div>
                <!--/column -->
              </div>
              <!--/.row -->
            </div>
            <!--/.container -->
          </div>
          <!--/.swiper-slide -->
        </div>
        <!--/.swiper-wrapper -->
      </div>
      <!-- /.swiper -->
    </div>
    <!-- /.swiper-container -->
  </section>
  <section class="wrapper bg-light angled lower-end">
    <div class="container py-14 py-md-16">
      <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17 align-items-center">
        <div class="col-lg-6 position-relative order-lg-2">
          <div class="shape bg-dot primary rellax w-16 h-20" data-rellax-speed="1" style="top: 3rem; left: 5.5rem"></div>
          <div class="overlap-grid overlap-grid-2">
            <div class="item">
              <figure class="rounded shadow"><img src="{{ asset('uploads/'.$sejarah->foto)}}" alt=""></figure>
            </div>
          </div>
        </div>
        <!--/column -->
        <div class="col-lg-6">
          <img src="{{ asset('assets/')}}/img/icons/lineal/megaphone.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
          <h2 class="display-4 mb-3">{{ $sejarah->judul}}</h2>
          <p class="lead fs-lg">{{ $sejarah->dekripsi}}</p>
          
          <!--/.row -->
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
  <section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
      <div class="row mb-3">
        <div class="col-md-10 col-xl-9 col-xxl-7 mx-auto text-center">
          <img src="{{ asset('assets/')}}/img/icons/lineal/team.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
          <h2 class="display-4 mb-3 px-lg-14">Yayasan Indonesia Children Heart</h2>
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
      <div class="position-relative">
        <div class="shape rounded-circle bg-soft-yellow rellax w-16 h-16" data-rellax-speed="1" style="bottom: 0.5rem; right: -1.7rem;"></div>
        <div class="shape rounded-circle bg-line red rellax w-16 h-16" data-rellax-speed="1" style="top: 0.5rem; left: -1.7rem;"></div>
        <div class="swiper-container dots-closer mb-6" data-margin="0" data-dots="true" data-items-xxl="4" data-items-lg="3" data-items-md="2" data-items-xs="1">
          <div class="swiper">
            <div class="swiper-wrapper">
              @foreach ($pengurus as $item)
                  
              <div class="swiper-slide">
                <div class="item-inner">
                  <div class="card">
                    <div class="card-body">
                      <img class="rounded-circle w-15 mb-4" src="{{ asset('uploads/'.$item->foto)}}" srcset="{{ asset('assets/')}}/img/avatars/te1@2x.jpg 2x" alt="" />
                      <h4 class="mb-1">{{ $item->nama}}</h4>
                      <div class="meta mb-2">{{ $item->jabatan}}</div>
                      <!-- /.social -->
                    </div>
                    <!--/.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.item-inner -->
              </div>
              @endforeach
              <!--/.swiper-slide -->
            </div>
            <!--/.swiper-wrapper -->
          </div>
          <!-- /.swiper -->
        </div>
        <!-- /.swiper-container -->
      </div>
      <!-- /.position-relative -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
  <!-- /section -->
  <section class="wrapper bg-light">
    <div class="container pb-14 pb-md-16">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <!-- /.blog -->
          <div class="blog grid grid-view">
            <div class="row isotope gx-md-8 gy-8 mb-8">
              @foreach ($berita as $item)
              <article class="item post col-md-6">
                <div class="card">
                    <figure class="card-img-top overlay overlay-1 hover-scale">
                        <a href="#"> <img style="max-width: 100%; max-height: 300px; width: auto; height: auto;" src="{{ asset('uploads/'.$item->cover)}}" alt="" /></a>
                        <figcaption>
                            <h5 class="from-top mb-0">Read More</h5>
                        </figcaption>
                    </figure>
                    <div class="card-body">
                        <div class="post-header">
                            <div class="post-category text-line">
                                <a href="#" class="hover" rel="category">{{ $item->kategori->kategori}}</a>
                            </div>
                            <!-- /.post-category -->
                            <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="{{ route('berita.detail')}}">{{ $item->judul}}</a></h2>
                        </div>
                        <!-- /.post-header -->
                        <div class="post-content">
                            <p>
                                {{ strlen(strip_tags($item->isi)) > 70 ? substr(strip_tags($item->isi), 0, 70) . '...' : strip_tags($item->isi) }}
                            </p>
                            
                        </div>
                        <!-- /.post-content -->
                    </div>
                    <!--/.card-body -->
                    <div class="card-footer">
                        <ul class="post-meta d-flex mb-0">
                            <li class="post-date">
                                <i class="uil uil-calendar-alt"></i>
                                <span>{{ \Carbon\Carbon::parse($item->created_at)->format('d M Y') }}</span>
                            </li>                                    
                        </ul>
                        <!-- /.post-meta -->
                    </div>
                    <!-- /.card-footer -->
                </div>
                <!-- /.card -->
            </article>
              @endforeach
              <!-- /.post -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.blog -->
          <div class="text-center mt-10">
            <a href="{{ route('berita')}}" class="btn btn-lg btn-primary rounded-pill">Lihat Lebih Banyak</a>
          </div>
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
@endsection