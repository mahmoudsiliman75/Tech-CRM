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
              <h3 class="kt-portlet__head-title">  إضافة متابعة عميل </h3>
            </div>
          </div>
        <div>
        <!--START::PORTEL-->

        <!-- START:: LEADS LIST -->
        <div class="kt-portlet__body kt-portlet__body--fit ">
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
                    <textarea id="kt-ckeditor-1">
                      <p>اكتب التفاصيل</p>
                    </textarea>
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
        <!-- END:: LEADS LIST -->

      </div>  
    </div>

	</div>

	<!-- END:: CONTENT -->

<!-- START:: INCLUDING FOOTER -->
<?php include('layouts/footer.php') ?>
<!-- END:: INCLUDING FOOTER -->