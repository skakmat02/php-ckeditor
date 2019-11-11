<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="robots" content="noindex, nofollow">
  <title>File Manager Integration</title>
  <script src="http://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>
</head>
<body>
  <textarea cols="10" id="editor1" name="editor1" rows="10" >
  </textarea>

  <textarea cols="10" id="editor2" name="editor1" rows="10" >
  </textarea>
  <script>
	CKEDITOR.replace( 'editor1', {
		height: 300,
		filebrowserUploadUrl: "upload.php",
   
	} );
  </script>
   <script>
	CKEDITOR.replace( 'editor2', {
		height: 300,
		filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
    filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',
    filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',
    filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
    filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
	} );
  CKFinder.setupCKEditor( editor, '/' );
  </script>
</body>