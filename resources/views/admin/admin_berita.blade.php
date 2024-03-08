@extends('template.template_admin')
@section('content')
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
                        <li class="breadcrumb-item ">Berita </li>
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
                                        aria-selected="true">Data Berita</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tab-tambah-edit" data-toggle="pill"
                                        href="#tab-tambah-edit" role="tab" aria-controls="tab-tambah-edit"
                                        aria-selected="false">Tambah & Edit Berita</a>
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
                                                <th>Kategori</th>
                                                <th>Cover</th>
                                                <th>Foto Tambahan</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         @foreach ($berita as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->judul }}</td>
                                                <td>{{ $item->isi }}</td>
                                                <td>{{ $item->kategori->kategori }}</td>
                                                <td>
                                                    <div class="row">
                                                        <img width="150px" src="{{ asset('uploads/'.$item->cover)}}" alt="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="row">
                                                        @foreach (explode(',', $item->foto_tambahan) as $image)
                                                            <img class="m-2" width="150px "src="{{ asset('uploads/' . trim($image)) }}" class="img-fluid mb-2" alt="white sample" />
                                                        @endforeach
                                                    </div>
                                                </td>
                                                    <td>
                                                        <button type="button" class="btn btn-info btn-sm"
                                                            onclick="editBerita('{{ $item->idberita }}','{{ $item->judul }}','{{ $item->isi }}','{{ $item->idkategori }}')">
                                                            <i class="fas fa-pencil-alt"></i>
                                                            Edit
                                                        </button>
                                                        <a class="btn btn-danger btn-sm delete-btn"
                                                        data-url="{{ route('admin.delete.berita', ['id' => $item->idberita]) }}">
                                                            <i class="fas fa-trash">
                                                            </i>
                                                            Delete
                                                        </a>
                                                    </td>
                                                </tr>
                                                @endforeach 
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="tab-tambah-edit" role="tabpanel"
                                    aria-labelledby="custom-tab-tambah-edit">
                                    <form action="{{ url()->current()}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Judul</label>
                                            <input type="text" class="form-control" id="judul" name="judul"
                                                placeholder="Masukkan Judul" required>
                                            <input type="hidden" name="idberita" id="idberita">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Deskripsi</label>
                                            <textarea class="form-control" name="isi" id="isi" cols="30" rows="10"></textarea>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Kategori</label>
                                            <select class="form-control" name="idkategori" id="kategori" required>
                                                <option selected disabled value="">Pilih Kategori</option>
                                                @foreach ($kategori as $data)
                                                    <option value="{{ $data->idkategori }}">
                                                        {{ $data->kategori }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Foto Cover</label>
                                            <input type="file" class="form-control" id="foto" name="foto"
                                                 required>
                                                 <span class="text-danger" id="notifPassword"></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Foto Multiple Tambahan</label>
                                            <input type="file" class="form-control" id="foto_tambahan" name="foto_tambahan[]"
                                            multiple required >
                                            <span class="text-danger" id="notifPassword_1"></span>
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
<script>
    $('#isi').summernote({
    toolbar: [
        ['style', ['bold', 'italic', 'underline', 'clear']],
        ['fontsize', ['fontsize']], 
        ['color', ['color']],       
        ['para', ['ul', 'ol', 'paragraph']],
        ['insert', ['link']],
    ],
    styleTags: ['p', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'], 
    fontSizes: ['8', '9', '10', '11', '12', '14', '18', '24', '36'], 
    colors: [
        ['#000000', '#ffffff', '#e6e6e6', '#d3d3d3', '#c0c0c0', '#b7b7b7', '#a0a0a0', '#808080', '#555555', '#333333'],
        ['#ff0000', '#ff9900', '#ffff00', '#00ff00', '#00ffff', '#0000ff', '#9900ff', '#ff00ff', '#ffcc00', '#993300'],
        ['#c0c0c0', '#808080', '#ffffff', '#000000']
    ]
});
  </script>
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
