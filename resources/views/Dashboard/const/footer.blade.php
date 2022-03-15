<footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.1.0
    </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark align-content-center">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@if(App::getLocale() == "en")
    <!-- jQuery -->
    <script src="{{asset("Dashborad/en/plugins/jquery/jquery.min.js")}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{asset("Dashborad/en/plugins/jquery-ui/jquery-ui.min.js")}}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{asset("Dashborad/en/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
    <!-- ChartJS -->
    <script src="{{asset("Dashborad/en/plugins/chart.js/Chart.min.js")}}"></script>
    <!-- Sparkline -->
    <script src="{{asset("Dashborad/en/plugins/sparklines/sparkline.js")}}"></script>
    <!-- JQVMap -->
    <script src="{{asset("Dashborad/en/plugins/jqvmap/jquery.vmap.min.js")}}"></script>
    <script src="{{asset("Dashborad/en/plugins/jqvmap/maps/jquery.vmap.usa.js")}}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{asset("Dashborad/en/plugins/jquery-knob/jquery.knob.min.js")}}"></script>
    <!-- daterangepicker -->
    <script src="{{asset("Dashborad/en/plugins/moment/moment.min.js")}}"></script>
    <script src="{{asset("Dashborad/en/plugins/daterangepicker/daterangepicker.js")}}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{asset("Dashborad/en/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js")}}"></script>
    <!-- Summernote -->
    <script src="{{asset("Dashborad/en/plugins/summernote/summernote-bs4.min.js")}}"></script>
    <!-- overlayScrollbars -->
    <script src="{{asset("Dashborad/en/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js")}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset("Dashborad/en/dist/js/adminlte.js")}}"></script>
    <!-- AdminLTE for demo purposes -->
{{--    <script src="{{asset("Dashborad/en/dist/js/demo.js")}}"></script>--}}
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{asset("Dashborad/en/dist/js/pages/dashboard.js")}}"></script>

@endif
@if(App::getLocale() == "ar")
<!-- jQuery -->
<script src="{{asset("Dashborad/plugins/jquery/jquery.min.js")}}"></script>

<!-- jQuery UI 1.11.4 -->
<script src="{{asset("Dashborad/plugins/jquery-ui/jquery-ui.min.js")}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset("Dashborad/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<script src="{{asset("Dashborad/plugins/datatables/jquery.dataTables.js")}}"></script>
<script src="{{asset("Dashborad/plugins/datatables-bs4/js/dataTables.bootstrap4.js")}}"></script>
<!-- ChartJS -->
<script src="{{asset("Dashborad/plugins/chart.js/Chart.min.js")}}"></script>
<!-- Sparkline -->
<script src="{{asset("Dashborad/plugins/sparklines/sparkline.js")}}"></script>
<!-- JQVMap -->
<script src="{{asset("Dashborad/plugins/jqvmap/jquery.vmap.min.js")}}"></script>
<script src="{{asset("Dashborad/plugins/jqvmap/maps/jquery.vmap.usa.js")}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset("Dashborad/plugins/jquery-knob/jquery.knob.min.js")}}"></script>
<!-- daterangepicker -->
<script src="{{asset("Dashborad/plugins/moment/moment.min.js")}}"></script>
<script src="{{asset("Dashborad/plugins/daterangepicker/daterangepicker.js")}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset("Dashborad/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js")}}"></script>
<!-- Summernote -->
<script src="{{asset("Dashborad/plugins/summernote/summernote-bs4.min.js")}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset("Dashborad/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js")}}"></script>
<script src="{{asset("Dashborad/plugins/ekko-lightbox/ekko-lightbox.min.js")}}"></script>
<!-- AdminLTE App -->
<script src="{{asset("Dashborad/dist/js/adminlte.js")}}"></script>
<!-- AdminLTE for demo purposes -->
{{--<script src="{{asset("Dashborad/dist/js/demo.js")}}"></script>--}}
<script src="{{asset("Dashborad/plugins/select2/js/select2.full.min.js")}}"></script>
<script src="{{asset("Dashborad/plugins/filterizr/jquery.filterizr.min.js")}}"></script>
<script>
    $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
        });
    });
</script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset("Dashborad/dist/js/pages/dashboard.js")}}"></script>

<script>
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2({
            theme: 'bootstrap4'
        })
    });
</script>
<script>
    $(function () {
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox({
                alwaysShowClose: true
            });
        });

        $('.filter-container').filterizr({gutterPixels: 3});
        $('.btn[data-filter]').on('click', function() {
            $('.btn[data-filter]').removeClass('active');
            $(this).addClass('active');
        });
    })
</script>
@endif

</body>
</html>
