@extends('admin.layouts.admin')

@section('title')
    حسابات المرضى
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
                <h6 class="text-dark font-weight-bold my-1 mr-5" >
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
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24"></rect>
															<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
															<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"></path>
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
	@include('admin.includes.alerts.error')
	@include('admin.includes.alerts.success')

    <div class="d-flex flex-column-fluid">

		<div class="container">

			{{-- <div class="alert alert-custom alert-white alert-shadow gutter-b" role="alert">
				<div class="alert-icon">
					<span class="svg-icon svg-icon-primary svg-icon-xl">
						<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Tools/Compass.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<rect x="0" y="0" width="24" height="24" />
								<path d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z" fill="#000000" opacity="0.3" />
								<path d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z" fill="#000000" fill-rule="nonzero" />
							</g>
						</svg>
						<!--end::Svg Icon-->
					</span>
				</div>
				<div class="alert-text">DataTables is a plug-in for the jQuery Javascript library. It is a highly flexible tool, based upon the foundations of progressive enhancement, and will add advanced interaction controls to any HTML table.
				<br />For more info see
				<a class="font-weight-bold" href="https://datatables.net/" target="_blank">the official home</a>of the plugin.</div>
			</div> --}}

			<!--begin::Card-->
			<div class="card card-custom">
				<div class="card-header flex-wrap border-0 pt-6 pb-0">
					<div class="card-title">
						<h3 class="card-label" >حسابات المرضى
					{{-- 	<span class="d-block text-muted pt-2 font-size-sm">light head and row separator</span></h3> --}}
					</div>
					<div class="card-toolbar">

						<a href="{{  route('admin.patients.create') }}" class="btn btn-primary font-weight-bolder">
						<i class="la la-plus"></i>إضافة جديد</a>
						<!--end::Button-->
					</div>
				</div>
				<div class="card-body align-items-center ">
					<!--begin: Datatable-->
					<table  class="table  " id="ex_table">
						<thead>

							<tr>
								<th>  </th>
								<th>الاسم</th>
								<th>الطبيب المعالج</th>
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
							@isset($patients)
							@foreach ($patients as $patient)
							<tr>
								<td>{{ $loop->iteration }}</td>
								<td> <a href="{{ route('admin.patients.show' , $patient->id) }}" >{{ $patient->name }} </a> </td>
								<td> {{ $patient->account->full_name }} </td>
								<td>{{ $patient->national_id }}</td>
								<td>{{ $patient->birth_day }}</td>
								<td>{{ $patient->birth_place }}</td>
								<td>{{ $patient->current_place }}</td>
								<td>{{ $patient->job_title }}</td>
								<td>{{ $patient->created_at }}</td>
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
				{!! $patients->links() !!}

			</div>

<!--end:: Pagination-->


				</div>

			</div>
			<!--end::Card-->


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
