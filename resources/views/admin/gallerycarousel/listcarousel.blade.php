@extends('admin.master')

@section('content')
    <div class="m-portlet__body">
        {!! $html->table() !!}
    </div>
@endsection

@section('js')
    {!! $html->scripts() !!}
@endsection