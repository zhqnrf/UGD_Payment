@extends('layouts.app')
<title>Tambah Pembayaran - UGD Payment Puskesmas Ketrowonojoyo</title>
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/i18n/zh-TW.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
    <style>
        .select2-selection {

            font-size: 15px;

            border: solid 1px #dee2e6 !important;
            padding-left: 4px;
        }

        .select2-selection--multiple {
            height: 80px !important;
            padding-bottom: 20px;

        }

        .select2-selection {
            height: 37px !important;

        }

        .select2-selection__choice {
            height: 30px;
            line-height: 30px;
            padding-right: 16px !important;
            padding-left: 16px !important;
            background-color: #0d6efd !important;
            color: #eee !important;
            border: none !important;
            border-radius: 3px !important;

        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
            color: white;
        }

        .select2-selection__choice__remove {
            float: right;
            text-decoration-color: white;
            border-color: white;
            margin-right: 0;
            margin-left: 2px;
        }

        .select2-search--inline .select2-search__field {
            line-height: 40px;
            color: white;
            width: 100% !important;
        }

        .select2-container:hover,
        .select2-container:focus,
        .select2-container:active,
        .select2-selection:hover,
        .select2-selection:focus,
        .select2-selection:active {
            outline-color: transparent;

            outline-style: none;
            /* color: var(--primary); */
        }

        .select2-results__options li {
            display: block;

        }

        .select2-container .select2-search--inline .select2-search__field {
            box-sizing: border-box;
            border: none;
            font-size: 100%;
            margin-top: 0px;
            padding: 0;
        }

        .select2-selection__rendered {
            transform: translateY(2px);
        }

        .select2-selection__arrow {
            display: none;
        }

        .select2-results__option--highlighted {
            background-color: #dee2e6 !important;
            color: black !important;
        }

        .select2-dropdown {
            border-radius: 0 !important;
            box-shadow: 0px 3px 3px 0 #dee2e6 !important;
            border: none !important;
            margin-top: 4px !important;
            /* width: 366px !important; */
        }

        .select2-results__option {

            font-size: 13px;
            line-height: 24px !important;
            vertical-align: middle !important;
            padding-left: 8px !important;
        }

        .select2-results__option[aria-selected="true"] {
            background-color: #eee !important;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: black;
            padding-top: 3px;
            line-height: 28px;
        }

        .select2-search__field {

            color: black;
            font-size: 13px;
            padding-left: 8px !important;
            border-color: #6e6e6e !important;
        }

        .select2-selection__placeholder {
            color: ##6e6e6e !important;
        }
    </style>



    <div class="pagetitle">
        <h1><i class="bi bi-cast me-2"></i>Tambah Pembayaran</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Home</a></li>
                <li class="breadcrumb-item"><a href="">Pembayaran</a></li>
                <li class="breadcrumb-item active">Tambah Pembayaran</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title m-0">Data Pasien</h5>
                        <hr class="m-0">
                        <form class="m-3">

                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">No Regestrasi</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="" disabled=""
                                        placeholder="No Regestrasi">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Nama Pasien">
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Alamat Pasien">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Umur</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" placeholder="Umur Pasien">
                                </div>
                            </div>

                            <div class="row mb-3 mt-0">
                                <div class="col-6 ">
                                    <label for="inputText" class="col-sm-12 col-form-label">Tanggal Mulai Rawat</label>
                                    <div class="col-sm-12">
                                        <input type="date" class="form-control" placeholder="Tanggal Mulai Rawat">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="inputText" class="col-sm-12 col-form-label">Tanggal Akhir Rawat</label>
                                    <div class="col-sm-12">
                                        <input type="date" class="form-control" placeholder="Tanggal Akhir Rawat">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Jumlah Hari Rawat</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" placeholder="Masukkan Jumlah Hari Rawat">
                                </div>
                            </div>

                            <h5 class="card-title m-0">Data Administrasi</h5>
                            <hr class="m-0 mb-3">


                            <div class="row">
                                <div class="row">
                                    <div class="form-check col-12">
                                        <input class="form-check-input" style="margin-top: 12px;" type="checkbox"
                                            id="gridCheck1">
                                        <label for="inputText" class="col-sm-12 col-form-label">Pendaftaran</label>
                                    </div>
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <input type="number" class="form-control" placeholder="Σ">
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <input type="number" class="form-control" placeholder="Harga" value="5000">
                                </div>

                                <div class="col-sm-4 mb-3">
                                    <input type="number" class="form-control" placeholder="Jumlah">
                                </div>
                            </div>


                            <div class="row mb-3">
                                <div class="row">
                                    <div class="form-check col-12">
                                        <input class="form-check-input" style="margin-top: 12px;" type="checkbox"
                                            id="gridCheck1">
                                        <label for="inputText" class="col-sm-12 col-form-label">Kelas Kamar</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <select class="js-example-category" style="width: 100%" name="category_id">

                                    </select>
                                </div>

                                <div class="col-sm-3">
                                    <input type="number" class="form-control" placeholder="Σ">
                                </div>
                                <div class="col-sm-3">
                                    <input type="number" class="form-control" placeholder="Harga">
                                </div>
                                <div class="col-sm-3">
                                    <input type="number" class="form-control" placeholder="Jumlah">
                                </div>
                            </div>

                            <div class="row">
                                <div class="row">
                                    <div class="form-check col-12">
                                        <input class="form-check-input" style="margin-top: 12px;" type="checkbox"
                                            id="gridCheck1">
                                        <label for="inputText" class="col-sm-12 col-form-label">Pemasangan Infus</label>
                                    </div>
                                </div>
                                <div class="col-sm-3 mb-3">
                                    <input type="number" class="form-control" placeholder="Σ">
                                </div>
                                <div class="col-sm-3 mb-3">
                                    <input type="number" class="form-control" placeholder="Harga" value="10000">
                                </div>
                                <div class="col-sm-3 mb-3">
                                    <input type="number" class="form-control" placeholder="Satuan" value="kali">
                                </div>
                                <div class="col-sm-3 mb-3">
                                    <input type="number" class="form-control" placeholder="Jumlah">
                                </div>
                            </div>

                            <div class="row">
                                <div class="row">
                                    <div class="form-check col-12">
                                        <input class="form-check-input" style="margin-top: 12px;" type="checkbox"
                                            id="gridCheck1">
                                        <label for="inputText" class="col-sm-12 col-form-label">Visite Dokter</label>
                                    </div>
                                </div>
                                <div class="col-sm-3 mb-3">
                                    <input type="number" class="form-control" placeholder="Σ">
                                </div>
                                <div class="col-sm-3 mb-3">
                                    <input type="number" class="form-control" placeholder="Harga" value="10000">
                                </div>
                                <div class="col-sm-3 mb-3">
                                    <input type="number" class="form-control" placeholder="Satuan" value="hari">
                                </div>
                                <div class="col-sm-3 mb-3">
                                    <input type="number" class="form-control" placeholder="Jumlah">
                                </div>
                            </div>

                            <div class="row">
                                <div class="row">
                                    <div class="form-check col-12">
                                        <input class="form-check-input" style="margin-top: 12px;" type="checkbox"
                                            id="gridCheck1">
                                        <label for="inputText" class="col-sm-12 col-form-label">Asuhan Keperawatan</label>
                                    </div>
                                </div>
                                <div class="col-sm-3 mb-3">
                                    <input type="number" class="form-control" placeholder="Σ">
                                </div>
                                <div class="col-sm-3 mb-3">
                                    <input type="number" class="form-control" placeholder="Harga" value="10000">
                                </div>
                                <div class="col-sm-3 mb-3">
                                    <input type="number" class="form-control" placeholder="Satuan" value="kali">
                                </div>
                                <div class="col-sm-3 mb-3">
                                    <input type="number" class="form-control" placeholder="Jumlah">
                                </div>
                            </div>


                            <div class="row">
                                <div class="row">
                                    <div class="form-check col-12">
                                        <input class="form-check-input" style="margin-top: 12px;" type="checkbox"
                                            id="gridCheck1">
                                        <label for="inputText" class="col-sm-12 col-form-label">Pemasangan Infus</label>
                                    </div>
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <input type="number" class="form-control" placeholder="Σ">
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <input type="number" class="form-control" placeholder="Harga" value="10000">
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <input type="number" class="form-control" placeholder="Jumlah">
                                </div>
                            </div>


                            <div class="row">
                                <div class="row">
                                    <div class="form-check col-12">
                                        <input class="form-check-input" style="margin-top: 12px;" type="checkbox"
                                            id="gridCheck1">
                                        <label for="inputText" class="col-sm-12 col-form-label">Konsultasi Gizi</label>
                                    </div>
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <input type="number" class="form-control" placeholder="Σ">
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <input type="number" class="form-control" placeholder="Harga" value="5000">
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <input type="number" class="form-control" placeholder="Jumlah">
                                </div>
                            </div>


                            <div class="row">
                                <div class="row">
                                    <div class="form-check col-12">
                                        <input class="form-check-input" style="margin-top: 12px;" type="checkbox"
                                            id="gridCheck1">
                                        <label for="inputText" class="col-sm-12 col-form-label">Ambulance</label>
                                    </div>
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <input type="number" class="form-control" placeholder="Σ">
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <input type="number" class="form-control" placeholder="Harga">
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <input type="number" class="form-control" placeholder="Jumlah">
                                </div>
                            </div>


                            <div class="row">
                                <div class="row">
                                    <div class="form-check col-12">
                                        <input class="form-check-input" style="margin-top: 12px;" type="checkbox"
                                            id="gridCheck1">
                                        <label for="inputText" class="col-sm-12 col-form-label">Laboratorium`</label>
                                    </div>
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <input type="number" class="form-control" placeholder="Σ">
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <input type="number" class="form-control" placeholder="Harga">
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <input type="number" class="form-control" placeholder="Jumlah">
                                </div>
                            </div>



                            <div class="row">
                                <div class="row">
                                    <div class="form-check col-12">
                                        <input class="form-check-input" style="margin-top: 12px;" type="checkbox"
                                            id="gridCheck1">
                                        <label for="inputText" class="col-sm-12 col-form-label">Pemakaian Obat & Alat
                                            Kesehatan</label>
                                    </div>
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <input type="number" class="form-control" placeholder="Σ">
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <input type="number" class="form-control" placeholder="Harga" value="5000">
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <input type="number" class="form-control" placeholder="Jumlah">
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





    <script>
        $(document).ready(function() {

            $(".js-example-basic-multiple").select2({
                placeholder: "Pilih Tindakan"
            }).on('change', function(e) {
                if ($(this).val() && $(this).val().length) {
                    $(this).next('.select2-container')
                        .find('li.select2-search--inline input.select2-search__field').attr('placeholder',
                            'Pilih Tindakan');
                }
            });
        });
    </script>


    <script>
        $(document).ready(function() {

            $(".js-example-category").select2({
                placeholder: "Pilih"
            }).on('change', function(e) {
                if ($(this).val() && $(this).val().length) {
                    $(this).next('.select2-container')
                        .find('li.select2-search--inline input.select2-search__field').attr('placeholder',
                            'Pilih');
                }
            });
        });
    </script>
@endsection
