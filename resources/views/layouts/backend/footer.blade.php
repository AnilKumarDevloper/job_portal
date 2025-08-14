</div>

<script src="{{ url('assets/backend/libs/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{ url('assets/backend/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<!-- apps -->
<script src="{{ url('assets/backend/dist/js/app.min.js') }}"></script>
<script src="{{ url('assets/backend/dist/js/app.init.js') }} "></script>
<script src="{{ url('assets/backend/dist/js/app-style-switcher.js') }}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{ url('assets/backend/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
<!--Wave Effects -->
<script src="{{ url('assets/backend/dist/js/waves.js') }}"></script>
<!--Menu sidebar -->
<script src="{{ url('assets/backend/dist/js/sidebarmenu.js') }}"></script>
<!--Custom JavaScript -->
<script src="{{ url('assets/backend/dist/js/feather.min.js') }}"></script>
<script src="{{ url('assets/backend/dist/js/custom.min.js') }}"></script>
<!--- select 2 link-->
<script src="{{ url('assets/backend/libs/select2/select2.full.min.js') }}"> </script>
<script src="{{ url('assets/backend/libs/select2/select2.min.js') }}"> </script>
<script src="{{ url('assets/backend/libs/select2/select2.init.js') }}"> </script>
<!--- data tables cdn-->
<script src="{{ url('assets/backend/libs/dataTable/datatable-basic.init.js') }}"> </script>
<script src="{{ url('assets/backend/libs/dataTable/dataTables.responsive.min.js') }}"> </script>
<script src="{{ url('assets/backend/libs/dataTable/jquery.dataTables.min.js') }}"> </script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function refreshCsrfToken() {
        $.get('/refresh-csrf', function (data) {
            $('meta[name="csrf-token"]').attr('content', data.csrf_token);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': data.csrf_token
                }
            });
        });
    }

    setInterval(refreshCsrfToken, 600000);
</script>
@yield('javascript-section')
</body>

</html>
