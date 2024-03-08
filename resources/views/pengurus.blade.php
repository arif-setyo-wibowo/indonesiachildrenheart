@extends('template.template')
@section('content')
<section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
      <div class="row mb-3">
        <div class="col-md-10 col-lg-12 col-xl-10 col-xxl-9 mx-auto text-center">
          <h2 class="fs-15 text-uppercase text-muted mb-3">Pengurus</h2>
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
      <div class="row grid-view gx-md-8 gx-xl-10 gy-8 gy-lg-0">
        @foreach ($pengurus as $item)
        <div class="col-md-6 col-lg-3 mt-7">
          <div class="position-relative">
            <div class="shape rounded bg-soft-blue rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
            <div class="card">
              <figure class="card-img-top"><img class="img-fluid" src="{{ asset('uploads/' . $item->foto)}}" alt="" /></figure>
              <div class="card-body px-6 py-5">
                <h4 class="mb-1">{{ $item->nama}}</h4>
                <p class="mb-0">{{ $item->jabatan}}</p>
              </div>
              <!--/.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /div -->
        </div>
        @endforeach
        
        
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
@endsection