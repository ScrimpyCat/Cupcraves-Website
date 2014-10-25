Object.defineProperty(Item.prototype, "totalCost", {
    get: function(){
        return this.price * this.amount;
    }
});

function Item(name, amount, price, instructions){
    this.name = name;
    this.amount = amount;
    this.price = price;
    this.instructions = instructions;
}

Order = {
    cart: {},
    add: function(item){
        if (item.amount == 0) delete this.cart[item.name];
        else this.cart[item.name] = item;

        if (this.empty()) $("#cart").css("display", "none");
        else
        {
            $("#cart").text("Checkout: $" + this.total());
            $("#cart").css("display", "inline-block");
        }
    },
    empty: function(){
        return Object.keys(this.cart).length == 0;
    },
    total: function(){
        var cost = 0;
        var cart = this.cart;
        Object.keys(cart).forEach(function(item){
            cost += cart[item].totalCost;
        });

        return cost;
    }
};

$(window).bind('page:change', function(){
    $(".menu-item-description input[name='amount']").change(function(){
        if ($(this).val() >= 50)
        {
            $(this).parent().children(".excess-order").show();
        }

        else
        {
            $(this).parent().children(".excess-order").hide();
        }


        var type = $(this).parent().parent().children(".menu-item").text().split("$");
        Order.add(new Item(type[0].trim(), $(this).val(), type[1], $(this).parent().children("textarea[name='instructions']").val()));
    });

    $(".menu-item-description textarea").change(function(){
        var type = $(this).parent().parent().children(".menu-item").text().split("$");
        Order.add(new Item(type[0].trim(), $(this).parent().children("input[name='amount']").val(), type[1], $(this).val()));
    });

    $("#cart").click(function(){
        //submit to server and go to checkout page
    });
});
