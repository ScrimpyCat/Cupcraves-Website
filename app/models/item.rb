class Item < ActiveRecord::Base
    validates :name, :presence => true, :length => { :maximum => 50 }, :uniqueness => { :case_sensitive => false }, :unique_html_id => true
    validates :description, :length => { :maximum => 300 }
    validates :price, :allow_nil => true, :numericality => { :only_integer => true, :greater_than_or_equal_to => 0 }
    validates :image, :length => { :maximum => 80 }
end
