@extends('template.template')
@section('content')
<section class="wrapper bg-light">
  <div class="container py-14 py-md-16">
    <div class="row">
      <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto text-center">
        <h2 class="fs-15 text-uppercase text-muted mb-3">Galeri</h2>
      </div>
      <!-- /column -->
    </div>

    @foreach ($galeri as $item)
    <div class="row">
      <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto text-center">
        <h3 class="display-4 mb-10"><span class="underline-3 style-2 yellow">{{ $item->nama}}</span> </h3>
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
    <div class="swiper-container grid-view mb-6" data-margin="30" data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1">
      <div class="swiper">
        <div class="swiper-wrapper">
          @foreach (explode(',', $item->gambar) as $image)
            <div class="swiper-slide image-container bg-secondary rounded" style="height: 440px; display:flex; justify-content:center; align-items:center">
              <figure><img style="max-width: 100%; max-height: 440px; height: auto; overflow: hidden; object-fit: cover; display: block; margin-left:auto; margin-right:auto;" src="{{ asset('uploads/' . trim($image)) }}" srcset="{{ asset('uploads/' . trim($image)) }}" alt="" /><a class="item-link" href="{{ asset('uploads/' . trim($image)) }}" data-glightbox data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
              <!-- /.project-details -->
            </div>
          @endforeach 
          <!--/.swiper-slide -->
        </div>
        <!--/.swiper-wrapper -->
      </div>
      <!-- /.swiper -->
    </div>
    @endforeach
    <!-- /.swiper-container -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->
@endsection