jQuery(document).ready(function($){
  $('#wpbody #authors li').each(function(){
    var author_label = $(this).find('strong').text();
    var author_extra = author_label.match(/\([^\)]*\)/);
    var author = $.trim(author_label.replace(author_extra, ''));
    $(this).find('option').each(function(){
      if ($(this).text() == author) {
        $(this).attr('selected', 'selected');
      }
    });
  });
});
