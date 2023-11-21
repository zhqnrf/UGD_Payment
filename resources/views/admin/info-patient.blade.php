@extends('layouts.app')
<title>Info Pasien - UGD Payment Puskesmas Ketrowonojoyo</title>
@section('content')
    <section class="section">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <h5 class="card-title"> <i class="bi bi-people-fill"></i> Data Pasien</h5>
                        </div>
                        <div class="col-sm-6" style="text-align: end">
                            <button class="btn btn-secondary mt-3"> <i class="bi bi-arrow-left-square-fill"></i>
                                Kembali</button>
                            <button class="btn btn-warning mt-3"> <i class="bi bi-printer"></i>
                                Cetak</button>
                        </div>
                    </div>

                    <table class="table table-hover">

                        <tbody>
                            <tr>
                                <th>Nama</th>
                                <td>Brandon Jacob</td>
                            </tr>
                            <tr>
                                <th>Umur</th>
                                <td>23 Tahun</td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>Pacitan, Krajan</td>
                            </tr>
                            <tr>
                                <th>Umur</th>
                                <td>23 Tahun</td>
                            </tr>
                            <tr>
                                <th>Tanggal Mulai Dirawat</th>
                                <td>12 Februari 2023</td>
                            </tr>
                            <tr>
                                <th>Tanggal Akhir Dirawat</th>
                                <td>12 Maret 2023</td>
                            </tr>
                            <tr>
                                <th>Jumlah Hari Rawat</th>
                                <td>2 Hari</td>
                            </tr>
                        </tbody>
                    </table>
                    <h5 class="card-title"> <i class="bi bi-clipboard-check-fill"></i> Data Administrasi</h5>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Data</th>
                                <th scope="col">Σ</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Satuan</th>
                                <th scope="col">Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Pendaftaran</td>
                                <td>3</td>
                                <td>5.000</td>
                                <td>-</td>
                                <td>15.000</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Kamar Kelas I</td>
                                <td>1</td>
                                <td>60.000</td>
                                <td>-</td>
                                <td>15.000</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Pemasangan Infus</td>
                                <td>1</td>
                                <td>10.000</td>
                                <td>kali</td>
                                <td>15.000</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Visite Dokter</td>
                                <td>3</td>
                                <td>10.000</td>
                                <td>hari</td>
                                <td>30.000</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Asuhan Keperawatan</td>
                                <td>3</td>
                                <td>10.000</td>
                                <td>hari</td>
                                <td>30.000</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Tindakan UGD</td>
                                <td>1</td>
                                <td>20.000</td>
                                <td>-</td>
                                <td>20.000</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Konsultasi Gizi</td>
                                <td>1</td>
                                <td>5.000</td>
                                <td>-</td>
                                <td>50.000</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Ambulance</td>
                                <td>1</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Laboratorium</td>
                                <td>1</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>

                            <tr>
                                <td>11</td>
                                <td>Pemakaian Obat</td>
                                <td>1</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>Pemakaian Alat Kesehatan</td>
                                <td>1</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>Lain Lain</td>
                                <td>1</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                        </tbody>
                    </table>

                    <h5 class="card-title"> <i class="bi bi-tools"></i> Data Tindakan</h5>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Data</th>
                                <th scope="col">Σ</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Satuan</th>
                                <th scope="col">Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Pasang Kateter</td>
                                <td>3</td>
                                <td>5.000</td>
                                <td>-</td>
                                <td>15.000</td>
                            </tr>
                        </tbody>
                    </table>

                    <hr>
                    <div class="row">
                        <div class="col-sm-6">
                            <h4 class="fw-bold">Total</h4>
                        </div>
                        <div class="col-sm-6 fw-bold" style="text-align: end">
                            Rp 30000
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3 text-center mt-2">
                            <span class="badge bg-dark " id="tambahLain"><i class="bi bi-person me-1"></i>Penanggung Jawab
                                : Mariyadi</span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
