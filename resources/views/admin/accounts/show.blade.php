
@extends('admin.layouts.admin')

@section('title')
    Dashboard
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
    <div class="subheader py-2 py-lg-6 subheader-transparent" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">تفاصيل حساب الطبيب  | {{ $account->link }}
						<span style="color: red"> </span>
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

			<!--begin::Profile 2-->
			<div class="d-flex flex-row">
				<!--begin::Aside-->
				<div class="flex-row-auto offcanvas-mobile w-300px w-xl-350px" id="kt_profile_aside">
					<!--begin::Card-->
					<div class="card card-custom gutter-b">
						<div class="card-body pt-15">
							<!--begin::User-->
							<div class="text-center mb-5">

								<div class="symbol symbol-60 symbol-circle symbol-xl-90">
								<img style="width: 150px; height: 100px;" src="{{$account -> 	photo}}">
									<i class="symbol-badge symbol-badge-bottom bg-success"></i>
								</div>
								<h4 class="font-weight-bold my-2">{{ $account->full_name }}</h4>
								<div class="text-muted mb-2">{{ $account->job_title }}</div>
								<span class="label label-light-warning label-inline font-weight-bold label-lg">Active</span>
							</div>
							<!--end::User-->
							<!--begin::Contact-->
							<div class="mb-5 text-center">
								<a href="#" class="btn btn-icon btn-circle btn-light-facebook mr-2">
									<i class="socicon-facebook"></i>
								</a>
								<a href="#" class="btn btn-icon btn-circle btn-light-twitter mr-2">
									<i class="socicon-twitter"></i>
								</a>
								<a href="#" class="btn btn-icon btn-circle btn-light-google">
									<i class="socicon-google"></i>
								</a>
							</div>
							<!--end::Contact-->
							<!--begin::Nav-->
						{{-- 	<a href="#" class="btn btn-hover-light-primary font-weight-bold py-3 px-6 mb-2 text-center btn-block active">Profile Overview</a> --}}

							<!--end::Nav-->
						</div>
					</div>
					<!--end::Card-->
					<!--begin::Mixed Widget 14-->
					<div class="card card-custom gutter-b">
						<!--begin::Header-->
						<div class="card-header align-items-center border-0 mt-4">
							<h3 class="card-title align-items-start flex-column">
								<span class="font-weight-bolder text-dark">مهام اليوم</span>
								<span class="text-muted mt-3 font-weight-bold font-size-sm">890,344 Sales</span>
							</h3>
							{{-- <div class="card-toolbar">
								<div class="dropdown dropdown-inline">
									<a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="ki ki-bold-more-hor"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
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
							</div> --}}
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body pt-4">
							<!--begin::Timeline-->
							<div class="timeline timeline-6 mt-3">
								<!--begin::Item-->
								<div class="timeline-item align-items-start">
									<!--begin::Label-->
									<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">08:42</div>
									<!--end::Label-->
									<!--begin::Badge-->
									<div class="timeline-badge">
										<i class="fa fa-genderless text-warning icon-xl"></i>
									</div>
									<!--end::Badge-->
									<!--begin::Text-->
									<div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Outlines keep you honest. And keep structure</div>
									<!--end::Text-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="timeline-item align-items-start">
									<!--begin::Label-->
									<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">10:00</div>
									<!--end::Label-->
									<!--begin::Badge-->
									<div class="timeline-badge">
										<i class="fa fa-genderless text-success icon-xl"></i>
									</div>
									<!--end::Badge-->
									<!--begin::Content-->
									<div class="timeline-content d-flex">
										<span class="font-weight-bolder text-dark-75 pl-3 font-size-lg">AEOL meeting</span>
									</div>
									<!--end::Content-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="timeline-item align-items-start">
									<!--begin::Label-->
									<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">14:37</div>
									<!--end::Label-->
									<!--begin::Badge-->
									<div class="timeline-badge">
										<i class="fa fa-genderless text-danger icon-xl"></i>
									</div>
									<!--end::Badge-->
									<!--begin::Desc-->
									<div class="timeline-content font-weight-bolder font-size-lg text-dark-75 pl-3">Make deposit
									<a href="#" class="text-primary">USD 700</a>. to ESL</div>
									<!--end::Desc-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="timeline-item align-items-start">
									<!--begin::Label-->
									<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">16:50</div>
									<!--end::Label-->
									<!--begin::Badge-->
									<div class="timeline-badge">
										<i class="fa fa-genderless text-primary icon-xl"></i>
									</div>
									<!--end::Badge-->
									<!--begin::Text-->
									<div class="timeline-content font-weight-mormal font-size-lg text-muted pl-3">Indulging in poorly driving and keep structure keep great</div>
									<!--end::Text-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="timeline-item align-items-start">
									<!--begin::Label-->
									<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">21:03</div>
									<!--end::Label-->
									<!--begin::Badge-->
									<div class="timeline-badge">
										<i class="fa fa-genderless text-danger icon-xl"></i>
									</div>
									<!--end::Badge-->
									<!--begin::Desc-->
									<div class="timeline-content font-weight-bolder text-dark-75 pl-3 font-size-lg">New order placed
									<a href="#" class="text-primary">#XF-2356</a>.</div>
									<!--end::Desc-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="timeline-item align-items-start">
									<!--begin::Label-->
									<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">23:07</div>
									<!--end::Label-->
									<!--begin::Badge-->
									<div class="timeline-badge">
										<i class="fa fa-genderless text-info icon-xl"></i>
									</div>
									<!--end::Badge-->
									<!--begin::Text-->
									<div class="timeline-content font-weight-mormal font-size-lg text-muted pl-3">Outlines keep and you honest. Indulging in poorly driving</div>
									<!--end::Text-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="timeline-item align-items-start">
									<!--begin::Label-->
									<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">16:50</div>
									<!--end::Label-->
									<!--begin::Badge-->
									<div class="timeline-badge">
										<i class="fa fa-genderless text-primary icon-xl"></i>
									</div>
									<!--end::Badge-->
									<!--begin::Text-->
									<div class="timeline-content font-weight-mormal font-size-lg text-muted pl-3">Indulging in poorly driving and keep structure keep great</div>
									<!--end::Text-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="timeline-item align-items-start">
									<!--begin::Label-->
									<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">21:03</div>
									<!--end::Label-->
									<!--begin::Badge-->
									<div class="timeline-badge">
										<i class="fa fa-genderless text-danger icon-xl"></i>
									</div>
									<!--end::Badge-->
									<!--begin::Desc-->
									<div class="timeline-content font-weight-bolder font-size-lg text-dark-75 pl-3">New order placed
									<a href="#" class="text-primary">#XF-2356</a>.</div>
									<!--end::Desc-->
								</div>
								<!--end::Item-->
							</div>
							<!--end::Timeline-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Mixed Widget 14-->
				</div>
				<!--end::Aside-->
				<!--begin::Content-->
				<div class="flex-row-fluid ml-lg-8">
					<!--begin::Row-->
					<div class="row">
						<div class="col-lg-12">
							<!--begin::Advance Table Widget 2-->
							<div class="card card-custom card-stretch gutter-b">
								<!--begin::Header-->
								<div class="card-header border-0 pt-5">
									<h3 class="card-title align-items-start flex-column">
										<span class="card-label font-weight-bolder text-dark">{{ $account->link}}</span>
										<span class="text-muted mt-3 font-weight-bold font-size-sm">{{ $account->job_title}}</span>



									</h3>
									<div class="card-toolbar">
										<ul class="nav nav-pills nav-pills-sm nav-dark-75">
											<li class="nav-item">
												<a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_tab_pane_11_1">Month</a>
											</li>
											<li class="nav-item">
												<a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_tab_pane_11_2">البيانات الشخصية</a>
											</li>
											<li class="nav-item">
												<a class="nav-link py-2 px-4 active" data-toggle="tab" href="#kt_tab_pane_11_3">المرضى</a>
											</li>
										</ul>
									</div>
								</div>
								<!--end::Header-->
								<!--begin::Body-->
								<div class="card-body pt-2 pb-0 mt-n3">
									<div class="tab-content mt-5" id="myTabTables11">
										<!--begin::Tap pane-->
										<div class="tab-pane fade" id="kt_tab_pane_11_1" role="tabpanel" aria-labelledby="kt_tab_pane_11_1">
											<!--begin::Table-->
											<div class="table-responsive">
												<table class="table table-borderless table-vertical-center">
													<thead>
														<tr>
															<th class="p-0 w-40px"></th>
															<th class="p-0 min-w-200px"></th>
															<th class="p-0 min-w-100px"></th>
															<th class="p-0 min-w-125px"></th>
															<th class="p-0 min-w-110px"></th>
															<th class="p-0 min-w-150px"></th>
														</tr>
													</thead>
													<tbody>

                                                    @foreach($account ->patients as $acc)
														<tr>
															<td class="pl-0 py-4">
																<div class="symbol symbol-50 symbol-light">
																	<span class="symbol-label">
																		<img src="{{ $acc->photo }}" class="h-50 align-self-center" alt="">
																	</span>
																</div>
															</td>
															<td class="pl-0">
                                                                {{--<span class="font-weight-bolder">الاسم</span>--}}
                                                                <a class="text-muted font-weight-bold text-hover-primary" href="#">{{ $acc->name }}</a>
																<div>
																	{{--<span class="font-weight-bolder">البريد الاكتروني</span>--}}
																	<a class="text-muted font-weight-bold text-hover-primary" href="#">{{ $acc->email }}</a>
																</div>
															</td>
															<td class="text-right">
																<span class="text-muted font-weight-bold">الهاتف المحمول</span>
																<span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{ $acc->mobile }}</span>
															</td>
															<td class="text-right">
																<span class="text-muted font-weight-500">Laravel, Metronic</span>
															</td>
															<td class="text-right">
																<span class="label label-lg label-light-success label-inline">Success</span>
															</td>
															<td class="text-right pr-0">
																<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
																	<span class="svg-icon svg-icon-md svg-icon-primary">
																		<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Settings-1.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24" height="24"></rect>
																				<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000"></path>
																				<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3"></path>
																			</g>
																		</svg>
																		<!--end::Svg Icon-->
																	</span>
																</a>
																<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
																	<span class="svg-icon svg-icon-md svg-icon-primary">
																		<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Write.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24" height="24"></rect>
																				<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)"></path>
																				<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
																			</g>
																		</svg>
																		<!--end::Svg Icon-->
																	</span>
																</a>
																<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
																	<span class="svg-icon svg-icon-md svg-icon-primary">
																		<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Trash.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24" height="24"></rect>
																				<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
																				<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
																			</g>
																		</svg>
																		<!--end::Svg Icon-->
																	</span>
																</a>
															</td>
														</tr>
                                                    @endforeach
													</tbody>
												</table>
											</div>
											<!--end::Table-->
										</div>
										<!--end::Tap pane-->
										<!--begin::Tap pane-->
										<div class="tab-pane fade" id="kt_tab_pane_11_2" role="tabpanel" aria-labelledby="kt_tab_pane_11_2">
											<!--begin::Table-->
										<!--begin::Table-->
										<div class="accordion accordion-light  accordion-toggle-arrow" id="accordionExample5">
											<div class="card">
											 <div class="card-header" id="headingOne5">
											  <div class="card-title" data-toggle="collapse" data-target="#collapseOne5">
											   <i class="flaticon-pie-chart-1"></i>البيانات الشخصية
											  </div>
											 </div>
											 <div id="collapseOne5" class="collapse show" data-parent="#accordionExample5">
											  <div class="card-body">



												<div class="example example-basic">
													<div class="example-preview">
														<!--begin::Timeline-->
														<div class="timeline timeline-2" style="font-size:15px">
															<div class="timeline-bar"></div>
															<div class="timeline-item">
																<div class="timeline-badge"></div>
																<div class="timeline-content d-flex align-items-center justify-content-between">
																	<span class="mr-3">
																		<span style="color:red"> الاسم :</span>
																		<span href="#">{{ $account->full_name}}</span>
																	</span>

																</div>
															</div>
															<div class="timeline-item">
																<span class="timeline-badge bg-success"></span>
																<div class="timeline-content d-flex align-items-center justify-content-between">
																	<span class="mr-3">
																		<span style="color:red"> تاريخ الميلاد :</span>
																		<span href="#">{{ $account->birth_day}}</span>
																	</span>

																</div>
															</div>
															<div class="timeline-item">
																<span class="timeline-badge"></span>
																<div class="timeline-content d-flex align-items-center justify-content-between">
																	<span class="mr-3">
																		<span style="color:red"> مكان الميلاد :</span>
																		<span href="#">{{ $account->birth_place}}</span>
																	</span>
																</div>
															</div>
															<div class="timeline-item">
																<span class="timeline-badge bg-danger"></span>
																<div class="timeline-content d-flex align-items-center justify-content-between">
																	<span class="mr-3">
																		<span style="color:red"> رقم الهوية  :</span>
																		<span href="#">{{ $account->national_id}}</span>
																	</span>
																</div>
															</div>
															<div class="timeline-item">
																<span class="timeline-badge "></span>
																<div class="timeline-content d-flex align-items-center justify-content-between">
																	<span class="mr-3">
																		<span style="color:red"> مكان الإقامة الحالي :</span>
																		<span href="#">{{ $account->current_place}}</span>
																	</span>
																</div>
															</div>

															<div class="timeline-item">
																<span class="timeline-badge bg-warning"></span>
																<div class="timeline-content d-flex align-items-center justify-content-between">
																	<span class="mr-3">
																		<span style="color:red"> اسم الام :</span>
																		<span href="#">{{ $account->mother_name}}</span>
																	</span>
																</div>
															</div>

														</div>
														<!--end::Timeline-->
													</div>
												</div>


											  </div>
											 </div>
											</div>
											<div class="card">
											 <div class="card-header" id="headingTwo5">
											  <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo5">
											   <i class="flaticon2-notification"></i> بيانات العمل
											  </div>
											 </div>
											 <div id="collapseTwo5" class="collapse" data-parent="#accordionExample5">
											  <div class="card-body">


												<div class="example example-basic">
													<div class="example-preview">
														<!--begin::Timeline-->
														<div class="timeline timeline-2" style="font-size:16px">
															<div class="timeline-bar"></div>
															<div class="timeline-item">
																<div class="timeline-badge"></div>
																<div class="timeline-content d-flex align-items-center justify-content-between">
																	<span class="mr-3">
																		<span style="color:red"> المسمى الوظيفي :</span>
																		<span href="#">{{ $account->job_title}}</span>
																	</span>

																</div>
															</div>
															<div class="timeline-item">
																<span class="timeline-badge bg-success"></span>
																<div class="timeline-content d-flex align-items-center justify-content-between">
																	<span class="mr-3">
																		<span style="color:red"> مكان العمل :</span>
																		<span href="#">{{ $account->work_place}}</span>
																	</span>

																</div>
															</div>



														</div>
														<!--end::Timeline-->
													</div>
												</div>


											  </div>
											 </div>
											</div>
											<div class="card">
											 <div class="card-header" id="headingThree5">
											  <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree5">
											   <i class="flaticon2-chart"></i>بيانات التواصل
											  </div>
											 </div>
											 <div id="collapseThree5" class="collapse" data-parent="#accordionExample5">
											  <div class="card-body">


												<div class="example example-basic">
													<div class="example-preview mb-5">
														<!--begin::Timeline-->
														<div class="timeline timeline-2" style="font-size:16px" >
															<div class="timeline-bar"></div>
															<div class="timeline-item">
																<div class="timeline-badge"></div>

																<div class="timeline-content d-flex align-items-center justify-content-between">
																	<span class="mr-3">
																		<span style="color:red"> البريد الالكتروني :</span>
																		<span href="#">{{ $account->email}}</span>
																	</span>

																</div>
															</div>
															<div class="timeline-item">
																<span class="timeline-badge bg-success"></span>
																<div class="timeline-content d-flex align-items-center justify-content-between">
																	<span class="mr-3">
																		<span style="color:red"> الموبايل :</span>
																		<span href="#">{{ $account->mobile}}</span>
																	</span>

																</div>
															</div>



														</div>
														<!--end::Timeline-->
													</div>
												</div>


											  </div>
											 </div>
											</div>
										   </div>
										<!--end::Table-->


										</div>
										<!--end::Tap pane-->
										<!--begin::Tap pane-->
										<div class="tab-pane fade active show" id="kt_tab_pane_11_3" role="tabpanel" aria-labelledby="kt_tab_pane_11_3">

											<div class="card card-custom">

												<div class="card-body align-items-center ">
													<!--begin: Datatable-->
													<table  class="table  " id="ex_table">

														<thead>

															<tr>
																<th>  </th>
																<th>الاسم</th>
																<th>رقم الهوية </th>
																<th>تاريخ الميلاد </th>
																<th>مكان الميلاد </th>
																<th>المكان الحالي </th>
																<th>المسمى الوظيفي </th>
																<th>تاريخ الانشاء </th>
																<th>الاجراءات </th>

															</tr>
														</thead>
														<tbody>
															@isset($account)
															@foreach ($account -> patients as $patient)
															<tr>
																<td>{{ $loop->iteration }}</td>
																<td> <a href="{{ route('admin.patients.show' , $patient->id) }}" >{{ $patient->name }} </a> </td>

																<td>{{ $patient->national_id }}</td>
																<td>{{ $patient->birth_day }}</td>
																<td>{{ $patient->birth_place }}</td>
																<td>{{ $patient->current_place }}</td>
																<td>{{ $patient->job_title }}</td>
																<td>{{ $patient->created_at->format('Y-m-d') }}</td>
																<td>
																	<div class="d-flex align-items-center" role="group" aria-label="Basic example">
																		<a href="{{route('admin.patients.edit', $patient -> id)}} "
																		   class="btn btn-xs btn-outline-primary  mr-1 mb-1" >تعديل</a>
																		<a href="{{route('admin.patients.destroy', $patient -> id)}} "
																		   class="btn  btn-outline-danger  mr-1 mb-1 btn-xs">حذف</a>
																	</div>
																</td>
															</tr>
															@endforeach
															@endisset

														</tbody>
													</table>

													<!--end: Datatable-->





														<!--begin::Pagination-->
											<div class="d-flex  align-items-center">
											{{-- 	{!! $patients->links() !!} --}}

											</div>

								<!--end:: Pagination-->


												</div>

											</div>



										</div>
										<!--end::Tap pane-->
									</div>
								</div>
								<!--end::Body-->
							</div>
							<!--end::Advance Table Widget 2-->
						</div>

					</div>
					<!--end::Row-->

				</div>
				<!--end::Content-->
			</div>
			<!--end::Profile 2-->



            </div>
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

		$(document).ready( function () {
			$('#ex_table').DataTable({
				language:{
					search: "بحث "
  						 },

				paging : false,
				info : false,
			});
		} );



</script>

@endsection
