<!-- Content Wrapper END -->

<!-- Footer START -->
<footer class="footer">
    <div class="footer-content">
        <p class="m-b-0">Copyright © {{ date('Y') }} Solar. All rights reserved.</p>
        <span>
            {{-- <a href="#" class="text-gray m-r-15">Term &amp; Conditions</a>
            <a href="#" class="text-gray">Privacy &amp; Policy</a> --}}
        </span>
    </div>
</footer>
<!-- Footer END -->

</div>
<!-- Page Container END -->
</div>
</div>


<!-- Core Vendors JS -->
<script src="{{ asset('public/assets/js/vendors.min.js') }}"></script>

<!-- page js -->
<script src="{{ asset('public/assets/vendors/chartjs/Chart.min.js') }}"></script>
<script src="{{ asset('public/assets/js/pages/dashboard-default.js') }}"></script>
{{-- Validation JS --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"
    integrity="sha512-WMEKGZ7L5LWgaPeJtw9MBM4i5w5OSBlSjTjCtSnvFJGSVD26gE5+Td12qN5pvWXhuWaWcVwF++F7aqu9cvqP0A=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{{-- Data Table JS --}}
<script src="{{ asset('public/assets/vendors/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('public/assets/vendors/datatables/dataTables.bootstrap.min.js') }}"></script>
{{-- Date Picker JS --}}
<script src="{{ asset('public/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('.datepicker-input').datepicker({
            format: 'yyyy-mm-dd',
            todayHighlight: true,
            autoclose: true
        });
    });
</script>
{{-- Select 2 JS --}}
<script src="{{ asset('public/assets/vendors/select2/select2.min.js') }}"></script>
<script>
    $('.select2').select2();    
</script>
{{-- Ck Edit JS --}}
{{-- <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script> --}}
{{-- <script src="//cdn.gaic.com/cdn/ui-bootstrap/0.58.0/js/lib/ckeditor/ckeditor.js"></script> --}}
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.3.2/ckeditor.js"></script>
{{-- Toastr Link --}}
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
{{-- Toastr JS --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
@if (Session('info'))
    <script>
        toastr.info('{{ Session('info') }}')
    </script>
@endif
@if (Session('success'))
    <script>
        toastr.success('{{ Session('success') }}')
    </script>
@endif
@if (Session('error'))
    <script>
        toastr.error('{{ Session('error') }}')
    </script>
@endif
{{-- Sweet Alert JS --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

<!-- Core JS -->
<script src="{{ asset('public/assets/js/app.min.js') }}"></script>

</body>

</html>
