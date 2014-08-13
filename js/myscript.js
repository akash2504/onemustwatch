
$(document).ready(function(){
    $('.images').height($(window).height());
    $('.images').width($(window).width()+15);

    $('#about').height($(window).height());
    $('#about').width($(window).width()+15);


    $('#photo-gallery').height($(window).height());
    $('#photo-gallery').width($(window).width()+15);

});


$(document).scroll(function(){
if($(this).scrollTop() > 10){
    $('.nav.navbar-nav.nav-collapse.font').css('position','fixed');
    $('.nav.navbar-nav.nav-collapse.font').css('top','0');
    $('.nav.navbar-nav.nav-collapse.font').css('width','100%');
}else{
    jQuery('.nav.navbar-nav.nav-collapse.font').css('position','absolute');
}
});


$( '.link' ).on('click', function(event) {
    event.preventDefault();
    var target = "#" + $(this).data('target');
    $('html, body').animate({
        scrollTop: $(target).offset().top
    }, 2000);
});



var urlArray=['img/1.jpg','img/2.jpg','img/3.jpg','img/4.jpg','img/5.jpg'];

var linkCons = "img/";
 var i = 2;
 setInterval(function() {
    $('.images').attr('src', linkCons  + ((i == 6) ? i = 1 : (i++)) +".jpg");    
 }, 4000);


