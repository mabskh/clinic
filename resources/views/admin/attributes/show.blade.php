
@extends('admin.layouts.admin')

@section('title')
    عرض مريض
@endsection

@section('style')
    <style>

        .hidediv {
             display: none;
        }

    </style>
    @stop
@section('content')

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">

        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-6 subheader-transparent" id="kt_subheader">
            <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-1">
                    <!--begin::Page Heading-->
                    <div class="d-flex align-items-baseline flex-wrap mr-5">
                        <!--begin::Page Title-->
                        <h5 class="text-dark font-weight-bold my-1 mr-5">تفاصيل حساب المريض  | {{ $patient->link }}
                            <span style="color: #ff0000"> </span>
                        </h5>
                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item">
                                <a href="{{  route('admin.users.index') }}" class="text-muted"> قائمة المستخدمين </a>
                            </li>
                            {{--  <li class="breadcrumb-item">
                                 <a href="#" class="text-muted">Classic</a>
                             </li> --}}
                        </ul>

                    </div>
                    <!--end::Page Heading-->

                </div>
                <!--end::Info-->
                <!--begin::Toolbar-->

            </div>
        </div>
        <!--end::Subheader-->
        @include('admin.includes.alerts.error')
        @include('admin.includes.alerts.success')

        <div class="d-flex flex-column-fluid">

            <!--begin::Container-->
            <div class="container">

                <div class="card card-custom gutter-b">
                    <div class="card-body">
                        <div class="d-flex">
                            <!--begin: Pic-->
                            <div class="flex-shrink-0  mr-7 mt-lg-0 mt-3">
                                <div class="symbol border p-2 symbol-50 symbol-lg-120">
                                    <img alt="Pic" src="{{$patient->photo}}">
                                </div>

                            </div>
                            <!--end: Pic-->
                            <!--begin: Info-->
                            <div class="flex-grow-1">
                                <!--begin: Title-->
                                <div class="d-flex align-items-center justify-content-between flex-wrap">
                                    <div class="mr-3">
                                        <!--begin::Name-->
                                        <a href="#" class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3">{{$patient->name}}
                                            <i class="flaticon2-correct text-success icon-md ml-2"></i></a>
                                        <!--end::Name-->
                                        <!--begin::Contacts-->
                                        <div class="d-flex flex-wrap my-2">
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
															</span>{{$patient->email}}</a>
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
															</span>{{$patient->job_title}}</a>
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
															</span>{{$patient->current_place}}</a>
                                        </div>
                                        <!--end::Contacts-->
                                    </div>
                                    <div class="my-lg-0 my-1">
                                        <a href="#" class="btn btn-sm btn-light-success font-weight-bolder text-uppercase mr-1">Reports</a>
                                        <a href="#" class="btn btn-sm btn-info font-weight-bolder text-uppercase mr-1">New Task</a>

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
                                    <div class="flex-grow-1 font-weight-bold text-dark-50 py-5 py-lg-2 mr-5">{{$patient->description}}</div>
                                    <div class="d-flex flex-wrap align-items-center py-2">
                                        <div class="d-flex align-items-center mr-10">
                                            <div class="mr-6">
                                                <div class="font-weight-bold mb-2">بداية الانتساب </div>
                                                <span class="btn btn-sm btn-text btn-light-primary text-uppercase font-weight-bold">{{$patient->created_at->format('Y-m-d')}}</span>
                                            </div>
                                            <div class="">
                                                <div class="font-weight-bold mb-2">Due Date</div>
                                                <span class="btn btn-sm btn-text btn-light-danger text-uppercase font-weight-bold">10 June, 2021</span>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 flex-shrink-0 w-150px w-xl-300px mt-4 mt-sm-0">
                                            <span class="font-weight-bold">نسبة التحسن لدى المريض</span>
                                            <div class="progress progress-xs mt-2 mb-2">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 63%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="font-weight-bolder text-dark">78%</span>
                                        </div>
                                    </div>
                                </div>
                                <!--end: Content-->
                            </div>
                            <!--end: Info-->
                        </div>
                        <div class="separator separator-solid my-1"></div>
                        <!--begin: Items-->
                        <div class="d-flex align-items-center flex-wrap">

                            <div class="d-flex align-items-center flex-lg-fill mr-5 my-1 mb-0">

                                <a href="#" class="btn btn-light-primary font-weight-bold mr-2" id="personal">البيانات الشخصية</a>
                                <a href="#" class="btn btn-light-primary font-weight-bold mr-2" id="attachments">المرفقات</a>
                                <a href="#" class="btn btn-light-primary font-weight-bold mr-2" id="status">الحالة</a>
                                <a href="#" class="btn btn-light-primary font-weight-bold mr-2" id="reports">التقارير</a>




                            </div>

                    </div>
                </div>

            </div>

                <div class="card card-custom mb-5 hidediv" id="_per">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card card-custom " data-card="true" id="kt_card_4">
                                <div class="card-header">
                                    <div class="card-title">
                                        <h3 class="card-label">البيانات الشخصية</h3>
                                    </div>
                                    <div class="card-toolbar">
                                        <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-1" data-card-tool="toggle">
                                            <i class="ki ki-arrow-down icon-nm"></i>
                                        </a>
                                        <a href="#" class="btn btn-icon btn-sm btn-light-success mr-1" data-card-tool="reload">
                                            <i class="ki ki-reload icon-nm"></i>
                                        </a>
                                        <a href="#" class="btn btn-icon btn-sm btn-light-danger" data-card-tool="remove">
                                            <i class="ki ki-close icon-nm"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body">


                                    ............


                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card card-custom mb-5 hidediv" id="_att">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card card-custom " data-card="true" id="kt_card_5">
                                <div class="card-header">
                                    <div class="card-title">
                                        <h3 class="card-label">المرفقات</h3>
                                    </div>
                                    <div class="card-toolbar">
                                        <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-1" data-card-tool="toggle">
                                            <i class="ki ki-arrow-down icon-nm"></i>
                                        </a>
                                        <a href="#" class="btn btn-icon btn-sm btn-light-success mr-1" data-card-tool="reload">
                                            <i class="ki ki-reload icon-nm"></i>
                                        </a>
                                        <a href="#" class="btn btn-icon btn-sm btn-light-danger" data-card-tool="remove">
                                            <i class="ki ki-close icon-nm"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    ... المرفقات
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card card-custom mb-5 hidediv" id="_status">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card card-custom " data-card="true" id="kt_card_6">
                                <div class="card-header">
                                    <div class="card-title">
                                        <h3 class="card-label">الحالة</h3>
                                    </div>
                                    <div class="card-toolbar">
                                        <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-1" data-card-tool="toggle">
                                            <i class="ki ki-arrow-down icon-nm"></i>
                                        </a>
                                        <a href="#" class="btn btn-icon btn-sm btn-light-success mr-1" data-card-tool="reload">
                                            <i class="ki ki-reload icon-nm"></i>
                                        </a>
                                        <a href="#" class="btn btn-icon btn-sm btn-light-danger" data-card-tool="remove">
                                            <i class="ki ki-close icon-nm"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    ... المرفقات
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card card-custom mb-5 hidediv" id="_reports">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card card-custom " data-card="true" id="kt_card_7">
                                <div class="card-header">
                                    <div class="card-title">
                                        <h3 class="card-label">التقارير</h3>
                                    </div>
                                    <div class="card-toolbar">
                                        <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-1" data-card-tool="toggle">
                                            <i class="ki ki-arrow-down icon-nm"></i>
                                        </a>
                                        <a href="#" class="btn btn-icon btn-sm btn-light-success mr-1" data-card-tool="reload">
                                            <i class="ki ki-reload icon-nm"></i>
                                        </a>
                                        <a href="#" class="btn btn-icon btn-sm btn-light-danger" data-card-tool="remove">
                                            <i class="ki ki-close icon-nm"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    ... المرفقات
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
