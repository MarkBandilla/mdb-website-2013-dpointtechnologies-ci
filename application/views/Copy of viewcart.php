
if ($this->session->userdata('img12') > 0){
		$stotal12 =  $this->session->userdata('img12') * 5999;
		echo '<tr><td><br><img src="http://localhost/DPOINT/IMG/products/p12.jpg"></td>';
		echo '<td align="center">SC-IR629</td>';
		echo '<td align="center">Php 5,999</td><td align="center">
		<input type="text" name="qty" readonly value="'.$this->session->userdata('img12').'">
		<td><div class="icons">
			<a href="minus/img12"><img src="http://localhost/DPOINT/Images/Icons/minus.png"></a>
			<a href="add1/img12"><img src="http://localhost/DPOINT/Images/Icons/add.png"></a>
		</div></td>
		</td><td align="center">Php '.number_format($stotal12,2).'</td></tr>';
		echo '<div class="clear"></div>';
}

if ($this->session->userdata('img13') > 0){
		$stotal13 =  $this->session->userdata('img13') * 10499;
		echo '<tr><td><br><img src="http://localhost/DPOINT/IMG/products/p13.jpg"></td>';
		echo '<td align="center">DP-i17</td>';
		echo '<td align="center">Php 10,499</td><td align="center">
		<input type="text" name="qty" readonly value="'.$this->session->userdata('img13').'">
		<td><div class="icons">
			<a href="minus/img13"><img src="http://localhost/DPOINT/Images/Icons/minus.png"></a>
			<a href="add1/img13"><img src="http://localhost/DPOINT/Images/Icons/add.png"></a>
		</div></td>
		</td><td align="center">Php '.number_format($stotal13,2).'</td></tr>';
		echo '<div class="clear"></div>';
}

if ($this->session->userdata('img14') > 0){
		$stotal14 =  $this->session->userdata('img14') * 16799;
		echo '<tr><td><br><img src="http://localhost/DPOINT/IMG/products/p14.jpg"></td>';
		echo '<td align="center">SC-IP602</td>';
		echo '<td align="center">Php 16,799</td><td align="center">
		<input type="text" name="qty" readonly value="'.$this->session->userdata('img14').'">
		<td><div class="icons">
			<a href="minus/img14"><img src="http://localhost/DPOINT/Images/Icons/minus.png"></a>
			<a href="add1/img14"><img src="http://localhost/DPOINT/Images/Icons/add.png"></a>
		</div></td>
		</td><td align="center">Php '.number_format($stotal14,2).'</td></tr>';
		echo '<div class="clear"></div>';
}
?>  
                    
