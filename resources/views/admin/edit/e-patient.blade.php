@extends('layouts.app')
<title>Edit Pasien - UGD Payment Puskesmas Ketrowonojoyo</title>
@section('content')
    <div class="pagetitle">
        <h1><i class="bi bi-people-fill me-2"></i>Edit Pasien</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Master</a></li>
                <li class="breadcrumb-item"><a href="">Data Pasien</a></li>
                <li class="breadcrumb-item active">Edit Pasien</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Pasien</h5>

                        <form method="POST" action="{{ route('patient-put', ['id'=>$patient->id]) }}"> 
                            @csrf
                            @method('put')
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{ $patient->name }}" name="name">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputDate" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" value="{{ $patient->date_of_birth }}" name="date_of_birth">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{ $patient->address }}" name="address">
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
