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
              <h3 class="kt-portlet__head-title"> جدول إدارة الموظفين </h3>
            </div>
          </div>
        <div>
        <!--START::PORTEL-->

        <!--START: NEW USER DATATABLE-->
        <div class="kt-portlet__body kt-portlet__body--fit">

          <table class="table table-responsive-sm" id="newUserTable">
            <thead class="thead-dark">
              <tr>
                <th>#</th>
                <th> الاسم </th>
                <th>المسمي الوظيفي</th>
                <th>البريد الإلكتروني</th>
                <th>العنوان</th>
                <th>رقم الهاتف</th>
                <th>الراتب</th>
                <th>تاريخ بداية التوظيف</th>
                <th class="action">إجراء</th>
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
                <td>Orange</td>
                <td>Orange</td>
                <td align="right">
                  <a href="#" class="kt-badge kt-badge--outline kt-badge--primary" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="تعديل">
                    <i class="la la-edit"></i>
                  </a>
                  <a href="#" class="kt-badge kt-badge--outline kt-badge--warning" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="اضافة الى الارشيف">
                    <i class="la la-hdd-o"></i>
                  </a>
                  <a href="#" class="kt-badge kt-badge--outline kt-badge--danger" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="حذف">
                    <i class="la la-trash"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>GMC</td>
                <td>Jimmy</td>
                <td>Goldenrod</td>
                <td>Goldenrod</td>
                <td>Goldenrod</td>
                <td>Goldenrod</td>
                <td>Goldenrod</td>
                <td align="right">
                  <a href="#" class="kt-badge kt-badge--outline kt-badge--primary" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="تعديل">
                    <i class="la la-edit"></i>
                  </a>
                  <a href="#" class="kt-badge kt-badge--outline kt-badge--warning" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="اضافة الى الارشيف">
                    <i class="la la-hdd-o"></i>
                  </a>
                  <a href="#" class="kt-badge kt-badge--outline kt-badge--danger" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="حذف">
                    <i class="la la-trash"></i>
                  </a>
                </td>
              </tr>
            </tbody>
          </table>

        </div>
        <!--END: NEW USER DATATABLE-->

      </div>  
    </div>

	</div>
	<!-- END:: CONTENT -->
</div>

<!-- START:: INCLUDING FOOTER -->
<?php include('layouts/footer.php') ?>
<!-- END:: INCLUDING FOOTER -->