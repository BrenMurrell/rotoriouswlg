$().ready(function() {
  $('.homepage').tubular({videoId: 'Zo6XqMB1HNU'}); // where idOfYourVideo is the YouTube ID.
  var doBam = setTimeout(function() {
    $('.homepage').addClass('bam');
  },10000)
});

$(window).on("load",function() {

});
