$("#mobileMenu").click(function(){
    var $mobileBar = $(".mobileLeftBar");
    if($mobileBar.hasClass("active"))
        $(".mobileLeftBar").removeClass("active");
    else
        $(".mobileLeftBar").addClass("active");
});

