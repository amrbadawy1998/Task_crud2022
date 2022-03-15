@extends("Dashboard.const.stander")
<style>
    <link rel="stylesheet" href="{{asset("Dashborad/plugins/summernote/summernote-bs4.css")}}">
</style>
@section("path")
    <li class="breadcrumb-item"> <a href=" "> المقالات </a> </li>
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
                        <form method="post" class=" needs-validation"  action="{{route("article.store")}}" enctype="multipart/form-data" novalidate>
                            @csrf
                            <div class="row">
                                <div class="col-md-12 ">
                                    <label for="validationCustom01" class="form-label"> العنوان </label>
                                    <input type="text" class="form-control text-center" autocomplete="off" id="validationCustom01" name="title" required>
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
                                <div class="card-body pad">
                                    <div class="mb-3">
                             <textarea name="body" class="textarea" placeholder="Place some text here"
                               style="width: 100%;  font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- select -->
                                    <div class="form-group">
                                        <label>القسم</label>
                                        <select name="category_id" class="form-control">
                                            <option  > إختر القسم</option>
                                            @foreach($categories as $cat)
                                            <option value="{{$cat->id}}" > {{$cat->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="customFile">Custom File</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="image" id="image">
                                        <label class="custom-file-label text-center" for="customFile">Choose file</label>
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

<script src="{{asset("Dashborad/plugins/summernote/summernote-bs4.min.js")}}"></script>
<script>
    $(function () {
        // Summernote
        $('.textarea').summernote({
            placeholder: 'Hello stand alone ui',
            tabsize: 2,
            height: 120,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    })
</script>
