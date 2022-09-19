$(function(e) 
{
    var $open = $('.js-searchOpen');
    var $close = $('.js-searchClose');
    var $lay = $('.search-overlay');
    var $input = $('.search-form > .search');
  
    $open.on('click', function(e) 
    {
        e.preventDefault(); 
        $lay.addClass('-show'); 
        $input.focus();
    });

    // .js-searchClose
    $close.on('click', function(e) 
    {
        e.preventDefault();
        $lay.removeClass('-show');
    });
});