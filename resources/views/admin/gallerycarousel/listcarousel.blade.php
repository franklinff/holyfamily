@extends('admin.master')


@section('content')
    <link rel="stylesheet" href="{{ asset('css/customstyle.css') }}">
    <div class="m-portlet__body">
        <td><a href="{{ route('carousngalry.create') }}">Add image</a></td>
        {!! $html->table() !!}
    </div>
@endsection

@section('js')
    {!! $html->scripts() !!}

    <script>
    function changeStatus(x,y) {
        var current_status = y;
        var coroselimg_id = x;
        $.ajax({
            method: "GET",
            url: "ajxupdateStatus",
            data: {'id' : coroselimg_id,'status' : current_status},
            success: function(result){
                console.log(result);
            }
        })
    }
    </script>
@endsection
