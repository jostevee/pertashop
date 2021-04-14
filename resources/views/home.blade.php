@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1 data-aos="fade-right" data-aos-delay="100">Dashboard</h1>
@stop

@section('content')
<p data-aos="fade-right" data-aos-delay="100">Selamat datang di Apps Pertashop PT Pertamina Retail! Untuk menu, silakan klik tombol garis tiga di pojok kiri atas</p>
<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-4 col-6" data-aos="fade-right" data-aos-delay="100">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><i class="fas fa-tag"></i></h3>

                <p>Harga Produk</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6" data-aos="fade-left" data-aos-delay="100">
            <!-- small box -->
            <div class="small-box bg-info"><!-- bg-success -->
              <div class="inner">
                <h3><i class="fas fa-truck"></i></h3>

                <p>Input Penerimaan DO</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6" data-aos="fade-right" data-aos-delay="100">
            <!-- small box -->
            <div class="small-box bg-info"><!-- bg-warning -->
              <div class="inner">
                <h3><i class="fas fa-oil-can"></i></h3>

                <p>Input Arus Minyak</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6" data-aos="fade-left" data-aos-delay="100">
            <!-- small box -->
            <div class="small-box bg-info"><!-- bg-danger -->
              <div class="inner">
                <h3><i class="fas fa-cash-register"></i></h3>

                <p>Input Penerimaan Tunai dan Non Tunai</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6" data-aos="fade-right" data-aos-delay="100">
            <!-- small box -->
            <div class="small-box bg-info"><!-- bg-danger -->
              <div class="inner">
                <h3><i class="fas fa-clipboard-list"></i></h3>

                <p>Shift Settlement</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6" data-aos="fade-left" data-aos-delay="100">
            <!-- small box -->
            <div class="small-box bg-info"><!-- bg-danger -->
              <div class="inner">
                <h3><i class="fas fa-university"></i></h3>

                <p>Input Setoran Tunai</p>
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
