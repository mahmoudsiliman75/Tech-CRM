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
              <h3 class="kt-portlet__head-title"> اضافة موظف جديد </h3>
            </div>
          </div>

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
                  <label class="col-form-label col-12">المسمى الوظيفي</label>
                  <div class="input-group-prepend col-12">
                    <span class="input-group-text"> <i class="la la-bookmark"></i> </span>
                    <select class="form-control kt-selectpicker" data-size="7" data-live-search="true">
                      <option> اختار المسمى الوظيفي</option>
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

              <div class="form-group col-12 col-md-4">
                <div class="row">
                  <label class="col-form-label col-12">البريد الإلكترونى</label>
                  <div class="input-group-prepend col-12">
                    <span class="input-group-text"> <i class="la la-at"></i> </span>
                    <input type="text" class="form-control" placeholder="البريد الإلكترونى">
                  </div>
                </div>
              </div>

              <div class="form-group col-12 col-md-4">
                <div class="row">
                  <label class="col-form-label col-12"> العنوان</label>
                  <div class="input-group-prepend col-12">
                    <span class="input-group-text"> <i class="la la-map-marker"></i> </span>
                    <input type="text" class="form-control" placeholder=" العنوان">
                  </div>
                </div>
              </div>

              <div class="form-group col-12 col-md-4">
                <div class="row">
                  <label class="col-form-label col-12"> رقم الهاتف</label>
                  <div class="input-group-prepend col-12">
                    <span class="input-group-text"> <i class="la la-mobile"></i> </span>
                    <input type="text" class="form-control" placeholder=" رقم الهاتف">
                  </div>
                </div>
              </div>

              <div class="form-group col-12 col-md-4">
                <div class="row">
                  <label class="col-form-label col-12"> رقم هاتف اضافي</label>
                  <div class="input-group-prepend col-12">
                    <span class="input-group-text"> <i class="la la-mobile"></i> </span>
                    <input type="text" class="form-control" placeholder=" رقم هاتف اضافي">
                  </div>
                </div>
              </div>

              <div class="form-group col-12 col-md-4">
                <div class="row">
                  <label class="col-form-label col-12"> الراتب</label>
                  <div class="input-group-prepend col-12">
                    <span class="input-group-text"> <i class="la la-dollar" style="font-weight: bold;"></i> </span>
                    <input type="text" class="form-control" placeholder=" الراتب">
                  </div>
                </div>
              </div>

              <div class="form-group col-12 col-md-4">
                <div class="input-group">
                  <div class="row">
                    <label class="col-form-label col-12">تاريخ بداية التوظيف</label>
                    <div class="input-group-prepend col-12">
                      <span class="input-group-text"> <i class="la la-calendar"></i> </span>
                      <input type="text" class="form-control" readonly value="05/20/2017" id="kt_datepicker_3" />
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group col-12 col-md-4 px-4">
                <div class="input-group">
                  <div class="row">
                    <label class="col-form-label col-12">اضافة صورة البطاقة الشخصية</label>
                    <div class="input-group-prepend col-12 row">
                      <div class="dropzone dropzone-multi col-12" id="kt_dropzone_4">

                        <div class="dropzone-panel">
                          <a class="dropzone-select btn btn-label-brand btn-bold btn-sm">اضافه ملف</a>
                        </div>

                        <div class="dropzone-items">
                          <div class="dropzone-item" style="display:none">

                            <div class="dropzone-file">
                              <div class="dropzone-filename" title="some_image_file_name.jpg"><span data-dz-name>some_image_file_name.jpg</span> <strong>(<span  data-dz-size>340kb</span>)</strong></div>
                              <div class="dropzone-error" data-dz-errormessage></div>
                            </div>

                            <div class="dropzone-progress">
                              <div class="progress">
                                <div class="progress-bar kt-bg-brand" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" data-dz-uploadprogress></div>
                              </div>
                            </div>

                            <div class="dropzone-toolbar">
                              <span class="dropzone-start"><i class="flaticon2-arrow"></i></span>
                              <span class="dropzone-cancel" data-dz-remove style="display: none;"><i class="flaticon2-cross"></i></span>
                              <span class="dropzone-delete" data-dz-remove><i class="flaticon2-cross"></i></span>
                            </div>

                          </div>
                        </div>

                      </div>
                      <span class="form-text text-muted col-12">الحجم الاقصى للصورة 1MB</span>
                    </div>
                  </div>
                </div>

              </div>

              <div class="form-group col-12 col-md-4 px-4">
                <div class="input-group">
                  <div class="row">
                    <label class="col-form-label col-12">اضافة صورة الشخصية</label>
                    <div class="input-group-prepend col-12 row">
                      <div class="dropzone dropzone-multi col-12" id="kt_dropzone_4">

                        <div class="dropzone-panel">
                          <a class="dropzone-select btn btn-label-brand btn-bold btn-sm">اضافه ملف</a>
                        </div>

                        <div class="dropzone-items">
                          <div class="dropzone-item" style="display:none">

                            <div class="dropzone-file">
                              <div class="dropzone-filename" title="some_image_file_name.jpg"><span data-dz-name>some_image_file_name.jpg</span> <strong>(<span  data-dz-size>340kb</span>)</strong></div>
                              <div class="dropzone-error" data-dz-errormessage></div>
                            </div>

                            <div class="dropzone-progress">
                              <div class="progress">
                                <div class="progress-bar kt-bg-brand" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" data-dz-uploadprogress></div>
                              </div>
                            </div>

                            <div class="dropzone-toolbar">
                              <span class="dropzone-start"><i class="flaticon2-arrow"></i></span>
                              <span class="dropzone-cancel" data-dz-remove style="display: none;"><i class="flaticon2-cross"></i></span>
                              <span class="dropzone-delete" data-dz-remove><i class="flaticon2-cross"></i></span>
                            </div>

                          </div>
                        </div>

                      </div>
                      <span class="form-text text-muted col-12">الحجم الاقصى للصورة 1MB</span>
                    </div>
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

  </div>

	<!-- END:: CONTENT -->
</div>
<!-- START:: INCLUDING FOOTER -->
<?php include('layouts/footer.php') ?>
<!-- END:: INCLUDING FOOTER -->