class PageController < ApplicationController
    def home
        @items = Item.all
    end

    def about
    end

    def order
        @items = Item.all
    end

    def contact
    end
end
