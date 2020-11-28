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
              <h3 class="kt-portlet__head-title"> قائمة ارشيف المستخدمين </h3>
            </div>
          </div>
        <div>
        <!--START::PORTEL-->

        <!--START: ARCHIVE USERS DATATABLE-->
        <div class="kt-portlet__body kt-portlet__body--fit">

          <table class="table table-responsive-sm" id="usersArchive" width="100%">
            <thead class="thead-dark">
              <tr>
                <th>#</th>
                <th> الاسم </th>
                <th>البريد الالكترونى</th>
                <th>الوظيفة</th>
                <th class="action">إجراء</th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Land Rover</td>
                <td>Range Rover</td>
                <td>Orange</td>

                <td align="right">
                  <a href="#" class="kt-badge kt-badge--outline kt-badge--success" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="إسترجاع">
                    <i class="la la-rotate-left"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>GMC</td>
                <td>Jimmy</td>
                <td>Goldenrod</td>
                <td align="right">
                  <a href="#" class="kt-badge kt-badge--outline kt-badge--success" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="إسترجاع">
                    <i class="la la-rotate-left"></i>
                  </a>
                </td>
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