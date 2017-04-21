
 

$(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });

//-----Parallax
$(document).ready(function(){
  $('.parallax').parallax();
});

//-----Show form coms
$(document).ready(function() {
    $('.show-form_com1').on('click', function() {
        $('.form_com1').slideToggle(500);
    })
});

//-----Initialize datatable
$(document).ready(function(){
    $('#tab').DataTable({
        "lengthMenu": [[50, 100, -1], [50, 100, "All"]]
    });
});

$(document).ready(function() {
    $('select').material_select();
});


$(".button-collapse").sideNav();
