/**
 * Created by elainas on 28/11/2016.
 */
(function () {

    //get the drawer function
    $('.drawer-nav').drawer();

    //menu button animations
    var isMenuActivated = false;
    $('.drawer-toggle.drawer-hamburger').click(function () {
        $('.drawer-toggle.drawer-hamburger').toggleClass("active-burger");
    });



    //submenu animation
    var isSubMenuActivated = false;
    TweenMax.set('.drawer-dropdown-menu', {overflow: "hidden", height: 0});
    TweenMax.set('.drawer-dropdown > .drawer-dropdown-menu > .item > .drawer-menu-item', {marginLeft: "100%"});
    $('.drawer-menu > .drawer-dropdown').off("hidden");
    $('.drawer-menu > .drawer-dropdown').off("shown");

    $('.drawer-menu > .drawer-dropdown').click(function () {
        if(!isSubMenuActivated){
            $('.drawer-dropdown > .drawer-menu-item').toggleClass("active-drawer");
            if(window.innerWidth > 480) {
                TweenMax.to('.drawer-dropdown-menu', 0.5, {height: 150});
            } else {
                TweenMax.to('.drawer-dropdown-menu', 0.5, {height: 120});
            }
            TweenMax.to('.arrow-gap > .fa-chevron-down', 0.5, {rotation: 180, onComplete: function () {
                $('.drawer-nav').drawer('refresh');
            }});
            TweenMax.staggerTo('.drawer-dropdown > .drawer-dropdown-menu > .item > .drawer-menu-item', 0.5,
                {
                    marginLeft: "0",
                    ease: Power3.easeOut}, 0.1);
            isSubMenuActivated = true;
        } else {
            $('.drawer-dropdown > .drawer-menu-item').toggleClass("active-drawer");
            TweenMax.set('.drawer-dropdown-menu', {display: "block"});
            TweenMax.to('.drawer-dropdown-menu', 0.5, {overflow: "hidden", height: 0, onComplete: function () {
                $('.drawer-nav').drawer('refresh');
            }});
            TweenMax.to('.arrow-gap > .fa-chevron-down', 0.5, {rotation: 0});
            TweenMax.staggerTo('.drawer-dropdown > .drawer-dropdown-menu > .item > .drawer-menu-item', 0.5,
                {
                    marginLeft: "100%",
                    ease: Power3.easeOut}, -0.1);
            isSubMenuActivated = false;
        }
    });
    $( window ).resize(function () {
        if($('.drawer-dropdown > .drawer-menu-item').hasClass("active-drawer")){
            $('.drawer-dropdown > .drawer-menu-item').toggleClass("active-drawer");
        }
        TweenMax.set('.arrow-gap > .fa-chevron-down', {rotation: 0});
        TweenMax.set('.drawer-dropdown-menu', {overflow: "hidden", height: 0});
        TweenMax.set('.drawer-dropdown > .drawer-dropdown-menu > .item > .drawer-menu-item', {marginLeft: "100%"});
        $('.drawer-nav').drawer('refresh');
        isSubMenuActivated = false;
    });
})();