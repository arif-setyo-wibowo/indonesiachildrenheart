@extends('template.template')
@section('content')

<section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
        <div class="row mb-3">
            <div class="col-md-10 col-lg-12 col-xl-10 col-xxl-9 mx-auto text-center">
              <h2 class="fs-15 text-uppercase text-muted mb-3">Berita</h2>
            </div>
            <!--/column -->
          </div>
        <div class="row gx-lg-8 gx-xl-12">
            <div class="col-lg-8">
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
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.blog -->
                <nav class="d-flex" aria-label="pagination">
                    <ul class="pagination">
                        {{-- Tampilkan tombol Previous --}}
                        @if ($berita->onFirstPage())
                            <li class="page-item disabled">
                                <span class="page-link" aria-hidden="true"><i class="uil uil-arrow-left"></i></span>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $berita->previousPageUrl() }}" aria-label="Previous">
                                    <span aria-hidden="true"><i class="uil uil-arrow-left"></i></span>
                                </a>
                            </li>
                        @endif
                
                        {{-- Tampilkan halaman-halaman --}}
                        @foreach ($berita->getUrlRange(1, $berita->lastPage()) as $page => $url)
                            <li class="page-item{{ $page == $berita->currentPage() ? ' active' : '' }}">
                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endforeach
                
                        {{-- Tampilkan tombol Next --}}
                        @if ($berita->hasMorePages())
                            <li class="page-item">
                                <a class="page-link" href="{{ $berita->nextPageUrl() }}" aria-label="Next">
                                    <span aria-hidden="true"><i class="uil uil-arrow-right"></i></span>
                                </a>
                            </li>
                        @else
                            <li class="page-item disabled">
                                <span class="page-link" aria-hidden="true"><i class="uil uil-arrow-right"></i></span>
                            </li>
                        @endif
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
                        @foreach ($kategori as $item)
                        @php
                            $jumlahBerita = \App\Models\Berita::where('idkategori', $item->idkategori)->count();
                        @endphp
                
                        @if ($jumlahBerita > 0)
                            <li><a href="#">{{ $item->kategori }} ({{ $jumlahBerita }})</a></li>
                        @endif
                    @endforeach
                    </ul>
                </div>
                <!-- /.widget -->
                <!-- /.widget -->
                <div class="widget">
                    @php
                        $archivedItems = \App\Models\Berita::all()->groupBy(function($date) {
                            return \Carbon\Carbon::parse($date->created_at)->format('F Y');
                        });
                    @endphp

                    <h4 class="widget-title mb-3">Archive</h4>
                    <ul class="unordered-list bullet-primary text-reset">
                        @foreach ($archivedItems as $monthYear => $items)
                            <li><a href="#">{{ $monthYear }}</a></li>
                        @endforeach
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