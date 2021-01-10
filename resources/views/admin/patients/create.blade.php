@extends('admin.layouts.admin')

@section('title')
    إضافة حساب مريض
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
                    <h5 class="text-dark font-weight-bold my-1 mr-5">إضافة مريض</h5>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="{{  route('admin.accounts.index') }}" class="text-muted">عرض المرضى</a>
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
        <!--begin::Container-->
        <div class="container">
            <!--begin::Profile Personal Information-->
            <div class="row">

                <div class="col-lg-12">

                    <div class="card card-custom gutter-b example example-compact">
                        <div class="card-header">
                            <h3 class="card-title">بيانات المريض</h3>
                            <div class="card-toolbar">
                                <div class="example-tools justify-content-center">

                                </div>
                            </div>
                        </div>
                        <!--begin::Form-->
                        <form class="form" method="POST" action="{{ route('admin.patients.store') }}" enctype="multipart/form-data" >

                            @csrf
                            <div class="card-body">
                                <div class="form-group row">


                                    <div class="col-lg-6">
                                        <label>اسم الطبيب</label>

                                            <select name="account_id" class="custom-select" id="inputGroupSelect02">
                                              <option selected>اختر طبيب معالج</option>

                                                @if($accounts && $accounts -> count() > 0)
                                                @foreach($accounts as $account)
                                                    <option  value="{{$account -> id }}">{{$account -> full_name}}</option>
                                                @endforeach
                                                    @endif
                                           </select>

                                        @error('account_id')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror

                                    </div>

                                    <div class="col-lg-6">
                                        <label>الصورة</label>
                                        <input type="file" name="photo" class="form-control" placeholder="">
                                        @error('photo')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="form-group row">

                                    <div class="col-lg-3">
                                        <label>رقم الهوية</label>
                                        <input type="text" name="national_id" class="form-control" placeholder="">
                                        @error('national_id')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>


                                    <div class="col-lg-3">
                                        <label>الاسم </label>
                                        <input type="text" name="name" class="form-control" placeholder="">
                                        @error('name')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="col-lg-3">
                                        <label>البريد الالكتروني</label>
                                        <input type="email" name="email" class="form-control" placeholder="">
                                        @error('email')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>



                                    <div class="col-lg-3">
                                        <label>الموبايل</label>
                                        <input type="text" name="mobile" class="form-control" placeholder="">
                                        @error('mobile')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="form-group row">

                                    <div class="col-lg-3">
                                        <label>مكان الميلاد</label>
                                        <input type="text" name="birth_place" class="form-control" placeholder="">
                                        @error('birth_place')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-3">
                                        <label>تاريخ الميلاد</label>

                                        <input type="date" name="birth_day" class="form-control" placeholder="" id="example-date-input">
                                        @error('birth_day')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="col-lg-3">
                                        <label>المكان الحالي</label>
                                        <input type="text" name="current_place" class="form-control" placeholder="">
                                        @error('current_place')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="col-lg-3">
                                        <label>مكان العمل</label>
                                        <input type="text" name="work_place" class="form-control" placeholder="">
                                        @error('work_place')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>




                                </div>


                                <div class="form-group row">

                                    <div class="col-lg-3">
                                        <label>المسمى الوظيفي</label>
                                        <input type="text" name="job_title" class="form-control" placeholder="">
                                        @error('job_title')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="col-lg-5">
                                        <label>ملاحظات</label>
                                        <textarea class="form-control" name="description" rows="3"></textarea>
                                        @error('description')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>



                            </div>

                                <div class="card-footer">
                                <div class="row">
                                    <div class="col-lg-4"></div>
                                    <div class="col-lg-8">
                                        <button type="submit" class="btn btn-primary mr-2">حفظ</button>
                                        <button type="reset" class="btn btn-secondary">تراجع</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!--end::Form-->
                    </div>

                </div>

            </div>
            <!--end::Profile Personal Information-->
        </div>
        <!--end::Container-->
    </div>
</div>


@endsection

@section('script')

<script src="{{ asset('assets/js/pages/crud/forms/widgets/select29cd7.js?v=7.1.5') }}"></script>

<script>



</script>

@endsection
