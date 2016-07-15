var setNavigationListener = function() {
    $("div.navItem").on("mouseenter",
        function() {
            $(this).addClass("navItemHover");
        }
    ).on("mouseleave",
        function() {
            $(this).removeClass("navItemHover");
        }
    ).on("click",
        function() {
            window.location = $(this).attr("attrLink");
        }
    );
};

$( document ).ready(function() {
    setNavigationListener();
});