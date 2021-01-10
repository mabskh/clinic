@extends('admin.layouts.admin')

@section('title')
    @php echo $title = 'ملف المريض الطبي | ' @endphp {{ $patient->name }}
@endsection


@section('content')

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">

        <div class="d-flex flex-column-fluid mb-20 ">
            <!--begin::Container-->
            <div class="container">
                <div class="card card-custom gutter-b  ">
                    <!--begin::Card-->
                    <div class="card card-custom card-sticky sticky"  id="kt_page_sticky_card">
                        <div class="card-header card card-custom card-shadowless bg-white " >

                            <div class=" container d-flex  align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                                <!--begin: Pic-->
                                <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                                    <div class="symbol border m-2 p-2 symbol-50 symbol-lg-90" >
                                        <img alt="Pic" src="{{ asset('assets/images/patients/7BDTY7JtyjaWuJctnwhufacxlxzeKBJuUUkXPjQY.jpeg') }}">
                                    </div>
                                </div>
                                <!--end: Pic-->
                                <!--begin: Info-->
                                <div class="flex-grow-1">
                                    <!--begin: Title-->
                                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                                        <div class="mr-2">
                                            <!--begin::Name-->
                                            <a href="#" class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold pt-3 mr-3">
                                                {{ $patient->name }}  <i class="flaticon2-correct text-success icon-md ml-2"></i></a>
                                            <!--end::Name-->
                                            <!--begin::Contacts-->
                                            <div class="d-flex flex-wrap mt-4 mb-3 ">
                                                <a href="#" class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
															<span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
																<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Mail-notification.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"></rect>
																		<path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000"></path>
																		<circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5"></circle>
																	</g>
																</svg>
                                                                <!--end::Svg Icon-->
                                                                </span>
                                                </a>
                                                <a href="#" class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
															<span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
																<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Lock.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<mask fill="white">
																			<use xlink:href="#path-1"></use>
																		</mask>
																		<g></g>
																		<path d="M7,10 L7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 L17,10 L18,10 C19.1045695,10 20,10.8954305 20,12 L20,18 C20,19.1045695 19.1045695,20 18,20 L6,20 C4.8954305,20 4,19.1045695 4,18 L4,12 C4,10.8954305 4.8954305,10 6,10 L7,10 Z M12,5 C10.3431458,5 9,6.34314575 9,8 L9,10 L15,10 L15,8 C15,6.34314575 13.6568542,5 12,5 Z" fill="#000000"></path>
																	</g>
																</svg>
                                                                <!--end::Svg Icon-->
															</span>dddd
                                                </a>
                                                <a href="#" class="text-muted text-hover-primary font-weight-bold">
															<span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
																<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Map/Marker2.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"></rect>
																		<path d="M9.82829464,16.6565893 C7.02541569,15.7427556 5,13.1079084 5,10 C5,6.13400675 8.13400675,3 12,3 C15.8659932,3 19,6.13400675 19,10 C19,13.1079084 16.9745843,15.7427556 14.1717054,16.6565893 L12,21 L9.82829464,16.6565893 Z M12,12 C13.1045695,12 14,11.1045695 14,10 C14,8.8954305 13.1045695,8 12,8 C10.8954305,8 10,8.8954305 10,10 C10,11.1045695 10.8954305,12 12,12 Z" fill="#000000"></path>
																	</g>
																</svg>
                                                                <!--end::Svg Icon-->
															</span></a>
                                            </div>

                                            <!--end::Contacts-->
                                        </div>

                                        <div class="my-lg-0 my-1">

                                            <span class="btn btn-sm btn-text btn-light-primary text-uppercase font-weight-bold mr-10"><span class="mx-2" style="color: #0c0e1a">تاريخ الانتساب :</span></span>

                                            <a href="#" class="btn btn-sm btn-light-success font-weight-bolder text-uppercase mr-1">Reports</a>
                                            <a href="#" class="btn btn-sm btn-info font-weight-bolder text-uppercase mr-1">New
                                                Task</a>

                                            <div class="dropdown dropdown-inline mr-1">
                                                <a href="#" class="btn btn-primary btn-sm font-weight-bolder text-uppercase dropdown-toggle" data-toggle="dropdown" aria-expanded="false">export</a>
                                                <div class="dropdown-menu dropdown-menu-md dropdown-menu-right" style="">
                                                    <!--begin::Navigation-->
                                                    <ul class="navi navi-hover">
                                                        <li class="navi-header font-weight-bold py-4">
                                                            <span class="font-size-lg">Choose Label:</span>
                                                            <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="" data-original-title="Click to learn more..."></i>
                                                        </li>
                                                        <li class="navi-separator mb-3 opacity-70"></li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
																			<span class="navi-text">
																				<span class="label label-xl label-inline label-light-success">Customer</span>
																			</span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
																			<span class="navi-text">
																				<span class="label label-xl label-inline label-light-danger">Partner</span>
																			</span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
																			<span class="navi-text">
																				<span class="label label-xl label-inline label-light-warning">Suplier</span>
																			</span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
																			<span class="navi-text">
																				<span class="label label-xl label-inline label-light-primary">Member</span>
																			</span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
																			<span class="navi-text">
																				<span class="label label-xl label-inline label-light-dark">Staff</span>
																			</span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-separator mt-3 opacity-70"></li>
                                                        <li class="navi-footer py-4">
                                                            <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                                                <i class="ki ki-plus icon-sm"></i>Add new</a>
                                                        </li>
                                                    </ul>
                                                    <!--end::Navigation-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <!--end: Title-->
                                    <!--begin: Content-->

                                    <div class="d-flex align-items-center flex-wrap justify-content-between">
                                        <div class="d-flex align-items-center flex-lg-fill mt-1  mb-1 ">

                                            <a href="#" class="btn btn-facebook btn-sm font-weight-bold mr-1" id="personal">البيانات الشخصية</a>
                                            <a href="#" class="btn btn-facebook btn-sm font-weight-bold mr-1" id="attachments">المرفقات</a>
                                            <a href="#" class="btn btn-facebook btn-sm font-weight-bold mr-1" id="status">جهات الاتصال</a>
                                            <a href="#" class="btn btn-facebook btn-sm font-weight-bold mr-1" id="reports">التقارير</a>

                                        </div>

                                        <div class="d-flex align-items-center">
                                            <!--begin::Daterange-->
                                            <a href="#" class="btn btn-light btn-sm font-weight-bold mr-2" id="kt_dashboard_daterangepicker" data-toggle="tooltip" title="" data-placement="left" data-original-title="Select dashboard daterange">
                                                <span class="text-muted font-weight-bold mr-2" id="kt_dashboard_daterangepicker_title">Today:</span>
                                                <span class="text-primary font-weight-bold" id="kt_dashboard_daterangepicker_date">Jan 4</span>
                                                <span class="svg-icon svg-icon-sm svg-icon-primary ml-1">
											<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Chat-check.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"></rect>
													<path d="M4.875,20.75 C4.63541667,20.75 4.39583333,20.6541667 4.20416667,20.4625 L2.2875,18.5458333 C1.90416667,18.1625 1.90416667,17.5875 2.2875,17.2041667 C2.67083333,16.8208333 3.29375,16.8208333 3.62916667,17.2041667 L4.875,18.45 L8.0375,15.2875 C8.42083333,14.9041667 8.99583333,14.9041667 9.37916667,15.2875 C9.7625,15.6708333 9.7625,16.2458333 9.37916667,16.6291667 L5.54583333,20.4625 C5.35416667,20.6541667 5.11458333,20.75 4.875,20.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
													<path d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z" fill="#000000"></path>
												</g>
											</svg>
                                                    <!--end::Svg Icon-->
										</span>
                                            </a>
                                            <!--end::Daterange-->
                                            <!--begin::Actions-->
                                            <a href="#" class="btn btn-light btn-hover-primary btn-sm btn-icon mr-2">
                                                <i class="flaticon2-file text-muted"></i>
                                            </a>
                                            <a href="#" class="btn btn-light btn-hover-primary btn-sm btn-icon mr-2">
                                                <i class="flaticon-download-1 text-muted"></i>
                                            </a>
                                            <a href="#" class="btn btn-light btn-hover-primary btn-sm btn-icon mr-2">
                                                <i class="flaticon2-fax text-muted"></i>
                                            </a>
                                            <a href="#" class="btn btn-light btn-hover-primary btn-sm btn-icon mr-2">
                                                <i class="flaticon2-settings text-muted"></i>
                                            </a>
                                            <!--end::Actions-->
                                            <!--begin::Dropdowns-->
                                            <div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
                                                <a href="#" class="btn btn-icon btn-light-primary btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="ki ki-plus icon-1x"></i>
                                                </a>
                                                <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                                    <!--begin::Navigation-->
                                                    <ul class="navi navi-hover">
                                                        <li class="navi-header pb-1">
                                                            <span class="text-primary text-uppercase font-weight-bold font-size-sm">Add new:</span>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
														<span class="navi-icon">
															<i class="flaticon2-shopping-cart-1"></i>
														</span>
                                                                <span class="navi-text">Order</span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
														<span class="navi-icon">
															<i class="flaticon2-calendar-8"></i>
														</span>
                                                                <span class="navi-text">Event</span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
														<span class="navi-icon">
															<i class="flaticon2-graph-1"></i>
														</span>
                                                                <span class="navi-text">Report</span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
														<span class="navi-icon">
															<i class="flaticon2-rocket-1"></i>
														</span>
                                                                <span class="navi-text">Post</span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
														<span class="navi-icon">
															<i class="flaticon2-writing"></i>
														</span>
                                                                <span class="navi-text">File</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <!--end::Navigation-->
                                                </div>
                                            </div>
                                            <!--end::Dropdowns-->
                                        </div>
                                    </div>
                                    <!--end: Content-->
                                </div>
                                <!--end: Info-->
                            </div>


                        </div>
                        <div class="separator separator-solid "></div>
                    </div>
                    <!--end::Card-->
                </div>



                <div class="row  m-1">

                    <div class="d-flex flex-row-fluid bgi-size-cover bgi-position-center bg-dark-o-15 p-1 " >

                        <div class="container">
                            <!--begin::Subheader-->
                            <div class="subheader  py-lg-4 border-bottom border-white py-2  subheader-transparent" id="kt_subheader">

                                <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap ">
                                    <!--begin::Info-->

                                    <div class="d-flex align-items-baseline flex-wrap mr-5">
                                        <!--begin::Page Title-->
                                        <h6 class="text-dark font-weight-bold my-1 mr-5" >
                                            <span style="color: red">   {{ $title }} </span>
                                            <span style="color: black"> | </span>
                                            <span style="color: royalblue"> </span>
                                        </h6>
                                        <!--end::Page Title-->
                                        <!--begin::Breadcrumb-->
                                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                                            <li class="breadcrumb-item">
                                                <a href="{{ route('home') }}" class="text-muted">الرئيسية</a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="{{ route('admin.statics.index') }}" class="text-muted">ثوابت النظام</a>
                                            </li>
                                        </ul>
                                        <!--end::Breadcrumb-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Toolbar-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Daterange-->
                                        <a href="#" class="btn btn-light btn-sm font-weight-bold mr-2" id="kt_dashboard_daterangepicker" data-toggle="tooltip" title="" data-placement="left" data-original-title="Select dashboard daterange">
                                            <span class="text-muted font-weight-bold mr-2" id="kt_dashboard_daterangepicker_title">Today:</span>
                                            <span class="text-primary font-weight-bold" id="kt_dashboard_daterangepicker_date">Jan 4</span>
                                            <span class="svg-icon svg-icon-sm svg-icon-primary ml-1">
											<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Chat-check.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"></rect>
													<path d="M4.875,20.75 C4.63541667,20.75 4.39583333,20.6541667 4.20416667,20.4625 L2.2875,18.5458333 C1.90416667,18.1625 1.90416667,17.5875 2.2875,17.2041667 C2.67083333,16.8208333 3.29375,16.8208333 3.62916667,17.2041667 L4.875,18.45 L8.0375,15.2875 C8.42083333,14.9041667 8.99583333,14.9041667 9.37916667,15.2875 C9.7625,15.6708333 9.7625,16.2458333 9.37916667,16.6291667 L5.54583333,20.4625 C5.35416667,20.6541667 5.11458333,20.75 4.875,20.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
													<path d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z" fill="#000000"></path>
												</g>
											</svg>
                                                <!--end::Svg Icon-->
										</span>
                                        </a>
                                        <!--end::Daterange-->
                                        <!--begin::Actions-->
                                        <a href="#" class="btn btn-light btn-hover-primary btn-sm btn-icon mr-2">
                                            <i class="flaticon2-file text-muted"></i>
                                        </a>
                                        <a href="#" class="btn btn-light btn-hover-primary btn-sm btn-icon mr-2">
                                            <i class="flaticon-download-1 text-muted"></i>
                                        </a>
                                        <a href="#" class="btn btn-light btn-hover-primary btn-sm btn-icon mr-2">
                                            <i class="flaticon2-fax text-muted"></i>
                                        </a>
                                        <a href="#" class="btn btn-light btn-hover-primary btn-sm btn-icon mr-2">
                                            <i class="flaticon2-settings text-muted"></i>
                                        </a>
                                        <!--end::Actions-->
                                        <!--begin::Dropdowns-->
                                        <div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
                                            <a href="#" class="btn btn-icon btn-light-primary btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ki ki-plus icon-1x"></i>
                                            </a>
                                            <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                                <!--begin::Navigation-->
                                                <ul class="navi navi-hover">
                                                    <li class="navi-header pb-1">
                                                        <span class="text-primary text-uppercase font-weight-bold font-size-sm">Add new:</span>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
														<span class="navi-icon">
															<i class="flaticon2-shopping-cart-1"></i>
														</span>
                                                            <span class="navi-text">Order</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
														<span class="navi-icon">
															<i class="flaticon2-calendar-8"></i>
														</span>
                                                            <span class="navi-text">Event</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
														<span class="navi-icon">
															<i class="flaticon2-graph-1"></i>
														</span>
                                                            <span class="navi-text">Report</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
														<span class="navi-icon">
															<i class="flaticon2-rocket-1"></i>
														</span>
                                                            <span class="navi-text">Post</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
														<span class="navi-icon">
															<i class="flaticon2-writing"></i>
														</span>
                                                            <span class="navi-text">File</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <!--end::Navigation-->
                                            </div>
                                        </div>
                                        <!--end::Dropdowns-->
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                            </div>
                            <!--end::Subheader-->
                            <div class="d-flex align-items-stretch text-center flex-column mx-1  my-3 py-1">

                                <div class="row ">

                                    <div class="col-xl-3">

                                        <div class="card card-custom gutter-b">
                                            <div class="card-header h-auto py-3 border-0">
                                                <div class="card-title">
                                                    <h3 class="card-label text-danger">Important Notice</h3>
                                                </div>
                                                <div class="card-toolbar">
                                                    <span class="label font-weight-bold label label-inline label-light-danger">Now</span>
                                                </div>
                                            </div>
                                            <div class="card-body pt-2">
                                                <p class="text-dark-50">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                                <div class="mt-5">
                                                    <a href="#" class="btn btn-success btn-sm font-weight-bold mr-2">Set up</a>
                                                    <a href="#" class="btn btn-clean btn-sm font-weight-bold">Dismiss</a>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-xl-5">

                                        <div class="card card-custom gutter-b">
                                            <div class="card-header h-auto py-3 border-0">
                                                <div class="card-title">
                                                    <h3 class="card-label text-danger">Important Notice</h3>
                                                </div>
                                                <div class="card-toolbar">
                                                    <span class="label font-weight-bold label label-inline label-light-danger">Now</span>
                                                </div>
                                            </div>
                                            <div class="card-body pt-2">
                                                <p class="text-dark-50">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                                <div class="mt-5">
                                                    <a href="#" class="btn btn-success btn-sm font-weight-bold mr-2">Set up</a>
                                                    <a href="#" class="btn btn-clean btn-sm font-weight-bold">Dismiss</a>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-xl-4">

                                        <div class="card card-custom gutter-b">
                                            <div class="card-header h-auto py-3 border-0">
                                                <div class="card-title">
                                                    <h3 class="card-label text-danger">Important Notice</h3>
                                                </div>
                                                <div class="card-toolbar">
                                                    <span class="label font-weight-bold label label-inline label-light-danger">Now</span>
                                                </div>
                                            </div>
                                            <div class="card-body pt-2">
                                                <p class="text-dark-50">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                                <div class="mt-5">
                                                    <a href="#" class="btn btn-success btn-sm font-weight-bold mr-2">Set up</a>
                                                    <a href="#" class="btn btn-clean btn-sm font-weight-bold">Dismiss</a>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>


        </div>


    </div>


