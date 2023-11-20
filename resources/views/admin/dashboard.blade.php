@extends('layouts.app')
<title>Dashboard - UGD Payment Puskesmas Ketrowonojoyo</title>
@section('content')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div>
    <section class="section dashboard">
        <div class="row">

            <div class="row">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card tryal-gradient">
                                        <div class="card-body tryal row">
                                            <div class="col-xl-7 col-sm-6">
                                                <h1 style="font-weight: bold; margin-top: 20px">Selamat Datang</h1>
                                                <h4>Di UGD Payment Puskemas Ketrowonojoyo</h4>
                                                <span></span>
                                                <p class="btn btn-primary mt-2">{{Auth::user()->name}}</p>
                                            </div>

                                            <div class="col-xl-5 col-sm-6">
                                                <img src="{{ asset('/assets/img/joyo.png') }}"
                                                    style="width: 200px; height:200px;" alt="" class="sd-shape">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-xl-6">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="row">
                                        <div class="col-xxl-6 col-md-">
                                            <div class="card info-card sales-card">
                                                <div class="card-body">
                                                    <h5 class="card-title"> <span>Total |</span> Administrasi Keluar</h5>

                                                    <div class="d-flex align-items-center">
                                                        <div
                                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                            <i class="bi bi-pie-chart-fill"></i>
                                                        </div>
                                                        <div class="ps-3">
                                                            <h6>145 </h6>
                                                            <span class="text small pt-1">Pembayaran</span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-xxl-6 col-md-6">
                                            <div class="card info-card sales-card">
                                                <div class="card-body">
                                                    <h5 class="card-title"> <span>Total |</span> Pasien Masuk</h5>

                                                    <div class="d-flex align-items-center">
                                                        <div
                                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                            <i class="bi bi-person-fill"></i>
                                                        </div>
                                                        <div class="ps-3">
                                                            <h6>145 </h6>
                                                            <span class="text small pt-1">Orang</span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="col-xxl-12 col-md-12">
                                            <div class="card info-card sales-card">
                                                <div class="card-body">
                                                    <h5 class="card-title"> <span>Total Harian |</span> Administrasi Keluar
                                                    </h5>

                                                    <div class="d-flex align-items-center">
                                                        <div
                                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                            <i class="bi bi-clock-history"></i>
                                                        </div>
                                                        <div class="ps-3">
                                                            <h6>145 </h6>
                                                            <span class="text small pt-1">Pembayaran</span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
