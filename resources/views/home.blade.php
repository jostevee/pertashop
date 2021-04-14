@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1 data-aos="fade-right" data-aos-delay="100" data-aos-duration="700">Dashboard</h1>
@stop

@section('content')
<p data-aos="fade-right" data-aos-delay="100" data-aos-duration="700">Selamat datang di Apps Pertashop PT Pertamina Retail! Untuk menu, silakan klik tombol garis tiga di pojok kiri atas</p>
<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-4 col-5" data-aos="fade-right" data-aos-delay="100" data-aos-duration="700">
            <!-- small box -->
            <div class="small-box" style="background-color: #1977cc;"><!-- bg-info -->
              <div class="inner">
                <h3><i class="fas fa-tag" style="color: white;"></i></h3>

                <h5 style="color: white;">Harga Produk</h5>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-7" data-aos="fade-left" data-aos-delay="100" data-aos-duration="700">
            <!-- small box -->
            <div class="small-box" style="background-color: #1977cc;"><!-- bg-success -->
              <div class="inner">
                <h3><i class="fas fa-truck" style="color: white;"></i></h3>

                <h5 style="color: white;">Input Penerimaan DO</h5>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-5" data-aos="fade-right" data-aos-delay="100" data-aos-duration="700">
            <!-- small box -->
            <div class="small-box" style="background-color: #1977cc;"><!-- bg-warning -->
              <div class="inner">
                <h3><i class="fas fa-oil-can" style="color: white;"></i></h3>

                <h5 style="color: white;">Input Arus Minyak</h5>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-7" data-aos="fade-left" data-aos-delay="100" data-aos-duration="700">
            <!-- small box -->
            <div class="small-box" style="background-color: #1977cc;"><!-- bg-danger -->
              <div class="inner">
                <h3><i class="fas fa-cash-register" style="color: white;"></i></h3>

                <h5 style="color: white;">Input Penerimaan Tunai - Non Tunai</h5>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-12" data-aos="fade-right" data-aos-delay="100" data-aos-duration="700">
            <!-- small box -->
            <div class="small-box" style="background-color: #1977cc;"><!-- bg-danger -->
              <div class="inner">
                <h3><i class="fas fa-clipboard-list" style="color: white;"></i></h3>

                <h5 style="color: white;">Shift Settlement</h5>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-12" data-aos="fade-left" data-aos-delay="100" data-aos-duration="700">
            <!-- small box -->
            <div class="small-box" style="background-color: #1977cc;"><!-- bg-danger -->
              <div class="inner">
                <h3><i class="fas fa-university" style="color: white;"></i></h3>

                <h5 style="color: white;">Input Setoran Tunai</h5>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </div>
    </section>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@stop

@section('js')
<script>
    console.log('Hi!'); 
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
@stop

@php
/*
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
*/
@endphp
