$(document).on('submit', '.filter-form', function(e){
    e.preventDefault();
    var formData = $(this).serialize();
    alert(formData);
});