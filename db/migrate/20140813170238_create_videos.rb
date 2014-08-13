class CreateVideos < ActiveRecord::Migration
  def change
    create_table :videos do |t|
      t.string :title
      t.string :video_url
      t.text :description
      t.decimal :number_of_views

      t.timestamps
    end
  end
end
