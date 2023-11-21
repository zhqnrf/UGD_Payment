@extends('layouts.app')
<title>Edit Penanggung Jawab - UGD Payment Puskesmas Ketrowonojoyo</title>
@section('content')
    <div class="pagetitle">
        <h1><i class="bi bi-person-square me-2"></i>Edit Penanggung Jawab</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Master</a></li>
                <li class="breadcrumb-item"><a href="">Data Penaggung Jawab</a></li>
                <li class="breadcrumb-item active">Edit Penanggung Jawab</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Penanggung Jawab</h5>
                        <form method="post" action="{{ route('chairmain-put', ['id'=>$chairmain->id]) }}">
                            @csrf
                            @method('put')
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{ $chairmain->name }}" name="name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Pangkat</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" value="{{ $chairmain->rank }}" name="rank">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">NIP</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{ $chairmain->nip }}" name="nip">
                                </div>
                            </div>
                            <div class="col-12" style="text-align: end; margin-top: 20px">
                                <a href="{{ route('chairmain') }}" class="btn btn-secondary">Kembali</a>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>

                        </form>

                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection
