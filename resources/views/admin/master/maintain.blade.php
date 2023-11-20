@extends('layouts.app')
<title>Data Tindakan - UGD Payment Puskesmas Ketrowonojoyo</title>
@section('content')
    <div class="pagetitle">
        <h1><i class="bi bi-tools me-2"></i>Data Tindakan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Master</a></li>
                <li class="breadcrumb-item active">Tindakan</li>
            </ol>
        </nav>
    </div>
    <section class="section dashboard">
        <div class="row">
            <div class="col-xxl-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('a-maintain') }}"> <button type="button" class="btn btn-success"><i
                                    class="bi bi-plus-square me-1"></i>
                                Tambah</button></a>
                    </div>
                    <div class="card-body">

                        <table class="table datatable table-responsive">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>
                                        <b>N</b>ama
                                    </th>
                                    <th>Harga</th>
                                    <th>Satuan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Pemasangan Oksigen</td>
                                    <td>50.0000</td>
                                    <th>/kali</th>
                                    <td> <a href="{{ route('e-maintain') }}"><button type="button"
                                                class="btn btn-primary mb-3"><i
                                                    class="bi bi-pencil-square"></i></button></a>
                                        <button type="button" class="btn btn-danger mb-3" data-bs-toggle="modal"
                                            data-bs-target="#delete-modal"><i class="bi bi-trash2"></i></button>
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
                                <th scope="col">Harga</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table-danger">
                                <td scope="row">Kelas 1</td>
                                <td>3.000.000</td>
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
