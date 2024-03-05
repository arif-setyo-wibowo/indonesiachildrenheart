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
              <figure class="rounded shadow"><img src="{{ asset('assets/')}}/img/photos/about2.jpg" srcset="{{ asset('assets/')}}/img/photos/about2@2x.jpg 2x" alt=""></figure>
            </div>
            <div class="item">
              <figure class="rounded shadow"><img src="{{ asset('assets/')}}/img/photos/about3.jpg" srcset="{{ asset('assets/')}}/img/photos/about3@2x.jpg 2x" alt=""></figure>
            </div>
          </div>
        </div>
        <!--/column -->
        <div class="col-lg-6">
          <img src="{{ asset('assets/')}}/img/icons/lineal/megaphone.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
          <h2 class="display-4 mb-3">Apa itu Yayasan Indonesia Children Heart?</h2>
          <p class="lead fs-lg">Yayasan Indonesian Children Heart dibangun dan dibentuk atas dasar kepedulian terhadap anak anak yang terlahir dengan kelainan jantung, berharap mereka dapat hidup baik dan sehat serta mendapatkan kehidupan yang layak di masa yang akan datang.</p>
          <p class="mb-6">
            Mereka juga berhak bahagia. Berhak bermain dan tertawa lepas.
            Mereka berhak mendapatkan apa yang seperti anak anak seusia mereka dapatkan pada umumnya.
            Tidak ada satu orang tua pun yang dengan sengaja meminta buah hati tercintanya terlahir demikian. Tidak ada satu anak pun didunia ini yang bisa meminta dilahirkan dengan kondisi seperti apa.
            SEMUA ADALAH ATAS KEHENDAK-NYA
          </p>
          <!--/.row -->
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
      <div class="row mb-5">
        <div class="col-md-10 col-xl-8 col-xxl-7 mx-auto text-center">
          <img src="{{ asset('assets/')}}/img/icons/lineal/list.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
          <h2 class="display-4 mb-4 px-lg-14">Here are 3 working steps to organize our business projects.</h2>
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
      <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="card me-lg-6">
            <div class="card-body p-6">
              <div class="d-flex flex-row">
                <div>
                  <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span class="number">01</span></span>
                </div>
                <div>
                  <h4 class="mb-1">Collect Ideas</h4>
                  <p class="mb-0">Nulla vitae elit libero pharetra augue dapibus.</p>
                </div>
              </div>
            </div>
            <!--/.card-body -->
          </div>
          <!--/.card -->
          <div class="card ms-lg-13 mt-6">
            <div class="card-body p-6">
              <div class="d-flex flex-row">
                <div>
                  <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span class="number">02</span></span>
                </div>
                <div>
                  <h4 class="mb-1">Data Analysis</h4>
                  <p class="mb-0">Vivamus sagittis lacus vel augue laoreet.</p>
                </div>
              </div>
            </div>
            <!--/.card-body -->
          </div>
          <!--/.card -->
          <div class="card mx-lg-6 mt-6">
            <div class="card-body p-6">
              <div class="d-flex flex-row">
                <div>
                  <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span class="number">03</span></span>
                </div>
                <div>
                  <h4 class="mb-1">Finalize Product</h4>
                  <p class="mb-0">Cras mattis consectetur purus sit amet.</p>
                </div>
              </div>
            </div>
            <!--/.card-body -->
          </div>
          <!--/.card -->
        </div>
        <!--/column -->
        <div class="col-lg-6">
          <h2 class="display-6 mb-3">How It Works?</h2>
          <p class="lead fs-lg pe-lg-5">Find out everything you need to know and more about how we create our business process models.</p>
          <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Nullam quis risus eget urna mollis ornare.</p>
          <p class="mb-6">Nullam id dolor id nibh ultricies vehicula ut id elit. Vestibulum id ligula porta felis euismod semper. Aenean lacinia bibendum nulla sed consectetur. Sed posuere consectetur est at lobortis. Vestibulum id ligula porta felis.</p>
          <a href="#" class="btn btn-primary rounded-pill mb-0">Learn More</a>
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
          <h2 class="display-4 mb-3 px-lg-14">Save your time and money by choosing our professional team.</h2>
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
              <div class="swiper-slide">
                <div class="item-inner">
                  <div class="card">
                    <div class="card-body">
                      <img class="rounded-circle w-15 mb-4" src="{{ asset('assets/')}}/img/avatars/te1.jpg" srcset="{{ asset('assets/')}}/img/avatars/te1@2x.jpg 2x" alt="" />
                      <h4 class="mb-1">Coriss Ambady</h4>
                      <div class="meta mb-2">Financial Analyst</div>
                      <p class="mb-2">Fermentum massa justo sit amet risus morbi leo.</p>
                      <nav class="nav social mb-0">
                        <a href="#"><i class="uil uil-twitter"></i></a>
                        <a href="#"><i class="uil uil-facebook-f"></i></a>
                        <a href="#"><i class="uil uil-dribbble"></i></a>
                      </nav>
                      <!-- /.social -->
                    </div>
                    <!--/.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.item-inner -->
              </div>
              <!--/.swiper-slide -->
              <div class="swiper-slide">
                <div class="item-inner">
                  <div class="card">
                    <div class="card-body">
                      <img class="rounded-circle w-15 mb-4" src="{{ asset('assets/')}}/img/avatars/te2.jpg" srcset="{{ asset('assets/')}}/img/avatars/te2@2x.jpg 2x" alt="" />
                      <h4 class="mb-1">Cory Zamora</h4>
                      <div class="meta mb-2">Marketing Specialist</div>
                      <p class="mb-2">Fermentum massa justo sit amet risus morbi leo.</p>
                      <nav class="nav social mb-0">
                        <a href="#"><i class="uil uil-twitter"></i></a>
                        <a href="#"><i class="uil uil-facebook-f"></i></a>
                        <a href="#"><i class="uil uil-dribbble"></i></a>
                      </nav>
                      <!-- /.social -->
                    </div>
                    <!--/.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.item-inner -->
              </div>
              <!--/.swiper-slide -->
              <div class="swiper-slide">
                <div class="item-inner">
                  <div class="card">
                    <div class="card-body">
                      <img class="rounded-circle w-15 mb-4" src="{{ asset('assets/')}}/img/avatars/te3.jpg" srcset="{{ asset('assets/')}}/img/avatars/te3@2x.jpg 2x" alt="" />
                      <h4 class="mb-1">Nikolas Brooten</h4>
                      <div class="meta mb-2">Sales Manager</div>
                      <p class="mb-2">Fermentum massa justo sit amet risus morbi leo.</p>
                      <nav class="nav social mb-0">
                        <a href="#"><i class="uil uil-twitter"></i></a>
                        <a href="#"><i class="uil uil-facebook-f"></i></a>
                        <a href="#"><i class="uil uil-dribbble"></i></a>
                      </nav>
                      <!-- /.social -->
                    </div>
                    <!--/.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.item-inner -->
              </div>
              <!--/.swiper-slide -->
              <div class="swiper-slide">
                <div class="item-inner">
                  <div class="card">
                    <div class="card-body">
                      <img class="rounded-circle w-15 mb-4" src="{{ asset('assets/')}}/img/avatars/te4.jpg" srcset="{{ asset('assets/')}}/img/avatars/te4@2x.jpg 2x" alt="" />
                      <h4 class="mb-1">Jackie Sanders</h4>
                      <div class="meta mb-2">Investment Planner</div>
                      <p class="mb-2">Fermentum massa justo sit amet risus morbi leo.</p>
                      <nav class="nav social mb-0">
                        <a href="#"><i class="uil uil-twitter"></i></a>
                        <a href="#"><i class="uil uil-facebook-f"></i></a>
                        <a href="#"><i class="uil uil-dribbble"></i></a>
                      </nav>
                      <!-- /.social -->
                    </div>
                    <!--/.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.item-inner -->
              </div>
              <!--/.swiper-slide -->
              <div class="swiper-slide">
                <div class="item-inner">
                  <div class="card">
                    <div class="card-body">
                      <img class="rounded-circle w-15 mb-4" src="{{ asset('assets/')}}/img/avatars/te5.jpg" srcset="{{ asset('assets/')}}/img/avatars/te5@2x.jpg 2x" alt="" />
                      <h4 class="mb-1">Laura Widerski</h4>
                      <div class="meta mb-2">Sales Specialist</div>
                      <p class="mb-2">Fermentum massa justo sit amet risus morbi leo.</p>
                      <nav class="nav social mb-0">
                        <a href="#"><i class="uil uil-twitter"></i></a>
                        <a href="#"><i class="uil uil-facebook-f"></i></a>
                        <a href="#"><i class="uil uil-dribbble"></i></a>
                      </nav>
                      <!-- /.social -->
                    </div>
                    <!--/.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.item-inner -->
              </div>
              <!--/.swiper-slide -->
              <div class="swiper-slide">
                <div class="item-inner">
                  <div class="card">
                    <div class="card-body">
                      <img class="rounded-circle w-15 mb-4" src="{{ asset('assets/')}}/img/avatars/te6.jpg" srcset="{{ asset('assets/')}}/img/avatars/te6@2x.jpg 2x" alt="" />
                      <h4 class="mb-1">Tina Geller</h4>
                      <div class="meta mb-2">Financial Analyst</div>
                      <p class="mb-2">Fermentum massa justo sit amet risus morbi leo.</p>
                      <nav class="nav social mb-0">
                        <a href="#"><i class="uil uil-twitter"></i></a>
                        <a href="#"><i class="uil uil-facebook-f"></i></a>
                        <a href="#"><i class="uil uil-dribbble"></i></a>
                      </nav>
                      <!-- /.social -->
                    </div>
                    <!--/.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.item-inner -->
              </div>
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
              <article class="item post col-md-6">
                <div class="card">
                  <figure class="card-img-top overlay overlay-1 hover-scale"><a href="#"> <img src="./assets/img/photos/b4.jpg" alt="" /></a>
                    <figcaption>
                      <h5 class="from-top mb-0">Read More</h5>
                    </figcaption>
                  </figure>
                  <div class="card-body">
                    <div class="post-header">
                      <div class="post-category text-line">
                        <a href="#" class="hover" rel="category">Coding</a>
                      </div>
                      <!-- /.post-category -->
                      <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Ligula tristique quis risus</a></h2>
                    </div>
                    <!-- /.post-header -->
                    <div class="post-content">
                      <p>Mauris convallis non ligula non interdum. Gravida vulputate convallis tempus vestibulum cras imperdiet nun eu dolor. Aenean lacinia bibendum nulla sed.</p>
                    </div>
                    <!-- /.post-content -->
                  </div>
                  <!--/.card-body -->
                  <div class="card-footer">
                    <ul class="post-meta d-flex mb-0">
                      <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14 Apr 2022</span></li>
                      <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>4</a></li>
                      <li class="post-likes ms-auto"><a href="#"><i class="uil uil-heart-alt"></i>5</a></li>
                    </ul>
                    <!-- /.post-meta -->
                  </div>
                  <!-- /.card-footer -->
                </div>
                <!-- /.card -->
              </article>
              <!-- /.post -->
              <article class="item post col-md-6">
                <div class="card">
                  <figure class="card-img-top overlay overlay-1 hover-scale"><a href="#"> <img src="./assets/img/photos/b5.jpg" alt="" /></a>
                    <figcaption>
                      <h5 class="from-top mb-0">Read More</h5>
                    </figcaption>
                  </figure>
                  <div class="card-body">
                    <div class="post-header">
                      <div class="post-category text-line">
                        <a href="#" class="hover" rel="category">Workspace</a>
                      </div>
                      <!-- /.post-category -->
                      <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Nullam id dolor elit id nibh</a></h2>
                    </div>
                    <!-- /.post-header -->
                    <div class="post-content">
                      <p>Mauris convallis non ligula non interdum. Gravida vulputate convallis tempus vestibulum cras imperdiet nun eu dolor. Aenean lacinia bibendum nulla sed.</p>
                    </div>
                    <!-- /.post-content -->
                  </div>
                  <!--/.card-body -->
                  <div class="card-footer">
                    <ul class="post-meta d-flex mb-0">
                      <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29 Mar 2022</span></li>
                      <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>3</a></li>
                      <li class="post-likes ms-auto"><a href="#"><i class="uil uil-heart-alt"></i>3</a></li>
                    </ul>
                    <!-- /.post-meta -->
                  </div>
                  <!-- /.card-footer -->
                </div>
                <!-- /.card -->
              </article>
              <!-- /.post -->
              <article class="item post col-md-6">
                <div class="card">
                  <figure class="card-img-top overlay overlay-1 hover-scale"><a href="#"> <img src="./assets/img/photos/b6.jpg" alt="" /></a>
                    <figcaption>
                      <h5 class="from-top mb-0">Read More</h5>
                    </figcaption>
                  </figure>
                  <div class="card-body">
                    <div class="post-header">
                      <div class="post-category text-line">
                        <a href="#" class="hover" rel="category">Meeting</a>
                      </div>
                      <!-- /.post-category -->
                      <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Ultricies fusce porta elit</a></h2>
                    </div>
                    <!-- /.post-header -->
                    <div class="post-content">
                      <p>Mauris convallis non ligula non interdum. Gravida vulputate convallis tempus vestibulum cras imperdiet nun eu dolor. Aenean lacinia bibendum nulla sed.</p>
                    </div>
                    <!-- /.post-content -->
                  </div>
                  <!--/.card-body -->
                  <div class="card-footer">
                    <ul class="post-meta d-flex mb-0">
                      <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26 Feb 2022</span></li>
                      <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>6</a></li>
                      <li class="post-likes ms-auto"><a href="#"><i class="uil uil-heart-alt"></i>3</a></li>
                    </ul>
                    <!-- /.post-meta -->
                  </div>
                  <!-- /.card-footer -->
                </div>
                <!-- /.card -->
              </article>
              <!-- /.post -->
              <article class="item post col-md-6">
                <div class="card">
                  <figure class="card-img-top overlay overlay-1 hover-scale"><a href="#"> <img src="./assets/img/photos/b7.jpg" alt="" /></a>
                    <figcaption>
                      <h5 class="from-top mb-0">Read More</h5>
                    </figcaption>
                  </figure>
                  <div class="card-body">
                    <div class="post-header">
                      <div class="post-category text-line">
                        <a href="#" class="hover" rel="category">Business Tips</a>
                      </div>
                      <!-- /.post-category -->
                      <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Morbi leo risus porta eget</a></h2>
                    </div>
                    <div class="post-content">
                      <p>Mauris convallis non ligula non interdum. Gravida vulputate convallis tempus vestibulum cras imperdiet nun eu dolor. Aenean lacinia bibendum nulla sed.</p>
                    </div>
                    <!-- /.post-content -->
                  </div>
                  <!--/.card-body -->
                  <div class="card-footer">
                    <ul class="post-meta d-flex mb-0">
                      <li class="post-date"><i class="uil uil-calendar-alt"></i><span>7 Jan 2022</span></li>
                      <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>2</a></li>
                      <li class="post-likes ms-auto"><a href="#"><i class="uil uil-heart-alt"></i>5</a></li>
                    </ul>
                    <!-- /.post-meta -->
                  </div>
                  <!-- /.card-footer -->
                </div>
                <!-- /.card -->
              </article>
              <!-- /.post -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.blog -->
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
  <section class="wrapper bg-soft-primary">
    <div class="container py-14 py-md-16 text-center">
      <div class="row">
        <div class="col-md-9 col-lg-7 col-xl-7 mx-auto text-center">
          <img src="{{ asset('assets/')}}/img/icons/lineal/puzzle-2.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
          <h2 class="display-4 mb-3">Join Our Community</h2>
          <p class="lead fs-lg mb-6 px-xl-10 px-xxl-15">We are trusted by over 5000+ clients. Join them by using our services and grow your business.</p>
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-md-6 col-lg-5 col-xl-4 mx-auto">
          <div class="newsletter-wrapper">
            <!-- Begin Mailchimp Signup Form -->
            <div id="mc_embed_signup2">
              <form action="https://elemisfreebies.us20.list-manage.com/subscribe/post?u=aa4947f70a475ce162057838d&amp;id=b49ef47a9a" method="post" id="mc-embedded-subscribe-form2" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <div id="mc_embed_signup_scroll2">
                  <div class="mc-field-group input-group form-floating">
                    <input type="email" value="" name="EMAIL" class="required email form-control" placeholder="Email Address" id="mce-EMAIL2">
                    <label for="mce-EMAIL2">Email Address</label>
                    <input type="submit" value="Join" name="subscribe" id="mc-embedded-subscribe2" class="btn btn-primary">
                  </div>
                  <div id="mce-responses2" class="clear">
                    <div class="response" id="mce-error-response2" style="display:none"></div>
                    <div class="response" id="mce-success-response2" style="display:none"></div>
                  </div> <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                  <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ddc180777a163e0f9f66ee014_4b1bcfa0bc" tabindex="-1" value=""></div>
                  <div class="clear"></div>
                </div>
              </form>
            </div>
            <!--End mc_embed_signup-->
          </div>
          <!-- /.newsletter-wrapper -->
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
@endsection