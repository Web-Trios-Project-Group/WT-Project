$(function() {
    // Sidebar toggle behavior
    $('#sidebarCollapse').on('click', function() {
      $('#sidebar, #content').toggleClass('active');
      $('.popuptext2').toggleClass('active1');
      $('.popuptext4').toggleClass('active2');
    });
  });

  function poped1() {
    var popup = document.querySelector("#myPopup1");
    popup.classList.toggle("show1");
  }

  function poped2() {
    var popup = document.querySelector("#myPopup2");
    popup.classList.toggle("show2");
  }

  function poped3() {
    var popup = document.querySelector("#myPopup3");
    popup.classList.toggle("show3");
  }

  function poped4() {
    var popup = document.querySelector("#myPopup4");
    popup.classList.toggle("show4");
  }

  function poped5() {
    var popup = document.querySelector("#myPopup5");
    popup.classList.toggle("show5");
  }

