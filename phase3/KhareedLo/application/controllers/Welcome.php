<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
	{
		parent::__construct();
		$this->load->model('projectModel');
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->database();
        $this->load->helper('form');
        $this->load->library("pagination");
	} 
	public function index()
	{
		$this->load->view('index');
	}
	public function facebook()
	{
		$this->load->view('facebook');
	}
	public function product()
	{
		$this->load->view('products');
		
	}
	public function srch()
	{
		$this->load->view('searchWithAjax');
		
	}
	public function ad()
	{
		$this->load->view('add');
		
	}
	public function lad()
	{
		$this->load->view('lAd');
		
	}
	// public function cart()
	// {
	// 	$this->load->view('products');
		
	// }
	public function contact()
	{
		$this->load->view('contct');
		
	}

	public function cloth()
	{
		$data = array();
		$i=0;
		$result=$this->projectModel->viewAllCloth();
	
		//echo $result;
		$data=array('result'=>$result);
		$this->load->view('displayAdds',$data);
		
	}
	public function animal()
	{
		$data = array();
		$i=0;
		$result=$this->projectModel->viewAllAnimal();
	
		//echo $result;
		$data=array('result'=>$result);
		$this->load->view('displayAdds',$data);
		
	}
	public function vehicle()
	{
		$data = array();
		$i=0;
		$result=$this->projectModel->viewAllVehicles();
	
		//echo $result;
		$data=array('result'=>$result);
		$this->load->view('displayAdds',$data);
		
	}
	public function electronics()
	{
		$data = array();
		$i=0;
		$result=$this->projectModel->viewAllElectronics();
	
		//echo $result;
		$data=array('result'=>$result);
		$this->load->view('displayAdds',$data);
		
	}
	public function mobile()
	{
		$data = array();
		$i=0;
		$result=$this->projectModel->viewAllMobiles();
	
		//echo $result;
		$data=array('result'=>$result);
		$this->load->view('displayAdds',$data);
		
	}
	public function otherAccess()
	{
		$data = array();
		$i=0;
		$result=$this->projectModel->viewAllOtherAccess();
	
		//echo $result;
		$data=array('result'=>$result);
		$this->load->view('displayAdds',$data);
		
	}

	public function loginn()
	{
		if($this->session->userdata('logged_in') == true)
		{
			$this->load->view('signInSuccess');
		}

		else
		{
			$this->load->view('login');
		}

		
		
	}

	public function signUp()
	{
		
		$fName=$_POST['fname'];
		$lName=$_POST['lname'];

		$uName=$_POST['usname'];
		$pswrd=$_POST['psw'];
		$email=$_POST['mail'];
	
		$dob=$_POST['dob'];

		$this->projectModel->signUp($fName,$lName,$uName,$pswrd,$email,$dob);
		$data = array(
			'fName' => $fName,
			'lName' => $lName,
			'uName' => $uName,
			'pswrd' => $pswrd,
			'email' => $email,			
			'dob' => $dob
			
			);

		$this->load->view('signUpSuccess',$data);
	}

