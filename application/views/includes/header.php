<!-- DPOINTv2 2013 - ENRIQUE JOAQUIN - MARK DANIEL BANDILLA - KIMBERLY CASTILLO - JENNY BANDILLA -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>DPOINT</title>
    <link rel="shortcut icon" href="<?php echo base_url();?>IMG1/favicon.ico" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>CSS/style-v1.5.css" />
    <link rel='stylesheet' href='<?php echo base_url(); ?>CSS/style.css' type='text/css'>
    
	<script type="text/javascript" src="<?php echo base_url(); ?>js/script.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>CSS/layerslider.css" type="text/css">
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>CSS/css2/demo.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>CSS/css2/style3.css" />
    <link href='http://fonts.googleapis.com/css?family=Alegreya+SC:700,400italic' rel='stylesheet' type='text/css' />
                
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>CSS/css1/style.css" />
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>CSS/css/style1.css" />
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>SlideAccordion/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>SlideAccordion/css/style.css" />
    
    <noscript>
        <style>
            .st-accordion ul li{
                height:auto;
            }
            .st-accordion ul li > a span{
                visibility:hidden;
            }
        </style>
    </noscript>
    
    <link href='http://fonts.googleapis.com/css?family=Alegreya+SC:700,400italic' rel='stylesheet' type='text/css' />
    <script src="js/modernizr.custom.97074.js"></script>
    
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>HoverEffects/css/style_common.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>HoverEffects/css/style10.css" />
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css' />
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>CSS3Lightbox/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>CSS3Lightbox/css/style3.css" />
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    
    <!--[if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <!-- Add jQuery library -->
	<script type="text/javascript" src="<?php echo base_url(); ?>fancybox/lib/jquery-1.9.0.min.js"></script>

    <!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="<?php echo base_url(); ?>fancybox/source/jquery.fancybox.js?v=2.1.4"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>fancybox/source/jquery.fancybox.css?v=2.1.4" media="screen" />
    <script type="text/javascript">
		$(window).load(function() {
			   if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
					|| location.hostname == this.hostname) {
			
					var target = $(this.hash);
					target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
					   if (target.length) {
						 $('html,body').animate({
							 scrollTop: target.offset().top - 100
						}, 1000);
						return false;
					}
				}
		});
	</script>
    <script type="text/javascript">
	
		
		$(document).ready(function() {	
			/* LINK SCROLLING */
			
			$('a[href*=#]:not([href=#])').click(function() {
				if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
					|| location.hostname == this.hostname) {
			
					var target = $(this.hash);
					target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
					   if (target.length) {
						 $('html,body').animate({
							 scrollTop: target.offset().top - 100
						}, 1000);
						return false;
					}
				}
			});
								   
								   
								   
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			/*
			 *  Open manually
			 */
			 $.fancybox.resize

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});
			
			
		 
			$(".various").fancybox({
				fitToView : false,
				autoSize : true,
				closeClick : false,
				openEffect : 'none',
				closeEffect : 'none'
			});
			
			$(".fancybox1").fancybox({
				  maxWidth : 460,
				  maxHeight : 450,
				  fitToView : false,
				  autoSize : false,
				  closeClick : false,
				  openEffect : 'none',
				  closeEffect : 'none'
			});
			
			
		$(".price").click(function() {
		var target = $(this);
		var id = $(this).attr('id');
		var value = $(this).attr('value');
		
		var price=prompt("Please enter new price.", value);
		 
		 if (price!=null) {
		   $.ajax({
			url: "editprice",
			type: 'POST',
			data: 'id=' + id + '&price=' + price,
			success: function() {
			 $(target).text("Php " + price);
			 $(target).attr('value') = price;
			}
		   });
		  } else {
		  }
		
		});	
		
			
		$(".pname").click(function() {
		var target = $(this);
		var id = $(this).attr('id');
		var value = $(this).attr('value');
		
		var name=prompt("Please enter new name.", value);
		 
		 if (name!=null) {
		   $.ajax({
			url: "editname",
			type: 'POST',
			data: 'id=' + id + '&name=' + name,
			success: function() {
			 $(target).text(name);
			 $(target).attr('value') = name;
			}
		   });
		  } else {
		  }
		
		});
		});
	</script>

