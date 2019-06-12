@extends('admin.master')

@section('content')

<div class="m-grid__item m-grid__item--fluid m-wrapper">

<!-- BEGIN: Subheader -->
<div class="m-subheader ">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="m-subheader__title ">
                Add baptism data
            </h3>
        </div>
        <div>
            <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover" aria-expanded="true">
                <a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--outline-2x m-btn--air m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                    <i class="la la-plus m--hide"></i>
                    <i class="la la-ellipsis-h"></i>
                </a>
                <div class="m-dropdown__wrapper">
                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                    <div class="m-dropdown__inner">
                        <div class="m-dropdown__body">
                            <div class="m-dropdown__content">
                                <ul class="m-nav">
                                    {{--<li class="m-nav__section m-nav__section--first m--hide">
															<span class="m-nav__section-text">
																Quick Actions
															</span>
                                    </li>
                                    <li class="m-nav__item">
                                        <a href="" class="m-nav__link">
                                            <i class="m-nav__link-icon flaticon-share"></i>
                                            <span class="m-nav__link-text">
																	Baptism listing
																</span>
                                        </a>
                                    </li>
                                    <li class="m-nav__item">
                                        <a href="" class="m-nav__link">
                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                            <span class="m-nav__link-text">
																	Messages
																</span>
                                        </a>
                                    </li>
                                    <li class="m-nav__item">
                                        <a href="" class="m-nav__link">
                                            <i class="m-nav__link-icon flaticon-info"></i>
                                            <span class="m-nav__link-text">
																	FAQ
																</span>
                                        </a>
                                    </li>--}}
                                    <li class="m-nav__item">
                                        <a href="{{ route('baptism.index') }}" class="m-nav__link">
                                            <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                            <span class="m-nav__link-text">
																	Baptism listing
																</span>
                                        </a>
                                    </li>
                                    {{--<li class="m-nav__separator m-nav__separator--fit"></li>
                                    <li class="m-nav__item">
                                        <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
                                            Submit
                                        </a>
                                    </li>--}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: Subheader -->


<div class="m-content">
    <div class="row">
        {{--  <div class="col-xl-3 col-lg-4">
                     <div class="m-portlet m-portlet--full-height  ">
                         <div class="m-portlet__body">
                             <div class="m-card-profile">
                                 <div class="m-card-profile__title m--hide">
                                     Your Profile
                                 </div>
                                 <div class="m-card-profile__pic">
                                     <div class="m-card-profile__pic-wrapper">
                                         <img src=" {{ asset('metronic/assets/app/media/img/users/user4.jpg') }}" alt=""/>
                                     </div>
                                 </div>
                                 <div class="m-card-profile__details">
                                             <span class="m-card-profile__name">
                                                 Mark Andre 5656
                                             </span>
                                     <a href="" class="m-card-profile__email m-link">
                                         mark.andre@gmail.com
                                     </a>
                                 </div>
                             </div>
                             <ul class="m-nav m-nav--hover-bg m-portlet-fit--sides">
                                 <li class="m-nav__separator m-nav__separator--fit"></li>
                                 <li class="m-nav__section m--hide">
                                             <span class="m-nav__section-text">
                                                 Section
                                             </span>
                                 </li>
                                 <li class="m-nav__item">
                                     <a href="../header/profile&amp;demo=default.html" class="m-nav__link">
                                         <i class="m-nav__link-icon flaticon-profile-1"></i>
                                         <span class="m-nav__link-title">
                                                     <span class="m-nav__link-wrap">
                                                         <span class="m-nav__link-text">
                                                             My Profile
                                                         </span>
                                                         <span class="m-nav__link-badge">
                                                             <span class="m-badge m-badge--success">
                                                                 2
                                                             </span>
                                                         </span>
                                                     </span>
                                                 </span>
                                     </a>
                                 </li>
                                 <li class="m-nav__item">
                                     <a href="../header/profile&amp;demo=default.html" class="m-nav__link">
                                         <i class="m-nav__link-icon flaticon-share"></i>
                                         <span class="m-nav__link-text">
                                                     Activity
                                                 </span>
                                     </a>
                                 </li>
                                 <li class="m-nav__item">
                                     <a href="../header/profile&amp;demo=default.html" class="m-nav__link">
                                         <i class="m-nav__link-icon flaticon-chat-1"></i>
                                         <span class="m-nav__link-text">
                                                     Messages
                                                 </span>
                                     </a>
                                 </li>
                                 <li class="m-nav__item">
                                     <a href="../header/profile&amp;demo=default.html" class="m-nav__link">
                                         <i class="m-nav__link-icon flaticon-graphic-2"></i>
                                         <span class="m-nav__link-text">
                                                     Sales
                                                 </span>
                                     </a>
                                 </li>
                                 <li class="m-nav__item">
                                     <a href="../header/profile&amp;demo=default.html" class="m-nav__link">
                                         <i class="m-nav__link-icon flaticon-time-3"></i>
                                         <span class="m-nav__link-text">
                                                     Events
                                                 </span>
                                     </a>
                                 </li>
                                 <li class="m-nav__item">
                                     <a href="../header/profile&amp;demo=default.html" class="m-nav__link">
                                         <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                         <span class="m-nav__link-text">
                                                     Support
                                                 </span>
                                     </a>
                                 </li>
                             </ul>
                             <div class="m-portlet__body-separator"></div>
                             <div class="m-widget1 m-widget1--paddingless">
                                 <div class="m-widget1__item">
                                     <div class="row m-row--no-padding align-items-center">
                                         <div class="col">
                                             <h3 class="m-widget1__title">
                                                 Member Profit
                                             </h3>
                                             <span class="m-widget1__desc">
                                                         Awerage Weekly Profit
                                                     </span>
                                         </div>
                                         <div class="col m--align-right">
                                                     <span class="m-widget1__number m--font-brand">
                                                         +$17,800
                                                     </span>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="m-widget1__item">
                                     <div class="row m-row--no-padding align-items-center">
                                         <div class="col">
                                             <h3 class="m-widget1__title">
                                                 Orders
                                             </h3>
                                             <span class="m-widget1__desc">
                                                         Weekly Customer Orders
                                                     </span>
                                         </div>
                                         <div class="col m--align-right">
                                                     <span class="m-widget1__number m--font-danger">
                                                         +1,800
                                                     </span>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="m-widget1__item">
                                     <div class="row m-row--no-padding align-items-center">
                                         <div class="col">
                                             <h3 class="m-widget1__title">
                                                 Issue Reports
                                             </h3>
                                             <span class="m-widget1__desc">
                                                         System bugs and issues
                                                     </span>
                                         </div>
                                         <div class="col m--align-right">
                                                     <span class="m-widget1__number m--font-success">
                                                         -27,49%
                                                     </span>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
          </div>--}}


















<div class="col-xl-12 col-lg-8">
                        <div class="m-portlet m-portlet--full-height m-portlet--tabs  ">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-tools">
                                    <ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary" role="tablist">
                                        <li class="nav-item m-tabs__item">
                                            <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_user_profile_tab_1" role="tab">
                                                <i class="flaticon-share m--hide"></i>
                                                Profile
                                            </a>
                                        </li>
                                       {{-- <li class="nav-item m-tabs__item">
                                            <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_user_profile_tab_2" role="tab">
                                                Messages77
                                            </a>
                                        </li>
                                        <li class="nav-item m-tabs__item">
                                            <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_user_profile_tab_3" role="tab">
                                                Settings
                                            </a>
                                        </li>--}}
                                    </ul>
                                </div>
                               {{-- <div class="m-portlet__head-tools">
                                    <ul class="m-portlet__nav">
                                        <li class="m-portlet__nav-item m-portlet__nav-item--last">
                                            <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover" aria-expanded="true">
                                                <a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                                                    <i class="la la-gear"></i>
                                                </a>
                                                <div class="m-dropdown__wrapper">
                                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                    <div class="m-dropdown__inner">
                                                        <div class="m-dropdown__body">
                                                            <div class="m-dropdown__content">
                                                                <ul class="m-nav">
                                                                    <li class="m-nav__section m-nav__section--first">
																				<span class="m-nav__section-text">
																					Quick Actions
																				</span>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-share"></i>
                                                                            <span class="m-nav__link-text">
																						Create Post
																					</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                            <span class="m-nav__link-text">
																						Send Messages
																					</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-multimedia-2"></i>
                                                                            <span class="m-nav__link-text">
																						Upload File
																					</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__section">
																				<span class="m-nav__section-text">
																					Useful Links
																				</span>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-info"></i>
                                                                            <span class="m-nav__link-text">
																						FAQ
																					</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                            <span class="m-nav__link-text">
																						Support
																					</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__separator m-nav__separator--fit m--hide"></li>
                                                                    <li class="m-nav__item m--hide">
                                                                        <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
                                                                            Submit
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>--}}
                            </div>


                            <div class="tab-content">
                                <div class="tab-pane active" id="m_user_profile_tab_1">

                                    <form id="add_baptism" class="m-form m-form--fit m-form--label-align-right" action="{{ route('baptism.store') }}" method="POST">
                                        @csrf
                                        <div class="m-portlet__body">
                                            <div class="form-group m-form__group m--margin-top-10 m--hide">
                                                <div class="alert m-alert m-alert--default" role="alert">
                                                    The example form below demonstrates common HTML form elements that receive updated styles from Bootstrap with additional classes.
                                                </div>
                                            </div>
                                            <div class="form-group m-form__group row">
                                                <div class="col-10 ml-auto">
                                                    <h3 class="m-form__section">
                                                        1. Newborn Personal Details
                                                    </h3>
                                                </div>
                                            </div>


                                            <div class="form-group m-form__group row">
                                                <label for="example-text-input" class="col-2 col-form-label">
                                                    Full Name
                                                </label>
                                                <div class="col-3">
                                                    <input class="form-control m-input" type="text"  name="newborn_firstname" placeholder="First name">
                                                </div>

                                                <div class="col-3">
                                                    <input class="form-control m-input" type="text"  name="newborn_middlename" placeholder="Father name">
                                                </div>

                                                <div class="col-3">
                                                    <input class="form-control m-input" type="text"  name="newborn_surname" placeholder="Surname">
                                                </div>
                                            </div>


                                            <div class="form-group m-form__group row">
                                                <label for="example-text-input" class="col-2 col-form-label">
                                                    Gender
                                                </label>
                                                <div class="col-7">
                                                    <select id="gender" name="gender" class="browser-default custom-select">
                                                        <option value="0">Choose option</option>
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group m-form__group row">
                                                <label for="example-text-input" class="col-2 col-form-label">Adopted child</label>
                                                <div class="col-7">
                                                <select id="adopt" name="adopted" class="browser-default custom-select">
                                                    <option value="0">Please select</option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                                </div>
                                            </div>

                                            <div class="form-group m-form__group row">
                                                    <label for="example-text-input" class="col-2 col-form-label">Date of birth</label>
                                                    @if($errors->has('birth_date'))
                                                        <span style="color:red">{{ $errors->first('birth_date') }} </span>
                                                    @endif
                                                <div class="col-7">
                                                    <input readonly='true' type="text" id="birth_date" name="birth_date" placeholder="Select Date" class="form-control m-input">
                                                </div>
                                            </div>


                                            <div class="form-group m-form__group row">
                                                <label for="example-text-input" class="col-2 col-form-label">Date of baptism</label>
                                                @if($errors->has('birth_date'))
                                                    <span style="color:red">{{ $errors->first('birth_date') }} </span>
                                                @endif
                                                <div class="col-7">
                                                    <input readonly='true' type="text" id="baptism_date" name="baptism_date" placeholder="Select Date" class="form-control m-input">
                                                </div>
                                            </div>


                                            <div class="form-group m-form__group row">
                                                <label for="example-text-input" class="col-2 col-form-label">Place of birth</label>
                                                @if($errors->has('birth_date'))
                                                    <span style="color:red">{{ $errors->first('birth_date') }} </span>
                                                @endif
                                                <div class="col-7">
                                                    <input  type="text" id="birthplace" name="birthplace"  class="form-control m-input">
                                                </div>
                                            </div>

                                           {{-- <div class="form-group m-form__group row">
                                                <label for="example-text-input" class="col-2 col-form-label">
                                                    Company Name
                                                </label>
                                                <div class="col-7">
                                                    <input class="form-control m-input" type="text" value="Keenthemes">
                                                    <span class="m-form__help">
																If you want your invoices addressed to a company. Leave blank to use your full name.
															</span>
                                                </div>
                                            </div>--}}


                                            <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>


                                            <div class="form-group m-form__group row">
                                                <div class="col-10 ml-auto">
                                                    <h3 class="m-form__section">
                                                        2. Parents detail
                                                    </h3>
                                                </div>
                                            </div>

                                            <div class="form-group m-form__group row">
                                                <label for="example-text-input" class="col-2 col-form-label">
                                                    Father Name
                                                </label>
                                                <div class="col-3">
                                                    <input class="form-control m-input" type="text"  name="father_first_name" placeholder="First name">
                                                </div>

                                                <div class="col-3">
                                                    <input class="form-control m-input" type="text"  name="father_middle_name" placeholder="Father name">
                                                </div>

                                                <div class="col-3">
                                                    <input class="form-control m-input" type="text"  name="father_last_name" placeholder="Surname">
                                                </div>
                                            </div>



                                            <div class="form-group m-form__group row">
                                                <label for="example-text-input" class="col-2 col-form-label">
                                                    Mother Name
                                                </label>
                                                <div class="col-3">
                                                    <input class="form-control m-input" type="text"   name="mother_first_name" placeholder="First name">
                                                </div>

                                                <div class="col-3">
                                                    <input class="form-control m-input" type="text"   name="mother_middle_name" placeholder="Father name">
                                                </div>

                                                <div class="col-3">
                                                    <input class="form-control m-input" type="text"  name="mother_last_name" placeholder="Surname">
                                                </div>
                                            </div>

                                            <div class="form-group m-form__group row">
                                                <label for="example-text-input" class="col-2 col-form-label">
                                                    Resident address
                                                </label>
                                                <div class="col-7">
                                                    <input class="form-control m-input" type="text"  name="guardian_resident_adrs" placeholder="Guardian resident address">
                                                </div>
                                            </div>

                                            <div class="form-group m-form__group row">
                                                <label for="example-text-input" class="col-2 col-form-label">Contact number</label>
                                                @if($errors->has('birth_date'))
                                                    <span style="color:red">{{ $errors->first('birth_date') }} </span>
                                                @endif
                                                <div class="col-7">
                                                    <input type="text" name="contact_number" placeholder="Phone number" class="form-control m-input">
                                                </div>
                                            </div>

                                            <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>

                                            <div class="form-group m-form__group row">
                                                <div class="col-10 ml-auto">
                                                    <h3 class="m-form__section">
                                                        3. God mother details
                                                    </h3>
                                                </div>
                                            </div>

                                            <div class="form-group m-form__group row">
                                                <label for="example-text-input" class="col-2 col-form-label">
                                                    Godmother Name
                                                </label>
                                                <div class="col-3">
                                                    <input class="form-control m-input" type="text" name="gmother_first_name" placeholder="First name">
                                                </div>

                                                <div class="col-3">
                                                    <input class="form-control m-input" type="text" name="gmother_middle_name"  placeholder="Father name">
                                                </div>

                                                <div class="col-3">
                                                    <input class="form-control m-input" type="text"  name="gmother_last_name" placeholder="Surname">
                                                </div>
                                            </div>
                                            <div class="form-group m-form__group row">
                                                <label for="example-text-input" class="col-2 col-form-label">Phone number</label>
                                                @if($errors->has('birth_date'))
                                                    <span style="color:red">{{ $errors->first('birth_date') }} </span>
                                                @endif
                                                <div class="col-7">
                                                    <input  type="text" id="gmother_contact_no" name="gmother_contact_no" placeholder="Phone number" class="form-control m-input">
                                                </div>
                                            </div>
                                            <div class="form-group m-form__group row">
                                                <label for="example-text-input" class="col-2 col-form-label">Address</label>
                                                @if($errors->has('birth_date'))
                                                    <span style="color:red">{{ $errors->first('gmother_adrs') }} </span>
                                                @endif
                                                <div class="col-7">
                                                    <input type="text" id="gmother_adrs" name="gmother_adrs" placeholder="Address" class="form-control m-input">
                                                </div>
                                            </div>



                                            <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>

                                            <div class="form-group m-form__group row">
                                                <div class="col-10 ml-auto">
                                                    <h3 class="m-form__section">
                                                        4. God father details
                                                    </h3>
                                                </div>
                                            </div>


                                            <div class="form-group m-form__group row">
                                                <label for="example-text-input" class="col-2 col-form-label">
                                                    God father Name
                                                </label>
                                                <div class="col-3">
                                                    <input class="form-control m-input" type="text"   name="gfather_first_name" placeholder="First name">
                                                </div>

                                                <div class="col-3">
                                                    <input class="form-control m-input" type="text"   name="gfather_middle_name" placeholder="Father name">
                                                </div>

                                                <div class="col-3">
                                                    <input class="form-control m-input" type="text" name="gfather_last_name" placeholder="Surname">
                                                </div>
                                            </div>

                                            <div class="form-group m-form__group row">
                                                <label for="example-text-input" class="col-2 col-form-label">Address</label>
                                                @if($errors->has('birth_date'))
                                                    <span style="color:red">{{ $errors->first('birth_date') }} </span>
                                                @endif
                                                <div class="col-7">
                                                    <input type="text" name="gfather_adrs" placeholder="Select Date" class="form-control m-input">
                                                </div>
                                            </div>

                                            <div class="form-group m-form__group row">
                                                <label for="example-text-input" class="col-2 col-form-label">Phone number</label>
                                                @if($errors->has('birth_date'))
                                                    <span style="color:red">{{ $errors->first('birth_date') }} </span>
                                                @endif
                                                <div class="col-7">
                                                    <input  type="text" name="gfather_contact_no" placeholder="Select Date" class="form-control m-input">
                                                </div>
                                            </div>

                                            <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>


                                            <div class="form-group m-form__group row">
                                                <label class="col-2 col-form-label" >Parish Priest</label>
                                                <div class="col-10">
                                                    <input  type="text" name="pastor" value="Fr.Alex" class="form-control m-input">
                                                </div>

                                                <label class="col-2 col-form-label">Baptism church</label>
                                                <div class="col-10">
                                                    <input  type="text" name="baptism_church" value="Holy family church" class="form-control m-input">
                                                </div>

                                                <label class="col-2 col-form-label">Remark</label>
                                                <div class="col-10">
                                                    <input  type="text" name="remark" value="testing" class="form-control m-input">
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
    <script src="{{ asset('metronic/assets/custom/bootstrap-datepicker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.validate.js') }} " type="text/javascript"></script>

    <script>
    $(function(){
        $('#baptism_date').datepicker({
            format: "yyyy-mm-dd"
        });
        $('#birth_date').datepicker({
            format: "yyyy-mm-dd"
        });
        $("#baptism_date").rules('add', { greaterThan: "#birth_date" });
    });


    $(function () {
        $('#add_baptism').validate({
            rules: {
                newborn_firstname: {
                    required: true,
                },
                newborn_middlename: {
                    required: true,
                },
                newborn_surname: {
                    required: true,
                },
                gender: {
                    required: true,
                },
                adopted: {
                    required: true,
                },
                birth_date: {
                    required: true,
                },
                baptism_date: {
                    required: true,
                },
                birthplace: {
                    required: true,
                },

                father_first_name: {
                    required: true,
                },
                father_middle_name: {
                    required: true,
                },
                father_last_name: {
                    required: true,
                },
                mother_first_name: {
                    required: true,
                },
                mother_middle_name: {
                    required: true,
                },
                mother_last_name: {
                    required: true,
                },
                guardian_resident_adrs: {
                    required: true,
                },
                contact_number: {
                    required: true,
                },


                gmother_first_name: {
                    required: true,
                },
                gmother_middle_name: {
                    required: true,
                },
                gmother_last_name: {
                    required: true,
                },
                gmother_contact_no: {
                    required: true,
                },
                gmother_adrs: {
                    required: true,
                },


                gfather_first_name: {
                    required: true,
                },
                gfather_middle_name: {
                    required: true,
                },
                gfather_last_name: {
                    required: true,
                },
                gfather_adrs: {
                    required: true,
                },
                gfather_contact_no: {
                    required: true,
                },


            },
            messages: {
                newborn_firstname: {
                    required: "Field required"
                },
                newborn_middlename: {
                    required: "Field required"
                },
                newborn_surname: {
                    required: "Field required"
                },
                gender: {
                    required: "Field required"
                },
                adopted: {
                    required:"Field required"
                },
                birth_date: {
                    required: "Field required"
                },
                baptism_date: {
                    required: "Field required"
                },
                birthplace: {
                    required: "Field required"
                },
                father_first_name: {
                    required: "Field required"
                },
                father_middle_name: {
                    required: "Field required"
                },
                father_last_name: {
                    required: "Field required"
                },
                mother_first_name: {
                    required: "Field required"
                },
                mother_middle_name: {
                    required: "Field required"
                },
                mother_last_name: {
                    required: "Field required"
                },
                guardian_resident_adrs: {
                    required: "Field required"
                },
                contact_number: {
                    required: "Field required"
                },


                gmother_first_name: {
                    required: "Field required"
                },
                gmother_middle_name: {
                    required: "Field required"
                },
                gmother_last_name: {
                    required: "Field required"
                },
                gmother_contact_no: {
                    required: "Field required"
                },
                gmother_adrs: {
                    required: "Field required"
                },

                gfather_first_name: {
                    required: "Field required"
                },
                gfather_middle_name: {
                    required: "Field required"
                },
                gfather_last_name: {
                    required: "Field required"
                },
                gfather_adrs: {
                    required: "Field required"
                },
                gfather_contact_no: {
                    required: "Field required"
                },


            }
        });
    });

    </script>

@endsection
