@extends('layouts.app')
<title>Status Pembayaran - UGD Payment Puskesmas Ketrowonojoyo</title>
@section('content')
    <div class="pagetitle">
        <h1> <i class="bi bi-clipboard-check me-2"></i>Status Pembayaran</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item "><a href="">Home</a></li>
                <li class="breadcrumb-item "><a href="">Pembayaran</a></li>
                <li class="breadcrumb-item active"><a href="">Status Pembayaran</a></li>

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
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Masino</td>
                                    <td>10.09.30</td>
                                    <td><span class="badge bg-success"><i class="bi bi-check-circle me-1"></i>
                                            Tercetak</span></td>
                                    <td>

                                        <button type="button" class="btn btn-warning mb-3"><i class="bi bi-printer"></i>
                                            Cetak</button>
                                        <button type="button" class="btn btn-primary mb-3"><i
                                                class="bi bi-pencil-square"></i> Edit</button>
                                        <button type="button" class="btn btn-danger mb-3" data-bs-toggle="modal"
                                            data-bs-target="#delete-modal"><i class="bi bi-trash2"></i>Hapus</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>1</td>
                                    <td>Masinem</td>
                                    <td>10.010.30</td>
                                    <td><span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i>
                                            Belum Tercetak</span></td>
                                    <td>

                                        <button type="button" class="btn btn-warning mb-3"><i class="bi bi-printer"></i>
                                            Cetak</button>
                                        <button type="button" class="btn btn-primary mb-3"><i
                                                class="bi bi-pencil-square"></i> Edit</button>
                                        <button type="button" class="btn btn-danger mb-3" data-bs-toggle="modal"
                                            data-bs-target="#delete-modal"><i class="bi bi-trash2"></i>Hapus</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>

                </div>
            </div>

        </div>
    </section>
    <div class="modal fade" id="delete-modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Yakin Menghapus ?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table mb-0">
                        <thead>
                            <tr class="table-info">
                                <th scope="col">Nama</th>
                                <th scope="col">No Regestrasi</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table-danger">
                                <td scope="row">Masinem</td>
                                <td>10.10.10</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Ya</button>
                </div>
            </div>
        </div>
    </div>
@endsection
