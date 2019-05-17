@extends('admin.master')
@section('content')

    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title ">
                        Contact us
                    </h3>
                </div>

            </div>
        </div>
        <!-- END: Subheader -->

        <div class="m-content">
            <div class="row">

                <div class="col-xl-12 col-lg-8">
                    <div class="m-portlet m-portlet--full-height m-portlet--tabs  ">

                        <div class="m-portlet__head">
                            <div class="m-portlet__head-tools">
                                <ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary" role="tablist">
                                    <li class="nav-item m-tabs__item">
                                        <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_user_profile_tab_1" role="tab">
                                            <i class="flaticon-share m--hide"></i>
                                            Contact profile
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="tab-content">
                            <div class="tab-pane active" id="m_user_profile_tab_1">

                                <form class="m-form m-form--fit m-form--label-align-right" action="{{ route('contactus.store') }}" method="POST" id="contactus">
                                    @csrf
                                    <div class="m-portlet__body">

                                        <div class="form-group m-form__group row">
                                            <div class="col-10 ml-auto">
                                                <h3 class="m-form__section">
                                                    Contact Details
                                                </h3>
                                            </div>
                                        </div>

                                        <div id="priest_contactdiv" class="form-group m-form__group row">
                                            <label for="example-text-input" class="col-2 col-form-label">
                                                Priest name
                                            </label>
                                            <div class="col-2">
                                                <input class="form-control m-input" type="text"  id="priest_name" name="priest_name[]" placeholder="Name">
                                            </div>

                                            <label for="example-text-input" class="col-2 col-form-label">
                                                Phone number
                                            </label>
                                            <div class="col-2">
                                                <input class="form-control m-input" type="text" id="priest_number" name="priest_number[]" placeholder="Number">
                                            </div>
                                            <div class="col-4">
                                                <a href="javascript:void(0);" id="priest_name_number">Add name & number</a>
                                            </div>
                                        </div>

                                        <div class="form-group m-form__group row">
                                            <label for="example-text-input" class="col-2 col-form-label">Email address</label>
                                            <div class="col-7">
                                                <input type="text" name="email_add" class="form-control m-input" placeholder="Please enter email address">
                                            </div>
                                        </div>

                                        <div class="form-group m-form__group row">
                                            <label for="example-text-input" class="col-2 col-form-label">Address</label>
                                            <div class="col-7">
                                                <textarea class="form-control" rows="5" id="church_address" name="church_address"></textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="m-portlet__foot m-portlet__foot--fit">
                                        <div class="m-form__actions">
                                            <div class="row">
                                                <div class="col-2"></div>
                                                <div class="col-7">
                                                    <button type="submit" class="btn btn-accent m-btn m-btn--air m-btn--custom">
                                                        Save changes
                                                    </button>
                                                    &nbsp;&nbsp;
                                                    <button type="reset" class="btn btn-secondary m-btn m-btn--air m-btn--custom">
                                                        Cancel
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>


@endsection

@section('js')
    <script>
        var countnumber= 1;var cnt = 1;
        $(document).ready(function(){
            $("#priest_name_number").click(function(){
                if(countnumber<4){
                    $('#priest_contactdiv').append('<div class="row contactnamenumber'+ cnt +'" style="margin-top: 2%">\n' +
                        '                                       <div class="col-4">\n' +
                        '                                           <div class="form-group">\n' +
                        '                                               <label for="priest_name" class="form-control-label">\n' +
                        '                                                   <strong>Priest name</strong>\n' +
                        '                                               </label>\n' +
                        '                                               <input type="text" name="priest_name[]" class="form-control m-input" >\n' +
                        '                                           </div>\n' +
                        '                                       </div>\n' +
                        '                                       <div class="col-4">\n' +
                        '                                           <div class="form-group">\n' +
                        '                                               <label for="priest_number" class="form-control-label">\n' +
                        '                                                   <strong>Phone number</strong>\n' +
                        '                                               </label>\n' +
                        '                                               <input type="text" name="priest_number[]" class="form-control m-input">\n' +
                        '                                           </div>\n' +
                        '                                       </div>\n' +
                        '                                       <div class="col-lg-4">\n' +
                        '                                           <a href="javascript:void(0);" id="priest_name_number" name="priest_name_number" onClick="removeField('+cnt+','+countnumber +');" class="btn btn-danger" style="color: #FFFFFF;">Remove</a>\n'+
                        '                                       <div>\n' +
                        '                           </div>\n'
                    );
                    countnumber++;
                }else{
                    alert('Max four name and number only allowed');
                }
                cnt++;
            });
        });


        function removeField(cnt,countnumber)
        {
            --window.countnumber;
            $('.contactnamenumber' + cnt).remove();
        }

    </script>
@endsection