<?php
	class Deepak extends My_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->database();
			$this->helper('url','html');
			$this->library('form_validation');
			$this->library('fileupload');
			require_once "libraries/PDFCreator/pdf.php";
		}
		
		public function index(){	
			$this->view('index');
			if($this->form_validation->method()=="POST"){
				$data=array
				(
					"id"=>rand(0,9).rand(0,9).rand(0,9),
					"name"=>$this->form_validation->input('name'),
					"email"=>$this->form_validation->input('email'),
					"password"=>$this->form_validation->input('password'),
					"address"=>$this->form_validation->input('address'),
					"image"=>$_FILES['image']['name']
				);
				
				$config['path']= "picture/";
				$config['size']= 1024;
				$config['type']= "png|jpg|jpeg";
				
				if($this->fileupload->upload('image',$config)){
					$this->db->set('curd',$data);
					redirect('Deepak/display');
				}
			}
		}
		
		public function display(){
			$this->view('display');
		}
		
		public function update(){
			$id['id'] = base64_decode($_REQUEST['id']);
			$this->view('update', $id);
			
			if($this->form_validation->method()=="POST"){
				$data = array(
					// "id" => $id,
					"name" => $this->form_validation->input('name'),
					"email" => $this->form_validation->input('email'),
					"password" => $this->form_validation->input('password'),
					"address" => $this->form_validation->input('address'),
					"image" => $_FILES['image']['name']
				);
			}
			
			$config['path']	= "picture/";
			$config['size'] = 1024;
			$config['type'] = "png|jpg|jpeg";
			
			if($this->fileupload->upload('image',$config))
			{
				$result=$this->db->edit('curd',$data, ['id'=> $id['id']]);
				redirect('Deepak/display');
			}
		}
		public function remove(){
			$id['id'] = base64_decode($_REQUEST['id']);
			$this->view('delete',$id);
			$this->db->delete('curd',['id'=>$id['id']]);
			redirect('Deepak/display');
		}
		
		public function show(){
			$pdf = new pdfCreator;
			
			$html = '<!DOCTYPE html>
<html lang="en">
<head>
	<title>PDF</title>
</head>
<body><?= bootstrap(); ?>
	<center><h1>Registration Form</h1></center>
	<table  class="table table-hover">
		<tr>
			<th>ID</th>
			<td>1</td>
		</tr>
		<tr>
			<th>Name</th>
			<td>Deepak</td>
		</tr>
		<tr>
			<th>E-mail</th>
			<td>gdeepak9192@gmail.com</td>
		</tr>
		<tr>
			<th>Password</th>
			<td>gdeepak9192@</td>
		</tr>
		<tr>
			<th>DOB</th>
			<td>20/09/1999</td>
		</tr>
		<tr>
			<th>Address</th>
			<td>Gopalganj</td>
		</tr>
		<tr>
			<th>State</th>
			<td>Bihar</td>
		</tr>
	</table>
</body>
</html>';
			$pdf->createPDF($html, 'index');
			// $id['id'] = base64_decode($_REQUEST['id']);
			// $this->view('view',$id);
		}
		
		public function download(){
			$id['id']=base64_decode($_REQUEST['id']);
			$this->view('download',$id);
		}
	}
?>