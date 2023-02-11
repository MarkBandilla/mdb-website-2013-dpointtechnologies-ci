<?php

class Dbase_model extends CI_Model {
	
	function getProducts() {
		$q = $this->db->get('tbl_gallery');
		
		if($q->num_rows() > 0) {
			foreach ($q->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}
	
	function filter() {
		$type = $this->input->post('type');
		if($type != 'camera')
		$this->db->where('type', $type);
		$products = $this->db->get('tbl_products');
		
		echo '<div class="st-contents gallery" id="display">';
		echo '<div class="wrapper">';
			echo '<ul class="filter">';
				echo '<li><a href="#" ';
					if($type=='camera') echo 'class="current"';
					echo ' id="showAll">Show All</a></li>';
				echo '<li><a href="#" ';
					if($type=='Indoor') echo 'class="current"';
					echo ' id="camIndoor">Indoor Camera</a></li>';
				echo '<li><a href="#" ';
					if($type=='Outdoor') echo 'class="current"';
					echo ' id="camOutdoor">Outdoor Camera</a></li>';
				echo '<li><a href="#" ';
					if($type=='Packages') echo 'class="current"';
					echo ' id="camPackage">Packages</a></li>';
				echo '<li><a href="#" ';
					if($type=='Main Component') echo 'class="current"';
					echo ' id="camMC">Main Component</a></li>';
				echo '<div class="clear"></div>';
			echo '</ul><!-- .filter -->';
			
			echo '<div class="sort"></div><!-- sort -->';
			
		
			echo '<ul id="gallery">';
				foreach($products->result() as $r) {
					echo '<a class="fancybox fancybox.iframe" data-fancybox-type="iframe" 
					href="'.base_url().'main/'.$r->thumbnail.'">';
						echo '<li>';
						echo '<img src="'.base_url().'IMG/products/'.$r->pname.'.jpg" />';
						echo '<p>'.$r->pname.'</p>';
						echo '</li></a>';
				}
			echo '</ul><!-- .gallery -->';
			
			echo '<div class="clear"></div>';
		echo '</div><!-- wrapper -->';
		echo '<br /><br />';
		
		echo '<script>
		$("#showAll").click(function(){
			var type = "camera";
			var dataString = { 
				type: type 
			};
			
			$.ajax({
				url: "filter",
				type: "POST",
				data: dataString,
				success: function(html){
					$("#display").remove();
					$(".display").after(html);
				}		
			});
			return false;
		});
		$("#camIndoor").click(function(){
			var type = "Indoor";
			var dataString = { 
				type: type 
			};
			
			$.ajax({
				url: "filter",
				type: "POST",
				data: dataString,
				success: function(html){
					$("#display").remove();
					$(".display").after(html);
				}		
			});
			return false;
		});
		$("#camOutdoor").click(function(){
			var type = "Outdoor";
			var dataString = { 
				type: type 
			};
			
			$.ajax({
				url: "filter",
				type: "POST",
				data: dataString,
				success: function(html){
					$("#display").remove();
					$(".display").after(html);
				}		
			});
			return false;
		});
		$("#camPackage").click(function(){
			var type = "Packages";
			var dataString = { 
				type: type 
			};
			
			$.ajax({
				url: "filter",
				type: "POST",
				data: dataString,
				success: function(html){
					$("#display").remove();
					$(".display").after(html);
				}		
			});
			return false;
		});
		$("#camMC").click(function(){
			var type = "Main Component";
			var dataString = { 
				type: type 
			};
			
			$.ajax({
				url: "filter",
				type: "POST",
				data: dataString,
				success: function(html){
					$("#display").remove();
					$(".display").after(html);
				}		
			});
			return false;
		});
	 </script>';
		
	 	echo '</div><!-- st-contents -->';
		
		
	}
	
	function saveEmail(){
		$date = date('Y-m-d');
		$data = array(
			'date' => $date,
			'name' => $this->input->post('fname'),
			'email' => $this->input->post('email')
		);
		$this->db->insert('tb_emails', $data);
	}
	
	function gallery(){
		$cat = $this->uri->segment(3);
		$cat1 = $this->uri->segment(4);
		
		$this->db->select('*');
		$this->db->from('tbl_gallery');
		$this->db->where('Ctype', $cat);
		$this->db->where('type', $cat1);
		$q = $this->db->get();
		if($q->num_rows() > 0) {
			foreach ($q->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}
	
	function gallery1(){
		$cat = $this->uri->segment(3);
		$cat1 = $this->uri->segment(4);
		
		$this->db->where('Ctype', $cat);
		$this->db->where('type', $cat1);
		$q = $this->db->get('tbl_gallery', 16,0);
		if($q->num_rows() > 0) {
			foreach ($q->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}
	
	function type(){
		$q = $this->db->get('tbl_gallery');
		if($q->num_rows() > 0) {
			foreach ($q->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}
	
	function details(){
		$id = $this->uri->segment(3);
		
		$this->db->select('*');
		$this->db->from('tbl_gallery');
		$this->db->where('id', $id);
		$q = $this->db->get();
		if($q->num_rows() > 0) {
			foreach ($q->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}
	
	function rproducts(){
		$cat = $this->uri->segment(4);
		$cat1 = $this->uri->segment(5);
		
		$this->db->where('Ctype', $cat);
		$this->db->where('type', $cat1);
		$q = $this->db->get('tbl_gallery', 4,0);
		if($q->num_rows() > 0) {
			foreach ($q->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}
	
	function save(){
		$data = array(
			'fullname' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'company' => $this->input->post('company'),
			'delivery' => $this->input->post('delivery'),
			'address' => $this->input->post('address'),
			'location' => $this->input->post('location')
		);
		$this->db->insert('tbl_client', $data);
		
		// get client id
		$this->db->select('*');
		$this->db->from('tbl_client');
		$this->db->order_by('cid', 'desc');
		$this->db->where('fullname', $this->input->post('name'));
		$q = $this->db->get();
		
		$cid = $q->row('cid');
		
		// select all product id
		$sql = $this->db->get('tbl_gallery');
		
		foreach($sql->result() as $r) {
			if($this->session->userdata($r->id) > 0) {
				$odata = array(
					'pid' => $r->id,
					'cid' => $cid,
					'quantity' => $this->session->userdata($r->id),
					'cur_price' => $r->price,
					'date' => date('Y-m-d')
				);
				$this->db->insert('tbl_order', $odata);
			}
		}
		
		
		// loop and count per session id
		// if count > 0 then add to tbl_order and set cid = client id
		
		/*
		$data = array(
			'pid' => $this->input->post(''),
			'quantity' => $this->input->post('quantity'),
			'cur_price' => $this->input->post('company')
		);
		$this->db->insert('tbl_client', $data);*/
		
	}
	//Minus the quantity in tbl_gallery depending on the quantity of order
	function stocks(){
		$sql = $this->db->get('tbl_order');
		
		
		$id = $sql->row('id');
		$id = $sql->row('quantity');
		$q = $sql->row('stocks') - $this->input->post('quantity'); 
		$data = array(
			'stocks' => $q
		);
		$this->db->where('id', $id);
		$this->db->update('tbl_gallery', $data);
	}
	
	function minus(){
		$id = $this->uri->segment(3);
		$stocks = $this->uri->segment(4) - 1;
		
		$data = array(
			'stocks' => $stocks
		);
		
		$this->db->where('id', $id);
		$this->db->update('tbl_gallery', $data);
		
	}
	
	function add(){
		$id = $this->uri->segment(3);
		$stocks = $this->uri->segment(4) + 1;
		
		$data = array(
			'stocks' => $stocks
		);
		
		$this->db->where('id', $id);
		$this->db->update('tbl_gallery', $data);
		
	}
	
	function delete(){
		$id = $this->uri->segment(3);
		
		$this->db->where('id', $id);
		$this->db->delete('tbl_gallery'); 
	}
	
	function editprice(){
		$id =  $this->input->post('id');
		$price = $this->input->post('price');
		
		$data = array (
			'price' => $price
		);
		
		$this->db->where('id', $id);
		$this->db->update('tbl_gallery', $data);
	}
	
	function editname(){
		$id =  $this->input->post('id');
		$name = $this->input->post('name');
		
		$data = array (
			'name' => $name
		);
		
		$this->db->where('id', $id);
		$this->db->update('tbl_gallery', $data);
	}
	
	
}