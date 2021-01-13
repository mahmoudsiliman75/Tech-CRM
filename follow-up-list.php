<!-- START:: INCLUDING HEADER -->
<?php include('layouts/header.php') ?>
<!-- END:: INCLUDING HEADER -->

	<!-- START:: CONTENT -->

	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

    <div class="row">
      <div class="col-12">

        <!--START::PORTEL-->
        <div class="kt-portlet">
          <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
              <h3 class="kt-portlet__head-title"> قائمة متابعات العملاء </h3>
            </div>
          </div>
        <div>
        <!--START::PORTEL-->

        <!--START: FOLOW UP DATATABLE-->
        <div class="kt-portlet__body kt-portlet__body--fit">

          <table class="table table-responsive-sm" id="newUserTable">
            <thead class="thead-dark">
              <tr>
                <th>#</th>
                <th>  المتصل </th>
                <th> التاريخ </th>
                <th> التفاصيل </th>
                <th class="action text-center">إجراء</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>  العميل </td>
                <td> 1 - 1 - 2020 </td>
                <td> Blaaaaa Blaaaaa Blaaaaa </td>
                <td align="center">
                  <button class="kt-badge kt-badge--outline kt-badge--primary" data-toggle="modal" data-target="#edit-follow-up" title="تعديل">
                    <i class="la la-edit"></i>
                  </button>
                </td>
              </tr>
            </tbody>
          </table>

          <!-- START:: MODAL -->
          <div class="modal fade" id="edit-follow-up" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">تعدبل المتابعة </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  </button>
                </div>

                <div class="modal-body">
                <form class="kt-form p-3">
                  <div class="row">

                    <div class="form-group col-12 col-md-6">
                      <div class="row">
                        <label class="col-form-label col-12">  المتصل </label>
                        <div class="input-group-prepend col-12">
                          <span class="input-group-text"> <i class="la la-user" style="font-size: 18px"></i> </span>
                          <select class="form-control kt-selectpicker" data-size="7" data-live-search="true">
                            <option>اختار المتصل</option>
                            <option value="1"> الشركة </option>
                            <option value="2">العميل</option>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="form-group col-12 col-md-6">
                      <div class="row">
                        <label class="col-form-label col-12"> تاريخ الاتصال </label>
                        <div class="input-group-prepend col-12">
                          <span class="input-group-text"> <i class="la la-calendar" style="font-size: 18px"></i> </span>
                          <input type="text" class="form-control" readonly value="05/20/2017" id="kt_datepicker_3" />
                        </div>  
                        </div>
                      </div>
                    </div>

                    <div class="form-group col-12 col-md-12">
                      <div class="row">
                        <label class="col-form-label col-12"> التفاصيل </label>
                        <div class="input-group-prepend col-12">
                          <textarea class="default"></textarea>
                        </div>
                      </div>
                    </div>

                    <div class="form-group col-12 px-4">
                      <div class="input-group">
                        <div class="row">
                          <button type="submit" class="btn btn-success" style="background-color:#17b978; border:none;">حفظ</button> 
                        </div>
                      </div>
                    </div>

                  </div>
                </form>
                </div>

              </div>
            </div>
          </div>
          <!-- END:: MODAL -->

        </div>
        <!--END:  FOLOW UP DATATABLE-->

      </div>  
    </div>

	</div>

	<!-- END:: CONTENT -->
</div>

<!-- START:: INCLUDING FOOTER -->
<?php include('layouts/footer.php') ?>
<!-- END:: INCLUDING FOOTER -->