<?php $this->load->view('includes/header'); ?>
    <br /><br /><br /><br /><br /><br /><br />
	<div id="products">
    		<div id="st-accordion">
            	<ul>
                	<li class="sector">
                        <h3><font color="#1693eb">|</font> Suggested Bundle</h3>
                            <div class="st-contents" style="min-height: 300px; background: url(<?php echo base_url(); ?>IMG/shattered.png);">
                                <div class="wrapper">
                                
                                
                                    <section style="float: left; margin: 30px 10px;">
                                        <ul class="sort">
                                            <li>Sort by:</li>
                                            <li class="selected"><a href="#">Latest</a></li>
                                            <li><a href="#">Price</a></li>
                                            <li><a href="#">Name</a></li>
                                            <li><a href="#">Type</a></li>
                                        </ul>
                                    </section>
                                	
                                    <div class="clear"></div>
                                
                                    <ul class="bundle">
                                    	<li><a href="#"><h4 class="product">Access Control</h4><img src="<?php echo base_url(); ?>IMG/1.png" alt="DP-i17"></a>
                                            <a href="#"><h4 class="productb">View Details</h4></a></li>
                                        <li><a href="#"><h4 class="package">Video Surveillance</h4><img src="<?php echo base_url(); ?>IMG/4.png" alt="DP-744"></a>
                                            <a href="#"><h4 class="packageb">View Details</h4></a></li>
                                        <li><a href="#"><h4 class="service">Network Solutions</h4><img src="<?php echo base_url(); ?>IMG/5.png" alt="Video recorder"></a>
                                            <a href="#"><h4 class="serviceb">View Details</h4></a></li>
                                        <li><a href="#"><h4 class="promo">Voice Switches</h4><img src="<?php echo base_url(); ?>IMG/4.png" alt="DP-744"></a>
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
                                <li><a href="#">Name</a></li>
                                <li><a href="#">Type</a></li>
                            </ul>
                        </section>
                        <div class="clear"></div>
                        <br /><br />
                        
                        <!-- the input fields that will hold the variables we will use -->
                        <input type='hidden' id='current_page' />
                        <input type='hidden' id='show_per_page' />
                        
                        <!-- Content div. The child elements will be used for paginating(they don't have to be all the same,
                            you can use divs, paragraphs, spans, or whatever you like mixed together). '-->
                        
                        <section style="position: absolute; height: 370px; overflow: hidden;">
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
                        
                        <!-- An empty div which will be populated using jQuery -->
						
                        </section>
                        
                        <div id='page_navigation' style="margin-top: 400px;"></div>
                        
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