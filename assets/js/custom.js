$(document).ready( function () {

  // START:: SELECT2 OPTIONS
  $('#permissions_select2_3').select2({
  placeholder: "اختار الصلاحيات",
  });

  $('#services_select2_3').select2({
  placeholder: "اختار الخدمات",
  });

  $('#package_select2_3').select2({
  placeholder: "اختار الباقة",
  });
  // START:: SELECT2 OPTIONS

  // START:: DATATABLES OPTIONS
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

  $('#hrAccounting').DataTable({
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

  $('#attendance').DataTable({
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
  // END:: DATATABLES OPTIONS

  //  START:: SWEET ALERT
  $('.confirm').click(function(e) {
      swal.fire({
        title: 'تأكيد التعاقد',
        type: 'question',
        showCancelButton: true,
        cancelButtonText: 'إلغاء',
        confirmButtonText: 'تأكيد'
      }).then(function(result) {
        if (result.value) {
          swal.fire(
            'تم التأكيد',
            '',
            'success'
          )
        }
      });
  });

  $('.delete').click(function(e) {
    swal.fire({
      title: "تأكيد حذف العميل المحتمل",
      text: "",
      type: "error",
      buttonsStyling: false,
      confirmButtonText: "حذف",
      confirmButtonClass: "btn btn-danger",
      showCancelButton: true,
      cancelButtonText: "إلغاء",
      cancelButtonClass: "btn btn-default"
    }).then(function(result) {
    if (result.value) {
      swal.fire(
        'تم الحذف',
        '',
        'success'
      )
      }
    });
  });

  $('.archive').click(function(e) {
    swal.fire({
      title: "تأكيد أرشفة العميل المحتمل",
      text: "",
      type: "warning",
      buttonsStyling: false,
      confirmButtonText: "أرشفة",
      confirmButtonClass: "btn btn-danger",
      showCancelButton: true,
      cancelButtonText: "إلغاء",
      cancelButtonClass: "btn btn-default"
    }).then(function(result) {
    if (result.value) {
      swal.fire(
        'تمت الأرشفة',
        '',
        'success'
      )
      }
    });
  });

  $('.restore').click(function(e) {
    swal.fire({
      title: "تأكيد إستعادة العميل ",
      text: "",
      type: "question",
      buttonsStyling: false,
      confirmButtonText: "إستعادة",
      confirmButtonClass: "btn btn-success",
      showCancelButton: true,
      cancelButtonText: "إلغاء",
      cancelButtonClass: "btn btn-default"
    }).then(function(result) {
    if (result.value) {
      swal.fire(
        'تمت الإستعادة',
        '',
        'success'
      )
      }
    });
  });

  ClassicEditor
  .create( document.querySelector( '#kt-ckeditor-1' ) )
  .then( editor => {
    console.log( editor );
  } )
  .catch( error => {
    console.error( error );
  } );
});