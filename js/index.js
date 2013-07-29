(function() {
  'use strict';
  /**
   * Open the text block when you hover the image.
   */
  var heightGreyStripe = 40;
  $(".project").hover(
    function(){$(this).children(".rectangle").css("bottom", "0px");},
    function(){ var height = $(this).height() - heightGreyStripe;
                $(this).children(".rectangle").css("bottom", "-"+height+"px");
              }
  );
})();
