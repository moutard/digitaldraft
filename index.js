var heightGreyStripe = 40;
  
var start = function(){
  //$(".project .rectangle").css("bottom", "-"+$(this).height()+"px");
  
};

$(".project").hover(
    function(){$(this).children(".rectangle").css("bottom", "0px");},
    function(){ var height = $(this).height() - heightGreyStripe; 
                $(this).children(".rectangle").css("bottom", "-"+height+"px");
              }
)
