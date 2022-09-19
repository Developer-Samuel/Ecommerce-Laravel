function showLanguages() 
{
    $(".dropdown-language").toggleClass("show");
}
  
window.onclick = function(event) 
{
    if (!event.target.matches('.lang-dropdown-btn')) 
    {
        var dropdowns = $(".dropdown-language");
        for (let i = 0; i < dropdowns.length; i++) 
        {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) 
            {
                openDropdown.classList.remove('show');
            }
        }
    }
}