@extends('admin.master')

@section('content')




    <div class="m-content">
        <!--Begin::Main Portlet-->
        <div class="m-portlet m-portlet--compact m-portlet--mobile">
            <div class="m-portlet__body">
                <h3>Total record : {{ $baptism_count }}</h3>
                <div class="table table-responsive m_datatable">
                    {{ $html->table() }}
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    {!! $html->scripts() !!}
@endsection