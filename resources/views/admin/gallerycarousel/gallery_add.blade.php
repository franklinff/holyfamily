@extends('admin.master')
@section('content')
    <!-- END: Left Aside -->
    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title m-subheader__title--separator">
                        Gallery
                    </h3>
                    <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                        <li class="m-nav__item m-nav__item--home">
                            <a href="#" class="m-nav__link m-nav__link--icon">
                                <i class="m-nav__link-icon la la-home"></i>
                            </a>
                        </li>
                        <li class="m-nav__separator">
                            -
                        </li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link">
											<span class="m-nav__link-text">
												Actions
											</span>
                            </a>
                        </li>
                        <li class="m-nav__separator">
                            -
                        </li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link">
											<span class="m-nav__link-text">
												Add new img.
											</span>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
        <!-- END: Subheader -->
        <div class="m-content">
            <!--begin::Portlet-->
            <div class="m-portlet">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Add image
                            </h3>

                            <h3 class="m-portlet__head-text" >
                                <a href="{{ route('list_gallery') }}">List gallery</a>
                            </h3>
                        </div>
                    </div>
                </div>

                <!--begin::Form-->
                <form method="POST" action="{{ route('carousngalry.store') }}" enctype="multipart/form-data" class="m-form m-form--fit m-form--label-align-right">
                    {{ csrf_field() }}
                    <div class="m-portlet__body">
                        <div class="form-group m-form__group row">
                            <label class="col-form-label col-lg-3 col-sm-12">
                                Please select image:
                            </label>
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <input type="hidden" name="type" value="gallery">
                                <input type="file" class="form-control m-input" name="imagename" id="imagename"/>

                                {{--<input type="email" class="form-control m-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter post title">--}}
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-form-label col-lg-3 col-sm-12">
                                Status
                            </label>
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <div class="radio">
                                    <label><input type="radio" name="status" value="1" >Active</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="status" value="0" checked>Inactive</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-form-label col-lg-3 col-sm-12">
                                Remark
                            </label>
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <textarea class="form-control" rows="2" name="remark"></textarea>
                            </div>
                        </div>


                    </div>
                    <div class="m-portlet__foot m-portlet__foot--fit">
                        <div class="m-form__actions m-form__actions">
                            <div class="row">
                                <div class="col-lg-9 ml-lg-auto">
                                    <button type="submit" class="btn btn-brand">
                                        Submit
                                    </button>

                                    <button class="btn btn-secondary">
                                        <a href="{{ route('list_gallery') }}">Cancel</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!--end::Form-->
            </div>
            <!--end::Portlet-->
        </div>
    </div>
    </div>
    <!-- end:: Body -->

@endsection