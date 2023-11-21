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
                                <label for="inputText" class="col-sm-2 col-form-label">No Registrasi</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="" disabled=""
                                        placeholder="No Regestrasi">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <select class="js-example-name" style="width: 100%" name="name_id">
                                        @foreach ($patients as $item)
                                            <option value="{{ $item->id }}"><span
                                                    class="text-center">{{ $item->name }}</span></option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <input type="text" name="id_user" hidden id="id_user">


                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="" disabled="" id="alamat"
                                        placeholder="Alamat">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Umur</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="" disabled=""
                                        placeholder="Umur" name="age" id="age">
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
                                    <input type="number" class="form-control qty-register" placeholder="Σ">
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <input type="number" class="form-control price-register" placeholder="Harga"
                                        value="5000">
                                </div>

                                <div class="col-sm-4 mb-3">
                                    <input type="number" class="form-control total-register" placeholder="Jumlah"
                                        value="0">
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
                                    <select class="js-example-room" style="width: 100%" name="room_id">
                                        @foreach ($rooms as $item)
                                            <option value="{{ $item->id }}"><span
                                                    class="text-center">{{ $item->name }}</span></option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-sm-3">
                                    <input type="number" class="form-control qty-room" placeholder="Σ">
                                </div>
                                <div class="col-sm-3">
                                    <input type="number" class="form-control price-room" placeholder="Harga"
                                        name="room_price" id="room_price">
                                </div>
                                <div class="col-sm-3">
                                    <input type="number" class="form-control total-room" placeholder="Jumlah"
                                        value="0">
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
                                    <input type="number" class="form-control" placeholder="Jumlah" value="0">
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
                                    <input type="number" class="form-control" placeholder="Jumlah" value="0">
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
                                    <input type="number" class="form-control" placeholder="Jumlah" value="0">
                                </div>
                            </div>


                            <div class="row">
                                <div class="row">
                                    <div class="form-check col-12">
                                        <input class="form-check-input" style="margin-top: 12px;" type="checkbox"
                                            id="gridCheck1">
                                        <label for="inputText" class="col-sm-12 col-form-label">Tindakan UGD</label>
                                    </div>
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <input type="number" class="form-control qty-iv" placeholder="Σ">
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <input type="number" class="form-control prive-iv" placeholder="Harga"
                                        value="10000">
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <input type="number" class="form-control total-iv " placeholder="Jumlah"
                                        value="0">
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
                                    <input type="number" class="form-control" placeholder="Jumlah" value="0">
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
                                    <input type="number" class="form-control" placeholder="Jumlah" value="0">
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
                                    <input type="number" class="form-control" placeholder="Jumlah" value="0">
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="row">
                                    <label for="inputText" class="col-sm-12 col-form-label fw-bold "
                                        style="font-size: 20px">Tindakan</label>
                                    <div class="row m-3 mt-0 me-5" style="background-color:#b8cff3; border-radius: 5px">

                                        @foreach ($maintains as $item)
                                            <div class="row">
                                                <div class="row">
                                                    <div class="form-check col-12">
                                                        <input class="form-check-input" style="margin-top: 12px;"
                                                            type="checkbox" id="gridCheck1">
                                                        <input placeholder="Nama Tindakan"
                                                            style="padding-top: 10px; background-color: transparent; border: transparent;"
                                                            onfocus="this.style.outline='none';"
                                                            value="{{ $item->name }}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 mb-3">
                                                    <input type="number" class="form-control qty-maintance"
                                                        placeholder="Σ" name="qty_maintance">
                                                </div>
                                                <div class="col-sm-3 mb-3">
                                                    <input type="number" class="form-control price" placeholder="Harga"
                                                        value="{{ $item->price }}" readonly>
                                                </div>
                                                <div class="col-sm-3 mb-3">
                                                    <input type="text" class="form-control unit" placeholder="Satuan"
                                                        value="{{ $item->unit }}" readonly>
                                                </div>
                                                <div class="col-sm-3 mb-3">
                                                    <input type="number" class="form-control total" placeholder="Jumlah"
                                                        value="0">
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="row">
                                    <div class="form-check col-12">
                                        <input class="form-check-input" style="margin-top: 12px;" type="checkbox"
                                            id="gridCheck1">
                                        <label for="inputText" class="col-sm-12 col-form-label">Pemakaian Obat </label>
                                    </div>
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <input type="number" class="form-control qty-medicines" placeholder="Σ">
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <input type="number" class="form-control price-medicines" placeholder="Harga"
                                        value="5000">
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <input type="number" class="form-control total-medicines" placeholder="Jumlah"
                                        value="0">
                                </div>
                            </div>

                            <div class="row">
                                <div class="row">
                                    <div class="form-check col-12">
                                        <input class="form-check-input" style="margin-top: 12px;" type="checkbox"
                                            id="gridCheck1">
                                        <label for="inputText" class="col-sm-12 col-form-label">Pemakaian Alat
                                            Kesehatan</label>
                                    </div>
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <input type="number" class="form-control qty-medical-devices" placeholder="Σ">
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <input type="number" class="form-control price-medical-devices" placeholder="Harga"
                                        value="5000">
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <input type="number" class="form-control total-medical-devices" placeholder="Jumlah"
                                        value="0">
                                </div>
                            </div>


                            <div class="row mb-0">
                                <div class="row">
                                    <label for="inputText" class="col-sm-12 col-form-label fw-bold"
                                        style="font-size: 20px">Lain - Lain</label>
                                    <div class="row m-3 mt-0 me-5" style="background-color:white; border-radius: 5px">
                                        <div class="row" id="item-lain">
                                            <div class="row">
                                                <div class="form-check col-12">
                                                    <input class="form-check-input" style="margin-top: 12px;"
                                                        type="checkbox" id="gridCheck1">
                                                    <input placeholder="Tambah Nama" value=""
                                                        style="padding-top: 10px; background-color: transparent; border: transparent;"
                                                        onfocus="this.style.outline='none';">

                                                </div>
                                            </div>
                                            <div class="col-sm-2 mb-3">
                                                <input type="number" class="form-control" placeholder="Σ">
                                            </div>
                                            <div class="col-sm-3 mb-3">
                                                <input type="number" class="form-control" placeholder="Harga"
                                                    value="">
                                            </div>
                                            <div class="col-sm-3 mb-3">
                                                <input type="text" class="form-control" placeholder="Satuan"
                                                    value="">
                                            </div>
                                            <div class="col-sm-3 mb-3">
                                                <input type="number" class="form-control" placeholder="Jumlah"
                                                    value="0">
                                            </div>
                                            <div class="col-sm-1 mb-3 mt-2">
                                                <i class="bi bi-x-circle remove-item text-danger"></i>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 mb-3">
                                        <span class="badge bg-primary" id="tambahLain"><i
                                                class="bi bi-plus-circle me-1"></i> Tambah Lain Lain</span>
                                    </div>
                                </div>
                            </div>

                            <hr class="m-0">
                            <div class="row">
                                <div class="col-6">
                                    <h5 class="card-title m-0 fw-bold">Total</h5>
                                </div>
                                <div class="col-6">
                                    <h5 class="card-title m-0" style="text-align: end">300000</h5>
                                </div>
                            </div>


                            <div class="col-12" style="text-align: end; margin-top: 20px">
                                <button type="button" class="btn btn-secondary"><i
                                        class="bi bi-arrow-left-square-fill me-1"></i>
                                    Kembali</button>
                                <button type="submit" class="btn btn-primary"><i class="bi bi-collection me-1"></i>
                                    Simpan</button>
                                <button type="button" class="btn btn-warning"><i class="bi bi-printer me-1"></i>
                                    Cetak</button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>

        </div>
    </section>







    <script>
        $(document).ready(function() {
            $("#tambahLain").click(function() {
                var newItemLain = $("#item-lain").clone();
                newItemLain.find('input').val('');
                newItemLain.find('.remove-item').show();
                $("#item-lain").after(newItemLain);
            });


            $(document).on('click', '.remove-item', function() {
                $(this).closest('.row#item-lain').remove();
            });

            $("#myForm").submit(function(event) {
                event.preventDefault();

                var formData = [];
                $(".row#item-lain").each(function() {
                    var data = {
                        checkbox: $(this).find('.form-check-input').prop('checked'),
                        input1: $(this).find('input:eq(0)').val(),
                        input2: $(this).find('input:eq(1)').val(),
                        input3: $(this).find('input:eq(2)').val(),
                        input4: $(this).find('input:eq(3)').val(),
                        input5: $(this).find('input:eq(4)').val(),
                    };
                    formData.push(data);
                });

                console.log(formData);
            });
        });
    </script>


    <script>
        $(document).ready(function() {

            $(".js-example-basic-multiple").select2({
                placeholder: "Pilih Tindakan",
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

            $(".js-example-room").select2({
                placeholder: "Pilih"
            }).on('change', function(e) {
                if ($(this).val() && $(this).val().length) {
                    $(this).next('.select2-container')
                        .find('li.select2-search--inline input.select2-search__field').attr('placeholder',
                            'Pilih Kamar');
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $(".js-example-name").select2({
                placeholder: "Pilih Pasien"
            }).on('change', function(e) {
                if ($(this).val() && $(this).val().length) {
                    $(this).next('.select2-container')
                        .find('li.select2-search--inline input.select2-search__field').attr('placeholder',
                            'Pilih');
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            // Mendapatkan nilai yang dipilih saat halaman pertama kali dimuat
            var selectedValue = $('.js-example-name').val();

            // Check if the selected value is not empty
            if (selectedValue !== "") {
                console.log(selectedValue);

                var selectedAddress = getAddressById(selectedValue);
                var selectedAge = getAge(selectedValue);
                var age = getAgeValue(selectedAge);

                // Mengatur nilai input "Alamat"
                $('#alamat').val(selectedAddress);
                $('#age').val(age);
            }
            // If you have additional conditions, you can add more checks here
        });

        $('.js-example-name').on('change', function() {
            // Mendapatkan nilai yang dipilih
            var selectedValue = $(this).val();
            console.log(selectedValue);



            var selectedAddress = getAddressById(selectedValue);
            var selectedAge = getAge(selectedValue);
            var age = getAgeValue(selectedAge);
            // Mengatur nilai input "Alamat"
            $('#alamat').val(selectedAddress);
            $('#age').val(age);

        });

        function getAgeValue(tanggalLahir) {
            // Mendapatkan tanggal hari ini
            var hariIni = new Date();

            // Membuat objek tanggal lahir dari string
            var lahir = new Date(tanggalLahir);

            // Menghitung selisih tahun
            var selisihTahun = hariIni.getFullYear() - lahir.getFullYear();

            // Memeriksa apakah ulang tahun sudah berlalu atau belum
            if (
                hariIni.getMonth() < lahir.getMonth() ||
                (hariIni.getMonth() === lahir.getMonth() && hariIni.getDate() < lahir.getDate())
            ) {
                selisihTahun--;
            }

            return selisihTahun;
        }


        function getAddressById(patientId) {
            // Lakukan permintaan Ajax atau metode lain untuk mendapatkan alamat berdasarkan ID
            // Contoh sederhana, gantilah dengan implementasi yang sesuai dengan backend Anda
            var patients = {!! json_encode($patients) !!};
            var selectedPatient = patients.find(function(patient) {
                return patient.id == patientId;
            });

            return selectedPatient ? selectedPatient.address : '';
        }

        function getAge(patientId) {
            // Lakukan permintaan Ajax atau metode lain untuk mendapatkan alamat berdasarkan ID
            // Contoh sederhana, gantilah dengan implementasi yang sesuai dengan backend Anda
            var patients = {!! json_encode($patients) !!};
            var selectedPatient = patients.find(function(patient) {
                return patient.id == patientId;
            });

            return selectedPatient ? selectedPatient.date_of_birth : '';
        }
    </script>


    <script>
        $('.js-example-room').on('change', function() {
            // Mendapatkan nilai yang dipilih
            var selectedValue = $(this).val();
            console.log(selectedValue);
            var price = getPrice(selectedValue);
            // Mengatur nilai input "Alamat"
            $('#room_price').val(price);

        });

        function getPrice(idSelected) {
            var rooms = {!! json_encode($rooms) !!};
            var selectedRoom = rooms.find(function(room) {
                console.log(room);
                return room.id == idSelected;
            });

            return selectedRoom ? selectedRoom.price : '';
        }
    </script>

    <script>
        // Menangkap perubahan pada elemen input "Σ" (qty_maintance)
        $('.qty-maintance').on('input', function() {
            var qty = $(this).val();
            var price = $(this).closest('.row').find('.price').val();

            // Menghitung jumlah dan mengatur nilai input "Jumlah"
            var total = qty * price;
            $(this).closest('.row').find('.total').val(total);
        });
    </script>

    <script>
        // Menangkap perubahan pada elemen input "Σ" dan "Harga"
        $('.qty-medicines, .price-medicines').on('input', function() {
            var qty = $('.qty-medicines').val();
            var price = $('.price-medicines').val();

            // Menghitung jumlah dan mengatur nilai input "Jumlah"
            var total = qty * price;
            console.log(total);
            $('.total-medicines').val(total);
        });
    </script>
    <script>
        // Menangkap perubahan pada elemen input "Σ" dan "Harga"
        $('.qty-medical-devices, .price-medical-devices').on('input', function() {
            var qty = $('.qty-medical-devices').val();
            var price = $('.price-medical-devices').val();

            // Menghitung jumlah dan mengatur nilai input "Jumlah"
            var total = qty * price;
            console.log(total);
            $('.total-medical-devices').val(total);
        });
    </script>

    <script>
        // Menangkap perubahan pada elemen input "Σ" dan "Harga"
        $('.qty-register, .price-register').on('input', function() {
            var qty = $('.qty-register').val();
            var price = $('.price-register').val();

            // Menghitung jumlah dan mengatur nilai input "Jumlah"
            var total = qty * price;
            console.log(total);
            $('.total-register').val(total);
        });
    </script>

    <script>
        // Menangkap perubahan pada elemen input "Σ" dan "Harga"
        $('.qty-room, .price-room').on('input', function() {
            var qty = $('.qty-room').val();
            var price = $('.price-room').val();

            // Menghitung jumlah dan mengatur nilai input "Jumlah"
            var total = qty * price;
            console.log(total);
            $('.total-room').val(total);
        });
    </script>

    <script>
        // Menangkap perubahan pada elemen input "Σ" dan "Harga"
        $('.qty-iv, .price-iv').on('input', function() {
            var qty = $('.qty-iv').val();
            var price = $('.price-iv').val();

            // Menghitung jumlah dan mengatur nilai input "Jumlah"
            var total = qty * price;
            console.log(total);
            $('.total-iv').val(total);
        });
    </script>
@endsection
