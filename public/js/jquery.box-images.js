
!function($){
  
  var defaults = {

  };  
  
  
  $.fn.shuffleImages = function(options){
    return this.each(function(){
      var settings = $.extend({}, defaults, options),
          el = $(this),
          prevLoc = 0,
          triggerTarget = settings.triggerTarget;
      
      el.addClass("si-container").find(settings.target).css({
        maxWidth: "100%"
      }).not(":first-child").hide()
      el.find("> img:first-child").addClass("active")
    });
    
  }
  

}(window.jQuery);