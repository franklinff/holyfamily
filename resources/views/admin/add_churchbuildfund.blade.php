@extends('admin.master')

@section('content')

    <div class="m-grid__item m-grid__item--fluid m-wrapper">

        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title ">
                        Donation for - church buiding fund
                    </h3>
                </div>
                <div>
                    <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover" aria-expanded="true">
                        <a href="{{ route('churchbuidingfund.index') }}" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--outline-2x m-btn--air m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">

                            <i class="la">List</i>
                        </a>

                    </div>
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
                            </div>
                        </div>

                        <div class="tab-content">
                            <div class="tab-pane active" id="m_user_profile_tab_1">

                                <form class="m-form m-form--fit m-form--label-align-right" action="{{ route('churchbuidingfund.store') }}" method="POST">
                                    @csrf
                                    <div class="m-portlet__body">

                                        <div class="form-group m-form__group row">
                                            <div class="col-10 ml-auto">
                                                <h3 class="m-form__section">
                                                    1. Donor details
                                                </h3>
                                            </div>
                                        </div>


                                        <div class="form-group m-form__group row">
                                            <label for="example-text-input" class="col-2 col-form-label">
                                                Full Name
                                            </label>
                                            <div class="col-6">
                                                <input class="form-control m-input" type="text"  name="donor_name" placeholder="Full name" >
                                            </div>
                                        </div>


                                        <div class="form-group m-form__group row">
                                            <label for="example-text-input" class="col-2 col-form-label">
                                                Address
                                            </label>
                                            <div class="col-6">
                                                <input class="form-control m-input" type="text"  name="donor_address" placeholder="Address" >
                                            </div>
                                        </div>

                                        <div class="form-group m-form__group row">
                                            <label for="example-text-input" class="col-2 col-form-label">
                                                PAN number
                                            </label>
                                            <div class="col-6">
                                                <input class="form-control m-input" type="text"  name="pannumber" placeholder="PAN number" >
                                            </div>
                                        </div>

                                        <div class="form-group m-form__group row">
                                            <label for="example-text-input" class="col-2 col-form-label">Date of donation</label>
                                            @if($errors->has('birth_date'))
                                                <span style="color:red">{{ $errors->first('birth_date') }} </span>
                                            @endif
                                            <div class="col-3">
                                                <input type="date" name="donation_date" id="donation_date" placeholder="Select Date" class="form-control m-input">
                                            </div>
                                        </div>

                                        <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>
                                        <div class="form-group m-form__group row">
                                            <div class="col-10 ml-auto">
                                                <h3 class="m-form__section">
                                                    2. Payment details
                                                </h3>
                                            </div>
                                        </div>

                                        <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">
                                            Payment mode
                                        </label>
                                            <div class="col-6">
                                                Cheque  <input type="radio" name="mode_payment"  value="cheque" >
                                                Cash    <input type="radio" name="mode_payment"  value="cash" >

                                                <div id="Cashdiv" style="display: none">
                                                    <label for="example-text-input" class="col-4 col-form-label">
                                                        Cash amount:
                                                    </label>

                                                    <div class="col-6">
                                                        <input class="form-control m-input" type="text"  name="donation_amount_cash" placeholder="Amount" >
                                                    </div>
                                                </div>


                                                <div id="Chequediv" style="display: none">

                                                   <label for="example-text-input" class="col-4 col-form-label">
                                                            Cheque details:
                                                   </label>

                                                    <div class="form-group m-form__group row">
                                                        <label for="example-text-input" class="col-4 col-form-label">
                                                            Bank name:
                                                        </label>
                                                        <div class="col-6">
                                                            <input class="form-control m-input" type="text"  name="bank_name" placeholder="Bank name" >
                                                        </div>
                                                    </div>

                                                    <div class="form-group m-form__group row">
                                                        <label for="example-text-input" class="col-4 col-form-label">
                                                            Branch:
                                                        </label>
                                                        <div class="col-6">
                                                            <input class="form-control m-input" type="text"  name="bank_branch" placeholder="Branch" >
                                                        </div>
                                                    </div>
                                                    <div class="form-group m-form__group row">
                                                        <label for="example-text-input" class="col-4 col-form-label">
                                                            Account number:
                                                        </label>
                                                        <div class="col-6">
                                                            <input class="form-control m-input" type="text"  name="bn_account_no" placeholder="Account number" >
                                                        </div>
                                                    </div>
                                                    <div class="form-group m-form__group row">
                                                        <label for="example-text-input" class="col-4 col-form-label">
                                                            Cheque number:
                                                        </label>
                                                        <div class="col-6">
                                                            <input class="form-control m-input" type="text"  name="cheque_number" placeholder="Cheque number" >
                                                        </div>
                                                    </div>
                                                    <div class="form-group m-form__group row">
                                                        <label for="example-text-input" class="col-4 col-form-label">
                                                            Amount:
                                                        </label>
                                                        <div class="col-6">
                                                            <input class="form-control m-input" type="text"  name="donation_amount_cheque" placeholder="Amount" >
                                                        </div>
                                                    </div>
                                                    <div class="form-group m-form__group row">
                                                        <label for="example-text-input" class="col-4 col-form-label">
                                                            Issue date:
                                                        </label>
                                                        <div class="col-6">
                                                            <input class="form-control m-input" type="date"  name="cq_issue_date" id="cq_issue_date" placeholder="Issue date" >
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>


                                        <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>
                                        <div class="form-group m-form__group row">
                                            <div class="col-10 ml-auto">
                                                <h3 class="m-form__section">
                                                    3. Receiver details
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group row">
                                            <label for="example-text-input" class="col-2 col-form-label">

                                            </label>
                                            <div class="col-6">
                                                <input class="form-control m-input" type="text"  name="receivername" placeholder="Receiver name" >
                                            </div>
                                        </div>


                                    </div>
                                    <div class="m-portlet__foot m-portlet__foot--fit">
                                        <div class="m-form__actions">
                                            <div class="row">
                                                <div class="col-2"></div>
                                                <div class="col-7">
                                                    <button type="submit" class="btn btn-accent m-btn m-btn--air m-btn--custom">
                                                       Submit
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
                            <div class="tab-pane active" id="m_user_profile_tab_2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    </div>

@endsection



@section('js')
    <script src="{{ asset('metronic/assets/custom/bootstrap-datepicker.js') }} " type="text/javascript"></script>
    <script>

        $(function(){
/*            $('#donation_date').datepicker({
                format: "yyyy-mm-dd",
                autoclose: true
            });

            $('#cq_issue_date').datepicker({
                format: "yyyy-mm-dd",
                autoclose: true
            });*/
        });

        $(document).ready(function(){
            $("input[name$='mode_payment']").click(function() {
                var id = $(this).val();

                if(id == 'cheque'){
                    $("#Chequediv").show();
                    $("#Cashdiv").hide();
                }

                if(id == 'cash'){
                    $("#Cashdiv").show();
                    $("#Chequediv").hide();
                }

            });
        });
    </script>
@endsection
