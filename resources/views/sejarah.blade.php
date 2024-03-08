@extends('template.template')
@section('content')
<section class="wrapper">
    <div class="container py-14 py-md-16">
      
      <div class="row mb-3">
        <div class="col-md-10 col-lg-12 col-xl-10 col-xxl-9 mx-auto text-center">
          <h2 class="fs-15 text-uppercase text-muted mb-3">Sejarah</h2>
        </div>
        <!--/column -->
      </div>
      <div class="row gy-10 gy-sm-13 gx-md-8 gx-xl-12 align-items-center mb-10 mb-md-12">
        <div class="col-md-8 col-lg-6 col-xl-5 order-lg-2 position-relative">
          <div class="shape bg-soft-primary rounded-circle rellax w-20 h-20" data-rellax-speed="1" style="top: -2rem; right: -1.9rem;"></div>
          <figure class="rounded"><img style="max-width: 475px; max-height: 497px; width: auto; height: auto;" src="{{ asset('uploads/' . $sejarah->foto)}}"></figure>
        </div>
        <div class="col-lg-6">
          <h2 class="display-4 mb-3">{{ $sejarah->judul}}</h2>
          <p class="lead fs-lg">{{ $sejarah->dekripsi}}</p>
          <div class="row gx-xl-10 gy-6">
            <div class="col-md-6">
              <div class="d-flex flex-row">
                <div>
                  <div class="icon btn btn-block pe-none btn-soft-primary me-4 w-10 h-10"> <span class="number fs-18">1</span> </div>
                </div>
                <div>
                  <h4 class="mb-1">Our Mission</h4>
                  <p class="mb-0">{{ $sejarah->misi}}</p>
                </div>
              </div>
            </div>
            <!--/column -->
            <div class="col-md-6">
              <div class="d-flex flex-row">
                <div>
                  <div class="icon btn btn-block pe-none btn-soft-primary me-4 w-10 h-10"> <span class="number fs-18">2</span> </div>
                </div>
                <div>
                  <h4 class="mb-1">Our Vission</h4>
                  <p class="mb-0">{{ $sejarah->visi}}</p>
                </div>
              </div>
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!--/column -->

        <!--/column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
@endsection