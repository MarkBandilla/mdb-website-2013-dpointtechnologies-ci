<div id="footer">
	<script type="text/javascript">
		$(".various").fancybox({
		  fitToView : false,
		  autoSize : true,
		  closeClick : false,
		  openEffect : 'none',
		  closeEffect : 'none'
		 });
	</script>
	<div class="wrapper">
    	<br>
        <div class="sitemap">
            <img src="<?php echo base_url(); ?>Images/Logo.png"><br>
            <ul class="map">
            	<a href="<?php echo base_url(); ?>">HOME</a>
            	<li>Features</li>
                <li>News Update</li>
                <li>Product & Service Overview</li>
            </ul><!-- .map -->
            <ul class="map">
            	<a href="<?php echo base_url(); ?>main/about">ABOUT</a>
            	<li>Mission & Vision</li>
                <li>Our Team</li>
                <li>What make us<br>different</li>
            </ul><!-- .map -->
            <ul class="map">
            	<a href="<?php echo base_url(); ?>main/product">PRODUCTS</a>
            	<li>Access Controll</li>
                <li>Video Surveillance</li>
                <li>Network Solutions</li>
                <li>IP Phones & Voice Switches</li>
                <li>Firewall</li>
            </ul><!-- .map -->
            <ul class="map">
            	<a href="<?php echo base_url(); ?>main/services">SERVICES</a>
            	<li>IT Solutions</li>
                <li>IT Support</li>
                <li>Hosting</li>
                <li>Communications</li>
                <li>Security</li>
            </ul><!-- .map -->
            <ul class="map">
            	<a href="#">CONTACT US</a>
            	<li>Contact Info</li>
                <li>Risk-Free IT Assessment</li>
                <li>Request Form</li>
            </ul><!-- .map -->
        </div><!-- .sitemap -->
        
        
        <div class="feedback" style="float: right; margin-top: -20px;">
        	<div class="upper" style="width: 270px;">
            	<h1 style="margin-left: 0px;"><font color="#1270a6"><b>|</b></font> Contact us</h1>	
                <br>
                <form action="<?php echo base_url();?>main/send" method="post">
                	<input type="hidden" name="currentpage" value="<?php echo $this->uri->segment(2); ?>" />
                    <input type="text" size="42" name="fname" required="required" placeholder="Fullname:"/>
                    <input type="email" size="42" name="email" required="required" placeholder="E-Mail Address:"/>
                    <textarea cols="3" name="msg" style="width: 270px; height: 50px; margin: 1px; padding: 7px;" required="required" placeholder="Message goes here..." ></textarea>  
                    
                    <input type="submit" value="Submit" style="width: 150px; height: 40px; padding 10px 7px; float:right; margin-right: -1px;">
                </form>
            </div>
            <div class="sociallink">
            	
            </div><!-- .sociallink -->
        </div><!-- .feedback -->
	</div><!-- .wrapper -->
    <br>    
    <div class="clear"></div>
    
    <br>
    <hr style="border:none; border-bottom: 1px solid #222;">
    <br>
    <center><p>www.DPointTechnologies.com © All Rights Reserved 2012</p></center>
    <br>
    
</div><!-- #footer -->