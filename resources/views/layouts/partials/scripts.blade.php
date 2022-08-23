<!-- core:js -->
{{-- <script src="../assets/vendors/core/core.js"></script> --}}
<!-- endinject -->
<!-- plugin js for this page -->
<script src="{{ asset('js/core.js') }}"></script>
<!-- endinject -->
<!-- plugin js for this page -->
<script src="{{ asset('js/global.js') }}"></script>
<!-- end plugin js for this page -->
<!-- inject:js -->
{{-- <script src="../assets/vendors/feather-icons/feather.min.js"></script> --}}

<script src="{{ asset('assets/vendors/feather-icons/feather.min.js') }}"></script>

<script src="{{ asset('js/template.js') }}"></script>
<!-- endinject -->
<!-- custom js for this page -->
<script src="{{ asset('js/dashboard.js') }}"></script>

<script src=" {{ asset('assets/js/datepicker.js') }}"></script>
<!-- end custom js for this page -->

{{--<script src="{{ asset('assets/vendors/datatables.net/jquery.dataTables.js') }}"></script>--}}
{{--<script src="{{ asset('assets/vendors/datatables.net/jquery.dataTables.js') }}"></script>--}}
{{--<script src="{{ asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>--}}
<!-- end plugin js for this page -->>
<!-- endinject -->
<!-- custom js for this page -->
<script src="{{ asset('assets/js/data-table.js') }}"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript" language="javascript">
    var idleMax = 5; // Logout after 30 minutes of IDLE
    var idleTime = 0;

    var idleInterval = setInterval("timerIncrement()", 60000);  // 1 minute interval
    $( "body" ).mousemove(function( event ) {
        idleTime = 0; // reset to zero
    });

    // count minutes
    function timerIncrement() {
        idleTime = idleTime + 1;
        if (idleTime > idleMax) {
            window.location="{{ route('login') }}";
{{--            {{ Auth::logout() }}--}}
{{--            $.ajax({--}}
{{--                url: "{{ route('logout') }}",--}}
{{--                type: "POST"--}}
{{--            })--}}
        }
    }
</script>
