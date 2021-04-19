  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems);
  });
  // time picker
   document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.timepicker');
    var instances = M.Timepicker.init(elems);
  });

    function show(e){
    	e.removeAttribute('style');
    }
    function hide(e){
    	e.style.display = "none";
    }
  /* document.querySelector('.linha').addEventListener('click',function(){
   	 document.querySelector('.linha').style.backgroundColor = "blue";
   });*/