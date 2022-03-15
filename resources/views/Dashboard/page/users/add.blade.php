@extends("Dashboard.const.stander")

@section("path")
    <li class="breadcrumb-item"> <a href=" "> المستخدم </a> </li>
    <li class="breadcrumb-item"> <a href=" "> إضافه </a> </li>
@endsection
@section("content_title"," اضافه  مستخدم")

@section("content")
    @include("Dashboard.partials._errors")
    @include("Dashboard.partials._sessions")
    <section class="content">
        <div class="container-fluid">
            <div class="col-md-12">
                <!-- general form elements disabled -->
                <div class="card card-outline card-primary">
                    <!-- /.card-header -->
                    <div class="card-body ">
                        <form method="post" class=" needs-validation"  action="{{route("user.store")}}" novalidate>
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
                            <div class="col-12">
                                <button class="btn btn-primary col-12" type="submit">اضافه </button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </section>
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

@endsection


