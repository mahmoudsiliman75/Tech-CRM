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
            <div class="kt-portlet__head-label title-container d-flex justify-content-between w-100">
              <h3 class="kt-portlet__head-title">  التعاقدات  </h3>
            </div>
          </div>
        <div>
        <!--END::PORTEL-->

        <!--START: PACKAGES DATATABLE-->
        <div class="kt-portlet__body kt-portlet__body--fit">

          <table class="table table-responsive-sm" id="contracts" width="100%">
            <thead class="thead-dark">
              <tr>
                <th>#</th>
                <th>  المشروع </th>
                <th>  العميل </th>
                <th class="action">إجراء</th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td> CRM </td>
                <td> TechnoMasr </td>

                <td align="right">

                  <a href="#" class="kt-badge kt-badge--outline kt-badge--primary" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="" data-original-title="تعديل">
                    <i class="la la-edit"></i>
                  </a>

                  <a href="#" class="delete kt-badge kt-badge--outline kt-badge--danger" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="" data-original-title="حذف">
                    <i class="la la-trash"></i>
                  </a>

                </td>
              </tr>

            </tbody>
          </table>

        </div>
        <!--END: PACKAGES DATATABLE-->

      </div>  
    </div>

	</div>
  <!-- END:: CONTENT -->

</div>

<!-- START:: INCLUDING FOOTER -->
<?php include('layouts/footer.php') ?>
<!-- END:: INCLUDING FOOTER -->