@extends('template.template')
@section('content')
    
<section class="wrapper bg-soft-primary">
    <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
      <div class="row">
        <div class="col-md-10 col-xl-8 mx-auto">
          <div class="post-header">
            <div class="post-category text-line">
              <a href="#" class="hover" rel="category">Teamwork</a>
            </div>
            <!-- /.post-category -->
            <h1 class="display-1 mb-4">Commodo Dolor Bibendum Parturient Cursus Mollis</h1>
            <ul class="post-meta mb-5">
              <li class="post-date"><i class="uil uil-calendar-alt"></i><span>5 Jul 2022</span></li>
              <li class="post-author"><a href="#"><i class="uil uil-user"></i><span>By Sandbox</span></a></li>
            </ul>
            <!-- /.post-meta -->
          </div>
          <!-- /.post-header -->
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
  <section class="wrapper bg-light">
    <div class="container pb-14 pb-md-16">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <div class="blog single mt-n17">
            <div class="card">
              <figure class="card-img-top"><img src="{{ asset('assets/')}}/img/photos/b1.jpg" alt="" /></figure>
              <div class="card-body">
                <div class="classic-view">
                  <article class="post">
                    <div class="post-content mb-5">
                      <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur. Curabitur blandit tempus porttitor. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nullam quis risus eget porta ac consectetur vestibulum.</p>
                      <p>Donec sed odio dui consectetur adipiscing elit. Etiam adipiscing tincidunt elit, eu convallis felis suscipit ut. Phasellus rhoncus tincidunt auctor. Nullam eu sagittis mauris. Donec non dolor ac elit aliquam tincidunt at at sapien. Aenean tortor libero, condimentum ac laoreet vitae, varius tempor nisi. Duis non arcu vel lectus urna mollis ornare vel eu leo.</p>
                      <div class="row g-6 mt-3 mb-10">
                        <div class="col-md-6">
                          <figure class="hover-scale rounded cursor-dark"><a href="{{ asset('assets/')}}/img/photos/b8-full.jpg" data-glightbox data-gallery="post"> <img src="{{ asset('assets/')}}/img/photos/b8.jpg" alt="" /></a></figure>
                        </div>
                        <!--/column -->
                        <div class="col-md-6">
                          <figure class="hover-scale rounded cursor-dark"><a href="{{ asset('assets/')}}/img/photos/b9-full.jpg" data-glightbox data-gallery="post"> <img src="{{ asset('assets/')}}/img/photos/b9.jpg" alt="" /></a></figure>
                        </div>
                        <!--/column -->
                        <div class="col-md-6">
                          <figure class="hover-scale rounded cursor-dark"><a href="{{ asset('assets/')}}/img/photos/b10-full.jpg" data-glightbox data-gallery="post"> <img src="{{ asset('assets/')}}/img/photos/b10.jpg" alt="" /></a></figure>
                        </div>
                        <!--/column -->
                        <div class="col-md-6">
                          <figure class="hover-scale rounded cursor-dark"><a href="{{ asset('assets/')}}/img/photos/b11-full.jpg" data-glightbox data-gallery="post"> <img src="{{ asset('assets/')}}/img/photos/b11.jpg" alt="" /></a></figure>
                        </div>
                        <!--/column -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.post-content -->
                    <div class="post-footer d-md-flex flex-md-row justify-content-md-between align-items-center mt-8">
                      <div class="mb-0 mb-md-2">
                        <div class="dropdown share-dropdown btn-group">
                          <button class="btn btn-sm btn-red rounded-pill btn-icon btn-icon-start dropdown-toggle mb-0 me-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="uil uil-share-alt"></i> Share </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"><i class="uil uil-twitter"></i>Twitter</a>
                            <a class="dropdown-item" href="#"><i class="uil uil-facebook-f"></i>Facebook</a>
                            <a class="dropdown-item" href="#"><i class="uil uil-linkedin"></i>Linkedin</a>
                          </div>
                          <!--/.dropdown-menu -->
                        </div>
                        <!--/.share-dropdown -->
                      </div>
                    </div>
                    <!-- /.post-footer -->
                  </article>
                  <!-- /.post -->
                </div>
                <!-- /.classic-view -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
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
@endsection