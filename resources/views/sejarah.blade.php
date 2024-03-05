@extends('template.template')
@section('content')
<section class="wrapper">
    <div class="container py-14 py-md-16">
      <div class="row gy-10 gy-sm-13 gx-md-8 gx-xl-12 align-items-center mb-10 mb-md-12">
        <div class="col-lg-6">
          <div class="row gx-md-5 gy-5">
            <div class="col-md-6">
              <figure class="rounded"><img src="{{ asset('assets/')}}/img/photos/g12.jpg" srcset="{{ asset('assets/')}}/img/photos/g12@2x.jpg 2x" alt=""></figure>
            </div>
            <!--/column -->
            <div class="col-md-6 align-self-end">
              <figure class="rounded"><img src="{{ asset('assets/')}}/img/photos/g13.jpg" srcset="{{ asset('assets/')}}/img/photos/g13@2x.jpg 2x" alt=""></figure>
            </div>
            <!--/column -->
            <div class="col-12">
              <figure class="rounded mx-md-5"><img src="{{ asset('assets/')}}/img/photos/g11.jpg" srcset="{{ asset('assets/')}}/img/photos/g11@2x.jpg 2x" alt=""></figure>
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!--/column -->
        <div class="col-lg-6">
          <h2 class="fs-16 text-uppercase text-primary mb-3">Who Are We?</h2>
          <h3 class="display-3 mb-5">Company that believes in the power of creative strategy.</h3>
          <p class="mb-6">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed.</p>
          <div class="row align-items-center counter-wrapper gy-6">
            <div class="col-md-6">
              <h3 class="counter counter-lg mb-1">99.7%</h3>
              <h5 class="mb-0">Customer Satisfaction</h5>
            </div>
            <!--/column -->
            <div class="col-md-6">
              <h3 class="counter counter-lg mb-1">12x</h3>
              <h5 class="mb-0">Revenue Growth</h5>
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
      <div class="row gx-lg-8 gx-xl-12 gy-6 mb-7 mb-md-9">
        <div class="col-lg-4">
          <div class="d-flex flex-row">
            <div>
              <div class="icon btn btn-block pe-none btn-soft-primary me-4 w-10 h-10"> <span class="number fs-18">1</span> </div>
            </div>
            <div>
              <h3>Our Vision</h3>
              <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget. Fusce dapibus tellus.</p>
            </div>
          </div>
        </div>
        <!--/column -->
        <div class="col-lg-4">
          <div class="d-flex flex-row">
            <div>
              <div class="icon btn btn-block pe-none btn-soft-primary me-4 w-10 h-10"> <span class="number fs-18">2</span> </div>
            </div>
            <div>
              <h3>Our Mission</h3>
              <p class="mb-2">Maecenas faucibus mollis interdum. Vivamus sagittis lacus vel augue laoreet. Sed posuere consectetur.</p>
            </div>
          </div>
        </div>
        <!--/column -->
        <div class="col-lg-4">
          <div class="d-flex flex-row">
            <div>
              <div class="icon btn btn-block pe-none btn-soft-primary me-4 w-10 h-10"> <span class="number fs-18">3</span> </div>
            </div>
            <div>
              <h3>Our Values</h3>
              <p class="mb-2">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna scelerisque.</p>
            </div>
          </div>
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
      <div class="text-center"><a href="#" class="btn btn-primary">More Details</a></div>
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
@endsection