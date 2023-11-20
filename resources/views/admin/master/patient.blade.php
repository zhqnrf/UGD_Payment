@extends('layouts.app')
<title>Data Pasien - UGD Payment Puskesmas Ketrowonojoyo</title>
@section('content')
    <div class="pagetitle">
        <h1> <i class="bi bi-person-fill me-2"></i>Data Pasien</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Master</a></li>
                <li class="breadcrumb-item active">Pasien</li>
            </ol>
        </nav>
    </div>
    <section class="section dashboard">
        <div class="row">
            <div class="col-xxl-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href=" {{ route('a-patient') }}"> <button type="button" class="btn btn-success"><i
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
                                    <th>Tanggal Lahir</th>
                                    <th>Alamat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($patients as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->date_of_birth }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td> <a href="{{ route('e-patient', ['id' => $item->id]) }}"><button type="button"
                                                    class="btn btn-primary mb-3"><i
                                                        class="bi bi-pencil-square"></i></button></a>
                                            <button type="button" class="btn btn-danger mb-3 delete-btn"
                                                data-bs-toggle="modal" data-bs-target="#delete-modal"
                                                data-id="{{ $item->id }}" data-name={{ $item->name }}
                                                data-address={{ $item->address }}>
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
                <form action="{{ route('patient-delete') }}" method="post">
                    @csrf
                    @method('delete')
                    <input type="text" name="id" id="id_patient" hidden>
                    <div class="modal-body">
                        <table class="table mb-0">
                            <thead>
                                <tr class="table-info">
                                    <th scope="col">Nama</th>
                                    <th scope="col">Alamat</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr class="table-danger">
                                    <td scope="row"><span id="name"></span></td>
                                    <td><span id="address"></span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Ya</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $('.delete-btn').on('click', function(event) {
            var id = $(this).data('id');
            var name = $(this).data('name');
            var address = $(this).data('address');
            $('#name').text(name);
            $('#address').text(address);
            $('#id_patient').val(id);

        });
    </script>
@endsection
