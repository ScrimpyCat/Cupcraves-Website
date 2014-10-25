require 'rails_helper'

RSpec.describe Item, :type => :model do
    before { @item = FactoryGirl.build(:item) }
    subject { @item }

    it { is_expected.to respond_to(:name) }
    it { is_expected.to respond_to(:price) }
    it { is_expected.to respond_to(:description) }
    it { is_expected.to respond_to(:image) }

    it { is_expected.to be_valid }

    describe 'name' do
        context 'is nil' do
            before { @item.name = nil }
            it { is_expected.to_not be_valid }
        end

        context 'is empty' do
            before { @item.name = '' }
            it { is_expected.to_not be_valid }
        end

        context 'is too long' do
            before { @item.name = 'a'*51 }
            it { is_expected.to_not be_valid }
        end

        context 'is already taken' do
            before {
                item_with_same_name = @item.dup
                item_with_same_name.name = item_with_same_name.name.upcase
                item_with_same_name.save
            }

            it { is_expected.to_not be_valid }
        end

        context 'id form is already taken' do
            before {
                item_with_same_name_id = @item.dup
                @item.name = 'a & b'
                item_with_same_name_id.name = 'a---b'
                item_with_same_name_id.save
            }

            it { is_expected.to_not be_valid }
        end
    end

    describe 'description' do
        context 'is nil' do
            before { @item.description = nil }
            it { is_expected.to be_valid }
        end

        context 'is empty' do
            before { @item.description = '' }
            it { is_expected.to be_valid }
        end

        context 'is too long' do
            before { @item.description = 'a'*301 }
            it { is_expected.to_not be_valid }
        end

        context 'is already taken' do
            before {
                item_with_same_description = @item.dup
                item_with_same_description.name << 'a'
                item_with_same_description.description = item_with_same_description.description.upcase
                item_with_same_description.save
            }

            it { is_expected.to be_valid }
        end
    end

    describe 'image' do
        context 'is nil' do
            before { @item.description = nil }
            it { is_expected.to be_valid }
        end

        context 'is empty' do
            before { @item.description = '' }
            it { is_expected.to be_valid }
        end

        context 'is too long' do
            before { @item.description = 'a'*81 }
            it { is_expected.to_not be_valid }
        end

        context 'is already taken' do
            before {
                item_with_same_description = @item.dup
                item_with_same_description.name << 'a'
                item_with_same_description.description = item_with_same_description.description.upcase
                item_with_same_description.save
            }

            it { is_expected.to be_valid }
        end
    end
end
