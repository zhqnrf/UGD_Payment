@extends('layouts.app')
<title>Tambah Pembayaran - UGD Payment Puskesmas Ketrowonojoyo</title>
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <style>
        .select2-container .select2-selection--single {
            box-sizing: border-box;
            cursor: pointer;
            display: block;
            height: 40px;
            user-select: none;
            padding-top: 5px;
            -webkit-user-select: none;
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
                        <form method="post" action="{{ route('pay-post') }}" class="m-3">
                            @csrf
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">No Registrasi</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{ $registrationNumber }}"
                                        placeholder="No Regestrasi" name="registration_number" readonly
                                        style="background-color:rgb(239, 238, 238)">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <select class="js-example-name" style="width: 100%" name="patient[id]">
                                        @foreach ($patients as $item)
                                            <option value="{{ $item->id }}"><span
                                                    class="text-center">{{ $item->name }}</span></option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="" readonly id="alamat"
                                        placeholder="Alamat" name="patient[address]"
                                        style="background-color:rgb(239, 238, 238)">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Umur</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="" readonly placeholder="Umur"
                                        name="patient[age]" id="age" style="background-color:rgb(239, 238, 238)">
                                </div>
                            </div>

                            <div class="row mb-3 mt-0">
                                <div class="col-6 ">
                                    <label for="inputText" class="col-sm-12 col-form-label">Tanggal Mulai Rawat</label>
                                    <div class="col-sm-12">
                                        <input type="date" class="form-control" placeholder="Tanggal Mulai Rawat"
                                            name="start" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="inputText" class="col-sm-12 col-form-label">Tanggal Akhir Rawat</label>
                                    <div class="col-sm-12">
                                        <input type="date" class="form-control" placeholder="Tanggal Akhir Rawat"
                                            name="end" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Jumlah Hari Rawat</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" placeholder="Masukkan Jumlah Hari Rawat"
                                        name="days_treated" required>
                                </div>
                            </div>

                            <h5 class="card-title m-0">Data Administrasi</h5>
                            <hr class="m-0 mb-3">


                            <div class="row">
                                <div class="row">
                                    <div class="form-check col-12">
                                        <input class="form-check-input" style="margin-top: 12px;" type="checkbox"
                                            id="gridCheck1" name="registration[checked]">
                                        <label for="inputText" class="col-sm-12 col-form-label">Pendaftaran</label>
                                    </div>
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <input type="number" class="form-control qty-register" placeholder="Σ"
                                        name="registration[qty]">
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <input type="number" class="form-control price-register" placeholder="Masukan Harga"
                                        name="registration[price]" value="5000">
                                </div>

                                <div class="col-sm-4 mb-3">
                                    <input type="number" class="form-control total-register" placeholder="Total"
                                        name="registration[sub_total]" value="0">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="row">
                                    <div class="form-check col-12">
                                        <input class="form-check-input" style="margin-top: 12px;" type="checkbox"
                                            id="gridCheck1" name="room[checked]">
                                        <label for="inputText" class="col-sm-12 col-form-label">Kelas Kamar</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <select class="js-example-room" style="width: 100%" name="room[id]">
                                        @foreach ($rooms as $item)
                                            <option value="{{ $item->id }}"><span
                                                    class="text-center">{{ $item->name }}</span></option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-sm-3">
                                    <input type="number" class="form-control qty-room" placeholder="Σ"
                                        name="room[qty]">
                                </div>
                                <div class="col-sm-3">
                                    <input type="number" class="form-control price-room" placeholder="Harga"
                                        name="room[price]" id="room_price">
                                </div>
                                <div class="col-sm-3">
                                    <input type="number" class="form-control total-room" placeholder="Jumlah"
                                        value="0" name="room[sub_total]">
                                </div>
                            </div>

                            <div class="row">
                                <div class="row">
                                    <div class="form-check col-12">
                                        <input class="form-check-input" style="margin-top: 12px;" type="checkbox"
                                            id="gridCheck1" name="iv[check]">
                                        <label for="inputText" class="col-sm-12 col-form-label">Pemasangan Infus</label>
                                    </div>
                                </div>
                                <div class="col-sm-3 mb-3">
                                    <input type="number" name="iv[qty]" class="form-control qty-iv" placeholder="Σ">
                                </div>
                                <div class="col-sm-3 mb-3">
                                    <input type="number" name="iv[price]" class="form-control prive-iv"
                                        placeholder="Harga" value="10000">
                                </div>
                                <div class="col-sm-3 mb-3">
                                    <input type="text" name="iv[unit]" class="form-control" placeholder="Satuan"
                                        value="/kali">
                                </div>
                                <div class="col-sm-3 mb-3">
                                    <input type="number" name="iv[sub_total]" class="form-control total-iv"
                                        placeholder="Jumlah" value="0">
                                </div>
                            </div>

                            <div class="row">
                                <div class="row">
                                    <div class="form-check col-12">
                                        <input class="form-check-input" style="margin-top: 12px;" type="checkbox"
                                            id="gridCheck1" name="doctor[check]">
                                        <label for="inputText" class="col-sm-12 col-form-label">Visite Dokter</label>
                                    </div>
                                </div>
                                <div class="col-sm-3 mb-3">
                                    <input type="number" class="form-control qty-doctor" placeholder="Σ"
                                        name="doctor[qty]">
                                </div>
                                <div class="col-sm-3 mb-3">
                                    <input type="number" class="form-control price-doctor" placeholder="Harga"
                                        value="10000" name="doctor[price]">
                                </div>
                                <div class="col-sm-3 mb-3">
                                    <input type="text" class="form-control" placeholder="Satuan" value="/hari"
                                        name="doctor[unit]">
                                </div>
                                <div class="col-sm-3 mb-3">
                                    <input type="number" class="form-control total-doctor" placeholder="Jumlah"
                                        value="0" name="doctor[sub_total]">
                                </div>
                            </div>

                            <div class="row">
                                <div class="row">
                                    <div class="form-check col-12">
                                        <input class="form-check-input" style="margin-top: 12px;" type="checkbox"
                                            id="gridCheck1" name="care[check]">
                                        <label for="inputText" class="col-sm-12 col-form-label">Asuhan Keperawatan</label>
                                    </div>
                                </div>
                                <div class="col-sm-3 mb-3">
                                    <input type="number" class="form-control qty-care" placeholder="Σ"
                                        name="care[qty]">
                                </div>
                                <div class="col-sm-3 mb-3">
                                    <input type="number" class="form-control price-care" placeholder="Harga"
                                        value="10000" name="care[price]">
                                </div>
                                <div class="col-sm-3 mb-3">
                                    <input type="text" class="form-control" placeholder="Satuan" value="/kali"
                                        name="care[unit]">
                                </div>
                                <div class="col-sm-3 mb-3">
                                    <input type="number" class="form-control total-care" placeholder="Jumlah"
                                        value="0" name="care[sub_total]">
                                </div>
                            </div>


                            <div class="row tindakan">
                                <div class="row">
                                    <div class="form-check col-12">
                                        <input class="form-check-input" style="margin-top: 12px;" type="checkbox"
                                            id="gridCheck1" name="ugd[check]">
                                        <label for="inputText" class="col-sm-12 col-form-label">Tindakan UGD</label>
                                    </div>
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <input type="number" class="form-control qty-ugd" placeholder="Σ" name="ugd[qty]">
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <input type="number" class="form-control price-ugd" placeholder="Harga"
                                        value="10000" name="ugd[price]">
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <input type="number" class="form-control total-ugd" placeholder="Jumlah"
                                        value="0" name="ugd[sub_total]">
                                </div>
                            </div>


                            <div class="row">
                                <div class="row">
                                    <div class="form-check col-12">
                                        <input class="form-check-input" style="margin-top: 12px;" type="checkbox"
                                            id="gridCheck1" name="nutrition[check]">
                                        <label for="inputText" class="col-sm-12 col-form-label">Konsultasi Gizi</label>
                                    </div>
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <input type="number" class="form-control qty-nutrition" placeholder="Σ"
                                        name="nutrition[qty]">
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <input type="number" class="form-control price-nutrition" placeholder="Harga"
                                        value="5000" name="nutrition[price]">
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <input type="number" class="form-control total-nutrition" placeholder="Jumlah"
                                        value="0" name="nutrition[sub_total]">
                                </div>
                            </div>


                            <div class="row">
                                <div class="row">
                                    <div class="form-check col-12">
                                        <input class="form-check-input" style="margin-top: 12px;" type="checkbox"
                                            id="gridCheck1" name="ambulance[check]">
                                        <label for="inputText" class="col-sm-12 col-form-label">Ambulance</label>
                                    </div>
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <input type="number" class="form-control qty-ambulance" name="ambulance[qty]"
                                        placeholder="Σ">
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <input type="number" class="form-control price-ambulance" placeholder="Harga"
                                        name="ambulance[price]">
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <input type="number" class="form-control total-ambulance" placeholder="Jumlah"
                                        value="0" name="ambulance[sub_total]">
                                </div>
                            </div>


                            <div class="row">
                                <div class="row">
                                    <div class="form-check col-12">
                                        <input class="form-check-input" style="margin-top: 12px;" type="checkbox"
                                            id="gridCheck1" name="lab[check]">
                                        <label for="inputText" class="col-sm-12 col-form-label">Laboratorium`</label>
                                    </div>
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <input type="number" class="form-control qty-lab" placeholder="Σ" name="lab[qty]">
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <input type="number" class="form-control price-lab" placeholder="Harga"
                                        name="lab[price]">
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <input type="number" class="form-control total-lab" placeholder="Jumlah"
                                        value="0" name="lab[sub_total]">
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="row">
                                    <label for="inputText" class="col-sm-12 col-form-label fw-bold "
                                        style="font-size: 20px">Tindakan</label>
                                    <div class="row m-3 mt-0 me-5" style="background-color:#b8cff3; border-radius: 5px">

                                        @foreach ($maintains as $key => $item)
                                            <div class="row">
                                                <div class="row">
                                                    <div class="form-check col-12">
                                                        <input class="form-check-input maintance_check"
                                                            style="margin-top: 12px;" type="checkbox"
                                                            id="gridCheck{{ $key }}"
                                                            name="maintance[{{ $key }}][maintance_check]"
                                                            id="maintaince_{{ $key }}">
                                                        <input placeholder="Nama Tindakan"
                                                            style="padding-top: 10px; background-color: transparent; border: transparent;"
                                                            onfocus="this.style.outline='none';"
                                                            value="{{ $item->name }}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 mb-3">
                                                    <input type="number" class="form-control qty-maintance"
                                                        placeholder="Σ" name="maintance[{{ $key }}][qty]"
                                                        id="maintance_qty_{{ $key }}">
                                                </div>
                                                <div class="col-sm-3 mb-3">
                                                    <input type="number" class="form-control price" placeholder="Harga"
                                                        value="{{ $item->price }}"
                                                        name="maintance[{{ $key }}][price]"
                                                        id="maintance_price_{{ $key }}">
                                                </div>
                                                <div class="col-sm-3 mb-3">
                                                    <input type="text" class="form-control unit" placeholder="Satuan"
                                                        value="{{ $item->unit }}"
                                                        name="maintance[{{ $key }}][unit]"
                                                        id="maintance_unit_{{ $key }}">
                                                </div>
                                                <div class="col-sm-3 mb-3">
                                                    <input type="number" class="form-control total" placeholder="Jumlah"
                                                        value="0" name="maintance[{{ $key }}][sub_total]"
                                                        id="maintance_total_{{ $key }}">
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
                                            id="gridCheck1" name="medicines[check]">
                                        <label for="inputText" class="col-sm-12 col-form-label">Pemakaian Obat </label>
                                    </div>
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <input type="number" name="medicines[qty]" class="form-control qty-medicines"
                                        placeholder="Σ">
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <input type="number" name="medicines[price]" class="form-control price-medicines"
                                        placeholder="Harga" value="5000">
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <input type="number" class="form-control total-medicines"
                                        name="medicines[sub_total]" placeholder="Jumlah" value="0">
                                </div>
                            </div>

                            <div class="row">
                                <div class="row">
                                    <div class="form-check col-12">
                                        <input class="form-check-input" style="margin-top: 12px;" type="checkbox"
                                            id="gridCheck1" name="medical_device[check]">
                                        <label for="inputText" class="col-sm-12 col-form-label">Pemakaian Alat
                                            Kesehatan</label>
                                    </div>
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <input type="number" name="medical_device[qty]"
                                        class="form-control qty-medical-devices" placeholder="Σ">
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <input type="number" name="medical_device[price]"
                                        class="form-control price-medical-devices" placeholder="Harga" value="5000">
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <input type="number" name="medical_device[sub_total]"
                                        class="form-control total-medical-devices" placeholder="Jumlah" value="0">
                                </div>
                            </div>


                            <div class="row mb-0">
                                <div class="row">
                                    <label for="inputText" class="col-sm-12 col-form-label fw-bold"
                                        style="font-size: 20px">Lain - Lain</label>
                                    <div class="row m-3 mt-0 me-5" style="background-color:white; border-radius: 5px">
                                        <div class="row" hidden id="item-lain">
                                            <div class="row">
                                                <div class="form-check col-12">
                                                    <input placeholder="Tambah Nama" value=""
                                                        style="padding-top: 10px; background-color: transparent; border: transparent;"
                                                        onfocus="this.style.outline='none';">

                                                </div>
                                            </div>
                                            <div class="col-sm-2 mb-3">
                                                <input type="number" class="form-control qty-other" placeholder="Σ">
                                            </div>
                                            <div class="col-sm-3 mb-3">
                                                <input type="number" class="form-control price-other"
                                                    placeholder="Harga" value="">
                                            </div>
                                            <div class="col-sm-3 mb-3">
                                                <input type="text" class="form-control unit-other"
                                                    placeholder="Satuan" value="/Kali">
                                            </div>
                                            <div class="col-sm-3 mb-3">
                                                <input type="number" class="form-control total-other"
                                                    placeholder="Jumlah" value="0">
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
                                    <div class="btn btn-outline-dark  btn-sm mt-3 mb-3">
                                        <h5 class=" mt-2 fw-bold">Cek Total</h5>
                                    </div>

                                </div>


                                <div class="col-6">
                                    <h5 class="mt-4" style="text-align: end">300000</h5>
                                </div>
                            </div>
                            <hr class="m-0">

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

            // Event delegation for dynamically added elements
            $(document).on('input', '.item-lain .qty-other, .item-lain .price-other', function() {
                var $item = $(this).closest('.item-lain');
                var qty = $item.find('.qty-other').val();
                var price = $item.find('.price-other').val();

                // Menghitung jumlah dan mengatur nilai input "Jumlah"
                var total = qty * price;
                console.log(total);

                // Set the total value for the specific item
                $item.find('.total-other').val(total);
            });

            let otherIndex = 0; // Initialize an index counter
            $("#tambahLain").click(function() {
                var newItemLain = $("#item-lain").clone();
                var unitOther = newItemLain.find('.unit-other').val();

                newItemLain.find('input').val('');
                newItemLain.find('.unit-other').val(unitOther);
                newItemLain.find('.remove-item').show();
                newItemLain.addClass('item-lain'); // Add a class to identify the cloned items
                newItemLain.removeAttr('hidden');
                newItemLain.find('.qty-other').attr('name', 'other[' + otherIndex + '][qty]');
                newItemLain.find('.price-other').attr('name', 'other[' + otherIndex + '][price]');
                newItemLain.find('.unit-other').attr('name', 'other[' + otherIndex + '][unit]');
                newItemLain.find('.total-other').attr('name', 'other[' + otherIndex + '][sub_total]');

                $("#item-lain").after(newItemLain);
                otherIndex++;

                // Rebind the input event after cloning
                bindInputEvent();
            });

            // Function to bind input event for cloned items
            function bindInputEvent() {
                $('.item-lain .qty-other, .item-lain .price-other').off('input'); // Unbind previous event
                $(document).on('input', '.item-lain .qty-other, .item-lain .price-other', function() {
                    var $item = $(this).closest('.item-lain');
                    var qty = $item.find('.qty-other').val();
                    var price = $item.find('.price-other').val();

                    // Menghitung jumlah dan mengatur nilai input "Jumlah"
                    var total = qty * price;
                    console.log(total);

                    // Set the total value for the specific item
                    $item.find('.total-other').val(total);
                });
            }

            // Initial binding
            bindInputEvent();



            $(document).on('click', '.remove-item', function() {
                $(this).closest('.row#item-lain').remove();
            });

        });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.js-example-name').select2();
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.js-example-room').select2();
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

            var selectedValue = $('.js-example-room').val();
            var price = getPrice(selectedValue);
            // Mengatur nilai input "Alamat"
            $('#room_price').val(price);




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

            return selisihTahun + " Tahun";
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

        $('.qty-doctor, .price-doctor').on('input', function() {
            var qty = $('.qty-doctor').val();
            var price = $('.price-doctor').val();

            // Menghitung jumlah dan mengatur nilai input "Jumlah"
            var total = qty * price;
            console.log(total);
            $('.total-doctor').val(total);
        });

        $('.qty-care, .price-care').on('input', function() {
            var qty = $('.qty-care').val();
            var price = $('.price-care').val();

            // Menghitung jumlah dan mengatur nilai input "Jumlah"
            var total = qty * price;
            console.log(total);
            $('.total-care').val(total);
        });

        $('.qty-ugd, .price-ugd').on('input', function() {
            var qty = $('.qty-ugd').val();
            var price = $('.price-ugd').val();

            // Menghitung jumlah dan mengatur nilai input "Jumlah"
            var total = qty * price;
            console.log(total);
            $('.total-ugd').val(total);
        });

        $('.qty-nutrition, .price-nutrition').on('input', function() {
            var qty = $('.qty-nutrition').val();
            var price = $('.price-nutrition').val();

            // Menghitung jumlah dan mengatur nilai input "Jumlah"
            var total = qty * price;
            console.log(total);
            $('.total-nutrition').val(total);
        });

        $('.qty-ambulance, .price-ambulance').on('input', function() {
            var qty = $('.qty-ambulance').val();
            var price = $('.price-ambulance').val();

            // Menghitung jumlah dan mengatur nilai input "Jumlah"
            var total = qty * price;
            console.log(total);
            $('.total-ambulance').val(total);
        });

        $('.qty-lab, .price-lab').on('input', function() {
            var qty = $('.qty-lab').val();
            var price = $('.price-lab').val();

            // Menghitung jumlah dan mengatur nilai input "Jumlah"
            var total = qty * price;
            console.log(total);
            $('.total-lab').val(total);
        });
    </script>
@endsection
