@extends('admin.layouts.admin')

@section('title')
    إضافة صفة
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
                        <h5 class="text-dark font-weight-bold my-1 mr-5">إضافة صفة</h5>
                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item">
                                <a href="{{  route('admin.attributes.index') }}" class="text-muted">عرض الصفات</a>
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
                                <h3 class="card-title">بيانات الطبيب</h3>
                                <div class="card-toolbar">
                                    <div class="example-tools justify-content-center">

                                    </div>
                                </div>
                            </div>
                            <!--begin::Form-->
                            <form class="form" id="formdata">
                                <div class="card-body">
                                    <span id="result"></span>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label text-right">المريض</label>
                                        <div class="col-lg-4">

                                            <select name="patient_id" class="custom-select" id="inputGroupSelect02">
                                                <option selected>اختر مستخدم</option>

                                                @if($patients && $patients -> count() > 0)
                                                    @foreach($patients as $patient)
                                                        <option  value="{{$patient -> id }}">{{$patient -> name}}</option>
                                                    @endforeach
                                                @endif
                                            </select>

                                            @error('patient_id')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror

                                        </div>
                                    </div>

                                    <div class="separator separator-dashed my-8"></div>

                                   <div class="row">

                                       <div class="col-lg-12">
                                           <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>نوع الصفة</th>
                                                        <th>اسم الصفة</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                               <tbody>
                                                <tr>
                                                    <td>
                                                        <select name="attr_type[]" class="custom-select" id="inputGroupSelect02">
                                                            <option selected>اختر ...</option>
                                                            <option  value="0">نقاط قوة</option>
                                                            <option  value="1">نقاط ضعف</option>
                                                        </select>
                                                    </td>
                                                    <td><input name="attr[]"  class="form-control"/></td>
                                                    <td>
                                                        <a href="" class="delRow btn btn-sm font-weight-bolder btn-light-danger">
                                                            <i class="la la-trash-o"></i>
                                                            Delete</a></td>
                                                </tr>
                                               </tbody>
                                           </table>
                                       </div>

                                   </div>

                                    <div class="row">
                                        <div class="col-lg-4">
                                            <a href=""  class="addRow btn btn-sm font-weight-bolder btn-light-primary">
                                                <i class="la la-plus"></i>Add</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-2">
                                            <button name="save" id="save" type="submit" class="btn font-weight-bold btn-success mr-2">Submit</button>
                                            <button type="reset" class="btn font-weight-bold btn-secondary">Cancel</button>
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

        $('.addRow').on('click' , function (e){
            e.preventDefault();
           addRow();
        })

        function addRow(){
           var tr =   '<tr>' +
                        '<td>' +
                        '<select name="attr_type[]" class="custom-select" id="inputGroupSelect02">' +
                            '<option selected>اختر ...</option>' +
                        '<option  value="0">نقاط قوة</option>' +
                        '<option  value="1">نقاط ضعف</option>' +
                        '</select>' +
                        '</td>' +
                        '<td><input name="attr[]" class="form-control"/></td>' +
                            '<td>' +
                            '<a href="" class="delRow btn btn-sm font-weight-bolder btn-light-danger">' +
                            '<i class="la la-trash-o"></i>  Delete' +
                      '</a></td>' +
                        '</tr>' ;
            $('tbody').append(tr);
            $('tbody').on('click' , '.delRow' , function (){
               $(this).parent().parent().remove();
            });
        }

        $("#formdata").submit( function (e){
            e.preventDefault();
            var formData = {
                'attr'          : $('input[name=attr]').val(),
                'attr_type'     : $('input[name=attr_type]').val(),
                'patient_id'    :  $('input[name=patient_id]').val()
            };
            $.ajax({
                url: '{{route("admin.attributes.store")}}',
                type: 'post',
                data: $(this).serialize() ,
                dataType:'json',
                beforeSend: function (){
                    $("#save").attr('disabled' , 'disabled');
                },
                success : function (data){
                    if(data.error){
                        var error_Html = '';
                        for (var count = 0 ; count > data.error.length ; count ++){
                            error_Html += '<p>'+data.error[count]+'</p>';
                        }
                        $("#resutl").html('<div class="alert alert-danger">'+error_Html+'</div>');
                    }else {
                        addRow();
                        $("#resutl").html('<div class="alert alert-success">'+data.success+'</div>');
                    }
                    $("#save").attr('disabled' , false);
                }, error : function (){

                }
            });
        })

    </script>

@endsection
