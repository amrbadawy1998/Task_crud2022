@if($errors->any())
    <div class="card-body">
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p> {{ $error  }} </p>
        @endforeach
    </div>
    </div>
@endif
