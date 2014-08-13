class Video < ActiveRecord::Base
  validates :title , :video_url , :description , :presence =>true
  validates :number_of_views, :numericality => {:greater_than_or_equal_to =>0}
  validates :title, :uniqueness => true

end