@endsection
@section('script')

    <script>

        $("#personal").click(function() {
            $("#_per").fadeToggle();
        });

        $("#attachments").click(function() {
            $("#_att").fadeToggle();
        });

        $("#status").click(function() {
            $("#_status").fadeToggle();
        });

        $("#reports").click(function() {
            $("#_reports").fadeToggle();
        });
    </script>

    <script>

        var card = new KTCard('kt_card_4');
        var card = new KTCard('kt_card_5');
        var card = new KTCard('kt_card_6');
        var card = new KTCard('kt_card_7');

        // Toggle event handlers
        card.on('beforeCollapse', function (card) {
            setTimeout(function () {
                toastr.info('Before collapse event fired!');
            }, 100);
        });

        card.on('afterCollapse', function (card) {
            setTimeout(function () {
                toastr.warning('Before collapse event fired!');
            }, 2000);
        });

        card.on('beforeExpand', function (card) {
            setTimeout(function () {
                toastr.info('Before expand event fired!');
            }, 100);
        });

        card.on('afterExpand', function (card) {
            setTimeout(function () {
                toastr.warning('After expand event fired!');
            }, 2000);
        });

        // Remove event handlers
        card.on('beforeRemove', function (card) {
            toastr.info('Before remove event fired!');

            return confirm('Are you sure to remove this card ?'); // remove card after user confirmation
        });

        card.on('afterRemove', function (card) {
            setTimeout(function () {
                toastr.warning('After remove event fired!');
            }, 2000);
        });

        // Reload event handlers
        card.on('reload', function (card) {
            toastr.info('Leload event fired!');

            KTApp.block(card.getSelf(), {
                overlayColor: '#ffffff',
                type: 'loader',
                state: 'primary',
                opacity: 0.3,
                size: 'lg'
            });
            // update the content here
            setTimeout(function () {
                KTApp.unblock(card.getSelf());
            }, 2000);
        });
    </script>
@endsection
