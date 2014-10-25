ruby '2.1.2'
source 'https://rubygems.org'

gem 'nokogiri', '1.6.2.1'

# Bundle edge Rails instead: gem 'rails', github: 'rails/rails'
gem 'rails', '4.1.6'

# Use jquery as the JavaScript library
gem 'jquery-rails'
# Turbolinks makes following links in your web application faster. Read more: https://github.com/rails/turbolinks
gem 'turbolinks'

group :doc do
    # bundle exec rake doc:rails generates the API under doc/api.
    gem 'sdoc', '~> 0.4.0', :require => false
end

group :test, :development do
    gem 'rspec-rails', '~> 3.0.0'
    gem 'spork'
end

group :test do
    gem 'capybara'
    gem 'factory_girl_rails'
    gem 'database_cleaner'
end

group :development do
    gem 'better_errors'
    gem 'binding_of_caller'
    gem 'sqlite3'
end

group :production do
    gem 'pg'
    gem 'rails_12factor'
    gem 'uglifier', '>= 1.3.0'
end