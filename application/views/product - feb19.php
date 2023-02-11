<?php $this->load->view('includes/header'); ?>
    <br /><br /><br /><br /><br /><br /><br />
    
    <div id="products">
    		<div id="st-accordion">
            <ul>
            
            	<li class="sector">
                	<h3><font color="#1693eb">|</font> Suggested Bundle</h3>
                    <div class="st-contents" 
                    style="min-height: 400px; background: url(<?php echo base_url(); ?>IMG/shattered.png);">
                     	<div class="wrapper">
                        	<br /><br />
                        	<section>
                            	<ul class="switcher">
                                    <li><a href="#"> <img src="<?php echo base_url(); ?>IMG/arrow_l.png" /> </a></li>
                                    <li><a href="#" class="middle"> Corporate Biz </a></li>
                                    <li><a href="#"> <img src="<?php echo base_url(); ?>IMG/arrow_r.png" /> </a></li>
                                    <div class="clear"></div>
                                </ul>
                            </section>
                        	<br /><br />
                        	<section>
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
                                        <div class="clear"></div>
                                </ul><!-- .bundle -->
                            </section>
                        </div><!-- wrapper -->
                    </div><!-- .st-contents -->
                    
                </li><!-- sector -->
            	
                <li class="sector">
                    <section>
                        <div class="wrapper"> 
                        
                        <noscript>
                        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>CSS/css1/noJS.css" />
                        </noscript>
                        
                        <h3 style="float: left; width: 300px;"><font color="#1693eb">|</font> Product Listing</h3>
                    
                        <div id="dd" class="wrapper-dropdown-5" tabindex="1" style="float: right; width: 650px; 
                        margin-top: 30px; z-index:1000;">Video Surveillance
                        
                        <ul class="dropdown">
                            <!--li><a href="#"><i class="icon-user"></i>Access Controll</a></li>
                            <li><a href="#"><i class="icon-cog"></i>Video Surveillance</a></li>
                            <li><a href="#"><i class="icon-remove"></i>Network Solution</a></li>
                            <li><a href="#"><i class="icon-cog"></i>IP Phones and Voice Switchers</a></li>
                            <li><a href="#"><i class="icon-remove"></i>Firewall</a></li-->
                            <li><a href="#"></i>Video Surveillance</a></li>
                        </ul>
                    
                        <!-- jQuery if needed -->
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
                        </div><!-- wrapper -->
                    </section> 
                    
                    <div class="clear"></div>
                    
                    <div class="st-contents gallery">
                        <div class="wrapper">
                        	<ul class="filter">
                            	<li><a href="#" class="current">Show All</a></li>
                                <li><a href="#">Indoor Camera</a></li>
                                <li><a href="#">Outdoor Camera</a></li>
                                <li><a href="#">Packages</a></li>
                                <li><a href="#">Accessories</a></li>
                                <div class="clear"></div>
                            </ul><!-- .filter -->
                            
                            
                            
                            <div class="sort">
                            </div><!-- sort -->
                            
                            <ul id="gallery">
                            	<a class="fancybox fancybox.iframe" data-fancybox-type="iframe" href="<?php echo base_url(); ?>products/p1.htm"><li><img src="<?php echo base_url(); ?>IMG/products/pp1.jpg" />
                                	<p>DVR Kit</p>
                                </li></a>
                                
                            	<a class="fancybox fancybox.iframe" data-fancybox-type="iframe" href="<?php echo base_url(); ?>products/p1.htm"><li><img src="<?php echo base_url(); ?>IMG/products/pp2.jpg" />
                                	<p>Vedrus Package</p>
                                </li></a>
                                
                            	<a class="fancybox fancybox.iframe" data-fancybox-type="iframe" href="<?php echo base_url(); ?>products/p1.htm"><li><img src="<?php echo base_url(); ?>IMG/products/pp3.jpg" />
                                	<p>Egarda Package</p>
                                </li></a>
                            	<a class="fancybox fancybox.iframe" data-fancybox-type="iframe" href="<?php echo base_url(); ?>products/p1.htm"><li><img src="<?php echo base_url(); ?>IMG/products/p1.jpg" />
                                	<p>A-170D-SE</p>
                                </li></a>
                                <a href="#"><li><img src="<?php echo base_url(); ?>IMG/products/p2.jpg" />
                                	<p>A-471D</p>
                                </li></a>
                                <a href="#"><li><img src="<?php echo base_url(); ?>IMG/products/p3.jpg" />
                                	<p>A-171D-SE</p>
                                </li></a>
                                <a href="#"><li><img src="<?php echo base_url(); ?>IMG/products/p4.jpg" />
                                	<p>DP-793</p>
                                </li></a>
                                
                            	<a href="#"><li><img src="<?php echo base_url(); ?>IMG/products/p5.jpg" />
                                	<p>A-180B-SE</p>
                                </li></a>
                                <a href="#"><li><img src="<?php echo base_url(); ?>IMG/products/p6.jpg" />
                                	<p>A-181B-SE</p>
                                </li></a>
                                <a href="#"><li><img src="<?php echo base_url(); ?>IMG/products/p7.jpg" />
                                	<p>A-841B</p>
                                </li></a>
                                <a href="#"><li><img src="<?php echo base_url(); ?>IMG/products/p8.jpg" />
                                	<p>IP632</p>
                                </li></a>
                                
                            	<a href="#"><li><img src="<?php echo base_url(); ?>IMG/products/p9.jpg" />
                                	<p>A-481D</p>
                                </li></a>
                                <a href="#"><li><img src="<?php echo base_url(); ?>IMG/products/p10.jpg" />
                                	<p>SC-IR958</p>
                                </li></a>
                                <a href="#"><li><img src="<?php echo base_url(); ?>IMG/products/p11.jpg" />
                                	<p>IP672</p>
                                </li></a>
                                <a href="#"><li><img src="<?php echo base_url(); ?>IMG/products/p12.jpg" />
                                	<p>SC-IR629</p>
                                </li></a>
                                
                            	<a href="#"><li><img src="<?php echo base_url(); ?>IMG/products/p13.jpg" />
                                	<p>DP-i17</p>
                                </li></a>
                                <a href="#"><li><img src="<?php echo base_url(); ?>IMG/products/p14.jpg" />
                                	<p>SC-IP602</p>
                                </li></a>
                            </ul><!-- .gallery -->
                        	
                     
                     	<div class="clear"></div>
                     
                        </div><!-- wrapper -->
                        <br /><br />
                     </div><!-- st-contents -->
                     
                </li><!-- sector -->
            </ul>
            </div><!-- st-accordion -->
    </div><!-- products -->
    
    
<?php $this->load->view('includes/footer'); ?>