
@extends('admin.layouts.admin')

@section('title')
    Dashboard
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
                    <h5 class="text-dark font-weight-bold my-1 mr-5">تفاصيل حسابات المستخدم |
						<span style="color: red"> {{  $user->name }}</span>
					</h5>

                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="{{  route('admin.users.index') }}" class="text-muted"> قائمة المستخدمين </a>
                        </li>

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
						<!--begin::Top-->
						<div class="d-flex">
							<!--begin::Pic-->
							<div class="flex-shrink-0 mr-7">
								<div class="symbol symbol-50 symbol-lg-120">
								{{-- 	<img alt="Pic" src="{{ asset('assets/media/users/300_2.jpg') }}" /> --}}
								</div>
							</div>
							<!--end::Pic-->
							<!--begin: Info-->
							<div class="flex-grow-1">
								<!--begin::Title-->
								<div class="d-flex align-items-center justify-content-between flex-wrap mt-2">
									<!--begin::User-->
									<div class="mr-3">
										<!--begin::Name-->
										<a href="" class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3">{{ $user->name }}
										<i class="flaticon2-correct text-success icon-md ml-2"></i></a>
										<!--end::Name-->
										<!--begin::Contacts-->
										<div class="d-flex flex-wrap my-2">
											<a href="#" class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
											<span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
												<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Mail-notification.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000" />
														<circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span>{{ $user->email }}</a>
											<a href="#" class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
											<span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
												<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Lock.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<mask fill="white">
															<use xlink:href="#path-1" />
														</mask>
														<g />
														<path d="M7,10 L7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 L17,10 L18,10 C19.1045695,10 20,10.8954305 20,12 L20,18 C20,19.1045695 19.1045695,20 18,20 L6,20 C4.8954305,20 4,19.1045695 4,18 L4,12 C4,10.8954305 4.8954305,10 6,10 L7,10 Z M12,5 C10.3431458,5 9,6.34314575 9,8 L9,10 L15,10 L15,8 C15,6.34314575 13.6568542,5 12,5 Z" fill="#000000" />
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span>مدير النظام</a>
											<a href="#" class="text-muted text-hover-primary font-weight-bold">
											<span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
												<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Map/Marker2.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<path d="M9.82829464,16.6565893 C7.02541569,15.7427556 5,13.1079084 5,10 C5,6.13400675 8.13400675,3 12,3 C15.8659932,3 19,6.13400675 19,10 C19,13.1079084 16.9745843,15.7427556 14.1717054,16.6565893 L12,21 L9.82829464,16.6565893 Z M12,12 C13.1045695,12 14,11.1045695 14,10 C14,8.8954305 13.1045695,8 12,8 C10.8954305,8 10,8.8954305 10,10 C10,11.1045695 10.8954305,12 12,12 Z" fill="#000000" />
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span>الحي العاشر</a>
										</div>
										<!--end::Contacts-->
									</div>
									<!--begin::User-->
									<!--begin::Actions-->

									<!--end::Actions-->

									<div class="card-toolbar">

										<a href="{{  route('admin.accounts.create') }}" class="btn btn-primary font-weight-bolder">
										<i class="la la-plus"></i>إضافة حساب </a>
										<!--end::Button-->
									</div>

								</div>
								<!--end::Title-->
								<!--begin::Content-->
								{{-- <div class="d-flex align-items-center flex-wrap justify-content-between">
									<!--begin::Description-->
									<div class="flex-grow-1 font-weight-bold text-dark-50 py-2 py-lg-2 mr-5">I distinguish three main text objectives could be merely to inform people.
									<br />A second could be persuade people. You want people to bay objective.</div>
									<!--end::Description-->
									<!--begin::Progress-->
									<div class="d-flex mt-4 mt-sm-0">
										<span class="font-weight-bold mr-4">Progress</span>
										<div class="progress progress-xs mt-2 mb-2 flex-shrink-0 w-150px w-xl-250px">
											<div class="progress-bar bg-success" role="progressbar" style="width: 63%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<span class="font-weight-bolder text-dark ml-4">78%</span>
									</div>
									<!--end::Progress-->
								</div> --}}
								<!--end::Content-->
							</div>
							<!--end::Info-->
						</div>
						<!--end::Top-->
						<!--begin::Separator-->
						<div class="separator separator-solid my-7"></div>
						<!--end::Separator-->
						<!--begin::Bottom-->
						<div class="d-flex align-items-center flex-wrap">
							<!--begin: Item-->
							<div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
								<span class="mr-4">
									<i class="flaticon-piggy-bank icon-2x text-muted font-weight-bold"></i>
								</span>
								<div class="d-flex flex-column text-dark-75">

									<span class="font-weight-bolder font-size-sm">الحسابات المتابعة</span>

									<span class="font-weight-bolder font-size-h5">
										<a href="#" class="text-dark-50 font-weight-bold">
										<span class="text-dark-50 font-weight-bold"></span>{{$user->accounts->count()}} </span>
										</a>

								</div>
							</div>
							<!--end: Item-->
							<!--begin: Item-->
							<div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
								<span class="mr-4">
									<i class="flaticon-confetti icon-2x text-muted font-weight-bold"></i>
								</span>
								<div class="d-flex flex-column text-dark-75">
									<span class="font-weight-bolder font-size-sm">المرضى</span>
									<span class="font-weight-bolder font-size-h5">
									<span class="text-dark-50 font-weight-bold"></span>25</span>
								</div>
							</div>
							<!--end: Item-->
							<!--begin: Item-->
							<div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
								<span class="mr-4">
									<i class="flaticon-pie-chart icon-2x text-muted font-weight-bold"></i>
								</span>
								<div class="d-flex flex-column text-dark-75">
									<span class="font-weight-bolder font-size-sm">Net</span>
									<span class="font-weight-bolder font-size-h5">
									<span class="text-dark-50 font-weight-bold">$</span>782,300</span>
								</div>
							</div>
							<!--end: Item-->
							<!--begin: Item-->
							<div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
								<span class="mr-4">
									<i class="flaticon-file-2 icon-2x text-muted font-weight-bold"></i>
								</span>
								<div class="d-flex flex-column flex-lg-fill">
									<span class="text-dark-75 font-weight-bolder font-size-sm">المهام</span>
									<a href="#" class="text-primary font-weight-bolder">عرض</a>
								</div>
							</div>
							<!--end: Item-->
							<!--begin: Item-->
							<div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
								<span class="mr-4">
									<i class="flaticon-chat-1 icon-2x text-muted font-weight-bold"></i>
								</span>
								<div class="d-flex flex-column">
									<span class="text-dark-75 font-weight-bolder font-size-sm">648 Comments</span>
									<a href="#" class="text-primary font-weight-bolder">View</a>
								</div>
							</div>
							<!--end: Item-->

						</div>
						<!--end::Bottom-->
					</div>
				</div>

				<div class="row">

					@foreach ($user->accounts as $account)


					<div class="col-xl-3">
						<!--begin::Card-->
						<div class="card card-custom gutter-b card-stretch">
							<!--begin::Body-->
							<div class="card-body pt-4 d-flex flex-column justify-content-between">
								<!--begin::Toolbar-->
								{{-- <div class="d-flex justify-content-end">
									<div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
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
								<!--end::Toolbar-->
								<!--begin::User-->
								<div class="d-flex align-items-center mb-7">
									<!--begin::Pic-->
									<div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
										<div class="symbol symbol-lg-75">
										{{-- 	<img alt="Pic" src="../../../../../theme/html/demo1/dist/assets/media/users/300_1.jpg"> --}}
										</div>
										<div class="symbol symbol-lg-75 symbol-primary d-none">
											<span class="font-size-h3 font-weight-boldest">JM</span>
										</div>
									</div>
									<!--end::Pic-->
									<!--begin::Title-->
									<div class="d-flex flex-column">
										<a href="{{ route('admin.accounts.show', $account->id ) }}" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0" >
												<span style="color: forestgreen">{{ $account->link }}</span></a>
										<span class="text-muted font-weight-bold">{{ $account->job_title }}</span>
										{{-- <span class="text-muted font-weight-bold">{{ $account->description }}</span> --}}
									</div>
									<!--end::Title-->
								</div>
								<!--end::User-->
								<!--begin::Desc-->
								{{-- <p class="mb-7">I distinguish three
								<a href="#" class="text-primary pr-1">#XRS-54PQ</a>objectives First objectives and nice cooked rice</p> --}}
								<!--end::Desc-->
								<!--begin::Info-->
								<div class="mb-5">
									<div class="d-flex justify-content-between align-items-center">
										<span class="text-dark-75 font-weight-bolder mr-2">البريد الالكتروني</span>
										<a href="#" class="text-muted text-hover-primary">{{ $account->email }}</a>
									</div>
									<div class="d-flex justify-content-between align-items-cente my-1">
										<span class="text-dark-75 font-weight-bolder mr-2">الهاتف الجوال</span>
										<span href="#" class="text-muted text-hover-primary">{{ $account->mobile }}</span>
									</div>

								</div>
								<div class="d-flex justify-content-center">
								<div class="mt-1 mb-6">
									<a href="#" class="btn btn-md btn-icon btn-light-facebook btn-pill mx-2">
										<i class="socicon-facebook"></i>
									</a>
									<a href="#" class="btn btn-md btn-icon btn-light-twitter btn-pill mx-2">
										<i class="socicon-twitter"></i>
									</a>
									<a href="#" class="btn btn-md btn-icon btn-light-google btn-pill mx-2">
										<i class="socicon-google"></i>
									</a>
								</div>
								</div>
								<!--end::Info-->
								{{-- <a href="#" class="btn btn-block btn-sm btn-light-primary font-weight-bolder text-uppercase py-4" style="font-size: large">عرض المرضى</a> --}}


								<!-- Button trigger modal-->
									<button type="button" style="font-size: large" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
										عرض المرضى
									</button>

									<!-- Modal-->
									<div class="modal fade" id="exampleModalCenter" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
										<div class="modal-dialog modal-xl modal-dialog-centered" role="document">
											<div class="modal-content">

												<table class="table mb-6">
													<thead>
														<tr>
															<th scope="col">#</th>
															<th scope="col">اسم المريض</th>
															<th scope="col">الحالة</th>
															<th scope="col">الاجراءات</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<th scope="row">1</th>
															<td>Nick</td>
															<td>فعال</td>
															<td>
																<span class="label label-inline label-light-primary font-weight-bold">Pending</span>
															</td>
														</tr>

													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>								<!--end::Body-->
							</div>
															<!--end::Card-->
					</div>

					@endforeach

				</div>

            </div>
        </div>

	</div>


@endsection
