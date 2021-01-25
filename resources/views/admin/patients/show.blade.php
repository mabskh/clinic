@extends('admin.layouts.admin')

@section('title')
    ملف المريض
@endsection

@section('style')
    {{-- <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&amp;l='+l:'';j.async=true;j.src= '../../../../../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f); })(window,document,'script','dataLayer','GTM-5FS8GGP');</script>
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.rtl9cd7.css?v=7.1.5') }}" rel="stylesheet" type="text/css" />
     --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.css"/>

@endsection
@section('content')

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-4 subheader-transparent" id="kt_subheader">

            <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->

                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h6 class="text-dark font-weight-bold my-1 mr-5">
                        <span style="color: red"> ملف المريض  </span>
                        <span style="color: black"> | </span>
                        <span style="color: royalblue">  </span>
                    </h6>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="" class="text-muted">Subheaders</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="" class="text-muted">Classic</a>
                        </li>
                    </ul>
                    <!--end::Breadcrumb-->
                </div>

                <div class="d-flex align-items-center flex-wrap mr-2">
                    <!--begin::Dropdowns-->
                    <div class="input-group input-group-sm input-group max-w-lg-175px">
                        <input type="text" class="form-control  pl-4" placeholder="بحث ..">
                        <div class="input-group-append">
											<span class="input-group-text">
												<span class="svg-icon svg-icon-md">
													<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Search.svg-->
													<svg xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                         height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none"
                                                           fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24"></rect>
															<path
                                                                d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                                fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
															<path
                                                                d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                                fill="#000000" fill-rule="nonzero"></path>
														</g>
													</svg>
                                                    <!--end::Svg Icon-->
												</span>
											</span>
                        </div>
                    </div>
                    <!--end::Dropdowns-->
                </div>
                <!--end::Info-->
                <!--begin::Toolbar-->
                <div class="d-flex align-items-center">
                    <!--begin::Daterange-->
                    <a href="#" class="btn btn-light btn-sm font-weight-bold mr-2" id="kt_dashboard_daterangepicker"
                       data-toggle="tooltip" title="" data-placement="left"
                       data-original-title="Select dashboard daterange">
                        <span class="text-muted font-weight-bold mr-2"
                              id="kt_dashboard_daterangepicker_title">Today:</span>
                        <span class="text-primary font-weight-bold" id="kt_dashboard_daterangepicker_date">Jan 4</span>
                        <span class="svg-icon svg-icon-sm svg-icon-primary ml-1">
											<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Chat-check.svg-->
											<svg xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                 viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"></rect>
													<path
                                                        d="M4.875,20.75 C4.63541667,20.75 4.39583333,20.6541667 4.20416667,20.4625 L2.2875,18.5458333 C1.90416667,18.1625 1.90416667,17.5875 2.2875,17.2041667 C2.67083333,16.8208333 3.29375,16.8208333 3.62916667,17.2041667 L4.875,18.45 L8.0375,15.2875 C8.42083333,14.9041667 8.99583333,14.9041667 9.37916667,15.2875 C9.7625,15.6708333 9.7625,16.2458333 9.37916667,16.6291667 L5.54583333,20.4625 C5.35416667,20.6541667 5.11458333,20.75 4.875,20.75 Z"
                                                        fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
													<path
                                                        d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z"
                                                        fill="#000000"></path>
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
                    <div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left"
                         data-original-title="Quick actions">
                        <a href="#" class="btn btn-icon btn-light-primary btn-sm" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="ki ki-plus icon-1x"></i>
                        </a>
                        <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                            <!--begin::Navigation-->
                            <ul class="navi navi-hover">
                                <li class="navi-header pb-1">
                                    <span
                                        class="text-primary text-uppercase font-weight-bold font-size-sm">Add new:</span>
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
        @include('admin.includes.alerts.error')
        @include('admin.includes.alerts.success')

        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">

                <div class="card card-custom gutter-b ">

                    <div class="card-body pb-2">
                        <div class="d-flex">
                            <!--begin: Pic-->
                            <div class="flex-shrink-0  mr-7 mt-lg-0 mt-3">
                                <div class="symbol border p-2 symbol-50 symbol-lg-90">
                                    <img alt="Pic" src="">
                                </div>
                            </div>
                            <!--end: Pic-->
                            <!--begin: Info-->
                            <div class="flex-grow-1">
                                <!--begin: Title-->
                                <div class="d-flex align-items-center justify-content-between flex-wrap">
                                    <div class="mr-2">
                                        <!--begin::Name-->
                                        <a href="#"
                                           class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3">
                                            {{ $patient->name }}
                                            <i class="flaticon2-correct text-success icon-md ml-2"></i></a>
                                        <!--end::Name-->
                                        <!--begin::Contacts-->
                                        <div class="d-flex flex-wrap mt-4 mb-3 ">
                                            <a href="#"
                                               class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
															<span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
																<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Mail-notification.svg-->
																<svg xmlns="http://www.w3.org/2000/svg"
                                                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                     width="24px" height="24px" viewBox="0 0 24 24"
                                                                     version="1.1">
																	<g stroke="none" stroke-width="1" fill="none"
                                                                       fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"></rect>
																		<path
                                                                            d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z"
                                                                            fill="#000000"></path>
																		<circle fill="#000000" opacity="0.3" cx="19.5"
                                                                                cy="17.5" r="2.5"></circle>
																	</g>
																</svg>
                                                                <!--end::Svg Icon-->
                                                                </span>{{ $email[0]->value }}
                                            </a>
                                            <a href="#"
                                               class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
															<span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
																<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Lock.svg-->
																<svg xmlns="http://www.w3.org/2000/svg"
                                                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                     width="24px" height="24px" viewBox="0 0 24 24"
                                                                     version="1.1">
																	<g stroke="none" stroke-width="1" fill="none"
                                                                       fill-rule="evenodd">
																		<mask fill="white">
																			<use xlink:href="#path-1"></use>
																		</mask>
																		<g></g>
																		<path
                                                                            d="M7,10 L7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 L17,10 L18,10 C19.1045695,10 20,10.8954305 20,12 L20,18 C20,19.1045695 19.1045695,20 18,20 L6,20 C4.8954305,20 4,19.1045695 4,18 L4,12 C4,10.8954305 4.8954305,10 6,10 L7,10 Z M12,5 C10.3431458,5 9,6.34314575 9,8 L9,10 L15,10 L15,8 C15,6.34314575 13.6568542,5 12,5 Z"
                                                                            fill="#000000"></path>
																	</g>
																</svg>
                                                                <!--end::Svg Icon-->
															</span>{{ $patient->work_place }}
                                            </a>
                                            <a href="#" class="text-muted text-hover-primary font-weight-bold">
															<span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
																<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Map/Marker2.svg-->
																<svg xmlns="http://www.w3.org/2000/svg"
                                                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                     width="24px" height="24px" viewBox="0 0 24 24"
                                                                     version="1.1">
																	<g stroke="none" stroke-width="1" fill="none"
                                                                       fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"></rect>
																		<path
                                                                            d="M9.82829464,16.6565893 C7.02541569,15.7427556 5,13.1079084 5,10 C5,6.13400675 8.13400675,3 12,3 C15.8659932,3 19,6.13400675 19,10 C19,13.1079084 16.9745843,15.7427556 14.1717054,16.6565893 L12,21 L9.82829464,16.6565893 Z M12,12 C13.1045695,12 14,11.1045695 14,10 C14,8.8954305 13.1045695,8 12,8 C10.8954305,8 10,8.8954305 10,10 C10,11.1045695 10.8954305,12 12,12 Z"
                                                                            fill="#000000"></path>
																	</g>
																</svg>
                                                                <!--end::Svg Icon-->
															</span>{{ $patient->birth_place }}</a>
                                        </div>

                                        <!--end::Contacts-->
                                    </div>

                                    <div class="my-lg-0 my-1">

                                        <span
                                            class="btn btn-sm btn-text btn-light-primary text-uppercase font-weight-bold mr-10"><span
                                                class="mx-2" style="color: #0c0e1a">تاريخ الانتساب :</span> {{ $patient->created_at->format('d-m-Y') }}</span>

                                        <a href="#"
                                           class="btn btn-sm btn-light-success font-weight-bolder text-uppercase mr-1">Reports</a>
                                        <a href="#" class="btn btn-sm btn-info font-weight-bolder text-uppercase mr-1">New
                                            Task</a>

                                        <div class="dropdown dropdown-inline mr-1">
                                            <a href="#"
                                               class="btn btn-primary btn-sm font-weight-bolder text-uppercase dropdown-toggle"
                                               data-toggle="dropdown" aria-expanded="false">export</a>
                                            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right" style="">
                                                <!--begin::Navigation-->
                                                <ul class="navi navi-hover">
                                                    <li class="navi-header font-weight-bold py-4">
                                                        <span class="font-size-lg">Choose Label:</span>
                                                        <i class="flaticon2-information icon-md text-muted"
                                                           data-toggle="tooltip" data-placement="right" title=""
                                                           data-original-title="Click to learn more..."></i>
                                                    </li>
                                                    <li class="navi-separator mb-3 opacity-70"></li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
																			<span class="navi-text">
																				<span
                                                                                    class="label label-xl label-inline label-light-success">Customer</span>
																			</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
																			<span class="navi-text">
																				<span
                                                                                    class="label label-xl label-inline label-light-danger">Partner</span>
																			</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
																			<span class="navi-text">
																				<span
                                                                                    class="label label-xl label-inline label-light-warning">Suplier</span>
																			</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
																			<span class="navi-text">
																				<span
                                                                                    class="label label-xl label-inline label-light-primary">Member</span>
																			</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
																			<span class="navi-text">
																				<span
                                                                                    class="label label-xl label-inline label-light-dark">Staff</span>
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

                                        <a href="#" class="btn btn-facebook btn-sm font-weight-bold mr-1" id="personal">البيانات
                                            الشخصية</a>
                                        <a href="#" class="btn btn-facebook btn-sm font-weight-bold mr-1"
                                           id="attachments">المرفقات</a>
                                        <a href="#" class="btn btn-facebook btn-sm font-weight-bold mr-1" id="status">جهات
                                            الاتصال</a>
                                        <a href="#" class="btn btn-facebook btn-sm font-weight-bold mr-1" id="reports">التقارير</a>
                                    </div>


                                </div>
                                <!--end: Content-->
                            </div>
                            <!--end: Info-->
                        </div>

                    </div>

                </div>

                <!--begin::Education-->
                <div class="d-flex flex-row">

                    <!--begin::Aside الجهة اليمنى -->
                    <div class="flex-row offcanvas-mobile w-260px w-xl-300px" id="kt_profile_aside">
                        <!--begin::Nav Panel Widget 2-->
                        <div class="card card-custom gutter-b">
                            <!--begin::Body-->
                            <div class="card-body">
                                <!--begin::Wrapper-->
                                <div class="d-flex justify-content-between flex-column pt-4 h-100">
                                    <!--begin::Container-->
                                    <div class="pb-5">
                                        <!--begin::Header-->
                                        <div class="d-flex flex-column flex-center">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-120 symbol-circle symbol-success overflow-hidden">
                                                <span class="symbol-label">
                                                    <img src="{{ $patient->photo }}" class="h-75 align-self-end" alt="">
                                                </span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Username-->
                                            <a href="#"
                                               class="card-title font-weight-bolder text-dark-75 text-hover-primary font-size-h4 m-0 pt-7 pb-1">{{ $patient->name }}</a>
                                            <!--end::Username-->
                                            <!--begin::Info-->
                                            <div
                                                class="font-weight-bold text-dark-50 font-size-sm pb-6">{{ $patient->work_place }}</div>

                                            <div class="d-flex flex-wrap">

                                                <a href="#"
                                                   class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
															<span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
																<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Lock.svg-->
																<svg xmlns="http://www.w3.org/2000/svg"
                                                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                     width="24px" height="24px" viewBox="0 0 24 24"
                                                                     version="1.1">
																	<g stroke="none" stroke-width="1" fill="none"
                                                                       fill-rule="evenodd">
																		<mask fill="white">
																			<use xlink:href="#path-1"></use>
																		</mask>
																		<g></g>
																		<path
                                                                            d="M7,10 L7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 L17,10 L18,10 C19.1045695,10 20,10.8954305 20,12 L20,18 C20,19.1045695 19.1045695,20 18,20 L6,20 C4.8954305,20 4,19.1045695 4,18 L4,12 C4,10.8954305 4.8954305,10 6,10 L7,10 Z M12,5 C10.3431458,5 9,6.34314575 9,8 L9,10 L15,10 L15,8 C15,6.34314575 13.6568542,5 12,5 Z"
                                                                            fill="#000000"></path>
																	</g>
																</svg>
                                                                <!--end::Svg Icon-->
															</span>PR Manager</a>
                                                <a href="#" class="text-muted text-hover-primary font-weight-bold">
															<span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
																<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Map/Marker2.svg-->
																<svg xmlns="http://www.w3.org/2000/svg"
                                                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                     width="24px" height="24px" viewBox="0 0 24 24"
                                                                     version="1.1">
																	<g stroke="none" stroke-width="1" fill="none"
                                                                       fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"></rect>
																		<path
                                                                            d="M9.82829464,16.6565893 C7.02541569,15.7427556 5,13.1079084 5,10 C5,6.13400675 8.13400675,3 12,3 C15.8659932,3 19,6.13400675 19,10 C19,13.1079084 16.9745843,15.7427556 14.1717054,16.6565893 L12,21 L9.82829464,16.6565893 Z M12,12 C13.1045695,12 14,11.1045695 14,10 C14,8.8954305 13.1045695,8 12,8 C10.8954305,8 10,8.8954305 10,10 C10,11.1045695 10.8954305,12 12,12 Z"
                                                                            fill="#000000"></path>
																	</g>
																</svg>
                                                                <!--end::Svg Icon-->
															</span>Melbourne</a>
                                            </div>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="pt-1">
                                            <!--begin::Text-->
                                            <p class="text-dark-75 font-weight-nirmal font-size-lg m-0 pb-7">Outlines
                                                keep you honest. If poorly thought-out metaphors driving or create keep
                                                structure</p>
                                            <!--end::Text-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center pb-9">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-45 symbol-light mr-4">
																	<span class="symbol-label">
																		<span
                                                                            class="svg-icon svg-icon-2x svg-icon-dark-50">
																			<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Media/Equalizer.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg"
                                                                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                 width="24px" height="24px"
                                                                                 viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1"
                                                                                   fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24"
                                                                                          height="24"></rect>
																					<rect fill="#000000" opacity="0.3"
                                                                                          x="13" y="4" width="3"
                                                                                          height="16" rx="1.5"></rect>
																					<rect fill="#000000" x="8" y="9"
                                                                                          width="3" height="11"
                                                                                          rx="1.5"></rect>
																					<rect fill="#000000" x="18" y="11"
                                                                                          width="3" height="9"
                                                                                          rx="1.5"></rect>
																					<rect fill="#000000" x="3" y="13"
                                                                                          width="3" height="7"
                                                                                          rx="1.5"></rect>
																				</g>
																			</svg>
                                                                            <!--end::Svg Icon-->
																		</span>
																	</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Text-->
                                                <div class="d-flex flex-column flex-grow-1">
                                                    <a href="#"
                                                       class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">الملف
                                                        الشخصي</a>
                                                    <span
                                                        class="text-muted font-weight-bold">PHP, SQLite, Artisan CLI</span>
                                                </div>
                                                <!--end::Text-->
                                                <!--begin::label-->
                                                <!--                                                <span class="font-weight-bolder label label-xl label-light-success label-inline px-3 py-5 min-w-45px">2.8</span>-->
                                                <!--end::label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center pb-9">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-45 symbol-light mr-4">
																	<span class="symbol-label">
																		<span
                                                                            class="svg-icon svg-icon-2x svg-icon-dark-50">
																			<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg"
                                                                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                 width="24px" height="24px"
                                                                                 viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1"
                                                                                   fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24"
                                                                                          height="24"></rect>
																					<rect fill="#000000" x="4" y="4"
                                                                                          width="7" height="7"
                                                                                          rx="1.5"></rect>
																					<path
                                                                                        d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                                                                                        fill="#000000"
                                                                                        opacity="0.3"></path>
																				</g>
																			</svg>
                                                                            <!--end::Svg Icon-->
																		</span>
																	</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Text-->
                                                <div class="d-flex flex-column flex-grow-1">
                                                    <a href="#"
                                                       class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Modules</a>
                                                    <span class="text-muted font-weight-bold">Successful Fellas</span>
                                                </div>
                                                <!--end::Text-->
                                                <!--begin::label-->
                                                <span
                                                    class="font-weight-bolder label label-xl label-light-danger label-inline px-3 py-5 min-w-45px">7</span>
                                                <!--end::label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center pb-9">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-45 symbol-light mr-4">
																	<span class="symbol-label">
																		<span
                                                                            class="svg-icon svg-icon-2x svg-icon-dark-50">
																			<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Home/Globe.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg"
                                                                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                 width="24px" height="24px"
                                                                                 viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1"
                                                                                   fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24"
                                                                                          height="24"></rect>
																					<path
                                                                                        d="M13,18.9450712 L13,20 L14,20 C15.1045695,20 16,20.8954305 16,22 L8,22 C8,20.8954305 8.8954305,20 10,20 L11,20 L11,18.9448245 C9.02872877,18.7261967 7.20827378,17.866394 5.79372555,16.5182701 L4.73856106,17.6741866 C4.36621808,18.0820826 3.73370941,18.110904 3.32581341,17.7385611 C2.9179174,17.3662181 2.88909597,16.7337094 3.26143894,16.3258134 L5.04940685,14.367122 C5.46150313,13.9156769 6.17860937,13.9363085 6.56406875,14.4106998 C7.88623094,16.037907 9.86320756,17 12,17 C15.8659932,17 19,13.8659932 19,10 C19,7.73468744 17.9175842,5.65198725 16.1214335,4.34123851 C15.6753081,4.01567657 15.5775721,3.39010038 15.903134,2.94397499 C16.228696,2.49784959 16.8542722,2.4001136 17.3003976,2.72567554 C19.6071362,4.40902808 21,7.08906798 21,10 C21,14.6325537 17.4999505,18.4476269 13,18.9450712 Z"
                                                                                        fill="#000000"
                                                                                        fill-rule="nonzero"></path>
																					<circle fill="#000000" opacity="0.3"
                                                                                            cx="12" cy="10"
                                                                                            r="6"></circle>
																				</g>
																			</svg>
                                                                            <!--end::Svg Icon-->
																		</span>
																	</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Text-->
                                                <div class="d-flex flex-column flex-grow-1">
                                                    <a href="#"
                                                       class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Progress</a>
                                                    <span class="text-muted font-weight-bold">Successful Fellas</span>
                                                </div>
                                                <!--end::Text-->
                                                <!--begin::label-->
                                                <span
                                                    class="font-weight-bolder label label-xl label-light-info label-inline py-5 min-w-45px">+23</span>
                                                <!--end::label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--eng::Container-->
                                    <!--begin::Footer-->
                                    <div class="d-flex flex-center" id="kt_sticky_toolbar_chat_toggler_1"
                                         data-toggle="tooltip" title="" data-placement="right"
                                         data-original-title="Chat Example">
                                        <button class="btn btn-primary font-weight-bolder font-size-sm py-3 px-14"
                                                data-toggle="modal" data-target="#kt_chat_modal">Write a Message
                                        </button>
                                    </div>
                                    <!--end::Footer-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Nav Panel Widget 2-->

                        <!--begin::List Widget 17-->
                        <div class="card card-custom gutter-b">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label font-weight-bolder text-dark">Books to Pickup</span>
                                    <span
                                        class="text-muted mt-3 font-weight-bold font-size-sm">24 Books to Return</span>
                                </h3>
                                <div class="card-toolbar">
                                    <div class="dropdown dropdown-inline" data-toggle="tooltip" title=""
                                         data-placement="left" data-original-title="Quick actions">
                                        <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ki ki-bold-more-hor"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                            <!--begin::Navigation-->
                                            <ul class="navi navi-hover py-5">
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-drop"></i>
																		</span>
                                                        <span class="navi-text">New Group</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-list-3"></i>
																		</span>
                                                        <span class="navi-text">Contacts</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-rocket-1"></i>
																		</span>
                                                        <span class="navi-text">Groups</span>
                                                        <span class="navi-link-badge">
																			<span
                                                                                class="label label-light-primary label-inline font-weight-bold">new</span>
																		</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-bell-2"></i>
																		</span>
                                                        <span class="navi-text">Calls</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-gear"></i>
																		</span>
                                                        <span class="navi-text">Settings</span>
                                                    </a>
                                                </li>
                                                <li class="navi-separator my-3"></li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-magnifier-tool"></i>
																		</span>
                                                        <span class="navi-text">Help</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-bell-2"></i>
																		</span>
                                                        <span class="navi-text">Privacy</span>
                                                        <span class="navi-link-badge">
																			<span
                                                                                class="label label-light-danger label-rounded font-weight-bold">5</span>
																		</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!--end::Navigation-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-4">
                                <!--begin::Container-->
                                <div>
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-8">
                                        <!--begin::Symbol-->
                                        <div class="symbol mr-5 pt-1">
                                            <div class="symbol-label min-w-65px min-h-100px"
                                                 style="background-image: url('../../../../../../theme/html/demo1/dist/assets/media/books/4.png')"></div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Info-->
                                        <div class="d-flex flex-column">
                                            <!--begin::Title-->
                                            <a href="#"
                                               class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">Darius
                                                The Great</a>
                                            <!--end::Title-->
                                            <!--begin::Text-->
                                            <span class="text-muted font-weight-bold font-size-sm pb-4">Amazing Short Story About
															<br>Darius greatness</span>
                                            <!--end::Text-->
                                            <!--begin::Action-->
                                            <div>
                                                <button type="button"
                                                        class="btn btn-light font-weight-bolder font-size-sm py-2">Book
                                                    Now
                                                </button>
                                            </div>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-8">
                                        <!--begin::Symbol-->
                                        <div class="symbol mr-5 pt-1">
                                            <div class="symbol-label min-w-65px min-h-100px"
                                                 style="background-image: url('../../../../../../theme/html/demo1/dist/assets/media/books/12.png')"></div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Info-->
                                        <div class="d-flex flex-column">
                                            <!--begin::Title-->
                                            <a href="#"
                                               class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">Wild
                                                Blues</a>
                                            <!--end::Title-->
                                            <!--begin::Text-->
                                            <span class="text-muted font-weight-bold font-size-sm pb-4">Amazing Short Story About
															<br>Darius greatness</span>
                                            <!--end::Text-->
                                            <!--begin::Action-->
                                            <div>
                                                <button type="button"
                                                        class="btn btn-light font-weight-bolder font-size-sm py-2">Book
                                                    Now
                                                </button>
                                            </div>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Symbol-->
                                        <div class="symbol mr-5 pt-1">
                                            <div class="symbol-label min-w-65px min-h-100px"
                                                 style="background-image: url('../../../../../../theme/html/demo1/dist/assets/media/books/13.png')"></div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Info-->
                                        <div class="d-flex flex-column">
                                            <!--begin::Title-->
                                            <a href="#"
                                               class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">Simple
                                                Thinking</a>
                                            <!--end::Title-->
                                            <!--begin::Text-->
                                            <span class="text-muted font-weight-bold font-size-sm pb-4">Amazing Short Story About
															<br>Darius greatness</span>
                                            <!--end::Text-->
                                            <!--begin::Action-->
                                            <div>
                                                <button type="button"
                                                        class="btn btn-light font-weight-bolder font-size-sm py-2">Book
                                                    Now
                                                </button>
                                            </div>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Container-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::List Widget 17-->

                        <!--begin::List Widget 9-->
                        <div class="card card-custom gutter-b">
                            <!--begin::Header-->
                            <div class="card-header align-items-center border-0 mt-4">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="font-weight-bolder text-dark">My Activity</span>
                                    <span class="text-muted mt-3 font-weight-bold font-size-sm">890,344 Sales</span>
                                </h3>
                                <div class="card-toolbar">
                                    <div class="dropdown dropdown-inline">
                                        <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ki ki-bold-more-hor"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                            <!--begin::Navigation-->
                                            <ul class="navi navi-hover">
                                                <li class="navi-header font-weight-bold py-4">
                                                    <span class="font-size-lg">Choose Label:</span>
                                                    <i class="flaticon2-information icon-md text-muted"
                                                       data-toggle="tooltip" data-placement="right" title=""
                                                       data-original-title="Click to learn more..."></i>
                                                </li>
                                                <li class="navi-separator mb-3 opacity-70"></li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
																		<span class="navi-text">
																			<span
                                                                                class="label label-xl label-inline label-light-success">Customer</span>
																		</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
																		<span class="navi-text">
																			<span
                                                                                class="label label-xl label-inline label-light-danger">Partner</span>
																		</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
																		<span class="navi-text">
																			<span
                                                                                class="label label-xl label-inline label-light-warning">Suplier</span>
																		</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
																		<span class="navi-text">
																			<span
                                                                                class="label label-xl label-inline label-light-primary">Member</span>
																		</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
																		<span class="navi-text">
																			<span
                                                                                class="label label-xl label-inline label-light-dark">Staff</span>
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
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-4">
                                <!--begin::Timeline-->
                                <div class="timeline timeline-6 mt-3">
                                    <!--begin::Item-->
                                    <div class="timeline-item align-items-start">
                                        <!--begin::Label-->
                                        <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">08:42
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Badge-->
                                        <div class="timeline-badge">
                                            <i class="fa fa-genderless text-warning icon-xl"></i>
                                        </div>
                                        <!--end::Badge-->
                                        <!--begin::Text-->
                                        <div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">
                                            Outlines keep you honest. And keep structure
                                        </div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="timeline-item align-items-start">
                                        <!--begin::Label-->
                                        <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">10:00
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Badge-->
                                        <div class="timeline-badge">
                                            <i class="fa fa-genderless text-success icon-xl"></i>
                                        </div>
                                        <!--end::Badge-->
                                        <!--begin::Content-->
                                        <div class="timeline-content d-flex">
                                            <span
                                                class="font-weight-bolder text-dark-75 pl-3 font-size-lg">AEOL meeting</span>
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="timeline-item align-items-start">
                                        <!--begin::Label-->
                                        <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">14:37
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Badge-->
                                        <div class="timeline-badge">
                                            <i class="fa fa-genderless text-danger icon-xl"></i>
                                        </div>
                                        <!--end::Badge-->
                                        <!--begin::Desc-->
                                        <div class="timeline-content font-weight-bolder font-size-lg text-dark-75 pl-3">
                                            Make deposit
                                            <a href="#" class="text-primary">USD 700</a>. to ESL
                                        </div>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="timeline-item align-items-start">
                                        <!--begin::Label-->
                                        <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">16:50
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Badge-->
                                        <div class="timeline-badge">
                                            <i class="fa fa-genderless text-primary icon-xl"></i>
                                        </div>
                                        <!--end::Badge-->
                                        <!--begin::Text-->
                                        <div class="timeline-content font-weight-mormal font-size-lg text-muted pl-3">
                                            Indulging in poorly driving and keep structure keep great
                                        </div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="timeline-item align-items-start">
                                        <!--begin::Label-->
                                        <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">21:03
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Badge-->
                                        <div class="timeline-badge">
                                            <i class="fa fa-genderless text-danger icon-xl"></i>
                                        </div>
                                        <!--end::Badge-->
                                        <!--begin::Desc-->
                                        <div class="timeline-content font-weight-bolder text-dark-75 pl-3 font-size-lg">
                                            New order placed
                                            <a href="#" class="text-primary">#XF-2356</a>.
                                        </div>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="timeline-item align-items-start">
                                        <!--begin::Label-->
                                        <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">23:07
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Badge-->
                                        <div class="timeline-badge">
                                            <i class="fa fa-genderless text-info icon-xl"></i>
                                        </div>
                                        <!--end::Badge-->
                                        <!--begin::Text-->
                                        <div class="timeline-content font-weight-mormal font-size-lg text-muted pl-3">
                                            Outlines keep and you honest. Indulging in poorly driving
                                        </div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Timeline-->
                            </div>
                            <!--end: Card Body-->
                        </div>
                        <!--end: List Widget 9-->
                    </div>
                    <!--end::Aside الجهة اليمنى-->

                    <!--begin::Content المحتوى-->
                    <div class="flex-row-fluid ml-lg-8">
                        <div class="alert alert-custom alert-white alert-shadow fade show gutter-b" role="alert">
                            <div class="alert-icon">
										<span class="svg-icon svg-icon-primary svg-icon-xl">
											<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Tools/Compass.svg-->
											<svg xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                 viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"></rect>
													<path
                                                        d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z"
                                                        fill="#000000" opacity="0.3"></path>
													<path
                                                        d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z"
                                                        fill="#000000" fill-rule="nonzero"></path>
												</g>
											</svg>
                                            <!--end::Svg Icon-->
										</span>
                            </div>
                            <div class="alert-text">
                                <a class="font-weight-bold" href="https://getbootstrap.com/docs/4.5/content/typography/"
                                   target="_blank"></a>

                            </div>
                        </div>
                        <div class="row">
                            <!--begin::Content الوسط-->
                            <div class="col-xxl-6 col-6">
                                <!--begin::Forms Widget 2-->
                                <div class="card card-custom gutter-b">
                                    <!--begin::Body-->
                                    <div class="card-body">
                                        <!--begin::Top-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40 symbol-light-success mr-5">
																<span class="symbol-label">
																	<img
                                                                        src="https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/svg/avatars/007-boy-2.svg"
                                                                        class="h-75 align-self-end" alt="">
																</span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Description-->
                                            <span class="text-muted font-weight-bold font-size-lg">What’s on your mind, Jerry?</span>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Top-->
                                        <!--begin::Form-->
                                        <form id="kt_forms_widget_2_form" class="pt-10 ql-quil ql-quil-plain">
                                            <!--begin::Editor-->
                                            <div id="kt_forms_widget_2_editor" class="ql-container ql-snow">
                                                <div class="ql-editor ql-blank" data-gramm="false"
                                                     contenteditable="true" data-placeholder="Type message..."><p><br>
                                                    </p></div>
                                                <div class="ql-clipboard" contenteditable="true" tabindex="-1"></div>
                                                <div class="ql-tooltip ql-hidden"><a class="ql-preview"
                                                                                     rel="noopener noreferrer"
                                                                                     target="_blank"
                                                                                     href="about:blank"></a><input
                                                        type="text" data-formula="e=mc^2"
                                                        data-link="https://quilljs.com" data-video="Embed URL"><a
                                                        class="ql-action"></a><a class="ql-remove"></a></div>
                                            </div>
                                            <!--end::Editor-->
                                            <div class="border-top my-5"></div>
                                            <!--begin::Toolbar-->
                                            <div id="kt_forms_widget_2_editor_toolbar"
                                                 class="ql-toolbar d-flex align-items-center justify-content-between ql-snow">
                                                <div class="mr-2">
																	<span class="ql-formats ml-0">
																		<span class="ql-size w-75px ql-picker"><span
                                                                                class="ql-picker-label" tabindex="0"
                                                                                role="button" aria-expanded="false"
                                                                                aria-controls="ql-picker-options-0"
                                                                                data-label="Normal"><svg
                                                                                    viewBox="0 0 18 18"> <polygon
                                                                                        class="ql-stroke"
                                                                                        points="7 11 9 13 11 11 7 11"></polygon> <polygon
                                                                                        class="ql-stroke"
                                                                                        points="7 7 9 5 11 7 7 7"></polygon> </svg></span><span
                                                                                class="ql-picker-options"
                                                                                aria-hidden="true" tabindex="-1"
                                                                                id="ql-picker-options-0"><span
                                                                                    tabindex="0" role="button"
                                                                                    class="ql-picker-item"
                                                                                    data-value="10px"
                                                                                    data-label="Small"></span><span
                                                                                    tabindex="0" role="button"
                                                                                    class="ql-picker-item ql-selected"
                                                                                    data-label="Normal"></span><span
                                                                                    tabindex="0" role="button"
                                                                                    class="ql-picker-item"
                                                                                    data-value="18px"
                                                                                    data-label="Large"></span><span
                                                                                    tabindex="0" role="button"
                                                                                    class="ql-picker-item"
                                                                                    data-value="32px"
                                                                                    data-label="Huge"></span></span></span><select
                                                                            class="ql-size w-75px"
                                                                            style="display: none;">
																			<option value="10px">Small</option>
																			<option selected="selected">Normal</option>
																			<option value="18px">Large</option>
																			<option value="32px">Huge</option>
																		</select>
																	</span>
                                                    <span class="ql-formats">
																		<button class="ql-bold" type="button"><svg
                                                                                viewBox="0 0 18 18"> <path
                                                                                    class="ql-stroke"
                                                                                    d="M5,4H9.5A2.5,2.5,0,0,1,12,6.5v0A2.5,2.5,0,0,1,9.5,9H5A0,0,0,0,1,5,9V4A0,0,0,0,1,5,4Z"></path> <path
                                                                                    class="ql-stroke"
                                                                                    d="M5,9h5.5A2.5,2.5,0,0,1,13,11.5v0A2.5,2.5,0,0,1,10.5,14H5a0,0,0,0,1,0,0V9A0,0,0,0,1,5,9Z"></path> </svg></button>
																		<button class="ql-italic" type="button"><svg
                                                                                viewBox="0 0 18 18"> <line
                                                                                    class="ql-stroke" x1="7" x2="13"
                                                                                    y1="4" y2="4"></line> <line
                                                                                    class="ql-stroke" x1="5" x2="11"
                                                                                    y1="14" y2="14"></line> <line
                                                                                    class="ql-stroke" x1="8" x2="10"
                                                                                    y1="14"
                                                                                    y2="4"></line> </svg></button>
																		<button class="ql-underline" type="button"><svg
                                                                                viewBox="0 0 18 18"> <path
                                                                                    class="ql-stroke"
                                                                                    d="M5,3V9a4.012,4.012,0,0,0,4,4H9a4.012,4.012,0,0,0,4-4V3"></path> <rect
                                                                                    class="ql-fill" height="1" rx="0.5"
                                                                                    ry="0.5" width="12" x="3"
                                                                                    y="15"></rect> </svg></button>
																		<button class="ql-strike" type="button"><svg
                                                                                viewBox="0 0 18 18"> <line
                                                                                    class="ql-stroke ql-thin" x1="15.5"
                                                                                    x2="2.5" y1="8.5" y2="9.5"></line> <path
                                                                                    class="ql-fill"
                                                                                    d="M9.007,8C6.542,7.791,6,7.519,6,6.5,6,5.792,7.283,5,9,5c1.571,0,2.765.679,2.969,1.309a1,1,0,0,0,1.9-.617C13.356,4.106,11.354,3,9,3,6.2,3,4,4.538,4,6.5a3.2,3.2,0,0,0,.5,1.843Z"></path> <path
                                                                                    class="ql-fill"
                                                                                    d="M8.984,10C11.457,10.208,12,10.479,12,11.5c0,0.708-1.283,1.5-3,1.5-1.571,0-2.765-.679-2.969-1.309a1,1,0,1,0-1.9.617C4.644,13.894,6.646,15,9,15c2.8,0,5-1.538,5-3.5a3.2,3.2,0,0,0-.5-1.843Z"></path> </svg></button>
																		<button class="ql-image" type="button"><svg
                                                                                viewBox="0 0 18 18"> <rect
                                                                                    class="ql-stroke" height="10"
                                                                                    width="12" x="3" y="4"></rect> <circle
                                                                                    class="ql-fill" cx="6" cy="7"
                                                                                    r="1"></circle> <polyline
                                                                                    class="ql-even ql-fill"
                                                                                    points="5 12 5 11 7 9 8 10 11 7 13 9 13 12 5 12"></polyline> </svg></button>
																		<button class="ql-link" type="button"><svg
                                                                                viewBox="0 0 18 18"> <line
                                                                                    class="ql-stroke" x1="7" x2="11"
                                                                                    y1="7" y2="11"></line> <path
                                                                                    class="ql-even ql-stroke"
                                                                                    d="M8.9,4.577a3.476,3.476,0,0,1,.36,4.679A3.476,3.476,0,0,1,4.577,8.9C3.185,7.5,2.035,6.4,4.217,4.217S7.5,3.185,8.9,4.577Z"></path> <path
                                                                                    class="ql-even ql-stroke"
                                                                                    d="M13.423,9.1a3.476,3.476,0,0,0-4.679-.36,3.476,3.476,0,0,0,.36,4.679c1.392,1.392,2.5,2.542,4.679.36S14.815,10.5,13.423,9.1Z"></path> </svg></button>
																		<button class="ql-clean" type="button"><svg
                                                                                class="" viewBox="0 0 18 18"> <line
                                                                                    class="ql-stroke" x1="5" x2="13"
                                                                                    y1="3" y2="3"></line> <line
                                                                                    class="ql-stroke" x1="6" x2="9.35"
                                                                                    y1="12" y2="3"></line> <line
                                                                                    class="ql-stroke" x1="11" x2="15"
                                                                                    y1="11" y2="15"></line> <line
                                                                                    class="ql-stroke" x1="15" x2="11"
                                                                                    y1="11" y2="15"></line> <rect
                                                                                    class="ql-fill" height="1" rx="0.5"
                                                                                    ry="0.5" width="7" x="2"
                                                                                    y="14"></rect> </svg></button>
																	</span>
                                                </div>
                                                <div class="">
																	<span
                                                                        class="btn btn-icon btn-sm btn-hover-icon-primary">
																		<i class="flaticon2-clip-symbol icon-ms"></i>
																	</span>
                                                    <span class="btn btn-icon btn-sm btn-hover-icon-primary">
																		<i class="flaticon2-pin icon-ms"></i>
																	</span>
                                                </div>
                                            </div>
                                            <!--end::Toolbar-->
                                        </form>
                                        <!--end::Form-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Forms Widget 2-->
                                <!--begin::Forms Widget 3-->
                                <div class="card card-custom gutter-b">
                                    <!--begin::Body-->
                                    <div class="card-body">
                                        <!--begin::Header-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40 symbol-light-success mr-5">
																<span class="symbol-label">
																	<img
                                                                        src="/metronic/theme/html/demo1/dist/assets/media/svg/avatars/018-girl-9.svg"
                                                                        class="h-75 align-self-end" alt="">
																</span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Info-->
                                            <div class="d-flex flex-column flex-grow-1">
                                                <a href="#"
                                                   class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Grace
                                                    Logan</a>
                                                <span
                                                    class="text-muted font-weight-bold">PHP, SQLite, Artisan CLI</span>
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Dropdown-->
                                            <div class="card-toolbar">
                                                <div class="dropdown dropdown-inline" data-toggle="tooltip" title=""
                                                     data-placement="left" data-original-title="Quick actions">
                                                    <a href="#"
                                                       class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                                       data-toggle="dropdown" aria-haspopup="true"
                                                       aria-expanded="false">
                                                        <i class="ki ki-bold-more-hor"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right"
                                                         style="">
                                                        <!--begin::Navigation-->
                                                        <ul class="navi navi-hover py-5">
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-drop"></i>
																		</span>
                                                                    <span class="navi-text">New Group</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-list-3"></i>
																		</span>
                                                                    <span class="navi-text">Contacts</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-rocket-1"></i>
																		</span>
                                                                    <span class="navi-text">Groups</span>
                                                                    <span class="navi-link-badge">
																			<span
                                                                                class="label label-light-primary label-inline font-weight-bold">new</span>
																		</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-bell-2"></i>
																		</span>
                                                                    <span class="navi-text">Calls</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-gear"></i>
																		</span>
                                                                    <span class="navi-text">Settings</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-separator my-3"></li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-magnifier-tool"></i>
																		</span>
                                                                    <span class="navi-text">Help</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-bell-2"></i>
																		</span>
                                                                    <span class="navi-text">Privacy</span>
                                                                    <span class="navi-link-badge">
																			<span
                                                                                class="label label-light-danger label-rounded font-weight-bold">5</span>
																		</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Navigation-->
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Dropdown-->
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="pt-5">
                                            <!--begin::Text-->
                                            <p class="text-dark-75 font-size-lg font-weight-normal mb-2">Outlines keep
                                                you honest. They stop you from indulging in poorly thought-out metaphors
                                                about driving and keep you focused on the overall structure of your
                                                post</p>
                                            <!--end::Text-->
                                            <!--begin::Action-->
                                            <div class="d-flex align-items-center">
                                                <a href="#"
                                                   class="btn btn-hover-text-primary btn-hover-icon-primary btn-sm btn-text-dark-50 bg-hover-light-primary rounded font-weight-bolder font-size-sm p-2 mr-2">
																<span
                                                                    class="svg-icon svg-icon-md svg-icon-dark-25 pr-2">
																	<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Group-chat.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg"
                                                                         xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                         width="24px" height="24px" viewBox="0 0 24 24"
                                                                         version="1.1">
																		<g stroke="none" stroke-width="1" fill="none"
                                                                           fill-rule="evenodd">
																			<rect x="0" y="0" width="24"
                                                                                  height="24"></rect>
																			<path
                                                                                d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z"
                                                                                fill="#000000"></path>
																			<path
                                                                                d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z"
                                                                                fill="#000000" opacity="0.3"></path>
																		</g>
																	</svg>
                                                                    <!--end::Svg Icon-->
																</span>24</a>
                                                <a href="#"
                                                   class="btn btn-sm btn-text-dark-50 btn-hover-icon-danger btn-hover-text-danger bg-hover-light-danger font-weight-bolder rounded font-size-sm p-2">
																<span
                                                                    class="svg-icon svg-icon-md svg-icon-dark-25 pr-1">
																	<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Heart.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg"
                                                                         xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                         width="24px" height="24px" viewBox="0 0 24 24"
                                                                         version="1.1">
																		<g stroke="none" stroke-width="1" fill="none"
                                                                           fill-rule="evenodd">
																			<polygon
                                                                                points="0 0 24 0 24 24 0 24"></polygon>
																			<path
                                                                                d="M16.5,4.5 C14.8905,4.5 13.00825,6.32463215 12,7.5 C10.99175,6.32463215 9.1095,4.5 7.5,4.5 C4.651,4.5 3,6.72217984 3,9.55040872 C3,12.6834696 6,16 12,19.5 C18,16 21,12.75 21,9.75 C21,6.92177112 19.349,4.5 16.5,4.5 Z"
                                                                                fill="#000000"
                                                                                fill-rule="nonzero"></path>
																		</g>
																	</svg>
                                                                    <!--end::Svg Icon-->
																</span>75</a>
                                            </div>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Body-->
                                        <!--begin::Separator-->
                                        <div class="separator separator-solid mt-2 mb-4"></div>
                                        <!--end::Separator-->
                                        <!--begin::Editor-->
                                        <form class="position-relative">
                                            <textarea id="kt_forms_widget_3_input"
                                                      class="form-control border-0 p-0 pr-10 resize-none" rows="1"
                                                      placeholder="Reply..."
                                                      style="overflow: hidden; overflow-wrap: break-word; height: 19px;"></textarea>
                                            <div class="position-absolute top-0 right-0 mt-n1 mr-n2">
																<span
                                                                    class="btn btn-icon btn-sm btn-hover-icon-primary">
																	<i class="flaticon2-clip-symbol icon-ms"></i>
																</span>
                                                <span class="btn btn-icon btn-sm btn-hover-icon-primary">
																	<i class="flaticon2-pin icon-ms"></i>
																</span>
                                            </div>
                                        </form>
                                        <!--edit::Editor-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Forms Widget 3-->
                                <!--begin::Forms Widget 4-->
                                <div class="card card-custom gutter-b">
                                    <!--begin::Body-->
                                    <div class="card-body">
                                        <!--begin::Top-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40 symbol-light-success mr-5">
																<span class="symbol-label">
																	<img
                                                                        src="https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/svg/avatars/047-girl-25.svg"
                                                                        class="h-75 align-self-end" alt="">
																</span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Info-->
                                            <div class="d-flex flex-column flex-grow-1">
                                                <a href="#"
                                                   class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Ruby
                                                    Liam</a>
                                                <span class="text-muted font-weight-bold">Yestarday at 5:06 PM</span>
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Dropdown-->
                                            <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title=""
                                                 data-placement="left" data-original-title="Quick actions">
                                                <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon"
                                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="ki ki-bold-more-hor"></i>
                                                </a>
                                                <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                                    <!--begin::Navigation-->
                                                    <ul class="navi navi-hover">
                                                        <li class="navi-header font-weight-bold py-4">
                                                            <span class="font-size-lg">Choose Label:</span>
                                                            <i class="flaticon2-information icon-md text-muted"
                                                               data-toggle="tooltip" data-placement="right" title=""
                                                               data-original-title="Click to learn more..."></i>
                                                        </li>
                                                        <li class="navi-separator mb-3 opacity-70"></li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
																				<span class="navi-text">
																					<span
                                                                                        class="label label-xl label-inline label-light-success">Customer</span>
																				</span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
																				<span class="navi-text">
																					<span
                                                                                        class="label label-xl label-inline label-light-danger">Partner</span>
																				</span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
																				<span class="navi-text">
																					<span
                                                                                        class="label label-xl label-inline label-light-warning">Suplier</span>
																				</span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
																				<span class="navi-text">
																					<span
                                                                                        class="label label-xl label-inline label-light-primary">Member</span>
																				</span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
																				<span class="navi-text">
																					<span
                                                                                        class="label label-xl label-inline label-light-dark">Staff</span>
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
                                            <!--end::Dropdown-->
                                        </div>
                                        <!--end::Top-->
                                        <!--begin::Bottom-->
                                        <div class="pt-4">
                                            <!--begin::Image-->
                                            <div class="bgi-no-repeat bgi-size-cover rounded min-h-265px"
                                                 style="background-image: url(../../../../../../theme/html/demo1/dist/assets/media/stock-900x600/3.jpg)"></div>
                                            <!--end::Image-->
                                            <!--begin::Text-->
                                            <p class="text-dark-75 font-size-lg font-weight-normal pt-5 mb-2">Outlines
                                                keep you honest. They stop you from indulging in poorly thought-out
                                                metaphors about driving and keep you focused on the overall structure of
                                                your post</p>
                                            <!--end::Text-->
                                            <!--begin::Action-->
                                            <div class="d-flex align-items-center">
                                                <a href="#"
                                                   class="btn btn-hover-text-primary btn-hover-icon-primary btn-sm btn-text-dark-50 bg-hover-light-primary rounded font-weight-bolder font-size-sm p-2">
																<span
                                                                    class="svg-icon svg-icon-md svg-icon-dark-25 pr-2">
																	<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Group-chat.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg"
                                                                         xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                         width="24px" height="24px" viewBox="0 0 24 24"
                                                                         version="1.1">
																		<g stroke="none" stroke-width="1" fill="none"
                                                                           fill-rule="evenodd">
																			<rect x="0" y="0" width="24"
                                                                                  height="24"></rect>
																			<path
                                                                                d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z"
                                                                                fill="#000000"></path>
																			<path
                                                                                d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z"
                                                                                fill="#000000" opacity="0.3"></path>
																		</g>
																	</svg>
                                                                    <!--end::Svg Icon-->
																</span>24</a>
                                                <a href="#"
                                                   class="btn btn-icon-danger btn-sm btn-text-dark-50 bg-hover-light-danger btn-hover-text-danger rounded font-weight-bolder font-size-sm p-2">
																<span class="svg-icon svg-icon-md svg-icon-danger pr-1">
																	<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Heart.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg"
                                                                         xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                         width="24px" height="24px" viewBox="0 0 24 24"
                                                                         version="1.1">
																		<g stroke="none" stroke-width="1" fill="none"
                                                                           fill-rule="evenodd">
																			<polygon
                                                                                points="0 0 24 0 24 24 0 24"></polygon>
																			<path
                                                                                d="M16.5,4.5 C14.8905,4.5 13.00825,6.32463215 12,7.5 C10.99175,6.32463215 9.1095,4.5 7.5,4.5 C4.651,4.5 3,6.72217984 3,9.55040872 C3,12.6834696 6,16 12,19.5 C18,16 21,12.75 21,9.75 C21,6.92177112 19.349,4.5 16.5,4.5 Z"
                                                                                fill="#000000"
                                                                                fill-rule="nonzero"></path>
																		</g>
																	</svg>
                                                                    <!--end::Svg Icon-->
																</span>75</a>
                                            </div>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Bottom-->
                                        <!--begin::Separator-->
                                        <div class="separator separator-solid mt-2 mb-4"></div>
                                        <!--end::Separator-->
                                        <!--begin::Editor-->
                                        <form class="position-relative">
                                            <textarea id="kt_forms_widget_4_input"
                                                      class="form-control border-0 p-0 pr-10 resize-none" rows="1"
                                                      placeholder="Reply..."
                                                      style="overflow: hidden; overflow-wrap: break-word; height: 19px;"></textarea>
                                            <div class="position-absolute top-0 right-0 mt-n1 mr-n2">
																<span
                                                                    class="btn btn-icon btn-sm btn-hover-icon-primary">
																	<i class="flaticon2-clip-symbol icon-ms"></i>
																</span>
                                                <span class="btn btn-icon btn-sm btn-hover-icon-primary">
																	<i class="flaticon2-pin icon-ms"></i>
																</span>
                                            </div>
                                        </form>
                                        <!--edit::Editor-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Forms Widget 4-->
                                <!--begin::Forms Widget 5-->
                                <div class="card card-custom gutter-b">
                                    <!--begin::Body-->
                                    <div class="card-body">
                                        <!--begin::Container-->
                                        <div>
                                            <!--begin::Header-->
                                            <div class="d-flex align-items-center pb-4">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40 symbol-light-success mr-5">
																	<span class="symbol-label">
																		<img
                                                                            src="https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/svg/avatars/018-girl-9.svg"
                                                                            class="h-75 align-self-end" alt="">
																	</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Info-->
                                                <div class="d-flex flex-column flex-grow-1">
                                                    <a href="#"
                                                       class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Grace
                                                        Logan</a>
                                                    <span
                                                        class="text-muted font-weight-bold">Yestarday at 5:06 PM</span>
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Dropdown-->
                                                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip"
                                                     title="" data-placement="left" data-original-title="Quick actions">
                                                    <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon"
                                                       data-toggle="dropdown" aria-haspopup="true"
                                                       aria-expanded="false">
                                                        <i class="ki ki-bold-more-hor"></i>
                                                    </a>
                                                    <div
                                                        class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                                        <!--begin::Navigation-->
                                                        <ul class="navi navi-hover">
                                                            <li class="navi-header font-weight-bold py-4">
                                                                <span class="font-size-lg">Choose Label:</span>
                                                                <i class="flaticon2-information icon-md text-muted"
                                                                   data-toggle="tooltip" data-placement="right" title=""
                                                                   data-original-title="Click to learn more..."></i>
                                                            </li>
                                                            <li class="navi-separator mb-3 opacity-70"></li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
																					<span class="navi-text">
																						<span
                                                                                            class="label label-xl label-inline label-light-success">Customer</span>
																					</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
																					<span class="navi-text">
																						<span
                                                                                            class="label label-xl label-inline label-light-danger">Partner</span>
																					</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
																					<span class="navi-text">
																						<span
                                                                                            class="label label-xl label-inline label-light-warning">Suplier</span>
																					</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
																					<span class="navi-text">
																						<span
                                                                                            class="label label-xl label-inline label-light-primary">Member</span>
																					</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
																					<span class="navi-text">
																						<span
                                                                                            class="label label-xl label-inline label-light-dark">Staff</span>
																					</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-separator mt-3 opacity-70"></li>
                                                            <li class="navi-footer py-4">
                                                                <a class="btn btn-clean font-weight-bold btn-sm"
                                                                   href="#">
                                                                    <i class="ki ki-plus icon-sm"></i>Add new</a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Navigation-->
                                                    </div>
                                                </div>
                                                <!--end::Dropdown-->
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Body-->
                                            <div>
                                                <!--begin::Text-->
                                                <p class="text-dark-75 font-size-lg font-weight-normal">Outlines keep
                                                    you honest. They stop you from indulging in poorly thought-out
                                                    metaphors about driving and keep you focused on the overall
                                                    structure of your post</p>
                                                <!--end::Text-->
                                                <!--begin::Action-->
                                                <div class="d-flex align-items-center">
                                                    <a href="#"
                                                       class="btn btn-hover-text-primary btn-hover-icon-primary btn-sm btn-text-dark-50 bg-light-primary rounded font-weight-bolder font-size-sm p-2 mr-2">
																	<span
                                                                        class="svg-icon svg-icon-md svg-icon-primary pr-2">
																		<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Group-chat.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg"
                                                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                             width="24px" height="24px"
                                                                             viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1"
                                                                               fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24"
                                                                                      height="24"></rect>
																				<path
                                                                                    d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z"
                                                                                    fill="#000000"></path>
																				<path
                                                                                    d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z"
                                                                                    fill="#000000" opacity="0.3"></path>
																			</g>
																		</svg>
                                                                        <!--end::Svg Icon-->
																	</span>24</a>
                                                    <a href="#"
                                                       class="btn btn-hover-text-danger btn-hover-icon-danger btn-sm btn-text-dark-50 bg-hover-light-danger rounded font-weight-bolder font-size-sm p-2">
																	<span
                                                                        class="svg-icon svg-icon-md svg-icon-dark-25 pr-1">
																		<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Heart.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg"
                                                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                             width="24px" height="24px"
                                                                             viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1"
                                                                               fill="none" fill-rule="evenodd">
																				<polygon
                                                                                    points="0 0 24 0 24 24 0 24"></polygon>
																				<path
                                                                                    d="M16.5,4.5 C14.8905,4.5 13.00825,6.32463215 12,7.5 C10.99175,6.32463215 9.1095,4.5 7.5,4.5 C4.651,4.5 3,6.72217984 3,9.55040872 C3,12.6834696 6,16 12,19.5 C18,16 21,12.75 21,9.75 C21,6.92177112 19.349,4.5 16.5,4.5 Z"
                                                                                    fill="#000000"
                                                                                    fill-rule="nonzero"></path>
																			</g>
																		</svg>
                                                                        <!--end::Svg Icon-->
																	</span>75</a>
                                                </div>
                                                <!--end::Action-->
                                                <!--begin::Item-->
                                                <div class="d-flex py-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40 symbol-light-success mr-5 mt-1">
																		<span class="symbol-label">
																			<img
                                                                                src="https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/svg/avatars/009-boy-4.svg"
                                                                                class="h-75 align-self-end" alt="">
																		</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column flex-row-fluid">
                                                        <!--begin::Info-->
                                                        <div class="d-flex align-items-center flex-wrap">
                                                            <a href="#"
                                                               class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder pr-6">Mr.
                                                                Anderson</a>
                                                            <span
                                                                class="text-muted font-weight-normal flex-grow-1 font-size-sm">1 Day ago</span>
                                                            <span class="text-muted font-weight-normal font-size-sm">Reply</span>
                                                        </div>
                                                        <span class="text-dark-75 font-size-sm font-weight-normal pt-1">Long before you sit dow to put digital pen to paper you need to make sure you have to sit down and write.</span>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40 symbol-light-success mr-5 mt-1">
																		<span class="symbol-label">
																			<img
                                                                                src="https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/svg/avatars/003-girl-1.svg"
                                                                                class="h-75 align-self-end" alt="">
																		</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column flex-row-fluid">
                                                        <!--begin::Info-->
                                                        <div class="d-flex align-items-center flex-wrap">
                                                            <a href="#"
                                                               class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder pr-6">Mrs.
                                                                Anderson</a>
                                                            <span
                                                                class="text-muted font-weight-normal flex-grow-1 font-size-sm">2 Days ago</span>
                                                            <span class="text-muted font-weight-normal font-size-sm">Reply</span>
                                                        </div>
                                                        <span class="text-dark-75 font-size-sm font-weight-normal pt-1">Long before you sit down to put digital pen to paper</span>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Container-->
                                        <!--begin::Separator-->
                                        <div class="separator separator-solid mt-5 mb-4"></div>
                                        <!--end::Separator-->
                                        <!--begin::Editor-->
                                        <form class="position-relative">
                                            <textarea id="kt_forms_widget_5_input"
                                                      class="form-control border-0 p-0 pr-10 resize-none" rows="1"
                                                      placeholder="Reply..."
                                                      style="overflow: hidden; overflow-wrap: break-word; height: 19px;"></textarea>
                                            <div class="position-absolute top-0 right-0 mt-n1 mr-n2">
																<span
                                                                    class="btn btn-icon btn-sm btn-hover-icon-primary">
																	<i class="flaticon2-clip-symbol icon-ms"></i>
																</span>
                                                <span class="btn btn-icon btn-sm btn-hover-icon-primary">
																	<i class="flaticon2-pin icon-ms"></i>
																</span>
                                            </div>
                                        </form>
                                        <!--edit::Editor-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Forms Widget 5-->
                                <!--begin::Forms Widget 6-->
                                <div class="card card-custom gutter-b">
                                    <!--begin::Body-->
                                    <div class="card-body">
                                        <!--begin::Container-->
                                        <div>
                                            <!--begin::Header-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40 symbol-light-success mr-5">
																	<span class="symbol-label">
																		<img
                                                                            src="https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/svg/avatars/009-boy-4.svg"
                                                                            class="h-75 align-self-end" alt="">
																	</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Info-->
                                                <div class="d-flex flex-column flex-grow-1">
                                                    <a href="#"
                                                       class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Nikky
                                                        Peres</a>
                                                    <span
                                                        class="text-muted font-weight-bold">Yestarday at 5:06 PM</span>
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Dropdown-->
                                                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip"
                                                     title="" data-placement="left" data-original-title="Quick actions">
                                                    <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon"
                                                       data-toggle="dropdown" aria-haspopup="true"
                                                       aria-expanded="false">
                                                        <i class="ki ki-bold-more-hor"></i>
                                                    </a>
                                                    <div
                                                        class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                                        <!--begin::Navigation-->
                                                        <ul class="navi navi-hover">
                                                            <li class="navi-header font-weight-bold py-4">
                                                                <span class="font-size-lg">Choose Label:</span>
                                                                <i class="flaticon2-information icon-md text-muted"
                                                                   data-toggle="tooltip" data-placement="right" title=""
                                                                   data-original-title="Click to learn more..."></i>
                                                            </li>
                                                            <li class="navi-separator mb-3 opacity-70"></li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
																					<span class="navi-text">
																						<span
                                                                                            class="label label-xl label-inline label-light-success">Customer</span>
																					</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
																					<span class="navi-text">
																						<span
                                                                                            class="label label-xl label-inline label-light-danger">Partner</span>
																					</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
																					<span class="navi-text">
																						<span
                                                                                            class="label label-xl label-inline label-light-warning">Suplier</span>
																					</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
																					<span class="navi-text">
																						<span
                                                                                            class="label label-xl label-inline label-light-primary">Member</span>
																					</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
																					<span class="navi-text">
																						<span
                                                                                            class="label label-xl label-inline label-light-dark">Staff</span>
																					</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-separator mt-3 opacity-70"></li>
                                                            <li class="navi-footer py-4">
                                                                <a class="btn btn-clean font-weight-bold btn-sm"
                                                                   href="#">
                                                                    <i class="ki ki-plus icon-sm"></i>Add new</a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Navigation-->
                                                    </div>
                                                </div>
                                                <!--end::Dropdown-->
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Body-->
                                            <div>
                                                <!--begin::Text-->
                                                <p class="text-dark-75 font-size-lg font-weight-normal pt-5 mb-2">
                                                    Outlines keep you honest. They stop you from indulging in poorly
                                                    thought-out metaphors about driving and keep you focused on the
                                                    overall structure of your post</p>
                                                <!--end::Text-->
                                                <!--begin::Action-->
                                                <div class="d-flex align-items-center">
                                                    <a href="#"
                                                       class="btn btn-hover-text-primary btn-hover-icon-primary btn-sm btn-text-dark-50 bg-hover-light-primary rounded font-weight-bolder font-size-sm p-2 mr-2">
																	<span
                                                                        class="svg-icon svg-icon-md svg-icon-dark-25 pr-2">
																		<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Group-chat.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg"
                                                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                             width="24px" height="24px"
                                                                             viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1"
                                                                               fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24"
                                                                                      height="24"></rect>
																				<path
                                                                                    d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z"
                                                                                    fill="#000000"></path>
																				<path
                                                                                    d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z"
                                                                                    fill="#000000" opacity="0.3"></path>
																			</g>
																		</svg>
                                                                        <!--end::Svg Icon-->
																	</span>24</a>
                                                    <a href="#"
                                                       class="btn btn-sm btn-text-dark-50 btn-hover-icon-danger btn-hover-text-danger bg-hover-light-danger font-weight-bolder rounded font-size-sm p-2">
																	<span
                                                                        class="svg-icon svg-icon-md svg-icon-dark-25 pr-1">
																		<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Heart.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg"
                                                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                             width="24px" height="24px"
                                                                             viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1"
                                                                               fill="none" fill-rule="evenodd">
																				<polygon
                                                                                    points="0 0 24 0 24 24 0 24"></polygon>
																				<path
                                                                                    d="M16.5,4.5 C14.8905,4.5 13.00825,6.32463215 12,7.5 C10.99175,6.32463215 9.1095,4.5 7.5,4.5 C4.651,4.5 3,6.72217984 3,9.55040872 C3,12.6834696 6,16 12,19.5 C18,16 21,12.75 21,9.75 C21,6.92177112 19.349,4.5 16.5,4.5 Z"
                                                                                    fill="#000000"
                                                                                    fill-rule="nonzero"></path>
																			</g>
																		</svg>
                                                                        <!--end::Svg Icon-->
																	</span>75</a>
                                                </div>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Container-->
                                        <!--begin::Separator-->
                                        <div class="separator separator-solid mt-2 mb-4"></div>
                                        <!--end::Separator-->
                                        <!--begin::Editor-->
                                        <form class="position-relative">
                                            <textarea id="kt_forms_widget_6_input"
                                                      class="form-control border-0 p-0 pr-10 resize-none" rows="1"
                                                      placeholder="Reply..."
                                                      style="overflow: hidden; overflow-wrap: break-word; height: 19px;"></textarea>
                                            <div class="position-absolute top-0 right-0 mt-n1 mr-n2">
																<span
                                                                    class="btn btn-icon btn-sm btn-hover-icon-primary">
																	<i class="flaticon2-clip-symbol icon-ms"></i>
																</span>
                                                <span class="btn btn-icon btn-sm btn-hover-icon-primary">
																	<i class="flaticon2-pin icon-ms"></i>
																</span>
                                            </div>
                                        </form>
                                        <!--edit::Editor-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Forms Widget 6-->
                                <!--begin::Forms Widget 4-->
                                <div class="card card-custom gutter-b d-none education-more-feeds">
                                    <!--begin::Body-->
                                    <div class="card-body">
                                        <!--begin::Top-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40 symbol-light-success mr-5">
																<span class="symbol-label">
																	<img
                                                                        src="https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/svg/avatars/047-girl-25.svg"
                                                                        class="h-75 align-self-end" alt="">
																</span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Info-->
                                            <div class="d-flex flex-column flex-grow-1">
                                                <a href="#"
                                                   class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Ruby
                                                    Liam</a>
                                                <span class="text-muted font-weight-bold">Yestarday at 5:06 PM</span>
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Dropdown-->
                                            <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title=""
                                                 data-placement="left" data-original-title="Quick actions">
                                                <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon"
                                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="ki ki-bold-more-hor"></i>
                                                </a>
                                                <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                                    <!--begin::Navigation-->
                                                    <ul class="navi navi-hover">
                                                        <li class="navi-header font-weight-bold py-4">
                                                            <span class="font-size-lg">Choose Label:</span>
                                                            <i class="flaticon2-information icon-md text-muted"
                                                               data-toggle="tooltip" data-placement="right" title=""
                                                               data-original-title="Click to learn more..."></i>
                                                        </li>
                                                        <li class="navi-separator mb-3 opacity-70"></li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
																				<span class="navi-text">
																					<span
                                                                                        class="label label-xl label-inline label-light-success">Customer</span>
																				</span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
																				<span class="navi-text">
																					<span
                                                                                        class="label label-xl label-inline label-light-danger">Partner</span>
																				</span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
																				<span class="navi-text">
																					<span
                                                                                        class="label label-xl label-inline label-light-warning">Suplier</span>
																				</span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
																				<span class="navi-text">
																					<span
                                                                                        class="label label-xl label-inline label-light-primary">Member</span>
																				</span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
																				<span class="navi-text">
																					<span
                                                                                        class="label label-xl label-inline label-light-dark">Staff</span>
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
                                            <!--end::Dropdown-->
                                        </div>
                                        <!--end::Top-->
                                        <!--begin::Bottom-->
                                        <div class="pt-4">
                                            <!--begin::Image-->
                                            <div class="bgi-no-repeat bgi-size-cover rounded min-h-265px"
                                                 style="background-image: url(../../../../../../theme/html/demo1/dist/assets/media/stock-900x600/19.jpg)"></div>
                                            <!--end::Image-->
                                            <!--begin::Text-->
                                            <p class="text-dark-75 font-size-lg font-weight-normal pt-5 mb-2">Outlines
                                                keep you honest. They stop you from indulging in poorly thought-out
                                                metaphors about driving and keep you focused on the overall structure of
                                                your post</p>
                                            <!--end::Text-->
                                            <!--begin::Action-->
                                            <div class="d-flex align-items-center">
                                                <a href="#"
                                                   class="btn btn-hover-text-primary btn-hover-icon-primary btn-sm btn-text-dark-50 bg-hover-light-primary rounded font-weight-bolder font-size-sm p-2">
																<span
                                                                    class="svg-icon svg-icon-md svg-icon-dark-25 pr-2">
																	<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Group-chat.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg"
                                                                         xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                         width="24px" height="24px" viewBox="0 0 24 24"
                                                                         version="1.1">
																		<g stroke="none" stroke-width="1" fill="none"
                                                                           fill-rule="evenodd">
																			<rect x="0" y="0" width="24"
                                                                                  height="24"></rect>
																			<path
                                                                                d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z"
                                                                                fill="#000000"></path>
																			<path
                                                                                d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z"
                                                                                fill="#000000" opacity="0.3"></path>
																		</g>
																	</svg>
                                                                    <!--end::Svg Icon-->
																</span>24</a>
                                                <a href="#"
                                                   class="btn btn-icon-danger btn-sm btn-text-dark-50 bg-hover-light-danger btn-hover-text-danger rounded font-weight-bolder font-size-sm p-2">
																<span class="svg-icon svg-icon-md svg-icon-danger pr-1">
																	<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Heart.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg"
                                                                         xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                         width="24px" height="24px" viewBox="0 0 24 24"
                                                                         version="1.1">
																		<g stroke="none" stroke-width="1" fill="none"
                                                                           fill-rule="evenodd">
																			<polygon
                                                                                points="0 0 24 0 24 24 0 24"></polygon>
																			<path
                                                                                d="M16.5,4.5 C14.8905,4.5 13.00825,6.32463215 12,7.5 C10.99175,6.32463215 9.1095,4.5 7.5,4.5 C4.651,4.5 3,6.72217984 3,9.55040872 C3,12.6834696 6,16 12,19.5 C18,16 21,12.75 21,9.75 C21,6.92177112 19.349,4.5 16.5,4.5 Z"
                                                                                fill="#000000"
                                                                                fill-rule="nonzero"></path>
																		</g>
																	</svg>
                                                                    <!--end::Svg Icon-->
																</span>75</a>
                                            </div>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Bottom-->
                                        <!--begin::Separator-->
                                        <div class="separator separator-solid mt-2 mb-4"></div>
                                        <!--end::Separator-->
                                        <!--begin::Editor-->
                                        <form class="position-relative">
                                            <textarea id="kt_forms_widget_4_input"
                                                      class="form-control border-0 p-0 pr-10 resize-none" rows="1"
                                                      placeholder="Reply..."></textarea>
                                            <div class="position-absolute top-0 right-0 mt-n1 mr-n2">
																<span
                                                                    class="btn btn-icon btn-sm btn-hover-icon-primary">
																	<i class="flaticon2-clip-symbol icon-ms"></i>
																</span>
                                                <span class="btn btn-icon btn-sm btn-hover-icon-primary">
																	<i class="flaticon2-pin icon-ms"></i>
																</span>
                                            </div>
                                        </form>
                                        <!--edit::Editor-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Forms Widget 4-->
                                <div class="d-flex flex-center pb-1">
                                    <button class="btn btn-primary font-weight-bolder font-size-sm py-3 px-9"
                                            id="kt_app_education_more_feeds_btn">More Feeds
                                    </button>
                                </div>
                            </div>

                            <!--begin::Content اليسار-->
                            <div class="col-xxl-6 col-6">
                                <!--begin::Base Table Widget الجهة اليسار 9-->
                                <div class="card card-custom gutter-b" id="kt_card_1">
                                    <!--begin::Header-->
                                    <div class="card-header border-0 pt-5">
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label  " style="color: #630281">ملاحظات الطبيب</span>
                                            <span class="text-muted mt-3 font-weight-bold font-size-sm">
															<span class="text-primary"></span></span>
                                        </h3>
                                        <div class="card-toolbar">
                                            <ul class="nav nav-light-danger nav-pills nav-pills-sm nav-dark-75">
                                                <li class="nav-item ml-0">
                                                    <a class="nav-link py-2 px-4 font-weight-bolder" data-toggle="tab"
                                                       href="#kt_tab_pane_9_1">Tomorrow</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link py-2 px-4 active font-weight-bolder"
                                                       data-toggle="tab" href="#doctor_notes">Today</a>
                                                </li>

                                                <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1"
                                                   data-card-tool="toggle" data-toggle="tooltip" data-placement="top"
                                                   title="Toggle Card">
                                                    <i class="ki ki-arrow-down icon-nm"></i>
                                                </a>
                                            </ul>
                                            <!--                                            <div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
                                                                                            <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                                <i class="ki ki-bold-more-hor"></i>
                                                                                            </a>
                                                                                            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right" style="">
                                                                                                &lt;!&ndash;begin::Navigation&ndash;&gt;
                                                                                                <ul class="navi navi-hover py-5">
                                                                                                    <li class="navi-item">
                                                                                                        <a href="#" class="navi-link">
                                                                                                                    <span class="navi-icon">
                                                                                                                        <i class="flaticon2-drop"></i>
                                                                                                                    </span>
                                                                                                            <span class="navi-text">New Group</span>
                                                                                                        </a>
                                                                                                    </li>
                                                                                                    <li class="navi-item">
                                                                                                        <a href="#" class="navi-link">
                                                                                                                    <span class="navi-icon">
                                                                                                                        <i class="flaticon2-list-3"></i>
                                                                                                                    </span>
                                                                                                            <span class="navi-text">Contacts</span>
                                                                                                        </a>
                                                                                                    </li>
                                                                                                    <li class="navi-item">
                                                                                                        <a href="#" class="navi-link">
                                                                                                                    <span class="navi-icon">
                                                                                                                        <i class="flaticon2-rocket-1"></i>
                                                                                                                    </span>
                                                                                                            <span class="navi-text">Groups</span>
                                                                                                            <span class="navi-link-badge">
                                                                                                                        <span class="label label-light-primary label-inline font-weight-bold">new</span>
                                                                                                                    </span>
                                                                                                        </a>
                                                                                                    </li>
                                                                                                    <li class="navi-item">
                                                                                                        <a href="#" class="navi-link">
                                                                                                                    <span class="navi-icon">
                                                                                                                        <i class="flaticon2-bell-2"></i>
                                                                                                                    </span>
                                                                                                            <span class="navi-text">Calls</span>
                                                                                                        </a>
                                                                                                    </li>
                                                                                                    <li class="navi-item">
                                                                                                        <a href="#" class="navi-link">
                                                                                                                    <span class="navi-icon">
                                                                                                                        <i class="flaticon2-gear"></i>
                                                                                                                    </span>
                                                                                                            <span class="navi-text">Settings</span>
                                                                                                        </a>
                                                                                                    </li>
                                                                                                    <li class="navi-separator my-3"></li>
                                                                                                    <li class="navi-item">
                                                                                                        <a href="#" class="navi-link">
                                                                                                                    <span class="navi-icon">
                                                                                                                        <i class="flaticon2-magnifier-tool"></i>
                                                                                                                    </span>
                                                                                                            <span class="navi-text">Help</span>
                                                                                                        </a>
                                                                                                    </li>
                                                                                                    <li class="navi-item">
                                                                                                        <a href="#" class="navi-link">
                                                                                                                    <span class="navi-icon">
                                                                                                                        <i class="flaticon2-bell-2"></i>
                                                                                                                    </span>
                                                                                                            <span class="navi-text">Privacy</span>
                                                                                                            <span class="navi-link-badge">
                                                                                                                        <span class="label label-light-danger label-rounded font-weight-bold">5</span>
                                                                                                                    </span>
                                                                                                        </a>
                                                                                                    </li>
                                                                                                </ul>
                                                                                                &lt;!&ndash;end::Navigation&ndash;&gt;
                                                                                            </div>
                                                                                        </div>-->
                                        </div>

                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Body-->

                                    <div class="card-body pt-2 pb-0 mt-n3">
                                        <div class="tab-content mt-5" id="myTabTables9">
                                            <!--begin::Tap pane-->
                                            <div class="tab-pane fade" id="kt_tab_pane_9_1" role="tabpanel"
                                                 aria-labelledby="kt_tab_pane_9_1">
                                                <!--begin::Table-->
                                                <div class="table-responsive">
                                                    <table class="table table-borderless table-vertical-center">
                                                        <!--begin::Thead-->
                                                        <thead>
                                                        <tr>
                                                            <th class="p-0 w-50px"></th>
                                                            <th class="p-0 min-w-130px min-w-lg-100px w-100"></th>
                                                            <th class="p-0 min-w-105px"></th>
                                                            <th class="p-0 min-w-50px"></th>
                                                        </tr>
                                                        </thead>
                                                        <!--end::Thead-->
                                                        <!--begin::Tbody-->
                                                        <tbody>
                                                        <tr>
                                                            <td class="pl-0 py-5">
                                                                <div class="symbol symbol-45 symbol-light mr-2">
																						<span class="symbol-label">
																							<span
                                                                                                class="svg-icon svg-icon-2x">
																								<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Home/Globe.svg-->
																								<svg
                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                    width="24px"
                                                                                                    height="24px"
                                                                                                    viewBox="0 0 24 24"
                                                                                                    version="1.1">
																									<g stroke="none"
                                                                                                       stroke-width="1"
                                                                                                       fill="none"
                                                                                                       fill-rule="evenodd">
																										<rect x="0"
                                                                                                              y="0"
                                                                                                              width="24"
                                                                                                              height="24"></rect>
																										<path
                                                                                                            d="M13,18.9450712 L13,20 L14,20 C15.1045695,20 16,20.8954305 16,22 L8,22 C8,20.8954305 8.8954305,20 10,20 L11,20 L11,18.9448245 C9.02872877,18.7261967 7.20827378,17.866394 5.79372555,16.5182701 L4.73856106,17.6741866 C4.36621808,18.0820826 3.73370941,18.110904 3.32581341,17.7385611 C2.9179174,17.3662181 2.88909597,16.7337094 3.26143894,16.3258134 L5.04940685,14.367122 C5.46150313,13.9156769 6.17860937,13.9363085 6.56406875,14.4106998 C7.88623094,16.037907 9.86320756,17 12,17 C15.8659932,17 19,13.8659932 19,10 C19,7.73468744 17.9175842,5.65198725 16.1214335,4.34123851 C15.6753081,4.01567657 15.5775721,3.39010038 15.903134,2.94397499 C16.228696,2.49784959 16.8542722,2.4001136 17.3003976,2.72567554 C19.6071362,4.40902808 21,7.08906798 21,10 C21,14.6325537 17.4999505,18.4476269 13,18.9450712 Z"
                                                                                                            fill="#000000"
                                                                                                            fill-rule="nonzero"></path>
																										<circle
                                                                                                            fill="#000000"
                                                                                                            opacity="0.3"
                                                                                                            cx="12"
                                                                                                            cy="10"
                                                                                                            r="6"></circle>
																									</g>
																								</svg>
                                                                                                <!--end::Svg Icon-->
																							</span>
																						</span>
                                                                </div>
                                                            </td>
                                                            <td class="pl-0">
                                                                <a href="#"
                                                                   class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Geography</a>
                                                                <span class="text-muted font-weight-bold d-block">By Zoey Dylan</span>
                                                            </td>
                                                            <td class="text-left">
                                                                <span
                                                                    class="text-dark-75 font-weight-bolder d-block font-size-lg">10:20 - 12:00</span>
                                                                <span
                                                                    class="text-muted font-weight-bold d-block font-size-sm">Time</span>
                                                            </td>
                                                            <td class="text-right pr-0">
                                                                <a href="#" class="btn btn-icon btn-light btn-sm">
																						<span
                                                                                            class="svg-icon svg-icon-md svg-icon-success">
																							<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
																							<svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                width="24px"
                                                                                                height="24px"
                                                                                                viewBox="0 0 24 24"
                                                                                                version="1.1">
																								<g stroke="none"
                                                                                                   stroke-width="1"
                                                                                                   fill="none"
                                                                                                   fill-rule="evenodd">
																									<polygon
                                                                                                        points="0 0 24 0 24 24 0 24"></polygon>
																									<rect fill="#000000"
                                                                                                          opacity="0.3"
                                                                                                          transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                                                          x="11" y="5"
                                                                                                          width="2"
                                                                                                          height="14"
                                                                                                          rx="1"></rect>
																									<path
                                                                                                        d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                                        fill="#000000"
                                                                                                        fill-rule="nonzero"
                                                                                                        transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"></path>
																								</g>
																							</svg>
                                                                                            <!--end::Svg Icon-->
																						</span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="pl-0 py-5">
                                                                <div class="symbol symbol-45 symbol-light-warning mr-2">
																						<span class="symbol-label">
																							<span
                                                                                                class="svg-icon svg-icon-2x svg-icon-warning">
																								<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Home/Library.svg-->
																								<svg
                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                    width="24px"
                                                                                                    height="24px"
                                                                                                    viewBox="0 0 24 24"
                                                                                                    version="1.1">
																									<g stroke="none"
                                                                                                       stroke-width="1"
                                                                                                       fill="none"
                                                                                                       fill-rule="evenodd">
																										<rect x="0"
                                                                                                              y="0"
                                                                                                              width="24"
                                                                                                              height="24"></rect>
																										<path
                                                                                                            d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z"
                                                                                                            fill="#000000"></path>
																										<rect
                                                                                                            fill="#000000"
                                                                                                            opacity="0.3"
                                                                                                            transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)"
                                                                                                            x="16.3255682"
                                                                                                            y="2.94551858"
                                                                                                            width="3"
                                                                                                            height="18"
                                                                                                            rx="1"></rect>
																									</g>
																								</svg>
                                                                                                <!--end::Svg Icon-->
																							</span>
																						</span>
                                                                </div>
                                                            </td>
                                                            <td class="pl-0">
                                                                <a href="#"
                                                                   class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">History</a>
                                                                <span class="text-muted font-weight-bold d-block">By Luke Owen</span>
                                                            </td>
                                                            <td class="text-left">
                                                                <span
                                                                    class="text-dark-75 font-weight-bolder d-block font-size-lg">13:20 - 14:00</span>
                                                                <span
                                                                    class="text-muted font-weight-bold d-block font-size-sm">Time</span>
                                                            </td>
                                                            <td class="text-right pr-0">
                                                                <a href="#" class="btn btn-icon btn-light btn-sm">
																						<span
                                                                                            class="svg-icon svg-icon-md svg-icon-success">
																							<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
																							<svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                width="24px"
                                                                                                height="24px"
                                                                                                viewBox="0 0 24 24"
                                                                                                version="1.1">
																								<g stroke="none"
                                                                                                   stroke-width="1"
                                                                                                   fill="none"
                                                                                                   fill-rule="evenodd">
																									<polygon
                                                                                                        points="0 0 24 0 24 24 0 24"></polygon>
																									<rect fill="#000000"
                                                                                                          opacity="0.3"
                                                                                                          transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                                                          x="11" y="5"
                                                                                                          width="2"
                                                                                                          height="14"
                                                                                                          rx="1"></rect>
																									<path
                                                                                                        d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                                        fill="#000000"
                                                                                                        fill-rule="nonzero"
                                                                                                        transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"></path>
																								</g>
																							</svg>
                                                                                            <!--end::Svg Icon-->
																						</span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="pl-0 py-5">
                                                                <div class="symbol symbol-45 symbol-light-info mr-2">
																						<span class="symbol-label">
																							<span
                                                                                                class="svg-icon svg-icon-2x svg-icon-info">
																								<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Design/Color-profile.svg-->
																								<svg
                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                    width="24px"
                                                                                                    height="24px"
                                                                                                    viewBox="0 0 24 24"
                                                                                                    version="1.1">
																									<g stroke="none"
                                                                                                       stroke-width="1"
                                                                                                       fill="none"
                                                                                                       fill-rule="evenodd">
																										<rect x="0"
                                                                                                              y="0"
                                                                                                              width="24"
                                                                                                              height="24"></rect>
																										<path
                                                                                                            d="M12,10.9996338 C12.8356605,10.3719448 13.8743941,10 15,10 C17.7614237,10 20,12.2385763 20,15 C20,17.7614237 17.7614237,20 15,20 C13.8743941,20 12.8356605,19.6280552 12,19.0003662 C11.1643395,19.6280552 10.1256059,20 9,20 C6.23857625,20 4,17.7614237 4,15 C4,12.2385763 6.23857625,10 9,10 C10.1256059,10 11.1643395,10.3719448 12,10.9996338 Z M13.3336047,12.504354 C13.757474,13.2388026 14,14.0910788 14,15 C14,15.9088933 13.7574889,16.761145 13.3336438,17.4955783 C13.8188886,17.8206693 14.3938466,18 15,18 C16.6568542,18 18,16.6568542 18,15 C18,13.3431458 16.6568542,12 15,12 C14.3930587,12 13.8175971,12.18044 13.3336047,12.504354 Z"
                                                                                                            fill="#000000"
                                                                                                            fill-rule="nonzero"
                                                                                                            opacity="0.3"></path>
																										<circle
                                                                                                            fill="#000000"
                                                                                                            cx="12"
                                                                                                            cy="9"
                                                                                                            r="5"></circle>
																									</g>
																								</svg>
                                                                                                <!--end::Svg Icon-->
																							</span>
																						</span>
                                                                </div>
                                                            </td>
                                                            <td class="pl-0">
                                                                <a href="#"
                                                                   class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Drawing</a>
                                                                <span class="text-muted font-weight-bold d-block">By Ellie Cole</span>
                                                            </td>
                                                            <td class="text-left">
                                                                <span
                                                                    class="text-dark-75 font-weight-bolder d-block font-size-lg">14:20 - 15:00</span>
                                                                <span
                                                                    class="text-muted font-weight-bold d-block font-size-sm">Time</span>
                                                            </td>
                                                            <td class="text-right pr-0">
                                                                <a href="#" class="btn btn-icon btn-light btn-sm">
																						<span
                                                                                            class="svg-icon svg-icon-md svg-icon-success">
																							<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
																							<svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                width="24px"
                                                                                                height="24px"
                                                                                                viewBox="0 0 24 24"
                                                                                                version="1.1">
																								<g stroke="none"
                                                                                                   stroke-width="1"
                                                                                                   fill="none"
                                                                                                   fill-rule="evenodd">
																									<polygon
                                                                                                        points="0 0 24 0 24 24 0 24"></polygon>
																									<rect fill="#000000"
                                                                                                          opacity="0.3"
                                                                                                          transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                                                          x="11" y="5"
                                                                                                          width="2"
                                                                                                          height="14"
                                                                                                          rx="1"></rect>
																									<path
                                                                                                        d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                                        fill="#000000"
                                                                                                        fill-rule="nonzero"
                                                                                                        transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"></path>
																								</g>
																							</svg>
                                                                                            <!--end::Svg Icon-->
																						</span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="pl-0 pt-0 py-5">
                                                                <div class="symbol symbol-45 symbol-light-primary mr-2">
																						<span class="symbol-label">
																							<span
                                                                                                class="svg-icon svg-icon-2x svg-icon-primary">
																								<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Media/Playlist1.svg-->
																								<svg
                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                    width="24px"
                                                                                                    height="24px"
                                                                                                    viewBox="0 0 24 24"
                                                                                                    version="1.1">
																									<g stroke="none"
                                                                                                       stroke-width="1"
                                                                                                       fill="none"
                                                                                                       fill-rule="evenodd">
																										<rect x="0"
                                                                                                              y="0"
                                                                                                              width="24"
                                                                                                              height="24"></rect>
																										<path
                                                                                                            d="M8.97852058,18.8007059 C8.80029331,20.0396328 7.53473012,21 6,21 C4.34314575,21 3,19.8807119 3,18.5 C3,17.1192881 4.34314575,16 6,16 C6.35063542,16 6.68722107,16.0501285 7,16.1422548 L7,5.93171093 C7,5.41893942 7.31978104,4.96566617 7.78944063,4.81271925 L13.5394406,3.05418311 C14.2638626,2.81827161 15,3.38225531 15,4.1731748 C15,4.95474642 15,5.54092513 15,5.93171093 C15,6.51788965 14.4511634,6.89225606 14,7 C13.3508668,7.15502181 11.6842001,7.48835515 9,8 L9,18.5512168 C9,18.6409956 8.9927193,18.7241187 8.97852058,18.8007059 Z"
                                                                                                            fill="#000000"
                                                                                                            fill-rule="nonzero"></path>
																										<path
                                                                                                            d="M16,9 L20,9 C20.5522847,9 21,9.44771525 21,10 C21,10.5522847 20.5522847,11 20,11 L16,11 C15.4477153,11 15,10.5522847 15,10 C15,9.44771525 15.4477153,9 16,9 Z M14,13 L20,13 C20.5522847,13 21,13.4477153 21,14 C21,14.5522847 20.5522847,15 20,15 L14,15 C13.4477153,15 13,14.5522847 13,14 C13,13.4477153 13.4477153,13 14,13 Z M14,17 L20,17 C20.5522847,17 21,17.4477153 21,18 C21,18.5522847 20.5522847,19 20,19 L14,19 C13.4477153,19 13,18.5522847 13,18 C13,17.4477153 13.4477153,17 14,17 Z"
                                                                                                            fill="#000000"
                                                                                                            opacity="0.3"></path>
																									</g>
																								</svg>
                                                                                                <!--end::Svg Icon-->
																							</span>
																						</span>
                                                                </div>
                                                            </td>
                                                            <td class="pl-0">
                                                                <a href="#"
                                                                   class="text-muted font-weight-bolder text-hover-primary mb-1 font-size-lg">Angular
                                                                    Version</a>
                                                                <span class="text-dark-25 font-weight-bold d-block">By Rose Liam</span>
                                                            </td>
                                                            <td class="text-left">
                                                                <span
                                                                    class="text-muted font-weight-bolder d-block font-size-lg">9:20 - 10:00</span>
                                                                <span
                                                                    class="text-dark-25 font-weight-bold d-block font-size-sm">Time</span>
                                                            </td>
                                                            <td class="text-right pr-0">
                                                                <a href="#" class="btn btn-icon btn-light btn-sm">
																						<span
                                                                                            class="svg-icon svg-icon-md svg-icon-success">
																							<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
																							<svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                width="24px"
                                                                                                height="24px"
                                                                                                viewBox="0 0 24 24"
                                                                                                version="1.1">
																								<g stroke="none"
                                                                                                   stroke-width="1"
                                                                                                   fill="none"
                                                                                                   fill-rule="evenodd">
																									<polygon
                                                                                                        points="0 0 24 0 24 24 0 24"></polygon>
																									<rect fill="#000000"
                                                                                                          opacity="0.3"
                                                                                                          transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                                                          x="11" y="5"
                                                                                                          width="2"
                                                                                                          height="14"
                                                                                                          rx="1"></rect>
																									<path
                                                                                                        d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                                        fill="#000000"
                                                                                                        fill-rule="nonzero"
                                                                                                        transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"></path>
																								</g>
																							</svg>
                                                                                            <!--end::Svg Icon-->
																						</span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="pl-0 py-5">
                                                                <div class="symbol symbol-45 symbol-light-danger mr-2">
																						<span class="symbol-label">
																							<span
                                                                                                class="svg-icon svg-icon-2x svg-icon-danger">
																								<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
																								<svg
                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                    width="24px"
                                                                                                    height="24px"
                                                                                                    viewBox="0 0 24 24"
                                                                                                    version="1.1">
																									<g stroke="none"
                                                                                                       stroke-width="1"
                                                                                                       fill="none"
                                                                                                       fill-rule="evenodd">
																										<rect x="0"
                                                                                                              y="0"
                                                                                                              width="24"
                                                                                                              height="24"></rect>
																										<rect
                                                                                                            fill="#000000"
                                                                                                            x="4" y="4"
                                                                                                            width="7"
                                                                                                            height="7"
                                                                                                            rx="1.5"></rect>
																										<path
                                                                                                            d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                                                                                                            fill="#000000"
                                                                                                            opacity="0.3"></path>
																									</g>
																								</svg>
                                                                                                <!--end::Svg Icon-->
																							</span>
																						</span>
                                                                </div>
                                                            </td>
                                                            <td class="pl-0">
                                                                <a href="#"
                                                                   class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Maths</a>
                                                                <span class="text-muted font-weight-bold d-block">By Tom Gere</span>
                                                            </td>
                                                            <td class="text-left">
                                                                <span
                                                                    class="text-dark-75 font-weight-bolder d-block font-size-lg">10:20 - 11:00</span>
                                                                <span
                                                                    class="text-muted font-weight-bold d-block font-size-sm">Time</span>
                                                            </td>
                                                            <td class="text-right pr-0">
                                                                <a href="#" class="btn btn-icon btn-light btn-sm">
																						<span
                                                                                            class="svg-icon svg-icon-md svg-icon-success">
																							<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
																							<svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                width="24px"
                                                                                                height="24px"
                                                                                                viewBox="0 0 24 24"
                                                                                                version="1.1">
																								<g stroke="none"
                                                                                                   stroke-width="1"
                                                                                                   fill="none"
                                                                                                   fill-rule="evenodd">
																									<polygon
                                                                                                        points="0 0 24 0 24 24 0 24"></polygon>
																									<rect fill="#000000"
                                                                                                          opacity="0.3"
                                                                                                          transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                                                          x="11" y="5"
                                                                                                          width="2"
                                                                                                          height="14"
                                                                                                          rx="1"></rect>
																									<path
                                                                                                        d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                                        fill="#000000"
                                                                                                        fill-rule="nonzero"
                                                                                                        transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"></path>
																								</g>
																							</svg>
                                                                                            <!--end::Svg Icon-->
																						</span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                        <!--end::Tbody-->
                                                    </table>
                                                </div>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Tap pane-->
                                            <!--begin::Tap pane-->
                                            <div class="tab-pane fade show active" id="doctor_notes" role="tabpanel"
                                                 aria-labelledby="doctor_notes">
                                                <!--begin::Doctor Notes Form -->
                                                <form class="form-group row fv-plugins-icon-container">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="patient_id" value="{{ $patient->id }}">
                                                    <div class="col-lg-12 col-md-9 col-sm-12">
                                                        <label for="note_value"></label>
                                                        <textarea class="form-control form-control-solid" id="note_value" name="note_value"
                                                                  placeholder="أضف ملاحظة .." rows="2"></textarea>

                                                    </div>
                                                    <button id="save_doctor_notes"
                                                            class="btn btn-primary btn-sm mr-2 mt-3 ml-auto">إضافة
                                                    </button>
                                                </form>
                                                @foreach($patient->notes->slice(0, 3) as $note)
                                                    <div class="timeline timeline-3 mb-3" id="notes_tree">
                                                        <div class="timeline-items">
                                                            <div class="timeline-item">
                                                                <div class="timeline-media">
                                                                    <img alt="Pic"
                                                                         src="">
                                                                </div>
                                                                <div class="timeline-content">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between ">
                                                                        <div class="mr-2">
