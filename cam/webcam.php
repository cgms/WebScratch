<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>MASTERTONSMITH.UK</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet">


    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <script src="../assets/js/modernizr.js"></script>
  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../index.html">MASTERTON-SMITH</a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
          <ul class="nav navbar-nav">
            <li><a href="../index.html">HOME</a></li>
            <li><a href="../about.html">ABOUT</a></li>
            <li><a href="http://cmsphoto.co.uk">CMS Photography</a></li>
            <li class="dropdown active">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">PAGES <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="http://blog.cmsphoto.co.uk">BLOG</a></li>
                <li><a href="../portfolio.html">PORTFOLIO</a></li>
                <li><a href="webcam.php">WEBCAM</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

	<!-- *****************************************************************************************************************
	 BLUE WRAP
	 ***************************************************************************************************************** -->
	<div id="blue">
	    <div class="container">
			<div class="row">
				<h3>WEBCAM</h3>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /blue -->

	<!-- *****************************************************************************************************************
	 PORTFOLIO SECTION
	 ***************************************************************************************************************** -->
	 <div id="portfoliowrap">
        <div class="portfolio-centered">
            <div class="recentitems portfolio">
            <?php
                error_reporting(E_ALL);
                ini_set('display_errors', '1');
                $thumbDir = 'thumbs/';
                $mainDir = 'picam/';
                //get all images
                $images = glob('picam/capture*.jpg', GLOB_BRACE); //formats to look for
                
                $num_of_files = 20; //number of images to display
                //echo "We have images?" .isset($images);
                //stats
                //echo "Images: ". count($images). " | ";

                $lastImage = new DateTime(date('Y-m-d h:i', filemtime(end($images))));
                $firstImage =  new DateTime(date('Y-m-d h:i', filemtime($images[1])));

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
                            echo "<div class=\"portfolio-item\">";
                                echo "<div class=\"he-wrap tpl6\">";
                                echo "<img src=\"".$thumbDir.basename($image)."\" >";
                                    echo "<div class=\"he-view\">";
                                        echo "<div class=\"bg a0\" data-animate=\"fadeIn\">";
                                            echo "<h3 class=\"a1\" data-animate=\"fadeInDown\">".date('D, d/m H:i:s', filemtime($image)) ."</h3>";
                                            echo "<a data-rel=\"prettyPhoto\" href=\"".$image."\" class=\"dmbutton a2\" data-animate=\"fadeInUp\"><i class=\"fa fa-search\"></i></a>";
                                            
                                    echo "</div><!-- he bg -->";
                                echo "</div><!-- he view -->";      
                            echo "</div><!-- he wrap -->";
                        echo "</div><!-- end col-12 -->";
                        }
                    }
                ?> 	 
                 </div><!-- portfolio -->
        </div><!-- portfolio container -->
     </div><!--/Portfoliowrap -->
    
	<!-- *****************************************************************************************************************
	 FOOTER
	 ***************************************************************************************************************** -->
     <div id="footerwrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4>Social</h4>
                    <div class="hline-w"></div>
                    <p>
                        <a href="https://twitter.com/chrism_s"><i class="fa fa-twitter"></i></a>
                        <a href="https://instagram.com/chrism_s/"><i class="fa fa-instagram"></i></a>
                        <a href="http://blog.cmsphoto.co.uk"><i class="fa fa-tumblr"></i></a>
                        <a href="https://uk.linkedin.com/in/chrisms"><i class="fa fa-linkedin"></i></a>                        
                    </p>
                </div>          
            </div><! --/row -->
        </div><! --/container -->
     </div><! --/footerwrap -->
    
	 
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
	<script src="../assets/js/retina-1.1.0.js"></script>
	<script src="../assets/js/jquery.hoverdir.js"></script>
	<script src="../assets/js/jquery.hoverex.min.js"></script>
	<script src="../assets/js/jquery.prettyPhoto.js"></script>
  	<script src="../assets/js/jquery.isotope.min.js"></script>
  	<script src="../assets/js/custom.js"></script>


    <script>
// Portfolio
(function($) {
	"use strict";
	var $container = $('.portfolio'),
		$items = $container.find('.portfolio-item'),
		portfolioLayout = 'fitRows';
		
		if( $container.hasClass('portfolio-centered') ) {
			portfolioLayout = 'masonry';
		}
				
		$container.isotope({
			filter: '*',
			animationEngine: 'best-available',
			layoutMode: portfolioLayout,
			animationOptions: {
			duration: 750,
			easing: 'linear',
			queue: false
		},
		masonry: {
		}
		}, refreshWaypoints());
		
		function refreshWaypoints() {
			setTimeout(function() {
			}, 1000);   
		}
				
		$('nav.portfolio-filter ul a').on('click', function() {
				var selector = $(this).attr('data-filter');
				$container.isotope({ filter: selector }, refreshWaypoints());
				$('nav.portfolio-filter ul a').removeClass('active');
				$(this).addClass('active');
				return false;
		});
		
		function getColumnNumber() { 
			var winWidth = $(window).width(), 
			columnNumber = 1;
		
			if (winWidth > 1200) {
				columnNumber = 5;
			} else if (winWidth > 950) {
				columnNumber = 4;
			} else if (winWidth > 600) {
				columnNumber = 3;
			} else if (winWidth > 400) {
				columnNumber = 2;
			} else if (winWidth > 250) {
				columnNumber = 1;
			}
				return columnNumber;
			}       
			
			function setColumns() {
				var winWidth = $(window).width(), 
				columnNumber = getColumnNumber(), 
				itemWidth = Math.floor(winWidth / columnNumber);
				
				$container.find('.portfolio-item').each(function() { 
					$(this).css( { 
					width : itemWidth + 'px' 
				});
			});
		}
		
		function setPortfolio() { 
			setColumns();
			$container.isotope('reLayout');
		}
			
		$container.imagesLoaded(function () { 
			setPortfolio();
		});
		
		$(window).on('resize', function () { 
		setPortfolio();          
	});
})(jQuery);
</script>
  </body>
</html>
