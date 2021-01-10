<div>
    <form class="form" id="formdata">
        <div class="card-body">

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
                    <button  wire:click.prevent="addRow"  class="addRow btn btn-sm font-weight-bolder btn-light-primary">
                        <i class="la la-plus"></i>إضافة صفة</button>
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
</div>
