@extends('layout.main')
@section('content')

{{-- Conten Data User --}}

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Create User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Data User</a></li>
              <li class="breadcrumb-item active">Tambah Datar</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <form action="{{ route('admin.user.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="row">
                  <!-- left column -->
                  <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                      <div class="card-header">
                        <h3 class="card-title">Form Tambah Data</h3>
                      </div>
                      <!-- /.card-header -->
                      <!-- form start -->
                      <form>
                        <div class="card-body">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Photo Profile</label>
                                <input name="photo" type="file" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Photo">
                                @error('photo')
                                <small>{{ $message }}</small>
                                @enderror
                              </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Pengguna</label>
                                <input name="nama" type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama">
                                @error('nama')
                                <small>{{ $message }}</small>
                                @enderror
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">NISN</label>
                                  <input name="nisn" type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nisn">
                                  @error('nisn')
                                  <small>{{ $message }}</small>
                                  @enderror
                              </div>

                              <div class="form-group">
                              <label for="exampleInputEmail1">Email</label>
                              <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukkan email">
                              @error('email')
                              <small>{{ $message }}</small>
                              @enderror
                              </div>

                              <div class="form-group">
                              <label for="exampleInputPassword1">Password</label>
                              <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                              @error('password')
                              <small>{{ $message }}</small>
                              @enderror
                          </div>
                        <!-- /.card-body -->

                        <center>
                          <button type="submit" class="btn btn-block btn-primary mt-2">Tambahkan Data</button>
                        </center>
                    </form>
                    </div>
                    <!-- /.card -->
                  </div>

                </div>
          </form>
          <!-- /.row -->
      </section>

{{-- Conten Data User --}}

</div>
@endsection
