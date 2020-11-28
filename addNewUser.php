<!-- START:: INCLUDING HEADER -->
<?php include('layouts/header.php') ?>
<!-- END:: INCLUDING HEADER -->

	<!-- START:: CONTENT -->
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid row">

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
              <div class="row">
                <label class="col-form-label col-12">اسم المستخدم </label>
                <div class="input-group-prepend col-12">
                  <span class="input-group-text"> <i class="la la-pencil"></i> </span>
                  <input type="text" class="form-control" placeholder="اسم المستخدم ">
                </div>
              </div>
            </div>

            <div class="form-group col-12 col-md-6">
              <div class="row">
                <label class="col-form-label col-12">البريد الإلكترونى </label>
                <div class="input-group-prepend col-12">
                  <span class="input-group-text"> <i class="la la-at"></i> </span>
                  <input type="text" class="form-control" placeholder="البريد الإلكترونى">
                </div>
              </div>
            </div>

            <div class="form-group col-12 col-md-6">
              <div class="row">
                <label class="col-form-label col-12">المسمى الوظيفى </label>
                <div class="input-group-prepend col-12">
                  <span class="input-group-text"> <i class="la la-bookmark"></i> </span>
                  <select class="form-control kt-selectpicker" data-size="7" data-live-search="true">
                    <option>اختار المسمى الوظيفى</option>
                    <option value="1">مدير نظام</option>
                    <option value="2">محاسب</option>
                    <option value="3">مدير مبيعات</option>
                    <option value="4">ممثل مبيعات</option>
                    <option value="4">موظف</option>
                    <option value="4">It Supervisor</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="form-group col-12 col-md-6">
              <div class="row">
                <label class="col-form-label col-12">الصلاحيات  </label>
                <div class="input-group-prepend col-12">
                  <span class="input-group-text"> <i class="la la-unlock"></i> </span>
                  <select class="form-control kt-select2" id="kt_select2_3" name="param" multiple="multiple" placeholder="اختار الصلاحيات">
                    <option value="1">صلاحيه 1</option>
                    <option value="2">صلاحيه 2</option>
                    <option value="3">صلاحيه 3</option>
                  </select>
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

      <div>
      <!--END::PORTEL-->

    </div>

	</div>
  <!-- END:: CONTENT -->

<!-- START:: INCLUDING FOOTER -->
<?php include('layouts/footer.php') ?>
<!-- END:: INCLUDING FOOTER -->