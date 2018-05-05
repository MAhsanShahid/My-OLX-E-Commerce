<?php



class projectModel extends CI_Model
{
	function __construct (){
		parent:: __construct();
	}
	function signUp($fName,$lName,$uName,$pswrd,$email,$dob)
	{
		$data = array(
			'fName' => $fName,
			'lName' => $lName,
			'userName' => $uName,
			'password' => $pswrd,
			'email' => $email,			
			'dob' => $dob
			
			);
		$this->db->insert('signup',$data);
	}


	function signIn($uName,$pswrd)
	{
		
		$this->db->SELECT ('userName');
		 $this->db->FROM ('signup');
		  $this->db-> where ('userName',$uName);
		   $this->db-> where('password',$pswrd);
		$query = $this->db->get();
		if($query->num_rows()==1)
			return true;
		else 
			return false;
	}

		public function record_count() {
		        return $this->db->count_all("Ads");
		    }


		function viewAllItems()
		{
			$query=$this->db->query("select * from Ads");
		    return $query->result();
		}


    public function fetch_ads($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("Ads");
        if ($query->num_rows() > 0) {
        	foreach ($query->result() as $row) {
                $data[] = $row;
            }return $data;
        }return false;
    }


	function postAd($Title,$Category,$Price,$Location,$Phone,$Image,$email)
	{
		$data = array(
			'Title' => $Title,
			'Category' => $Category,
			'Price' => $Price,
			'Location' => $Location,
			'PhoneNo' => $Phone,			
			'Image' => $Image,
			'email' => $email
			
			);
		$this->db->insert('Ads',$data);
	}
	function search($Title,$Category,$From,$To,$Location)
	{
		$query=$this->db->query("select * from Ads where Title='$Title' OR Category='$Category' OR Price>='$From' AND Price<='$To' OR Location='$Location' ");
		return $query->result();
	}
	function viewAllCloth()
	{
		$query=$this->db->query("select * from Ads where Category='Clothe'");
		return $query->result();
	}
	function viewAllAnimal()
	{
		$query=$this->db->query("select * from Ads where Category='Animal'");
		return $query->result();
	}
	function viewAllVehicles()
	{
		$query=$this->db->query("select * from Ads where Category='Vehicle'");
		return $query->result();
	}
	function viewAllMobiles()
	{
		$query=$this->db->query("select * from Ads where Category='Mobile'");
		return $query->result();
	}
	function viewAllElectronics()
	{
		$query=$this->db->query("select * from Ads where Category='Electronic'");
		return $query->result();
	}
	function viewAllOtherAccess()
	{
		$query=$this->db->query("select * from Ads where Category='Others'");
		return $query->result();
	}


	function rate($email,$ratingValue)
	{
		$findExisting = $this->db->query("select rating1 from rating where email='$email' ");
		$oldRating = $findExisting->result();
		$b = key($oldRating);
		echo $b;
		echo $ratingValue;
		// $final_variable;
		// foreach($oldRating as $oldrate)
		// {
		// 	$final_variable = $oldrate->rating1;
		// 	break;
		// }

		if($findExisting->num_rows() > 0)
		{
			$newRating = $b + $ratingValue;
			$newRating1 = $newRating/2;

			echo $newRating1;
			$this->db->query("update rating set rating1 = '$newRating' where email ='$email' ");
		}

		else
		{
				$data = array(
			'email' => $email,
			'rating1' => $ratingValue
			
			);
		$this->db->insert('rating',$data);
		}

	}

	function GetAllAds()
	{
		$query = $this->db->query("select * from ads");
		return $query;
	}

	// function searchByTitle($Title)
	// {
	// 	$query=$this->db->query("select * from Ads where Title='$Title' ")
	// }
	// function searchByCategory($Category)
	// {
	// 	$query=$this->db->query("select * from Ads where Category='$Category' ")
	// }
	// function searchByPriceRange($From,$To)
	// {
	// 	$query=$this->db->query("select * from Ads where Price>='$From' AND Price<='$To' ")
	// }
	// function searchByLocation($Location)
	// {
	// 	$query=$this->db->query("select * from Ads where Location='$Location' ")
	// }
	// function searchByTitleAndCategory($Title,$Category)
	// {
	// 	$query=$this->db->query("select * from Ads where Title='$Title' AND Category='$Category' ")
	// }
	// function searchByTitleAndPrice($Title,$From,$To)
	// {
	// 	$query=$this->db->query("select * from Ads where Title='$Title' AND Price>='$From' AND Price<='$To' ")
	// }
	// function searchByTitleAndLocation($Title,$Location)
	// {
	// 	$query=$this->db->query("select * from Ads where Title='$Title' AND Location='$Location'  ")
	// }
	// function searchByTitleAndPriceAndCategory($Title,$Category,$From,$To)
	// {
	// 	$query=$this->db->query("select * from Ads where Title='$Title' AND Category='$Category' AND Price>='$From' AND Price<='$To' ")
	// }
	// function searchByTitleAndPriceAndLocation($Title,$From,$To,$Location)
	// {
	// 	$query=$this->db->query("select * from Ads where Title='$Title' AND Category='$Category'  AND Location='$Location' ")
	// }
	// function searchByTitleAndPriceAndCategoryAndLocation($Title,$Category,$From,$To,$Location)
	// {
	// 	$query=$this->db->query("select * from Ads where Title='$Title' AND Category='$Category' AND Price>='$From' AND Price<='$To' AND Location='$Location' ")
	// }


}

?>