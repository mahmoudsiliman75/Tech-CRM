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
            <h3 class="kt-portlet__head-title"> اضافة تعاقد جديد </h3>
          </div>
        </div>

        <!--START:: ADD NEW USER FORM-->
        <form class="kt-form p-3">
          <div class="row">

            <div class="form-group col-12 col-md-6">
              <div class="row">
                <label class="col-form-label col-12">الخدمة </label>
                <div class="input-group-prepend col-12">
                  <span class="input-group-text"> <i class="la la-star-o" style="font-size: 18px"></i> </span>
                  <select class="form-control kt-select2" id="client-services" name="param" multiple="multiple" placeholder="اختار الصلاحيات">
                    <option value="1"> تصميم موقع </option>
                    <option value="2">  تطبيق موبايل </option>
                    <option value="3"> استضافة </option>
                  </select>
                </div>
              </div>
            </div>

            <div class="form-group col-12 col-md-6">
              <div class="row">
                <label class="col-form-label col-12">اسم العميل </label>
                <div class="input-group-prepend col-12">
                  <span class="input-group-text"> <i class="la la-user" style="font-size: 18px"></i> </span>
                  <input type="text" class="form-control" placeholder="اسم العميل ">
                </div>
              </div>
            </div>

            <div class="form-group col-12 col-md-6">
              <div class="row">
                <label class="col-form-label col-12">مسؤل المبيعات </label>
                <div class="input-group-prepend col-12">
                  <span class="input-group-text"> <i class="la la-user" style="font-size: 18px"></i> </span>
                  <input type="text" class="form-control" placeholder="مسؤل المبيعات ">
                </div>
              </div>
            </div>

            <div class="form-group col-12 col-md-6">
              <div class="row">
                <label class="col-form-label col-12">اسم المشروع </label>
                <div class="input-group-prepend col-12">
                  <span class="input-group-text"> <i class="la la-bookmark" style="font-size: 18px"></i> </span>
                  <input type="text" class="form-control" placeholder="اسم المشروع">
                </div>
              </div>
            </div>

            <div class="form-group col-12 col-md-4">
              <div class="row">
                <label class="col-form-label col-12">تكلفة المشروع </label>
                <div class="input-group-prepend col-12">
                  <span class="input-group-text"> <i class="la la-dollar" style="font-size: 18px"></i> </span>
                  <input id="total-cost" type="text" class="form-control" value="0" placeholder="تكلفة المشروع">
                </div>
              </div>
            </div>

            <div class="form-group col-12 col-md-4">
              <div class="row">
                <label class="col-form-label col-12"> المقدم </label>
                <div class="input-group-prepend col-12">
                  <span class="input-group-text"> <i class="la la-dollar" style="font-size: 18px"></i> </span>
                  <input id="down-payment" type="text" class="form-control" value="0" placeholder=" المقدم">
                </div>
              </div>
            </div>

            <div class="form-group col-12 col-md-4">
              <div class="row">
                <label class="col-form-label col-12"> الباقى </label>
                <div class="input-group-prepend col-12">
                  <span class="input-group-text"> <i class="la la-dollar" style="font-size: 18px"></i> </span>
                  <input id="the-remaining" type="text" class="form-control" placeholder=" الباقى" disabled>
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