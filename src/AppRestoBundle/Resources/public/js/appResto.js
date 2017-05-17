$(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
    $(".button-collapse").sideNav();
    $('.parallax').parallax();
    $('select').material_select();
    $('.show-form_com1').on('click', function() {
        $('.form_com1').slideToggle(500);
    })
});

