$(document).ready(function() 
{
    // Show or hide the sticky footer button
    $(window).scroll(function() 
    {
        if ($(this).scrollTop() > 100) 
        {
            $('.go-top').fadeIn(300);
        } 
        else {

            $('.go-top').fadeOut(300);
        }
    });
  
    // Animate the scroll to top
    $('.go-top').click(function(event) 
    {
        event.preventDefault();
        $('html, body').animate({scrollTop: 0}, 600);
    })
});