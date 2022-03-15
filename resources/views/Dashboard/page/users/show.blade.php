@extends("Dashboard.const.stander")
@section("path","المستخدمين")
@section("content_title"," المستخدمين  ")

@section("content")
    @include("Dashboard.partials._errors")
    @include("Dashboard.partials._sessions")
    <section class="content">
        <style>
            #example1_length{
                float:left;
            }
            .dataTables_empty {
                text-align: center;
            }
            .close{
                float: left;
            }
        </style>
        <section class="content">
            <div class="container-fluid">
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">

                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped table-hover">
                                        <thead>
                                        <tr>
                                            <th> إسم  </th>
                                            <th>الايميل</th>
                                            <th>الاكشن</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($data as $da)
                                            <tr>
                                                <th>{{$da->name }}</th>
                                                <th>{{$da->email}}</th>
                                                <th>
                                                    <div class="btn-group btn-group-sm">
                                                        <form method="post" action="{{route("user.delete",$da->id)}}">
                                                            @csrf
                                                            <button type="submit" class="btn btn-danger btn-sm  m-1" ><i class="fas fa-trash"></i></button>
                                                        </form>
                                                        <a href="{{route("user.edit",$da->id)}}"    class="btn btn-info btn-sm m-1"><i class="fas fa-eye"></i></a>
                                                    </div>
                                                </th>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>

    </section>
    <div class="modal fade" id="edit_item">
        <div class="modal-dialog modal-Xl">
            <div class="modal-content float-left">
                <div class="card-header">
                    <h4 class="text-center "> تعديل المنتج</h4>
                </div>
                <div class="modal-body" style="padding: 0px">
                    <div class="card-body" style="padding-bottom: 0px">
                        <form method="POST" id="fo" action="" >
                            @csrf
                            <div class="row">
                                <div class="col-md-6 ">
                                    <label for="validationCustom01" class="form-label"> الاسم </label>
                                    <input type="text" class="form-control text-center" autocomplete="off" id="validationCustom01" name="name" required>
                                    <div class="valid-feedback " >
                                        يبدو جيداا
                                    </div>
                                    <div class="invalid-feedback ">
                                        هذا الحقل مطلوب
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <label for="email" class="form-label"> البريد الالكتروني</label>
                                    <input type="email" class="form-control text-center"  autocomplete="off" id="email" name="email"  required>
                                    <div class="valid-feedback " >
                                        يبدو جيداا
                                    </div>
                                    <div class="invalid-feedback ">
                                        هذا الحقل مطلوب
                                    </div>
                                </div>
                            </div>

                            <hr>
                            <div class="row">
                                <div class="col-md-6 ">
                                    <label for="password" class="form-label">الباسورد</label>
                                    <input type="password" class="form-control text-center"  autocomplete="off" id="password" name="password"  required>
                                    <div class="valid-feedback " >
                                        يبدو جيداا
                                    </div>
                                    <div class="invalid-feedback ">
                                        هذا الحقل مطلوب
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <label for="password_confirmation" class="form-label">تاكيد الباسورد   </label>
                                    <input type="password" class="form-control text-center"  autocomplete="off" id="password_confirmation" name="password_confirmation"  required>
                                    <div class="valid-feedback " >
                                        يبدو جيداا
                                    </div>
                                    <div class="invalid-feedback ">
                                        هذا الحقل مطلوب
                                    </div>
                                </div>
                            </div>
                            <hr>

                            <div class="modal-footer justify-content-between">
                                <button type="submit" class="btn btn-primary"> تعديل النتح </button>
                                <button type="button" class="btn btn-default" data-dismiss="modal" > إغلاق</button>

                            </div>

                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <div class="modal fade" id="delete_item">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="card-header">
                    <h4 class="text-center ">حذف المنتج</h4>
                </div>
                <div class="modal-body" style="padding: 0px">
                    <div class="card-body" style="padding-bottom: 0px">
                        <form method="post"  action="" >
                            @csrf
                            <div class="form-group">
                                <div class="form-group">
                                    <div class="form-group row">
                                        <label for="inputDescription" class="col-sm-3 justify-content-center"> إسم القسم </label>
                                        <input type="text" disabled name="name" id="Dname"  class="form-control  col-sm-8 text-center">
                                        <input type="text" name="id" id="id" hidden class="form-control ">
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputDescription" class="col-sm-3 justify-content-center"> رقم التسلسلي </label>
                                        <input type="text" disabled name="name" id="Dseial"  class="form-control  col-sm-8 text-center">

                                    </div>
                                    <div class="form-group row">
                                        <label for="inputDescription" class="col-sm-3 justify-content-center"> الكود </label>
                                        <input type="text" disabled name="name" id="Dcode"  class="form-control  col-sm-8 text-center">

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="submit" class="btn btn-outline-danger">حذف</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">إغلاق</button>

                            </div>

                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
@endsection


<script>
    function editCategory(id){
       let url ='';
           url = url.replace(':id', id);
        $.get( url ,function (data){
            console.log(data);
            $("#FirstN").val(data[0].first_name);
            $("#MiddleN").val(data[0].middle_name);
            $("#LastN").val(data[0].last_name);
            $("#NameN").val( data[0].name);
            $("#emmail").val(data[0].email);
            $("#salary").val(data[0].salary);
            $("#hr_id").val(data.hr_id);
            $("#started").val(data[0]["hiringdata"].started);
            $("#ended").val(data[0]["hiringdata"].ended);
             let social_type    = data[0].social_type;
            $('#social_type option[value="'+social_type+'"]').attr('selected','selected');

            // let provider    = data[0]['provider'].id;
            // $("#Provider_id").select2("trigger", "select", {
            //     data: { id:provider}
            // });
            let department    = data[0].department_id;
            $('#department_id option[value="'+department+'"]').attr('selected','selected');
            let ie= data[0].user_photo;
            $("#blahh").attr("src", '{{ URL::asset('') }}storage/'+ie );
            let typ    = data[0].gender;
            $('#type option[value="'+typ+'"]').attr('selected','selected');
            $("#edit_item").modal("toggle");
        });
    }
</script>
<script>
    function deleteUser(id){
        let url ='{{  route("user.delete",":id") }}';
        url = url.replace(':id', id);
        $.get( url ,function (data){

            $("#delete_item").modal("toggle");
        });
    }
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
<script>// Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()</script>
