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

        $(document).unbind().on("change", "#status", function () {
            var current_status = $(this).attr('data-value');
            var coroselimg_id = $(this).attr('data-id');
            var vm = $(this);

            $.ajax({
                method: "GET",
                url: "ajxupdateStatus",
                data: {'id' : coroselimg_id,'status' : current_status},
                success: function(result){
                    console.log(result);
                    var updated_value = (current_status == 1) ? 0 : 1;
                    vm.attr("data-value", updated_value);
                }
            })
        })

    </script>
@endsection
