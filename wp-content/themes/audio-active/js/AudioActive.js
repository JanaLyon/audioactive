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


    $( document ).ready(function() {
        //console.log( "ready!" );
        $('.drawer-menu > .drawer-dropdown').unbind();
        //$('.drawer-menu > .drawer-dropdown').off("shown");
    });

    $('.drawer-menu > .drawer-dropdown > a').on("touchstart click", drawerState);

    $( window ).resize(function () {
        if($('.drawer-dropdown > .drawer-menu-item').hasClass("active-drawer")){
            $('.drawer-dropdown > .drawer-menu-item').toggleClass("active-drawer");
        }
        TweenMax.set('.arrow-gap > .fa-chevron-down', {rotation: 0});
        TweenMax.set('.drawer-dropdown-menu', {overflow: "hidden", height: 0});
        TweenMax.set('.drawer-dropdown > .drawer-dropdown-menu > .item > .drawer-menu-item', {marginLeft: "100%"});
        $('.drawer-nav').drawer('refresh');
    //    document.activeElement.blur();
        isSubMenuActivated = false;
    });
    function drawerState(e){
        e.stopPropagation(); e.preventDefault();
        if(!isSubMenuActivated){
            $('.drawer-dropdown > .drawer-menu-item').toggleClass("active-drawer");
            if(window.innerWidth > 480) {
                TweenMax.to('.drawer-dropdown-menu', 0.5, {height: 150});
            } else {
                TweenMax.to('.drawer-dropdown-menu', 0.5, {height: 120});
            }
            TweenMax.to('.arrow-gap > .fa-chevron-down', 0.5, {rotation: 180, onComplete: function () {
                $('.drawer-nav').drawer('refresh');
        //        document.activeElement.blur();

            }});
            TweenMax.staggerTo('.drawer-dropdown > .drawer-dropdown-menu > .item > .drawer-menu-item', 0.5,
                {
                    marginLeft: "0",
                    ease: Power3.easeOut}, 0.1);
            isSubMenuActivated = true;
        } else {
            TweenMax.set('.drawer-dropdown-menu', {display: "block"});
            TweenMax.to('.drawer-dropdown-menu', 0.5, {overflow: "hidden", height: 0, onComplete: function () {
                $('.drawer-dropdown > .drawer-menu-item').toggleClass("active-drawer");
                $('.drawer-nav').drawer('refresh');
            //    document.activeElement.blur();
            }});
            TweenMax.to('.arrow-gap > .fa-chevron-down', 0.5, {rotation: 0});
            TweenMax.staggerTo('.drawer-dropdown > .drawer-dropdown-menu > .item > .drawer-menu-item', 0.5,
                {
                    marginLeft: "100%",
                    ease: Power3.easeOut}, -0.1);
            isSubMenuActivated = false;
        }
    }
})();