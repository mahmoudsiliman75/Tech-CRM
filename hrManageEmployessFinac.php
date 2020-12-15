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
              <h3 class="kt-portlet__head-title"> إعدادات موظفين </h3>
            </div>
          </div>
        <div>
        <!--START::PORTEL-->

        <div class="row">
          <div class="col-12">

              <!--START:: ADD NEW USER FORM-->
              <form class="kt-form p-3">
                <div class="row">

                  <div class="form-group col-12 col-md-4">
                    <div class="row">
                      <label class="col-form-label col-12">اسم الموظف</label>
                      <div class="input-group-prepend col-12">
                        <span class="input-group-text"> <i class="la la-pencil"></i> </span>
                        <input type="text" class="form-control" placeholder="الإسم">
                      </div>
                    </div>
                  </div>

                  <div class="form-group col-12 col-md-4">
                      <div class="row">
                        <label class="col-form-label col-12">  الشهر</label>
                        <div class="input-group-prepend col-12">
                          <span class="input-group-text"> <i class="la la-calendar"></i> </span>
                          <input type="text" class="form-control" readonly value="05/20/2017" id="kt_datepicker_3" />
                        </div>
                      </div>
                  </div>

                  <div class="form-group col-12 col-md-4">
                    <div class="row">
                      <label class="col-form-label col-12">الإجراء </label>
                      <div class="input-group-prepend col-12">
                        <span class="input-group-text"> <i class="la la-clipboard"></i> </span>
                        <select class="form-control kt-selectpicker" data-size="7" data-live-search="true">
                          <option> اختار الإجراء </option>
                          <option value="1">اضافة سلفة</option>
                          <option value="2"> اضافة حافز</option>
                          <option value="3">اضافة خصم</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="form-group col-12 col-md-4">
                    <div class="row">
                      <label class="col-form-label col-12"> القيمة</label>
                      <div class="input-group-prepend col-12">
                        <span class="input-group-text"> <i class="la la-dollar" style='font-weight: bold;'></i> </span>
                        <input type="text" class="form-control" placeholder=" القيمة">
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
              <!--END::ADD NEW USER FORM-->

          </div>
        </div>

        <!--START: EMPLOYEES DATATABLE-->
        <div class="kt-portlet__body kt-portlet__body--fit">

          <table class="table table-responsive-sm" id="newUserTable" width="100%">
            <thead class="thead-dark">
              <tr>
                <th>#</th>
                <th> اسم الموظف </th>
                <th> الشهر</th>
                <th>سلفه</th>
                <th>حوافز</th>
                <th>خصم</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Land Rover</td>
                <td>Range Rover</td>
                <td>Orange</td>
                <td>Orange</td>
                <td>Orange</td>
              </tr>
              <tr>
                <td>2</td>
                <td>GMC</td>
                <td>Jimmy</td>
                <td>Goldenrod</td>
                <td>Goldenrod</td>
                <td>Goldenrod</td>
              </tr>
            </tbody>
          </table>

        </div>
        <!--END: EMPLOYEES DATATABLE-->

      </div>  
    </div>

	</div>
  <!-- END:: CONTENT -->

</div>

<!-- START:: INCLUDING FOOTER -->
<?php include('layouts/footer.php') ?>
<!-- END:: INCLUDING FOOTER -->