</head>
<body>
	<div id="header">
    	<div class="wrapper">
    		<span class="tabclass">
            	<div class="tab">
             	<!--<img src="<?php echo base_url(); ?>Images/Icons/account.png" /> My Account &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->
                <a href="<?php echo base_url(); ?>main/viewcart"><img src="<?php echo base_url(); ?>Images/Icons/Shopping_cart.png" />Shopping Cart 
                <span style="background: red; color: white; padding: 2px 6px; font-weight: normal;
                -webkit-border-radius: 15px; border-radius: 15px;"><?php 
				$q = "Select * from tbl_gallery";
				$result = mysql_query($q);
				
				$total=0;
				
				while($row=mysql_fetch_array($result)){
					$total+= $this->session->userdata($row[0]);
				}
				
				echo $total;
				
				?></span><!-- notify -->
                </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <img src="<?php echo base_url(); ?>Images/Icons/Live_chat.png" /> Live Chat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <img src="<?php echo base_url(); ?>Images/Icons/phone.png" /><a href="">Call us</a> +632 695 98 78 | <a href="" style="text-decoration:underline; color:#03F;">Free Consultation</a>
                </div><!-- tab -->
            </span>
        </div>    
            <div id="menu">
            	<div class="wrapper">
                    <ul class="mainmenu">
                    	<div class="logo">
                    		<a href="<?php echo base_url(); ?>">
                            <img src="<?php echo base_url(); ?>Images/D-Point_small.png" /></a>
                    	</div><!-- logo -->
                        <ul class="mh-menu">
                            <li><a href="<?php echo base_url(); ?>"><span><h1>Home +</h1></span></a>
                                <div class="submenu">
                                	<div class="links">
                                    	<ul>
                                        	<li><a href="<?php echo base_url(); ?>#features">
                                            	<h1>Features</h1>
                                                <p>“We believe in three things: Precision, Partnership and Performance.  These encompass our over-all corporate focus.”</p>
                                            </a></li>
                                            <li><img src="<?php echo base_url(); ?>IMG/vr-submenu.jpg" /></li>
                                            <li><a href="<?php echo base_url(); ?>#updates">
                                            	<h1>News & Updates</h1>
                                                <p>“Discover the latest in Security Technology and know about real-life situations where CCTV helped in catching the culprits, it’s all in the news.”</p>
                                            </a></li>
                                            <li><img src="<?php echo base_url(); ?>IMG/vr-submenu.jpg" /></li>
                                            <li><a href="<?php echo base_url(); ?>#overview">
                                            	<h1>Products & Services Overview</h1>
                                                <p>“Learn about our CCTV and IT expertise and the products we are expert about”</p>
                                            </a></li>   
                                            <div class="clear"></div>                                       
                                        </ul>
                                    </div>
                                    
                                    <img src="<?php echo base_url(); ?>IMG/dd-home-img.jpg" />
                                    
                                    <div class="flink">
                                    	<p>Become our Business Partner today..</p>
                                        <input type="submit" value="RESELLER SIGN-UP" />
                                    </div>
                                </div></li>
                            <li><a href="<?php echo base_url(); ?>main/about"><span><h1>About +</h1></span></a>
                               <div class="submenu">
                                	<div class="links">
                                    	<ul>
                                        	<li><a href="<?php echo base_url(); ?>main/about#missionvision">
                                            	<h1>Mission & Vision</h1>
                                                <p>“DPOINT …</p>
                                            </a></li>
                                            <li><img src="<?php echo base_url(); ?>IMG/vr-submenu.jpg" /></li>
                                            <li><a href="<?php echo base_url(); ?>main/about#team">
                                            	<h1>Core Team</h1>
                                                <p>“Know the experts behind our company.  Experts you can trust to provide you excellent IT solutions.”</p>
                                            </a></li>
                                            <li><img src="<?php echo base_url(); ?>IMG/vr-submenu.jpg" /></li>
                                            <li><a href="<?php echo base_url(); ?>main/about#difference">
                                            	<h1>What makes us different</h1>
                                                <p>“We are excellent in what we do.  We guarantee the quality of work and products we provide. Your satisfaction is our inspiration.”</p>
                                            </a></li>   
                                            <div class="clear"></div>                                       
                                        </ul>
                                    </div>
                                    
                                    <img src="<?php echo base_url(); ?>IMG/dd-about-img.jpg" />
                                    
                                    <div class="flink">
                                    	<p>Know more about our company..</p>
                                        <input type="submit" value="COMPANY PROFILE DOWNLOAD" />
                                    </div>
                                </div></li>
                            <li><a href="<?php echo base_url(); ?>main/product"><span><h1>Products +</h1></span></a>
                                <div class="submenu">
                                	<div class="links">
                                    	<ul>
                                        	<li><a href="<?php echo base_url(); ?>main/product#suggested">
                                            	<h1>Suggested product bundle</h1>
                                                <p>“We bundled the best product mix to address your every IT and security monitoring needs.”</p>
                                            </a></li>
                                            <li><img src="<?php echo base_url(); ?>IMG/vr-submenu.jpg" /></li>
                                            <li><a href="<?php echo base_url(); ?>main/product#list">
                                            	<h1>Product Listing</h1>
                                                <p>“Mix and Match your own product mix with our comprehensive product listing.”</p>
                                            </a></li>
                                            <li><img src="<?php echo base_url(); ?>IMG/vr-submenu.jpg" /></li>
                                            <li><a href="<?php echo base_url(); ?>main/product#request">
                                            	<h1>Product Request</h1>
                                                <p>“Didn’t find what you’re looking for? Send us a request; we can get it for you at a very competitive price.”</p>
                                            </a></li>   
                                            <div class="clear"></div>                                       
                                        </ul>
                                    </div>
                                    
                                    <img src="<?php echo base_url(); ?>IMG/dd-products-img.jpg" />
                                    
                                    <div class="flink">
                                    	<p>Download our updated product & pricelist</p>
                                        <input type="submit" value="BROCHURE DOWNLOAD" />
                                    </div>
                                </div></li>
                            <li><a href="<?php echo base_url(); ?>main/services"><span><h1>Services +</h1></span></a>
                                <div class="submenu">
                                	<div class="links">
                                    	<ul>
                                        	<li><a href="<?php echo base_url(); ?>main/services#list">
                                            	<h1>Services List</h1>
                                                <p>“Anything related to IT, we can expertly do for you.  Click and see our comprehensive IT services.”</p>
                                            </a></li>
                                            <li><img src="<?php echo base_url(); ?>IMG/vr-submenu.jpg" /></li>
                                            <li><a href="<?php echo base_url(); ?>main/services#solutions">
                                            	<h1>Our Solutions</h1>
                                                <p>“Our industry focused IT Solutions address common IT challenges in specific work functions allowing you more time to focus on your core competencies.”</p>
                                            </a></li>
                                            <li><img src="<?php echo base_url(); ?>IMG/vr-submenu.jpg" /></li>
                                            <li><a href="<?php echo base_url(); ?>main/services#outsourcing">
                                            	<h1>Outsourcing Solution</h1>
                                                <p>“Finding it hard to hire and keep competent IT staff? Let us deploy our own IT experts to your company.  Click to learn more of our IT Staffing services.</p>
                                            </a></li>   
                                            <div class="clear"></div>                                       
                                        </ul>
                                    </div>
                                    
                                    <img src="<?php echo base_url(); ?>IMG/dd-services-img.jpg" />
                                    
                                    <div class="flink">
                                    	<p>Ask our experts now..</p>
                                        <input type="submit" value="FREE CONSULTATION" />
                                    </div>
                                </div></li>
                            <li><a href="<?php echo base_url(); ?>main/contact"><span><h1>Contact +</h1></span></a>
                                <div class="submenu">
                                	<div class="links">
                                    	<ul>
                                        	<li><a href="<?php echo base_url(); ?>main/contact#info">
                                            	<h1>Contact Info</h1>
                                                <p>“Call, email, chat or even visit us.  It will be our pleasure to address your concerns.”</p>
                                            </a></li>
                                            <li><img src="<?php echo base_url(); ?>IMG/vr-submenu.jpg" /></li>
                                            <li><a href="<?php echo base_url(); ?>main/contact#it">
                                            	<h1>Risk-free IT Assessment</h1>
                                                <p>“We love challenges, tell us what you need a solution for and we will gladly conduct a study then do a demo for you.  It’s FREE.” </p>
                                            </a></li>
                                            <li><img src="<?php echo base_url(); ?>IMG/vr-submenu.jpg" /></li>
                                            <li><a href="<?php echo base_url(); ?>main/contact#portal">
                                            	<h1>Support Portal</h1>
                                                <p>“Our 24/7 chat and email support is ready to address your immediate concerns.  Click here to open our chat/email portal.” </p>
                                            </a></li>   
                                            <div class="clear"></div>                                       
                                        </ul>
                                    </div>
                                    
                                    <img src="<?php echo base_url(); ?>IMG/dd-contact-img.jpg" />
                                    
                                    <div class="flink">
                                    	<p>Try our free product demo today..</p>
                                        <input type="submit" value="START FREE DEMO" />
                                    </div>
                                </div></li>
                        </ul>
                    </ul>
                    <div class="search">
           				<input type="text" value="" placeholder="Quick Search"/>
            		</div>
                </div>
            </div>
    </div>
    
