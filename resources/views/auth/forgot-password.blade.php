@extends('layouts.app')
<title>Ganti Password - UGD Payment Puskesmas Ketrowonojoyo</title>
@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title m-0 p-0">Ganti Password</h4>
                    </div>
                    <div class="card-body pt-3">
                        <div class="basic-form">
                            <form action="" method="post" class="form-valide-with-icon needs-validation" novalidate="">


                                <div class="mb-3">
                                    <label for="yourPassword" class="form-label">Password Lama</label>
                                    <div class="input-group" id="">
                                        <input type="password" class="form-control border-end-0" name="password"
                                            id="inputChoosePassword" placeholder="Masukkan Password Lama Anda">
                                        <a href="javascript:;" class="input-group-text bg-primary" id="show-hide-password">
                                            <i class="bi bi-eye" style="color: white"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="yourPassword" class="form-label">Password Baru</label>
                                    <div class="input-group" id="">
                                        <input type="password" class="form-control border-end-0" name="password"
                                            id="inputChoosePassword" placeholder="Masukkan Password Baru Anda">
                                        <a href="javascript:;" class="input-group-text bg-primary" id="show-hide-password">
                                            <i class="bi bi-eye" style="color: white"></i>
                                        </a>
                                    </div>
                                </div>


                                <div class="mb-3">
                                    <label for="yourPassword" class="form-label">Ulangi Password Baru</label>
                                    <div class="input-group" id="">
                                        <input type="password" class="form-control border-end-0" name="password"
                                            id="inputChoosePassword" placeholder="Ulangi Password Baru Anda">
                                        <a href="javascript:;" class="input-group-text bg-primary" id="show-hide-password">
                                            <i class="bi bi-eye" style="color: white"></i>
                                        </a>
                                    </div>
                                </div>
                                <a href="" class="btn me-2 btn-secondary">Kembali</a>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const passwordInput = document.getElementById('inputChoosePassword');
        const showHidePasswordButton = document.getElementById('show-hide-password');
        let isPasswordVisible = false;

        showHidePasswordButton.addEventListener('click', () => {
            if (isPasswordVisible) {
                passwordInput.type = 'password';
                showHidePasswordButton.innerHTML = '<i class="bi bi-eye" style="color: white"></i>';
            } else {
                passwordInput.type = 'text';
                showHidePasswordButton.innerHTML = '<i class="bi bi-eye-slash" style="color: white"></i>';
            }
            isPasswordVisible = !isPasswordVisible;
        });
    </script>
@endsection
