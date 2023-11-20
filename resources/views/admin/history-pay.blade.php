@extends('layouts.app')
<title>Riwayat - UGD Payment Puskesmas Ketrowonojoyo</title>
@section('content')
    <div class="pagetitle">
        <h1> <i class="bi bi-hourglass-split me-2"></i>Riwayat</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item "><a href="">Home</a></li>
                <li class="breadcrumb-item active"><a href="">Riwayat</a></li>

            </ol>
        </nav>
    </div>
    <section class="section dashboard">
        <div class="row">
            <div class="col-xxl-12 col-md-12">
                <div class="card">

                    <div class="card-body">

                        <table class="table datatable table-responsive">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>
                                        <b>N</b>ama Pasien
                                    </th>
                                    <th>No Regestrasi</th>
                                    <th>Tanggal Dibuat</th>
                                    <th>Informasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Masino</td>
                                    <td>10.09.30</td>
                                    <td>2 Januari 2012</td>
                                    <td>
                                        <a href="info-patient"><button type="button" class="btn btn-info"><i
                                                    class="bi bi-info-circle"></i></button></a>

                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>

                </div>
            </div>

        </div>
    </section>
@endsection
