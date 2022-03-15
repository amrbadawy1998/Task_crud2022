@extends("Dashboard.const.stander")
@section("path")
    <li class="breadcrumb-item"> <a href=" "> الاقسام </a> </li>
    <li class="breadcrumb-item"> <a href=" "> تعديل </a> </li>
@endsection
@section("content_title"," المستخدمين  ")

@section("content")
    @include("Dashboard.partials._errors")
    @include("Dashboard.partials._sessions")
        <section class="content">
            <div class="container-fluid">
                <div class="col-md-6">
                    <!-- general form elements disabled -->
                    <div class="card card-outline card-primary">
                        <!-- /.card-header -->
                        <div class="card-body ">
                            <form class="needs-validation" method="POST" id="fo" action="{{route("category.update")}}"  novalidate >
                                @csrf
                                <div class="row">
                                    <input hidden value="{{ $category->id }}" name="id">
                                    <div class="col-md-12 ">
                                        <label for="validationCustom01" class="form-label"> الاسم </label>
                                        <input type="text" class="form-control text-center" value="{{$category->name}}" autocomplete="off" id="validationCustom01" name="name" required>
                                        <div class="valid-feedback " >
                                            يبدو جيداا
                                        </div>
                                        <div class="invalid-feedback ">
                                            هذا الحقل مطلوب
                                        </div>
                                    </div>

                                </div>

                                <hr>

                                <div class="col-6">
                                    <button class="btn btn-primary col-12" type="submit">تعديل </button>
                                </div>

                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </section>
    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                var read = new FileReader();
                reader.onload = function (e) {
                    $('#blah')
                        .attr('href', e.target.result);
                };
                read.onload = function (e) {
                    $('#blahh')
                        .attr('src', e.target.result);
                };


                reader.readAsDataURL(input.files[0]);
                read.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <script type="text/javascript">
        function readURL1(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                var read = new FileReader();
                reader.onload = function (e) {
                    $('#blah1')
                        .attr('href', e.target.result);
                };
                read.onload = function (e) {
                    $('#blahh1')
                        .attr('src', e.target.result);
                };


                reader.readAsDataURL(input.files[0]);
                read.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <script type="text/javascript">
        function readURL2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                var read = new FileReader();
                reader.onload = function (e) {
                    $('#blah2')
                        .attr('href', e.target.result);
                };
                read.onload = function (e) {
                    $('#blahh2')
                        .attr('src', e.target.result);
                };


                reader.readAsDataURL(input.files[0]);
                read.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <script type="text/javascript">
        function readURL3(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                var read = new FileReader();
                reader.onload = function (e) {
                    $('#blah3')
                        .attr('href', e.target.result);
                };
                read.onload = function (e) {
                    $('#blahh3')
                        .attr('src', e.target.result);
                };


                reader.readAsDataURL(input.files[0]);
                read.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <script type="text/javascript">
        function readURL4(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                var read = new FileReader();
                reader.onload = function (e) {
                    $('#blah4')
                        .attr('href', e.target.result);
                };
                read.onload = function (e) {
                    $('#blahh4')
                        .attr('src', e.target.result);
                };


                reader.readAsDataURL(input.files[0]);
                read.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <script type="text/javascript">
        function readURL5(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                var read = new FileReader();
                reader.onload = function (e) {
                    $('#blah5')
                        .attr('href', e.target.result);
                };
                read.onload = function (e) {
                    $('#blahh5')
                        .attr('src', e.target.result);
                };


                reader.readAsDataURL(input.files[0]);
                read.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <script type="text/javascript">
        function readURL6(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                var read = new FileReader();
                reader.onload = function (e) {
                    $('#blah6')
                        .attr('href', e.target.result);
                };
                read.onload = function (e) {
                    $('#blahh6')
                        .attr('src', e.target.result)
                        .height("80px")
                        .width("80px");
                };


                reader.readAsDataURL(input.files[0]);
                read.readAsDataURL(input.files[0]);
            }
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


@endsection


