@extends('template.template')
@section('content')
<section class="wrapper bg-soft-primary">
    <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
      <div class="row">
        <div class="col-md-7 col-lg-6 col-xl-5 mx-auto">
          <h1 class="display-1 mb-3">Business News</h1>
          <p class="lead px-lg-5 px-xxl-8">Welcome to our journal. Here you can find the latest company news and business articles.</p>
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
<section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
        <div class="row gx-lg-8 gx-xl-12">
            <div class="col-lg-8">
                <!-- /.blog -->
                <div class="blog grid grid-view">
                    <div class="row isotope gx-md-8 gy-8 mb-8">
                        <article class="item post col-md-6">
                            <div class="card">
                                <figure class="card-img-top overlay overlay-1 hover-scale">
                                    <a href="#"> <img src="{{ asset('assets/')}}/img/photos/b4.jpg" alt="" /></a>
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
                                        <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="{{ route('berita.detail')}}">Ligula tristique quis risus</a></h2>
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
                                <figure class="card-img-top overlay overlay-1 hover-scale">
                                    <a href="#"> <img src="{{ asset('assets/')}}/img/photos/b5.jpg" alt="" /></a>
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
                                <figure class="card-img-top overlay overlay-1 hover-scale">
                                    <a href="#"> <img src="{{ asset('assets/')}}/img/photos/b6.jpg" alt="" /></a>
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
                                <figure class="card-img-top overlay overlay-1 hover-scale">
                                    <a href="#"> <img src="{{ asset('assets/')}}/img/photos/b7.jpg" alt="" /></a>
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
                <nav class="d-flex" aria-label="pagination">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true"><i class="uil uil-arrow-left"></i></span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true"><i class="uil uil-arrow-right"></i></span>
                            </a>
                        </li>
                    </ul>
                    <!-- /.pagination -->
                </nav>
                <!-- /nav -->
            </div>
            <!-- /column -->
            <aside class="col-lg-4 sidebar mt-8 mt-lg-6">
                <div class="widget">
                    <form class="search-form">
                        <div class="form-floating mb-0">
                            <input id="search-form" type="text" class="form-control" placeholder="Search">
                            <label for="search-form">Search</label>
                        </div>
                    </form>
                    <!-- /.search-form -->
                </div>
                <!-- /.widget -->
                <!-- /.widget -->
                <!-- /.widget -->
                <div class="widget">
                    <h4 class="widget-title mb-3">Categories</h4>
                    <ul class="unordered-list bullet-primary text-reset">
                        <li><a href="#">Teamwork (21)</a></li>
                        <li><a href="#">Ideas (19)</a></li>
                        <li><a href="#">Workspace (16)</a></li>
                        <li><a href="#">Coding (7)</a></li>
                        <li><a href="#">Meeting (12)</a></li>
                        <li><a href="#">Business Tips (14)</a></li>
                    </ul>
                </div>
                <!-- /.widget -->
                <!-- /.widget -->
                <div class="widget">
                    <h4 class="widget-title mb-3">Archive</h4>
                    <ul class="unordered-list bullet-primary text-reset">
                        <li><a href="#">February 2019</a></li>
                        <li><a href="#">January 2019</a></li>
                        <li><a href="#">December 2018</a></li>
                        <li><a href="#">November 2018</a></li>
                        <li><a href="#">October 2018</a></li>
                    </ul>
                </div>
                <!-- /.widget -->
            </aside>
            <!-- /column .sidebar -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
@endsection