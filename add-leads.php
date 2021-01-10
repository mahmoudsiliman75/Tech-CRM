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
              <h3 class="kt-portlet__head-title">  إضافة عميل محتمل </h3>
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
                  <label class="col-form-label col-12">اسم العميل </label>
                  <div class="input-group-prepend col-12">
                    <span class="input-group-text"> <i class="la la-pencil" style="font-size: 18px"></i> </span>
                    <input type="text" class="form-control" placeholder="اسم المستخدم ">
                  </div>
                </div>
              </div>

              <div class="form-group col-12 col-md-6">
                <div class="row">
                  <label class="col-form-label col-12"> رقم الهاتف </label>
                  <div class="input-group-prepend col-12">
                    <span class="input-group-text"> <i class="la la-phone" style="font-size: 18px"></i> </span>
                    <input type="text" class="form-control" placeholder="رقم الهاتف">
                  </div>
                </div>
              </div>

              <div class="form-group col-12 col-md-6">
                <div class="row">
                  <label class="col-form-label col-12">البريد الإلكترونى </label>
                  <div class="input-group-prepend col-12">
                    <span class="input-group-text"> <i class="la la-at" style="font-size: 18px"></i> </span>
                    <input type="text" class="form-control" placeholder="البريد الإلكترونى">
                  </div>
                </div>
              </div>

              <div class="form-group col-12 col-md-6">
                <div class="row">
                  <label class="col-form-label col-12"> جاى منين </label>
                  <div class="input-group-prepend col-12">
                    <span class="input-group-text"> <i class="la la-bookmark" style="font-size: 18px"></i> </span>
                    <select class="form-control kt-selectpicker" data-size="7" data-live-search="true">
                      <option>اختار جاى منين</option>
                      <option value="1"> Facebook </option>
                      <option value="2">Ads</option>
                      <option value="3">Word Of Mouth</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="form-group col-12 col-md-6">
                <div class="row">
                  <label class="col-form-label col-12"> الخدمات </label>
                  <div class="input-group-prepend col-12">
                    <span class="input-group-text"> <i class="la la-star-o" style="font-size: 18px"></i> </span>
                    <select class="form-control kt-select2" id="services_select2_3" multiple="multiple" placeholder="اختار الخدمات">
                      <option value="1"> تصميم موقع ويب</option>
                      <option value="2"> استضافة</option>
                      <option value="3"> تطبيق موبايل</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="form-group col-12 col-md-6">
                <div class="row">
                  <label class="col-form-label col-12"> مسؤل المبيعات </label>
                  <div class="input-group-prepend col-12">
                    <span class="input-group-text"> <i class="la la-user" style="font-size: 18px"></i> </span>
                    <select class="form-control kt-selectpicker" data-size="7" data-live-search="true">
                      <option>اختار مسؤل المبيعات</option>
                      <option value="1"> مبيعات 1</option>
                      <option value="2">مبيعات 2</option>
                      <option value="3"> مبيعات 3</option>
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
        </div>
        <!-- START:: LEADS LIST -->

        <!--START::PORTEL-->
        <div class="kt-portlet">
          <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
              <h3 class="kt-portlet__head-title"> قائمة العملاء المحتملين </h3>
            </div>
          </div>
        <div>
        <!--START::PORTEL-->

        <!--START: LEADS DATATABLE-->
        <div class="kt-portlet__body kt-portlet__body--fit">

          <table class="table table-responsive-sm" id="newUserTable">
            <thead class="thead-dark">
              <tr>
                <th>#</th>
                <th> اسم العميل </th>
                <th>رقم الهاتف</th>
                <th>البريد الإلكترونى</th>
                <th>الخدمات </th>
                <th>مسؤل المبيعات </th>
                <th> جاى منين </th>
                <th class="action text-center">إجراء</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td> محمود سليمان </td>
                <td> 01000000010 </td>
                <td>mahmoudsiliman@localhost.com</td>
                <td>
                  <ul>
                    <li> تصميم موقع ويب </li>
                    <li> استضافة </li>
                  <ul>
                </td>
                <td> محمد عيد </td>
                <td> Ads </td>
                <td align="right">
                  <div class="row">

                    <div class="col-6 p-0 text-right">
                      <a href="#" class="confirm kt-badge kt-badge--outline kt-badge--success" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="تأكيد التعاقد">
                        <i class="la la-check"></i>
                      </a>
                    </div>

                    <div class="col-6 p-0">
                      <a href="#" class="col-6 kt-badge kt-badge--outline kt-badge--primary" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="تعديل">
                        <i class="la la-edit"></i>
                      </a>
                    </div>

                    <div class="col-6 p-0 text-right">
                      <a href="#" class="archive col-6 kt-badge kt-badge--outline kt-badge--warning" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="اضافة الى الارشيف">
                        <i class="la la-hdd-o"></i>
                      </a>
                    </div>

                    <div class="col-6 p-0">
                      <button class="delete col-6 kt-badge kt-badge--outline kt-badge--danger" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="حذف">
                        <i class="la la-trash"></i>
                      </button>
                    </div>

                  </div>
                </td>
              </tr>
            </tbody>
          </table>

        </div>
        <!--END: LEADS DATATABLE-->

      </div>  
    </div>

	</div>

	<!-- END:: CONTENT -->
</div>

<!-- START:: INCLUDING FOOTER -->
<?php include('layouts/footer.php') ?>
<!-- END:: INCLUDING FOOTER -->