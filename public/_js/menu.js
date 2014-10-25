Menu = {
    expand: function(a){
        Menu.shrink();
        if (Menu.current_item == a) Menu.current_item = null;
        else
        {
            Menu.current_item = a;
            $(a).parent().children(".menu-item-description").show();
        }
    },
    shrink: function(){
        if ((Menu.current_item != undefined) || (Menu.current_item != null)) $(Menu.current_item).parent().children(".menu-item-description").hide();
    }
};

$(window).ready(function(){
    $(".menu-item").click(function(){
        Menu.expand(this);
    });

    if (window.location.hash)
    {
        Menu.expand(window.location.hash + " .menu-item");
    }
});
