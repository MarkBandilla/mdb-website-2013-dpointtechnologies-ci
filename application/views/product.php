<?php $this->load->view('includes/header'); ?>
    
    <div id="Body">
    <br><br><br><br><br><br><br>
        <div class="wrapper">
           <ul class="qlink">
                <li>
                     <a href="#"><center><h1>DO YOU HAVE ANY QUESTIONS?</h1>
                    <p>Chat with our live customer support</p></center></a>
                </li>
                <li>
                    <a class="fancybox1 fancybox.iframe" data-fancybox-type="iframe" href="<?php echo base_url(); ?>main/request"><center><h1>SCHEDULE A FREE DEMO NOW!</h1>
                    <p>No obligations, just fill out our free demo form</p></center></a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>IMG1/PDF/DPOINT-Brochure.zip"><center><h1>DOWNLOAD BROCHURE</h1>
                    <p>Product Details and Price List</p></center></a>
                </li>
            </ul><!-- qlink -->
            
            <div class="clear"></div>
            <br>
            
            <div class="breadcrumb">
            	<a href="<?php echo base_url(); ?>">Home</a>
                <a href="<?php echo base_url(); ?>main/product">Products</a> 
                
					<?php 
						if(!$this->uri->segment(3)){
							echo '<span>All</span>'; 
						}elseif($this->uri->segment(3)=="IP" && !$this->uri->segment(4)){
							echo '<span>IP Cameras</span>';
						}elseif($this->uri->segment(3)=="IP" && $this->uri->segment(4)){
							echo '<a href="'.base_url().'main/product/IP">IP Cameras</a>';
							echo '<span>'.$this->uri->segment(4).' IP Cameras</span>';
						}elseif($this->uri->segment(3)=="Analog" && !$this->uri->segment(4)){
							echo '<span>Analog Cameras</span>';
						}elseif($this->uri->segment(3)=="Analog" && $this->uri->segment(4)){
							echo '<a href="'.base_url().'main/product/Analog">Analog Cameras</a>';
							echo '<span>'.$this->uri->segment(4).' Analog Cameras</span>';
						}elseif($this->uri->segment(3)=="Packages"){
							echo '<span>Camera Packages</span>';
						}elseif($this->uri->segment(3)=="Component"){
							echo '<span>Camera Components</span>';
						}elseif($this->uri->segment(3)=="Security"){
							echo '<span>Online Security</span>';
						}elseif($this->uri->segment(3)=="Entertainment"){
							echo '<span>Entertainments</span>';
						}
					?>
                </span>
            </div><!-- breadcrumb -->
            
            <div class="clear"></div>
            <br>
            
            <div class="sidebar">
                <div class="category">
                	<center><h1>CATEGORIES</h1></center>
                    <br>
                    <?php foreach($type as $t) ?>
                    
                    
                    <a href="<?php echo base_url(); ?>main/product" <?php if(!$this->uri->segment(3)): ?>class="current"<?php endif; ?> title="View all products">ALL PRODUCTS</a><br> 
                    
                    <a href="<?php echo base_url(); ?>main/product/IP" <?php if($this->uri->segment(3)=="IP"): ?>class="current"<?php endif; ?> title="View all of IP Cameras">IP CAMERAS</a><br>
                    <ul>
                    	<li><a href="<?php echo base_url(); ?>main/product/IP/Indoor" <?php if($this->uri->segment(3)=="IP" && $this->uri->segment(4)=="Indoor" ): ?>class="current"<?php endif; ?> title="View all Indoor IP Cameras">Indoor IP Cameras</a></li>
                        <li><a href="<?php echo base_url(); ?>main/product/IP/Outdoor" <?php if($this->uri->segment(3)=="IP" && $this->uri->segment(4)=="Outdoor" ): ?>class="current"<?php endif; ?> title="View all Outdoor IP Cameras">Outdoor IP Cameras</a></li>
                    </ul>
                    
                    <a href="<?php echo base_url(); ?>main/product/Analog" <?php if($this->uri->segment(3)=="Analog"): ?>class="current"<?php endif; ?> title="View all Analog Cameras">ANALOG CAMERAS</a><br> 
                    <ul>
                    	<li><a href="<?php echo base_url(); ?>main/product/Analog/Indoor" <?php if($this->uri->segment(3)=="Analog" && $this->uri->segment(4)=="Indoor" ): ?>class="current"<?php endif; ?> title="View all Indoor Analog Cameras">Indoor Analog Cameras</a></li>
                        <li><a href="<?php echo base_url(); ?>main/product/Analog/Outdoor" <?php if($this->uri->segment(3)=="Analog" && $this->uri->segment(4)=="Outdoor" ): ?>class="current"<?php endif; ?> title="View all Outdoor Analog Cameras">Outdoor Analog Cameras</a></li>
                    </ul>
                    
                    <a href="<?php echo base_url(); ?>main/product/Packages" <?php if($this->uri->segment(3)=="Packages"): ?>class="current"<?php endif; ?> title="View all Camera Packages">CAMERA PACKAGES</a><br>
                    
                    <a href="<?php echo base_url(); ?>main/product/Component" <?php if($this->uri->segment(3)=="Component"): ?>class="current"<?php endif; ?> title="View all Camera Components">CAMERA COMPONENTS</a><br>
                    
                    <a href="<?php echo base_url(); ?>main/product/Security" <?php if($this->uri->segment(3)=="Security"): ?>class="current"<?php endif; ?> title="View all Online Security">ONLINE SECURITY</a><br>
                    
                    <a href="<?php echo base_url(); ?>main/product/Entertainment" <?php if($this->uri->segment(3)=="Entertainment"): ?>class="current"<?php endif; ?> title="View all Entertainments">ENTERTAINMENT</a><br>
                    <br>
                </div><!-- category -->
                
                <br>
                
                <div class="ads">
                	<a href="<?php echo base_url(); ?>IMG1/PDF/DPOINT-Brochure.zip"><img src="<?php echo base_url(); ?>IMG1/brochure_download.jpg"></a><br /><br />
                	<a href="#"><img src="<?php echo base_url(); ?>IMG1/cs_mr_sj.jpg"></a><br /><br />
                	<a href="<?php echo base_url(); ?>main/contact"><img src="<?php echo base_url(); ?>IMG1/banner_side1.png"></a>
                </div><!-- ads -->
            </div><!-- sidebar -->
            <div class="mainview">
                <div class="promos">
                    <?php if($this->uri->segment(3)): ?>
                        <img src="<?php echo base_url(); ?>IMG1/MiniBanner/<?= $this->uri->segment(3); ?>.jpg">
                        <br /><br />
                    <?php endif; ?>
                </div><!-- promos -->
                
                
            	
                <div class="toolbar">
                
                <div class="number_pages">
                	<?php 
					if(!$this->uri->segment(3)){ 
						echo "All Products";
					}elseif($this->uri->segment(3)=="IP"){
						echo "All IP Cameras";
					}elseif($this->uri->segment(3)=="Analog"){
						echo "All Analog Cameras";
					}elseif($this->uri->segment(3)=="Packages"){
						echo "All Camera Packages";
					}elseif($this->uri->segment(3)=="Component"){
						echo "All Camera Components";
					}elseif($this->uri->segment(3)=="Security"){
						echo "All Online Security";
					}elseif($this->uri->segment(3)=="Entertainment"){
						echo "All Entertainments";
					}
					
					?>
                </div>
                <?php /*?><div class='pagintaion'>
                Page: &nbsp; 
                <a href='<?php echo base_url(); ?>main/product' class='selected' >1</a>
                <a href='<?php echo base_url(); ?>main/product' >2</a>
                <a href='<?php echo base_url(); ?>main/product' >3</a>
                <a href='<?php echo base_url(); ?>main/product' >4</a>
                <a href='<?php echo base_url(); ?>main/product'>&rsaquo;</a>
                <a href='<?php echo base_url(); ?>main/product'>&raquo;</a>
                </div><?php */?>             
                
                <div class="clear"></div>
            </div>
                <ul id="all-products">
                
                <?php 
				if (!$image == 1){
					echo "<center><br>No Available Products!</center>";
				}else{ 
				foreach($image as $img):
				
				
				?>
                
                	<?php for($i=1; $i<=1; $i++): ?>
                    <?php if($i==4): ?>
                    	<li class="product-grid last">
                    <?php else: ?>
                    	<li class="product-grid">
                    <?php endif; ?>
                    
                        <!--<a href="main">
                        <img src="<?php //echo base_url(); ?>IMG1/A-171D-SE_01.jpg" onmouseover="this.src='<?php //echo base_url(); ?>IMG1/A-171D-SE_02.jpg'" onmouseout="this.src='<?php //echo base_url(); ?>IMG1/A-171D-SE_01.jpg'" />
                        </a>-->
                         <a href="<?php echo base_url(); ?>main/details/<?php echo $img->id; ?>/<?php echo $img->Ctype; ?>/<?php echo $img->type; ?>" class="product-image ">
                        <img class="product_image" src="<?php echo base_url(); ?>IMG1/ProductsSmall/<?php echo $img->image2; ?>.jpg"/>                        
                        <img class="product_image"  onmouseover="hideImage(this)" onmouseout="showImage(this)"  src="<?php echo base_url(); ?>IMG1/ProductsSmall/<?php echo $img->image1; ?>.jpg"/>
                    	</a>
                        
                        <div class="product-info">
                        	<div class="product-name">
                            	<img src="<?php echo base_url(); ?>IMG1/point.png" />
                            	<a href="<?php echo base_url(); ?>main/details/<?php echo $img->id; ?>/<?php echo $img->Ctype; ?>/<?php echo $img->type; ?>"><b><?php echo $img->name; ?></b></a><br />
                                <a href="<?php echo base_url(); ?>main/details/<?php echo $img->id; ?>/<?php echo $img->Ctype; ?>/<?php echo $img->type; ?>"><?php echo $img->type; ?></a>
                            </div>
                            <span>Php <?php echo number_format($img->price) ?></span>
                            <div class="btn_cart">
                            	<input class="various fancybox.ajax" href="<?php echo base_url();?>main/cart/<?php echo $img->id; ?>" type="submit" value="Add to Cart" style="padding: 10px 30px; margin-top: 10px;">
                            	<!--<form action="cart" id="myForm" method="post" style="float: right;">
                                    <input type="hidden" name="id" value="<?php //echo $img->id; ?>">
                                    <input class="fancybox fancybox.iframe" data-fancybox-type="iframe" href="<?php //echo base_url();?>" type="submit" value="Add to Cart" style="padding: 10px 30px; margin-top: 10px;">
                                </form>-->
                                
                            </div>
                        </div>
                    </li>
                    <?php endfor; ?>     
                
				<?php endforeach;}?>            
                </ul><!-- all-products -->  
				
                <?php /*?><div class="toolbar">
                    
                    <div class="number_pages">
                        There are 195 Items on 17 pages
                    </div>
                    <div class='pagintaion'>
                    Page: &nbsp; 
                    <a href='<?php echo base_url(); ?>main/product' class='selected' >1</a>
                    <a href='<?php echo base_url(); ?>main/product' >2</a>
                    <a href='<?php echo base_url(); ?>main/product' >3</a>
                    <a href='<?php echo base_url(); ?>main/product' >4</a>
                    <a href='<?php echo base_url(); ?>main/product'>&rsaquo;</a>
                    <a href='<?php echo base_url(); ?>main/product'>&raquo;</a>
                    </div>             
                    
                    <div class="clear"></div>
                </div><?php */?>
            
            </div><!-- productview -->
            
            <div class="clear"></div>
            
            
        </div><!-- wrapper -->
            <br><br><br>     
    </div><!-- body -->

	<script type="text/javascript">
    function hideImage(img){
        //Opera fix
        var block = jQuery(img).parent().parent().parent();
        block.height(block.height());
        //alert(blockHeight);
        jQuery(img).animate({
            'opacity' : 0
        },300);
    }
    
    function showImage(img){
        jQuery(img).animate({
            'opacity' : 1
        },300);
    }  
    </script> 
    
<?php /*?>    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>

	<script>
    $(document).ready(function(){
    
        // hide #back-top first
        $("#back-top").hide();
        
        // fade in #back-top
        $(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 100) {
                    $('#back-top').fadeIn();
                } else {
                    $('#back-top').fadeOut();
                }
            });
    
            // scroll body to 0px on click
            $('#back-top a').click(function () {
                $('body,html').animate({
                    scrollTop: 0
                }, 800);
                return false;
            });
        });
    
    });
    </script>   
    
    <p id="back-top">
        <a href="#Body"><span></span>Back to Top</a>
    </p>  <?php */?>
<!--<div id="back-to-top"><a href="#top" id="top-link">Back to top</a></div>-->
    <div style="clear: all;"></div>
<?php $this->load->view('includes/footer'); ?>