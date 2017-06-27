jQuery(function($) {

    $('.jsColorBoxGroup').colorbox({
        onOpen:function() {
            $("body").css("overflow", "hidden");
        },
        onClosed:function() { $("body").css("overflow", "auto");
        },
        scrolling:false,
        fixed:true,
        rel:'jsColorBoxGroup',
        transition:"none",
        width:"60%",
        height:"96%"
    });

});