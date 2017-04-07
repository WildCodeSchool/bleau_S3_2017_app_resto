
 

$(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  })

//-----Parallax
$(document).ready(function(){
  $('.parallax').parallax();
});

//-----Show form coms
$(document).ready(function() {
    $('.show-form_com1').on('click', function() {
        $('.form_com1').slideToggle(500);
    })
})

$(document).ready(function() {
    $('select').material_select();
});


$(".button-collapse").sideNav();