<!--                                                                            <a href="#"
                                                                               class="text-dark-75 text-hover-primary font-weight-bold">New
                                                                                order has been placed</a>-->
                                                                            <span class="text-muted ml-2">{{ $note->created_at->diffForHumans() }}</span>
                                                                            <span
                                                                                class="label label-light-success font-weight-bolder label-inline ml-3">new</span>
                                                                        </div>
                                                                    </div>
                                                                    <a href="{{ route('admin.notes.edit' , $note->id) }}" class="p-0 pt-3 my-2 ml-2"> {!! $note->note !!}</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <!--end::Tap pane-->
                                        </div>
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Base Table Widget 9-->

                                <!--begin::Base Table Widget 1-->
                                <div class="card card-custom gutter-b">
                                    <!--begin::Header-->
                                    <div class="card-header border-0 pt-5">
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label font-weight-bolder text-dark">Trending Items</span>
                                            <span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span>
                                        </h3>
                                        <div class="card-toolbar">
                                            <ul class="nav nav-pills nav-pills-sm nav-dark-75">
                                                <li class="nav-item">
                                                    <a class="nav-link py-2 px-4" data-toggle="tab"
                                                       href="#kt_tab_pane_1_1">Month</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link py-2 px-4" data-toggle="tab"
                                                       href="#kt_tab_pane_1_2">Week</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link py-2 px-4 active" data-toggle="tab"
                                                       href="#kt_tab_pane_1_3">Day</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Body-->
                                    <div class="card-body pt-2 pb-0 mt-n3">
                                        <div class="tab-content mt-5" id="myTabTables1">
                                            <!--begin::Tap pane-->
                                            <div class="tab-pane fade" id="kt_tab_pane_1_1" role="tabpanel"
                                                 aria-labelledby="kt_tab_pane_1_1">
                                                <!--begin::Table-->
                                                <div class="table-responsive">
                                                    <table class="table table-borderless table-vertical-center">
                                                        <thead>
                                                        <tr>
                                                            <th class="p-0 w-50px"></th>
                                                            <th class="p-0 min-w-100px"></th>
                                                            <th class="p-0 min-w-100px"></th>
                                                            <th class="p-0 min-w-40px"></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <th class="pl-0 py-5">
                                                                <div class="symbol symbol-50 symbol-light mr-2">
																						<span class="symbol-label">
																							<img
                                                                                                src="https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/svg/misc/005-bebo.svg"
                                                                                                class="h-50 align-self-center"
                                                                                                alt="">
																						</span>
                                                                </div>
                                                            </th>
                                                            <td class="py-6 pl-0">
                                                                <a href="#"
                                                                   class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Active
                                                                    Customers</a>
                                                                <span class="text-muted font-weight-bold d-block">Best Customers</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex flex-column w-100 mr-2">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between mb-2">
                                                                        <span
                                                                            class="text-muted mr-2 font-size-sm font-weight-bold">71%</span>
                                                                        <span
                                                                            class="text-muted font-size-sm font-weight-bold">Progress</span>
                                                                    </div>
                                                                    <div class="progress progress-xs w-100">
                                                                        <div class="progress-bar bg-danger"
                                                                             role="progressbar" style="width: 71%;"
                                                                             aria-valuenow="50" aria-valuemin="0"
                                                                             aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-right pr-0">
                                                                <a href="#" class="btn btn-icon btn-light btn-sm">
																						<span
                                                                                            class="svg-icon svg-icon-md svg-icon-success">
																							<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
																							<svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                width="24px"
                                                                                                height="24px"
                                                                                                viewBox="0 0 24 24"
                                                                                                version="1.1">
																								<g stroke="none"
                                                                                                   stroke-width="1"
                                                                                                   fill="none"
                                                                                                   fill-rule="evenodd">
																									<polygon
                                                                                                        points="0 0 24 0 24 24 0 24"></polygon>
																									<rect fill="#000000"
                                                                                                          opacity="0.3"
                                                                                                          transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                                                          x="11" y="5"
                                                                                                          width="2"
                                                                                                          height="14"
                                                                                                          rx="1"></rect>
																									<path
                                                                                                        d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                                        fill="#000000"
                                                                                                        fill-rule="nonzero"
                                                                                                        transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"></path>
																								</g>
																							</svg>
                                                                                            <!--end::Svg Icon-->
																						</span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="pl-0 py-5">
                                                                <div class="symbol symbol-50 symbol-light mr-2">
																						<span class="symbol-label">
																							<img
                                                                                                src="https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/svg/misc/014-kickstarter.svg"
                                                                                                class="h-50 align-self-center"
                                                                                                alt="">
																						</span>
                                                                </div>
                                                            </th>
                                                            <td class="pl-0">
                                                                <a href="#"
                                                                   class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Bestseller
                                                                    Theme</a>
                                                                <span class="text-muted font-weight-bold d-block">Amazing Templates</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex flex-column w-100 mr-2">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between mb-2">
                                                                        <span
                                                                            class="text-muted mr-2 font-size-sm font-weight-bold">50%</span>
                                                                        <span
                                                                            class="text-muted font-size-sm font-weight-bold">Progress</span>
                                                                    </div>
                                                                    <div class="progress progress-xs w-100">
                                                                        <div class="progress-bar bg-info"
                                                                             role="progressbar" style="width: 50%;"
                                                                             aria-valuenow="50" aria-valuemin="0"
                                                                             aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-right pr-0">
                                                                <a href="#" class="btn btn-icon btn-light btn-sm">
																						<span
                                                                                            class="svg-icon svg-icon-md svg-icon-success">
																							<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
																							<svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                width="24px"
                                                                                                height="24px"
                                                                                                viewBox="0 0 24 24"
                                                                                                version="1.1">
																								<g stroke="none"
                                                                                                   stroke-width="1"
                                                                                                   fill="none"
                                                                                                   fill-rule="evenodd">
																									<polygon
                                                                                                        points="0 0 24 0 24 24 0 24"></polygon>
																									<rect fill="#000000"
                                                                                                          opacity="0.3"
                                                                                                          transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                                                          x="11" y="5"
                                                                                                          width="2"
                                                                                                          height="14"
                                                                                                          rx="1"></rect>
																									<path
                                                                                                        d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                                        fill="#000000"
                                                                                                        fill-rule="nonzero"
                                                                                                        transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"></path>
																								</g>
																							</svg>
                                                                                            <!--end::Svg Icon-->
																						</span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="pl-0 py-5">
                                                                <div class="symbol symbol-50 symbol-light mr-2">
																						<span class="symbol-label">
																							<img
                                                                                                src="https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/svg/misc/006-plurk.svg"
                                                                                                class="h-50 align-self-center"
                                                                                                alt="">
																						</span>
                                                                </div>
                                                            </td>
                                                            <td class="pl-0">
                                                                <a href="#"
                                                                   class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Top
                                                                    Authors</a>
                                                                <span class="text-muted font-weight-bold d-block">Successful Fellas</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex flex-column w-100 mr-2">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between mb-2">
                                                                        <span
                                                                            class="text-muted mr-2 font-size-sm font-weight-bold">65%</span>
                                                                        <span
                                                                            class="text-muted font-size-sm font-weight-bold">Progress</span>
                                                                    </div>
                                                                    <div class="progress progress-xs w-100">
                                                                        <div class="progress-bar bg-danger"
                                                                             role="progressbar" style="width: 65%;"
                                                                             aria-valuenow="50" aria-valuemin="0"
                                                                             aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-right pr-0">
                                                                <a href="#" class="btn btn-icon btn-light btn-sm">
																						<span
                                                                                            class="svg-icon svg-icon-md svg-icon-success">
																							<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
																							<svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                width="24px"
                                                                                                height="24px"
                                                                                                viewBox="0 0 24 24"
                                                                                                version="1.1">
																								<g stroke="none"
                                                                                                   stroke-width="1"
                                                                                                   fill="none"
                                                                                                   fill-rule="evenodd">
																									<polygon
                                                                                                        points="0 0 24 0 24 24 0 24"></polygon>
																									<rect fill="#000000"
                                                                                                          opacity="0.3"
                                                                                                          transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                                                          x="11" y="5"
                                                                                                          width="2"
                                                                                                          height="14"
                                                                                                          rx="1"></rect>
																									<path
                                                                                                        d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                                        fill="#000000"
                                                                                                        fill-rule="nonzero"
                                                                                                        transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"></path>
																								</g>
																							</svg>
                                                                                            <!--end::Svg Icon-->
																						</span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="pl-0 py-5">
                                                                <div class="symbol symbol-50 symbol-light mr-2">
																						<span class="symbol-label">
																							<img
                                                                                                src="https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/svg/misc/015-telegram.svg"
                                                                                                class="h-50 align-self-center"
                                                                                                alt="">
																						</span>
                                                                </div>
                                                            </th>
                                                            <td class="pl-0">
                                                                <a href="#"
                                                                   class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Popular
                                                                    Authors</a>
                                                                <span class="text-muted font-weight-bold d-block">Most Successful</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex flex-column w-100 mr-2">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between mb-2">
                                                                        <span
                                                                            class="text-muted mr-2 font-size-sm font-weight-bold">83%</span>
                                                                        <span
                                                                            class="text-muted font-size-sm font-weight-bold">Progress</span>
                                                                    </div>
                                                                    <div class="progress progress-xs w-100">
                                                                        <div class="progress-bar bg-success"
                                                                             role="progressbar" style="width: 83%;"
                                                                             aria-valuenow="50" aria-valuemin="0"
                                                                             aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-right pr-0">
                                                                <a href="#" class="btn btn-icon btn-light btn-sm">
																						<span
                                                                                            class="svg-icon svg-icon-md svg-icon-success">
																							<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
																							<svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                width="24px"
                                                                                                height="24px"
                                                                                                viewBox="0 0 24 24"
                                                                                                version="1.1">
																								<g stroke="none"
                                                                                                   stroke-width="1"
                                                                                                   fill="none"
                                                                                                   fill-rule="evenodd">
																									<polygon
                                                                                                        points="0 0 24 0 24 24 0 24"></polygon>
																									<rect fill="#000000"
                                                                                                          opacity="0.3"
                                                                                                          transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                                                          x="11" y="5"
                                                                                                          width="2"
                                                                                                          height="14"
                                                                                                          rx="1"></rect>
																									<path
                                                                                                        d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                                        fill="#000000"
                                                                                                        fill-rule="nonzero"
                                                                                                        transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"></path>
																								</g>
																							</svg>
                                                                                            <!--end::Svg Icon-->
																						</span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="pl-0 py-5">
                                                                <div class="symbol symbol-50 symbol-light mr-2">
																						<span class="symbol-label">
																							<img
                                                                                                src="https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/svg/misc/003-puzzle.svg"
                                                                                                class="h-50 align-self-center"
                                                                                                alt="">
																						</span>
                                                                </div>
                                                            </th>
                                                            <td class="pl-0">
                                                                <a href="#"
                                                                   class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">New
                                                                    Users</a>
                                                                <span class="text-muted font-weight-bold d-block">Awesome Users</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex flex-column w-100 mr-2">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between mb-2">
                                                                        <span
                                                                            class="text-muted mr-2 font-size-sm font-weight-bold">47%</span>
                                                                        <span
                                                                            class="text-muted font-size-sm font-weight-bold">Progress</span>
                                                                    </div>
                                                                    <div class="progress progress-xs w-100">
                                                                        <div class="progress-bar bg-primary"
                                                                             role="progressbar" style="width: 47%;"
                                                                             aria-valuenow="50" aria-valuemin="0"
                                                                             aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-right pr-0">
                                                                <a href="#" class="btn btn-icon btn-light btn-sm">
																						<span
                                                                                            class="svg-icon svg-icon-md svg-icon-success">
																							<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
																							<svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                width="24px"
                                                                                                height="24px"
                                                                                                viewBox="0 0 24 24"
                                                                                                version="1.1">
																								<g stroke="none"
                                                                                                   stroke-width="1"
                                                                                                   fill="none"
                                                                                                   fill-rule="evenodd">
																									<polygon
                                                                                                        points="0 0 24 0 24 24 0 24"></polygon>
																									<rect fill="#000000"
                                                                                                          opacity="0.3"
                                                                                                          transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                                                          x="11" y="5"
                                                                                                          width="2"
                                                                                                          height="14"
                                                                                                          rx="1"></rect>
																									<path
                                                                                                        d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                                        fill="#000000"
                                                                                                        fill-rule="nonzero"
                                                                                                        transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"></path>
																								</g>
																							</svg>
                                                                                            <!--end::Svg Icon-->
																						</span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Tap pane-->
                                            <!--begin::Tap pane-->
                                            <div class="tab-pane fade" id="kt_tab_pane_1_2" role="tabpanel"
                                                 aria-labelledby="kt_tab_pane_1_2">
                                                <!--begin::Table-->
                                                <div class="table-responsive">
                                                    <table class="table table-borderless table-vertical-center">
                                                        <thead>
                                                        <tr>
                                                            <th class="p-0 w-50px"></th>
                                                            <th class="p-0 min-w-100px"></th>
                                                            <th class="p-0 min-w-100px"></th>
                                                            <th class="p-0 min-w-40px"></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <th class="pl-0 py-5">
                                                                <div class="symbol symbol-50 symbol-light mr-2">
																						<span class="symbol-label">
																							<img
                                                                                                src="https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/svg/misc/015-telegram.svg"
                                                                                                class="h-50 align-self-center"
                                                                                                alt="">
																						</span>
                                                                </div>
                                                            </th>
                                                            <td class="pl-0">
                                                                <a href="#"
                                                                   class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Popular
                                                                    Authors</a>
                                                                <span class="text-muted font-weight-bold d-block">Most Successful</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex flex-column w-100 mr-2">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between mb-2">
                                                                        <span
                                                                            class="text-muted mr-2 font-size-sm font-weight-bold">83%</span>
                                                                        <span
                                                                            class="text-muted font-size-sm font-weight-bold">Progress</span>
                                                                    </div>
                                                                    <div class="progress progress-xs w-100">
                                                                        <div class="progress-bar bg-success"
                                                                             role="progressbar" style="width: 83%;"
                                                                             aria-valuenow="50" aria-valuemin="0"
                                                                             aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-right pr-0">
                                                                <a href="#" class="btn btn-icon btn-light btn-sm">
																						<span
                                                                                            class="svg-icon svg-icon-md svg-icon-success">
																							<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
																							<svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                width="24px"
                                                                                                height="24px"
                                                                                                viewBox="0 0 24 24"
                                                                                                version="1.1">
																								<g stroke="none"
                                                                                                   stroke-width="1"
                                                                                                   fill="none"
                                                                                                   fill-rule="evenodd">
																									<polygon
                                                                                                        points="0 0 24 0 24 24 0 24"></polygon>
																									<rect fill="#000000"
                                                                                                          opacity="0.3"
                                                                                                          transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                                                          x="11" y="5"
                                                                                                          width="2"
                                                                                                          height="14"
                                                                                                          rx="1"></rect>
																									<path
                                                                                                        d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                                        fill="#000000"
                                                                                                        fill-rule="nonzero"
                                                                                                        transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"></path>
																								</g>
																							</svg>
                                                                                            <!--end::Svg Icon-->
																						</span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="pl-0 py-5">
                                                                <div class="symbol symbol-50 symbol-light mr-2">
																						<span class="symbol-label">
																							<img
                                                                                                src="https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/svg/misc/003-puzzle.svg"
                                                                                                class="h-50 align-self-center"
                                                                                                alt="">
																						</span>
                                                                </div>
                                                            </th>
                                                            <td class="pl-0">
                                                                <a href="#"
                                                                   class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">New
                                                                    Users</a>
                                                                <span class="text-muted font-weight-bold d-block">Awesome Users</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex flex-column w-100 mr-2">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between mb-2">
                                                                        <span
                                                                            class="text-muted mr-2 font-size-sm font-weight-bold">47%</span>
                                                                        <span
                                                                            class="text-muted font-size-sm font-weight-bold">Progress</span>
                                                                    </div>
                                                                    <div class="progress progress-xs w-100">
                                                                        <div class="progress-bar bg-primary"
                                                                             role="progressbar" style="width: 47%;"
                                                                             aria-valuenow="50" aria-valuemin="0"
                                                                             aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-right pr-0">
                                                                <a href="#" class="btn btn-icon btn-light btn-sm">
																						<span
                                                                                            class="svg-icon svg-icon-md svg-icon-success">
																							<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
																							<svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                width="24px"
                                                                                                height="24px"
                                                                                                viewBox="0 0 24 24"
                                                                                                version="1.1">
																								<g stroke="none"
                                                                                                   stroke-width="1"
                                                                                                   fill="none"
                                                                                                   fill-rule="evenodd">
																									<polygon
                                                                                                        points="0 0 24 0 24 24 0 24"></polygon>
																									<rect fill="#000000"
                                                                                                          opacity="0.3"
                                                                                                          transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                                                          x="11" y="5"
                                                                                                          width="2"
                                                                                                          height="14"
                                                                                                          rx="1"></rect>
																									<path
                                                                                                        d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                                        fill="#000000"
                                                                                                        fill-rule="nonzero"
                                                                                                        transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"></path>
																								</g>
																							</svg>
                                                                                            <!--end::Svg Icon-->
																						</span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="pl-0 py-5">
                                                                <div class="symbol symbol-50 symbol-light mr-2">
																						<span class="symbol-label">
																							<img
                                                                                                src="https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/svg/misc/005-bebo.svg"
                                                                                                class="h-50 align-self-center"
                                                                                                alt="">
																						</span>
                                                                </div>
                                                            </th>
                                                            <td class="py-6 pl-0">
                                                                <a href="#"
                                                                   class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Active
                                                                    Customers</a>
                                                                <span class="text-muted font-weight-bold d-block">Best Customers</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex flex-column w-100 mr-2">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between mb-2">
                                                                        <span
                                                                            class="text-muted mr-2 font-size-sm font-weight-bold">71%</span>
                                                                        <span
                                                                            class="text-muted font-size-sm font-weight-bold">Progress</span>
                                                                    </div>
                                                                    <div class="progress progress-xs w-100">
                                                                        <div class="progress-bar bg-danger"
                                                                             role="progressbar" style="width: 71%;"
                                                                             aria-valuenow="50" aria-valuemin="0"
                                                                             aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-right pr-0">
                                                                <a href="#" class="btn btn-icon btn-light btn-sm">
																						<span
                                                                                            class="svg-icon svg-icon-md svg-icon-success">
																							<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
																							<svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                width="24px"
                                                                                                height="24px"
                                                                                                viewBox="0 0 24 24"
                                                                                                version="1.1">
																								<g stroke="none"
                                                                                                   stroke-width="1"
                                                                                                   fill="none"
                                                                                                   fill-rule="evenodd">
																									<polygon
                                                                                                        points="0 0 24 0 24 24 0 24"></polygon>
																									<rect fill="#000000"
                                                                                                          opacity="0.3"
                                                                                                          transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                                                          x="11" y="5"
                                                                                                          width="2"
                                                                                                          height="14"
                                                                                                          rx="1"></rect>
																									<path
                                                                                                        d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                                        fill="#000000"
                                                                                                        fill-rule="nonzero"
                                                                                                        transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"></path>
																								</g>
																							</svg>
                                                                                            <!--end::Svg Icon-->
																						</span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="pl-0 py-5">
                                                                <div class="symbol symbol-50 symbol-light mr-2">
																						<span class="symbol-label">
																							<img
                                                                                                src="https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/svg/misc/006-plurk.svg"
                                                                                                class="h-50 align-self-center"
                                                                                                alt="">
																						</span>
                                                                </div>
                                                            </td>
                                                            <td class="pl-0">
                                                                <a href="#"
                                                                   class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Top
                                                                    Authors</a>
                                                                <span class="text-muted font-weight-bold d-block">Successful Fellas</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex flex-column w-100 mr-2">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between mb-2">
                                                                        <span
                                                                            class="text-muted mr-2 font-size-sm font-weight-bold">65%</span>
                                                                        <span
                                                                            class="text-muted font-size-sm font-weight-bold">Progress</span>
                                                                    </div>
                                                                    <div class="progress progress-xs w-100">
                                                                        <div class="progress-bar bg-danger"
                                                                             role="progressbar" style="width: 65%;"
                                                                             aria-valuenow="50" aria-valuemin="0"
                                                                             aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-right pr-0">
                                                                <a href="#" class="btn btn-icon btn-light btn-sm">
																						<span
                                                                                            class="svg-icon svg-icon-md svg-icon-success">
																							<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
																							<svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                width="24px"
                                                                                                height="24px"
                                                                                                viewBox="0 0 24 24"
                                                                                                version="1.1">
																								<g stroke="none"
                                                                                                   stroke-width="1"
                                                                                                   fill="none"
                                                                                                   fill-rule="evenodd">
																									<polygon
                                                                                                        points="0 0 24 0 24 24 0 24"></polygon>
																									<rect fill="#000000"
                                                                                                          opacity="0.3"
                                                                                                          transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                                                          x="11" y="5"
                                                                                                          width="2"
                                                                                                          height="14"
                                                                                                          rx="1"></rect>
																									<path
                                                                                                        d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                                        fill="#000000"
                                                                                                        fill-rule="nonzero"
                                                                                                        transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"></path>
																								</g>
																							</svg>
                                                                                            <!--end::Svg Icon-->
																						</span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="pl-0 py-5">
                                                                <div class="symbol symbol-50 symbol-light mr-2">
																						<span class="symbol-label">
																							<img
                                                                                                src="https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/svg/misc/014-kickstarter.svg"
                                                                                                class="h-50 align-self-center"
                                                                                                alt="">
																						</span>
                                                                </div>
                                                            </th>
                                                            <td class="pl-0">
                                                                <a href="#"
                                                                   class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Bestseller
                                                                    Theme</a>
                                                                <span class="text-muted font-weight-bold d-block">Amazing Templates</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex flex-column w-100 mr-2">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between mb-2">
                                                                        <span
                                                                            class="text-muted mr-2 font-size-sm font-weight-bold">50%</span>
                                                                        <span
                                                                            class="text-muted font-size-sm font-weight-bold">Progress</span>
                                                                    </div>
                                                                    <div class="progress progress-xs w-100">
                                                                        <div class="progress-bar bg-info"
                                                                             role="progressbar" style="width: 50%;"
                                                                             aria-valuenow="50" aria-valuemin="0"
                                                                             aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-right pr-0">
                                                                <a href="#" class="btn btn-icon btn-light btn-sm">
																						<span
                                                                                            class="svg-icon svg-icon-md svg-icon-success">
																							<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
																							<svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                width="24px"
                                                                                                height="24px"
                                                                                                viewBox="0 0 24 24"
                                                                                                version="1.1">
																								<g stroke="none"
                                                                                                   stroke-width="1"
                                                                                                   fill="none"
                                                                                                   fill-rule="evenodd">
																									<polygon
                                                                                                        points="0 0 24 0 24 24 0 24"></polygon>
																									<rect fill="#000000"
                                                                                                          opacity="0.3"
                                                                                                          transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                                                          x="11" y="5"
                                                                                                          width="2"
                                                                                                          height="14"
                                                                                                          rx="1"></rect>
																									<path
                                                                                                        d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                                        fill="#000000"
                                                                                                        fill-rule="nonzero"
                                                                                                        transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"></path>
																								</g>
																							</svg>
                                                                                            <!--end::Svg Icon-->
																						</span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Tap pane-->
                                            <!--begin::Tap pane-->
                                            <div class="tab-pane fade show active" id="kt_tab_pane_1_3" role="tabpanel"
                                                 aria-labelledby="kt_tab_pane_1_3">
                                                <!--begin::Table-->
                                                <div class="table-responsive">
                                                    <table class="table table-borderless table-vertical-center">
                                                        <thead>
                                                        <tr>
                                                            <th class="p-0 w-50px"></th>
                                                            <th class="p-0 min-w-100px"></th>
                                                            <th class="p-0 min-w-100px"></th>
                                                            <th class="p-0 min-w-40px"></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td class="pl-0 py-5">
                                                                <div class="symbol symbol-50 symbol-light mr-2">
																						<span class="symbol-label">
																							<img
                                                                                                src="https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/svg/misc/006-plurk.svg"
                                                                                                class="h-50 align-self-center"
                                                                                                alt="">
																						</span>
                                                                </div>
                                                            </td>
                                                            <td class="pl-0">
                                                                <a href="#"
                                                                   class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Top
                                                                    Authors</a>
                                                                <span class="text-muted font-weight-bold d-block">Successful Fellas</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex flex-column w-100 mr-2">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between mb-2">
                                                                        <span
                                                                            class="text-muted mr-2 font-size-sm font-weight-bold">65%</span>
                                                                        <span
                                                                            class="text-muted font-size-sm font-weight-bold">Progress</span>
                                                                    </div>
                                                                    <div class="progress progress-xs w-100">
                                                                        <div class="progress-bar bg-danger"
                                                                             role="progressbar" style="width: 65%;"
                                                                             aria-valuenow="50" aria-valuemin="0"
                                                                             aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-right pr-0">
                                                                <a href="#" class="btn btn-icon btn-light btn-sm">
																						<span
                                                                                            class="svg-icon svg-icon-md svg-icon-success">
																							<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
																							<svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                width="24px"
                                                                                                height="24px"
                                                                                                viewBox="0 0 24 24"
                                                                                                version="1.1">
																								<g stroke="none"
                                                                                                   stroke-width="1"
                                                                                                   fill="none"
                                                                                                   fill-rule="evenodd">
																									<polygon
                                                                                                        points="0 0 24 0 24 24 0 24"></polygon>
																									<rect fill="#000000"
                                                                                                          opacity="0.3"
                                                                                                          transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                                                          x="11" y="5"
                                                                                                          width="2"
                                                                                                          height="14"
                                                                                                          rx="1"></rect>
																									<path
                                                                                                        d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                                        fill="#000000"
                                                                                                        fill-rule="nonzero"
                                                                                                        transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"></path>
																								</g>
																							</svg>
                                                                                            <!--end::Svg Icon-->
																						</span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="pl-0 py-5">
                                                                <div class="symbol symbol-50 symbol-light mr-2">
																						<span class="symbol-label">
																							<img
                                                                                                src="https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/svg/misc/015-telegram.svg"
                                                                                                class="h-50 align-self-center"
                                                                                                alt="">
																						</span>
                                                                </div>
                                                            </th>
                                                            <td class="pl-0">
                                                                <a href="#"
                                                                   class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Popular
                                                                    Authors</a>
                                                                <span class="text-muted font-weight-bold d-block">Most Successful</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex flex-column w-100 mr-2">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between mb-2">
                                                                        <span
                                                                            class="text-muted mr-2 font-size-sm font-weight-bold">83%</span>
                                                                        <span
                                                                            class="text-muted font-size-sm font-weight-bold">Progress</span>
                                                                    </div>
                                                                    <div class="progress progress-xs w-100">
                                                                        <div class="progress-bar bg-success"
                                                                             role="progressbar" style="width: 83%;"
                                                                             aria-valuenow="50" aria-valuemin="0"
                                                                             aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-right pr-0">
                                                                <a href="#" class="btn btn-icon btn-light btn-sm">
																						<span
                                                                                            class="svg-icon svg-icon-md svg-icon-success">
																							<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
																							<svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                width="24px"
                                                                                                height="24px"
                                                                                                viewBox="0 0 24 24"
                                                                                                version="1.1">
																								<g stroke="none"
                                                                                                   stroke-width="1"
                                                                                                   fill="none"
                                                                                                   fill-rule="evenodd">
																									<polygon
                                                                                                        points="0 0 24 0 24 24 0 24"></polygon>
																									<rect fill="#000000"
                                                                                                          opacity="0.3"
                                                                                                          transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                                                          x="11" y="5"
                                                                                                          width="2"
                                                                                                          height="14"
                                                                                                          rx="1"></rect>
																									<path
                                                                                                        d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                                        fill="#000000"
                                                                                                        fill-rule="nonzero"
                                                                                                        transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"></path>
																								</g>
																							</svg>
                                                                                            <!--end::Svg Icon-->
																						</span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="pl-0 py-5">
                                                                <div class="symbol symbol-50 symbol-light mr-2">
																						<span class="symbol-label">
																							<img
                                                                                                src="https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/svg/misc/003-puzzle.svg"
                                                                                                class="h-50 align-self-center"
                                                                                                alt="">
																						</span>
                                                                </div>
                                                            </th>
                                                            <td class="pl-0">
                                                                <a href="#"
                                                                   class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">New
                                                                    Users</a>
                                                                <span class="text-muted font-weight-bold d-block">Awesome Users</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex flex-column w-100 mr-2">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between mb-2">
                                                                        <span
                                                                            class="text-muted mr-2 font-size-sm font-weight-bold">47%</span>
                                                                        <span
                                                                            class="text-muted font-size-sm font-weight-bold">Progress</span>
                                                                    </div>
                                                                    <div class="progress progress-xs w-100">
                                                                        <div class="progress-bar bg-primary"
                                                                             role="progressbar" style="width: 47%;"
                                                                             aria-valuenow="50" aria-valuemin="0"
                                                                             aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-right pr-0">
                                                                <a href="#" class="btn btn-icon btn-light btn-sm">
																						<span
                                                                                            class="svg-icon svg-icon-md svg-icon-success">
																							<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
																							<svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                width="24px"
                                                                                                height="24px"
                                                                                                viewBox="0 0 24 24"
                                                                                                version="1.1">
																								<g stroke="none"
                                                                                                   stroke-width="1"
                                                                                                   fill="none"
                                                                                                   fill-rule="evenodd">
																									<polygon
                                                                                                        points="0 0 24 0 24 24 0 24"></polygon>
																									<rect fill="#000000"
                                                                                                          opacity="0.3"
                                                                                                          transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                                                          x="11" y="5"
                                                                                                          width="2"
                                                                                                          height="14"
                                                                                                          rx="1"></rect>
																									<path
                                                                                                        d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                                        fill="#000000"
                                                                                                        fill-rule="nonzero"
                                                                                                        transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"></path>
																								</g>
																							</svg>
                                                                                            <!--end::Svg Icon-->
																						</span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="pl-0 py-5">
                                                                <div class="symbol symbol-50 symbol-light mr-2">
																						<span class="symbol-label">
																							<img
                                                                                                src="https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/svg/misc/005-bebo.svg"
                                                                                                class="h-50 align-self-center"
                                                                                                alt="">
																						</span>
                                                                </div>
                                                            </th>
                                                            <td class="py-6 pl-0">
                                                                <a href="#"
                                                                   class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Active
                                                                    Customers</a>
                                                                <span class="text-muted font-weight-bold d-block">Best Customers</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex flex-column w-100 mr-2">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between mb-2">
                                                                        <span
                                                                            class="text-muted mr-2 font-size-sm font-weight-bold">71%</span>
                                                                        <span
                                                                            class="text-muted font-size-sm font-weight-bold">Progress</span>
                                                                    </div>
                                                                    <div class="progress progress-xs w-100">
                                                                        <div class="progress-bar bg-danger"
                                                                             role="progressbar" style="width: 71%;"
                                                                             aria-valuenow="50" aria-valuemin="0"
                                                                             aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-right pr-0">
                                                                <a href="#" class="btn btn-icon btn-light btn-sm">
																						<span
                                                                                            class="svg-icon svg-icon-md svg-icon-success">
																							<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
																							<svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                width="24px"
                                                                                                height="24px"
                                                                                                viewBox="0 0 24 24"
                                                                                                version="1.1">
																								<g stroke="none"
                                                                                                   stroke-width="1"
                                                                                                   fill="none"
                                                                                                   fill-rule="evenodd">
																									<polygon
                                                                                                        points="0 0 24 0 24 24 0 24"></polygon>
																									<rect fill="#000000"
                                                                                                          opacity="0.3"
                                                                                                          transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                                                          x="11" y="5"
                                                                                                          width="2"
                                                                                                          height="14"
                                                                                                          rx="1"></rect>
																									<path
                                                                                                        d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                                        fill="#000000"
                                                                                                        fill-rule="nonzero"
                                                                                                        transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"></path>
																								</g>
																							</svg>
                                                                                            <!--end::Svg Icon-->
																						</span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="pl-0 py-5">
                                                                <div class="symbol symbol-50 symbol-light mr-2">
																						<span class="symbol-label">
																							<img
                                                                                                src="https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/svg/misc/014-kickstarter.svg"
                                                                                                class="h-50 align-self-center"
                                                                                                alt="">
																						</span>
                                                                </div>
                                                            </th>
                                                            <td class="pl-0">
                                                                <a href="#"
                                                                   class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Bestseller
                                                                    Theme</a>
                                                                <span class="text-muted font-weight-bold d-block">Amazing Templates</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex flex-column w-100 mr-2">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between mb-2">
                                                                        <span
                                                                            class="text-muted mr-2 font-size-sm font-weight-bold">50%</span>
                                                                        <span
                                                                            class="text-muted font-size-sm font-weight-bold">Progress</span>
                                                                    </div>
                                                                    <div class="progress progress-xs w-100">
                                                                        <div class="progress-bar bg-info"
                                                                             role="progressbar" style="width: 50%;"
                                                                             aria-valuenow="50" aria-valuemin="0"
                                                                             aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-right pr-0">
                                                                <a href="#" class="btn btn-icon btn-light btn-sm">
																						<span
                                                                                            class="svg-icon svg-icon-md svg-icon-success">
																							<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
																							<svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                width="24px"
                                                                                                height="24px"
                                                                                                viewBox="0 0 24 24"
                                                                                                version="1.1">
																								<g stroke="none"
                                                                                                   stroke-width="1"
                                                                                                   fill="none"
                                                                                                   fill-rule="evenodd">
																									<polygon
                                                                                                        points="0 0 24 0 24 24 0 24"></polygon>
																									<rect fill="#000000"
                                                                                                          opacity="0.3"
                                                                                                          transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                                                          x="11" y="5"
                                                                                                          width="2"
                                                                                                          height="14"
                                                                                                          rx="1"></rect>
																									<path
                                                                                                        d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                                        fill="#000000"
                                                                                                        fill-rule="nonzero"
                                                                                                        transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"></path>
																								</g>
																							</svg>
                                                                                            <!--end::Svg Icon-->
																						</span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Tap pane-->
                                        </div>
                                    </div>
                                </div>
                                <!--end::Base Table Widget 1-->

                                <!--begin::Base Table Widget 10-->
                                <div class="card card-custom gutter-b">
                                    <!--begin::Header-->
                                    <div class="card-header border-0 pt-5">
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label font-weight-bolder text-dark">Upcoming Events</span>
                                            <span class="text-muted mt-3 font-weight-bold font-size-sm">Next Event is in
															<span class="text-primary">9 days</span></span>
                                        </h3>
                                        <div class="card-toolbar">
                                            <ul class="nav nav-pills nav-pills-sm nav-dark-75">
                                                <li class="nav-item">
                                                    <a class="nav-link py-2 px-4 font-weight-bolder" data-toggle="tab"
                                                       href="#kt_tab_pane_10_1">Tomorrow</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link py-2 px-4 active font-weight-bolder"
                                                       data-toggle="tab" href="#kt_tab_pane_10_2">Today</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Body-->
                                    <div class="card-body pt-2 pb-0 mt-n3">
                                        <div class="tab-content mt-5" id="myTabTables10">
                                            <!--begin::Tap pane-->
                                            <div class="tab-pane fade" id="kt_tab_pane_10_1" role="tabpanel"
                                                 aria-labelledby="kt_tab_pane_10_1">
                                                <!--begin::Table-->
                                                <div class="table-responsive">
                                                    <table class="table table-borderless table-vertical-center">
                                                        <!--begin::Thead-->
                                                        <thead>
                                                        <tr>
                                                            <th class="p-0 w-50px"></th>
                                                            <th class="p-0 w-100 min-w-100px"></th>
                                                            <th class="p-0"></th>
                                                            <th class="p-0 min-w-130px w-100"></th>
                                                        </tr>
                                                        </thead>
                                                        <!--end::Thead-->
                                                        <!--begin::Tbody-->
                                                        <tbody>
                                                        <tr>
                                                            <td class="pl-0 py-5">
                                                                <div class="symbol symbol-45 symbol-light-info mr-2">
																						<span class="symbol-label">
																							<span
                                                                                                class="svg-icon svg-icon-2x svg-icon-info">
																								<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Design/Color-profile.svg-->
																								<svg
                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                    width="24px"
                                                                                                    height="24px"
                                                                                                    viewBox="0 0 24 24"
                                                                                                    version="1.1">
																									<g stroke="none"
                                                                                                       stroke-width="1"
                                                                                                       fill="none"
                                                                                                       fill-rule="evenodd">
																										<rect x="0"
                                                                                                              y="0"
                                                                                                              width="24"
                                                                                                              height="24"></rect>
																										<path
                                                                                                            d="M12,10.9996338 C12.8356605,10.3719448 13.8743941,10 15,10 C17.7614237,10 20,12.2385763 20,15 C20,17.7614237 17.7614237,20 15,20 C13.8743941,20 12.8356605,19.6280552 12,19.0003662 C11.1643395,19.6280552 10.1256059,20 9,20 C6.23857625,20 4,17.7614237 4,15 C4,12.2385763 6.23857625,10 9,10 C10.1256059,10 11.1643395,10.3719448 12,10.9996338 Z M13.3336047,12.504354 C13.757474,13.2388026 14,14.0910788 14,15 C14,15.9088933 13.7574889,16.761145 13.3336438,17.4955783 C13.8188886,17.8206693 14.3938466,18 15,18 C16.6568542,18 18,16.6568542 18,15 C18,13.3431458 16.6568542,12 15,12 C14.3930587,12 13.8175971,12.18044 13.3336047,12.504354 Z"
                                                                                                            fill="#000000"
                                                                                                            fill-rule="nonzero"
                                                                                                            opacity="0.3"></path>
																										<circle
                                                                                                            fill="#000000"
                                                                                                            cx="12"
                                                                                                            cy="9"
                                                                                                            r="5"></circle>
																									</g>
																								</svg>
                                                                                                <!--end::Svg Icon-->
																							</span>
																						</span>
                                                                </div>
                                                            </td>
                                                            <td class="pl-0">
                                                                <a href="#"
                                                                   class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">The
                                                                    School Art Leads</a>
                                                                <span class="text-muted font-weight-bold d-block">By Ellie Cole</span>
                                                            </td>
                                                            <td></td>
                                                            <td class="text-left">
                                                                <span
                                                                    class="text-dark-75 font-weight-bolder d-block font-size-lg">03 Sep, 4:20PM</span>
                                                                <span
                                                                    class="text-muted font-weight-bold d-block font-size-sm">Time</span>
                                                            </td>
                                                            <td class="text-right pr-0">
                                                                <a href="#" class="btn btn-icon btn-light btn-sm">
																						<span
                                                                                            class="svg-icon svg-icon-md svg-icon-success">
																							<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
																							<svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                width="24px"
                                                                                                height="24px"
                                                                                                viewBox="0 0 24 24"
                                                                                                version="1.1">
																								<g stroke="none"
                                                                                                   stroke-width="1"
                                                                                                   fill="none"
                                                                                                   fill-rule="evenodd">
																									<polygon
                                                                                                        points="0 0 24 0 24 24 0 24"></polygon>
																									<rect fill="#000000"
                                                                                                          opacity="0.3"
                                                                                                          transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                                                          x="11" y="5"
                                                                                                          width="2"
                                                                                                          height="14"
                                                                                                          rx="1"></rect>
																									<path
                                                                                                        d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                                        fill="#000000"
                                                                                                        fill-rule="nonzero"
                                                                                                        transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"></path>
																								</g>
																							</svg>
                                                                                            <!--end::Svg Icon-->
																						</span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="pl-0 py-5">
                                                                <div class="symbol symbol-45 symbol-light-warning mr-2">
																						<span class="symbol-label">
																							<span
                                                                                                class="svg-icon svg-icon-2x svg-icon-warning">
																								<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Home/Library.svg-->
																								<svg
                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                    width="24px"
                                                                                                    height="24px"
                                                                                                    viewBox="0 0 24 24"
                                                                                                    version="1.1">
																									<g stroke="none"
                                                                                                       stroke-width="1"
                                                                                                       fill="none"
                                                                                                       fill-rule="evenodd">
																										<rect x="0"
                                                                                                              y="0"
                                                                                                              width="24"
                                                                                                              height="24"></rect>
																										<path
                                                                                                            d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z"
                                                                                                            fill="#000000"></path>
																										<rect
                                                                                                            fill="#000000"
                                                                                                            opacity="0.3"
                                                                                                            transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)"
                                                                                                            x="16.3255682"
                                                                                                            y="2.94551858"
                                                                                                            width="3"
                                                                                                            height="18"
                                                                                                            rx="1"></rect>
																									</g>
																								</svg>
                                                                                                <!--end::Svg Icon-->
																							</span>
																						</span>
                                                                </div>
                                                            </td>
                                                            <td class="pl-0">
                                                                <a href="#"
                                                                   class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Napoleon
                                                                    Days</a>
                                                                <span class="text-muted font-weight-bold d-block">By Luke Owen</span>
                                                            </td>
                                                            <td></td>
                                                            <td class="text-left">
                                                                <span
                                                                    class="text-dark-75 font-weight-bolder d-block font-size-lg">03 Sep, 4:20PM</span>
                                                                <span
                                                                    class="text-muted font-weight-bold d-block font-size-sm">Time</span>
                                                            </td>
                                                            <td class="text-right pr-0">
                                                                <a href="#" class="btn btn-icon btn-light btn-sm">
																						<span
                                                                                            class="svg-icon svg-icon-md svg-icon-success">
																							<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
																							<svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                width="24px"
                                                                                                height="24px"
                                                                                                viewBox="0 0 24 24"
                                                                                                version="1.1">
																								<g stroke="none"
                                                                                                   stroke-width="1"
                                                                                                   fill="none"
                                                                                                   fill-rule="evenodd">
																									<polygon
                                                                                                        points="0 0 24 0 24 24 0 24"></polygon>
																									<rect fill="#000000"
                                                                                                          opacity="0.3"
                                                                                                          transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                                                          x="11" y="5"
                                                                                                          width="2"
                                                                                                          height="14"
                                                                                                          rx="1"></rect>
																									<path
                                                                                                        d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                                        fill="#000000"
                                                                                                        fill-rule="nonzero"
                                                                                                        transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"></path>
																								</g>
																							</svg>
                                                                                            <!--end::Svg Icon-->
																						</span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="pl-0 py-5">
                                                                <div class="symbol symbol-45 symbol-light-primary mr-2">
																						<span class="symbol-label">
																							<span
                                                                                                class="svg-icon svg-icon-2x svg-icon-primary">
																								<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Home/Globe.svg-->
																								<svg
                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                    width="24px"
                                                                                                    height="24px"
                                                                                                    viewBox="0 0 24 24"
                                                                                                    version="1.1">
																									<g stroke="none"
                                                                                                       stroke-width="1"
                                                                                                       fill="none"
                                                                                                       fill-rule="evenodd">
																										<rect x="0"
                                                                                                              y="0"
                                                                                                              width="24"
                                                                                                              height="24"></rect>
																										<path
                                                                                                            d="M13,18.9450712 L13,20 L14,20 C15.1045695,20 16,20.8954305 16,22 L8,22 C8,20.8954305 8.8954305,20 10,20 L11,20 L11,18.9448245 C9.02872877,18.7261967 7.20827378,17.866394 5.79372555,16.5182701 L4.73856106,17.6741866 C4.36621808,18.0820826 3.73370941,18.110904 3.32581341,17.7385611 C2.9179174,17.3662181 2.88909597,16.7337094 3.26143894,16.3258134 L5.04940685,14.367122 C5.46150313,13.9156769 6.17860937,13.9363085 6.56406875,14.4106998 C7.88623094,16.037907 9.86320756,17 12,17 C15.8659932,17 19,13.8659932 19,10 C19,7.73468744 17.9175842,5.65198725 16.1214335,4.34123851 C15.6753081,4.01567657 15.5775721,3.39010038 15.903134,2.94397499 C16.228696,2.49784959 16.8542722,2.4001136 17.3003976,2.72567554 C19.6071362,4.40902808 21,7.08906798 21,10 C21,14.6325537 17.4999505,18.4476269 13,18.9450712 Z"
                                                                                                            fill="#000000"
                                                                                                            fill-rule="nonzero"></path>
																										<circle
                                                                                                            fill="#000000"
                                                                                                            opacity="0.3"
                                                                                                            cx="12"
                                                                                                            cy="10"
                                                                                                            r="6"></circle>
																									</g>
																								</svg>
                                                                                                <!--end::Svg Icon-->
																							</span>
																						</span>
                                                                </div>
                                                            </td>
                                                            <td class="pl-0">
                                                                <a href="#"
                                                                   class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Who
                                                                    Knows Geography</a>
                                                                <span class="text-muted font-weight-bold d-block">By Zoey Dylan</span>
                                                            </td>
                                                            <td></td>
                                                            <td class="text-left">
                                                                <span
                                                                    class="text-dark-75 font-weight-bolder d-block font-size-lg">03 Sep, 4:20PM</span>
                                                                <span
                                                                    class="text-muted font-weight-bold d-block font-size-sm">Time</span>
                                                            </td>
                                                            <td class="text-right pr-0">
                                                                <a href="#" class="btn btn-icon btn-light btn-sm">
																						<span
                                                                                            class="svg-icon svg-icon-md svg-icon-success">
																							<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
																							<svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                width="24px"
                                                                                                height="24px"
                                                                                                viewBox="0 0 24 24"
                                                                                                version="1.1">
																								<g stroke="none"
                                                                                                   stroke-width="1"
                                                                                                   fill="none"
                                                                                                   fill-rule="evenodd">
																									<polygon
                                                                                                        points="0 0 24 0 24 24 0 24"></polygon>
																									<rect fill="#000000"
                                                                                                          opacity="0.3"
                                                                                                          transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                                                          x="11" y="5"
                                                                                                          width="2"
                                                                                                          height="14"
                                                                                                          rx="1"></rect>
																									<path
                                                                                                        d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                                        fill="#000000"
                                                                                                        fill-rule="nonzero"
                                                                                                        transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"></path>
																								</g>
																							</svg>
                                                                                            <!--end::Svg Icon-->
																						</span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="pl-0 py-5">
                                                                <div class="symbol symbol-45 symbol-light-danger mr-2">
																						<span class="symbol-label">
																							<span
                                                                                                class="svg-icon svg-icon-2x svg-icon-danger">
																								<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
																								<svg
                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                    width="24px"
                                                                                                    height="24px"
                                                                                                    viewBox="0 0 24 24"
                                                                                                    version="1.1">
																									<g stroke="none"
                                                                                                       stroke-width="1"
                                                                                                       fill="none"
                                                                                                       fill-rule="evenodd">
																										<rect x="0"
                                                                                                              y="0"
                                                                                                              width="24"
                                                                                                              height="24"></rect>
																										<rect
                                                                                                            fill="#000000"
                                                                                                            x="4" y="4"
                                                                                                            width="7"
                                                                                                            height="7"
                                                                                                            rx="1.5"></rect>
																										<path
                                                                                                            d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                                                                                                            fill="#000000"
                                                                                                            opacity="0.3"></path>
																									</g>
																								</svg>
                                                                                                <!--end::Svg Icon-->
																							</span>
																						</span>
                                                                </div>
                                                            </td>
                                                            <td class="pl-0">
                                                                <a href="#"
                                                                   class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Maths
                                                                    Championship</a>
                                                                <span class="text-muted font-weight-bold d-block">By Tom Gere</span>
                                                            </td>
                                                            <td></td>
                                                            <td class="text-left">
                                                                <span
                                                                    class="text-dark-75 font-weight-bolder d-block font-size-lg">25 Oct, 10:05PM</span>
                                                                <span
                                                                    class="text-muted font-weight-bold d-block font-size-sm">Time</span>
                                                            </td>
                                                            <td class="text-right pr-0">
                                                                <a href="#" class="btn btn-icon btn-light btn-sm">
																						<span
                                                                                            class="svg-icon svg-icon-md svg-icon-success">
																							<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
																							<svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                width="24px"
                                                                                                height="24px"
                                                                                                viewBox="0 0 24 24"
                                                                                                version="1.1">
																								<g stroke="none"
                                                                                                   stroke-width="1"
                                                                                                   fill="none"
                                                                                                   fill-rule="evenodd">
																									<polygon
                                                                                                        points="0 0 24 0 24 24 0 24"></polygon>
																									<rect fill="#000000"
                                                                                                          opacity="0.3"
                                                                                                          transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                                                          x="11" y="5"
                                                                                                          width="2"
                                                                                                          height="14"
                                                                                                          rx="1"></rect>
																									<path
                                                                                                        d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                                        fill="#000000"
                                                                                                        fill-rule="nonzero"
                                                                                                        transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"></path>
																								</g>
																							</svg>
                                                                                            <!--end::Svg Icon-->
																						</span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="pl-0 pt-0 py-5">
                                                                <div class="symbol symbol-45 symbol-light-success mr-2">
																						<span class="symbol-label">
																							<span
                                                                                                class="svg-icon svg-icon-2x svg-icon-success">
																								<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Media/Playlist1.svg-->
																								<svg
                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                    width="24px"
                                                                                                    height="24px"
                                                                                                    viewBox="0 0 24 24"
                                                                                                    version="1.1">
																									<g stroke="none"
                                                                                                       stroke-width="1"
                                                                                                       fill="none"
                                                                                                       fill-rule="evenodd">
																										<rect x="0"
                                                                                                              y="0"
                                                                                                              width="24"
                                                                                                              height="24"></rect>
																										<path
                                                                                                            d="M8.97852058,18.8007059 C8.80029331,20.0396328 7.53473012,21 6,21 C4.34314575,21 3,19.8807119 3,18.5 C3,17.1192881 4.34314575,16 6,16 C6.35063542,16 6.68722107,16.0501285 7,16.1422548 L7,5.93171093 C7,5.41893942 7.31978104,4.96566617 7.78944063,4.81271925 L13.5394406,3.05418311 C14.2638626,2.81827161 15,3.38225531 15,4.1731748 C15,4.95474642 15,5.54092513 15,5.93171093 C15,6.51788965 14.4511634,6.89225606 14,7 C13.3508668,7.15502181 11.6842001,7.48835515 9,8 L9,18.5512168 C9,18.6409956 8.9927193,18.7241187 8.97852058,18.8007059 Z"
                                                                                                            fill="#000000"
                                                                                                            fill-rule="nonzero"></path>
																										<path
                                                                                                            d="M16,9 L20,9 C20.5522847,9 21,9.44771525 21,10 C21,10.5522847 20.5522847,11 20,11 L16,11 C15.4477153,11 15,10.5522847 15,10 C15,9.44771525 15.4477153,9 16,9 Z M14,13 L20,13 C20.5522847,13 21,13.4477153 21,14 C21,14.5522847 20.5522847,15 20,15 L14,15 C13.4477153,15 13,14.5522847 13,14 C13,13.4477153 13.4477153,13 14,13 Z M14,17 L20,17 C20.5522847,17 21,17.4477153 21,18 C21,18.5522847 20.5522847,19 20,19 L14,19 C13.4477153,19 13,18.5522847 13,18 C13,17.4477153 13.4477153,17 14,17 Z"
                                                                                                            fill="#000000"
                                                                                                            opacity="0.3"></path>
																									</g>
																								</svg>
                                                                                                <!--end::Svg Icon-->
																							</span>
																						</span>
                                                                </div>
                                                            </td>
                                                            <td class="pl-0">
                                                                <a href="#"
                                                                   class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">School
                                                                    Music Festival</a>
                                                                <span class="text-muted font-weight-bold d-block">By Rose Liam</span>
                                                            </td>
                                                            <td></td>
                                                            <td class="text-left">
                                                                <span
                                                                    class="text-dark-75 font-weight-bolder d-block font-size-lg">03 Sep, 4:20PM</span>
                                                                <span
                                                                    class="text-muted font-weight-bold d-block font-size-sm">Time</span>
                                                            </td>
                                                            <td class="text-right pr-0">
                                                                <a href="#" class="btn btn-icon btn-light btn-sm">
																						<span
                                                                                            class="svg-icon svg-icon-md svg-icon-success">
																							<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
																							<svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                width="24px"
                                                                                                height="24px"
                                                                                                viewBox="0 0 24 24"
                                                                                                version="1.1">
																								<g stroke="none"
                                                                                                   stroke-width="1"
                                                                                                   fill="none"
                                                                                                   fill-rule="evenodd">
																									<polygon
                                                                                                        points="0 0 24 0 24 24 0 24"></polygon>
																									<rect fill="#000000"
                                                                                                          opacity="0.3"
                                                                                                          transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                                                          x="11" y="5"
                                                                                                          width="2"
                                                                                                          height="14"
                                                                                                          rx="1"></rect>
																									<path
                                                                                                        d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                                        fill="#000000"
                                                                                                        fill-rule="nonzero"
                                                                                                        transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"></path>
																								</g>
																							</svg>
                                                                                            <!--end::Svg Icon-->
																						</span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                        <!--end::Tbody-->
                                                    </table>
                                                </div>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Tap pane-->
                                            <!--begin::Tap pane-->
                                            <div class="tab-pane fade show active" id="kt_tab_pane_10_2" role="tabpanel"
                                                 aria-labelledby="kt_tab_pane_10_2">
                                                <!--begin::Table-->
                                                <div class="table-responsive">
                                                    <table class="table table-borderless table-vertical-center">
                                                        <!--begin::Thead-->
                                                        <thead>
                                                        <tr>
                                                            <th class="p-0 w-50px"></th>
                                                            <th class="p-0 w-100 min-w-100px"></th>
                                                            <th class="p-0"></th>
                                                            <th class="p-0 min-w-130px w-100"></th>
                                                        </tr>
                                                        </thead>
                                                        <!--end::Thead-->
                                                        <!--begin::Tbody-->
                                                        <tbody>
                                                        <tr>
                                                            <td class="pl-0 pt-0 py-5">
                                                                <div class="symbol symbol-45 symbol-light-success mr-2">
																						<span class="symbol-label">
																							<span
                                                                                                class="svg-icon svg-icon-2x svg-icon-success">
																								<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Media/Playlist1.svg-->
																								<svg
                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                    width="24px"
                                                                                                    height="24px"
                                                                                                    viewBox="0 0 24 24"
                                                                                                    version="1.1">
																									<g stroke="none"
                                                                                                       stroke-width="1"
                                                                                                       fill="none"
                                                                                                       fill-rule="evenodd">
																										<rect x="0"
                                                                                                              y="0"
                                                                                                              width="24"
                                                                                                              height="24"></rect>
																										<path
                                                                                                            d="M8.97852058,18.8007059 C8.80029331,20.0396328 7.53473012,21 6,21 C4.34314575,21 3,19.8807119 3,18.5 C3,17.1192881 4.34314575,16 6,16 C6.35063542,16 6.68722107,16.0501285 7,16.1422548 L7,5.93171093 C7,5.41893942 7.31978104,4.96566617 7.78944063,4.81271925 L13.5394406,3.05418311 C14.2638626,2.81827161 15,3.38225531 15,4.1731748 C15,4.95474642 15,5.54092513 15,5.93171093 C15,6.51788965 14.4511634,6.89225606 14,7 C13.3508668,7.15502181 11.6842001,7.48835515 9,8 L9,18.5512168 C9,18.6409956 8.9927193,18.7241187 8.97852058,18.8007059 Z"
                                                                                                            fill="#000000"
                                                                                                            fill-rule="nonzero"></path>
																										<path
                                                                                                            d="M16,9 L20,9 C20.5522847,9 21,9.44771525 21,10 C21,10.5522847 20.5522847,11 20,11 L16,11 C15.4477153,11 15,10.5522847 15,10 C15,9.44771525 15.4477153,9 16,9 Z M14,13 L20,13 C20.5522847,13 21,13.4477153 21,14 C21,14.5522847 20.5522847,15 20,15 L14,15 C13.4477153,15 13,14.5522847 13,14 C13,13.4477153 13.4477153,13 14,13 Z M14,17 L20,17 C20.5522847,17 21,17.4477153 21,18 C21,18.5522847 20.5522847,19 20,19 L14,19 C13.4477153,19 13,18.5522847 13,18 C13,17.4477153 13.4477153,17 14,17 Z"
                                                                                                            fill="#000000"
                                                                                                            opacity="0.3"></path>
																									</g>
																								</svg>
                                                                                                <!--end::Svg Icon-->
																							</span>
																						</span>
                                                                </div>
                                                            </td>
                                                            <td class="pl-0">
                                                                <a href="#"
                                                                   class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">School
                                                                    Music Festival</a>
                                                                <span class="text-muted font-weight-bold d-block">By Rose Liam</span>
                                                            </td>
                                                            <td></td>
                                                            <td class="text-left">
                                                                <span
                                                                    class="text-dark-75 font-weight-bolder d-block font-size-lg">03 Sep, 4:20PM</span>
                                                                <span
                                                                    class="text-muted font-weight-bold d-block font-size-sm">Time</span>
                                                            </td>
                                                            <td class="text-right pr-0">
                                                                <a href="#" class="btn btn-icon btn-light btn-sm">
																						<span
                                                                                            class="svg-icon svg-icon-md svg-icon-success">
																							<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
																							<svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                width="24px"
                                                                                                height="24px"
                                                                                                viewBox="0 0 24 24"
                                                                                                version="1.1">
																								<g stroke="none"
                                                                                                   stroke-width="1"
                                                                                                   fill="none"
                                                                                                   fill-rule="evenodd">
																									<polygon
                                                                                                        points="0 0 24 0 24 24 0 24"></polygon>
																									<rect fill="#000000"
                                                                                                          opacity="0.3"
                                                                                                          transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                                                          x="11" y="5"
                                                                                                          width="2"
                                                                                                          height="14"
                                                                                                          rx="1"></rect>
																									<path
                                                                                                        d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                                        fill="#000000"
                                                                                                        fill-rule="nonzero"
                                                                                                        transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"></path>
																								</g>
																							</svg>
                                                                                            <!--end::Svg Icon-->
																						</span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="pl-0 py-5">
                                                                <div class="symbol symbol-45 symbol-light-danger mr-2">
																						<span class="symbol-label">
																							<span
                                                                                                class="svg-icon svg-icon-2x svg-icon-danger">
																								<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
																								<svg
                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                    width="24px"
                                                                                                    height="24px"
                                                                                                    viewBox="0 0 24 24"
                                                                                                    version="1.1">
																									<g stroke="none"
                                                                                                       stroke-width="1"
                                                                                                       fill="none"
                                                                                                       fill-rule="evenodd">
																										<rect x="0"
                                                                                                              y="0"
                                                                                                              width="24"
                                                                                                              height="24"></rect>
																										<rect
                                                                                                            fill="#000000"
                                                                                                            x="4" y="4"
                                                                                                            width="7"
                                                                                                            height="7"
                                                                                                            rx="1.5"></rect>
																										<path
                                                                                                            d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                                                                                                            fill="#000000"
                                                                                                            opacity="0.3"></path>
																									</g>
																								</svg>
                                                                                                <!--end::Svg Icon-->
																							</span>
																						</span>
                                                                </div>
                                                            </td>
                                                            <td class="pl-0">
                                                                <a href="#"
                                                                   class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Maths
                                                                    Championship</a>
                                                                <span class="text-muted font-weight-bold d-block">By Tom Gere</span>
                                                            </td>
                                                            <td></td>
                                                            <td class="text-left">
                                                                <span
                                                                    class="text-dark-75 font-weight-bolder d-block font-size-lg">25 Oct, 10:05PM</span>
                                                                <span
                                                                    class="text-muted font-weight-bold d-block font-size-sm">Time</span>
                                                            </td>
                                                            <td class="text-right pr-0">
                                                                <a href="#" class="btn btn-icon btn-light btn-sm">
																						<span
                                                                                            class="svg-icon svg-icon-md svg-icon-success">
																							<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
																							<svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                width="24px"
                                                                                                height="24px"
                                                                                                viewBox="0 0 24 24"
                                                                                                version="1.1">
																								<g stroke="none"
                                                                                                   stroke-width="1"
                                                                                                   fill="none"
                                                                                                   fill-rule="evenodd">
																									<polygon
                                                                                                        points="0 0 24 0 24 24 0 24"></polygon>
																									<rect fill="#000000"
                                                                                                          opacity="0.3"
                                                                                                          transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                                                          x="11" y="5"
                                                                                                          width="2"
                                                                                                          height="14"
                                                                                                          rx="1"></rect>
																									<path
                                                                                                        d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                                        fill="#000000"
                                                                                                        fill-rule="nonzero"
                                                                                                        transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"></path>
																								</g>
																							</svg>
                                                                                            <!--end::Svg Icon-->
																						</span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="pl-0 py-5">
                                                                <div class="symbol symbol-45 symbol-light-primary mr-2">
																						<span class="symbol-label">
																							<span
                                                                                                class="svg-icon svg-icon-2x svg-icon-primary">
																								<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Home/Globe.svg-->
																								<svg
                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                    width="24px"
                                                                                                    height="24px"
                                                                                                    viewBox="0 0 24 24"
                                                                                                    version="1.1">
																									<g stroke="none"
                                                                                                       stroke-width="1"
                                                                                                       fill="none"
                                                                                                       fill-rule="evenodd">
																										<rect x="0"
                                                                                                              y="0"
                                                                                                              width="24"
                                                                                                              height="24"></rect>
																										<path
                                                                                                            d="M13,18.9450712 L13,20 L14,20 C15.1045695,20 16,20.8954305 16,22 L8,22 C8,20.8954305 8.8954305,20 10,20 L11,20 L11,18.9448245 C9.02872877,18.7261967 7.20827378,17.866394 5.79372555,16.5182701 L4.73856106,17.6741866 C4.36621808,18.0820826 3.73370941,18.110904 3.32581341,17.7385611 C2.9179174,17.3662181 2.88909597,16.7337094 3.26143894,16.3258134 L5.04940685,14.367122 C5.46150313,13.9156769 6.17860937,13.9363085 6.56406875,14.4106998 C7.88623094,16.037907 9.86320756,17 12,17 C15.8659932,17 19,13.8659932 19,10 C19,7.73468744 17.9175842,5.65198725 16.1214335,4.34123851 C15.6753081,4.01567657 15.5775721,3.39010038 15.903134,2.94397499 C16.228696,2.49784959 16.8542722,2.4001136 17.3003976,2.72567554 C19.6071362,4.40902808 21,7.08906798 21,10 C21,14.6325537 17.4999505,18.4476269 13,18.9450712 Z"
                                                                                                            fill="#000000"
                                                                                                            fill-rule="nonzero"></path>
																										<circle
                                                                                                            fill="#000000"
                                                                                                            opacity="0.3"
                                                                                                            cx="12"
                                                                                                            cy="10"
                                                                                                            r="6"></circle>
																									</g>
																								</svg>
                                                                                                <!--end::Svg Icon-->
																							</span>
																						</span>
                                                                </div>
                                                            </td>
                                                            <td class="pl-0">
                                                                <a href="#"
                                                                   class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Who
                                                                    Knows Geography</a>
                                                                <span class="text-muted font-weight-bold d-block">By Zoey Dylan</span>
                                                            </td>
                                                            <td></td>
                                                            <td class="text-left">
                                                                <span
                                                                    class="text-dark-75 font-weight-bolder d-block font-size-lg">03 Sep, 4:20PM</span>
                                                                <span
                                                                    class="text-muted font-weight-bold d-block font-size-sm">Time</span>
                                                            </td>
                                                            <td class="text-right pr-0">
                                                                <a href="#" class="btn btn-icon btn-light btn-sm">
																						<span
                                                                                            class="svg-icon svg-icon-md svg-icon-success">
																							<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
																							<svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                width="24px"
                                                                                                height="24px"
                                                                                                viewBox="0 0 24 24"
                                                                                                version="1.1">
																								<g stroke="none"
                                                                                                   stroke-width="1"
                                                                                                   fill="none"
                                                                                                   fill-rule="evenodd">
																									<polygon
                                                                                                        points="0 0 24 0 24 24 0 24"></polygon>
																									<rect fill="#000000"
                                                                                                          opacity="0.3"
                                                                                                          transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                                                          x="11" y="5"
                                                                                                          width="2"
                                                                                                          height="14"
                                                                                                          rx="1"></rect>
																									<path
                                                                                                        d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                                        fill="#000000"
                                                                                                        fill-rule="nonzero"
                                                                                                        transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"></path>
																								</g>
																							</svg>
                                                                                            <!--end::Svg Icon-->
																						</span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="pl-0 py-5">
                                                                <div class="symbol symbol-45 symbol-light-warning mr-2">
																						<span class="symbol-label">
																							<span
                                                                                                class="svg-icon svg-icon-2x svg-icon-warning">
																								<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Home/Library.svg-->
																								<svg
                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                    width="24px"
                                                                                                    height="24px"
                                                                                                    viewBox="0 0 24 24"
                                                                                                    version="1.1">
																									<g stroke="none"
                                                                                                       stroke-width="1"
                                                                                                       fill="none"
                                                                                                       fill-rule="evenodd">
																										<rect x="0"
                                                                                                              y="0"
                                                                                                              width="24"
                                                                                                              height="24"></rect>
																										<path
                                                                                                            d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z"
                                                                                                            fill="#000000"></path>
																										<rect
                                                                                                            fill="#000000"
                                                                                                            opacity="0.3"
                                                                                                            transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)"
                                                                                                            x="16.3255682"
                                                                                                            y="2.94551858"
                                                                                                            width="3"
                                                                                                            height="18"
                                                                                                            rx="1"></rect>
																									</g>
																								</svg>
                                                                                                <!--end::Svg Icon-->
																							</span>
																						</span>
                                                                </div>
                                                            </td>
                                                            <td class="pl-0">
                                                                <a href="#"
                                                                   class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Napoleon
                                                                    Days</a>
                                                                <span class="text-muted font-weight-bold d-block">By Luke Owen</span>
                                                            </td>
                                                            <td></td>
                                                            <td class="text-left">
                                                                <span
                                                                    class="text-dark-75 font-weight-bolder d-block font-size-lg">03 Sep, 4:20PM</span>
                                                                <span
                                                                    class="text-muted font-weight-bold d-block font-size-sm">Time</span>
                                                            </td>
                                                            <td class="text-right pr-0">
                                                                <a href="#" class="btn btn-icon btn-light btn-sm">
																						<span
                                                                                            class="svg-icon svg-icon-md svg-icon-success">
																							<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
																							<svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                width="24px"
                                                                                                height="24px"
                                                                                                viewBox="0 0 24 24"
                                                                                                version="1.1">
																								<g stroke="none"
                                                                                                   stroke-width="1"
                                                                                                   fill="none"
                                                                                                   fill-rule="evenodd">
																									<polygon
                                                                                                        points="0 0 24 0 24 24 0 24"></polygon>
																									<rect fill="#000000"
                                                                                                          opacity="0.3"
                                                                                                          transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                                                          x="11" y="5"
                                                                                                          width="2"
                                                                                                          height="14"
                                                                                                          rx="1"></rect>
																									<path
                                                                                                        d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                                        fill="#000000"
                                                                                                        fill-rule="nonzero"
                                                                                                        transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"></path>
																								</g>
																							</svg>
                                                                                            <!--end::Svg Icon-->
																						</span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="pl-0 py-5">
                                                                <div class="symbol symbol-45 symbol-light-info mr-2">
																						<span class="symbol-label">
																							<span
                                                                                                class="svg-icon svg-icon-2x svg-icon-info">
																								<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Design/Color-profile.svg-->
																								<svg
                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                    width="24px"
                                                                                                    height="24px"
                                                                                                    viewBox="0 0 24 24"
                                                                                                    version="1.1">
																									<g stroke="none"
                                                                                                       stroke-width="1"
                                                                                                       fill="none"
                                                                                                       fill-rule="evenodd">
																										<rect x="0"
                                                                                                              y="0"
                                                                                                              width="24"
                                                                                                              height="24"></rect>
																										<path
                                                                                                            d="M12,10.9996338 C12.8356605,10.3719448 13.8743941,10 15,10 C17.7614237,10 20,12.2385763 20,15 C20,17.7614237 17.7614237,20 15,20 C13.8743941,20 12.8356605,19.6280552 12,19.0003662 C11.1643395,19.6280552 10.1256059,20 9,20 C6.23857625,20 4,17.7614237 4,15 C4,12.2385763 6.23857625,10 9,10 C10.1256059,10 11.1643395,10.3719448 12,10.9996338 Z M13.3336047,12.504354 C13.757474,13.2388026 14,14.0910788 14,15 C14,15.9088933 13.7574889,16.761145 13.3336438,17.4955783 C13.8188886,17.8206693 14.3938466,18 15,18 C16.6568542,18 18,16.6568542 18,15 C18,13.3431458 16.6568542,12 15,12 C14.3930587,12 13.8175971,12.18044 13.3336047,12.504354 Z"
                                                                                                            fill="#000000"
                                                                                                            fill-rule="nonzero"
                                                                                                            opacity="0.3"></path>
																										<circle
                                                                                                            fill="#000000"
                                                                                                            cx="12"
                                                                                                            cy="9"
                                                                                                            r="5"></circle>
																									</g>
																								</svg>
                                                                                                <!--end::Svg Icon-->
																							</span>
																						</span>
                                                                </div>
                                                            </td>
                                                            <td class="pl-0">
                                                                <a href="#"
                                                                   class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">The
                                                                    School Art Leads</a>
                                                                <span class="text-muted font-weight-bold d-block">By Ellie Cole</span>
                                                            </td>
                                                            <td></td>
                                                            <td class="text-left">
                                                                <span
                                                                    class="text-dark-75 font-weight-bolder d-block font-size-lg">03 Sep, 4:20PM</span>
                                                                <span
                                                                    class="text-muted font-weight-bold d-block font-size-sm">Time</span>
                                                            </td>
                                                            <td class="text-right pr-0">
                                                                <a href="#" class="btn btn-icon btn-light btn-sm">
																						<span
                                                                                            class="svg-icon svg-icon-md svg-icon-success">
																							<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
																							<svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                width="24px"
                                                                                                height="24px"
                                                                                                viewBox="0 0 24 24"
                                                                                                version="1.1">
																								<g stroke="none"
                                                                                                   stroke-width="1"
                                                                                                   fill="none"
                                                                                                   fill-rule="evenodd">
																									<polygon
                                                                                                        points="0 0 24 0 24 24 0 24"></polygon>
																									<rect fill="#000000"
                                                                                                          opacity="0.3"
                                                                                                          transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                                                                          x="11" y="5"
                                                                                                          width="2"
                                                                                                          height="14"
                                                                                                          rx="1"></rect>
																									<path
                                                                                                        d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                                        fill="#000000"
                                                                                                        fill-rule="nonzero"
                                                                                                        transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"></path>
																								</g>
																							</svg>
                                                                                            <!--end::Svg Icon-->
																						</span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                        <!--end::Tbody-->
                                                    </table>
                                                </div>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Tap pane-->
                                        </div>
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Base Table Widget 10-->

                            </div>

                        </div>
                    </div>
                    <!--end::Content-->

                </div>
                <!--end::Education-->
            </div>
            <!--end::Container-->
        </div>

    </div>


