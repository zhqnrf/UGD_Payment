@extends('layouts.app')
<title>Data Kamar - UGD Payment Puskesmas Ketrowonojoyo</title>
@section('content')
    <div class="pagetitle">
        <h1><i class="bi bi-door-open-fill me-2"></i>Data Kamar</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Master</a></li>
                <li class="breadcrumb-item active">Kamar</li>
            </ol>
        </nav>
    </div>
    <section class="section dashboard">
        <div class="row">
            <div class="col-xxl-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('a-room') }}"> <button type="button" class="btn btn-success"><i
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
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rooms as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>Rp.{{ number_format($item->price, 0, ',', '.') }}</td>
                                        <td><a href="{{ route('e-room', ['id' => $item->id]) }}"><button type="button"
                                                    class="btn btn-primary mb-3"><i
                                                        class="bi bi-pencil-square"></i></button></a>
                                            <button type="button" class="btn btn-danger mb-3 delete-btn"
                                                data-bs-toggle="modal" data-bs-target="#delete-modal"
                                                data-id="{{ $item->id }}" data-name="{{ $item->name }}"
                                                data-price="{{ $item->price }}">
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
                <form action="{{ route('room-delete') }}" method="post">
                    @method('delete')
                    @csrf
                    <input type="text" id="id_room" hidden name="id">
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
                                    <td scope="row"><span id="name"></span></td>
                                    <td><span id="price"></span></td>
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
        function formatRupiah(angka) {
            var numberString = angka.toString().replace(/[^,\d]/g, '');
            var split = numberString.split(',');
            var sisa = split[0].length % 3;
            var rupiah = split[0].substr(0, sisa);
            var ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            if (ribuan) {
                var separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] !== undefined ? rupiah + ',' + split[1] : rupiah;
            return 'Rp ' + rupiah;
        }

        $('.delete-btn').on('click', function(event) {
            var id = $(this).data('id');
            var name = $(this).data('name');
            var price = $(this).data('price');
            console.log(price);
            $('#name').text(name);
            $('#price').text(formatRupiah(price));
            $('#id_room').val(id);

        });
    </script>
@endsection
