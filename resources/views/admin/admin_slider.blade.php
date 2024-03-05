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
                        <li class="breadcrumb-item ">Slider </li>
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
                                        aria-selected="true">Data User</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tab-tambah-edit" data-toggle="pill"
                                        href="#tab-tambah-edit" role="tab" aria-controls="tab-tambah-edit"
                                        aria-selected="false">Edit Slider</a>
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
                                                <th>Foto</th>
                                                <th>Judul</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- @foreach ($petugas as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->nama }}</td>
                                                <td>{{ $item->username }}</td>
                                                    <td>
                                                        <button type="button" class="btn btn-info btn-sm"
                                                            onclick="editPetugas('{{ $item->id }}','{{ $item->nama }}','{{ $item->username }}','{{ $item->password }}')">
                                                            <i class="fas fa-pencil-alt"></i>
                                                            Edit
                                                        </button>
                                                        <a class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Petugas?')"
                                                        href="{{ route('delete.petugas', ['id' => $item->id]) }}">
                                                            <i class="fas fa-trash">
                                                            </i>
                                                            Delete
                                                        </a>
                                                    </td>
                                                </tr>
                                                @endforeach --}}
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="tab-tambah-edit" role="tabpanel"
                                    aria-labelledby="custom-tab-tambah-edit">
                                    <form action="{{ url()->current()}}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Judul</label>
                                            <input type="text" class="form-control" id="judul" name="judul"
                                                placeholder="Masukkan Judul" required>
                                            <input type="hidden" name="id" id="id">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Deskripsi</label>
                                            <input type="text" class="form-control" id="deskripsi" name="deskripsi"
                                                placeholder="Masukkan Deskripsi" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Foto</label>
                                            <input type="file" class="form-control" id="foto" name="foto"
                                                 required>
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