public function Login()
	{
		$uName=$_POST['username'];
		$pswrd=$_POST['password'];

		
		$data = array(
			
			'uName' => $uName
			
			
			);
		if($this->projectModel->signIn($uName,$pswrd)==true)
		{
			$this->session->set_userdata('logged_in',true);
			$this->session->set_userdata('userName',$uName);
			//$this->session_start();
			$this->load->view('signInSuccess',$data);
		}
		else
		{
			$this->load->view('signInFail');

		}
	}
	public function fbLogin()
	{
					$this->session->set_userdata('logged_in',true);
			$this->session->set_userdata('userName',$uName);
			//$this->session_start();
			$this->load->view('signInSuccess',$data);


	}

	public function logout()
	{
		$this->session->sess_destroy();
		$this->load->view('login');

	}

	public function checkSession()
	{
		if($this->session->set_userdata('logged_in') == true)
		{
			$this->load->view('signInSuccess',$data);
		}

		else
		{
			$this->load->view('Login');
		}
	}

	public function PostAd()
	{
		
		$Title=$_POST['tittle1'];
		$Category=$_POST['category'];
		$Price=$_POST['price'];
		$Location=$_POST['location'];
		$PhoneNo=$_POST['phone_number'];
		$Image=$_POST['path'];
		$email=$_POST['email'];


		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '0';
		$config['max_width']  = '0';
		$config['max_height']  = '0';

		$this->load->library('upload', $config);
		//$field_name = array('path'=>$this->input->post('file'));
		//echo ($field_name['path']);
		if ( ! $this->upload->do_upload())
		{
			$data = array('error' => $this->upload->display_errors());
			echo $data['error'];
			//$this->load->view('error', $data);
			//echo ($field_name['path']
			
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());

		}


		$this->projectModel->postAd($Title,$Category,$Price,$Location,$PhoneNo,$Image,$email);
		$data = array(
			'Title' => $Title,
			'Category' => $Category,
			'Price' => $Price,
			'Location' => $Location,
			'PhoneNo' => $PhoneNo,			
			'Image' => $Image,
			'email' =>$email
			
			);

		$this->load->view('ViewRecentAd',$data);


	}

	public function viewAllItems()
	{
		// $retrive = $this->projectModel->viewAllItems();
		// $data['val']=$retrive;
		// $this->load->view('viewAllItem_v',$data);


		  $config = array();
		        $config["base_url"] = "http://localhost:8080/khareedLo/index.php/Welcome/viewAllItems";
		        $config["total_rows"] = $this->projectModel->record_count();
		        $config["per_page"] = 2;
		        $config["uri_segment"] =$config["total_rows"]/2+1 ;

		        $this->pagination->initialize($config);

		        $page = ($this->uri->segment(5)) ? $this->uri->segment(5) : 0;
		        $data["val"] = $this->projectModel->fetch_ads($config["per_page"], $page);
		        $data["links"] = $this->pagination->create_links();

		        $this->load->view("viewAllItem_v", $data);
		    



	}

	public function Search()
	{
		
		$Title=$_POST['title'];
		$Category=$_POST['category'];
		$From=$_POST['from'];
		$To=$_POST['to'];
		$Location=$_POST['location'];


		$query=$this->projectModel->search($Title,$Category,$From,$To,$Location);
		$data['val']=$query;
		$this->load->view('searchResults',$data);
		// $data = array(
		// 	'Title' => $Title,
		// 	'Category' => $Category,
		// 	'From' => $From,
		// 	'to' => $To,	
		// 	'Location' => $Location
			
		// 	);

	
	}

		public function Rate()
	{
		
		$email= $_POST['email'];
		$ratingValue = $_POST['rateValue'];

		$this->projectModel->rate($email,$ratingValue);

		$retrive = $this->projectModel->viewAllItems();
		$data['val']=$retrive;
		$this->load->view('viewAllItem_v',$data);
	
	}

	public function searchWithAjax()
	{

		// echo ("fdshfghfffhfjnnkf");
		// echo ("fdshfghfffhfjnnkf");

		$Title = $this->input->GET('t1');
		$Category = $this->input->GET('c1');
		$priceFrom = $this->input->GET('fromPrice');
		$priceTo = $this->input->GET('toPrice');
		$Location1 = $this->input->GET('location');

		$query=$this->projectModel->search($Title,$Category,$priceFrom,$priceTo,$Location1);
		$data['val']=$query;
		//$this->load->view('searchResults',$data);
		foreach($query as $row)
		{
			echo "<div class='cat'>";
		    echo " <span class='style2' style='color:BLACK;'>";
	     	echo  $row->Title;
		
			echo"</span><a href='mobile.php' target='_self'><img src='http://localhost:8080/khareedLo/Images\iph6.jpg' style='width:100%;height:100%;border:0'/></a><span class='style2'>";
		echo " <span class='style2' style='color:BLACK;'>";	
	    echo $row->Price;
	    echo"</span>";
	   
	    echo"<br>";
	    
	    echo " <span class='style2' style='color:BLACK;'>";
	    echo $row->Location;
	    echo"</span>";
	   
	    echo"<br>";
	    
	    echo " <span class='style2' style='color:BLACK;'>";
	    echo $row->PhoneNo;
	    echo"</span>";
		
		echo"</span></div>";
		}



		//echo $Title;

	}


	public function webServiceGetAllAds()
	{
		$query = $this->projectModel->GetAllAds();

        $data['val'] = $query;

		$this->load->view('getAllAdsXML',$data);
	}
	
	
}
