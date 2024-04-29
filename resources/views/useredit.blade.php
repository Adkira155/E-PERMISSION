@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('index') }}">Data User</a></li>
              <li class="breadcrumb-item active">Edit Data</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

     <!-- Main content -->
     <section class="content">
      <div class="container-fluid">
        <form action="{{ route('user.update', ['id' => $data->id]) }}" method="POST">
            @csrf
            @method('PUT')
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Edit Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input name="nama" type="text" class="form-control" id="exampleInputEmail1" value="{{ $data->name }}" placeholder="Masukkan nama">
                        @error('nama')
                        <small>{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">NISN</label>
                        <input name="nisn" type="text" class="form-control" id="exampleInputEmail1" value="{{ $data->nisn }}" placeholder="Masukkan NISN">
                        @error('nisn')
                        <small>{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail1" value="{{ $data->email }}" placeholder="Masukkan email">
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
                    <button type="submit" class="btn btn-block btn-primary mt-2">Ubah Data</button>
                  </center>
              </form>
            </div>
            <!-- /.card -->
          </div>

        </div>
        </form>
        <!-- /.row -->
    </section>
    <!-- /.content -->

  </div>
@endsection
