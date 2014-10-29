Rails.application.routes.draw do
    devise_for :admins
    root :to => 'page#home'
    mount RailsAdmin::Engine => '/admin', as: 'rails_admin'

    scope :controller => :page do
        get '/', :to => :home, :as => 'home'
        get '/about', :to => :about, :as => 'about'
        get '/order', :to => :order, :as => 'order'
        get '/contact', :to => :contact, :as => 'contact'
    end
end
