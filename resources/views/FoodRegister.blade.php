
<!DOCTYPE html>
<html>
<head>
<title>Sea Food A Hotal and Restaurants category Flat bootstrap Responsive  Website Template|Home :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<!--web-fonts-->
<link href='http://fonts.googleapis.com/css?family=Exo:100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic' rel='stylesheet' type='text/css'>
<!--js-->
<script src="js/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="keywords" content="Sea Foods Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndriodCompatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
<!-- //end-smoth-scrolling -->
<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
<script type="text/javascript">
$(function () {
	
	var filterList = {
	
		init: function () {
		
			// MixItUp plugin
			// http://mixitup.io
			$('#portfoliolist').mixitup({
				targetSelector: '.portfolio',
				filterSelector: '.filter',
				effects: ['fade'],
				easing: 'snap',
				// call the hover effect
				onMixEnd: filterList.hoverEffect()
			});				
		
		},
		
		hoverEffect: function () {
		
			// Simple parallax effect
			$('#portfoliolist .portfolio').hover(
				function () {
					$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
					$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
				},
				function () {
					$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
					$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
				}		
			);				
		
		}

	};
	
	// Run the show!
	filterList.init();
	
	
});	
</script>
</head>
<body>
<!--banner start here-->

	<div class="header-main">
	  <div class="container">
	        <div class="header-navg">
	        	
				<ul class="res">
					<li><a class="active" href='/'>HOME</a></li>
					<li><a href="about.html">ABOUT</a></li>
					<li><a href="recipies.html">RECIPIES</a></li>
					<li><a href="news.html">NEWS</a></li>
					<li><a href="FoodRegister">CONTACT</a></li>
				</ul>
				 <script>
                                  $( "span.menu").click(function() 
                                  {
                                                                    $(  "ul.res" ).slideToggle("slow", function() 
                                                                    {
                                                                     // Animation complete.
                                                                     });
                                  });
                 </script>
			</div>
			<div class="search">
				<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"/>
				<input type="submit" value="">
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

	



<!--see info start here-->
<div class="see-info">
	<div class="container">
		<div class="see-info-main">
		    <div class="see-info-top">
				<span class="mess"> </span>
				<h3>Food Register</h3>
				<span class="long-line"> </span>
				<p>content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text,</p>
			</div>
			

<!--see info end here-->


			<!--food register start here-->
			<div class="row">
				<div class="col-md-10 col-md-offset-1 well">
					<div class="row" id = "tb0">
						<div class="col-sm-1">
							<span class="glyphicon glyphicon-remove-circle remLogo"  aria-hidden="true"></span>
						</div>
						<div class="col-xs-8 col-sm-5">
							<input type="text" class="form-control" id="inputSuccess1" placeholder="Foodname">
						</div>
						<div class="col-xs-8 col-sm-5">
							<input type="text" class="form-control" id="inputSuccess1" placeholder="Price">
						</div>
						<div class="col-xs-1 col-sm-1">
							<button type="button" class="btn btn-success">Photo</button>
						</div>
					</div>
				</div>
			</div>
			<!-- <div>
				<div class="form-group has-success" >
				 		<div id = "tb0">
						 			
						 				<span class="glyphicon glyphicon-remove-circle" style="color:red" aria-hidden="true"></span>
										<input type="text" class="form-control" id="inputSuccess1" placeholder="Foodname">
										<input type="text" class="form-control" id="inputSuccess1" placeholder="Price">
										<button type="button" class="btn btn-success">Photo</button>
									
						</div>
				</div>
			</div> -->
			<div>
				<div>
					<div class="col-md-1 ">
					 		<span class="glyphicon glyphicon-plus-sign" style="color:green" id="add-to-list" aria-hidden="true"></span>
					</div>
				</div>
					<script>
							var count = 0;

							/*remove food*/
							function xaxa(arg) 
							{
										var value = arg.getAttribute('data-value');
										console.log(value);
										if(value != 0 )
											{
												        $("#tb" + value).remove();
												        count = count - 1;
											}
							}
							$(document).ready(function()
							{
										
								$("#add-to-list").click(function()
								{
									    count = count + 1;
										var divSubmit = $(document.createElement('div'));
										$(divSubmit).append(
									        					'<div id=tb' + count + ' ' + ' >\
															 					<div class="col-md-1">\
															 					<span data-value=' + count + ' ' + ' class="glyphicon glyphicon-remove-circle" onclick="xaxa(this)" style="color:red" aria-hidden="true"></span>\
															 					</div>\
																		  		<input type="text" class="form-control" id="inputSuccess1" placeholder="Foodname">\
																		  		<input type="text" class="form-control" id="inputSuccess1" placeholder="Price">\
																		  		<button type="button" class="btn btn-success">Photo</button>\
									        					</div>'
															);

									   
									    var q = count - 1;
									    $("#tb" + q).after(divSubmit); 
								});						    
							});

					</script>
			</div>
			<!--food register end here-->
			<div class="clearfix"> </div>
	   </div>
	</div>
</div>



<!--footer start here-->
<div class="footer">
	<div class="footer-bg">
	<div class="container">
		<div class="footer-main">
			<div class="footer-top">
				<i> </i>
				<span class="ver-line"> </span>
			</div>
			<div class="footer-bottom">
				<div class="email">
					<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}"/>
				</div>
				<div class="sign-up">
					<input type="submit"  value="Subscribe"/>
				</div>
			   <div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
			<div class="layout">
				<p>2015 &copy Sea Foods. All rights reserved.</p>
			</div>
			<div class="clearfix"> </div>
	   </div>
	</div>
  </div>
</div>
<!--footer end here-->
</body>
</html>