@extends('admin.layouts.admin')

@section('title')
    إضافة مستخدم
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
                    <h5 class="text-dark font-weight-bold my-1 mr-5">حسابات المستخدمسن</h5>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="#" class="text-muted">إضافة مستخدم جديد</a>
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
                            <h3 class="card-title">بيانات المستخدم</h3>
                            <div class="card-toolbar">
                                <div class="example-tools justify-content-center">
                                   
                                </div>
                            </div>
                        </div>
                        <!--begin::Form-->
                        <form class="form" method="POST" action="{{ route('admin.users.store') }}" >
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>اسم المستخدم</label>
                                        <input type="text" name="name" class="form-control" placeholder="">
                                        @error('name')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                      
                                    </div>
                                    <div class="col-lg-4">
                                        <label>البريد الالكتروني</label>
                                        <input type="email" name="email" class="form-control" placeholder="">
                                         @error('email')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-4">
                                        <label>كلمة المرور</label>
                                        <input type="password" name="password" class="form-control" placeholder="">
                                        <span class="form-text text-muted"></span>
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