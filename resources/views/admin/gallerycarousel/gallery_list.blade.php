@extends('admin.master')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/customstyle.css') }}">
    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title m-subheader__title--separator">
                        Gallery listing
                    </h3>
                </div>

                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text" >
                                <a href="{{ route('create_gallery') }}" class="btn btn-primary">Add image</a>
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
   {{ $html->scripts() }}
@endsection
