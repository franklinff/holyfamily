@extends('admin.master')

@section('content')

    <div class="m-content">

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif


            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title  m-subheader__title--separator">
                        Donation list
                    </h3>
                </div>

                <div class="m-portlet__head-caption" style="margin-right: 150px;">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text" >
                            <a href="{{ route('churchbuidingfund.create') }}" class="btn btn-primary">Add Donation Name</a>
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

    <script>
        $(document).ready(function(){
        setTimeout(function() {
            $('.alert-success').fadeOut('fast');
        }, 3000);
        });
    </script>
@endsection