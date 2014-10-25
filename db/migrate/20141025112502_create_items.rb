class CreateItems < ActiveRecord::Migration
    def change
        create_table :items do |t|
            t.string :name, :limit => 50, :null => false
            t.integer :price
            t.string :description, :limit => 300
            t.string :image, :limit => 80

            t.timestamps
        end

        add_index :items, :name, unique: true
    end
end
