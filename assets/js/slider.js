// init nivo slider
$(window).load(function() {
    $('#slider').nivoSlider({
      boxCols:7,
      boxRows:5,
      pauseTime:6000,
      effect:"fade",
      controlNav:true,
      directionNav:true,
      pauseOnHover:true,
      animSpeed:600,
      prevText:"&lt;",
      nextText:"&gt;",
      slices:15,
      manualAdvance:false
    });
});

$('#quotes').textRotator({
  // is random?
  random : true,
  // fadeIn speed
  fadeIn : 1000,
  // fadeOut speed
  fadeOut : 500,
  // duration
  duration : 5000,
  // debug mode
  debug : false
});
