$(function() 
{
    $('.dropdown-button').click(function() 
    { 
        $(this).next('.dropdown-cart').slideToggle();
    });
    
    $(document).click(function(e) 
    { 
        var target = e.target; 
        if (!$(target).is('.dropdown-button') && !$(target).parents().is('.dropdown-button')) 
        { 
            $('.dropdown-cart').slideUp(); 
        }
    });
});