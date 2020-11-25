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
              <h3 class="kt-portlet__head-title"> اضافة مستخدم جديد </h3>
            </div>
          </div>

          <!--START:: ADD NEW USER FORM-->
          <form class="kt-form p-3">
            <div class="row">

              <div class="form-group col-12 col-md-6">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="la la-pencil"></i> </span>
                  </div>
                  <input type="text" class="form-control" placeholder="الإسم">
                </div>
              </div>

              <div class="form-group col-12 col-md-6">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="la la-at"></i> </span>
                  </div>
                  <input type="text" class="form-control" placeholder="البريد الإلكترونى">
                </div>
              </div>

              <div class="form-group col-12 col-md-6">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="la la-user"></i> </span>
                  </div>
                  <select class="form-control kt-selectpicker" data-size="7" data-live-search="true">
                    <option>اختار الوظيفه</option>
                    <option value="1">مدير نظام</option>
                    <option value="2">محاسب</option>
                    <option value="3">مدير مبيعات</option>
                    <option value="4">ممثل مبيعات</option>
                    <option value="4">موظف</option>
                    <option value="4">It Supervisor</option>
                  </select>
                </div>
              </div>

              <div class="form-group col-12 col-md-6">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="la la-unlock"></i> </span>
                  </div>
                  <select class="form-control kt-select2" id="kt_select2_3" name="param" multiple="multiple" placeholder="اختار الصلاحيات">
                      <option value="1">صلاحيه 1</option>
                      <option value="2">صلاحيه 2</option>
                      <option value="3">صلاحيه 3</option>
                  </select>
                </div>
              </div>

            </div>
          </form>
          <!--END::ADD NEW USER FORM-->

        <div>
        <!--END::PORTEL-->

      </div>
    </div>

	</div>
  <!-- END:: CONTENT -->
</div>


<!-- START:: INCLUDING FOOTER -->
<?php include('layouts/footer.php') ?>
<!-- END:: INCLUDING FOOTER -->