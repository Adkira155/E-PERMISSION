@extends('layout.main')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-1">
          <div class="col-sm-12">
            <h1 class="m-0">Dashboard</h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

   <!-- Main content -->
   <section class="content">

    <div class="container-fluid">
      <div class="row">
        <div class="col-12 justify-center">
          <!-- Default box -->
          <div class="card">
            <div class="card-header text-center ">
              <h4 class="font-weight-bold">Selamat Datang  {{Auth::user()->name}} </h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2 col-sm-3 col-5 p-1">
                        <img class="rounded mx-auto d-block" src="{{ asset('lte/docs/assets/img/user8-128x128.jpg')}}" alt="User" height="110" width="110">
                    </div>

                    <div class="col-7">
                        <address>
                            <strong>(Nama User)</strong><br>
                            (Kelas)<br>
                            (Jurusan)<br>
                            (Nomor Nis atau apa)<br>
                          </address>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          {{-- Card 4  --}}
          <div class="row">
            <div class="col-md-3 col-sm-6 col-12">
              <!-- small card -->
              <div class="small-box bg-biru">
                <div class="inner">
                  <h3>Jumlah</h3>
                  <h5>Membuat Pengajuan <i class="fas fa-plus"></i></h5>
                </div>

                <a href="#" class="small-box-footer">
                  Buat Pengajuan <i class="fas fa-arrow-circle-right"></i>
                </a>
              </div>
            </div>
            <!-- ./col -->

            <div class="col-md-3 col-sm-6 col-12">
              <!-- small card -->
              <div class="small-box bg-kuning">
                <div class="inner">
                  <h3>Jumlah</h3>
                  <h5>Menunggu Informasi <i class="fas fa-clock"></i></h5>
                </div>

                <a href="#" class="small-box-footer">
                  Lihat Rincian <i class="fas fa-arrow-circle-right"></i>
                </a>
              </div>
            </div>
            <!-- ./col -->

            <div class="col-lg-3 col-md-3">
              <!-- small card -->
              <div class="small-box bg-ijo">
                <div class="inner">
                  <h3>Jumlah</h3>
                  <h5>Pengajuan Diterima <i class="fas fa-check"></i></h5>
                </div>

                <a href="#" class="small-box-footer">
                  Lihat Rincian <i class="fas fa-arrow-circle-right"></i>
                </a>
              </div>
            </div>
            <!-- ./col -->

            <div class="col-md-3 col-sm-6 col-12">
              <!-- small card -->
              <div class="small-box bg-merah">
                <div class="inner">
                  <h3>Jumlah</h3>
                  <h5>Pengajuan Ditolak <i class="fas fa-ban"></i></h5>
                </div>

                <a href="#" class="small-box-footer">
                 Lihat Rincian <i class="fas fa-arrow-circle-right"></i>
                </a>
              </div>
            </div>
            <!-- ./col -->
          </div>
          {{-- Card 4 --}}

        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->

  </div>
@endsection
