<?php $this->load->view('includes/header'); ?>
<br /><br /><br /><br /><br /><br /><br />
	<div id="products">
    
    <div id="st-accordion" class="st-accordion">
                    <ul>
                        <li>
                            <a href="#"><font color="#1693eb">|</font> IT Solutions<span class="st-arrow">Open or Close</span></a>
                            <div class="st-content">
                                <div class="wrapper">
                                	<h2>Server and Network Administration</h2>
                                    <h2>Hardware and Software Communication</h2>
                                    <h2>Project Rescues</h2>
                                    <h2>IT Infrastructure</h2>
                                    <h2>Application Development</h2>
                                    <h2>Web Application and Rich Internet Application Development</h2>
                                    <h2>SEO and SEM</h2>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#"><font color="#1693eb">|</font> IT Support<span class="st-arrow">Open or Close</span></a>
                            <div class="st-content">
                                <div class="wrapper">
                                	<h2>IT Support</h2>
                                	<h2>Structured Cabling</h2>
                                	<h2>Server Assurance</h2>
                                	<h2>Remote Support</h2>
                                	<h2>Support Rates</h2>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#"><font color="#1693eb">|</font> Hosting<span class="st-arrow">Open or Close</span></a>
                            <div class="st-content">
                                <div class="wrapper">
                                	<h2>Cloud Computing</h2>
                                	<h2>Virtualization</h2>
                                	<h2>Domain Management</h2>
                                	<h2>Website Hosting</h2>
                                	<h2>Dialer</h2>
                                	<h2>Hylafax(IP Fax)</h2>
                                	<h2>Call Center Management</h2>
                                </div>
                                
                            </div>
                        </li>
                        <li>
                            <a href="#"><font color="#1693eb">|</font> Communications<span class="st-arrow">Open or Close</span></a>
                            <div class="st-content">
                                <div class="wrapper">
                                	<h2>IP & VOIP Phone Systems</h2>
                                	<h2>Internet Services</h2>
                                	<h2>Mobile Broadband</h2>
                                	<h2>Internet Redundancy</h2>
                                </div>
                                
                            </div>
                        </li>
                        <li>
                            <a href="#"><font color="#1693eb">|</font> Security<span class="st-arrow">Open or Close</span></a>
                            <div class="st-content">
                                <div class="wrapper">
                                	<h2>Online Backups</h2>
                                	<h2>Anti-Virus and Anti Malware</h2>
                                	<h2>Penetration Testing</h2>
                                	<h2>Security Audits</h2>
                                	<h2>Firewall Implementation</h2>
                                	<h2>Video Surveillance</h2>
                                </div>
                                
                            </div>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>SlideAccordion/js/jquery.accordion.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>SlideAccordion/js/jquery.easing.1.3.js"></script>
        <script type="text/javascript">
            $(function() {
			
				$('#st-accordion').accordion({
					oneOpenedItem	: true
				});
				
            });
        </script>
    
    </div>
</body>
</html>