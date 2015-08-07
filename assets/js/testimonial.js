(function($) {

  $(document).ready(function() {
    $('.list-cell-name-is_allowed').each(function() {
      // If the text equals 0 then it hasn't been approved
      if($(this).text() == 0) {
        // Remove old style
        $('table.table.data tbody td').css('background-color', 'transparent');
        // Add new style
        $(this).parent().addClass('bg-danger');
      } else {
        // Remove old style
        $('table.table.data tbody').css('background-color', 'transparent');
        // Add new style
        $(this).parent().addClass('bg-success');
      }
    });
  });

})(jQuery);