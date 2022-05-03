@if ($errors->any())

    @foreach ($errors->all() as $error)
        @php
            toastr()->warning($error);
        @endphp
    @endforeach
@endif
@if (Session::has('fail'))
    @php
        toastr()->warning(Session::get('fail'));
    @endphp
@endif
@if (Session::has('success'))
    @php
        toastr()->warning(Session::get('success'));
    @endphp
@endif
