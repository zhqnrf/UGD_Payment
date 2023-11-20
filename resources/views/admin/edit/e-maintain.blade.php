@extends('layouts.app')
<title>Edit Tindakan - UGD Payment Puskesmas Ketrowonojoyo</title>
@section('content')
    <div class="pagetitle">
        <h1><i class="bi bi-hammer me-2"></i>Edit Tindakan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Master</a></li>
                <li class="breadcrumb-item"><a href="">Data Tindakan</a></li>
                <li class="breadcrumb-item active">Edit Tindakan</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Tindakan</h5>


                        <form method="post" action="{{ route('maintain-put', ['id'=>$maintain->id]) }}">
                            @csrf
                            @method('put')
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" value="{{$maintain->name}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Harga</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" value="{{$maintain->price}}" name="price">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Satuan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{$maintain->unit}}" name="unit">
                                </div>
                            </div>
                            <div class="col-12" style="text-align: end; margin-top: 20px">
                                <button type="submit" class="btn btn-secondary">Kembali</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection
