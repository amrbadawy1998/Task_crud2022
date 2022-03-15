@if(Session("success"))
    <link rel="stylesheet" href="{{asset("Dashborad/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css")}}">
    <script src="{{asset("Dashborad/plugins/jquery/jquery.min.js")}}"></script>
    <script src="{{asset("Dashborad/plugins/sweetalert2/sweetalert2.min.js")}}"></script>
<script>



    $(function() {

            Swal.fire({
                position: 'top-center',
                icon: 'success',
                title: '{{session("success")}}',
                showConfirmButton: false,
                timer: 2000
            })
    });

</script>
@endif
@if(Session("error"))
    <link rel="stylesheet" href="{{asset("Dashborad/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css")}}">
    <script src="{{asset("Dashborad/plugins/jquery/jquery.min.js")}}"></script>
    <script src="{{asset("Dashborad/plugins/sweetalert2/sweetalert2.min.js")}}"></script>
    <script>
        $(function() {
            Swal.fire({
                position: 'top-center',
                icon: 'success',
                title: '{{session("error")}}',
                showConfirmButton: false,
                timer: 2000
            })
        });
    </script>
@endif
