@extends('admin.master')

@section('content')

    <div class="m-content">
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title ">
                        List of donation
                    </h3>
                    <h3 class="m-subheader__title " style="float: right">
                        <a href="{{ route('churchbuidingfund.create')}}" class="btn btn-primary">Add Donation Name</a>
                    </h3>
                </div>
            </div>
        </div>

        <!--Begin::Main Portlet-->
        <div class="m-portlet m-portlet--compact">
            <div class="m-portlet__body">
                <h3>Total record : {{ $baptism_count }}</h3> <a href="{{ route('churchbuidingfund.create')}}">Add</a>
                <div class="table table-responsive m_datatable" style="width:1042px">
                    {{ $html->table() }}
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    {!! $html->scripts() !!}
@endsection