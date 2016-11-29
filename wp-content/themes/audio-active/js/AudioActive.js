/**
 * Created by elainas on 28/11/2016.
 */
(function () {
    var isMenuActivated = false;
    TweenMax.set('.drawer-dropdown-menu', {overflow: "hidden", height: 0});
    TweenMax.set('.drawer-dropdown > .drawer-dropdown-menu > .item > .drawer-menu-item', {marginLeft: "100%"});
    $('.drawer-menu > .drawer-dropdown').off("hidden");
    $('.drawer-menu > .drawer-dropdown').off("shown");

    $('.drawer-menu > .drawer-dropdown').click(function () {
        if(!isMenuActivated){
            TweenMax.to('.drawer-dropdown-menu', 0.5, {height: 150});
            TweenMax.staggerTo('.drawer-dropdown > .drawer-dropdown-menu > .item > .drawer-menu-item', 0.5,
                {
                    marginLeft: "0",
                    ease: Power3.easeOut}, 0.1);
            isMenuActivated = true;
        } else {
            TweenMax.set('.drawer-dropdown-menu', {display: "block"});
            TweenMax.to('.drawer-dropdown-menu', 0.5, {height: 0});
            TweenMax.staggerTo('.drawer-dropdown > .drawer-dropdown-menu > .item > .drawer-menu-item', 0.5,
                {
                    marginLeft: "100%",
                    ease: Power3.easeOut}, -0.1);
            isMenuActivated = false;
        }
    });

    console.log( $('.drawer-dropdown > .drawer-dropdown-menu > .item > .drawer-menu-item') );

})();