@extends('admin.layouts.admin')

@section('title')
    حسابات الأطباء
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
                    <h5 class="text-dark font-weight-bold my-1 mr-5">حسابات الأطباء</h5>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="#" class="text-muted">عرض الأطباء</a>
                        </li>
                       {{--  <li class="breadcrumb-item">
                            <a href="#" class="text-muted">Classic</a>
                        </li> --}}
                    </ul>
                    <!--end::Breadcrumb-->
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
						<h3 class="card-label" >حسابات الاطباء
					{{-- 	<span class="d-block text-muted pt-2 font-size-sm">light head and row separator</span></h3> --}}

					
					</div>
					<div class="card-toolbar">
						<!--begin::Dropdown-->
						{{-- <div class="dropdown dropdown-inline mr-2">
							<button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="la la-download"></i>Export</button>
							<!--begin::Dropdown Menu-->
							<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
								<ul class="nav flex-column nav-hover">
									<li class="nav-header font-weight-bolder text-uppercase text-primary pb-2">Choose an option:</li>
									<li class="nav-item">
										<a href="#" class="nav-link">
											<i class="nav-icon la la-print"></i>
											<span class="nav-text">Print</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link">
											<i class="nav-icon la la-copy"></i>
											<span class="nav-text">Copy</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link">
											<i class="nav-icon la la-file-excel-o"></i>
											<span class="nav-text">Excel</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link">
											<i class="nav-icon la la-file-text-o"></i>
											<span class="nav-text">CSV</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link">
											<i class="nav-icon la la-file-pdf-o"></i>
											<span class="nav-text">PDF</span>
										</a>
									</li>
								</ul>
							</div>
							<!--end::Dropdown Menu-->
						</div> --}}
						<!--end::Dropdown-->
						<!--begin::Button-->
						<a href="{{  route('admin.accounts.create') }}" class="btn btn-primary font-weight-bolder">
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
								<th>الحساب</th>
								<th>عدد المرضى </th>
								<th>تاريخ الميلاد </th>
								<th>مكان الميلاد </th>
								<th>المكان الحالي </th>
								<th>المسمى الوظيفي </th>
								<th>تاريخ الانشاء </th>
								<th>الاجراءات </th>

							</tr>
						</thead>
						<tbody>		
							@foreach ($accounts as $account)
							<tr>
								<td>{{ $loop->iteration }}</td>
								<td> <a href="{{ route('admin.accounts.show' , $account->id) }}" >{{ $account->full_name }} </a> </td>
								<td>{{ $account->user->name }}</td>
								<td>{{ $account->patients->count() }}</td>
								<td>{{ $account->birth_day }}</td>
								<td>{{ $account->birth_place }}</td>
								<td>{{ $account->current_place }}</td>
								<td>{{ $account->job_title }}</td>
								<td>{{ $account->created_at->format('Y-m-d') }}</td>
                                <td>
                                    <div class="d-flex align-items-center" role="group" aria-label="Basic example">
                                        <a href="{{route('admin.accounts.edit', $account -> id)}} "
                                           class="btn btn-xs btn-outline-primary  mr-1 mb-1" >تعديل</a>
                                        <a href="{{route('admin.accounts.destroy', $account -> id)}} "
                                           class="btn  btn-outline-danger  mr-1 mb-1 btn-xs">حذف</a>
                                    </div>
                                </td>
							</tr>
							@endforeach


						</tbody>
					</table>
					
					<!--end: Datatable-->
					
						
			


						<!--begin::Pagination-->
			<div class="d-flex  justify-content-center">
				{!! $accounts->links() !!}
				
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
