# Upload and edit image using Croppic jQuery plugin and Laravel

This project is related to tutorial from [Codingo Tuts].

In this tutorial I covered creating image upload/edit widget, which is ideal for profile photo manipulations. It works in similar way as Facebook, Twitter or Linkedin profile photo widgets.

### Croppic works in following way:

  - when you select image from browse window it will be uploaded to server, in original form
  - server responds with url to newly uploaded image and Croppic renders it
  - user can slide image, zoom-in, zoom-out and after he clicks crop button data is sent to server
  - server receives url of original image, and cropping details like: x-position, y-position, cropped width, cropped height, angle.
  - after server processes image using cropping details, it sends success response to client
  - if any errors occur, alert dialog is displayed with error message
  - after successful cropping, final image is displayed to user in Croppic box
  - user can click X and start process all over again

### Croppic in the action

![alt text](http://d356v2gvfldw6z.cloudfront.net/wp-content/uploads/2015/12/croppic.png "Croppic in the action")

[Codingo Tuts]:http://tuts.codingo.me/upload-and-edit-image-using-croppic-jquery-plugin/