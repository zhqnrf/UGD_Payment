@extends('layouts.app')
<title>Data Penanggung Jawab - UGD Payment Puskesmas Ketrowonojoyo</title>
@section('content')
    <div class="pagetitle">
        <h1> <i class="bi bi-person-square me-2"></i>Data Penanggung Jawab</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Master</a></li>
                <li class="breadcrumb-item active">Penaggung Jawab</li>
            </ol>
        </nav>
    </div>
    <section class="section dashboard">
        <div class="row">
            <div class="col-xxl-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href=" {{ route('a-chairmain') }}"> <button type="button" class="btn btn-success"><i
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
                                    <th>Pangkat</th>
                                    <th>NIP</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($chairmains as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->rank }}</td>
                                        <td>{{ $item->nip }}</td>

                                        <td> <a href="{{ route('e-chairmain', ['id' => $item->id]) }}"><button
                                                    type="button" class="btn btn-primary mb-3"><i
                                                        class="bi bi-pencil-square"></i></button></a>
                                            <button type="button" class="btn btn-danger mb-3 delete-btn"
                                                data-bs-toggle="modal" data-bs-target="#delete-modal"
                                                data-id="{{ $item->id }}" data-name={{ $item->name }}
                                                data-nip={{ $item->nip }}>
                                                <i class="bi bi-trash2"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
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
                <form action="" method="post">
                    <div class="modal-body">
                        <input type="text" id="id_chairmain" name="id" hidden>
                        <table class="table mb-0">
                            <thead>
                                <tr class="table-info">
                                    <th scope="col">Nama</th>
                                    <th scope="col">NIP</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr class="table-danger">
                                    <td scope="row"><span id="name"></span></td>
                                    <td><span id="nip"></span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-primary">Ya</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $('.delete-btn').on('click', function(event) {

            var id = $(this).data('id');
            var name = $(this).data('name');
            var nip = $(this).data('nip');
            $('#name').text(name);
            $('#nip').text(nip);
            $('#id_chairmain').val(id);
        });
    </script>
@endsection
