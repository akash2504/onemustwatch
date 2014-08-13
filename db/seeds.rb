Video.delete_all

Video.create(:title => 'Hello world',
:description =>
%{<p>
    This is my first programming project
  </p>},
:video_url => '/images/helloworld.jpg',
:number_of_views => 0.0
)
