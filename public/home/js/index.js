$(document).ready(function() {
  for (var i=0;i<=60;i++) {
  (function(ind) {
      setTimeout(function(){
        if ($('#canvas').hasClass("Fibrous")) {
          $('#canvas').removeClass("Fibrous");
          $('#canvas').addClass("Hairball");
          configure(PRESETS['Hairball']);
        } else {
          $('#canvas').removeClass("Hairball");
          $('#canvas').addClass("Fibrous");
          configure(PRESETS['Fibrous']);
        }
        Recursion.init();
        console.log(ind);
      }, (30000 * ind));
  })(i);
  }
});
