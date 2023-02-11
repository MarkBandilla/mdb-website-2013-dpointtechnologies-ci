<?php $this->load->view('includes/header'); ?>
<?php
 
function currency($from_Currency, $to_Currency, $amount) {
    $amount = urlencode($amount);
    $from_Currency = urlencode($from_Currency);
    $to_Currency = urlencode($to_Currency);
 
    $url = "http://www.google.com/ig/calculator?q=$amount$from_Currency=?$to_Currency";
    $ch = curl_init();
    $timeout = 0;
    curl_setopt ($ch, CURLOPT_URL, $url);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt ($ch, CURLOPT_USERAGENT , "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)");
    curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    $rawdata = curl_exec($ch);
    curl_close($ch);
 
    $data = explode('"', $rawdata);
    $data = explode(' ', $data[3]);
    $var = $data[0];
    return round($var,4);
}
 
 
$dollar = currency('USD', 'PHP', 1);
 
?>
    
    <br /><br /><br /><br /><br /><br /><br />

	<div id="cart" class="features">
    	<div class="wrapper white">
        	<br /><br />
            <ul class="steps">
                <li><p>Your Cart</p></li>
                <li><p class="active">Client Details, Delivery and Payment</p></li>
                <li><p>Validation</p></li>
                <div class="clear"></div>
            </ul>
            <form action="<?php echo base_url(); ?>main/save" method="post">
            <div class="details" style="width: 900px; margin: auto;">
            	<br />
    			<div style="width: 450px; float: left;">
                    <h1>Client Details</h1>
                    <br />
                    <table style="width: 440px; text-align: left;">
                    	<tr>
                        	<td style="width: 200px;"><span>Fullname: </span></td>
                        	<td style="width: 270px;"><input type="text" name="name" placeholder="Fullname" required="required"></td>
                        </tr>
                        <tr>
                        	<td><span>E-mail Address: </span></td>
                        	<td><input type="email" name="email" placeholder="example@yahoo.com" required="required"></td>
                        </td>
                        <tr>
                        	<td><span>Company Name: </span></td>
                        	<td><input type="text" name="company" placeholder="Company Name" required="required"></td>
                        </tr>
                    </table>
                </div><!-- details -->
                <div style="width: 450px; float: right;">
                    <h1>Delivery & Payment</h1>
                    <br />
                    <table style="width: 440px; text-align: left;">
                    	<tr>
                        	<td style="width: 200px;"><span>Delivery Option: </span></td>
                        	<td style="width: 270px;">
                            <select name="delivery">
                            	<option value="LBC">Free Delivery (Within Metro Manila)</option>
                            	<option value="LBC">Via LBC</option>
                            </select></td>
                        </tr>
                        <tr>
                        	<td><span>Address: </span></td>
                        	<td><input type="text" name="address" placeholder="Address" required="required"></td>
                        </td>
                        <tr>
                        	<td><span>Location: </span></td>
                        	<td>
                            <select name="location">
                            	<option value="Antipolo">Antipolo</option>
                            	<option value="Caloocan">Caloocan</option>
                            	<option value="Las Piñas">Las Piñas</option>
                            	<option value="Makati">Makati</option>
                            	<option value="Malabon">Malabon</option>
                            	<option value="Mandaluyong">Mandaluyong</option>
                            	<option value="Manila">Manila</option>
                            	<option value="Marikina">Marikina</option>
                            	<option value="Muntinlupa">Muntinlupa</option>
                            	<option value="Navotas">Navotas</option>
                            	<option value="Parañaque">Parañaque</option>
                            	<option value="Pasay">Pasay</option>
                            	<option value="Pasig">Pasig</option>
                            	<option value="Quezon City">Quezon City</option>
                            	<option value="San Juan">San Juan</option>
                            	<option value="Taguig">Taguig</option>
                            	<option value="Valenzuela">Valenzuela</option>
                            </select></td>
                        </tr>
                    </table>
                </div><!-- delivery -->
                
                
                
                
                
                
                
                
                
                
                
                
                
<?php 
$gtotal = 0;

foreach ($rows as $r) {
	$gtotal += ($this->session->userdata($r->id) * $r->price);
}

/*$gtotal = ($this->session->userdata('imgp1') * 21599) + ($this->session->userdata('imgp2') * 52363) + ($this->session->userdata('imgp3') * 57828) + ($this->session->userdata('img1') * 4499) + ($stotal2 =  $this->session->userdata('img2') * 3599) + ($stotal3 =  $this->session->userdata('img3') * 6199) + ($stotal4 =  $this->session->userdata('img4') * 18699) + ($stotal5 =  $this->session->userdata('img5') * 4699) + ($stotal6 =  $this->session->userdata('img6') * 5799) + ($stotal7 =  $this->session->userdata('img7') * 5999) + ($stotal8 =  $this->session->userdata('img8') * 12127) + ($stotal9 =  $this->session->userdata('img9') * 3699) + ($stotal10 =  $this->session->userdata('img10') * 4745) + ($stotal11 =  $this->session->userdata('img11') * 19808) + ($stotal12 =  $this->session->userdata('img12') * 5999) + ($stotal13 =  $this->session->userdata('img13') * 10499) + ($stotal14 =  $this->session->userdata('img14') * 16799);*/
?>
            
           	<div class="clear"></div>
            <br>
            <br><br>
        	<div class="total" style="float: right; background: #F1F1F7; padding: 5px 10px; margin-bottom: 10px;">
            	<h1 style="margin: 5px 0px;">Total Amount : 
                <font color="#D00B2C">Php <?php echo number_format($gtotal,0); ?></font></h1>
                <?php //$rate = $gtotal * 0.0246; ?>
                <?php $rate = $gtotal / $dollar; ?>
                <div style="float: right; color: #A8C0D5;">Note: $ <?php echo round($rate, 0);?> USD Conversion may vary. </div><div class="clear"></div>
            </div><!-- total -->
            <div class="clear"></div>
            <input type="hidden" name="quantity" value="<?php echo $this->session->userdata($r->id); ?>" />
			<input type="submit" value="Next Steps" style="float: right; padding: 10px 30px; margin-top: 10px;">
            </form>
    		<div class="clear"></div>
    		<br><br><br><br><br><br>
    </div><!-- center -->
		<div class="clear"></div>
        </div><!-- .wrapper -->
    </div><!-- #cart -->
<?php $this->load->view('includes/footer'); ?>