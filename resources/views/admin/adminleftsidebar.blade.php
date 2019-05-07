<!-- end::Body -->
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >

<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">

<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

<!-- BEGIN: Left Aside -->
<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
    <i class="la la-close"></i>
</button>

<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">
    <!-- BEGIN: Aside Menu -->
    <div
            id="m_ver_menu"
            class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark "
            data-menu-vertical="true"
            data-menu-scrollable="false" data-menu-dropdown-timeout="500"
    >
        <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
            <li class="m-menu__item " aria-haspopup="true" >
                <a  href="../index.html" class="m-menu__link ">
                    <i class="m-menu__link-icon flaticon-line-graph"></i>
                    <span class="m-menu__link-title">
										<span class="m-menu__link-wrap">
											<span class="m-menu__link-text">
												Dashboard
											</span>
											<span class="m-menu__link-badge">
												<span class="m-badge m-badge--danger">
													2
												</span>
											</span>
										</span>
									</span>
                </a>
            </li>
            <li class="m-menu__section">
                <h4 class="m-menu__section-text">
                    Components
                </h4>
                <i class="m-menu__section-icon flaticon-more-v3"></i>
            </li>

             <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                  <a  href="{{ route('baptism.index')}}" class="m-menu__link m-menu__toggle">
                      <i class="m-menu__link-icon flaticon-layers"></i>
                      <span class="m-menu__link-text">
                                  Baptism
                              </span>
                      <i class="m-menu__ver-arrow la la-angle-right"></i>
                  </a>
                  <div class="m-menu__submenu">
                      <span class="m-menu__arrow"></span>
                      <ul class="m-menu__subnav">
                          <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                              <a  href="#" class="m-menu__link ">
                                          <span class="m-menu__link-text">
                                              Base
                                          </span>
                              </a>
                          </li>
                          <li class="m-menu__item " aria-haspopup="true" >
                              <a  href="{{ route('baptism.index')}}" class="m-menu__link ">
                                  <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                      <span></span>
                                  </i>
                                  <span class="m-menu__link-text">
                                              Baptism list
                                          </span>
                              </a>
                          </li>

                          <li class="m-menu__item " aria-haspopup="true" >
                              <a  href="{{ route('baptism.create')}}" class="m-menu__link ">
                                  <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                      <span></span>
                                  </i>
                                  <span class="m-menu__link-text">
                                              Add baptism
                                          </span>
                              </a>
                          </li>
                          <li class="m-menu__item " aria-haspopup="true" >
                              <a  href="../components/base/dropdown.html" class="m-menu__link ">
                                  <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                      <span></span>
                                  </i>
                                  <span class="m-menu__link-text">
                                              Dropdown
                                          </span>
                              </a>
                          </li>
                          <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                              <a  href="#" class="m-menu__link m-menu__toggle">
                                  <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                      <span></span>
                                  </i>
                                  <span class="m-menu__link-text">
                                              Tabs
                                          </span>
                                  <i class="m-menu__ver-arrow la la-angle-right"></i>
                              </a>
                              <div class="m-menu__submenu">
                                  <span class="m-menu__arrow"></span>
                                  <ul class="m-menu__subnav">
                                      <li class="m-menu__item " aria-haspopup="true" >
                                          <a  href="../components/base/tabs/bootstrap.html" class="m-menu__link ">
                                              <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                  <span></span>
                                              </i>
                                              <span class="m-menu__link-text">
                                                          Bootstrap Tabs
                                                      </span>
                                          </a>
                                      </li>
                                      <li class="m-menu__item " aria-haspopup="true" >
                                          <a  href="../components/base/tabs/line.html" class="m-menu__link ">
                                              <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                  <span></span>
                                              </i>
                                              <span class="m-menu__link-text">
                                                          Line Tabs
                                              </span>
                                          </a>
                                      </li>
                                  </ul>
                              </div>
                          </li>
                      </ul>
                  </div>
              </li>

            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                <a  href="#" class="m-menu__link m-menu__toggle">
                    <i class="m-menu__link-icon flaticon-interface-7"></i>
                    <span class="m-menu__link-text">
										Gallery n Carousel
									</span>
                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                </a>
                <div class="m-menu__submenu">
                    <span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                            <a  href="#" class="m-menu__link ">
												<span class="m-menu__link-text">
													Forms222
												</span>
                            </a>
                        </li>
                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                            <a  href="#" class="m-menu__link m-menu__toggle">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
													Carosel images
												</span>
                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                            </a>
                            <div class="m-menu__submenu">
                                <span class="m-menu__arrow"></span>
                                <ul class="m-menu__subnav">
                                    <li class="m-menu__item " aria-haspopup="true" >
                                        <a  href="{{ route('carousngalry.create') }}" class="m-menu__link ">
                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                <span></span>
                                            </i>
                                            <span class="m-menu__link-text">
																Add slider images
															</span>
                                        </a>
                                    </li>
                                    <li class="m-menu__item " aria-haspopup="true" >
                                        <a  href="{{ route('carousngalry.index') }}" class="m-menu__link ">
                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                <span></span>
                                            </i>
                                            <span class="m-menu__link-text">
																List carousel imgs
															</span>
                                        </a>
                                    </li>


                                </ul>
                            </div>
                        </li>
                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                            <a  href="#" class="m-menu__link m-menu__toggle">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
													Gallery
												</span>
                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                            </a>
                            <div class="m-menu__submenu">
                                <span class="m-menu__arrow"></span>
                                <ul class="m-menu__subnav">
                                    <li class="m-menu__item " aria-haspopup="true" >
                                        <a  href="../components/forms/widgets/bootstrap-datepicker.html" class="m-menu__link ">
                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                <span></span>
                                            </i>
                                            <span class="m-menu__link-text">
																List gallery
															</span>
                                        </a>
                                    </li>
                                </ul>

                                <ul class="m-menu__subnav">
                                    <li class="m-menu__item " aria-haspopup="true" >
                                        <a  href="../components/forms/widgets/bootstrap-datepicker.html" class="m-menu__link ">
                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                <span></span>
                                            </i>
                                            <span class="m-menu__link-text">
																Add gallery images
															</span>
                                        </a>
                                    </li>
                                </ul>



                            </div>
                        </li>
                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                            <a  href="#" class="m-menu__link m-menu__toggle">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
													Form Layouts
												</span>
                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                            </a>
                            <div class="m-menu__submenu">
                                <span class="m-menu__arrow"></span>
                                <ul class="m-menu__subnav">
                                    <li class="m-menu__item " aria-haspopup="true" >
                                        <a  href="../components/forms/layouts/default-forms.html" class="m-menu__link ">
                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                <span></span>
                                            </i>
                                            <span class="m-menu__link-text">
																Default Forms
															</span>
                                        </a>
                                    </li>
                                    <li class="m-menu__item " aria-haspopup="true" >
                                        <a  href="../components/forms/layouts/action-bars.html" class="m-menu__link ">
                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                <span></span>
                                            </i>
                                            <span class="m-menu__link-text">
																Action Bars
															</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                    </ul>
                </div>
            </li>






            {{-- <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                 <a  href="#" class="m-menu__link m-menu__toggle">
                     <i class="m-menu__link-icon flaticon-tabs"></i>
                     <span class="m-menu__link-text">
                                 Datatables
                             </span>
                     <i class="m-menu__ver-arrow la la-angle-right"></i>
                 </a>
                 <div class="m-menu__submenu">
                     <span class="m-menu__arrow"></span>
                     <ul class="m-menu__subnav">
                         <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                             <a  href="#" class="m-menu__link ">
                                         <span class="m-menu__link-text">
                                             Datatables
                                         </span>
                             </a>
                         </li>
                         <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                             <a  href="#" class="m-menu__link m-menu__toggle">
                                 <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                     <span></span>
                                 </i>
                                 <span class="m-menu__link-text">
                                             Base
                                         </span>
                                 <i class="m-menu__ver-arrow la la-angle-right"></i>
                             </a>
                             <div class="m-menu__submenu">
                                 <span class="m-menu__arrow"></span>
                                 <ul class="m-menu__subnav">
                                     <li class="m-menu__item " aria-haspopup="true" >
                                         <a  href="../components/datatables/base/data-local.html" class="m-menu__link ">
                                             <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                 <span></span>
                                             </i>
                                             <span class="m-menu__link-text">
                                                         Local Data
                                                     </span>
                                         </a>
                                     </li>
                                     <li class="m-menu__item " aria-haspopup="true" >
                                         <a  href="../components/datatables/base/data-json.html" class="m-menu__link ">
                                             <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                 <span></span>
                                             </i>
                                             <span class="m-menu__link-text">
                                                         JSON Data
                                                     </span>
                                         </a>
                                     </li>
                                     <li class="m-menu__item " aria-haspopup="true" >
                                         <a  href="../components/datatables/base/data-ajax.html" class="m-menu__link ">
                                             <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                 <span></span>
                                             </i>
                                             <span class="m-menu__link-text">
                                                         Ajax Data
                                                     </span>
                                         </a>
                                     </li>
                                     <li class="m-menu__item " aria-haspopup="true" >
                                         <a  href="../components/datatables/base/html-table.html" class="m-menu__link ">
                                             <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                 <span></span>
                                             </i>
                                             <span class="m-menu__link-text">
                                                         HTML Table
                                                     </span>
                                         </a>
                                     </li>
                                     <li class="m-menu__item " aria-haspopup="true" >
                                         <a  href="../components/datatables/base/record-selection.html" class="m-menu__link ">
                                             <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                 <span></span>
                                             </i>
                                             <span class="m-menu__link-text">
                                                         Record Selection
                                                     </span>
                                         </a>
                                     </li>
                                     <li class="m-menu__item " aria-haspopup="true" >
                                         <a  href="../components/datatables/base/local-sort.html" class="m-menu__link ">
                                             <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                 <span></span>
                                             </i>
                                             <span class="m-menu__link-text">
                                                         Local Sort
                                                     </span>
                                         </a>
                                     </li>
                                     <li class="m-menu__item " aria-haspopup="true" >
                                         <a  href="../components/datatables/base/column-rendering.html" class="m-menu__link ">
                                             <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                 <span></span>
                                             </i>
                                             <span class="m-menu__link-text">
                                                         Column Rendering
                                                     </span>
                                         </a>
                                     </li>
                                     <li class="m-menu__item " aria-haspopup="true" >
                                         <a  href="../components/datatables/base/column-width.html" class="m-menu__link ">
                                             <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                 <span></span>
                                             </i>
                                             <span class="m-menu__link-text">
                                                         Column Width
                                                     </span>
                                         </a>
                                     </li>
                                     <li class="m-menu__item " aria-haspopup="true" >
                                         <a  href="../components/datatables/base/responsive-columns.html" class="m-menu__link ">
                                             <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                 <span></span>
                                             </i>
                                             <span class="m-menu__link-text">
                                                         Responsive Columns
                                                     </span>
                                         </a>
                                     </li>
                                     <li class="m-menu__item " aria-haspopup="true" >
                                         <a  href="../components/datatables/base/translation.html" class="m-menu__link ">
                                             <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                 <span></span>
                                             </i>
                                             <span class="m-menu__link-text">
                                                         Translation
                                                     </span>
                                         </a>
                                     </li>
                                 </ul>
                             </div>
                         </li>
                         <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                             <a  href="#" class="m-menu__link m-menu__toggle">
                                 <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                     <span></span>
                                 </i>
                                 <span class="m-menu__link-text">
                                             Scrolling
                                         </span>
                                 <i class="m-menu__ver-arrow la la-angle-right"></i>
                             </a>
                             <div class="m-menu__submenu">
                                 <span class="m-menu__arrow"></span>
                                 <ul class="m-menu__subnav">
                                     <li class="m-menu__item " aria-haspopup="true" >
                                         <a  href="../components/datatables/scrolling/vertical.html" class="m-menu__link ">
                                             <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                 <span></span>
                                             </i>
                                             <span class="m-menu__link-text">
                                                         Vertical Scrolling
                                                     </span>
                                         </a>
                                     </li>
                                     <li class="m-menu__item " aria-haspopup="true" >
                                         <a  href="../components/datatables/scrolling/horizontal.html" class="m-menu__link ">
                                             <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                 <span></span>
                                             </i>
                                             <span class="m-menu__link-text">
                                                         Horizontal Scrolling
                                                     </span>
                                         </a>
                                     </li>
                                     <li class="m-menu__item " aria-haspopup="true" >
                                         <a  href="../components/datatables/scrolling/both.html" class="m-menu__link ">
                                             <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                 <span></span>
                                             </i>
                                             <span class="m-menu__link-text">
                                                         Both Scrolling
                                                     </span>
                                         </a>
                                     </li>
                                 </ul>
                             </div>
                         </li>
                         <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                             <a  href="#" class="m-menu__link m-menu__toggle">
                                 <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                     <span></span>
                                 </i>
                                 <span class="m-menu__link-text">
                                             Locked Columns
                                         </span>
                                 <i class="m-menu__ver-arrow la la-angle-right"></i>
                             </a>
                             <div class="m-menu__submenu">
                                 <span class="m-menu__arrow"></span>
                                 <ul class="m-menu__subnav">
                                     <li class="m-menu__item " aria-haspopup="true" >
                                         <a  href="../components/datatables/locked/left.html" class="m-menu__link ">
                                             <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                 <span></span>
                                             </i>
                                             <span class="m-menu__link-text">
                                                         Left Locked Columns
                                                     </span>
                                         </a>
                                     </li>
                                     <li class="m-menu__item " aria-haspopup="true" >
                                         <a  href="../components/datatables/locked/right.html" class="m-menu__link ">
                                             <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                 <span></span>
                                             </i>
                                             <span class="m-menu__link-text">
                                                         Right Locked Columns
                                                     </span>
                                         </a>
                                     </li>
                                     <li class="m-menu__item " aria-haspopup="true" >
                                         <a  href="../components/datatables/locked/both.html" class="m-menu__link ">
                                             <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                 <span></span>
                                             </i>
                                             <span class="m-menu__link-text">
                                                         Both Locked Columns
                                                     </span>
                                         </a>
                                     </li>
                                 </ul>
                             </div>
                         </li>
                         <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                             <a  href="#" class="m-menu__link m-menu__toggle">
                                 <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                     <span></span>
                                 </i>
                                 <span class="m-menu__link-text">
                                             Child Datatables
                                         </span>
                                 <i class="m-menu__ver-arrow la la-angle-right"></i>
                             </a>
                             <div class="m-menu__submenu">
                                 <span class="m-menu__arrow"></span>
                                 <ul class="m-menu__subnav">
                                     <li class="m-menu__item " aria-haspopup="true" >
                                         <a  href="../components/datatables/child/data-local.html" class="m-menu__link ">
                                             <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                 <span></span>
                                             </i>
                                             <span class="m-menu__link-text">
                                                         Local Data
                                                     </span>
                                         </a>
                                     </li>
                                     <li class="m-menu__item " aria-haspopup="true" >
                                         <a  href="../components/datatables/child/data-ajax.html" class="m-menu__link ">
                                             <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                 <span></span>
                                             </i>
                                             <span class="m-menu__link-text">
                                                         Remote Data
                                                     </span>
                                         </a>
                                     </li>
                                 </ul>
                             </div>
                         </li>
                         <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                             <a  href="#" class="m-menu__link m-menu__toggle">
                                 <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                     <span></span>
                                 </i>
                                 <span class="m-menu__link-text">
                                             API
                                         </span>
                                 <i class="m-menu__ver-arrow la la-angle-right"></i>
                             </a>
                             <div class="m-menu__submenu">
                                 <span class="m-menu__arrow"></span>
                                 <ul class="m-menu__subnav">
                                     <li class="m-menu__item " aria-haspopup="true" >
                                         <a  href="../components/datatables/api/methods.html" class="m-menu__link ">
                                             <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                 <span></span>
                                             </i>
                                             <span class="m-menu__link-text">
                                                         API Methods
                                                     </span>
                                         </a>
                                     </li>
                                     <li class="m-menu__item " aria-haspopup="true" >
                                         <a  href="../components/datatables/api/events.html" class="m-menu__link ">
                                             <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                 <span></span>
                                             </i>
                                             <span class="m-menu__link-text">
                                                         Events
                                                     </span>
                                         </a>
                                     </li>
                                 </ul>
                             </div>
                         </li>
                     </ul>
                 </div>
             </li>--}}










            {{--  <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                  <a  href="#" class="m-menu__link m-menu__toggle">
                      <i class="m-menu__link-icon flaticon-interface-1"></i>
                      <span class="m-menu__link-text">
                                  Portlets
                              </span>
                      <i class="m-menu__ver-arrow la la-angle-right"></i>
                  </a>
                  <div class="m-menu__submenu">
                      <span class="m-menu__arrow"></span>
                      <ul class="m-menu__subnav">
                          <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                              <a  href="#" class="m-menu__link ">
                                          <span class="m-menu__link-text">
                                              Portlets
                                          </span>
                              </a>
                          </li>
                          <li class="m-menu__item " aria-haspopup="true" >
                              <a  href="../components/portlets/base.html" class="m-menu__link ">
                                  <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                      <span></span>
                                  </i>
                                  <span class="m-menu__link-text">
                                              Base Portlets
                                          </span>
                              </a>
                          </li>
                          <li class="m-menu__item " aria-haspopup="true" >
                              <a  href="../components/portlets/advanced.html" class="m-menu__link ">
                                  <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                      <span></span>
                                  </i>
                                  <span class="m-menu__link-text">
                                              Advanced Portlets
                                          </span>
                              </a>
                          </li>
                          <li class="m-menu__item " aria-haspopup="true" >
                              <a  href="../components/portlets/creative.html" class="m-menu__link ">
                                  <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                      <span></span>
                                  </i>
                                  <span class="m-menu__link-text">
                                              Creative Portlets
                                          </span>
                              </a>
                          </li>
                          <li class="m-menu__item " aria-haspopup="true" >
                              <a  href="../components/portlets/tabbed.html" class="m-menu__link ">
                                  <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                      <span></span>
                                  </i>
                                  <span class="m-menu__link-text">
                                              Tabbed Portlets
                                          </span>
                              </a>
                          </li>
                          <li class="m-menu__item " aria-haspopup="true" >
                              <a  href="../components/portlets/draggable.html" class="m-menu__link ">
                                  <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                      <span></span>
                                  </i>
                                  <span class="m-menu__link-text">
                                              Draggable Portlets
                                          </span>
                              </a>
                          </li>
                          <li class="m-menu__item " aria-haspopup="true" >
                              <a  href="../components/portlets/tools.html" class="m-menu__link ">
                                  <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                      <span></span>
                                  </i>
                                  <span class="m-menu__link-text">
                                              Portlet Tools
                                          </span>
                              </a>
                          </li>
                      </ul>
                  </div>
              </li>--}}



            {{-- <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                 <a  href="#" class="m-menu__link m-menu__toggle">
                     <i class="m-menu__link-icon flaticon-network"></i>
                     <span class="m-menu__link-text">
                                 Widgets
                             </span>
                     <i class="m-menu__ver-arrow la la-angle-right"></i>
                 </a>
                 <div class="m-menu__submenu">
                     <span class="m-menu__arrow"></span>
                     <ul class="m-menu__subnav">
                         <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                             <a  href="#" class="m-menu__link ">
                                         <span class="m-menu__link-text">
                                             Widgets
                                         </span>
                             </a>
                         </li>
                         <li class="m-menu__item " aria-haspopup="true" >
                             <a  href="../components/widgets/general.html" class="m-menu__link ">
                                 <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                     <span></span>
                                 </i>
                                 <span class="m-menu__link-text">
                                             General Widgets
                                         </span>
                             </a>
                         </li>
                         <li class="m-menu__item " aria-haspopup="true" >
                             <a  href="../components/widgets/chart.html" class="m-menu__link ">
                                 <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                     <span></span>
                                 </i>
                                 <span class="m-menu__link-text">
                                             Chart Widgets
                                         </span>
                             </a>
                         </li>
                     </ul>
                 </div>
             </li>--}}



            {{-- <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                 <a  href="#" class="m-menu__link m-menu__toggle">
                     <i class="m-menu__link-icon flaticon-calendar"></i>
                     <span class="m-menu__link-text">
                                 Calendar
                             </span>
                     <i class="m-menu__ver-arrow la la-angle-right"></i>
                 </a>
                 <div class="m-menu__submenu">
                     <span class="m-menu__arrow"></span>
                     <ul class="m-menu__subnav">
                         <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                             <a  href="#" class="m-menu__link ">
                                         <span class="m-menu__link-text">
                                             Calendar
                                         </span>
                             </a>
                         </li>
                         <li class="m-menu__item " aria-haspopup="true" >
                             <a  href="../components/calendar/basic.html" class="m-menu__link ">
                                 <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                     <span></span>
                                 </i>
                                 <span class="m-menu__link-text">
                                             Basic Calendar
                                         </span>
                             </a>
                         </li>
                         <li class="m-menu__item " aria-haspopup="true" >
                             <a  href="../components/calendar/list-view.html" class="m-menu__link ">
                                 <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                     <span></span>
                                 </i>
                                 <span class="m-menu__link-text">
                                             List Views
                                         </span>
                             </a>
                         </li>
                         <li class="m-menu__item " aria-haspopup="true" >
                             <a  href="../components/calendar/google.html" class="m-menu__link ">
                                 <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                     <span></span>
                                 </i>
                                 <span class="m-menu__link-text">
                                             Google Calendar
                                         </span>
                             </a>
                         </li>
                         <li class="m-menu__item " aria-haspopup="true" >
                             <a  href="../components/calendar/external-events.html" class="m-menu__link ">
                                 <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                     <span></span>
                                 </i>
                                 <span class="m-menu__link-text">
                                             External Events
                                         </span>
                             </a>
                         </li>
                         <li class="m-menu__item " aria-haspopup="true" >
                             <a  href="../components/calendar/background-events.html" class="m-menu__link ">
                                 <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                     <span></span>
                                 </i>
                                 <span class="m-menu__link-text">
                                             Background Events
                                         </span>
                             </a>
                         </li>
                     </ul>
                 </div>
             </li>--}}


            {{--<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                <a  href="#" class="m-menu__link m-menu__toggle">
                    <i class="m-menu__link-icon flaticon-diagram"></i>
                    <span class="m-menu__link-text">
                                Charts
                            </span>
                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                </a>
                <div class="m-menu__submenu">
                    <span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                            <a  href="#" class="m-menu__link ">
                                        <span class="m-menu__link-text">
                                            Charts
                                        </span>
                            </a>
                        </li>
                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                            <a  href="#" class="m-menu__link m-menu__toggle">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                            amCharts
                                        </span>
                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                            </a>
                            <div class="m-menu__submenu">
                                <span class="m-menu__arrow"></span>
                                <ul class="m-menu__subnav">
                                    <li class="m-menu__item " aria-haspopup="true" >
                                        <a  href="../components/charts/amcharts/charts.html" class="m-menu__link ">
                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                <span></span>
                                            </i>
                                            <span class="m-menu__link-text">
                                                        amCharts Charts
                                                    </span>
                                        </a>
                                    </li>
                                    <li class="m-menu__item " aria-haspopup="true" >
                                        <a  href="../components/charts/amcharts/stock-charts.html" class="m-menu__link ">
                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                <span></span>
                                            </i>
                                            <span class="m-menu__link-text">
                                                        amCharts Stock Charts
                                                    </span>
                                        </a>
                                    </li>
                                    <li class="m-menu__item " aria-haspopup="true" >
                                        <a  href="../components/charts/amcharts/maps.html" class="m-menu__link ">
                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                <span></span>
                                            </i>
                                            <span class="m-menu__link-text">
                                                        amCharts Maps
                                                    </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true" >
                            <a  href="../components/charts/flotcharts.html" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                            Flot Charts
                                        </span>
                            </a>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true" >
                            <a  href="../components/charts/google-charts.html" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                            Google Charts
                                        </span>
                            </a>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true" >
                            <a  href="../components/charts/morris-charts.html" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                            Morris Charts
                                        </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>--}}




            {{-- <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                 <a  href="#" class="m-menu__link m-menu__toggle">
                     <i class="m-menu__link-icon flaticon-placeholder-1"></i>
                     <span class="m-menu__link-text">
                                 Maps
                             </span>
                     <i class="m-menu__ver-arrow la la-angle-right"></i>
                 </a>
                 <div class="m-menu__submenu">
                     <span class="m-menu__arrow"></span>
                     <ul class="m-menu__subnav">
                         <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                             <a  href="#" class="m-menu__link ">
                                         <span class="m-menu__link-text">
                                             Maps
                                         </span>
                             </a>
                         </li>
                         <li class="m-menu__item " aria-haspopup="true" >
                             <a  href="../components/maps/google-maps.html" class="m-menu__link ">
                                 <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                     <span></span>
                                 </i>
                                 <span class="m-menu__link-text">
                                             Google Maps
                                         </span>
                             </a>
                         </li>
                         <li class="m-menu__item " aria-haspopup="true" >
                             <a  href="../components/maps/jqvmap.html" class="m-menu__link ">
                                 <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                     <span></span>
                                 </i>
                                 <span class="m-menu__link-text">
                                             JQVMap
                                         </span>
                             </a>
                         </li>
                     </ul>
                 </div>
             </li>--}}









       <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                <a  href="#" class="m-menu__link m-menu__toggle">
                    <i class="m-menu__link-icon flaticon-signs-2"></i>
                    <span class="m-menu__link-text">
                                Utils
                            </span>
                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                </a>
                <div class="m-menu__submenu">
                    <span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                            <a  href="#" class="m-menu__link ">
                                        <span class="m-menu__link-text">
                                            Utils
                                        </span>
                            </a>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true" >
                            <a  href="../components/utils/session-timeout.html" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                            Session Timeout
                                        </span>
                            </a>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true" >
                            <a  href="../components/utils/idle-timer.html" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                            Idle Timer
                                        </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>




            <li class="m-menu__section">
                <h4 class="m-menu__section-text">
                    Snippets
                </h4>
                <i class="m-menu__section-icon flaticon-more-v3"></i>
            </li>




        </ul>
    </div>
    <!-- END: Aside Menu -->
</div>
<!-- END: Left Aside -->