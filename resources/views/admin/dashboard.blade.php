@extends('admin.layouts.admin')

@section('title')
    Dashboard
@endsection


@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">

    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-6 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5"></h5>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
<!--                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="#" class="text-muted">Subheaders</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#" class="text-muted">Classic</a>
                        </li>
                    </ul>-->
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->

        </div>
    </div>
    <!--end::Subheader-->

    <div class="d-flex flex-column-fluid ">
        <!--begin::Container-->
        <div class="container">

            <!--            <div class="container py-6">
                <div class="row">
                    <div class="col-lg-4">
                        &lt;!&ndash;begin::Callout&ndash;&gt;
                        <div class="card card-custom wave wave-animate-slow wave-primary mb-8 mb-lg-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center p-5">
                                    &lt;!&ndash;begin::Icon&ndash;&gt;
                                    <div class="mr-6">
													<span class="svg-icon svg-icon-primary svg-icon-4x">
														&lt;!&ndash;begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Home/Mirror.svg&ndash;&gt;
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24" />
																<path d="M13,17.0484323 L13,18 L14,18 C15.1045695,18 16,18.8954305 16,20 L8,20 C8,18.8954305 8.8954305,18 10,18 L11,18 L11,17.0482312 C6.89844817,16.5925472 3.58685702,13.3691811 3.07555009,9.22038742 C3.00799634,8.67224972 3.3975866,8.17313318 3.94572429,8.10557943 C4.49386199,8.03802567 4.99297853,8.42761593 5.06053229,8.97575363 C5.4896663,12.4577884 8.46049164,15.1035129 12.0008191,15.1035129 C15.577644,15.1035129 18.5681939,12.4043008 18.9524872,8.87772126 C19.0123158,8.32868667 19.505897,7.93210686 20.0549316,7.99193546 C20.6039661,8.05176407 21.000546,8.54534521 20.9407173,9.09437981 C20.4824216,13.3000638 17.1471597,16.5885839 13,17.0484323 Z" fill="#000000" fill-rule="nonzero" />
																<path d="M12,14 C8.6862915,14 6,11.3137085 6,8 C6,4.6862915 8.6862915,2 12,2 C15.3137085,2 18,4.6862915 18,8 C18,11.3137085 15.3137085,14 12,14 Z M8.81595773,7.80077353 C8.79067542,7.43921955 8.47708263,7.16661749 8.11552864,7.19189981 C7.75397465,7.21718213 7.4813726,7.53077492 7.50665492,7.89232891 C7.62279197,9.55316612 8.39667037,10.8635466 9.79502238,11.7671393 C10.099435,11.9638458 10.5056723,11.8765328 10.7023788,11.5721203 C10.8990854,11.2677077 10.8117724,10.8614704 10.5073598,10.6647638 C9.4559885,9.98538454 8.90327706,9.04949813 8.81595773,7.80077353 Z" fill="#000000" opacity="0.3" />
															</g>
														</svg>
                                                        &lt;!&ndash;end::Svg Icon&ndash;&gt;
													</span>
                                    </div>
                                    &lt;!&ndash;end::Icon&ndash;&gt;
                                    &lt;!&ndash;begin::Content&ndash;&gt;
                                    <div class="d-flex flex-column">
                                        <a href="#" class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">وحدة التمريض</a>
                                        <div class="text-dark-75"></div>
                                    </div>
                                    &lt;!&ndash;end::Content&ndash;&gt;
                                </div>
                            </div>
                        </div>
                        &lt;!&ndash;end::Callout&ndash;&gt;
                    </div>
                    <div class="col-lg-4">
                        &lt;!&ndash;begin::Callout&ndash;&gt;
                        <div class="card card-custom wave wave-animate-slow wave-danger mb-8 mb-lg-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center p-5">
                                    &lt;!&ndash;begin::Icon&ndash;&gt;
                                    <div class="mr-6">
													<span class="svg-icon svg-icon-danger svg-icon-4x">
														&lt;!&ndash;begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Thunder-move.svg&ndash;&gt;
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24" />
																<path d="M16.3740377,19.9389434 L22.2226499,11.1660251 C22.4524142,10.8213786 22.3592838,10.3557266 22.0146373,10.1259623 C21.8914367,10.0438285 21.7466809,10 21.5986122,10 L17,10 L17,4.47708173 C17,4.06286817 16.6642136,3.72708173 16.25,3.72708173 C15.9992351,3.72708173 15.7650616,3.85240758 15.6259623,4.06105658 L9.7773501,12.8339749 C9.54758575,13.1786214 9.64071616,13.6442734 9.98536267,13.8740377 C10.1085633,13.9561715 10.2533191,14 10.4013878,14 L15,14 L15,19.5229183 C15,19.9371318 15.3357864,20.2729183 15.75,20.2729183 C16.0007649,20.2729183 16.2349384,20.1475924 16.3740377,19.9389434 Z" fill="#000000" />
																<path d="M4.5,5 L9.5,5 C10.3284271,5 11,5.67157288 11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L4.5,8 C3.67157288,8 3,7.32842712 3,6.5 C3,5.67157288 3.67157288,5 4.5,5 Z M4.5,17 L9.5,17 C10.3284271,17 11,17.6715729 11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L4.5,20 C3.67157288,20 3,19.3284271 3,18.5 C3,17.6715729 3.67157288,17 4.5,17 Z M2.5,11 L6.5,11 C7.32842712,11 8,11.6715729 8,12.5 C8,13.3284271 7.32842712,14 6.5,14 L2.5,14 C1.67157288,14 1,13.3284271 1,12.5 C1,11.6715729 1.67157288,11 2.5,11 Z" fill="#000000" opacity="0.3" />
															</g>
														</svg>
                                                        &lt;!&ndash;end::Svg Icon&ndash;&gt;
													</span>
                                    </div>
                                    &lt;!&ndash;end::Icon&ndash;&gt;
                                    &lt;!&ndash;begin::Content&ndash;&gt;
                                    <div class="d-flex flex-column">
                                        <a href="#" class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">الصيدلية المركزية</a>
                                        <div class="text-dark-75"></div>
                                    </div>
                                    &lt;!&ndash;end::Content&ndash;&gt;
                                </div>
                            </div>
                        </div>
                        &lt;!&ndash;end::Callout&ndash;&gt;
                    </div>
                    <div class="col-lg-4">
                        &lt;!&ndash;begin::Callout&ndash;&gt;
                        <div class="card card-custom wave wave-animate-slow wave-success mb-8 mb-lg-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center p-5">
                                    &lt;!&ndash;begin::Icon&ndash;&gt;
                                    <div class="mr-6">
													<span class="svg-icon svg-icon-success svg-icon-4x">
														&lt;!&ndash;begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Design/Sketch.svg&ndash;&gt;
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24" />
																<polygon fill="#000000" opacity="0.3" points="5 3 19 3 23 8 1 8" />
																<polygon fill="#000000" points="23 8 12 20 1 8" />
															</g>
														</svg>
                                                        &lt;!&ndash;end::Svg Icon&ndash;&gt;
													</span>
                                    </div>
                                    &lt;!&ndash;end::Icon&ndash;&gt;
                                    &lt;!&ndash;begin::Content&ndash;&gt;
                                    <div class="d-flex flex-column">
                                        <a href="#" class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">شؤون المرضى</a>
                                        <div class="text-dark-75"></div>
                                    </div>
                                    &lt;!&ndash;end::Content&ndash;&gt;
                                </div>
                            </div>
                        </div>
                        &lt;!&ndash;end::Callout&ndash;&gt;
                    </div>
                </div>
            </div>-->

            <div class="row">

                <div class="d-flex flex-row-fluid bgi-size-cover bgi-position-center" style="background-image: url('{{ asset('assets/media/bg/bg-9.jpg') }}')">
                    <div class="container">
                        <!--begin::Topbar-->
                        <div class="d-flex justify-content-between align-items-center border-bottom border-white py-7">
                            <h3 class="h4 text-dark mb-0">الاستعلامات</h3>
                            <div class="d-flex">
                                <a href="#" class="font-size-h6 font-weight-bold">شؤون العاملين</a>
                                <a href="#" class="font-size-h6 font-weight-bold ml-8">شؤون المرضى</a>
                                <a href="#" class="font-size-h6 font-weight-bold ml-8">الإدارة المالية</a>
                            </div>
                        </div>
                        <!--end::Topbar-->
                        <div class="d-flex align-items-stretch text-center flex-column my-2 py-20">
                            <!--begin::Heading-->
<!--                            <h1 class="text-dark font-weight-bolder mb-12">How can we help?</h1>-->
                            <!--end::Heading-->
                            <!--begin::Form-->
                            <form class="d-flex position-relative w-75 px-lg-40 m-auto">
                                <div class="input-group">
                                    <!--begin::Icon-->
                                    <div class="input-group-prepend">
												<span class="input-group-text bg-white border-0 py-7 px-8">
													<span class="svg-icon svg-icon-xl">
														<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Search.svg-->
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24" />
																<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
															</g>
														</svg>
                                                        <!--end::Svg Icon-->
													</span>
												</span>
                                    </div>


                                    <!--end::Icon-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control h-auto border-0 py-7 px-1 font-size-h6" placeholder="بحث باسم المريض .." />

                                    <!--end::Input-->
                                </div>

                            </form>
                            <!--end::Form-->


                        </div>
                    </div>
                </div>
            </div>


        </div>


    </div>


</div>


@endsection
