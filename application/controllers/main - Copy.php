<?php
	class Main extends CI_Controller{
		
		function index(){
			//$data['content'] = 'home';
//			$this->load->view('includes/content', $data);
			$this->load->view('home');
		}
		
		function about(){
			/*$data['content'] = 'about';
			$this->load->view('includes/content', $data);*/
			$this->load->view('about');
		}
		
		function product(){
			/*$data['content'] = 'product';
			$this->load->view('includes/content', $data);*/
			$this->load->view('product');
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

}

?>