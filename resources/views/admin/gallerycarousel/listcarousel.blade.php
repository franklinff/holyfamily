@extends('admin.master')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/customstyle.css') }}">

    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title m-subheader__title--separator">
                        Carousel listing
                    </h3>
                </div>

                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text" >
                                <a href="{{ route('carousngalry.create') }}" class="btn btn-primary">Add image</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Subheader -->
        <div class="m-content">
            <!--begin::Portlet-->
            <div class="m-portlet">
                <div class="m-portlet__body">
                    <div class="form-group m-form__group row">
                        {{ $html->table() }}
                    </div>
                </div>
            </div>
            <!--end::Portlet-->
        </div>
    </div>
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