<div class="social">
<a href="http://www.facebook.com/DPointTechnologiesAsiaInc"><img src="<?php echo base_url(); ?>Images/Icons/fb.jpg" /></a><br />
<a href="https://twitter.com/dpointtech"><img src="<?php echo base_url(); ?>Images/Icons/twitter.jpg" /></a><br />
<a href="http://pinterest.com/dpointtech/"><img src="<?php echo base_url(); ?>Images/Icons/pinterest.jpg" /></a>
</div>

<script type="text/javascript">
		var ss = {
		  fixAllLinks: function() {
			// Get a list of all links in the page
			var allLinks = document.getElementsByTagName('a');
			// Walk through the list
			for (var i=0;i<allLinks.length;i++) {
			  var lnk = allLinks[i];
			  if ((lnk.href && lnk.href.indexOf('#') != -1) && 
				  ( (lnk.pathname == location.pathname) ||
				('/'+lnk.pathname == location.pathname) ) && 
				  (lnk.search == location.search)) {
				// If the link is internal to the page (begins in #)
				// then attach the smoothScroll function as an onclick
				// event handler
				ss.addEvent(lnk,'click',ss.smoothScroll);
			  }
			}
		  },

		  smoothScroll: function(e) {
			// This is an event handler; get the clicked on element,
			// in a cross-browser fashion
			if (window.event) {
			  target = window.event.srcElement;
			} else if (e) {
			  target = e.target;
			} else return;

			// Make sure that the target is an element, not a text node
			// within an element
			if (target.nodeType == 3) {
			  target = target.parentNode;
			}

			// Paranoia; check this is an A tag
			if (target.nodeName.toLowerCase() != 'a') return;

			// Find the <a name> tag corresponding to this href
			// First strip off the hash (first character)
			anchor = target.hash.substr(1);
			// Now loop all A tags until we find one with that name
			var allLinks = document.getElementsByTagName('a');
			var allDivs = document.getElementsByTagName('div');
			var all = [allLinks, allDivs];
			var destinationLink = null;
			for (var j=0; j<all.length; j++) {
			  for (var i=0;i<all[j].length;i++) {
				var lnk = all[j][i];
				if (lnk.name && (lnk.name == anchor)) {
				  destinationLink = lnk;
				  break;
				} else if (lnk.id && (lnk.id == anchor)){
			  destinationLink = lnk;
				  break;
			}
			  }
			}
			/*
			var allLinks = document.getElementsByTagName('a');
			var destinationLink = null;
			for (var i=0;i<allLinks.length;i++) {
			  var lnk = allLinks[i];
			  if (lnk.name && (lnk.name == anchor)) {
				destinationLink = lnk;
				break;
			  }
			}
			*/

			// If we didn't find a destination, give up and let the browser do
			// its thing
			if (!destinationLink) return true;

			// Find the destination's position
			var destx = destinationLink.offsetLeft; 
			var desty = destinationLink.offsetTop;
			var thisNode = destinationLink;
			while (thisNode.offsetParent && 
				  (thisNode.offsetParent != document.body)) {
			  thisNode = thisNode.offsetParent;
			  destx += thisNode.offsetLeft;
			  desty += thisNode.offsetTop;
			}

			// Stop any current scrolling
			clearInterval(ss.INTERVAL);

			cypos = ss.getCurrentYPos();

			ss_stepsize = parseInt((desty-cypos)/ss.STEPS);
			ss.INTERVAL =
		setInterval('ss.scrollWindow('+ss_stepsize+','+desty+',"'+anchor+'")',10);

			// And stop the actual click happening
			if (window.event) {
			  window.event.cancelBubble = true;
			  window.event.returnValue = false;
			}
			if (e && e.preventDefault && e.stopPropagation) {
			  e.preventDefault();
			  e.stopPropagation();
			}
		  },

		  scrollWindow: function(scramount,dest,anchor) {
			wascypos = ss.getCurrentYPos();
			isAbove = (wascypos < dest);
			window.scrollTo(0,wascypos + scramount);
			iscypos = ss.getCurrentYPos();
			isAboveNow = (iscypos < dest);
			if ((isAbove != isAboveNow) || (wascypos == iscypos)) {
			  // if we've just scrolled past the destination, or
			  // we haven't moved from the last scroll (i.e., we're at the
			  // bottom of the page) then scroll exactly to the link
			  window.scrollTo(0,dest);
			  // cancel the repeating timer
			  clearInterval(ss.INTERVAL);
			  // and jump to the link directly so the URL's right
			  location.hash = anchor;
			}
		  },

		  getCurrentYPos: function() {
			if (document.body && document.body.scrollTop)
			  return document.body.scrollTop;
			if (document.documentElement && document.documentElement.scrollTop)
			  return document.documentElement.scrollTop;
			if (window.pageYOffset)
			  return window.pageYOffset;
			return 0;
		  },

		  addEvent: function(elm, evType, fn, useCapture) {
			// addEvent and removeEvent
			// cross-browser event handling for IE5+,  NS6 and Mozilla
			// By Scott Andrew
			if (elm.addEventListener){
			  elm.addEventListener(evType, fn, useCapture);
			  return true;
			} else if (elm.attachEvent){
			  var r = elm.attachEvent("on"+evType, fn);
			  return r;
			} else {
			  alert("Handler could not be removed");
			}
		  } 
		}

		ss.STEPS = 50;

		ss.addEvent(window,"load",ss.fixAllLinks);
	</script>