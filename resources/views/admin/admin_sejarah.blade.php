@extends('template.template_admin')
@section('content')
<style>
    #tab-edit-li {
        display: none;
    }
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ $title}}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item ">Sejarah </li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 ">
                    <?php if (session()->has('msg')) :?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert" id="autoDismissAlert">
                        {{ session('msg') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php endif ?>
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert" id="autoDismissAlert">
                            @foreach ($errors->all() as $error)
                            {{ $error }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            @endforeach
                        </div>
                    @endif
                    <div class="card card-primary card-outline card-tabs">
                        <div class="card-header p-0 pt-1 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="custom-tab-kategori" data-toggle="pill"
                                        href="#tab-kategori" role="tab" aria-controls="tab-kategori"
                                        aria-selected="true">Data Pengurus</a>
                                </li>
                                <li class="nav-item" id="tab-edit-li">
                                    <a class="nav-link" id="custom-tab-tambah-edit" data-toggle="pill"
                                        href="#tab-tambah-edit" role="tab" aria-controls="tab-tambah-edit"
                                        aria-selected="false">Edit Sejarah</a>
                                </li>
                                
                            </ul>
                        </div>

                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-three-tabContent">
                                <div class="tab-pane fade show active" id="tab-kategori" role="tabpanel"
                                    aria-labelledby="custom-tab-kategori">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Judul</th>
                                                <th>Deskripsi</th>
                                                <th>Visi</th>
                                                <th>Misi</th>
                                                <th>Foto</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($sejarah as $item)
                                            <tr>
                                                <td>{{ $loop->iteration}}</td>
                                                <td>{{$item->judul}}</td>
                                                <td>{{$item->dekripsi}}</td>
                                                <td>{{$item->visi}}</td>
                                                <td>{{$item->misi}}</td>
                                                <td><img width="350px" src="{{ asset('uploads/' . $item   ->foto)}}"></td>
                                                <td>
                                                    <button type="button" class="btn btn-info btn-sm"
                                                            onclick="editSejarah('{{ $item->idsejarah }}','{{ $item->judul }}','{{ $item->dekripsi }}','{{ $item->visi }}','{{ $item->misi }}')">
                                                        <i class="fas fa-pencil-alt"></i>
                                                        Edit
                                                    </button>
                                                </td>
                                                </tr>
                                            @endforeach
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="tab-tambah-edit" role="tabpanel"
                                    aria-labelledby="custom-tab-tambah-edit">
                                    <form action="{{ url()->current() }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Judul</label>
                                            <input type="text" class="form-control" id="judul" name="judul"
                                                placeholder="Masukkan Judul" required>
                                            <input type="hidden" name="idsejarah" id="idsejarah">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Deskripsi</label>
                                            {{-- <input type="text" class="form-control" id="dekripsi" name="dekripsi"
                                            placeholder="Masukkan Visi" required> --}}
                                            <textarea class="form-control" name="dekripsi" id="dekripsi" cols="30" rows="10"  placeholder="Masukkan Deskripsi" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Visi</label>
                                            <input type="text" class="form-control" id="visi" name="visi"
                                                placeholder="Masukkan Visi" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Misi</label>
                                            <input type="text" class="form-control" id="misi" name="misi"
                                                placeholder="Masukkan Misi" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Foto</label>
                                            <input type="file" class="form-control" id="foto" name="foto"
                                                 required>
                                                 <span class="text-danger" id="notifPassword"></span>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" name="proses" id="proses" value="Tambah"
                                                class="btn btn-primary">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
</div>
@endsection

@section('js')

<script src="{{ asset('assets/') }}/js/custom.js"></script>
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
  </script>
@endsection