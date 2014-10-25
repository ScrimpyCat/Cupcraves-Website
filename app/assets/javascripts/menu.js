Menu = {
    expand: function(item){
        Menu.shrink();

        if (item.is(Menu.current_item)) Menu.current_item = null;
        else
        {
            Menu.current_item = item;
            item.parent().children(".menu-item-description").show();
        }
    },
    shrink: function(){
        if ((Menu.current_item != undefined) || (Menu.current_item != null)) Menu.current_item.parent().children(".menu-item-description").hide();
    }
};

$(window).bind('page:change', function(){
    $(".menu-item").click(function(){
        Menu.expand($(this));
    });

    if (window.location.hash)
    {
        Menu.expand($(window.location.hash + " .menu-item"));
    }
});
