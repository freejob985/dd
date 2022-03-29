$('.carousel').carousel({
    interval: 4000,
    keyboard: true
  });

  $("textarea").each(function(){
    CKEDITOR.inline( this );
});