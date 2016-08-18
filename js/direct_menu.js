$( document ).ready(function() {
  if(OCA.Theming && !OCA.Theming.inverted) {
    $('#apps svg').each(function(idx) { 
      var src = $(this).find("image").attr("xlink:href");
      $(this).parent().prepend("<img src=\""+src+"\" class=\"app-icon svg\"/>");
      $(this).remove();
    });
  }
});
