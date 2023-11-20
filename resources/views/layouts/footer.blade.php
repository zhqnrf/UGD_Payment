<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<script src=" {{ asset('/') }}assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src=" {{ asset('/') }}assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src=" {{ asset('/') }}assets/vendor/chart.js/chart.umd.js"></script>
<script src=" {{ asset('/') }}assets/vendor/echarts/echarts.min.js"></script>
<script src=" {{ asset('/') }}assets/vendor/quill/quill.min.js"></script>
<script src=" {{ asset('/') }}assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src=" {{ asset('/') }}assets/vendor/tinymce/tinymce.min.js"></script>
<script src=" {{ asset('/') }}assets/vendor/php-email-form/validate.js"></script>
<script src=" {{ asset('/') }}assets/js/main.js"></script>
<script src="{{ asset('/') }}assets/vendor/toastr/js/toastr.min.js"></script>

@if ($errors->any())
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        (function($) {
            "use strict";
            $(document).ready(function() {
                toastr.error("{{ $errors->first() }}", "Error", {
                    positionClass: "toast-top-right",
                    timeOut: 5e3,
                    closeButton: true,
                    debug: false,
                    newestOnTop: true,
                    progressBar: true,
                    preventDuplicates: true,
                    onclick: null,
                    showDuration: "300",
                    hideDuration: "1000",
                    extendedTimeOut: "1000",
                    showEasing: "swing",
                    hideEasing: "linear",
                    showMethod: "fadeIn",
                    hideMethod: "fadeOut",
                    tapToDismiss: false
                });
            });
        })(jQuery);
    </script>
@endif
