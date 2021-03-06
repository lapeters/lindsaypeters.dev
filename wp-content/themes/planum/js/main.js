jQuery(function(e) {
    var n = e(".navigation-main").clone().removeClass("navigation-main").addClass("navigation-main-mobile").attr("id", "site-navigation-mobile").append('<h1 class="menu-toggle"></h1>');
    e(".site-header").append(n), e(".menu-toggle").on("click", function() {
        e(this).toggleClass("toggled-on"), e(".navigation-main-mobile .menu").slideToggle()
    }), e(".toggle-top").on("click", function(n) {
        e(this).toggleClass("top-display"), e(".top-wrapper").slideToggle(), n.preventDefault()
    }), e(".toggle-comments").on("click", function(n) {
        e(this).toggleClass("comments-display"), e(".comments-wrapper").slideToggle(), n.preventDefault()
    }), e(".flexslider").flexslider({
        animation: "slide",
        controlNav: !1,
        pauseOnHover: !0
    }), e("#content").fitVids()
});