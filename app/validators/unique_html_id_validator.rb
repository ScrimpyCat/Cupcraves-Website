class UniqueHtmlIdValidator < ActiveModel::EachValidator
    def validate_each(record, attribute, value)
        record.errors.add attribute, "can't have the same HTML id representation" if record.class.where("replace(replace(lower(#{attribute}), ' ', '-'), '&', '-') = :value", {
            :value => value.to_s.gsub(/[ &]/, '-').downcase
        }).where.not(:id => record.id).first
    end
end