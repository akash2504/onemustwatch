json.array!(@videos) do |video|
  json.extract! video, :id, :title, :video_url, :description, :number_of_views
  json.url video_url(video, format: :json)
end
