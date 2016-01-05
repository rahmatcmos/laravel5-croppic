<?php
// import the Intervention Image Manager Class
use Intervention\Image\ImageManager;

Route::get('/', 'CropController@getHome');
Route::post('upload', 'CropController@postUpload');
Route::post('crop', 'CropController@postCrop');

get('testit', function() {


  // create an image manager instance with favored driver
  $manager = new ImageManager();

  // to finally create image instances
  $image = $manager->make('http://localhost:8000/uploads/alex-morgan-20108-1920x1200.jpg')->resize(300, 200);

  dd($image);
});
