$(function() {
    // Sidebar toggle behavior
    $('#sidebarCollapse').on('click', function() {
      $('#sidebar, #content').toggleClass('active');
    });
  }); 
document.addEventListener('load',foo);


setInterval(foo,1000);
function foo()
{           timer=document.getElementById('timer');
            var deadline= new Date("may 05,2020  00:00:00").getTime();
            var cur=new Date().getTime();
            var x=deadline - cur;
            
            
            var days=Math.floor(x /(1000*60*60*24));
            var hrs=Math.floor((x%(1000*60*60*24))/(1000*60*60));
            var min=Math.floor((x%(1000*60*60))/(1000*60));
            var sec=Math.floor((x%(1000*60))/1000);
            timer.innerHTML =days +"d  " + hrs +"hrs  " + min+ "m  " + sec+ "s";
}