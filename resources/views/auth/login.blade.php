<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <link href="{{ asset('/') }}assets/img/logo.png" rel="icon">
    <link href="{{ asset('/') }}assets/img/logo.png" rel="apple-touch-icon">
    <title>Masuk - UGD Payment Puskesmas Ketrowonojoyo</title>
    <meta content="" name="description">
    <meta content="" name="keywords">


    <link href="{{ asset('/') }}assets/img/favicon.png" rel="icon">
    <link href="{{ asset('/') }}assets/img/apple-touch-icon.png" rel="apple-touch-icon">


    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <link href="{{ asset('/') }}assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('/') }}assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="{{ asset('/') }}assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="{{ asset('/') }}assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ asset('/') }}assets/vendor/simple-datatables/style.css" rel="stylesheet">
    <link href="{{ asset('/') }}assets/css/style.css" rel="stylesheet">
    <style>
        /* Gaya gambar pada layar kecil (sm) */
        @media (max-width: 576px) {
            .logo img {
                width: 100px;
                height: 90px;
                max-width: 100%;
                max-height: 100%;

            }
        }


        .logo img {
            height: 55px;
            width: 60px;
            max-width: 100%;
            max-height: 100%;
        }
    </style>
</head>

<body>

    <main>
        <div class="container">

            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class=" justify-content-center py-4">
                                <a href="index.html" class="logo  d-flex align-items-center">
                                    <img src="{{ asset('/') }}assets/img/logo.png" alt="">
                                    <span class="d-none d-lg-block mt-4">UGD Payment</span>


                                </a>


                            </div>
                            <div class="card mb-3">





                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Masuk</h5>

                                        <p class="text-center small">Puskemas Ketrowonojoyo</p>
                                    </div>

                                    <form class="row g-3 needs-validation" novalidate>

                                        <div class="col-12">
                                            <label class="form-label">Email</label>
                                            <div class="input-group has-validation">

                                                <input type="text" name="email" class="form-control" required>
                                                <div class="invalid-feedback">Masukkan Email Anda</div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Password</label>
                                            <div class="input-group" id="">
                                                <input type="password" class="form-control border-end-0" name="password"
                                                    id="inputChoosePassword" value="12345678"
                                                    placeholder="Password Anda">
                                                <a href="javascript:;" class="input-group-text bg-primary"
                                                    id="show-hide-password">
                                                    <i class="bi bi-eye" style="color: white"></i>
                                                </a>
                                            </div>
                                        </div>


                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Login</button>
                                        </div>

                                    </form>

                                </div>
                            </div>

                            <div class="credits">

                                Developed by <a href="">SleepZZ Software</a>
                            </div>

                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <script src="{{ asset('/') }}assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="{{ asset('/') }}assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/') }}assets/vendor/chart.js/chart.umd.js"></script>
    <script src="{{ asset('/') }}assets/vendor/echarts/echarts.min.js"></script>
    <script src="{{ asset('/') }}assets/vendor/quill/quill.min.js"></script>
    <script src="{{ asset('/') }}assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="{{ asset('/') }}assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="{{ asset('/') }}assets/vendor/php-email-form/validate.js"></script>
    <script src="{{ asset('/') }}assets/js/main.js"></script>
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
</body>

</html>
