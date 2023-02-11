<?php $this->load->view('includes/header'); ?>
    <br /><br /><br /><br /><br /><br /><br />
	<div id="products">
    		<div id="st-accordion">
            	<ul>
                	<li class="sector">
                        <h3><font color="#1693eb">|</font> Featured Products</h3>
                        <div class="st-contents">
                        	<div class="wrapper">
                            	<img src="<?php echo base_url(); ?>IMG/product-featured.jpg" />
                            </div><!-- .wrapper -->
                        </div>
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
                                <li><a href="#">Name</a></li>
                                <li><a href="#">Type</a></li>
                            </ul>
                        </section>
                        <div class="clear"></div>
                        <br /><br />
                        
                        <section>
                        	<ul id="stage">
                                <li data-tags="Outdoor Camera" class="view view-tenth">
                                    <img src="<?php echo base_url(); ?>IMG/products/p1.jpg" />
                                    <div class="mask">
                                        <h2>A-170D-SE</h2>
                                        <p>The Hi-Resolution Choice in a Metal Shell.  Perfect for outdoors and public areas.</p>
                                        <a href="#" class="info product">View Details</a>
                                        <a href="#" class="info">Add to cart</a>
                                    </div>
                                    <span class="new"><img src="<?php echo base_url(); ?>IMG/products/New-Badge.png" /></span>
                                </li>
                                <li data-tags="Indoor Camera" class="view view-tenth">
                                    <img src="<?php echo base_url(); ?>IMG/products/p2.jpg" />
                                    <div class="mask">
                                        <h2>A-471D</h2>
                                        <p>The Affordable Dome Camera that offers Hi-Resolution. Perfect for homes and small businesses.</p>
                                        <a href="#" class="info product">View Details</a>
                                        <a href="#" class="info">Add to cart</a>
                                    </div>
                                </li>
                                <li data-tags="Indoor Camera" class="view view-tenth">
                                    <img src="<?php echo base_url(); ?>IMG/products/p3.jpg" />
                                    <div class="mask">
                                        <h2>A-171D-SE</h2>
                                        <p>Top-of-the-line Analog camera that has all the best Specs plus the durability to withstand vandals.  Used in areas of high crime rate.</p>
                                        <a href="#" class="info product">View Details</a>
                                        <a href="#" class="info">Add to cart</a>
                                    </div>
                                </li>
                                <li data-tags="Indoor Camera" class="view view-tenth">
                                    <img src="<?php echo base_url(); ?>IMG/products/p4.jpg" />
                                    <div class="mask">
                                        <h2>DP-793</h2>
                                        <p>The Affordable Dome Camera that offers Hi-Resolution and a discreet dome design. Perfect for restaurants, banks, casinos and hotels.</p>
                                        <a href="#" class="info product">View Details</a>
                                        <a href="#" class="info">Add to cart</a>
                                    </div>
                                </li>
                                
                                <li data-tags="Outdoor Camera" class="view view-tenth">
                                    <img src="<?php echo base_url(); ?>IMG/products/p5.jpg" />
                                    <div class="mask">
                                        <h2>A-180B-SE</h2>
                                        <p>Hi-Resolution, Weatherproof and High Night Sensitivity. Perfect for outdoors and public areas.</p>
                                        <a href="#" class="info product">View Details</a>
                                        <a href="#" class="info">Add to cart</a>
                                    </div>
                                </li>
                                <li data-tags="Outdoor Camera" class="view view-tenth">
                                    <img src="<?php echo base_url(); ?>IMG/products/p6.jpg" />
                                    <div class="mask">
                                        <h2>A-181B-SE</h2>
                                        <p>High Specs Choice with Varifocal lens.  Capture larger areas when zoomed out. Perfect for large spaces.</p>
                                        <a href="#" class="info product">View Details</a>
                                        <a href="#" class="info">Add to cart</a>
                                    </div>
                                </li>
                                <li data-tags="Outdoor Camera" class="view view-tenth">
                                    <img src="<?php echo base_url(); ?>IMG/products/p7.jpg" />
                                    <div class="mask">
                                        <h2>A-841B</h2>
                                        <p>Feature Winner with All High Specs.  Waterproof too. Perfect for  extreme outdoor conditions.</p>
                                        <a href="#" class="info product">View Details</a>
                                        <a href="#" class="info">Add to cart</a>
                                    </div>
                                </li>
                                <li data-tags="Indoor Camera" class="view view-tenth">
                                    <img src="<?php echo base_url(); ?>IMG/products/p8.jpg" />
                                    <div class="mask">
                                        <h2>IP632</h2>
                                        <p>All the Best Features with External Focusing Function.  Can view wide angles. Perfect for offices and classrooms.</p>
                                        <a href="#" class="info product">View Details</a>
                                        <a href="#" class="info">Add to cart</a>
                                    </div>
                                </li>
                                
                                     
                                <li data-tags="Indoor Camera" class="view view-tenth">
                                    <img src="<?php echo base_url(); ?>IMG/products/p9.jpg" />
                                    <div class="mask">
                                        <h2>A-481D</h2>
                                        <p>The Affordable Dome Camera that offers Hi-Resolution and a discreet dome design. Perfect for restaurants, banks, casinos and hotels.</p>
                                        <a href="#" class="info product">View Details</a>
                                        <a href="#" class="info">Add to cart</a>
                                    </div>
                                </li>
                                <li data-tags="Outdoor Camera" class="view view-tenth">
                                    <img src="<?php echo base_url(); ?>IMG/products/p10.jpg" />
                                    <div class="mask">
                                        <h2>SC-IR958</h2>
                                        <p>Hi-Resolution and Weatherproof.  Perfect for outdoors and public areas.</p>
                                        <a href="#" class="info product">View Details</a>
                                        <a href="#" class="info">Add to cart</a>
                                    </div>
                                </li>
                                <li data-tags="Outdoor Camera" class="view view-tenth">
                                    <img src="<?php echo base_url(); ?>IMG/products/p11.jpg" />
                                    <div class="mask">
                                        <h2>IP672</h2>
                                        <p></p>
                                        <a href="#" class="info product">View Details</a>
                                        <a href="#" class="info">Add to cart</a>
                                    </div>
                                </li>
                                <li data-tags="Outdoor Camera" class="view view-tenth">
                                    <img src="<?php echo base_url(); ?>IMG/products/p12.jpg" />
                                    <div class="mask">
                                        <h2>SC-IR629</h2>
                                        <p></p>
                                        <a href="#" class="info product">View Details</a>
                                        <a href="#" class="info">Add to cart</a>
                                    </div>
                                </li>
                                <li data-tags="Indoor Camera" class="view view-tenth">
                                    <img src="<?php echo base_url(); ?>IMG/products/p13.jpg" />
                                    <div class="mask">
                                        <h2>DP-i17</h2>
                                        <p></p>
                                        <a href="#" class="info product">View Details</a>
                                        <a href="#" class="info">Add to cart</a>
                                    </div>
                                </li>
                                <li data-tags="Outdoor Camera" class="view view-tenth">
                                    <img src="<?php echo base_url(); ?>IMG/products/p14.jpg" />
                                    <div class="mask">
                                        <h2>SC-IP602</h2>
                                        <p></p>
                                        <a href="#" class="info product">View Details</a>
                                        <a href="#" class="info">Add to cart</a>
                                    </div>
                                </li>
                            </ul>
                        </section>
                        
						<script src="<?php echo base_url(); ?>portfolio/assets/js/jquery.quicksand.js"></script>
                        <script src="<?php echo base_url(); ?>portfolio/assets/js/script.js"></script>
        
        
                        <div class="clear"></div>
                        
                        
                        </div>
                    </li>
                </ul>
            </div><!-- #st-accordion -->
	</div><!-- #products -->  
    
</body>
</html>