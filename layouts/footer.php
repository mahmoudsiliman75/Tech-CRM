

					<!-- START:: FOOTER -->
					<div class="kt-footer  kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop" id="kt_footer">
						<div class="kt-container  kt-container--fluid ">
							<div class="kt-footer__copyright">
								Powered By &nbsp; <a href="https://www.technomasr.com/" target="_blank" class="kt-link">TechnoMasr</a> &copy; 2020 
							</div>
						</div>
					</div>
					<!-- END:: FOOTER -->

				</div>
			</div>
		</div>

		<!-- end:: Page -->


		<!-- START::SCROLLTOP -->
		<div id="kt_scrolltop" class="kt-scrolltop">
			<i class="fa fa-arrow-up"></i>
		</div>
		<!-- END::SCROLLTOP -->



		<!-- begin::Global Config(global config for global JS sciprts) -->
		<script>
			var KTAppOptions = {
				"colors": {
					"state": {
						"brand": "#2c77f4",
						"light": "#ffffff",
						"dark": "#282a3c",
						"primary": "#5867dd",
						"success": "#34bfa3",
						"info": "#36a3f7",
						"warning": "#ffb822",
						"danger": "#fd3995"
					},
					"base": {
						"label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
						"shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
					}
				}
			};
		</script>
		<!-- end::Global Config -->

		<!--begin::Global Theme Bundle(used by all pages) -->
		<script src="assets/plugins/global/plugins.bundle.js" type="text/javascript"></script>
		<script src="assets/js/scripts.bundle.js" type="text/javascript"></script>
		<!--end::Global Theme Bundle -->

		<!--begin::Page Vendors(used by this page) -->
		<script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
		<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script>
		<script src="assets/plugins/custom/gmaps/gmaps.js" type="text/javascript"></script>
		<!--end::Page Vendors -->

		<!--START::SELECT2 SCRIPT -->
		<script src="assets/js/pages/crud/forms/widgets/select2.js" type="text/javascript"></script>
		<!--END::SELECT2 SCRIPT -->

		<!-- SRART:: BOOTSTRAP SELECT SCRIPT -->
		<script src="assets/js/pages/crud/forms/widgets/bootstrap-select.js" type="text/javascript"></script>
		<!-- SRART:: BOOTSTRAP SELECT SCRIPT -->

		<!-- START:: HTML DATATABEL SCRIPT -->
		<script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
		<!-- EDD:: HTML DATATABEL SCRIPT -->

		<!--begin::Page Scripts(used by this page) -->
		<script src="assets/js/pages/dashboard.js" type="text/javascript"></script>
		<!--end::Page Scripts -->

		<!-- START:: SIMPLESELECT SCRIPT -->
		<script src="assets/js/scripts.bundle.js" type="text/javascript"></script>
		<!-- END:: SIMPLESELECT SCRIPT -->

		<!-- START:: DATEPICKER SCRIPT -->
		<script src="assets/js/pages/crud/forms/widgets/bootstrap-datepicker.js" type="text/javascript"></script>
		<!-- START:: DATEPICKER SCRIPT -->

		<!-- START:: UPLOADFILES SCRIPT -->
		<script src="assets/plugins/custom/uppy/uppy.bundle.js" type="text/javascript"></script>
		<script src="assets/js/pages/crud/file-upload/uppy.js" type="text/javascript"></script>
		<script src="assets/js/pages/crud/file-upload/dropzonejs.js" type="text/javascript"></script>
		<!-- END:: UPLOADFILES SCRIPT -->

		<script>
			$(document).ready( function () {

				$('#permissions_select2_3').select2({
				placeholder: "اختار الصلاحيات",
				});

				$('#package_select2_3').select2({
				placeholder: "اختار الباقة",
				});

				$('#newUserTable').DataTable({
					"oLanguage": {
						"sSearch": "",
					},
					language: {
						searchPlaceholder: "إبحث هنا",
						'paginate': {
							'previous': 'السابق',
							'next': 'التالى'
						},
						"lengthMenu": "عرض _MENU_ فى الصفحة",
						"info": "عرض  _PAGE_ من _PAGES_ صفحات",
					},
				});

				$('#usersArchive').DataTable({
					"oLanguage": {
						"sSearch": "",
					},
					language: {
						searchPlaceholder: "إبحث هنا",
						'paginate': {
							'previous': 'السابق',
							'next': 'التالى'
						},
						"lengthMenu": "عرض _MENU_ فى الصفحة",
						"info": "عرض  _PAGE_ من _PAGES_ صفحات",
					},
				});

				$('#mainServices').DataTable({
					"oLanguage": {
						"sSearch": "",
					},
					language: {
						searchPlaceholder: "إبحث هنا",
						'paginate': {
							'previous': 'السابق',
							'next': 'التالى'
						},
						"lengthMenu": "عرض _MENU_ فى الصفحة",
						"info": "عرض  _PAGE_ من _PAGES_ صفحات",
					},
				});

				$('#packages').DataTable({
					"oLanguage": {
						"sSearch": "",
					},
					language: {
						searchPlaceholder: "إبحث هنا",
						'paginate': {
							'previous': 'السابق',
							'next': 'التالى'
						},
						"lengthMenu": "عرض _MENU_ فى الصفحة",
						"info": "عرض  _PAGE_ من _PAGES_ صفحات",
					},

				});

				$('#contracts').DataTable({
					"oLanguage": {
						"sSearch": "",
					},
					language: {
						searchPlaceholder: "إبحث هنا",
						'paginate': {
							'previous': 'السابق',
							'next': 'التالى'
						},
						"lengthMenu": "عرض _MENU_ فى الصفحة",
						"info": "عرض  _PAGE_ من _PAGES_ صفحات",
					},
				});

			});
		</script>
	</body>

	<!-- end::Body -->
</html>