new WOW().init();


jQuery(document).ready(function($) {
    $(".scroll").click(function(event){
        event.preventDefault();

        $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
    });

    var navoffeset=$(".top-nav").offset().top;
    $(window).scroll(function(){
        var scrollpos=$(window).scrollTop();
        if(scrollpos >=navoffeset){
            $(".top-nav").addClass("fixed");
        }else{
            $(".top-nav").removeClass("fixed");
        }
    });

});


(function() {
    [].slice.call(document.querySelectorAll('.menu')).forEach(function(menu) {
        var menuItems = menu.querySelectorAll('.menu-link'),
            setCurrent = function(ev) {
                ev.preventDefault();

                var item = ev.target.parentNode; // li

                // return if already current
                if( classie.has(item, 'menu-item-current') ) {
                    return false;
                }
                // remove current
                classie.remove(menu.querySelector('.menu-item-current'), 'menu-item-current');
                // set current
                classie.add(item, 'menu-item-current');
            };

        [].slice.call(menuItems).forEach(function(el) {
            el.addEventListener('click', setCurrent);
        });
    });
})(window);