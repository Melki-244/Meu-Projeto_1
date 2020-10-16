$(function(){
    $('nav.mobile').click(function(){
        var listamenu = $('nav.mobile ul');
        if(listamenu.is(':hidden') ==true){
            var icone = $('.botao-menu-mobile i');
            icone.removeClass('fas fa-align-justify');
            icone.addClass('fas fa-times')
            listamenu.slideToggle();}
        else{
            var icone = $('.botao-menu-mobile i');
            icone.removeClass('fas fa-times');
            icone.addClass('fas fa-align-justify');
            listamenu.slideToggle();
        }
    })
    
})
