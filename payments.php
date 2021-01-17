<!-- START:: INCLUDING HEADER -->
<?php include('layouts/header.php') ?>
<!-- END:: INCLUDING HEADER -->

	<!-- START:: CONTENT -->
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

    <div class="row">
      <div class="col-12">

        <div class="kt-portlet">

        <!-- START:: TITLE -->
        <div class="kt-portlet__head">
          <div class="kt-portlet__head-label d-flex justify-content-between w-100">
            <h3 class="kt-portlet__head-title"> المصروفات </h3>
            <div class="btns-box">
              <button type="button" class="btn btn-outline-success mx-1 mb-1" data-toggle="modal" data-target="#add-payments"> <i class="la la-plus"></i>  اضافة مصروفات  </button>
            </div>
          </div>
        </div>
        <!--START::TITLE-->

        <!-- START:: ADD PAYMENT MODAL -->
        <div class="modal fade" id="add-payments" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> ابحث خلال فتر زمنية </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
              </div>
              <div class="modal-body">
                <form class="kt-form pb-0 p-3">

                  <div class="row">

                    <div class="form-group col-12 col-md-4">
                      <div class="row">
                        <label class="col-form-label col-12"> اسم الموظف </label>
                        <div class="input-group-prepend col-12">
                          <span class="input-group-text"> <i class="la la-user" style="font-size: 18px"></i> </span>
                          <select class="form-control kt-selectpicker" data-size="7" data-live-search="true">
                            <option value="1"> محمد عيد </option>
                            <option value="2"> محمود سليمان </option>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="form-group col-12 col-md-4">
                      <div class="input-group">
                        <div class="row">
                          <label class="col-form-label col-12"> التاريخ </label>
                          <div class="input-group-prepend col-12">
                            <span class="input-group-text"> <i class="la la-calendar" style="font-size: 18px"></i> </span>
                            <input type="text" class="form-control" readonly value="05/20/2017" id="kt_datepicker_3" />
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="form-group col-12 col-md-4">
                      <div class="input-group">
                        <div class="row">
                          <label class="col-form-label col-12"> القيمة </label>
                          <div class="input-group-prepend col-12">
                            <span class="input-group-text"> <i class="la la-dollar" style="font-size: 18px"></i> </span>
                            <input type="text" class="form-control" placeholder="القيمة" />
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="form-group col-12 col-md-12">
                      <div class="row">
                        <label class="col-form-label col-12"> السبب </label>
                        <div class="input-group-prepend col-12">
                          <textarea class="default">
                          </textarea>
                        </div>
                      </div>
                    </div>

                  </div>

                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
                <button type="button" class="done btn btn-success"> اضافة </button>
              </div>
            </div>
          </div>
        </div>
        <!-- END:: ADD PAYMENT MODAL -->

        <!--START: ARCHIVE USERS DATATABLE-->
        <div class="kt-portlet__body kt-portlet__body--fit">

          <table class="standard table table-responsive-sm" width="100%">
            <thead class="thead-dark">
              <tr>
                <th>#</th>
                <th> الموظف </th>
                <th> التاريخ </th>
                <th>قيمة المصروفات</th>
                <th> السبب </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td> محمد عيد </td>
                <td> 2021 - 1 - 17 </td>
                <td> 1000 </td>
                <td> مستلزمات مكتب </td>
              </tr>
            </tbody>
          </table>

        </div>
        <!--END: ARCHIVE USERS DATATABLE-->

      </div>  
    </div>

	</div>
  <!-- END:: CONTENT -->
</div>

<!-- START:: INCLUDING FOOTER -->
<?php include('layouts/footer.php') ?>
<!-- END:: INCLUDING FOOTER -->