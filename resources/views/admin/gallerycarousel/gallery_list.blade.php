
@extends('admin.master')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/customstyle.css') }}">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title ">
                    Gallery listing
                </h3>
                <h3 class="m-subheader__title " style="float: right">
                    <a href="{{ route('create_gallery') }}" class="btn btn-primary">Add image</a>
                </h3>

            </div>
        </div>
    </div>

    <!-- END: Subheader -->
    <div class="m-content">
        <!--Begin::Main Portlet-->
        <div class="m-portlet m-portlet--compact m-portlet--mobile">
            <div class="m-portlet__body">
                <div class="table table-responsive m_datatable">
                    {{ $html->table() }}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
   {{ $html->scripts() }}
@endsection
