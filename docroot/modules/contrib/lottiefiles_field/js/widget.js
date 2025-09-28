jQuery("input[name='bgcolorpicker']").change(function () {
  jQuery(jQuery(this).data("target")).val(jQuery(this).val());
});
