$(function() {
    // Sidebar toggle behavior
    $('#sidebarCollapse').on('click', function() {
      $('#sidebar, #content').toggleClass('active');
      $('.popuptext2').toggleClass('active1');
      $('.popuptext4').toggleClass('active2');
    });
  });