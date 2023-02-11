<?php $this->load->view('includes/header'); ?>  
   
    <div id="Body">
    <br><br><br><br><br><br><br>
        <div class="wrapper">
            <ul class="qlink">
                <li>
                    <a href="#"><center><h1>DO YOU HAVE ANY QUESTIONS?</h1>
                    <p>Chat with us with our live customer support</p></center></a>
                </li>
                <li>
                    <a href="#"><center><h1>START FREE DEMO NOW!</h1>
                    <p>No obligations just fill up our free demo form</p></center></a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>IMG1/PDF/DPOINT-Brochure.zip"><center><h1>DOWNLOAD UPDATED BROCHURE</h1>
                    <p>Download our updated product pricelist</p></center></a>
                </li>
            </ul><!-- qlink -->
            
            <div class="clear"></div>
            <br>
            
            <div class="breadcrumb">
            	<a href="<?php echo base_url(); ?>">Home</a>
                <a href="<?php echo base_url(); ?>main/product">Products</a> 
                
					<?php 
						if(!$this->uri->segment(4)){
							echo '<span>All</span>'; 
						}elseif($this->uri->segment(4)=="IP" && !$this->uri->segment(5)){
							echo '<span>IP Cameras</span>';
						}elseif($this->uri->segment(4)=="IP" && $this->uri->segment(5)){
							echo '<a href="'.base_url().'main/product/IP">IP Cameras</a>';
							echo '<span>'.$this->uri->segment(5).' IP Cameras</span>';
						}elseif($this->uri->segment(4)=="Analog" && !$this->uri->segment(5)){
							echo '<span>Analog Cameras</span>';
						}elseif($this->uri->segment(4)=="Analog" && $this->uri->segment(5)){
							echo '<a href="'.base_url().'main/product/Analog">Analog Cameras</a>';
							echo '<span>'.$this->uri->segment(5).'</span>';
						}elseif($this->uri->segment(4)=="Packages"){
							echo '<span>Camera Packages</span>';
						}elseif($this->uri->segment(4)=="Component"){
							echo '<span>Camera Components</span>';
						}elseif($this->uri->segment(4)=="Security"){
							echo '<span>Online Security</span>';
						}elseif($this->uri->segment(4)=="Entertainment"){
							echo '<span>Entertainments</span>';
						}
					?>
                </span>
            </div><!-- breadcrumb -->
            
            <div class="clear"></div>
            <br>
            <div class="details1">
            	<div class="figures">
                	<?php foreach($details as $d): ?>
                		<img src="<?php echo base_url(); ?>IMG1/ProductsBig/<?php echo $d->image1; ?>.jpg"/>
                    <?php endforeach;?>
                    <ul class="controlls">
                    	<a href="#"><li valign="middle" class="nav first"></li><!-- nav --></a>
                        
                        <li style="width: 340px;">
                        <center>
                        <ul class="thumbnails" style="width: 157px;">
                        	
                            <li><a href="#"><img src="<?php echo base_url(); ?>IMG1/ProductsSmall/<?php echo $d->image1; ?>.jpg"></a></li>
                            <li><a href="#"><img src="<?php echo base_url(); ?>IMG1/ProductsSmall/<?php echo $d->image2; ?>.jpg"></a></li>
                            
							<?php /*?><li><a href="#"><img src="<?php echo base_url(); ?>IMG1/product/thumb/A-170-SE_03.jpg"></a></li>
                            <li><a href="#"><img src="<?php echo base_url(); ?>IMG1/product/thumb/A-170-SE_04.jpg"></a></li><?php */?>
                            <div class="clear"></div>
                        </ul><!-- thumbnails -->
                        </center>
                        </li>
                        <a href="#"><li valign="middle" class="nav last"></li></a>
                        <div class="clear"></div>
					</ul><!-- controlls -->                    
                </div><!-- figures -->
                <div class="description">
                	<div class="phead">
                    	<h1><?php echo $d->name; ?></h1>
                        <i>Php <?php echo number_format($d->price) ?></i>
                    </div><!-- phead -->
                    <ul class="pnav">
                    	<li class="selected"><a href="#" >Key Features</a></li>
                        <!--<li><a href="#" >Sample Footages</a></li>
                        <li class="last"><a href="#" >Main Components</a></li>-->
                        <div class="clear"></div>
                    </ul><!-- pnav -->
                    <div class="pfeatures">
                    	<p><?php echo $d->description; ?></p>
                        <?php echo $d->features; ?>
                        
                    </div><!-- pfeatures -->
                    <div class="ppurchase">
                    	<ul class="quantity">
                        	<li>Qty: &nbsp;</li>
                        	<a href="<?php echo base_url(); ?>main/minus1/<?php echo $d->id; ?>/<?php echo $d->Ctype; ?>/<?php echo $d->type; ?>"><li class="left"></li></a>
                            	<li class="counter"><input type="text" name="qty" readonly value="<?php echo $this->session->userdata($d->id); ?>"></li>
                            <a href="<?php echo base_url(); ?>main/add2/<?php echo $d->id; ?>/<?php echo $d->Ctype; ?>/<?php echo $d->type; ?>"><li class="right"></li></a>
                        </ul><!-- quantity -->
                                    
                                    <input class="various fancybox.ajax" href="<?php echo base_url(); ?>main/cart1/<?php echo $d->id; ?>/<?php echo $d->Ctype; ?>/<?php echo $d->type; ?>" type="submit" value="Add to Cart" style="padding: 10px 30px; margin-top: 25px; margin-right:25px; float:right;">
                     
                    </div><!-- ppurchase -->
                </div><!-- description -->
                <div class="clear"></div>
            </div><!-- details -->
            
            <div class="clear"></div>
            <br>
            
            <div class="sidebar">
                <div class="ads">
                    <img src="<?php echo base_url(); ?>IMG1/banner_side1.png">
                </div><!-- ads -->
            </div><!-- sidebar -->
            <div class="mainview">
                <div class="toolbar">
                	<div class="number_pages">
                    	Related Products
                    </div>
                     <div class="clear"></div>
                </div><!-- toolbar -->
                
                <ul id="all-products">
                
                <?php 
				if (!$rproducts == 1){
					echo "<center><br>No Related Products!</center>";
				}else{ 
				foreach($rproducts as $rp):
				
				
				?>
                
                	<?php for($i=1; $i<=1; $i++): ?>
                        
                            <li class="product-grid last">
                             <a href="<?php echo base_url(); ?>main/details/<?php echo $rp->id; ?>/<?php echo $rp->Ctype; ?>/<?php echo $rp->type; ?>" class="product-image ">
                            <img class="product_image" src="<?php echo base_url(); ?>IMG1/ProductsSmall/<?php echo $rp->image1; ?>.jpg"/>
                            </a>
                            
                            <div class="product-info">
                                <div class="product-name">
                                    <img src="<?php echo base_url(); ?>IMG1/point.png" />
                                    <a href=""><b><?php echo $rp->name; ?></b></a><br />
                                    <a href=""><?php echo $rp->type; ?></a>
                                </div>
                                <span>Php <?php echo number_format($rp->price) ?></span>
                                <div class="btn_cart">
                                    <input class="various fancybox.ajax" href="<?php echo base_url(); ?>main/cart1/<?php echo $d->id; ?>/<?php echo $d->Ctype; ?>/<?php echo $d->type; ?>" type="submit" value="Add to Cart" style="padding: 10px 30px; margin-top: 10px;">
                            </div>
                            </div>
                        </li>                      
                    <?php endfor; ?>     
                
				<?php endforeach;}?>   
                 <br><br>        
                </ul><!-- all-products -->  
                
            </div><!-- productview -->
        
        <div class="clear"></div>
       <br><br><br>     
        </div><!-- wrapper -->     
    </div><!-- body -->
   
<?php $this->load->view('includes/footer'); ?>