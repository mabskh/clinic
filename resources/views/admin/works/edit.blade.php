@extends('admin.layouts.admin')

@section('title')
    @php echo $title = 'تعديل مكان العمل' @endphp
@endsection

@section('style')
    <style>
        .hidden {
            display: none;
        }
    </style>
@stop
@section('content')

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">

        <div class="d-flex flex-column-fluid ">
            <!--begin::Container-->
            <div class="container">

                <div class="row  m-6">

                    <div class="d-flex flex-row-fluid bgi-size-cover bgi-position-center bg-dark-o-15 ml-20 mr-20 ">
                        <div class="container">
                            <!--begin::Subheader-->
                            <div class="subheader py-2 py-lg-4 border-bottom border-white py-7  subheader-transparent"
                                 id="kt_subheader">

                                <div
                                    class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap ">
                                    <!--begin::Info-->

                                    <div class="d-flex align-items-baseline flex-wrap mr-5">
                                        <!--begin::Page Title-->
                                        <h6 class="text-dark font-weight-bold my-1 mr-5">
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
                                                <a href="{{ route('admin.works.index') }}" class="text-muted">أماكن العمل</a>
                                            </li>
                                        </ul>
                                        <!--end::Breadcrumb-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Toolbar-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Daterange-->
                                        <a href="#" class="btn btn-light btn-sm font-weight-bold mr-2"
                                           id="kt_dashboard_daterangepicker" data-toggle="tooltip" title=""
                                           data-placement="left" data-original-title="Select dashboard daterange">
                                            <span class="text-muted font-weight-bold mr-2"
                                                  id="kt_dashboard_daterangepicker_title">Today:</span>
                                            <span class="text-primary font-weight-bold"
                                                  id="kt_dashboard_daterangepicker_date">Jan 4</span>
                                            <span class="svg-icon svg-icon-sm svg-icon-primary ml-1">
											<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Chat-check.svg-->
											<svg xmlns="http://www.w3.org/2000/svg"
                                                 width="24px" height="24px"
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
                                        <div class="dropdown dropdown-inline" data-toggle="tooltip" title=""
                                             data-placement="left" data-original-title="Quick actions">
                                            <a href="#" class="btn btn-icon btn-light-primary btn-sm"
                                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                            <div class="d-flex align-items-stretch flex-column mx-1 px-1 my-2 py-2">

                                <div class="row">

                                    <!--                                    <div class="col-xl-4">
                                                                            &lt;!&ndash;begin::Card&ndash;&gt;
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
                                                                            &lt;!&ndash;end::Card&ndash;&gt;

                                                                        </div>-->

                                    <div class="col-xl-12">
                                        <!--begin::Card-->
                                        <div class="card card-custom gutter-b">
                                            <!--begin::Card-->
                                            <div class="card card-custom card-sticky pt-0  shadow"
                                                 id="kt_page_sticky_card">
                                                <div class="card-header `">
                                                    <div class="card-title">
                                                        <h3 class="card-label" style="color: #d92815">{{ $title }}
                                                            <i class="mr-2"></i>
                                                            <small class="" style="color: #154dd9"> يتم تعديل بيانات
                                                                العمل من خلال هذه الشاشة</small></h3>
                                                    </div>

                                                </div>
                                                <div class="card-body pt-0">
                                                    <!--begin::Form-->
                                                    <form class="form" method="POST"
                                                          action="{{ route('admin.works.update', $work->id) }}"
                                                          enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="card-body">

                                                            <div class="form-group row">

                                                                <div class="col-lg-3 " id="statics_list">
                                                                    <label>اختر اسم المريض</label>
                                                                    <select name="patient_id" class="custom-select"
                                                                            id="inputGroupSelect02">
                                                                        @if($patients && $patients -> count() > 0)
                                                                            @foreach($patients as $row)
                                                                                <option
                                                                                    value="{{$row -> id }} ">{{$row -> name}}</option>
                                                                            @endforeach
                                                                        @endif
                                                                    </select>

                                                                    @error('patient_id')
                                                                    <span class="text-danger">{{$message}}</span>
                                                                    @enderror
                                                                </div>

                                                            </div>

                                                            <div class="form-group row">
                                                                <div class="col-lg-1">
                                                                    <label>العمل</label>
                                                                </div>
                                                                <div class="col-lg-11">
                                                                    <div class="row" id="work_selects">
                                                                        <select
                                                                            class="col-lg-2  mx-2 my-2 custom-select"
                                                                            name="work_cat[]"
                                                                            id="main_work_cat">
                                                                            <option value="">اختر</option>
                                                                            @foreach($work_cat as $worksCategory)
                                                                                <option
                                                                                    value="{{$worksCategory->id }}">{{$worksCategory->label}}</option>
                                                                            @endforeach
                                                                        </select>

                                                                    </div>
                                                                    @error('work_cat')
                                                                    <span
                                                                        class="text-danger">{{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">

                                                                <div class="col-lg-3">
                                                                    <label>مكان العمل</label>
                                                                    <input type="text" name="work" class="form-control"
                                                                           placeholder="">
                                                                    @error('work')
                                                                    <span class="text-danger">{{$message}}</span>
                                                                    @enderror
                                                                </div>

                                                            </div>


                                                        </div>

                                                        <div class="card-footer">
                                                            <div class="row">
                                                                <div class="col-lg-4 mr-auto"></div>
                                                                <div class="col-lg-8">
                                                                    <button type="submit" class="btn btn-primary mr-2">
                                                                        حفظ
                                                                    </button>
                                                                    <button type="reset"
                                                                            onclick="window.history.go(-1); return false;"
                                                                            class="btn btn-secondary">
                                                                        تراجع
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <!--end::Form-->
                                                </div>
                                            </div>
                                            <!--end::Card-->

                                        </div>
                                        <!--end::Card-->
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

@push('scripts')
    <script>
        function worksSelect() {
            let worksSelects = $('#work_selects');
            $(this).nextAll().remove();
            if(!$(this).val()){
                return;
            }
            let url = "{{ route('admin.constants.index') }}" + "?filter[parent_id]=" + $(this).val();

            $.get(url, function (data) {
                if (data.length > 0) {
                    let html = '<select name="work_cat[]" class="col-lg-2 mx-2 my-2 custom-select"><option>اختر</option>';
                    $.each(data, function (index, value) {
                        html += '<option value="' + value['id'] + '">' + value['label'] + '</option>';
                    });
                    $(worksSelects).append(html + '</select>');
                    $(worksSelects).children().last().on('change', worksSelect);
                }
            });
        }

        $(document).ready(function () {
            $('#main_work_cat').on('change', worksSelect);
        });


    </script>
@endpush

