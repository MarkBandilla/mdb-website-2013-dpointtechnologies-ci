<?php $this->load->view('includes/header'); ?>
    <br /><br /><br /><br /><br /><br /><br />
	<div id="products">
    		<div id="st-accordion">
            	<ul>
                	<li class="sector">
                        <h3><font color="#1693eb">|</font> Suggested Bundle</h3>
                            <div class="st-contents" style="min-height: 400px; background: url(<?php echo base_url(); ?>IMG/shattered.png);">
                                <div class="wrapper">
                                
                                
                                    <!--<section style="float: left; margin: 30px 10px;">
                                        <ul class="sort">
                                            <li>Sort by:</li>
                                            <li class="selected"><a href="#">Latest</a></li>
                                            <li><a href="#">Price</a></li>
                                        </ul>
                                    </section>-->
                                    
                                    <div class="clear"></div>
                                    <br /><br /><br /><br />
                                    <center>
                                    	<u class="switcher">
                                        	<li><a href="#"> <img src="<?php echo base_url(); ?>IMG/arrow_l.png" /> </a></li>
                                            <li><a href="#" class="middle"> Corporate Biz </a></li>
                                            <li><a href="#"> <img src="<?php echo base_url(); ?>IMG/arrow_r.png" /> </a></li>
                                            
                                        </u>
                                    </center>
                                    
                                    <br /><br /><br />
                                    <!--<section class="advance">
                                    	<a href="#">go to product listing</a>
                                    </section>-->
                                	
                                    <div class="clear"></div>
                                
                                    <ul class="bundle">
                                    	<li><a href="#"><h4 class="product">Access Control</h4><img src="<?php echo base_url(); ?>IMG/1.png" alt="DP-i17"></a>
                                            <a href="#"><h4 class="productb">View Details</h4></a></li>
                                        <li><a href="#"><h4 class="package">Video Surveillance</h4><img src="<?php echo base_url(); ?>IMG/2.png" alt="DP-744"></a>
                                            <a href="#"><h4 class="packageb">View Details</h4></a></li>
                                        <li><a href="#"><h4 class="service">Network Solutions</h4><img src="<?php echo base_url(); ?>IMG/4.png" alt="Video recorder"></a>
                                            <a href="#"><h4 class="serviceb">View Details</h4></a></li>
                                        <li><a href="#"><h4 class="promo">Voice Switches</h4><img src="<?php echo base_url(); ?>IMG/3.png" alt="DP-744"></a>
                                            <a href="#"><h4 class="promob">View Details</h4></a></li>
                                        <li><a href="#"><h4 class="product">Firewall</h4><img src="<?php echo base_url(); ?>IMG/5.png" alt="Video recorder"></a>
                                            <a href="#"><h4 class="productb">View Details</h4></a></li>
                                    </ul><!-- .bundle -->
                                </div><!-- .wrapper -->
                            </div><!-- .st-content -->
                        </li>
                    <div class="clear"></div>
                    <li class="sector">
                    	<div class="wrapper">
                        
                        <section>
							<script type="text/javascript" src="<?php echo base_url(); ?>js/modernizr.custom.79639.js"></script> 
                            <noscript><link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>CSS/css1/noJS.css" /></noscript>
                            <h3 style="float: left; width: 300px;"><font color="#1693eb">|</font> Product Listing</h3>
                        
                        	<div id="dd" class="wrapper-dropdown-5" tabindex="1" style="float: right; width: 650px; margin-top: 30px; z-index:10000;">Video Surveillance
                            <ul class="dropdown">
                                <!--li><a href="#"><i class="icon-user"></i>Access Controll</a></li>
                                <li><a href="#"><i class="icon-cog"></i>Video Surveillance</a></li>
                                <li><a href="#"><i class="icon-remove"></i>Network Solution</a></li>
                                <li><a href="#"><i class="icon-cog"></i>IP Phones and Voice Switchers</a></li>
                                <li><a href="#"><i class="icon-remove"></i>Firewall</a></li-->
                                <li><a href="#"><i class="icon-cog"></i>Video Surveillance</a></li>
                            </ul>
                        
                            <!-- jQuery if needed -->
                            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
                            <script type="text/javascript">
                    
                                function DropDown(el) {
                                    this.dd = el;
                                    this.initEvents();
                                }
                                DropDown.prototype = {
                                    initEvents : function() {
                                        var obj = this;
                    
                                        obj.dd.on('click', function(event){
                                            $(this).toggleClass('active');
                                            event.stopPropagation();
                                        });	
                                    }
                                }
                    
                                $(function() {
                    
                                    var dd = new DropDown( $('#dd') );
                    
                                    $(document).click(function() {
                                        // all dropdowns
                                        $('.wrapper-dropdown-5').removeClass('active');
                                    });
                    
                                });
                    
                            </script>
                        </section>
                        
                        <div class="clear"></div>
                        
                        <section>
                        	<nav id="filter"></nav>
                        </section>
                        
                        <section>
                        	<ul class="sort">
                            	<li>Sort by:</li>
                                <li class="selected"><a href="#">Latest</a></li>
                                <li><a href="#">Price</a></li>
                            </ul>
                        </section>
                        <div class="clear"></div>
                        <br /><br />
                        
                        <!-- the input fields that will hold the variables we will use -->
                        <input type='hidden' id='current_page' />
                        <input type='hidden' id='show_per_page' />
                        
                        <!-- Content div. The child elements will be used for paginating(they don't have to be all the same,
                            you can use divs, paragraphs, spans, or whatever you like mixed together). '-->
                        <section id="container" style="position: absolute; height: 365px; overflow: hidden;">
                        	<ul id="stage">
                                <a href="#" id="prod">
                                <li data-tags="Outdoor Camera" class="view view-tenth sponsor" title="Click to flip">
                                    <div class="sponsorFlip">
                                        <img src="<?php echo base_url(); ?>IMG/products/p1.jpg" />
                                    </div>
                        
                                    <div class="mask sponsorData">
                                        <h2>A-170D-SE</h2>
                                        <p>The Hi-Resolution Choice in a Metal Shell.  Perfect for outdoors and public areas.</p>
                                        <a href="#" class="info product">View Details</a>
                                        <a href="#" class="info">Add to cart</a>
                                    </div></a>
                                </li>
                                <li data-tags="Indoor Camera" class="view view-tenth sponsor" title="Click to flip">
                                    <div class="sponsorFlip">
                                        <img src="<?php echo base_url(); ?>IMG/products/p2.jpg" />
                                    </div>
                        
                                    <div class="mask sponsorData">
                                        <h2>A-471D</h2>
                                        <p>The Affordable Dome Camera that offers Hi-Resolution. Perfect for homes and small businesses.</p>
                                        <a href="#" class="info product">View Details</a>
                                        <a href="#" class="info">Add to cart</a>
                                    </div>
                                </li>
                                
                        	</ul><!-- .stage -->
                        </section>
                        
                        
                        
                        <div id='page_navigation' style="margin-top: 380px;"></div>
                        
                        <div class="clear"></div>
                        <br /><br /><br />
                        
                        
						<script src="<?php echo base_url(); ?>portfolio/assets/js/jquery.quicksand.js"></script>
                        <script src="<?php echo base_url(); ?>portfolio/assets/js/script.js"></script>
        
        
                        <div class="clear"></div>
                        
                        
                        </div>
                    </li>
                </ul>
            </div><!-- #st-accordion -->
            
	</div><!-- #products -->  
<?php $this->load->view('includes/footer'); ?>