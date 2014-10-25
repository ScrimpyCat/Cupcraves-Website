class Item < ActiveRecord::Base
    validates :name, :presence => true, :length => { :maximum => 50 }, :uniqueness => { :case_sensitive => false }
    validates :description, :length => { :maximum => 300 }
    validates :description, :length => { :maximum => 80 }
end