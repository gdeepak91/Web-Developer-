<?php
    class Home extends My_Controller {

        public function __construct() {
            parent::__construct();
			$this->database();
            $this->helper('url', 'html');
			$this->library('fileupload');
			$this->library('form_validation');
        }
		
		public function index(){
			$this->view('index');
			// $this->view('display');
			// if ($this->form_validation->method() == "POST") {
					
				// $data = array(
					// "id"=> rand(0, 9).rand(0, 9).rand(0, 9),
					// "name" => $this->form_validation->input('name'),
					// "email" => $this->form_validation->input('email'),
					// "password" => $this->form_validation->input('password'),
					// "address" => $this->form_validation->input('address'),
					// "image" => $_FILES['image']['name']
				// );
				
				// $config['path'] = "uploads/";
				// $config['size'] = 1024;
				// $config['type'] = "png|jpg|jpeg";
				
				// if ($this->fileupload->upload('image', $config)) {					
					// $this->db->set('curd', $data);
				// }
			}
			
			// $this->db->set('curd',['id'=>'2','name' => 'kumar', 'email' => 'gdeepak@gmail.com','password'=>'gdeepak12','address'=>'Bihar','image'=>'c.jpg']);
			
			// $result = $this->db->get('curd');
			// $result = $this->db->row_array($result);
			// $result = $this->db->result_array($result);
			 
			echo "<table><tr><td>Name</td><td>".$result['name']."</td></tr></table>";
			echo "<table><tr><td>E-mail</td><td>".$result['email']."</td></tr></table>";
			echo "<table><tr><td>Password</td><td>".$result['password']."</td></tr></table>";
			echo "<table><tr><td>Address</td><td>".$result['address']."</td></tr></table>";
			echo "<table><tr><td>Image</td><td>".$result['image']."</td></tr></table>";
				
				// foreach($result as $value)
				// {
					// echo "ID = ".$value['id']."\n";
					// echo "Name = ".$value['name']."\n";
					// echo "E-mail = ".$value['email']."\n";
					// echo "Password = ".$value['password']."\n";
					// echo "Address = ".$value['address']."\n";
					// echo "Image = ".$value['image']."\n";
					
				// }
				// echo "\n";
				
			// $this->db->delete('curd',['id'=>'0']);
			// $this->db->edit('curd',['id'=>'1','name'=>'abc','email'=>'abc@gmail.com','password'=>'abc@12','address'=>'xyz','image'=>'c.jpg'],['id'=>'1']);
		}	
		
    }
?>