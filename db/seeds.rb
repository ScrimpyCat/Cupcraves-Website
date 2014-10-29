# This file should contain all the record creation needed to seed the database with its default values.
# The data can then be loaded with the rake db:seed (or created alongside the db with db:setup).
#
# Examples:
#
#   cities = City.create([{ name: 'Chicago' }, { name: 'Copenhagen' }])
#   Mayor.create(name: 'Emanuel', city: cities.first)

if Rails.env.development?
    Item.create!([{
        :name => 'Vanilla',
        :price => 250,
        :image => 'vanilla-cupcakes-frosting.jpg',
        :description => 'Classic vanilla cupcake with a beautiful vanilla buttercream icing.'
    }, {
        :name => 'Chocolate',
        :price => 100,
        :image => 'graduation.JPG',
        :description => 'Blah blah blah blah blah.'
    }, {
        :name => 'Cookies & Cream',
        :price => 100,
        :image => 'Cookies-and-Cream-Cupcakes.jpg',
        :description => 'Blah blah blah blah blah.'
    }, {
        :name => 'Plain',
    }])
end
