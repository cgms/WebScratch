<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Enymion Webcam</title>

    <!-- Bootstrap -->

    <!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
	<link rel="stylesheet" href="css/bootstrap-image-gallery.min.css">
	<link rel="stylesheet" href="css/demo.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>
  <div class="navbar navbar-default navbar-fixed-top navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-fixed-top .navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="https://github.com/blueimp/Bootstrap-Image-Gallery">Endymion Road</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="http://mastertonsmith.uk">Home</a></li>
            </ul>
        </div>
    </div>
</div>
	<div class="container">
			<h1>Latest Webcam</h1>
			<blockquote>Some information</blockquote>
<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
			<div id="blueimp-gallery" class="blueimp-gallery">
				<!-- The container for the modal slides -->
				<div class="slides"></div>
				<!-- Controls for the borderless lightbox -->
				<h3 class="title"></h3>
				<a class="prev">‹</a>
				<a class="next">›</a>
				<a class="close">×</a>
				<a class="play-pause"></a>
				<ol class="indicator"></ol>
				<!-- The modal dialog, which will be used to wrap the lightbox content -->
				<div class="modal fade">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" aria-hidden="true">&times;</button>
								<h4 class="modal-title"></h4>
							</div>
							<div class="modal-body next"></div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default pull-left prev">
									<i class="glyphicon glyphicon-chevron-left"></i>
									Previous
								</button>
								<button type="button" class="btn btn-primary next">
									Next
									<i class="glyphicon glyphicon-chevron-right"></i>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
						<?php
				error_reporting(E_ALL);
				ini_set('display_errors', '1');

				//get all images
				$images = glob("../picam/*.jpg", GLOB_BRACE); //formats to look for
				$num_of_files = 20; //number of images to display

				//stats
				//echo "Images: ". count($images). " | ";

				$lastImage = new DateTime(date('Y-m-d h:i', filemtime(end($images))));
				$firstImage =  new DateTime(date('Y-m-d h:i', filemtime($images[0])));

				$interval = $lastImage->diff($firstImage);
				//echo $interval->format('Timespan between first and last image: %a days, %h hours, %i minutes</br>');

				krsort($images);

				//show photos
				$i = 1;
				foreach($images as $image)
					{
						 $num_of_files--;

						 if($num_of_files > -1) //this made me laugh when I wrote it
						 {

							echo "<div id=\"links\">";
							echo "<a href="."'".$image."' title=\"Created on ".date('D, d M y H:i:s', filemtime($image)) ."\" data-gallery><img src="."'".$image."' height=\"100\" width=\"100\"></a>";
							echo "<div id=\"links\">";
						}
					}
				?>

        </div>

      </div>

  </body>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
	<script src="js/bootstrap-image-gallery.min.js"></script>
</html>