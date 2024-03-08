@extends('template.template')
@section('content')


  <!-- /section -->
  <section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
      <div class="row mb-3">
        <div class="col-md-10 col-lg-12 col-xl-10 col-xxl-9 mx-auto text-center">
          <h2 class="fs-15 text-uppercase text-muted mb-3">Kontak</h2>
        </div>
        <!--/column -->
      </div>
        <div class="row gx-lg-8 gx-xl-12 ">
          <div class="card">
            <div class="row gx-0">
              <div class="col-lg-6 align-self-stretch">
                <div class="map map-full rounded-top rounded-lg-start">
                  <iframe width="520" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=Yayasan%20Indonesian%20Children%20Heart%20Sidoarjo+(Yayasan%20Indonesian%20Children%20Heart)&amp;t=&amp;z=18&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe> <a href='https://embedmap.org/'>embedding google maps into website</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=4ecd834e9e13afe3b664f443d46b031dc9a289b3'></script>
                </div>
                <!-- /.map -->
              </div>
              <!--/column -->
              <div class="col-lg-6">
                <div class="p-10 p-md-11 p-lg-14">
                  <div class="d-flex flex-row">
                    <div>
                      <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
                    </div>
                    <div class="align-self-start justify-content-start">
                      <h5 class="mb-1">Address</h5>
                      <address>Jl. Bebekan Masjid No.11, RT.13/RW.04, <br> Bebekan, Kec. Taman, Kabupaten Sidoarjo, Jawa Timur 61257 </address>
                    </div>
                  </div>
                  <!--/div -->
                  <div class="d-flex flex-row">
                    <div>
                      <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
                    </div>
                    <div>
                      <h5 class="mb-1">Phone</h5>
                      081334679714
                    </div>
                  </div>
                  <!--/div -->
                  <!--/div -->
                </div>
                <!--/div -->
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
@endsection