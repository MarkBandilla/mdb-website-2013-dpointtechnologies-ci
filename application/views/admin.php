<?php $this->load->view('includes/header'); ?>
    
    <br /><br /><br /><br /><br /><br /><br />
	
	<div id="cart" class="features">
    	<div class="wrapper white">
        	<br />
        <form action="#" method="post">
				<input type="submit" value="ADD NEW" style="float: right; padding: 10px 30px; margin-top: 10px; margin-right: 30px;">
            </form>
    		<div class="clear"></div>
            <div style="width: 900px; margin: auto;">
    			<h1>List of Products</h1>
                <br />
                <table>
                
                    <thead>
                        <td style="width: 160px;">Category</td>
                        <td style="width: 160px;">Type</td>
                        <td style="width: 160px;">Photo</td>
                        <td style="width: 160px;">Name</td>
                        <td style="width: 160px;">Quantity</td>
                        <td style="width: 160px;">Price</td>
                        <td style="width: 160px;">Remove</td>
                    </thead>
                    <tbody>
            		<form action="<?php echo base_url(); ?>main/adminSave" method="post">
                    
                    <?php foreach ($rows as $r) :?>
                        
                        <?php //if($this->session->userdata($r->id) > 0): ?>
							<?php //$stotalp1 =  $this->session->userdata($r->id) * $r->price;?>
                            <tr>
                                <td colspan="5"></td>
                            </tr>
                            <tr>
                            	<td>
                                	<?php echo $r->Ctype; ?>
                                </td>
                            	<td>
                                	<?php echo $r->type; ?>
                                </td>
                                <td>
                                    <a href="#"><img src="<?php echo base_url(); ?>IMG1/ProductsSmall/<?php echo $r->image1; ?>.jpg"></a>
                                    <div class="clear"></div>
                                </td>
                                <td>
                                    <div class="pname" id="<?php echo $r->id; ?>" value="<?php echo $r->name; ?>">
                                    <b><?php echo $r->name; ?></b>
                                </td>
                                <td class="price" id="<?php echo $r->id; ?>" value="<?php echo $r->price; ?>">Php <?php echo number_format($r->price,0); ?></td>
                                <td>
                                    <div style="width: 50px; margin: auto;">
                                    <input type="text" name="qty" readonly value="<?php echo $r->stocks; ?>">
                                    <div class="clear"></div>
                                    <div class="icon">
                                        <a href="minus2/<?php echo $r->id; ?>/<?php echo $r->stocks; ?>"><img src="<?php echo base_url(); ?>IMG/minos.gif"></a>
                                        <a href="add3/<?php echo $r->id; ?>/<?php echo $r->stocks; ?>"><img src="<?php echo base_url(); ?>IMG/plus.gif"></a>
                                    </div>
                                    </div>
                                </td>
                                <script type="text/javascript">
								 
									function show_confirm(act,gotoid)
									
									{
									var target = $(this);
									var name = $(this).attr('name');
									var r=confirm("Are you sure you want to delete this product?");
									
									if (r==true)
									
									{
									
									window.location="<?php echo base_url();?>/main/"+act+"/"+gotoid;
									
									}
									
									}
								
								</script>
                                <td><a href="#" name="<?php echo $r->name; ?>" onClick="show_confirm('delete',<?php echo $r->id;?>)"><b style="color: red; float: none; margin-top: 0px; padding: 10px;">x</b></a></td>
                            </tr>
                            <div class="clear"></div>
                        <?php //endif; ?>
                       
                    <?php endforeach; ?>
                    
                    
                  
            </table> 
    		<div class="clear"></div>
    		<br><br><br><br><br><br>
    </div><!-- center -->
		<div class="clear"></div>
        </div><!-- .wrapper -->
    </div><!-- #cart -->
<?php $this->load->view('includes/footer'); ?>