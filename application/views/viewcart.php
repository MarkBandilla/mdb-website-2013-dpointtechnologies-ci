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
                <li><p class="active">Your Cart</p></li>
                <li><p>Client Details, Delivery and Payment</p></li>
                <li><p>Validation</p></li>
                <div class="clear"></div>
            </ul>
            
            <div style="width: 900px; margin: auto;">
            	<br />
    			<h1>Your Cart</h1>
                <br />
                <table>
                
                    <thead>
                        <td>Item</td>
                        <td>Price per item</td>
                        <td>Quantity</td>
                        <td>Total (incl. VAT)</td>
                        <td>Remove</td>
                    </thead>
                    <tbody>
                    
                    
                    <?php foreach ($rows as $r) :?>
                        
                        <?php if($this->session->userdata($r->id) > 0): ?>
							<?php $stotalp1 =  $this->session->userdata($r->id) * $r->price;?>
                            <tr>
                                <td colspan="5"></td>
                            </tr>
                            <tr>
                                <td style="width: 400px;">
                                    <a href="<?php echo base_url(); ?>main/details/<?php echo $r->id; ?>/<?php echo $r->Ctype; ?>/<?php echo $r->type; ?>"><img src="<?php echo base_url(); ?>IMG1/ProductsSmall/<?php echo $r->image1; ?>.jpg"></a>
                                    <div class="info">
                                        <b><?php echo $r->name; ?></b>
                                        <br><br><div style="color: #8B8B8B;">
                                        <?php echo $r->description; ?>
                                        </div><br><br>
                                        <div style="color: #A8C0D5;">REFERENCE :  <?php echo $r->price; ?></div>
                                    </div><!-- info --><div class="clear"></div>
                                </td>
                                <td>Php <?php echo number_format($r->price,0); ?></td>
                                <td>
                                    <div style="width: 50px; margin: auto;">
                                    <input type="text" name="qty" readonly value="<?php echo $this->session->userdata($r->id); ?>">
                                    <div class="clear"></div>
                                    <div class="icon">
                                        <a href="minus/<?php echo $r->id; ?>"><img src="<?php echo base_url(); ?>IMG/minos.gif"></a>
                                        <a href="add1/<?php echo $r->id; ?>"><img src="<?php echo base_url(); ?>IMG/plus.gif"></a>
                                    </div>
                                    </div>
                                </td>
                                <td><b style="float: none; margin-top: 0px;">Php <?php echo number_format($stotalp1,0); ?></b></td>
                                <td><a href="remove/<?php echo $r->id; ?>/<?php echo $this->session->userdata($r->id); ?>"><b style="color: red; float: none; margin-top: 0px; padding: 10px;">x</b></a></td>
                            </tr>
                            <div class="clear"></div>
                        <?php endif; ?>
                       
                    <?php endforeach; ?>
                    
                    
                    

	
<?php 
$gtotal = 0;

foreach ($rows as $r) {
	$gtotal += ($this->session->userdata($r->id) * $r->price);
}


/*
$gtotal = ($this->session->userdata('imgp1') * 21599) + ($this->session->userdata('imgp2') * 52363) + ($this->session->userdata('imgp3') * 57828) + ($this->session->userdata('img1') * 4499) + ($stotal2 =  $this->session->userdata('img2') * 3599) + ($stotal3 =  $this->session->userdata('img3') * 6199) + ($stotal4 =  $this->session->userdata('img4') * 18699) + ($stotal5 =  $this->session->userdata('img5') * 4699) + ($stotal6 =  $this->session->userdata('img6') * 5799) + ($stotal7 =  $this->session->userdata('img7') * 5999) + ($stotal8 =  $this->session->userdata('img8') * 12127) + ($stotal9 =  $this->session->userdata('img9') * 3699) + ($stotal10 =  $this->session->userdata('img10') * 4745) + ($stotal11 =  $this->session->userdata('img11') * 19808) + ($stotal12 =  $this->session->userdata('img12') * 5999) + ($stotal13 =  $this->session->userdata('img13') * 10499) + ($stotal14 =  $this->session->userdata('img14') * 16799);
*/

?>
            </table>
            <br>
<!--            <table>
            	<thead>
                    <td></td>
                    <td style="width: 200px;">Delivery Cost : Php 50.00</td>
                </thead>
            </table>-->
            <br><br>
        	<div class="total" style="float: right; background: #F1F1F7; padding: 5px 10px; margin-bottom: 10px;">
            	<h1 style="margin: 5px 0px;">Total Amount : 
                <font color="#D00B2C">Php <?php echo number_format($gtotal,0); ?></font></h1>
                <?php $rate = $gtotal / $dollar; ?>
                <div style="float: right; color: #A8C0D5;">$ <?php //echo number_format($rate,0); 
				echo round($rate, 0);?> (Note: USD Conversion may vary) </div><div class="clear"></div>
            </div><!-- total -->
            <div class="clear"></div>
            <form action="<?php echo base_url(); ?>main/viewdetails" method="post">
            	<input type="hidden" name="q" value="<?php echo $this->session->userdata($r->id); ?>" />
				<input type="submit" value="Next Step" style="float: right; padding: 10px 30px; margin-top: 10px;">
            </form>
    		<div class="clear"></div>
    		<br><br><br><br><br><br>
    </div><!-- center -->
		<div class="clear"></div>
        </div><!-- .wrapper -->
    </div><!-- #cart -->

<?php $this->load->view('includes/footer'); ?>