@endsection

@section('script')
    {{-- <script>
        var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 },
                                 "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" },
                                  "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" },
                                  "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } },
                                 "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } },
                                 "font-family": "Cairo" };

    </script> --}}
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle9cd7.js?v=7.1.5') }}"></script>
    <script src="{{ asset('assets/js/pages/crud/datatables/basic/basic9cd7.js?v=7.1.5') }}"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.js"></script>

    <script>
        // This card is lazy initialized using data-card="true" attribute. You can access to the card object as shown below and override its behavior
        var card = new KTCard('kt_card_1');

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
    <script>
        $(document).ready(function () {
            $('#ex_table').DataTable({
                language: {
                    search: "بحث "
                },
                paging: false,
                info: false,
            });
        });
    </script>

@endsection

@push('scripts')
    <script>
        $(document).ready(function () {
            $("#save_doctor_notes").click(function (event) {
                event.preventDefault();
                let note = $('textarea#note_value').val();
                let patient_id = $("input[name=patient_id]").val()
                $.ajax({
                    method: "POST",
                    type: 'json',
                    url: "{{ route('admin.notes.ajax.add') }}",
                    data: {
                        "note": note,
                        "patient_id": patient_id,
                        "_token": "{{ csrf_token() }}"
                    },
                    success: function (response) {
                        if (response) {
                            $('#note_value').val('');
                            $("#notes_tree").prepend('<div class="timeline timeline-3 mb-3" id="notes_tree"><div class="timeline-items"><div class="timeline-item"><div class="timeline-media">' +
                                '<img src="" alt="Pic"></div><div class="timeline-content"><div class="d-flex align-items-center justify-content-between mb-3">' +
                                '<div class="mr-2"><span class="text-muted ml-2">'+response.created_at+'</span>' +
                                '<span class="label label-light-success font-weight-bolder label-inline ml-2">new</span></div></div><a href="'+response.url+'" class="p-0 pt-3 my-2 ml-2">' + response.note + '</a></div></div></div></div>');
                             }
                    }
                });
            });
        });
    </script>

@endpush
