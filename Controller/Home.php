<?php namespace App\Controllers;

use App\Models\UserModel;
use App\Models\PlanModel;

class Home extends BaseController
{

	public function index()
	{
		$sess = session();
		if($sess->id){
			$plan = new PlanModel();
			$plans=$plan->findAll();
			$result=array();
			$result['data']=$plans;
			echo print_r($result['data']);
			echo view('index',$result);
			
		}
		else{
			return redirect()->to(base_url('Home/login'));
		}
		
	}


	public function login()
	{	
		echo view('login');
	}
	public function logged(){
		if ($this->request->getMethod() === 'post') {
			$sess = session();
			$email=$this->request->getPost('email');
			$pass=$this->request->getPost('pass');
			$db = \Config\Database::connect();
			$que=$db->query("select * from `Users` where email='".$email."' and password='".$pass."'");
			$row = $que->getRow();
			if($row){
				$array = [
					'id' => $row->user_id,
					'name' => $row->name,
					'email' => $row->email
				];
				$sess->set($array);
				return redirect()->to(base_url('Home/index'));
			}else{
				return redirect()->to(base_url('Home/login'));
			}
			
		}
	}
	public function logout(){
		$sess = session();
		$sess->destroy();
		echo view('login');
	}
	public function insertuser(){
		if ($this->request->getMethod() === 'post') {
			$user = new UserModel();
			$data = [
				'name' => $this->request->getPost('name'),
				'email' => $this->request->getPost('email'),
				'phone' => $this->request->getPost('phone'),
				'refer_code' => $this->request->getPost('refer_code'),
				'password' => $this->request->getPost('pass'),
				'con_pass' => $this->request->getPost('cpass'),
				
			];
			if($user->insert($data)){
				return redirect()->to(base_url('Home/login'));
			}
			else
			{	
				return redirect()->to(base_url('Home/register'));
			}

		}
		else
		{	
			return redirect()->to(base_url('Home/register'));
		}
	}
	public function register(){
		echo view('register');
		
	}
	
	public function AddPlan()
	{

		$plan = new PlanModel();
		$data = [
			'amount' => 400,
			'level1' => 100,
			'level2' => 90,
			'level3' => 60,
			'level4' => 40,
			'level5' => 20
		];
		if($plan->insert($data)){
			var_dump(true);
			
		}else{
			var_dump(false);
		}
		return view('addPlans');
	}

	public function GetPlans(){
		
	}

	public function Downline(){

	}


	// public function login()
	// {
		
	// 	$this->load->view('login');
	// 	if($this->input->post('loginC'))
	// 	{	
			
	// 		$email=$this->input->post('email');
	// 		$pass=$this->input->post('pass');
	// 		$que=$this->db->query("select * from `customer` where email='".$email."' and password='".$pass."'");
	// 		$row = $que->row_array();
	// 		if($row){
	// 			$array = array(
	// 				'c_id' => $row[cid],
	// 				'c_name' => $row[name],
	// 				'c_email' => $row[email],
	// 				);
	// 				$this->session->set_userdata($array);
	// 			redirect('Welcome/index');
	// 		}
	// 	}
	// }

	// public function register()
	// {
		
	// 	$this->load->view('registerCustomer');
	// 	if($this->input->post('register'))
	// 	{	
			
	// 		$name=$this->input->post('name');
	// 		$email=$this->input->post('email');
	// 		$phone=$this->input->post('phone');
	// 		$refer_code=$this->input->post('refer');
	// 		$pass=$this->input->post('password');
	// 		$con_pass=$this->input->post('con_password');
			
	// 		if($this->My_Model->saverecords($name,$email,$phone,$refer_code,$pass)){
	// 			redirect('Welcome/login');
	// 		}
	// 	}
	// }


}
