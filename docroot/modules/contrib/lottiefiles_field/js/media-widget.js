jQuery(document).on('change', "input[name='mediabgcolorpicker']", function(e) {
  jQuery(jQuery(this).data("target")).val(jQuery(this).val());
});
