<?php
	class Main extends CI_Controller{
		
		function index(){
			//$data['content'] = 'home';
//			$this->load->view('includes/content', $data);
			$data['image1'] = $this->dbase_model->gallery1();
			$this->load->view('home', $data);
		}
		
		function about(){
			/*$data['content'] = 'about';
			$this->load->view('includes/content', $data);*/
			$this->load->view('about');
			
		}
		
		function product(){
			/*$data['content'] = 'product';
			$this->load->view('includes/content', $data);*/
			$data['rows'] = $this->dbase_model->getProducts();
			$data['image'] = $this->dbase_model->gallery();
			$data['type'] = $this->dbase_model->type();
			$this->load->view('product', $data);
		}
		
		function services(){
			/*$data['content'] = 'services';
			$this->load->view('includes/content', $data);*/
			$this->load->view('services');
		}
		
		function contact(){
			/*$data['content'] = 'contact';
			$this->load->view('includes/content', $data);*/
			$this->load->view('contact');
		}
		
		function add(){
			$data = array(
				'id' => '42',
				'name' => 'Pants',
				'qty' => 1,
				'price' => 19.99, 
				'options' => array('Size' => 'medium')
			);
			$this->cart->insert($data);
			echo "add() called";
		}
		
		function show(){
			$cart = $this->cart->contents();
			echo "<pre>";
			print_r($cart);
		}
		
		function cart(){
			if(!isset($_POST['submit'])) {
				//$id = $this->input->post('id');
				$id = $this->uri->segment(3);
				$count = $this->session->userdata($id);
				$count = $count + 1;
				
				$this->session->set_userdata($id, $count);
				//echo $this->session->userdata($id);
				redirect('main/success');
			}
		}
		
		function success(){
			$this->load->view('success');
		}
		
		function request() {
			$this->load->view('request');
		}
		
		function sent() {
			$this->load->view('sent');
		}
		
		function cart1(){
			$ctype = $this->uri->segment(4);
			$type = $this->uri->segment(5);
			$id = $this->uri->segment(3);
			
			if(!isset($_POST['submit'])) {
				//$id = $this->input->post('id');
				$count = $this->session->userdata($id);
				$count = $count + 1;
				
				$this->session->set_userdata($id, $count);
				//echo $this->session->userdata($id);
				redirect('main/success');
				//redirect('main/details/'.$id1.'/'.$ctype.'/'.$type);
			}
		}
		
		function cart2(){
			if(!isset($_POST['submit'])) {
				$id = $this->uri->segment(3);
				$count = $this->session->userdata($id);
				$count = $count + 1;
				
				$this->session->set_userdata($id, $count);
				//echo $this->session->userdata($id);
				redirect('main/success');
			}
		}
		
		function productok() {
			$this->load->view('productok');
		}
		function minus($name){
			if($this->session->userdata($name) > 0) 
				$this->session->set_userdata($name, $this->session->userdata($name) - 1);
			redirect('main/viewcart');											
		}
		
		function add1($name){
			$this->session->set_userdata($name, $this->session->userdata($name) + 1);
			redirect('main/viewcart');
		}
		
		function minus1($name){
			$ctype = $this->uri->segment(4);
			$type = $this->uri->segment(5);
			$id = $this->uri->segment(3);
			
			//if(!isset($id)) {
				if($this->session->userdata($id) > 0) {
					$count = $this->session->userdata($id);
					$count = $count - 1;
					
					$this->session->set_userdata($id, $count);
				}
				//echo $this->session->userdata($id);
				redirect('main/details/'.$id.'/'.$ctype.'/'.$type);
			//}
			
			//$this->session->set_userdata($name, $this->session->userdata($name) - 1);
			//redirect('main/details');
												
		}
		
		function add2($name){
			$ctype = $this->uri->segment(4);
			$type = $this->uri->segment(5);
			$id = $this->uri->segment(3);
			
			//if(!isset($id)) {
				$count = $this->session->userdata($id);
				$count = $count + 1;
				
				$this->session->set_userdata($id, $count);
				//echo $this->session->userdata($id);
				redirect('main/details/'.$id.'/'.$ctype.'/'.$type);
			/*
			$this->session->set_userdata($name, $this->session->userdata($name) + 1);
			redirect('main/details');
			*/
		}
		
		function remove($name) {
			$value = $this->uri->segment(4);
			$this->session->set_userdata($name, $this->session->userdata($name) - $value);
			redirect('main/viewcart');
		}
		
		function viewcart(){
			$data['rows'] = $this->dbase_model->getProducts();
			
			$this->load->view('viewcart', $data);
		}
		function viewdetails(){
			$data['rows'] = $this->dbase_model->getProducts();
			$this->load->view('viewdetails', $data);
		}
		
		function send(){
			
			$this->load->library('email');
			
			$config['protocol'] = "smtp";
			$config['smtp_host'] = "mail.toprankglobaladvertising.com";
			$config['smtp_port'] = 25;
			$config['smtp_user'] = "support@toprankglobaladvertising.com";
			$config['smtp_pass'] = "osma2012";
			$config['charset'] = 'utf-8';
			$config['wordwrap'] = TRUE;
			$config['mailtype'] = 'text';

			$this->email->initialize($config);
			$email1 = $this->input->post('email');
			$fname = $this->input->post('fname');
			$msg = $this->input->post('msg');
			$this->email->set_newline("\r\n");
			
			$this->email->from($email1 , $fname);
			$this->email->to('castillo.kimberlykc@yahoo.com');
			$this->email->subject('DPOINT web quick contact form submission.');
			$this->email->message($msg);
			
			$path = $this->config->item('server_root');
			//$file = $path . '/DPOINT/sample.txt';
			
			if($this->email->send()){
				echo '<script type="text/javascript">alert("Your message has been sent!")</script>';
				$page = base_url().'main/'.$this->input->post('currentpage');
				redirect($page);
				//$this->load->view();
				//redirect('main/sent');
				
			}
			else{
				show_error($this->email->print_debugger());
			}
		}
		
		function send1(){
			
			$this->load->library('email');
			
			$config['protocol'] = "smtp";
			$config['smtp_host'] = "mail.toprankglobaladvertising.com";
			$config['smtp_port'] = 25;
			$config['smtp_user'] = "support@toprankglobaladvertising.com";
			$config['smtp_pass'] = "osma2012";
			$config['charset'] = 'utf-8';
			$config['wordwrap'] = TRUE;
			$config['mailtype'] = 'html';

			$this->email->initialize($config);
			$name = $this->input->post('name');
			$contact = $this->input->post('contact');
			$comp = $this->input->post('company');
			$add = $this->input->post('address');
			$req = $this->input->post('request');
			$ser = $this->input->post('service');
			$detail = $this->input->post('details');
			$email = $this->input->post('email');
			$this->email->set_newline("\r\n");
			
			$this->email->from($email, $name);
			$this->email->to('castillo.kimberlykc@yahoo.com');
			$this->email->subject('DPOINT Web '.$req);
			$this->email->message('<font size="12px;"><b>Name: </b>'.$name.'<br><b> Contact Info.: </b>'.$contact.'<br><b> Company Name: </b>'.$comp.'<br><b> Company Address: </b>'.$add.'<br><b> Request: </b>'.$req.'<br><b> Service: </b>'.$ser.'<br><b> Details: </b>'.$detail.'</font>');
			
			$path = $this->config->item('server_root');
			//$file = $path . '/DPOINT/sample.txt';
			
			if($this->email->send()){
				/*echo '<script type="text/javascript">alert("Your message has been sent!")</script>';*/
				$this->load->view('sent');
				
			}
			else{
				show_error($this->email->print_debugger());
			}
		}
		
		function sendEmail(){
			
			/*echo '<script type="text/javascript">alert("Thank you for Subscribing...")</script>';*/
			//echo "Successful!<br>";
			//echo "Thank you for Subscribing...";
			$this->dbase_model->saveEmail();
			redirect('main');
		}
		
		
		function pp1(){
			$this->load->view('products/pp1');
		}
		
		function pp2(){
			$this->load->view('products/pp2');
		}
		
		function pp3(){
			$this->load->view('products/pp3');
		}
		
		function p1(){
			$this->load->view('products/p1');
		}
		
		function p2(){
			$this->load->view('products/p2');
		}
		
		function p3(){
			$this->load->view('products/p3');
		}
		
		function p4(){
			$this->load->view('products/p4');
		}
		
		function p5(){
			$this->load->view('products/p5');
		}
		
		function p6(){
			$this->load->view('products/p6');
		}
		
		function p7(){
			$this->load->view('products/p7');
		}
		
		function p8(){
			$this->load->view('products/p8');
		}
		
		function p9(){
			$this->load->view('products/p9');
		}
		
		function p10(){
			$this->load->view('products/p10');
		}
		
		function p11(){
			$this->load->view('products/p11');
		}
		
		function p12(){
			$this->load->view('products/p12');
		}
		
		function p13(){
			$this->load->view('products/p13');
		}
		
		function p14(){
			$this->load->view('products/p14');
		}
		
		function p15(){
			$this->load->view('products/p15');
		}
		
		function p16(){
			$this->load->view('products/p16');
		}
		
		function p17(){
			$this->load->view('products/p17');
		}
		
		function p18(){
			$this->load->view('products/p18');
		}
		
		function p19(){
			$this->load->view('products/p19');
		}
		
		function p20(){
			$this->load->view('products/p20');
		}
		
		function p21(){
			$this->load->view('products/p21');
		}
		
		function mc3(){
			$this->load->view('products/mc3');
		}
		
		function mc4(){
			$this->load->view('products/mc4');
		}
		
		function mc5(){
			$this->load->view('products/mc5');
		}
		
		function mc6(){
			$this->load->view('products/mc6');
		}
		
		function mc7(){
			$this->load->view('products/mc7');
		}
		
		function mc8(){
			$this->load->view('products/mc8');
		}
		
		
		function filter() {		
			$this->dbase_model->filter();
		}
		
		function details(){
			$data['details'] = $this->dbase_model->details();
			$data['rproducts'] = $this->dbase_model->rproducts();
			$this->load->view('details', $data);
		}
		
		function save(){
			$this->dbase_model->save();
			$this->dbase_model->stocks();
			
			// REDIRECT TO PAYMENT GATEWAY
			echo "Successful!";
		}
		
		function admin(){
			$data['rows'] = $this->dbase_model->getProducts();
			$this->load->view('admin', $data);
		}
		
		function minus2(){
			$this->dbase_model->minus();
			redirect('main/admin');											
		}
		
		function add3($name){
			$this->dbase_model->add();
			redirect('main/admin');
		}
		
		function delete(){
			$this->dbase_model->delete();
			redirect('main/admin');
		}
		
		function editprice(){
			$this->dbase_model->editprice();
			redirect('main/admin');
			
		}
		
		function editname(){
			$this->dbase_model->editname();
			//redirect('main/admin');
			
		}
		
}?>