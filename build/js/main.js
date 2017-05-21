var winWidth = $(window).width();
var winHeight = $(window).height();

$().ready(function() {
  console.log("width", winWidth, "height", winHeight);
  if(winWidth > 800) {
    $('.homepage').tubular({videoId: 'Zo6XqMB1HNU'}); // where idOfYourVideo is the YouTube ID.
  } else {
    $('body').addClass('mobile');
  }
  // var doBam = setTimeout(function() {
  //   $('.homepage').addClass('bam');
  // },10000)
});

$(window).on("load",function() {

});
